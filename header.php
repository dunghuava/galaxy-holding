<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mitr:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Graphik:wght@400;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" />
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?=filemtime('css/style.css')?>">
    <link rel="stylesheet" href="css/responsive.css?v=<?=filemtime('css/responsive.css')?>">
    <!-- javascript -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <title>Galaxy Holding</title>
</head>
<body>
    <div class="wrapper-bg">
        <header>
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-lg-12 grid-header">
                            <a href="index.php">
                                <img class="logo" src="./images/frame18.svg">
                            </a>
                            <div class="main-nav">
                                <ul class="menu-desktop">
                                    <li><a href="index.php">Giới thiệu</a></li>
                                    <li class="active sub">
                                        <a href="service.php">
                                            Dịch vụ
                                        </a>
                                        <ul class="sub-menu">
                                            <div class="m-title">Dịch vụ</div>
                                            <?php for($i=0;$i<11;$i++){ ?>
                                                <li>
                                                    <a href="">
                                                        <span>Dịch vụ <?=$i?></span>
                                                        <p>Tư vấn Chuyển đổi số và xây dựng lộ trình phát triển CNTT</p>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="casestudy.php">Case studies</a></li>
                                    <li><a href="contact.php">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>