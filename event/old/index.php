<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <title>Amnesia - организация мероприятий и праздников</title>
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
    <link href="css/event.css" rel="stylesheet">
    <link href="preview/preview.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/colorbox.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
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

<div class="navbar navbar-default navbar-fixed-top scrollspy_menu navbar__initial" role="navigation" style="z-index: 9999999">
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
                <li><a href="#welcome">главная</a></li>
                <li><a href="#whatarewd">что мы делаем</a></li>
                <li><a href="#yslygi">услуги</a></li>
                <li><a href="#portfolio">портфолио</a></li>
                <li><a href="#clients">клиенты</a></li>
                <li><a href="#about">почему мы</a></li>
                <li><a href="#contacts">контакты</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<section id="welcome" class="page_block block_1">

	<div class="headercontent">
    <div class="contactsh" style="position: relative; z-index: 999999">
		<div class="iconh">
			<a href="https://www.instagram.com/amnesia_event/"  target="_blank"><img src="./img/insta.png" width="45px"></a>
			<a href="https://novosibirsk.flamp.ru/firm/amneziya_vyezdnojj_centr_kvestov-70000001028791284"  target="_blank"><img src="./img/flamp.png" width="45px"></a>
			<a href="https://vk.com/amnesia_event"  target="_blank"><img src="./img/vk.png" width="45px"></a>
		</div>
		<a href="tel: 89231430404"><div class="phone pull-right">89231430404</div></a>
	</div>
        <main class="first container-fluid" style="z-index:3;">
            <a href="#forma"><div class="" style="z-index:3; display:flex; justify-content: center; position:absolute; bottom:24%; left:20px; right:0px;"><button type="submit" class="btn btn-danger btn-lg">заказать звонок</button></div></a>
        </main>

</section>

<section id="whatarewd" class="page_block block_2 fix">
    <h2>Что мы делаем</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">

                <a class="inline" href="#quest-1">
                <div class="col-sm-4 quest-item">
                    <img src="img/mama2.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Свадьбы</p>
                </div> 
                </a> 

                    <div class="hidden">
                        <div id="quest-1" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div>

  
                      
				<a class="inline" href="#quest-2">
                <div class="col-sm-4 quest-item">
                    <img src="./img/quest1.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Частные праздники</p>                        
                </div>
                </a>

                    <div class="hidden">

                        <div id="quest-2" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div>

				<a class="inline" href="#quest-3">
                <div class="col-sm-4 quest-item">
                    <img src="img/quest3.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Корпоративные<br>мероприятия</p>
                </div>
                </a>

                	<div class="hidden">
                        <div id="quest-3" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div> 

				<a class="inline" href="#quest-4">
                <div class="col-sm-4 quest-item">
                    <img src="./img/geo1.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Деловые<br>мероприятия</p>
                </div>
                </a>

                	<div class="hidden">
                        <div id="quest-4" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div>

				<a class="inline" href="#quest-5">
                <div class="col-sm-4 quest-item">
                    <img src="./img/quest2.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Детские<br>праздники</p>
                </div>
                </a>

                	<div class="hidden">
                        <div id="quest-5" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div>                            

				<a class="inline" href="#quest-6">
                <div class="col-sm-4 quest-item">
                    <img src="./img/geo3.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Тимбилдинг</p>
                </div>
                </a>

                	<div class="hidden">
                        <div id="quest-6" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div>                          

                <div class="centericonmob">

				<a class="col-sm-4 inline" href="#quest-7">
                <div class="quest-item">
                    <img src="./img/scen-icon3.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Выездные квесты</p>
                </div> 
               	</a>

                	<div class="hidden">
                        <div id="quest-7" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div>

				<a class="col-sm-4 inline" href="#quest-8">
				<div class=" quest-item">
                    <img src="./img/advantage4.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Веревочный курс</p>
                </div>
                </a>

                	<div class="hidden">
                        <div id="quest-8" class="fsize-10">
                            <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                            </div>
                            <div class="center">
                            <div class="content-quest">Ваш контент</div>
                        	<form action="" class="formsend  formsendpopup">
                        		<input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                        		<input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                        		<input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                        		<button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                    		</form>
                    		</div>
                        </div>
                    </div>              

                </div>                                           
            </div>
        </div>
    </div>
</section>

