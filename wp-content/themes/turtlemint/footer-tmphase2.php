<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Turtlemint
	 */
	
	?>
<footer id="colophon" class="site-footer" style="display: none;">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'turtlemint' ) ); ?>">
		<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'turtlemint' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'turtlemint' ), 'turtlemint', '<a rel="nofollow" href="http://www.supramind.com">Supramind</a>' );
			?>
	</div>
	<!-- .site-info -->
</footer>
<!-- #colophon -->
<!-- ======= footer ======= -->
<!-- ======= Mobile footer ======= -->
<div class="row-2 padd-fb-45 footer footer-mobile">
	<div class="container">
		<div class="row-2 padd-fb">
			<div class="footer-col-2">
				<div class="footer-col">
					<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/logo.png" alt class="footer-logo"></a>
					<div style="width:200px; margin:0 auto;margin-bottom: 25px">
						<a target="_blank" href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/twitter-active.png" class="social-icons"></a>								
						<a target="_blank" href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/instagram-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/facebook-active.png" class="social-icons"></a>
						<a target="_blank" href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/linkedin-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/you-tube-active.png" class="social-icons"></a>
					</div>
				</div>
			</div>
			<div class="footer-col-2">
				<h4>Get Insured</h4>
				<div class="footer-col-50">
					<ul class="footer-links">
						<li>
							<a href="/car-insurance" onclick="addUTM(this); return false;">Car Insurance</a>
						</li>
						<li>
							<a href="/two-wheeler-insurance" onclick="addUTM(this); return false;">Bike Insurance</a>
						</li>
					</ul>
				</div>
				<div class="footer-col-50">
					<ul class="footer-links">
						<li>
							<a href="/health-insurance" onclick="addUTM(this); return false;">Health Insurance</a>
						</li>
						<li>
							<a href="/life-insurance" onclick="addUTM(this); return false;">Life Insurance</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-col-2">
				<h4>Quick Links</h4>
				<div class="footer-col-50">
					<ul class="footer-links">
						<li>
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/about-us">About us</a>
						</li>
					</ul>
				</div>
				<div class="footer-col-50">
					<ul class="footer-links">
						<!-- <li>
							<a href="/general-insurance-companies-in-india" target="_blank">Non-life insurance partners</a>
							</li> -->
						<li>
							<a href="/raise-claim">Claim</a>
						</li>
						<li>
							<a href="/blog/">Blog</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-col-2">
				<div class="footer-col-50">
					<ul class="footer-links">
						<li>
							<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
						</li>
						<li>
							<a href="https://careers.turtlemint.com/jobs">Careers</a>
						</li>
					</ul>
				</div>
				<div class="footer-col-50">
					<ul class="footer-links">
						<a href="/posp-agreement/">PoSP Agreement</a>
						</li>
						<li>
							<a href="/wp-content/uploads/2022/12/TIB-MGT-7-PDF.pdf" target="_blank">Annual Returns</a>
						</li>
						<li>
							<a target="_blank" href="/wp-content/uploads/2023/01/Grievance-Redressal-Policy.pdf" target="_blank">Grievance Policy</a>
						</li>
						<!-- <li>
							<a href="https://www.flurish.in/" target="_blank">Flurish</a>
						</li> -->
					</ul>
				</div>
			</div>
			<div class="footer-col-2">
				<h4>Contact</h4>
				<p><span style="font-weight: 600;">Registered & Corporate Office :</span><br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br>								
				</p>
				<a href="https://www.irdai.gov.in" target="_blank"><img style="max-width: 130px; margin-top: 10px;" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/irda-logo.webp"></a>
			</div>
			<div class="footer-col-2">
				<h4></h4>
				<p><span style="font-weight: 600;">Turtlemint Insurance Broking Services Pvt Ltd (f/k  Invictus Insurance Broking Services Pvt Ltd)</span></p>
				<p><a href="/irda-license/"><span style="text-decoration: underline;">IRDAI License No. 487,</span></a></br>
					Composite Broker,</br>
					Valid upto : 02/04/2026 (Renewable) 
				</p>
				<p><span style="font-weight: 600;">Principal Officer: Vilas Gandre,</span></br><a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br> <a href="tel:+919833248023"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>+91-9833248023</u></a> </p>
				<p><span style="font-weight: 600;">Secured by:</span></p>
				<a href="https://www.globalsign.com/" target="_blank" title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-45_en.gif"></a>
			</div>
			<div class="footer-col-100">
				<p>Insurance is the subject matter of the solicitation. For more details on policy terms, conditions, exclusions, limitations, please refer/read policy brochure carefully before concluding sale.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="footer-copy-right">
					<p>© 2022 Turtlemint, All Rights Reserved.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer-copy-links">
					<a href="/privacy/">Policy Statements</a>
					<a href="/terms/">Terms & Conditions</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- ======= TAB footer ======= -->
