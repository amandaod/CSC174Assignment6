<?php

$id = $_POST['id'];
$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstName']));
$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastName']));
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));

$result = mysqli_query($connection, "INSERT INTO emails (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')");

?>