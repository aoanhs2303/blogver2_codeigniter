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
</head>

<body>

    <section class="contentMansory" style="margin-top: -16px">   
        <header class="mansory">
            <div class="container">
                <ul class="nav justify-content-center mansory-header">
                    <li class="nav-item active" data-kind="*">
                        <a class="nav-link" href="#">All</a>
                    </li>
                    <li class="nav-item" data-kind=".Action">
                        <a class="nav-link" href="#">Adult</a>
                    </li>
                    <li class="nav-item" data-kind=".Dev">
                        <a class="nav-link" href="#">Adventure</a>
                    </li>
                    <li class="nav-item" data-kind=".Funny">
                        <a class="nav-link" href="#">Angst</a>
                    </li>
                    <li class="nav-item" data-kind=".Scenery">
                        <a class="nav-link" href="#">Fantasy</a>
                    </li>
                </ul>    
            </div>       
        </header>
        <h2 class="text-center big-title">All Manga</h2>
        <div class="clearfix"></div>
        <div class="container">
            <div class="content">
                <div class="row"> 
                    <?php foreach ($truyen as $value) { ?>
                        <div class="col-sm-4 col-lg-3 col-12 card-deck mb-3">
                        <div class="card card-inverse card-warning">
                            <div class="img-chap">
                                <img class="card-img-top img-fluid" src="<?php echo $value['store_image']; ?>" style="width: 100%">
                                <span class="badge badge-danger sochap" style="font-size: 18px"> HOT </span>
                            </div>
                            
                            <div class="card-block" style="padding: 4px">
                                
                                <h5 class="card-title"><?php echo $value['store_name']; ?></h5>

                                <div class="card-text">
                                    <?php echo substr($value['store_desc'], 0, 148) . ' [...]' ?>
                                </div>
                            </div>
                            <div class="card-footer" style="padding: 4px">
                                <a href="<?php echo base_url() ?>truyen/xemchitiet/<?php echo $value['store_id'] ?>" class="btn btn-danger">Đọc</a>
                                <a href="" class="btn btn-success">Share</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
    
                </div>
            </div>
        </div>
    </section>
<style>
    .img-chap {
        position: relative;
    } 
    .sochap {
        position: absolute;
        top: 0px;
        right: 0px;
    }
</style>

</body>

</html>
