<?php
/**
	 Template Name: Content A ReSkin
	*/

get_header('tmproductreskin');
	?>
<!-- ======= Navbar End ======= -->
<div class="row-2 first-fold-banner">
   <div class="container ">
      <div class="row lg-device">
         <div class="col-lg-6 col-md-6 first-column" style="z-index: 1;">
            <div class="main-banner-txt-new-23">
               <h2 class="main-banner-txt-new-header1"><span style="color:#009F69">Save Upto 70% </span>on Car Insurance</h2>
               <!-- just for aligning -->
               <!-- just for aligning -->
               <div class="content justify-content-center">
                  <!--  input  -->
                  <div class="primary-input">
                     <div class="mb-2 ps-4 ps-xl-6">
                        <label for="" class="contact-input-quote">
                        <input  name="regno" maxlength="14" oninput="this.value = this.value.toUpperCase();" id="name-input" type="text" placeholder="Enter Car Number">
                        <button id="with-regno" type="button" class="btn">
                        <span>Get a Quote</span>
                        </button>
                        </label>
						<div class="errtext pt1" id="errMsg"></div>
                     </div>
                     <p class="text-300 mb-2 ps-4 ps-xl-6 contact-question"><a href="#" id="without-reg-link">Get Quotes Without Car Number ></a></p>
                  </div>
                  <div class="or">
                     <p>OR</p>
                  </div>
                  <div class="primary-input">
				  	<p class="text-300 mb-1 ps-4 ps-xl-6 contact-advisor">Find a Turtlemint Advisor Near You</p>
                    <div class="mb-2 ps-4 ps-xl-6">
						<form name="popupadvisorcarform" id="popupadvisorcarform" method=get action="/insurance-advisor-near-me/" >
							<label for="pincodeadvisorcar" class="contact-input-adviser vertical-input-label">
								<input type="number" id="pincodeadvisorcar" name="pincode" value="" oninput="this.value = this.value.toUpperCase(); this.setCustomValidity('');" id="name-input" type="text" placeholder="Enter Pin Code" oninvalid="this.setCustomValidity('Please Enter valid Pincode')" max="999999" min="100000" maxlength="6" required required="" onkeypress="if(this.value.length==6) return false;">
								<input type="hidden" id="verticalCar" name="vertical" value="FW">
								<button id="popupadvisorcarformsubmit" type="submit" class="btn">
									<span>Find Advisor</span>
								</button>
							</label>
							<div class="errtext pt1" id="errMsgPincode"></div>
						</form>
                     </div>
					 <p class="text-300 mb-1 ps-4 ps-xl-6 tm-advisor-usp"><span>2.7 Lakh+</span> Turtlemint advisors</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 slider-column">
            <!-- Home slider -->
            <div class="home-slider-main">
               <div class="slider-home-banner">
                  <div class="">
                     <div class="car-banner">
					 	<img alt="Car Insurance" title="Car Insurance" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/car-bike-insurance.png" class="desktop" width="" height="auto" frameborder="0" />
                        <img alt="Car Insurance" title="Car Insurance" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/car-bike-insurance-mob.png" class="mobile" width="" height="auto" frameborder="0" />
                     </div>
                  </div>
               </div>
            </div>
            <!-- Home slider -->	
         </div>
      </div>
   </div>
</div>
<!-- ======= Main Banner End ======= -->

<!-- ======= Become A Turtlemint Advisor End ======= -->
<div class="row-2 video-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6">
				<div class="custom-many-optns">
					<h2>Know what type of car insurance is best for you!</h2>
					<!-- <h2>There Are Multiple Types Of Car Insurance Available Today!</h2> 
						<h3>Here are some quick videos to help you know what's the best for you!</h3>-->
				</div>
			</div>
			<div class="col-md-6 d-lg-none d-sm-block">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="custom-video-crd video-car-1">
								<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-video-1.webp" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
								<h5>10 Questions to Ask While Buying Motor Insurance</h5>
								<p>Choose the right motor insurance policy by asking these quick questions.</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="custom-video-crd video-car-2">
								<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-video-2.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
								<h5>Earn Discount on Motor Insurance Premiums</h5>
								<p> Learn quick tips to earn discount on motor insurance premiums.</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="custom-video-crd video-car-3">
								<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-video-3.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
								<h5>Procedure to claim in motor insurance</h5>
								<p>Check out the various steps involved in making motor insurance claims.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-10 custom-video-crd-desktop offset-md-1 row ">
				<div class="col-md-4">
					<div class="custom-video-crd video-car-1">
						<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-video-1.webp" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
						<h5>10 Questions to Ask While Buying Motor Insurance</h5>
						<p>Choose the right motor insurance policy by asking these quick questions.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="custom-video-crd video-car-2">
						<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-video-2.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
						<h5>Earn Discount on Motor Insurance Premiums</h5>
						<p> Learn quick tips to earn discount on motor insurance premiums.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="custom-video-crd video-car-3">
						<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-video-3.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
						<h5>Procedure to claim in motor insurance</h5>
						<p>Check out the various steps involved in making motor insurance claims.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-2 knowmore-row">
	<div class="container">
		<div class="row">
			<div class="col-md-12 knowmore-title d-none">
				<h4>To Know More</h4>
			</div>
		</div>
		<div class="row knowmore-btn-row">
			<div class="col-md-3 d-sm-none d-md-block col-lg-1"></div>
			<div class="col-lg-10 text-center">
				<a class="btn-watch-more d-none" target="_blank" href="https://www.youtube.com/c/InsuranceGyan">Watch Videos</a>
				<a class="btn-watch-more d-none" href="/blog/">Read Blog</a>
			</div>
		</div>
	</div>
</div>
<!-- ======= Too Many Options Can Make End ======= -->
<div class="row-2 bg-cream pt-100 pb-100 our-plans">
	<div class="container">
		<div class="section-heading">
			<!-- <h2>Types Of Car Insurance Plans We Offer</h2> -->
			<h2>Car Insurance plans that suit your needs</h2>
			<div class="">
				<div class="bike-offer justify-content-center row desktop">
					<div class="col-lg-3 col-md-4 item-box">
						<a class="hovere" href="/car-insurance/third-party-car-insurance/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
							<h5>Third-Party Liability</h5>
							<p>Covers damages and losses caused to a third-party</p>
					</div>
					<div class="col-lg-3 col-md-4 item-box"><a class="hovere" href="/car-insurance/comprehensive-car-insurance/">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-2.png">
					<h5>Comprehensive Car Cover</h5>
					<p>Covers damages and losses to your car as well as to a third party</p></a>
					</div>
				</div>
				<div class="bike-offer mobile-slider d-md-none d-sm-block">
					<div class="item-box">
						<a class="hovere" href="/car-insurance/third-party-car-insurance/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
							<h5>Third-Party Liability</h5>
							<p>Covers damages and losses caused to a third-party</p>
						</a>
					</div>
					<div class="item-box">
						<a class="hovere" href="/car-insurance/comprehensive-car-insurance/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
							<h5>Comprehensive Car Cover</h5>
							<p>Covers damages and losses to your car as well as to a third party</p>
						</a>
					</div>
				</div>
				<!-- <div class="bike-offer col-md-10 offset-md-1 d-md-none d-sm-block">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					        <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					
					</ol>
					         <div class="carousel-inner">
					           <div class="carousel-item active">
					            <div class="col-md-4 item-box">
					         <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
					         <h5>Third-Party Liability</h5>
					         <p>Covers damages and losses caused to a third-party</p>
					       </div>
					           </div>
					           <div class="carousel-item">
					            <div class="col-md-4 item-box">
					         <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-2.png">
					         <h5>Comprehensive Car Cover</h5>
					         <p>Covers damages and losses to your car as well as to a third party</p>
					       </div>
					           </div>
					          
					         </div>
					       </div>
					</div> -->
			</div>
		</div>
	</div>
</div>
<div class="row-2 blog-cta-section">
	<div class="container">
		<!---->
		<h3 class="custom-become-part">No one knows Car Insurance like we do.</h3>
		<div class="row partner-row">
			<div class="col-xl-3  col-lg-2 d-lg-block d-none"></div>
			<div class="col-xl-2 col-lg-3 col-md-4">
				<div class="custom-become-content">
					<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p1.png" /> -->
					<h3>3.5 Cr +</h3>
					<p>Quote Compared</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-3 col-md-4">
				<div class="custom-become-content">
					<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p2.png" /> -->
					<h3>70 Lakh +</h3>
					<p>Policies Bought</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-3 col-md-4">
				<div class="custom-become-content">
					<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p3.png" class="img-insurance"/> -->
					<h3>₹ 30 Crore +</h3>
					<p>Claims Processed</p>
				</div>
			</div>
			<div class="col-xl-3 d-lg-block d-none"></div>
		</div>
		<!---->
		<!-- <div class="row">
			<div class="col-sm-8">
			  <p>To stay updated with the latest events and the happeningsin the insurance business visit our
			    blogs
			  </p>
			</div>
			<div class="col-sm-4">
			  <a href="#" class="btn-visit-blog">Visit Our Blog</a>
			</div>
			</div> -->
	</div>
</div>
<div class="row-2">
	<div class="container">
		<div class="secondary-banner padd-tb-50">
			<h3 class="custom-become-part">Why Choose Turtlemint?</h3>
			<div class="row partner-row padd-tb-30">
				<div class="col-md-4">
					<div class="custom-become-content">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/whychoose-icon-1.png" />
						<h3>Maximum Insurers</h3>
						<p>Find plans from India's best insurers</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="custom-become-content">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/whychoose-icon-2.png" />
						<h3>Active Claim Support</h3>
						<p>Filing claims has never been this easy!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="custom-become-content">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/whychoose-icon-3.png"/>
						<h3>Best Recommendations</h3>
						<p>Simple and unbiased advise to help you achieve your goals</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Become Part Of The Everygrowing End ======= -->
