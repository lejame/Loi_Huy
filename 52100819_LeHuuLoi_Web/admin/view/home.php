<?php
   session_start();
   ob_start();
   include "../model/connect.php";
   include "../model/user.php";
   if((isset($_POST['home'])) && ($_POST['home'])){
        unset($_SESSION['role']);
        unset($_SESSION['user']);
        unset($_SESSION['name']);
        header('location: home.php');
   }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="remixicons/fonts/remixicon.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body id="home" data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">  
        <div class="container">
            <a class="navbar-brand" href="#tc">LH salon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#tc" ">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" ">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team" ">Nhân viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#inf" ">Thông tin</a>
                    </li>
                </ul>    
                <?php 
                if((isset($_SESSION['name'])) && ($_SESSION['name']!="")){
                    echo'<p class="d-flex nav-link"><div style="margin-right: 10px; padding-top:3px;"><i class="ri-account-circle-line"></i></div>'.$_SESSION['name'].'</p>';
                    echo'<ul class="navbar-nav justify-content-center d-flex">
                    <li class="nav-link">
                        ||
                    </li>
                    <li class="nav-item">
                        <form action="';?><?php echo $_SERVER['PHP_SELF']; echo'" method="post">
                            <input type="submit" class="nav-link btn btn-outline"" value="Log out" name="home">   
                        </form> 
                    </li>
                </ul>';
                }
                else{?>
                <form class="d-flex" >
                    <button class="btn btn-outline-brand d-flex" type="button" id="login" onclick="log_in()"><div style="margin-right: 10px;"><i class="ri-vip-crown-2-fill"></i></div>Đăng nhập</button>
                </form><?php } ?>
            </div>
        </div>
    </nav>
    <!-- // NAVBAR -->
    
    
    <!-- bìa -->
    <section id="tc">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-5 mt-5 mb-5">Welcom to my salon!</h1>
                    <h3>LH salon</h3>
                    <p>LH salon chuyên cắt tóc, nhuộm tóc, uốn tóc và các dịch vụ khác. Với đội ngũ nhân viên tay nghề cao, LH salon cam kết mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.</p>
                    <a href="booking_website.php" class="btn btn-brand">Đặt lịch ngay</a>
                </div>
            </div>
        </div>
    </section>
    <!-- // bìa -->
    
    
    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="./image/trangchu.jpg" alt="">
                </div>
                <div class ="col-lg-4 offset-lg-1">
                    <h6>Về chúng tôi</h6>
                    <h1>Về LH salon</h1>
                    <p>Là nơi mà khách hàng có thể tìm thấy các dịch vụ làm đẹp tóc chất lượng cao và được cung cấp bởi các chuyên gia tóc chuyên nghiệp và kinh nghiệm. Họ sử dụng các sản phẩm chất lượng cao và công nghệ hiện đại để đảm bảo rằng khách hàng luôn có được kết quả tốt nhất.</p>
                    <p>Một salon tóc chuyên nghiệp thường được thiết kế với không gian thoáng đãng, sạch sẽ và thoải mái để khách hàng có thể tận hưởng trải nghiệm làm đẹp tuyệt vời. Ngoài ra, các chuyên gia tóc chuyên nghiệp trong salon sẽ luôn lắng nghe và tư vấn cho khách hàng về các kiểu tóc và phong cách phù hợp với khuôn mặt và phong cách của từng người.

Một salon tóc chuyên nghiệp cũng có thể cung cấp các dịch vụ đa dạng, bao gồm cắt tóc, nhuộm tóc, uốn tóc, duỗi tóc, tạo kiểu tóc và chăm sóc tóc. Các dịch vụ này được thiết kế để đáp ứng nhu cầu và mong đợi của từng khách hàng.

