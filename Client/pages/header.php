<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Agu Airway</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"
            ><img
                    id="MDB-logo"
                    src="https://th.bing.com/th/id/OIP.EZ-T11l0le6850YVjX0J3wAAAA?rs=1&pid=ImgDetMain"
                    alt="MDB Logo"
                    draggable="false"
                    height="30"
                /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#"><i class="fa fa-home pe-2"></i>Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#"><i class="fa fa-newspaper-o pe-2"></i>Tin Tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="./register.php"><i class="fa fa-pencil pe-2"></i>Đăng ký</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="btn btn-black btn-rounded " href="./login.php"><i class="fa fa-sign-in"></i> Đăng Nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--    Carosel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.bangkokair.com/images/banner/laddingpage/Skytrax-2020_OG_Eng.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://th.bing.com/th/id/R.6ea6fa7a1c326e6011bcf9d9c0e47c61?rik=X3ivfSvYcqgK1A&riu=http%3a%2f%2fwww.bangkokair.com%2fimg%2ffacebook-thumb%2fog_skytrax.jpg&ehk=C3ho%2bMmZ%2bP0kMHOGVhT1y0VuIQS%2bRarkEbpLVndFvik%3d&risl=&pid=ImgRaw&r=0" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://th.bing.com/th/id/R.f7ed51fdb007cfbcb556ff6e91e88bcf?rik=vz9L%2bxn6xiurog&riu=http%3a%2f%2fwww.bangkokair.com%2fimages%2fpromotion_banner%2fTTWT_ENG-1200X628px.jpg&ehk=HhX7Qeo5vBltv%2fCcAWT03rBTuYYPPGpDA9TQJA1oT8o%3d&risl=&pid=ImgRaw&r=0" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--    Carosel-->
    <!-- Navbar -->
    <!--    Container-->
                <div class="container">
                    <div class="row m-auto my-5">
                        <div class="card">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label text text-info fs-4">Điểm Đi</span>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label text text-info fs-4">Điểm đến</span>
                                            <input class="form-control" type="text" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <span class="form-label text text-info fs-4">Ngày đi</span>
                                            <input class="form-control" type="date" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <span class="form-label text text-info fs-4">Ngày về</span>
                                            <input class="form-control" type="date" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <span class="form-label text text-info fs-4">Người lớn</span>
                                            <input class="form-control" type="number" min="0" />
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <span class="form-label text text-info fs-4">Trẻ em</span>
                                            <input class="form-control" type="number" min="0" />
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-2">
                                        <div class="form-btn d-flex justify-content-center">
                                            <button class="btn btn-primary btn-lg">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    <div class="container">
            <h1>Các chuyến bay hiện có</h1>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Điểm đi</th>
                    <th scope="col">Điểm đến</th>
                    <th scope="col">Ngày Đi</th>
                    <th scope="col">Ngày Đến</th>
                    <th scope="col">Số Hiệu</th>
                    <th scope="col">Giá vé (VND)</th>
                    <th scope="col">Số Ghế Còn Lại</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Ho Chi Minh City (SGN)</td>
                    <td>Da Nang (DAD)</td>
                    <td>2023-12-20</td>
                    <td>2023-12-20</td>
                    <td>VN751</td>
                    <td>1,250,000</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hanoi (HAN)</td>
                    <td>Phu Quoc (PQC)</td>
                    <td>2023-12-21</td>
                    <td>2023-12-21</td>
                    <td>VN1567</td>
                    <td>2,490,000</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Da Nang (DAD)</td>
                    <td>Buon Ma Thuot (BMV)</td>
                    <td>2023-12-22</td>
                    <td>2023-12-22</td>
                    <td>VN8357</td>
                    <td>890,000</td>
                    <td>23</td>
                </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Trước</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Sau</a>
                    </li>
                </ul>
            </nav>
    </div>
    <!--    Container-->
    <div class="container py-3">
        <h3 class="text-center">Điểm đến nổi tiếng</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.PMDts3oPg05C9MmFa82xggHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="Ho Chi Minh City">
                    <div class="card-body">
                        <h5 class="card-title">Ho Chi Minh City</h5>
                        <p class="card-text">Thành phố Hồ Chí Minh, trái tim rộn ràng của Việt Nam, là một điểm đến không thể bỏ qua đối với bất kỳ du khách nào. Mang trong mình bề dày lịch sử, nét văn hóa đặc sắc và nền ẩm thực phong phú, nơi đây hứa hẹn mang đến những trải nghiệm tuyệt vời cho mọi người.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.407587965578cd2320d4b4d18e7dd184?rik=A0Ue7pArPdSmag&pid=ImgRaw&r=0" class="card-img-top" alt="Da Nang">
                    <div class="card-body">
                        <h5 class="card-title">Da Nang</h5>
                        <p class="card-text">
                            Đà Nẵng, nép mình dọc theo bờ biển miền Trung Việt Nam, là một thiên đường bãi biển quyến rũ thu hút du khách với những bờ biển nguyên sơ, khung cảnh ngoạn mục và nhịp sống sôi động. Thành phố cũng là nơi có một số điểm tham quan lịch sử và văn hóa.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.f8a9169522b202728eca9b2bb58c9b44?rik=gXzr5JA8v4CTVQ&pid=ImgRaw&r=0" class="card-img-top" alt="Phu Quoc">
                    <div class="card-body">
                        <h5 class="card-title">Phu Quoc</h5>
                        <p class="card-text">
                            Phú Quốc, hòn đảo nhiệt đới xinh đẹp nằm ngoài khơi Việt Nam, chính là lời mời gọi ngọt ngào cho những ai khao khát đắm mình trong làn nước ngọc xanh, tắm nắng trên bờ cát mịn màng và khám phá thế giới biển rực rỡ. Hòn đảo này còn là thiên đường nghỉ dưỡng với vô số khu resort sang trọng, spa thư giãn và cả những sòng bạc sôi động.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-dark text-white " style="margin-top: 20px;">
        <div class="container">
            <div class="row p-2">
                <div class="col-md-3">
                    <h4 class="text-center">Về chúng tôi</h4>
                    <p class="text-left">
                        Chúng tôi là một công ty chuyên cung cấp dịch vụ đặt vé máy bay trực tuyến, với nhiều năm kinh nghiệm trong lĩnh vực hàng không. Chúng tôi cam kết mang đến cho khách hàng dịch vụ chất lượng cao với giá cả cạnh tranh.
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">Liên hệ</h4>
                    <ul class="list-unstyled text-left">
                        <li>
                            <a href="#" class="link-light text-decoration-none">
                                <i class="bi bi-map"></i>
                                Địa chỉ: Đông Xuyên, An Giang, Việt Nam
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-light text-decoration-none">
                                <i class="bi bi-phone"></i>
                                Điện thoại: +84123456789
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-light text-decoration-none">
                                <i class="bi bi-envelope"></i>
                                Email: aguairway@agu.edu.vn
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">Hỗ trợ khách hàng</h4>
                    <ul class="list-unstyled text-left">
                        <li>
                            <a href="#" class="link-light text-decoration-none">
                                <i class="bi bi-question-circle"></i>
                                Câu hỏi thường gặp
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-light text-decoration-none">
                                <i class="bi bi-book-open"></i>
                                Hướng dẫn đặt vé
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-light text-decoration-none">
                                <i class="bi bi-shield-check"></i>
                                Chính sách
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">Theo dõi chúng tôi</h4>
                    <ul class="d-flex justify-content-center align-items-center list-unstyled">
                        <li>
                            <a class="m-1" href="#">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a v href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="m-1" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        Copyright &copy; 2023, Agu Airway. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>