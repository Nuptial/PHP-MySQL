<?php
require_once('conn.php');
$query = "CREATE TABLE `courses` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `lessons` INT(3) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
if($link->query($query)===TRUE){echo "table ready";}else{echo $link->error;}
?>