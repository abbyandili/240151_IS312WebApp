<?php
/* Author: ABIGAIL ANDILI
Date: 22nd March 2025
Unit: IS312 Web Application Development
*/

// 1. Database Connection details [cite: 20]
$conn = mysqli_connect("localhost", "root", "", "FRU10");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. Retrieve form details and store in variables [cite: 23]
$pCode = $_POST['programCode'];
$pName = $_POST['programName'];

// 3. SQL Insert Query [cite: 23, 42]
$sql = "INSERT INTO Program (ProgramCode, ProgramName) VALUES ('$pCode', '$pName')";

// 4. Display success or error message [cite: 24]
if (mysqli_query($conn, $sql)) {
    echo "New program record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br><a href="index.php">Back to Home</a>