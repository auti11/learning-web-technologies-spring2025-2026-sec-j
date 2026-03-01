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

   else  if (!/^[a-zA-Z.-]/.test(name)) {
        console.log("Must start with a letter");
        return false;
    }
  
   else  if (!/^[a-zA-Z]/.test(name)) {
        console.log("Must start with a letter");
        return false;
    }
    console.log("Valid Name");
    return true;
}

