<!-- <section id="list-posts">-->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <!-- <h1 class="booty_post_date"><small><?php the_time('F jS, Y') ?></small></h1>-->
  <h1><a href="<?php echo get_permalink( $post->ID ); ?>" class="booty_post_title"><?php the_title(); ?></a><br>
<small style="float:left"><?php the_time('F jS, Y') ?></small></h1>
  <h4 style="float:right" ><i class="icon-pencil"></i> By <?php the_author_posts_link(); ?>.</h4><br>
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
<!-- </section>-->
