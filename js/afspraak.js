let x = document.getElementById("hoeveel");
x = x.innerHTML;
let tel = 0;
document.onload = console.log("hellooooooo");
while (tel < x) {
   
    tel =+1;
    console.log(tel);
    let modal = document.getElementById("d"+tel);
    let uur = document.getElementById("uur"+tel);
    modal = modal.innerHTML;
    uur = uur.innerHTML;
    let afspr = document.getElementById(modal);
    dag = afspr.innerHTML;
    console.log(dag);
    let modalplaats = document.getElementById("d"+uur+"hhhh"+dag);
    modalplaats.setAttribute("class", "gesl afspr");
    afspr.setAttribute("class" , "dag afspr");   
    console.log(modal);
    
    
}
function modalappear() {
    console.log("reee");
}