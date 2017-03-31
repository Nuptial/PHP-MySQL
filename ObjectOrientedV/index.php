<?php
require_once('conn.php');
//$query = "CREATE DATABASE mytest3";
$query = "SELECT * FROM `courses`";
$result = $link->query($query);

if($result){
    while($row=$result->fetch_assoc()){
            echo $row["id"]."course".$row["title"]."(".$row["lessons"].")<br>";
    }
}


?>