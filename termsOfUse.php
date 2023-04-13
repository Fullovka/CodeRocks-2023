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

    <title>ExpertEase | Правила пользования</title>
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
    
    <!-- Правила пользования проектом ExpertEase -->
    <section class="termsOfUse">
        <div class="container termsOfUse__row-container">
            <div class="termsOfUse__title">
                <h1 class="termsOfUseTitle">Правила пользования</h1>
            </div>
            <div class="termsOfUse__infoUse">
                <h6 class="termsOfUsePoint">1. Регистрация:</h6>
                <p class="termsOfUseParagraph">Для использования ExpertEase вам необходимо зарегистрироваться на сайте. Для этого вам понадобится указать свои данные, в том числе имя, адрес электронной почты и пароль.</p> 
                <br>
                <h6 class="termsOfUsePoint">2. Поиск специалиста:</h6>
                <p class="termsOfUseParagraph">После регистрации вы сможете искать специалистов по оказанию услуг. Вы можете ввести ключевые слова в строку поиска, чтобы найти специалистов, работающих в определенной области.</p>
                <br>
                <h6 class="termsOfUsePoint">3. Оценка специалиста:</h6>
                <p class="termsOfUseParagraph">После получения услуги вы можете оценить специалиста, который вам помогал. Это поможет другим пользователям ExpertEase выбрать лучшего специалиста для своих нужд.</p>
                <br>
                <h6 class="termsOfUsePoint">4. Платежи:</h6>
                <p class="termsOfUseParagraph">ExpertEase позволяет оплачивать услуги непосредственно на сайте. Вы можете выбрать удобный для вас способ оплаты и следить за состоянием своей платежной истории.</p>
                <br>
                <h6 class="termsOfUsePoint">5. Сообщения:</h6>
                <p class="termsOfUseParagraph">Вы можете связываться со специалистом непосредственно на сайте ExpertEase, используя функцию сообщений. Это поможет вам обсудить детали услуги и получить ответы на ваши вопросы.</p>
                <br>
                <h6 class="termsOfUsePoint">6. Безопасность:</h6>
                <p class="termsOfUseParagraph">ExpertEase обеспечивает безопасность пользователей, используя современные технологии шифрования данных и проверку подлинности пользователей. Однако, вы также должны принимать меры для защиты своей личной информации, так как ExpertEase не несет ответственности за утечки данных, вызванные действиями пользователей.</p>
                <br>
                <h6 class="termsOfUsePoint">7. Правила использования:</h6>
                <p class="termsOfUseParagraph">Пользователи должны следовать правилам использования, которые являются частью пользовательского соглашения. Нарушение правил может привести к блокировке аккаунта или дисквалификации от использования сервиса ExpertEase.</p>
                <br>
                <h6 class="termsOfUsePoint">8. Комиссия:</h6>
                <p class="termsOfUseParagraph">ExpertEase взимает комиссию за каждую транзакцию между специалистом и клиентом, которая составляет определенный процент от стоимости услуги. Эта комиссия включается в итоговую стоимость услуги и может варьироваться в зависимости от типа услуги.</p>
                <br>
                <h6 class="termsOfUsePoint">9. Приложение:</h6>
                <p class="termsOfUseParagraph">ExpertEase имеет мобильное приложение для удобства пользователей. С его помощью вы можете быстро и легко искать специалистов и получать доступ к другим функциям сервиса.</p>
                <br>
                <h6 class="termsOfUsePoint">10. Защита авторских прав:</h6>
                <p class="termsOfUseParagraph">Все материалы, размещенные на сайте ExpertEase, защищены авторскими правами и не могут быть использованы без согласия правообладателей.</p>
                <br>
                <h6 class="termsOfUsePoint">11. Уведомления:</h6>
                <p class="termsOfUseParagraph"> ExpertEase отправляет уведомления пользователям по электронной почте и на мобильное устройство о новых услугах, сообщениях от специалистов и других событиях, связанных с их аккаунтом.</p>
                <br>
                <h6 class="termsOfUsePoint">12. Права и обязанности:</h6>
                <p class="termsOfUseParagraph">ExpertEase не несет ответственности за качество услуг, предоставленных специалистами, однако гарантирует безопасность платежей и защиту интересов пользователей. Клиенты и специалисты несут ответственность за свои действия в рамках использования сервиса.</p>
                <br>
                <h6 class="termsOfUsePoint">13. Заключение:</h6>
                <p class="termsOfUseParagraph">Надеемся, эти правила помогут вам лучше понимать, как пользоваться сайтом-сервисом ExpertEase. Если у вас возникли дополнительные вопросы, не стесняйтесь обращаться за помощью.</p>
            </div>
            <!-- Фотография для политики безопасности -->
            <div class="termsOfUse__img">
                <img src="./img/termsOfUse/termsOfUse-img.png" class="img" alt="Фотография для правил пользования">
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