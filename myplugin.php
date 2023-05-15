<?php

/*
 * Plugin Name:       G Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gift Mahlangu
 */

if ( current_user_can('Administrator') && !current_user_can('upload_files') )
     add_action('admin_init', 'allow_contributor_uploads');      
     function allow_contributor_uploads() {
          $contributor = get_role('Administrator');
          $contributor->add_cap('upload_files');
     }