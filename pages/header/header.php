<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="pages/header/style.css">
    <link rel="stylesheet" href="style/adaptive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>SneanekrsMe</title>
</head>
<body>
    <script src="/sripts/menu/modal/modal.js"></script>
    <header class="header">
        <div class="container m-0">
            <div class="header-inner">
                <div class="header-menu dflex">
                    <div class="header-forms dflex">
                        <div class="header-sidebar">
                            <div class="sidebar-menu show">
                                <div class="sidebar_open" onclick="dropDown()">
                                    <img src="https://cdn-icons-png.flaticon.com/512/9330/9330299.png" alt="Меню" width="23px" height="23px">
                                    <a href="#" class="btn-sidebar_open">Меню</a>
                                </div>
                                <div class="sidebar_close close">
                                    <a href="#" class="btn-sidebar_close" onclick="closeNav()">
                                        <img src="https://cdn-icons-png.flaticon.com/512/32/32178.png" alt="Закрыть" width="25px" height="25px">
                                    </a>
                                </div>
                                <nav class="header-links" id="header-links">
                                    <li>
                                        <a href="#" class="header-link__item link" title="Кроссовки">Кроссовки</a>
                                    </li>
                                    <li>
                                        <a href="#" class="header-link__item link" title="Кеды">Кеды</a>
                                    </li>
                                    <li>
                                        <a href="#" class="header-link__item link" title="Вся обувь">Вся обувь</a>
                                    </li>
                                    <li>
                                        <a href="#" class="header-link__item link" title="О нас">О нас</a>
                                    </li>
                                    <li>
                                        <a href="#" class="header-link__item link" title="Контакты">Контакты</a>
                                    </li>
                                </nav>
                            </div>
                        </div>
                        <div class="search-form">
                            <div class="search-form_item">
                                <div class="search-form_icon">
                                    <img src="https://cdn-icons-png.flaticon.com/512/151/151773.png" alt="Поиск" width="17px" height="17px">
                                </div>
                                <div class="search-from_input">
                                    <input type="text" placeholder="Поиск">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-logo">
                        <div class="menu-logo-item">
                            <img src="img/logo.svg" alt="SneakersMe" width="200px">
                        </div>
                    </div>
                    <div class="menu-items dflex">
                        <div class="header-user cursor-pointer">
                            <div class="header-user_item">
                                <img src="https://cdn-icons-png.flaticon.com/512/3114/3114957.png" alt="Личный кабинет" width="25px" height="25px">
                            </div>
                        </div>
                        <div class="header-favorites cursor-pointer">
                            <div class="header-favorites_item">
                                <img src="https://cdn-icons-png.flaticon.com/512/2961/2961957.png" alt="Избранное" width="25px" height="25px">
                            </div>
                        </div>
                        <div class="header-cart cursor-pointer">
                            <div class="header-cart_item">
                                <img src="https://cdn-icons-png.flaticon.com/512/4903/4903482.png" alt="корзина"  width="25px" height="25px">
                                <div class="cart-counter">
                                    <span data-count="3">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>