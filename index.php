<!DOCTYPE html>
<html lang="en">

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

    include_once __DIR__ . "/password_page.php";

    ?>

</body>

</html>