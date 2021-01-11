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
// $email = 'john123@gmail.com';
// $s_email = 'john@gmail.com';

// $s_password = '1234563qgfdh';

// $query = "UPDATE `susers` SET `email` = '$email' WHERE email = '$s_email'";
// $result = mysqli_query($link, $query);


// if ($result) {
//     echo $s_email . " update<br>";
// } else {
//     die("Update Error<br>");
// }


// select one item from the table
// $query = "SELECT `id`, `email`, `password` FROM `susers`;";

// $result = mysqli_query($link, $query);

// if ($result) {
//     $rows = mysqli_fetch_array($result);

//     echo "ID: " . $rows['id'] . ", Email: " . $rows['email'] . ", Password: " . $rows['password'] . "<br>";
// }


// select all users
// $query = "SELECT `id`, `email`, `password` FROM `susers`;";

// if ($result = mysqli_query($link, $query)) {
//     while ($rows = mysqli_fetch_array($result)) {
//         echo "ID: " . $rows['id'] . ", Email: " . $rows['email'] . ", Password: " . $rows['password'] . "<br>";
//     }
// }


// selecting with LIKE %-anything
// mysqli_real_escape_string(str)

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo ("Email and Password required");
} else {

    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $select_query = "SELECT `id` FROM `susers` WHERE `email` =" . $email;
    $result =  mysqli_query($link, $select_query);

    echo $result . " select <br>";

    if ($result) {
        echo "Email already taken";
    } else {
        $insert_query = "INSERT INTO `susers`(`email`, `password`) VALUES(" . $email . "," . $password . ")";
        $result =  mysqli_query($link, $insert_query);

        if ($result) {
            echo "Signup successful";
        } else {
            echo "Signup unsuccessful";
        }
    }

    unset($_POST);
    unset($email);
    unset($password);
}

echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="SignUp">
        </form>
    </div>
</body>

</html>