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
document.onload = form();
function form() {
    let cookie = getCookie("dagwaarde");
    console.log(cookie);
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
    button.setAttribute("class", "vis");
    console.log(x)


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
    let year = date.getFullYear();
    hidden2.value = year + "-" + maand + "-" + day;
}