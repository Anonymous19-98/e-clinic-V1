<?php

include('includes/class.autoload.inc.php');
include('classes/posts.class.php');
$admin = new Admin();
$doctor = new Doctor();
$department = new Deptartment();
$patient = new Patient();
//$login = new Login();
$Message = new ContactUs();
$validate = new Validation();

if (isset($_POST['submit-admin'])) {
    $name = $_POST['admin-name'];
    $email = $_POST['admin-email'];
    $username = $_POST['admin-username'];
    //$password = $_POST['admin-PWD'];
    $password = password_hash($_POST['admin-PWD'], PASSWORD_DEFAULT);
    $Created_date = date("Y-m-d H:i:s A");


    $admin->addadmin($name, $email, $Created_date, $username, $password);
    //$login->addlogin($username, $password);

    header("location: {$_SERVER['HTTP_REFERER']}");
} else if (isset($_POST['update-admin'])) {
    $id = $_GET['id'];
    $name = $_POST['admin-name'];
    $username = $_POST['admin-username'];
    $email = $_POST['admin-email'];
    $password = $_POST['admin-PWD'];
    //$password = password_hash($_POST['admin-PWD'], PASSWORD_DEFAULT);
    $Created_date = date("Y-m-d H:i:s A");


    $admin->updateadmin($name, $username, $email, $password, $Created_date, $id);

    header("location: {$_SERVER['HTTP_ORIGIN']}/last/admin/admins.php");
} else if (isset($_POST['submit-dr'])) {

    $name = $_POST['dr-name'];
    $age = $_POST['dr-age'];
    $phone = $_POST['dr-phone'];
    $email = $_POST['dr-email'];
    $address = $_POST['dr-address'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    //$password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
    $created_date = date("Y-m-d H:i:s A");

    $doctor->adddoctor($name, $age, $phone, $email, $address, $username, $password);

    header("location: {$_SERVER['HTTP_REFERER']}");
} else if (isset($_POST['update-dr'])) {
    $id = $_GET['id'];
    $name = $_POST['dr-name'];
    $age = $_POST['dr-age'];
    $phone = $_POST['dr-phone'];
    $email = $_POST['dr-email'];
    $address = $_POST['dr-address'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $Created_date = date("Y-m-d H:i:s A");


    $doctor->updatedoctor($name, $age, $phone, $email, $address, $username, $password, $Created_date, $id);
    header("location: {$_SERVER['HTTP_ORIGIN']}/last/admin/doctors.php");
} else if (isset($_POST['submit-dept'])) {
    $name = $_POST['dept-name'];

    $department->adddept($name);
    header("location:admin/departments.php");
} else if (isset($_POST['update-dept'])) {
    $id = $_GET['id'];
    $name = $_POST['dept-name'];

    $department->updatedept($name, $id);
    header("location: {$_SERVER['HTTP_ORIGIN']}/last/admin/departments.php");
} else if (isset($_POST['submit-patient'])) {

    $name = $_POST['patient-name'];
    $phone = $_POST['patient-phone'];
    $email = $_POST['patient-email'];
    $address = $_POST['patient-address'];
    $username = $_POST['patient-username'];
    $password = $_POST['patient-password'];
    $rePassword = $_POST['patient-co-password'];
    $errors = array();

    if ($validate->emailExist($email)>0) {
        $errors ['Email'] = "Email is Already exits";
    } if ($validate->usernameExist($username)) {
        $errors ['Userame'] = "Username is Already exits";
    } if ($validate->passwordMatch($password, $rePassword)) {
        $errors ['Co-Password'] = "Your Passwords Do not Match";
    } if ($validate->invalidEmail($email)) {
        $errors ['Email'] = "Choose Another Email";
    } if ($validate->invalidPassword($password, $rePassword)) {
        $errors ['Passowd'] = "Your Password Must contains Numbers, Capital letters, and Small letters";    
    }
     if(is_numeric($name)){
         $errors ['Userame'] = "Name must be charecters only";
     } else {

        if(empty($errors)){
            $patient->addPatient($name, $phone, $email, $address, $username, password_hash($password, PASSWORD_DEFAULT));
            header("location: {$_SERVER['HTTP_ORIGIN']}/last/login.php");
        }
        else{
            $msg="";
            foreach($errors as $error){
                $msg.= $error." || ";
            }
                 echo"<script>alert('$msg')</script>";
                 echo "<script>window.open('signin.php', '_self')</script>";
             }
        }
        
} else if (isset($_POST['update-patient'])) {
    $id = $_POST["patient-id"];
    $name = $_POST['patient-name'];
    $phone = $_POST['patient-phone'];
    $email = $_POST['patient-email'];
    $address = $_POST['patient-address'];
    $username = $_POST['patient-username'];
    $password = $_POST['patient-password'];
    $rePassword = $_POST['patient-co-password'];


    $patient->updatePatient($name, $username, $email, $password, $phone, $address, $id);
    header("location: {$_SERVER['HTTP_ORIGIN']}/last/home.php");
} else if (isset($_POST['submit-message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $Message->sendmessage($name, $email, $message);
    header("location: {$_SERVER['HTTP_ORIGIN']}/last/contactus.php");
} else if (isset($_GET['action'], $_GET['id'])) {

    $id = $_GET['id'];
    switch ($_GET["action"]) {
        case "del-admin":
            $admin->deleteadmin($id);
            header("location:admin/users.php");
            break;
        case "del-dr":
            $doctor->deletedoctor($id);
            header("location:admin/doctors.php");
            break;
        case "del-dept":
            $department->deletedept($id);
            header("location:admin/departments.php");
            break;
        case "del-Patient":
            $patient->deletePatient($id);
            header("location:admin/patients.php");
            break;
        case "del-Message":
            $Message->deletemessage($id);
            header("location:admin/index.php");
            break;

        default:
            header("location:admin/index.php");
    }
    header("location:admin/index.php");
}
    