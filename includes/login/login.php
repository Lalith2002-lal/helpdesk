<?php


include_once('../config/config.php');

$server_method = $_SERVER['REQUEST_METHOD'];

try {
    
    if($server_method != 'POST'){
        throw new Exception('Invalid Request Method');
    }
    elseif (!isset($_POST['email']) || !isset($_POST['password'])) {
        if(!isset($_POST['email']) && !isset($_POST['password']) ){
            throw new Exception('Both Email and Password field is required ');        
        }elseif(!isset($_POST['email'])){
            throw new Exception('Email field is required ');
        }
        else{
            throw new Exception('Password field is required ');
        }
    }
    elseif (empty($_POST['email']) || empty($_POST['password'])) {
        if(empty($_POST['email']) && empty($_POST['password'])){
            throw new Exception('Both Email and Password should not be empty ');           
        }elseif(empty($_POST['email'])){
            throw new Exception('Email should not be empty ');           
        }else{
            throw new Exception('Password should not be empty ');
        }
    }
    else{
        $username = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT  * FROM `admin` WHERE `email` = '$username' AND `password` = '$password'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){
            $row=$result->fetch_assoc();
            if($username == $row['email'] && $password == $row['password']){              
                $response = [
                    'status'=>'ok',
                    'success'=>true,
                    'message'=>'Login Success'
                  ];
                
                  session_start(); 
                $_SESSION["userId"] = $username;
                 // header('Location:dashboard.php');
                  echo json_encode($response);
                //return $response;
              // echo 1;

            } else {
                 $response = [
                   'status'=>'ok',
                   'success'=>false,
                   'message'=>'userId or Password is incorrect!'
                 ];
                //  echo json_encode($response);
                echo json_encode($response);

            }
        }
        else {
            $response = [
              'status'=>'ok',
              'success'=>false,
              'message'=>'userId or Password is incorrect!'
            ];
           //  echo json_encode($response);
           echo json_encode($response);

       }
    }

} catch (Exception $e) {
     error_message($e);   
}

function error_message($e){
    $error_data = [
        "error" => true,
        "message" => $e->getMessage()
    ];

     echo json_encode($error_data);


}