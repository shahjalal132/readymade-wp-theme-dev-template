<?php

/**
 * Enqueue Assets Class
 */

class Enqueue_Assets {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_css'] );
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_js'] );
    }

    public function enqueue_css() {

    }

    public function enqueue_js() {

    }
}