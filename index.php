<?php get_header(); ?>

<div class="row-fluid">

<?php get_sidebar('left'); ?>

<section id="list-posts">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><a href="<?php echo get_permalink( $post->ID ); ?>" class="booty_post_title"><?php the_title(); ?></a> <small><?php the_time('F jS, Y') ?></small></h1>
</header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<a class="label" onmouseover="this.className='label label-inverse'" onmouseout="this.className='label'" href="<?php comments_link(); ?>">
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
<?php include('pager.php'); ?>
</section>
</div>
<?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
