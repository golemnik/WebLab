<?php
$t_beg = new DateTime('now');
session_start();
$dots = load_dots();
$dots = update_stats($dots);
save_dots($dots);
header("Location: index.php");
exit();
function update_stats($dots){
    global $t_beg;
    if (empty($_POST)) {
        return $dots;
    }
    $line = 0;
    if (count($dots) !== null) {
        $line = count($dots);
    }
    $dots[$line]['x'] = $_POST['x'];
    $dots[$line]['y'] = $_POST['y'];
    $dots[$line]['r'] = $_POST['r'];
    $dots[$line][3] = checkDot($_POST['x'], $_POST['y'], $_POST['r']);
    $dots[$line][4] = date('H:i:s');
    $dots[$line][5] = ($t_beg->diff(new DateTime('now')))->format('%S sec, %f msec');
    return $dots;
}
function load_dots () {
    if (empty($_SESSION)) {
        return array();
    }
    return $_SESSION['dots'];
}

function save_dots($dots) {
    $_SESSION['dots'] = $dots;
}

function checkDot ($x, $y, $r) {
    if ($x == 0) return lineY($y, $r);
    if ($y == 0) return lineX($x, $r);
    if ($x > 0 && $y > 0) return quater1();
    if ($x < 0 && $y > 0) return quater2($x, $y, $r);
    if ($x < 0 && $y < 0) return quater3($x, $y, $r);
    if ($x > 0 && $y < 0) return quater4($x, $y, $r);
    return "U";
}

function lineX($x, $r){
    if ($x >= -$r/2 && $x <= $r/2) {
        return "Y";
    }
    return "N";
}
function lineY($y, $r){
    if ($y >= -$r && $y <= $r) {
        return "Y";
    }
    return "N";
}


function quater1 () {
    return "N";
}
function quater2 ($x, $y, $r) {
    if (2*$x + $r >= $y) {
        return "Y";
    }
    return "N";
}
function quater3 ($x, $y, $r) {
    if ($x**2 + $y**2 <= $r**2) {
        return "Y";
    }
    return "N";
}

function quater4 ($x, $y, $r) {
    if ($x <= $r/2 && -$y <= $r) {
        return "Y";
    }
    return "N";
}


