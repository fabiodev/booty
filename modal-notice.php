<!-- Modal -->
<div class="modal hide fade" id="myModal" role="dialog" aria-labelledby="modalBody" aria-hidden="true">

<?php
$post_id_pt = get_option('notice_post');
$queried_post_pt = get_post($post_id_pt);

$post_id_en = 5004;
$queried_post_en = get_post($post_id_en);

$post_id_dis = 5006;
$queried_post_dis = get_post($post_id_dis);
?>

  <div class="modal-header" id="modalBody">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

<ul class="nav nav-tabs" id="myTab">

	<!-- declaration of tabs -->
  <li class="active"><a data-toggle="tab" href="#pt">PT</a></li>
  <li><a data-toggle="tab" href="#en">EN</a></li>
  <li class="pull-right"><a data-toggle="tab" href="#disclaimer">Disclaimer</a></li>
</ul>

	<!-- modal's content div-->
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="pt">
                <?php

                echo $queried_post_pt->post_content;

                ?>
<a class="label" style="float:left" onmouseover="this.className='label label-new-info'" onmouseout="this.className='label'" 
href="<?php echo get_comments_link($post_id_pt); ?>">comments</a>
		</div><!-- active tab div-->
		</div><!-- myTabContent -->
  </div><!-- modal header -->
  <div class="modal-footer">

<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
  </div><!-- footer-->
</div>
