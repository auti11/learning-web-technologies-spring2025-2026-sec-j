function vName() {
    let name = document.getElementById("name").value;

    if (name === "") {
        console.log("Cannot be empty");
        return false;
    }
    else if (name.split(" ").length < 2) {
        console.log("Must contain at least 2 words");
        return false;
    }
    else if (!/^[a-zA-Z]/.test(name)) {
        console.log("Must start with a letter");
        return false;
    }

    console.log("Valid Name");
    return true;
}

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

function isEmail(email) {
    var atsymbol = email.indexOf("@");
    if (atsymbol < 1) return false;

    var dot = email.indexOf(".");
    if (dot <= atsymbol + 1) return false;

    if (dot === email.length - 1) return false;

    return true;
}


function vGender() {
    var gender = document.getElementsByName("gender");
    var isChecked = false;

    for (var i = 0; i < gender.length; i++) {
        if (gender[i].checked) {
            isChecked = true;
            break;
        }
    }

    if (!isChecked) {
        console.log("At least one option must be selected");
        return false;
    }

    console.log("Valid Gender");
    return true;
}


function vBloodGroup() {
    var bloodGroup = document.getElementById("bloodGroup").value;

    if (bloodGroup === "") {
        console.log("Select blood group");
        return false;
    }

    console.log("Valid Blood Group");
    return true;
}


function vDOB() {
    let dd = document.getElementById("dd").value;
    let mm = document.getElementById("mm").value;
    let yyyy = document.getElementById("yyyy").value;

    if (dd === "" || mm === "" || yyyy === "") {
        console.log("Cannot be empty");
        return false;
    }

    if (dd < 1 || dd > 31) {
        console.log("Invalid day");
        return false;
    }

    if (mm < 1 || mm > 12) {
        console.log("Invalid month");
        return false;
    }

    if (yyyy < 1900 || yyyy > 2026) {
        console.log("Invalid year");
        return false;
    }

    console.log("Valid Date of Birth");
    return true;
}


function vDegree() {
    var degree = document.getElementsByName("degree");
    var isChecked = false;

    for (var i = 0; i < degree.length; i++) {
        if (degree[i].checked) {
            isChecked = true;
            break;
        }
    }

    if (!isChecked) {
        console.log("At least one option must be selected");
        return false;
    }

    console.log("Valid Degree");
    return true;
}


function vProfilePicture() {
    let picture = document.getElementById("Picture").value;

    if (picture === "") {
        console.log("Picture cannot be empty");
        return false;
    }

    console.log("Valid Profile Picture");
    return true;
}


function vPersonProfile() {

    if (!vName()) return false;
    if (!vEmail()) return false;
    if (!vGender()) return false;
    if (!vDOB()) return false;
    if (!vBloodGroup()) return false;
    if (!vDegree()) return false;
    if (!vProfilePicture()) return false;

    console.log("All Valid");
}