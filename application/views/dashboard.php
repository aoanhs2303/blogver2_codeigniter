<!DOCTYPE html>
<html lang="en">

<head>
    <title> Admin Template </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/master_style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/_all-skins.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=vietnamese" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/jquery-3.3.0.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php require_once("include/main_header.php") ?>
    <div>
    <button class="control-sidebar-btn btn btn-dark" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
  </div>
  <?php require_once("include/sidebar.php") ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Trang quản trị
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="simple.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="simple.html#">Tables</a></li>
        <li class="breadcrumb-item active">Simple</li>
      </ol>
    </section>

    <section class="content">
        <div class="col-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bài viết</h3>

              <div class="box-tools">
                <a href="<?php echo base_url() ?>admin/quanlybaiviet" class="btn btn-info">Xem chi tiết</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped table-responsive">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tên bài viết</th>
                  <th>Hình ảnh</th>
                  <th>Danh mục</th>
                  <th>Ngày tạo</th>
                  <th style="width: 40%">Tóm tắt</th>
                </tr>
              <?php $c=0; foreach ($baiviet as $bv) { $c++?>
                <tr>
                  <td><?php echo $c ?>.</td>
                  <td><?php echo $bv['title'] ?></td>
                  <td><img src="<?php echo $bv['image'] ?>" alt="<?php echo $bv['image'] ?>" class="img-fluid" style="width: 50px"></td>
                  <td><?php echo $bv['category'] ?></td>
                  <td><?php echo date('d/m/Y',$bv['datetime']) ?></td>
                  <td><?php echo $bv['tomtat'] ?></td>
                </tr>
              <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          

         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tài liệu</h3>

              <div class="box-tools">
                <a href="<?php echo base_url() ?>admin/quanlytailieu" class="btn btn-info">Xem chi tiết</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped table-responsive">
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 20%">Tên bài viết</th>
                  <th>Hình ảnh</th>
                  <th>Cấp độ</th>
                  <th>Tag</th>
                  <th style="width: 10%">Ngày tạo</th>
                  <th>Link download</th>
                </tr>
              <?php $c=0; foreach ($tailieu as $tl) { $c++?>
                <tr>
                  <td><?php echo $c ?>.</td>
                  <td><?php echo $tl['title'] ?></td>
                  <td><img src="<?php echo $tl['image'] ?>" alt="<?php echo $tl['image'] ?>" class="img-fluid" style="width: 50px"></td>
                  <td><?php echo $tl['level'] ?></td>
                  <td><?php echo $tl['tag'] ?></td>
                  <td><?php echo date('d/m/Y', $tl['datetime']) ?></td>
                  <td><a href="<?php echo $tl['link'] ?>" class="btn btn-success btn-block">Click</a></td>
                </tr>
              <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->           

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Dự án</h3>
              <div class="box-tools">
                <a href="<?php echo base_url() ?>admin/quanlyduan" class="btn btn-info">Xem chi tiết</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped table-responsive">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tên dự án</th>
                  <th>Hình ảnh</th>
                  <th>Ngày tạo</th>
                  <th style="width: 40%">Link</th>
                </tr>
              <?php $c=0; foreach ($duan as $da) { $c++?>
                <tr>
                  <td><?php echo $c ?>.</td>
                  <td><?php echo $da['title'] ?></td>
                  <td><img src="<?php echo $da['image'] ?>" alt="<?php echo $da['image'] ?>" class="img-fluid" style="width: 100px"></td>
                  <td><?php echo date('d/m/Y',$da['datetime']) ?></td>
                  <td><?php echo $da['link'] ?></td>
                </tr>
              <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->  

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Web Application</h3>
              <div class="box-tools">
                <a href="<?php echo base_url() ?>admin/quanlywebapp" class="btn btn-info">Xem chi tiết</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped table-responsive">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tên webapp</th>
                  <th>Hình ảnh</th>
                  <th>Ngày tạo</th>
                  <th style="width: 40%">Link</th>
                </tr>
              <?php $c=0; foreach ($webapp as $wa) { $c++?>
                <tr>
                  <td><?php echo $c ?>.</td>
                  <td><?php echo $wa['title'] ?></td>
                  <td><img src="<?php echo $wa['image'] ?>" alt="<?php echo $wa['image'] ?>" class="img-fluid" style="width: 100px"></td>
                  <td><?php echo date('d/m/Y',$wa['datetime']) ?></td>
                  <td><?php echo $wa['link'] ?></td>
                </tr>
              <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->  

      </div>

      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục bài viết</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-responsive">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tên</th>
                  <th>Ngày tạo</th>
                </tr>
                <?php $c=0; foreach ($danhmuc as $dm) { $c++?>
                  <tr>
                    <td><?php echo $c; ?>.</td>
                    <td><?php  echo $dm['name'] ?></td>
                    <td><?php echo date('d/m/Y', $dm['datetime']) ?></td>
                  </tr>
                <?php } ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-12 col-lg-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục hình ảnh</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-responsive">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Tên</th>
                  <th>Ngày tạo</th>
                </tr>
                <?php $c=0; foreach ($danhmuchinh as $dmh) { $c++?>
                  <tr>
                    <td><?php echo $c; ?>.</td>
                    <td><?php  echo $dmh['name'] ?></td>
                    <td><?php echo date('d/m/Y', $dmh['datetime']) ?></td>
                  </tr>
                <?php } ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
      <b>Version</b> 1.1
    </div>Copyright &copy; 2017 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="rpanel-title"> Service Panel <span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="simple.html#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="simple.html#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>    

  <!-- fox_admin App -->
  <script src="<?php echo base_url(); ?>js/template.js"></script>
  
  
  

</html>

