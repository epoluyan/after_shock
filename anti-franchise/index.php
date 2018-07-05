<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <title>Франшиза</title>
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
    <link href="css/anti.css" rel="stylesheet">
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
ini_set('display_errors', 'Off');
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
                <li><a href="#what">Что это?</a></li>
                <li><a href="#advantage">Преимущества</a></li>
                <li><a href="#who">Кто мы</a></li>
                <li><a href="#about">О рынке</a></li>
                <li><a href="#what_input">Что входит</a></li>
                <li><a href="#price">Цена</a></li>
                <li><a href="#benefit">Выгода</a></li>
                <li><a href="#sunduk">Сундук</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<section id="welcome" class="page_block block_1">
        <header class="container" style="padding-top: 40px;">
            <div class="row">
                <a class="logo_2 flex_wrap" style="margin-bottom: 50px;"></a>
                <h1 class="block__text" style="margin-bottom: 20px; padding: 0;">Анти франшиза выездных квестов</h1>
            </div>
        </header>
        <main class="content container-fluid" style="min-height: 360px;">
            <p class="block__text">Без роялти. Без ограничений. Полная свобода действий.</p>
            <p class="block__text">Вы развиваете собственный бренд.</p>
        </main>
        <footer class="footer container">
            <div class="col-lg-12 main-form" style="margin-top:100px">
                <form action="" class="formsend">
                    <input class="form-control" name="name" type="text" placeholder="Имя">
                    <input class="form-control" name="phone" type="text" placeholder="Телефон">
                    <input class="form-control" name="email" type="text" placeholder="E-mail">
                    <button type="submit" class="btn btn-danger btn-lg">Заказать звонок</button>
                </form>
            </div>
        </footer>
</section>
<section id="what" class="page_block block_2 bg_block">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 150px; padding: 0;">Что такое анти франшиза?</h2>
        </div>
    </header>
    <main class="content container" style="padding-top: 150px">
        <p class="block__text">Анти франшиза - это готовый бизнес, проверенный опытом и
            практикой без ежемесячных выплат и низким паушальным взносом.
            Без жестких рамок и ограничений в Вашем бизнесе. Полная свобода
            действий. Вы работаете и развиваете Ваш собственный бренд по
            нашей бизнес-модели</p>
    </main>
</section>
<section id="advantage" class="page_block bg_block block_3">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Преимущества</h2>
        </div>
    </header>
    <main class="content container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">Свободный
                            рынок</p>
                    </div>
                    <p class="ellipse__after_text">молодое направление<br>
                        на рынке развлечений</p>
                </div>
                <div class="col-sm-4">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">Отсутствие<br>
                            постоянных<br>
                            трат
                            </p>
                    </div>
                    <p class="ellipse__after_text">без аренды,<br>
                        без зарплат персонала</p>
                </div>
                <div class="col-sm-4">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">Быстрый<br>
                            старт
                        </p>
                    </div>
                    <p class="ellipse__after_text">начать свой бизнес можно<br>
                        буквально за неделю</p>
                </div>
                <div class="col-sm-offset-2 col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">Перспективы
                        </p>
                    </div>
                    <p class="ellipse__after_text">Количество запросов на выездные<br>
                        квесты с 2016г.  возросло в 3 раза<br>
                        и продолжает расти</p>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">Высокая<br>
                            маржиналь-<br>
                            ность
                        </p>
                    </div>
                    <p class="ellipse__after_text">Вы легко можете получать<br>
                        от 20 000 руб чистой прибыли<br>
                        за один проведенный квест</p>
                </div>
            </div>
        </div>
    </main>
</section>
<section id="who" class="page_block bg_block block_4">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Кто мы такие?</h2>
        </div>
    </header>
    <main class="content container" style="margin-top: 250px; margin-bottom: 50px;">
        <div class="col-sm-offset-2 col-sm-8">
            <p class="block__text">Мы, команда профессионалов, занимающаяся организацией
                выездных квестов с 2015 года и строительством реалити-квестов с 2014 года.</p>
        </div>
    </main>
