<?php
include 'db.php';

$title = $_POST['title'];
$videoName = time() . "_" . $_FILES['video']['name'];
$thumbName = time() . "_" . $_FILES['thumbnail']['name'];

move_uploaded_file($_FILES['video']['tmp_name'], "../uploads/videos/" . $videoName);
move_uploaded_file($_FILES['thumbnail']['tmp_name'], "../uploads/thumbnails/" . $thumbName);

$stmt = $conn->prepare("INSERT INTO videos (title, filename, thumbnail) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $videoName, $thumbName);
$stmt->execute();

header("Location: ../index.html");
?>
