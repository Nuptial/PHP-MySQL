<?php
require_once('conn.php');
$query = "DELETE FROM  `courses` WHERE id = 2";
$result = mysqli_query($link,$query);
if($result){echo 'deleted';}else{echo'failed';}
?>