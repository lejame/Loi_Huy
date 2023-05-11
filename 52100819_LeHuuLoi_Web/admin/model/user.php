<?php

    function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "barber_management";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function checkuser($user, $pass) {
        $conn = connect();
        $stmt = $conn->prepare("SELECT role FROM account WHERE username = :username AND pad = :password");
        $stmt->bindParam(':username', $user);
        $stmt->bindParam(':password', $pass);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result !== false && count($result) > 0) {
            return $result['role'];
        } else{
            return 2;
        }
    }
?>