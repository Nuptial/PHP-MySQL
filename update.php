<?php
require_once('conn.php');
$query = "UPDATE `courses` SET `title` = 'JavascriptV2' ,`lessons`=100 WHERE id = 2";
$result = mysqli_query($link,$query);
if($result){echo 'updated';}else{echo'failed';}
?>