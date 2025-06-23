<?php
include 'db.php';

$result = $conn->query("SELECT * FROM videos ORDER BY id DESC");
$videos = [];

while ($row = $result->fetch_assoc()) {
  $videos[] = $row;
}

echo json_encode($videos);
?>
