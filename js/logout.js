<script>
    document.getElementById('logout').addEventListener('click', function(event) {
        event.preventDefault(); // отменяем действие по умолчанию

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'logout.php'); // отправляем POST-запрос на logout.php
        xhr.onload = function() {
            if (xhr.status === 200) {
                window.location.href = document.referrer; // перенаправляем пользователя на страницу, откуда он пришел
            } else {
                console.log('Произошла ошибка при выходе из аккаунта');
            }
        };
        xhr.send();
    });
</script>

