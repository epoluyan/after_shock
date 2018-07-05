<?php
    /* Update Settings */
    include_once 'options.php';
    $img_path = $imgtb['path'];
    $logo_path = $logotb['path'];

    if($_POST['type']=='image') {
        $id = $_POST["id"];
        $imgtb_name = $imgtb['name'];

        $db->connect();
        $list = $db->query("SELECT * FROM $imgtb_name WHERE id = $id");

        while ($row = $list->fetch_array(MYSQLI_NUM)) {
            unlink($img_path . $row[1]);
        }

        $db->query("DELETE FROM $imgtb_name WHERE id = $id");
        $db->disconnect();
    }

    if($_POST['type']=='logo') {
        $id = $_POST["id"];
        $logotb_name = $logotb['name'];

        $db->connect();
        $list = $db->query("SELECT * FROM $logotb_name WHERE id = $id");

        while ($row = $list->fetch_array(MYSQLI_NUM)) {
            unlink($logo_path . $row[1]);
        }

        $db->query("DELETE FROM $logotb_name WHERE id = $id");
        $db->disconnect();
    }

    if($_POST['type']=='event') {
        $id = $_POST["id"];
        $eventstb_name = $eventstb['name'];

        $db->connect();
        $db->query("DELETE FROM $eventstb_name WHERE id = $id");
        $db->disconnect();
    }

    if($_POST['type']=='res') {
        $id = $_POST["id"];
        $reservedstb_name = $reservedsstb['name'];

        $db->connect();
        $db->query("DELETE FROM $reservedstb_name WHERE id = $id");
        $db->disconnect();
    }
?>