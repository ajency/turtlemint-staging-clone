<?php
/**
  Template Name: Home Page Reskin
 */

get_header('tmhomereskin');
?>

    <!-- ======= Navbar End ======= -->	
    <div class="row-2 main-banner">
        <div class="container ">
            <div class="row lg-device">
                <!-- large screen row start -->		
                <div class="col-6 first-column" style="">
                    <div class="main-banner-txt">
                    <h2 class="main-banner-txt-header1" style="/*line-height: 54px;*/">The  <span  style="color:#009F69">Futuristic Way</span> <br class="d-none d-md-block">To Buy <span  style="color:#009F69">Insurance</span></h2>
                    </div>

                    <div class="tm-border-box d-none d-lg-block d-sm-none d-md-block">
                        <!-- start show/hide div -->
                        <!--<div class="d-none d-lg-block d-sm-none d-md-none">-->
                        <div class="d-none d-lg-block d-sm-none d-md-block">
                            <p class="main-banner-txt-header2 " style=" ">Select type of insurance </p>
                            <div class="banner-crd" style="display:flex;">						
                                <!--<div class="col-lg-2 col-md-3 col-6 mb-3 bannercrd-img">-->
                                <div class="bannercrd-img">
                                    <div class="banner-img">
                                    <label class="select-type-health-desk">
                                        <!-- <input class="radio-grp" type="radio" name="radio-btns" value="health">
                                        <img class="health-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-health.svg" onClick="changeImage('health')"> -->
                                        <img class="health-img" onClick="changeImage('health')">
                                        <img class="d-none no-lazy" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-health-checked.svg">							
                                    </label>
                                    <p>Health</p>
                                    </div>
                                </div>
                                <div class="bannercrd-img">
                                    <div class="banner-img">
                                    <label class="select-type-life-desk">
                                        <!-- <input class="radio-grp" type="radio" name="radio-btns" value="life">
                                        <img class="life-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-life.svg" onClick="changeImage('life')"> -->
                                        <img class="life-img" onClick="changeImage('life')">
                                        <img class="d-none no-lazy" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-life-checked.svg">	
                                    </label>
                                    <p>Life</p>
                                    </div>
                                </div>
                                <div class="bannercrd-img">
                                    <div class="banner-img">
                                    <label class="select-type-bike-desk">
                                        <!-- <input class="radio-grp" type="radio" name="radio-btns" value="bike">
                                        <img class="bike-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-bike.svg" onClick="changeImage('bike')"> -->
                                        <img class="bike-img" onClick="changeImage('bike')">
                                        <img class="d-none no-lazy" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-bike-checked.svg">	
                                    </label>
                                    <p>Bike</p>
                                    </div>
                                </div>
                                <div class="bannercrd-img">
                                    <div class="banner-img banner-img-life-mid">
                                    <label class="select-type-car-desk">
                                        <!-- <input class="radio-grp" type="radio" name="radio-btns" value="car">
                                        <img class="car-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-car.svg" onClick="changeImage('car')"> -->
                                        <img class="car-img" onClick="changeImage('car')">
                                        <img class="d-none no-lazy" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-car-checked.svg">
                                    </label>
                                    <p>Car</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end show/hide div -->
                        <!-- <div class="row d-none d-lg-block d-sm-none d-md-none" style="margin-top: 50px;margin-left: 0px"> -->
                        <div class="row error-msg-div d-none d-lg-block d-sm-none d-md-block" style="">
                        <p class="error-msg" style="visibility: hidden;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;letter-spacing: 0.01em;color: #FF3B30;">
                            Please select type of insurance to proceed to the next step
                        </p>
                        </div>
                        <!-- Buttons -->
                        <div class="cta-btns d-none d-lg-block d-sm-none d-md-block" style="">
                        <!-- <div class="d-none d-lg-block d-sm-none d-md-none" style=""> -->
                        <div class="row-mid-new">
                            <div class="btns-mid ">
                                <button onclick="changeBtn('redirect')" type="button" class="btn  btn-lg" style="background: #F4C061;color: #333333; ">Get a Quote</button>
                                <p style=""><span style="font-weight: 700;">45+ Insurer</span><br><span style="">companies online</span></p>
                            </div>
                            <div class="btns-mid or" style="line-height: 3;">
                                <span style="">or</span>
                            </div>
                            <div class="btns-mid ">
                                <button onclick="changeBtn('popup')" type="button" class="btn  btn-lg" style="background:#00A364;color: #FFFFFF;">Find Advisor</button>
                                <p style=""><span style="font-weight: 700;">2.7 Lakh+</span><br><span style="font-weight: 500;">Turtlemint advisors</span></p>
                            </div>
                        </div>
                        </div>
                        <!-- Buttons -->
                    </div>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog ">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal Body start -->
                            <div class="modal-body">
                                <div class="row">
                                <div class="col">
                                    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/location.png" alt="Location" style="display:block; margin: 0 auto;" />
                                    <p style="margin: 10px auto;font-family: 'Montserrat';font-style: normal;font-weight: 700;font-size: 22px;line-height: 27px;text-align: center;color: #121617;">Find an advisor near you!</p>
                                    <p style="font-family: 'Montserrat';font-style: normal;font-weight: 400;font-size: 14px;line-height: 20px;text-align: center;color: #4D5556;">Enter your Pincode or give access to your location so we can show you advisors in your area</p>
                                </div>
                                </div>
                                <form name="popupadvisorhealthform" id="popupadvisorhealthform" method=post action="https://www.hashemian.com/tools/form-post-tester.php/pincodeadvisorhealth" >
                                <label for="pincodeadvisorhealth" style="font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 14px;line-height: 20px;color: #4D5556;">Pincode</label><br>
                                <input class="form-control form-control-lg" type="number" id="pincodeadvisorhealth" name="pincodeadvisorhealth" value="" placeholder="Enter Pincode" max="999999" min="100000" maxlength="6" required><br>
                                <input  class="btn btn-lg" id="popupadvisorhealthformsubmit" name="popupadvisorhealthformsubmit" type="submit" value="Submit"/>
                                </form>
                                <form name="popupadvisorlifeform" id="popupadvisorlifeform" method=post action="https://www.hashemian.com/tools/form-post-tester.php/pincodeadvisorlife" >
                                <label for="pincodeadvisorlife">Pincode</label><br>
                                <input class="form-control form-control-lg" type="number" id="pincodeadvisorlife" name="pincodeadvisorlife" value="" placeholder="Enter Pincode" max="999999" min="100000" maxlength="6" required><br>
                                <input  class="btn btn-lg" id="popupadvisorlifeformsubmit" name="popupadvisorlifeformsubmit" type="submit" value="Submit"/>
                                </form>
                                <form name="popupadvisorbikeform" id="popupadvisorbikeform" method=post action="https://www.hashemian.com/tools/form-post-tester.php/pincodeadvisorbike" >
                                <label for="pincodeadvisorbike">Pincode</label><br>
                                <input class="form-control form-control-lg" type="number" id="pincodeadvisorbike" name="pincodeadvisorbike" value="" placeholder="Enter Pincode" max="999999" min="100000" maxlength="6" required><br>
                                <input  class="btn btn-lg" id="popupadvisorbikeformsubmit" name="popupadvisorbikeformsubmit" type="submit" value="Submit"/>
                                </form>
                                <form name="popupadvisorcarform" id="popupadvisorcarform" method=post action="https://www.hashemian.com/tools/form-post-tester.php/pincodeadvisorcar" >
                                <label for="pincodeadvisorcar">Pincode</label><br>
                                <input class="form-control form-control-lg" type="number" id="pincodeadvisorcar" name="pincodeadvisorcar" value="" placeholder="Enter Pincode" max="999999" min="100000" maxlength="6" required><br>
                                <input  class="btn btn-lg" id="popupadvisorcarformsubmit" name="popupadvisorcarformsubmit" type="submit" value="Submit"/>
                                </form>
                                <!--<button type="button" class="btn btn-lg" data-dismiss="modal">Submit</button>-->
                            </div>
                            <!-- Modal Body end -->
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>-->
                        </div>
                    </div>
                    </div>
                    <!-- Modal -->
                </div>
                <div class="col-6 slider-column">
                    <!-- Home slider -->
                    <div class="home-slider-main">
                    <div class="slider-home-banner">
                        <div class="">
                            <div class="">
                                <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/car-insurance.png" class="" width="" height="auto" frameborder="0" alt="Car Insurance" title="Car Insurance" /></a>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <a href="#"> <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/health-insurance.png" class="" width="" height="auto" frameborder="0" alt="Health Insurance" title="Health Insurance" /></a>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/life-insurance.png" class="" width="" height="auto" frameborder="0" alt="Life Insurance" title="Life Insurance" /></a>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <a href="#"> <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/car-bike-insurance.png" class="" width="" height="auto" frameborder="0" alt="Bike Insurance" title="Bike Insurance" /></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Home slider -->	
                </div>
            </div>
            <!-- large screen row end -->
            <div class="row sm-device col border-box-wrap-mobile" style="margin-top: -35px">
                <!-- small screen row start -->

                <div class="tm-border-box d-lg-none d-sm-block d-md-none">
                    <!-- <div class="d-lg-none d-sm-block d-md-block"> -->
                    <div class="d-lg-none d-sm-block d-md-none">
                        <p class="main-banner-txt-header2 " style=" ">Select type of insurance </p>
                        <div class="banner-crd" style="display:flex;">
                        <br>						
                        <!--<div class="col-lg-2 col-md-3 col-6 mb-3 bannercrd-img">-->
                        <div class="bannercrd-img">
                            <div class="banner-img">
                                <label class="select-type-health-mob">
                                    <!-- <input class="radio-grp" type="radio" name="radio-btns" value="health">
                                    <img class="health-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-health.svg"> -->
                                    <img class="health-img" onClick="changeImage('health')">
                                </label>
                                <p>Health</p>
                            </div>
                        </div>
                        <div class="bannercrd-img">
                            <div class="banner-img">
                                <label class="select-type-life-mob">
                                    <!-- <input class="radio-grp" type="radio" name="radio-btns" value="life">
                                    <img class="life-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-life.svg" onClick="changeImage('life')"> -->
                                    <img class="life-img" onClick="changeImage('life')">
                                </label>
                                <p>Life</p>
                            </div>
                        </div>
                        <div class="bannercrd-img">
                            <div class="banner-img">
                                <label class="select-type-bike-mob">
                                    <!-- <input class="radio-grp" type="radio" name="radio-btns" value="bike">
                                    <img class="bike-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-bike.svg" onClick="changeImage('bike')"> -->
                                    <img class="bike-img" onClick="changeImage('bike')">
                                </label>
                                <p>Bike</p>
                            </div>
                        </div>
                        <div class="bannercrd-img">
                            <div class="banner-img banner-img-life-mid">
                                <label class="select-type-car-mob">
                                    <!-- <input class="radio-grp" type="radio" name="radio-btns" value="car">
                                    <img class="car-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-car.svg" onClick="changeImage('car')"> -->
                                    <img class="car-img" onClick="changeImage('car')">
                                </label>
                                <p>Car</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- end show/hide div -->
                    <!--</div>-->
                    <div class="d-lg-none d-sm-block d-md-none" style="">
                        <p class="error-msg error-msg-mb" style="visibility: hidden;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 12px;line-height: 17px;letter-spacing: 0.01em;color: #FF3B30;">
                        Please select type of insurance to proceed to the next step
                        </p>
                    </div>
                    <!-- Buttons -->
                    <div class="d-lg-none d-sm-block d-md-none" style="">
                        <div class="row-mid-new">
                        <div class="btns-mid ">
                            <button onclick="changeBtn('redirect')" type="button" class="btn  btn-lg" style="background: #F4C061;border-radius: 8px;color: #333333; margin-bottom: 9px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 14px;padding: 16px 26px 15px 29px;">Get a Quote</button>
                            <p style="font-family: 'Montserrat';font-style: normal;font-size: 12px;line-height: 18px;letter-spacing: 0.01em;"><span style="font-weight: 700;">45+ Insurer</span><br><span style="font-weight: 500;">companies online</span></p>
                        </div>
                        <div class="btns-mid" style="line-height: 3;">
                            <span style="font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;color: #000000;">or</span>
                        </div>
                        <div class="btns-mid ">
                            <button onclick="changeBtn('popup')" type="button" class="btn  btn-lg" style="background: #00A364;border-radius: 8px;color: #FFFFFF;margin-bottom: 9px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 14px;line-height: 17px;padding: 16px 29px 18px 30px;">Find Advisor</button>
                            <p style="font-family: 'Montserrat';font-style: normal;font-size: 12px;line-height: 18px;letter-spacing: 0.01em;"><span style="font-weight: 700;">2.7 Lakh+</span><br><span style="font-weight: 500;">Turtlemint advisors</span></p>
                        </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                </div>
            </div>
            <!-- small screen row end -->
            <!--	</div>
                </div>-->
        </div>
    </div>
    <div class="container home-whyadvisor-container">
    <div class="home-whyadvisor-txt text-center" >
        <p>Why choose <span style="color:#009F69">Turtlemint</span></p>
    </div>
    <div class="row home-whyadvisor-row">
        <div class="home-whyadvisor">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-whyadvisor-01.svg" class="home-whyadvisor-img" width="150" height=""  />
            <p>Unbiased Advice<br> From Experts Near You</p>
        </div>
        <div class="home-whyadvisor">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-whyadvisor-02.svg" class="home-whyadvisor-img" width="150" height=""  />
            <p>40 Lakh+ <br>Happy Customers</p>
        </div>
        <div class="home-whyadvisor">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-whyadvisor-03.svg" class="home-whyadvisor-img" width="150" height=""  />
            <p>Hassle-Free <br>Claim Assistance</p>
        </div>
        <div class="home-whyadvisor">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-whyadvisor-04.svg" class="home-whyadvisor-img" width="150" height=""  />
            <p>Easy Policy <br>Renewal</p>
        </div>
    </div>
    <div class="become-psop d-lg-none d-sm-block d-md-block">
		<p class="txt-1">Join india's largest advsior network</p>
		<div class="psop-btn">
			<p class="btn" onclick="location.href='https://turtlemintpro.onelink.me/vFlk/omwbuzoq';">Become A POSP with us</p>	
		</div>
	</div>
    </div>
    <!-- ======= Main Banner End ======= -->
    <!-- <div class="row-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-advisor">
                        <div class="adv-img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/grp01.png">
                        </div>
                        <div class="adv-content">
                            <h5><a href="https://turtlemintpro.onelink.me/vFlk/1aae1fe7" target="_blank">Become a Turtlemint Advisor</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ======= Too Many Options Can Make End ======= -->
    <div class="row-2">
        <div class="container secondary-banner padd-tb-50 d-none">
            <!-- <h3 class="custom-become-part">Become Part Of <br class="d-block d-sm-none">The Evergrowing <br class="d-block d-sm-none">Turtlemint Family</h3> -->
			<h3 class="custom-become-part">Connecting customers and advisors across the country.</h3>
            <div class="row partner-row padd-tb-30">
                <div class="col-xl-3 col-lg-2"></div>
				<div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="custom-become-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p1.png" />
                        <h3>40 Lakh+</h3>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="custom-become-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p2.png" />
                        <h3>2.7 Lakh+</h3>
                        <p>Advisors</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="custom-become-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p3.png" class="img-insurance"/>
                        <h3>45+</h3>
                        <p>Insurance Partners</p>
                    </div>
                </div>
                <div class="col-lg-3"></div>

            </div>
        </div>
    </div>

    <!-- ======= Become A Turtlemint Advisor End ======= -->
    <div class="row-2 video-row">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5 col-md-6">
                    <!-- <div class="custom-many-optns">
                        <h3>Too Many Options Can Make It Tough to Choose a Policy.</h3>
                        <h4>We have tried to simplify<br>it for you.</h4>
                    </div> -->
                    <img class="d-none d-lg-block d-sm-none d-md-none" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/stress-free-claims.webp"  frameborder="0" alt ="Stress free claims" title="Stress free claims" />
					<img class="d-none d-md-block d-sm-none d-lg-none" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/stress-free-claims.webp"   frameborder="0" alt ="Stress free claims" title="Stress free claims" />
					<img style="margin:0 auto;display: block; padding-bottom: 40px;" class="d-sm-block d-md-none d-lg-none" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/stress-free-claims.webp"   frameborder="0" alt ="Stress free claims" title="Stress free claims" />
                </div>

                <!-- Video slider visible only on mobile -->
                                <div class="video-mobile col-sm-12 col-md-6 d-block d-lg-none">
                    <div class="slider slider-nav">
                        <div class="col-md-12">
                            <div class="custom-video-crd video-home-1">
                                <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-video-1.webp" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
                                <h5>Make Your Claim Settlement Process Hassle Free</h5>
                                <p>Lets understand how Turtlemint helps you on all the steps of your claim process</p>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom-video-crd video-home-2">
                               <a href="#"> <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-video-2.webp" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
                               <h5>Easiest Way of Selecting a Perfect Insurance Plan</h5>
                                <p>Use Turtlemint to choose the insurance plan for all your needs</p>
                            </div>
                        </div>                        
                    </div>
                </div> 
                <!--  -->			
				
				

                <div class="col-md-3 d-none d-lg-block"><!-- Hidden on xs -->
                    <div class="custom-video-crd video-home-1">
                       <a href="#"> <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-video-1.webp" class="custom-video-crd-img"  width="100%" height="auto" frameborder="0" /></a>
                       <h5>Make Your Claim Settlement Process Hassle Free</h5>
                        <p>Lets understand how Turtlemint helps you on all the steps of your claim process</p>

                        
                    </div>
                </div>

                <div class="col-md-3 d-none d-lg-block"><!-- Hidden on xs -->
                    <div class="custom-video-crd video-home-2">
                        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-video-2.webp" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
                        
                        <h5>Easiest Way of Selecting a Perfect Insurance Plan</h5>
                        <p>Use Turtlemint to choose the insurance plan for all your needs</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="row-2 padd-btm d-none d-sm-block"> --><!-- Hidden on xs -->
	<!-- <div class="row-2 padd-btm"> --><!-- visible on all devices -->
    <div class="row-2"><!-- visible on all devices -->
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <a class="btn-watch-more d-none" target="_blank" href="https://www.youtube.com/c/InsuranceGyan">Watch More Videos</a>
                </div>
            </div>
        </div>
    </div>    
    <!-- <div style="height: 40px;clear: both;"></div> -->
    <div style="clear: both;"></div>
    <!-- ======= Become Part Of The Everygrowing End ======= -->
    <div class="row-2 padd-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>

                <!-- Hidden only on xs -->
                <div class="col-md-6 d-none d-sm-block">
                    <div class="custom-orgainize">
                    <h3 style="margin-bottom: 2rem;">Manage All Policies In One Place</h3>
                        <!-- <h4 style="margin-bottom: 5%;">Get free protection against online frauds upto 50,000</h4> -->
                        <h5  id="thrive-home-form-2"  class="cf7-home-form-2 thrive-home-form-2"><a class="btn-notify-me" href="https://turtlemint.onelink.me/b9Hg/5g3sm4zf" target="_blank">Download Now</a></h5>
                    </div>
                </div><!---->

            </div>
        </div>
    </div>
    <!-- ======= Organise And Manage All Of Your End ======= -->
    <div class="row-2 third-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="organize-img mt5rem text-center">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/organize-view.gif" style="padding: 35px;    max-height: 557px; width: auto;" class="home-organize-view" />
                    </div>
                </div>

                <!-- Visible only XS-screen -->
                <div class="col-md-6 d-block d-sm-none">
                    <div class="custom-orgainize">
                        <h3 class="text-center">Manage All Policies In One Place</h3>
                        <!-- <h4 style="margin-bottom: 5%;">Get free protection against online frauds</h4> -->
                        <a class="btn-notify-me cf7-home-form-2 thrive-home-form-2" href="https://turtlemint.onelink.me/b9Hg/5g3sm4zf" target="_blank">Download Now</a>
                    </div>
                </div>
                <!------>

               <!---- <div class="col-md-6 col-12">
                    <div class="orgainize-content">
                        <ul>
                            <li>Understand Your Insurance Policy</li>
                            <li>Identify Gaps in Coverages For Your 
                                <br class="d-block d-sm-none"><span class="d-sm-none" style="margin-right: 8px;"></span>Family Assets</li>
                            <li>Does Of Insurance Knowledge To Keep 
                                <br class="d-block d-sm-none"><span class="d-sm-none" style="margin-right: 8px;"></span>You Updated</li>
                            <li>Manage Policy Related Payments, 
                                <br class="d-block d-sm-none"><span class="d-sm-none" style="margin-right: 8px;"></span>Renewals</li>
                        </ul>
                    </div>
                </div>---->

                <div class="col-md-6 col-12">
                    <div class="orgainize-content">
					<!-- <h4 style="visibility: hidden;">Turtlemint will be your one-stop shop:</h4> -->
                        <ul style="margin: 9% 0;">
                            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/checkmark.png" class="checkmark">
                            <span>All policies, one app</span>
                            <br>
                            <span class="point-subtext">Find and save all your policies, get reminders, track claims on your fingertips</span></li>
                            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/checkmark.png" class="checkmark"><span>Claim any policy</span><br><span class="point-subtext">Get quick claims support from our experts for any policy, any insurer</span></li>
                            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/checkmark.png" class="checkmark"><span>All policies explained</span><br><span class="point-subtext">Understand the features of your policies for complete risk protection</span></li>
							<li><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/checkmark.png" class="checkmark"><span>Consult an expert</span><br><span class="point-subtext">Consult one of our 2.7 lakh+ advisors/POSPs on your insurance</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Understand Your Insurance Policy End ======= -->
    <div class="clearfix"></div>

    <div class="row-2 customer-about">
        <div class="container">
            <div class="section-heading">
              <!--   <h3>See What Our Customers Says About Us</h3> -->
				  <h3>Our Customers Love Us</h3>
            </div>
            <div class="customer-row">
                <div class="slider slider-client">
                    <div class="customer-content">
                        <div class="c-media">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/anupama.png">
                        </div>
                        <div class="c-caption">
                            <span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
                            <p>One platform, multiple insurers. Thank you Turtlemint for allowing me to compare the best plans to buy the most suitable policy with ease</p>
                            <span>Anupama</span>
                        </div>
                    </div>
                   
                    <div class="customer-content">
                        <div class="c-media">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/ajay.png">
                        </div>
                        <div class="c-caption">
                            <span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
                            <p>Thanks to Turtlemint’s online platform buying insurance has become simple. I bought and renewed my policies hassle-free through Turtlemint within minutes</p>
                            <span>Ajay</span>
                        </div>
                    </div>
					 <div class="customer-content">
                        <div class="c-media">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/abdul.png">
                        </div>
                        <div class="c-caption">
                            <span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
                            <p>I never knew making insurance claims would be so simple. I thank the Turtlemint team for their excellent assistance in claim settlement</p>
                            <span>Abdul</span>
                        </div>
                    </div>
					 <div class="customer-content">
                        <div class="c-media">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/mihir.png">
                        </div>
                        <div class="c-caption">
                            <span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
                            <p>Turtlemint’s personalised assistance helped me solve my doubts and find the most suitable policy. Thank you Turtlemint for simplifying insurance</p>
                            <span>Mihir</span>
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
    <!-- ======= Customers Says ======= -->

    
	 <div class="row-2 our-partners">
			<div class="container">
				<div class="section-heading">
					<h2>Our Partners</h2>
					<div class="partner-main">
						<div class="slider slider-partnar">							
    						<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHDFCErgo.png" class="partnerimg"></div>	
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerDigit.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerICICILombard.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerRoyalSundaram.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerRelianceGeneral.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerBajajallianz.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerCholaMS.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerNewIndia.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerMagmaHDI.png" class="partnerimg"></div> 
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerAdityaBirla.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerAegonLife.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweissTokio.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerFutureGenerali.png" class="partnerimg"></div>                            
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHDFCLIFE.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHSBCCanara.png" class="partnerimg"></div>                            
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerICICIPrudentialLife.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerIDBIFederal.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partneriffcotokio.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerLibertyGeneral.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerManipalCigna.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerMaxBupaLife.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerNivaBupa.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPNB.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPramerica.png" class="partnerimg"></div>                            
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerSBIGeneral.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerShriramGeneral.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerStarhealth.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerTATAAIG.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUnitedIndiaInsurance.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUniversalSompo.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweiss.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerTATAAIGLife.png" class="partnerimg"></div>
                            <div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUnitedIndia.png" class="partnerimg"></div>							
						</div>
					</div>
				</div>
			</div>
		</div>
		

    <!-- ======= Partners Logo ======= -->

    <div class="row-2 blog-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p>To stay updated with the latest events and happenings <br class="d-block d-sm-none"> in the insurance business, check out our blogs.
