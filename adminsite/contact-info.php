<?php require_once('templates/head.php'); ?>
<div class="wrapper">
    <?php require_once('templates/navbar.php');
    buildNavbar('contact'); ?>


    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg  bg-red">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-light">contact</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="footer.php">contact</a></li>
                        <li><a href=""><span>contact info</span></a></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->
            <?php
            const CONTACT_URL = "http://localhost/practical_level_task_26/apis/contact/get-contact-data.php";
            $json_data = file_get_contents(CONTACT_URL);
            $response_data = json_decode($json_data);
            $contact = $response_data->contact;
            ?>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Contact Info</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form id="edit-contact-form">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="phone">Phone:</label>
                                            <input type="text" class="form-control" id="phone"
                                                   name="phone" value="<?php echo $contact->phone ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="email">Email:</label>
                                            <input type="text" class="form-control" id="email"
                                                   name="email" value="<?php echo $contact->email ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="address">Address:</label>
                                            <input type="text" class="form-control" id="address"
                                                   name="address" value="<?php echo $contact->address ?>">
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


<script type="text/javascript" src="scripts/edit-contact-info.js"></script>
<?php require_once('templates/foot.php'); ?>
