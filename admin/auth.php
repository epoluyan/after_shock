<?php
//auth system

$login = 'admin';
//echo hash_hmac('sha1', 'admin1', $login).'<br>';
$pass1 = 'fb83ff6c12227e5b723e9d06e9376328aa888284';
//echo hash_hmac('sha1', hash_hmac('sha1', $login, 'admin1'), $login).'<br>';
$pass2 = '3efb4ccdc1dcc7b9caf0b56ec8e23ca7b69457d5';
ini_set('display_errors','Off');

function key_session($regenerate = false) {
    if (isset($_SESSION['key']) and ! $regenerate) {
        $key = $_SESSION['key'];
    } else {
        $key = hash_hmac('sha1', microtime(), mt_rand());
        $_SESSION['key'] = $key;
    }
    return $key;
}

function auth() {
    global $login, $pass1, $pass2;
    $key = key_session();
    $remote_addr = $_SERVER['REMOTE_ADDR'];
    $hash = hash_hmac('sha1', $key.$remote_addr, $pass1);
    if (($_POST['key'] === $hash) and (hash_hmac('sha1', $_POST['password'], $login) === $pass2)) {
        key_session(true);
        $_SESSION['remote_addr'] = $remote_addr;
        header('Location: auth.php?mode=login');
    } else {
        $key = key_session(true);
        echo <<<EOF
<script type="text/javascript" src="sha1.js"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<form class="auth_panel" name="auth" action="auth.php" method="post">
<input type="hidden" name="remote_addr" value="$remote_addr">
<input type="hidden" name="key" value="$key">
<label>Логин</label>
<input type="text" name="login" value="$login">
<label>Пароль</label>
<input type="password" name="password" value="">
<input type="submit" value="Войти">
</form>
<script>
var key = $('input[name=key]').val();
var remote_addr = $('input[name=remote_addr]').val();
$('form[name=auth]').submit(function() {
    var login = $('input[name=login]').val();
    var password = $('input[name=password]').val();
    var key_hash = hex_hmac_sha1(hex_hmac_sha1(login, password), key+remote_addr);
    $('input[name=key]').val(key_hash);
    var pass_hash = hex_hmac_sha1(password, login);
    $('input[name=password]').val(pass_hash);
});
$('input[name=password]').focus();
</script>
EOF;
    }
}

session_start();
if (isset($_SESSION['remote_addr']) and ($_SESSION['remote_addr'] === $_SERVER['REMOTE_ADDR'])) {
    if ($_GET['mode'] === 'logout') {
        unset($_SESSION['remote_addr']);
        auth();
    } else {
        require('core.php');
        admin_func();
   }
} else {
    auth();
}

echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';

echo "<style>
body, html {
    width: 100%;
    height: 100%;
    background: #002b36;
}
    .auth_panel {
    width: 300px;
        height: 300px;
        margin-left: auto;   margin-right: auto;
        margin-top: 200px;
    }
    .auth_panel label {
    color: #fff;
    text-align: center;
        display: block;
        font-size: 2em;
    }
    .auth_panel input[type='submit'] {
    font-size: 1.5em;
        border:none;
        display: block;
        width: 300px;
        margin-top: 30px;
        height: 40px;
        border-radius: 5px;
    }
    .auth_panel input[type='submit']:hover {
    background: #1c1c1c;
    color:#fff;
}
    .auth_panel input[type='text'] {
    font-size: 1.5em;
        padding: 10px;
        border:none;
        height: 40px;
        border-radius: 8px;
        display: block;
        width: 300px;
    }
    .auth_panel input[type='password'] {
    font-size: 1.5em;
        padding: 10px;
        border:none;
        height: 40px;
        border-radius: 8px;
        display: block;
        width: 300px;
    }
</style>";
?>