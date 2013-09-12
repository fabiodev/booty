<?php get_header(); ?>

<div class="row-fluid">
<?php get_sidebar('left'); ?>

<?php /*Preventing this message to show when there ain't nothing to present*/
	if(have_posts()){
        echo "<div class='alert alert-info'>";
        echo "<strong>";
        wp_title('');
        echo "!</strong>";
        echo " Showing all we know about it.";
        echo "</div>";
        }
?>

<?php require('loop.php'); ?>

<?php include('pager.php'); ?>
</div>
<?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
