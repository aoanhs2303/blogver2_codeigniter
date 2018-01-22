<!DOCTYPE html>
<html lang="en">

<head>
    <title> Admin Template </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <!-- <link href="<?php echo base_url() ?>vendor/summernote.css" rel="stylesheet"> -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/master_style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=vietnamese" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/jquery-3.3.0.min.js"></script>
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
        Thêm mới bài viết
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="general.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="general.html#">Forms</a></li>
        <li class="breadcrumb-item active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nhập thông tin bài viết mới</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Tiêu đề</b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" placeholder="Nhập tiêu đề tin" id="addTen">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Chọn danh mục</b></label>
                <div class="col-sm-10">
                  <select class="form-control" id="addDanhMuc">
                    <?php foreach ($danhmuc as $dm) { ?>
                      <option value="<?php echo $dm['name'] ?>"><?php echo $dm['name'] ?></option>
                    <?php } ?>
                  </select>                  
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Chọn ảnh</b></label>
                <div class="col-sm-10">
                  <input type="file" name="files[]" id="addHinhAnh"> 
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Tóm tắt</b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" placeholder="Nhập tóm tắt bài viết" id="addTomTat">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Nhập nội dung</b></label>
                <div class="col-sm-10">
                  <div class="editor">
                      <form>
                        <textarea name="editor1" id="addNoiDung">
                            This is my textarea to be replaced with CKEditor.
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
      

        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tất cả bài viết</h3>

              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right d-none d-sm-flex">
                    <li><a href="simple.html#">Previous</a></li>
                    <li><a href="simple.html#" class="current">1</a></li>
                    <li><a href="simple.html#">2</a></li>
                    <li><a href="simple.html#">3</a></li>
                    <li><a href="simple.html#">Next</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-responsive tablebaiviet">
                <tr>
                  <th style="width: 5%">#</th>
                  <th style="width: 20%" >Hình ảnh</th>
                  <th style="width: 15%">Tên bài viết</th>
                  <th style="width: 15%">Thuộc danh mục</th>
                  <th style="width: 15%" >Tóm tắt</th>
                  <th style="width: 10%">Ngày tạo</th>
                  <th style="width: 20%">Hành động</th>
                </tr>
                <?php $count = 0; foreach ($baiviet as $value) {  $count++?>
                <tr class="post-<?php echo $value['id']; ?>">
                  <td class="iStt"><?php echo $count ?>.</td>
                  <td class="iImg"><img src="<?php echo $value['image'] ?>" style="height: 100px" alt="<?php echo $value['image'] ?>"></td>
                  <td class="iTen"><?php echo $value['title']; ?></td>
                  <td class="iCate"><?php echo $value['category']; ?></td>
                  <td class="iTomTat"><?php echo $value['tomtat'] ?></td>
                  <td class="iTime"><?php echo date('d/m/Y', $value['datetime']); ?></td>
                  <td class="iActive">
                    <a href="suabaiviet/<?php echo $value['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#myModalDel-<?php echo $value['id']; ?>"><i class="fa fa-times"></i></a>
                    <div class="modal fade" id="myModalDel-<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xóa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-center">
                            <h5 class="text-danger">Bạn có muốn xóa bài viết: <?php echo $value['title']; ?></h5>
                            <img src="<?php echo $value['image'] ?>" class="img-fluid" style="height: 200px" alt="">
                          </div>
                          <div class="modal-footer">
                            <a href="<?php echo $value['id']; ?>" type="button" class="btn btn-danger pull-right xoaajax">Xóa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="" class="btn btn-info"><i class="fa fa-paper-plane"></i></a>
                  </td>
                </tr>
                <?php } ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


      
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

<script>
  $('body').on('click', '.xoaajax', function(event) {
    var btnX = $(this).parent().prev().prev().children('button');
    
    var idxoa = this.getAttribute('href');

    $.ajax({
      url: 'xoabaiviet',
      type: 'POST',
      dataType: 'json',
      data: {idbaivietxoa: idxoa},
    })
    .always(function() {
      $row = document.querySelector('.post-' + idxoa).remove();
    });
    
      var thongbao = `<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-check-circle"></i> Xóa thành công. 
      </div>`
      $('.tb').remove()
      $('.thongbao').append(thongbao);

    btnX.click();
    event.preventDefault();
  });
</script>


<script>

  var tenfile = "";
  $(function () {
    'use strict';
    var duongdan = '<?php echo base_url(); ?>'; 
    $('#addHinhAnh').fileupload({
      url: duongdan + 'admin/uploadFilePost',
      dataType: 'json',
      replaceFileInput:false,
      done: function (e, data) { 
        $.each(data.result.files, function (index, file) {
          tenfile = file.url
          $('<p/>').text(file.name).appendTo('#addHinhAnh');
        });
      }
    })   
  });

  document.querySelector('.btnaddajx').addEventListener('click', function() {
    console.log("CLICK");
    $.ajax({
      url: 'thembaiviet',
      type: 'POST',
      dataType: 'json',
      data: {
        tenbaiviet:     $('#addTen').val(),
        danhmucbaiviet: $('#addDanhMuc').val(),
        imagebaiviet:   tenfile,
        tomtatbaiviet:  $('#addTomTat').val(),
        noidungbaiviet: $('#addNoiDung').val(),
      },
    })
    .always(function(res) {
      if($('#danhmuchinh').val() == "") {
        document.querySelector('.validateDM').style.display = 'block';
        return;
      }

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!

      var yyyy = today.getFullYear();
      if(dd<10){
          dd='0'+dd;
      } 
      if(mm<10){
          mm='0'+mm;
      }
      var today = dd+'/'+mm+'/'+yyyy;
      var noidung = `
            <tr class="post-`+res+`">
              <td class="iStt"><span class="badge bg-red">NEW</span></td>
              <td class="iImg"><img style="height: 100px" src="`+tenfile+`" alt="`+tenfile+`"></td>
              <td class="iTen">`+$('#addTen').val()+`</td>
              <td class="iCate">`+$('#addDanhMuc').val()+`</td>
              <td class="iTomTat">`+$('#addTomTat').val()+`</td>
              <td class="iTime">`+today+`</td>
              <td class="iActive">
                <a href="suabaiviet/`+res+`" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#myModalDel-`+res+`"><i class="fa fa-times"></i></a>
                <div class="modal fade" id="myModalDel-`+res+`" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xóa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <h5 class="text-danger">Bạn có muốn xóa bài viết: `+$('#addTen').val()+`</h5>
                        <img src="`+tenfile+`" class="img-fluid" style="height: 200px" alt="">
                      </div>
                      <div class="modal-footer">
                        <a href="`+res+`" type="button" class="btn btn-danger pull-right xoaajax">Xóa</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="" class="btn btn-info"><i class="fa fa-paper-plane"></i></a>
              </td>
            </tr>`;


      $('table.tablebaiviet').append(noidung);
      $('#danhmuchinh').val("");

      var thongbao = `<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-check-circle"></i> Thêm thành công. 
      </div>`
      $('.tb').remove()
      $('.thongbao').append(thongbao);

    });
    
  })
</script>


</body>
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>    
  <script src="<?php echo base_url(); ?>js/template.js"></script>

  
  <script src="<?php echo base_url() ?>vendor/summernote.js"></script>

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

