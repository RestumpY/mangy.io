<?php
function query($request, $type)
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=mangy', 'debian-sys-maint', 'b4LRGDGsIGFmwbwl');
        if ($type == 'select') {
            $sth = $db->prepare($request);
            $sth->execute();
            $result = $sth->fetchAll();
            return $result;
        }
        if ($type == 'insert') {
            if ($db->query($request) == TRUE) {
                $last_id = $db->lastInsertId();
                return $last_id;
            } else {
                echo "Error: " . $request . "<br>" . $db->error;
            }
        }
        $db = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function addUser($first_name, $last_name, $email, $password)
{
    $first_name = addslashes($first_name);
    $last_name = addslashes($last_name);
    $email = addslashes($email);
    $password = md5($password);
    $request = 'INSERT INTO user (first_name, last_name, email, password) values ("' . $first_name . '", "' . $last_name . '", "' . $email . '", "' . $password . '")';
    $_SESSION['id'] = query($request, 'insert');
}

function addPost($idUser, $title, $content)
{
    $title = addslashes($title);
    $content = addslashes($content);
    $request = 'INSERT INTO post (idUser, title, content) values ("' . $idUser . '","' . $title . '", "' . $content . '")';
    query($request, 'insert');
}

function addComment($idPost, $idUser, $content)
{
    $content = addslashes($content);
    $request = 'INSERT INTO comment (idPost, idUser, content) values ("' . $idPost . '","' . $idUser . '", "' . $content . '")';
    query($request, 'insert');
}

function loginUser($email, $password)
{
    $request = 'SELECT id FROM user where email = "' . $email . '" and password = "' . md5($password) . '"';
    if (query($request, 'select')) echo 'exist';
    $_SESSION['id'] = query($request, 'select')[0]['id'];
}

function getLine($table, $input, $value)
{
    $value = addslashes($value);
    $request = 'SELECT * FROM user where ' . $input . ' = "' . $value . '"';
    return query($request, 'select');
}

function getLines($table, $input, $value)
{
    $value = addslashes($value);
    if ($value) {
        $request = 'SELECT * FROM ' . $table . ' where ' . $input . ' = "' . $value . '" order by id desc';
    } else {
        $request = 'SELECT * FROM ' . $table . ' order by id desc';
    }
    return query($request, 'select');
}

function update($table, $input, $value, $input2, $value2)
{
    $value = addslashes($value);
    $request = 'UPDATE ' . $table . ' set ' . $input . ' = "' . $value . '" where  ' . $input2 . ' = "' . $value2 . '"';
    //echo $request;
    return query($request, 'select');
}

function delete($table, $input, $value)
{
    $request = 'DELETE FROM ' . $table . ' where  ' . $input . ' = "' . $value . '"';
    query($request, 'select');
}

function meteo()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?zip=75001,FR&lang=fr&units=metric&appid=c77d6b5619af9bd28b8d400173c150b5');
    $result = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($result);
    $array = json_decode(json_encode($obj), true);
    return $array;
}
