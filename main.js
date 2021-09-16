var navLink = document.getElementById("navlinks");
function showMenu() {
    navLink.style.right = "0";
}
function hideMenu() {
    navLink.style.right = "-150px";
}

// var submit=document.getElementById("submit1");
function sub() {

    alert("Your message has been sent successfully!!!");
}


//for Auto close navbar

const toggle = document.getElementById('toggle');

document.onclick = function (e) {
    if (e.target.id !== 'toggle' ) {
        navLink.style.right = "-150px";
    }

}


