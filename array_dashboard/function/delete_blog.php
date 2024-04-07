<?php

include 'connection.php';

$id = isset($_GET["id"]) && is_numeric($_GET['id']) ? intval($_GET['id']) : exit();

$stmt = $coon->prepare("DELETE * FROM blog WHERE id = ?");
$stmt->execute([$id]);


header("Location:../blog.php");
exit();

?>