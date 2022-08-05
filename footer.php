            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <br/>
                                    <a href="">
                                        <img src="./images/frame17.svg">
                                    </a>
                                    <p>Công ty TNHH GalaxyOne</p>
                                    <p>Mã số GCNĐKDN: 0316229413. Ngày cấp: 13 tháng 4 năm 2020</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <p><img src="./images/address.svg"> Tầng 14, Tòa Nhà HD Tower, 25bis Nguyễn Thị Minh Khai, Phường Bến Nghé, Quận 1, TP.HCM</p>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <p><img src="./images/call.svg"> 02873058555</p>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <p><img src="./images/inbox.svg"> info@galaxy.one</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <span>Copyright ©2022 Bstar. All rights reserved.</span>
                </div>
            </footer>
        </div>
    </body>
</html>

<script>
    $(document).ready(function() {
        $('.box-service').click(function(e){
            $('.box-service').removeClass('active');
            $(this).addClass('active');
        });

        $('.owl-carousel').owlCarousel({
            nav:true,
            loop:true,
            margin:15,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    });
</script>