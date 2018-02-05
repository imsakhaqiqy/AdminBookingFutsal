<ul class="breadcrumb">
  <li>
    <i class="ace-icon fa fa-home home-icon"></i>
    <a href="<?php echo base_url('index.php/dashboard');?>">Home</a>
  </li>

  <li>
    <a href="<?php echo base_url('index.php/'.$page);?>">
        <?php if(isset($title_page)){
            echo $title_page;
        }
        ?>
    </a>
  </li>

    <li>
    <a href="#">
        <?php if(isset($sub_title_page)){
            echo $sub_title_page;
        }
        ?>
    </a>
    </li>

  <!--<li class="active">Blank Page</li>-->
</ul>
