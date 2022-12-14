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
    <link rel="stylesheet" href="owl-carosel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl-carosel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?=filemtime('css/style.css')?>">
    <link rel="stylesheet" href="css/responsive.css?v=<?=filemtime('css/responsive.css')?>">
    <!-- javascript -->
    <script src="owl-carosel/jquery.min.js"></script>
    <script src="owl-carosel/owl.carousel.min.js"></script>
    <title>Galaxy Holding</title>
</head>
<body>
    <div class="wrapper">
    <header class="main-header">
        <div class="container">
            <nav class="main-nav">
                <div class="logo">
                    <a href="index.php">
                        <img src="./images/frame18.svg">
                    </a>
                </div>
                <div class="menu">
                    <ul class="list">
                        <li><a href="about.php">Gi???i thi???u</a></li>
                        <li>
                            <a class="child" href="service.php">D???ch v???</a>
                            <ul class="sub">
                                <p class="name">D???ch v???</p>
                                <?php for($i=0;$i<12;$i++){ ?>
                                    <li>
                                        <a href="">D???ch v??? <?=$i?></a>
                                        <p>Mang l???i gi?? tr??? cho kh??ch h??ng th??ng qua vi???c k???t n???i s??? c??c s???n ph???m d???ch v???.</p>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li>
                            <a class="child" href="casestudy.php">Case study</a>
                            <ul class="sub">
                                <p class="name">Case study</p>
                                <?php for($i=0;$i<8;$i++){ ?>
                                    <li>
                                        <a href="">Case study <?=$i?></a>
                                        <p>Mang l???i gi?? tr??? cho kh??ch h??ng th??ng qua vi???c k???t n???i s??? c??c s???n ph???m d???ch v???.</p>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="contact.php">Li??n h???</a></li>
                    </ul>
                </div>
                <button class="menubar" href="#">
                    <img src="./images/icon-menu.svg">
                </button>
            </nav>
        </div>
    </header>