<section id="list-posts">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><a href="<?php echo get_permalink( $post->ID ); ?>" class="booty_post_title"><?php the_title(); ?></a></h1>
<!--  <h4 style="float:right" ><i class="icon-pencil"></i> By <?php /* **disable author pages link** the_author_posts_link();*/ ?> <?php echo get_the_author(); ?> .</h4><br>
--></header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<?php $hascomments=get_comments_number();
	if($hascomments==0){
	$comments_class="label";
	}else{
	$comments_class="label label-new-success";
	}
 ?>
<div style="float:left"><a class="<?php echo $comments_class; ?>" onmouseover="this.className='label label-new-info'" onmouseout="this.className='<?php echo $comments_class; ?>'" href="<?php comments_link(); ?>">
<?php comments_number('respond', 'one response', '% responses'); ?>
</a></div><div class="fb-like" data-href="<?php echo get_permalink( $post->ID ); ?>" data-width="450" data-layout="button_count"  data-show-faces="true" data-send="true"></div> <div style="float:right"><span class="nav-header" style="float:right"><?php the_time('F jS, Y') ?></span></div> <br/><br/>
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
                <!--$("p.wp-caption-text").before("<li class='nav-header'>Sobre a foto a cima:</li>");-->
                $("p.wp-caption-text").css("color","blue");
                $("p.wp-caption-text").css("font-weight","bold");
                $("p.wp-caption-text").addClass("well well-small");
                <!--$("p.wp-caption-text").wrap("<div class='well'></div>");-->
        </script>
