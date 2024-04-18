<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include 'connection.php';

    // Retrieve form data
    $fullName = $_POST['fullName'];
    $mobileNumber = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $division = $_POST['division'];
    $aadharCardNo = $_POST['aadharCardNo'];
    $dateOfAdmission = $_POST['dateOfAdmission'];

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO addstudent (fullName, mobileNumber, address, class, division, aadharCardNo, dateOfAdmission) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fullName, $mobileNumber, $address, $class, $division, $aadharCardNo, $dateOfAdmission);

    // Execute query
    if ($stmt->execute()) {
        echo '<div class="alert alert-success" role="alert">Student added successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: Unable to add student</div>';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin dashboard.php">Home</a>
                </li>
                <!-- Dropdown menu for Teacher -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTeacher" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Teacher
                    </a>  
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="application.php">Application</a>
                    </li>



                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTeacher">
                        <a class="dropdown-item" href="view teacher.php">View Teacher</a>
                        <a class="dropdown-item" href="add teacher.php">Add Teacher</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownStudent" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Student
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownStudent">
                        <a class="dropdown-item" href="view student.php">View Student</a>
                        <a class="dropdown-item" href="add student.php">Add Student</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Add Student</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="add student.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullName">Full Name:</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobileNumber">Mobile Number:</label>
                                        <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class">Class:</label>
                                        <input type="text" class="form-control" id="class" name="class" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="division">Division:</label>
                                        <input type="text" class="form-control" id="division" name="division" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="aadharCardNo">Aadhar Card Number:</label>
                                        <input type="text" class="form-control" id="aadharCardNo" name="aadharCardNo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dateOfAdmission">Date of Admission:</label>
                                        <input type="date" class="form-control" id="dateOfAdmission" name="dateOfAdmission" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Add Student</button>
                        </form>
                </div>
             
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // jQuery for showing toast message on form submission
    $(document).ready(function(){
        $('#addStudentForm').submit(function(e){
            e.preventDefault(); // Prevent form submission
            // Perform AJAX submission or form validation here if needed
            // For demonstration, let's just show the toast message
            $('.toast').toast('show');
        });
    });
</script>
</body>
</html>
