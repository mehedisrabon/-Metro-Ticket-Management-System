function validatePassword() {
    const pass = document.getElementById("new_pass").value;
    const confirm = document.getElementById("confirm_pass").value;
    const error = document.getElementById("passError");

    error.innerHTML = "";

    if (pass === "") {
        error.innerHTML = "Please enter a new password.";
        return false;
    }

    if (pass.length < 4) {
        error.innerHTML = "Password must be at least 4 characters.";
        return false;
    }

    if (pass !== confirm) {
        error.innerHTML = "Passwords do not match!";
        return false;
    }

    return true;
}