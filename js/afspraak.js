let x = document.getElementById("hoeveel");
x = x.innerHTML;
let y = document.getElementById("hoeveell");
y = y.innerHTML;
let tel = 0;
let tell = 0;
let tellertje = 0;
let variabel = "";
let modalevent = "";
let modaleventl = "";
let seldag = document.getElementsByClassName("selected")[0];
seldag = seldag.innerHTML;
        
document.onload = bezet();
document.onload = bezetl();
//document.onload = console.log(document.getElementsByClassName("selected")[0])

function bezet() {
    while (tel < x) {
        tel += 1;
        let modal = document.getElementById("d" + tel);
        modal = modal.innerHTML;
        let afspr = document.getElementById(modal);
        dag = afspr.innerHTML;
        
        let uur = document.getElementById("uur" + tel);
        uur = uur.innerHTML;

        
            

        
        afspr.setAttribute("class", "dag afspr");
        if (seldag == dag){
        if (afspr.className == "dag afspr") {

            let modalplaats = document.getElementById("d" + uur + "hhhh" + dag);
            modalevent = document.getElementById(uur + "hhhh" + dag);

            modalevent.addEventListener("click", function () { modalappear(tel) });
            modalplaats.setAttribute("class", "gesl afspr");
        }
    }
    

    }
}
function bezetl() {
    while (tell < y) {
        tell += 1;
        let modall = document.getElementById("dl" + tell);
        modall = modall.innerHTML;
        let afsprl = document.getElementById(modall);
        dagl = afsprl.innerHTML;
        
        let uurl = document.getElementById("uurl" + tell);
        uurl = uurl.innerHTML;


        afsprl.setAttribute("class", "dag afspr");  

        if (afsprl.className == "dag afspr") {
            afsprl.setAttribute("class", "dag afsprbez");
        }
        
        if (seldag == dagl ){
        if (afsprl.className == "dag afspr" || afsprl.className == "dag afsprbez") {

            let modalplaatsl = document.getElementById("d" + uurl + "hhhh" + dagl);
            modaleventl = document.getElementById(uurl + "hhhh" + dagl);

            modaleventl.addEventListener("click", function () { modalappearl(tell) });
            modalplaatsl.setAttribute("class", "gesl bez");
        }
    }
    

    }
}

function modalappear(dat) {
    let modalappear = document.getElementById("tb" + dat)
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