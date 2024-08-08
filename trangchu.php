<?php 
    session_start();
    if(!isset($_SESSION['user'])){
      header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Trang chủ</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../ptud_quanlymuctieu/fonts/fontawesome-free-6.4.2-web/css/all.min.css">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="css/slick.css" rel="stylesheet">
  <!-- Weedo styles -->
  <link href="style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ">


  <!-- Preloader -->

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="trangchu.php"> <img src="img/logo.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      
      <!---Quản lý các nhân -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#user" aria-expanded="false" aria-controls="user">
          <span><i class="fas fa-users"></i>Quan ly ca nhan</span>
        </a>
        <ul id="user" class="collapse" aria-labelledby="user" data-parent="#side-nav-accordion">
            

            <li> <a href="?page=addDgcx">Danh gia cam xuc</a> </li>
            <li> <a href="?page=addMtnl">Mot thang nhin lai</a> </li>
            <li> <a href="?page=aThoiquen">Thoi quen muon co</a> </li>
            <li> <a href="?page=aDBO">Dieu biet on</a> </li>
            <li> <a href="?page=addVqt">Viec quan trong</a> </li>
            <li> <a href="vbieudocamxuc.php">Bieu do cam xuc</a> </li>
        </ul>
      </li>
      <!-- /Quản lý các nhân -->
      <!-- Quản lý mục tiêu -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#muctieu" aria-expanded="false" aria-controls="muctieu">
          <span><i class="fas fa-receipt"></i>Quan ly muc tieu</span>
        </a>
        <ul id="muctieu" class="collapse" aria-labelledby="muctieu" data-parent="#side-nav-accordion">
           
            <li> <a href="?page=aCdt">tao chu de thang</a> </li>
            <li> <a href="?page=addMucTieu">Tao muc tieu</a> </li>
            <li> <a href="?page=addThMucTieu">Dat thoi han muc tieu</a> </li>
            <li> <a href="?page=aDGMT">Danh gia muc tieu</a> </li>
            <li> <a href="?page=aMucTieu">Danh sach muc tieu</a> </li>
            <!-- <li> <a href="?page=aKkdv">Thong ke</a> </li> -->
        </ul>
      </li>
      <!-- /Quản lý mục tiêu -->

      <!-- Thời gian biểu -->
      <li class="menu-item">
        <a href="view/vaddTBbieu.php">
          <span><i class="fa-regular fa-calendar-days"></i>Thoi gian bieu</span>
        </a>
      </li>
      <!-- /Thời gian biểu -->

      <!-- Khuyen khich dong vien -->
      <li class="menu-item">
        <a href="?page=aKkdv">
          <span><i class="fa-regular fa-comments"></i>Khuyen khich dong vien</span>
        </a>
      </li>
      <!-- /Khuyen khich dong vien -->



  </aside>


  <!-- Main Content -->
  <main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        
        <!-- Thông báo -->
        <li class="ms-nav-item dropdown">
          <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-regular fa-bell fa-beat"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
            </li>
            <!-- <li class="dropdown-divider"></li> -->
            <li class="ms-scrollable ms-dropdown-list">

              <?php 
                // $h = date("H:i");
               
                // if($h=="16:07"){
                //   $ngay = date("d/m/Y");
                //   $gio = date("H:i:s");
                  
                //   echo" <a class='media p-2' href='#'>";
                //   echo"<span>Đã đến thời gian đánh giá mỗi ngày</span>";
                //   echo"<p class='fs-10 my-1 text-disabled'><i class='material-icons'>access_time</i>$ngay/ $gio </p>";
                //   echo"</a>";
                //   sleep(2);
                // }
                // Kiểm tra thời gian và trả về thông báo tương ứng
                if (date("H:i") == "16:19") {
                  $ngay = date("d/m/Y");
                  $gio = date("H:i:s");
                  
                  echo" <a class='media p-2' href='#'>";
                  echo"<span>Đã đến thời gian đánh giá mỗi ngày</span>";
                  echo"<p class='fs-10 my-1 text-disabled'><i class='material-icons'>access_time</i>$ngay/ $gio </p>";
                  echo"</a>";
                  // Các xử lý khác nếu cần
                }
              ?> 
             
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>You have newly registered users</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>Your account was logged in from an unauthorized IP</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>An application form has been submitted</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
              <a href="#">View all Notifications</a>
            </li>
          </ul>
        </li>

        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa-regular fa-circle-user fa-2xl"></i> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="dangxuat.php"> <span><i class="flaticon-shut-down mr-2"></i>Đăng xuất</span> </a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>

    <!-- Body Content Wrapper -->
    
    <div class="ms-content-wrapper">
      <?php 
        
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          
          switch ($page) {
              case 'aDBO':
                  include_once('view/vdieubieton.php');
                  break;
              case 'addDBO':
                  include_once("view/vadddieubieton.php");
                  break;
              case 'aThoiquen':
                  include_once("view/vthoiquen.php");
                  break;
              case 'addTQ':
                  include_once("view/vaddthoiquen.php");
                  break;
              case 'addMucTieu':
                  include_once("view/vaddmuctieu.php");
                  break;
              case 'addThMucTieu':
                  include_once("view/vthoihanmt.php");
                  break;
              case 'addDgcx':
                  include_once("view/vaddDGCX.php");
                  break;
              case 'aCdt':
                  include_once("view/vaddchudethang.php");
                  break;
              case 'addMtnl':
                  include_once("view/vaddmotthangnhinlai.php");
                  break;
              case 'addVqt':
                  include_once("view/vaddviecquantrong.php");
                  break;
              case 'aMucTieu':
                  include_once("view/vmuctieu.php");
                  break;
              case 'aDGMT':
                  include_once("view/vaddDGMT.php");
                  break;
              case 'aTTT':
                  include_once("view/vmotthangnhinlai.php");
                  break;
              case 'aVqt':
                  include_once("view/vviecquantrong.php");
                  break;
              case 'aMtdg':
                  include_once("view/vDGMT.php");
                  break;
              case 'aDgTq':
                  include_once("view/vaddDgtq.php");
                  break;
              case 'aKkdv':
                  include_once("view/vkhuyenkhichdongvien.php");
                  break;
              case 'aVct':
                  include_once("view/vechungtoi.php");
                  break;
              // Thêm các trường hợp khác nếu có
              default:
                  // Mặc định, có thể hiển thị trang chủ hoặc thông báo lỗi
                  include('home.php');
                  
          }

      }else{
        include('home.php');
      }
      
      ?>
    </div>

  </main>
  <br>
