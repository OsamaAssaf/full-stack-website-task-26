<?php function buildNavbar($title){ ?>


<!-- Top Menu Items -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>

    <a href="index.php"><img class="brand-img pull-left" src="dist/img/logo.png" alt="brand"/></a>

    <ul class="nav navbar-right top-nav pull-right">
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#site_navbar_search">
                <i class="fa fa-search top-nav-icon"></i>
            </a>
        </li>
    </ul>
    <div class="collapse navbar-search-overlap" id="site_navbar_search">
        <form role="search">
            <div class="form-group mb-0">
                <div class="input-search">
                    <div class="input-group">
                        <input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30" placeholder="Search">
                        <span class="input-group-addon pr-30">
									<a  href="javascript:void(0)" class="close-input-overlay" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
									</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</nav>
<!-- /Top Menu Items -->
<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li>
            <a  class="<?php echo $title === 'header' ? 'active' : ''?>" href="header.php"><i class="icon-picture mr-10"></i>Header</a>
        </li>
        <li>
            <a  class="<?php echo $title === 'footer' ? 'active' : ''?>" href="footer.php"><i class="icon-picture mr-10"></i>Footer</a>
        </li>
        <li>
            <a  class="<?php echo $title === 'blogs' ? 'active' : ''?>" href="javascript:void(0);" data-toggle="collapse" data-target="#blogs_dr"><i class="icon-grid mr-10"></i>Blogs <span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="blogs_dr" class="collapse collapse-level-1">
                <li>
                    <a href="add-blog.php">Add new</a>
                </li>
                <li>
                    <a href="view-all-blogs.php">View All</a>
                </li>
            </ul>
        </li>
        <li>
            <a  class="<?php echo $title === 'about' ? 'active' : ''?>" href="view-about.php"><i class="icon-grid mr-10"></i>About</a>
        </li>
        <li>
            <a class="<?php echo $title === 'contact' ? 'active' : ''?>" href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr"><i class=" icon-flag mr-10"></i>Contact<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="contact_dr" class="collapse collapse-level-1">
                <li>
                    <a href="contact-info.php">Contact Information</a>
                </li>
                <li>
                    <a href="feedback.php">Feedback</a>
                </li>

            </ul>
        </li>

    </ul>
</div>
<!-- /Left Sidebar Menu -->


<?php } ?>
