<?php get_header(); ?>
<div class="row-fluid">
<?php get_sidebar('left'); ?>

<section class="list-posts">
<?php while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><?php the_title(); ?></h1>
</header>
<div><?php the_content(); ?></div>
</article>
<?php endwhile; ?>
</section>
</div>
<?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
