const showPassword = document.getElementById("showPassword");

showPassword.addEventListener('change', e => { //untuk menampi;kan password
    const fieldPassword = document.getElementById("password");

    if (e.target.checked) {
        fieldPassword.setAttribute('type', 'text')
    }
    else {
        fieldPassword.setAttribute('type', 'password')
    }
})