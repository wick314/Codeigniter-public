<!--Banner Start-->
<div class="container">
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_news']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_news['news_heading']; ?></h1>
        </div>
    </div>
</div>
</div>
<!--Banner End-->

<!--Blog-One Start-->
<div class="blog-one-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <!--Sidebar Start-->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-item">
                        <?php echo form_open(base_url().'search'); ?>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="<?php echo SEARCH_FOR; ?>" name="search_string" autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="form1"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="sidebar-item">
                        <h3><?php echo $setting['sidebar_news_heading_category']; ?></h3>
                        <ul>
                            <?php
                            foreach($all_categories as $row) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>category/<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <h3><?php echo $setting['sidebar_news_heading_recent_post']; ?></h3>
                        <?php
                        $i=0;
                        foreach($news as $row) {
                            $i++;
                            if($i>$setting['sidebar_total_recent_post']) {
                                break;
                            }
                            ?>
                            <div class="sidebar-recent-item">
                                <div class="recent-photo">
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><img src="<?php echo base_url().'public/uploads/'.$row['photo']; ?>" alt="Blog Photo"></a>
                                </div>
                                <div class="recent-text">
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>/<?php echo $row['news_slug']; ?>"><?php echo $row['news_title']; ?></a>
                                    <div class="rpwwt-post-date">
                                <?php echo $row['news_date']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!--Sidebar End-->
            <div class="col-lg-8">               

                <?php
                foreach($news_fetched as $row) {
                    ?>
                    <ul class="news-list">
                        <li>
                            <a href="#" title="#" class="news-link"> <span class="news-category">Category</span>title <span class="news-date">20-05</span></a>
                        </li>
                    </ul>
                    <div class="blog-one-item">
                        <div class="blog-one-photo">
                            <a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>/<?php echo $row->news_slug; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>" alt="Blog Photo"></a>
                        </div>
                        <div class="blog-one-text">
                            <ul>
                                <li><i class="fa fa-edit"></i><a href="<?php echo base_url(); ?>category/<?php echo $row->category_id; ?>"><?php echo $row->category_name; ?></a></li>
                                <li><i class="fa fa-calendar-o"></i>
                                    <?php echo $row->news_date; ?>
                                </li>
                            </ul>
                            <h3><a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>/<?php echo $row->news_slug; ?>"><?php echo $row->news_title; ?></a></h3>
                            <p>
                                <?php echo $row->news_content_short; ?>
                            </p>
                            <div class="button-df">
                                <a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="row">
                    <div class="col-md-12" style="margin-top:30px;text-align: center;">
                        <?php echo $links; ?>
                    </div>
                </div>
                
            </div>


        </div>
    </div>
</div>
<!--Blog-One End