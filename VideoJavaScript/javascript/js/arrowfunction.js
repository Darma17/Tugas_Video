let fungsi = function (nama) {
    console.log("belajar function " + nama);
}

fungsi("Damore");

let contoh = (saya) =>{
    console.log(saya + " Belajar Function");
};

contoh("Damore");

let tambah = function (a, b) {
    return a + b;
}

console.log(tambah(2,4));

let plus = (a, b) => a + b;

console.log(plus(2, 5));

let hasil = a => a * 2;

console.log(hasil(4));

let lagi = () => console.log("Halo, Dunia!");

lagi();

let belajar = () => {
    console.log("Baris Satu");
    console.log("Baris Dua");
    console.log("Baris Tiga");
    console.log("Baris Selanjutnya");
};

belajar();

let  nilai = 8;

let uji = (nilai < 7) ? () => (predikat = "GAGAL") : () => (predikat = "LULUS");
console.log(uji());