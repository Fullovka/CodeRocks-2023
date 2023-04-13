// Получаем поле ввода телефона
const telephoneInput = document.querySelector('.telephone');

// Форматируем номер телефона
telephoneInput.addEventListener('input', function() {
    const value = telephoneInput.value.replace(/\D/g, '');
    const formattedValue = formatPhoneNumber(value);
    telephoneInput.value = formattedValue;
});

// Функция для форматирования номера телефона
function formatPhoneNumber(value) {
    const phoneNumberPattern = /^(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})$/;
    const phoneNumberParts = value.match(phoneNumberPattern);
    let formattedPhoneNumber = '+7';
    if (phoneNumberParts[2]) {
        formattedPhoneNumber += `(${phoneNumberParts[2]})`;
    }
    if (phoneNumberParts[3]) {
        formattedPhoneNumber += ` ${phoneNumberParts[3]}`;
    }
    if (phoneNumberParts[4]) {
        formattedPhoneNumber += `-${phoneNumberParts[4]}`;
    }
    if (phoneNumberParts[5]) {
        formattedPhoneNumber += `-${phoneNumberParts[5]}`;
    }
    return formattedPhoneNumber;
}

