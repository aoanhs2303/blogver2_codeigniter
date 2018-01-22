<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>AoAnhs2303's Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>aoanhs2303.tk/images/favicon.ico" />

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

    <section class="contentMansory">
        
        <header class="mansory">
            <div class="container">
                <ul class="nav justify-content-center mansory-header">
                    <li class="nav-item active" data-kind="*">
                        <a class="nav-link" href="#">All</a>
                    </li>
                    <li class="nav-item" data-kind=".Girl">
                        <a class="nav-link" href="#">Girl</a>
                    </li>
                    <li class="nav-item" data-kind=".Dev">
                        <a class="nav-link" href="#">Dev</a>
                    </li>
                    <li class="nav-item" data-kind=".Funny">
                        <a class="nav-link" href="#">Funny</a>
                    </li>
                    <li class="nav-item" data-kind=".Scenery">
                        <a class="nav-link" href="#">Scenery</a>
                    </li>
                </ul>    
            </div>
            
        </header>
        <h2 class="text-center big-title">All Pictures</h2>
        <div class="clearfix"></div>
        <div class="container pinterest">
            <div class="content">
                <ul>
                    <?php foreach ($hinhanh as $ha) { ?>
                        <li>
                            <a data-fancybox="Girl" href="<?php echo $ha['image'] ?>"><img src="<?php echo $ha['image'] ?>" alt="<?php echo $ha['image'] ?>" class="rounded img-fluid"></a>
                        </li>
                    <?php } ?>  
                </ul>
            </div>

            <!--                PAGINATION-->
                   
                   <nav aria-label="Page navigation example">     
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>  
                            <li class="page-item active"><a class="page-link" href="">1</a></li>
                            <li class="page-item"><a class="page-link" href="">
                            2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>    
                      
                        
                      </ul>
                    </nav>
        </div>
    </section>

</body>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/jquery-3.3.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/angular.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/imagesloaded.pkgd.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>aoanhs2303.tk/vendor/jquery.fancybox.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/vendor/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aoanhs2303.tk/main.js"></script>
</html>
