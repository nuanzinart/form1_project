<?php 
include_once('config.php');

$name = $_POST['name'];
$address = $_POST['address'];
$mail = $_POST['email'];
$experience = $_POST['experience'];
$html = $_POST['checkbox1'];
$css = $_POST['checkbox2'];
$js = $_POST['checkbox3'];
$php = $_POST['checkbox4'];
$previousExperience = $_POST['previousExperience'];
$depertureDate = date('Y-m-d H:i:s');
$openingDate = $_POST['opening-date'];
$password = $_POST['password'];

 // echo strtotime($openingDate);
 // echo("<br>");
 // echo strtotime($depertureDate);
 // echo("<br>");
 $res = strtotime($depertureDate) - strtotime($openingDate);
 echo "Для заполнения формы понадобилось " . $res . " секунд";
 //  echo("<br>");
 // echo $name;
 // echo("<br>");
 // echo md5($name);
 echo("<br>");
 if ($password == md5('Artem1997')) {
 	echo "Пароль совпадает";
 }
 echo("<br>");




// echo 'Дата открытитя ' . $depertureDate . '<br>'. 'Дата отправки ' . $openingDate;
//$from = 'superman1908aron@gmail.com';
// echo $name . '<br>' . $address . '<br>' . $mail . '<br>' . $experience . '<br>' . $html . '<br>' . $css . '<br>' . $js . '<br>' . $php . '<br>' . $previousExperience;

//echo $name . '<br>' . $address . '<br>' . $mail;

 // mail($address,'PHP','PHP','From: ' . $from);

//$db_host = 'localhost'; 
//$db_user = 'root'; // Логин БД
//$db_password = ''; // Пароль БД
//$db_base = 'form'; // Имя БД

// Cоздание подключения к базе данных
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));
// mysqli_set_charset('utf8');

// Записываем в БД
$query_insert = 'INSERT INTO forForm (name, address, mail, experience, html, css, js, php, previousExperience, openingDate, depertureDate, timeDifference) VALUES ("' . $name . '", "' . $address . '", "' . $mail . '", "' . $experiences . '", "' . $html . '", "' . $css . '", "' . $js . '", "' . $php . '", "' . $previousExperience . '", "' . $openingDate . '", "' . $depertureDate . '", "' .  $res . '")';
mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link));

//Вывод из БД
// $query_select = 'SELECT * FROM messages';
// $result = mysqli_query($link, $query_select) or die('Ошибка' . mysqli_error($link));
// while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
// echo $row["id"] . ' ' . $row["name"] . ' ' . $row["message"] . ' <br />';
// }
// mysqli_free_result($result);


///
// $hhh = date("d = F = Y m   s ");



// Закрыть подключения к базе данных
// mysqli_close($link);






// if (
// 	// empty($name) || empty($email) || empty($subject) || empty($message)
// 	$name == false
// ) {

// 	echo 'Complete the field';
	
	
// } else {
// 	echo $name . " <br> " . $email . " <br> " . $subject . " <br> " . $message;
// }

// if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
// echo "True";
// $email_error = true;
// }else{
// echo "False";
// $email_error = false;
// }

// if(!preg_match("/^[0-9]{10,10}+$/", $phone)) {
// 	echo "False";
// $phone_error = true;
// } else {
// 	echo "True";
// $phone_error = false;
// };

// if ( strlen($name) < 2) {
// 	echo "Имя некорректно";
// } else{
// 	echo "корректно";
// }

?>

