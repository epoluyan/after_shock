<?php

include_once 'options.php';

$img_path = $imgtb['path'];
$logo_path = $logotb['path'];

$types = array('image/gif', 'image/png', 'image/jpeg');
$size_img = 1024000;
$size_logo = 512000;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'image')
{
    if (!in_array($_FILES['picture']['type'], $types)) die('Запрещённый тип файла. <a href="/admin/auth.php?mode=login">Попробовать другой файл?</a>');
    if ($_FILES['picture']['size'] > $size_img) die('Слишком большой размер файла. <a href="/admin/auth.php?mode=login">Попробовать другой файл?</a>');

    $cah_code = CHA();
	if (!@copy($_FILES['picture']['tmp_name'], $img_path.$cah_code.$_FILES['picture']['name']))
		echo 'Что-то пошло не так';
	else {
		echo 'Фото загружено<br>';

		$file_name = $cah_code.$_FILES['picture']['name'];

		$db->connect();
		$db->query("INSERT  INTO `img` (`id`, `url`) VALUES ('null',  '$file_name')");
        $db->disconnect();
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'logo')
{
    if (!in_array($_FILES['logo']['type'], $types)) die('Запрещённый тип файла. <a href="/admin/auth.php?mode=login">Попробовать другой файл?</a>');
    if ($_FILES['logo']['size'] > $size_logo) die('Слишком большой размер файла. <a href="/admin/auth.php?mode=login">Попробовать другой файл?</a>');

    $cah_code = CHA();
    if (!@copy($_FILES['logo']['tmp_name'], $logo_path.$cah_code.$_FILES['logo']['name']))
        echo 'Что-то пошло не так';
    else {
        echo 'Фото загружено<br>';

        $file_name = $cah_code.$_FILES['logo']['name'];

        $db->connect();
        $db->query("INSERT  INTO `logo` (`id`, `url`) VALUES ('null',  '$file_name')");
        $db->disconnect();
    }
}

//header("Location: ".$_SERVER['HTTP_REFERER']);

?>