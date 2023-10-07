<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PR3</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Логін</label>
        <input type="text" name="login">
        <br>
        <label for="">Пароль</label>
        <input type="password" name="password">
        <br>
        <button class="submit">Вхід</button>
        <br>
        <?php echo $message; ?>
    </form>
</body>
</html>