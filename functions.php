<?php

/* usage - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

add_action('init', 'usage_init');
function usage_init() {
  $labels = array(
    'name' => _x('Usages', 'post type general name'),
    'singular_name' => _x('Usage', 'post type singular name'),
    'add_new' => _x('Add New', 'usage'),
    'add_new_item' => __('Add New Usage'),
    'edit_item' => __('Edit Usage'),
    'new_item' => __('New Usage'),
    'view_item' => __('View Usage'),
    'search_items' => __('Search Usages'),
    'not_found' =>  __('No usages found'),
    'not_found_in_trash' => __('No usages found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'usages'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail','custom-fields','comments'),
  ); 
  register_post_type('usage',$args);
}

//add filter to insure the text Usage, or usage, is displayed when user updates a usage 
add_filter('post_updated_messages', 'usage_updated_messages');
function usage_updated_messages( $messages ) {

  $messages['usage'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Usage updated. <a href="%s">View usage</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Usage updated.'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Usage restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Usage published. <a href="%s">View usage</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Usage saved.'),
    8 => sprintf( __('Usage submitted. <a target="_blank" href="%s">Preview usage</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Usage scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview usage</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Usage draft updated. <a target="_blank" href="%s">Preview usage</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );

  return $messages;
}
/**
 * Disable responsive image support (test!)
 */

// Clean the up the image from wp_get_attachment_image()
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );

    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );

    return $attr;

 }, PHP_INT_MAX );

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    //$first_img = "/images/default.jpg";
  }
  return $first_img;
}

add_action('wp_enqueue_scripts','child_add_javascripts',20);
function child_add_javascripts(){
    wp_enqueue_script('child_javascript',get_bloginfo('stylesheet_directory') ."/inc/js/apply-fancybox.js",array('jquery'),'1.0.5',true);
}