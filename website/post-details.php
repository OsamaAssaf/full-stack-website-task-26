<?php require_once('templates/header.php');

buildHeader('details');

?>


<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Post Details</h4>
                        <h2>Single blog post</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->

<?php

if (isset($_GET['blog_id'])):
    $blogByIdUrl = "http://localhost/practical_level_task_26/apis/blogs/get-blog-by-id.php?blog_id={$_GET['blog_id']}";
    $json_data = file_get_contents($blogByIdUrl);
    $response_data = json_decode($json_data);
    $blog = $response_data->blog;
    ?>

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="<?php echo $blog->image_link ?>" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span><?php echo $blog->title ?></span>
                                        <a><h4><?php echo $blog->subtitle ?></h4></a>
                                        <ul class="post-info">
                                            <li><a href=""><?php echo $blog->blogger_name ?></a></li>
                                            <li><a href=""><?php echo $blog->created_at ?></a></li>
                                            <li><a href=""><?php echo $blog->comments_count ?> Comments</a></li>
                                        </ul>
                                        <p><?php echo $blog->description ?></p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#">Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item comments">
                                    <div class="sidebar-heading">
                                        <h2><?php echo $blog->comments_count ?> comments</h2>
                                    </div>
                                    <div class="content">
                                        <?php


                                        $commentsByIdUrl = "http://localhost/practical_level_task_26/apis/blogs/get-comments-by-blog.php?blog_id={$_GET['blog_id']}";
                                        $json_data = file_get_contents($commentsByIdUrl);
                                        $response_data = json_decode($json_data);
                                        $comments_data = $response_data->comments;
                                        foreach ($comments_data as $comment):
                                            ?>
                                            <ul>
                                                <li>
                                                    <div class="right-content">
                                                        <h4><?php echo $comment->name?><span><?php echo $comment->created_at?></span></h4>
                                                        <p><?php echo $comment->comment?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php
                                        endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item submit-comment">
                                    <div class="sidebar-heading">
                                        <h2>Your comment</h2>
                                    </div>
                                    <div class="content">
                                        <form id="comment" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="name" type="text" id="name" placeholder="Your name"
                                                               required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="email" type="text" id="email"
                                                               placeholder="Your email"
                                                               required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <fieldset>
                                                        <input name="subject" type="text" id="subject"
                                                               placeholder="Subject">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                    <textarea name="comment" rows="6" id="comment"
                                                              placeholder="Type your comment" required=""></textarea>
                                                    </fieldset>
                                                </div>
                                                <input type="hidden" name="blog_id" value="<?php echo $blog->id ?>">
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" class="main-button" style="cursor: pointer">
                                                            Submit
                                                        </button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<script type="text/javascript" src="scripts/comment-submit.js"></script>





<?php require_once('templates/footer.php'); ?>
