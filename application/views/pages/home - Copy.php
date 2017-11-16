<?php
if (isset($this->session->userdata['log_in'])) 
{        
  // print_r($this->session->userdata['logged_in']);

?>    
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contents">
                        <h2>Register User</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container page_content">
            <div class="row">
                <?php if (isset($error_message)){ 
                    echo "<p class='error_msg_reg alert alert-danger text-center'>".$error_message."</p>";
                }?>
                <?php ?>
                <form role="form" method="POST" action="<?php echo base_url(); ?>pages" class="form_submit" name="edit_enduser_form" id="edit_enduser_form">
                 <div class="form-errors"></div>      

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" value="<?php echo set_value('first_name');?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Mobile</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="user_mobile" value="<?php echo set_value('user_mobile');?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="enduser_email" placeholder="Enter email id" name="user_email" value="<?php echo set_value('user_email');?>">
                    </div>

                    

                    <div class="form-group">
                        <label for="exampleInputEmail1">Date Of Birth</label>
                        <input type="text" class="form-control" id="user_dob" placeholder="Enter dob" name="user_dob" value="<?php echo set_value('user_dob');?>">
                    </div>
                    
                    <div class="form-group">                     
                        <label for="sel_a">Package</label>
                        <select name="user_package" id="sel_package" class="product-type-filter form-control city_act" >
                               <option value="" >Select Package</option>
                               <option value="1" <?php echo set_select('user_package', '1',false); ?>>Saai Infant</option>
                               <option value="2" <?php echo set_select('user_package', '2',false); ?>>Saai Kids</option>
                               <option value="3" <?php echo set_select('user_package', '3',false); ?>>Saai Children</option>
                               <option value="4" <?php echo set_select('user_package', '4',false); ?>>Saai Youth</option>
                               <option value="5" <?php echo set_select('user_package', '5',false); ?>>Saai Parent</option>
                               <option value="6" <?php echo set_select('user_package', '6',false); ?>>Saai Grand Parent</option>
                        </select>
                    </div>

                    <div class="group text-center">    
                    <button type="submit" class="btn submit-btn btn-default">Submit</button>
                    </div>
                </form>

            </div>
        </div>
<?php
}
else
{
?>
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contents">
                    <h2>Tour Packages</h2>
                    <p style="font-weight:600;">A Passion To Travel On The Benefit</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="content">

                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>Saai Infant</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_1.jpg" alt=""/>
                            </div>
                            <p>
                                <i class="fa fa-inr" aria-hidden="true"></i> 5500/-
                            </p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_1">view</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>Saai Kids</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_2.jpg" alt=""/>
                            </div>
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 7550/-
                            </p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_2">view</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>Saai Children</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_3.jpg" alt=""/>
                            </div>
                            <p>
                                <i class="fa fa-inr" aria-hidden="true"></i> 17500/-
                            </p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_3">view</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>Saai Youth</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_4.jpg" alt=""/>
                            </div>
                            <p>
                                <i class="fa fa-inr" aria-hidden="true"></i> 28500/-
                            </p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_4">view</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>Saai Parent</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_5.jpg" alt=""/>
                            </div>
                            <p>
                                <i class="fa fa-inr" aria-hidden="true"></i> 68000/-
                            </p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_5">view</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>Saai Grand Parent</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_6.jpg" alt=""/>
                            </div>
                            <p>
                                <i class="fa fa-inr" aria-hidden="true"></i> 195000/-
                            </p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_6">view</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

 <!-- Modal -->
<div id="package_1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI INFANT FAMILY  PACKAGE</h4>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NIGHT / DAYS</th>
                    <th>DESTINATION</th>
                    <th>NO.OF PEOPLE</th>
                    <th>PACKAGE COST</th>
                    <th>MODE</th>
                    <th>BOOKING DAYS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>1N/2D</td>
                    <td>OOTY</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    </td>
                    <td>2</td>
                    <td>1N/2D</td>
                    <td>OOTY</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>1N/2D</td>
                    <td>YERCAUD</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>1N/2D</td>
                    <td>COORG</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>1N/2D</td>
                    <td>ALLEPPEY/KUMARAKAM</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>1N/2D</td>
                    <td>HYDERABAD/RAMOJI FILM CITY</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>1N/2D</td>
                    <td>MADURAI/RAMESWARAM</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>1N/2D</td>
                    <td>KANYAKUMARI</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>1N/2D</td>
                    <td>POLLACHI/VALPARAI</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>1N/2D</td>
                    <td>KOVALAM</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>1N/2D</td>
                    <td>THEKKADY/MUNNAR</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>1N/2D</td>
                    <td>MYSORE/BANGALORE</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>1N/2D</td>
                    <td>TIRUPATHI</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>1N/2D</td>
                    <td>SHIMOGA</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>1N/2D</td>
                    <td>CHICKMAGALUR</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>1N/2D</td>
                    <td>SHIRDI</td>
                    <td>3</td>
                    <td>3500</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                </tbody>
              </table>
            </div><!--table-->

      </div>
    </div>

  </div>
</div>   <!-- package_1 -->

 <!-- Modal -->
<div id="package_2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI KIDS FAMILY PACKAGE</h4>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NIGHT / DAYS</th>
                    <th>DESTINATION</th>
                    <th>NO.OF PEOPLE</th>
                    <th>PACKAGE COST</th>
                    <th>MODE</th>
                    <th>BOOKING DAYS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2N/3D</td>
                    <td>OOTY</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    </td>
                    <td>2</td>
                    <td>2N/3D</td>
                    <td>OOTY</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>3DELHI/AGRA</td>
                    <td>2N/3D</td>
                    <td>YERCAUD</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>2N/3D</td>
                    <td>COORG</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>2N/3D</td>
                    <td>ALLEPPEY/KUMARAKAM</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>2N/3D</td>
                    <td>HYDERABAD/RAMOJI FILM CITY</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>2N/3D</td>
                    <td>MADURAI/RAMESWARAM</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>2N/3D</td>
                    <td>KANYAKUMARI</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>2N/3D</td>
                    <td>POLLACHI/VALPARAI</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>2N/3D</td>
                    <td>KOVALAM</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>2N/3D</td>
                    <td>THEKKADY/MUNNAR</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>2N/3D</td>
                    <td>MYSORE/BANGALORE</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>110</td>
                    <td>2N/3D</td>
                    <td>TIRUPATHI</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>2N/3D</td>
                    <td>SHIMOGA</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>2N/3D</td>
                    <td>CHICKMAGALUR</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>2N/3D</td>
                    <td>SHIRDI</td>
                    <td>10</td>
                    <td>7550</td>
                    <td>TRAIN</td>
                    <td>60</td>
                  </tr>
                </tbody>
              </table>
            </div><!--table-->

      </div>
    </div>

  </div>
</div>   <!-- package_2 -->

 <!-- Modal -->
<div id="package_3" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI CHILDREN FAMILY PACKAGE</h4>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NIGHT / DAYS</th>
                    <th>DESTINATION</th>
                    <th>NO.OF PEOPLE</th>
                    <th>PACKAGE COST</th>
                    <th>MODE</th>
                    <th>BOOKING DAYS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>3N/4D</td>
                    <td>JAIPUR</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    </td>
                    <td>2</td>
                    <td>3N/4D</td>
                    <td>GOA</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>3N/4D</td>
                    <td>DELHI/AGRA</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>3N/4D</td>
                    <td>MUMBAI/SHIRDI</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>3N/4D</td>
                    <td>DARJEELING/GANGTOK</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>3N/4D</td>
                    <td>ANDAMAN</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>3N/4D</td>
                    <td>CHICKMANGALORE/SHILLONG</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>3N/4D</td>
                    <td>WAYANAD/CALICUT</td>
                    <td>15</td>
                    <td>17500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>

                </tbody>
              </table>
            </div><!--table-->

      </div>
    </div>

  </div>
</div>   <!-- package_3 -->

 <!-- Modal -->
<div id="package_4" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI YOUTH FAMILY PACKAGE (Domestic / International)</h4>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NIGHT / DAYS</th>
                    <th>DESTINATION</th>
                    <th>NO.OF PEOPLE</th>
                    <th>PACKAGE COST</th>
                    <th>MODE</th>
                    <th>BOOKING DAYS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>3N/4D</td>
                    <td>MALAYSIA</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    </td>
                    <td>2</td>
                    <td>3N/4D</td>
                    <td>ANDAMANS</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>3N/4D</td>
                    <td>KASHMIR</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>3N/4D</td>
                    <td>NEPAL</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>3N/4D</td>
                    <td>SHIMLA-KULLU-MANALI</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>3N/4D</td>
                    <td>DARJEELING-GANGTOK</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>3N/4D</td>
                    <td>CHICKMANGALORE/SHILLONG</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>3N/4D</td>
                    <td>MUMBAI-SHIRDI</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>3N/4D</td>
                    <td>JAIPUR</td>
                    <td>25</td>
                    <td>28500</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>

                </tbody>
              </table>
            </div><!--table-->

      </div>
    </div>

  </div>
</div>   <!-- package_4 -->

 <!-- Modal -->
<div id="package_5" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI PARENT  PACKAGE (International)</h4>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NIGHT / DAYS</th>
                    <th>DESTINATION</th>
                    <th>NO.OF PEOPLE</th>
                    <th>PACKAGE COST</th>
                    <th>MODE</th>
                    <th>BOOKING DAYS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>5N/6D</td>
                    <td>SINGAPORE-MALAYSIA</td>
                    <td>50</td>
                    <td>68000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    </td>
                    <td>2</td>
                    <td>5N/6D</td>
                    <td>MALDIVES</td>
                    <td>50</td>
                    <td>68000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>5N/6D</td>
                    <td>MAURITIUS</td>
                    <td>50</td>
                    <td>68000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>5N/6D</td>
                    <td>HONGKONG/MACAU</td>
                    <td>50</td>
                    <td>68000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>5N/6D</td>
                    <td>COMBODIA/VIETNAM</td>
                    <td>50</td>
                    <td>68000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>5N/6D</td>
                    <td>KULALUMPUR/LANGKAWI</td>
                    <td>50</td>
                    <td>68000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>5N/6D</td>
                    <td>KULALUMPUR/PENANG</td>
                    <td>50</td>
                    <td>68000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                </tbody>
              </table>
            </div><!--table-->

      </div>
    </div>

  </div>
</div>   <!-- package_5 -->

 <!-- Modal -->
<div id="package_6" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI GRAND PARENT PACKAGE (International)</h4>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>NIGHT / DAYS</th>
                    <th>DESTINATION</th>
                    <th>NO.OF PEOPLE</th>
                    <th>PACKAGE COST</th>
                    <th>MODE</th>
                    <th>BOOKING DAYS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>8N/9D</td>
                    <td>EUROPE</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    </td>
                    <td>2</td>
                    <td>8N/9D</td>
                    <td>CRUIZE</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>8N/9D</td>
                    <td>AUSTRALIA</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>8N/9D</td>
                    <td>NEWZEALAND</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>8N/9D</td>
                    <td>CHINA</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>8N/9D</td>
                    <td>JAPAN</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>8N/9D</td>
                    <td>U.S.A</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>8N/9D</td>
                    <td>CANADA</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>8N/9D</td>
                    <td>GREECE</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>8N/9D</td>
                    <td>ICELAND</td>
                    <td>100</td>
                    <td>165000</td>
                    <td>FLIGHT</td>
                    <td>60</td>
                  </tr>

                </tbody>
              </table>
            </div><!--table-->

      </div>
    </div>

  </div>
</div>   <!-- package_6 -->

<?php    
}
?>
<script>
    $(document).ready(function(){
        $('#user_dob').datepicker({format: 'yyyy-mm-dd'})
    });
</script>