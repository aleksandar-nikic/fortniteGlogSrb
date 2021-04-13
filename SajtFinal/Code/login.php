<?php

#session_start();

if(isset($_POST['btnLogin'])){

    $mail = $_POST['lgnMail'];

    $pass = $_POST['lgnPass'];

    $errors=[];
    $rePass = "/^[\S]{8,}$/";

    if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $errors[] = "Your email is not valid, pleas enter an valid email.";
    }

    if(!preg_match($rePass,$pass)){
        $errors[] = "Your password is not valid, pleas enter an valid password.";
    }

    if(count($errors)>0){
        $_SESSION['errors'] = $errors;
        header("Location: ../index.php?page=login");
    }
    else{
        require_once "connection.php";

        $pass = MD5($pass);

        $query = "SELECT k.idKorisnik, k.email, k.userName, k.imePrezime, u.naziv FROM korisnik k INNER JOIN uloga u 
              ON k.idUloga = u.idUloga WHERE email = :email AND lozinka = :pass";

        $stmt = $connection->prepare($query);
        $stmt->bindParam(":email",$mail);
        $stmt->bindParam(":pass",$pass);

        $stmt->execute();

        $user=$stmt->fetch();

        if($user){
            $_SESSION['user']=$user;
            header("Location: ../index.php?page=login");
        }else{
            $_SESSION['greske'] = "You entered an invalid email or password.";
            header("Location: ../index.php?page=login");
        }
    }
}