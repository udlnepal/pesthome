
<div id="subheader" class="sleft" >
	<div class="subheader-inner">
		<div class="subdesc">
			<h1 class="page-title">Title Goes Here</h1>
		</div>
		<div class="breadcrumb-wrap">
			<span class="breadcrumbs">
				<!-- Breadcrumb NavXT 6.2.0 -->
				<a title="Pest Control" class="home">
					<i class="fa fa-home fa-lg"></i>
				</a>
				<span>
					<i class="fa fa-angle-right"></i>
				</span>
				<span typeof="v:Breadcrumb">
					<span property="v:title">Title Goes here</span>
				</span>
			</span>
		</div>
		
	</div>
</div>
<div id="main" class="rightsidebar">
	<div id="primary" class="pagemid">
		<div class="inner">		
			<main class="content-area" role="main">
				<div class="entry-content-wrapper clearfix">				
				<?php foreach($create_post as $key=>$data): ?>
				<article id="post-2177" class="">
					<header class="entry-header">
						<div class="entry-meta">
							<span class="iva-pm-byauthor">
								<a href="#"><?php echo $data['post_author']?></a>
							</span>
							<span class="iva-pm-postin"><?php echo $data['post_date']?></span>
						</div><!-- .entry-meta -->
						<h2 class="entry-title">
							<a href="../sharing-test-title-goes-here/index.html" rel="bookmark"><?php echo $data['post_title']?></a>
						</h2>
					</header><!-- .entry-header -->

					<div class="postimg">
					<figure>
						<img    alt="Post Title Goes Here" src="<?php  echo base_url('site_assets/uploads/blog/'); ?><?php echo $data['post_image_name']?>" width="870" height="350"></figure>
					</div>
					<div class="entry-content">
						<p>
							<?php echo $data['post_content'] ?>
						</p>
						<a class="more-link" href="post/slug">
						<span>Continue reading</span>
						</a>		
					</div><!-- .entry-content -->
				</article>
			<?php endforeach; ?>
				
				</div>
			</main><!-- .content-area -->
			
			<div id="sidebar">
	<div class="content widget-area">
			<aside id="recentpost_entries-2" class=" widget widget_postslist">		<h3>Recent Posts</h3>		<ul>
					<li>
									<div class="thumb"><a href="../sharing-test-title-goes-here/index.html" title="Sharing test title goes here">
						<img   class="imgborder"  alt="Sharing test title goes here" src="<?php echo base_url('site_assets/images'); ?>/bagimage-50x50.jpg" width="50" height="50">						</a>
						</div>
								<div class="pdesc">
				<a href="../sharing-test-title-goes-here/index.html" title="Sharing test title goes here">Sharing test title goes here</a>
									<p>Fusce feugiat a justo non rutrum. Phasel...</p>
							</div>

			</li>
					<li>
							<div class="pdesc">
				<a href="../link-post-type-format/index.html" title="[Link] Post Type Format">[Link] Post Type Format</a>
									<p>Pellentesque facilisis ipsum sed urna or...</p>
							</div>

			</li>
					<li>
							<div class="pdesc">
				<a href="../audio-post-type-format/index.html" title="Audio Post Type Format">Audio Post Type Format</a>
									<p>[audio mp3="http://www.aivahthemes.com/h...</p>
							</div>

			</li>
					<li>
							<div class="pdesc">
				<a href="../video-post-format/index.html" title="Video Post Format">Video Post Format</a>
									<p>Nulla facilisis odio vitae odio laoreet...</p>
							</div>

			</li>
				</ul>
		<div class="clear"></div></aside><aside id="iva_business_hrs-3" class="   widget ivabh-businesshours"><h3>Inspection hours</h3><div class="today-result"><div class="iva_bhp_hours_row"><span class="days">Today<span class="iva-bh-oc-text iva_oc_open">Open</span></span><span class="hours"><span class="hours-row"><span>9:00 am-6:00 pm</span><span class="iva-bh-oc-dot iva_oc_open"></span></span></span></div></div><div class="ivabh-hours show779"><div class="iva_bhp_hours_row "><span class="days">&nbsp;Sunday</span><span class="hours"><span class="hours-row"><span class="closed iva-bh-oc-text iva_oc_close">Closed</span></span></span></div><div class="iva_bhp_hours_row "><span class="days">&nbsp;Monday</span><span class="hours"><span class="hours-row">9:00 am-6:00 pm<span class="iva-bh-oc-dot iva_oc_open"></span></span></span></div><div class="iva_bhp_hours_row "><span class="days">&nbsp;Tuesday</span><span class="hours"><span class="hours-row">9:00 am-6:00 pm</span></span></div><div class="iva_bhp_hours_row "><span class="days">&nbsp;Wednesday</span><span class="hours"><span class="hours-row">9:00 am-6:00 pm</span></span></div><div class="iva_bhp_hours_row "><span class="days">&nbsp;Thursday</span><span class="hours"><span class="hours-row">9:00 am-6:00 pm</span></span></div><div class="iva_bhp_hours_row "><span class="days">&nbsp;Friday</span><span class="hours"><span class="hours-row">9:00 am-6:00 pm</span></span></div><div class="iva_bhp_hours_row "><span class="days">&nbsp;Saturday</span><span class="hours"><span class="hours-row">9:00 am-6:00 pm</span></span></div></div><div class="clear"></div></aside>		<aside id="recent-posts-2" class=" widget widget_recent_entries">		<h3 class="widget-title">Recent Posts</h3>		<ul>
											<li>
					<a href="../sharing-test-title-goes-here/index.html">Sharing test title goes here</a>
									</li>
											<li>
					<a href="../link-post-type-format/index.html">[Link] Post Type Format</a>
									</li>
											<li>
					<a href="../audio-post-type-format/index.html">Audio Post Type Format</a>
									</li>
											<li>
					<a href="../video-post-format/index.html">Video Post Format</a>
									</li>
					</ul>
		<div class="clear"></div></aside>	</div>
</div><!--  -->			<!-- .sidebar -->

			<div class="clear"></div>

		</div><!-- .inner -->
	</div><!-- .pagemid -->
</div><!-- #main -->