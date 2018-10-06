<?php

$EventName = $_POST['evntName'];
$EventImg = $_POST['evntImg'];
$EventDate = $_POST['evntDate'];
$EventPrice = $_POST['evntCost'];
$EventDsc = $_POST['evntDsc'];

$EventDateConvertedArray = explode("/", $EventDate);
$EventDateConverted = ''.$EventDateConvertedArray['2'].'-'.$EventDateConvertedArray['1'].'-'.$EventDateConvertedArray['0'].'';
echo $EventDateConverted;

include_once '../../php/db_conn.inc.php';

$sql = "INSERT INTO boxoffice(Event_Name, Event_Cost, Event_Img, Event_Dsc, Event_Date) VALUES(?, ?, ?, ?, ?);";


$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $EventName, $EventPrice, $EventImg, $EventDsc, $EventDateConverted);
mysqli_stmt_execute($stmt);

header('Location: ../boxoffice.php');

?>