<section id="forma" class="main-form formabg" style="margin-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <h2>Оставьте заявку прямо сейчас!</h2>
                    <h3>оставьте заявку и получите фото-съемку в подарок!</h3>
                    <form action="" class="formsend">
                        <input class="form-control" name="name" type="text" placeholder="Имя">
                        <input class="form-control" name="phone" type="text" placeholder="Телефон">
                        <input class="form-control" name="email" type="text" placeholder="E-mail">
                        <button type="submit" class="btn btn-lg">Оставить заявку</button>
                    </form>
                </div>
            </div>
        </div>
</section>

<section class="main-form whowe" style="margin-top:0px;">
    	<h2>Кто мы такие</h2>
    	<h3>Комплексная организация мероприятий!</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 content">
					Event агентство «Амнезия» г.Новосибирск комплексная организация
					мероприятий, проведение частных и корпоративных праздников - 
					организатор деловых и событийных мероприятий и праздников любой
					сложности и формата. Наше ивент агентство было создано в 2015 году
					г.Новосибирск, с тех пор мы успешно развиваемся и открываем новые
					направления.

					Мы знаем всё об организации мероприятий, как организовать частный
					праздник, свадьбу, выездной квест, тимбилдинг, корпоратив или юбилей
					компании. 

					Мы влюблены в своё дело! 
                </div>
            </div>
        </div>
</section>

<section id="money">
<style>
#money{
	padding: 40px 20px;
}
.money__text {
	font-family: "Ubuntu Condensed", sans-serif;
}
.money__title  {
	font-family: "Ubuntu Condensed", sans-serif;
}

.money__title {
    margin-bottom: 40px;
    font-size: 40px;
	text-align:center;
}
.money__text {
	font-size: 26px;
	text-align: left;
	margin: auto;
	display: block;
}
.money__flex {
	width:100%;
	display: flex;
}
.money__img {
	background: white url(img/money1.png) no-repeat center;
    background-size: contain;
    width: 100%;
    height: 400px;
}
</style>
<div class="container">
	<div class="row">
		<h2 class="money__title">ДАЕМ ДЕНЬГИ ЗА ТВОЙ СОВЕТ</h2>
		<div class="money__img"></div>
		<h3 class="money__title">ЗАРАБОТАЙ НА ПАРТНЕРСКОЙ ПРОГРАММЕ</h3>
		<div class="money__flex">
		<p class="money__text">В компании, в которой ты работаешь намечается корпоратив?<br>
			У твоих коллег или знакомых близится праздник?<br>
			Хочешь на этом ЗАРАБОТАТЬ?<br>
			Предложи услуги нашей компании и ПОЛУЧИ % от заказа!<br>
			Подробности по телефону <a href="tel:89231430404">89231430404</a><br>
		</p>
		</div>
	</div>
</div>
</section>

<section>
<div class="container kompleks">
	<div class="row">
		<h1>Мы возьмем на себя весь комплекс вопросов,<br>
		связанных с организацией мероприятия</h1>
	</div>
</div>
</section>

