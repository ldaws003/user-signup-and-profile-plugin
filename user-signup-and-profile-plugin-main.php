<?php
/*
Plugin Name: User Signup and Profile
Plugin URI:
Description: Allows for a custom user to be created for a website where they can only
make edits to their own profile
Version: 0.0
Author:
License: GNU GENERAL PUBLIC LICENSE
*/

// Create a custom user for business
$result = add_role( 'business', __( 'Business' ),
                    array( 
                     'read' => true,
                     'edit_posts' => false,
                     'edit_pages' => true,
                     'edit_other_posts' => false,
                     'create_posts' => false,
                     'manage_categores' => false,
                     'publish_posts' => false                    ) );

?>