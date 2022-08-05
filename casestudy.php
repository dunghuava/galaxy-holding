<?php include ('header.php') ?>
<section class="p-study">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="page-title">
                    <span class="bold-text">Dự án đã</span> triển khai
                </h3>
                <p class="description">Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="caseitem">
                    <img src="./images/casestudy.png">
                    <div class="grid open">
                        <div class="title">
                            <p class="name">Case study</p>
                            <p class="text-desc">Phát triển thành công website quyvacxincovid19.gov.vn</p>
                        </div>
                        <div class="detail">
                            <ul>
                                <li>Thiết kế và xây dựng trong thời gian ngắn kỷ lục</li>
                                <li class="active">Trang web gov.vn đầu tiên với thiết kế trending và có mức độ chuẩn mực cao về UI/UX</li>
                                <li>Tổ chức thành công buổi hòa nhạc “Chia sẻ để gần nhau hơn” – Gây quỹ ủng hộ Quỹ vắc-xin phòng Covid-19</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php for($i=0;$i<9;$i++){ ?>
                <div class="col-lg-6 col-md-6">
                    <div class="caseitem">
                        <img src="./images/casestudy.png">
                        <div class="grid">
                            <div class="title">
                                <p class="name">Case study <?=$i?></p>
                                <p class="text-desc">Phát triển thành công website quyvacxincovid19.gov.vn</p>
                            </div>
                            <div class="detail">
                                <ul>
                                    <li>Thiết kế và xây dựng trong thời gian ngắn kỷ lục</li>
                                    <li class="active">Trang web gov.vn đầu tiên với thiết kế trending và có mức độ chuẩn mực cao về UI/UX</li>
                                    <li>Tổ chức thành công buổi hòa nhạc “Chia sẻ để gần nhau hơn” – Gây quỹ ủng hộ Quỹ vắc-xin phòng Covid-19</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>    
<?php include 'footer.php' ?>