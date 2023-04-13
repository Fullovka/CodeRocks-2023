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

    <title>ExpertEase | Политика конфиденциальности</title>
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
    
    <!-- Политика конфиденциальности проекта ExpertEase -->
    <section class="privacyPolicy">
        <div class="container privacyPolicy__row-container">
            <div class="privacyPolicy__title">
                <h1 class="privacyPolicyTitle">Политика конфиденциальности</h1>
            </div>
            <div class="privacyPolicy__infoPolicy">
                <h6 class="privacyPolicyPoint">1. Политика конфиденциальности ExpertEase:</h6>
                <p class="privacyPolicyParagraph">Мы, владельцы сайта-сервиса ExpertEase, ценим вашу конфиденциальность и обязуемся защищать вашу личную информацию. В этой политике конфиденциальности мы объясняем, как мы собираем, используем и раскрываем вашу личную информацию в контексте нашего сайта-сервиса. Настоящая политика конфиденциальности применима к информации, которую мы собираем через сайт-сервис ExpertEase.</p> 
                <br>
                <h6 class="privacyPolicyPoint">2. Сбор информации:</h6>
                <p class="privacyPolicyParagraph">Мы собираем информацию, которую вы предоставляете нам напрямую через формы нашего сайта-сервиса, например, при регистрации аккаунта, подаче заявки на услугу или обращении в нашу службу поддержки. Эта информация может включать ваше имя, адрес электронной почты, номер телефона, информацию о компании и другую информацию, которую вы решите предоставить нам.
                <br>
                Мы также автоматически собираем определенную информацию о вашем взаимодействии с нашим сайтом-сервисом, такую как ваш IP-адрес, данные браузера и устройства, используемые для доступа к сайту-сервису, и информацию о том, как вы используете наш сайт-сервис, включая информацию о страницах, которые вы посещаете, и времени, проведенном на каждой странице.</p>
                <br>
                <h6 class="privacyPolicyPoint">3. Использование информации:</h6>
                <p class="privacyPolicyParagraph">Мы используем предоставленную вами информацию для предоставления вам услуг, которые вы запросили, для управления вашим аккаунтом, для связи с вами относительно вопросов и запросов, которые вы отправляете нам, и для улучшения нашего сайта-сервиса и предоставления вам наилучшего пользовательского опыта.
                <br>
                Мы также можем использовать информацию, которую мы собираем автоматически, чтобы анализировать использование нашего сайта-сервиса и улучшить его функциональность и производительность.</p>
                <br>
                <h6 class="privacyPolicyPoint">4. Раскрытие информации:</h6>
                <p class="privacyPolicyParagraph">Мы не продаем, не обмениваем и не передаем вашу личную информацию третьим лицам, за исключением случаев, когда это необходимо для выполнения ваших запросов или обязательств, связанных с оказанием услуг, которые вы запрашиваете. Мы также можем раскрывать вашу личную информацию, если это требуется законом или в соответствии с правительственным решением или судебным поручением.</p>
                <br>
                <h6 class="privacyPolicyPoint">5. Безопасность информации:</h6>
                <p class="privacyPolicyParagraph">Мы принимаем все необходимые меры для защиты вашей личной информации от несанкционированного доступа, использования или раскрытия. Мы используем различные технические и организационные меры безопасности для защиты вашей информации, включая шифрование, защищенное соединение и контроль доступа.</p>
                <br>
                <h6 class="privacyPolicyPoint">6. Связь с нами:</h6>
                <p class="privacyPolicyParagraph">Если у вас есть вопросы или комментарии по поводу нашей политики конфиденциальности или обработки вашей личной информации, пожалуйста, свяжитесь с нами через форму обратной связи на нашем сайте-сервисе.</p>
                <br>
                <h6 class="privacyPolicyPoint">7. Изменения в политике конфиденциальности:</h6>
                <p class="privacyPolicyParagraph">Мы можем периодически обновлять нашу политику конфиденциальности, чтобы отразить изменения в наших практиках сбора, использования и раскрытия информации. Мы рекомендуем вам периодически проверять эту политику на нашем сайте-сервисе, чтобы быть в курсе изменений. В случае существенных изменений в нашей политике конфиденциальности, мы уведомим вас об этом нашими общими способами связи.</p>
                <br>
                <h6 class="privacyPolicyPoint">8. Заключение:</h6>
                <p class="privacyPolicyParagraph">Мы придерживаемся высоких стандартов конфиденциальности и делаем все возможное, чтобы защитить вашу личную информацию. Если у вас есть какие-либо вопросы или требуется дополнительная информация по поводу нашей политики конфиденциальности, пожалуйста, свяжитесь с нами через форму обратной связи на нашем сайте-сервисе.</p>
            </div>
            <!-- Фотография для политики конфиденциальности -->
            <div class="privacyPolicy__img">
                <img src="./img/privacyPolicy/privacyPolicy-img.png" class="img" alt="Фотография для политики конфиденциальности">
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