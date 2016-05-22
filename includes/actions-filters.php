<?php

/** Actions *******************************************************************/

// process erp actions on admin_init
add_action( 'admin_init', 'erp_process_actions' );
add_action( 'admin_footer', 'erp_import_export_javascript' );
add_action( 'admin_init', 'erp_process_import_export' );
add_action( 'admin_footer', 'erp_email_settings_javascript' );

/** Filters *******************************************************************/

add_filter( 'map_meta_cap', 'erp_map_meta_caps', 10, 4 );
add_filter( 'editable_roles', 'erp_hr_filter_editable_roles' );
add_filter( 'cron_schedules', 'erp_cron_intervals', 10, 1 );
add_filter( 'ajax_query_attachments_args', 'erp_show_users_own_attachments', 1, 1 );
