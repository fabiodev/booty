<?php get_header(); ?>
<div class="row-fluid">
<div class="span12">
<section>
<?php while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><?php the_title(); ?></h1>
</header>
<div>
<?php phpinfo(); ?>
<?php the_content(); ?></div>
</article>
<?php endwhile; ?>
</section>

<section id="comments">
<h3>Comments</h3>
<?php foreach (get_comments('post_id=' . get_the_ID()) as $comment):
	if($comment->comment_approved == 1): ?>
<blockquote>

<p><?php //print_r( $comment ); ?>
<?php $avat =$comment->comment_author_email;
if(function_exists('get_avatar')) { echo get_avatar($comment, '32'); } ?>

<?=$comment->comment_content?></p>
<small><strong>
<cite title="<?=$comment->comment_author?>">
<?=$comment->comment_author?></strong>
</cite>
at <?=$comment->comment_date?>
</small>
</blockquote>
<?php endif;
	endforeach; ?>
<?php include('comments.php'); ?>
</section>

<?php
	//Custom Page Widgets
        if (!dynamic_sidebar('custom_page_sidebar')) {
                //include('lib/sidebar-static.php');
        }
?>
</div><!-- Ends sanp12 -->

</div>
<?php get_footer(); ?>
