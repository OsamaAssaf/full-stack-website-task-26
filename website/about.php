<?php require_once('templates/header.php');

buildHeader('about');

?>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>more about us!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->


<section class="about-us">
    <div class="container">
        <?php
        const ABOUT_URL = "http://localhost/practical_level_task_26/apis/about/get-about-data.php";
        $json_data = file_get_contents(ABOUT_URL);
        $response_data = json_decode($json_data);
        $about_data = $response_data->about;
        ?>
        <div class="row">
            <div class="col-lg-12">
                <img src="<?php echo $about_data->image_link?>" alt="">
                <p><?php echo $about_data->image_description?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h4><?php echo $about_data->title_1?></h4>
                <p><?php echo $about_data->description_1?></p>
            </div>
            <div class="col-lg-6">
                <h4><?php echo $about_data->title_2?></h4>
                <p><?php echo $about_data->description_2?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h4><?php echo $about_data->title_3?></h4>
                <p><?php echo $about_data->description_3?></p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4><?php echo $about_data->title_4?></h4>
                <p><?php echo $about_data->description_4?></p>
            </div>
            <div class="col-lg-4">
                <h4><?php echo $about_data->title_5?></h4>
                <p><?php echo $about_data->description_5?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h4><?php echo $about_data->title_6?></h4>
                <p><?php echo $about_data->description_6?></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4><?php echo $about_data->title_7?></h4>
                <p><?php echo $about_data->description_7?></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4><?php echo $about_data->title_8?></h4>
                <p><?php echo $about_data->description_8?></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4><?php echo $about_data->title_9?></h4>
                <p><?php echo $about_data->description_9?></p>
            </div>
        </div>

        <?php
        const SOCIAL_URL = "http://localhost/practical_level_task_26/apis/social-media/get-social-media-links.php";
        $json_data = file_get_contents(SOCIAL_URL);
        $response_data = json_decode($json_data);
        $social_data = $response_data->social_links;
        ?>

        <div class="row">
            <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="<?php echo $social_data->facebook ;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $social_data->instagram ;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="<?php echo $social_data->twitter ;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</section>


<?php require_once('templates/footer.php'); ?>