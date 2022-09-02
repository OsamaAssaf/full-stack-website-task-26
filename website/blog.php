<?php require_once('templates/header.php');

buildHeader('grid-blog');


?>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Recent Posts</h4>
                        <h2>Our Recent Blog Entries</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->




<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="all-blog-posts">
                    <div class="row">
                        <?php
                        const SLIDER_BLOGS_URL = "http://localhost/practical_level_task_26/apis/blogs/get-blogs.php";
                        $json_data = file_get_contents(SLIDER_BLOGS_URL);
                        $response_data = json_decode($json_data);
                        $blogs_data = $response_data->blogs;
                        foreach ($blogs_data as $blog):
                            ?>
                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="<?php echo $blog->image_link ?>" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span><?php echo $blog->title ?></span>
                                        <a href="post-details.php?blog_id=<?php echo $blog->id?>"><h4><?php echo $blog->subtitle ?></h4></a>
                                        <ul class="post-info">
                                            <li><a href="post-details.php?blog_id=<?php echo $blog->id?>"><?php echo $blog->blogger_name ?></a></li>
                                            <li><a href="post-details.php?blog_id=<?php echo $blog->id?>"><?php echo $blog->created_at ?></a></li>
                                            <li><a href="post-details.php?blog_id=<?php echo $blog->id?>"><?php echo $blog->comments_count ?> Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require_once('templates/footer.php'); ?>