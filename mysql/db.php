<?php

// napojení se do databáze
function Connection(){
    global $connection;
    $connection = mysqli_connect("localhost","root","","loginapplication");

    if($connection){
        echo "Jsme propojeni s databází";
    } else {
       die ("něco se pokazilo");
    }
}

// vložení dat z formuláře do databáze
function addFun(){
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Escapování inputů
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    // Hashování hesla
    $hashFormat = "$2y$10$";
    $salt = "U9twgg488EPGlMmkWrIDe9";
    $hasFormat_salt = $hashFormat.$salt;
    $password = crypt($password,$hasFormat_salt);

    // Vložení dat do databáze
    $query = "INSERT INTO users(username,password) VALUES('$username','$password')";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Nepodařilo se data zasplat do databáze.");
    }
}

// výběr dat z databáze
function selectFun(){
    global $connection;
    global $result;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Nepodařilo se vybrat data z databáze");
    }
}


// aktualizace dat z databáze
function UpdateFun(){
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query2 = "UPDATE users SET username='$username', password='$password' WHERE id = $id ";
    
    $result2 = mysqli_query($connection,$query2);
    
    if(!$result2){
        die("Query selhalo");
    }
}

// výmaz dat z databáze
function DeleteFun(){
    global $connection;
    $id = $_POST["id"];

    $query2 = "DELETE FROM users WHERE id = $id";
    
    $result2 = mysqli_query($connection,$query2);
    
    if(!$result2){
        die("Query selhalo");
    }
}


?>