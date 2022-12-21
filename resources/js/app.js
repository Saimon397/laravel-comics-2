import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const modal = document.getElementById("myModal");

const btn = document.getElementById("myBtn");

const closeSpan = document.querySelector(".my-close");

const closebtn = document.getElementById("btn-close");


btn.onclick = function () {
    modal.style.display = "block";
}

closeSpan.onclick = function () {
    modal.style.display = "none";
}

closebtn.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
