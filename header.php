<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>suubitech | Enterprises</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper" class="home-page">
    <header class="topbar">
            <div class="container">
                <div class="row">
                    <!-- social icon-->
                    <div class="col-sm-3">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="https://web.facebook.com/suubitech/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://twitter.com/SuubiTech" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="index.php"><i class="icon-info-blocks material-icons"></i><span style="text-transform: none;">suubi-</span>TECH</a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                        <?php if(isset($_GET['page'])): ?>
                            <?php switch ($_GET['page']) {
                                case 'home':
                                    ?>
                                        <li class="active"><a class="waves-effect waves-dark" href="index.php">Home</a></li>
                                        <li class=""><a class="waves-effect waves-dark" href="about.php?page=about">About Us</a></li>
                                        <li><a class="waves-effect waves-dark" href="services.php?page=services">Services</a></li>
                                        <li><a class="waves-effect waves-dark" href="contact.php?page=contact">Contact</a></li>
                                    <?php
                                    break;
                                
                                case 'about':
                                        ?>
                                            <li class=""><a class="waves-effect waves-dark" href="index.php">Home</a></li>
                                            <li class="active"><a class="waves-effect waves-dark" href="about.php?page=about">About Us</a></li>
                                            <li><a class="waves-effect waves-dark" href="services.php?page=services">Services</a></li>
                                            <li><a class="waves-effect waves-dark" href="contact.php?page=contact">Contact</a></li>
                                        <?php
                                    break;

                                case "services":
                                    ?>
                                        <li class=""><a class="waves-effect waves-dark" href="index.php">Home</a></li>
                                        <li class=""><a class="waves-effect waves-dark" href="about.php?page=about">About Us</a></li>
                                        <li class="active"><a class="waves-effect waves-dark" href="services.php?page=services">Services</a></li>
                                        <li><a class="waves-effect waves-dark" href="contact.php?page=contact">Contact</a></li>

                                    <?php
                                    break;
                                case "contact":
                                        ?>
                                        <li class=""><a class="waves-effect waves-dark" href="index.php">Home</a></li>
                                        <li class=""><a class="waves-effect waves-dark" href="about.php?page=about">About Us</a></li>
                                        <li class=""><a class="waves-effect waves-dark" href="services.php?page=services">Services</a></li>
                                        <li class="active"><a class="waves-effect waves-dark" href="contact.php?page=contact">Contact</a></li>
    
                                    <?php
                                    break;
    

                            }?>
                                    
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>