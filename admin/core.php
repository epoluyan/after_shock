<link type="text/css" rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script>
	$(function () {
		$("#datepicker").datepicker({
			inline: true,
			changeYear: true,
			changeMonth: true
		});

		jQuery(function ($) {
			$.datepicker.regional['ru'] = {
				closeText: 'Закрыть',
				prevText: '&#x3c;Пред',
				nextText: 'След&#x3e;',
				currentText: 'Сегодня',
				monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
					'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
				monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
					'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
				dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
				dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
				dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
				weekHeader: 'Нед',
				dateFormat: 'dd.mm.yy',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: ''
			};
			$.datepicker.setDefaults($.datepicker.regional['ru']);
		});


		$( "#datepicker" ).datepicker( "option", "dateFormat", "DD, d MM, yy" );

	});

	function imageView() {
		$("#images").addClass("view-active");

		$("#logos").removeClass("view-active");
		$("#events").addClass("view-deactive");
	}

	function logoView() {
		$("#logos").addClass("view-active");

		$("#images").removeClass("view-active");
		$("#events").addClass("view-deactive");
	}

	function eventView() {
		$("#events").removeClass("view-deactive");

		$("#images").removeClass("view-active");
		$("#logos").removeClass("view-active");
	}
	

</script>

<?php

/* Admin core */

/* Update Settings */
include_once 'options.php';
include_once 'calendar.php';
$img_path = $imgtb['path'];
$logo_path = $logotb['path'];

/* Main admin function*/
function admin_func() {

	echo "<div class='admin_panel'>
	<a class='logout' href='?mode=logout'>Выйти</a>
	<a class='link' href='#' onclick='imageView()'>Изображения</a>
	<a class='link' href='#' onclick='imageView2()'>Изображения 2</a>
	<a class='link' href='#' onclick='logoView()'>Логотипы</a>
	<a class='link' href='#' onclick='eventView()'>Бронирование</a>
	</div>";
	echo "<div class='admin_content'>";
	//echo "<h1 style='text-align: center; padding-top: 300px;'>Добро пожаловать в панель управления сайтом, <br>выберите пункт меню для продолжения</h1>";
	get_img();

	get_logo();


	echo " 
	<div id='events' class='container events'>
	<h2>Система бронирования:</h2>";
	get_events();
	echo "<h3 style='text-align: center'>Добавить новое событие:</h3>
	<form method='post' action='create.php'>
	<p>Время: <input name='time' type='time'></p>
	<p>Цена: <input name='price' type='text'></p>
	<p>День проведения: <input name='date' type='text' id='datepicker'></p>
	<input type='submit' value='Создать''>
	</form>
	</div>
	";

	echo "</div>";
}

/* Function return all images */
function get_img() {

	global $img_path;
	global $db, $imgtb;

	$imgtb_name = $imgtb['name'];

	$db->connect();
	$list = $db->query("SELECT id,url FROM $imgtb_name ORDER BY id");
	$db->disconnect();

	echo "<section id='images' class='container images'>";
	echo "<h2 style='text-align: center'>Изображения</h2>";
	while($row = $list->fetch_array(MYSQLI_NUM)) {
		echo "<div class='col-sm-3'>";
		echo "<img width='200' src=".$img_path.$row[1].">";
		echo "<button title='Удалить' onclick='delete_img(".$row[0].")'>X</button>";
		echo "</div>";
	}
	echo " 
 		<div class='col-sm-12'>
		<form enctype='multipart/form-data' method='post' action='upload.php'>
		<input name='type' type='hidden' value='image'>
		<div title='Добавить' class='up-file'><input id='image-up' name='picture' accept='image/jpeg,image/png,image/gif' type='file'></div>
		<output id='preview'></output>
		<div class='alert-msg'>Размер загружаемого изображения не должен превышать 1 МБ</div>
		<input type='submit' value='Добавить''>
		</form></div>";
	echo "</section>";

	return $list;
}

