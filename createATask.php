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

    <title>ExpertEase | Создание задания</title>
</head>
<body>
    
    <!-- Создание задания -->
    <section class="createATask">
        <div class="container createATask__row-container">
            <div class="createATask__createATask-main">
                <div class="createATask__createATaskInfo">
                    <!-- Логотип проекта -->
                    <div class="registrationExpertEase__logo">
                        <a href="./index.php"><img src="./icons/logo.png" alt="Логотип сайта"></a>
                    </div>
                    <!-- Давайте создадим задание! -->
                    <div class="createATask-wrapper">
                        <h6 class="createATaskInfo__goCreateATask">Давайте создадим ваше задание!</h6>
                        <h2 class="createATaskInfo__fillOutEverything">Заполните все поля</h2>
                    </div>
                    
                    <?php
                    $nameTask = ''; // значение по умолчанию

                    if (isset($_POST['text'])) {
                        $nameTask = $_POST['text'];
                    }
                    ?>
                    
                    <!-- Форма создания задания -->
                    <form id="createTaskForm" action="./php/createATask.php" method="POST">
                        <!-- Контейнер для полей ввода (Input) -->
                        <div class="inputs-wrapper">
                            <!-- Введите название -->
                            <div class="inputs-wrapper__nameTask">
                                <p class="input-nameTask">Название:</p>
                                <input type="text" class="nameTask" name="nameTask" placeholder="Название услуги:" autocomplete="off" value="<?php echo isset($_GET['nameTask']) ? htmlspecialchars($_GET['nameTask']) : '' ?>">
                            </div>
                            <!-- Введите описание -->
                            <div class="inputs-wrapper__descriptionTask">
                                <p class="input-descriptionTask">Описание:</p>
                                <textarea class="descriptionTask" name="descriptionTask" placeholder="Краткое описание" autocomplete="off"></textarea>
                            </div>
                            <!-- Введите сроки выполнения -->
                            <div class="inputs-wrapper__deadlineTask">
                                <p class="input-deadlineTask">Сроки выполнения (до):</p>
                                <input type="datetime-local" class="deadlineTask" name="deadlineTask" placeholder="Сроки выполнения:" autocomplete="off">
                            </div>
                            <!-- Введите бюджет -->
                            <div class="inputs-wrapper__budgetTask">
                                <p class="input-budgetTask">Бюджет:</p>
                                <input type="number" class="budgetTask" name="budgetTask" placeholder="Бюджет:" autocomplete="off">
                            </div>
                            <!-- Выберите категорию -->
                            <div class="inputs-wrapper__categoryTask">
                                <p class="input-categoryTask">Категории:</p>
                                <select class="categoryTask" name="categoryTask">
                                    <option value="" disabled selected hidden>Выберите категорию</option>
                                    <option value="development">IT-услуги и программирование</option>
                                    <option value="repairAndMaintenance">Ремонт и обслуживание техники</option>
                                    <option value="cleaningAndDisinfection">Уборка и дезинфекция помещений</option>
                                    <option value="repairAndConstruction">Ремонт и строительство домов</option>
                                    <option value="beautyAndSelf-care">Красота и уход за собой</option>
                                    <option value="transportationServices">Транспортные услуги</option>
                                    <option value="educationalServices">Образовательные услуги</option>
                                    <option value="musicServices">Музыкальные услуги и развлечения</option>
                                    <option value="otherServices">Прочие услуги и требования</option>
                                </select>
                            </div>
                        </div>

                        <!-- Кнопка "Опубликовать задание" -->
                        <button type="submit" class="createATask-button">Опубликовать задание</button>
                    </form>

                </div>
                <!-- Фоновое изображение для создания задания -->
                <div class="createATask__createATask-img">
                    <img class="imgForCreateATask" src="./img/createATask/createATask-img.png" alt="Фон для создания задания">
                </div>
            </div>
        </div>
    </section>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/dd7bdfa273.js" crossorigin="anonymous"></script>

</body>
</html>