

let tellertje = 0;

let urenarray = [];
let urenarray2 = []
let dagenarray = [];
let dagenarray2 = [];
let seldag = document.getElementsByClassName("selected")[0];
seldag = seldag.innerHTML;
document.onload = bezet();

//document.onload = console.log(document.getElementsByClassName("selected")[0])


function bezet() {
    let seldag = document.getElementsByClassName("selected")[0];
    seldag = seldag.innerHTML;
    var tel = 0;
    let x = "";
    let variabele = 1;
    while (variabele != 3) {

        if (variabele == 1) {


            x = document.getElementById("hoeveel");
            x = x.innerHTML;


            while (tel < x) {
                tel += 1;
                let modal = document.getElementById("d" + tel);

                modal = modal.innerHTML;


                if (modal < 0) {
                    modal = modal.substring(1);
                }
                let afspr = document.getElementById(modal);
                afspr.setAttribute("class", "dag afspr selected");

                dag = afspr.innerHTML;
                let uur = document.getElementById("uur" + tel);
                uur = uur.innerHTML;
                afspr.setAttribute("class", "dag afspr selected");
                if (dag == seldag) {
                    urenarray.push(uur);
                    dagenarray.push(dag);

                }
            }
        }
        else {
            tel = 0;
            let x = document.getElementById("hoeveell");
            x = x.innerHTML;

            while (tel < x) {

                tel += 1;
                let modal = document.getElementById("dl" + tel);
                modal = modal.innerHTML;

                let afspr = document.getElementById(modal);
                dag = afspr.innerHTML;


                let uur = document.getElementById("uurl" + tel);

                if (afspr.className == "dag afspr selected") {

                    uur = uur.innerHTML;
                    afspr.setAttribute("class", "dag afsprbez selected");
                    if (dag == seldag) {

                        console.log("dit uur wordt gepusht: " + uur);
                        urenarray2.push(uur);

                        dagenarray2.push(dag);

                    }
                }
                else {

                    afspr.setAttribute("class", "dag bez selected");
                    uur = uur.innerHTML;
                    if (dag == seldag) {



                        console.log("dit uur wordt gepusht: " + uur);
                        urenarray2.push(uur);

                        dagenarray2.push(dag);

                    }
                    else {


                        urenarray2.push(uur);

                        dagenarray2.push(dag);
                    }
                }
                x
            }
        }
        variabele += 1;
    }
    addevent(1);
}
function addevent(variabele) {
    let i = 0;
    let modalevent = "";
    if (variabele == 1) {


        if (seldag == dagenarray[i]) {

            urenarray.forEach(tijd => {

                let modalplaats = document.getElementById("d" + tijd);
                modalplaats.setAttribute("class", "gesl afspr");
                modalevent = document.getElementById(tijd);

                tijd = tijd.toString()

                modalevent.addEventListener("click", function () { modalappear(tijd) })
                i += 1;
            })
        }


        addevent(2);
    }
    else {
        if (seldag == dagenarray2[i]) {
            urenarray2.forEach(tijd => {

                let modalplaats = document.getElementById("d" + tijd);
                console.log(modalplaats);
                modalplaats.setAttribute("class", "bez afspr");
                modalevent = document.getElementById(tijd);
                modalevent.addEventListener("click", function () { modalappear2(tijd) })
                i += 1;
            })
        };
    }




}




function modalappear(dat) {
    console.log("clicked");
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
    console.log(dat + " " + num);
    let modalappear = document.getElementById("tbl" + num)
    modalappear.style.display = "block";
}
function invisiblel(dat) {
    let modaldissapear = document.getElementById("tbl" + dat);
    modaldissapear.style.display = "none";
}


