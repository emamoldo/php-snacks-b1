<?php
// name length > 3 characters
$name = $_GET["name"];
var_dump($name);
var_dump(strlen($name));

// mail .@
$mail = $_GET["email"];
var_dump($mail);

// age = number
$age = $_GET["age"];
var_dump($age);


// if (strlen($name) > 3) {
//     echo "Accesso Riuscito";
// }

if (str_contains($mail, '.@')) {
    echo "Accesso Riuscito";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h1>Access</h1>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Write your Name">
        <input type="text" name="email" placeholder="Write your Email">
        <input type="number" name="age" placeholder="Write your Age">
        <button type="submit">Send</button>
    </form>
</body>
</html>