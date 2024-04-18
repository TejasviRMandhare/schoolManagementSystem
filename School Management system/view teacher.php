<?php include 'connection.php'; // Include database connection file again
$sql = "SELECT * FROM addteacher";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
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
                        <a class="nav-link" href=".php">Application</a>
                    </li>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTeacher">
                        <a class="dropdown-item" href="view teacher.php">View Teacher</a>
                        <a class="dropdown-item" href="add teacher.php">Add Teacher</a>
                    </div>
                </li>
            

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
        <h2 class="text-center mb-4">View Teacher</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>currentLocation</th>
                    <th>Salary</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["fullName"] . "</td>";
                        echo "<td>" . $row["mobileNumber"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["currentLocation"] . "</td>";
                        echo "<td>" . $row["salary"] . "</td>";
                        echo "<td>" . $row["qualification"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No techaer found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
