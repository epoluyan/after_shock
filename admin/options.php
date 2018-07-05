<?php
/**
 * Core and database option's
 */

/* Database class and settings */
class db {
    public $db = array(
        "host"=>"localhost",
        "name"=>"amnesia_bd",
        "user"=>"amn_1",
        "password"=>"123456"
    );
    private $mysqli;
    function connect() {
        $this->mysqli = new mysqli($this->db["host"], $this->db["user"], $this->db["password"], $this->db["name"]) or die($this->mysqli->error);
        $this->mysqli->select_db($this->db["name"]) or die($this->mysqli->error);
        $this->query("SET NAMES utf8");
    }
    function query($q) {
        $res = $this->mysqli->query($q) or die($this->mysqli->error);
        return $res;
    }
    function disconnect() {
        $this->mysqli->close();
    }
}

function CHA($length = 10){
    $code = '';
    $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';
    for( $i = 0; $i < (int)$length; $i++ ) {
        $num = rand(1, strlen($symbols));
        $code .= substr( $symbols, $num, 1 );
    }
    return $code;
}

/* Image's table setting */
$imgtb = array(
    "name"=>"img",
    "path"=>"content/img/"
);

/* Logo's table setting */
$logotb = array(
    "name"=>"logo",
    "path"=>"content/logo/"
);

$eventstb = array(
    "name"=>"events",
);

$reservedsstb = array(
    "name"=>"reserveds",
);

$db = new db();

?>