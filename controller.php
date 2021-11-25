<?php
ini_set('display_errors', 1);
require 'model.php';
session_start();

function index()
{
    require 'views/indexView.php';
}

function signin()
{
    if ($_SESSION['id']) header("Location: index.php?page=dashboard");
    if ($_POST) {
        echo addUser($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']);
        header("Location: index.php?page=dashboard");
    }
    require 'views/signInView.php';
}

function login()
{
    if ($_SESSION['id']) header("Location: index.php?page=dashboard");
    if ($_POST) {
        loginUser($_POST['email'], $_POST['password']);
        if ($_SESSION['id']) header("Location: index.php?page=dashboard");
        else $alert = 1;
    }
    require 'views/loginView.php';
}

function dashboard()
{
    if (!$_SESSION['id']) header("Location: index.php?page=signIn");
    $user = getLine('user', 'id', $_SESSION['id']);
    $meteo = meteo();
    if ($_POST['title'] and $_POST['content']) {
        //print_r($_POST);
        addPost($_SESSION['id'], $_POST['title'], $_POST['content']);
        //if($_SESSION['id']) header("Location: index.php?page=dashboard"); else $alert = 1;
    }
    if ($_POST['idPost'] and $_POST['comment']) {
        addComment($_POST['idPost'], $_SESSION['id'], $_POST['comment']);
    }
    $posts = getLines('post', '', '');
    $title = 'Fil d\'actualité';
    require 'views/dashboardView.php';
}

function dashboard2()
{

    require 'views/dashboardView.php';
}


function settings()
{
    if (!$_SESSION['id']) header("Location: index.php?page=signIn");
    if ($_POST) {
        foreach ($_POST as $key => $value) {
            if ($value != '' and $key != 'password') update('user', $key, $value, 'id', $_SESSION['id']);
            if ($value != '' and $key == 'password') update('user', $key, md5($value), 'id', $_SESSION['id']);
        }
    }
    $user = getLine('user', 'id', $_SESSION['id']);
    if ($_GET['action'] == 'delete') {
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

function messagerie()
{
    require 'views/messagerieView.php';
}

function profil()
{
    //if (!$_SESSION['id']) header("Location: index.php?page=signIn");
    if ($_POST) {
        foreach ($_POST as $key => $value) {
            if ($value != '' and $key != 'password') update('user', $key, $value, 'id', $_SESSION['id']);
            if ($value != '' and $key == 'password') update('user', $key, md5($value), 'id', $_SESSION['id']);
        }
        if ($_FILES["photo"]["tmp_name"]) {
            update('user', 'photo', $_FILES["photo"]["name"], 'id', $_SESSION['id']);
            $target_dir = "plugins/images/users/";
            $target_file = $target_dir . basename($_FILES["photo"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
    if ($_GET['action'] == 'delete') {
        delete('user', 'id', $_SESSION['id']);
        unset($_SESSION['id']);
        header("Location: index.php?page=signIn");
    }
    $user = getLine('user', 'id', $_SESSION['id']);
    if ($user[0]['photo'] != '') $src = $user[0]['photo'];
    else $src = 'no-img.png';
    $title = 'Mon profil';
    require 'views/profilView.php';
}
