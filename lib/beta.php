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
	register_setting('notice-settings-group', 'notice-content');
}

function booty_notice_options() {
	$noticestate = get_option('notice_state');
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

<?php if($noticestate == 1){
?>
        <tr valign="top">
        <th scope="row">Notice Post Number</th>
        <td><input type="text" name="notice_post" value="<?php echo get_option('notice_post'); ?>" /></td>
        </tr>
    </table>
<?php }elseif($noticestate == 2){ 

        /*<!-- <tr valign="top">
        <th scope="row">Notice Content</th>
        <td><input type="text" name="notice_content" value="<?php echo get_option('notice_content'); ?>" /></td>
        </tr> 
    </table> -->*/
    
 //Uses Wordpress text editor as INPUT for variable notice-content
	$notice_content = get_option('notice-content');
	wp_editor( $notice_content, 'notice-content', $settings = array() ); 
}
?>

    <?php submit_button(); ?>

</form>
</div>
<?php }

function booty_notice_deployment(){
?>
<!-- Modal -->
<div class="modal hide fade" id="myModal" role="dialog" aria-labelledby="modalBody" aria-hidden="true">

<?php
$post_id_pt = get_option('notice_post');
$queried_post_pt = get_post($post_id_pt);

$post_id_en = 5004;
$queried_post_en = get_post($post_id_en);

$post_id_dis = 5006;
$queried_post_dis = get_post($post_id_dis);
?>

  <div class="modal-header" id="modalBody">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

<ul class="nav nav-tabs" id="myTab">

	<!-- declaration of tabs -->
  <li class="active"><a data-toggle="tab" href="#pt">PT</a></li>
  <li><a data-toggle="tab" href="#en">EN</a></li>
  <li class="pull-right"><a data-toggle="tab" href="#disclaimer">Disclaimer</a></li>
</ul>

	<!-- modal's content div-->
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="pt">
                <?php

                echo $queried_post_pt->post_content;

                ?>
<a class="label" style="float:left" onmouseover="this.className='label label-new-info'" onmouseout="this.className='label'" 
href="<?php echo get_comments_link($post_id_pt); ?>">comments</a>
		</div><!-- active tab div-->
		</div><!-- myTabContent -->
  </div><!-- modal header -->
  <div class="modal-footer">

<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
  </div><!-- footer-->
</div>
<?php } ?>
