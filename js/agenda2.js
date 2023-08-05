let prev = document.createElement("div");
let label = document.getElementById("label");
let label2 = document.getElementById("label2");
let label3 = document.getElementById("label3");
let vandaag = document.getElementById("0");
let vorigegeselecteerde = document.createElement("div");
let hidden = document.getElementById("hidden");
let hidden2 = document.getElementById("hidden2");
let datum = new Date();
let button = document.getElementById("button");
let text = document.getElementById("textarea");
let input2 = document.getElementById("tekst");
let maand = document.getElementById("maand");
function form() {
    let cookie = getCookie("dagwaarde");
    console.log(cookie);
    console.log(document.getElementById(cookie));
    let geselecteerde = document.getElementById(cookie);
    geselecteerde.setAttribute("class", "selected");
    let maand = document.getElementById("maand").innerHTML;
    let dag = document.getElementsByClassName("selected");
    dag = dag[0].innerHTML;
    console.log(maand + " " + dag);
    label2.innerHTML = dag;
    label3.innerHTML = maand;

}
maand = maand.innerHTML;
function addDays(days) {
    var date = new Date();
    date.setDate(date.getDate() + days);
    return date;
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}
function del_cookie(name) {
    document.cookie = name +
        '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
}
let month = datum.getMonth() + 1;
console.log(month);
switch (maand) {
    case maand = "Januari":
        res = "1"
        break;
    case maand = "Februari":
        res = "2"
        break;
    case maand = "Maart":
        res = "3"
        break;
    case maand = "April":
        res = "4"
        break;
    case maand = "Mei":
        res = "5"
        break;
    case maand = "Juni":
        res = "6"
        break;
    case maand = "Juli":
        res = "7"
        break;
    case maand = "Augustus":
        res = "8"
        break;
    case maand = "September":
        res = "9"
        break;
    case maand = "Oktober":
        res = "10"
        break;
    case maand = "November":
        res = "11"
        break;
    case maand = "December":
        res = "12"
        break;
    default:
        break;
}
console.log(month - res);
function test() {
    let maand = document.getElementById("maand");
    maand = maand.innerHTML;
    prev.setAttribute("class", "uren");
    let x = event.target.value;
    let h = document.getElementById(x);
    let parent = h.parentNode;
    prev = h.parentNode;
    parent.setAttribute("class", "uren selected");
    hidden.value = x;
    if (month - res >= -1 && month - res <= 0 || month - res == 11) {
        button.setAttribute("class", "vis");
        console.log(x)
    }
    else {


        labeltekst = document.createElement("label");
        labeltekst.innerHTML = "Je kan niet zover in de toekomst boeken";
        document.getElementById("form1").appendChild(labeltekst);


    }


    label.innerHTML = x;
}
function ladenuren(waarde) {

    del_cookie("dagwaarde");
    location.reload();
    document.cookie = "dagwaarde=" + waarde;
    vandaag.setAttribute("class", "dag");
    label.innerHTML = "nog geen uur geselecteerd";
    date = addDays(waarde)
    let day = date.getDate();
    let year = date.getElementById(jaar).innerHTML;
    hidden2.value = year + "-" + maand + "-" + day;
}
let dag = document.getElementsByClassName("selected")
let Cookiemaand = "";
dag = (dag[0].innerHTML);
if (res < 10) {
    Cookiemaand = "0" + res;


}
else {
    Cookiemaand = res;
}
document.cookie = "Dag=" + jaar.innerHTML + "-" + Cookiemaand + "-" + dag;
