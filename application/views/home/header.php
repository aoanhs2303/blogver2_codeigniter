    <header>
        <div class="container top-menu">
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <div class="wrapper-menu xxx toggle-icon">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                    </div>


                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>home"><span class="red">A</span>o<span class="red">A</span>nhs2303</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>tailieu">Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Relaxing &nbsp;<i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>hinhanh">Xem ảnh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Nghe nhạc</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>truyen">Đọc truyện</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Project &nbsp;<i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <?php foreach ($duan as $da) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $da['link'] ?>"><?php echo $da['title'] ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                    
                    <form action="<?php echo base_url(); ?>search" class="form-inline my-2 my-lg-0 search-form" method="get">
                        <div class="input-group">
                            <input class="form-control mr-sm-2" type="text" name="input" placeholder="Search for...">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <section class="blog-name">
        <div class="container">
            <h1 id="logo"><span class="yolo">A</span>o<span class="yolo">A</span>nhs2303<small>'s</small> <?php echo $blogname ?></h1>
            <p id="desc">Website Developer</p>
        </div>
    </section>