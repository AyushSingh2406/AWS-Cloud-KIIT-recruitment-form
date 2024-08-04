<?php
$servername = "localhost";
$username = "root";  // Change this to your MySQL username
$password = "ayush@123";  // Change this to your MySQL password
$dbname = "aws_society";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $rollNo = $_POST['rollNo'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $skills = $_POST['skills'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $portfolio = $_POST['portfolio'];
    $dob = $_POST['dob'];
    $interests = $_POST['interests'];

    $sql = "INSERT INTO registrations (full_name, roll_number, email, contact_number, department, year_of_study, technical_skills, github_profile, linkedin_profile, portfolio_website, date_of_birth, interests)
            VALUES ('$fullName', '$rollNo', '$email', '$contact', '$department', '$year', '$skills', '$github', '$linkedin', '$portfolio', '$dob', '$interests')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
