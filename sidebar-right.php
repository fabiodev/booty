<?php
$side = get_theme_mod( 'sidebar_setting', 'default_value' );
if ($side == 2 || $side == 3): ?>
<div class="span3">
<?php 
  if (!dynamic_sidebar('right_sidebar')) {
    include('lib/sidebar-static.php');
  }
?>
</div>
<?php endif; ?>
