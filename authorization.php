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
    
    <title>ExpertEase | Авторизация</title>
</head>
<body>

    <!-- Авторизация на проекте -->
    <section class="authorizationExpertEase">
        <div class="container authorizationExpertEase__row-container">
            <div class="authorizationExpertEase__authorization-main">
                <div class="authorizationExpertEase__authorizationInfo">
                    <!-- Логотип проекта -->
                    <div class="authorizationExpertEase__logo">
                        <a href="./index.php"><img src="./icons/logo.png" alt="Логотип сайта"></a>
                    </div>
                    <!-- Давайте авторизируемся! -->
                    <div class="welcome-wrapper">
                        <h6 class="authorizationInfo__welcome">Добро пожаловать!</h6>
                        <h2 class="authorizationInfo__logIn">Войдите в свой аккаунт</h2>
                    </div>
                    
                    <!-- Форма авторизации -->
                    <form action="./php/login.php" method="post">
                        <!-- Контейнер для полей ввода (Input) -->
                        <div class="inputs-wrapper">
                            <!-- Введите адрес электронной почты -->
                            <div class="inputs-wrapper__email">
                                <p class="input-email">Введите адрес электронной почты:</p>
                                <input type="email" class="email" name="email" placeholder="Ваш e-mail:">
                            </div>
                            <!-- Введите пароль -->
                            <div class="inputs-wrapper__password">
                                <p class="input-password">Введите пароль:</p>
                                <input type="password" class="password" name="password" placeholder="Ваш пароль:"> 
                                <!-- Контейнер для иконок (глазики) -->
                                <div class="inputs-wrapper__icons-eyes">
                                    <!-- Иконка открытого глазика -->
                                    <div class="eye hidden">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class="eye-slash hidden">
                                        <!-- Иконка закрытого глазика -->
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Запомнить меня / забыли пароль? -->
                            <div class="inputs-wrapper__repeatMeAndForgorPassward">
                                <!-- Запомнить меня -->
                                <div class="inputs-wrapper__repeatMe">
                                    <input type="radio" class="repeatMe" name="repeatMe">
                                    <p class="input-repeatMe">Запомнить меня</p>
                                </div>
                                <!-- Забыли пароль? -->
                                <div class="inputs-wrapper__forgotPassword">
                                    <a href="./passwordRecovery.php" class="forgorPassword">Забыли пароль?</a>
                                </div>
                            </div>
                        </div>
                        <!-- Кнопка "Войти" -->
                        <button type="submit" class="logIn-button">Войти</button>
                        <!-- Кнопка "Войти с помощью google" -->
                        <div class="inputs-wrapper__logInGoogle">
                            <button class="logIn-buttonGoogle">Или войдите с помощью google</button>
                        </div>
                    </form>

                    <!-- У вас еще нет аккаунта? - Зарегистрируйтесь! -->
                    <div class="authorizationExpertEase__doNotAccount">
                        <p class="doNotAccount">У вас еще нет аккаунта? - <a href="./registration.php"><span class="goRegistration">Зарегистрируйтесь бесплатно!</span></a></p>
                    </div>
                </div>
                <!-- Фоновое изображение для авторизации -->
                <div class="authorizationExpertEase__authorization-img">
                    <img class="imgForAuthorization" src="./img/authorizationExpertEase/authorization-img.png" alt="Фон для страницы авторизации">
                </div>
            </div>
        </div>
    </section>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/dd7bdfa273.js" crossorigin="anonymous"></script>

    <!-- Подключение JavaScript-файлов и прочих технологий -->

    <!-- Показать / скрыть пароль -->
    <script src="./js/eyesAuth.js"></script>

</body>
</html>