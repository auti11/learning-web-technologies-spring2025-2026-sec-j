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
