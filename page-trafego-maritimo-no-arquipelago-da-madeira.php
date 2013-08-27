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
<script type="text/javascript">// <![CDATA[
width='100%y';          //the width of the embedded map in pixels or percentage
        height=450;         //the height of the embedded map in pixels or percentage
        border=1;           //the width of border around the map. Zero means no border
        notation=false;     //true or false to display or not the vessel icons and options at the left
        shownames=true;    //true or false to dispaly ship names on the map
        latitude=32.68;   //the latitude of the center of the map in decimal degrees
        longitude=-16.915;  //the longitude of the center of the map in decimal degrees
        zoom=9;             //the zoom level of the map. Use values between 2 and 17
        maptype=0;          //use 0 for Normal map, 1 for Satellite, 2 for Hybrid, 3 for Terrain
        trackvessel=0;      //the MMSI of the vessel to track, if within the range of the system
        fleet='';           //the registered email address of a user-defined fleet to display
        remember=false;     //true or false to remember or not the last position of the map
// ]]></script>
<script type="text/javascript" src="http://www.marinetraffic.com/ais/embed.js"></script>

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
                include('lib/sidebar-static.php');
        }
?>
</div><!-- Ends sanp12 -->

</div>
<?php get_footer(); ?>
