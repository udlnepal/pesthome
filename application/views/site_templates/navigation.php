<header class="header-style1">
	<div class="header">
		<div class="header-area">
			<div class="logo">
				<a href="<?php echo base_url();?>" title="Kantipur Pest Control">
				<img src="<?php echo base_url('site_assets/'); ?>images/logo_kpc.png" alt="Kantipur Pest Control" />
				<!-- <b style="color:#ffcc00;"></b> -->
				</a>
			</div>
	<div class="primarymenu menuwrap">
		<ul id="atp_menu" class="sf-menu">
			<li class="menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<!-- <li class="menu-item"><a href="#">About Us</a>
			
			</li>
			<li class="menu-item"><a href="#">Pest Control</a>
				<ul class="sub-menu">
					<li class="menu-item "><a href="#">Services</a></li>
					<li class="menu-item "><a href="#">Residential Services</a></li>
					<li class="menu-item "><a href="#">Commercial Services</a></li>
					<li class="menu-item "><a href="#">Pest Categories</a></li>
				</ul>
			</li> -->
<?php foreach($menu_setup as $data): ?>
			<li class="menu-item"><a href="<?php echo base_url('site/page/'.$data['slug']); ?>"><?php echo $data['ms_title'] ?></a>
<?php if($data['ms_has_sub']==1){ ?>
				<ul class="sub-menu">

				<?php foreach($submenu as $key=>$sm):?>
					
				<?php if($data['ms_id']==$sm['sms_ms_id']){ ?>
					<li class="menu-item ">
						<a href="<?php echo base_url('site/page/'.$sm['slug']); ?>"><?php echo $sm['sms_title'] ?>
						</a>
					</li> 
				<?php } ?>


				<?php endforeach; ?>

				</ul>

			<?php }?>


			</li>
			
<?php endforeach;?>		



			<li class="menu-item "><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
			<!-- <li class="menu-item "><a href="../shop/index.html">Shop page</a></li> -->
			<li class="menu-item"><a href="<?php echo base_url('site/contact'); ?>">Contact Us</a></li>
		</ul>
		<a href="#" class="iva-mobile-dropdown"></a> 
	</div>

	</div>


		<div class="iva-mobile-menu">
			<ul id="menu-primary-menu" class="iva_mmenu">
				<li class="menu-item ">
					<a href="<?php echo base_url(); ?>">Home</a>
				</li>
				
				<!-- <li class="menu-item"><a href="../pest-control/index.html">Pest Control<span class="iva-children-indenter"><i class="fa fa-angle-down"></i></span></a>
					<ul class="sub-menu">
						<li class="menu-item "><a href="../services/index.html">Services</a></li>
						<li class="menu-item "><a href="../residential-services/index.html">Residential Services</a></li>
						<li class="menu-item "><a href="../commercial-services/index.html">Commercial Services</a></li>
						<li class="menu-item "><a href="../pest-categories/index.html">Pest Categories</a></li>
					</ul>
				</li> -->
				<!-- <li class="menu-item"><a href="../appointment/index.html">Appointment<span class="iva-children-indenter"><i class="fa fa-angle-down"></i></span></a>
					<ul class="sub-menu">
						<li class="menu-item "><a href="../manage-un-confirm-appointments/index.html">Manage Un Confirm Appointments</a></li>
						<li class="menu-item "><a href="../confirm-appointments/index.html">Manage Confirm Appointments</a></li>
						<li class="menu-item "><a href="../manage-cancel-appointments/index.html">Manage Cancel Appointments</a></li>
					</ul>
				</li>	 -->	

<?php foreach($menu_setup as $data): ?>
			<li class="menu-item"><a href="<?php echo base_url('site/page/'.$data['slug']); ?>"><?php echo $data['ms_title'] ?></a></li>
<?php endforeach;?>	

				<li class="menu-item "><a href="<?php echo base_url('blog') ?>">Blog</a></li>
				<li class="menu-item "><a href="../shop/index.html">Shop page</a></li>
				<li class="menu-item"><a href="<?php echo base_url('site/contact'); ?>">Contact Us</a></li>
			</ul>
		</div>
	</div>
</header><!-- #header -->