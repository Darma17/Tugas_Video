const hari = 3;
let hasil;

switch (hari) {
    case 1:
        hasil = "Minggu";
        break;
    case 2:
        hasil = "Senin";
        break;
    case 3:
        hasil = "Selasa";
        break;
    case 4:
        hasil = "Rabu";
        break;
    case 5:
        hasil = "Kamis";
        break;
    case 6:
        hasil = "Jumat";
        break;
    case 7:
        hasil = "Sabtu";
        break;

    default:
        hari = "Hari tidak ada";
        break;
}

console.log(hasil);

const bulan = "april";
let bln;
switch (bulan) {
    case "januari":
        bln = 1;
        break;
    case "februari":
        bln = 2;
        break;
    case "maret":
        bln = 3;
        break;
    case "april":
        bln = 4;
        break;
    case "mei":
        bln = 5;
        break;
    case "juni":
        bln = 6;
        break;
    case "juli":
        bln = 7;
        break;
    case "agustus":
        bln = 8;
        break;
    case "september":
        bln = 9;
        break;
    case "oktober":
        bln = 10;
        break;
    case "november":
        bln = 11;
        break;
    case "desember":
        bln = 12;
        break;

    default:
        bln = undefined;
        break;
}
console.log(bln);