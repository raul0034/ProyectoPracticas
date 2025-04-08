<?php return 
array (
  'navigation' => 
  array (
    'props' => 
    array (
      'showTopBar' => true,
      'sticky' => true,
      'overlap' => true,
      'width' => 'boxed',
      'layoutType' => 'logo-spacing-menu',
    ),
    'style' => 
    array (
      'ancestor' => 
      array (
        'sticky' => 
        array (
          'background' => 
          array (
            'color' => '#ffffff',
          ),
        ),
      ),
      'background' => 
      array (
        'color' => 'rgba(246, 247, 249, 0)',
      ),
      'padding' => 
      array (
        'top' => 
        array (
          'value' => 20,
        ),
      ),
    ),
  ),
  'logo' => 
  array (
    'props' => 
    array (
      'layoutType' => 'logo-spacing-menu',
    ),
  ),
  'header-menu' => 
  array (
    'props' => 
    array (
      'sticky' => true,
      'hoverEffect' => 
      array (
        'type' => 'bordered-active-item bordered-active-item--bottom',
        'group' => 
        array (
          'border' => 
          array (
            'transition' => 'effect-borders-grow grow-from-center',
          ),
        ),
        'activeGroup' => 'border',
        'enabled' => true,
      ),
      'showOffscreenMenuOn' => 'has-offcanvas-tablet',
    ),
  ),
  'title' => 
  array (
    'style' => 
    array (
      'textAlign' => 'center',
    ),
  ),
  'hero' => 
  array (
    'style' => 
    array (
      'background' => 
      array (
        'type' => 'slideshow',
        'color' => 'rgb(53, 59, 62)',
        'overlay' => 
        array (
          'shape' => 
          array (
            'value' => '',
            'isTile' => false,
          ),
          'light' => false,
          'color' => 
          array (
            'value' => '${theme.colors.5}',
            'opacity' => '0.5',
          ),
          'enabled' => true,
          'type' => 'gradient',
          'gradient' => 
          array (
            'angle' => 249,
            'steps' => 
            array (
              0 => 
              array (
                'color' => 'rgba(28, 28, 36, 0.95)',
                'position' => '35',
              ),
              1 => 
              array (
                'color' => 'rgba(28, 28, 36, 0.2)',
                'position' => 51,
              ),
            ),
            'name' => 'october_silence',
          ),
        ),
        'image' => 
        array (
          0 => 
          array (
            'source' => 
            array (
              'url' => 'eyes-look-girl-hair-view-lashon-rise-1617966-pxhere.com-hero2.jpg',
              'gradient' => 
              array (
                'name' => 'october_silence',
                'angle' => 0,
                'steps' => 
                array (
                  0 => 
                  array (
                    'position' => '0',
                    'color' => '#b721ff',
                  ),
                  1 => 
                  array (
                    'position' => '100',
                    'color' => '#21d4fd',
                  ),
                ),
              ),
            ),
            'attachment' => 'scroll',
            'position' => 
            array (
              'x' => 51.602390073015,
              'y' => 0,
            ),
            'repeat' => 'no-repeat',
            'size' => 'cover',
            'useParallax' => false,
          ),
        ),
        'slideshow' => 
        array (
          'duration' => 
          array (
            'value' => 1500,
          ),
          'speed' => 
          array (
            'value' => 1500,
          ),
        ),
        'video' => 
        array (
          'videoType' => 'external',
          'externalUrl' => 'https://www.youtube.com/watch?v=coYirc_qoSA',
          'internalUrl' => false,
          'poster' => 
          array (
            'url' => 'https://wps.iconvert.pro/wp2/defaults/silverstorm-default/wp-content/uploads/2024/07/colibri-demo-video-cover.jpg',
          ),
        ),
      ),
      'padding' => 
      array (
        'top' => 
        array (
          'value' => '120',
          'unit' => 'px',
        ),
        'bottom' => 
        array (
          'value' => 200,
          'unit' => 'px',
        ),
      ),
      'separatorBottom' => 
      array (
        'enabled' => false,
        'type' => 'tilt',
        'color' => '#FFF',
        'height' => 
        array (
          'value' => 100,
          'unit' => 'px',
        ),
        'negative' => false,
      ),
    ),
    'props' => 
    array (
      'layoutType' => 'textWithMediaOnRight',
      'heroSection' => 
      array (
        'layout' => 'textOnly',
      ),
    ),
  ),
);
