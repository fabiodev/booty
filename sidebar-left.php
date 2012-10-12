<?php
$side = get_theme_mod( 'sidebar_setting', 'default_value' );

if($side == 1 ) : ?>
	<div class="span3">
	<?php
	if (!dynamic_sidebar('left_sidebar')) {
		include('lib/sidebar-static.php');
	}
	?>
	</div>
       	<div class="span9">

<?php elseif($side == 2 ) : ?>
        <div class="span9">

<?php elseif($side == 3) : ?>
	<div class="span3">
	<?php
	if (!dynamic_sidebar('left_sidebar')) {
		include('lib/sidebar-static.php');
	}
	?>
	</div>
        <div class="span6">

<?php else : ?>
	<div class="span12">
<?php endif; ?>
