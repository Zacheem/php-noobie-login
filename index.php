<!DOCTYPE html>
<html lang="en">

<head>
    <title>Noobie login</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="AdhirSaurio" />
    <meta name="description" content="Easy peasy login for php beginners with PHP7, PDO, ajax and SPA" />

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
</head>

<?php
    session_start();
    // You can use require_once() if you want instead of a direct connection
    // require_once("dbcon.php");
    // even include("dbcon.php"); can be used

    $connect = new PDO("mysql:host=host;dbname=databaseName;charset=utf8", "User", "Password");

    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {

            if (empty($_POST["email"]) || empty($_POST["pass"])) {
                $message = '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><b>x</b></button><label>All fields are required</label></div>';
            } else {
                $statement = $connect->prepare("SELECT * FROM users WHERE email = ? AND pass = ?");
                $statement->execute([$_POST["email"], $_POST["pass"]]);
                $result = $statement->fetch(PDO::FETCH_ASSOC);

                if ($result) {
                    $_SESSION["email"] = $_POST["email"];
                    // header("location:success.php");
                    print "<meta http-equiv='refresh' content='0;url=success.php'>";
                    exit();                      
                } else {
                    $message = '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button><label>Email & password not registered</label></div>';
                }
            }
        }
    } catch (PDOException $error) {
        $message = $error->getMessage();
    }

?>

<body id="page-top" class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Noobie login</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <section class="page-section" id="contact">
        <div class="container">
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Log in</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <form method="post">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email Address</label>
                                <input class="form-control" name="email" type="text" placeholder="Email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Password</label>
                                <input class="form-control" name="pass" type="password" placeholder="Password" />
                            </div>
                        </div>
                        <br />
                        <?php
                        if (isset($message)) {
                            echo '<label class="text-danger">' . $message . '</label>';
                        }
                        ?>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-xl" type="submit" name="login">LOGIN</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
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