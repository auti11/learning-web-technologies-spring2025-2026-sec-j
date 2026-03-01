function vEmail() {
    let email = document.getElementById("email").value; 
    if (email === "") {
        console.log("Cannot be empty");
        return false;
    }
    else if (!isEmail(email)) {
        console.log("Invalid email format");
        return false;
    }
    console.log("Valid Email");
    return true;
}
let isEmail = (email) => {
    var atsymbol = email.indexOf("@");
    if (atsymbol < 1) return false;
    var dot = email.indexOf(".");
    if (dot <= atsymbol + 1) return false;
    if (dot === email.length - 1) return false;
    return true;
}
