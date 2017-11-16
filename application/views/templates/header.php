<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saai Holidays</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/"; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"; ?>css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/font-awesome.min.css">
    <link href="<?php echo base_url()."assets/"; ?>css/style.css" rel="stylesheet">    
    <link href="<?php echo base_url()."assets/"; ?>css/magnific-popup.css" rel="stylesheet">    
    <link href="<?php echo base_url()."assets/"; ?>admin/css/datepicker.css" rel="stylesheet">   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/jquery.validate.js"></script>
    <script>
            $(document).ready(function() {
            $("#login").validate({
                    rules: {
                    username:"required",
                    password:"required"
                    },
                    submitHandler: function( form ) 
                    {  
                        var pageURL = $(location).attr("href");
                        //alert(pageURL);     
                        $.ajax({
                            url : 'login/process',
                            data : $('#login').serialize(),
                            type: "POST",
                            success : function(data)
                            {                            
                                if (data == "yes")                           
                                {
                                    window.location = 'saai';
                                }
                                else
                                {
                                    $('#log_res').html(data);
                                }//$("#signupForm").hide('slow');
                            }
                        })
                        return false;
                    }       
                }); 
        }); //  end document.ready
        </script>
  </head>
  <body>
    <header>
        <div class="container">
            <div class="row">
                <?php
                    //if(($this->uri->segment(1)=="home")||($this->uri->segment(1)=="")||($this->uri->segment(1)=="pages"))
                    //{

                ?>
                    <div class="text-right">
                        <?php
                        //print_r($this->session->userdata['log_in']);
                        // echo $this->session->userdata['log_in']['sess_id'];
                            if (isset($this->session->userdata['log_in'])) 
                            {       
                            
                            ?>
                                <a class="popup-with-zoom-anim login_button" href="<?php echo base_url(); ?>login/logout" ><i class="mdi mdi-key-variant"></i>Log Out</a>
                            <?php
                            }
                            else
                            {
                            ?>
                               <button type="button" data-toggle="modal" data-target="#myModal" class="login_button">Login</button>
                            <?php
                            }
                        ?>
                    </div>
                <?php
                   // }
                ?>
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <a href="home"><img src="<?php echo base_url().'assets/'?>img/logo.png" alt=""/></a>
                            </div>
                        </div>
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="<?php if(($this->uri->segment(1)=="home")||($this->uri->segment(1)=="")){echo "active";}?>"><a href="home">Home</a></li>   
                                <?php
                                if (isset($this->session->userdata['log_in'])) 
                                {
                                ?>        
                                    <li role="presentation" class="<?php if(($this->uri->segment(1)=="saai")||($this->uri->segment(1)=="")){echo "active";}?>"><a href="saai">Saai</a></li>               
                                <?php
                                }
                                ?>           
                                <li role="presentation" class="<?php if($this->uri->segment(1)=="about"){echo "active";}?>"><a href="about">About us</a></li>
                                <li role="presentation" class="<?php if($this->uri->segment(1)=="gallery"){echo "active";}?>"><a href="gallery">Gallery</a></li>
                                <li role="presentation" class="<?php if($this->uri->segment(1)=="contacts"){echo "active";}?>"><a href="contacts">Contact</a></li>                        
                            </ul>
                        </div>
                    </div>          
                </nav>
            </div>
        </div>
    </header>
<div class="modal fade" id="myModal"  role="dialog">

        <div class="modal-dialog  modal-sm">           
            <button type="button" class="modal_close" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
           <!--<form id="login" method="post" action="<?php //echo base_url(); ?>index.php/loger/process">-->       
           <form id="login" method="post" action="">     
                <div class="form-group">
                   <h4 class="text-center">User Login</h4>
                </div>
                 <div class="form-group">
                    <label>Username</label>
                   <input type="text" placeholder="Username" name="username">
               </div>
               <div class="form-group">
                    <label>Password</label>
                   <input type="password" placeholder="Password" name="password">
               </div>
               <div class="form-group login_btn_area">
                    <button type="submit" value="LogIn" class="btn form-control login_btn">LogIn</button>
               </div>
                <div id="log_res"></div>
           </form>

        </div>
 </div>