<div class="row-2 padd-fb-45 footer footer-tab">
	<div class="container">
		<div class="row-four">
			<div class="footer-col-12">
				<div class="footer-col row-2">
					<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/logo.png" alt class="tab-logo"></a>
					<div style="width:200px; margin:0 auto;margin-bottom: 25px">
						<a target="_blank" href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/twitter-active.png" class="social-icons"></a>								
						<a target="_blank" href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/instagram-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/facebook-active.png" class="social-icons"></a>
						<a target="_blank" href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/linkedin-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/you-tube-active.png" class="social-icons"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row-2 padd-fb">
			<div class="row-four">
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Get Insured</h4>
						<ul class="footer-links">
							<li>
								<a href="/car-insurance" onclick="addUTM(this); return false;">Car Insurance</a>
							</li>
							<li>
								<a href="/two-wheeler-insurance" onclick="addUTM(this); return false;">Bike Insurance</a>
							</li>
							<li>
								<a href="/health-insurance" onclick="addUTM(this); return false;">Health Insurance</a>
							</li>
							<li>
								<a href="/life-insurance" onclick="addUTM(this); return false;">Life Insurance</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Quick Links</h4>
						<ul class="footer-links">
							<li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/about-us">About us</a>
							</li>
							<li>
								<a href="/blog/">Blog</a>
							</li>
							<li>
								<a href="/raise-claim">Claim</a>
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
							</li>
							<li>
								<a href="https://careers.turtlemint.com/jobs">Careers</a>
							</li>
							<li>
								<a href="/posp-agreement/">PoSP Agreement</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2022/12/TIB-MGT-7-PDF.pdf" target="_blank">Annual Returns</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2023/01/Grievance-Redressal-Policy.pdf" target="_blank">Grievance Policy</a>
							</li>
							<!-- <li>
								<a href="https://www.flurish.in/" target="_blank">Flurish</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Contact</h4>
						<p><span style="font-weight: 600;">Registered & Corporate Office :</span><br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br> 
						</p>
						<p> <a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br><a href="mailto:support@turtlemint.com"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i><u>support@turtlemint.com</u></a></p>
						<p>     
							<a href="https://www.irdai.gov.in" target="_blank"><img style="max-width: 100px; margin-top: 20px;" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/irda-logo.webp"></a>
						</p>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<p><span style="font-weight: 600;">Turtlemint Insurance Broking Services Pvt Ltd (f/k  Invictus Insurance Broking Services Pvt Ltd)</span></p>
						<p><a href="/irda-license/"><span style="text-decoration: underline;">IRDAI License No. 487,</span></a></br>
							Composite Broker,</br>
							Valid upto : 02/04/2026 (Renewable) 
						</p>
						<p><span style="font-weight: 600;">Principal Officer: Vilas Gandre,</span></br><a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br> <a href="tel:+919833248023"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>+91-9833248023</u></a> </p>
						<p><span style="font-weight: 600;">Secured by:</span></p>
						<a href="https://www.globalsign.com/" target="_blank" title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-45_en.gif"></a>
					</div>
				</div>
				<div class="footer-col-100">
					<p>Insurance is the subject matter of the solicitation. For more details on policy terms, conditions, exclusions, limitations, please refer/read policy brochure carefully before concluding sale.</p>
				</div>
			</div>
		</div>
		<div class="row-2 padd-ct">
			<div class="row">
				<div class="col-md-6">
					<div class="footer-copy-right">
						<p>© 2022 Turtlemint, All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-copy-links">
						<ul>
							<li>
								<a href="/privacy/">Policy Statements</a>
							</li>
							<li>
								<a href="/terms/">Terms & Conditions</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Desktop footer ======= -->	
