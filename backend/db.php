<?php
$conn = new mysqli("localhost", "root", "", "myyoutube");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
