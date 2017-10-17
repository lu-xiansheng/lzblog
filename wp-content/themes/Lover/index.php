<?php get_header();?>
<div class="main-content index-page clearfix ">
	<div class="post-lists">
		<div class="post-lists-body">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<?php include(locate_template('inc/content-index.php'));?>
		<?php endwhile; endif ;?>
		<?php wp_reset_query(); ?>
		</div>
	</div>
	<div class="lists-navigator clearfix">
		<ol class="page-navigator">
			<?php par_pagenavi(2); ?>
		</ol>
	</div>
</div>
<?php get_footer();?>