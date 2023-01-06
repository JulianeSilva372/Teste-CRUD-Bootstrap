<?php

if (isset($_POST['create']))  {
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

    $user_data = 'name='.$name. 'email='.$email. 'phone='.$phone. '&date='.$date;

    if (empty($name)) {
        header("Location: ../index.php?error=Preencha todos os campos obrigatórios");
    }else if (empty($name)) {
        header("Location: ../index.php?error=Nome obrigatório");
    }else if (empty($email)) {
        header("Location: ../index.php?error=Email obrigatório");
    }else if (empty($phone)) {
        header("Location: ../index.php?error=Celular obrigatório");
    }else if (empty($date)) {
        header("Location: ../index.php?error=Data de nascimento obrigatória");
    }else {
        $sql = "INSERT INTO users(name, email, phone, date) VALUES('$name', '$email', '$phone', '$date')";
        $result = mysqli_query($conn, $sql);
       if ($result) {
        header("Location: ../read.php?success=Cadastrado com sucesso");
       }else {
        header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
    }
}