<?php
	do_action('flatsome_before_blog');
?>
<?php
	$post_temp = get_field('post_templatepost');
	if($post_temp == "project"){
		 echo do_shortcode('[block id="post-header"]');
	}else{
		echo do_shortcode('[block id="blog-header"]');
	}
?>
<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<?php
	$post_template = get_field('post_templatepost');

	if($post_template == "project"){

?>
<div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">

	<div class="large-8 col">
	<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
	</div>
	<div class="post-sidebar large-4 col">
		<?php flatsome_sticky_column_open( 'blog_sticky_sidebar' ); ?>
	<div id="secondary" class="widget-area " role="complementary">
		<aside id="text-2" class="widget widget_text">			<div class="textwidget"><div class="flex wg">
<div class="wg-icon"><img decoding="async" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/w1.png"></div>
<div class="wg-nd">
<h3>Khách hàng:</h3>
<p><?php echo get_field('customer')?></p>
</div>
</div>
<div class="flex wg">
<div class="wg-icon"><img decoding="async" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/w2.png"></div>
<div class="wg-nd">
<h3>Lĩnh vực:</h3>
<p><?php echo get_field('business_areas')?></p>
</div>
</div>
<div class="flex wg">
<div class="wg-icon"><img decoding="async" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/w3.png"></div>
<div class="wg-nd">
<h3>Ngày cập nhật:</h3>
<p><?php echo get_field('update_day')?></p>
</div>
</div>
<div class="flex wg">
<div class="wg-icon"><img decoding="async" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/w4.png"></div>
<div class="wg-nd">
<h3>Website</h3>
<p><?php $website = get_field("website");
echo '<a  href="'.$website.'" target="_blank" rel="noopener">'.$website.'</a>';?>
</p>
</div>
</div>
</div>
		</aside></div>
		<?php flatsome_sticky_column_close( 'blog_sticky_sidebar' ); ?>
	</div>
</div>
<?php }else{?> 
<div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?> t-post">

	<div class="large-10 col">
	<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
	</div>
</div>

<?php }?>
<?php
	do_action('flatsome_after_blog');
?>
<?php
	$post_temp = get_field('post_templatepost');
	if($post_temp == "project"){
		 echo do_shortcode('[block id="du-an-lien-quan"]');
	}else{
		echo do_shortcode('[block id="bai-viet-lien-quan"]');
	}
?>