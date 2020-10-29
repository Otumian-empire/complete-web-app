<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// $host = "127.0.0.1";
// $database_name = "contactform";
// $username = "root";
// $password = "";


if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    http_response_code(201);
    echo json_encode(array(
        "message" => "Awesome, We are good to go",
        "code" => true
    ));
} else {
    http_response_code(500);
    echo json_encode(array(
        "message" => "There is an error here",
        "code" => false
    ));
}
