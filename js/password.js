
function openPassword() {

    var pwd = document.getElementById("psw-modal");

    pwd.style.display = "block";
}


function closePassword() {

    var pwd = document.getElementById("psw-modal");

    pwd.style.display = "none";
}


function haltSubmit(e) {
    e.preventDefault()
}



