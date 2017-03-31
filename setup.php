<?php
require_once('conn.php');
$query = "CREATE TABLE `mytest`.`courses` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `lessons` INT(3) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
mysqli_query($link,$query);
?>