<section id="yslygi" class="page_block block_2">
    <h2>Услуги</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">

                <a class="inline" href="#quest-121">
                <div class="col-sm-4 quest-item">
                    <img src="img/ved.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Ведущий</p>
                </div>  
                </a>

                    <div class="hidden">
                        <div id="quest-121" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>   
                      
                <a class="inline" href="#quest-122">      
                <div class="col-sm-4 quest-item">
                    <img src="./img/dj.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Диджей</p>                        
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-122" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-123">
                <div class="col-sm-4 quest-item">
                    <img src="img/anim.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Аниматор</p>
                </div> 
                </a>

                <div class="hidden">
                        <div id="quest-123" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-124">
                <div class="col-sm-4 quest-item">
                    <img src="./img/mim.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Мим</p>
                </div> 
                </a>

                <div class="hidden">
                        <div id="quest-124" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>  

                <a class="inline" href="#quest-125">
                <div class="col-sm-4 quest-item">
                    <img src="./img/ice.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Мороженщик<br>напрокат</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-125" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-116">
                <div class="col-sm-4 quest-item">
                    <img src="./img/vr.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Выездная виртуальная<br>реальность</p>
                </div>  
                </a>

                <div class="hidden">
                        <div id="quest-116" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>                             

                <a class="inline" href="#quest-117">
                <div class="col-sm-4 quest-item">
                    <img src="./img/girl.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Женский стриптиз</p>
                </div>
                </a> 

                <div class="hidden">
                        <div id="quest-117" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>                              

                <a class="inline" href="#quest-118">
                <div class="col-sm-4 quest-item">
                    <img src="./img/man.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Мужской стриптиз</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-118" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-119">
				<div class="col-sm-4 quest-item">
                    <img src="./img/balet.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Шоу-балет</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-119" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-120">
                <div class="col-sm-4 quest-item">
                    <img src="img/hodyl.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Ходулисты</p>
                </div> 
                </a>

                <div class="hidden">
                        <div id="quest-120" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>    
                  
                <a class="inline" href="#quest-130">
                <div class="col-sm-4 quest-item">
                    <img src="./img/science.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Научное шоу</p>                        
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-130" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-140">
                <div class="col-sm-4 quest-item">
                    <img src="img/photo.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Фотобудка</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-140" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>  

                <a class="inline" href="#quest-150">
                <div class="col-sm-4 quest-item">
                    <img src="./img/photograph.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Фотограф</p>
                </div> 
                </a>

                <div class="hidden">
                        <div id="quest-150" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>                                

                <a class="inline" href="#quest-160">
                <div class="col-sm-4 quest-item">
                    <img src="./img/video.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Видеограф</p>
                </div>  
                </a>

                <div class="hidden">
                        <div id="quest-160" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>                             

                <a class="inline" href="#quest-170">
                <div class="col-sm-4 quest-item">
                    <img src="./img/chastniy.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Выездной частный<br>квест</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-170" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-180">
				<div class="col-sm-4 quest-item">
                    <img src="./img/corp.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Выездной корпоративный<br>квест</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-180" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-190">
                <div class="col-sm-4 quest-item">
                    <img src="./img/children.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Выездной детский<br>квест</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-190" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-191">
				<div class="col-sm-4 quest-item">
                    <img src="./img/auto.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Авто-квест</p>
                </div> 
                </a>

                <div class="hidden">
                        <div id="quest-191" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-192">
                <div class="col-sm-4 quest-item">
                    <img src="img/surp.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Розыгрыши</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-192" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-193">
                <div class="col-sm-4 quest-item">
                    <img src="./img/promo.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Промо-квесты</p>                        
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-193" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-194">
                <div class="col-sm-4 quest-item">
                    <img src="./img/rom.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Романтические<br>сюрпризы</p>
                </div> 
                </a>

                <div class="hidden">
                        <div id="quest-194" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-195">
                <div class="col-sm-4 quest-item">
                    <img src="./img/kyrs.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Верёвочный курс</p>
                </div> 
                </a>


                <div class="hidden">
                        <div id="quest-195" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>                              

                <a class="inline" href="#quest-196">
                <div class="col-sm-4 quest-item">
                    <img src="./img/war.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Игра<br>сопротивление</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-196" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-197">
                <div class="col-sm-4 quest-item">
                    <img src="./img/team.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Тимбилдинг</p>
                </div>
                </a>  

                <div class="hidden">
                        <div id="quest-197" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>                                

                <a class="inline" href="#quest-198">
                <div class="col-sm-4 quest-item">
                    <img src="./img/moscow.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Игра<br>Подмосковныевечера</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-198" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 


                <a class="inline" href="#quest-199">
				<div class="col-sm-4 quest-item">
                    <img src="./img/speed.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Игра быстрый<br>старт</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-199" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-200">
				<div class="col-sm-4 quest-item">
                    <img src="./img/vegetables.png" class="col-xs-10 col-xs-offset-1" alt="Детские квесты">
                    <p>Букет из<br>овощей</p>
                </div>
                </a>

                <div class="hidden">
                        <div id="quest-200" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>                                                                                 
            </div>
        </div>
    </div>
</section>

