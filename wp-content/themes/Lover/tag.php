<?php get_header();?>
<div class="main-content common-page clearfix">
	<div class="common-item">
		<div class="common-title">
			 Tag : <?php single_cat_title(); ?>
		</div>
		<div class="post-lists" href="<?php the_permalink(); ?>">
			<div class="post-lists-body">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php include(locate_template('inc/archive.php'));?>
			<?php endwhile; endif ;?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
	<div class="lists-navigator clearfix">
		<ol class="page-navigator">
			<?php par_pagenavi(2); ?>
		</ol>
	</div>
</div>
<?php get_footer();?>