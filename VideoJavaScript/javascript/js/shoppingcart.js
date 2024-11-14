let tblmenu = [
    {idmenu:1, idkategori:1, menu:"Bakso", gambar:"bakso.jpeg", harga:8000},
    {idmenu:2, idkategori:1, menu:"Sate", gambar:"sate.jpeg", harga:10000},
    {idmenu:3, idkategori:2, menu:"Kopi", gambar:"kopi.jpeg", harga:5000},
    {idmenu:4, idkategori:2, menu:"Es Teh", gambar:"teh.jpeg", harga:5000},
    {idmenu:5, idkategori:3, menu:"Jajanan", gambar:"jajanan.jpeg", harga:3000},
    {idmenu:6, idkategori:4, menu:"Melon", gambar:"menlon.jpeg", harga:10000},
];

let tampil = tblmenu.map(function (kolom) {
    return `
    <div class="produk-conten">
        <div class="image">
            <img src="images/${kolom.gambar}" alt="${kolom.menu}" />
        </div>
        <div class="tittle">
            <h2>${kolom.menu}</h2>
        </div>
        <div class="harga">
            <h2>Rp.${kolom.harga}</h2>
        </div>
        <div class="btn-beli">
            <button data-idmenu=${kolom.idmenu}>Beli</button>
        </div>
    </div>
            `;
});

let isi = document.querySelector(".produk");
isi.innerHTML = tampil.join('');

let btnbeli = document.querySelectorAll(".btn-beli > button");

let cart = [];

for (let index = 0; index < btnbeli.length; index++) {
    btnbeli[index].onclick = function () {
        // console.log(btnbeli[index].dataset["idmenu"]);
        // cart.push(btnbeli[index].dataset["idmenu"]);

        tblmenu.filter(function (a) {
            if (a.idmenu == btnbeli[index].dataset["idmenu"]) {
                cart.push(a);
                console.log(cart);
            }
        });
    };
}
