<?php
/* Author: [Your Name]
Date: 22nd March 2025
Unit: IS312 Web Application Development
*/

$conn = mysqli_connect("localhost", "root", "", "FRU10");

// SQL to retrieve all student details [cite: 25]
$sql = "SELECT * FROM Student";
$result = mysqli_query($conn, $sql);

echo "<h2>Student Listing</h2>";
echo "<table border='1' cellpadding='10'>";
// Table Headers [cite: 27, 42]
echo "<tr>
        <th>StudentNo</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>ContactNo</th>
        <th>ProgramCode</th>
      </tr>";

// Loop through database records and display in tabular format [cite: 25, 27]
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["StudentNo"] . "</td>";
        echo "<td>" . $row["Firstname"] . "</td>";
        echo "<td>" . $row["Lastname"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "<td>" . $row["ContactNo"] . "</td>";
        echo "<td>" . $row["ProgramCode"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>0 results found</td></tr>";
}
echo "</table>";

mysqli_close($conn);
?>
<br><a href="index.php">Back to Home</a>