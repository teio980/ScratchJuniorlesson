<?php
include 'connect_DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    try {
        $username = $_POST["U_Username"];  
        $email = $_POST["U_Email"];
        $password = $_POST["U_Password"];  

        $checkSql = "SELECT S_Username FROM student WHERE S_Username = :username";
        $checkStmt = $pdo->prepare($checkSql);
        $checkStmt->bindParam(':username', $username);
        $checkStmt->execute();

        if($checkStmt->rowCount() > 0){

        }else{
            $insertSql = "INSERT INTO student (S_Username, S_Password ,S_Mail) VALUES ( :name, :password , :email )";
            $insertStmt = $pdo->prepare($insertSql);

            $insertStmt->bindParam(':name', $username);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':password', $password);
            $insertStmt->execute(); 
        }
        
    } catch (PDOException $e) {
        echo "Connection Failed:" . $e->getMessage();
    }
}

?>