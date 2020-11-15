<?php
    /**
     * Custom Post Type Changer
     *
     * Allow to change the post type in the quick edit and bulk edit section, it allows you to reassign any post-type to a new post type.
     *
     */

    /**
     * Plugin Name: Custom Post Type Changer
     * Plugin URI:  https://wordpress.org/plugins/
     * Author:      Andolasoft
     * Author URI:  https://www.andolasoft.com/
     * License:     GPLv2 or later
     * License URI: https://www.gnu.org/licenses/gpl-2.0.html
     * Description: Allow to change the post type in the quick edit and bulk edit section, it allows you to reassign any post-type to a new post type.
     * Version:     1.0
     * Text Domain: custom-post-type-changer
    * Domain Path: /assets/lang/
     */

    // if accessed directly,exits
    defined( 'ABSPATH' ) || exit;
    //Add custom column  to particular post type's quick edit and bulk edit option
    add_action( 'wp_loaded', 'andola_post_type_get' );

    function andola_post_type_get()
    {
        $args = array('public' => true, 'show_in_nav_menus' => true);
        $all_post_types  = get_post_types($args);
        foreach ( $all_post_types as $type )
        {
            add_filter('manage_'.$type.'_posts_columns', 'andola_post_feature_reg');
            add_action('manage_'.$type.'s'.'_custom_column', 'andola_post_get_sec', 10, 2);
        }
    }
    // the above hook will add columns only for default 'post' post type
    // the code will add column at the end of the array
    function andola_post_feature_reg( $column_array )
    {
 	$column_array['Post_type_new'] = esc_html__('Post Type', 'custom-post-type-changer' );
        return $column_array;
    }
    //Populate our the post type name into the column
    function andola_post_get_sec( $column_name, $id ) {
        switch( $column_name ) :
            case 'Post_type_new': {
                echo get_post_type($id);
                break;
            }
        endswitch;
    }
    //Add a quick edit ,post type change dropdown.
    add_action('quick_edit_custom_box',  'andola_quick_edit_fields', 10, 2);

    function andola_quick_edit_fields( $column_name, $post_types_all) {
        switch( $column_name ) :
            case 'Post_type_new': {

                wp_nonce_field( 'andola_q_edit_nonce', 'andola_nonce' );

                echo '<fieldset class="inline-edit-col-right">
					<div class="inline-edit-col">

					<div class="inline-edit-group wp-clearfix">';
                ?>
                <label class="alignleft">
					<span class="title"><?php esc_html_e( 'Post Type', 'custom-post-type-changer' ); ?></span>
                    <span class="input-text-wrap">
						<select name="Post_type" >
					<?php
                        $args = array(
                            'public'   => true,
                            'show_in_nav_menus' => true
                        );

                        $post_types_all = get_post_types($args);
                        $post_type_indivi  = get_post_type();
                        $cpt_object_new = get_post_type_object( $post_type_indivi );

                        if ( empty( $cpt_object_new ) || is_wp_error( $cpt_object_new ) ) {
                            return;
                        }
                    ?>

                            <?php
                                foreach ( $post_types_all as $post_type_new => $post_element ) :
                                    ?>

                                    <option value="<?php echo esc_attr(  $post_element); ?>" <?php selected( $post_type_indivi, $post_type_new ); ?>><?php echo esc_html(  $post_element ); ?></option>

                                <?php endforeach; ?>
						</select>
					</span>
                </label>
                <?php
                break;
            }

        endswitch;
    }
    // Quick Edit Save
    add_action( 'save_post', 'andola_quick_edit_save' );

    function andola_quick_edit_save( $post_id )
    {
        $post_type_cat = get_post_type();

        // Post type information
        $post_id_new          = absint( $post_id  );
        $post_type_new        = sanitize_key( $_POST['Post_type']  );

        // check nonce
        if ( !wp_verify_nonce( $_POST['andola_nonce'], 'andola_q_edit_nonce' ) ) {
            return;
        }

        if ( empty( $post_type_new ) || empty( $_POST['andola_nonce'] ) || empty( $post_id_new ) )
        {
            return wp_die( esc_html__( 'Data is missing.', 'custom-post-type-changer' ) );
        }

        // update the Post_type
        if ( isset( $post_type_new  ) && $post_type_cat != $post_type_new )
        {
            // Update the post type
            set_post_type( $post_id_new , $post_type_new );
        }
        else
        {
            return wp_die( esc_html__( 'Post type has not changed', 'custom-post-type-changer' ) );
        }
    }
    //Enqueue the style and scripts
    add_action( 'admin_init','andola_script');

    function andola_script()
    {
        wp_register_style('andola_script', plugins_url('assets/css/andola_style.css',__FILE__ ));
        wp_enqueue_style('andola_script');
        wp_register_script( 'andola_script', plugins_url('assets/js/changer.js',__FILE__ ));
        wp_enqueue_script('andola_script');
    }
    // Add the bulk edit feature
    add_action('bulk_edit_custom_box',  'andola_quick_edit_fields', 10, 2);
    //Save the bulk edit values through azax
    add_action( 'wp_ajax_andola_save_bulk', 'andola_save_bulk_edit_hook' );
    function andola_save_bulk_edit_hook()
    {
        // Post type information
        $post_ids = array_map('intval',wp_unslash($_POST['post_ids']));
        $post_id_azax  = $post_ids;
        $post_type_azax = sanitize_key( $_POST[ 'Post_type'] );
        // well, if post IDs are empty, it is nothing to do here
        if ( empty( $post_type_azax )|| empty( $post_id_azax  ))
        {
            return wp_die( esc_html__( 'Data is missing.', 'custom-post-type-changer' ) );
        }
        // for each post ID
        foreach( $post_id_azax as $id )
        {
            // if post type is empty, maybe we shouldn't change it
            if( !empty( $post_type_azax  ) )
            {
                set_post_type( $id,  $post_type_azax );
            }
        }
    }


    add_action( 'load-post.php', 'andola_post_meta_boxes_setup' );
    add_action( 'load-post-new.php', 'andola_post_meta_boxes_setup' );

    function andola_post_meta_boxes_setup() {
        add_action( 'add_meta_boxes', 'andola_add_post_meta_boxes' );
        add_action( 'save_post', 'andola_save_post_class_meta', 10, 2 );

    }

    function andola_add_post_meta_boxes() {
        $args_blck = array('public' => true, 'show_in_nav_menus' => true);
        $all_post_types_blck  = get_post_types($args_blck);
        foreach ( $all_post_types_blck as $type_blck )
        {
            add_meta_box(
                'andola-post-class',
                'Custom Post Type Changer ',
                'andola_post_class_meta_box',
                $type_blck ,
                'side',
                'default'
            );
        }
    }

    function andola_post_class_meta_box() {
        wp_nonce_field( basename( __FILE__ ), 'andola_post_class_nonce' );?>

        <div class="components-base-control editor-post-excerpt__textarea">
            <div class="components-base-control__field">
                <span><?php esc_html_e( 'Post Type:', 'custom-post-type-changer' ); ?></span>
                <span id="post-type-display">
						<select name="Post_type_detail_block" >
							<?php

                                $args_new_block = array(
                                    'public'   => true,
                                    'show_in_nav_menus' => true
                                );

                                $post_types_all_new_block = get_post_types($args_new_block);
                                $post_type_indivi_new_block  = get_post_type();
                                $cpt_object_new_andola_block = get_post_type_object($post_type_indivi_new_block );

                                if ( empty( $cpt_object_new_andola_block ) || is_wp_error( $cpt_object_new_andola_block ) ) {
                                    return;
                                }
                                foreach ( $post_types_all_new_block as $post_type_new_block => $post_element_block ) :
                                    ?>

                                    <option value="<?php echo esc_attr(  $post_element_block); ?>" <?php selected( $post_type_indivi_new_block, $post_type_new_block ); ?>><?php echo esc_html(  $post_element_block ); ?></option>

                                <?php endforeach; ?>
						</select>
					</span>
            </div>
        </div>

        <?php
    }

		function andola_save_post_class_meta( )
	 	{
				// Post type information
				$post_id_block = get_the_ID();
				$post_id_new_block = absint( $post_id_block);
				$post_type_new_block = sanitize_key( $_POST['Post_type_detail_block']);
					// update the Post_type
					if ( isset( $post_type_new_block))
					{
					// Update the post type
					set_post_type( $post_id_new_block , $post_type_new_block );
					}
					else
					{
					return wp_die( esc_html__( 'Post type has not changed', 'custom-post-type-changer' ) );
					}
		}
		function andola_plugin_load_plugin_textdomain() {
	    load_plugin_textdomain( 'custom-post-type-changer', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
		}
		add_action( 'plugins_loaded', 'andola_plugin_load_plugin_textdomain' );
?>