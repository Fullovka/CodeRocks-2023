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
    
    <title>ExpertEase | Регистрация</title>
</head>
<body>

    <!-- Регистрация на проекте -->
    <section class="registrationExpertEase">
        <div class="container registrationExpertEase__row-container">
            <div class="registrationExpertEase__registration-main">
                <div class="registrationExpertEase__registrationInfo">
                    <!-- Логотип проекта -->
                    <div class="registrationExpertEase__logo">
                        <a href="./index.php"><img src="./icons/logo.png" alt="Логотип сайта"></a>
                    </div>
                    <!-- Давайте зарегистрируемся! -->
                    <div class="welcome-wrapper">
                        <h6 class="registrationInfo__welcome">Давайте создадим вам аккаунт!</h6>
                        <h2 class="registrationInfo__logIn">Заполните все поля</h2>
                    </div>
                    
                    <!-- Форма регистрации -->
                    <form action="./php/register.php" method="post">
                        <!-- Контейнер для полей ввода (Input) -->
                        <div class="inputs-wrapper">
                            <!-- Введите имя -->
                            <div class="inputs-wrapper__name">
                                <p class="input-name">Ваше имя:</p>
                                <input type="text" class="nameReg" name="name" placeholder="Имя:">
                            </div>
                            <!-- Введите фамилию -->
                            <div class="inputs-wrapper__surname">
                                <p class="input-surname">Ваше фамилия:</p>
                                <input type="text" class="surname" name="surname" placeholder="Фамилия:">
                            </div>
                            <!-- Введите адрес электронной почты -->
                            <div class="inputs-wrapper__email">
                                <p class="input-email">Введите адрес электронной почты:</p>
                                <input type="email" class="emailReg" name="email" placeholder="Ваш e-mail:">
                            </div>
                            <!-- Введите номер телефона -->
                            <div class="inputs-wrapper__telephone">
                                <p class="input-telephone">Ваш номер телефона:</p>
                                <input type="tel" class="telephone" name="telephone" value="+7" placeholder="+7(___) ___-__-__" maxlength="17" required>
                            </div>
                            <!-- Введите пароль -->
                            <div class="inputs-wrapper__password">
                                <p class="input-passwordReg">Введите пароль:</p>
                                <input type="password" class="passwordReg" name="password" placeholder="Ваш пароль:">
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
                            <div class="inputs-wrapper__repeatPassword">
                                <p class="input-repeatPassword">Повторите пароль:</p>
                                <input type="password" class="repeatPassword" name="repeatPassword" placeholder="Пароль:"> 
                            </div>
                            <div class="inputs-wrapper__check-list">
                                <div class="check-list__executor">
                                    <input type="radio" name="userType" value="performer"><p>Я исполнитель</p>
                                </div>
                                <div class="check-list__customer">
                                    <input type="radio" name="userType" value="customer"><p>Я заказчик</p>
                                </div>
                            </div>
                        </div>

                        <!-- Кнопка "Зарегистрироваться" -->
                        <button type="submit" class="register-button">Зарегистрироваться</button>
                    </form>

                    <!-- У вас уже есть аккаунт? - Войдите в него -->
                    <div class="registrationExpertEase__youHaveAccount">
                        <p class="youHaveAccount">У вас уже есть аккаунт? - <a href="./authorization.php"><span class="goAuthorization">Войдите прямо сейчас!</span></a></p>
                    </div>
                </div>
                <!-- Фоновое изображение для регистрации -->
                <div class="authorizationExpertEase__authorization-img">
                    <img class="imgForRegistration" src="./img/registrationExpertEase/registration-img.png" alt="Фон для страницы регистрации">
                </div>
            </div>
        </div>
    </section>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/dd7bdfa273.js" crossorigin="anonymous"></script>

    <!-- Подключение JavaScript-файлов и прочих технологий -->

    <!-- Показать / скрыть пароль -->
    <script src="./js/eyesRegister.js"></script>

    <!-- Формать ввода телефонного номера -->
    <script src="./js/formatPhoneNumber.js"></script>

    <!-- Проверка сложности пароля -->
    <script src="./js/passwordComplexity.js"></script>

</body>
</html>