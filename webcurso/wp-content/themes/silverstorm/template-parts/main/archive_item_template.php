<div class="<?php silverstorm_print_archive_entry_class("h-column h-column-container d-flex  masonry-item style-108-outer style-local-1846-m4-outer");?>" data-masonry-width="<?php silverstorm_print_masonry_col_class(true); ?>">
  <div data-colibri-id="1846-m4" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-108 style-local-1846-m4 position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <div data-href="<?php the_permalink(); ?>" data-colibri-component="link" data-colibri-id="1846-m5" class="colibri-post-thumbnail <?php silverstorm_post_thumbnail_classes(); ?> <?php silverstorm_post_thumb_placeholder_classes(); ?> style-109 style-local-1846-m5 h-overflow-hidden position-relative h-element">
        <div class="h-global-transition-all colibri-post-thumbnail-shortcode style-dynamic-1846-m5-height">
          <?php silverstorm_post_thumbnail(array (
            'link' => true,
          )); ?>
        </div>
        <div class="colibri-post-thumbnail-content align-items-lg-center align-items-md-center align-items-center flex-basis-100">
          <div class="w-100 h-y-container"></div>
        </div>
      </div>
      <div data-colibri-id="1846-m6" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 style-110 style-local-1846-m6 position-relative">
        <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-291-outer style-local-1846-m7-outer">
            <div data-colibri-id="1846-m7" class="d-flex h-flex-basis h-column__inner h-px-lg-3 h-px-md-3 h-px-3 v-inner-lg-3 v-inner-md-3 v-inner-3 style-291 style-local-1846-m7 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
                <div data-colibri-id="1846-m8" class="h-blog-title style-292 style-local-1846-m8 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php silverstorm_post_title(array (
                      'heading_type' => 'h2',
                      'classes' => 'colibri-word-wrap',
                    )); ?>
                  </div>
                </div>
                <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
                <div data-colibri-id="1846-m9" class="h-blog-meta style-113 style-local-1846-m9 position-relative h-element">
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
                      <?php silverstorm_the_date('M j'); ?>
                    </a>
                  </div>
                </div>
                <?php endif; ?>
                <div data-colibri-id="1846-m10" class="style-114 style-local-1846-m10 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php silverstorm_post_excerpt(array (
                      'max_length' => 14,
                    )); ?>
                  </div>
                </div>
                <div data-colibri-id="1846-m11" class="h-x-container style-115 style-local-1846-m11 position-relative h-element">
                  <div class="h-x-container-inner style-dynamic-1846-m11-group">
                    <span class="h-button__outer style-295-outer style-local-1846-m12-outer d-inline-flex h-element">
                      <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="1846-m12" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-295 style-local-1846-m12 position-relative">
                        <span>
                          <?php esc_html_e('Read Article','silverstorm'); ?>
                        </span>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
