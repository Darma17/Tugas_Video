document.querySelector("#klik").addEventListener("click",tampil);

async function tampil() {
    const url = "https://jsonplaceholder.typicode.com/users";
    const res = await fetch(url);

    const data = await res.json();

    // console.log(data);

    // let out = "<ul>";
    // data.forEach(element => {
    //     // console.log(element.name);
    //     out += `<li>${element.name}</li>`;
    // });
    // out += "</ul>";

    // document.querySelector("#isi").innerHTML = out;

    let output = "<h1>DATA USER</h1><table border='1px'><th>ID</th><th>NAME</th><th>USERNAME</th>"
    data.forEach(el => {
        output += `<tr>`;
        output += `<td>${el.id}</td>`
        output += `<td>${el.name}</td>`
        output += `<td>${el.username}</td>`
        output += `</tr>`;
    });
    output += "</table>";
    
    document.querySelector("#isi").innerHTML = output;
}