</section>
<section id="about" class="page_block bg_block block_5">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">О рынке</h2>
        </div>
    </header>
    <main class="content container">
        <p class="block__text">Рынок выездных квестов это отличная альтернатива уже привычным
            развлечениям и мероприятиям. Целевая аудитория выездных квестов огромна:</p>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">детские<br>
                            мероприятия
                            </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">частные<br>
                            дни<br>
                            рождения
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">корпора-<br>
                            тивные<br>
                            мероприятия
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">Свадьбы
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">маль-<br>
                            чишники
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">девичники
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">конференции
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">промо/<br>
                            презентация<br>
                            нового<br>
                            продукта
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">и многое<br>
                            другое
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>
<section id="about_quests" class="page_block white_block block_6">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Выездные квесты можно проводить:</h2>
        </div>
    </header>
    <main class="content container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="ellipse">
                            <p class="ellipse__text" style="padding-top: 0;">В любом<br>
                                месте
                                </p>
                        </div>
                        <p class="ellipse__after_text">офис, база отдыха, загородный<br>
                            дом, школа, улица, кафе, клуб и т.д.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="ellipse">
                            <p class="ellipse__text" style="padding-top: 0;">На любое<br>
                                количество<br>
                                человек
                            </p>
                        </div>
                        <p class="ellipse__after_text">от 1 до бесконечности</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="ellipse">
                            <p class="ellipse__text" style="padding-top: 0;">В любом<br>
                                жанре
                            </p>
                        </div>
                        <p class="ellipse__after_text">детектив, приключения,<br>
                            фантастика, мистика, хоррор</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-4" style="margin-top: 20px;">
                        <div class="ellipse">
                            <p class="ellipse__text" style="padding-top: 0;">На любое<br>
                                мероприятие
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-top: 20px;">
                        <div class="ellipse">
                            <p class="ellipse__text" style="padding-top: 0;">Под любой<br>
                                бюджет
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>
<section id="yandex_stat" class="page_block white_block block_7">
    <header class="container">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 20px; padding: 0;">Статистика из Яндекс WordStat:</h2>
        </div>
    </header>
    <main class="content content__block container">
        <p class="block__text">Количество запросов на выездные квесты с 2016г. возросло в 3 раза и
            продолжает расти</p>
        <div class="col-lg-12 col-sm-12">
            <a href="./img/yandex_stat.png" data-lightbox="image-1" data-title="Статистика">
                <img src="./img/yandex_stat.png" width="100%" height="auto">
            </a>
        </div>
    </main>
</section>
<section id="what_input" class="page_block bg_block block_8">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Что входит?</h2>
        </div>
    </header>
    <main class="content container" style="margin-top: 150px">
        <p class="block__text" style="text-align: center">
            1.	8 сценариев выездных квестов<br>
            2.	Готовый сайт<br>
            3.	Настроенный яндекс директ<br>
            4.	Инструкция по запуску направления<br>
            5.	Описание всех бизнес процессов<br>
            6.	Список необходимого реквизита для закупок и изготовления<br>
            7.	Рекомендации по сбору персонала, его обучению и т.д.<br>
            8.	Рекомендации по ведению социальных сетей и привлечению лидов.<br>
            9.	Договоры, акты, счета, презентации, сметы, маркет кит, коммерческое
            предложение, офферы, рекламная полиграфия, фотографии, рекламные
            тексты, предложения по скидкам. Все необходимые документы для работы
            с клиентом<br>
            10.	Скрипты продаж<br>
            11.	6 - 12 скайпов для обсуждения и разбора всех вопросов работы бизнеса.
        </p>
    </main>
