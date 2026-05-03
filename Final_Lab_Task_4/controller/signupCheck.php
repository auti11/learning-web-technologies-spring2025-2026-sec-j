<?php
session_start();

$user = $_POST['user'];
$data = json_decode($user);

$response = [];

if(!isset($_SESSION['users'])){
    $_SESSION['users'] = [];
}

if($data->username == "" || $data->password == "" || $data->email == ""){
    $response['status'] = false;
    $response['message'] = "All fields required!";
}
else{

    foreach($_SESSION['users'] as $u){
        if($u['username'] == $data->username){
            echo json_encode([
                "status"=>false,
                "message"=>"Username already exists!"
            ]);
            exit();
        }
    }
 $newUser = [
        "id" => count($_SESSION['users']) + 1,
        "username" => $data->username,
        "password" => $data->password,
        "email" => $data->email
    ];

$_SESSION['users'][] = $newUser;

    $response['status'] = true;
    $response['message'] = "Signup successful!";
}

echo json_encode($response);
?>