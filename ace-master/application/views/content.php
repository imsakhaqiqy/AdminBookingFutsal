<div class="page-content">
<!-- /.ace-settings-container -->
<?php $this->load->view('content/page_title');?>
  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
      <?php

          $this->load->view('content/page/'.$page.'/'.$sub_page);
      ?>
      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.page-content -->
