<?php
    // Начинаем сессию
    session_start();

    // Проверяем, была ли отправлена форма для выхода из аккаунта
    if (isset($_POST['logout'])) {
        // Уничтожаем все данные сессии
        session_destroy();
        // Перенаправляем пользователя на страницу авторизации
        header('Location: ./authorization.php');
        exit();
    }

    // Проверяем, есть ли данные о пользователе в сессии
    if (isset($_SESSION['user_surname']) && isset($_SESSION['user_name'])) {
    } else {
        // Если нет, то выводим сообщение об ошибке
        // echo 'Ошибка: данные о пользователе не найдены!';
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- Код для закрытия сессии при клике на кнопку "Выйти из аккаунта" -->
    <script>
        const logoutForm = document.getElementById('logout-form');
        logoutForm.addEventListener('submit', function(event) {
            event.preventDefault();
            console.log('Клик по кнопке "Выйти из аккаунта"');
            var xhr = new XMLHttpRequest();
            xhr.open('POST', './php/logout.php');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    window.location.href = document.referrer;
                } else {
                    console.log('Произошла ошибка при выходе из аккаунта');
                }
            };
            xhr.send();
            const menuItems = document.querySelectorAll('.user-menu__list-item');
            menuItems.forEach((item) => {
                item.classList.remove('active');
            });
        });
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="ExpertEase - сервис для поиска экспертов в разных областях, который поможет вам найти опытных профессионалов, готовых оказать вам качественные услуги. Найдите своего идеального специалиста с ExpertEase уже сегодня!">
    <!-- <meta name="keywords" content="Ключевики">
    <meta name="author" content="Автор">
    <meta name="image" content="./img/logo.png"> -->

    <!-- <meta property="og:type" content="website">
    <meta property="og:title" content="Название">
    <meta property="og:description" content="Описание">
    <meta property="og:image" content="./img/logo.png">
    <meta property="og:url" content="https://example.com"> -->

    <!-- <link rel="canonical" href="https://example.com"> -->

    <!-- <link rel="preconnect" href="//fonts.gstatic.com">
    <link rel="preconnect" href="//cdnjs.cloudflare.com">
    <link rel="preconnect" href="//google-analytics.com"> -->

    <link rel="apple-touch-icon" sizes="57x57" href="icons/favicon/apple/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/favicon/apple/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/favicon/apple/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/favicon/apple/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/favicon/apple/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/favicon/apple/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/favicon/apple/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/favicon/apple/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/favicon/apple/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icons/favicon/android/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon/favicon/favicon-16x16.png">
    <link rel="manifest" href="icons/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icons/favicon/windows/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- <meta name="apple-mobile-web-app-title" content="Название">
    <meta name="apple-mobile-web-app-capable" content="yes"> -->

    <!-- <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">  -->
    
    <!-- Fonts -->
    

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">

    <title>ExpertEase | Рейтинг экспертов</title>
