<?php
session_start();
$dots = load_dots();
$dots = update_stats($dots);
save_dots($dots);
header("Location: index.php");
exit();
function update_stats($dots)
{
    if (empty($_POST)) {
        return $dots;
    }
    $line = 0;
    if (count($dots) !== null) {
        $line = count($dots);
    }
    $dots[$line][0] = $_POST['x'];
    $dots[$line][1] = $_POST['y'];
    $dots[$line][2] = $_POST['r'];
    $dots[$line][3] = "Y";
    $dots[$line][4] = date('H:i:s');
    return $dots;
}
function load_dots () {
    if (empty($_SESSION)) {
        return array();
//        return [[0, 0, 0, 'N', date('H:i:s')]];
    }
    return $_SESSION['dots'];
}

function save_dots($dots) {
    $_SESSION['dots'] = $dots;
}

function validate($x, $y, $r)
{

}