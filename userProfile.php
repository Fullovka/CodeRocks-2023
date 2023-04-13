<?php
        // Начинаем сессию
        session_start();

        // Проверяем, есть ли данные о пользователе в сессии
        if (isset($_SESSION['user_surname']) && isset($_SESSION['user_name'])) {
        } else {
            // Если нет, то выводим сообщение об ошибке
            echo 'Ошибка: данные о пользователе не найдены!';
        }
    ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
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

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

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
    <link rel="stylesheet" href="./fonts/montserrat/stylesheet.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">

    <title>ExpertEase - найди своего специалиста!</title>
</head>
<body>
    
    <!-- Header сайта -->
    <header class="header">
        <div class="container header__row-container">
            <!-- Навигационное меню -->
            <div class="header__navigation-menu">
                <!-- Логотип -->
                <div class="header__logo">
                    <img class="logo" src="icons/logo.png" alt="Логотип сайта">
                    <h6 class="logo__text">Сервис поиска <br> специалистов</h6>
                </div>
                <ul class="navigation-menu__list">
                    <li class="navigation-menu__list-item">
                        <a href="./createATask.html" class="navigation-menu__item">Создать задание</a>
                    </li>
                    <li class="navigation-menu__list-item">
                        <a href="./about.html" class="navigation-menu__item">О проекте</a>
                    </li>
                    <li class="navigation-menu__list-item">
                        <a href="./howItWorks.html" class="navigation-menu__item">Как это работает</a>
                    </li>
                    <li class="navigation-menu__list-item">
                        <a href="./topExperts.html" class="navigation-menu__item">Топ экспертов</a>
                    </li>
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
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul class="user-menu__list">
                        <li class="user-menu__list-item">
                            <a href="./authorization.html" class="user-menu__item authorization">Авторизация</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </header>

    <!-- Основная страница поиска -->
    <section class="inputPage">
        <div class="container inputPage__row-container">
            <div class="inputPage__main-wrapper">
                <!-- Левая часть -->
                <div class="inputPage__left-wrapper">
                    <img src="./img/index.html/4.png" class="left-wrapper__img" alt="Фотография гитариста">
                </div>
                <!-- Правая часть -->
                <div class="inputPage__right-wrapper">
                    <!-- Заголовок -->
                    <div class="right-wrapper__title">
                        <h2>Забудьте про рутинные дела</h2>
                    </div>
                    <!-- Подзаголовок -->
                    <div class="right-wrapper__subtitle">
                        <h3>Поможем найти надёжного и проверенного исполнителя для любых задач</h3>
                    </div>
                    <!-- Поле input с кнопкой "Заказать" -->
                    <div class="right-wrapper__main-input">
                        <input type="text" maxlength="220" value="" placeholder="Напишите, какая услуга вам необходима" name="text" aria-autocomplete="list" class="main-input" autocomplete="off">
                        <button type="submit" class="order-button">Заказать</button>
                    </div>
                    <!-- Меняющийся текст подсказок -->
                    <div class="right-wrapper__changing-text">
                        <h5 class="changing-text">Например, <a href="#"><span class="span__blue"></span></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Как работает проект ExpertEase -->
    <section class="aboutExpertEase">
        <div class="container aboutExpertEase__row-container">
            <!-- Заголовок -->
            <div class="aboutExpertEase__title">
                <h2 class="title">Как работает ExpertEase?</h2>
            </div>
            <!-- Контейнер с карточками -->
            <div class="aboutExpertEase__cards-box">
                <!-- Левая карточка -->
                <div class="aboutExpertEase__cards-item green-card-l">
                    <div class="cards-item__text">
                        <p class="text"><span class="infoExpertEase">Создайте</span> интересующее вас задание. <br> Это займёт около 3 - 5 минут</p>
                    </div>
                    <div class="cards-item__img">
                        <img class="img" src="./img/index.html/1.png" alt="Карточка создания">
                    </div>
                </div>
                <!-- Центральная карточка -->
                <div class="aboutExpertEase__cards-item green-card-c">
                    <div class="cards-item__text">
                        <p class="text"><span class="infoExpertEase">Получите</span> предложения на выполнение. <br> Обычно они приходят быстро</p>
                    </div>
                    <div class="cards-item__img">
                        <img class="img" src="./img/index.html/2.png" alt="Карточка получения">
                    </div>
                </div>
                <!-- Правая карточка -->
                <div class="aboutExpertEase__cards-item green-card-r">
                    <div class="cards-item__text">
                        <p class="text"><span class="infoExpertEase">Выберите</span> подходящего исполнителя и обсудите интересующие вас вопросы</p>
                    </div>
                    <div class="cards-item__img">
                        <img class="img" src="./img/index.html/3.png" alt="Карточка выбора">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Лучшие эксперты -->
    <section class="topExperts">
        <div class="container topExperts__row-container">
            <!-- Заголовок -->
            <div class="topExperts__title">
                <h2 class="title">Лучшие специалисты</h2>
            </div>
            <!-- Карточки специалистов -->
            <div class="topExperts__cards-box">
                <!-- Первая карточка -->
                <div class="topExperts__cards-item card">
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
                <div class="topExperts__cards-item card">
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
                <div class="topExperts__cards-item card">
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
                <div class="topExperts__cards-item card">
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
                <div class="topExperts__cards-item card">
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
                <div class="topExperts__cards-item cardMore">
                    <div class="cardMore__row-info">
                        <a class="moreTopExperts" href="./topExperts.html">Посмотреть рейтинг специалистов</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer сайта -->
    <footer class="footer">
        <div class="container footer__row-container">
            <!-- Контейнер для "Контакты" -->
            <div class="footer__column-container">
                <h2 class="footer__title">Контакты</h2>
                <ul class="footer__list">
                    <li><a href="#">Форма обратной связи</a></li>
                    <li><a href="#">Телефон и адрес</a></li>
                    <li><a href="./workingWithPartners.html">Работа с партнерами</a></li>
                </ul>
            </div>
            <!-- Контейнер для "О проекте" -->
            <div class="footer__column-container">
                <h2 class="footer__title">О проекте</h2>
                <ul class="footer__list">
                    <li><a href="./about.html">Немного про нас</a></li>
                    <li><a href="./howItWorks.html">Как это работает</a></li>
                    <li><a href="./privacyPolicy.html">Политика приватности</a></li>
                    <li><a href="./termsOfUse.html">Правила пользования</a></li>
                </ul>
            </div>
            <!-- Контейнер для "Поддержка" -->
            <div class="footer__column-container">
                <h2 class="footer__title">Поддержка</h2>
                <ul class="footer__list">
                    <li><a href="./problemSolving.html">Решение проблем</a></li>
                    <li><a href="./securityPolicy.html">Политика безопасности</a></li>
                    <li><a href="./reportAnError.html">Сообщить об ошибке</a></li>
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
    
    <!-- Подключение JavaScript-файлов и прочих технологий -->

    <!-- Меняющийся текст для поля Input -->
    <script src="./js/changingText.js"></script>

</body>
</html>