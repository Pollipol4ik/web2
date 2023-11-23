<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <title></title>
    <?php 
    $link_catalog = "catalog.php";
    $link_main = "index.php";
    $link_about = "aboutUs.php";
    $link_contact = "contact.php"
    ?>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-line">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="image/Logo.png" width="50" alt="Логотип">
                    </a>
                </div>
                <div class="nav">
                    <a href = "<?php 
                    $visible = true;
                    echo $link_main;
                    $text ='ГЛАВНАЯ';
                    ?>" class = "<?php if($visible){echo 'nav-item';}?>"> <?=$text?>
                    </a>
                    <a href = "<?php 
                    $visible = true;
                    echo $link_catalog;
                    $text ='КАТАЛОГ';
                    ?>" class = "<?php if($visible){echo 'nav-item';}?>"> <?=$text?>
                    </a>
                    <a href = "<?php 
                    $visible = true;
                    echo $link_contact;
                    $text ='КОНТАНТЫ';
                    
                    ?>" class = "<?php if($visible){echo 'nav-item';}?>"> <?=$text?>
                   
                
                </div>
                <div class="heart">
                    <a href="enter.php" class="most_like">
                        <img src="image/heart.png"  width="30" alt="Избранное">
                    </a>
                </div>
                <div class="person">
                    <a href="enter.php" class="person_name">
                        <img src="image/person.png" width="30" alt="Иконка пользователя">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
