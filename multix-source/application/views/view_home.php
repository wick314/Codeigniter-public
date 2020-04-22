<!--Portfolio Start-->
<?php if($page_home['home_portfolio_status'] == 'Show'): ?>
<div class="top-conent pt_250 pb_90">
    <div class="container">
<div class="row">
    <div class="col-sm-12 col-md-3">
            <div class="box-left">
                <div id="myCarousel" class="carousel slide border d-none d-md-block" data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img class="d-block w-100" src="https://i.postimg.cc/XvjTNMzm/xkh.jpg" alt="Leopard">
                  </div>
                  <div class="carousel-item">
                     <img class="d-block w-100" src="https://i.postimg.cc/L8Mc7gBH/bao-ruong-web.jpg" alt="Cat">
                  </div>
                  <div class="carousel-item">
                     <img class="d-block w-100" src="http://imagizer.imageshack.us/a/img923/2673/cAYMH7.jpg" alt="Lion">
                  </div>
               </div>
               <!-- Controls -->
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
            </div>
            </div>
    </div>
    <div class="col-sm-12 col-md-9">
        <div class="box-right">

            <ul class="nav nav-tabs ml_15" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="tab-tin-moi" data-toggle="tab"
                     href="#content-tin-moi"
                     role="tab" aria-controls="content-tin-moi" aria-selected="false">
                  <h4>Mới nhất</h4>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="tab-tin-tuc" data-toggle="tab"
                     href="#content-tin-tuc"
                     role="tab" aria-controls="content-tin-tuc" aria-selected="false">
                  <h4>Tin tức</h4>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="tab-su-kien" data-toggle="tab"
                     href="#content-su-kien"
                     role="tab" aria-controls="content-su-kien" aria-selected="true">
                  <h4>Sự kiện</h4>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="tab-huong-dan" data-toggle="tab"
                     href="#content-huong-dan"
                     role="tab" aria-controls="content-huong-dan" aria-selected="true">
                  <h4>Hướng dẫn</h4>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="tab-cong-dong" data-toggle="tab"
                     href="#content-cong-dong"
                     role="tab" aria-controls="content-cong-dong" aria-selected="true">
                  <h4>Cộng đồng</h4>
                  </a>
               </li>
            </ul>
             
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="content-tin-moi"
                  role="tabpanel" aria-labelledby="tab-tin-moi">
                    <div class="box-news ml_15">
                        <div class="box-hot-news">
                            <div class="row">

                            <div class="col-sm-4">
                                <?php if($view_fist_news): ?>
                                    <?php foreach ($view_fist_news as $v) : ?>
                                                    <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-img">
                                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $v->photo; ?>" alt="<?php echo $v->news_title; ?>">
                                                    </a>
                            </div>

                            <div class="col-sm-8">
                                            <div class="fist-content ml_15">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-content-text"> <?php echo $v->news_title; ?></a>
                                            <p>
                                               <?php echo $v->news_content_short; ?>
                                            </p>
                                            </div>
                            </div>
                                    <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-list-news p_10">
                            <div class="row">
                              <?php if($view_six_news): ?>
                                    <?php foreach ($view_six_news as $v) : ?>
                                <div class="col-12 col-lg-6 p_5">
                                 <div class="info-box">
                                    <div class="box-date"><span>20<hr>01</span></div>
                                        <div class="info-box-content">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn"><span class="info-box-text"><?php echo $v->news_title; ?></span></a>
                                            
                                        </div>
                                </div>
                                </div>
                                      <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade" id="content-tin-tuc"
                  role="tabpanel" aria-labelledby="tab-tin-tuc">
                    <div class="box-news ml_15">
                        <div class="box-hot-news">
                            <div class="row">

                            <div class="col-sm-4">
                                <?php if($view_fist_tt): ?>
                                    <?php foreach ($view_fist_tt as $v) : ?>
                                                    <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-img">
                                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $v->photo; ?>" alt="<?php echo $v->news_title; ?>">
                                                    </a>
                            </div>

                            <div class="col-sm-8">
                                            <div class="fist-content ml_15">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-content-text"> <?php echo $v->news_title; ?></a>
                                            <p>
                                               <?php echo $v->news_content_short; ?>
                                            </p>
                                            </div>
                            </div>
                                    <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-list-news p_10">
                            <div class="row">
                              <?php if($view_six_tt): ?>
                                    <?php foreach ($view_six_tt as $v) : ?>
                                <div class="col-12 col-lg-6 p_5">
                                 <div class="info-box">
                                    <div class="box-date"><span>20<hr>01</span></div>
                                        <div class="info-box-content">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn"><span class="info-box-text"><?php echo $v->news_title; ?></span></a>
                                            
                                        </div>
                                </div>
                                </div>
                                      <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade" id="content-su-kien"
                  role="tabpanel" aria-labelledby="tab-su-kien">
                    <div class="box-news ml_15">
                        <div class="box-hot-news">
                            <div class="row">

                            <div class="col-sm-4">
                                <?php if($view_fist_event): ?>
                                    <?php foreach ($view_fist_event as $v) : ?>
                                                    <a href="<?php echo base_url('event/view/'.$v->event_id); ?>" class="fist-img">
                                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $v->photo; ?>" alt="<?php echo $v->event_title; ?>">
                                                    </a>
                            </div>

                            <div class="col-sm-8">
                                            <div class="fist-content ml_15">
                                            <a href="<?php echo base_url('event/view/'.$v->event_id); ?>" class="fist-content-text"> <?php echo $v->event_title; ?></a>
                                            <p>
                                               <?php echo $v->event_content_short; ?>
                                            </p>
                                            </div>
                            </div>
                                    <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-list-news p_10">
                            <div class="row">
                              <?php if($view_six_event): ?>
                                    <?php foreach ($view_six_event as $v) : ?>
                                <div class="col-12 col-lg-6 p_5">
                                 <div class="info-box">
                                    <div class="box-date"><span>20<hr>01</span></div>
                                        <div class="info-box-content">
                                            <a href="<?php echo base_url('event/view/'.$v->event_id); ?>"><span class="info-box-text"><?php echo $v->event_title; ?></span></a>
                                            
                                        </div>
                                </div>
                                </div>
                                      <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade" id="content-huong-dan"
                  role="tabpanel" aria-labelledby="tab-huong-dan">
                    <div class="box-news ml_15">
                        <div class="box-hot-news">
                            <div class="row">

                            <div class="col-sm-4">
                                <?php if($view_fist_tut): ?>
                                    <?php foreach ($view_fist_tut as $v) : ?>
                                                    <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-img">
                                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $v->photo; ?>" alt="<?php echo $v->news_title; ?>">
                                                    </a>
                            </div>

                            <div class="col-sm-8">
                                            <div class="fist-content ml_15">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-content-text"> <?php echo $v->news_title; ?></a>
                                            <p>
                                               <?php echo $v->news_content_short; ?>
                                            </p>
                                            </div>
                            </div>
                                    <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-list-news p_10">
                            <div class="row">
                              <?php if($view_six_tut): ?>
                                    <?php foreach ($view_six_tut as $v) : ?>
                                <div class="col-12 col-lg-6 p_5">
                                 <div class="info-box">
                                    <div class="box-date"><span>20<hr>01</span></div>
                                        <div class="info-box-content">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn"><span class="info-box-text"><?php echo $v->news_title; ?></span></a>
                                            
                                        </div>
                                </div>
                                </div>
                                      <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade" id="content-cong-dong"
                  role="tabpanel" aria-labelledby="tab-cong-dong">
                    <div class="box-news ml_15">
                        <div class="box-hot-news">
                            <div class="row">

                            <div class="col-sm-4">
                                <?php if($view_fist_cd): ?>
                                    <?php foreach ($view_fist_cd as $v) : ?>
                                                    <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-img">
                                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $v->photo; ?>" alt="<?php echo $v->news_title; ?>">
                                                    </a>
                            </div>

                            <div class="col-sm-8">
                                            <div class="fist-content ml_15">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn" class="fist-content-text"> <?php echo $v->news_title; ?></a>
                                            <p>
                                               <?php echo $v->news_content_short; ?>
                                            </p>
                                            </div>
                            </div>
                                    <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="box-list-news p_10">
                            <div class="row">
                              <?php if($view_six_cd): ?>
                                    <?php foreach ($view_six_cd as $v) : ?>
                                <div class="col-12 col-lg-6 p_5">
                                 <div class="info-box">
                                    <div class="box-date"><span>20<hr>01</span></div>
                                        <div class="info-box-content">
                                            <a href="<?php echo base_url('view/'.$v->news_slug.'-'.$v->news_id); ?>.chn"><span class="info-box-text"><?php echo $v->news_title; ?></span></a>
                                            
                                        </div>
                                </div>
                                </div>
                                      <?php endforeach; ?>
                               <?php else :  ?>
                                    <a href="#" title="Chưa có tin tức nào">Chưa có tin tức nào</a>
                                <?php endif; ?>


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
<div class="portfolio-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_portfolio_title']; ?></h2>
                    <h3><?php echo $page_home['home_portfolio_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="portfolio-menu">
                    <ul id="filtrnav">
                        <li class="filtr filtr-active" data-filter="all">All</li>
                        <?php
                        foreach ($portfolio_category as $row) {
                            ?>
                            <li class="filtr" data-filter="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row filtr-container">            
            <?php
            foreach ($portfolio as $row) {
                ?>
                <div class="col-lg-4 col-md-6 filtr-item" data-category="<?php echo $row['category_id']; ?>" data-sort="Menu">
                    <div class="portfolio-group">
                        <div class="portfolio-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
                            <div class="portfolio-bg"></div>
                            <div class="portfolio-table">
                                <div class="portfolio-icon">
                                    <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" class="magnific"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3><a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php endif; ?>
<!--Portfolio End-->








<!--Blog-Area Start-->
<?php if($page_home['home_blog_status'] == 'Show'): ?>
<div class="blog-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_blog_title']; ?></h2>
                    <h3><?php echo $page_home['home_blog_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-carousel owl-carousel">                    
                    <?php
                    $i=0;
                    foreach ($all_news_category as $news) {
                        $i++;
                        if($i > $page_home['home_blog_item']) {
                            break;
                        }
                        $dt = explode('-',$news['news_date']);
                        if($dt[1] == '01') {$month = 'Jan';}
                        if($dt[1] == '02') {$month = 'Feb';}
                        if($dt[1] == '03') {$month = 'Mar';}
                        if($dt[1] == '04') {$month = 'Apr';}
                        if($dt[1] == '05') {$month = 'May';}
                        if($dt[1] == '06') {$month = 'Jun';}
                        if($dt[1] == '07') {$month = 'Jul';}
                        if($dt[1] == '08') {$month = 'Aug';}
                        if($dt[1] == '09') {$month = 'Sep';}
                        if($dt[1] == '10') {$month = 'Oct';}
                        if($dt[1] == '11') {$month = 'Nov';}
                        if($dt[1] == '12') {$month = 'Dec';}
                        $year = $dt[0];
                        $day = $dt[2];
                        ?>
                        <div class="blog-item effect-item">
                            <a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>" class="image-effect">
                                <div class="blog-image" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>)"></div>
                            </a>
                            <div class="blog-text">
                                <h3><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><?php echo $news['news_title']; ?></a></h3>
                                <span><i class="fa fa-calendar-o"></i><?php echo $month.' '.$day.', '.$year; ?></span>
                                <p>
                                    <?php echo $news['news_content_short']; ?>
                                </p>
                            </div>
                            <div class="blog-author">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>category/<?php echo $news['category_id']; ?>"><i class="fa fa-pencil-square-o"></i><?php echo $news['category_name']; ?></a></li>
                                    <li class="blog-button"><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--Blog-Area End-->

<!--Brand-Area Start-->
<div class="container">
<div class="brand-area bg-area pt_90 pb_90">

        <div class="row">
            <div class="col-12">
                <div class="brand-carousel owl-carousel pl_15 pr_15">
                    <?php
                    foreach($clients as $row) {
                        ?>
                        <?php if($row['url']!=''): ?>
                            <div class="brand-item"><a href="<?php echo $row['url']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></a></div>
                        <?php else: ?>
                            <div class="brand-item"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <?php endif; ?>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand-Area End