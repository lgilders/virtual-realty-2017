<style type="text/css">
#backupbuddy-meta-link-wrap a.show-settings {
	float: right;
	margin: 0 0 0 6px;
}
#screen-meta-links #backupbuddy-meta-link-wrap a {
	background: none;
}
#screen-meta-links #backupbuddy-meta-link-wrap a:after {
	content: '';
	margin-right: 5px;
}
</style>


<?php
// Check if performing an actual migration now. If so then load file and skip the rest of this page.
if ( ( pb_backupbuddy::_GET( 'callback_data' ) != '' ) && ( pb_backupbuddy::_GET( 'callback_data' ) != 'importbuddy.php' ) ) {
	require_once( '_migrate.php' );
	return;
}




wp_enqueue_script( 'thickbox' );
wp_print_scripts( 'thickbox' );
wp_print_styles( 'thickbox' );



pb_backupbuddy::$ui->title( __( 'Restore / Migrate', 'it-l10n-backupbuddy' ) );



/********* Begin Migrate Settings Form *********/

$migrate_form = new pb_backupbuddy_settings( 'migrate', false, '', 200 ); // form_name, savepoint, action_destination, title_width

$migrate_form->add_setting( array(
	'type'		=>		'text',
	'name'		=>		'web_address',
	'title'		=>		__('Website address', 'it-l10n-backupbuddy' ),
	'tip'		=>		__('Website address that corresponds to the FTP path.ß', 'it-l10n-backupbuddy' ),
	'rules'		=>		'required|string[1-500]',
	'default'	=>		'http://',
	'css'		=>		'width: 200px;',
	'after'		=>		' <span class="description">(ftp path must correspond to this address)</span>',
) );

$migrate_form->add_setting( array(
	'type'		=>		'text',
	'name'		=>		'ftp_server',
	'title'		=>		__('FTP server address', 'it-l10n-backupbuddy' ),
	'tip'		=>		__('FTP server address. This must correspond to the website address URL, including path, to the destination site.', 'it-l10n-backupbuddy' ),
	'rules'		=>		'required|string[1-500]',
	'css'		=>		'width: 200px;',
) );

$migrate_form->add_setting( array(
	'type'		=>		'text',
	'name'		=>		'ftp_username',
	'title'		=>		__('FTP username', 'it-l10n-backupbuddy' ),
	'rules'		=>		'required|string[1-500]',
	'css'		=>		'width: 200px;',
) );

$migrate_form->add_setting( array(
	'type'		=>		'text',
	'name'		=>		'ftp_password',
	'title'		=>		__('FTP password', 'it-l10n-backupbuddy' ),
	'rules'		=>		'required|string[1-500]',
	'css'		=>		'width: 200px;',
) );

$migrate_form->add_setting( array(
	'type'		=>		'text',
	'name'		=>		'ftp_path',
	'title'		=>		__('FTP remote path (optional)', 'it-l10n-backupbuddy' ),
	'tip'		=>		__('This is the remote path / directory for the server. You may use an FTP client to connect to your FTP to determine the exact path.', 'it-l10n-backupbuddy' ),
	'rules'		=>		'required|string[1-500]',
	'after'		=>		' <span class="description">(must correspond to website address)</span>',
	'css'		=>		'width: 200px;',
) );

$migrate_form->add_setting( array(
	'type'		=>		'checkbox',
	'name'		=>		'ftps',
	'title'		=>		__( 'Use FTPs encryption', 'it-l10n-backupbuddy' ),
	'options'	=>		array( 'unchecked' => '0', 'checked' => '1' ),
	//'tip'		=>		__('[Default: Modern] - If you are encountering difficulty backing up due to WordPress cron, HTTP Loopbacks, or other features specific to version 2.x you can try classic mode which runs like BackupBuddy v1.x did.', 'it-l10n-backupbuddy' ),
	'rules'		=>		'required',
) );

$result = $migrate_form->process(); // Handles processing the submitted form (if applicable).
echo '<pre>' . print_r( $result, true ) . '</pre>';

if ( count( $result['errors'] ) > 0 ) { // Form errors.
} else { // No errors.
	
}

$view_data['migrate_form'] = &$migrate_form; // For use in view.

/********* End Migrate Settings Form *********/


// Load view.
$view_data['backups'] = backupbuddy_core::backups_list( 'migrate' );
pb_backupbuddy::load_view( 'migrate-home', $view_data );

