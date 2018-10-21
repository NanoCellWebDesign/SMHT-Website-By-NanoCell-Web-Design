<?php
$option = $_POST['mo'];
$event = $_POST['event'];
include_once '../../php/db_conn.inc.php';

if ($option === "Edit"){
  die;
}
if ($option === "Delete"){

  if($conn === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $sql = "DELETE FROM boxoffice WHERE Event_Id = '$event'";
  if(mysqli_query($conn, $sql)){
      echo "Record was deleted successfully.";
  }
  else{
      echo "ERROR: Could not able to execute $sql. "
                                     . mysqli_error($conn);
  }
  mysqli_close($conn);



die;
}
?>
