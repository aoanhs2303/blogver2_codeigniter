<!DOCTYPE html>
<html lang="en">
 
<head>
    
    <title>AoAnhs2303's Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>aoanhs2303.tk/images/favicon.ico" />
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular-route.js"></script>


    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/main.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/vendor/hamberger.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/style-picture.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109040970-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109040970-1');
    </script>
    <style>
hr.style-seven {
    overflow: visible; /* For IE */
    height: 30px;
    width: 100%;
    border-style: solid;
    border-color: red;
    border-width: 1px 0 0 0;
    border-radius: 20px;
}
hr.style-seven:before { /* Not really supposed to work, but does */
    display: block;
    content: "";
    height: 30px;
    width: 100%;
    margin-top: -31px;
    border-style: solid;
    border-color: black;
    border-width: 0 0 1px 0;
    border-radius: 20px;
}
</style>
</head>

<body>


    <section class="contentMansory">
        

        <div class="clearfix"></div>
        <div class="container mt-3">

            <div class="row">
                <div class="col-sm-8">
                    <div class="content mb-2">
                        <div class="row">
                                
                            <?php foreach ($truyen as $tt) { ?>

                            <div class="col-sm-4">
                                <img src="<?php echo $tt['store_image'] ?>" alt="" class="img-fluid">
                            </div>  
                            <div class="col-sm-8">
                                <h4><?php echo $tt['store_name'] ?></h4>
                                <table class="table table-striped">
                                  <tbody>
                                    <tr>
                                      <th scope="row" style="width: 25%"> Nhóm dịch</th>
                                      <td>: Mark</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Thể loại</th>
                                      <td>: Comedy, Drama, Manhua, Mystery, Romance, Shoujo, Xuyên Không</td>
                                    </tr>
                                    <tr> 
                                      <th scope="row">Số chương</th>
                                      <td>: <?php echo $sochuong; ?></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Tình trạng</th>
                                      <td>: Còn tiếp</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <a href="<?php echo base_url() ?>truyen/doctruyen/<?php echo $chapter[0]['chapter_id'] ?>" class="btn btn-success">Đọc chương đầu</a>
                                <a href="<?php echo base_url() ?>truyen/doctruyen/<?php echo end($chapter)['chapter_id'] ?>" class="btn btn-danger">Đọc chương cuối</a>                         
                            </div>
                            <hr class="style-seven">

                        <div class="card mota mb-3">
                          
                          <div class="card-block">
                            <h4 class="card-title">Nội dung truyên: <?php echo $tt['store_name'] ?></h4>
                            <?php echo $tt['store_desc'] ?>
                          </div>
                        </div>
                        
                        </div>
                        <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                          <div class="card-block">
                            <h5 class="card-title" style="margin-bottom: 0px"><?php echo $tt['store_name'] ?></h5>   
                          </div>
                        </div>
                        <?php } ?> 
                        <div class="list_chapter">
                            <ol class="list-group" style="width: 100%">
                                <?php foreach ($chapter as $ch) { ?>
                                <li class="list-group-item" style="width: 100%">
                                    <a href="<?php echo base_url() ?>truyen/doctruyen/<?php echo $ch['chapter_id'] ?>"><?php echo $ch['chapter_name'] ?></a>
                                </li>
                                <?php } ?>
                            </ol>
                        </div>
                        
                    </div>    
                </div>
            <!-- /*SIDE*/ -->
            <?php echo $side; ?>
            
        </div>
    </section>

</body>

</html>
