<?php 
// jak widać bardzo dużo skryptu
$conn = mysqli_connect('localhost','mrbeast','00000','mrbeast');
if(!$conn){
    echo 'problum' . mysqli_connect_error();
} ?>