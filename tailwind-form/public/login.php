<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "talas@talasweb.com" && $password=="1234"){
        echo "Başarılı";
    }
    else{
        echo "No";
    }


?>