<section id="forma12" class="main-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 80px;">
                    <h2>Оставьте заявку прямо сейчас!</h2>
                    <h3>оставьте заявку и получите фото-съемку в подарок!</h3>

                    <div class="helper"></div>
					<form action="" class="formsend hei">
                        <div class="col-xs-12 col-sm-3 col-xlg-4 pull-left"><input class="form-control " name="name" type="text" placeholder="Имя"><img src="./img/effect6.png" class="img-responsive" style="opacity:0.3; margin-top:-10px;"></div>
                        <div class="col-xs-12 col-sm-3 col-xlg-4 pull-left"><input class="form-control" name="phone" type="text" placeholder="Телефон"><img src="./img/effect6.png" class="img-responsive" style="opacity:0.3; margin-top:-10px;"></div>
                        <div class="col-xs-12 col-sm-3 col-xlg-4 pull-left"><input class="form-control" name="email" type="text" placeholder="E-mail"><img src="./img/effect6.png" class="img-responsive" style="opacity:0.3; margin-top:-10px;"></div>
                        <div class="col-xs-12 col-sm-3 col-xlg-4 pull-left"><button type="submit" style="position: relative; z-index: 999;" class=" btn btn-danger btn-lg">оставить заявку</button><img src="./img/effect6.png" class="img-responsive" style="position: relative; z-index: 19; opacity:0.3; margin-top:-10px;"></div>
                    </form>
                </div>
            </div>
        </div>
</section>
<section>
    
        <div class="container bigmon" style="display: -webkit-flex; justify-content: -webkit-center; display: flex; justify-content: center;">
           <a href="http://amnesiya.ru/" target="_blank"> <div class="row" style="    position: relative;">
                <div class="content1">
                    <h1>Узнай подробнее о выездных квестах!</h1>
                    <div class="col-xs-12"><img src="http://amnesiya.ru/anti-franchise/img/logo_2.png" class="img-responsive" style="margin-top:30px; width:80%"></div>

                    <div class="respbtn"><a href="#forma12"><button type="submit" class="btn btn-danger btn-lg">заказать звонок</button></a></div>
                </div>
            </div> 
            </a>
        </div>
    
</section>
<section id="portfolio" class="page_block block_2">
    <h2>Портфолио</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 portfolio">

                <a class="inline" href="#quest-101">
                <div class="col-sm-4 quest-item">
                    <img src="img/1.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Корпоративное мероприятие<br>для компании «Mixon»</p>
                </div>    
                </a>


                    <div class="hidden">
                        <div id="quest-101" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 
            
                <a class="inline" href="#quest-102">                     
                <div class="col-sm-4 quest-item">
                    <img src="./img/2.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Корпоративное мероприятие<br>для компании «Cat»</p>                        
                </div>
                </a>

                    <div class="hidden">
                        <div id="quest-102" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-103">
                <div class="col-sm-4 quest-item">
                    <img src="img/3.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Выездной частный квест<br>на день пождение</p>
                </div> 
                </a>

                    <div class="hidden">
                        <div id="quest-103" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-104">
                <div class="col-sm-4 quest-item">
                    <img src="img/4.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Корпоративное мероприятие<br>для компании «Mixon»</p>
                </div>  
                </a> 

                    <div class="hidden">
                        <div id="quest-104" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>  
                    
                <a class="inline" href="#quest-105">      
                <div class="col-sm-4 quest-item">
                    <img src="./img/5.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Корпоративное мероприятие<br>для компании «Cat»</p>                        
                </div>
                </a>

                    <div class="hidden">
                        <div id="quest-105" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-106">                    
                <div class="col-sm-4 quest-item">
                    <img src="img/6.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Выездной частный квест<br>на день пождение</p>
                </div> 
                </a>

                    <div class="hidden">
                        <div id="quest-106" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-107">
    			<div class="col-sm-4 quest-item">
                    <img src="img/7.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Корпоративное мероприятие<br>для компании «Mixon»</p>
                </div>  
                </a>  

                    <div class="hidden">
                        <div id="quest-107" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 
 
                <a class="inline" href="#quest-108">                     
                <div class="col-sm-4 quest-item">
                    <img src="./img/8.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Корпоративное мероприятие<br>для компании «Cat»</p>                        
                </div>
                </a>

                    <div class="hidden">
                        <div id="quest-108" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-109">
                <div class="col-sm-4 quest-item">
                    <img src="img/9.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Выездной частный квест<br>на день пождение</p>
                </div>
                </a> 

                    <div class="hidden">
                        <div id="quest-109" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-110">
                <div class="col-sm-4 quest-item">
                    <img src="img/10.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Корпоративное мероприятие<br>для компании «Mixon»</p>
                </div>   
                </a>

                    <div class="hidden">
                        <div id="quest-110" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>  
                    
                <a class="inline" href="#quest-111">                     
                <div class="col-sm-4 quest-item">
                    <img src="./img/11.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Корпоративное мероприятие<br>для компании «Cat»</p>                        
                </div>
                </a>

                    <div class="hidden">
                        <div id="quest-111" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-112">
                <div class="col-sm-4 quest-item">
                    <img src="img/12.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Выездной частный квест<br>на день пождение</p>
                </div> 
                </a>

                    <div class="hidden">
                        <div id="quest-112" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-113">
                <div class="col-sm-4 quest-item">
                    <img src="img/13.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>Корпоративное мероприятие<br>для компании «Mixon»</p>
                </div>
                </a>   

                    <div class="hidden">
                        <div id="quest-113" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>  
                     
                <a class="inline" href="#quest-114">                      
                <div class="col-sm-4 quest-item">
                    <img src="./img/14.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>Корпоративное мероприятие<br>для компании «Cat»</p>                        
                </div>
                </a>

                    <div class="hidden">
                        <div id="quest-114" class="fsize-30">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div> 

                <a class="inline" href="#quest-115">
                <div class="col-sm-4 quest-item">
                    <img src="img/15.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>Выездной частный квест<br>на день пождение</p>
                </div>
                </a>

                    <div class="hidden">
                        <div id="quest-115" class="fsize-10">
                                <div class="single-item">
                                <div><img src="./img/slick1.png"></div>
                                <div><img src="./img/slick2.png"></div>
                                <div><img src="./img/slick3.png"></div>
                                </div>
                                <div class="center">
                                <div class="content-quest">Ваш контент</div>
                                <form action="" class="formsend formsendpopup">
                                    <input class="form-control col-xs-2" name="name" type="text" placeholder="Имя">
                                    <input class="form-control col-xs-2" name="phone" type="text" placeholder="Телефон">
                                    <input class="form-control col-xs-2" name="email" type="text" placeholder="E-mail">
                                    <button type="submit" class="btn btn-lg btn-danger">Оставить заявку</button>
                                </form>
                                </div>
                        </div>
                    </div>  

            </div>
        </div>
    </div>
