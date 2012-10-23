<!-- Modal -->
<div class="modal hide fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<?php
$post_id = 90;
$queried_post = get_post($post_id);
?>

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $queried_post->post_title; ?></h3>
  </div>
  <div class="modal-body">
    <p>
<?php

echo $queried_post->post_content;

?>
    </p>
  </div>
  <div class="modal-footer">
<a class="label" style="float:left" onmouseover="this.className='label label-new-info'" onmouseout="this.className='label'" href="<?php comments_link(); ?>">Response</a>
<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

