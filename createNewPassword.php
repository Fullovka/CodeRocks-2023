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
    
    <title>ExpertEase | Изменение пароля</title>
</head>
<body>
    
    <!-- Изменение пароля -->
    <section class="createNewPassword">
        <div class="container createNewPassword__row-container">
            <div class="createNewPassword__createNewPassword-main">
                <div class="createNewPassword__createNewPasswordInfo">
                    <!-- Логотип проекта -->
                    <div class="createNewPassword__logo">
                        <a href="./index.php"><img src="./icons/logo.png" alt="Логотип сайта"></a>
                    </div>
                    <!-- Давайте изменим ваш пароль! -->
                    <div class="createNewPassword-wrapper">
                        <h6 class="createNewPassword__createPassword">Давайте восстановим вам пароль</h6>
                        <h2 class="createNewPassword__writePassword">Придумайте новый пароль</h2>
                    </div>
                    <!-- Форма изменения пароля -->
                    <form action="" method="post">
                        <div class="inputs-wrapper">
                            <!-- Введите пароль -->
                            <div class="inputs-wrapper__password">
                                <p class="input-createPassword">Введите пароль:</p>
                                <input type="createPassword" class="createPassword" name="password" placeholder="Ваш пароль:">
                                <!-- Контейнер для иконок (глазики) -->
                                <div class="inputs-wrapper__icons-eyes">
                                    <!-- Иконка открытого глазика -->
                                    <div class="eye hidden">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <!-- Иконка закрытого глазика -->
                                    <div class="eye-slash hidden">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Повторите введённый пароль -->
                            <div class="inputs-wrapper__repeatCreatePassword">
                                <p class="input-repeatCreatePassword">Повторите пароль:</p>
                                <input type="password" class="repeatCreatePassword" name="repeatPassword" placeholder="Пароль:"> 
                            </div>
                        </div>
                        <!-- Кнопка "Изменить пароль" -->
                        <button type="submit" class="createNewPassword-button">Изменить пароль</button>
                    </form>
                </div>
                <!-- Фоновое изображение для изменения пароля -->
                <div class="createNewPassword__createNewPassword-img">
                    <img class="imgForCreateNewPassword" src="./img/createNewPassword/createNewPassword-img.png" alt="Фон для страницы изменения пароля">
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