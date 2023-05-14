<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
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
            <a href="home.php" class="w3-bar-item w3-button"><i class="fas fa-home fa-lg"></i>
            <h5>Home Page</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-button" onclick="loadPage('statistics.php')"><i class="fas fa-coins fa-lg" ></i>
            <h5>Báo cáo thống kê</h5>
        </a>
         <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-button" onclick="loadPage('employee.php')"><i class="fas fa-users fa-lg" style="" ></i>
            <h5>Quản lý nhân viên</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <a href="#" class="w3-bar-item w3-button" onclick="loadPage('account.php')"><i class="far fa-calendar-check fa-lg" ></i>
            <h5>Quản lý Booking</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">

        <a href="#" class="w3-bar-item w3-button" onclick="loadPage('account.php')">
            <i class="fas fa-user-circle fa-lg"></i>
            <h5>Quản lý tài khoản</h5>
        </a>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin:0;">
        <div class="log_out">
            <i class="fas fa-sign-out-alt fa-lg" style="color: #1454c2; font-size: 4em;" onclick="log_out()"></i>
        </div>
    </div>

    <div id="main">

        <div class="w3-teal">
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container" onclick="w3_close()">
                <h1>My Page</h1>
            </div>
        </div>
        <img src="" id="myChartImg">

        <div
            id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div>


    </div>

</body>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    const data = google.visualization.arrayToDataTable([
        ['Month', 'Revenue Percentage'],
        ['January', 8],
        ['February', 10],
        ['March', 12],
        ['April', 15],
        ['May', 18],
        ['June', 20],
        ['July', 22],
        ['August', 25],
        ['September', 22],
        ['October', 18],
        ['November', 14],
        ['December', 10]
    ]);

    const options = {
        title: 'Monthly Revenue Percentage',
        is3D: true
    };

    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
    }

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
        // load trang 
        function loadPage(pageUrl) {
            // Sử dụng XMLHttpRequest để load nội dung trang
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", pageUrl, true);
            xhttp.send();
            // Đóng thanh sidebar khi chuyển trang
            w3_close()
        }
        function log_out(){
            if(confirm("Bạn có muốn thoát ?")) {
                window.location.href = "login.php";
            }
        }
</script>

</html>