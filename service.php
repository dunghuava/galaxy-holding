<?php include ('header.php') ?>
<div class="page page-service">
    <img class="gr-moon" src="./images/gr-service-moon.svg">
    <div class="container">
        <div class="text-center">
            <h3 class="main-title"><span class="bold">Các dịch vụ</span> cung cấp</h3>
            <p class="main-desc">Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
        </div>
    </div>
    <div class="galaxy">
        <div class="container">
            <div class="row">
                <?php for($i=0;$i<9;$i++){ ?>
                    <div class="col-lg-6">
                        <div class="box">
                            <h3 class="name">Tư vấn chuyển đổi số</h3>
                            <div class="content">
                                <ul class="list">
                                    <p class="title">Tư vấn chuyển đổi số và xây dựng lộ trình phát triển CNTT</p>
                                    <li class="checked">
                                        <p class="head">Tư vấn lộ trình</p>
                                        <p>Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
                                    </li>
                                    <li class="checked">
                                        <p class="head">Tư vấn lộ trình</p>
                                        <p>Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
                                    </li>
                                    <li>
                                        <p class="head">Tư vấn lộ trình</p>
                                        <p>Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
                                    </li>
                                    <li>
                                        <p class="head">Tư vấn lộ trình</p>
                                        <p>Mang lại giá trị cho khách hàng thông qua việc kết nối số các sản phẩm dịch vụ.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('.wrapper').addClass('service');
</script>
<?php include 'footer.php' ?>