<?php
$oplata = "Pochta";
switch($oplata){
    case "Bank":
    echo "Ви вибрали способ оплати банк...";
    break;

    case "Karta":
    echo "Ви вибрали способ оплати через карту...";
    break;

    case "Pochta":
    echo "Ви вибрали способ оплати через почту...";
    break;

    case "Nalichka":
        echo "Ви вибрали способ оплати через почту...";
        break;

    default:
    echo "Ви нічого не вибрали";
    break;

}

?>