
function vProfilePicture() {
    let userid = document.getElementById("userId").value;
    let picture = document.getElementById("Picture").value;
    if(userid === "" || userid <= 0) {
        console.log("User ID cannot be empty or negative");
        return false;
    }
    if(picture === "") {
        console.log("Picture cannot be empty");
        return false;
    }
    console.log("Valid Profile Picture");
    return true;
}
