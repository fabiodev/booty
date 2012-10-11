<?php get_header(); ?>
<div class="row-fluid">

<?php //definição da largura do corpo em função da existencia de sidebars e inclui o sidebar esquerdo se activo

$side = get_theme_mod( 'sidebar_setting', 'default_value' );

if($side == 1 ){
        include('sidebar-left.php');
        echo '<div class="span8">';
}
elseif($side == 2 ){
        echo '<div class="span8">';
}
elseif($side == 3){
        include('sidebar-left.php');
        echo '<div class="span6">';
}
else{
        echo '<div class="span12">';
}
?>

<section>
<?php while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><?php the_title(); ?> <small><?php the_time('F jS, Y') ?></small></h1>
</header>
<div><?php the_content(); ?></div>
<?php //ADDs tags to the bottom of the ost if they exist
	require('tags.php'); ?>
<hr />
<section id="comments">
<h3>Comments</h3>
<?php foreach (get_comments('post_id=' . get_the_ID()) as $comment): ?>
<blockquote>
<p><?=$comment->comment_content?></p>
<small>
<cite title="<?=$comment->comment_author?>">
<?=$comment->comment_author?>
</cite>
at <?=$comment->comment_date?>
</small>
</blockquote>
<?php endforeach; ?>
<?php include('comments.php'); ?>
</section>
</article>
<?php endwhile; ?>
</section>
</div>

<?php   //adds Sidebar direito se activo
        //$side = get_theme_mod( 'sidebar_setting', 'default_value' );

        if($side == 1 ){
        }
        elseif($side == 2 ){
                include('sidebar-right.php');
        }
        elseif($side == 3){
                include('sidebar-right.php');
        }
?>
</div><!-- closes div class row-fluid-->
<?php get_footer(); ?>