</section>

<section class="main-form formabg1" style="margin-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Закажите бесплатный выезд менеджера<br>для обсуждения деталей мероприятия. </h2>
                    <form action="" class="formsend">
                        <input class="form-control" name="name" type="text" placeholder="Имя">
                        <input class="form-control" name="phone" type="text" placeholder="Телефон">
                        <input class="form-control" name="email" type="text" placeholder="E-mail">
                        <button type="submit" class="btn btn-lg">Оставить заявку</button>
                    </form>
                </div>
            </div>
        </div>
</section>

<section id="clients" style="padding-top: 130px; margin-top: -75px;    ">
    <h2>НАШИ КЛИЕНТЫ</h2>
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

<section>
<div class="container orgmer">
	<div class="row">
		<h1>МЫ ЗНАЕМ ВСЕ ОБ ОРГАНИЗАЦИИ ДЕЛОВЫХ И СОБЫТИЙНЫХ<br>
МЕРОПРИЯТИЙ! МЫ ПО НАСТОЯЩЕМУ ВЛЮБЛЕНЫ В СВОЕ ДЕЛО!</h1>
	</div>
</div>
</section>

<section id="about" style="padding-top: 130px; margin-top: -75px;">
 <h2>Почему мы?</h2>
    <div class="container">
        <div class="row">   
            <div class="col-sm-10 col-sm-offset-1 why">

    			<div class="col-sm-4 quest-item">
                    <img src="img/comand.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>КОМАНДА ПРОФЕССИОНАЛОВ<br>Мы по-настоящему<br>влюблены свое дело!</p>
                </div>    
                      
                <div class="col-sm-4 quest-item">
                    <img src="./img/key.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>ПОД КЛЮЧ<br>Полный цикл организации<br>мероприятия, от идеи<br>до воплощения!</p>                        
                </div>

                <div class="col-sm-4 quest-item">
                    <img src="img/money.png" class="col-xs-10 col-xs-offset-2" alt="Квесты на корпоратив">
                    <p>ГРАМОТНЫЙ БЮДЖЕТ<br>Составим грамотный бюджет <br>мероприятия,<br>без ненужных переплат!</p>
                </div> 

                <div class="col-sm-4 quest-item">
                    <img src="img/eye.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>ВСЕ ПОД КОНТРОЛЕМ<br>Под контролем абсолютно все!<br>Вы, лишь наслаждаетесь<br>всем происходящим!</p>
                </div>    
                      
                <div class="col-sm-4 quest-item">
                    <img src="./img/mask.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>БАЗА АРТИСТОВ И ШОУ<br>Музыканты, цирковые-шоу,<br>детские-шоу, ведущие<br>и др. жанры.</p>                        
                </div>

                <div class="col-sm-4 quest-item">
                    <img src="img/micro.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>ПРОФЕССИОНАЛЬНОЕ ОБОРУДОВАНИЕ<br>Звуковые системы, световое<br>оформление, видео экраны,<br>спецэффекты, подиумы и сцены.</p>
                </div> 

                <div class="col-sm-4 quest-item">
                    <img src="img/garant.png" class="col-xs-10 col-xs-offset-1" alt="Веревочный курс">
                    <p>ГАРАНТИЯ КАЧЕСТВА<br>Мы гарантируем качество и<br>готовы к реализации проектов<br>любого уровня сложности!</p>
                </div>    
                      
                <div class="col-sm-4 quest-item">
                    <img src="./img/time.png" class="col-xs-10 col-xs-offset-1" alt="Квест в помещении">
                    <p>ВРЕМЯ? МЕСТО?<br>Встретимся с Вами в удобном<br>для Вас месте и в удобное<br>для Вас время</p>                        
                </div>

                <div class="col-sm-4 quest-item">
                    <img src="img/doc.png" class="col-xs-10 col-xs-offset-1" alt="Квесты на корпоратив">
                    <p>ЗАКЛЮЧЕНИЕ ДОГОВОРА<br>Вы получаете на руки договор,<br>в котором четко прописаны<br>все предоставляемые услуги</p>
                </div>
               
              </div>
        </div>
    </div>
