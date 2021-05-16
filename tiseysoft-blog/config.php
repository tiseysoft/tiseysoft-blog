<?php
session_start();

//connect to db here 
$conn = mysqli_connect("localhost", "root", "", "tiseysoft-blog");
if(!$conn){
    die("failed to connect" . mysqli_connect_error());
}
//coming soon... 
define ('ROOT_PATH', realpath(dirname(__FILE__)));
define ('BASE_URL', 'localhost/tiseysoft-blog/tiseysoft-blog');
?>