// alert('Hello World!');

document.addEventListener('DOMContentLoaded', () => {
    alert('DOM berhasil dimuat')
    validateForm()
})

function validateForm() {
    const emailField = document.getElementById('email').value;
    const usernameField = document.getElementById('username').value;
    const passwordField = document.getElementById('password').value;


    if (emailField == "") {
        document.getElementById('email_error').innerText = "Please enter the email";

    } else {
        document.getElementById('email_error').innerText = "";
    }

    if (usernameField == "") {
        document.getElementById('username_error').innerText = "Please enter the username";

    } else {
        document.getElementById('username_error').innerText = ""
    }

    if (passwordField == "") {
        document.getElementById('password_error').innerText = "Please enter the email";
    } else {
        document.getElementById('password_error').innerText = "";
    }

}

const showPassword = document.getElementById("showPassword");

showPassword.addEventListener('change', e => { //untuk menampi;kan password
    const fieldPassword = document.getElementById("password");

    if (e.target.checked) {
        fieldPassword.setAttribute('type', 'text')
    }
    else {
        fieldPassword.setAttribute('type', 'password')
    }
});

