
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