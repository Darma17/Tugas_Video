function coba() {
    document.querySelector(".isi").innerText = "BLEE";
}
function coba2() {
    document.querySelector(".isi").innerText = "";
}
// h2.addEventListener("click", coba);

h2.onmouseover = coba;
h2.onmouseleave = function () {
    document.querySelector(".isi").innerText = "";
}
