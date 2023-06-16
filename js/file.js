function gen(id) {
    let form = document.getElementById('fotoform');
    let button = document.createElement('button');
    button.setAttribute('type', 'submit');
    button.setAttribute('id', 'btn');
    button.setAttribute('value', id);
    button.innerHTML = 'uploaden foto';
    form.appendChild(button);

}