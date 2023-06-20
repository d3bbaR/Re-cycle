function gen(id) {
    let form = document.getElementById('fotoform');
    let label = document.createElement('label');
    let img = document.createElement('img');
    let input = document.createElement('input');
    let imgsrc = document.getElementById('img' + id).src;
    let value = document.getElementById(id).innerHTML;
    //img.src = imgsrc;
    label.innerHTML = value;
    input.setAttribute('name', 'naamfiets');
    input.setAttribute('value', value);
    input.style.display = 'none';
    let button = document.createElement('button');
    button.setAttribute('type', 'submit');
    button.setAttribute('id', 'btn');
    button.setAttribute('value', id);
    button.setAttribute('name', 'pkbtn');
    button.innerHTML = 'uploaden foto';
    form.style.display = 'block';
    document.getElementById('selectbox').style.display = 'none';
    form.appendChild(label);
    form.appendChild(img);
    form.appendChild(input);
    form.appendChild(button);

}


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

switch (maand) {
    case maand = "Januari":
        maand = "01"
        break;
    case maand = "Februari":
        maand = "02"
        break;
    case maand = "Maart":
        maand = "03"
        break;
    case maand = "April":
        maand = "04"
        break;
    case maand = "Mei":
        maand = "05"
        break;
    case maand = "Juni":
        maand = "06"
        break;
    case maand = "Juli":
        maand = "07"
        break;
    case maand = "Augustus":
        maand = "08"
        break;
    case maand = "September":
        maand = "09"
        break;
    case maand = "Oktober":
        maand = "10"
        break;
    case maand = "November":
        maand = "11"
        break;
    case maand = "December":
        maand = "12"
        break;
    default:
        break;
}

function sluiten(dat) {
    let form = document.getElementById("formsluiten");
    let label = document.getElementById("label");
    let input = document.getElementById("input");
    let label2 = document.getElementById("label2");
    let button = document.getElementById("button")
    let day = document.getElementsByClassName("selected")[0].innerHTML;
    let year = document.getElementById("jaar").innerHTML;
    console.log(year);
    button.value = year + "-" + maand + "-" + day;
    button.innerHTML = "Sluit dit uur";

    label.innerHTML = "uur: " + document.getElementById(dat).value;
    label2.innerHTML = "dag: " + document.getElementsByClassName("selected")[0].innerHTML;

    input.value = document.getElementById(dat).value;
    form.style.display = "block";


}
function sluitendag() {
    let form = document.getElementById("formsluitendag");
    let input = document.getElementById("inputdag");
    let label2 = document.getElementById("label2dag");
    let button = document.getElementById("buttondag");

    let day = document.getElementsByClassName("selected")[0].innerHTML;
    let year = document.getElementById("jaar").innerHTML;
    console.log(year);
    button.value = year + "-" + maand + "-" + day;
    button.innerHTML = "Sluit deze dag";


    label2.innerHTML = "dag: " + document.getElementsByClassName("selected")[0].innerHTML;


    form.style.display = "block";

}