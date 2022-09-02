<?php require_once('templates/head.php'); ?>
<div class="wrapper">
    <?php require_once('templates/navbar.php');
    buildNavbar('about'); ?>


    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg  bg-red">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-light">about</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="">about</a></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <?php
            const ABOUT_URL = "http://localhost/practical_level_task_26/apis/about/get-about-data.php";
            $json_data = file_get_contents(ABOUT_URL);
            $response_data = json_decode($json_data);
            $about = $response_data->about;
            ?>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Image</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="image-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="image_link">Image Link:</label>
                                                <input type="text" class="form-control" id="image_link"
                                                       name="image_link" value="<?php echo $about->image_link ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="image_description">Image
                                                    Description:</label>
                                                <textarea class="form-control" id="image_description"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
                                                        <?php echo $about->image_description ?>
                                                    </textarea>
                                            </div>
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
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 1</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-1-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_1">Title 1</label>
                                                <input type="text" class="form-control" id="title_1"
                                                       name="title_1" value="<?php echo $about->title_1 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_1">Description
                                                    1</label>
                                                <textarea class="form-control" id="description_1"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
                                                        <?php echo $about->description_1 ?>
                                                    </textarea>
                                            </div>
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
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 2</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-2-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_2">Title 2</label>
                                                <input type="text" class="form-control" id="title_2"
                                                       name="title_2" value="<?php echo $about->title_2 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_2">Description
                                                    2</label>
                                                <textarea class="form-control" id="description_2"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_2 ?>
                                                    </textarea>
                                            </div>
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
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 3</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-3-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_3">Title 3</label>
                                                <input type="text" class="form-control" id="title_3"
                                                       name="title_3" value="<?php echo $about->title_3 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_3">Description
                                                    3</label>
                                                <textarea class="form-control" id="description_3"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_3 ?>
                                                    </textarea>
                                            </div>
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
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 4</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-4-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_4">Title 4</label>
                                                <input type="text" class="form-control" id="title_4"
                                                       name="title_4" value="<?php echo $about->title_4 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_4">Description
                                                    4</label>
                                                <textarea class="form-control" id="description_4"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_4 ?>
                                                    </textarea>
                                            </div>
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
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 5</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-5-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_5">Title 5</label>
                                                <input type="text" class="form-control" id="title_5"
                                                       name="title_5" value="<?php echo $about->title_5 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_5">Description
                                                    5</label>
                                                <textarea class="form-control" id="description_5"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_5 ?>
                                                    </textarea>
                                            </div>
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
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 6</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-6-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_6">Title 6</label>
                                                <input type="text" class="form-control" id="title_6"
                                                       name="title_6" value="<?php echo $about->title_6 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_6">Description
                                                    6</label>
                                                <textarea class="form-control" id="description_6"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_6 ?>
                                                    </textarea>
                                            </div>
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
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 7</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-7-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_7">Title 7</label>
                                                <input type="text" class="form-control" id="title_7"
                                                       name="title_7" value="<?php echo $about->title_7 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_7">Description
                                                    7</label>
                                                <textarea class="form-control" id="description_7"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_7 ?>
                                                    </textarea>
                                            </div>
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
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 8</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-8-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_8">Title 8</label>
                                                <input type="text" class="form-control" id="title_8"
                                                       name="title_8" value="<?php echo $about->title_8 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_8">Description
                                                    8</label>
                                                <textarea class="form-control" id="description_8"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_8 ?>
                                                    </textarea>
                                            </div>
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
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Section 9</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="section-9-form">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="title_9">Title 9</label>
                                                <input type="text" class="form-control" id="title_9"
                                                       name="title_9" value="<?php echo $about->title_9 ?>">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="control-label mb-10" for="description_9">Description
                                                    9</label>
                                                <textarea class="form-control" id="description_9"
                                                          style="max-width: 100%;min-width: 100%;min-height: 80px;max-height: 240px">
<?php echo $about->description_9 ?>
                                                    </textarea>
                                            </div>
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


<script type="text/javascript" src="scripts/edit-about.js"></script>

<?php require_once('templates/foot.php'); ?>
