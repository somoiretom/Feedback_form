<?php
//  *******************************
//  * Internet Programming 2      *
//  * Assignment 2                *
//  * Feedback Form               *
//  * By: Somoire Tom             *
//  * Reg. No: BCS-03-0012/2023   *
//  *******************************

// Connect to the database
$servername = "localhost";
$username = "somoire";
$password = "lWgq(1jwEhv[nn9.";
$database = "campaign_feedback";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

// Prepare and execute the SQL query
$sql = "INSERT INTO feedback (name, email, feedback, rating, submission_date)
        VALUES ('$name', '$email', '$feedback', '$rating', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>