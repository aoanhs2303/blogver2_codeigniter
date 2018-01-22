<div class="col-sm-4 col-12 big-col-4">

    <div class="about-me">
        <div class="top-ab">
            <h4 class="name-about">Trần Như Lực</h4>
            <p class="webdev">Website Developer</p>
        </div>
        <div class="avatar">
            <img src="<?php echo base_url() ?>aoanhs2303.tk/images/avt.jpg" alt="" width="60px" height="60px" class="rounded-circle">
        </div>
        <div class="bottom-ab">
            <div class="row">
                <div class="col-4 text-center">
                    <b>Posts</b><br>10
                </div>
                <div class="col-4 text-center">
                    <b>Comments</b><br>20
                </div>
                <div class="col-4 text-center">
                    <b>Pictures</b><br>30
                </div>
            </div>
        </div>
    </div>
    
    <div class="follow-me">
        <form action="sendmail.php" method="post">
            <div class="input-group gopy-mail">
                <div class="input-group-addon"><i class="fa fa-envelope" style="color: #dd4b39"></i></div>
                <input type="email" name="emailaddress" placeholder="Nhập email" class="form-control">
            </div>
            <div class="input-group gopy-noidung">
                <div class="input-group-addon"><i class="fa fa-paper-plane" style="color: #dd4b39"></i></div>
                <textarea name="gopy" id="" cols="40" rows="2" placeholder="Nhập góp ý" class="form-control"></textarea>
            </div>
            <div class="input-group">
                <input type="submit" name="Submit" class="btn btn-danger btn-block btn-sm btn-gopy" value="Góp ý">
            </div>
        </form>
        
    </div>
    
                        
    <div class="angular-trending" ng-app="tabTrending" ng-controller="TabController">
        <div class="all-tab">
            <div class="tab-header">
                <ul class="tab-he">
                    <li ng-class="{active:isActiveTab(1)}" ><a href=""ng-click="changeTab(1)"><i class="fa fa-bolt"></i> Trending</a></li>
                    <li ng-class="{active:isActiveTab(2)}" ><a href="" ng-class="{active:isActiveTab(2)}" ng-click="changeTab(2)"><i class="fa fa-star"></i> Project</a></li>
                    <li ng-class="{active:isActiveTab(3)}" ><a href="" ng-class="{active:isActiveTab(3)}" ng-click="changeTab(3)"><i class="fa fa-tag"></i> Labels</a></li>
                </ul>
                <div class="tabs-content">
                    <div ng-show="current_tab == 1">
                        <div class="one-news-small">
                        
                            <div class="row">
                                <div class="col-3 no-padding-right">
                                    <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/angularjs.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <a href=""><h5 style="margin-bottom: 0px; font-size:16px">Angular 5, Vue JS, React JS</h5></a>
                                    <div class="info-news">
                                        <span><i class="fa fa-calendar"></i>&nbsp;20/1/2018</span>
                                        <span><i class="fa fa-tag"></i> Category</span>
                                    </div>
                                    <div class="info-news">
                                        <span><i class="fa fa-eye"></i> 30</span>
                                        <span><i class="fa fa-comment"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 no-padding-right">
                                    <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/angularjs.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <a href=""><h5 style="margin-bottom: 0px; font-size:16px">Angular 5, Vue JS, React JS</h5></a>
                                    <div class="info-news">
                                        <span><i class="fa fa-calendar"></i>&nbsp;20/1/2018</span>
                                        <span><i class="fa fa-tag"></i> Category</span>
                                    </div>
                                    <div class="info-news">
                                        <span><i class="fa fa-eye"></i> 30</span>
                                        <span><i class="fa fa-comment"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 no-padding-right">
                                    <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/angularjs.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <a href=""><h5 style="margin-bottom: 0px; font-size:16px">Angular 5, Vue JS, React JS</h5></a>
                                    <div class="info-news">
                                        <span><i class="fa fa-calendar"></i>&nbsp;20/1/2018</span>
                                        <span><i class="fa fa-tag"></i> Category</span>
                                    </div>
                                    <div class="info-news">
                                        <span><i class="fa fa-eye"></i> 30</span>
                                        <span><i class="fa fa-comment"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div ng-show="current_tab == 2">

                        <div class="one-news-small">    
                            <div class="row">
                                <div class="col-3 no-padding-right">
                                    <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/21463315_1720869588207061_9220451073045956549_n.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <a href=""><h5 style="margin-bottom: 0px; font-size:16px">Angular 5, Vue JS, React JS</h5></a>
                                    <div class="info-news">
                                        <span><i class="fa fa-calendar"></i>&nbsp;20/1/2018</span>
                                        <span><i class="fa fa-tag"></i> Category</span>
                                    </div>
                                    <div class="info-news">
                                        <span><i class="fa fa-eye"></i> 30</span>
                                        <span><i class="fa fa-comment"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 no-padding-right">
                                    <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/21463315_1720869588207061_9220451073045956549_n.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <a href=""><h5 style="margin-bottom: 0px; font-size:16px">Angular 5, Vue JS, React JS</h5></a>
                                    <div class="info-news">
                                        <span><i class="fa fa-calendar"></i>&nbsp;20/1/2018</span>
                                        <span><i class="fa fa-tag"></i> Category</span>
                                    </div>
                                    <div class="info-news">
                                        <span><i class="fa fa-eye"></i> 30</span>
                                        <span><i class="fa fa-comment"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 no-padding-right">
                                    <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/21463315_1720869588207061_9220451073045956549_n.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <a href=""><h5 style="margin-bottom: 0px; font-size:16px">Angular 5, Vue JS, React JS</h5></a>
                                    <div class="info-news">
                                        <span><i class="fa fa-calendar"></i>&nbsp;20/1/2018</span>
                                        <span><i class="fa fa-tag"></i> Category</span>
                                    </div>
                                    <div class="info-news">
                                        <span><i class="fa fa-eye"></i> 30</span>
                                        <span><i class="fa fa-comment"></i> 3</span>
                                    </div>
                                </div>
                            </div>                                           
                        </div>
                    </div>
                    <div ng-show="current_tab == 3">
                        <ul class="list-group">                               
                          <li class="list-group-item">HTML <span class="badge badge-default ml-auto">20</span></li>
                          <li class="list-group-item">Javascript <span class="badge badge-default ml-auto">20</span></li>
                          <li class="list-group-item">CSS <span class="badge badge-default ml-auto">20</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="angular-trending">
        <div class="all-tab">
            <div class="tab-header">                   
                <ul class="tab-he tab-green">
                    <li class="active apptab"><a href=""ng-click="changeTab(1)"><i class="fa fa-bolt"></i> Web Application</a></li>
            
                </ul>
                <div class="tabs-content">
                <div>
                <div class="one-news-small">
                    <div class="row">
                        <div class="col-3 no-padding-right">
                            <img src="<?php echo base_url() ?>aoanhs2303.tk/upload/avt.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <a href=""><h5 style="margin-bottom: 0px; font-size:16px">Angular 5, Vue JS, React JS</h5></a>
                            <div class="info-news">
                                <span><i class="fa fa-calendar"></i>&nbsp;20/1/2018</span>
                            </div>
                            <div class="info-news">
                                <span><i class="fa fa-eye"></i> 30</span>
                                <span><i class="fa fa-comment"></i> 3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
                </div>
            </div>
        </div>
    </div>
</div>