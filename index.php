<?php
error_reporting(1);
session_start();
include 'students.php';
$s = new Students;

if(isset($_POST) && isset($_POST['login']) && isset($_POST['password'])){
    $s->login();
}
if(isset($_POST) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age'])){
    $s->add();
}
if(isset($_POST) && isset($_POST['action']) && $_POST['action'] == 'logout'){
    $s->logout();
}

if($_SESSION['login']){
    include 'form.php';
}
else{
    include 'login.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PR3</title>
</head>
<body>
</body>
</html>