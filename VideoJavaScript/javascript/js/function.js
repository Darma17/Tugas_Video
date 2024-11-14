function coba() {
    let belajar = "Saya Belajar Javascript";
    console.log(belajar);
    console.log("Javascript Itu Mudah");
}

let be = "";
for (let i = 0; i <= 100; i++) {
    be += "-";
}
console.log(be);

function persegipjng(p,l) {
    luas = p * l;
    console.log(luas);
}

persegipjng(4, 3);

function out() {
    return console.log("output function");
}

function lingkaran(r) {
    luas = 3.14 * r * r;
    return luas;
}

const tinggi = 6;
let tabung = lingkaran(10) * tinggi;

function lewat(a) {
    return a;
}

console.log(tabung);
console.log(lewat(1));