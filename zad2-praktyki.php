<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["login"] == "admin" && $_POST["password"] == "testy") {
            echo "Zalogowano";
        } else {
            echo "Błąd logowania";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie1</title>
    <style>
    </style>
</head>
<body>
    <div id="blok">
    <form method="post" action="login.php">
        <input type="text" name="login" />
        <br>
        <input type="password" name="password" />
        <br>
        <button type="sumbit">Zaloguj</button>
    </form>
    </div>
</body>
</html>