</head>
<body>

    <!-- Header сайта -->
    <header class="header">
        <div class="container header__row-container">
            <!-- Навигационное меню -->
            <div class="header__navigation-menu">
                <!-- Логотип -->
                <div class="header__logo">
                    <a href="./index.php"><img class="logo" src="icons/logo.png" alt="Логотип сайта"></a>
                    <h6 class="logo__text">Сервис поиска <br> специалистов</h6>
                </div>
                <!-- Список пунктов меню -->
                <ul class="navigation-menu__list">
                    <!-- Пункт меню "Создать задание" -->
                    <?php session_start(); 
                    if(isset($_SESSION['user_name'])) { // если пользователь авторизован
                    ?>
                    <li class="navigation-menu__list-item">
                        <a href="./createATask.php" class="navigation-menu__item">Создать задание</a>
                    </li>
                    <?php 
                    } else { // если пользователь не авторизован
                    ?>
                    <li class="navigation-menu__list-item">
                        <span class="navigation-menu__item redItem">Создать задание</span>
                    </li>
                    <?php 
                    }
                    ?>
                    <!-- Пункт меню "О проекте" -->
                    <li class="navigation-menu__list-item">
                        <a href="./about.php" class="navigation-menu__item">О проекте</a>
                    </li>
                    <!-- Пункт меню "Как это работает" -->
                    <li class="navigation-menu__list-item">
                        <a href="./howItWorks.php" class="navigation-menu__item">Как это работает</a>
                    </li>
                    <!-- Пункт меню "Список услуг" -->
                    <?php session_start(); 
                    if(isset($_SESSION['user_name'])) { // если пользователь авторизован
                    ?>
                    <li class="navigation-menu__list-item">
                        <a href="./listOfServices.php" class="navigation-menu__item">Список услуг</a>
                    </li>
                    <?php 
                    } else { // если пользователь не авторизован
                    ?>
                    <li class="navigation-menu__list-item">
                        <span class="navigation-menu__item redItem">Список услуг</span>
                    </li>
                    <?php 
                    }
                    ?>
                </ul>
            </div>
            <!-- Пользовательское меню -->
            <div class="header__user-menu">
                <?php if (isset($_SESSION['user_surname']) && isset($_SESSION['user_name'])) { ?>
                    <ul class="user-menu__list">
                        <li class="user-menu__list-item">
                            <a href="#" class="user-menu__item">
                                <?php echo $_SESSION['user_name'] . ' ' . $_SESSION['user_surname'];  ?>
                            </a>
                            <ul class="user-menu__sublist">
                                <li>
                                    <a href="#" class="sublist">Личный кабинет</a>
                                    <form method="post" action="#" id="logout-form">
                                        <button class="sublist-exit" id="logout" type="submit" name="logout">Выйти из аккаунта</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul class="user-menu__list">
                        <li class="user-menu__list-item">
                            <a href="./authorization.php" class="user-menu__item authorization">Авторизация</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </header>
    
    <!-- Рейтинг экспертов проекта ExpertEase -->
    <section class="topExpertsOnProject">
        <div class="container topExpertsOnProject__row-container">
            <!-- Заголовок -->
            <div class="topExpertsOnProject__title">
                <h2 class="title">Лучшие специалисты</h2>
            </div>
            <!-- Карточки специалистов -->
            <div class="topExpertsOnProject__cards-box">
                <!-- Первая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Марина_Королёва.png" alt="Фотография Марины Королёвой">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Марина Королёва</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Разработчик PHP</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 65</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Марины_Королёвой.png" alt="Рейтинг Марины Королёвой">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Вторая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Семён_Сергеев.png" alt="Фотография Семёна Сергеева">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Семён Сергеев</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Копирайтер</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 82</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Семёна_Сергеева.png" alt="Рейтинг Семёна Сергеева">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Третья карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Ангелина_Сорокина.png" alt="Фотография Ангелины Сорокиной">
                            <div class="offline"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Ангелина Сорокина</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Дизайнер сайтов</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 25</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Ангелины_Сорокиной.png" alt="Рейтинг Ангелины Сорокиной">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Чертёртая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Никита_Зайцев.png" alt="Фотография Никиты Зайцева">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Никита Зайцев</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Маркетолог</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 60</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Никиты_Зайцева.png" alt="Рейтинг Никиты Зайцева">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Пятая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Наталья_Захарова.png" alt="Фотография Натальи Захаровой">
                            <div class="offline"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Наталья Захарова</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Motion дизайнер</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 71</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Натальи_Захаровой.png" alt="Рейтинг Натальи Захаровой">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Шестая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Марина_Королёва.png" alt="Фотография Марины Королёвой">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Марина Королёва</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Разработчик PHP</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 65</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Марины_Королёвой.png" alt="Рейтинг Марины Королёвой">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Седьмая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Семён_Сергеев.png" alt="Фотография Семёна Сергеева">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Семён Сергеев</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Копирайтер</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 82</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Семёна_Сергеева.png" alt="Рейтинг Семёна Сергеева">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Восьмая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Ангелина_Сорокина.png" alt="Фотография Ангелины Сорокиной">
                            <div class="offline"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Ангелина Сорокина</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Дизайнер сайтов</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 25</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Ангелины_Сорокиной.png" alt="Рейтинг Ангелины Сорокиной">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Девятая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Никита_Зайцев.png" alt="Фотография Никиты Зайцева">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Никита Зайцев</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Маркетолог</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 60</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Никиты_Зайцева.png" alt="Рейтинг Никиты Зайцева">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Десятая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Наталья_Захарова.png" alt="Фотография Натальи Захаровой">
                            <div class="offline"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Наталья Захарова</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Motion дизайнер</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 71</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Натальи_Захаровой.png" alt="Рейтинг Натальи Захаровой">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Одиннадцатая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Марина_Королёва.png" alt="Фотография Марины Королёвой">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Марина Королёва</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Разработчик PHP</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 65</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Марины_Королёвой.png" alt="Рейтинг Марины Королёвой">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Двенадцатая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Семён_Сергеев.png" alt="Фотография Семёна Сергеева">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Семён Сергеев</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Копирайтер</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 82</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Семёна_Сергеева.png" alt="Рейтинг Семёна Сергеева">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Тринадцатая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Ангелина_Сорокина.png" alt="Фотография Ангелины Сорокиной">
                            <div class="offline"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Ангелина Сорокина</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Дизайнер сайтов</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 25</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Ангелины_Сорокиной.png" alt="Рейтинг Ангелины Сорокиной">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Четырнадцатая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Никита_Зайцев.png" alt="Фотография Никиты Зайцева">
                            <div class="online"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Никита Зайцев</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Маркетолог</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 60</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Никиты_Зайцева.png" alt="Рейтинг Никиты Зайцева">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
                <!-- Пятнадцатая карточка -->
                <div class="topExpertsOnProject__cards-item card">
                    <div class="card__row-info">
                        <!-- Фотография исполнителя -->
                        <div class="row-info__img">
                            <img src="./img/index.html/Наталья_Захарова.png" alt="Фотография Натальи Захаровой">
                            <div class="offline"></div>
                        </div>
                        <!-- Информация об исполнителе -->
                        <div class="column-info__info-expert">
                            <div class="info-expert__name">
                                <p class="name">Наталья Захарова</p>
                            </div>
                            <div class="info-expert__status">
                                <h3 class="status">Motion дизайнер</h3>
                            </div>
                            <div class="info-expert__success">
                                <p class="success">Выполнено заказов: 71</p>
                            </div>
                            <div class="info-expert__rating">
                                <img src="./img/index.html/рейтинг_Натальи_Захаровой.png" alt="Рейтинг Натальи Захаровой">
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка "Написать" -->
                    <button class="buttonWrite">Написать</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer сайта -->
    <footer class="footer footer-white">
        <div class="container footer__row-container">
            <!-- Контейнер для "Контакты" -->
            <div class="footer__column-container">
                <h2 class="footer__title">Контакты</h2>
                <ul class="footer__list">
                    <li><a href="#">Форма обратной связи</a></li>
                    <li><a href="#">Телефон и адрес</a></li>
                    <li><a href="./workingWithPartners.php">Работа с партнерами</a></li>
                </ul>
            </div>
            <!-- Контейнер для "О проекте" -->
            <div class="footer__column-container">
                <h2 class="footer__title">О проекте</h2>
                <ul class="footer__list">
                    <li><a href="./about.php">Немного про нас</a></li>
                    <li><a href="./howItWorks.php">Как это работает</a></li>
                    <li><a href="./privacyPolicy.php">Политика приватности</a></li>
                    <li><a href="./termsOfUse.php">Правила пользования</a></li>
                </ul>
            </div>
            <!-- Контейнер для "Поддержка" -->
            <div class="footer__column-container">
                <h2 class="footer__title">Поддержка</h2>
                <ul class="footer__list">
                    <li><a href="./problemSolving.php">Решение проблем</a></li>
                    <li><a href="./securityPolicy.php">Политика безопасности</a></li>
                    <li><a href="./reportAnError.php">Сообщить об ошибке</a></li>
                </ul>
            </div>
            <!-- Контейнер для "Мы в соцсетях" -->
            <div class="footer__column-container">
                <h2 class="footer__title">Мы в соцсетях</h2>
                <ul class="footer__list-icons">
                    <li><a href="#"><i class="fa-brands fa-vk"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="footer__copyright">
            <p class="copyright">Copyright &copy; 2023 | ExpertEase Inc - мы связываем вас с лучшими специалистами в вашей области. Все права защищены.</p>
        </div>
    </footer>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/dd7bdfa273.js" crossorigin="anonymous"></script>

    <!-- Выпадающее меню для профиля пользователя -->
    <script src="./js/dropdownForUserMenu.js"></script>

    <!-- Открыть страницу авторизации -->
    <script src="./js/openAuthorization.js"></script>

</body>
</html>