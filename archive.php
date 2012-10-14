<?php get_header(); ?>

<div class="row-fluid">
<?php get_sidebar('left'); ?>

<section class="list-posts">

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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><?php the_title(); ?> <small><?php the_time('F jS, Y') ?></small></h1>
</header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<a class="label" onmouseover="this.className='label label-info'" onmouseout="this.className='label'" href="<?php comments_link(); ?>">
<?php comments_number('no responses', 'one response', '% responses'); ?>
</a>
</footer>
</article>
<?php endwhile; else: ?>
<div class="alert alert-error alert-block">
  <h4>Oops!</h4>
  There are no posts to show at this time :(
</div>
<?php endif; ?>
<?php include('pager.php'); ?>
</section>
</div>
<?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
