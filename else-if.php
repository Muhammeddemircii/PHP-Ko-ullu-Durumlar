<?php
    // $username="admin";
    // $password="1234";
    
    // if($username != "admin"){
    //     echo "Kullanıcı adı yanlış";
    // } elseif($password != "1234"){
    //     echo "Parola Yanlış";
    // }else{
    //     echo "Merhaba BTK";
    // }


    $saat=10;

    if($saat < 10){
        echo "Günaydın";
    }elseif($saat < 18){
        echo "İyi Günler";
    }else{
        echo "İyi Akşamlar";
    }

?>