<div class="clearfix"></div>
<div class="row-2 customer-about">
	<div class="container">
		<div class="section-heading">
			<h2>Our Customers Love Us</h2>
		</div>
		<div class="customer-row">
			<div class="slider slider-client">
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/aritra.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>Why go anywhere when Turtlemint offers the simplest way to insure your car? I got my car insured within minutes thanks to Turtlemint’s simple interface. </p>
						<span>Aritra</span>
					</div>
				</div>
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/keshav.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>Car insurance renewals were never this easy. I visited Turtlemint and selected the best insurance policy for my car. I saved on the premium too!
						</p>
						<span>Keshav</span>
					</div>
				</div>
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/maheshwar.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>My car was badly damaged in an accident and when I contacted Turtlemint, they helped me get my claim settled conveniently. Thank you Turtlemint!</p>
						<span>Maheshwar</span>
					</div>
				</div>
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/purti.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>I was looking for a third party policy but after comparing on Turtlemint, I ended up buying a comprehensive plan that too at an affordable premium</p>
						<span>Purti</span>
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
				<div class="slider slider-nav">
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerAdityaBirla.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerAegonLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerBajajallianz.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerDigit.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweissTokio.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerFutureGenerali.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHDFCErgo.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHDFCLIFE.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHSBCCanara.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerICICILombard.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerICICIPrudentialLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerIDBIFederal.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partneriffcotokio.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerLibertyGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerManipalCigna.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerMaxBupaLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerNivaBupa.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPNB.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPramerica.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerRelianceGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerSBIGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerShriramGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerStarhealth.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerTATAAIG.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUnitedIndiaInsurance.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUniversalSompo.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweiss.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerTATAAIGLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUnitedIndia.png"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Partners Logo ======= -->
<div class="row-2 bottom-seo-text">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="section-heading SEO-content">
		
					<!-- Sub-Section End-->
					<!-- Sub-Section Start-->
					<h2 class="SEO-content-heading">What is car insurance?</h2>
					<div class="SEO-content-text">A Car Insurance is a contract between the car owner and a general insurance company wherein the company ensures to provide financial support to the car owner in case of any unfortunate event where there is damage to the car. <br><br>
					Car insurance safeguards your car against any financial loss that may occur in case of an accident or any event unfortunate. This agreement helps in protecting the interest of the policyholder against monetary loss due to car damage.<br>
					<br>The roads are uncertain and keeping this in mind, car insurance has been made mandatory in India under the Motor Vehicle Act, 1988. Owning a car is exciting but it is also important to keep it secured with insurance given the rise of vehicles on the roads and accidents as well. A car insurance policy comes to rescue when and lowers the cost of damage or repair significantly.
					</div>				
					
					<!-- Sub-Section End-->
					<!-- Sub-Section Start-->
					<h2 class="SEO-content-heading">Car insurance premium calculator</h2>
					<div class="SEO-content-text">When buying car insurance, the first thing that comes to mind is the premium that 
					is to be paid. One can calculate his / her <a class="linkaction" href="https://www.turtlemint.com/car-insurance/car-insurance-calculator/" taregt="_blank">Car Insurance premium</a> online through a suitable web portal in order to
					get a fair estimate of the amount that would have to be spent on the coverage. There are many sites available online 
					which can help a person calculate his/her Car Insurance and also compare the policies offered by the various companies.
					<br><br>
					A Car Insurance calculator, which is available online, generally asks for the car brand, name of the city in which 
					the car is registered, the year in which the car was bought and whether any claims were made in the previous year
					or not. Some other details may be asked for as per the requirements however, the above-mentioned ones are the most
					common.
					<br><br>
					Thereafter, a person may go through the plans, policies and other details provided by the Car Insurance Calculator 
					and then make a decision. The same process is followed for calculating Four-Wheeler Insurance premium online where, 
					at last, after entering the Name and Mobile Number, an OTP is sent. On entering the OTP, one gets various policy premium
					quotes to choose the plan that suits them the most.							
					</div>
					
					<h2 class="SEO-content-heading">Types of car insurance we offer</h2>
					<div class="SEO-content-text">Car Insurance policies can be classified into the following types depending upon the extent of coverage:<br>

					
					<ul class="linkcolor">								
						<li><a class="linkaction" href="https://www.turtlemint.com/car-insurance/third-party-car-insurance/" taregt="_blank" >Third-Party Car Insurance</a></li>
						<li><a class="linkaction" href="https://www.turtlemint.com/car-insurance/comprehensive-car-insurance/" taregt="_blank" >Comprehensive Car Insurance</a></li>
						<li><a class="linkaction" href="https://www.turtlemint.com/car-insurance/articles/standalone-own-damage-insurance/" taregt="_blank" >Standalone Own-Damage (OD) Car Insurance</a></li>
						<li><a class="linkaction" href="https://www.turtlemint.com/general-insurance-companies/types-vehicle-insurance/" taregt="_blank" >Bundled Car Insurance</a></li>
						<li><a class="linkaction" href="https://www.turtlemint.com/car-insurance/articles/everything-you-need-to-know-about-pay-as-you-drive-motor-insurance/" taregt="_blank" >Pay As You Drive Car Insurance</a></li>
					</ul>
					<p>To ensure uninterrupted benefits, one must make sure to renew the policies from time to time. 
					Let us understand them in detail: </p>	</div>					
					
					<div class="SEO-content-text"><b>Third-Party liability</b><br>
					<p>This plan protects against the claims made by the third party like the driver of the other vehicle, passengers or 
					owner of the other vehicle, pedestrians, etc. This plan is specifically designed to provide the policyholder cover 
					against the claims made for any bodily damage or injuries to the third party and the damage caused to the vehicle.
					This is a mandatory policy for all vehicles in India under Motor Vehicle Act, 1988.
					</p></div>
					
					<div class="SEO-content-text"><b>Comprehensive Car Cover</b><br>
					<p>This insurance policy comes with higher protection for the vehicle insured. The advantage of buying this insurance 
					policy is that this policy protects the policyholder and covers own vehicle damage due to accident, fire, theft, 
					vandalism, etc. This policy also includes third party liability. Added benefits and features are also provided under 
					this plan which makes it one of the best plans for car insurance.
					</p></div>
					
					<div class="SEO-content-text"><b>Standalone Car Insurance</b></br> 
					<p>If you already have the mandatory third-party insurance cover for your car, you have the option to go for an 
					own-damage standalone cover. Under this cover, the damages that are suffered by your vehicle due to an accident, 
					theft or because of a natural/ man-made disaster will be covered. You also have the option of including add-ons to 
					your policy. 
					</p></div>
					
					<div class="SEO-content-text"><b>Bundled Car Insurance</b></br>
					<p>In case you are looking for a long duration coverage for your car, you can opt for Bundled Car Insurance.
					Under this policy, your vehicle will be covered for third-party liabilities for 3 years. The own-damage cover
					can be renewed on an annual basis.
					</p></div>
					
					<div class="SEO-content-text"><b>Pay As You Drive Car Insurance</b></br>
					<p>Pay As You Drive Car Insurance is a new concept that has been introduced recently in the motor insurance market.
					It can be quite helpful for people who have multiple cars but do not use them regularly. A kind of comprehensive
					car insurance, this policy is a combination of OD (Own Damage) and a third-party plan. In such a policy, the premium 
					is charged on the basis of the car’s usage or the total distance that the car covers in a given year.
					</p></div>
					
					<!-- Sub-Section End-->
					<!-- Sub-Section Start-->
					<h2 class="SEO-content-heading">List of car insurance companies with best claim settlement ratio </h2>
					<div class="SEO-content-text">An insurance company is judged on the basis of the claim settlement ratio and the incurred
					claim ratio. Keep in mind that CSR is not a readily available data that is published by the IRDAI annual report. 
					It is an internal data of the company wherein the entire company’s CSR data is available which is not specific to
					car insurance. Hence a more relatable and trustworthy data is to depend on is the percentage of claims that are 
					settled within 3 months, which is available in the IRDAI Annual Report (2021-22) Here is a list of few leading car 
					insurance companies’ Claim Settlement Ratio and Incurred Claim Ratio (Motor) 2020-21.<br><br>
					
					<div class="table table-responsive table-insurer table-fixed SEO-content-table-container">
							<table class="SEO-content-table">
								<thead>
									<tr>
										<th>
											Car Insurance Companies
										</th>
										<th>
											Incurred Claim Ratio (Motor)**
										</th>
										<th>
										Claim Settlement Ratio (CSR)*
										</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<p>Bajaj Allianz insurance</p>
										</td>
										<td>
											<p style="text-align:center;">68.06%</p>
										</td>
										<td>
											<p style="text-align:center;">98.48%</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>New India Assurance insurance</p>
										</td>
										<td>
											<p style="text-align:center;">78.20%</p>
										</td>
										<td>
											<p style="text-align:center;">-</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>ICICI Lombard insurance</p>
										</td>
										<td>
											<p style="text-align:center;">68.77%</p>
										</td>
										<td>
											<p style="text-align:center;">-</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Bharti Axa insurance</p>
										</td>
										<td>
											<p style="text-align:center;">64.27%</p>
										</td>
										<td>
											<p style="text-align:center;">98.55%</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Tata AIG insurance</p>
										</td>
										<td>
											<p style="text-align:center;">87.96%</p>
										</td>
										<td>
											<p style="text-align:center;">-</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>HDFC ERGO insurance</p>
										</td>
										<td>
											<p style="text-align:center;">70.02%</p>
										</td>
										<td>
											<p style="text-align:center;">-</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Reliance Nippon Insurance</p>
										</td>
										<td>
											<p style="text-align:center;">76.89%</p>
										</td>
										<td>
											<p style="text-align:center;">95.03%</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>United India insurance</p>
										</td>
										<td>
											<p style="text-align:center;">80%</p>
										</td>
										<td>
											<p style="text-align:center;">-</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Oriental Insurance</p>
										</td>
										<td>
											<p style="text-align:center;">95%</p>
										</td>
										<td>
											<p style="text-align:center;">-</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					
					<p class="notetext"><I>*Claim Settlement Ratio is CSR is the total claims paid by the insurance company as against the total number of claims received in any given year.</I></p>


					<p class="notetext">**Incurred Claim Ratio or ICR is the total claims paid by the insurance company as against the total premium collected across all policies in any given year.</p>
					</div>

												
					
					<h2 class="SEO-content-heading">How to choose a four-wheeler insurance policy online?</h2>
					<div class="SEO-content-text ">The following points should be considered when choosing a four-wheeler insurance policy online:
					<br>
					<ol type="1">	
						<li><b>Selection of Type of Plan:</b><br>
						One must analyse his/her car insurance needs and requirements and then finalize the type of plan accordingly.<br>

						<b>Tip: </b> Though only third-party is mandated, it is advised that one opts for
						a comprehensive policy that offers all-around coverage. </li> 
						
						<li><b>Comparing Different Policies: </b><br>
						One must first try to research and compare the policies themselves on online platforms, like Turtlemint, to get a clear picture 
						of what suits best according to their budget and requirements.<br>

						<b>Tip: </b> Avoid picking a policy only because it costs less. Opting for the one that offers maximum features at the lowest price is advisable. 
							</li>
						
						<li><b>Checking for IDV and Premiums: </b></br>
						IDV stands for Insured Declared Value. It refers to the current market value of one’s 
						car and the maximum claim an insurer will pay him/her in case of car damaged repair or stolen. <br>

						<b>Remember: </b>  A <a class="linkaction" href="https://www.turtlemint.com/car-insurance/articles/insured-declared-value/" taregt="_blank">higher IDV</a> gives extended coverage but also increases the premium. So again, one must research and select accordingly. </li> 
						
						<li><b>Asking for Add-on Covers: </b>
						First of all, add-on covers are available only along with Comprehensive Car Insurance. They expand the coverage of one’s policy but also 
						are an added cost to one’s premium. So, one must choose wisely according to his/her needs.</li>								
						
						<li><b>Looking for the Claim Process: </b>
						One must opt for an insurance company which has a simple and prompt claim process. 
						This can be checked by comparing the Claim Settlement Ratio (CSR) of different companies. Higher the CSR, simpler the claim process. </li>
					</ol>
						<p><b>Note: </b> CSR refers to the percentage of claims settled by the insurers in a year.</p> </div>
								
								
					<h2 class="SEO-content-heading">Benefits of car insurance plans in india</h2>
					<div class="SEO-content-text ">The following are the benefits of having an insurance policy for your car<br>
					
					<ol type="1">	
					<li> An insurance policy provides monetary benefits to the survivors in case of accident and support in 
					treatment expenses. It also provides death benefits to the nominee or the family members of the deceased/insured</li>
					<li> It covers the policyholder and pays for lawsuits, legal fees arising out of the accident</li>
					<li> An insurance policy covers the repair bills of the damage caused to the vehicle due to accident</li>
					<li> An insurance policy covers the damage caused to the vehicle due to fire or natural calamities, 
					theft and other man-made incidents</li>
					<li> A car insurance policy provides discounts on premiums for having more than one insurance policy 
					with the same insurance company, in case of theft of the car.</li>
					<li> An insurance policy provides extended coverage for other people driving the car of the policyholder with permission.</li>
					<li> An insurance policy provides rewards in the form of No Claim Bonus and others.</li>
					</ol>
					</div>

					
					<h2 class="SEO-content-heading">Features of car insurance plans in India</h2>
					<div class="SEO-content-text ">The following are few salient features of a car insurance policy<br>
					
					<ol type="1">								
					<li><b>Covers for risk</b><br>
					Car insurance covers the policyholder against risk of damages by man-made disasters like fire, 
					riots, theft, etc, natural disasters like flood, earthquake, landslide, etc and damage during transit, etc</li>
					<li><b>The insured value</b><br>
					The car is insured for a value known as Insured Declared Value which is based on the price 
					of the manufacturer less the depreciation.</li>
					<li><b>Premiums</b><br>
					For car insurance, the policyholder is needed to pay premiums which are decided on the basis of</li>								
					<ul style="margin-left:32px;">	
						<li>The type of vehicle, model number fuel type, capacity, etc</li>
						<li>The city</li>
						<li>Age and profession</li>
						<li>Accessories added or any modifications made in the policy</li>
					</ul>
					<li>These factors help in determining car insurance quotes which you are required to pay to buy the policy. 
					You can use online car insurance calculators to find the premium payable for a policy.Add-ons<br>
					This feature allows the policyholder to add extra cover to get protection against the risks that are not 
					covered under the standard policy. Some of such covers are no claim bonus protection, zero depreciation, 
					accident hospitalization, cover for co-passengers and driver, etc.</li>
					
					<li><b>Tenure and claims</b><br>
					An insurance policy is valid for a year after which they can easily be renewed.Car insurance renewal
					can be done online in some simple steps. The claim settlement process has also been simplified by 
					reimbursement or cashless services in the network garages</li>
					</ol>
					
					</div>
					
					
					<h2 class="SEO-content-heading">Why is car insurance necessary?</h2>
					<div class="SEO-content-text ">Here are a few reasons why having car insurance is necessary<br>
					
					<ol type="1">	
					<li><b>Mandatory:</b><br>
					Having motor insurance is no longer a choice. The Motor Vehicle Act has made it 
					mandatory for all the vehicles whether private or commercial, to have valid third party car insurance 
					wherein third-party liability is also mandatory. The buyer can choose between third party liability
					cover or comprehensive cover. The third-party liability has been made mandatory to cover the losses 
					caused to the third party.</li>
					
					<li><b>Reduce the cost of damage:</b><br>
					Car insurance reduces the cost of damage caused to the vehicle, 
					the policyholder/owner, cost or repair, legal liabilities, loss of life, hospitalisation cost, etc. 
					Car insurance policy will come to rescue at times like these.</li>
					
					<li><b>24*7 assistance:</b><br>
					These days most insurance companies provide 24*7 roadside assistance in case of a sudden breakdown</li>
					
					<li><b>Cashless services:</b><br>
					Car insurance also comes with the option of availing cashless services 
					in the certified network garages across the nation.</li>
					
					<li><b>Relieves mental stress: </b><br>
					Having an insurance policy for your car gives you peace of mind by 
					supporting financially for unfortunate events.</li>
					</ol>
					</div>
					
					<h3 class="SEO-content-title" style="text-align:center;">Key highlights of car insurance policies</h3><br>
						<div class="table table-responsive table-insurer table-fixed SEO-content-table-container">
							<table class="SEO-content-table">
								<thead>
									<tr>
										<th>
											Key Highlights
										</th>
										<th>
											Details
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<p>Own Damage Cover</p>
										</td>
										<td>
											<p> Available under Comprehensive and Stand Alone plans, own-damage provides coverage for the loss incurred by the insured four-wheeler</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Third- Party Cover</p>
										</td>
										<td>
											<p> Covers third-party injury and property damage</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Car Insurance Add-ons</p>
										</td>
										<td>
											<p> A number of add ons available like zero depreciation cover, roadside assistance etc. that enhance the coverage </p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Personal Accident Cover</p>
										</td>
										<td>
											<p>Up to INR 15 lakhs</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Cashless repairs</p>
										</td>
										<td>
											<p> Available</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Buying/Renewal of Policy</p>
										</td>
										<td>
											<p>Available both online and offline</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>No Claim Bonus</p>
										</td>
										<td>
											<p> Upto 50%</p>
										</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					

					<h2 class="SEO-content-heading">Guide to all car insurance policies </h2>
					<div class="SEO-content-text ">While investing in car insurance, there are a few steps that you must follow before buying the insurance-<br>
					
					<ol type="1">	
					<li><b>Familiarize  Yourself With Jargons </b><br>
					If you get familiar with the common terms that are used 
					in a car insurance policy, it will help you in understanding the insurance better. </li>
					<ul style="margin-left:32px;">
						<li><b>First Party and Second Party -</b><br>
						The first party is the person who buys the insurance whereas the second party refers to the 
						insurance company.</li>
						<li><b>Third-party</b><br>
						It refers to anybody who gets affected by the insured car. For example, in an accident, 
						the party involved in the accident opposite to the insured car is called the third party.</li>
						<li><b>No-Claim Bous</b><br>
						If as a policyholder, you don’t make a claim during an active year of a policy, then you’ll
						be entitled to a discounted premium in the upcoming year.</li>
						<li><b>Own Damage</b></br>
						It refers to the damage of the insured car or the policyholder.</li>
						<li><b>Rider/Add On</b><br>
						It refers to the additional coverage policies available with the basic insurance.</li>
						<li><b>Claim Settlement Ratio</b><br>
						It is the ratio between the number of claims settled to the number of claims received by the 
						company in a year.</li>
						<li><b>Claim</b><br>
						It is the money requested from the insurance company to an incurred damage with respect to 
						the purchased policy.</li>
						<li><b>Insured Declared Value (IDV)</b><br>
						The current market value of a car is termed as the Insured Declared Value.</li>
						<li><b>Depreciation</b><br>
						The fall in the value of a car in monetary terms is called depreciation.</li>
					</ul>
					
					<li><b>Know About Policy Types</b><br>
					<p>When it comes to car insurance, there are two types of policies available- Third-party 
					policy and Comprehensive policy. The third-party insurance is mandated by the government
					for every car owner as per the Motor Act, 1988. It covers third-party liabilities.</p>
					<p>A comprehensive policy offers a wider range of benefits in comparison to third party covers. 
					Apart from covering third-party liabilities, it also provides own damage benefits. Events like
					theft, fire, self-ignition, natural and man-made calamities are also covered. On top of it,
					you can include Add ons.</p></li>
					
					
					<li><b>Choose Add-Ons Wisely</b><br>
					While purchasing a policy, you may want to increase your coverage with some extras, 
					which are known as Add-ons. Some popular add-ons are-</li>
					<ul style="margin-left:32px;">
						<li><b>Return to invoice</b><br>
						In case of a total loss of a car, the total amount mentioned on the invoice will be repaid.</li>
						<li><b>Zero Depreciation</b><br>
						The value of a car reduces with time due to depreciation. If you invest in this value, 
						the insurer won’t take depreciation into account during claim settlement.</li>
						<li><b>Roadside Assistance</b><br>
						With this add-on you can avail facilities like towing, minor repairs, fuel, battery jumpstart, etc.</li>
						<li><b>NCB protect</b><br>
						It helps in retaining the No Claim Bonus even after making a maximum of two claims.</li>
						<li><b>Engine Protection</b><br>
						Covers the cost of repairing/replacement of the car engine.</li>
					</ul>
					
					<li><b>Compare Insurances</b><br>
					Before making a decision, make sure to compare policies offered by different companies with 
					similar benefits.</li>

					<li><b>Track Renewals</b><br>
					After purchasing a policy, make sure to track the renewal of your policy.
					If you do not raise a claim during an active year of the policy, you can enjoy 
					discounted premium on the renewal of the policy.</li>
					</ol>
					</div>

				<h2 class="SEO-content-heading">Add-ons in a car insurance policy</h2>
					<div class="SEO-content-text ">Insurance companies provide add-on covers which are additional
					covers to protect your car and provide extra coverage with the basic insurance cover.
					Add-on covers can be taken upon payment of extra premium which is added to car insurance 
					quotes to get the final premium payable for the policy. Add-on covers are available under
					<a class="linkaction" href="https://www.turtlemint.com/car-insurance/comprehensive-car-insurance/" taregt="_blank">comprehensive car insurance</a> policies. Some common add-ons include the following -<br>

				<ol type="1">	
				<li><b>No Claim Bonus Protection</b><br>
				For every claim-free year, the insurance company provides a discount on the premium to be 
				paid upon renewal of the insurance policy. This bonus is cumulative and can increase every year.
				No Claim Bonus protection cover protects the NCB. No Claim Bonus becomes void on making a claim
				and this add on the cover helps you in retaining the No Claim Bonus even after making a claim.</li>

				<li><b>Engine Protection Cover</b><br>
				This cover protects the policyholder and compensates for any damage caused to the engine by leakages 
				or water ingression. This add on cover protects the engine, gearbox and differential parts of the 
				insured vehicle.</li>
				
				<li><b>Zero depreciation cover</b><br>
				This add-on cover compensates for the depreciating value of the car. 
				With this cover, the policyholder does not have to pay for the depreciated value of the car.
				This add-on is subjected to some claims. The feature of voluntary deductible remains applicable 
				even with zero depreciation add-on cover.</li>
				
				<li><b>Consumable Cover</b><br>
				This add-on cover compensates for the consumable items like nuts-bolts, grease, 
				lubricants, engine oil, brake oil, etc.</li><br>
				
				<li><b>Key protection cover</b><br>
				<p>This add on covers the policyholder for expenses incurred on key replacement or repair. 
				This is a fixed number claim add-on cover and requires FIR in case of theft. 
				The cover pays for replacing the key and lock in case of both thefts and lost.</p>
				
				<li><b>Daily allowance</b><br>
				This cover gives the benefit of daily allowance when the car is at the workshop for 
				repair for more than 3 days. This allowance is given for travelling through any other 
				mode other than the insured vehicle.</li>
				
				<li><b>Personal Accident Rider</b><br>
				This rider provides coverage for personal injury, death, disability or damage due to an accident</li>
				</ol>
				</div>
				
				
				<h2 class="SEO-content-heading">Benefits of car insurance purchase/renewal online</h2>
					<div class="SEO-content-text">
					<ul style="margin-left:32px;">
					<li><b>It's really Convenient:</b><br>Online purchase and renewal of car insurance is much more convenient
					than the traditional offline method as it cuts off on the tiring process of visiting the respective 
					insurance company’s branch or the respective agent. People can do the same now on online platforms.</li>
					<li><b>It Saves you a lot of time:</b><br>Also, it is time saving as it only takes a few minutes to enter
					some details and purchase/renew insurance online while it takes hours to visit the branch/agent and fill 
					lengthy forms in the offline process.</li>
					<li><b>There’s is hardly any Paperwork: </b><br>The documentation process becomes almost nil in the online
					process. Soft copies are generated for any document and communication is done mostly through emails.</li>
					<li><b>It truly is Cost effective: </b><br>The online process is more economical as compared to the 
					offline process as it eliminates the insurance agents and other middlemen involved in the offline 
					process thereby reducing the commission expenses.</li>
					<li><b>It is Easy to Check Company Credibility: </b><br>One can easily find the Incurred Claim Ratio,
					Claim Settlement Ratio etc. by just one click sitting at the comfort of their homes which in 
					offline mode becomes a tiring and time- consuming process. Reading online reviews and ratings
					gives an idea of the company’s reputation.</li>
					</ul>
					
					<p>The Application Process for car insurance plans in India</p>
					
					<p>The application process for buying car insurance cannot get easier than this. 
					The online buying option allows </p>
					
					<p>the user to get their car insured in just a few clicks without any hustle.</p>
					<ul style="margin-left:32px;">
						<li>To buy login to the official website of the policy, you want to buy</li>
						<li>Fill in the details like vehicle registration number, vehicle model, fuel type, age of the vehicle, etc</li>
						<li>Check the premium quote and once satisfied, make the payment online through debit/credit card,
						net banking, etc.</li>
					
					</ul></div>
					
					
				<h2 class="SEO-content-heading">Eligibility and documents required for buying car insurance plans in India</h2>
					<div class="SEO-content-text">The eligibility and requirement of documents for buying car insurance are<br>
					
					<ul style="margin-left:32px;">
						<li><a class="linkaction" href="https://www.turtlemint.com/rc-book/" target="_blank">RC book</a></li>
						<li>Driving license</li>
						<li>Vehicle registration</li>
						<li>Identity proof</li>
						<li>Residence proof</li>
						<li>PAN number</li>
						<li>Invoice of the new car</li>
						<li>Insurance policy document (if any)</li>
						<li>No Claim certificate in case of already existing policy</li>
					</ul>
					</div>
					
					<!-- Sub-Section End-->
					<!-- Sub-Section Start-->
					<h2 class="SEO-content-heading">Claim process of car insurance in India</h2>
					<div class="SEO-content-text">The car insurance claim process has also become as easy as buying car insurance. You can also claim your insurance offline by connecting with the insurance company representative and inform them about the claim to be made.<br>You will have to follow the following steps<br>
					<ul style="margin-left:32px;"> 
						<li>Inform your insurer about the incident</li>
						<li>File an FIR in case of theft or loss due to man-made incidents</li>
						<li>Do not move your vehicle from the spot before the surveyor visits</li>
						<li>Once the surveyor completes the survey and submits the report, your cashless service option will be available for you to repair your vehicle.</li>
						<li>Submit the original bills and estimate invoice for reimbursement</li>
						<li>Submit documents required like policy document or number, RC, driving license, etc.</li>
						<li>Once the process is completed, the insurance claim will be settled</li>
					</ul>
					</div>
					<!-- Sub-Section End-->
					
					
					
					<h2 class="SEO-content-heading">How to calculate four wheeler premium online? </h2>
					<div class="SEO-content-text">There are generally two types of car insurance policies- third-party plans 
					and comprehensive plans. To calculate the four wheeler premium online, first you need to 
					determine the type of plan you want to choose.<br>
					<p>If you invest in a third-party policy, you can calculate the premium by first checking the premium 
					determined by the Insurance Regulatory and Development Authority of India (IRDAI) and then adding 18%
					GST to it.</p>
					<p>However, for comprehensive policies, various details are required before calculating the premium and 
					it varies from company to company depending on the price. Thus, you can use the premium calculator 
					offered by the other companies or online platforms like Turtlemint.</p></div>

					<h2 class="SEO-content-heading">Car insurance coverage</h2>
					<div class="SEO-content-text">Let us take a quick look at what is Covered in Car Insurance:<br>
					<p>A third-party motor insurance covers:</p>

					<ul style="margin-left:32px;">
						<li>Third-party liability that covers injury or death</li>
						<li>Property loss to the third-party</li>
						<li>Personal Accident cover for the owner-driver of the car</li>
						</ul>
						<p>As Comprehensive car insurance has a wider scope,  it provides more coverage, such as:</p>
						<ul style="margin-left:32px;">								
						<li>Damages caused to your car and the loss of third-party</li>
						<li>Damages due to accidents, fire, natural calamities, explosions etc. are also compensated</li>
						<li>Robbery or theft of your car</li>
						</ul>
						</div>
					
										
					<!-- Sub-Section Start-->
					<h2 class="SEO-content-heading">Exclusions in car insurance plans in India</h2>
					<div class="SEO-content-text">Whenever you buy car insurance, keep the following exclusions. Not every damage needs to be entertained by the insurance.</br>
					<ul style="margin-left:32px;">
						<li>Driving under the influence of alcohol, drugs or any other intoxication</li>
						<li>Accidental damage caused due to illegal activity</li>
						<li>Driving without driving license</li>
						<li>Damage caused due to nuclear attack or war</li>
						<li>Using vehicle other than the mentioned use</li>
						<li>Regular wear and tear</li>
					</ul>
					</div>
					<!-- Sub-Section End-->
					
					
					<h2 class="SEO-content-heading">How to do car insurance renewal online? </h2>
					<div class="SEO-content-text">Though the renewal process may vary from site to site,
					but a basic structure of renewal process is followed by all the websites which is discussed below:<br>
					<ul style="margin-left:32px;">
						<li><b>Enter the Car Details: </b><br>
						Includes car registration number and some other basic details.</li>
						<li><b>Compare and select the best suited plan:</b><br> 
						One must examine the plans, premiums and benefits and then select the best one as per the need.</li>
						<li><b>Add additional Covers/Add-ons:</b> <BR>
						One may attach add-ons like zero depreciation, Engine protection etc. to increase protection.</li>
						<li><b>Make Online Payment:</b> <br>
						One can pay the premium online through any secure gateway from their credit/debit card, 
						net banking, UPI, mobile wallet etc.</li>
					</ul>
					</div>
					
					<h2 class="SEO-content-heading">Why should you renew an expired car insurance policy now?</h2>
					<div class="SEO-content-text">Non-renewal of expired car insurance policy can make a person more 
					susceptible to legal and financial risks, some of which are discussed below:<br>
					<ul style="margin-left:32px;">
						<li><b>Legal trouble:</b> <br>
						Driving a car with an expired car insurance policy can be subject to penalties which if enhanced due to 
						repeated offences can lead to imprisonment.</li>
						<li><b>No Coverage, No Claim: </b><br> 
						An expired policy provides no coverage, hence one cannot request for a claim 
						from the insurance company. In such a case, if the car incurs any damage, no expenses 
						shall be compensated by the insurance company and one will be bound to bear the entire expenses.</li>
						<li><b>Long Renewal Process: </b><br>
						An inspection is required to renew an expired policy which makes it a time-taking process 
						otherwise normally, it takes only a few minutes.</li>
						<li><b>Loss of NCB (No Claim Bonus) Benefit: </b><br>
						If a policy is not renewed within 90 days of its expiry date, NCB of one’s car insurance can be terminated.
						This will result in loss of NCB discount and would lower one’s premium for the next year.</li>
					</ul>
					</div>
					
					
						<h2 class="SEO-content-heading">Factors that affect your four wheeler insurance premium</h2>
					<div class="SEO-content-text">
						<ul style="margin-left:32px;">
						<li><b>Brand, Model and Variant: </b> <br>
						The brand, model, variants etc. affect the cost of the car which in turn increases 
						the risk on the insurance company to compensate thereby, affecting the premium.</li>
						<li><b>No Claim Bonus (NCB): </b><br> 
						A <a class="linkaction" href="https://www.turtlemint.com/ncb/" taregt="_blank">No Claim Bonus (NCB)</a> is a discount or reward offered by the insurance companies for 
						spending a claim-free year. The bonus tends to increase with every claim-free year thereby 
						adding more discount to one’s premium the next year during the time of renewal. One can avail 
						up to 50% discount on the upcoming premium.</li>
						<li><b>Age of the Car:  </b><br>
						The older a car, the lesser the premium.</li>
						<li><b>Location of the Vehicle: </b><br>
						The area in which a vehicle is registered also plays a key role in the premium amount. Cars registered in Zone A cities, 
						that are the metro cities, have a much higher premium as compared to smaller Zone B cities.</li>
						<li><b>Add-on Covers: </b><br>
						They provide additional coverage but also tend to increase the premium.</li>
						<li><b>Anti-theft Device:</b><br>
						Installation of Anti-theft devices as authorised by the Automotive Research Association of India (ARAI) 
						lowers the policy premium as it lowers the chances of car thefts.</li>
					</ul>
					</div>							
					<!-- Sub-Section Start-->
					
						
							<h2 class="SEO-content-heading">Applying for car insurance through Turtlemint</h2>
							<div class="SEO-content-text">If you are willing to buy car insurance for your new car or want to renew your insurance but in a dilemma about the company, then Turtlemint is just the right place for you. Turtlemint allows you to choose from the best plans after comparing them on various parameters. All you have to do is:<br>
							<ul style="margin-left:32px;">
								<li>Log in to <a class="linkaction" href="https://www.turtlemint.com/">https://www.turtlemint.com/</a></li>
								<li>Select car from the option and enter your car registration number</li>
								<li>You will be directed to another page asking for details like vehicle type, model number, registration number, previous insurance number (if any), type of policy, etc.</li>
								<li>Once you have provided all the information, you will be directed to a page where various plans and their premium quotes are displayed for you to compare and choose the best policy.</li>
								<li>Once satisfied, you can directly buy your car insurance from the Turtlemint website’s same page by clicking on ‘buy now’.</li>
								<li>Make the payment online through suitable mode and you’re done.</li>
							</ul>
					</div>
					
					<h2 class="SEO-content-heading">How to compare online car insurance quotes at Turtlemint?</h2>
							<div class="SEO-content-text">While planning to buy insurance for your new car, you might want 
							to avail the best car insurance policy available and suitable to your requirements as well. 
							If you’re in a dilemma about the company, then Turtlemint is just the right place for you.
							You get to compare all the plans before choosing the right one for you, based on various 
							parameters. To compare the policies, all you need to do is-<br>
							<ul style="margin-left:32px;">
								<li>Log in to <a class="linkaction" href="https://www.turtlemint.com/">https://www.turtlemint.com/</a></li>
								<li>Select the car option and enter your car registration number.</li>
								<li>Then you’ll be directed to another page where you’ll be asked to fill up the details like vehicle type, model number, registration number, etc.</li>
								<li>On submitting the details, you’ll be directed to a page where all the plans and their premium quotes are listed for you to compare.</li>
								<li>Once you make up your mind for a certain plan, you can invest in an insurance plan from the same page itself by clicking on ‘Buy Now’ and completing the payment online.</li>
							</ul>		
						</div>										
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-2 faq-section">
	<div class="container">
		<div class="section-heading">
			<h2>All you need to know about car insurance in India</h2>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="faq-box">
					<div class="faq-top-title">
						<h4>Basics of car insurance in India</h4>
						<!-- <span>New user? Let's get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='heading1'>
								<h4 class='panel-title'> <a data-toggle='collapse' data-target='#collapse1' href='#collapse1' aria-expanded='true' aria-controls='collapse1'>What is car insurance</a> </h4>
							</div>
							<div id='collapse1' class='panel-collapse collapse in show' role='tabpanel' aria-labelledby='heading1' data-parent='#accordion'>
								<div class='panel-body'>Car Insurance not only provides financial protection to the car but also provides cover for injuries to driver, passengers or pedestrians, and their property. It pays for damages to your car due to accidents, vandalism, theft, fire, man-made/ natural disasters, and third-party liability. Considering the exorbitant repair costs these days even a minor damage can cost a fortune. The Motor Vehicles Act also requires every vehicle on the road to at least have a valid third-party liability cover, i.e. cover that pays for bodily injury, loss of life and damage to property of a third person that was caused by an accident with your car.</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target='#collapseTwo'  href="#collapseTwo"
										aria-expanded="false" aria-controls="collapseTwo">
									What is covered under car insurance?
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<p class="paragraph-text">The IRDAI revises premium every year, considering the ratio of claims made and loss for providers. Because of this, third party insurance rates for cars and bikes have become costly from April 1st, with the insurance rate rising up to 40%.</p>
									<ul class="list-style">
										<li class="li paragraph-text">Death of any third party due to the car</li>
										<li class="li paragraph-text">Any type of bodily injury suffered by any third party due to the car</li>
										<li class="li paragraph-text">Damage to third party properties</li>
										<li class="li paragraph-text">Damages suffered by the car due to natural calamities like hurricanes, earthquakes, storms, tempest, flood, etc.</li>
										<li class="li paragraph-text">Damages suffered by the car due to man-made disasters like fire, theft, burglary, etc.</li>
										<li class="li paragraph-text">Damages incurred due to ignition or self-explosion</li>
										<li class="li paragraph-text">Damages suffered when the car is being transported via rail, road, water or air</li>
										<li class="li paragraph-text">A personal accident cover for the owner/driver of the car against accidental deaths and accidental permanent disabilities</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target='#collapseThree'
										href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is not covered under car insurance?
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<ul class="list-style mtop0">
										<li class="li paragraph-text">Normal wear and tear and general ageing of the insured vehicle</li>
										<li class="li paragraph-text">Vehicle used otherwise than limitations as to use</li>
										<li class="li paragraph-text">Mechanical or electrical breakdown</li>
										<li class="li paragraph-text">Damage to vehicle by war, mutiny or nuclear attacks.</li>
										<li class="li paragraph-text">Damage by a person driving the vehicle under the influence of drugs or liquor or with in invalid license</li>
										<li class="li paragraph-text">Loss of the vehicle or damage that can be sufficiently proven to be deliberate or consequential</li>
										<li class="li paragraph-text">Damages sustained due to deliberate actions or criminal acts</li>
										<li class="li paragraph-text">Claims faced when driving outside the geographical territory of India</li>
										<li class="li paragraph-text">Vehicles being used as a commercial one when registered for personal use</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target='#collapseFour' 
										href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What are add-ons available ?
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingFour" data-parent="#accordion">
								<div class="panel-body">
									<p class="paragraph-text">A basic comprehensive car insurance includes damage to your car, loss and theft of vehicle as well as third party cover. However, at additional cost in the insurance premium, the car owners can avail some extraordinary coverage options. The popular add-ons are: </p>
									<ul class="list-style">
										<li class="li paragraph-text">
											<b>Zero depreciation cover</b> 
											<p>The add-on covers the depreciation on the parts of the car. If you have this add-on the full amount of the parts of the car replaced is paid without deducting for depreciation. Without the add-on following depreciation will be applied to pay claim: </p>
											<table class="table table-insurer table-stripped">
												<tbody>
													<tr class="table-border-remove">
														<td> For all the Nylon, Plastic and Rubber parts like tubes and tyres as well as batteries </td>
														<td class="text-center">50%</td>
													</tr>
													<tr class="table-bg-color">
														<td> For all the components made of fiberglass </td>
														<td class="text-center">30%</td>
													</tr>
													<tr class="table-border-remove">
														<td> Parts made of glass like windshield, etc. </td>
														<td class="text-center">NIL</td>
													</tr>
												</tbody>
											</table>
											<p class="paragraph-text paragraph-style">The rest of the vehicle, including all the wooden parts as well are:</p>
											<table class="table table-insurer table-stripped">
												<thead>
													<tr class="table-header-bg-color">
														<th>Age of Vehicle</th>
														<th style="text-align: center;">% of Depreciation</th>
													</tr>
												</thead>
												<tbody>
													<tr class="table-border-remove">
														<td>Vehicle less than 6 months</td>
														<td class="text-center">NIL</td>
													</tr>
													<tr class="table-bg-color">
														<td>Vehicle more than 6 months but less than 1 year</td>
														<td class="text-center">5%</td>
													</tr>
													<tr class="table-border-remove">
														<td>Vehicle more than 1 year but less than 2 years</td>
														<td class="text-center">10%</td>
													</tr>
													<tr class="table-bg-color">
														<td>Vehicle more than 2 year but less than 3 years</td>
														<td class="text-center">15%</td>
													</tr>
													<tr class="table-border-remove">
														<td>Vehicle more than 3 year but less than 4 years</td>
														<td class="text-center">25%</td>
													</tr>
													<tr class="table-bg-color">
														<td>Vehicle more than 4 year but less than 5 years</td>
														<td class="text-center">35%</td>
													</tr>
													<tr class="table-border-remove">
														<td>Vehicle more than 5 year but less than 10 years</td>
														<td class="text-center">40%</td>
													</tr>
													<tr class="table-bg-color">
														<td>Vehicle more than 10 years</td>
														<td class="text-center">50%</td>
													</tr>
												</tbody>
											</table>
											<p class="paragraph-text paragraph-style">IDV Depreciation:</p>
											<table class="table table-insurer table-stripped">
												<thead>
													<tr class="table-header-bg-color">
														<th>Age of The Vehicle</th>
														<th style="text-align: center;">% Of Depreciation For Fixing IDV of The Vehicle</th>
													</tr>
												</thead>
												<tbody>
													<tr class="table-border-remove">
														<td>Vehicle less than 6 months</td>
														<td class="text-center">5%</td>
													</tr>
													<tr class="table-bg-color">
														<td>Vehicle more than 6 months but less than 1 year</td>
														<td class="text-center">15%</td>
													</tr>
													<tr class="table-border-remove">
														<td>Vehicle more than 1 year but less than 2 years</td>
														<td class="text-center">20%</td>
													</tr>
													<tr class="table-bg-color">
														<td>Vehicle more than 2 year but less than 3 years</td>
														<td class="text-center">30%</td>
													</tr>
													<tr class="table-border-remove">
														<td>Vehicle more than 3 year but less than 4 years</td>
														<td class="text-center">40%</td>
													</tr>
													<tr class="table-bg-color">
														<td>Vehicle more than 4 year but less than 5 years</td>
														<td class="text-center">50%</td>
													</tr>
												</tbody>
											</table>
										</li>
										<li class="li paragraph-text">
											<b>Roadside assistance cover</b> 
											<p>Under this additional cover, the policyholder is assured of a round-the-clock assistance provided by the insurance company if the car breaks down in the middle of the road and needs assistance in being transported to the nearest garage. </p>
										</li>
										<li>
											<b>Engine protect cover</b> 
											<p>The engine protect cover covers the damages suffered by the engine of the car due to waterlogging. If the car is submerged in water and the policyholder tries to start the car, water might seep into the engine and damage it. Such damages are covered under the add-on. </p>
										</li>
										<li>
											<b>NCB protect cover</b> 
											<p>If there is no claim in the car insurance policy, the policyholder earns a no claim bonus (NCB). This bonus provides a discount in the renewal premium. However, a single instance of claim wipes out the entire NCB and no discount is allowed in the renewal premium. This add-on protects the NCB even in case of a claim. </p>
										</li>
										<li>
											<b>Consumables cover</b> 
											<p>When the car is repaired after an accident, various consumables are used in the repair like engine oil, lubricants, nuts, bolts, etc. The add-on, when opted, ensures coverage for consumables too which are not covered in a normal policy claim. </p>
										</li>
										<li>
											<b>Lost key replacement cover</b> 
											<p>Under this cover, a replacement key is arranged free of cost if the policyholder loses the original key. </p>
										</li>
										<li>
											<b> Loss of belongings</b> 
											<p>Under this add-on, if personal belongings are lost from the cover, the cost of the loss suffered is covered </p>
										</li>
										<li>
											<b>Return to Invoice</b> 
											<p>Under this cover, the invoice or full value of the car is paid as claim if the car is stolen or is damaged beyond repairs. A normal policy without the add-on will pay a maximum claim of the insured declared value (IDV) which is calculated after depreciation. </p>
										</li>
										<li>
											<b>Personal accident cover for passengers</b> 
											<p>Under this add-on, personal accident cover is available for unnamed passengers travelling in the car with the owner/driver. A lump sum benefit is paid in case of accidental death and disablements faced by such passengers. </p>
										</li>
										<li>
											<b>Medical Expenses Cover</b> 
											<p>Under this add-on, the medical expenses caused due to an accident towards the owner driver would be covered. </p>
										</li>
										<li>
											<b>What is No Claim Bonus?</b> 
											<p>No claim bonus (NCB) is the discount in the premium charged to the policy holder when no claim has been made during the policy term. It keeps increasing from 20% up to 50%, for every claim free year. </p>
											<p>The no claim bonus is 20% for the first claim-free year. Thereafter, it increases every consecutive claim-free year. The available bonus rates are as follows – </p>
											<table class="table table-insurer table-stripped">
												<tbody>
													<tr class="table-border-remove">
														<td> No claims in the first policy year </td>
														<td>20%</td>
													</tr>
													<tr class="table-bg-color">
														<td> No claims in two successive policy years </td>
														<td>25%</td>
													</tr>
													<tr class="table-border-remove">
														<td> No claims in three successive policy years </td>
														<td>35%</td>
													</tr>
													<tr class="table-bg-color">
														<td> No claims in four successive policy years </td>
														<td>45%</td>
													</tr>
													<tr class="table-border-remove">
														<td>No claims in five successive policy years</td>
														<td>50%</td>
													</tr>
												</tbody>
											</table>
											<p>Your NCB is applicable even if you change your insurer, or buy a new car. It’s a great incentive to reward safe drivers. If you make a claim, you will lose your entire NCB in next policy term. Your NCB will be mentioned on your policy. </p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target='#collapseFive' 
										href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									What are the benefits of buying car insurance plans?
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingFive" data-parent="#accordion">
								<div class="panel-body">
									<p class="paragraph-text ">A car insurance policy is not only legally mandatory, it is beneficial too. Here’s how –</p>
									<ul class="list-style">
										<li class="li paragraph-text">The third party coverage protects your finances in the event of a third party claim. If a third party dies, the compensation involved is quite considerable. It might not be possible for every car owner to pay such high compensations from his/her own pockets </li>
										<li class="li paragraph-text">Even in case of damages to the car, the repair costs involved are quite high. A car insurance policy reduces the financial burden you face when paying for such repairs. </li>
										<li class="li paragraph-text">If your car is stolen or damaged beyond repairs, the car insurance plan would pay a lump sum money (the IDV of the policy) which would help you buy a new car or deal with the financial loss you face.</li>
										<li class="li paragraph-text">As the car insurance policy is mandatory, you are protected from legal hassles which would incur in the absence of one. </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="faq-top-title">
						<h4>How to choose the best car insurance policy?</h4>
						<!-- <span>New user? Let's get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="false">
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingSix'>
								<h4 class='panel-title'> <a class="collapsed" data-toggle='collapse' data-target='#collapseSix' href='#collapseSix' aria-expanded='true' aria-controls='collapseSix'>How to compare a car insurance policy?</a> </h4>
							</div>
							<div id='collapseSix' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSix' data-parent='#accordion1'>
								<div class="panel-body">
									<p class="paragraph-text ">The best car insurance policy can be
										chosen by comparing different plans
										available in the market. Comparing is a must because of the benefits it
										provides. By comparing individuals can buy
										a policy which has the highest possible IDV, encompasses the most coverage
										features and charges the lowest premium.
										Thus, comparing allows individuals to buy the best car insurance plan.
									</p>
									<p class="paragraph-text paragraph-style">
										Turtlemint has a tie-up with leading car insurance companies. Individuals can
										find and compare different car insurance
										plans on Turtlemint’s website and then buy a plan which is the best.
									</p>
									<p class="paragraph-text">To compare, the following parameters should be judged –</p>
									<ul class="list-style">
										<li class="li paragraph-text">What are the coverage features offered by the
											plan. The higher the better
										</li>
										<li class="li paragraph-text"> Insured Declared Value of the policy. It should
											match with the market value of the car
										</li>
										<li class="li paragraph-text">The premium charged against the coverage offered.
											The best plan is the one which offers the highest coverage at the
											lowest premiums
										</li>
										<li class="li paragraph-text">The premium discounts available. Higher the
											better
										</li>
										<li class="li paragraph-text">The network of cashless garages tied-up with the
											insurance company. The wider the better
										</li>
										<li class="li paragraph-text">The claim settlement ratio of the company which
											represents the number of claims settled
											against the claims made. The higher the ratio, the better
										</li>
										<li class="li paragraph-text">The add-ons available under the policy, their
											rates and their suitability to your
											coverage requirements.
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSeven">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target='#collapseSeven' href="#collapseSeven"
										aria-expanded="false" aria-controls="collapseSeven">
									What is covered under car insurance?
									</a>
								</h4>
							</div>
							<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingSeven" data-parent="#accordion1">
								<div class="panel-body">
									<p class="paragraph-text">The IRDAI revises premium every year, considering the ratio of claims made and loss for providers. Because of this, third party insurance rates for cars and bikes have become costly from April 1st, with the insurance rate rising up to 40%.</p>
									<ul class="list-style">
										<li class="li paragraph-text">Death of any third party due to the car</li>
										<li class="li paragraph-text">Any type of bodily injury suffered by any third party due to the car</li>
										<li class="li paragraph-text">Damage to third party properties</li>
										<li class="li paragraph-text">Damages suffered by the car due to natural calamities like hurricanes, earthquakes, storms, tempest, flood, etc.</li>
										<li class="li paragraph-text">Damages suffered by the car due to man-made disasters like fire, theft, burglary, etc.</li>
										<li class="li paragraph-text">Damages incurred due to ignition or self-explosion</li>
										<li class="li paragraph-text">Damages suffered when the car is being transported via rail, road, water or air</li>
										<li class="li paragraph-text">A personal accident cover for the owner/driver of the car against accidental deaths and accidental permanent disabilities</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingEight">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target='#collapseEight' 
										href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									How do I know if Turtlemint has the best rates?
									</a>
								</h4>
							</div>
							<div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingEight" data-parent="#accordion1">
								<div class="panel-body">
									<p class="paragraph-text">Our insurance partners have provided us the best possible insurance rates. We pass on the highest possible discounts to you always. It unlikely you will find a better rate elsewhere. If you find let us know. We are ready for the challenge! </p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="faq-top-title">
						<h4>How to save money on your car insurance</h4>
						<!-- <span>New user? Let's get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="false">
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingNine'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseNine' href='#collapseNine' ara-expanded='true' aria-controls='collapseNine'>How can I keep my premiums low?</a> </h4>
							</div>
							<div id='collapseNine' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingNine' data-parent='#accordion2'>
								<div class="panel-body">
									<ul class="list-style mtop0">
										<li class="li paragraph-text">Avoid making claims for small expenses because this will cause you to lose your no claim bonus benefit</li>
										<li class="li paragraph-text">Ensure that the Insured Declared Value of the policy is not very high. The premium is affected by the IDV </li>
										<li class="li paragraph-text">Choose the correct type of policy for the car. If the car is not used very much, third party liability plans are sufficient. </li>
										<li class="li paragraph-text">Employ safety features like anti- theft devices. You may get a discount of minimum 5% on your premium, if you inform the insurance company that you have installed an anti-theft device.</li>
										<li class="li paragraph-text">Choose higher deductibles. (Note: this increases your expense on each claim)</li>
										<li class="li paragraph-text">The policyholder can avail discounts based on various categories which are declared by the insurance company like the policyholder’s age, profession, driving history, AAI membership, etc. See if you qualify for these.</li>
										<li class="li paragraph-text">Cut down on unnecessary add-ons which are not required. For instance if the policyholder is not living in a flood-prone area, engine damage add-on is not required.</li>
										<li class="li paragraph-text">Renew the policy on time. Lapsed policies incur a higher premium.</li>
										<li class="li paragraph-text">Most important compare premiums before buy. With Turtlemint you can compare premiums across all the top insurers and get the best rates. Our customers have saved up to 60% doing this. </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="faq-top-title">
						<h4>How to make claims for your car insurance policy</h4>
						<!-- <span>New user? Let's get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="false">
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTen'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTen' href='#collapseTen' aria-expanded='true' aria-controls='collapseTen'> 
									How do I make a claim if my car is vandalised or damaged due to an accident or natural calamity?
									</a> 
								</h4>
							</div>
							<div id='collapseTen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTen' data-parent='#accordion4'>
								<div class="panel-body">
									<p class="paragraph-text">In the event of an own damage claim, that is, where your own vehicle is damaged due to an accident, vandalism or natural calamity, you must immediately inform insurance company and police, wherever required.</p>
									<p class="paragraph-text paragraph-style">Insurance company will depute a surveyor to assess the loss, and car will be towed, if required, to a workshop.</p>
									<p class="paragraph-text paragraph-style">A claim report is prepared by the surveyor based on the assessment done. The report is submitted to the insurance company along with the claim form and related documents like – </p>
									<ul class="list-style">
										<li class="li paragraph-text">Driving license of the driver/owner of the car</li>
										<li class="li paragraph-text">RC book of the car</li>
										<li class="li paragraph-text">PUC certificate, etc.</li>
									</ul>
									<p class="paragraph-text paragraph-style">Once the claim is approved, repairs start. The repairs are completed and delivered to the policyholder. The claim is settled by the company with the garage and the car is delivered to the policyholder. </p>
									<p class="paragraph-text paragraph-style">If your policy provides for cashless service, which means you do not have to pay out of your pocket for covered damages, the insurance company will pay the workshop directly. You will need pay your share of the claim – deductibles, etc – as informed by the insurer. </p>
									<p class="paragraph-text paragraph-style"> As a Turtlemint customer, you can simply call us to report a claim or any issue with payment, and we will take care of the rest! </p>
									<p class="paragraph-text paragraph-style">If your policy is not offering you cashless claims, you can choose reimbursement claims. Under reimbursement claims the policyholder bears the repair costs himself and then gets them reimbursed from the insurance company. If the car is repaired at any non-preferred garage, reimbursement claims occur </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingEleven'>
								<h4 class='panel-title'> <a class='collapsed' data-target='#collapseEleven' data-toggle='collapse' href='#collapseEleven' aria-expanded='true' aria-controls='collapseEleven'> 
									How much will I get paid for a car damage claim?
									</a> 
								</h4>
							</div>
							<div id='collapseEleven' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingEleven' data-parent='#accordion4'>
								<div class='panel-body'>
									<div class="panel-body">
										<p class="paragraph-text ">Once your claim is accepted, you will be paid the approved claim amount minus certain deductions which you will have to pay out from your pocket: </p>
										<p class="paragraph-text paragraph-style">Standard or Voluntary Deductible: this is a fixed amount that you have to bear before the policy comes into force. For private cars, this amount currently is Rs. 1,000.</p>
										<p class="paragraph-text paragraph-style">Depreciation: Standard insurance pays for the actual cash value of your damaged or destroyed vehicle part. However, since the part was already in use, its value will be less than or depreciated in comparison to a new replacement part. This will be 30% for fibre components and 50% for plastics and rubber. If you do not want to bear the depreciation cost, you can buy zero depreciation add-on which is available typically for cars not older than 3 years. </p>
									</div>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwelve'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwelve' href='#collapseTwelve' aria-expanded='true' aria-controls='collapseTwelve'> 
									How do I make a claim if my car is stolen and how much compensation will I get?
									</a> 
								</h4>
							</div>
							<div id='collapseTwelve' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwelve' data-parent='#accordion4'>
								<div class="panel-body">
									<p class="paragraph-text ">If your vehicle is stolen, police and the insurance company must be informed immediately. In addition you must keep the transport department also informed. To make a claim, the vehicle needs to be covered under the comprehensive insurance policy. </p>
									<p class="paragraph-text paragraph-style">You will need to submit the police First Information Report (FIR), letter intimating RTO along with requisite claim form duly filled in, to the insurance company. Your claim will be paid after police give the final “non-traceable” report. </p>
									<p class="paragraph-text paragraph-style">The amount you will receive for a theft claim is the Insured Declared Value (IDV) mentioned in the policy. You will need to sign the RC in favour of the insurance company and complete other handover formalities.</p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirteen'>
								<h4 class='panel-title'><a class='collapsed' data-toggle='collapse' data-target='#collapseThirteen' href='#collapseThirteen' aria-expanded='true' aria-controls='collapseThirteen'> 
									What is a third party claim and how is it processed?
									</a> 
								</h4>
							</div>
							<div id='collapseThirteen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirteen' data-parent='#accordion4'>
								<div class='panel-body'>
									<div class="panel-body">
										<p class="paragraph-text">A third party claim, is where your
											vehicle was involved, in causing bodily
											injury, death or damage to property. It is important to ensure that the
											accident is reported immediately to the
											police as well as to the insurance company. On the other hand, if you are a
											victim, that is, if somebody else’s
											vehicle was involved, you must obtain the insurance details of that vehicle and
											make an intimation to the insurer
											of that vehicle.
										</p>
										<p class="paragraph-text paragraph-style">The limit for property damage liability
											is capped at Rs. 7.5 lakhs. Any
											amount above this will have to be borne by the policyholder. There is no limit
											for bodily injury or death claim.
											The amount of liability is decided by a special court, the Motor Accident
											Claims Tribunal, based on factors such
											expenses for medical treatment of the injured, and loss of income in case of
											death.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingFourteen'>
								<h4 class='panel-title'> <a class='collapsed' data-target='#collapseFourteen' data-toggle='collapse' href='#collapseFourteen' aria-expanded='true' aria-controls='collapseFourteen'> 
									How does Turtlemint help with a claim?
									</a> 
								</h4>
							</div>
							<div id='collapseFourteen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingFourteen' data-parent='#accordion4'>
								<div class="panel-body">
									<p class="paragraph-text">It’s simple, just call us on our toll-free number about a claim you want to report, dispute or discuss. Our expert claims team will help you through the entire process. Our team will also work with the insurance companies directly to advance your case, and proactively inform you about the progress. </p>
									<p class="paragraph-text paragraph-style">With our experience of having processed thousands of cases successfully, you can rest assured that you will get the best service and outcome. </p>
									<p class="paragraph-text paragraph-style">You can also visit the link <a href="/raise-claim" target="_blank">https://www.turtlemint.com/raise-claim</a> and raisea claim with Turtlemint easily</p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="faq-top-title">
						<h4>Other FAQs</h4>
						<!-- <span>New user? Let's get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="false">
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingFifteen'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseFifteen' href='#collapseFifteen' aria-expanded='true' aria-controls='collapseFifteen'> 
									How many add-ons can be bought under a car insurance comprehensive plan?
									</a> 
								</h4>
							</div>
							<div id='collapseFifteen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingFifteen'data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">There is no limit to the number of add-ons one can buy under a car insurance plan. Each add-on would attract an additional premium and the policyholder can choose as many add-ons he requires. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingSixteen'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseSixteen' href='#collapseSixteen' aria-expanded='true' aria-controls='collapseSixteen'> 
									What is the term of car insurance plans?
									</a> 
								</h4>
							</div>
							<div id='collapseSixteen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSixteen' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Car insurance plans are offered for a term of one year. After each year the policy should be renewed. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingSeventeen'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseSeventeen' href='#collapseSeventeen' aria-expanded='true' aria-controls='collapseSeventeen'>  
									Is there a grace period to renew car insurance policy?
									</a> 
								</h4>
							</div>
							<div id='collapseSeventeen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSeventeen' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Yes, insurance companies allow a grace period for renewing the car insurance plan. The period offered depends on the policy. Coverage would not be allowed during the grace period. However, the accumulated no claim bonus would be applicable and the policy can be renewed without inspections if the renewal is done in the grace period. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingEighteen'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseEighteen' href='#collapseEighteen' aria-expanded='true' aria-controls='collapseEighteen'> 
									Which type of policy should be bought?
									</a> 
								</h4>
							</div>
							<div id='collapseEighteen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingEighteen' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">A comprehensive car insurance policy is the best choice because it covers damages suffered by the car too. Since such damages also incur huge costs, a comprehensive cover is best. Moreover, add-ons should be selected for making the cover as comprehensive as possible. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingNineteen'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseNineteen' href='#collapseNineteen' aria-expanded='true' aria-controls='collapseNineteen'> 
									What types of discounts are available in car insurance plans?
									</a> 
								</h4>
							</div>
							<div id='collapseNineteen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingNineteen' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">There are various discounts which are available in car insurance plans. These include discounts for installing safety devices, the accumulated no claim bonus, discount for choosing a voluntary deductible and discount for becoming a member of an approved automobile association. </p>
									<p class="paragraph-text paragraph-style">There is also a de-tariff discount that is provided by companies but varies from company to company, location to location and from vehicle to vehicle. It depends on the vehicle’s incurred claim as per the company’s experience and the same can change due to a change in their claim experience! </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty' href='#collapseTwenty' aria-expanded='true' aria-controls='collapseTwenty'> 
									How does the car insurance premium calculator work?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty' data-parent='#accordion5' >
								<div class="panel-body">
									<ul class="list-style mtop0">
										<li class="li paragraph-text">The details of your car like its make, model and variant</li>
										<li class="li paragraph-text">The fuel type of the car</li>
										<li class="li paragraph-text">The registration date</li>
										<li class="li paragraph-text">Registration number of the car</li>
										<li class="li paragraph-text">The type of policy you want to buy</li>
										<li class="li paragraph-text">Whether there is an existing policy. If there is, whether the plan has expired or expiring soon</li>
										<li class="li paragraph-text">If any existing claims have been made in the previous plan or not</li>
										<li class="li paragraph-text">Any discounts or which you are eligible</li>
										<li class="li paragraph-text">The IDV you want</li>
										<li class="li paragraph-text">The add-ons which you want to add to the coverage features</li>
									</ul>
									<p class="paragraph-text paragraph-style">After you provide these details, the calculator would calculate the premiums payable for the policy. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-One'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-One' href='#collapseTwenty-One' aria-expanded='true' aria-controls='collapseTwenty-One'> 
									When does the car insurance policy expire?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-One' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-One' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text "> Car insurance plans are offered as one year contracts. Once the stipulated tenure is over, you have to renew the policy. If the policy is not renewed within the due date, i.e. the date on which the existing policy is expiring, the policy is said to expire. An expired car insurance policy is bad because of the following reasons - </p>
									<ul class="list-style">
										<li class="li paragraph-text">The coverage under the car insurance policy stops as soon as the policy expires. In the event of any subsequent claim you would have to pay the expenses incurred</li>
										<li class="li paragraph-text">An expired car insurance policy violates traffic rules. If you are caught with an expired policy you face legal consequences which involve penalties and also imprisonment </li>
										<li class="li paragraph-text">If the policy is not renewed within a specified time, you lose the accumulated no claim bonus of the plan </li>
										<li class="li paragraph-text">The premium of the renewed policy, after lapse, is higher than normal renewal premiums </li>
										<li class="li paragraph-text">In case of renewing an expired policy, the IDV might be low and there would be an inspection of the car before the policy is renewed. </li>
									</ul>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Two'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Two' href='#collapseTwenty-Two' aria-expanded='true' aria-controls='collapseTwenty-Two'> 
									How can I renew a lapsed car insurance plan?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Two' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Two' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">To renew your car insurance policy you should follow the below-mentioned steps - </p>
									<ul class="list-style">
										<li class="li paragraph-text">Compare the available car insurance policies and choose a plan for renewal </li>
										<li class="li paragraph-text">Request the insurance company to arrange for an inspection of your car </li>
										<li class="li paragraph-text">The insurance company’s surveyor would inspect the car and submit his report after which the insurance company would give you a premium quote </li>
										<li class="li paragraph-text">Pay the premium online and your policy would be renewed </li>
									</ul>
									<p class="paragraph-text paragraph-style">Moreover, if you are renewing within the specified duration, you can use the accumulated no claim bonus of your previous policy to claim a premium discount in the renewed plan. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Three'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Three' href='#collapseTwenty-Three' aria-expanded='true' aria-controls='collapseTwenty-Three'> 
									What is IDV?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Three' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Three'data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">IDV stands for Insured Declared Value. it represents the actual sum insured of the car insurance policy. IDV is calculated by deducting the age based depreciation from the market value of the car. The market value of the car would exclude registration and insurance costs for IDV calculations. The rate of depreciation would depend on the age of the car and would be as follows - </p>
									<table class="table table-insurer table-stripped">
										<thead>
											<tr class="table-header-bg-color">
												<th> Age of the car </th>
												<th> Applicable depreciation </th>
											</tr>
										</thead>
										<tbody>
											<tr class="table-border-remove">
												<td>Less than 6 months</td>
												<td>5%</td>
											</tr>
											<tr class="table-bg-color">
												<td>More than 6 months but less than a year</td>
												<td>15%</td>
											</tr>
											<tr class="table-border-remove">
												<td>More than a year but less than 2 years</td>
												<td>20%</td>
											</tr>
											<tr class="table-bg-color">
												<td>More than 2 years but less than 3 years</td>
												<td>30%</td>
											</tr>
											<tr class="table-border-remove">
												<td>More than 3 years but less than 4 years</td>
												<td>40%</td>
											</tr>
											<tr class="table-bg-color">
												<td>More than 4 years but less than 5 years</td>
												<td>50%</td>
											</tr>
										</tbody>
									</table>
									<p class="paragraph-text paragraph-style">If the car is more than 5 years old, the IDV is mutually decided between the insurance company and the policyholder. </p>
									<p class="paragraph-text paragraph-style">The IDV is paid as claim if the car is damaged beyond repairs or if the car is stolen. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Four'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Four' href='#collapseTwenty-Four' aria-expanded='true' aria-controls='collapseTwenty-Four'> 
									What is premium?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Four' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Four'data-parent='#accordion5' >
								<div class="panel-body">
									<p class="paragraph-text">Premium is the amount paid to buy a car insurance policy and to keep it active. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Five'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Five'  href='#collapseTwenty-Five' aria-expanded='true' aria-controls='collapseTwenty-Five'> 
									What is own damage premium?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Five' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Five' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Own damage premium is the amount of premium paid for covering damages to the car caused by events outside the control of the policyholder like earthquakes, accidents, etc. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Six'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Six'  href='#collapseTwenty-Six' aria-expanded='true' aria-controls='collapseTwenty-Six'> 
									What is at fault?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Six' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Six' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">At fault represents the degree of the policyholder’s contribution to the car collision. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Seven'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Seven' href='#collapseTwenty-Seven' aria-expanded='true' aria-controls='collapseTwenty-Seven'>
									Who is a claims adjuster?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Seven' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Seven' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">A claims adjuster is an individual who investigates and settles the car insurance claim. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Eight'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Eight'  href='#collapseTwenty-Eight' aria-expanded='true' aria-controls='collapseTwenty-Eight'>
									Which documents are required to buy a car insurance plan? 
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Eight' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Eight' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">To buy the policy individuals would have to submit the RC book of the car, invoice of the new car or existing policy document for an old car, No claim bonus certificate of the existing policy if required. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingTwenty-Nine'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseTwenty-Nine' href='#collapseTwenty-Nine' aria-expanded='true' aria-controls='collapseTwenty-Nine'> 
									In case of an expired policy, how would the renewal premium be determined?
									</a> 
								</h4>
							</div>
							<div id='collapseTwenty-Nine' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwenty-Nine' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">If the policy has expired, the Insured Declared Value would be calculated after the inspection of the car has been done by the insurance company. Based on the IDV, the premium would be calculated. Moreover, if the policy is renewed within 90 days of expiry of the old policy, the no claim bonus of the old policy would be applied on the premium and the premium would be discounted. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty' href='#collapseThirty' aria-expanded='true' aria-controls='collapseThirty'> 
									Can online plans be bought only for new cars?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty'data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">No, you can buy online car insurance plans for used cars as well as for old cars when you renew the policy. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-One'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-One' href='#collapseThirty-One' aria-expanded='true' aria-controls='collapseThirty-One'> 
									How to renew car insurance online?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-One' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-One' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">For online renewals you can visit the insurance company’s website or compare other plans on insurance aggregator websites before renewing. Once the plan is shortlisted, the details of the car should be provided and the premium should be paid online. The policy would then be renewed instantly. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Two'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Two'  href='#collapseThirty-Two' aria-expanded='true' aria-controls='collapseThirty-Two'> 
									Do car insurance premiums change when comparison is done at two different times?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Two' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Two' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">No, car insurance premiums do not depend on the time when the comparison took place. It depends on the details of the car. So, the premium would be same whenever the policies are compared. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Three'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Three' href='#collapseThirty-Three' aria-expanded='true' aria-controls='collapseThirty-Three'> 
									Can car insurance quotes be saved?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Three' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Three' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Yes, Turtlemint offers you the facility to save your car insurance quotes for future reference. You can generate the quotes online and then save them for later use. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Four'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Four' href='#collapseThirty-Four' aria-expanded='true' aria-controls='collapseThirty-Four'> 
									Will the premium be the lowest if the insurance company is not changed on renewals?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Four' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Four' data-parent='#accordion5'>
								<div class='panel-body'>
									<div class="panel-body">
										<p class="paragraph-text ">There is no guarantee of cheaper premium rates for continuing with your old insurance company. Insurance companies do not give any loyalty discounts on car insurance premiums if you continue your coverage with them. So, you should compare the available plans to get the lowest premium rate. </p>
									</div>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Five'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Five' href='#collapseThirty-Five' aria-expanded='true' aria-controls='collapseThirty-Five'> 
									Can changes be made in existing car insurance policies?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Five' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Five' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Yes, certain changes can be made in your car insurance policy. Allowed changes include the following - </p>
									<ul class="list-style mtop0">
										<li class="li paragraph-text">Rectification of your name</li>
										<li class="li paragraph-text">Rectification in the registration number, engine number or chassis number of the car</li>
										<li class="li paragraph-text">Change or rectification of address</li>
										<li class="li paragraph-text">Change in the model or the vehicle or the vehicle itself</li>
										<li class="li paragraph-text">Transfer of ownership</li>
										<li class="li paragraph-text">Change in fuel variant or addition of accessories</li>
										<li class="li paragraph-text">Change in RTO</li>
										<li class="li paragraph-text">Recovery or change in the NCB</li>
										<li class="li paragraph-text">Addition, rectification or cancellation of hypothecation </li>
									</ul>
									<p class="paragraph-text paragraph-style">For all the changes the insurance company should be contacted with a proof of change. Additional premiums might be required in some cases which should be paid before the change is endorsed in the insurance policy. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Six'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Six' href='#collapseThirty-Six' aria-expanded='true' aria-controls='collapseThirty-Six'> 
									For how many times can I claim for roadside assistance cover?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Six' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Six' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">You can claim the roadside assistance cover for a maximum of four times during the entire policy period. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Seven'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Seven' href='#collapseThirty-Seven' aria-expanded='true' aria-controls='collapseThirty-Seven'> 
									If I want to cancel my policy, which documents should I submit?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Seven' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Seven' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">To cancel the policy you would have to submit a letter requesting cancellation, proof of an alternate policy to substitute the policy being cancelled, original policy document, proof of sale of the vehicle if it has been sold, acknowledgement letter from the RTO about cancellation of the policy, a NOC certificate from the institution which has financed the car. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Eight'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Eight' href='#collapseThirty-Eight' aria-expanded='true' aria-controls='collapseThirty-Eight'> 
									What is ARAI?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Eight' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Eight' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">ARAI stands for Automotive Research Association of India. Anti-theft devices which have been approved by the ARAI and installed in the car would earn a premium discount. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingThirty-Nine'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseThirty-Nine' href='#collapseThirty-Nine' aria-expanded='true' aria-controls='collapseThirty-Nine'> 
									What is endorsement?
									</a> 
								</h4>
							</div>
							<div id='collapseThirty-Nine' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThirty-Nine' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Any changes made in the car insurance policy is done through an endorsement in the original policy document. Endorsement is, therefore, a written proof of changes done to the policy. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingForty'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseForty' href='#collapseForty' aria-expanded='true' aria-controls='collapseForty'> 
									What is a premium bearing endorsement?
									</a> 
								</h4>
							</div>
							<div id='collapseForty' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingForty' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Premium bearing endorsement depicts that the change which is being made in the policy has attracted an additional premium. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingForty-One'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseForty-One' href='#collapseForty-One' aria-expanded='true' aria-controls='collapseForty-One'> 
									What is CTL?
									</a> 
								</h4>
							</div>
							<div id='collapseForty-One' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingForty-One' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">CTL stands for Constructive Total Loss of the car. A loss if declared to be a CTL if the estimated repair costs exceed the IDV of the policy. In such cases, the IDV is paid as claim. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingForty-Two'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseForty-Two' href='#collapseForty-Two' aria-expanded='true' aria-controls='collapseForty-Two'> 
									Can the car insurance policy be transferred to another individual?
									</a> 
								</h4>
							</div>
							<div id='collapseForty-Two' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingForty-Two' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">Yes, if you are selling your car to another individual you can also transfer the insurance policy of the car to the buyer. While the policy ownership would change, the no claim bonus would remain with you and you can use the bonus to claim a premium discount in another car insurance policy which you buy. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingForty-Three'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseForty-Three' href='#collapseForty-Three' aria-expanded='true' aria-controls='collapseForty-Three'> 
									What is period of policy in car insurance?
									</a> 
								</h4>
							</div>
							<div id='collapseForty-Three' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingForty-Three' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">Period of policy depicts the total duration for which the car insurance policy remains effective on a particular car. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingForty-Four'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseForty-Four' href='#collapseForty-Four' aria-expanded='true' aria-controls='collapseForty-Four'> 
									What is cover note?
									</a> 
								</h4>
							</div>
							<div id='collapseForty-Four' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingForty-Four' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">Before the final policy document is issued by the insurance company, a cover note is issued containing the details of the policy. The cover note is valid for 60 days after it is issued and serves as a proof of insurance till the final policy is issued. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingForty-Five'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseForty-Five' href='#collapseForty-Five' aria-expanded='true' aria-controls='collapseForty-Five'> 
									What is salvage?
									</a> 
								</h4>
							</div>
							<div id='collapseForty-Five' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingForty-Five' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text">In case of CTL, the value for which the damaged vehicle can be sold for salvage is called salvage value of the vehicle. This value is deducted from the IDV before the claim is settled. </p>
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading' role='tab' id='headingForty-Six'>
								<h4 class='panel-title'> <a class='collapsed' data-toggle='collapse' data-target='#collapseForty-Six' href='#collapseForty-Six' aria-expanded='true' aria-controls='collapseForty-Six'> 
									What documents should be carried in the car at all times?
									</a> 
								</h4>
							</div>
							<div id='collapseForty-Six' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingForty-Six' data-parent='#accordion5'>
								<div class="panel-body">
									<p class="paragraph-text ">A copy of the valid driving license, RC certificate of the car, insurance certificate and PUC certificate should be carried in the car at all times. </p>
								</div>
							</div>
						</div>
					</div>
					<p class="disclaimer">*Prices will vary on the basis of your individual profile</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Faqs ======= -->
<?php
get_footer('tmproductreskin');
	