<?php require_once('templates/head.php'); ?>


<?php
$isEdit = false;
if(isset($_GET['blog_id'])){
    if($_GET['blog_id'] !== ''){
        $isEdit = true;
    }
}

?>

<div class="wrapper">
    <?php require_once('templates/navbar.php');
    buildNavbar('blogs'); ?>

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg  bg-red">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-light"> <?php echo $isEdit ?'edit blog' : 'add new blog'?></h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="">blogs</a></li>
                        <li><a href=""><span><?php echo $isEdit ?'edit' : 'add new'?></span></a></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark"><?php echo $isEdit ?'edit blog' : 'new blog'?></h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php if ($isEdit): ?>
                        <?php $blogsByIdUrl = "http://localhost/practical_level_task_26/apis/blogs/get-blog-by-id.php?blog_id=" . $_GET['blog_id'];
                            $json_data = file_get_contents($blogsByIdUrl);
                            $response_data = json_decode($json_data);
                            $blog = $response_data->blog;
                            ?>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="form-wrap">
                                        <form id="edit-blog-form">
                                            <div class="row">
                                                <input type="hidden"  id="blog_id"
                                                       value="<?php echo $blog->id ?>">
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label mb-10" for="blog_title">Title:</label>
                                                    <input type="text" class="form-control" id="blog_title"
                                                           name="blog_title" value="<?php echo $blog->title ?>">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label mb-10" for="blog_subtitle">Subtitle:</label>
                                                    <input type="text" class="form-control" id="blog_subtitle"
                                                           name="blog_subtitle" value="<?php echo $blog->subtitle ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-9">
                                                    <label class="control-label mb-10" for="blog_image">Image Link:</label>
                                                    <input type="text" class="form-control" id="blog_image"
                                                           name="blog_image" value="<?php echo $blog->image_link ?>">
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label class="control-label mb-10" for="blog_blogger_name">Blogger
                                                        Name:</label>
                                                    <input type="text" class="form-control" id="blog_blogger_name"
                                                           name="blog_blogger_name" value="<?php echo $blog->blogger_name ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <label class="control-label mb-10"
                                                           for="blog_description">Description:</label>
                                                    <textarea class="form-control" id="blog_description"
                                                              style="max-width: 100%;min-width: 50%;max-height: 320px;min-height: 120px;">
                                                        <?php echo $blog->description ?>
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
                        <?php else: ?>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="form-wrap">
                                        <form id="add-blog-form">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label mb-10" for="blog_title">Title:</label>
                                                    <input type="text" class="form-control" id="blog_title"
                                                           name="blog_title">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label mb-10" for="blog_subtitle">Subtitle:</label>
                                                    <input type="text" class="form-control" id="blog_subtitle"
                                                           name="blog_subtitle">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-9">
                                                    <label class="control-label mb-10" for="blog_image">Image Link:</label>
                                                    <input type="text" class="form-control" id="blog_image"
                                                           name="blog_image">
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label class="control-label mb-10" for="blog_blogger_name">Blogger
                                                        Name:</label>
                                                    <input type="text" class="form-control" id="blog_blogger_name"
                                                           name="blog_blogger_name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <label class="control-label mb-10"
                                                           for="blog_description">Description:</label>
                                                    <textarea class="form-control" id="blog_description"
                                                              style="max-width: 100%;min-width: 50%;max-height: 320px;min-height: 120px;">
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
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>

        <?php require_once('templates/footer.php'); ?>
    </div>
    <!-- /Main Content -->

</div>

<?php if ($isEdit): ?>
    <script type="text/javascript" src="scripts/edit-blog.js"></script>
<?php else: ?>
    <script type="text/javascript" src="scripts/add-blog.js"></script>
<?php endif; ?>
<?php require_once('templates/foot.php'); ?>