<div class="footerhai">
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Nội dung chính sách</h5>
      <ul class="list-unstyled">
          <li><a href="#">Chính sách bảo mật</a></li>
          <li><a href="#">Điều khoản dịch vụ</a></li>
          <li><a href="#">Chính sách dành cho khách hàng</a></li>
          <li><a href="#">Chính sách dành cho nhân viên</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Liên kết nhanh</h5>
        <ul class="list-unstyled">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Giới thiệu</a></li>
          <li><a href="#">Dịch vụ</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Theo dõi chúng tôi</h5>
        <ul class="list-unstyled">
          <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <div class="row mt-3">
    <div class="col-md-12 text-center">
        <p>Địa chỉ: Số 12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, Thành phố Hồ Chí Minh</p>
        <p>Liên hệ: 
            <span class="contact-info">0283.8940 390</span>
            <span class="contact-info"> - </span>
            <span class="contact-info">Email: dhcn@iuh.edu.vn</span>
        </p>
    </div>
</div>
  </div>
</footer>
</div>



  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/perfect-scrollbar.js"> </script>
  <script src="js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Page Specific Scripts Start -->
  <script src="js/moment.js"> </script>
  <script src="js/jquery.webticker.min.js"> </script>
  <script src="js/Chart.bundle.min.js"> </script>
  <script src="js/Chart.Financial.js"> </script>
  <script src="js/table-line.js"> </script>
  <script src="js/index-chart.js"> </script>

  <script src="js/d3.v3.min.js"> </script>
  <script src="js/topojson.v1.min.js"> </script>
  <script src="js/datamaps.all.min.js"> </script>
  <script src="js/index-map.js"> </script>

  <script src="chart.js"></script>

  <!-- Page Specific Scripts End -->

  <!-- Weedo core JavaScript -->
  <script src="js/framework.js"></script>

  <!-- Settings -->
  <script src="js/settings.js"></script>
  <script>
    // Hàm kiểm tra thời gian và gửi yêu cầu đến máy chủ PHP
    function checkTimeAndRequest() {
        var currentTime = new Date().toLocaleTimeString(); // Lấy thời gian hiện tại

        if (currentTime === '09:00:00') { // Kiểm tra nếu là 9h
            // Gửi yêu cầu đến máy chủ PHP
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Hiển thị thông báo trả về từ máy chủ PHP
                    alert(this.responseText);
                }
            };
            xhttp.open("GET", "get_notification.php", true);
            xhttp.send();
        }
    }

    // Gọi hàm kiểm tra thời gian và gửi yêu cầu mỗi giây
    setInterval(checkTimeAndRequest, 1000);
</script>
</body>

</html>
