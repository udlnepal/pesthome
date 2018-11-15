<div id="footer">
	<div class="inner ">
		<div class="col-lg-12 pad_fix">

<div class="col-lg-4 pad_lt_fix ">
			<aside id="contactinfo_widgets-3" class=" widget contactinfo-wg">
				<h3>About Us</h3>
				<div class="contactinfo-wrap">
					<p class="text-justify">We are Kantipur Pest Control. We are there for your service and we are commited in providing best pest control service in the town. You can always rely upon us for the pest control.</p>
				</div>
			</aside>
		</div>



		
			<div class="col-lg-4  ">
			<aside id="contactinfo_widgets-3" class=" widget contactinfo-wg">
				<h3>Contact Us</h3>
				<div class="contactinfo-wrap">
					
					<p><strong><span class="details">Kantipur Pest Control</span></strong></p>
					<p>
						<span class="icon"><i class="fa fa-map-marker fa-lg"></i></span>
						<?php foreach($contact_setup as $key=>$data):?>
						<span class="details"><?php echo $data['address'] ?><br />
												
											
											

					</p>
					<p class="phone">
						<span class="icon"><i class="fa fa-phone fa-lg"></i></span>
						<span class="details"><?php echo $data['phone'] ?></span>
					</p>
					<p>
						<span class="icon"><i class="fa fa-envelope fa-lg"></i></span>
						<span class="details"><a href="mailto:<?php echo $data['email'] ?>"><?php echo $data['email'] ?></a></span>
						<?php endforeach;?>
					</p>
				</div>
			</aside>
		</div>
		<div class="col-lg-4 pad_rt_fix ">
			<aside id="contactinfo_widgets-3" class=" widget contactinfo-wg">
				<h3>Locate Us</h3>
				<div class="contactinfo-wrap">
					<div class="map-box" style="width:350px; height: 200px; overflow: hidden;">
						
						<?php foreach($contact_setup as $key=>$data): ?>
							<?php echo $data['map_plugin'] ?>
						<?php endforeach; ?>
					</div>
					
				</div>
			</aside>
		</div>
	
</div>

</div>
				
	<div class="copyright">
			<div class="inner">
				<div class="copyright_left">
					© 2015 Copyright All Rights Reserved - kantipurpestcontrol.com.np				</div>
				<div class="copyright_right">
					Powered by <a href="http://www.yupnep.com/">YupNep</a> - Developed By <a href="http://www.yourdomain.org/">YupNep</a>
					<!-- <a class="at-footer-branches">More Branches</a>	 -->			</div>

			</div><!-- .inner -->
		</div><!-- .copyright -->
<!-- <div class="footer-branches">
				<div class="inner">
					<aside id="text-4" class=" widget_text">
						<div class="textwidget">
							<div class="one_third">
								<h5>United States</h5>
									<p>15142, Collins Street West<br />
										120 King Street, Melbourne<br />
										Victoria 2000 Australia
									</p>
							</div>
						<div class="one_third" >
							<h5>United Kingdom</h5>
							<p>15142, Collins Street West<br />
								120 King Street, Melbourne<br />
								Victoria 2000 Australia</p></div>
						<div class="one_third last" >
							<h5>Indonesia</h5>
								<p>15142, Collins Street West<br />
									120 King Street, Melbourne<br />
									Victoria 2000 Australia
								</p>
						</div>
						<div class="clear"></div>
						</div>
					</aside>
				</div> -->
</div>
		
</div><!-- #footer -->

</div><!-- #wrapper -->
</div><!-- #layout -->


<div id="back-top"><a href="#header"><span></span></a></div>

<link rel='stylesheet' id='anona-sc-owl-style-css'  href='<?php echo base_url('site_assets/'); ?>extra-plugin/anona-core/anona-shortcodes/css/frontend/owl.carousel68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='anona-sc-owl-theme-css'  href='<?php echo base_url('site_assets/'); ?>extra-plugin/anona-core/anona-shortcodes/css/frontend/owl.theme68b3.css?ver=1' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/comment-reply.min09db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<!-- <script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/mediaelement/wp-mediaelement.min09db.js'></script> -->
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/jquery.easing.1.309db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/hoverIntent09db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/superfish09db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/jquery.preloadify.min09db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/jquery.prettyPhoto09db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/jquery.fitvids09db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/sys_custom5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/jquery.flexslider-min09db.js'></script>
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/theme-love5152.js?ver=1.0'></script>
<!-- <script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>js/wp-embed.min09db.js'></script> -->
<script type='text/javascript' src='<?php echo base_url('site_assets/'); ?>extra-plugin/anona-core/anona-shortcodes/js/frontend/owl.carousel09db.js'></script>

</body>
</html>