<?php
require_once('conn.php');
$query = "INSERT INTO `courses` (`title`, `lessons`) VALUES ('Javascript', '50');";
$result = mysqli_query($link,$query);
if($result){echo 'added';}else{echo'failed';}
?>