function check_Y (y) {
    if (y <= 3 && y >= -3) {
        return true;
    }
    incorr("Y");
    return false;
}

function check_R (r) {
    if (r <= 4 && r >= 1) {
        return true;
    }
    incorr("R");
    return false;
}
function incorr (l) {
    alert("Incorrect " + l + ". Rewrite and try again.");
}

function check () {
    let y = document.getElementById("y").value;
    let r = document.getElementById("r").value;
    return check_Y(y) && check_R(r);
}