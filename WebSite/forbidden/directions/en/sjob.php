<?php

$token=filter_input(INPUT_POST, 'token', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (!empty($token)) {
        if (hash_equals($_SESSION['token'], $token)) {
            /* The Following to get response back from Google recaptcah */
            $url="https://www.google.com/recaptcha/api/siteverify";
			$secretKey="6LfuQ2gUAAAAAC9Mr4FnnoG2cN4V2GDckkG7khbP";

            $remoteServer=filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_SANITIZE_URL);
            $response= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
            $recaptcha_data=json_decode($response);
            /* The actual check of the recaptcha */
            if (isset($recaptcha_data->success) && $recaptcha_data->success === TRUE) {
                $data['name']=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $data['email']=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $data['phone']=filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $data['comments']=filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $send=new Email($data);
            } else {
                $success="You're not a human!"; // Not of a production server:
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

	$phone=preg_replace('/\s|\+|-|\(|\)/','', $phone); // удалим пробелы, и прочие не нужные знаки

	if(is_numeric($phone))
	{
		if(strlen($phone) < 9) // если длина номера слишком короткая, вернем false
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

$name    =$_POST['name'];
$email   =$_POST['email'];
$phone   =$_POST['phone'];
$comments=$_POST['comments'];


if(trim($name) == 'Name') {
	echo '<div class="error_message">What is your name?</div>';
	exit();
} else if(trim($email) == 'E-mail') {
	echo '<div class="error_message">Please enter your e-mail</div>';
	exit();
} else if(trim($phone) == '') {
	echo '<div class="error_message">Please enter your phone number.</div>';
	exit();
} else if(!isPhone($phone) == 'FALSE') {
	echo '<div class="error_message">Please enter a valid phone number</div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message">You have enter an invalid e-mail address, try again</div>';
	exit();
} else if((trim($comments) == 'Your brief CV')OR(trim($comments) == '')) {
	echo '<div class="error_message">Please enter your brief CV.</div>';
	exit();
}
else if (!preg_match ("/href|url|http|https|www|.ru|.com|.net|.info|.org/i", $comments)) {
//ссылок не найдено,
} else {
die('<div class="error_message">SpamFilter - Links are not allowed</div>'); //убиваем скрипт и выводим сообщение
}

if(get_magic_quotes_gpc()) {
	$comments=stripslashes($comments);
}


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address="joe.doe@yourdomain.com";

//$address="example@themeforest.net";
$address="casting@lux-escort.com";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject='$name . ' has contacted you via Your Website.';

$e_subject='from missbliss.ru/en/casting/ St-Petersburg' . $name . '.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body="Newbies from St Petersburg, Russia: $name" . PHP_EOL . PHP_EOL;

$e_reply="E-mail: $email\r\n Phone: $phone";
$e_content="Message\r\n$comments" . PHP_EOL . PHP_EOL;


$msg=wordwrap( $e_body . $e_content . $e_reply, 70 );


$headers="From: $address" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" .  PHP_EOL;


if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Thank you <strong>$name</strong></h1>";
	echo "<p>Your message has been submitted to us.<br>We will reply to you as soon as possible</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'ERROR!';

}
?>
