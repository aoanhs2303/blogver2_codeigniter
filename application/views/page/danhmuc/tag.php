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
        Thêm mới danh mục tin
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="general.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="general.html#">Forms</a></li>
        <li class="breadcrumb-item active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="thongbao">
          
      </div>
     <!-- Basic Forms -->
<!--     <form action="themdanhmuctin" method="post"> -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nhập danh mục tin</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label for="danhmuctin" class="col-sm-2 col-form-label"><b>Danh mục</b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="danhmuctin" placeholder="Nhập tên danh mục mới" id="danhmuctin">
                  <div class="form-control-feedback validateDM" style="display: none">
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
          <button type="submit" class="btn btn-primary pull-right nutajax">Submit</button>
        </div>
      </div>
<!--     </form> -->
      <!-- /.box -->
      
<script>
  document.querySelector('.nutajax').addEventListener('click', function() {
    $.ajax({
      url: 'themtag',
      type: 'POST',
      dataType: 'json',
      data: {nametag: $('#danhmuctin').val()},
    })
    .always(function(res) {
      if($('#danhmuctin').val() == "") {
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
      var noidung = `<tr class="dm-`+res+`">
                  <td class="stt"><span class="badge bg-red">NEW</span></td>
                  <td class="ten">`+$('#danhmuctin').val()+`</td>
                  <td>10</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
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
                            <input type="hidden" class="DMID" value="`+res+`">
                            <input class="form-control DMT" type="text" name="danhmuctin" value="`+$('#danhmuctin').val()+`" id="danhmuctin">
                            <input type="hidden" class="DMDT" value="`+today+`">
                          </div>
                          <div class="modal-footer">
                            <a href="`+res+`" type="button" class="btn btn-info pull-right luuajax">Lưu thay đổi</a>
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
                          <div class="modal-body">
                            <h5>Bạn có muốn xóa: `+$('#danhmuctin').val()+`</h5>
                          </div>
                          <div class="modal-footer">
                            <a href="`+res+`" type="button" class="btn btn-danger pull-right xoaajax">Xóa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr> `;





      $('table.danhsach').append(noidung);
      $('#danhmuctin').val("");

      var thongbao = `<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-check-circle"></i> Thêm thành công. 
      </div>`
      $('.thongbao').append(thongbao);

    });
    
  })
</script>



               <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tất cả danh tục tin</h3>

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
              <table class="table table-responsive danhsach">
                <tr>
                  <th style="width: 10%">#</th>
                  <th style="width: 25%">Tên danh mục</th>
                  <th style="width: 10%">Số bài viết</th>
                  <th style="width: 20%">Chiếm (%)</th>
                  <th style="width: 20%">Ngày tạo</th>
                  <th style="width: 15%">Hành động</th>
                </tr>
            <?php $count = 0; foreach ($mangDanhmuc as $key => $value) { $count++;?>
                 <tr class="dm-<?php echo $value['id']; ?>">
                  <td class="stt"><?php echo $count; ?>.</td>
                  <td class="ten"><?php echo $value['name'] ?></td>
                  <td>10</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><?php echo date('d/m/Y', $value['datetime']) ?></td>
                  <td>
                    <a href="" class="btn btn-warning suaajax" data-toggle="modal" data-target="#myModal-<?php echo $value['id'] ?>"><i class="fa fa-pencil"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin danh mục</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="hidden" class="DMID" value="<?php echo $value['id']; ?>">
                            <input class="form-control DMT" type="text" name="danhmuctin" value="<?php echo $value['name'] ?>" id="danhmuctin">
                            <input type="hidden" class="DMDT" value="<?php echo $value['datetime']; ?>">
                          </div>
                          <div class="modal-footer">
                            <a href="<?php echo $value['id']?>" type="button" class="btn btn-info pull-right luuajax">Lưu thay đổi</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#myModalDel-<?php echo $value['id'] ?>"><i class="fa fa-times"></i></a>

                    <div class="modal fade" id="myModalDel-<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xóa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h5>Bạn có muốn xóa: <?php echo $value['name'] ?></h5>
                          </div>
                          <div class="modal-footer">
                            <a href="<?php echo $value['id']?>" type="button" class="btn btn-danger pull-right xoaajax">Xóa</a>
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
      url: 'xoatag',
      type: 'POST',
      dataType: 'json',
      data: {id: idxoa},
    })
    .always(function() {
      $row = document.querySelector('.dm-' + idxoa).remove();
    });
    
      var thongbao = `<div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-check-circle"></i> Xóa thành công. 
      </div>`
      $('.thongbao').append(thongbao);

    btnX.click();
    event.preventDefault();
  });
</script>


<script>
  $('body').on('click', '.luuajax', function(event) {
    var btnX = $(this).parent().prev().prev().children('button');

    var iddm = $(this).parent().prev().children('input.DMID').val();
    var ten = $(this).parent().prev().children('input.DMT').val();
    var ngay = $(this).parent().prev().children('input.DMDT').val();

  

    $.ajax({
      url: 'suatag',
      type: 'POST',
      dataType: 'json',
      data: {
        id: iddm,
        name: ten,
        datetime: ngay
      },
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
      // Xử lý update giao diện
      var danhmucSTT = document.querySelector('.dm-' + iddm + ' td.stt').innerHTML = `<span class="badge bg-warning">UPDATED</span>`;
      var danhmucNAME = document.querySelector('.dm-' + iddm + ' td.ten').innerHTML = ten;

    });
    var thongbao = `<div class="alert alert-info alert-dismissable tb">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-check-circle"></i> Cập nhật thành công. 
      </div>`
    $('.tb').remove()
    $('.thongbao').append(thongbao);
    btnX.click(); // Cái này mới
    event.preventDefault();
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
  
  
  

</html>

