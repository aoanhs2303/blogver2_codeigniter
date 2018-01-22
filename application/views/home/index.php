<!DOCTYPE html>
<html lang="en">

<head>
    <title> AoAnhs2303's Blog </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Đây là blog cá nhân của Trần Như Lực, nơi chia sẽ các website project cá nhân."/>
    <meta name="keywords" content="aoanhs2303, tran nhu luc, aoanhs2303.tk, trần như lực">
    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>aoanhs2303.tk/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/vendor/hamberger.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/style.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109040970-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109040970-1');
    </script>    
</head>

<body>

    <section class="content">
        <div class="container">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-8 col-12 big-col-8">
                    <div class="feature">
                        <div class="header-feature">
                            <h4 id="header-fetu"><i class="fa fa-bookmark">&nbsp;</i>Featured</h4>
                            <?php foreach ($baito as $value) { ?>
                            <div class="wrapperfetu">
                                <div class="img-featured">
                                    <a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>"><img src="<?php echo $value['image'] ?>" alt="" class="img-fluid rounded"></a>  
                                </div>
                                <a href="" id="title-featured">
                                    <h3>
                                        <a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>"><?php echo $value['title'] ?></a>
                                    </h3>
                                </a>
                                <p class="desctiption"><?php echo $value['tomtat'] ?></p>
                                <a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>" class="btn btn-danger read-more">Read more&nbsp;<i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="news">
                        <!--ones-news-->
                        <?php foreach ($baiviet as $value) { ?>
                            <div class="one-news">
                                <div class="row">
                                    <div class="col-sm-4 col-12">
                    <?php 
                      $ar = explode('/', $value['image']);
                      $tenvakieu = explode('.', end($ar));
                      $tenanh = $tenvakieu[0];
                      $kieuanh = $tenvakieu[1];
                     ?>
                                    <a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>"><img src="<?php echo base_url(); ?>files/post/<?php echo $tenanh .'_thumb.' . $kieuanh ?>" alt="" class="img-fluid"> </a>
                                    </div>
                                    <div class="col-sm-8 col-12 no-padding-left" style="padding-left: 0px">
                                        <a href="#">
                                            <h5 id="title-news"><a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>"><?php echo $value['title'] ?> </a></h5>
                                        </a>
                                        <div class="info-news">
                                            <span><i class="fa fa-user"></i> AoAnhs2303</span>
                                            <span><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', $value['datetime']) ?></span>
                                            <span><i class="fa fa-tag"></i> <?php echo $value['category'] ?> </span>
                                            <p><?php echo $value['tomtat'] ?> </p>
                                            <a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>" class="btn btn-danger read-more">Read more&nbsp;<i class="fa fa-angle-double-right"></i></a>
                                            <a href="#" class="btn btn-info read-more">Share&nbsp;<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    
<!--                PAGINATION-->
                            <?php
                                $uri = $_SERVER['REQUEST_URI'];
                                $uri = explode('/', $uri);
                                $uri = end($uri);
                                if(!is_numeric($uri)) $uri = 1; 
                            ?>                   
                   <nav aria-label="Page navigation example">    
                        <ul class="pagination">
                        <?php for ($i=1; $i < $sotrang + 1; $i++) { 
                            if ($i == $uri) {?>
                                <li class="page-item active"><a class="page-link" href="<?php echo base_url(); ?>home/page/<?php echo $i; ?>"><?php echo $i; ?></a></li> 
                            <?php }else{ ?>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>home/page/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php }} ?>

                        <?php if ($uri < $i - 1) { is_numeric($uri) ? null : $uri = 1;  ?>
                            <li class="page-item">
                                <a class="page-link" href="<?php echo base_url(); ?>home/page/<?= $uri + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>  

                        <?php } else { ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-ban"></i></span>
                            </a>
                        </li>  

                        <?php } ?>

                      </ul>
                    </nav>
                </div>
                <?php echo $side ?>
            </div>
        </div>
    </section>
    
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular-route.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/main.js"></script>
</html>
