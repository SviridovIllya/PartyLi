<?php
include("main/db/database.php");
//include $_SERVER['DOCUMENT_ROOT'] . 'main/db/database.php';
//require dirname(__FILE__).'\..\db\database.php';
//var_dump(dirname(__FILE__));

$erorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['password-first']);
    $passS = trim($_POST['password-second']);

    if ($login === '' || $email === '' || $passF === ''){
        $erorMessage = "Not all fields are filled";
    }elseif (mb_strlen($login,'UTF-8') < 2){
        $erorMessage = "Login must be more than 2 characters";
    }elseif ($passF !== $passS){
        $erorMessage = "Passwords in both fields must match";
    }
    else{
        $existence = selectOne('users',['email' => $email]);
        if ($existence['email'] === $email){
            $erorMessage = "User already exists";
        }else{
            $pass = password_hash($passF,PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id= insert('users',$post);
            $user = selectOne('users',['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            if ($_SESSION['admin']){
                header('location: '. BASE_URL. 'admin/admin.php');
            }else{
                header('location: '. BASE_URL);
            }

        }
    }

    //  $last_row = selectOne('users',['id'=>$id]);
}else{
    $login = '';
    $email = '';
}
   // $pass = password_hash( $_POST['password-second'],PASSWORD_DEFAULT);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if ($email === '' || $pass === '') {
        $erorMessage = "Not all fields are filled";
    }else{
        $existence = selectOne('users',['email' => $email]);
        if ($existence && password_verify($pass, $existence['password'])){
            echo 'Avto';
         }else{
            echo 'Error';
        }
    }
}
