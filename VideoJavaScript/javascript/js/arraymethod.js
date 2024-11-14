// array bisa  berupa string number objek function atau campuran
let nilai = [
    {nama : "damore", ipa : 90, bahasa : 70, matematika : 80,},
    {nama : "joniye", ipa : 80, bahasa : 90, matematika : 90,},
    {nama : "tejono", ipa : 75, bahasa : 70, matematika : 90,},
    {nama : "mardae", ipa : 90, bahasa : 80, matematika : 70,},
];

let nama = ["damore","joniye","tejono","mardae"];
let mapel = ["matematika", "ipa", "bahasa"];

// nama.push("arda", "roma");//menambah di akhir
// nama.unshift("Bro", "remi");//menambah di awal

// console.log(nama.pop());
// console.log(nama.shift());

// console.log(nama.splice(1, 3));
// console.log(nama.slice(0, 3));

// console.log(nilai[0].nama);
// console.log(nama);

// console.log(nama.concat(mapel));
// console.log(nama.concat(['ips', 'pkn']));

// for (let index = 0; index < nama.length; index++) {
//     console.log(nama[index]);    
// }

// nama.forEach(function (a) {
//     console.log(a);
// });

// nama.forEach(a => console.log(a));

// nilai.filter(function (a) {
//     if (a.ipa > 80) {
//         console.log(a.nama);
//     }
// })

// console.log(nilai);

// nilai.filter((a) => (a.ipa > 80 && a.matematika >= 80 ? console.log(a.nama) : null));

// let siswa = nilai.map(function (a) {
//     return a.nama;
// })

let siswa = nilai.map((a) => [a.nama, a.ipa, a.matematika])
console.log(siswa);

// mapel.sort();
// console.log(mapel);

// let hasil = nilai.reduce(function (a, b) {
//     return (a = a + b.ipa); 
// },0);

let hasil = nilai.reduce((a,b) => (a += b.bahasa),0);

console.log(hasil);