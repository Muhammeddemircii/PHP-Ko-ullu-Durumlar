<?php
    // $sayi=5;

    // switch($sayi){
    //     case 5:
    //         echo "beş";
    //         break;
    //     case 6:
    //         echo "altı";
    //         break;
    //     default:
    //         echo "Yanlış Veri";
    // }

            //if-else ile
    // $not=60;

    // if($not>=0 and $not<25){
    //     echo "Notunuz sıfır.";
    // } elseif($not>=25 and $not<45){
    //     echo "Notunuz bir.";
    // }elseif($not>=45 and $not<55){
    //     echo "Notunuz iki.";
    // }elseif($not>=55 and $not<70){
    //     echo "Notunuz üç.";
    // }elseif($not>=70 and $not<85){
    //     echo "Notunuz dört.";
    // }elseif($not>=85 and $not<100){
    //   echo "Notunuz beş.";
    // }else{
    //     echo "Yanlış veri girdiniz.";
    // }



            //switch case ile
    // $not=60;

    // switch(true){
    //     case ($not>=0 and $not<25):
    //         echo "Notunuz sıfır.";
    //         break;
    //     case ($not>=25 and $not<45):
    //         echo "Notunuz bir.";
    //         break;
    //     case ($not>=45 and $not<55):
    //         echo "Notunuz iki.";
    //         break;
    //     case ($not>=55 and $not<70):
    //         echo "Notunuz üç.";
    //         break;
    //     case ($not>=70 and $not<85):
    //         echo "Notunuz dört.";
    //         break;
    //     case ($not>=85 and $not<100):
    //         echo "Notunuz beş.";
    //         break;
    // }
    $ay="Mart";
    switch($ay){
        case "Aralık":
        case "Ocak":
        case "Şubat":
            echo "Kış Ayındasınız.";
            break;
        case "Mart":
        case "Nisan":
        case "Mayıs":
            echo "İlkbahar Ayındasınız.";
            break;
        case "Haziran":
        case "Temmuz":
        case "Ağustos":
            echo "Yaz Ayındasınız.";
            break;
        case "Eylül":
        case "Ekim":
        case "Kasım":
            echo "Sonbahar Ayındasınız.";
            break;
        }
?>