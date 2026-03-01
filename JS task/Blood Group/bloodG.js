
function vBloodGroup() {
    var bloodGroup = document.getElementsByName("bloodGroup");
    var isChecked = false;
    for (var i = 0; i < bloodGroup.length; i++) {
        if (bloodGroup[i].checked) {
            isChecked = true;
            break;
        }
    }
    if (!isChecked) {
        console.log("At least one option must be selected");
        return false;
    }
    console.log("Valid Blood Group");
    return true;
}
