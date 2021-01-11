<?php

// Hello world
echo "Hello world" . "<br>";


// variable
$username = "BlueDoe";
echo "Username: " . $username . "<br>";

// this will also work
echo "$username is a John Doe actually <br>";


// arrays
$arr_nums = array(1, 2, 3, 4, 5);
$arr_subj = array("Computer Science", "Information Technology", "Computer Engineering");

// echo $arr_nums;
// this does not print the content of the array but rather says its an array with a warning
// use print_r
print_r($arr_nums);
echo "<br>";
print_r($arr_subj);
echo "<br>";

// get first element in array
echo "The first elements in the subject array is " . $arr_subj[0] . "<br>";
echo "The first elements in the number array is " . $arr_nums[0] . "<br>";

// create arrays on the run
$arr_chars[0] = "a";
$arr_chars[1] = "b";

print_r($arr_chars);
echo "<br>";

// php arrays are actually associative arrays, this means they are key-value pairs
$prof['full_name'] = "BlueDoe Raymond";
$prof['dob'] = '31-09-2010';
$prof['job'] = 'painter';
print_r($prof);
echo "<br>";

$str = "my name is " . $prof['full_name'];
$str .= ", I was born on " . $prof['dob'];
$str .= " and I am a " . $prof['job'] . "<br>";
echo $str;
echo "<br>";

// this is how to create an assoc array
$assoc_arr = array(
    'full_name' => "Patrick Tiger",
    'dob' => "02-02-2020",
    'job' => "Impressionist"
);

print_r($assoc_arr);
echo "<br>";

// get size of array - sizeof
$num_entries = sizeof($assoc_arr);
echo "There are $num_entries entries in assoc_arrays<br>";

// $array_name[] = some_value, adds some value to the end of the array
// add 100 to $arr_nums
$arr_nums[] = 100;
print_r($arr_nums);
echo "<br>";

// unset($array_name[key]) removes the element from the array
// key can also be the index of the element
unset($arr_nums[sizeof($arr_nums) - 1]);

// this removes the last element in the array
print_r($arr_nums);
echo "<br>";


// if statements
$username = "BlueDoe";
$password = "ThunderBlueBeltPassword";

if (strlen($username) >= 5 && strlen($password) >= 5) {
    echo "Credential length - passed";
} else {
    echo "Credential length - failed";
}
echo "<br><br>";


// for loop
for ($i = 0; $i <= 4; $i++) {
    echo "$i<br>";
}
echo "<br>";

// loop through an array
$arr_memes = [
    "I saw a green dog", "Is that a semicolon", "Huu!! this is not working",
    "I am having a stackoverflow just c&p from stackoverflow",
    "Well, there was = and there was ==, now there is ==="
];

for ($i = 0; $i < sizeof($arr_memes); $i++) {
    echo $arr_memes[$i] . "<br>";
}
echo "<br>";
echo "<br>";


// for each
$assoc_arr = array(
    'full_name' => "Patrick Tiger",
    'dob' => "02-02-2020",
    'job' => "Impressionist"
);

foreach ($assoc_arr as $key => $value) {
    echo "$key - $value<br>";
}
unset($i);  // unset $i

echo "<br>";
echo "<br>";


// while loop
$w = 0;
while ($w < sizeof($arr_memes)) {
    echo $arr_memes[$w] . "<br>";
    $w++;
}
echo "<br>";
echo "<br>";


// $_GET - away to interact with the server
// $_GET data can passed as part of the url as query strings
// add, ?username=danielcormier&password=ufcchamp, at the end of the url
// $_GET will hold all those data as an array
print_r($_GET);
echo "<br>";

// just like any array, we can access by index
// $username = $_GET['username'];
// $password = $_GET['password'];
// echo "$username has a password of, $password<br>";

// consider the form below
$username = "Unknown user";
$password = "empty password";

if (isset($_GET['username'])) {
    $username =  $_GET['username'];
}

if (isset($_GET['password'])) {
    $password =  $_GET['password'];
}

echo "$username has a password of, $password<br>";

echo "<br>";
echo "<br>";


// $_POST - for secure commnication between server and user
$admin_config = ['username' => 'admin', 'password' => 'adminpwd'];

if ($_POST) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $admin_config['username'] && $password == $admin_config['password']) {
            echo "Welcome, $username<br>";
        } else {
            echo "Unknow credentials<br>";
        }
    } else {
        echo "Username and Password required<br>";
    }
} // else we do nothing or it becomes a get request

echo "<br>";
echo "<br>";


// sending email
$email_to = "popecan1000@gmail.com";
$subject = "Hey man";
$body = "There is a green dog under the keyboard, Have you seen it?";
$headers =  "From: michaelotu@payhubghana.com";

if (mail($email_to, $subject, $body, $headers)) {
    echo "Message sent<br>";
} else {
    echo "Could not send message<br>";
}

echo "<br>";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>

<body>
    <!-- GET form -->
    <div>
        <h1>GET foom</h1>
        <form action="">
            username: <input type="text" name="username" placeholder="username..">
            password: <input type="text" name="password" placeholder="password..">
            <button type="submit">Ok</button>
        </form>
    </div>

    <br>
    <br>

    <!-- POST form -->
    <div>
        <h1>POST form</h1>
        <form action="" method="POST">
            username: <input type="text" name="username" placeholder="username..">
            password: <input type="text" name="password" placeholder="password..">
            <button type="submit">Ok</button>
        </form>
    </div>
</body>

</html>