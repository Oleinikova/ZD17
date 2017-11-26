<?php
session_start();
if($_POST['capcha'] != $_SESSION['capcha']){ 
    echo "Текст с картинки введен не верно!";
}else{
    echo "Ура текст совпал!";
}
?>