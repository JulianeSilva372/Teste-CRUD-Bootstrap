<?php

if (isset($_GET['id'])){
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: read.php");
    }
}else if(isset($_POST['edit'])) {
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $date = validate($_POST['date']);
    $id = validate($_POST['id']);

    if (empty($name)) {
        header("Location: ../edit.php?id=$id&error=Nome obrigatório");
    }else if (empty($email)) {
        header("Location: ../edit.php?id=$id&error=Email obrigatório");
    }else if (empty($phone)) {
        header("Location: ../edit.php?id=$id&error=Celular obrigatório");
    }else if (empty($date)) {
        header("Location: ../edit.php?id=$id&error=Data de nascimento obrigatória");
    }else {
        $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', date='$date' WHERE id=$id ";
        $result = mysqli_query($conn, $sql);
       if ($result) {
        header("Location: ../read.php?success=Atualizado com sucesso");
       }else {
        header("Location: ../edit.php?id=$id&error=Ocorreu um erro inesperado&$user_data");
       }
    }
}else {
    header("Location: read.php");
}