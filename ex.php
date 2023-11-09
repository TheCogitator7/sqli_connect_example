<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user_id=$_POST['user_id'];
$email=$_POST['email'];

$link = mysqli_connect('localhost', 'port12345', '01!');
if (!$link) {
    die('Not connected : ' . mysqli_error());
}

// make foo the current db
$db_selected = mysqli_select_db($link, "port12345");
if (!$db_selected) {
    die ('Can\'t use port12345 : ' . mysqli_error());
}

mysqli_query($link, "INSERT INTO test(fname, lname, user_id, email) VALUES('$fname', '$lname', '$user_id', '$email')");
mysqli_close($link);
?>