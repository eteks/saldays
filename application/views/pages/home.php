     <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contents">
                    <h2>Saai Holidays</h2>
                    <p style="font-weight:600;">Welcome To A New World Of Tourism</p>
                    <img src="<?php echo base_url()."assets/img/"; ?>banner.jpg" alt="banner" class="banner"/>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="content">
              <h2 class="text-center" style="color:#ff9933;padding-bottom:20px;">Tour packages</h2>
                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>ONE STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_1.jpg" alt=""/>
                            </div>
                            
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_1">view</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>TWO STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_2.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_2">view</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>THREE STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_3.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_3">view</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>FOUR STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_4.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_4">view</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>FIVE STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_5.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_5">view</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>SIX STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_6.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_6">view</button>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>SEVEN STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_7.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_7">view</button>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>EIGHT STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_8.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_8">view</button>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="align-center">
                            <h4>NINE STAR</h4>                   
                            <div class="icon">
                                <img src="<?php echo base_url()."assets/img/package/"; ?>package_9.jpg" alt=""/>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#package_9">view</button>
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
        <h4 class="modal-title text-center">ONE STAR</h4>
      </div>
      <div class="modal-body">
          
           <h6 class="text-center">ONE DAY OUTING</br><span class="venue">Venue</span></br><span class="destination">CHENNAI ECR BEACH RESORT</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> Rs.1,250/-<?php } ?></h5>
           <div class="image-area pull-left">
                <img src="<?php echo base_url()."assets/img/package/"; ?>1_star.jpg" alt=""/>
           </div>
           <div class="event-desc pull-right">
                <h6>Event Stuff :</h6>
                <ul>
                    <li>TO & FRO A/C TRANSPORT</li>
                    <li>WELCOME DRINK</li>
                    <li>BREAK FAST</li>
                    <li>NON VEG LUNCH</li>
                    <li>Hi-Tea</li>
                    <li>INDOOR ACTIVITIES</li>
                    <li>BEACH ACTIVITIES </li>
                </ul>
           </div>
           <div class="clearfix"></div>
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
        <h4 class="modal-title text-center">TWO STAR</h4>
      </div>
      <div class="modal-body">
            
           <h6 class="text-center"><span class="destination">1 Night / 2 Days</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?>  Rs.2750/-<?php } ?></h5>

           <div class="image-area pull-left">
                <img src="<?php echo base_url()."assets/img/package/"; ?>2_star_1.jpg" alt=""/>
           </div>
           <div class="event-desc pull-right">
                <h6>Destinations :</h6>
                <ul>
                    <li>PONDICHERRY</li>
                    <li>KODAIKANNAL</li>
                    <li>YEARCAUD</li>
                    <li>OOTY</li>
                    <li>YEALAGIRI</li>
                    <li>MADURAI</li>
                </ul>
           </div>
           <div class="clearfix"></div>

           <div class="image-area pull-right">
                <img src="<?php echo base_url()."assets/img/package/"; ?>2_star_2.jpg" alt=""/>
           </div>
           <div class="event-desc pull-left">
            <h6>Destinations :</h6>
                <ul>
                    <li>RAMESHWARAM</li>
                    <li>KANNIYAKUMARI</li>
                    <li>KOLLIMALAI</li>
                    <li>PICHAVARAM</li>
                    <li>POLLACHI / VALPARAI</li>
                    <li>PALANI</li>
                </ul>
           </div>
           <div class="clearfix"></div>

           <div class="image-area pull-left">
                <img src="<?php echo base_url()."assets/img/package/"; ?>2_star_3.jpg" alt=""/>
           </div>
           <div class="event-desc pull-right">
                <h6>Destinations :</h6>
                <ul>
                    <li>THIRUPATHI</li>
                    <li>COCHIN/AALAPY</li>
                    <li>BANGLORE</li>
                    <li>MYSORE</li>
                    <li>HYDRABAD</li>
                </ul>
           </div>
           <div class="clearfix"></div>



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
        <h4 class="modal-title text-center">THREE STAR</h4>
      </div>
      <div class="modal-body">
           
           <h6 class="text-center"><span class="destination">2N/3D- TRAIN</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> Rs.5500 /-<?php } ?></h5>

           <div class="image-area pull-right">
                <img src="<?php echo base_url()."assets/img/package/"; ?>3_star_1.jpg" alt=""/>
           </div>
           <div class="event-desc pull-left">
            <h6>Destinations :</h6>
                <ul>
                    <li>PONDICHERRY</li>
                    <li>KODAIKANNAL</li>
                    <li>YEARCAUD</li>
                    <li>OOTY</li>
                    <li>YEALAGIRI</li>
                    <li>MADURAI</li>
                </ul>
           </div>
           <div class="clearfix"></div>

           <div class="image-area pull-left">
                <img src="<?php echo base_url()."assets/img/package/"; ?>3_star_2.jpg" alt=""/>
           </div>
           <div class="event-desc pull-right">
            <h6>Destinations :</h6>
                <ul>
                    <li>RAMESHWARAM</li>
                    <li>KANNIYAKUMARI</li>
                    <li>KOLLIMALAI</li>
                    <li>PICHAVARAM</li>
                    <li>POLLACHI / VALPARAI</li>
                    <li>PALANI</li>
                </ul>
           </div>
           <div class="clearfix"></div>

           <div class="image-area pull-right">
                <img src="<?php echo base_url()."assets/img/package/"; ?>3_star_3.jpg" alt=""/>
           </div>
           <div class="event-desc pull-left">
            <h6>Destinations :</h6>
                <ul>
                    <li>THIRUPATHI</li>
                    <li>COCHIN/AALAPY</li>
                    <li>BANGLORE</li>
                    <li>MYSORE</li>
                    <li>HYDRABAD</li>
                </ul>
           </div>
           <div class="clearfix"></div>

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
        <h4 class="modal-title text-center">FOUR STAR</h4>
      </div>
      <div class="modal-body">
       
           <h6 class="text-center"><span class="destination">3N/4D- TRAIN</span></h6>
            <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> Rs.7950/-<?php } ?></h5>
           
           <div class="image-area pull-left">
                <img src="<?php echo base_url()."assets/img/package/"; ?>4_star_1.jpg" alt=""/>
           </div>
           <div class="event-desc pull-right">
            <h6>Destinations :</h6>
                <ul>
                    <li>COORG </li>
                    <li>ALLEPPEY/KUMARAKAM </li>
                    <li>HYDERABAD</li>
                    <li>KOVALAM</li>
                    <li>OOTY</li>
                </ul>
           </div>
           <div class="clearfix"></div>

           <div class="image-area pull-right">
                <img src="<?php echo base_url()."assets/img/package/"; ?>4_star_2.jpg" alt=""/>
           </div>
           <div class="event-desc pull-left">
            <h6>Destinations :</h6>
                <ul>
                    <li>KODAIKANAL</li>
                    <li>THEKKADY/MUNNAR</li>
                    <li>SHIMOGA</li>
                    <li>CHICKMAGALUR</li>
                    <li>SHIRDI</li>
                </ul>
           </div>
           <div class="clearfix"></div>

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
        <h4 class="modal-title text-center">FIVE STAR</h4>
      </div>
      <div class="modal-body">
           
           <h6 class="text-center"><span class="destination">4N/5D- TRAIN</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> Rs.9,500/-<?php } ?></h5>
           
           <div class="image-area pull-right">
                <img src="<?php echo base_url()."assets/img/package/"; ?>5_star_1.jpg" alt=""/>
           </div>
           <div class="event-desc pull-left">
            <h6>Destinations :</h6>
                <ul>
                    <li>OOTY</li>
                    <li>CONOOR - MUDUMALAI</li>
                    <li>ALLEPPEY / KUMARAKAM</li>
                    <li>KANNIYAKUMARI</li>
                    <li>TRIVANDRUM</li>
                    <li>HYDERABAD</li>
                    <li>WARANGAL</li>
                </ul>
           </div>
           <div class="clearfix"></div>

           <div class="image-area pull-left">
                <img src="<?php echo base_url()."assets/img/package/"; ?>5_star_2.jpg" alt=""/>
           </div>
           <div class="event-desc pull-right">
            <h6>Destinations :</h6>
                <ul>
                    <li>KODAIKANAL</li>
                    <li>THEKKADY</li>
                    <li>SHIMOGA</li>
                    <li>CHICKMAGALUR</li>
                    <li>SHIRDI</li>
                    <li>MANGLORE</li>
                    <li>DHARMASALA</li>
                </ul>
           </div>
           <div class="clearfix"></div>


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
        <h4 class="modal-title text-center">SIX STAR</h4>
      </div>
      <div class="modal-body text-center">
        
            
           <h6 class="text-center"><span class="destination">3N/4D –Flight</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> RS.17500/- <?php } ?></h5>
           <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>6_star_1.jpg" alt=""/>
                <h6> JAIPUR</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>6_star_2.jpg" alt=""/>
                <h6>GOA</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>6_star_3.jpg" alt=""/>
                <h6>MUMBAI / SHIRDI</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>6_star_4.jpg" alt=""/>
                <h6>DELHI/AGRA</h6>
           </div>
          
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>6_star_7.jpg" alt=""/>
                <h6>CHIKKAMANGALORE / SHILLONG</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>6_star_8.jpg" alt=""/>
                <h6>WAYANAD / CALICUT</h6>
           </div>

      </div>
    </div>

  </div>
