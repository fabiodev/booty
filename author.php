<?php get_header(); ?>

<div class="row-fluid">
<?php get_sidebar('left'); ?>

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
<div class="row-fluid">
<div class="span6">
<h3>About: <?php echo $curauth->display_name; ?></h3>
<p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
<p><strong>Profile:</strong> <?php echo $curauth->user_description; ?></p>
<p><strong>Contacts:</strong></p>

<?php 
	if($curauth->aim){
	echo "<p><strong>AIM:</strong> " .$curauth->aim. "</p>";
	}
	else{
	echo "<p><strong>AIM:</strong> Não fornecido.</p>";
	}

        if($curauth->jabber){
        echo "<p><strong>Gtalk:</strong> " .$curauth->jabber. "</p>";
        }
        else{
        echo "<p><strong>Gtalk:</strong> Não fornecido.</p>";
        }

        if($curauth->user_email){
        echo "<p><strong>Email:</strong> " .$curauth->user_email. "</p>";
        }
        else{
        echo "<p><strong>Email:</strong> Não fornecido.</p>";
        }

        if($curauth->yim){
        echo "<p><strong>Yim:</strong> " .$curauth->yim. "</p>";
        }
        else{
        echo "<p><strong>Yim:</strong> Não fornecido.</p>";
        }

?>
</div>

<div class="span5 well">
<h4>Outros contribuidores:</h4>
<ul>
<?php 
$auth_arg = array('exclude_admin' => false);
wp_list_authors( $auth_arg ); ?>
</ul>
</div>
</div><br>
<!-- <h3>Posts by <?php //echo $curauth->display_name; ?>:</h3> -->

<!-- Teste author posts -->
<section id="list-posts">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<header class="page-header">
  <h1><a href="<?php echo get_permalink( $post->ID ); ?>" class="booty_post_title"><?php the_title(); ?></a> <small><?php the_time('F jS, Y'); ?></small></h1>
</header>
<div><?php the_content(__('(more...)')); ?></div>
<footer>
<a class="label" onmouseover="this.className='label label-inverse'" onmouseout="this.className='label'" href="<?php comments_link(); ?>">
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
<?php include('pager.php'); ?>
</section>
</div>
<?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>
