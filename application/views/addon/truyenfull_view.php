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
</style>
</head>

<body>
    <section class="contentMansory">   
        <h2 class="text-center big-title"><?php echo $tentruyen[0]["cname"] ?> ## <?php echo $tentruyen[0]["sname"] ?></h2>
        <div class="clearfix"></div>
        <div class="container">
            <div class="content viewer">
                <div class="row m-auto text-center">
                    <?php foreach ($truyen as $tranh) { ?>
                        <img src="<?php echo $tranh['image_link'] ?>" alt="<?php echo $tranh['image_id'] ?>" style="margin: 0 auto;" class="img-fluid">
                    <?php } ?>       
                                    
                </div>
            </div>
        </div>
    </section>

</body>

</html>
