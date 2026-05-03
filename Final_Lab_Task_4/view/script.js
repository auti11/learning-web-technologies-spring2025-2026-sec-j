function signup(){

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;

  
    if(username == "" || password == "" || email == ""){
        document.getElementById('msg').innerHTML = "All fields required!";
        return;
    }

  
    let data = {
        username: username,
        password: password,
        email: email
    };

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhttp.send('user=' + JSON.stringify(data));

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let res = JSON.parse(this.responseText);
            document.getElementById('msg').innerHTML = res.message;
        }
    }
}