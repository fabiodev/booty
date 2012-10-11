<?php get_header(); ?>

<div class="row-fluid">

<?php //Definição da largura do corpo em função da existencia de sidebars e inclui o sidebar esquerdo se activo

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

<div id="content" class="list-posts">
<section id="content" class="list-posts">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><a href="<?php echo get_permalink( $post->ID ); ?>" class="booty_post_title"><?php the_title(); ?></a> <small><?php the_time('F jS, Y') ?></small></h1>
</header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<a class="label" onmouseover="this.className='label label-inverse'" onmouseout="this.className='label'" href="<?php comments_link(); ?>">
<?php comments_number('no responses', 'one response', '% responses'); ?>
</a><br><br>
<?php //ADDs tags to the bottom of the post if they exist
	require('tags.php'); ?>
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
</div><!-- pseudo div content -->
<?php   //adds Sidebar direito se activo

        if($side == 1 ){
        }
        elseif($side == 2 ){
                include('sidebar-right.php');
        }
        elseif($side == 3){
                include('sidebar-right.php');
        }
?>
</div>
<?php get_footer(); ?>
