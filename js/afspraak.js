

let tellertje = 0;
let seldag = document.getElementsByClassName("selected")[0];
seldag = seldag.innerHTML;
let urenarray = [];
let dagenarray = [];
document.onload = bezet();
//document.onload = console.log(document.getElementsByClassName("selected")[0])

function bezet() {
    urenarray = [];
    let x = document.getElementById("hoeveel");
    x = x.innerHTML;
    var tel = 0;
    let y = document.getElementById("hoeveell");
    y = y.innerHTML;

    while (tel < x) {
        tel += 1;
        let modal = document.getElementById("d" + tel);
        modal = modal.innerHTML;
        let afspr = document.getElementById(modal);
        dag = afspr.innerHTML;

        let uur = document.getElementById("uur" + tel);
        uur = uur.innerHTML;
        urenarray.push(uur);
        dagenarray.push(dag);






        afspr.setAttribute("class", "dag afspr");

    }
    addevent();
}
function addevent() {
    let i = 0;
    let modalnummer = 1;
    let h = urenarray.length;

    console.log(urenarray);
    console.log(h);
    let modalevent = "";
    if (seldag == dag) {
        urenarray.forEach(tijd => {


            let modalplaats = document.getElementById("d" + tijd);
            modalplaats.setAttribute("class", "gesl afspr");
            modalevent = document.getElementById(tijd);
            modalevent.addEventListener("click", function () { modalappear(tijd) })
            i += 1;
        });





    }




}




function modalappear(dat) {
    let num = urenarray.indexOf(dat, 0);
    num += 1;

    let modalappear = document.getElementById("tb" + num)
    modalappear.style.display = "block";
}
function invisible(dat) {
    let modaldissapear = document.getElementById("tb" + dat);
    modaldissapear.style.display = "none";
}
function modalappearl(dat) {
    let modalappear = document.getElementById("tbl" + dat)
    modalappear.style.display = "block";
}
function invisiblel(dat) {
    let modaldissapear = document.getElementById("tbl" + dat);
    modaldissapear.style.display = "none";
}

