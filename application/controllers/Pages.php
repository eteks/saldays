<?php
class Pages extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usersmodel');
        // Load form helper library
        $this->load->helper('url');
         $this->load->library('email');     
         $this->load->library('session');
        // Load form validation library
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Kolkata');
    }
    public function common($page = 'home')
    {
    	if(! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }	        
        
         $data = array();
        $data['title'] = ucfirst($page); // Capitalize the first letter
        if(!empty($_POST))
        {

          if($this->input->post('contact')==1)
          {
                  $fields = array(
                  'first_name' => $this->input->post('name'),
                  'user_mobile' => $this->input->post('mobile'),
                  'user_email' => $this->input->post('email'),           
                  'message' => $this->input->post('message'),
                  );
                  $message = $this->load->view('templates/contact',$fields,TRUE);     
                  
                  $this->config->load('email', true);
                  $emailsetup = $this->config->item('email');
                  $this->load->library('email', $emailsetup);
                  $this->email->initialize($emailsetup); 
                  $this->email->from($this->input->post('contact'));
                  $this->email->to($emailsetup['username']);
                  $this->email->subject('Contact Form');
                  $this->email->message($message);
                  if($this->email->send())
                  {                      
                     echo "yes";
                  }
          }       
          else
          {
            $user=$this->session->userdata['log_in']['sess_id'];
            $user_email=$this->session->userdata['log_in']['sess_mail_id'];
              function random_password() 
              {
                  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                  $password = array(); 
                  $alpha_length = strlen($alphabet) - 1; 
                  for ($i = 0; $i < 8; $i++) 
                  {
                      $n = rand(0, $alpha_length);
                      $password[] = $alphabet[$n];
                  }
                  return implode($password); 
              }

            $errors = '';
            
            $validation_rules = array(

              array(
                     'field'   => 'first_name',
                     'label'   => 'First Name',
                     'rules'   => 'trim|required|min_length[5]|max_length[10]'
                  ),
              array(
                     'field'   => 'user_mobile',
                     'label'   => 'Mobile',
                     'rules'   => 'trim|required|min_length[10]|max_length[10]'
                  ), 
                array(
                     'field'   => 'user_email',
                     'label'   => 'Email',
                     'rules'   => 'trim|required|valid_email'
                  ), 
               
              array(
                     'field'   => 'user_dob',
                     'label'   => 'Date Of Birth',
                     'rules'   => 'trim|required'
                  ),
       
              array(
                     'field'   => 'user_package',
                     'label'   => 'Package',
                     'rules'   => 'trim|required'
                  ),
               
             
            );
            $this->form_validation->set_rules($validation_rules);
            if ($this->form_validation->run() == FALSE) 
            {
                foreach($validation_rules as $row){
                    $field = $row['field'];          //getting field name
                    $error = form_error($field);    //getting error for field name
                                                    //form_error() is inbuilt function
                    //if error is their for field then only add in $errors_array array
                    if($error){
                        $data['error_message'] = strip_tags($error);
                        break;
                    }
                }
            }
            else
            {
                $fields = array(
                'user_reg_by' => $user,
                'first_name' => $this->input->post('first_name'),
                'user_mobile' => $this->input->post('user_mobile'),
                'user_email' => $this->input->post('user_email'),
                'user_password' => random_password(),               
                'user_dob' => $this->input->post('user_dob'),
                'user_package' => $this->input->post('user_package'),
                'user_status' => 1,
                'user_createddate' => date('Y-m-d'),
                );

                $result = $this->usersmodel->add_end_users($fields);
                if($result)
                {
                          $fields['result']=$result;
                          $message = $this->load->view('admin/register_confirmation',$fields,TRUE);     
                          $this->config->load('email', true);
                          $emailsetup = $this->config->item('email');
                          $this->load->library('email', $emailsetup);
                          $to_email = $fields['user_email'];
                          $subject = 'Registration';
                          $this->email->initialize($emailsetup); 
                          $this->email->from($emailsetup['username'], 'Saai Holidays');
                          $this->email->to($to_email);
                          $this->email->subject($subject);
                          $this->email->message($message);

                        //echo $this->email->print_debugger();
                        // $this->email->display_message($data['display_message']);
                        if($this->email->send())
                        {
                            $message = $this->load->view('admin/register_admin_confirmation',$fields,TRUE); 
                            $this->email->from($fields['user_email'], 'Saai Holidays');
                            $this->email->to($emailsetup['username']);
                            $this->email->subject($subject);
                            $this->email->message($message);
                            if($this->email->send())
                            {
                                  $this->load->view('pages/sendsms');
                                  $sendsms = new Sendsms("http://alerts.maxwellsms.com/api", "A5e24450f7e3297df048b257204e76d89", "SaaiRG");
                                  $text="Successfully registered with Saai Holidays.Please use the login details username:".$result." Password:".$fields['user_password'];
                                  $sendsms->send_sms($fields['user_mobile'], $text,'json');
                                 // $this->form_validation->clear_field_data();
                                  $data['error_message'] = "User Added Successfully!";                                
                              
                            }
                        }
                        
                }
                else
                {
                    $data['error_message'] = "Can not Add User Below"; 
                }
                //$page="home";
            }
        }
      }
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
   
}