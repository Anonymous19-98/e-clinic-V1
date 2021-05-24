<?php
session_start();


if(isset($_POST["submit-auth"])){
    
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    require_once '../includes/class.autoload.inc.php';
    require_once '../classes/posts.class.php';
    

    $auth = new Authentication();
    $validate = new Validation();

    
    if(($auth->LoginAdmin($username, $password))){
        $resultofQuery = $auth->LoginAdmin($username, $password);
        $_SESSION['username-admin'] = ["id"=>$resultofQuery['id'],"username"=>$resultofQuery["Username"],"password"=> $resultofQuery["Password"]];
        
        header("Location: ../admin/index.php");
        exit();

    } 
    
    else if (($auth->LoginDoctor($username, $password))){
        $resultofQuery = $auth->LoginDoctor($username, $password);

        $_SESSION['username'] = $resultofQuery["Username"];
        $_SESSION['password'] = $resultofQuery["Password"];
        header("Location: ../home.php");
        exit();
    }
    
    else if(($validate->emailExist($username))>0){
        $getPwd = $validate->emailExist($username);
        $PWD = $getPwd['Password'];
        $check = password_verify($password, $PWD);
        if($check === true){
            $resultofQuery = $auth->LoginPatient($username, $password);
            $_SESSION['username-patient'] = ["id"=>$resultofQuery['id'],"username"=>$resultofQuery["Username"],"password"=>$resultofQuery["Password"]];
            header("Location: ../home.php");
            exit();
        }
    }
    else if(($validate->usernameExist($username))>0){
        $getPwd = $validate->usernameExist($username);
        $PWD = $getPwd['Password'];
        $check = password_verify($password, $PWD);
        if($check === true){
            $resultofQuery = $auth->LoginPatient($username, $password);
            $_SESSION['username-patient'] = ["id"=>$resultofQuery['id'],"username"=>$resultofQuery["Username"],"password"=>$resultofQuery["Password"]];
            header("Location: ../home.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php");
    }
}
?>