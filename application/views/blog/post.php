
<div id="subheader" class="sleft" >
	<?php foreach($create_post as $key=>$data): ?>
	<div class="subheader-inner">
		<div class="subdesc">
			<h1 class="page-title"><?php echo $data['post_title']?></h1>
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
					<span property="v:title"><?php echo $data['post_title']?></span>
				</span>
			</span>
		</div>
		
	</div>
<?php endforeach; ?>
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
							<a href="#" rel="bookmark"><?php echo $data['post_title']?></a>
						</h2>
					</header><!-- .entry-header -->

					<div class="postimg">
					<?php  if($data['post_image_name']!='no_image') {?>
					<figure>
						<img    alt="<?php echo $data['post_image_name']?>" src="<?php  echo base_url('site_assets/uploads/blog/'); ?><?php echo $data['post_image_name']?>" width="870" height="350">
					</figure>
				<?php } ?>
					</div>
					<div class="entry-content">
						<p>
							<?php echo $data['post_content'] ?>
						</p>
							
					</div><!-- .entry-content -->
				</article>
			<?php endforeach; ?>
				
				</div>
			</main><!-- .content-area -->
			


			<div class="clear"></div>

		</div><!-- .inner -->
	</div><!-- .pagemid -->
</div><!-- #main -->