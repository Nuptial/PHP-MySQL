<?php
require_once('conn.php');
$query = "DELETE FROM  `courses` WHERE id = 2";
$result = $link->query($query);
if($result){echo 'deleted';}else{echo'failed';}
?>