<?php
$fio = $_POST['fio'];
$KatName = $_POST['KatName'];
$fon = $_POST['fon'];
$email = $_POST['email'];
$from = $_POST['from'];
$to = $_POST['to'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);

$fon = htmlspecialchars($fon);
$KatName = htmlspecialchars($KatName);
$fon = urldecode($fon);
$KatName = urldecode($KatName);
$fon = trim($fon);
$KatName = trim($KatName);

$from = htmlspecialchars($from);
$to = htmlspecialchars($to);
$from = urldecode($from);
$to = urldecode($to);
$from = trim($from);
$to = trim($to);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("esiev.ilez@gmail.com", "Заявка с сайта", "ФИО:".$fio.".ИмяПитомца:".$KatName." Телефон:".$fon.".E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>