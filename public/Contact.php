<?php
    @include 'config.php';

    if(isset($_POST['submit'])){

    $f_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $f_email = mysqli_real_escape_string($conn, $_POST['email']);
    $f_subject = mysqli_real_escape_string($conn, $_POST['subjects']);
    $f_message = mysqli_real_escape_string($conn, $_POST['messages']);

    $sql = "INSERT INTO user_contact_form" . "(full_name, email_form, subjects, messages) VALUES" . "('$f_name', '$f_email', '$f_subject', '$f_message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
    } else {
    die('Invalid query: ' . mysqli_error($conn));}

    mysqli_close($conn);
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <title>Emily T'A|Contact Us</title>
        <link rel="icon" type="image/x-icon" href="assets/image/Emily Travel Agency.png">
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
        <!-- NAVBAR -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark p-md-3 ">
            <div class="container">
                <a class="navbar-brand navfont" href="#">Emily T ' A</a>
                    <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-white fs-7" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white fs-7" href="/destinations">Destinations</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white fs-7" href="Contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Join Us
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="login_form.php">Log in</a></li>
                            <li><a class="dropdown-item" href="/Jobs">Career</a></li>
                            <li><a class="dropdown-item" href="login_form.php">Admin</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- CONTACT -->
        <section class="sec2" id="contact">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="text-dark">CONTACT US</h6>
                        <h1>Let me know</h1>
                        <p>Have more questions? We’ll find you the answers. Whether you’re ready to book a trip now or simply want to 
                            learn more about what Emily Travel has to offer, our consultants are available to help.</p>
                    </div>
                </div>
                <form action="" method="post" class="row g-3 justify-content-center">
                    <?php
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                    ?>
                    <div class="col-md-5">
                        <input type="full_name" name="full_name" class="form-control" required placeholder="Full Name">
                    </div>
                    <div class="col-md-5">
                        <input type="email" name="email" class="form-control" required placeholder="Enter E-mail">
                    </div>
                    <div class="col-md-10">
                        <input type="subject" name="subjects" class="form-control" required placeholder="Enter Subject">
                    </div>
                    <div class="col-md-10">
                        <textarea type="Message" name="messages" id="" cols="30" rows="5" class="form-control"
                            required placeholder="Enter Message"></textarea>
                    </div>
                    <div class="col-md-10 d-grid">
                        <button type="submit" name="submit" value="submit" class="btn btn-secondary">Contact</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- FOOTER -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <img class="logo" src="assets/image/Emily Travel Agencybx.png" alt="">
                        </div>
                        <div class="col-lg-2 padas">
                            <h5 class="text-white">Emily Parts</h5>
                            <ul class="list-unstyled">
                                <li><a href="index.html">About</a></li>
                                <li><a href="destinations.html">Destinations</a></li>
                                <li><a href="index.html">Packages</a></li>
                                <li><a href="Jobs.html">Career</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 padas">
                            <h5 class="text-white">More</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Warranty</a></li>
                                <li><a href="#">Group Membership</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 padas">
                            <h5 class="text-white">Contact Us</h5>
                            <ul class="list-unstyled">
                                <li>Address: 9899 Boston, North Ave, Suite 330</li>
                                <li>Email: emilyta@mail.com</li>
                                <li>Phone: 1.866.683.09990</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3">
                <div class="container">
                    <div class="row">
                            <p class="mb-0 midtext">© 2022 copyright all right reserved by Destira</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JSSCROLL -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
            } else {
            nav.classList.remove('bg-dark', 'shadow');
            }
        });
        </script>
    </body>
</html>