</section>

<section class="main-form formabg2" style="margin-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ПОЛУЧИТЬ ПРАЙС НА УСЛУГИ</h2>
                    <form action="" class="formsend">
                        <input class="form-control" name="name" type="text" placeholder="Имя">
                        <input class="form-control" name="phone" type="text" placeholder="Телефон">
                        <input class="form-control" name="email" type="text" placeholder="E-mail">
                        <button type="submit" class="btn btn-lg">Оставить заявку</button>
                    </form>
                </div>
            </div>
        </div>
</section>

<section class="main-form ">
    <div class="container">
        <h2>Как мы работаем:</h2>
        <div class="row wework">
            <div class="col-lg-12">
                <div class="col-sm-6 col-lg-3">
                    <img width="200" src="img/work-block-i-1.png" alt=""><img src="img/arrow.png" class="arrow" style="margin-right:-70px; margin-left:10px;">
                    <p class="col-xs-12">Ваша заявка</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <img width="200" src="img/work-block-i-2.png" alt=""><img src="img/arrow.png" style="margin-right:-60px; margin-left:20px;">
                    <p class="col-xs-12">Уточнение деталей</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <img width="200" src="img/work-block-i-3.png" alt=""><img src="img/arrow.png" style="margin-right:-70px; margin-left:20px;">
                    <p class="col-xs-12">Разработка программы<br>и сметы</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <img width="200" src="img/work-block-i-4.png" alt="">
                    <p class="col-xs-12">Идеальное<br>мероприятие</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="akciya1" id="akciya1" style="margin-top:80px;">
    <h2>Подарочный набор от Амнезии!</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p style="font-size: 50px; font-weight: bold;">Готовый квест</p>
                <p>для тебя и твоих друзей за</p>
                <p style="font-size: 65px; font-weight: bold;">990 руб.</p>
            </div>
            <div class="col-sm-4">
                <img src="img/podarokchek.png" class="col-xs-10 col-xs-offset-1" alt="">
            </div>
            <div class="col-sm-4">
                <p style="font-size: 50px; font-weight: bold;">Amnesia box- </p>
                <p style="font-size: 25px; margin-top:50px;">это готовый праздник! Всё,<br>
                    что нужно для вечеринки,<br> уже внутри! Откройте, прочтите инструкцию и веселитесь!</p>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-xs-10 col-xs-offset-1">
                <p>Увлекательный квест для тебя и твоих друзей - скачай, распечатай и играй! </p>
                <p style="font-size: 30px; margin-top:0px;">Остались вопросы?</p>
                <a href="#readmore" class="btn btn-danger btn-lg">Давайте мы расскажем подробнее</a>
            </div>
        </div>
    </div>
