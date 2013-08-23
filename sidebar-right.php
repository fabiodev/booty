<?php
$side = get_theme_mod( 'sidebar_setting', 'default_value' );
if ($side == 2){
	echo '<div class="span4 sidebar-right">';
	if (!dynamic_sidebar('right_sidebar')) {
		include('lib/sidebar-static.php');
	}
}
elseif($side == 3){
	echo '<div class="span3">';
	if (!dynamic_sidebar('right_sidebar')) {
		include('lib/sidebar-static.php');
	}
}
?>
</div>
