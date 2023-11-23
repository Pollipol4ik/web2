
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleEnter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Зоомагазин</title>
    
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="enter-person">
        <h1>Вход</h1>
        <form action="process_login.php" method="post">
            <div class="input-form">
                <input type="text" name="username" placeholder="Логин">
            </div>
            <div class="input-form">
                <input type="password" name="password" placeholder="Пароль">
            </div>
            <div class="input-form">
                <input type="checkbox" id="remember" name="remember" class="check">
                <label for="remember">Запомнить меня</label>
            </div>
            <div class="input-form">
                <input type="submit" value="Войти">
            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?> 
</body>
</html>
