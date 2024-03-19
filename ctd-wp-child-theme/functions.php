<?php

function ctd_scripts() {
    wp_enqueue_style('bs533', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'ctd_scripts' );
