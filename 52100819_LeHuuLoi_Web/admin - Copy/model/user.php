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
    function getuserinfo($user, $pass) {
        $conn = connect();
        $stmt = $conn->prepare("SELECT * FROM account WHERE username = '".$user."' AND pad = '".$pass."'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    function checkAccountExit($user){
        $conn = connect();
        $stmt = $conn->prepare("SELECT username FROM account WHERE username = :username");
        $stmt->bindParam(':username', $user);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result !== false && count($result) > 0) {
            return true;
        } else{
            return false;
        }
    }

    
    function addAccount($user, $pass, $name, $phonenumber){
        if(checkAccountExit($user)==false){
            $conn = connect();
            $stmt = $conn->prepare("INSERT INTO account (username, pad, name, phone) VALUES (:username, :password, :name, :phonenumber)");
            $stmt->bindParam(':username', $user);
            $stmt->bindParam(':password', $pass);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phonenumber', $phonenumber);
            $stmt->execute();
            echo "<script>alert('Đăng ký thành công!');</script>";
        }
        else{
            echo "<script>alert('Tên tài khoản đã tồn tại!');</script>";
        }
    }

    function checkIDstaff($id_Staff){
        $conn = connect();
        $stmt = $conn->prepare("SELECT ID_staff FROM staff WHERE ID_staff = :id");
        $stmt->bindParam(':id', $id_Staff);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result !== false && count($result) > 0) {
            return true;
        } else{
            return false;
        }
    }
    
    function addEmployee($id_staff, $name_NV, $phone_number, $gender, $salary, $date_work, $NV_shift){
        if(checkIDstaff($id_staff)==false){
            $conn = connect();
            $stmt = $conn->prepare("INSERT INTO staff (ID_staff, name_NV, phone_number, gender, salary, date_work, NV_shift) VALUES (:id_staff, :name_NV, :phone_number, :gender, :salary, :date_work, :NV_shift)"); 
            $stmt->bindParam(':id_staff', $id_staff);
            $stmt->bindParam(':name_NV', $name_NV);
            $stmt->bindParam(':phone_number',$phone_number);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':salary', $salary);
            $stmt->bindParam(':date_work', $date_work);
            $stmt->bindParam(':NV_shift', $NV_shift);
            $stmt->execute();
            echo "<script>alert('Thêm thành công!');</script>";
        }
        else{
            echo "<script>alert('ID nhân viên đã tồn tại!');</script>";
        }
    }

    function delete_Employee($id_staff){
        $conn = connect();
        $stmt = $conn->prepare("Delete From staff where ID_staff = :id ");
        $stmt->bindParam(':id', $id_staff);
        $stmt->execute();
        echo "<script>alert('Xóa thành công!');</script>";
    }

    function addBooking($username, $name_NV, $name_service, $date_founded, $time_book, $Note){
        $conn = connect();
        $stmt = $conn->prepare("INSERT INTO booking (username, name_NV, name_service, date_founded, time_book ,Note) VALUES (:username, :name_NV, :name_service, :date_founded, :time_book ,:Note)"); 
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':name_NV', $name_NV);
        $stmt->bindParam(':name_service',$name_service);
        $stmt->bindParam(':date_founded', $date_founded);
        $stmt->bindParam(':time_book', $time_book);
        $stmt->bindParam(':Note', $Note);
        $stmt->execute();
    }
    function fixstatus($user){
        $conn = connect();
        $stmt = $conn->prepare("UPDATE booking SET Status='Đã hoàn thành' WHERE username='".$user."'");
        $stmt->execute();
    }
?>