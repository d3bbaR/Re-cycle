let prev = document.createElement("div");
let form = document.getElementById("form");
let label = document.getElementById("label");
let label2 = document.getElementById("label2");
let label3 = document.getElementById("label3");
let vandaag = document.getElementById("0");
let vorigegeselecteerde = document.createElement("div");
let hidden = document.getElementById("hidden");
let hidden2 = document.getElementById("hidden2");
let datum = new Date();
let button = document.getElementById("button");
function addDays(days) {
    var date = new Date();
    date.setDate(date.getDate() + days);
    return date;
}
let cookie = getCookie("dagwaarde");
let geselecteerde = document.getElementById(cookie);
geselecteerde.setAttribute("class", "selected");
console.log(cookie);
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
    form.setAttribute("class", "inv");
    prev.setAttribute("class", "uren");
    let x = event.target.value;
    let h = document.getElementById(x);
    let parent = h.parentNode;
    prev = h.parentNode;
    parent.setAttribute("class", "selected");
    x = x.slice(0, -5);
    if (x.length == 12) {
        x = x.slice(0, -1);
    }
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
    let month = date.getMonth();
    let maand = date.getMonth() + 1;
    const monthNames = ["Januari", "Februari", "Maart", "April", "Mei", "Juni",
        "Juli", "Augustus", "September", "October", "November", "December"
    ];
    let day = date.getDate();
    let year = date.getFullYear();
    label2.innerHTML = day;
    label3.innerHTML = monthNames[month];
    hidden2.value = year + "-0" + maand + "-" + day;
}