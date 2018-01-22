<?php 
  $uri = $_SERVER['REQUEST_URI'];
  $uri = explode('/', $uri);
  if(count($uri) >= 4) {
    $link = $uri[3];
  } else {
    $link = "index";
  }

 ?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image float-left">
          <img src="<?php echo base_url(); ?>images/user2-160x160.jpg" class="user-image rounded-circle" alt="User Image">
        </div>
        <div class="info float-left">
          <p>Trần Như Lực</p>
          <a href="simple.html#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      <!-- search form -->
      <form action="simple.html#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php if($link == 'index') { ?>
        <li class="active">
        <?php } else { ?>
        <li>
        <?php }?>
        
          <a href="<?php echo base_url() ?>admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <?php if($link == 'quanlybaiviet' || $link == 'quanlyhinhanh' || $link == 'quanlytruyen' || $link == 'suabaiviet' || $link == 'quanlyduan' || $link == 'quanlywebapp' || $link == 'quanlytailieu') { ?>
        <li class="treeview active">
        <?php } else { ?>
        <li class="treeview">
        <?php } ?>
          <a href="simple.html#">
            <i class="fa fa-files-o"></i>
            <span>Thêm mới</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if($link == 'quanlybaiviet' || $link == 'suabaiviet') { ?>
            <li class="active"><a href="<?php echo base_url() ?>admin/quanlybaiviet"><i class="fa fa-circle-o"></i> Bài viết</a></li>
            <?php } else { ?>
            <li><a href="<?php echo base_url() ?>admin/quanlybaiviet"><i class="fa fa-circle-o"></i> Bài viết</a></li>
            <?php }?>

            <?php if($link == 'quanlyduan') { ?>
              <li class="active"><a href="<?php echo base_url() ?>admin/quanlyduan"><i class="fa fa-circle-o"></i> Dự án</a></li>
            <?php } else { ?>
              <li><a href="<?php echo base_url() ?>admin/quanlyduan"><i class="fa fa-circle-o"></i> Dự án</a></li>
            <?php }?>
            
            <?php if($link == 'quanlyhinhanh') { ?>
              <li class="active"><a href="<?php echo base_url() ?>admin/quanlyhinhanh"><i class="fa fa-circle-o"></i> Hình ảnh</a></li>
            <?php } else { ?>
              <li><a href="<?php echo base_url() ?>admin/quanlyhinhanh"><i class="fa fa-circle-o"></i> Hình ảnh</a></li>
            <?php }?>
            <?php if($link == 'quanlytailieu') { ?>
              <li class="active"><a href="<?php echo base_url() ?>admin/quanlytailieu"><i class="fa fa-circle-o"></i> Tài liệu</a></li>
            <?php } else { ?>
              <li><a href="<?php echo base_url() ?>admin/quanlytailieu"><i class="fa fa-circle-o"></i> Tài liệu</a></li>
            <?php }?>

            <?php if($link == 'quanlywebapp') { ?>
              <li class="active"><a href="<?php echo base_url() ?>admin/quanlywebapp"><i class="fa fa-circle-o"></i> Web Application</a></li>
            <?php } else { ?>
              <li><a href="<?php echo base_url() ?>admin/quanlywebapp"><i class="fa fa-circle-o"></i> Web Application</a></li>
            <?php }?>

          </ul>
        </li>
        <?php if($link == 'danhmuctin' || $link == 'danhmuchinh' || $link == 'danhmuctruyen') { ?>
        <li class="treeview active">
        <?php } else { ?>
        <li class="treeview">
        <?php } ?>
        
          <a href="simple.html#">
            <i class="fa fa-th"></i>
            <span>Danh mục</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php if($link == 'danhmuctin') { ?>
          <li class="active"><a href="<?php echo base_url() ?>admin/danhmuctin"><i class="fa fa-circle-o"></i> Danh mục bài viết</a></li>
          <?php } else { ?>
          <li><a href="<?php echo base_url() ?>admin/danhmuctin"><i class="fa fa-circle-o"></i> Danh mục bài viết</a></li>
          <?php } 
          if($link == 'danhmuchinh') { ?>
          <li class="active"><a href="<?php echo base_url() ?>admin/danhmuchinh"><i class="fa fa-circle-o"></i> Danh mục hình ảnh</a></li>
          <?php } else { ?>
          <li><a href="<?php echo base_url() ?>admin/danhmuchinh"><i class="fa fa-circle-o"></i> Danh mục hình ảnh</a></li>
          <?php } if($link == 'danhmuctruyen') { ?>
          <li class="active"><a href="<?php echo base_url() ?>admin/danhmuctruyen"><i class="fa fa-circle-o"></i> Danh mục Truyện tranh</a></li>
          <?php } else { ?>
            <li><a href="<?php echo base_url() ?>admin/danhmuctruyen"><i class="fa fa-circle-o"></i> Danh mục Truyện tranh</a></li>
          <?php } ?>
                    
            
          </ul>
        </li>
        <li class="treeview">
          <a href="../widgets/calendar.html">
            <i class="fa fa-calendar"></i> <span>Truyện tranh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <ul class="treeview-menu">
              <li><a href="../widgets/widgets.html"><i class="fa fa-circle-o"></i> Quản lý truyện tranh</a></li>
              <li><a href="../widgets/weather.html"><i class="fa fa-circle-o"></i> Thêm truyện tranh</a></li>
              <li><a href="../widgets/weather.html"><i class="fa fa-circle-o"></i> Quản lý bình luận</a></li>
            </ul>
          </a>
        </li>
        <?php if($link == 'quanlytag'){ ?>
        <li class="active">
        <?php } else { ?>
        <li>
        <?php } ?>
          <a href="<?php echo base_url() ?>admin/quanlytag">
            <i class="fa fa-dashboard"></i> <span>Tag</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>




    
        
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
    <!-- item-->
    <a href="simple.html" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
    <!-- item-->
    <a href="simple.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
    <!-- item-->
    <a href="simple.html" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
  </div>
  </aside>