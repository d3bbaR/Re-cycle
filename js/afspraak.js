let x = document.getElementById("hoeveel");
x = x.innerHTML;
let tel = 0;
let tellertje = 0;
document.onload = bezet();
document.onload = console.log(document.getElementsByClassName("selected")[0]) 
function bezet(){
while (tel < x) {
   
    tel =+1;
    let modal = document.getElementById("d"+tel);
    let uur = document.getElementById("uur"+tel);
    modal = modal.innerHTML;
    uur = uur.innerHTML;
    let afspr = document.getElementById(modal);
    dag = afspr.innerHTML;
    afspr.setAttribute("class" , "dag afspr");  

    if (afspr.className == "dag afspr"){
        console.log("jow");
        let modalplaats = document.getElementById("d"+uur+"hhhh"+dag);
        modalplaats.setAttribute("class", "gesl afspr");
    }
  

}
}
function modalappear() {
    console.log("reee");
}