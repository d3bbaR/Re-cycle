prev = document.createElement("div");
form = document.getElementById("form");
let label = document.getElementById("label");
let div = document.getElementById("kal0");
let vandaag = document.getElementById("0");
vandaag.setAttribute("class", "selected");
let vorigegeselecteerde = document.createElement("div");
let hidden = document.getElementById("hidden");
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
    console.log(x)

    label.innerHTML = x;
}
function ladenuren(waarde) {
    vandaag.setAttribute("class", "dag");
    vorigegeselecteerde.setAttribute("class", "dag");
    let geselecteerde = document.getElementById(waarde);
    vorigegeselecteerde = document.getElementById(waarde);
    geselecteerde.setAttribute("class", "selected");
    label.innerHTML = "nog geen uur geselecteerd";
    div.setAttribute("class", "inv");
    selected = document.getElementById("kal" + waarde);
    selected.setAttribute("class", "kal");
    div = selected;
}