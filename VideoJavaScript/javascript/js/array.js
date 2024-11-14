let coba = function () {
    return "coba function";
}
let buah = ['apel', 'mangga', 'jeruk', 10, coba(),
    (tes = () => "Hasil return arrow function"),
    function nama () {
        return "damore";
    }
];

console.log(buah);
console.log(buah[0]);
console.log(buah[1]);
console.log(buah[2]);

for (let i in buah) {
    console.log(i + "." + buah[i]);
    
}

console.log(buah[5]());
console.log(buah[6]());