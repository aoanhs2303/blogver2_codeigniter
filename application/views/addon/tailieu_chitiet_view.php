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
                <div class="col-md-8 big-col-8">
                    <?php foreach ($tailieu as $value) { ?>
                    <div class="feature">
                        <h2 class="titlefull"><?php echo $value['title']; ?></h2>
                        <div class="info-news">
                            <span><i class="fa fa-user"></i> AoAnhs2303</span>
                            <span><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', $value['datetime']) ?></span>


                            <div class="tag mt-1 mb-1">
                                <?php 
                                    $tags = json_decode($value['tag']);
                                    foreach ($tags as $tag) { ?>
                                        <span class="badge badge-primary"><i class="fa fa-tag"> </i><?php echo $tag ?> </span>
                                <?php }
                                 ?>
                                <span class="badge badge-warning" style="background-color: red"><i class="fa fa-bar-chart"></i> <?php echo $value['level'] ?></span>
                            </div>


                            
                        </div>
                        <div class="img-featured mt-3 text-center">
                            <img src="<?php echo $value['image'] ?>" alt="" class="img-fluid rounded" style="height: 100px">
                        </div>
                        <div class="content-full mt-3 mb-3">
                            <?php echo $value['description'] ?>
                        </div>
                        <a href="<?php echo $value['link'] ?>" class="btn btn-danger btn-block" target="_blank">Download <i class="fa fa-download"></i></a>
                        
                    </div>
                    <?php } ?>

                    <hr>
                    <div class="comment mt-3" style="padding: 10px; background-color: #ccc; border-radius: 4px">
                        <h5 style="color: #e67e22;"><i class="fa fa-comment"></i> Bình luận</h5>
                        <?php foreach ($binhluan as $bl) { ?>
                            <div class="one-comment mt-1" style="background-color: #F6F7F9; padding: 10px">
                                <div class="row">
                                    <div class="col-sm-2 col-3">
                                        <img src="<?php echo base_url(); ?>aoanhs2303.tk/upload/chau.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-sm-10 col-9 no-padding-left">
                                        <p class="name" style="margin-bottom: 0px; font-weight: bold"><?php echo $bl['user'] ?></p>
                                        <div class="info-news">
                                            <span><i class="fa fa-user"></i> AoAnhs2303</span>
                                            <span><i class="fa fa-calendar"></i><?php echo date('d/m/Y', $bl['datetime']) ?></span>
                               

                                        </div>
                                        <div class="content-cm" style="font-size: 14px">
                                            <?php echo $bl['comment'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
<!--            COMMENT-->
               <hr>
                <div class="comment-form">
                    <?php 
                        $uri = $_SERVER["REQUEST_URI"];
                        $uri = explode('/', $uri);
                        $uri = end($uri);
                     ?>
                    <h3 class="form-comm">Ý kiến của bạn</h3>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="hidden" value="<?php echo $uri ?>" class="idbaiviet">
                                <input type="text" name="nameUser" class="form-control usname" placeholder="Enter your name">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <textarea name="commentUser" cols="30" rows="3" class="form-control usercmt" placeholder="Give me your opinion"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="button" name="Submit" class="btn btn-info commentajax" value="Gửi bình luận" style="border-radius: 0px; background-color: #e67e22;border-color: #e67e22;">
                        </div>
                </div>
                </div>                

                <?php echo $side; ?>
            </div>
        </div>
    </section>
    <script>
    $('.search-panel .dropdown-menu li a').click(function(e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#","");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });
    </script>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/jquery-3.3.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular-route.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/main.js"></script>

<script>
    $('.commentajax').click(function(event) {
        name = $('.usname').val();
        comment = $('.usercmt').val();
        id = $('.idbaiviet').val();

        $.ajax({
            url:  '../../tailieu/comment',
            type: 'POST',
            dataType: 'json',
            data: {
                user: name,
                comment: comment,
                post_id: id
            },
        })
        .always(function() {
            var dateObj = new Date();
            var month = dateObj.getUTCMonth() + 1; //months from 1-12
            var day = dateObj.getUTCDate();
            var year = dateObj.getUTCFullYear();

            newdate = year + "/" + month + "/" + day;
            var noidung = `<div class="one-comment mt-1" style="background-color: #F6F7F9; padding: 10px">
            <div class="row">
                <div class="col-sm-2 col-3">
                    <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/chau.jpg" class="img-fluid">
                </div>
                <div class="col-sm-10 col-9 no-padding-left">
                    <p class="name" style="margin-bottom: 0px; font-weight: bold">`+name+`</p>
                    <div class="info-news">
                        <span><i class="fa fa-user"></i> AoAnhs2303</span>
                        <span><i class="fa fa-calendar"></i> `+newdate+`</span>
                    </div>
                    <div class="content-cm" style="font-size: 14px">
                        `+comment+`
                    </div>
                </div>
            </div>
        </div>`;
            $('.comment').append(noidung);
            $('.usname').val('');
            $('.usercmt').val('');
        });
        
    });
</script>
</html>
