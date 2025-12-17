<?php

$token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (!empty($token)) {
        if (hash_equals($_SESSION['token'], $token)) {
            /* The Following to get response back from Google recaptcah */
            $url = "https://www.google.com/recaptcha/api/siteverify";
			$secretKey = "6LfuQ2gUAAAAAC9Mr4FnnoG2cN4V2GDckkG7khbP";

            $remoteServer = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_SANITIZE_URL);
            $response =  file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
            $recaptcha_data = json_decode($response);
            /* The actual check of the recaptcha */
            if (isset($recaptcha_data->success) && $recaptcha_data->success === TRUE) {
                $data['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $data['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $data['phone'] = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
                $data['comments'] = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $send = new Email($data);
            } else {
                $success = "You're not a human!"; // Not of a production server:
            }
        } else {
            echo '<div class="error_message">Вы не человек</div>';
        }
    }
#if(!$_POST) exit;




// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

function isPhone($phone)
{

	$phone = preg_replace('/\s|\+|-|\(|\)/','', $phone); // удалим пробелы, и прочие не нужные знаки

	if(is_numeric($phone))
	{
		if(strlen($phone) < 11) // если длина номера слишком короткая, вернем false
		{
			return FALSE;
		}
		else
		{
			return $phone;
		}
	}
	else
	{
		return FALSE;
	}
}


if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$comments = $_POST['comments'];


if(trim($name) == 'Имя') {
	echo '<div class="error_message">Впишите Ваше имя.</div>';
	exit();
} else if((trim($name) == 'XRumerTest')OR(trim($name) == 'NeooGaink')OR(trim($name) == 'GraffRef')OR(trim($name) == 'MichaelSmups')OR(trim($name) == 'MichaelBlued')OR(trim($name) == 'MichaelSmups')OR(trim($name) == 'крео')OR(trim($name) == 'www')) {
	echo '<div class="error_message">Вам запрещено писать.</div>';
	exit();
}
else if(mb_strlen($name) > 15)  {
   echo '<div class="error_message">Пожалуйста, в поле Имя - пишите только имя, ваше сообшение пишите в поле ниже</div>';
	exit();
}else if(trim($email) == 'E-mail') {
	echo '<div class="error_message">Введите e-mail адрес.</div>';
	exit();
} else if(trim($phone) == '') {
	echo '<div class="error_message">Введите номер вашего телефона.</div>';
	exit();
} else if(!isPhone($phone) == 'FALSE') {
	echo '<div class="error_message">Пожалуйста, введите корректный номер телефона</div>';
	exit();
 } else if(trim($phone) == '+7 916 680-64-10') {
	echo '<div class="error_message">Мы не перезваниваем по просьбе спаммеров и других мошенников.</div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message">Вы ввели неверный e-mail адрес. Попробуйте ещё раз.</div>';
	exit();
} else if((trim($email) == 'maksim224@mail.ru')OR(trim($email) == 'Ronan330981@mail.ru')OR(trim($email) == 'myssoliniya@mail.ru')OR(trim($email) == 'regiyu@inbox.ru')OR(trim($email) == 'ella.pavlikova@yandex.ru')OR(trim($email) == 'sunnaq@mail.ru')OR(trim($email) == 'mariana.skvortsovskaya@yandex.ru')OR(trim($email) == 'jaclkmy@mail.ru')OR(trim($email) == 'svinya.svintus@yandex.ru')OR(trim($email) == 'darinaseotext@i.ua')OR(trim($email) == 'micky_catignani82@rambler.ru')OR(trim($email) == 'fsb-sasai@secmail.pro')) {
	echo '<div class="error_message">Ваш адрес в черном списке.</div>';
	exit();
} else if((trim($comments) == 'Сообщение')OR(trim($comments) == '')) {
	echo '<div class="error_message">Напишите ваше сообщение <a href=#mail title="Как быстро получить ответ?">Что написать?</a></div>';
	exit();
} else if(mb_strlen($comments) > 300) {
   echo '<div class="error_message">Пожалуйста, пишите кратко ваши пожелания.</div>';
	exit();

}else  if (isset($recaptcha_data->success) && $recaptcha_data->success === FALSE) {
echo '<div class="error_message">Вы не похожи на человека</div>';
	exit();

}
else if (!preg_match ("/href|url|базы|ба3ы|данных|Рассылки|МИИТа|липовый|Регистрация|Свитмода|трикотаж|ключ|недорого|Bitrix|недвижимость|Предлагаем|домофон|Прокип|продукт|продвижение|контактным-формам|kontakt-forma|питание|СПОРТПИТ|поставщик|DedicateT|ВЫИГРАЛИ|qанных|bazy|dannyh|http|https|www|.ru|.com|.cn|.net|bit.ly|.info|.ly|.org/i", $comments))  {
//ссылок не найдено,
}
else {
die('<div class="error_message">Спам и ссылки запрещены. <a href=#spam title="Обработка писем">Подробнее</a></div>'); //убиваем скрипт и выводим сообщение
}


if (!preg_match ("/Перезвоните|перезвоните|позвоните|Позвоните/i", $comments))  {
//ссылок не найдено,
}
else {
die('<div class="error_message">Мы не перезваниваем. <a href=#spam title="Правила"> Подробнее</a></div>'); //убиваем скрипт и выводим сообщение
}

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "example@themeforest.net";
$address = "office@lux-escort.com";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'missbliss.ru/contact Москва ' . $name . '.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "Из Москвы: $name" . PHP_EOL . PHP_EOL;

$e_reply = "E-mail: $email\r\n Телефон: $phone";
$e_content = "Сообщение:\r\n$comments" . PHP_EOL . PHP_EOL;


$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );


$headers = "From: $address" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" .  PHP_EOL;


if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Спасибо, <strong>$name</strong></h1>";
	echo "<p>Ваше сообщение будет доставлено нам в течении одной минуты.<br>Мы постараемся вам ответить как можно быстрее.</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'ERROR!';

}
?>
