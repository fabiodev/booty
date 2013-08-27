<?php get_header(); ?>

<div class="row-fluid">

<?php get_sidebar('left'); ?>


<?php require('loop.php'); ?>

<?php //deprecated in favor of infinite scroll
      //include('pager.php'); 
?>

</div><!-- this closes a div tag that's opened on the file sidebar-left but containes the posts-->
<?php get_sidebar('right'); ?>
</div>
<div style="text-align:center;"><a id="inifiniteLoader" class="btn btn-primary" style="margin-left:auto; margin-right:auto; text-align:center;">Scroll down to load more posts...</a></div>
<?php //get_footer();
	require('mfooter.php');
 ?>
