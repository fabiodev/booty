<?php get_header(); ?>

<div class="row-fluid">

<?php get_sidebar('left'); ?>


<?php 
//Notice to visitors
if (!is_user_logged_in()) {
	require('modal-notice.php');
}
?>

<?php require('loop.php'); ?>

<?php //deprecated in favor of infinite scroll
      //include('pager.php'); 
?>

</div><!-- this closes a div tag that's opened on the file sidebar-left but containes the posts-->
<?php get_sidebar('right'); ?>
</div>
<a id="inifiniteLoader" class="btn btn-primary" style="margin-left:auto; margin-right:auto;">Scroll down to load more posts...</a>
<?php //get_footer();
	require('mfooter.php');
 ?>
