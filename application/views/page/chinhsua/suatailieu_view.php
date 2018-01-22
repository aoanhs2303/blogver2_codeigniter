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
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php require_once("include/main_header.php") ?>
  <!-- Control Sidebar Toggle Button -->
    <div>
    <button class="control-sidebar-btn btn btn-dark" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
  </div>
  <!-- Left side column. contains the logo and sidebar -->
  <?php require_once("include/sidebar.php") ?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa Tài liệu
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="general.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="general.html#">Forms</a></li>
        <li class="breadcrumb-item active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
    <form action="<?php echo base_url(); ?>admin/suamottailieu" method="post" enctype="multipart/form-data">
      <?php foreach ($tailieu as $tl) { ?>  

     <!-- Basic Forms -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nhập thông tin về tài liệu</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Tiêu đề</b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" value="<?php echo $tl['title']; ?>" name="addName" id="addName">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Tag</b></label>
                <div class="col-sm-10">
                <?php 
                  $tags = json_decode($tl['tag']);
                 ?>
                <?php foreach ($alltag as $value) { ?>
                    <div class="checkbox float-left col-sm-3">
                      <?php 
                      $flag = [];
                      for ($i=0; $i < count($tags); $i++) { 
                        if ($tags[$i] == $value['name']) {
                          array_push($flag, true);
                        } else {
                          array_push($flag, false);
                        }
                      } 
                      if(in_array(true, $flag)) { ?>
                        <input class="xtag" checked type="checkbox" id="tag-<?php echo $value['id'] ?>" name="tag[]" value="<?php echo $value['name'] ?>"> 
                      <?php } else { ?>
                        <input class="xtag" type="checkbox" id="tag-<?php echo $value['id'] ?>" name="tag[]" value="<?php echo $value['name'] ?>"> 
                      <?php } ?>
                      <label for="tag-<?php echo $value['id'] ?>"><?php echo $value['name'] ?></label> 
                    </div>
                <?php } ?>  
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Chọn cấp độ</b></label>
                <div class="col-sm-10">
                  <select class="form-control" id="addLevel" name="addLevel">
                    <?php if($tl['level'] === "Cơ bản") { ?>
                      <option value="Cơ Bản" selected>Cơ Bản</option>
                    <?php } else { ?>
                      <option value="Cơ Bản">Cơ Bản</option>
                    <?php } ?>

                    <?php if($tl['level'] === "Trung Bình") { ?>
                      <option value="Trung Bình" selected>Trung Bình</option>
                    <?php } else { ?>
                      <option value="Trung Bình">Trung Bình</option>
                    <?php } ?>

                    <?php if($tl['level'] === "Nâng Cao") { ?>
                      <option value="Nâng Cao" selected>Nâng Cao</option>
                    <?php } else { ?>
                      <option value="Nâng Cao">Nâng Cao</option>
                    <?php } ?>

                    <?php if($tl['level'] === "All Level") { ?>
                      <option value="Cơ Bản" selected>All Level</option>
                    <?php } else { ?>
                      <option value="Cơ Bản">All Level</option>
                    <?php } ?>
                  </select>                  
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Ảnh củ</b></label>
                <div class="col-sm-10">
                  <input type="hidden" value="<?php echo $tl['id'] ?>" id="addID" name="addID">
                  <input type="hidden" value="<?php echo $tl['image'] ?>" id="addHinhCu" name="addHinhCu">
                  <img src="<?php echo $tl['image'] ?>" class="img-fluid" style="height: 200px" alt="<?php echo $tl['image'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Chọn ảnh mới</b></label>
                <div class="col-sm-10">
                  <input type="file" name="addAnhMoi" id="addAnhMoi"> 
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Link download</b></label>
                <div class="col-sm-10">
                  <input class="form-control" name="addLink" type="text" value="<?php echo $tl['link']; ?>" id="addLink">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Nhập nội dung</b></label>
                <div class="col-sm-10">
                  <div class="editor">
                      <form>
                        <textarea name="addNoiDung" id="addNoiDung">
                            <?php echo $tl['description']; ?>
                        </textarea>
                      </form>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right btnaddajx">Submit</button>
        </div>
      </div>
      <!-- /.box -->
      <?php } ?>
    </form> 
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
      <b>Version</b> 1.1
    </div>Copyright &copy; 2017 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

</div>
<!-- ./wrapper -->





</body>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>    
  <script src="<?php echo base_url(); ?>js/template.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>  
  <script src="<?php echo base_url() ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script> 
  <script src="<?php echo base_url() ?>jqueryupload/js/jquery.fileupload.js"></script>

  <script>
    $('#addNoiDung').summernote({
      height: 200,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true,                  // set focus to editable area after initializing summernote
      popover: {
         image: [],
         link: [],
         air: []
      }
    });
  </script>
</html>
