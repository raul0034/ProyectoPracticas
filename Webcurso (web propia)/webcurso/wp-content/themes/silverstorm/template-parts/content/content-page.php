<div id="post-<?php the_ID();?>" <?php post_class(); ?>>
  <div>
   <?php 
   		the_content(); 
        silverstorm_render_page_comments();

   		wp_link_pages(array(
          'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'silverstorm') . '</span>',
          'after'       => '</div>',
          'link_before' => '<span>',
          'link_after'  => '</span>',
          'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'silverstorm') . ' </span>%',
          'separator'   => '<span class="screen-reader-text">, </span>',
      	));   
   ?>
  </div>
</div>


