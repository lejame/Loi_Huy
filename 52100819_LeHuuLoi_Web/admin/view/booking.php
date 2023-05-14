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