<?php

$conn = mysqli_connect("localhost", "root", "", "chat");
if(!$conn){
    echo "error" . mysqli_connect_error();
}

?>