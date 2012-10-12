<?php
if ( post_password_required() ) : ?>
<div class="alert">
<strong>Password please!</strong>
<?php _e('Enter your password to view comments.'); ?>
</div>
<?php return; endif; ?>

<?php if ( comments_open() ) : ?>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<div class="alert">
<h4>Login please!</h4>
<p>You must be logged in to post a comment.</p>
<a class="btn btn-warning" 
   href="<?=wp_login_url(get_permalink());?>">Login</a>
</div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" 
      method="post" id="commentform" class="form-horizontal">
<legend>Post your comment</legend>
<?php if ( is_user_logged_in() ) : ?>

<div class="alert alert-info">
<strong><?php printf(__('Hello %s!'), $user_identity) ?></strong> 
You can place your comment if you wish to do so.
</div>
<?php else : ?>
<div class="control-group">
<label class="control-label" for="author">Name</label>
<div class="controls">
<input type="text" name="author" placeholder="Type your name..." />
</div>
</div>
<div class="control-group">
<label class="control-label" for="email">E-mail</label>
<div class="controls">
<input type="text" name="email" id="email" 
       placeholder="Type your e-mail address..." />
<span class="help-block">Your e-mail address will not be published.</span>
</div>
</div>
<?php endif; ?>

<div class="control-group">
<label class="control-label" for="comment">Your comment</label>
<div class="controls">
<textarea name="comment" id="comment" rows="3"></textarea>
</div>
</div>
<div class="form-actions">
<button type="submit" id="submit"  class="btn">Submit Comment</button>
<?php if ( is_user_logged_in() ) : ?>
<a class="btn btn-danger" href="<?=wp_logout_url(get_permalink())?>">Log out</a>
<?php endif; ?>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</div>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<div class="alert alert-error">
<strong>Comments closed!</strong>
Sorry, the comment form is closed at this time.
</div>
<?php endif; ?>
