<!-- Snack 2  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”-->
<?php

$name = " ";
$age = " ";
$mail = " ";

if(key_exists("name", $_GET)){
    $name =$_GET["name"];
}
if(key_exists("age", $_GET)){
    $age =$_GET["age"];
}
if(key_exists("mail", $_GET)){
    $mail =$_GET["mail"];
}




$validMail = true;

if (strlen($name) < 4) {
    $validMail = false;
} else if (!is_numeric($age)) {
    $validMail = false;
} else if (strrpos($mail, "@") == false) {
    $validMail = false;
} else if (strrpos($mail, ".",strrpos($mail, "@")) == false) {
    $validMail = false;
}

$result = $validMail ? 'Accesso riuscito' : 'Accesso negato';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $result; ?></h1>
</body>
</html>