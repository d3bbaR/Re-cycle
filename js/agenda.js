prev = document.createElement("div");
form = document.getElementById("form");
let label = document.getElementById("label");
let label2 = document.getElementById("label2");
let label3 = document.getElementById("label3");
let div = document.getElementById("kal0");
let vandaag = document.getElementById("0");
vandaag.setAttribute("class", "selected");
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

function test() {
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

    document.cookie = "dagwaarde=" + waarde;
    vandaag.setAttribute("class", "dag");
    vorigegeselecteerde.setAttribute("class", "dag");
    let geselecteerde = document.getElementById(waarde);
    vorigegeselecteerde = document.getElementById(waarde);
    geselecteerde.setAttribute("class", "selected");
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
    div.setAttribute("class", "inv");
    selected = document.getElementById("kal" + waarde);
    selected.setAttribute("class", "kal");
    div = selected;
}