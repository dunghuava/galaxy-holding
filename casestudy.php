<?php include ('header.php') ?>
<div class="page page-casestudy">
    <div class="container">
        <div class="text-center">
            <h3 class="main-title"><span class="bold">Dự án đã</span> triển khai</h3>
            <p class="main-desc">Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
        </div>
    </div>
    <div class="botman">
        <div class="container">
            <div class="row">
                <?php for($i=0;$i<9;$i++){ ?>
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="img">
                                <img src="./images/case.jpg">
                            </div>
                            <div class="content">
                                <p class="name">Casestudy</p>
                                <p class="text">Triển khai hệ thống và dịch vụ Việt Nam Khỏe mạnh</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('.wrapper').addClass('casestudy');
</script>
<?php include 'footer.php' ?>