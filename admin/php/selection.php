<?php
$option = $_GET['mo'];
$imgPath = $_GET['img'];

if ($option === "Add to Event"){
header('Location: ../boxoffice.php?img='.$imgPath);
die;
}
if ($option === "Delete"){
header('Location: delete.php?img='.$imgPath);
die;
}
header('Location: ../upload.php');
?>
