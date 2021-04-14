<?php

include_once '../header.php';


if(isset($_POST['name']) && empty($_POST['name']) == false){
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $password = md5(addslashes($_POST['password']));
    $confirmPassword = md5(addcslashes($_POST['confirmPassword']));

    //$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    //$pdo->query($sql);

    //volta a pagina iniciar
    //header("Location: index.php");

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
}


include_once '../footer.php';