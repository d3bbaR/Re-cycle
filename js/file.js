function gen(id) {
    let form = document.getElementById('fotoform');
    let label = document.createElement('label');
    let img = document.createElement('img');
    let imgsrc = document.getElementById('img' + id).src;
    let value = document.getElementById(id).innerHTML;
    img.src = imgsrc;
    label.innerHTML = value;
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
    form.appendChild(button);

}