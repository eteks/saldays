<?php
if (isset($this->session->userdata['log_in'])) 
{        
  
?>    
<div class="container">
            <div class="row">
                <div class="col-lg-12">

                    
                </div>
            </div>
        </div>
        
        <div class="container page_content saai_page">
            <div class="row">
                <div class="contents">
                        <h3>Income</h3>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#income">Saai Family Income</button>
                        
                        <h3>Package Info</h3>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#dom_pack_train">Domestic Package - Train</button>
                        
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#dom_pack_flight">Domestic Package - Flight</button>

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#inter_pack">International Package</button>

                        <h3>Offers</h3>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#thailand">Thailand</button>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#bulk_booking">Bulk Booking</button>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#offers">Offers</button>


                        <h3>Register User <!--<button data-toggle="collapse" data-target="#edit_enduser_form">open</button>--></h3>
                    </div>
                <?php if (isset($error_message)){ 
                    echo "<p class='error_msg_reg alert alert-danger text-center'>".$error_message."</p>";
                }?>
                <?php ?>
                <form role="form" method="POST" action="<?php echo base_url(); ?>saai" class="form_submit" name="edit_enduser_form" id="edit_enduser_form" >
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
                               <option value="1" <?php echo set_select('user_package', '1',false); ?>>One Star</option>
                               <option value="2" <?php echo set_select('user_package', '2',false); ?>>Two Star</option>
                               <option value="3" <?php echo set_select('user_package', '3',false); ?>>Three Star</option>
                               <option value="4" <?php echo set_select('user_package', '4',false); ?>>Four Star</option>
                               <option value="5" <?php echo set_select('user_package', '5',false); ?>>Five Star</option>
                               <option value="6" <?php echo set_select('user_package', '6',false); ?>>Six Star</option>
                               <option value="7" <?php echo set_select('user_package', '7',false); ?>>Seven Star</option>
                               <option value="8" <?php echo set_select('user_package', '8',false); ?>>Eight Star</option>
                               <option value="9" <?php echo set_select('user_package', '9',false); ?>>Nine Star</option>
                        </select>
                    </div>

                    <div class="group text-center">    
                    <button type="submit" class="btn submit-btn btn-default">Submit</button>
                    </div>
                </form>

            </div>
        </div>
         <!-- Modal -->
<div id="income" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI FAMILY  INCOME</h4>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>AMOUNT</th>
                    <th>MEMBERS  NEEDED</th>
                    <th>TOTAL AMOUNT</th>
                    <th>TEAM BONUS</th>
                    <th>MEMBERS BONUS</th>
                    <th>ROYALTY BONUS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2999</td>
                    <td>2</td>
                    <td>5998</td>
                    <td>1500</td>
                    <td>750</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2999</td>
                    <td>4</td>
                    <td>11996</td>
                    <td>2999</td>
                    <td>0</td>
                    <td>960</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>2999</td>
                    <td>8</td>
                    <td>23992</td>
                    <td>5998</td>
                    <td>0</td>
                    <td>1760</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>2999</td>
                    <td>16</td>
                    <td>47984</td>
                    <td>11996</td>
                    <td>0</td>
                    <td>3200</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>2999</td>
                    <td>32</td>
                    <td>95968</td>
                    <td>23992</td>
                    <td>0</td>
                    <td>5760</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>2999</td>
                    <td>64</td>
                    <td>191936</td>
                    <td>47984</td>
                    <td>0</td>
                    <td>10240</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>2999</td>
                    <td>128</td>
                    <td>383872</td>
                    <td>95968</td>
                    <td>0</td>
                    <td>17920</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>2999</td>
                    <td>256</td>
                    <td>767744</td>
                    <td>191936</td>
                    <td>0</td>
                    <td>30720</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>2999</td>
                    <td>512</td>
                    <td>1535488</td>
                    <td>383872</td>
                    <td>0</td>
                    <td>51200</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>2999</td>
                    <td>1024</td>
                    <td>3070976</td>
                    <td>767745</td>
                    <td>0</td>
                    <td>92160</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>2999</td>
                    <td>2048</td>
                    <td>6141952</td>
                    <td>1535488</td>
                    <td>0</td>
                    <td>163840</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>2999</td>
                    <td>4096</td>
                    <td>12283904</td>
                    <td>3070976</td>
                    <td>0</td>
                    <td>286720</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>2999</td>
                    <td>8192</td>
                    <td>24567808</td>
                    <td>6141952</td>
                    <td>0</td>
                    <td>491520</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>2999</td>
                    <td>16384</td>
                    <td>49135616</td>
                    <td>12283904</td>
                    <td>0</td>
                    <td>819200</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>2999</td>
                    <td>32768</td>
                    <td>98271232</td>
                    <td>24567808</td>
                    <td>0</td>
                    <td>1310720</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>2999</td>
                    <td>65536</td>
                    <td>196542464</td>
                    <td>49135616</td>
                    <td>0</td>
                    <td>1966080</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>2999</td>
                    <td>131072</td>
                    <td>393084928</td>
                    <td>98271232</td>
                    <td>0</td>
                    <td>2621440</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>2999</td>
                    <td>262144</td>
                    <td>786169856</td>
                    <td>196542464</td>
                    <td>0</td>
                    <td>4980736</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>2999</td>
                    <td>524288</td>
                    <td>1572339712</td>
                    <td>393084928</td>
                    <td>0</td>
                    <td>9437184</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>2999</td>
                    <td>1048576</td>
                    <td>3144679424</td>
                    <td>786169856</td>
                    <td>0</td>
                    <td>17825792</td>
                  </tr>
                  <!--<tr>
                    <td>21</td>
                    <td>2999</td>
                    <td>2097152</td>
                    <td>6289358848</td>
                    <td>1572339712</td>
                    <td>0</td>
                    <td>6291456</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>2999</td>
                    <td>4194304</td>
                    <td>12578717696</td>
                    <td>3144679424</td>
                    <td>0</td>
                    <td>8388608</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>2999</td>
                    <td>8388608</td>
                    <td>25157435392</td>
                    <td>6289358848</td>
                    <td>0</td>
                    <td>8388608</td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td>2999</td>
                    <td>16777216</td>
                    <td>50314870784</td>
                    <td>12578717696</td>
                    <td>0</td>
                    <td>16777216</td>
                  </tr>-->

                </tbody>
              </table>
            </div><!--table-->

      </div>
    </div>

  </div>
</div>   <!-- income -->

<div id="dom_pack_flight" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI  HOLIDAYS  BY FLIGHT</h4>
        <h5 class="text-center">DOMESTIC PACKAGES</h5>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>PACKAGES</th>
                    <th>MANALI</th>
                    <th>DARJEELING</th>
                    <th>GOA</th>
                    <th>SHIRDI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>NIGHT & DAYS</th>
                    <td>7N / 8D</td>
                    <td>6N / 7D</td>
                    <td>3N / 4D</td>
                    <td>1N / 2D</td>
                  </tr>
                  <tr>
                    <th>CASH</th>
                    <td>20865</td>
                    <td>21186</td>
                    <td>13375</td>
                    <td>12305</td>
                  </tr>
                  <tr>
                    <th>EMI</th>
                    <td>23540</td>
                    <td>24075</td>
                    <td>14659</td>
                    <td>13375</td>
                  </tr>
                  <tr>
                    <th>NOVEMBER</th>
                    <td>5885</td>
                    <td>6019</td>
                    <td>3665</td>
                    <td>3344</td>
                  </tr>
                  <tr>
                    <th>DECEMBER</th>
                    <td>5179</td>
                    <td>5297</td>
                    <td>3225</td>
                    <td>2943</td>
                  </tr>
                  <tr>
                    <th>JANUARY</th>
                    <td>4943</td>
                    <td>5056</td>
                    <td>3078</td>
                    <td>2809</td>
                  </tr>
                  <tr>
                    <th>FEBRARY</th>
                    <td>4708</td>
                    <td>4815</td>
                    <td>2932</td>
                    <td>2675</td>
                  </tr>
                  <tr>
                    <th>MARCH</th>
                    <td>2825</td>
                    <td>2889</td>
                    <td>1759</td>
                    <td>1605</td>
                  </tr>
                </tbody>
              </table>
            </div><!--table-->
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> INCENTIVE FOR INTRODUCING MEMBER = 10% OF PACKAGE AMOUNT</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> INCENTIVE FOR SUPPORTING SENIOR MEMBERS IF ANY = 1% OF PACKAGE AMOUNT</p>
            <p class="text-center">(TO THE MAXIMUM OF 2 STAGES)</p>
            <p>IF 25 PACKAGES ARE BROUGHT IN 1 LOT ON EMI BASIS 1 PACKAGE FREE</p>
            <p>IF 25 PACKAGES ARE BROUGHT IN 1 LOT ON CASH BASIS = 50% OF THE PACKAGE FREE</p>
      </div>
    </div>

  </div>
</div>   <!-- package flight -->

<div id="dom_pack_train" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI  HOLIDAYS  BY TRAIN</h4>
        <h5 class="text-center">DOMESTIC PACKAGES</h5>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>PACKAGES</th>
                    <th>MANALI</th>
                    <th>DARJEELING</th>
                    <th>KERALA</th>
                    <th>OOTY</th>
                    <th>COORG</th>
                    <th>GOA</th>
                    <th>KODAIKANAL</th>
                    <th>SHIRDI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>NIGHT & DAYS</th>
                    <td>7N / 8D</td>
                    <td>5N / 6D</td>
                    <td>3N / 4D</td>
                    <td>2N / 3D</td>
                    <td>2N / 3D</td>
                    <td>3N / 4D</td>
                    <td>2N / 3D</td>
                    <td>1N / 2D</td>
                  </tr>
                  <tr>
                    <th>CASH</th>
                    <td>12840</td>
                    <td>13910</td>
                    <td>7704</td>
                    <td>5564</td>
                    <td>5885</td>
                    <td>6955</td>
                    <td>5564</td>
                    <td>5243</td>
                  </tr>
                  <tr>
                    <th>EMI</th>
                    <td>15836</td>
                    <td>16050</td>
                    <td>8881</td>
                    <td>7383</td>
                    <td>7704</td>
                    <td>8025</td>
                    <td>7383</td>
                    <td>6955</td>
                  </tr>
                  <tr>
                    <th>NOVEMBER</th>
                    <td>3959</td>
                    <td>4013</td>
                    <td>2220</td>
                    <td>1846</td>
                    <td>1926</td>
                    <td>2006</td>
                    <td>1846</td>
                    <td>1739</td>
                  </tr>
                  <tr>
                    <th>DECEMBER</th>
                    <td>3484</td>
                    <td>3531</td>
                    <td>1954</td>
                    <td>1624</td>
                    <td>1695</td>
                    <td>1766</td>
                    <td>1624</td>
                    <td>1530</td>
                  </tr>
                  <tr>
                    <th>JANUARY</th>
                    <td>3326</td>
                    <td>3371</td>
                    <td>1865</td>
                    <td>1550</td>
                    <td>1618</td>
                    <td>1685</td>
                    <td>1550</td>
                    <td>1461</td>
                  </tr>
                  <tr>
                    <th>FEBRARY</th>
                    <td>3167</td>
                    <td>3210</td>
                    <td>1776</td>
                    <td>1477</td>
                    <td>1541</td>
                    <td>1605</td>
                    <td>1477</td>
                    <td>1391</td>
                  </tr>
                  <tr>
                    <th>MARCH</th>
                    <td>1900</td>
                    <td>1926</td>
                    <td>1066</td>
                    <td>886</td>
                    <td>924</td>
                    <td>963</td>
                    <td>886</td>
                    <td>835</td>
                  </tr>
                </tbody>
              </table>
            </div><!--table-->
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> INCENTIVE FOR INTRODUCING MEMBER = 10% OF PACKAGE AMOUNT</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> INCENTIVE FOR SUPPORTING SENIOR MEMBERS IF ANY = 1% OF PACKAGE AMOUNT</p>
            <p class="text-center">(TO THE MAXIMUM OF 2 STAGES)</p>
            <p>IF 25 PACKAGES ARE BROUGHT IN 1 LOT ON EMI BASIS 1 PACKAGE FREE</p>
            <p>IF 25 PACKAGES ARE BROUGHT IN 1 LOT ON CASH BASIS = 50% OF THE PACKAGE FREE</p>
      </div>
    </div>

  </div>
</div>   <!-- package train -->

<div id="inter_pack" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SAAI  HOLIDAYS</h4>
        <h5 class="text-center">INTERNATIONAL PACKAGES</h5>
      </div>
      <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>PACKAGES</th>
                    <th>THAILAND / PUKHET</th>
                    <th>SINGPORE / MALAYSIA</th>
                    <th>MALAYSIA / LANGKAWI</th>
                    <th>SRILANKA</th>
                    <th>DUBAI</th>
                    <th>HONGKONG</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>NIGHT & DAYS</th>
                    <td>4N / 5D</td>
                    <td>5N / 6D</td>
                    <td>4N / 5D</td>
                    <td>4N / 5D</td>
                    <td>4N / 5D</td>
                    <td>4N / 5D</td>
                  </tr>
                  <tr>
                    <th>CASH</th>
                    <td>33705</td>
                    <td>59920</td>
                    <td>29960</td>
                    <td>27820</td>
                    <td>55640</td>
                    <td>64200</td>
                  </tr>
                  <tr>
                    <th>EMI</th>
                    <td>36380</td>
                    <td>63130</td>
                    <td>31565</td>
                    <td>29425</td>
                    <td>57780</td>
                    <td>67410</td>
                  </tr>
                  <tr>
                    <th>NOVEMBER</th>
                    <td>9095</td>
                    <td>15783</td>
                    <td>7891</td>
                    <td>7356</td>
                    <td>14445</td>
                    <td>16852.5</td>
                  </tr>
                  <tr>
                    <th>DECEMBER</th>
                    <td>8003.6</td>
                    <td>13889</td>
                    <td>6944</td>
                    <td>6474</td>
                    <td>12712</td>
                    <td>14830</td>
                  </tr>
                  <tr>
                    <th>JANUARY</th>
                    <td>7640</td>
                    <td>13257</td>
                    <td>6629</td>
                    <td>6179</td>
                    <td>12134</td>
                    <td>14156</td>
                  </tr>
                  <tr>
                    <th>FEBRARY</th>
                    <td>7276</td>
                    <td>12626</td>
                    <td>6313</td>
                    <td>5885</td>
                    <td>11556</td>
                    <td>13482</td>
                  </tr>
                  <tr>
                    <th>MARCH</th>
                    <td>4366</td>
                    <td>7576</td>
                    <td>3788</td>
                    <td>3531</td>
                    <td>6934</td>
                    <td>8089</td>
                  </tr>
                </tbody>
              </table>
            </div><!--table-->
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> INCENTIVE FOR INTRODUCING MEMBER = 10% OF PACKAGE AMOUNT</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> INCENTIVE FOR SUPPORTING SENIOR MEMBERS IF ANY = 1% OF PACKAGE AMOUNT</p>
            <p class="text-center">(TO THE MAXIMUM OF 2 STAGES)</p>
            <p>IF 25 PACKAGES ARE BROUGHT IN 1 LOT ON EMI BASIS 1 PACKAGE FREE</p>
            <p>IF 25 PACKAGES ARE BROUGHT IN 1 LOT ON CASH BASIS = 50% OF THE PACKAGE FREE</p>
      </div>
    </div>

  </div>
</div>   <!-- inter_pack -->
<!-- Modal -->
<div id="thailand" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <img src="<?php echo base_url().'assets/'?>img/thailand.jpg" alt=""/>
      </div>
      <div class="modal-body text-center">
        
            <h5 class="text-center">THAILAND WEEKLY OFFER</h5>

           <div class="coin-align">
                <h4>5 PACKAGE -  1G</h4>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
           </div>
           <div class="coin-align">
                <h4>10 PACKAGEe– 2G </h4>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
           </div>
           <div class="coin-align">
                <h4>20  PACKAGE– 4G</h4>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
           </div>
           <div class="coin-align">
                <h4>40 PACKAGE – 6G</h4>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
           </div>
           <div class="coin-align">
                <h4>50  PACKAGE– 8G </h4>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
           </div>
           <div class="coin-align">
                <h4>ABOVE 50  8G + PACKAGE</h4>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <img src="<?php echo base_url()."assets/img/"; ?>gold.gif" alt=""/>
                <p class"text-center"><i class="fa fa-plus" aria-hidden="true"></i></p>
                <h5 >Tour Package</h5>
           </div>            
      </div>
    </div>

  </div>
</div>   <!-- thailand -->
<!-- Modal -->
<div id="bulk_booking" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2>BULK BOOKING OFFER</h2>
      </div>
      <div class="modal-body text-center">
          <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>No Of Members Sponsored</th>
                    <th>Package Offered To You</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <td>5</td>
                    <td>YERCAUD</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>COORG / HYDERABAD</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>KODAIKANAL / ALLEPEY</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>WAYNAD / MYSORE</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>SHIRIDI / GOA /KULLU MANLAI</td>
                  </tr>
                  <tr>
                    <td>50</td>
                    <td>THAILAND / SRILANKA</td>
                  </tr>
                  <tr>
                    <td>75</td>
                    <td>SINGAPORE / MALAYSIA</td>
                  </tr>
                  <tr>
                    <td>100</td>
                    <td>HONG KONG / DUBAI</td>
                  </tr>

                </tbody>
              </table>
            </div><!--table-->
      </div>
    </div>
  </div>
</div>   <!-- bulkbooking -->



<!-- Modal -->
<div id="offers" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">ATTRACTIVE OFFERS</h4>
      </div>
      <div class="modal-body text-center">
        
            <h5 class="text-center">OTHER FOR SUCESSFUL LEADERS</h5>
            <div class="table-responsive offer-list">          
              <table class="table">
                <thead>
                  <tr>
                    <th>Target</th>
                    <th>Gifts</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <td>Rs.2,50,000/-</td>
                    <td><img src="<?php echo base_url()."assets/img/package/"; ?>offer_9.jpg" alt=""/></td>
                  </tr>
                  <tr>
                    <td>Rs.5,00,000</td>
                    <td><img src="<?php echo base_url()."assets/img/package/"; ?>offer_10.jpg" alt=""/></td>
                  </tr>
                  <tr>
                    <td>Rs.10,00,000</td>
                    <td><img src="<?php echo base_url()."assets/img/package/"; ?>offer_1.jpg" alt=""/></td>
                  </tr>
                  <tr>
                    <td>Rs.15,00,000/- </td>
                    <td><img src="<?php echo base_url()."assets/img/package/"; ?>offer_2.jpg" alt=""/></td>
                  </tr>
                  <tr>
                    <td>Rs.20,00,000/-</td>
                    <td><img src="<?php echo base_url()."assets/img/package/"; ?>offer_6.jpg" alt=""/></td>
                  </tr>
                  <tr>
                    <td>Rs.25,00,000/-</td>
                    <td><img src="<?php echo base_url()."assets/img/package/"; ?>offer_3.jpg" alt=""/></td>
                  </tr>
                  <tr>
                    <td>Rs.1,00,00,000/-</td>
                    <td><img src="<?php echo base_url()."assets/img/package/"; ?>offer_4.jpg" alt=""/></td>
                  </tr>
          

                </tbody>
              </table>
            </div><!--table-->

            <div class="text-center" style="border-top: 1px solid #d05600;">
              <h4>TEAM OF 100 MEMBERS</h4>
                <img src="<?php echo base_url()."assets/img/package/"; ?>offer_7.jpg" alt=""/>
                <h5>GRAND GALA PARTY</h5>
           </div>
            
      </div>
    </div>

  </div>
</div>   <!-- offers -->
<script>
    $(document).ready(function(){
        $('#user_dob').datepicker({format: 'yyyy-mm-dd'})
    });
</script>
<?php
}
?>
        