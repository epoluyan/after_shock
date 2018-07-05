<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <title>Квест-Сундук</title>
    <link rel="stylesheet" href="assets/stylesheets/styles.css" type="text/css">
	<!-- CSS Plugins -->
    <link href="css/plugins/animate.css" rel="stylesheet">
    <link href="css/plugins/lightbox.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"/>
    <link rel="stylesheet" href="css/camera.css"/>
    <link href="sass/easy.css" rel="stylesheet">

    <!-- CSS Custom -->
    <link href="css/style.css" rel="stylesheet">
    <link href="preview/preview.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/colorbox.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="classic" data-spy="scroll" data-target=".scrollspy_menu">
<?php
/* Update Settings */
include_once '../admin/options.php';
$logo_path = '../admin/'.$logotb['path'];
$img_path = '../admin/'.$imgtb['path'];

$imgtb_name = $imgtb['name'];
$logotb_name= $logotb['name'];

function img_view() {

    global $img_path;
    global $db;
    global $imgtb_name;

    $db->connect();
    $list = $db->query("SELECT id,url FROM $imgtb_name ORDER BY id");
    $db->disconnect();

    while($row = $list->fetch_array(MYSQLI_NUM)) {
        echo "<div data-src=".$img_path.$row[1]."></div>";
    }

    return $list;
}

