<div class="h-column h-column-container d-flex h-col-lg-12 h-col-md-12 h-col-12  masonry-item style-138-outer style-local-1852-m4-outer">
  <div data-colibri-id="1852-m4" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-3 v-inner-lg-2 v-inner-md-2 v-inner-3 style-138 style-local-1852-m4 position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <div data-colibri-id="1852-m5" class="h-blog-title style-142 style-local-1852-m5 position-relative h-element">
        <div class="h-global-transition-all">
          <?php silverstorm_post_title(array (
            'heading_type' => 'h4',
            'classes' => 'colibri-word-wrap',
          )); ?>
        </div>
      </div>
      <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
      <div data-colibri-id="1852-m6" class="h-blog-meta style-143 style-local-1852-m6 position-relative h-element">
        <div name="1" class="metadata-item">
          <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>">
            <?php echo esc_html(get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) )); ?>
          </a>
          <span class="meta-separator">
            <?php esc_html_e('-','silverstorm'); ?>
          </span>
        </div>
        <div name="2" class="metadata-item">
          <a href="<?php silverstorm_post_meta_date_url(); ?>">
            <?php silverstorm_the_date('F j, Y'); ?>
          </a>
        </div>
      </div>
      <?php endif; ?>
      <div data-colibri-id="1852-m7" class="style-144 style-local-1852-m7 position-relative h-element">
        <div class="h-global-transition-all">
          <?php silverstorm_post_excerpt(array (
            'max_length' => '',
          )); ?>
        </div>
      </div>
      <div data-colibri-id="1852-m8" class="h-x-container style-145 style-local-1852-m8 position-relative h-element">
        <div class="h-x-container-inner style-dynamic-1852-m8-group">
          <span class="h-button__outer style-146-outer style-local-1852-m9-outer d-inline-flex h-element">
            <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="1852-m9" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-146 style-local-1852-m9 position-relative">
              <span>
                <?php esc_html_e('read more','silverstorm'); ?>
              </span>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
