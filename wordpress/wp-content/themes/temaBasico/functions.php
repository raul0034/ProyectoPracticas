<?php
function mi_tema_minimal_estilos() {
  wp_enqueue_style('estilo-principal', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_minimal_estilos');