function logo_view() {

    global $logo_path;
    global $db;
    global $logotb_name;

    $db->connect();
    $list = $db->query("SELECT id,url FROM $logotb_name ORDER BY id");
    $db->disconnect();

    while($row = $list->fetch_array(MYSQLI_NUM)) {

        echo "<div class='client col-sm-2'>
                    <img src='".$logo_path.$row[1]."'>
                </div>
                ";

    }

    return $list;
}
?>
<div class="navbar navbar-default navbar-fixed-top scrollspy_menu navbar__initial" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse text-center">
					<ul class="fullpage__nav nav navbar-nav">
						<li class="active"><a href="#welcome">Главная</a></li>
						<li><a href="#who">Кто мы</a></li>
						<li><a href="#what">Что это</a></li>
                        <li><a href="#benefits">Преимущества</a></li>
                        <li><a href="#models">Модельный ряд</a></li>
						<li><a href="#characteristics">Характеристики</a></li>
                        <li><a href="#photo">Фото</a></li>
                        <li><a href="#legend">Легенда</a></li>
						<li><a href="#areas">Применение</a></li>
						<!--<li><a href="#why">Почему нам стоит доверять</a></li>-->
						<li><a href="#clients">Клиенты</a></li>
						<li><a href="#antifran">Франшиза</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
    <section id="welcome" class="page_block block_1">
            <header class="container-fluid">
			<div class="row">
                <a class="logo flex_wrap"></a>
                <h1 class="block__text" style="margin: 0; padding: 0;">квест в коробке</h1>
				</div>
            </header>
            <main class="content container-fluid"></main>
            <footer class="footer container">
                <div class="col-lg-12">
                    <p class="block__text flex_wrap" style="text-align:center;">мы сделали процесс организации<br>
                        выездного квеста максимально простым</p>
                </div>
                <div class="col-lg-12 main-form" style="margin-top:60px">
					<form action="" class="formsend">
						<input class="form-control" name="name" type="text" placeholder="Имя">
						<input class="form-control" name="phone" type="text" placeholder="Телефон">
						<input class="form-control" name="email" type="text" placeholder="E-mail">
						<button type="submit" class="btn btn-danger btn-lg">Получить презентацию</button>
					</form>
                </div>
            </footer>
    </section>
    <section id="who" class="page_block block_2">
            <header class="container">
                <h2 class="block__text"><b>Кто мы такие?</b></h2>
                <p class="block__text content__block">Мы, команда профессионалов, занимающаяся организацией выездных квестов с 2015 года.</p>
				
            </header>
        <section id="why_quest" class="page_block block_4 new_block_1">
            <header class="container">
                <h2 class="block__text"><b>Почему выездные квесты?</b></h2>
            </header>
            <main class="content content__block container">
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text"><b>Свободный<br>рынок</b></p>
                    </div>
                    <p class="after_wood_ellipse">молодое направление<br>на рынке развлечений</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text"><b>Отсутствие<br>
                        постоянных<br>
                        трат</b></p>
                    </div>
                    <p class="after_wood_ellipse">без аренды, без<br>зарплат персонала</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text" style="padding-top: 5px;"><b>Быстрый<br>
                        старт</b></p>
                    </div>
                    <p class="after_wood_ellipse">начать свой бизнес можно<br>буквально за неделю</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-sm-4 col-sm-offset-2">
                    <div class="wood_ellipse">
                        <p class="ellipse__text" style="margin-top: 30px;"><b>Перспективы</b></p>
                    </div>
                    <p class="after_wood_ellipse">Количество запросов на<br>
                    выездные квесты с 2016г.возросло<br>
                    в 3 раза и продолжает расти</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text"><b>Высокая<br>
                        маржиналь-<br>
                        ность</b></p>
                    </div>
                    <p class="after_wood_ellipse">Вы легко можете получать от<br>
                    20 000 руб чистой прибыли<br>
                    за один проведенный квест</p>
                </div>
            </main>
        </section>
        <section id="yandex_stat" class="page_block block_4 new_block_1">
            <header class="container">
                <h2 class="block__text"><b>Статистика из Яндекс WordStat:</b></h2>
            </header>
            <main class="content content__block container">
                <div class="col-lg-12 col-sm-12">
                    <a href="./img/yandex_stat.png" data-lightbox="image-1" data-title="Статистика">
                    <img src="./img/yandex_stat.png" width="100%" height="auto">
                </a>
                </div>
            </main>
        </section>
            <main class="content content__block container new_block_2">
				<h2 class="block__text"><b>Что мы предлагаем?</b></h2>
                <p class="block__text content__block">Мы предлагаем уникальное решение для Вашего бизнеса, которое позволит Вам привлечь новых клиентов и сохранить действующих. А если вы только начинаете свой собственный бизнес, то наша разработка позволит Вам зарабатывать до 96 000 рублей в месяц</p>
				<div class="col-lg-12 main-form" style="margin-top:60px">
					<form action="" class="formsend">
						<input class="form-control" name="name" type="text" placeholder="Имя">
						<input class="form-control" name="phone" type="text" placeholder="Телефон">
						<input class="form-control" name="email" type="text" placeholder="E-mail">
						<button type="submit" class="btn btn-danger btn-lg">Заказать обратный звонок</button>
					</form>
                </div>
			</main>
    </section>
    <section id="what" class="page_block block_3">
            <header class="container">
                <h2 class="block__text"><b>Что это такое?</b></h2>
                <p class="block__text content__block">Сундук Амнезия Изи - это готовое решение для Вашего бизнеса. Это полноценный выездной квест с различным набором загадок на компанию до 15 человек в одном дизайнерском многофункциональном сундуке.</p>
                <p class="block__text content__block">Это готовый упакованный бизнес без приобретения франшизы, который позволит вам заниматься организацией выездных квестов в Вашем городе с минимальной себестоимостью, минимальными трудозатратами и максимальной прибылью</p>
            </header>
            <main class="content content__block container">
                <h2 class="block__text"><b>Узнайте стоимость квест-сундука для своего региона сейчас</b></h2>
                 <div class="col-lg-12 main-form" style="margin-top:60px">
					<form action="" class="formsend">
						<input class="form-control" name="name" type="text" placeholder="Имя">
						<input class="form-control" name="phone" type="text" placeholder="Телефон">
						<input class="form-control" name="email" type="text" placeholder="E-mail">
						<button type="submit" class="btn btn-danger btn-lg">Узнать</button>
					</form>
                </div>
            </main>
            <footer class="footer container-fluid">
            </footer>
    </section>
    <section id="benefits" class="page_block block_4">
            <header class="container">
                <h2 class="block__text"><b>Преимущества</b></h2>
            </header>
            <main class="content content__block container">
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text"><b>Низкая<br>себестоимость<br>проведения квеста (до<br>3 000 руб.)</b></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text"><b>Простая<br>
                                и быстрая<br>
                                подготовка<br>
                                квеста к игре<br>
                                (40 минут)</b></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text" style="padding-top: 5px;"><b>Для<br>
                                проведения<br>
                                квеста нужен<br>
                                1 человек!</b></p>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-sm-4 col-sm-offset-2">
                    <div class="wood_ellipse">
                        <p class="ellipse__text"><b>Высокая<br>
                                маржи-<br>
                                нальность<br>
                                (до 15 000 руб.<br>
                                с проекта)</b></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="wood_ellipse">
                        <p class="ellipse__text"><b>Квест<br>
                                можно<br>
                                провести<br>
                                в любом<br>
                                месте</b></p>
                    </div>
                </div>
            </main>
    </section>
    <section id="models" class="page_block block_4 new_block_1">
            <header class="container">
                <h2 class="block__text"><b>Модельный ряд</b></h2>
            </header>
            <main class="content content__block container">
                <div class="col-lg-4 col-sm-4">
                    <p class="before_wood_ellipse">сундук<br>«Амнезия Изи»</p>
                    <div class="wood_ellipse model_ellipse_1"></div>
                    <p class="after_wood_ellipse">могут участвовать<br>
                    15-20 человек, выполнен<br>
                    из обожженного дерева,<br>
                    часовой механизм внутри</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <p class="before_wood_ellipse">сундук<br>«Амнезия Стандарт»</p>
                    <div class="wood_ellipse model_ellipse_2"></div>
                    <p class="after_wood_ellipse">могут участвовать<br>
                    15-20 человек, выполнен<br>
                    из фанеры, часовой<br>
                    механизм внутри</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <p class="before_wood_ellipse">сундук<br>«Амнезия Black»</p>
                    <div class="wood_ellipse model_ellipse_3"></div>
                    <p class="after_wood_ellipse">могут участвовать<br>
                    до 6 человек, выполнен<br>
                    из фанеры. часовой <br>
                    механизм внутри.</p>
                </div>
            </main>
    </section>
    <style>
    .characteristics_block .after_wood_ellipse {
        text-align: left;
    }
    .characteristics_block h4 {
        text-align: center;
        font-size: 30px;
    }
    </style>
    <section id="characteristics" class="page_block block_4 new_block_1 characteristics_block">
            <header class="container">
                <h2 class="block__text"><b>Характеристики</b></h2>
            </header>
            <main class="content content__block container">
                <div class="col-lg-4 col-sm-4">
                    <h4>сундук<br>«Амнезия Изи»</h4>
                    <p class="after_wood_ellipse">
                            -Габариты: 50 x 50 x 50<br>
                            -Три игровых стороны с пятью дверцами на каждой<br>
                            -В комплект входит сценарий на 3 команды игроков (15 - 20 человек)<br>
                            -Игра рассчитана на 1-1,5 часа<br>
                            -6 многосоставных загадок на каждую команду и 2 общие загадки<br>
                            -Предусмотрено место для установки дым-машины и переносной колонки/динамика <br>
                            -Квест подходит как для детей, так и для взрослых<br>
                            -Материал: обожженное дерево  <br>                          
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <h4>сундук<br>«Амнезия Стандарт»</h4>
                    <p class="after_wood_ellipse">
                        -Габариты: 50 x 50 x 50<br>
                        -Три игровых стороны с пятью дверцами на каждой<br>
                        -В комплект входит сценарий на 3 команды игроков (15 - 20 человек)<br>
                        -Игра рассчитана на 1-1,5 часа<br>
                        -6 многосоставных загадок на каждую команду и 2 общие загадки<br>
                        -Предусмотрено место для установки дым-машины и переносной колонки/динамика <br>
                        -Квест подходит как для детей, так и для взрослых<br>
                        -Материал: фанера  <br>  
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <h4>сундук<br>«Амнезия Black»</h4>
                    <p class="after_wood_ellipse">
                        -Габариты: 40 x 40 x 40<br>
                        -В комплект входит сценарий на 1 команду игроков (6 человек)<br>
                        -Игра рассчитана на 1-1,5 часа<br>
                        -8 многосоставных загадок<br>
                        -Предусмотрено место для установки дым-машины и переносной колонки/динамика <br>
                        -Квест подходит как для детей, так и для взрослых<br>
                        -Материал: фанера  <br>  
                    </p>
                </div>
            </main>
    </section>
	<section id="photo" style="padding-top: 75px; margin-top: -75px;">
    <div class="container-fluid">
        <div class="row">
            <div class="camera_wrap">
                    <div data-src="assets/img/new_ph_1.jpg"></div>
					<div data-src="assets/img/ph_1.jpg"></div>
					<div data-src="assets/img/ph_2.jpg"></div>
					<div data-src="assets/img/ph_3.jpg"></div>
					<div data-src="assets/img/ph_4.jpg"></div>
					<div data-src="assets/img/ph_5.jpg"></div>
					<div data-src="assets/img/ph_6.jpg"></div>
					<div data-src="assets/img/ph_7.jpg"></div>
				</div>
        </div>
		</div>
    </section>
    <section id="legend" class="page_block block_2 new_block_2">
            <header class="container">
                <h2 class="block__text"><b>Легенда квеста</b></h2>
            </header>
            <main class="content container">
                <p class="block__text content__block">Сегодня ночью из лабораторий Сколково был украден ценный
                        образец вирусного химического оружия для министерства обороны. 
                        Данная разработка может уничтожать целые города, если она попадет 
                        не в те руки. И, к сожалению, это случилось... По горячим следам опера-
                        тивная группа смогла выйти на след грабителей и оперативно обезвре-
                        дить их. Преступникам удалось установить часовой механизм на выброс
                        вируса в атмосферу. До детонирования осталось 1,5 часа.</p>
			</main>
    </section>
    <section id="mechannics" class="page_block block_2 new_block_2">
        <header class="container">
            <h2 class="block__text"><b>Механика игры</b></h2>
        </header>
        <main class="content container">
            <p class="block__text content__block">Общая механика игры такова:<br>
                    - сундук - это место сбора команд.<br>
                    - Общее количество игроков делятся на три команды (максимальное количество 15 человек)<br>
                    - У сундука три игровых стороны. На каждой стороне находятся дверцы. Каждая дверца закрыта либо на кодовый замок, либо на навесной.<br>
                    - По легенде сам сундук - это часовая бомба, которая сдетонирует через 1 час и 20 минут.<br>
                    - Чтобы открыть основную крышку сундука и обезвредить его, необходимо открыть все дверцы.<br>
                    - Команды выполняют задания, разгадывают загадки и открывают дверцы. Загадки разнообразные и интересные.<br>
                    - После того как все команды открыли все дверцы, они совмещают найденное воедино и понимают как открыть основную крышку.<br>
                    - Открывают крышку и видят поле пятнашек. Под некоторыми из них есть пустые отверстия.<br>
                    Там находятся ключи от пятнашек. Рукой ключи не достать. Игроки магнитами достают ключи и снимают поле пятнашек.<br>
                    - Игроки видят таймер и контакты, которые необходимо соединить правильным образом. Решают эту задачу и отключают таймер. Все спасены.<br>
                    В сундук устанавливается дым-машина (можно периодически подавать дым во время игры и в финале)
                    Также в сундук устанавливается колонка с фоновой музыкой для создания атмосферы.<br><br>
                    
                    Маршрут следования команд по контрольным точкам:<br>
                    Команда 1: 1 2 3 4 5 6 финал<br>
                    Команда 2: 3 4 5 6 1 2 финал<br>
                    Команда 3: 5 6 1 2 3 4 финал<br>
                    </p>
        </main>
