<?php
    $host = "localhost"; // tên host
    $user = "root"; // tên người dùng
    $password = ""; // mật khẩu
    $database = "barber_management"; // tên cơ sở dữ liệu

    // Kết nối với MySQL
    $conn = mysqli_connect($host, $user, $password, $database);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
?>
