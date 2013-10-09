<?php get_header(); ?>
<div class="row-fluid">

<?php get_sidebar('left'); ?>

<section>
<?php while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><?php the_title(); ?> <small><?php the_time('F jS, Y') ?></small></h1>
</header>
<div><?php the_content(); ?></div>

<div><div style="overflow:auto;width:100%;text-align:center" class="fb-like" data-href="<?php echo get_permalink( $post->ID ); ?>" data-width="450" 
data-layout="button_count"  data-show-faces="true" data-send="true"></div></div>

<br /><hr />

<?php //ADDs tags to the bottom of the post if they exist
        require('tags.php'); ?>
<hr />
<section id="comments">
<h3>Comments</h3>
<?php foreach (get_comments('post_id=' . get_the_ID()) as $comment): 
	if($comment->comment_approved == 1): ?>
<blockquote>

<p><?php //print_r( $comment ); ?>
<?php $avat =$comment->comment_author_email;
if(function_exists('get_avatar')) { echo get_avatar($comment, '32'); } ?>

<?=$comment->comment_content?></p>
<small>
<cite title="<?=$comment->comment_author?>">
<?=$comment->comment_author?>
</cite>
at <?=$comment->comment_date?>
</small>
</blockquote>
<?php endif;
	endforeach; ?>
<?php include('comments.php'); ?>
</section>
</article>
<?php endwhile; ?>
</section>
</div>

<?php get_sidebar('right'); ?>
</div><!-- closes div class row-fluid-->
<?php get_footer(); ?>
