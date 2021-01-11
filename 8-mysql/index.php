<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "cwa_db");
define("PORT", "80");


$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT);

if (mysqli_connect_error()) {
    die("Connection error<br>");
}

// insert
// $s_email = 'man1@gmail.com';
// $s_password = '1234563qgfdh';

// $query = "INSERT INTO `susers` (`email`, `password`) VALUES('$s_email',' $s_password')";
// $result = mysqli_query($link, $query);


// if ($result) {
//     echo $s_email . " added to the users<br>";
// } else {
//     die(mysqli_connect_error());
// }

// update
$email = 'john123@gmail.com';
$s_email = 'john@gmail.com';

$s_password = '1234563qgfdh';

$query = "UPDATE `susers` SET `email` = '$email' WHERE email = '$s_email'";
$result = mysqli_query($link, $query);


if ($result) {
    echo $s_email . " update<br>";
} else {
    die(mysqli_connect_error());
}


// select one item from the table
$query = "SELECT `id`, `email`, `password` FROM `susers`;";

$result = mysqli_query($link, $query);

if ($result) {
    $rows = mysqli_fetch_array($result);

    echo "ID: " . $rows['id'] . ", Email: " . $rows['email'] . ", Password: " . $rows['password'] . "<br>";
}
