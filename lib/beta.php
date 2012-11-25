<?php
//create notice settings menu
add_action('admin_menu', 'booty_notice_menu');

function booty_notice_menu() {
	//create top level notice menu
	add_menu_page( 'Notice Options', 'Booty Notice', 'manage_options', 'my-unique-identifier', 'booty_notice_options' );
	//call register settings function
	add_action( 'admin_init', 'register_noticesettings');
}

function register_noticesettings() {
	//register our settings
	register_setting('notice-settings-group', 'notice_state');
	register_setting('notice-settings-group', 'notice_post');
	register_setting('notice-settings-group', 'notice_content');
}

function booty_notice_options() {
?>
<div class="wrap">
<h2>Booty Notice Options</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'notice-settings-group' ); ?>
    <?php //do_settings( 'baw-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Notice State</th>
        <td><input type="text" name="notice_state" value="<?php echo get_option('notice_state'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Notice Post Number</th>
        <td><input type="text" name="notice_post" value="<?php echo get_option('notice_post'); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Notice Content</th>
        <td><input type="text" name="notice_content" value="<?php echo get_option('notice_content'); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