Trong một salon tóc chuyên nghiệp, các chuyên gia tóc luôn cập nhật và tiếp tục đào tạo để nắm bắt các xu hướng mới nhất và áp dụng chúng vào các dịch vụ của mình. Họ cũng sử dụng các sản phẩm tóc chất lượng cao để đảm bảo rằng khách hàng luôn có được kết quả tốt nhất và độ bền của mái tóc được duy trì lâu dài.</p>                </div>
            </div>
        </div>
    </section>
    <!-- // ABOUT -->
    
    
    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="col-12 intro text-center">
                <h6>About</h6>
                <h1>Dịch vụ chúng tôi có những gì?</h1>
                <p>Hớt tóc, Uốn tóc, nhuộm tóc</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <div class="card">
                            <img src="./image/cat_toc.jpg" alt="Bootstrap 3" class="w-100 style">
                            <div class="card-body">
                                <h3 class="h5">Cắt Tóc</h3>
                                <p>Các kiểu mẫu đang thịnh hành hiện nay như là Layer,...</p>
                                <a href="#" class="link-more">Know more <i class="ri-arrow-right-line icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <div class="card">
                            <img src="./image/uon_toc.jpg" alt="Bootstrap 3" class="w-100 style">
                            <div class="card-body">
                                <h3 class="h5">Uốn Tóc</h3>
                                <p>Các kiểu mẫu mới nhất giúp cho chung ta tự tin đứng trước mọi người nhưu là ...</p>
                                <a href="#" class="link-more">Know more <i class="ri-arrow-right-line icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <div class="card">
                            <img src="./image/nhuom_toc.jpg" alt="Bootstrap 3" class="w-100 style">
                            <div class="card-body">
                                <h3 class="h5">Nhuộm Tóc</h3>
                                <p>Các kiểu màu sẽ hợp với các bạn khi các bạn lựa chọn đúng sở thích của mình như là ...</p>
                                <a href="#" class="link-more">Know more <i class="ri-arrow-right-line icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="booking_website.php" class="btn btn-brand me-sm-4"> Đặt lịch ngay</a>
                <a href="#" class="btn btn-outline-brand ms-sm-4">Know more</a>
            </div>
        </div>               
    </section>
    <!-- // SERVICES -->
        
    
    <!-- TEAM -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 intro text-center">
                    <h6>Về chúng tôi</h6>
                    <h1>Đội ngũ nhân viên</h1>
                    <p>Họ là những người thợ chuyên nghiệp được đi du học về chuyên ngành của họ. Với sự chuyên nghiệp của mình tôi chắc chắn sẽ làm cho bạn hài lòng</p>
                </div>
                <div class ="col-lg-3 col-md-6">
                    <div class="team-member text-center">
                        <img src="./image/loi.jpg" alt="" class="imgh">
                        <div class="social-links">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-google-fill"></i></a>
                        </div>
                        <h5>Lê Hữu Lợi</h5>
                        <p>Hair Cutter</p>
                    </div>
                </div>
                <div class ="col-lg-3 col-md-6">
                    <div class="team-member text-center">
                        <img src="./image/huy.jpg" alt="" class="imgh">
                        <div class="social-links">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-google-fill"></i></a>
                        </div>
                        <h5>Lưu Khang Huy</h5>
                        <p>Master Hunter</p>
                    </div>
                </div>
                <div class ="col-lg-3 col-md-6">
                    <div class="team-member text-center">
                        <img src="./image/phu.jpg" alt="" class="imgh">
                        <div class="social-links">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-google-fill"></i></a>
                        </div>
                        <h5>Nguyễn Vạn Phú</h5>
                        <p>Hair Cutter</p>
                    </div>
                </div>
                <div class ="col-lg-3 col-md-6">
                    <div class="team-member text-center">
                        <img src="./image/tin.jpg" alt="" class="imgh">
                        <div class="social-links">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-google-fill"></i></a>
                        </div>
                        <h5>Dương Thái Tín</h5>
                        <p>Hair Cutter</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="booking_website.php" class="btn btn-brand me-sm-4"> Đặt lịch ngay</a>
                <a href="#" class="btn btn-outline-brand ms-sm-4">Know more</a>
            </div>
        </div>
    </section>
    <!-- // TEAM -->
    

    <!-- Footer -->
    <footer id="inf">
        <div class="footer-top">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4">
                        <h3 class="mb-3">LH salon</h3>
                        <p>Thông tin để tìm hiểu chi tiết về chúng tôi</p>
                        <div class="social-links">
                            <a href="#" style="border: 0.5px solid #151828; border-radius: 50%;"><i class="ri-facebook-fill"></i></a>
                            <a href="#" style="border: 0.5px solid #151828; border-radius: 50%;"><i class="ri-google-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <h4>Working Hours</h4>
                        <div>
                            <h6>Thứ hai - Thứ bảy                                
                            </h6>
                            <p>9:00 - 21:00</p>
                        </div>
                        <div>
                            <h6>Chủ nhật
                            </h6>
                            <p>Nghỉ cuối tuần</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h4 class="mb-3">Liên hệ</h4>
                        <p>
                            <i class="ri-map-pin-2-fill "></i>
                            <span>22 Đ. Nguyễn Đình Chiểu, Vĩnh Phước, Nha Trang, Vĩnh Phước 650000</span>
                        </p>
                        <p>
                            <i class="ri-phone-fill "></i>
                            <span>0258 3837 485</span>
                        </p>
                        <p>
                            <i class="ri-mail-fill "></i>
                            <span>khanhhoa@tdtu.edu.vn</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p>Copyrights @LHsalon. All Rights reserved</p>
                    </div>
                    <div class="col-auto">
                        <p>Designed by <a href="#">Khang Huy && Loi Le</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- // Footer -->
    
</body>
<script>
    function log_in(){
        window.location.href = "login.php";
    }
</script>
</html>