<div class="row-2 padd-fb-45 footer footer-desktop">
	<div class="container">
		<div class="row-2 padd-fb">
			<div class="row-four">
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<a href="/"> <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/logo.png" alt class="fo-logo"></a>
						<a target="_blank" href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/twitter-active.png" class="social-icons"></a>								
						<a target="_blank" href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/instagram-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/facebook-active.png" class="social-icons"></a>
						<a target="_blank" href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/linkedin-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/you-tube-active.png" class="social-icons"></a>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Get Insured</h4>
						<ul class="footer-links">
							<li>
								<a href="/car-insurance" onclick="addUTM(this); return false;">Car Insurance</a>
							</li>
							<li>
								<a href="/two-wheeler-insurance" onclick="addUTM(this); return false;">Bike Insurance</a>
							</li>
							<li>
								<a href="/health-insurance" onclick="addUTM(this); return false;">Health Insurance</a>
							</li>
							<li>
								<a href="/life-insurance" onclick="addUTM(this); return false;">Life Insurance</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Quick Links</h4>
						<ul class="footer-links">
							<li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/about-us">About us</a>
							</li>
							<li>
								<a href="/blog/">Blog</a>
							</li>
							<li>
								<a href="/raise-claim">Claim</a>
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
							</li>
							<li>
								<a href="https://careers.turtlemint.com/jobs">Careers</a>
							</li>
							<li>
								<a href="/posp-agreement/">PoSP Agreement</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2022/12/TIB-MGT-7-PDF.pdf" target="_blank">Annual Returns</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2023/01/Grievance-Redressal-Policy.pdf" target="_blank">Grievance Policy</a>
							</li>
							<!-- <li>
								<a href="https://www.flurish.in/" target="_blank">Flurish</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Contact</h4>
						<p><span style="font-weight: 600;">Registered & Corporate Office :</span><br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br> 
						</p>
						<p> <a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br><a href="mailto:support@turtlemint.com"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i><u>support@turtlemint.com</u></a></p>
						<p>     
							<a href="https://www.irdai.gov.in" target="_blank"><img style="max-width: 100px; margin-top: 20px;" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/irda-logo.webp"></a>
						</p>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<p><span style="font-weight: 600;">Turtlemint Insurance Broking Services Pvt Ltd (f/k  Invictus Insurance Broking Services Pvt Ltd)</span></p>
						<p><a href="/irda-license/"><span style="text-decoration: underline;">IRDAI License No. 487,</span></a></br>
							Composite Broker,</br>
							Valid upto : 02/04/2026 (Renewable) 
						</p>
						<p><span style="font-weight: 600;">Principal Officer: Vilas Gandre,</span></br><a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br> <a href="tel:+919833248023"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>+91-9833248023</u></a> </p>
						<p><span style="font-weight: 600;">Secured by:</span></p>
						<a href="https://www.globalsign.com/" target="_blank" title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-45_en.gif"></a>
					</div>
				</div>
				<div class="footer-col-100">
					<p>Insurance is the subject matter of the solicitation. For more details on policy terms, conditions, exclusions, limitations, please refer/read policy brochure carefully before concluding sale.</p>
				</div>
			</div>
		</div>
		<div class="row-2"></div>
		<div class="row-2 padd-ct">
			<div class="row">
				<div class="col-md-6">
					<div class="footer-copy-right">
						<p>© 2022 Turtlemint, All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-copy-links">
						<ul>
							<li>
								<a href="/privacy/">Policy Statements</a>
							</li>
							<li>
								<a href="/terms/">Terms & Conditions</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<!-- inject:foot -->
