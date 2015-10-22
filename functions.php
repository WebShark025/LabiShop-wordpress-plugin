<?php
   /*
   Plugin Name: Labishop
   Plugin URI: http://sadeco.ir
   Description: Simple Unique plugin for LabiShop. Describing Their Orders
   Version: 1.0.0
   Author: WebShark25
   Author URI: http://sadeco.ir
   License: GPL2
   */
   
   // funct.'s for wp admin area 
   
   /**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function labishop_add_meta_box() {

	$screens = array( 'post', 'page' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'labishop_sectionid',
			__( 'افزودن کالا', 'labishop_textdomain' ),
			'labishop_meta_box_callback',
			$screen
		);
	}
}
add_action( 'add_meta_boxes', 'labishop_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function labishop_meta_box_callback( $post ) {

	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'labishop_save_meta_box_data', 'labishop_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_my_meta_value_key', true );

	echo '<label for="labishop_new_field">';
	_e( 'توسط این قسمت, کالای خود را به مشتریان عرضه کنید', 'labishop_textdomain' );
	echo '</label> ';
	echo '<input type="text" id="labishop_new_field" name="labishop_new_field" value="' . esc_attr( $value ) . '" size="25" />';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function labishop_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['labishop_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['labishop_meta_box_nonce'], 'labishop_save_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( ! isset( $_POST['labishop_new_field'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['labishop_new_field'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, '_my_meta_value_key', $my_data );
}
add_action( 'save_post', 'labishop_save_meta_box_data' );


   // funct.'s for wp post area (add a NEW BOX below all...)
   // funct.'s for wp after-payline area
   // db files
   
   
?>
