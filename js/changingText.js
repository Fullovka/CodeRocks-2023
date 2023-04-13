// Получаем элемент, который будем менять
const changingText = document.querySelector('.span__blue');

// Массив с текстами, которые будут меняться
const texts = ['требуется frontend разработчик', 'мытьё окон на балконе', 'няня на полный день', 'настроить wi-fi роутер', 'убрать 2-х комнатную квартиру', 'фотограф на свадьбу', 'ремонт стиральной машины', 'выгулять собаку в парке', 'установить экструзионный радиатор', 'необходимо вынести мусор', 'сделать сайт под ключ', 'укладка тротуарной плитки', 'сантехник на час', 'ремонт авто', 'выкопать огород', 'спилить дерево', 'поклеить обои', 'покрасить забор'];

// Индекс текущего текста
let currentTextIndex = Math.floor(Math.random() * texts.length);

// Устанавливаем начальный текст
changingText.textContent = texts[currentTextIndex];

// Функция для изменения текста
function changeText() {
  // Устанавливаем новый текст
  changingText.textContent = texts[currentTextIndex];

  // Увеличиваем индекс текущего текста
  currentTextIndex++;

  // Если достигли конца массива, возвращаемся на начало
  if (currentTextIndex >= texts.length) {
    currentTextIndex = 0;
  }
}

// Устанавливаем интервал для изменения текста
setInterval(changeText, 8000);

// Получаем ссылки на все элементы, содержащие меняющийся текст
const linkElements = document.querySelectorAll('.changing-text a');

// Обрабатываем каждую ссылку
linkElements.forEach(linkElement => {
  // Добавляем обработчик события click
  linkElement.addEventListener('click', handleLinkClick);
});

// Функция для обработки клика по ссылке
function handleLinkClick(event) {
  // Отменяем действие по умолчанию, чтобы страница не перезагружалась
  event.preventDefault();

  // Получаем текст из ссылки
  const linkText = event.target.textContent;

  // Находим поле ввода
  const inputElement = document.querySelector('.main-input');

  // Устанавливаем текст из ссылки в значение атрибута value нашего поля ввода
  inputElement.value = linkText;
}


