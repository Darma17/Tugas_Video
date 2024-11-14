const objek = {
    nama : "damore",//stirng
    umur : 17,//number

    buah : ['semangka', 'melon', 'pisang'],//array

    coba : function () {
        return "coba function dalam objek";//function
    },

    boolean : true,//boolean
    "tulis aja" : 1233,
};

let kunci = prompt("Masukkan seusatu", "nama")

alert(objek[kunci]);

console.log(objek.buah[1]);
console.log(objek["tulis aja"]);