</section>
<section id="numbers" class="page_block white_block block_9">
    <header class="container" style="padding-top: 40px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Цифры</h2>
        </div>
    </header>
    <main class="content container">
        <p class="block__text" style="text-align: left; padding-top: 40px;">
            Средняя стоимость выездного квеста на одного человека составляет около 1000 руб<br>
            Итого, к примеру, квест на 20 человек будет стоить 20 000 руб.<br>
            Маржинальность как правило составляет около 50%<br>
            Чистая прибыль с одного выездного квеста 10 000 руб.<br>
            Ежедневно в Вашем городе родители ищут каким образом интересно и весело можно провести<br>
            день рождения своего ребенка. Каждый именинник - потенциальный клиент.<br>Выпускные из дет. сада, выпускные в школах, новый год - на все эти праздники родители заказывают для своих детей выездные квесты.<br>
            Каждый день молодые люди в возрасте от 25 лет ищут каким образом необычно отпраздновать<br>
            свой день рождения в компании родных и друзей. Каждый именинник - Ваш потенциальный клиент.<br>
            Каждый день HR в отделе персонала во всех компаниях Вашего города просматривают предложения о том, каким образом им лучше провести корпоративный отдых.<br>
            Каждый HR - Ваш потенциальный клиент. Количество игроков на корпоративных мероприятиях варьируется от 30 до 400 человек.<br>
            Итого бюджет одного такого выездного квеста: 30 000 руб - 400 000 руб.<br>
            Каждый день невесты и женихи в Вашем городе ищут предложения о том, каким образом провести
            свадебное мероприятие.<br>Выездной квест - отличная альтернатива надоевшим выкупам и конкурсам
            с тамадой.<br>
            Итого Ваша ежемесячная прибыль легко может составлять от 300 000 руб.

        </p>
    </main>
</section>
<section id="price" class="page_block bg_block block_10">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Сколько стоит?</h2>
        </div>
    </header>
    <main class="content container" style="margin-top: 250px; margin-bottom: 100px;">
        <p class="block__text">Стоимость анти франшизы выездных квестов составляет 130 т.р.</p>
    </main>
</section>
<section id="benefit" class="page_block bg_block block_11">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Выгода</h2>
        </div>
    </header>
    <main class="content container">
        <p class="block__text" style="text-align: left">
            1 Средняя стоимость сценария выездного квеста 15 000 руб. Итого стоимость 8 сценариев составит уже 120 000 руб.<br>
            2 Готовый сайт. Если делать сайт силами фрилансеров-программистов и фрилансеров-дизайнеров, то средняя стоимость
            готового сайта составит около 20 000 руб.<br>
            3. Настройка яндекс-директа в среднем на рынке составит около 10 000-15 000 руб. Помимо этого необходимо будет время на
            аналитику и отслеживание кампаний, которые действительно будут приносить результаты.<br>
            4. Вы получаете на руки готовые пошаговые инструкции к действиям. Не нужно ничего придумывать и набивать “шишки”
            на своих ошибках.<br>
            5. Вы получаете четкое описание всех бизнес процессов от клика на сайт до получения денег.<br>
            6. Вы получаете готовый список необходимого реквизита. Вы можете сразу для себя принять и выбрать комфортное решение:<br>
            -	закупить и изготовить весь реквизит сразу<br>
            -	покупать реквизит постепенно из оборотных средств.<br>
            7. Вы получаете четкие инструкции по персоналу (кто именно Вам нужен, кто ни в коем случае Вам не нужен.<br>
            Какие компетенции должны быть у ваших работников. Каким образом составить грамотную систему оплаты труда. Каким образом мотивировать их)<br>
            8. Вы получаете подробное описание каким образом вести соц. сети. Зачем они вообще нужны. Какую роль они выполняют и
            как правильно формировать имидж компании<br>
            9. Вы получаете абсолютно все необходимые документы, которые будут необходимы для работы с клиентами.<br>
            10. Вы получаете скрипты для продаж:<br>
            -	по телефону при входящем звонке<br>
            -	по телефону при исходящем звонке<br>
            -	при встрече с лицом, не принимающим решение<br>
            -	при встрече с лицом, принимающим решение<br>
            -	при переписке<br>
            11. Разбор всех возникших вопросов по бизнесу мы сможем решить вместе по скайпу. Мы подробно разберем вместе с Вами
            все даже мелкие нюансы работы
        </p>
    </main>
</section>
<section id="present" class="page_block bg_block block_12">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0; font-size: 40px">Оставьте заявку сейчас и получите<br>
                дизайн сайта в подарок!</h2>
        </div>
    </header>
    <main class="content container" style="margin-top: 350px; margin-bottom: 100px;">
        <div class="col-lg-12 main-form" style="margin-top:0">
            <form action="" class="formsend">
                <input class="form-control" name="name" type="text" placeholder="Имя">
                <input class="form-control" name="phone" type="text" placeholder="Телефон">
                <input class="form-control" name="email" type="text" placeholder="E-mail">
                <button type="submit" class="btn btn-danger btn-lg">Оставить заявку</button>
            </form>
        </div>
    </main>
