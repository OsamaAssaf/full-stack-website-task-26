<?php require_once('templates/head.php'); ?>
<div class="wrapper">
    <?php require_once('templates/navbar.php');
    buildNavbar('header'); ?>


    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg  bg-red">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-light">header</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="header.php">header</a></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->
            <?php
            const WEBSITE_TITLE_URL = "http://localhost/practical_level_task_26/apis/header/get-header.php";
            $json_data = file_get_contents(WEBSITE_TITLE_URL);
            $response_data = json_decode($json_data);
            $title = $response_data->title;
            ?>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Website Title</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="website-title-form">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="website_title">Title:</label>
                                            <input type="text" class="form-control" id="website_title"
                                                   name="website_title" value="<?php echo $title ?>">
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


<script type="text/javascript" src="scripts/website-title.js"></script>
<?php require_once('templates/foot.php'); ?>
