<?php
require_once('conn.php');
$query = "SELECT * FROM `courses`";
if($result=mysqli_query($link,$query)){
    while($row=mysqli_fetch_assoc($result)){
            echo $row["id"]."course".$row["title"]."(".$row["lessons"].")<br>";
    }
}
mysqli_close($link);
?>