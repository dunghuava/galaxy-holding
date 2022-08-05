<?php include ('header.php') ?>
<section class="p-service">
    <div class="bg-panel2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="page-title">
                        <span class="bold-text">Các dịch vụ</span> cung cấp
                    </h3>
                    <p class="description">Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="box-service-category">
                        <div class="side-left">
                            <h3 class="title">
                                <img src="./images/icon--document.svg">&nbsp;&nbsp;&nbsp;Dịch vụ 1
                            </h3>
                            <p>Tư vấn Chuyển đổi số và xây dựng lộ trình phát triển CNTT</p>
                            <ul class="list-category">
                                <li class="checked">
                                    Tư vấn lộ trình CNTT:
                                    <p>Tham gia xây dựng lộ trình phát triển công nghệ và roadmap các dự án với từng đơn vị đối tác</p>
                                </li>
                                <li>
                                    Tư vấn lộ trình CNTT:
                                    <p>Tham gia xây dựng lộ trình phát triển công nghệ và roadmap các dự án với từng đơn vị đối tác</p>
                                </li>
                                <li>
                                    Tư vấn lộ trình CNTT:
                                    <p>Tham gia xây dựng lộ trình phát triển công nghệ và roadmap các dự án với từng đơn vị đối tác</p>
                                </li>
                            </ul>
                        </div>
                        <div class="side-right">
                            <img src="./images/group-6356318.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-service bg-ufo">
    <div class="container">
        <div class="row">
            <?php for($i=0;$i<6;$i++){ ?>
                <div class="col-lg-6">
                    <div class="service-detail">
                        <h3>Dịch vụ <?=$i?></h3>
                        <div class="content">
                            <p>Cung cấp dịch vụ eKYC với quy trình chỉ trong 3 phút</p>
                            <ul>
                                <li class="checked">
                                    Tư vấn lộ trình CNTT:
                                    <p>Tham gia xây dựng lộ trình phát triển công nghệ và roadmap các dự án với từng đơn vị đối tác</p>
                                </li>
                                <li>
                                    Tư vấn lộ trình CNTT:
                                    <p>Tham gia xây dựng lộ trình phát triển công nghệ và roadmap các dự án với từng đơn vị đối tác</p>
                                </li>
                                <li>
                                    Tư vấn lộ trình CNTT:
                                    <p>Tham gia xây dựng lộ trình phát triển công nghệ và roadmap các dự án với từng đơn vị đối tác</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>       
<?php include 'footer.php' ?>