</section>
<section id="cheme" class="page_block block_4 new_block_1">
        <header class="container">
            <h2 class="block__text"><b>Схема следования команд<br>по контрольным точкам</b></h2>
        </header>
        <main class="content content__block container">
            <div class="col-sm-offset-2 col-sm-8">
                <img src="./img/cheme.png" width="100%" height="auto">
            </div>
        </main>
    </section>
    <section id="areas" class="page_block block_7">
        <header class="container-fluid">
        </header>
        <main class="content content__block container-fluid">
            <div class="big_ellipse">
                <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-3 col-xs-12">
                        <div class="ellipse__img ellipse__img_1"></div>
                        <p class="ellipse__text">реалити-<br>
                            квесты</p>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="ellipse__img ellipse__img_2"></div>
                        <p class="ellipse__text">event-<br>
                            агентства</p>
                    </div>
                </div>
                <div class="row" style="padding-top: 60px;">
                    <div class="col-sm-3 col-sm-offset-2 col-xs-12">
                        <div class="ellipse__img ellipse__img_3"></div>
                        <p class="ellipse__text">праздничные<br>
                            агентства</p>
                    </div>
                    <div class="col-sm-2 ellipse__text__middle">
                        <p class="ellipse__text" style="padding-top: 100px"><b>Области<br>применения</b></p>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="ellipse__img ellipse__img_4"></div>
                        <p class="ellipse__text">свадебные<br>
                            агентства</p>
                    </div>
                </div>
                <div class="row" style="padding-top: 45px;">
                    <div class="col-sm-3 col-sm-offset-3 col-xs-12">
                        <div class="ellipse__img ellipse__img_5"></div>
                        <p class="ellipse__text">базы отдыха</p>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="ellipse__img ellipse__img_6"></div>
                        <p class="ellipse__text">парки отдыха</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                        <div class="ellipse__img ellipse__img_7"></div>
                        <p class="ellipse__text">торговые и<br>
                            развлекательные<br>
                            центры</p>
                    </div>
                </div>
                </div>
            </div>
        </main>
    </section>
    <section class="page_block block_8">
        <header class="container-fluid">
        </header>
        <main class="content content__block container-fluid">
            <div class="big_ellipse">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-xs-12">
                            <div class="ellipse__img ellipse__img_8"></div>
                            <p class="ellipse__text">рестораны</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 60px;">
                        <div class="col-lg-3 col-lg-offset-2 col-xs-12">
                            <div class="ellipse__img ellipse__img_9"></div>
                            <p class="ellipse__text">кальянные</p>
                        </div>
                        <div class="col-lg-2 ellipse__text__middle">
                            <p class="ellipse__text" style="padding-top: 100px"><b>Области<br>применения</b></p>
                        </div>
                        <div class="col-lg-3 col-xs-12">
                            <div class="ellipse__img ellipse__img_10"></div>
                            <p class="ellipse__text">антикафе</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 45px;">
                        <div class="col-lg-3 col-lg-offset-2 col-xs-12">
                            <div class="ellipse__img ellipse__img_11"></div>
                            <p class="ellipse__text">лофты</p>
                        </div>
                        <div class="col-lg-3 col-lg-offset-2 col-xs-12">
                            <div class="ellipse__img ellipse__img_12"></div>
                            <p class="ellipse__text">кафе</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-xs-12">
                            <div class="ellipse__img ellipse__img_13"></div>
                            <p class="ellipse__text">бары</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <section id="partners_program" class="page_block block_2 new_block_3">
