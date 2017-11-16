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
                $message = $this->input->post('message');     

                  $config = $this->config->load('email', TRUE);
                  $this->load->library('email', $config);  
                  //$this->email->set_newline($config['newline']);                                         
                  $this->email->from($config['smtp_user'],'Saai Holidays');
                  $this->email->to('anand@etekchnoservices.com');
                  $this->email->subject('Contact');
                  $this->email->message($message);

                  //echo $this->email->print_debugger();
                  // $this->email->display_message($data['display_message']);

                  if($this->email->send())
                  {
                      
                      $data['error_message'] = "Mail Sent Successfully!";
                  }
          }       
          else
          {
            $user=$this->session->userdata['log_in']['sess_id'];
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
                     'rules'   => 'trim|required|valid_email|is_unique[saai_end_users.user_email]'
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
                        $message = $this->load->view('admin/register_confirmation',$fields,TRUE);     
        
                        $config = $this->config->load('email', TRUE);
                        $this->load->library('email', $config);  
                        //$this->email->set_newline($config['newline']);                                         
                        $this->email->from($config['smtp_user'],'Saai Holidays');
                        $this->email->to('anand@etekchnoservices.com');
                        $this->email->subject('Registration');
                        $this->email->message($message);

                        //echo $this->email->print_debugger();
                        // $this->email->display_message($data['display_message']);

                        if($this->email->send())
                        {
                            
                            $data['error_message'] = "End User Inserted Successfully!";
                        }

                        //$smsurl = 'http://dnd.blackholesolution.com/api/sendmsg.php';
                        //$fields = array(
                          //  'user'=> '',
                            //'pass'=> '',
                            //'sender'=> '',
                            //'phone'=> $form_data['reg_Mobile'],
                            //'text'=>"Dear Customer, Thanks for registering with us in vallikodivanniarmatrimonial.in. You have completed only quick registration. You account will be activated once you done the payment with full registration.",
                            //'priority'=>'ndnd',
                            //'stype'=>'normal'
                        //);
                        //$ch = curl_init();
                        //curl_setopt($ch, CURLOPT_URL, $smsurl);
                        //curl_setopt($ch, CURLOPT_POST, count($fields));
                        //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
                        //curl_exec($ch);
                        //curl_close($ch);
                }
                else
                {
                    $data['error_message'] = "Something Went Wrong!"; 
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