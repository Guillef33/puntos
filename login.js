let inputEmail = document.getElementById('inputEmail');
let inputPassword = document.getElementById('inputPassword');
let errorEmail = document.getElementById('errorEmail');
let errorPassword = document.getElementById('errorPassword');
let login = document.getElementById('login');

login.addEventListener('submit', e => {
    // e.preventDefault();
    validar();
})


function validar() {
    //si el campo Email está vacío
    if( inputEmail.value == '' ){
        //mostrar mensaje
        errorEmail.innerHTML = '<img src="error.png"> Complete el campo Email';
        //evitamos que se envíe el formulario
        return false;
    }

    if( inputPassword.value == '' ){
        //mostrar mensaje
        errorPassword.innerHTML = '<img src="error.png"> Complete el campo Password';
        //evitamos que se envíe el formulario
        return false;
    }
    //enviamos el formulario
    return true;
}


function scopeExample() {
    /TDZ age, TDZ hands
    let age; // 1
    age = 20; // 2 3 Finaliza TDZ, finaliza cuando se inicializa.
    let hands = 2; // 3 Finaliza TDZ
}

// Motor de JS / https://www.youtube.com/results?search_query=motor+de+js