<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>School Management System</title>
    <link rel="stylesheet" href="school.css"> <!-- Link to your external CSS file -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8fafa;
        }

        .navbar {
            background-color: #B8860B !important;
        }


        .navbar-brand {
            color: #cad6d4 !important;
        }

        .navbar-nav .nav-link {
            color: #e2ece7 !important;

        }

        .fa-instagram {
            color: hotpink;
        }

        .fa-pinterest {
            color: red;
        }

        .fa-youtube {
            color: red;
        }

        .fa-facebook-f {
            color: #1877f2;
        }

        .fa-twitter {
            color: #1da1f2;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">School Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="school.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin.php"> Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Teacher.php">Teacher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="teach.jpg" class="d-block w-100" alt="Image 1" height="500px" width="200px">
            </div>
            <div class="carousel-item">
                <img src="sch.jpeg" class="d-block w-100" alt="Image 2" height="500px">
            </div>
            <div class="carousel-item">
                <img src="teach.jpg" class="d-block w-100" alt="Image 3" height="500px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="Facility-us" id="Facility">
        <div class="text-center">
            <h1 class="m-5"><span class="letter">F</span>acility <span class="letter"></span></h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 grid-item">
                    <img src="classroom.jpg" alt="Image 1">
                    <h4>Classroom </h4>

                </div>
                <div class="col-md-4 grid-item">
                    <img src="libary.jpg" alt="Image 2">
                    <h4>Library </h4>
                    <p> </p>
                </div>
                <div class="col-md-4 grid-item">
                    <img src="dance_new.jpg" alt="Image 3">
                    <h4> Dance</h4>
                    <p> </p>
                </div>
                <div class="col-md-4 grid-item">
                    <img src="art classroom.jpg" alt="Image 1">
                    <h4>Art Classroom </h4>
                    <p> </p>
                </div>
                <div class="col-md-4 grid-item">
                    <img src="playground.jpg" alt="Image 2">
                    <h4>Playground </h4>
                    <p> </p>
                </div>
                <div class="col-md-4 grid-item">
                    <img src="muscian.jpg" alt="Image 3">
                    <h4>Muscian </h4>
                    <p> </p>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us" id="about-us">
        <div class="text-center">
            <h1 class="m-5"><span class="letter">A</span>bout <span class="letter">U</span>s</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="text">
                        <p style="text-align: justify;">Our school's mission is to learn leadership,
                            the common core, and relationships for life. Our mission is to
                            provide a safe, disciplined learning environment that empowers
                            all students to develop their full potential. We feel strongly about
                            helping to build leaders that have the ability to succeed in whatever
                            endeavor they undertake. Winning is not always the measure of success.
                            Our students understand the "Win, win" philosophy and use it in their daily life.
                            Common standards keeps us focused on learning appropriate content and preparing our
                            students to graduate. Last but just as importantly, setting examples for our
                            students of meaningful and lasting relationships will go with them throughout their lifetime.
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="image">
                        <img src="abountus.jpg" alt="About Us Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Include database connection file
        include 'conn.php';

        // Retrieve form data
        $fullName = $_POST['fullName'];
        $mobileNumber = $_POST['mobileNumber'];
        $message = $_POST['message'];

        // SQL query to insert data into the database
        $sql = "INSERT INTO contactus (fullName, mobileNumber, message) VALUES ('$fullName', '$mobileNumber', '$message')";

        // Execute query
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert"></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
        }

        // Close connection
        $conn->close();
    }
    ?>


    <section class="contact-us" id="contact-us">
        <div class="text-center">
            <h1 class="m-5"><span class="letter">C</span>ontact <span class="letter">U</span>s</h1>
        </div>

        <form id="contactForm" name="contactForm" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobileNumber">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Enter your mobile number" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </div>
                </div>
            </div>
        </form>
       

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <span class="text-muted">© 2024 School Management System. All rights reserved.</span>
            </div>

        </footer>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</html>