<header class="container">
    <h2 class="block__text"><b>Партнерская программа</b></h2>
</header>
<main class="content container">
    <p class="block__text content__block">Также, у нас действует партнерская программа, по которой вы можете
        пассивно заработать, просто рассказав о нашем готовом квесте в сундуке
    </p>
    <div class="col-lg-4 col-sm-4">
        <div class="wood_ellipse">
            <p class="ellipse__text"><b>Амнезия<br>Изи</b></p>
        </div>
        <p class="after_wood_ellipse">Если от Вас приходит<br>
            клиент на сундук<br>
            "Амнезия Изи",<br>
            то мы выплачиваем<br>
            Вам 4700 руб
        </p>
    </div>
    <div class="col-lg-4 col-sm-4">
        <div class="wood_ellipse">
            <p class="ellipse__text"><b>Амнезия<br>Стандарт</b></p>
        </div>
        <p class="after_wood_ellipse">Если от Вас приходит<br>
            клиент на сундук<br>
            "Амнезия Стандарт",<br>
            то мы выплачиваем<br>
            Вам 3000 руб
        </p>
    </div>
    <div class="col-lg-4 col-sm-4">
        <div class="wood_ellipse">
            <p class="ellipse__text"><b>Амнезия<br>black</b></p>
        </div>
        <p class="after_wood_ellipse">Если от Вас приходит<br>
            клиент на сундук<br>
            "Амнезия black",<br>
            то мы выплачиваем<br>
            Вам 2000 руб
        </p>
    </div>
