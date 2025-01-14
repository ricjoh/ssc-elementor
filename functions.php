<?php

require_once('logdump.php');

// https://chatgpt.com/share/67784592-dd34-8005-a1f8-2056205fe6b0
/** In your Elementor Single Post Template, use Query Var or
*	custom widgets to display the data you passed in the set_query_var() function.
*/

function get_external_data( $id ) {
    // Fetch data from API or database
	error_log('Fetching external data');
    $response = wp_remote_get("https://www.omdbapi.com/?i={$id}&apikey=14c8c5bf");
    return json_decode(wp_remote_retrieve_body($response), true);
}
function enq() {
	wp_enqueue_style('efront', $plugin_dir = WP_PLUGIN_DIR . '/elementor-pro/assets/css/templates/frontend.min.css');
}
add_action( 'wp_enqueue_scripts', 'enq' );
