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
        Thêm mới hình ảnh
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="general.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="general.html#">Forms</a></li>
        <li class="breadcrumb-item active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="thongbao"> </div>
     <!-- Basic Forms -->
<!--      <form action="themhinhanh" method="post" enctype="multipart/form-data"> -->

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nhập danh mục tin</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
            
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Nhập tên hình ảnh</b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="tenhinh" placeholder="Nhập tiêu đề của hình ảnh" id="tenhinh">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Chọn danh mục</b></label>
                <div class="col-sm-10">
                  <select class="form-control" name="danhmuchinh" id="danhmuchinh">
                  <?php foreach ($danhmuchinh as $key => $value) { ?>
                    <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
                  <?php } ?>
                  </select>                  
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Chọn ảnh</b></label>
                <div class="col-sm-4">
                  <input type="file" id="linkanh" name="files[]"> 
                </div>
                <div class="col-sm-1">
                  <label for="example-text-input" class="col-sm-2 col-form-label"><b>HOẶC</b></label>
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Nhập URL của hình ảnh" name="urlanh" id="urlanh"> 
                </div>
                <div class="col-sm-10 push-sm-2">
                  <div class="form-control-feedback validateHinh" style="display: none">
                      <small style="color: orangered">Không được để trống mục này.</small>
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
<!--       </form> -->
      <!-- /.box -->
      

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tất cả hình ảnh</h3>

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
              <table class="table table-responsive tablehinh">
                <tr>
                  <th style="width: 10%"><b>#</b></th>
                  <th style="width: 20%"><b>Tên hình ảnh</b></th>
                  <th style="width: 20%"><b>Hình ảnh</b></th>
                  <th style="width: 10%"><b>Danh mục</b></th>
                  <th style="width: 10%"><b>Dung lượng</b></th>
                  <th style="width: 15%"><b>Ngày tạo</b></th>
                  <th style="width: 15%"><b>Hành động</b></th>
                 
                </tr>
                <?php $count = 0; foreach ($hinhanh as $key => $value) { $count++; ?>
                   <tr class="image-<?php echo $value['id']; ?>">
                    <td class="iStt"><?php echo $count; ?>.</td>
                    <td class="iName"><?php echo $value['name'] ?></td>
                    <td class="iImg"><img src="<?php echo $value['image'] ?>" alt="" style="width: 100px"></td>
                    <td class="iCate"><?php echo $value['kind'] ?></td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                      </div>
                    </td>
                    <td><?php echo date('d/m/y', $value['datetime']); ?></td>

                    <td>
                    <a href="" class="btn btn-warning suaajax" data-toggle="modal" data-target="#myModal-<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin danh mục</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <label><b>Tiêu đề ảnh</b></label>
                            <input type="text" class="form-control editten" value="<?php echo $value['name'] ?>">
                          </div>
                          <input type="hidden" class="editid" value="<?php echo $value['id'] ?>">
                          <input type="hidden" class="edithinhcu" value="<?php echo $value['image'] ?>">
                          <div class="form-group">
                            <label><b>Tải lên hình ảnh</b></label>
                            <input type="file" class="form-control edithinh" id="edithinh" name="files[]">
                          </div>
                          <!-- select -->
                          <div class="form-group">
                            <label>Select</label>
                            <select class="form-control editdanhmuc">
                          <?php foreach ($danhmuchinh as $key => $dmh) { 
                              if($dmh['name'] == $value['kind']) { ?>
                              <option value="<?php echo $dmh['name']; ?>" selected><?php echo $dmh['name']; ?></option>
                            <?php }  else { ?>
                              <option value="<?php echo $dmh['name']; ?>"><?php echo $dmh['name']; ?></option>
                            <?php }?>                
                          <?php } ?>
                            </select>
                          </div>

                        </div>
                          <div class="modal-footer">
                            <a href="#" type="button" class="btn btn-info pull-right luuajax">Lưu thay đổi</a>
                          </div>
                        </div>
                      </div>
                    </div>
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
                            <h5 class="text-danger">Bạn có muốn xóa hình</h5>
                            <img src="<?php echo $value['image'] ?>" class="img-fluid" style="height: 200px" alt="">
                          </div>
                          <div class="modal-footer">
                            <a href="<?php echo $value['id']; ?>" type="button" class="btn btn-danger pull-right xoaajax">Xóa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>

                  </tr>                 
                <?php } ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

