<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="favicon.ico">

    <title>Амнезия | Забудь о реальности</title>

    <!-- CSS Plugins -->
    <link href="../css/plugins/animate.css" rel="stylesheet">
    <link href="../css/plugins/lightbox.css" rel="stylesheet">
    <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../fonts/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css"/>
    <link rel="stylesheet" href="../css/camera.css"/>
    <link href="../sass/easy.css" rel="stylesheet">

    <!-- CSS Custom -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../preview/preview.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/colorbox.css">
    <link rel="stylesheet" href="./css/event-styles.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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

<!-- Навигация -->
<div class="navbar navbar-default navbar__initial navbar-fixed-top scrollspy_menu" role="navigation">
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
            <ul class="fullpage__nav nav navbar-nav navbar-right">
                <li><a href="#welcome">Главная</a></li>
                <li><a href="#advantages">Что мы делаем</a></li>
                <li><a href="#quest">Услуги</a></li>
                <li><a href="#easy-quest">Портфолио</a></li>
                <li><a href="#aqua">Клиенты</a></li>
                <li><a href="#photo">Почему мы</a></li>
                <li><a href="#geo">Контакты</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- Приветствие -->
<div class="event-welcome" id="welcome">
  <div class="container">
    <div class="row">
      <div id="earth" class="earth"></div>
      <div class="col-sm-7 col-sm-offset-3">
        <div class="welcome__text"></div>
      </div>
    </div>
    <script>
      window.onload = function() {
        var d = window.pageYOffset / 10.0 + 'deg';
        var ea = document.getElementById('earth');
        ea.style.webkitTransform = 'rotate('+d+') scale(1)';
        ea.style.MozTransform = 'rotate('+d+') scale(1)';
        ea.style.oTransform = 'rotate('+d+') scale(1)';
        window.onscroll = function() {
          d = window.pageYOffset / 10.0 + 'deg';
          ea.style.webkitTransform = 'rotate('+d+') scale(1)';
          ea.style.MozTransform = 'rotate('+d+') scale(1)';
          ea.style.oTransform = 'rotate('+d+') scale(1)';
        }
      }
    </script>
  </div>
</div>




  <!-- FOOTER
  ============================== -->
  <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <img class="img-responsive" src="img/logo-black.png" alt="">
            </div>
        </div>
    </div>
  </footer>


  <div class="success">
    <div id="success">
        <h2>Ваша заявка успешно отправлена!</h2>
    </div>
  </div>

  <!-- JavaScript
  ================================================== -->

  <!-- JS Global -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Fancybox -->
  <script src="../js/jquery.colorbox.js"></script>

  <script src="../js/jquery.inputmask.bundle.js"></script>

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

  <script src="../js/bootstrap/bootstrap.min.js"></script>

  <!-- JS Plugins -->
  <script src="../js/plugins/smoothscroll.js"></script>
  <script src="../js/plugins/jquery.waypoints.min.js"></script>
  <script src="../js/plugins/imagesloaded.pkgd.min.js"></script>
  <script src="../js/plugins/isotope.pkgd.min.js"></script>
  <script src="../js/plugins/lightbox.min.js"></script>
  <script src="../js/plugins/contact.js"></script>

  <!-- JS Custom -->
  <script src="../js/custom_classic.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../preview/preview.js"></script>

  <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type='text/javascript' src='../js/jquery.easing.1.3.js'></script>
  <script src="../js/camera.min.js"></script>

  <script>
    $(document).ready(function () { // вся магия после загрузки страницы

        /*$('.camera_wrap').camera({ //here I declared some settings, the height and the presence of the thumbnails
            pagination: false,
            thumbnails: false,
            navigation: true,
            hover: true,
            fx: 'scrollHorz'
        });*/


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
                    url: '/form.php', // путь до обработчика, у нас он лежит в той же папке
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
  <script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter33394513 = new Ya.Metrika({
                    id: 33394513,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/33394513" style="position:absolute; left:-9999px;" alt=""/></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
  <!--<script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/ab5b8638bf32c0d19e4cc7ee77824fa2/connect" id="check-code-pozvonim" charset="UTF-8"></script>
  leestarch.ru: hidden copyright -->
</body>
</html>
