<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="remixicons/fonts/remixicon.css">
<head>
    <title>Thêm nhân viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #FFD700;
            margin-top: 24px;
            margin-bottom: 24px;
        }

        th,
        td {
            color: #959dcc;
            text-align: center;
            padding: 8px;
            border: 1px solid #FFD700;
        }
        h1,h2,h3,h4,h6{
            color: #959dcc;
            margin-top: 24px;
            margin-bottom: 24px;
        }
        h1 {
            text-align: center;
        }

        input[type=text],
        input[type=number],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        #mySidebar .log_out {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <div style="display:flex; justify-content: center;">
            <img src="image\admin.jpg" class="rounded-circle" alt="Cinque Terre" style="wight:400px;height:100px;">
        </div>
        <p style="display:flex; justify-content: center;">Hello Admin</p>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="home.php" class="w3-bar-item w3-button w3-indigo"><i class="fas fa-home fa-lg"></i>
            <h5>Home Page</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item" style="background: #1B1F34;" onclick="loadPage('statistics.php')"><i
                class="fas fa-coins fa-lg"></i>
            <h5>Báo cáo thống kê</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-button w3-indigo" onclick="loadPage('employee.php')"><i class="fas fa-users fa-lg"
                style=""></i>
            <h5>Quản lý nhân viên</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-buttonw 3-indigo" onclick="loadPage('booking_admin.php')"><i
                class="far fa-calendar-check fa-lg"></i>
            <h5>Quản lý Booking</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">

        <a href="#" class="w3-bar-item w3-button w3-indigo" onclick="loadPage('account.php')">
            <i class="fas fa-user-circle fa-lg"></i>
            <h5>Quản lý tài khoản</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <div class="log_out">
            <i class="fas fa-sign-out-alt fa-lg" style="color: #1454c2; font-size: 4em;" onclick="log_out()"></i>
        </div>
    </div>
    <div id="main">
        <div class="" style="background: linear-gradient(to right,rgba(27,31,52,0.8),rgba(27,31,52,0.8))">
            <button id="openNav" class="w3-button w3-xlarge" style="background: #FFD700; border: 1px solid #FFD700" onclick="w3_open()">&#9776;</button>
            <div class="w3-container" onclick="w3_close()">
                <h1 style="color:white; text-align:center; ">Chào mừng bạn đến với trang quản lý tài khoản</h1>
            </div>
        </div>
		<h3 style="color:#959dcc; text-align:center;">Danh sách các tài khoản</h3>
	<div class="container">
		<table>
			<thead>
				<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Name</th>
				<th>Phone number</th>
				<th>Role</th>
				<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "../model/connect.php";
				include "../model/user.php";
				$sql = "SELECT * FROM account";
				$result = mysqli_query($conn, $sql);

				// Hiển thị dữ liệu lấy được
				if (mysqli_num_rows($result) > 0) {
					// Duyệt qua từng dòng dữ liệu và hiển thị ra bảng
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["username"] . "</td>";
						echo "<td>" . $row["pad"] . "</td>";
						echo "<td>" . $row["name"] . "</td>";
						echo "<td>" . $row["phone"] . "</td>";
						echo "<td>" . $row["role"] . "</td>";
						echo '<td>
								<button type="button" class="btn btn-danger btn-delete"><i class="fas fa-trash-alt" style="color: white;"></i></button>
								<button type="button" class="btn btn-primary btn-edit"><i class="fas fa-cog fa-lg"></i></button>
								</td>';
						echo "</tr>";
					}
				} else {
					echo "Không có dữ liệu";
				}

				// Đóng kết nối
				mysqli_close($conn);
				?>
			</tbody>
		</table>
	</div>
    </div>
	
</body>
<script>
        function w3_open() {
            document.getElementById("main").style.marginLeft = "25%";
            document.getElementById("mySidebar").style.width = "25%";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("openNav").style.display = 'none';
        }
        function w3_close() {
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
        }
    </script>
</html>