<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include 'connection.php';

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO admin1 VALUES ('', '$email', '$password')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo '<div id="successMsg" class="alert alert-success" role="alert">New record created successfully</div>';
    } else {
        echo '<div id="errorMsg" class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    // Close connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Admin Login
                </div>
                <div class="card-body">
                    <form id="loginForm" method="post" action="Teacher dashboard.php">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username">
                            <small id="usernameError" class="text-danger d-none">Wrong username!</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        var username = document.getElementById("teju123").value;
        var password = document.getElementById("87654321").value;
        
        // Check if the username is correct
        if (username !== "teju123") {
            event.preventDefault(); // Prevent form submission
            document.getElementById("usernameError").classList.remove("d-none"); // Show error message
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
