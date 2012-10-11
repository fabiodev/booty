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

<section class="list-posts">
<div class="alert alert-info">
<strong><?php wp_title('')?>!</strong>
Showing all we know about it.
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><?php the_title(); ?> <small><?php the_time('F jS, Y') ?></small></h1>
</header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<a class="label" onmouseover="this.className='label label-info'" onmouseout="this.className='label'" href="<?php comments_link(); ?>">
<?php comments_number('no responses', 'one response', '% responses'); ?>
</a>
</footer>
</article>
<?php endwhile; else: ?>
<div class="alert alert-error alert-block">
  <h4>Oops!</h4>
  There are no posts to show at this time :(
</div>
</section>
<?php endif; ?>
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
<?php get_footer(); ?>
