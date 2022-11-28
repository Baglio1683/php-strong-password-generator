<!DOCTYPE html>
<html lang="en">

<?php

$length_number = $_GET["numb"];

function generate_password($numb)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $numb; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}




?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrongPassword</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1 class="text_gray">Strong Password Generator</h1>
    <h2 class="text_white">Genera una password Sicura</h2>

    <form action="index.php" method="GET">
        <label for="numb">Lunghezza Password</label>
        <input type="number" name="numb" id="numb">
        <button type="submit">Submit</button>
    </form>

    <?php

    $passkey = generate_password($length_number);
    echo $passkey;

    ?>






</body>

</html>