<!-- inject:foot -->
<!-- modal -->
<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
	style="height: 100%; width: 100%">
	<div class="modal-dialog modal-margin">
		<div class="modal-content">
			<div class="modal-body" id="yt-player">
				<iframe id="yt-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="Homevid1-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
	style="height: 100%; width: 100%">
	<div class="modal-dialog modal-margin">
		<div class="modal-content">
			<div class="modal-body" id="Homevid1-player">
				<iframe id="Homevid1-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="Homevid2-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
	style="height: 100%; width: 100%">
	<div class="modal-dialog modal-margin">
		<div class="modal-content">
			<div class="modal-body" id="Homevid2-player">
				<iframe id="Homevid2-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="Homevid3-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
	style="height: 100%; width: 100%">
	<div class="modal-dialog modal-margin">
		<div class="modal-content">
			<div class="modal-body" id="Homevid3-player">
				<iframe id="Homevid3-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="quiz-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height: 100%; width: 100%">
	<div class="modal-dialog modal-margin">
		<div class="modal-content">
			<div class="modal-body" id="quiz-player">
				<!-- <iframe id="quiz-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe> -->
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="refund" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body footer-modal">
				<button type="button" class="close footer-modal-close" data-dismiss="modal" aria-label="Close">
					<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-inline--fa fa-times" data-icon="times" data-prefix="far" style="width:.75em" viewBox="0 0 384 512">
						<path d="M231.6 256l130.1-130.1c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L192 216.4 61.9 86.3c-4.7-4.7-12.3-4.7-17 0l-22.6 22.6c-4.7 4.7-4.7 12.3 0 17L152.4 256 22.3 386.1c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L192 295.6l130.1 130.1c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L231.6 256z"/>
					</svg>
				</button>
				<h4 class="modal-title footer-modal-title" id="myModalLabel">Policy Cancellation & Refund</h4>
				<p class="footer-paragraph">Policy cancellation and refund of the premium shall be as per the terms and conditions of the policy. The refunds are processed by the Insurance Company directly. You are requested to contact the toll free number of your Insurance Company or refer the respective section of your Policy terms and conditions. You can also call us at our toll free number <a href="tel:18002660101"><u>1800-266-0101</u></a> or write a mail to us at <a href="mailto:support@turtlemint.com"><u>support@turtlemint.com</u></a>. We shall be available to guide/assist you.</p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="complaints" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body footer-modal">
				<button type="button" class="close footer-modal-close" data-dismiss="modal" aria-label="Close">
					<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-inline--fa fa-times" data-icon="times" data-prefix="far" style="width:.75em" viewBox="0 0 384 512">
						<path d="M231.6 256l130.1-130.1c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L192 216.4 61.9 86.3c-4.7-4.7-12.3-4.7-17 0l-22.6 22.6c-4.7 4.7-4.7 12.3 0 17L152.4 256 22.3 386.1c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L192 295.6l130.1 130.1c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L231.6 256z"/>
					</svg>
				</button>
				<h4 class="modal-title footer-modal-title" id="myModalLabel">Complaints & Grievance</h4>
				<p class="footer-paragraph">For any complaints, services related issues or policy, claim related queries/ customer can reach us on - our toll free number <a href="tel:18002660101"><u>1800-266-0101</u></a> Or address mail to <a>support@turtlemint.com</a></p>
				<p class="footer-paragraph">For escalations customer can write to us at <a>po@invictusinsure.com</a> or call us at <br><a href="tel:18002660101"><u>+91-9833248023</u></a></p>
				<p class="footer-paragraph">For more details on complaints and grievances, customers are requested to visit <a>http://www.policyholder.gov.in/</a></p>
			</div>
		</div>
	</div>
