<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "todo-list-pr";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('ارتباط با دیتابیس برقرار نیست!')</script>");
}

?>