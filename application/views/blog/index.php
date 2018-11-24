
<div id="subheader" class="sleft" >
	<div class="subheader-inner">
		<div class="subdesc">
			<h1 class="page-title">Blog</h1>
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
					<span property="v:title">Blog</span>
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
							<a href="<?php echo base_url('blog/post/'.$data['slug']) ?>" rel="bookmark"><?php echo ucfirst($data['post_title'])?></a>
						</h2>
					</header><!-- .entry-header -->

					<div class="postimg">
					<?php  if($data['post_image_name']!='no_image') {?>
					<figure>
						<img   alt="<?php echo ucfirst($data['post_title'])?>" src="<?php  echo base_url('site_assets/uploads/blog/'); ?><?php echo $data['post_image_name']?>" width="870" height="350"></figure><?php }?>
					</div>
					<div class="entry-content">
						<p>
							<?php echo character_limiter($data['post_content'], 20) ?>
						</p>
						<a class="more-link" href="<?php echo base_url('blog/post/'.$data['slug']) ?>">
						<span>Continue reading</span>
						</a>		
					</div><!-- .entry-content -->
				</article>
				<hr>
			<?php endforeach; ?>

				
				</div>
			</main><!-- .content-area -->
			
			<div id="sidebar">
	<div class="content widget-area">
			<aside id="recentpost_entries-2" class=" widget widget_postslist">
				<h3>Recent Posts</h3>
				<ul>
					<?php  foreach($recent_post as $key=>$data): ?>
					<li>
						<div class="thumb"><a href="<?php echo base_url('blog/post/'.$data['slug']) ?>" title="<?php echo $data['post_title'] ?>">
							<?php  if($data['post_image_name']!='no_image') {?>
						<img   class="imgborder"  alt="<?php echo $data['post_title'] ?>" src="<?php  echo base_url('site_assets/uploads/blog/'); ?><?php echo $data['post_image_name']?>" width="50" height="50">

							<?php } ?>
												</a>
						</div>
								<div class="pdesc">
				<a href="<?php echo base_url('blog/post/'.$data['slug']) ?>" title="<?php echo $data['post_title'] ?>"><?php echo $data['post_title'] ?></a>
									<p><?php echo character_limiter($data['post_content'], 20)?></p>
							</div>

			</li>
		<?php endforeach; ?>
					
				</ul>
		<div class="clear"></div></aside>	</div>
</div><!--  -->			<!-- .sidebar -->

			<div class="clear"></div>

		</div><!-- .inner -->
	</div><!-- .pagemid -->
</div><!-- #main -->