</div>
<!--Javascript-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/tm-assets/js/index.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/tm-assets/js/verticalLanding.js"></script>
<script>
	$('.slider-nav').slick({
	    slidesToShow: 5,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 20000,
	    dots: true,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 5,
	            slidesToScroll: 1,
	            infinite: true,
	            dots: true
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 3,
	            slidesToScroll: 1
	        }
	    },
	    {
	        breakpoint: 480,
	        settings: {
	            slidesToShow: 1,
	            slidesToScroll: 1
	        }
	    }
	    ],
	});
</script>
<script>
	$('.slider-client').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 2000,
	   
	});
</script>
<!-- Slider for car section-->
<script>
	$('.slider-nav-car').slick({
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 5000,
	    dots: false,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	            infinite: true,
	            dots: true,
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	dots: true,
	        }
	    },
	    {
	        breakpoint: 480,
	        settings: {
	            slidesToShow: 1,
	            slidesToScroll: 1,
	dots: true,
	        }	
	    }
	    ],
	});
</script>
<!-- End of Slider for car section-->
<!-- Slider for bike section-->
<script>
	$('.slider-nav-bike').slick({
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 5000,
	    dots: false,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	            infinite: true,
	            dots: true,
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	dots: true,
	        }
	    },
	    {
	        breakpoint: 480,
	        settings: {
	            slidesToShow: 1,
	            slidesToScroll: 1,
	dots: true,
	        }
	    }
	    ],
	});
</script>
<!-- End of Slider for bike section-->
<!-- Slider for health section-->
<script>
	$('.slider-nav-health').slick({
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 5000,
	    dots: false,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	            infinite: true,
	            dots: true,
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	dots: true,
	        }
	    },
	    {
	        breakpoint: 480,
	        settings: {
	            slidesToShow: 1,
	            slidesToScroll: 1,
	dots: true,
	        }
	    }
	    ],
	});
</script>
<!-- End of Slider for health section-->
<!-- Slider for life section-->
<script>
	$('.slider-nav-life').slick({
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 5000,
	    dots: false,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	            infinite: true,
	            dots: true,
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1,
	dots: true,
	        }
	    },
	    {
	        breakpoint: 480,
	        settings: {
	            slidesToShow: 1,
	            slidesToScroll: 1,
	dots: true,
	        }
	    }
	    ],
	});
	
	/* End of Slider for life section*/
	/*Slick Dot reduce to 5 */
	/*jQuery(document).ready(function(){
	jQuery("ul.slick-dots>li").hide();
	jQuery("ul.slick-dots li").slice(0,7).show();
	});*/
</script>
<script>
	if(screen.width > 1025){/*So that it doesnt run on Tab*/
		document.getElementById("CarDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/car-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/car-insurance");
			};
		document.getElementById("BikeDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/two-wheeler-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/two-wheeler-insurance");
			};
		document.getElementById("HealthDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/health-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/health-insurance");
			};
		document.getElementById("LifeDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/life-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/life-insurance");
			};
	}
