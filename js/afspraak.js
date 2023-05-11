

let tellertje = 0;
let seldag = document.getElementsByClassName("selected")[0];
seldag = seldag.innerHTML;
let urenarray = [];
let urenarray2 = []
let dagenarray = [];
let dagenarray2 = [];
document.onload = bezet();

//document.onload = console.log(document.getElementsByClassName("selected")[0])

function bezet() {
    var tel = 0;
    let x = "";
    let variabele = 1;
    while (variabele != 3) {
   
        if (variabele == 1){
            
        
            x = document.getElementById("hoeveel");
            x = x.innerHTML;
    
            console.log("var is 1");
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
        }
        else{
            tel = 0;
            let x = document.getElementById("hoeveell");
            x = x.innerHTML;
            console.log("var is niet 1");
            while (tel < x) {
                tel += 1;
                let modal = document.getElementById("dl" + tel);
                modal = modal.innerHTML;
                let afspr = document.getElementById(modal);
                dag = afspr.innerHTML;
    
                let uur = document.getElementById("uurl" + tel);
                uur = uur.innerHTML;
                urenarray2.push(uur);
                console.log(uur);
                dagenarray2.push(dag);
                afspr.setAttribute("class", "dag bez");
            }
        }
    variabele +=1;
}
addevent(1);
}
function addevent(variabele) {
    let i = 0;
    let modalevent = "";
    if (variabele ==1){
        x = document.getElementById("hoeveel");
        x = x.innerHTML;
       
        console.log(i);
    if (seldag == dagenarray[i]) {
        urenarray.forEach(tijd => {

            let modalplaats = document.getElementById("d" + tijd);
            modalplaats.setAttribute("class", "gesl afspr");
            modalevent = document.getElementById(tijd);
            modalevent.addEventListener("click", function () { modalappear(tijd) })
            i += 1;})
    }

    
    addevent(2);
    }
    else{
        if (seldag == dagenarray2[i]) {
            urenarray2.forEach(tijd => {

                let modalplaats = document.getElementById("d" + tijd);
                modalplaats.setAttribute("class", "bez afspr");
                modalevent = document.getElementById(tijd);
                modalevent.addEventListener("click", function () { modalappear2(tijd) })
                i += 1;})
            };
        }
        
            
      
        
    }




function modalappear(dat) {
    let num = urenarray.indexOf(dat, 0);
   console.log(dat);
    num += 1;
    console.log(num);
    let modalappear = document.getElementById("tb" + num)
    modalappear.style.display = "block";
}
function invisible(dat) {
    let modaldissapear = document.getElementById("tb" + dat);
    modaldissapear.style.display = "none";
}
function modalappear2(dat) {
    let num = urenarray2.indexOf(dat, 0);
   
    num += 1;
    console.log(num);
    let modalappear = document.getElementById("tbl" + num)
    modalappear.style.display = "block";
}
function invisiblel(dat) {
    let modaldissapear = document.getElementById("tbl" + dat);
    modaldissapear.style.display = "none";
}

