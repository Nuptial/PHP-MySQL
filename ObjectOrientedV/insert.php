<?php
require_once('conn.php');
$query = "INSERT INTO `courses` (`title`, `lessons`) VALUES ('Javascript', '50');";
$result = $link->query($query);
if($result){echo 'added';}else{echo $link->error;}

?>