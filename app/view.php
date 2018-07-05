<?php

/* Update Settings */
include_once 'admin/options.php';
$img_path = 'admin/'.$imgtb['path'];
$logo_path = 'admin/'.$logotb['path'];

$imgtb_name = $imgtb['name'];
$logotb_name= $logotb['name'];
$eventstb_name= $eventstb['name'];

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

function events_view() {

    global $db, $eventstb_name;

    $db->connect();
    $list = $db->query("SELECT id,date,price,time FROM $eventstb_name ORDER BY id");
    $db->disconnect();

    while($row = $list->fetch_array(MYSQLI_NUM)) {
        $out_date = explode(",", $row[1]);
        $out_month = explode(" ", $out_date[1]);

        $go_r_month = array("Январь" => "Января",
            "Февраль" => "Февраля",
            "Март" => "Марта",
            "Апрель" => "Апреля",
            "Май" => "Мая",
            "Июнь" => "Июня",
            "Июня" => "Июля",
            "Август" => "Августа",
            "Сентябрь" => "Сентября",
            "Октябрь" => "Октября",
            "Ноябрь" => "Ноября",
            "Декабрь" => "Декабря",
        );

        $result_month  = strtr( $out_month[2], $go_r_month);

        echo "<div class='container aqua_event'>";
        echo "<div class='row'>";
        echo "<div class='col-sm-3 aqua_date'>$out_month[1] $result_month</div>";
        echo "<div id='aqua_preform-$row[0]' class='col-sm-9 aqua_price_and_time aqua_price_and_time_hover'>";
            echo "<div class='col-sm-12 preform_qu' onclick='res_form(".$row[0].")'>";
            echo "<div class='col-sm-12'>$row[3]</div>";
            echo "<div class='col-sm-12 aqua_price'>$row[2]</div>";
            echo "</div>";
            //onsubmit='reserved_event($row[0])'
            /*Aqua form*/
            echo "                            
                <form method='post' action='javascript:void(null);' onsubmit='get_confim($row[0])' id='aqua_form-$row[0]' class='aqua_res_form col-sm-12'>
                <div class='close_form' onclick='close_form($row[0])'>X</div>              
                <input type='hidden' name='bkey' value='$row[0]'>";
                get_res_pe($row[0]);
            echo "
                <div class='col-sm-5 about_quest_ico'>
                    <div class='col-sm-2'>
                        <i class='fa fa-child' aria-hidden='true'></i>
                    </div>
                    <div class='col-sm-10'>
                    <p class='ico_form'>
                        Минимальный возраст участников: 10 лет</p>
                    </div>
                    
                     <div class='col-sm-2'>
                        <i class='fa fa-map-marker' aria-hidden='true'></i>
                    </div>
                    <div class='col-sm-10'>
                    <p class='ico_form'>
                        Адрес: ул. Яринская, 18, тел: 8-923-143-0404</p>
                    </div>
                    
                    <div class='col-sm-2'>
                        <i class='fa fa-users' aria-hidden='true'></i>
                    </div> 
                    <div class='col-sm-10'>
                    <p class='ico_form'>
                                Количество участников: от 14 до 42 человек</p>
                            <p class='ico_form' style='color:firebrick'>*Игра состоится при наличии 14 игроков</p>
                    </div>
                    
                    <div class='col-sm-2'>
                        <i class='fa fa-clock-o' aria-hidden='true'></i>
                    </div>
                    <div class='col-sm-10'>
                        <p class='ico_form'>Продолжительность игры: 120 минут.</p>
                    </div>
                </div>
                <div class='col-sm-7'>
                    <label>Имя <span>*</span></label><input type='text' required  size='25' name='res_name'><br>
                    <label>Телефон <span>*</span></label><input type='text' required placeholder='+7 (___) ___ __ __'  size='25' name='res_phone'><br>
                    <label>E-mail <span>*</span></label><input type='email' required  size='25' name='res_mail'><br>
                    <label class='peop_c'>Кол. игроков <span>*</span></label>
                    <div class='select-outer'>
                        <select class='select' required name='count'>
							<option value=''>(не установлено)</option>		
								<option value='2'>2</option>	
								<option value='3'>3</option>									
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                                <option value='9'>9</option>
                                <option value='10'>10</option>                               						    
                        </select>
                         <a class='select-button'></a>
                    </div>                   
                    <input type='submit' value='Забронировать'>
                </div>
            </form>
            ";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

    return $list;
}

function get_res_pe($key) {

    global $db, $reservedsstb;
    $reservedsstb_name = $reservedsstb['name'];

        $db->connect();
        $list = $db->query("SELECT id, name, phone, email, bkey, count FROM $reservedsstb_name");
        $db->disconnect();

        $y = 0;
        while($row = $list->fetch_array(MYSQLI_NUM)) {
            if($key == $row[4])
                $y+=$row[5];
        }

        echo "<h4>МЕСТ ЗАБРОНИРОВАНО ИЗ ВСЕГО ВОЗМОЖНЫХ: ".$y." из 42</h4>";
}


?>

<script>

    function get_confim(id) {
        $("#confim_form").addClass("form_active");
        var theConForm = document.getElementById("confim_form_button");
        theConForm.innerHTML += "<button onclick='reserved_event("+id+")'>Подтвердить</button>";
    }

    function res_form(id) {
        var id_form = '#aqua_form-'+id;
        $(id_form).addClass("form_active");

        var id_form_2 = '#aqua_preform-'+id;
        $(id_form_2).removeClass("aqua_price_and_time_hover");
    }
    function close_form(id) {
        var id_form = '#aqua_form-'+id;
        $(id_form).removeClass("form_active");

        var id_form_2 = '#aqua_preform-'+id;
        $(id_form_2).addClass("aqua_price_and_time_hover");
    }

    function closeConfim() {
        $("#confim_form").removeClass("form_active");
        var theConForm = document.getElementById("confim_form_button");
        theConForm.innerHTML = "";
    }
    function reserved_event(id) {
        var id_form = '#aqua_form-'+id;
        var msg = $(id_form).serialize();
        var g_captcha_response = $("#g-recaptcha-response").val();

        $.ajax({
            type: 'POST',
            url: 'app/reserved.php',
            data: msg+"&g-recaptcha-response="+g_captcha_response,
            success: function (data) {
                var theConForm = document.getElementById("confim_form_button");
                theConForm.innerHTML += "<h4>"+data+"</h4>";
            },
            error: function (xhr, str) {
                var theConForm = document.getElementById("confim_form_button");
                theConForm.innerHTML += "<h4>Извините, что то пошло не так...</h4>";
            }
        });
    }

</script>
