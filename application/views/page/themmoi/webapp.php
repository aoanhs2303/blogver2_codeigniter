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
          <h3 class="box-title">Nhập thông tin dự án mới</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
            
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Nhập tên web app</b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" placeholder="Nhập tiêu đề của dự án" id="tenwebapp">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label"><b>Nhập link của web app</b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" placeholder="Nhập đường link của dự án" id="linkwebapp">            
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
              <table class="table table-responsive tablewebapp">
                <tr>
                  <th style="width: 10%"><b>#</b></th>
                  <th style="width: 20%"><b>Tên dự án</b></th>
                  <th style="width: 20%"><b>Hình ảnh</b></th>
                  <th style="width: 10%"><b>Đường link</b></th>
                  <th style="width: 15%"><b>Ngày tạo</b></th>
                  <th style="width: 15%"><b>Hành động</b></th>
                 
                </tr>
                <?php $count = 0; foreach ($webapp as $value) { $count++; ?>
                   <tr class="webapp-<?php echo $value['id']; ?>">
                    <td class="iStt"><?php echo $count; ?>.</td>
                    <td class="iName"><?php echo $value['title'] ?></td>
                    <td class="iImg">
                      <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['image'] ?>" style="width: 100px">
                    </td>
                    <td class="iLink"><?php echo $value['link'] ?></td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                      </div>
                    </td>
                    <td>17/1/2018</td>

                    <td>
                    <a href="" class="btn btn-warning suaajax" data-toggle="modal" data-target="#myModal-<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin của dự án</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <label><b>Tên dự án</b></label>
                            <input type="text" class="form-control editten" value="<?php echo $value['title'] ?>">
                          </div>
                          <input type="hidden" class="editid" value="<?php echo $value['id'] ?>">
                          <input type="hidden" class="edithinhcu" value="<?php echo $value['image'] ?>">
                          <div class="form-group">
                            <label><b>Tải lên hình ảnh</b></label>
                            <input type="file" class="form-control edithinh" id="edithinh" name="files[]">
                          </div>
                          <!-- select -->
                        <div class="form-group">
                          <label for="example-text-input" class="col-form-label"><b>Nhập link của dự án</b></label>
                          <input class="form-control editlink" type="text" id="editlink" value="<?php echo $value['link'] ?>">            
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
      url: 'xoawebapp',
      type: 'POST',
      dataType: 'json',
      data: {idwebappxoa: idxoa},
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      $row = document.querySelector('.webapp-' + idxoa).remove();
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
    var link = this.parentElement.parentElement.children[1].querySelector('input.editlink').value;
    var hinhcu = this.parentElement.parentElement.children[1].querySelector('input.edithinhcu').value;
    var hinhmoi = tenfile;
    console.log(id);
    console.log(ten);
    console.log(link);


    if(hinhmoi) {
      var hinh = hinhmoi;
    } else {
      var hinh = hinhcu;
    }

    $.ajax({
      url: 'suawebapp',
      type: 'POST',
      dataType: 'json',
      data: {
        idwebapp: id,
        namewebapp: ten,
        linkwebapp: link,
        hinhwebapp: hinh
      },
    })
    .always(function() {
      console.log("complete");
      // Xử lý update giao diện

      document.querySelector('.webapp-' + id + ' td.iStt').innerHTML = `<span class="badge bg-warning">UPDATED</span>`;
      document.querySelector('.webapp-' + id + ' td.iName').innerHTML = ten;
      document.querySelector('.webapp-' + id + ' td.iImg').innerHTML = `<img src="`+hinh+`" alt="" style="width: 100px">`;
      document.querySelector('.webapp-' + id + ' td.iLink').innerHTML = link;



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
    var ten = $('#tenwebapp').val();
    var link = $('#linkwebapp').val();
    if(tenfile != "") {
      var image = tenfile;
    } else if (urlanh != "") {
      var image = urlanh;
    } else {
      document.querySelector('.validateHinh').style.display = 'block';
      return;
    }
    
    $.ajax({
      url: 'themwebapp',
      type: 'POST',
      dataType: 'json',
      data: {
        tenwebapp: ten,
        linkwebapp: link,
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
      var noidung = `<tr class="webapp-`+res+`">
                    <td class="iStt"><span class="badge bg-red">NEW</span></td>
                    <td class="iName">`+ten+`</td>
                    <td class="iImg">
                      <img src="`+image+`" alt="`+image+`" style="width: 100px">
                    </td>
                    <td class="iLink">`+link+`</td>
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
          
                        <div class="form-group">
                          <label for="example-text-input" class="col-form-label"><b>Nhập link của dự án</b></label>
                          <input class="form-control editlink" type="text" id="editlink" value="`+link+`">            
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

                  </tr>                 `






      $('.tablewebapp').append(noidung);
      $('#tenwebapp').val("");
      $('#linkwebapp').val("");
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

