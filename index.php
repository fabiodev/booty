<?php get_header(); ?>

<div class="row-fluid">

<?php get_sidebar('left'); ?>

<section id="list-posts">

<!-- Start of the script that show all missing images just before the last post -->
<?php

$query_images_args = array(
    'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1,
);

$query_images = new WP_Query( $query_images_args );
$images = array();
foreach ( $query_images->posts as $image) {
    $images[]= wp_get_attachment_url( $image->ID );
}

foreach($images as $img){
	$url=@getimagesize($img);
	if(!is_array($url))
	{
		echo $img;
	}
}
?>
<!-- END of imgs script -->

<?php 
//Notice to visitors
if (!is_user_logged_in()) {
	require('modal-notice.php');
}
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1 class="booty_post_date"><small><?php the_time('F jS, Y') ?></small></h1>
  <h1><a href="<?php echo get_permalink( $post->ID ); ?>" class="booty_post_title"><?php the_title(); ?></a></h1>
  <h4 class="booty_post_title"><i class="icon-pencil"></i> By <?php the_author_posts_link(); ?>.</h4>
</header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<a class="label" onmouseover="this.className='label label-new-info'" onmouseout="this.className='label'" href="<?php comments_link(); ?>">
<?php comments_number('no responses', 'one response', '% responses'); ?>
</a><br/><br/>
<?php include('tags.php'); ?>
</footer>
</article>
<?php endwhile; else: ?>
<div class="alert alert-error alert-block">
  <h4>Oops!</h4>
  There are no posts to show at this time :(
</div>
<div class="alert alert-info"><?php get_search_form(); ?></div>
<?php endif; ?>

<?php //deprecated in favor of infinite scroll
      //include('pager.php'); ?>

<div id="content"></div>
</section>
</div>
<?php get_sidebar('right'); ?>
</div>
<a id="inifiniteLoader" class="btn btn-primary" style="margin-left:auto; margin-right:auto;">Scroll down to load more posts...</a>
<?php get_footer(); ?>