</main>
</section>
    <section id="why" class="page_block block_9">
        <header class="container">
            <h2 class="block__text"><b>Почему нам стоит доверять?</b></h2>
        </header>
        <main class="content content__block container">
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>Более<br>
                            4 лет<br>
                            строительства<br>
                            реалити -<br>
                            квестов</b></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>Более<br>
                            200<br>
                            проведенных<br>
                            выездных<br>
                            квестов</b></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text" style="padding-top: 20px;"><b>Более<br>
                            1500<br>
                            довольных<br>
                            игроков</b></p>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-2">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>Более<br>
                            2 лет<br>
                            организации<br>
                            выездных<br>
                            квестов</b></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>Более 250<br>
                            написанных<br>
                            сценариев для<br>
                            выездных<br>
                            квестов</b></p>
                </div>
            </div>
        </main>
    </section>
    <section id="clients" class="page_block block_10" style="margin-top: 0;">
        <header class="container">
            <h2 class="block__text"><b>Наши клиенты</b></h2>
        </header>
        <main class="content container-fluid">
            <div class="row">
                <div class="clients container-fluid">
                    <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <?php 
                            logo_view();
                        ?>
                    </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <section id="hard" class="page_block block_11">
        <header class="container">
            <h2 class="block__text"><b>Трудности с которыми<br>сталкиваются организаторы<br>выездных квестов</b></h2>
        </header>
        <main class="content content__block container">
            <p class="block__text">- Высокая себестоимость проекта. В выездных квестах учавствует большое количество персонала, большое количество  мелкого реквизита.</p>
            <p class="block__text">- Долгая и трудная подготовка к проекту. Для того что бы подготовить выездной квест требуется от 2 до 5 дней. Время уходит на то, что бы собрать весь необходимый реквизит, договориться с аниматорами. Время уходит на изучение площадки, адаптацию сценария, согласование всех вопросов с площадкой.</p>
            <p class="block__text">- Большое количество персонала на проекте. На стандартный выездной квест на каждую игровую точку приходится по одному аниматору. В итоге, если в игре, к примеру, 7 точек, то соответсвенно необходимо 7 аниматоров. Также для проведения нужен менеджер проекта, который занимается подготовкой и проведением проекта "под ключ"</p>
            <p class="block__text">- Низкая маржинальность. Ввиду вышеперечисленных условий, а также непредвиденных условий, маржинальность проекта может получится крайне низкой.</p>
            <p class="block__text">- Невозможность провести квест на некоторых площадках. Есть площадки, на которых ввиду технических особенностей, квест провести невозможно.</p>
        </main>
    </section>
    <section class="page_block block_12">
        <header class="container">
            <h2 class="block__text"><b>квест - сундук "Амнезия Изи" это:</b></h2>
        </header>
        <main class="content content__block container">
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>дешево</b></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>быстро</b></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>просто</b></p>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-2">
                <div class="wood_ellipse">
                    <p class="ellipse__text"><b>прибыльно</b></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wood_ellipse">
                    <p class="ellipse__text" style="padding-top:30px;"><b>в любом<br>месте</b></p>
                </div>
            </div>
        </main>
    </section>
    <section class="page_block block_13">
        <header class="container">
            <h2 class="block__text">Оставьте заявку сейчас<br> и получите дополнительный<br><b>сценарий выездного квеста</b><br>стоимостью <b>10 000 руб бесплатно</b></h2>
        </header>
        <main class="content content__block container">
            <div class="col-lg-12 main-form" style="margin-top:60px">
					<form action="" class="formsend">
						<input class="form-control" name="name" type="text" placeholder="Имя">
						<input class="form-control" name="phone" type="text" placeholder="Телефон">
						<input class="form-control" name="email" type="text" placeholder="E-mail">
						<button type="submit" class="btn btn-danger btn-lg">Получить презентацию</button>
					</form>
                </div>
        </main>
    </section>
    <section id="antifran" class="page_block block_13 new_block_4 new_block_2">
    <header class="container">
    <h2 class="block__text"><b>Хотите свой бизнес выездных квестов?</b></h2>
    <h3 class="block__text"><b>Приобретите нашу Анти франшизу и<br>
            зарабатывайте от 300 000 руб/мес</b></h3>
    </header>
    <main class="content container">
    <p class="block__text content__block">Анти франшиза - это готовый бизнес, проверенный опытом и практикой без ежемесячных выплат (роялти) и низким паушальным взносом. Без жестких рамок и ограничений в Вашем бизнесе. Полная свобода действий. 
        Вы работаете и развиваете Ваш собственный бренд по нашей бизнес-модели
    </p>
    </main>
    <header class="container">
        <h2 class="block__text"><b>Что входит?</b></h2>
    </header>
    <main class="content container">
        <p class="block__text content__block" style="text-align:center">
                8 сценариев выездных квестов<br>
                Готовый сайт<br>
                Настроенный яндекс директ<br>
                Инструкция по запуску направления<br>
                Описание всех бизнес процессов<br>
                Список необходимого реквизита для закупок и изготовления<br>
                Рекомендации по сбору персонала, его обучению и т.д.<br>
                Рекомендации по ведению социальных сетей и привлечению лидов.
        </p>
    </main>
    <header class="container">
            <h2 class="block__text auto_width_block"><b>Подробнее об Анти Франшизе можно узнать здесь:</b><a class="ellipse_link" href="/anti-franchise/" style="line-height: 4.1;font-size: 20px;"target="_blank">ФРАНШИЗА</a></h2>
    </header>
    </section>
    <section class="page_block block_14">
        <header class="container">
            <h1 class="block__text" style="font-size: 6em"><b>Амнезия Изи</b></h1>
        </header>
        <main class="content container" style="padding-top: 150px">
            <div class="col-lg-offset-4 col-lg-8">
            <p class="block__text">amnesiya.ru<br>
                vk.com/amneziyansk<br>
                89231430404<br>
                89231430404@yandex.ru</p>
            </div>
        </main>
        <footer class="footer container">
            <div class="col-lg-12 main-form" style="margin-top:60px">
					<form action="" class="formsend">
						<input class="form-control" name="name" type="text" placeholder="Имя">
						<input class="form-control" name="phone" type="text" placeholder="Телефон">
						<input class="form-control" name="email" type="text" placeholder="E-mail">
						<button type="submit" class="btn btn-danger btn-lg">Получить презентацию</button>
					</form>
                </div>
        </footer>
    </section>
	<div class="success">
        <div id="success">
            <h2>Ваша заявка успешно отправлена!</h2>
        </div>
    </div>
	<!-- JavaScript
    ================================================== -->

    <!-- JS Global -->
    

    <!-- Fancybox -->
    <script src="js/jquery.colorbox.js"></script>

    <script src="js/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function () {
            $('input[name=phone]').mask("0-000-000-0000");  //static mask
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".inline").colorbox({inline: true, width: "70%", slideshow: false});
        });
    </script>

   

    <!-- JS Plugins -->
    <script src="js/plugins/smoothscroll.js"></script>
    <script src="js/plugins/jquery.waypoints.min.js"></script>
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="js/plugins/isotope.pkgd.min.js"></script>
    <script src="js/plugins/lightbox.min.js"></script>
    <script src="js/plugins/contact.js"></script>

    <!-- JS Custom -->
    <script src="js/custom_classic.js"></script>
    <script src="js/custom.js"></script>
    <script src="preview/preview.js"></script>

    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
    <script src="js/camera.min.js"></script>

    <script>
        $(document).ready(function () { // вся магия после загрузки страницы

            $('.camera_wrap').camera({ //here I declared some settings, the height and the presence of the thumbnails
                pagination: false,
                thumbnails: false,
                navigation: true,
                hover: true,
                fx: 'scrollHorz'
            });


            $("#clients-slider").mCustomScrollbar({
                axis: "x",
                theme: "light-3",
                autoExpandScrollbar: true,
                advanced: {autoExpandHorizontalScroll: true}
            });

            $(".formsend").submit(function () { // перехватываем все при событии отправки
                var form = $(this); // запишем форму, чтобы потом не было проблем с this
                var error = false; // предварительно ошибок нет

                form.find("input[name=name]").focus(function () {
                    form.find('input[name=name]').removeClass("form-error");
                });
                form.find("input[name=phone]").focus(function () {
                    form.find('input[name=phone]').removeClass("form-error");
                });
                form.find("input[name=email]").focus(function () {
                    form.find('input[name=email]').removeClass("form-error");
                });

                form.find('input').each(function () { // пробежим по каждому полю в форме
                    if (form.find('input[name=name]').val() == '') { // если находим пустое
                        form.find('input[name=name]').addClass("form-error");
                        error = true; // ошибка
                    }

                    if (form.find('input[name=phone]').val() == '') { // если находим пустое
                        form.find('input[name=phone]').addClass("form-error");
                        error = true; // ошибка
                    }

                    if (form.find('input[name=email]').val() == '') { // если находим пустое
                        form.find('input[name=email]').addClass("form-error");
                        error = true; // ошибка
                    }
                });

                if (!error) { // если ошибки нет
                    var data = form.serialize(); // подготавливаем данные
                    $.ajax({ // инициализируем ajax запрос
                        type: 'POST', // отправляем в POST формате, можно GET
                        url: 'form.php', // путь до обработчика, у нас он лежит в той же папке
                        dataType: 'json', // ответ ждем в json формате
                        data: data, // данные для отправки
                        beforeSend: function (data) { // событие до отправки
                            form.find('input[type="submit"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
                        },
                        success: function (data) { // событие после удачного обращения к серверу и получения ответа
                            if (data['error']) { // если обработчик вернул ошибку
                                alert(data['error']); // покажем её текст
                            } else { // если все прошло ок
                                $.colorbox({inline: true, href: "#success", width: "50%", slideshow: false}); //позволяет открыть модальное окно fancybox по завершению передачи данных
                                $('input[name=name], input[name=phone], input[name=email]').val('');
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) { // в случае неудачного завершения запроса к серверу
                            alert(xhr.status); // покажем ответ сервера
                            alert(thrownError); // и текст ошибки
                        },
                        complete: function (data) { // событие после любого исхода
                            form.find('input[type="submit"]').prop('disabled', false); // в любом случае включим кнопку обратно
                        }

                    });
                }
                return false; // вырубаем стандартную отправку формы
            });
        });
    </script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46232142 = new Ya.Metrika({
                    id:46232142,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46232142" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>