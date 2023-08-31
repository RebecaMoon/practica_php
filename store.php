<?php
    require "conection.php";
    
    if (empty($_POST["name"]) || empty($_POST["email"])) {
        $error = "Plis fild all the fields";
        echo "<script>alert('$error');</script>";

    }
    else
    {
        $statement = $conn->prepare("INSERT INTO registros (name, email) VALUES (:name, :phone_number)");
        $statement->bindParam(":name", $_POST["name"]);
        $statement->bindParam(":phone_number", $_POST["email"]);
        $statement->execute();
    }
    header("Location: formulario.php");
    
    