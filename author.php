<?php get_header(); ?>

<div class="row-fluid">
<?php get_sidebar('left'); ?>

<section class="list-posts">
<div class="alert alert-info">
<strong><?php wp_title('')?>!</strong>
Showing all we know about it.
</div>

<!-- This sets the $curauth variable -->
<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>
<h3>About: <?php echo $curauth->display_name; ?></h3>
<p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
<p><strong>Profile:</strong> <?php echo $curauth->user_description; ?></p>
<h3>Posts by <?php echo $curauth->display_name; ?>:</h3>
<ul>
<!-- The Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
<?php the_title(); ?></a>
</li>
<?php endwhile; else: ?>
<p><?php _e('No posts by this author.'); ?></p>
<?php endif; ?>
<!-- End Loop -->
</ul>

<h4>Outros contribuidores:</h4>
<?php 
$auth_arg = array('exclude_admin' => false);
wp_list_authors( $auth_arg ); ?>

<?php include('pager.php'); ?>
</section>
</div>
<?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
