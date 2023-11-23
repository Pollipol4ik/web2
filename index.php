<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Зоомагазин</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="main-content">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image/catAndDog.png"  alt="Зоомагазин">
                    <div class="image-caption">
                        <h1>Only Pets</h1>
                        <p>с заботой о ваших любимцах</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="image/dog.jpg" alt="Зоомагазин">
                    <div class="image-caption">
                        <h1>Only Pets</h1>
                        <p>с заботой о ваших любимцах</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="image/hom.jpg" alt="Зоомагазин">
                    <div class="image-caption">
                        <h1>Only Pets</h1>
                        <p>с заботой о ваших любимцах</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="image/rabbit.jpg" alt="Зоомагазин">
                    <div class="image-caption">
                        <h1>Only Pets</h1>
                        <p>с заботой о ваших любимцах</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?> 

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
