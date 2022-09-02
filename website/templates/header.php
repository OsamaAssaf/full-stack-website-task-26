<?php function buildHeader($title)
{ ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="TemplateMo">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
              rel="stylesheet">

        <title>Blog</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
        <link rel="stylesheet" href="assets/css/owl.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
                integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!-- get website title starts -->
        <script type="text/javascript" src="scripts/get-website-title.js" defer></script>
        <!-- get website title ends -->


    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2 id="header-text">
                    </h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php echo $title === 'home'? 'active' :'' ;?>">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>

                            </a>
                        </li>
                        <li class="nav-item <?php echo $title === 'about'? 'active' :'' ;?>">
                            <a class="nav-link" href="about.php">About Us
                            </a>
                        </li>
                        <li class="nav-item <?php echo $title === 'grid-blog'? 'active' :'' ;?>">
                            <a class="nav-link" href="blog.php">Blog Entries
                            </a>
                        </li>

                        <li class="nav-item <?php echo $title === 'contact'? 'active' :'' ;?>">
                            <a class="nav-link" href="contact.php">Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


<?php } ?>