function get_logo() {

global $logo_path;
global $db,$logotb;

	$logotb_name = $logotb['name'];

	$db->connect();
	$list = $db->query("SELECT id,url FROM $logotb_name ORDER BY id");
	$db->disconnect();

	echo "<section id='logos' class='container logos'>";
	echo "<h2 style='text-align: center'>Логотипы</h2>";
	while($row = $list->fetch_array(MYSQLI_NUM)) {
		echo "<div class='col-sm-3'>";
		echo "<img width='200' height='120' src=".$logo_path.$row[1].">";
		echo "<button onclick='delete_logo(".$row[0].")'>X</button>";
		echo "</div>";
	}
	echo " 
 		<div class='col-sm-12'>
		<form enctype='multipart/form-data' method='post' action='upload.php'>
		<input name='type' type='hidden' value='logo'>
		<div title='Добавить' class='up-file'><input name='logo' accept='image/jpeg,image/png,image/gif' type='file'></div>
		<div class='alert-msg'>Размер загружаемого изображения не должен превышать 512 kB</div>
		<input type='submit' value='Добавить''>
		</form>
		</div>
	";
	echo "</section>";

	return $list;
}

function get_events() {

	global $db, $eventstb;
	$eventstb_name = $eventstb['name'];

	$db->connect();
	$list = $db->query("SELECT id, date, price, time FROM $eventstb_name ORDER BY id");
	$db->disconnect();

	echo "<div class='container'>";
	echo "<h3>События:</h3>";
	while($row = $list->fetch_array(MYSQLI_NUM)) {
		echo "<div class='row event_info'>";
		echo "<div class='col-sm-3'>$row[1]</div>";
		echo "<div class='col-sm-3'>$row[2]</div>";
		echo "<div class='col-sm-3'>$row[3]</div>";
		echo "<div class='col-sm-3'><button onclick='delete_event(".$row[0].")'>Удалить</button></div>";
		echo "<div class='col-sm-3'>".reserveds_list($row[0])."</div>";
		echo "</div>";
	}
	echo "</div>";

	return $list;
}

function reserveds_list($key) {
	echo "<div class='col-sm-12 reserveds'>";
	echo "<h5>Забронировали:</h5>";
	echo "<div class='row'>";
	echo "<div class='col-sm-2' style='font-weight: bold; margin-bottom: 20px'>Имя</div>";
	echo "<div class='col-sm-2' style='font-weight: bold;margin-bottom: 20px'>Телефон</div>";
	echo "<div class='col-sm-2' style='font-weight: bold;margin-bottom: 20px'>E-mail</div>";
	echo "<div class='col-sm-2' style='font-weight: bold;margin-bottom: 20px'>Кол-во</div>";
	echo "<div class='col-sm-12'>&nbsp;&nbsp;&nbsp;&nbsp;</div>";
	global $db, $reservedsstb;
	$reservedsstb_name = $reservedsstb['name'];

	$db->connect();
		$list = $db->query("SELECT id, name, phone, email, count FROM $reservedsstb_name WHERE bkey = $key");
		$db->disconnect();
		while ($row = $list->fetch_array(MYSQLI_NUM)) {
			echo "<div class='col-sm-2'>$row[1]</div>";
			echo "<div class='col-sm-2'>$row[2]</div>";
			echo "<div class='col-sm-2'>$row[3]</div>";
			echo "<div class='col-sm-2'>$row[4]</div>";
			echo "<div class='col-sm-4'><button onclick='delete_res(".$row[0].")'>Снять</button></div>";
		}
	//}
	echo "</div>";
	echo "</div>";
}

?>


<script type="text/javascript">

	function delete_res(delete_id) {
		$.post(
			"delete.php", {
				type: 'res',
				id: delete_id,
			},
			onAjaxSuccess
		);

		function onAjaxSuccess(data)
		{
			alert('Бронирование снято');
			location.reload();
		}
	}

	function delete_img(delete_id) {
		$.post(
		  "delete.php", {
			type: 'image',
		    id: delete_id,
		  },
		  onAjaxSuccess
		);
		 
		function onAjaxSuccess(data)
		{
		  alert('Изображение удалено');
		  location.reload();
		}
	}

	function delete_logo(delete_id) {
		$.post(
			"delete.php",
			{
				type: 'logo',
				id: delete_id,
			},
			onAjaxSuccess
		);

		function onAjaxSuccess(data)
		{
			alert('Логотип удален');
			location.reload();
		}
	}

	function delete_event(delete_id) {
		$.post(
			"delete.php",
			{
				type: 'event',
				id: delete_id,
			},
			onAjaxSuccess
		);

		function onAjaxSuccess(data)
		{
			alert('Событие удалено');
			location.reload();
		}
	}
</script>