<script>
  $('body').on('click', '.xoaajax', function(event) {
    var btnX = $(this).parent().prev().prev().children('button');
    
    var idxoa = this.getAttribute('href');

    $.ajax({
      url: 'xoahinhanh',
      type: 'POST',
      dataType: 'json',
      data: {idhinhxoa: idxoa},
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      $row = document.querySelector('.image-' + idxoa).remove();
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
      $('input#edithinh').fileupload({
        url: duongdan + 'admin/uploadFile',
        dataType: 'json',
        replaceFileInput: false,
        done: function (e, data) {
          $.each(data.result.files, function (index, file) {
            tenfile = file.url;
            $('<p/>').text(file.name).appendTo('#edithinh');
          });
        }
      })
      
  });


  $('body').on('click', '.luuajax', function(event) {


    var btnX = $(this).parent().prev().prev().children('button');

    var id = this.parentElement.parentElement.children[1].querySelector('input.editid').value;
    var ten = this.parentElement.parentElement.children[1].querySelector('input.editten').value;
    var danhmuchinh = this.parentElement.parentElement.children[1].querySelector('select.editdanhmuc').value;
    var hinhcu = this.parentElement.parentElement.children[1].querySelector('input.edithinhcu').value;
    var hinhmoi = tenfile;

    console.log(hinhmoi);


    if(hinhmoi) {
      var hinh = hinhmoi;
    } else {
      var hinh = hinhcu;
    }

    $.ajax({
      url: 'suahinhanh',
      type: 'POST',
      dataType: 'json',
      data: {
        idhinh: id,
        namehinh: ten,
        linkhinh: hinh,
        catehinh: danhmuchinh
      },
    })
    .always(function() {
      console.log("complete");
      // Xử lý update giao diện
      // var danhmucSTT = document.querySelector('.dm-' + iddm + ' td.stt').innerHTML = `<span class="badge bg-warning">UPDATED</span>`;
      document.querySelector('.image-' + id + ' td.iStt').innerHTML = `<span class="badge bg-warning">UPDATED</span>`;
      document.querySelector('.image-' + id + ' td.iName').innerHTML = ten;
      document.querySelector('.image-' + id + ' td.iImg').innerHTML = `<img src="`+hinh+`" alt="" style="width: 100px">`;
      document.querySelector('.image-' + id + ' td.iCate').innerHTML = danhmuchinh;

    });
    var thongbao = `<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-check-circle"></i> Cập nhật thành công. 
      </div>`
    $('.tb').remove()
    $('.thongbao').append(thongbao);
    btnX.click(); // Cái này mới
    event.preventDefault();
  });
</script>



<script>

  var tenfile = "";
  $(function () {
      'use strict';

      var duongdan = '<?php echo base_url(); ?>'; 
      $('#linkanh').fileupload({
        url: duongdan + 'admin/uploadFile',
        dataType: 'json',
        replaceFileInput:false,
        done: function (e, data) {
          $.each(data.result.files, function (index, file) {
            tenfile = file.url
            $('<p/>').text(file.name).appendTo('#linkanh');
          });
        }
      })
      
  });

  $('.btnaddajx').click(function(event) {
    var ten = $('#tenhinh').val();
    var danhmuc = $('#danhmuchinh').val();
    var urlanh = $('#urlanh').val();
    if(tenfile != "") {
      var image = tenfile;
    } else if (urlanh != "") {
      var image = urlanh;
    } else {
      document.querySelector('.validateHinh').style.display = 'block';
      return;
    }
    
    $.ajax({
      url: 'themhinhanh',
      type: 'POST',
      dataType: 'json',
      data: {
        tenhinh: ten,
        danhmuchinh: danhmuc,
        urlanh: image
      },
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function(res) {
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
      var noidung = `<tr class="image-`+res+`">
                      <td class="iStt"><span class="badge bg-red">NEW</span></td>
                      <td class="iName">`+ten+`</td>
                      <td class="iImg"><img src="`+image+`" alt="" style="width: 100px"></td>
                      <td class="iCate">`+danhmuc+`</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td>`+today+`</td>
                      <td>

                    <a href="" class="btn btn-warning suaajax" data-toggle="modal" data-target="#myModal-`+res+`"><i class="fa fa-pencil"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-`+res+`" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin danh mục</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <label><b>Tiêu đề ảnh</b></label>
                            <input type="text" class="form-control editten" value="`+ten+`">
                          </div>
                          <input type="hidden" class="editid" value="`+res+`">
                          <input type="hidden" class="edithinhcu" value="`+image+`">
                          <div class="form-group">
                            <label><b>Tải lên hình ảnh</b></label>
                            <input type="file" class="form-control edithinh" id="edithinh" name="files[]">
                          </div>
                          <!-- select -->
                          <div class="form-group">
                            <label>Select</label>
                            <select class="form-control editdanhmuc">
                          <?php foreach ($danhmuchinh as $key => $dmh) { 
                              if($dmh['name'] == "Funny" ) { ?>
                              <option value="<?php echo $dmh['name']; ?>" selected><?php echo $dmh['name']; ?></option>
                            <?php }  else { ?>
                              <option value="<?php echo $dmh['name']; ?>"><?php echo $dmh['name']; ?></option>
                            <?php }?>                
                          <?php } ?>
                            </select>
                          </div>

                        </div>
                          <div class="modal-footer">
                            <a href="#" type="button" class="btn btn-info pull-right luuajax">Lưu thay đổi</a>
                          </div>
                        </div>
                      </div>
                    </div>
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
                            <h5 class="text-danger">Bạn có muốn xóa hình</h5>
                            <img src="`+image+`" class="img-fluid" style="height: 200px" alt="">
                          </div>
                          <div class="modal-footer">
                            <a href="`+res+`" type="button" class="btn btn-danger pull-right xoaajax">Xóa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                      </td>
                    </tr>  `






      $('.tablehinh').append(noidung);
      $('#tenhinh').val("");
      $('#danhmuchinh').val("Girl");
      document.querySelector('input#linkanh').value = "";
      tenfile = "";
      console.log($('input#linkanh').val());
      $('#urlanh').val("");

      var thongbao = `<div class="alert alert-info alert-dismissable tb">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-check-circle"></i> Thêm thành công. 
      </div>`
      $('.tb').remove()
      $('.thongbao').append(thongbao);
    });
  });

</script>
     

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

  <!-- fox_admin App -->
  <script src="<?php echo base_url(); ?>js/template.js"></script>
  <script src="<?php echo base_url() ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script> 

  <script src="<?php echo base_url() ?>jqueryupload/js/jquery.fileupload.js"></script>

  

</html>

