<?php require_once('templates/head.php'); ?>
<div class="wrapper">
    <?php require_once('templates/navbar.php');
    buildNavbar('footer'); ?>


    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg  bg-red">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-light">footer</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="footer.php">footer</a></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->
            <?php
            const SOCIAL_URL = "http://localhost/practical_level_task_26/apis/social-media/get-social-media-links.php";
            $json_data = file_get_contents(SOCIAL_URL);
            $response_data = json_decode($json_data);
            $links = $response_data->social_links;
            ?>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Social Media</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="social-links-form">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="facebook_link">Facebook:</label>
                                            <input type="text" class="form-control" id="facebook_link"
                                                   name="facebook_link" value="<?php echo $links->facebook ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="instagram_link">Instagram:</label>
                                            <input type="text" class="form-control" id="instagram_link"
                                                   name="instagram_link" value="<?php echo $links->instagram ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="twitter_link">Twitter:</label>
                                            <input type="text" class="form-control" id="twitter_link"
                                                   name="twitter_link" value="<?php echo $links->twitter ?>">
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-success btn-anim"><i
                                                    class="icon-rocket"></i><span class="btn-text">submit</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <?php require_once('templates/footer.php'); ?>
    </div>
    <!-- /Main Content -->

</div>


<script type="text/javascript" src="scripts/social-links.js"></script>
<?php require_once('templates/foot.php'); ?>
