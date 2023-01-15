<?php

    $db = new PDO("mysql:host=localhost;dbname=sneakers__db","root","");
    $info = [];
    if($query =  $db -> query("SELECT * FROM sneakers ")) {
        $info = $query -> fetchAll(PDO::FETCH_ASSOC);
    }  else {
        print_r($db -> errorInfo());
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/adaptive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>SneanekrsMe</title>
</head>
<body>
    <header class="header">
        <div class="container m-0">
            <div class="header-inner">
                <div class="header-menu dflex">
                    <div class="menu-logo p40">
                        <div class="menu-logo-item">
                            <img src="img/logo.svg" alt="SneakersMe" width="56px" height="50px">
                        </div>
                    </div>
                    <div class="header-links">
                        <a href="#" class="header-link__item link" title="Кроссовки">Кроссовки</a>
                        <a href="#" class="header-link__item link" title="Кеды">Кеды</a>
                        <a href="#" class="header-link__item link" title="Вся обувь">Вся обувь</a>
                        <a href="#" class="header-link__item link" title="О нас">О нас</a>
                        <a href="#" class="header-link__item link" title="Контакты">Контакты</a>
                    </div>
                    <div class="header-basket p40">
                        <div class="header-baskt__item">
                            <img src="https://cdn-icons-png.flaticon.com/512/8071/8071101.png" alt="корзина"  width="35px" height="35px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container m-0">
            <div class="product">
            <?php foreach($info as $data): ?>
                <div class="product__card">
                    <div class="product__item">
                        <div class="product__img">
                            <img src="<?= $data['iamge']; ?>"
                            alt=""
                            width="240px"
                            height="240px">
                        </div>
                        <div class="product-inf">
                            <div class="product__price">
                                <p><?= $data['price'] ?> руб</p>
                            </div>
                            <div class="product__name">
                                <a href="#"><?= $data['name']?></a>  
                            </div>
                            <div class="availability">
                                <?php 
                                    if ($data['availability'] == 1) {
                                        echo "<p>В налиии</p>";
                                    } else {
                                        echo "<p>Нет в наличии</p>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>