<?php
require 'model.php';
session_start();

function signin(){
    if($_SESSION['id']) header("Location: index.php?page=dashboard");
    if($_POST){
        echo addUser($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']);
        header("Location: index.php?page=dashboard");
    }
    require 'views/signInView.php';
}

function login(){
    if($_SESSION['id']) header("Location: index.php?page=dashboard");
    if($_POST){
        loginUser($_POST['email'], $_POST['password']);
        if($_SESSION['id']) header("Location: index.php?page=dashboard"); else $alert = 1;
    }
    require 'views/loginView.php';
}
function dashboard(){
    if(!$_SESSION['id']) header("Location: index.php?page=signIn");
    $user = getLine('user', 'id', $_SESSION['id']);
    $meteo = meteo();
    $title = 'Tableau de bord';
    require 'views/dashboardView.php';
}

function settings(){
    if(!$_SESSION['id']) header("Location: index.php?page=signIn");
    if($_POST){
        foreach($_POST as $key => $value)
        {
            if($value!='' and $key!='password') update('user', $key, $value, 'id', $_SESSION['id']);
            if($value!='' and $key=='password') update('user', $key, md5($value), 'id', $_SESSION['id']);
        }
    }
    $user = getLine('user', 'id', $_SESSION['id']);
    if($_GET['action']=='delete'){
        delete('user', 'id', $_SESSION['id']);
        unset($_SESSION['id']);
        header("Location: index.php?page=signIn");
    }
    $title = 'Paramètres';
    require 'views/settingsView.php';
}

function logout()
{
    session_destroy();
    header("location: index.php");
    exit();
}