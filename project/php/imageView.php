<?php
include "../../inc/dbinfo.inc";

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "SELECT ImageData, ImageName FROM Images";
$result = mysqli_query($connection, $query);

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<title>View Images</title>";
echo "</head>";
echo "<body>";

echo "<h1>View Images</h1>";

while ($row = mysqli_fetch_assoc($result)) {
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['ImageData']) . '" alt="' . $row['ImageName'] . '">';
    echo '<p>Image Name: ' . $row['ImageName'] . '</p>';
    echo '<br>';
}

echo "</body>";
echo "</html>";

mysqli_close($connection);
?>

