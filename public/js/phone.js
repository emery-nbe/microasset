const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });


let pw1 = document.querySelector("#pw1");
let pw2 = document.querySelector("#pw2");
let alert_d = document.querySelector(".alert-danger");

if (pw1 != pw2){
    alert_d.removeAttribute('d-none');
}

