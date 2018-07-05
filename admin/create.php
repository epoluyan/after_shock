<?php
/**
 * Create event
 */

include_once 'options.php';

header("Location: ".$_SERVER['HTTP_REFERER']);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $cah_code = CHA();
    $events_tb_name = $eventstb['name'];

    $time = $_POST['time'];
    $date = $_POST['date'];
    $price = $_POST['price'];

    $db->connect();
    $db->query("INSERT  INTO `$events_tb_name` (`id`, `date`, `price`, `time`) VALUES ('null',  '$date', '$price', '$time')");
    $db->disconnect();

}