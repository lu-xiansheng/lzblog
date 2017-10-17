<?php
/*
Template Name: 标签云
*/
get_header(); ?>
  <div class="main-content page-page">
    <div class="search-page">
        <p>根据标签快速定位文章</p>
        <div class="search-tags">
           
            <?php 
                $tags_list = get_tags('orderby=count&order=DESC&number=30');
                if ($tags_list) { 
                    foreach($tags_list as $tag) {
                        echo '<a class="bg-white" href="'.get_tag_link($tag).'">'. $tag->name .' ('. $tag->count .')</a>'; 
                    } 
                } 
            ?>
        <div class="search-tags-hr"></div>
        </div>
    </div>
</div>
<?php get_footer();?>