</p>
                </div>
                <div class="col-sm-4">
                    <a href="/blog/" class="btn-visit-blog">Visit Our Blog</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Visit our Blogs ======= -->
	
	
	

	

    <div class="row-2 faq-section">
        <div class="container">
            <div class="section-heading">
                <h3>FAQ</h3>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="faq-box">
							<div class="faq-top-title">
								<h4>Frequently Asked Questions</h4>
								<span>New user? Let's get started with these basics.</span>
							</div>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading1">
										<h4 class="panel-title"> <a data-toggle="collapse" data-target="#collapse1" href="#collapse1" aria-expanded="true" aria-controls="collapse1">Is insurance necessary?</a> </h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion">
										<div class="panel-body">
											   <p class="paragraph-text">An insurance policy protects you against financial
                                            losses. As such, the policy becomes necessary. If you have a car or a bike,
                                            buying a motor insurance policy is mandatory as per law. Even in case of life
                                            insurance, the security given by a life insurance policy is unparalleled which
                                            makes the policy a must buy. When it comes to health insurance, one cannot
                                            ignore the high medical costs which are associated with a health ailment.
                                            Having a health insurance policy, therefore, makes sense to protect against the
                                            financial implication of any medical emergency.
                                        </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											How are life insurance and health insurance plans different?
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="panel-body">
											 <p class="paragraph-text">Life insurance plans cover the risk of dying too early.
                                            Health insurance plans, on the other hand, cover the risk of medical
                                            contingencies. While life insurance plans pay a benefit in case of death or
                                            maturity, health insurance plans pay a benefit if the insured suffers a medical
                                            contingency which is covered by the plan.
                                        </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-target="#collapseThree" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											What is premium?
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
										<div class="panel-body">
											 <p class="paragraph-text">Premium is the cost of insurance. It is the money which
                                            you undertake to pay to the insurance company in return for the coverage which
                                            the company provides.
                                        </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-target="#collapseFour" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											What is the term of coverage under insurance plans?
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
										<div class="panel-body">
											 <p class="paragraph-text">Different insurance plans have a different coverage
                                            tenure. The tenures of various plans include the following -
                                        </p>
                                        <ul class="list-style mtop0">
                                            <li class="li paragraph-text">Life insurance - 5 years to 35 years</li>
                                            <li class="li paragraph-text"> Health insurance - 1 year to 3 years</li>
                                            <li class="li paragraph-text">Bike insurance - third party plans - 1 year to 5
                                                years; comprehensive plans - 1 year to 3 years or 5 years</li>
                                            <li class="li paragraph-text">Car insurance - third party plans - 1 year to 3
                                                years, comprehensive plans - 1 year or 3 years</li>
                                        </ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFive">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-target="#collapseFive" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											 How to buy insurance? 
											</a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
										<div class="panel-body">
											 <p class="paragraph-text">Insurance policies can be purchased online after
                                            comparing the different policies and then choosing the best one. After the
                                            policy is chosen you need to fill an online proposal form, submit the required
                                            documents and pay the premium online and the policy is issued.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSix">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-target="#collapseSix" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											Why is comparing necessary before buying insurance policies?
											</a>
										</h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
										<div class="panel-body">
											 <p class="paragraph-text">
                                            There are a lot of insurance policies available in the market each of which
                                            satisfy similar needs and yet have different coverage benefits and premium
                                            rates. The best insurance policy which provides the best coverage features at
                                            the lowest premium rates can be found only when the different plans are
                                            compared with each other. That is why comparing is necessary before buying
                                            insurance policies.
                                        </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseSeven" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            What is claim in an insurance policy?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                              <p class="paragraph-text">A claim is said to occur when the insured event happens
                                            and the insurance company becomes liable to pay the compensation for the
                                            financial loss suffered by the insured.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseEight" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Can an insurance claim be rejected?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                              <p class="paragraph-text">Yes, insurance claims can be rejected due to various
                                            reasons. Some common ones include the following -
                                        </p>
                                        <ul class="list-style mtop0">
                                            <li class="li paragraph-text">If the claim is for an instance which is excluded
                                                under the plan’s coverage </li>
                                            <li class="li paragraph-text"> If the claim process is not properly followed</li>
                                            <li class="li paragraph-text"> If the claim is made in a policy which is lapsed</li>
                                            <li class="li paragraph-text">If the claim related documents are not submitted
                                                to the insurance company </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingNine">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseNine" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            What is renewal of an insurance policy?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingNine">
                                        <div class="panel-body">
                                            <p class="paragraph-text">Insurance policies come with a specified tenure. When the
                                            tenure is over, the cover provided by the policy stops. To continue the
                                            coverage, the policy is required to be renewed. Thus, renewal of an insurance
                                            policy means continuing the coverage of the policy for an additional tenure by
                                            paying the required renewal premium to the insurance company.
                                        </p>
                                        </div>
                                    </div>
                                </div>                                 
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEleven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseEleven" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            When should the policy be renewed?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingEleven">
                                        <div class="panel-body">
                                          <p class="paragraph-text">Renewal of an insurance policy should be done within the
                                            policy expiry date (also called the policy due date). If it is done within the
                                            due date, the policy continues without a break in coverage.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwelve">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwelve" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                           What happens if the policy is not renewed on time?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwelve">
                                        <div class="panel-body">
                                             <p class="paragraph-text">If the insurance policy is not renewed within the due
                                            date, the policy cover would lapse as soon as the due date is over. When the
                                            policy lapses, the cover stops. If any claim is made in a lapsed policy, it is
                                            rejected as the coverage under the policy has stopped due to non-renewal.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThirteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThirteen" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                           How can premiums be paid for insurance policies?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingThirteen">
                                        <div class="panel-body">
                                            <p class="paragraph-text">Premiums can be paid through cash, cheque, debit cards,
                                            credit cards, net banking facilities and also mobile wallets.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFourteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseFourteen" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            What are the different types of life insurance plans which are available
                                            in the market?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingFourteen">
                                        <div class="panel-body">
                                             <p class="paragraph-text">Life insurance plans come in the following variants -</p>
                                        <ul class="list-style mtop0">
                                            <li class="li paragraph-text">Term life plans</li>
                                            <li class="li paragraph-text">Endowment plans</li>
                                            <li class="li paragraph-text">Money back plans</li>
                                            <li class="li paragraph-text">Whole life plans</li>
                                            <li class="li paragraph-text">Child plans</li>
                                            <li class="li paragraph-text">Unit linked insurance plans</li>
                                            <li class="li paragraph-text">Pension plans</li>
                                        </ul>
                                         </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFifteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseFifteen" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                           What are the different types of health insurance plans available in the
                                            market?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingFifteen">
                                        <div class="panel-body">
                                            <p class="paragraph-text">Health insurance plans come in the following variants -
                                        </p>
                                        <ul class="list-style mtop0">
                                            <li class="li paragraph-text">Indemnity health plans - individual health plans
                                                and family floater health plans </li>
                                            <li class="li paragraph-text">Senior citizen health plans</li>
                                            <li class="li paragraph-text">Critical illness health plans</li>
                                            <li class="li paragraph-text">Disease specific health plans</li>
                                            <li class="li paragraph-text">Hospital cash health plans</li>
                                            <li class="li paragraph-text">Top up and super top-up health plans</li>
                                        </ul>
                                       
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSixteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseSixteen" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                            Are there any tax benefits in insurance policies?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingSixteen">
                                        <div class="panel-body">
                                             <p class="paragraph-text">Yes, life and health insurance plans provide tax
                                            benefits. These benefits are explained below -
                                        </p>
                                        <b>Life insurance plans -</b>
                                        <ul class="list-style mtop0">
                                            <li class="li paragraph-text">Premiums paid for life insurance policies qualify
                                                for tax deduction under Section 80C upto a limit of INR 1.5 lakhs</li>
                                            <li class="li paragraph-text">Surrender benefit, maturity benefit or death
                                                benefit received under life insurance plans are tax-free under Section 10
                                                (10D) </li>
                                            <li class="li paragraph-text">1/3rd of the pension corpus which is withdrawn in
                                                cash is tax-free under Section 10 (10A)</li>
                                        </ul>
                                        <b>Health insurance plans</b>
                                        <ul class="list-style mtop0">
                                            <li class="li paragraph-text">Premiums paid for a health insurance plan for
                                                self, spouse and dependent children is allowed as a tax deduction under
                                                Section 80D. The limit is INR 25, 000. If you are a senior citizen, the
                                                limit increases to INR 50, 000 </li>
                                            <li class="li paragraph-text">Premiums paid for health insurance plan for
                                                dependent parents earns an additional tax deduction under Section 80D. This
                                                limit is also INR 25, 000 which increases to INR 50, 000 if the parents are
                                                senior citizens.</li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeventeen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseSeventeen" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                            Can the insurance policy be cancelled once it is bought?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingSeventeen">
                                        <div class="panel-body">
                                             <p class="paragraph-text">Yes, insurance policies allow a free-look period for
                                            cancellation of the policy after it has been bought. The period depends on the
                                            type of policy bought and the insurance company.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEighteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseEighteen" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                            What would I get if I cancel the insurance policy during the free-look
                                            period?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingEighteen">
                                        <div class="panel-body">
                                             <p class="paragraph-text">If the insurance policy is cancelled during the free-look
                                            period, the premium paid is refunded back. However, the premium refund would be
                                            deducted for the administrative expenses incurred by the insurance company in
                                            issuing the insurance policy. Moreover, the insurance cost would also be
                                            deducted for the period the policy was in force before it was cancelled.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingNineteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseNineteen" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                            What is group insurance?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingNineteen">
                                        <div class="panel-body">
                                            <p class="paragraph-text">A group insurance policy is one in which a group of
                                            individuals are covered under the same plan. A single insurance policy is
                                            issued covering all the members of the group and the policy is called a master
                                            policy. Group insurance plans usually come with a term of one year after which
                                            they have to be renewed for continued coverage.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwenty">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                             What is utmost good faith in insurance?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwenty">
                                        <div class="panel-body">
                                            <p class="paragraph-text">An insurance contract is a contract of utmost good faith.
                                            As per this principle, the policyholder is required to furnish all the
                                            important details about himself which are asked in the proposal form. The
                                            insurance company issues the policy on the good faith that the insured has
                                            provided every information in the proposal form correctly. If any important
                                            information, which affects the risk covered under the policy, is hidden or lied
                                            about, the principle of utmost good faith is breached. In such cases, the
                                            insurance contract becomes void and the insurance company has the right to
                                            reject the claim under the policy. </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwenty-one">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-one" href="#collapseTwenty-one" aria-expanded="false" aria-controls="collapseTwenty-one">
                                             What is the meaning of indemnity under general insurance plans?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwenty-one" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwenty-one">
                                        <div class="panel-body">
                                             <p class="paragraph-text">General insurance policies pay a claim on the principle
                                            of indemnity. Indemnity means that in case of a loss the policyholder would be
                                            compensated by the insurance company for the actual financial loss suffered.
                                            The policyholder would not be allowed to make a profit from the insurance
                                            policy. </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwenty-two">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-two" href="#collapseTwenty-two" aria-expanded="false" aria-controls="collapseTwenty-two">
                                            How much coverage should be chosen under insurance plans?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwenty-two" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwenty-two">
                                        <div class="panel-body">
                                             <p class="paragraph-text">The coverage level of your insurance policies should be
                                            optimum to cover the financial loss which is insured by the policy. In life and
                                            health insurance plans, the coverage level should be chosen based on the
                                            lifestyle expenses of the insured, the family size, age, income, etc. In case
                                            of car and bike insurance policies, the coverage depends on the value of the
                                            car and bike.</p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwenty-three">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-three" href="#collapseTwenty-three" aria-expanded="false" aria-controls="collapseTwenty-three">
                                             Are insurance policies all inclusive?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwenty-three" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwenty-three">
                                        <div class="panel-body">
                                           <p class="paragraph-text">No, insurance policies have a list of excluded coverage
                                            benefits which are not covered under the plan. These exclusions depend on the
                                            type of insurance policy.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwenty-four">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-four" href="#collapseTwenty-four" aria-expanded="false" aria-controls="collapseTwenty-four">
                                             Are online insurance policies fake?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwenty-four" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwenty-four">
                                        <div class="panel-body">
                                           <p class="paragraph-text">No, if the insurance policies are bought from reputed
                                            websites which are under the regulations of the IRDA, the policies would be
                                            genuine and would be issued by the insurance company directly.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwenty-five">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-five" href="#collapseTwenty-five" aria-expanded="false" aria-controls="collapseTwenty-five">
                                             What is IRDA?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwenty-five" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwenty-five">
                                        <div class="panel-body">
                                            <p class="paragraph-text">IRDA stands for the Insurance Regulatory and development
                                            Authority. It is the apex regulatory body of insurance in India. All insurance
                                            companies have to comply with the rules prescribed by the IRDA for selling
                                            their insurance policies.
                                        </p>
                                        </div>
                                    </div>
                                </div>


							</div>
							
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Faqs ======= -->
    <style>
        .btn-notify-me {
            background: #009F69 !important;
            filter: drop-shadow(5px 5px 4px silver);
        }
        .bannercrd-img img:hover{cursor: pointer;}
    </style>
<?php
get_footer('tmhomereskin');

