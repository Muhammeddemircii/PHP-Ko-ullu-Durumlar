<?php
    $yas=20;
    $egitim= "lise";

    $sonuc=($yas >= 18) 
            ? (($egitim =="lise")
                ? "Ehliyet Alabilir"
                : "Eğitim Durumu yetersiz")
            :"Yaşınız Tutmuyor.";
    echo $sonuc;

?>