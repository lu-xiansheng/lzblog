<?php get_header(); ?>
<article class="main-content page-page">
<div class="post-header">
	<h1 class="post-title" itemprop="name headline"><?php the_title(); ?></h1>
</div>
<div id="post-content" class="post-content">
	<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;endif; ?>
</div>
</article>

<?php get_footer();?>