</section>


<section class="main-form formabg3" id="readmore" style="margin-top:0px;">

    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ЗАДАЙТЕ НАМ СВОЙ ВОПРОС</h2>
                    <form action="" class="formsend">
                        <input class="form-control" name="name" type="text" placeholder="Имя">
                        <input class="form-control" name="phone" type="text" placeholder="Телефон">
                        <input class="form-control" name="email" type="text" placeholder="E-mail">
                        <button type="submit" class="btn btn-lg">Оставить заявку</button>
                    </form>
                </div>
            </div>
    </div>
</section>


<section id="contacts" class="main-form" style="margin-top: 30px; margin-bottom:30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 blockcon">
                    <h2 class="col-xs-12">Контакты</h2>
                    <div class="contactfoot ">
                    <div><a href="tel:89231430404">89231430404</a></div>
					<div>89231430404@yandex.ru</div>
					<div><a href="https://vk.com/amnesia_event"  target="_blank">vk.com/amnesia_event</a></div>
					<div><a href="http://amnesiya.ru"  target="_blank">amnesiya.ru</a></div>
					<div><a href="https://vk.com/amneziyansk"  target="_blank">vk.com/amneziyansk</a></div>

					</div>
                </div>
            </div>
        </div>
</section>

<iframe src="https://yandex.ru/map-widget/v1/-/CBevjPxW-B" width="100%" height="400" frameborder="0"></iframe>


<section class="main-form" style="margin-top: 30px;text-align:left;">
        <div class="container">
            <div class="row"  style=" display:flex; justify-content: center;  ">
                <div class="col-xs-8">
Организация бизнес-мероприятий, организация корпоративов, организация выездных квестов,тимбилдингов,
проведение праздников - требует особого подхода и опыта. Тут важны не только креатив и нестандартное видение,
главную роль играют ответственность и знание рынка. Мы ивент агентство “Амнезия” г.Новосибирск, организатор
мероприятий, гарантируем качество и готовы к реализации проектов любого формата и сложности в соответствии
с Вашими задачами. 
Проводим мероприятия любых масштабов.. 
Забудь о реальности вместе с “Амнезией”!

                </div>
            </div>
        </div>
</section>

<section class="main-form" style="margin-top: 30px; margin-bottom: 30px;text-align:left;">
        <div class="container" style=" display:flex; justify-content: center; ">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-12 respimg"  >
                <img src="img/logofooter.png" class="img-responsive">
                </div>
            </div>
        </div>
</section>

<div class="success">
    <div id="success">
        <h2>Ваша заявка успешно отправлена!</h2>
    </div>
</div>
<!-- JavaScript
================================================== -->

<!-- JS Global -->
    <!-- JS Global -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47754232 = new Ya.Metrika({
                    id:47754232,
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
<noscript><div><img src="https://mc.yandex.ru/watch/47754232" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
$('.single-item').slick({
});
</script>
<!-- Fancybox -->
<script src="js/jquery.colorbox.js"></script>

<script src="js/jquery.inputmask.bundle.js"></script>

<script>
    $(document).ready(function () {
        $('input[name=phone]').inputmask("9-999-999-9999");  //static mask
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".inline").colorbox({inline: true, width: "70%", slideshow: false});
    });
</script>

<script type="text/javascript">
$(document).ready(function() {
    $("a.gallery").fancybox();
});
</script>


<!-- JS Plugins -->
<script src="js/plugins/jquery.waypoints.min.js"></script>
<script src="js/plugins/lightbox.min.js"></script>
<script src="js/plugins/contact.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/parallax.js"></script>

<!-- JS Custom -->
<script src="js/custom_classic.js"></script>
<script src="js/custom.js"></script>
<script src="preview/preview.js"></script>

<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<script src="js/camera.min.js"></script>
<script src="/event/js/parallax.js"></script>
<script>
$(window).resize(function() {
  if(document.documentElement.clientWidth > 1200) {
$(function () {
    $(document).on('mousemove', function (e) {
        $('.first').css({
            left: -e.pageX / 50 + 10,
            top: -e.pageY / 50 + 10
        });
        $('.second').css({
            left: e.pageX / 50 + 60,
            top: e.pageY / 50 + 60
        });
    });
});
  }
});

    $(document).ready(function () { // вся магия после загрузки страницы
    	
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
</body>
</html>