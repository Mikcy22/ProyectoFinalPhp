var form = document.getElementById('signupForm');
form.addEventListener('submit', validateForm);

function validateForm(event) {

    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let email = document.getElementById('email').value;
    let numberPhone = document.getElementById('numberPhone').value;
    let password = document.getElementById('password').value;
    let passwordConfirm = document.getElementById('passwordConfirm').value;

    const regularExpresionEmail =/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

    function esEmailValido(email) {
        return /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(email);
      }
      
      function esNumberValido(numberPhone) {
        return/^\(\+34\)\d{9}$/.test(numberPhone);
      }


if(firstName === "" || lastName === "" || email === "" || numberPhone === "" || password === ""){
    alert("Rellene todos los campos");
        event.preventDefault();
        return false;
}else if(firstName.length <4 || lastName.length < 4){
    alert("El nombre y los apellidos han de tener mas de 4 caracteres");
        event.preventDefault();
        return false;
}else if(password!== passwordConfirm){
    alert("La contraseña y la confirmacion , no coinciden");
    event.preventDefault();
    return false;
}else if(!esEmailValido(email)){
    alert("El email no es valido");
        event.preventDefault();
        return false;
}else if(!esNumberValido(numberPhone)){
    alert("El numero de telefono no es valido");
        event.preventDefault();
        return false;
}


}