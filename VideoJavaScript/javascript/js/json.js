document.querySelector("#klik").addEventListener("click",tampil);

function tampil(params) {
    let url = "js/tblmenu.json";
    fetch(url)
        .then(function (res) {
            return res.json();
        })
        .then(function (data) {
            let output = "<h1>DATA Menu</h1> <table><th>Menu</th> <th>Harga</th> <th>Warna</th>";
            data.forEach(element => {
                output += `<tr>
                    <td>${element.menu}</td>
                    <td>${element.harga}</td>
                    <td>${element.warna[0]}</td>
                </tr>`
            });
            output += "</table>";
            document.querySelector("#isi").innerHTML = output;
        })
}
// let tblmenu = 
// [
//     {
//     "idmenu" : 1,
//     "idketegori" : 1,
//     "menu" : "Bakso",
//     "harga" : 8000,
//     "warna" :["biru", "putih", "hitam"],
//     "stok" : true,
//     "keterangan" : null
//     },
//     {
//     "idmenu" : 2,
//     "idketegori" : 1,
//     "menu" : "Sate",
//     "harga" : 10000,
//     "warna" :["merah", "hijau"],
//     "stok" : true,
//     "keterangan" : null
//     }
// ]

// console.log(tblmenu[0]);
