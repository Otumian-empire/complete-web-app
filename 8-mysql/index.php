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

$query = "SELECT `id`, `email`, `password` FROM `susers`;";

$result = mysqli_query($link, $query);

if ($result) {
    $rows = mysqli_fetch_array($result);

    echo "ID: " . $rows['id'] . ", Email: " . $rows['email'] . ", Password: " . $rows['password'] . "<br>";
}
