let table = document.getElementById("numTable");

for(let i=1; i<=10; i++){
    let row = table.insertRow(i);
    let num = row.insertCell(0);
    let square = row.insertCell(1);
    let cube = row.insertCell(2);
    num.innerHTML = i;
    square.innerHTML = i*i;
    cube.innerHTML = i*i*i;
}