</section>
<section id="photo" class="page_block white_block block_13" style="padding-bottom: 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="camera_wrap">
                <?php
                    img_view();
                ?>
            </div>
        </div>
    </div>
</section>
<section id="confidence" class="page_block bg_block block_14">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Почему нам стоит доверять?</h2>
        </div>
    </header>
    <main class="content container" style="margin-top: 150px">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">Более 4 лет<br>
                            строительства<br>
                            реалити-<br>
                            квестов</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">более 200<br>
                            проведенных<br>
                            выездных<br>
                            квестов
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">более 1500<br>
                            довольных<br>
                            игроков
                        </p>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">более 2 лет<br>
                            организации<br>
                            выездных<br>
                            квестов
                        </p>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="ellipse">
                        <p class="ellipse__text" style="padding-top: 0;">более 250<br>
                            написанных<br>
                            сценариев для<br>
                            выездных<br>
                            квестов
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>
<section id="clients" class="page_block white_block block_15">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">НАШИ КЛИЕНТЫ</h2>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                    logo_view();
                ?>
            </div>
        </div>
    </div>
</section>
<section id="ticket" class="page_block bg_block block_16">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Оставьте заявку сейчас и получите<br>дополнительный сценарий выездного квеста<br>
                стоимостью 10 000 руб в подарок!</h2>
        </div>
    </header>
    <main class="content container" style="margin-top: 250px; margin-bottom: 100px;">
        <div class="col-lg-12 main-form" style="margin-top:0">
            <form action="" class="formsend">
                <input class="form-control" name="name" type="text" placeholder="Имя">
                <input class="form-control" name="phone" type="text" placeholder="Телефон">
                <input class="form-control" name="email" type="text" placeholder="E-mail">
                <button type="submit" class="btn btn-danger btn-lg">Оставить заявку</button>
            </form>
        </div>
    </main>
</section>
<section id="sunduk" class="page_block bg_block block_17">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Не знаете с чего начать?</h2>
            <p class="block__text">Приобретите наш готовый квест в сундуке и начинайте зарабатывать уже сейчас!</p>
        </div>
    </header>
    <main class="content container">
    </main>
    <footer class="footer container-fluid" style="margin-top: 0">
        <div class="container">
            <div class="col-sm-offset-1 col-sm-9">
                <div class="col-sm-9">
                        <p class="block__text">Подробнее о квест - сундуке можно узнать здесь:
                    </p>
                </div>
                    <div class="col-sm-3 pulse_container" style="height: 205px;">
                        <div class="pulse1"></div>
                        <div class="pulse2"></div>
                        <a class="icon" style="color: black;line-height: 5.5;font-size: 34px;" href="/kvest-sunduk/" target="_blank">
                            СУНДУК
                        </a>
                    </div>
                </p>
            </div>
        </div>
    </footer>
</section>
<section id="contacts" class="page_block bg_block block_18">
    <header class="container" style="padding-top: 20px;">
        <div class="row">
            <h2 class="block__text" style="margin-bottom: 40px; padding: 0;">Контакты</h2>
        </div>
    </header>
    <main class="content container" style="margin-bottom: 100px; margin-top: 100px;">
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
                <p class="block__text" style="text-align: center; font-size: 36px;">
                    <a href="tel:89231430404">89231430404</a><br>
                    <a href="http://amnesiya.ru">amnesiya.ru</a><br>
                    <a href="https://vk.com/amneziyansk">https://vk.com/amneziyansk</a><br>
                    <a href="mailto:89231430404@yandex.ru">89231430404@yandex.ru</a><br>
                </p>
            </div>
        </div>
    </main>
    <footer class="footer container" style="margin-top: 250px">
        <div class="row">
            <a class="logo_2 flex_wrap"></a>
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
                    url: './form.php', // путь до обработчика, у нас он лежит в той же папке
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
                w.yaCounter46778019 = new Ya.Metrika({
                    id:46778019,
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
<noscript><div><img src="https://mc.yandex.ru/watch/46778019" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>