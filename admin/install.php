<?php

/*
 * Install script for admin panel
 * this script create database table
*/

include_once 'options.php';

$db->connect();

$img_table_name= $imgtb['name'];
$logo_table_name = $logotb['name'];
$events_table_name = $eventstb['name'];
$reserveds_table_name = $reservedsstb['name'];
$second_img_table_name = $simgtb['name'];

/* Images table create */

$db->query("CREATE TABLE $img_table_name (
  id INT AUTO_INCREMENT,
  url CHAR(100),
  PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci");

echo "Таблица IMG добавлена <br>";
/* Logo's table create */

$db->query("CREATE TABLE $logo_table_name (
  id INT AUTO_INCREMENT,
  url CHAR(100),
  PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci");

echo "Таблица LOGO добавлена <br>";

/* Event's table create */

$db->query("CREATE TABLE $events_table_name (
  id INT AUTO_INCREMENT,
  date CHAR(25),
  price CHAR (25),
  time CHAR (25),
  PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci");

echo "Таблица EVENTS добавлена <br>";

/* Reserved's table create */

$db->query("CREATE TABLE $reserveds_table_name (
  id INT AUTO_INCREMENT,
  name CHAR(25),
  phone CHAR (25),
  email CHAR (25),
  bkey INT(11),
  count INT(11),
  PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci");

echo "Установка завершена <br>";

$db->disconnect();


?>