let a = 0;
naik.onclick = function () {
    a++;
    document.querySelector("h1").innerText = a;
    document.querySelector("h2").innerText = "";
}
turun.onclick = function () {
    if (a == 0)  {
        document.querySelector("h2").innerText = "TIDAK BISA LEBIH KECIL DARI NOL";
    }
    if (a > 0) {
        a--;
        document.querySelector("h1").innerText = a;
    } 
}
ulang.onclick = function () {
    a = 0;
    document.querySelector("h2").innerText = "";
    document.querySelector("h1").innerText = a;
}