</div>   <!-- package_6 -->

 <!-- Modal -->
<div id="package_7" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SEVEN STAR</h4>
      </div>
      <div class="modal-body text-center">
        
            
           <h6 class="text-center"><span class="destination">3N/4D –Flight</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> Rs.25000/- <?php } ?></h5>
           <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_1.jpg" alt=""/>
                <h6>MALASIYA</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_2.jpg" alt=""/>
                <h6>SIMLA / KULLU / MANALI </h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_3.jpg" alt=""/>
                <h6>MUMBAI / SHIRIDI</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_4.jpg" alt=""/>
                <h6>ANDAMAN</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_5.jpg" alt=""/>
                <h6>DARJEELING / GANGTOK </h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_6.jpg" alt=""/>
                <h6>KASHMIR</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_7.jpg" alt=""/>
                <h6>NEPAL</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>7_star_8.jpg" alt=""/>
                <h6>CHIRAPUNJEE/ SHILLONG  </h6>
           </div>
           
      </div>
    </div>

  </div>
</div>   <!-- package_7 -->

 <!-- Modal -->
<div id="package_8" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">EIGHT STAR</h4>
      </div>
      <div class="modal-body text-center">
        
           
           <h6 class="text-center"><span class="destination">5N/6D – FLIGHT</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> RS.68000/-<?php } ?></h5>

           <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>8_star_1.jpg" alt=""/>
                <h6>SINGAPORE / MALASIYA </h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>8_star_2.jpg" alt=""/>
                <h6>MALDIVES</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>8_star_3.jpg" alt=""/>
                <h6>MAURITIUS</h6>
           </div>
           
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>8_star_5.jpg" alt=""/>
                <h6>HONGKONG / MACAU</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>8_star_6.jpg" alt=""/>
                <h6>COMBODIA / VIETNAM</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>8_star_7.jpg" alt=""/>
                <h6>KULALAMPUR / PENANG</h6>
           </div>
            
      </div>
    </div>

  </div>
</div>   <!-- package_8 -->

<!-- Modal -->
<div id="package_9" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">EIGHT STAR</h4>
      </div>
      <div class="modal-body text-center">
        
           
           <h6 class="text-center"><span class="destination">8N/9D – FLIGHT</span></h6>
           <h5 class="text-center"><?php if(isset($this->session->userdata['log_in'])) { ?> RS.1,75,000/-<?php } ?></h5>
           <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>9_star_1.jpg" alt=""/>
                <h6>LONDON</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>9_star_3.jpg" alt=""/>
                <h6>AUSTRALIA</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>9_star_5.jpg" alt=""/>
                <h6>CHINA</h6>
           </div>
            <div class="image-event-desc">
                <img src="<?php echo base_url()."assets/img/package/"; ?>9_star_7.jpg" alt=""/>
                <h6>USA</h6>
           </div>
            
      </div>
    </div>

  </div>
</div>   <!-- package_9 -->


