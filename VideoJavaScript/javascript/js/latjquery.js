// $( document ).ready(function() {
//     console.log( "shap!" );
// });
$(function () {
    $("#isi").html("<h1>belajar jquery</h1>");

    $("#klik").click(function (e) { 
        e.preventDefault();
        alert("Belajar java script");
    });

    // $("#isi").mouseleave(function () { 
    //     alert("Mouse Leave");
    // });

    // $("#isi").mouseenter(function () { 
    //     alert("Mouse Enter");
    // });

});
