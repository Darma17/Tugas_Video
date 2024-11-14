if (false) {
    console.log("Dijalankan jika benar");
} else {
    console.log("Dijalankan jika salah");
}

let nilai = 90;
let standar = 85;
let baik = "LULUS";
let gagal = " TIDAK LULUS";
let batasatas = 100, batasbawah = 0; 
let peringatan = "Nilai Salah"

if (nilai <= batasatas && nilai >= batasbawah) {
    if (nilai >= standar) {
        console.log(baik);
    } else {
        console.log(gagal);
    }
} else {
    console.log(peringatan);
}

let hasil = nilai >= standar ? baik : gagal;
console.log(hasil);