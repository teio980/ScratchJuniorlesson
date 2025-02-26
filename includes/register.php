<?php
include 'connect_DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    try {
    $username = $_POST["U_Username"];  
    $email = $_POST["U_Email"];
    $password = $_POST["U_Password"];  

    $sql = "INSERT INTO student (S_Username, S_Password ,S_Mail) VALUES ( :name, :password , :email )";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

   
    $stmt->execute();

        echo "Data inserted successfully!";

    } catch (PDOException $e) {
        echo "Connection Failed:" . $e->getMessage();
    }
}

?>