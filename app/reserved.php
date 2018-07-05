<?php
/**
 * Create event
 */

include_once '../admin/options.php';

$msg='';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $recaptcha=$_POST['g-recaptcha-response'];
    if(!empty($recaptcha))
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=6LeGZg0UAAAAALK95LWsDpJFjJHrOJDun0dhgA7K&response='.(array_key_exists('g-recaptcha-response', $_POST) ? $_POST["g-recaptcha-response"] : '').'&remoteip='.$_SERVER['REMOTE_ADDR'];
        $res = json_decode(file_get_contents($url), true);

        if($res['success'])
        {
            $cah_code = CHA();
            $reserveds_tb_name = $reservedsstb['name'];

            $name = $_POST['res_name'];
            $phone = $_POST['res_phone'];
            $email = $_POST['res_mail'];
            $bkey = $_POST['bkey'];
            $count = $_POST['count'];

            $db->connect();
            $db->query("INSERT  INTO `$reserveds_tb_name` (`id`, `name`, `phone`, `email`, `bkey`, `count`) VALUES ('null',  '$name', '$phone', '$email','$bkey', '$count')");
            $list = $db->query("SELECT date,time FROM events WHERE id = $bkey");
            $db->disconnect();

            $date = 0;
            $time = 0;

            while ($row = $list->fetch_array(MYSQLI_NUM)) {
                $date = $row[0];
                $time = $row[1];
            }

            echo "Спасибо, место забронировано";

            $to      =  $email;
            $subject = 'Бронирование amnesiya.ru';
            $message = 'Произведено бронирование на имя ' . $name . "\r\n" . "Телефон: " . $phone . "\r\n" . "E-mail: " . $email . "\r\n" . "Кол-во человек: " . $count . ";"
                . "Дата: " . $date . ";". "\r\n"
                . "Время: " . $time . ";"
            ;

            $headers = 'From: webmaster@amnesiya.com' . "\r\n" .
                'Reply-To: webmaster@amnesiya.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            $to      = 'amnesiya-aqua@yandex.ru';
            $subject = 'Бронирование amnesiya.ru';

            $message = 'Произведено бронирование на имя ' . $name . "\r\n" . "Телефон: " . $phone . "\r\n" . "E-mail: " . $email . "\r\n" . "Кол-во человек: " . $count . ";"
                . "Дата: " . $date . ";". "\r\n"
                . "Время: " . $time . ";"
            ;

            mail($to, $subject, $message, $headers);

        }
        else
        {
            echo "Пожалуйста повторите ввод reCAPTCHA";
        }

    }
    else
    {
        echo "Пожалуйста повторите ввод reCAPTCHA";
    }

}

?>