</script>
<style>
	@media (min-width: 1024px){
		body.home .custom-video-crd h5 {
			min-height: unset;
		}
		body.home .custom-video-crd p{
			min-height: 54px;
		}
		.custom-video-crd p{
		margin-bottom: 0px;
		}
	}
	/*Vertical Form Validation */
	div#errMsg {
		color: red;
		font-family: 'Montserrat-Regular';
		font-size: .9rem;
		padding-left: 20px;
	}
	@media (min-width: 1023px) and (max-width: 1025px){/*Pawan testing iPad Faq overlap */
		body.page-template-page-content-b-revamp .faq-box .panel-title, body.page-template-page-content-a-2-revamp .faq-box .panel-title, body.page-template-page-content-a-revamp .faq-box .panel-title {
			max-width: 95%;/*Health 97, Bike 95 */
		}
	}
	/*Navigation active green */
	.dropbtn.tmactive{color:#007c52;}
	h1{margin-bottom: 0.5rem; margin-top: 0px;}
	button,input{line-height: inherit;}
	/*Slick Dot reduce to 5 */
	ul.slick-dots>li{display: none;}
	ul.slick-dots>li:nth-child(1),ul.slick-dots>li:nth-child(2),ul.slick-dots>li:nth-child(3),ul.slick-dots>li:nth-child(4),ul.slick-dots>li:nth-child(5),ul.slick-dots>li:nth-child(6) { display: inline-block;}
</style>

<!-- Desktop-->
<style>
            /*Uncommon*/
            .car-banner{
			background: url(./assets/img/car-banner.png), #F8F4F3;
			background-repeat: no-repeat;
			background-position-x: right;
			background-size: contain;
			height: 500px;
			align-items: center;
			display: flex;
			}
			.life .adv-content{ width: unset; text-align: center;}
			/*Style.css*/
			.navbar-light .navbar-nav .nav-link {
			font-family: Montserrat-Regular;
			font-size: 0.85rem;
			}
			.banner-crd {
			padding-top: 2%;
			}
			.main-banner-txt h5 a {
			font-family: 'Montserrat-Medium';
			color: #007D65;
			}
			.main-banner-txt h4 {
			font-size: 1.6rem;
			}
			.secondary-banner{border-radius: 0 100px;}
			/*End of Style.css*/
			/*Common*/
			.section-heading h3{font-family: 'Montserrat', sans-serif;font-weight: 700;}
			.section-heading h2 {
			font-size: 35px;
			text-align: center;
			font-family: Montserrat-Bold;
			color: #000;
			margin-bottom: 30px;
			} 
			.video-row h2, .our-partners h2, .bottom-seo-text h2{
			font-family: 'Montserrat-Bold', sans-serif;
			font-size: 2.2rem;
			color: #000;
			margin-bottom: 1.8rem;
			}
			/*Navigation*/
			.dropdown:hover>.dropdown-menu {/*OnHover Show Dropdown*/
			display: block;
			}
			/*Banner*/
			.main-banner-txt {
			padding-bottom: 7%;
			}
			.main-banner-txt h1 {
			font-family: 'Montserrat-Bold', sans-serif;
			font-size: 2.2rem;
			color: #000;
			}
			
			/*20211115*/
			/*Nav*/
			#navbarCollapse > ul > li > a:hover,
			#navbarCollapse > ul > li.nav-item.dropdown.custom-nav-dropdown.active>a,
			#navbarDropdownMenuLink:hover,
			#navbarCollapse > ul > li.nav-item.custom-nav-btn > a:hover,
			#navbarCollapse > ul > li.nav-item.custom-nav-btn2 > a:hover{color:#009F69;}
			a.dropdown-item.see-more {    text-decoration: underline;}
			/*MegaMenu*/
			.dropdown-toggle::after{font-size: 0.6em;}
			.navbar-expand-md .navbar-nav .dropdown-menu-right {
			/*right: -135px;*/
			left: -63vh;
			width: 80vw;
			padding-bottom: 15px;
			}
			.d-md-flex.align-items-start.justify-content-start {
			padding-left: 20px;
			padding-top: 15px;
			}
			.dropdown-header {
			font-family: 'Montserrat', sans-serif;
			font-size: 15px;
			font-weight: 500;
			color: black;
			}
			a.dropdown-item {
			font-family: 'Montserrat', sans-serif;
			font-size: 13px;
			line-height: normal;
			}
			.dropdown-header.img-text-btn {
			border: 1px solid lightgray;
			padding: 20px 20px 10px 20px;
			margin: 10px;
			}
			.dropdown-header.img-text-btn .img-menu-1{
			width: 24%;
			padding: 5px;
			margin-bottom: 18px;
			}
			.dropdown-header.img-text-btn p{
			display: inline-block;
			font-family: 'Montserrat', sans-serif;
			font-weight: 500;
			font-size: 13px;
			padding: 0px 10px;
			}
			.dropdown-header.img-text-btn .img-menu-arrow{
			width: 16%;
			padding: 5px;
			}
			.dropdown-header.img-text-btn p{display: inline-block;}
			/*Banner*/
			.main-banner-txt h2 {
			font-family: 'Montserrat', sans-serif;
			font-size: 35px;
			color: #000;
			font-weight: 700;
			}
			.banner-img {
			background: #ffffff;
			padding: 10px;            
			}
			.banner-img:hover{border: 2px solid #00D679;}
			.banner-img img {    
			width: 100%;
			padding: 0px;
			}
			/*Search In Banner*/
			.banner-crd {padding-bottom: 0px;}
			.continue-nonumber-wrapper{padding-bottom: 30px;
			padding-left: 16px;
			padding-top: 7px;}
			.search-plans{padding-right: 0px;}
			.search-input {
			width: 100%;
			padding: 2.3% 0 3% 4%;
			font-family: 'Montserrat-Regular';
			font-size: .95em;
			border: none;
			-webkit-box-shadow: -1px 2px 4px 1px #9e9e9e54;
			box-shadow: -1px 2px 4px 1px #9e9e9e54;
			}
			.search-btn-wrapper{padding-left: 0px;}
			.search-btn {
			background: black;
			color: white;
			padding: 3% 7%;
			font-family: 'Montserrat-Medium';
			font-size: .85em;
			}
			.search-icon{background: url(<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/search.png) no-repeat;
			float: left;
			width: 50px;
			height: 30px;
			}
			img.search-img {
			padding-right: 5px;
			width: 20px;
			}				
			/*quiz*/
			.quiz-row{background-color: white;}
			.custom-advisor{padding: 0; margin-top:-80px;}
			.adv-content {
			width: 80%;
			padding-left: 22%;
			padding-top: 30px;
			}
			.adv-content h5{padding-bottom: 10px; margin-left: 26px;}
			div.adv-content > a{
			border-color: darkgrey;
			background: white;
			border-radius: 4px;
			border: 1px solid;
			padding: 5px 60px;
			margin-left: 32%;
			color: black;
			text-decoration: none;
			}
			.adv-img {
			width: 20%;
			}
			.adv-img img {
			width: auto;
			height: 160px;
			}
			/*Video Row*/
			.video-row{
			background-color: white; 
			padding-top: 5%;
			padding-bottom: 2%;
			}
			.custom-many-optns {
			text-align: center;
			}
			.custom-many-optns h3{font-family: 'Montserrat', sans-serif;}
			.custom-video-crd{background-color: white;}
			.custom-video-crd:hover{border: 2px solid #00D679; padding: 8px;}
			.custom-video-crd h5 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			padding-top: 8px;
			}
			.custom-video-crd p {
			font-size: 0.87rem;
			}
			/*Know More*/
			.knowmore-row{background-color: white; padding-bottom: 7%;}
			.knowmore-title{text-align: center;}
			.knowmore-title h4{font-size: 1.3rem; font-family: 'Montserrat-Medium', sans-serif; margin-bottom: 1.5%;}
			.knowmore-btn-row .btn-watch-more{display: inline-block; font-size: 1rem;}
			.knowmore-btn-row  a.btn-watch-more:nth-child(1){margin-right: 1%;}
			.knowmore-btn-row  a.btn-watch-more:nth-child(2){margin-left: 1%;}
			/**/
			.life-offer .col-md-4 {
			text-align: center;
			background: white;
			padding: 40px 19px;
			margin: 10px;
			max-width: 30%;
			}
			.life-offer .col-md-4:hover{border: 2px solid #00D679; padding:38px 17px;}
			.life-offer p {
			font-size: 14px;
			}
			/*Blog*/
			.custom-become-part{
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			}
			.custom-become-content h3{
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			}
			.blog-cta-section {
			padding: 50px 0px;
			}
			.blog-cta-section p {
			font-size: 17px;
			color: #000;
			font-weight: 400;
			font-family: 'Montserrat', sans-serif;
			margin-bottom: 0;
			}
			/**/
			.custom-become-content p{font-family: 'Montserrat', sans-serif;}
			.custom-become-content img {    height: 40px;    width: auto;}
			/**/
			.container.secondary-banner.padd-tb-50{margin-top: 80px;}
			/*Partners Logo*/
            .our-partners .slick-slide img {
                padding: 15%;
            }
			/*Testimonial*/
			.customer-about .c-caption-span-2 img {
			width: 30px;
			padding-top: 14px;
			}
			.customer-about .c-caption p {
			padding-top: 12px;
			font-size: 20px;
			line-height: 32px;
			font-family: 'Montserrat';
			font-weight: 400;
			}
			button.slick-next.slick-arrow,button.slick-prev.slick-arrow {
			width: 40px;
			height: 40px;
			background: unset;
			z-index: 9;
			}
			.slick-prev {
			left: 688px;
			top: 207px;
			}
			.slick-next {
			right: 32px;
			top: 207px;
			}
			.slick-prev:before {
			/*content: url(./assets/img/prev-icon.png);   */
			content:'';
			background-image: url('<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/prev-icon.png');
			background-size: 100% 100%;
			width: inherit;
			height: inherit;
			display: inline-block;
			opacity: 1;
			}
			.slick-next:before {
			/*content: url(./assets/img/next-icon.png); */
			content:'';
			background-image: url('<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/next-icon.png');
			background-size: 100% 100%;
			width: inherit;
			height: inherit;
			display: inline-block;  
			opacity: 1;
			}
			/*SEO section*/
			.bottom-seo-text{
			padding: 100px 0px;
			}
			h2.SEO-content-heading{padding-top: 8%;}
			.bottom-seo-text .custom-many-optns {
			text-align: left;
			padding-top: 50px;
			}
			.custom-many-optns h3 {
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			}
			.custom-many-optns h4 {
			font-family: 'Montserrat', sans-serif;
			color: #000;
			font-weight: 300;
			font-size: 20px;
			}
			/*SEO Content*/
			h3.SEO-content-title {
			font-size: 1.2rem;
			font-family: 'Montserrat-Medium';
			text-align: left;
			padding: 2% 0 1% 0;
			margin: 0;
			}
			table{margin: 0 auto;}
			th>p,td>p {
			margin-bottom: unset;
			}
			.bottom-seo-text{text-align: center;}
			.SEO-content-text, .SEO-content ol, .SEO-content ul, .SEO-content li {
			text-align: left;
			margin-top: 10px;
			}
			.SEO-content ol, .SEO-content ul {
			margin-left: 15px;
			margin-right: 15px;
			padding-left: 20px;
			}
			/*FAQ*/
			.faq-section {padding: 0 0 8% 0;}
			.faq-box {
			margin-top: 0px;
			/*padding-top: 0px;*/
			}
			.faq-top-title {
			margin-top: 9%;
			}
			.faq-top-title:before {
			content: url(<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/icon-question.png);
			/* position: relative; */
			float: left;
			padding: 3px 9px 0 0;
			margin-left: -30px;
			}
			.faq-top-title:nth-child(1){margin-top: 10px;}
			.faq-box h4.panel-title a{font-family: 'Montserrat-Medium';}
			.faq-top-title span, .faq-box h4.panel-title a,.faq-box .panel-body{
			font-family: 'Montserrat', sans-serif;
			}
			.faq-box .panel-body{font-size: 1rem;}
			.faq-top-title h4{
			font-weight: 500;
			}
			.faq-section ul, .faq-section li{list-style-type: disc;}
			.faq-section li {
			margin-left: 15px;
			}
			/*Footer*/
			.footer .row-2.padd-fb {border-bottom: 1px solid #ccc;}
			.footer .social-icons {}
			.footer-copy-links ul li { padding: 0 11px;}
			/*Less than Desktop*/
			@media (max-width: 768px) {
			.car-banner{
			background: #efeeee;
			}
			}
			/*QAfixes20220512 */
			.search-btn-box {cursor: pointer;}
			.container.blogpad ul li a,.container.blogpad ol li a{overflow-wrap: break-word;}
			@media (max-width: 768px) {
				.container.blogpad table{display: block;  overflow-x: auto;}
			}
		</style>
<!-- endinject:foot -->
</body>
</html>