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

// Retrieve feedback data from the database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Viewer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p>Internet Programming 2 <br> <u>Assignment 2</u> </p>
    <h1>Feedback Viewer</h1>
    <table>
        <tr>
            <th width = "auto">ID</th>
            <th width = "auto">Name</th>
            <th width = "auto">Email</th>
            <th width = "10%">Feedback</th>
            <th width = "auto">Rating</th>
            <th>Submission Date</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["feedback"] . "</td>";
                echo "<td>" . $row["rating"] . "</td>";
                echo "<td>" . $row["submission_date"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No feedback data available.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>