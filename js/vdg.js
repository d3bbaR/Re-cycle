let afsprakenarray = [];
let testing = "";
let main;
let cookiedag = ""
let dedag = "";
let dit = "";
let testingdag = "";
let dzdag = "";
let dzmaand = "";
let dzuur = "";
let vmaand = getCookie("Dag");
vmaand = vmaand.substring(5, vmaand.length - 3);
console.log(vmaand);
$.post("vdg.php",
    {
        bezeting: 1
    },
    function (data) {
        console.log("data aangekomen");
        dit = document.getElementById("datumvandaag").innerHTML;
        cookiedag = getCookie("dagwaarde");
        dedag = getCookie("Dag");
        cookiedag = document.getElementById(cookiedag).innerHTML;
        afsprakenarray.push(data);
        testing = JSON.parse(afsprakenarray[0]);


        load();
    });

function load() {
    for (let i = 0; i < testing.length; i++) {

        dzmaand = testing[i].dag.substring(5, testing[i].dag.length - 3);

        dzdag = testing[i].dag.substring(8);
        testingdag = dzdag - dit;
        let ele = document.getElementById(testingdag);
        let soortafspraak = testing[i].geaccepteerd;

        if (dzmaand == vmaand) {
            if (soortafspraak == 0) {
                if (ele.className == "dag bez") {
                    ele.setAttribute("class", "dag afsprbez");
                    if (testing[i].dag == dedag) {
                        ele.setAttribute("class", "dag afsprbez selected");
                    }

                }
                else {
                    ele.setAttribute("class", "dag afspr");
                    if (testing[i].dag == dedag) {
                        ele.setAttribute("class", "dag afspr selected");
                    }

                }


            }
            else {

                if (ele.className == "dag afspr") {
                    ele.setAttribute("class", "dag afsprbez");
                    if (testing[i].dag == dedag) {
                        ele.setAttribute("class", "dag afsprbez selected");
                    }
                }
                else {
                    ele.setAttribute("class", "dag bez");
                    if (testing[i].dag == dedag) {
                        ele.setAttribute("class", "dag bez selected");
                    }
                }
            }

        }
        else {
            console.log("andere maand");
        }
        if (testing[i].dag == dedag) {
            dzuur = testing[i].uur;

            if (soortafspraak == 0) {
                document.getElementById("d" + dzuur).setAttribute("class", "afspr");
            }
            else {
                document.getElementById("d" + dzuur).setAttribute("class", "bez");
            }
        }
    }

}
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}
function modalcreate(uur) {
    for (let i = 0; i < testing.length; i++) {
        if (testing[i].uur == uur && testing[i].dag == dedag) {

            if (testing[i].geaccepteerd == 0) {
                console.log("dit is niet gekeurd");
                let body = document.getElementById('body');
                let modal = document.createElement("div");
                modal.setAttribute('id', "modal" + testing[i].uur);
                let content = document.createElement("div");
                let flexboxtw = document.createElement("div");
                flexboxtw.setAttribute("class", "flexboxtb");
                content.setAttribute("class", "modal-content");
                modal.setAttribute("class", "modal");

                let naam = document.createElement("p")
                naam.innerHTML = testing[i].naamklant;

                let email = document.createElement("p");
                email.innerHTML = testing[i].emailklant;

                let telefoon = document.createElement("p");
                telefoon.innerHTML = testing[i].telefoonklant;

                let type = document.createElement("p");
                if (testing[i].type == 1) {
                    type.innerHTML = "Klein onderhoud 30 minuten";
                }
                else if (testing[i].type == 2) {
                    type.innerHTML = "Groot onderhoud 1 uur";
                }
                else if (testing[i].type == 3) {
                    type.innerHTML = "Gesprek aankoop fiets 45 minuten";
                }


                let info = document.createElement("p");
                info.innerHTML = testing[i].info;

                let dtdag = document.createElement("p");
                dtdag.innerHTML = testing[i].dag;

                let dtuur = document.createElement("p");
                dtuur.innerHTML = testing[i].uur;

                let btn = document.createElement("button");
                button.setAttribute("Class", "btn");
                button.innerHTML = "sluiten";
                button.addEventListener("click", function () { modalremove(testing[i].uur) })
                flexboxtw.appendChild(naam);
                flexboxtw.appendChild(email);
                flexboxtw.appendChild(telefoon);
                flexboxtw.appendChild(type);
                flexboxtw.appendChild(dtdag);
                flexboxtw.appendChild(dtuur);
                flexboxtw.appendChild(info);



                let aform = document.createElement("form");
                let sform = document.createElement("form");
                aform.setAttribute("class", "center");
                aform.setAttribute("action", "../C/accept.php");
                aform.setAttribute("method", "POST");
                let abutton = document.createElement("button");
                abutton.setAttribute("name", "edit");
                abutton.setAttribute("value", testing[i].fk);
                let asymb = document.createElement("i");
                asymb.setAttribute("class", "fa fa-check");
                asymb.style.color = "green";

                let dsymb = document.createElement("i");
                dsymb.setAttribute("class", "fa fa-close");
                dsymb.style.color = "red";
                sform.setAttribute("class", "center");
                sform.setAttribute("action", "../C/reject.php");
                sform.setAttribute("method", "POST");
                let dbutton = document.createElement("button");
                dbutton.setAttribute("name", "delete");
                dbutton.setAttribute("value", testing[i].fk);

                abutton.appendChild(asymb);
                aform.appendChild(abutton);
                dbutton.appendChild(dsymb);
                sform.appendChild(dbutton);
                flexboxtw.appendChild(aform);
                flexboxtw.appendChild(sform);
                flexboxtw.appendChild(button);
                content.appendChild(flexboxtw);
                modal.appendChild(content);
                body.appendChild(modal);
                modal.style.display = "block";

            }
            else {
                console.log("dit is wel gekeurd");
                let body = document.getElementById('body');
                let modal = document.createElement("div");
                modal.setAttribute('id', "modal" + testing[i].uur);
                let content = document.createElement("div");
                let flexboxtw = document.createElement("div");
                flexboxtw.setAttribute("class", "flexboxtb");
                content.setAttribute("class", "modal-content");
                modal.setAttribute("class", "modal");

                let naam = document.createElement("p")
                naam.innerHTML = testing[i].naamklant;

                let email = document.createElement("p");
                email.innerHTML = testing[i].emailklant;

                let telefoon = document.createElement("p");
                telefoon.innerHTML = testing[i].telefoonklant;

                let type = document.createElement("p");
                if (testing[i].type == 1) {
                    type.innerHTML = "Klein onderhoud 30 minuten";
                }
                else if (testing[i].type == 2) {
                    type.innerHTML = "Groot onderhoud 1 uur";
                }
                else if (testing[i].type == 3) {
                    type.innerHTML = "Gesprek aankoop fiets 45 minuten";
                }


                let info = document.createElement("p");
                info.innerHTML = testing[i].info;

                let dtdag = document.createElement("p");
                dtdag.innerHTML = testing[i].dag;

                let dtuur = document.createElement("p");
                dtuur.innerHTML = testing[i].uur;

                let button = document.createElement("button");
                button.setAttribute("Class", "btn");
                button.innerHTML = "sluiten";
                button.addEventListener("click", function () { modalremove(testing[i].uur) })
                flexboxtw.appendChild(naam);
                flexboxtw.appendChild(email);
                flexboxtw.appendChild(telefoon);
                flexboxtw.appendChild(type);
                flexboxtw.appendChild(dtdag);
                flexboxtw.appendChild(dtuur);
                flexboxtw.appendChild(info);
                flexboxtw.appendChild(button);
                content.appendChild(flexboxtw);
                modal.appendChild(content);
                body.appendChild(modal);
                modal.style.display = "block";
            }


        }
    }
}
function modalremove(tijd) {
    let modal = document.getElementById("modal" + tijd);

    modal.remove();
}
