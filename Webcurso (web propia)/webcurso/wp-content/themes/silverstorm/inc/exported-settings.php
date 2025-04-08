<?php

return array (
  'header_front_page' => 
  array (
    'navigation' => 
    array (
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
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => true,
        'width' => 'boxed',
        'layoutType' => 'logo-spacing-menu',
      ),
    ),
    'hero' => 
    array (
      'props' => 
      array (
        'heroSection' => 
        array (
          'layout' => 'textOnly',
        ),
      ),
      'style' => 
      array (
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
          'height' => 
          array (
            'unit' => 'px',
            'value' => 100,
          ),
          'type' => 'tilt',
          'color' => '#FFF',
        ),
        'background' => 
        array (
          'image' => 
          array (
            0 => 
            array (
              'source' => 
              array (
                'gradient' => 
                array (
                  'steps' => 
                  array (
                    0 => 
                    array (
                      'color' => '#b721ff',
                    ),
                    1 => 
                    array (
                      'color' => '#21d4fd',
                      'position' => '100',
                    ),
                  ),
                ),
              ),
              'attachment' => 'scroll',
              'position' => 
              array (
                'x' => 51.602390073015,
              ),
              'repeat' => 'no-repeat',
              'size' => 'cover',
            ),
          ),
          'type' => 'slideshow',
          'overlay' => 
          array (
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
                  'position' => 35,
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
        ),
      ),
    ),
  ),
);
