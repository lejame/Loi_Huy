<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


<body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
            <a href="home.html" class="w3-bar-item w3-button"><i class="fas fa-home fa-lg"></i>
            <h3>Home Page</h3>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-button"><i class="fas fa-coins fa-lg"></i></i>
            <h3>Báo cáo thống kê</h3>
        </a>
         <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-button"><i class="fas fa-users fa-lg" style=""></i>
            <h3>Quản lý nhân viên</h3>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-button"><i class="far fa-calendar-check fa-lg"></i>
            <h3>Quản lý Booking</h3>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">

        <a href="#" class="w3-bar-item w3-button"><i class="fas fa-user-circle fa-lg"></i>
            <h3>Quản lý tài khoản</h3>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">

    </div>

    <div id="main">

        <div class="w3-teal">
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container" onclick="w3_close()">
                <h1>My Page</h1>
            </div>
        </div>
    </div>

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

</body>

</html>