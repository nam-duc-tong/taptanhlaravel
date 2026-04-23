<?php
// require "./header.php";
// require "./admin/login.php";
?>
<?php
// include "./admin/login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bệnh Viện Mắt Hoa Lư</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- link  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .noichu{
            text-shadow:
                        -1px -1px 0 #fff,
                        1px -1px 0 #fff,
                        -1px  1px 0 #fff,
                        1px  1px 0 #fff;
        }
        .bg-dark {
              background-color: #cd5f37 !important;
        }
        .service-icon{
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <?php //include "./container_header.php" ?>
      <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-light py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 me-3"  style="color: #0d389dc7;"></i>
                    <div class="text-start">
                        <h6 class="mb-1"  style="color: #0d389dc7;">Email Bệnh Viện</h6>
                        <span>benhvienmathoalu1@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-white border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand"> 
                        <h1 class="m-0" style="color: #0d389dc7;"><i class="fa fa-hospital fs-1 me-3"></i>Bệnh Viện Mắt Hoa Lư</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-light py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 me-3"  style="color: #0d389dc7;"></i>
                    <div class="text-start">
                        <h6 class="mb-1"  style="color: #0d389dc7;">Liên Hệ Hotline:</h6>
                        <span> 0878.135.135</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-4 px-4 px-lg-5">
       <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-hospital fs-1 me-3"></i>BV Mắt Hoa Lư</h1>
        </a>
        {{-- <div class="d-none d-lg-flex w-25">
            <a href="https://themewagon.com/themes/plasery" class="btn btn-light px-3">Download Now</a>
        </div> --}}
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-3 py-lg-0 px-3" style="background-color: #f2f5fb !important;">
                <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                <a href="about.php" class="nav-item nav-link">Giới Thiệu</a>
                <a href="service.php" class="nav-item nav-link">Dịch Vụ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Thông Tin</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="appointment.php" class="dropdown-item">Tin Tức</a>
                        <a href="team.php" class="dropdown-item">Bác Sĩ</a>
                        <a href="price.php" class="dropdown-item">Bảng Giá</a>
                        <a href="404.php" class="dropdown-item">Quản lý chất lượng</a>
                    </div>
                </div>
                <a href="service.php" class="nav-item nav-link">Tin Tức</a>
                <a href="contact.php" class="nav-item nav-link">Liên Hệ</a>
            </div>
        </div>
        <!-- <div class="d-none d-lg-block w-25 text-end">
            <a href="#" class="btn btn-light px-3">Make Appointment</a>
        </div> -->
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header wow fadeIn" data-wow-delay="0.1s" id="hero-header-bv">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <p class="fs-4 text-primary mb-4 noichu">Bệnh Viện Mắt Hoa Lư</p>
                    <h1 class="display-1 mb-4 noichu">
                        Mỗi ánh mắt - Một niềm tin
                    </h1>
                    <p class="fs-5 text-primary noichu">Bệnh viện mắt Hoa Lư là bệnh viện chuyên khoa công nghệ cao <br> về mắt theo tiêu chuẩn quốc tế đầu tiên tại Ninh Bình
                        và khu vực lân cận,<br> đáp ứng nhu cầu phục vụ hàng ngàn lượt khám và điều trị mỗi năm.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="https://mathoalu.com/" class="btn btn-primary py-3 px-4 me-5">Đọc Thêm</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/watch?v=9oBIY3D2CTg" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <!-- Button -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#youtubeModal">
                            Xem Video
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="youtubeModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Youtube Video</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body p-0">
                                        <iframe id="youtube-frame" width="100%" height="500" src="" frameborder="0" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- <h5 class="font-weight-normal text-dark m-0 ms-4 d-none d-sm-block">Play Video</h5> -->
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var modal = document.getElementById('videoModal');
                            var iframe = document.getElementById('youtube-frame');
                            var videoUrl = "https://www.youtube.com/embed/9oBIY3D2CTg";

                            modal.addEventListener('show.bs.modal', function() {
                                iframe.src = videoUrl;
                            });

                            modal.addEventListener('hide.bs.modal', function() {
                                iframe.src = ""; // xoá khi đóng modal
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute" src="img/logo.jpg" alt=""
                            style="object-fit: cover;     
                            width: 58%;
                                height: 80%;
                                margin-left: 65px;">
                        <div class="position-absolute top-0 end-0 bg-white ps-3 pb-3"
                            style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white mb-0" data-toggle="counter-up">5</h1>
                                <h3 style="color: #fff;">Năm</h3>
                                <h6 class="mb-0" style="color: #fff;">Kinh Nghiệm</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-5 mb-5">BỆNH VIỆN MẮT HOA LƯ</h1>
                        <p class="fs-4 text-primary mb-4">Bệnh Viện chuyên khoa công nghệ cao về mắt theo tiêu chuẩn quốc tế đầu tiên tại Ninh Bình</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-light text-primary me-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Đội ngũ Bác Sĩ hàng đầu</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-light text-primary me-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-syringe fa-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Dịch vụ uy tín chất lượng cao</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">Với hệ thống trang thiết bị theo tiêu chuẩn quốc tế, đội ngũ bác sĩ nhãn khoa có nhiều năm kinh nghiệm được tu nghiệp tại Mỹ
                            cùng dịch vụ y tế hoàn hảo sẽ giúp người dân có cơ hộ tiếp cận với công nghệ điều trị hiện đại, chất lượng cao và chi phí hợp lý nhất.</p>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 me-3" src="img/profile.jpg" alt="">
                                <h5 class="mb-0" style="color: #fff;">Liên hệ chúng tôi: 0878.135.135</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-12 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-4 mb-lg-0">Thông tin quan trọng</h1>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-calendar-alt text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h1 class="display-4 mb-0" data-toggle="counter-up">5</h1>
                        </div>
                        <span class="fs-5">năm kinh nghiệm</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-user text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h1 class="display-4 mb-0" data-toggle="counter-up">6</h1>
                        </div>
                        <span class="fs-5">Bác sĩ phẫu thuật</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h1 class="display-4 mb-0" data-toggle="counter-up">10000</h1>
                        </div>
                        <span class="fs-5">Phản hồi tích cực</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light py-5 mt-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-5 mb-5">Khám phá phương pháp phẫu thuật và điều trị của chúng tôi</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.1s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-1.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Khám phá tổng quan và chuyên sâu</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.3s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-2.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Phẫu thuật phaco điều trị đục thủy tinh thể</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.5s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-3.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Phẫu thuật dịch kính võng mạc</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.1s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-4.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Phẫu thuật thẩm mỹ mắt</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.3s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-5.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Chẩn đoán theo dõi và điều trị bệnh lý về đáy mắt</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.5s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-6.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Các bệnh khác về mắt</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Appointment Start -->
    <div class="container-fluid overflow-hidden px-lg-0">
        <div class="container appointment px-lg-0">
            <div class="row g-0">
                <div class="col-lg-6 appointment-text wow fadeIn" data-wow-delay="0.2s">
                    <div class="text-center h-100 px-5 ps-lg-0">
                        <h1 class="display-5 text-white mb-4">Liên hệ với chúng tôi</h1>
                        <h4 style="color: #fff;">Bạn cần hỗ trợ hay tư vấn hãy liên hệ ngay với chúng tôi</h3>
                            <h1 class="display-4 mb-4" style="color: #fff;">0878.135.135</h1>
                            <a href="#" class="align-self-center btn text-primary py-3 px-5" style="background-color: #fff;">Đặt lịch hẹn</a>
                    </div>
                </div>
                <div class="col-lg-6 appointment-form wow fadeIn" data-wow-delay="0.4s">
                    <div class="h-100 px-5 pe-lg-0 text-center wow fadeIn" data-wow-delay="0.6s">
                        <h1 class="display-5 text-white mb-5">Đặt lịch Hẹn</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Chọn tên dịch vụ</option>
                                        <?php
                                        // $sql = "select * from dichvu";
                                        // $result = mysqli_query($conn, $sql);
                                        // while ($row = mysqli_fetch_assoc($result)) {
                                        //     echo "<option value=" . $row['id_dv'] . ">" . $row['tendichvu'] . "</option>";
                                        // }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Chọn Bác Sĩ</option>
                                        <?php
                                        // $sql = "select * from nhanvien";
                                        // $result = mysqli_query($conn, $sql);
                                        // while ($row = mysqli_fetch_assoc($result)) {
                                        //     echo "<option value=" . $row['id_nv'] . ">Bác Sĩ " . $row['tennhanvien'] . "</option>";
                                        // }
                                        ?>
                                        <!-- <option value="1">Bác Sĩ Nguyễn Văn Thanh</option>
                                        <option value="2">Bác Sĩ Trần Bá Kiền</option>
                                        <option value="3">Bác Sĩ Trịnh Thế Sơn</option>
                                        <option value="4">Bác Sĩ Phạm Xuân Đông</option>
                                        <option value="5">Bác Sĩ Nguyễn Thị Thuỳ Tiên</option> -->
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Họ và Tên" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-white border-0 datetimepicker-input" placeholder="Ngày Hẹn"
                                            data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Vào lúc" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Đặt lịch Hẹn</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Đội ngũ Bác Sĩ của Chúng Tôi</h1>
            </div>
            <div class="row g-4">
                <?php
                // $sql = "select * from nhanvien";
                // $result = mysqli_query($conn, $sql);
                // while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            {{-- <div class="overflow-hidden">
                                <img class="img-fluid" src="img/bs/<?php echo $row['img_nv']?>" alt="">
                            </div>
                            <div class="team-text text-center px-4">
                                <h4>BS. <?php echo $row['tennhanvien']; ?></h4>
                                <span><?php echo $row['chucvu']; ?></span>
                            </div>
                            <div class="team-text-overflow text-center bg-light p-4">
                                <h4>BS. <?php echo $row['tennhanvien']; ?></h4>
                                <p><?php echo $row['chucvu']; ?></p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-x-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                <?php
                //}
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Phản Hồi từ Khách Hàng</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block wow fadeIn" data-wow-delay="0.5s">
                    <div class="testimonial-left h-100">
                        <?php
                            // $sql= "select * from khachhang";
                            // $result = mysqli_query($conn,$sql);
                            // while($row = mysqli_fetch_assoc($result)){
                        ?>
                        {{-- <img class="img-fluid" src="img/<?php echo $row['img_kh'];?>" alt=""> --}}
                        <?php
                            // }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="owl-carousel testimonial-carousel">
                        <?php
                            // $sql = "select * from khachhang";
                            // $result = mysqli_query($conn,$sql);
                            // while($row = mysqli_fetch_assoc($result)){

                           ?>
                        <div class="testimonial-item text-center">
                            {{-- <img class="img-fluid rounded mx-auto mb-4" src="img/<?php echo $row['img_kh'];?>" alt="">
                            <p class="fs-5"><?php echo $row['noidung'];?>
                            </p>
                            <h4><?php echo $row['Tenkhachhang'];?></h4>
                            <span><?php echo $row['nghenghiep'];?></span> --}}
                        </div>
                        <?php 
                            //  }
                        ?>
                        <!-- <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">“Tôi thật sự yên tâm khi khám và điều trị tại Bệnh Viện Mắt Hoa Lư.”
                            </p>
                            <h4>Lê Thị B</h4>
                            <span>Bệnh Nhân</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">“Từ ngày mổ mắt xong, cuộc sống của tôi thay đổi tích cực hơn rất
                                nhiều.”
                            </p>
                            <h4>Tống Thị C</h4>
                            <span>Bệnh Nhân</span>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block wow fadeIn" data-wow-delay="0.5s">
                    <div class="testimonial-right h-100">
                        <?php
                            // $sql= "select * from khachhang";
                            // $result = mysqli_query($conn,$sql);
                            // while($row = mysqli_fetch_assoc($result)){
                        ?>
                        {{-- <img class="img-fluid" src="img/<?php echo $row['img_kh'];?>" alt=""> --}}
                        <?php
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Instagram Start -->
    <!-- <div class="container-fluid position-relative instagram p-0 mt-5">
        <a href="#!"
            class="d-flex align-items-center justify-content-center position-absolute top-50 start-50 translate-middle bg-white"
            style="width: 100px; height: 100px; z-index: 1;">
            <i class="fab fa-instagram fa-2x text-primary"></i>
        </a>
        <div class="row g-0">
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid w-100" src="img/instagram-1.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.2s">
                <img class="img-fluid w-100" src="img/instagram-2.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid w-100" src="img/instagram-3.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.4s">
                <img class="img-fluid w-100" src="img/instagram-4.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.5s">
                <img class="img-fluid w-100" src="img/instagram-5.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.6s">
                <img class="img-fluid w-100" src="img/instagram-6.jpg" alt="">
            </div>
        </div>
    </div> -->
    <!-- Instagram End -->


    <!-- Footer Start -->
    {{-- <?php include "./footer.php" ?> --}}
      <div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #0d389dc7;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="mb-4 text-light"><i class="fa fa-hospital fs-1 me-3"></i>Bệnh Viện Mắt Hoa Lư</h1>
                    <p>MST: 2700903730 cấp ngày 20/03/2020 bởi Sở Kế Hoạch và Đầu Tư tỉnh Ninh Bình.
                        Giấy phép hoạt động số 292/BYT-GPHĐ.
                        Cấp ngày 02/12/2020 bởi Bộ Y Tế.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square me-1" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="#!"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Địa Chỉ</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Số 153+155+157+159+161, Đường Lê Đại Hành, Phường Hoa Lư, Tỉnh Ninh Bình, Viêt Nam</p>
                    <p><i class="fa fa-phone-alt me-3"></i>0878.135.135</p>
                    <p><i class="fa fa-envelope me-3"></i>benhvienmathoalu1@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Menu</h4>
                    <a class="btn btn-link" href="about.php">Giới Thiệu</a>
                    <a class="btn btn-link" href="contact.php">Liên Hệ</a>
                    <a class="btn btn-link" href="service.php">Dịch Vụ</a>
                    <a class="btn btn-link" href="#!">Tin Tức</a>
                    <a class="btn btn-link" href="#!">Thông Tin</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Liên Hệ Hỗ Trợ</h4>
                    <p>Mọi thông tin xin gửi về mail của chúng tôi.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="https://htmlcodex.com" class="text-white">HTML Codex</a>. Distributed by <a
                            href="https://themewagon.com" target="_blank" class="text-white">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>