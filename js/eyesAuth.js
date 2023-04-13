// Получаем элементы со страницы, с которыми будем работать
const passwordInput = document.querySelector(".password"); // Поле ввода пароля
const eyeIcon = document.querySelector(".eye"); // Иконка глаза
const eyeSlashIcon = document.querySelector(".eye-slash"); // Иконка закрытого глаза

// На событие "input" в поле ввода пароля вешаем обработчик
passwordInput.addEventListener("input", function() {
  if (passwordInput.value.length > 0) { // Если поле заполнено, показываем иконку глаза
    eyeIcon.classList.remove("hidden");
  } else { // Иначе скрываем обе иконки
    eyeIcon.classList.add("hidden");
    eyeSlashIcon.classList.add("hidden");
  }
});

// На событие "click" на иконке глаза вешаем обработчик
eyeIcon.addEventListener("click", function() {
  passwordInput.type = "text"; // Меняем тип поля на "text", чтобы пароль стал видимым
  eyeIcon.classList.add("hidden"); // Скрываем иконку глаза
  eyeSlashIcon.classList.remove("hidden"); // Показываем иконку закрытого глаза
});

// На событие "click" на иконке закрытого глаза вешаем обработчик
eyeSlashIcon.addEventListener("click", function() {
  passwordInput.type = "password"; // Меняем тип поля на "password", чтобы пароль стал скрытым
  eyeIcon.classList.remove("hidden"); // Показываем иконку глаза
  eyeSlashIcon.classList.add("hidden"); // Скрываем иконку закрытого глаза
});

