<?php
    session_start();
    $mail = $_SESSION["email"];

    if(!isset($_SESSION["email"]))
    { 
        print "<meta http-equiv='refresh' content='0;url=index.php'>";
        exit;
    } 
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Noobie login success</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="AdhirSaurio" />
        <meta name="description" content="Easy peasy login for php beginners with PHP7, PDO, ajax and SPA" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head> 

    <body id="page-top" class="d-flex flex-column min-vh-100">

        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Noobie login Success</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary btn-lg" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <section class="page-section">
            <div class="container text-center">
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Success</h2>
                <p class="lead mb-0"> Welcome <?php echo  $mail; ?></p>
                
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center mt-auto">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <h4 class="text-uppercase mb-4">About</h4>
                        <p class="lead mb-0">Easy-peasy login for php beginners <a href="http://localhost/gitRepos/php-noobie-login/success.php"><i class="fab fa-github-alt"></i></a></p>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>