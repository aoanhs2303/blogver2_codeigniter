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

    
    <div class="container">
    </div>
    
    <section class="content mt-3">
        <div class="container">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-8 col-12 big-col-8">
                    <form action="">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li class="list-group-item"><a href="#title">Tên</a></li>
                              <li class="list-group-item"><a href="#tag">Tag</a></li>
                              <li class="list-group-item"><a href="#level">Level</a></li>
                              <li class="list-group-item"><a href="#all">Anything</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">         
                        <input type="text" class="form-control" name="search_item" placeholder="Search term...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="search_doc"><span class="fa fa-search"></span></button>
                        </span>
                    </div>           
                    </form>
                    <div class="news">
                        <!--ones-news-->

                    <?php foreach ($ketqua as $value) { ?>
                        <div class="one-news">
                            <div class="row">
                    <?php 
                      $ar = explode('/', $value['image']);
                      $tenvakieu = explode('.', end($ar));
                      $tenanh = $tenvakieu[0];
                      $kieuanh = $tenvakieu[1];
                     ?>

                                <div class="col-sm-2 col-12">
                                    <a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>"><img src="<?php echo base_url(); ?>files/post/<?php echo $tenanh .'_thumb.' . $kieuanh ?>" alt="" class="img-fluid"> </a>
                                </div>
                                <div class="col-sm-10 col-12 no-padding-left">
                                    <a href="<?php echo base_url(); ?>home/xemchitiet/<?php echo $value['id']; ?>">
                                        <h5 id="title-news"><?php echo $value['title'] ?></h5>
                                    </a>
                                    <style>
                                        p {
                                            margin-bottom: 0px;
                                        }
                                    </style>
                                    <div class="info-news">
                                        <span><i class="fa fa-user"></i> AoAnhs2303</span>
                                        <span><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', $value['datetime']) ?></span>
                                        <span class="badge badge-warning" style="background-color: orangered"><i class="fa fa-bar-chart"></i> <?php echo $value['category'] ?></span>
                                        <p><?php echo $value['tomtat'] ?></p>
                                        <br>
                                        <div>
                                            <a href="<?php echo base_url() ?>tailieu/xemchitiet/<?php echo $value['id'] ?>" class="btn btn-danger read-more">Read more&nbsp;<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                        
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
                            <li class="page-item active"><a class="page-link" href="">1</a></li> 
                            <li class="page-item"><a class="page-link" href="">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="" aria-label="Next">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>  
                      </ul>
                    </nav>
                </div>
                

                <?php echo $side; ?>
            </div>
        </div>
    </section>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular-route.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/main.js"></script>
</html>
