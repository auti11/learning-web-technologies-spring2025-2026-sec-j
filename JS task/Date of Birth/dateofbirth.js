function vDOB() {
    let dd = document.getElementById("dd").value;
    let mm = document.getElementById("mm").value;
    let yyyy = document.getElementById("yyyy").value;
   if(dd === "" || mm === "" || yyyy === "") {
        console.log("Cannot be empty");
        return false;
    }
    if(dd < 1 || dd > 31) {
        console.log("Invalid day");
        return false;
    }
    if(mm < 1 || mm > 12) {
        console.log("Invalid month");
        return false;
    }
    if(yyyy < 1900 || yyyy > 2026) {
        console.log("Invalid year");
        return false;
    }

    console.log("Valid Date of Birth");
    return true;
}