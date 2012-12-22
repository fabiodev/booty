<section id="list-posts">

<?php 
//Notice to visitors
if (!is_user_logged_in()) {
	require('modal-notice.php');
}
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><a href="<?php echo get_permalink( $post->ID ); ?>" class="booty_post_title"><?php the_title(); ?></a><br>
<small style="float:left"><?php the_time('F jS, Y') ?></small></h1>
  <h4 style="float:right" ><i class="icon-pencil"></i> By <?php /* **disable author pages link** the_author_posts_link();*/ ?> <?php echo get_the_author(); ?> .</h4><br>
</header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<?php $hascomments=get_comments_number();
	if($hascomments==0){
	$comments_class="label";
	}else{
	$comments_class="label label-new-success";
	}
 ?>
<a class="<?php echo $comments_class; ?>" onmouseover="this.className='label label-new-info'" onmouseout="this.className='<?php echo $comments_class; ?>'" href="<?php comments_link(); ?>">
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


</section>
<script>
            $("article img").addClass("img-polaroid");
</script>

