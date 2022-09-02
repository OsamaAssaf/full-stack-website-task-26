<?php require_once('templates/header.php');

buildHeader('home');


?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel" id="slider-blogs">
                <?php
                const SLIDER_BLOGS_URL = "http://localhost/practical_level_task_26/apis/blogs/get-blogs.php";
                $json_data = file_get_contents(SLIDER_BLOGS_URL);
                $response_data = json_decode($json_data);
                $blogs_data = $response_data->blogs;
                foreach ($blogs_data as $blog): ?>
                    <div class="item">
                        <img src="<?php echo $blog->image_link ?>" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span><?php echo $blog->title ?></span>
                                </div>
                                <a href="post-details.php?blog_id=<?php echo $blog->id ?>">
                                    <h4><?php echo $blog->subtitle ?></h4></a>
                                <ul class="post-info">
                                    <li>
                                        <a href="post-details.php?blog_id=<?php echo $blog->id ?>"><?php echo $blog->blogger_name ?></a>
                                    </li>
                                    <li>
                                        <a href="post-details.php?blog_id=<?php echo $blog->id ?>"><?php echo $blog->created_at ?></a>
                                    </li>
                                    <li>
                                        <a href="post-details.php?blog_id=<?php echo $blog->id ?>"><?php echo $blog->comments_count ?>
                                            Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="all-blog-posts">
                        <div class="row">
                            <?php
                            $limit = 3;
                            if(sizeof($blogs_data) < 3){
                                $limit = sizeof($blogs_data);
                            }
                            for ($i = 0; $i < $limit; $i++) {
                                ?>
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="<?php echo $blogs_data[$i]->image_link ?>" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span><?php echo $blogs_data[$i]->title ?></span>
                                            <a href="post-details.php?blog_id=<?php echo $blogs_data[$i]->id ?>">
                                                <h4><?php echo $blogs_data[$i]->subtitle ?></h4></a>
                                            <ul class="post-info">
                                                <li>
                                                    <a href="post-details.php?blog_id=<?php echo $blogs_data[$i]->id ?>"><?php echo $blogs_data[$i]->blogger_name ?></a>
                                                </li>
                                                <li>
                                                    <a href="post-details.php?blog_id=<?php echo $blogs_data[$i]->id ?>"><?php echo $blogs_data[$i]->created_at ?></a>
                                                </li>
                                                <li>
                                                    <a href="post-details.php?blog_id=<?php echo $blogs_data[$i]->id ?>"><?php echo $blogs_data[$i]->comments_count ?>
                                                        Comments</a></li>
                                            </ul>
                                            <p><?php echo $blogs_data[$i]->description ?></p>
                                            <div class="post-options">
                                                <div class="row">

                                                    <div class="col-12">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt"></i></li>
                                                            <li><a href="https://www.facebook.com/ClevermindICT/"
                                                                   target="_blank">Facebook</a>,
                                                            </li>
                                                            <li><a href="https://www.instagram.com/clevermindpob/"
                                                                   target="_blank"> Instagram</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once('templates/footer.php'); ?>