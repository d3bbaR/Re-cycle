let x = document.getElementById("hoeveel");
x = x.innerHTML;
let tel = 0;
document.onload = bezet(); 
function bezet(){
while (tel < x) {
   
    tel =+1;
    let modal = document.getElementById("d"+tel);
    let uur = document.getElementById("uur"+tel);
    modal = modal.innerHTML;
    console.log(modal);
    uur = uur.innerHTML;
    let afspr = document.getElementById(modal);
    console.log(afspr);
    dag = afspr.innerHTML;
    let modalplaats = document.getElementById("d"+uur+"hhhh"+dag);
    modalplaats.setAttribute("class", "gesl afspr");
    afspr.setAttribute("class" , "dag afspr");   
   

}
}
function modalappear() {
    console.log("reee");
}