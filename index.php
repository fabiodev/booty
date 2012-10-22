<?php get_header(); ?>

<div class="row-fluid">

<?php get_sidebar('left'); ?>

<section id="list-posts">

<!-- Modal -->
<div class="modal hide fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<?php
$post_id = 4946;
$queried_post = get_post($post_id);
?>

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $queried_post->post_title; ?></h3>
  </div>
  <div class="modal-body">
    <p>
<?php

echo $queried_post->post_content;

?>
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

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
<?php get_footer(); ?>
