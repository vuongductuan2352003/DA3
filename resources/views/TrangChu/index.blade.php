@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/trangChu.css') }}">
<main>
    <section class="Slide-main">

        <div class="banner-slider">

            <div id="slider-img">
                @foreach ($slides as $slide )
                @if ($slide->id == 3)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten">
                    <div class="title">NHÀ THIẾT KẾ</div>
                    <div class="topic">VƯƠNG ĐỨC TUẤN <br>

                        Nghệ Thuật Thiết Kế Đồ Gỗ</div>
                    <div class="des" >
                        Vương Đức Tuấn, nhà thiết kế đồ gỗ mỹ nghệ, là người nghệ nhân tài năng với sự kết hợp tinh tế giữa truyền thống và hiện đại. Những tác phẩm của ông không chỉ là đồ nội thất mà còn là những tác phẩm nghệ thuật sống, đặc trưng bởi chi tiết tỉ mỉ và chất lượng tốt. Sự sáng tạo và đam mê của Vương Đức Tuấn đã tạo ra những không gian sống độc đáo, phản ánh vẻ đẹp và tinh thần nghệ thuật của đồ gỗ.
                    </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imgg">
                @foreach ($slides as $slide )
                @if ($slide->id == 4)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">PHÒNG KHÁCH </div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
 color:#363636; border-radius: 10px;line-height:30px">
                        Nội thất phòng khách chất liệu gỗ của chúng tôi mang đến không gian ấm cúng và sang trọng. Sự kết hợp tinh tế giữa các loại gỗ tự nhiên và thiết kế độc đáo tạo nên những chiếc sofa, bàn trà và kệ trang trí vô cùng ấn tượng. Bạn sẽ tận hưởng không gian thoải mái và đẳng cấp trong từng chi tiết, là sự hòa quyện hoàn hảo giữa nét truyền thống và hiện đại. </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imggg">
                @foreach ($slides as $slide )
                @if ($slide->id == 5)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">PHÒNG NGỦ </div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
 color:#363636; border-radius: 10px;line-height:30px">
                        Nội thất phòng ngủ chất liệu gỗ của chúng tôi kết hợp vẻ đẹp tự nhiên của gỗ cao cấp với thiết kế hiện đại. Bộ sản phẩm bao gồm giường ngủ, tủ quần áo và bàn trang điểm, tạo nên không gian ấm cúng và sang trọng trong phòng ngủ của bạn. Sự tinh tế trong chi tiết và chất lượng bền bỉ là ưu điểm nổi bật của nội thất phòng ngủ chúng tôi.




                    </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imgggg">
                @foreach ($slides as $slide )
                @if ($slide->id == 6)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">PHÒNG TRẺ EM</div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
 color:#363636; border-radius: 10px;line-height:30px;">

                        Nội thất trẻ em chất liệu gỗ của chúng tôi được thiết kế ngắn gọn và an toàn, tạo không gian phòng ngủ thoải mái và thân thiện với trẻ. Sử dụng gỗ tự nhiên, sản phẩm của chúng tôi đảm bảo chất lượng và an toàn, với thiết kế chuyên nghiệp và chi tiết bo tròn để bảo vệ trẻ nhỏ.
                    </div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
            <div id="slider-imggggg">
                @foreach ($slides as $slide )
                @if ($slide->id == 7)
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                @endif
                @endforeach
                <div class="conten" style="margin-top:20px">
                    <div class="title">NỘI THẤT </div>
                    <div class="topic">VĂN PHÒNG</div>
                    <div class="des" style="margin-top:-10px;width:700px;font-size:23px; background-color: rgba(255,255,255,0.7);
 color:#363636; border-radius: 10px;line-height:30px">

                        Nội thất văn phòng chất liệu gỗ của chúng tôi: đẹp, ấm áp, và chức năng. Thiết kế đơn giản nhưng sang trọng, kết hợp với chất liệu gỗ tự nhiên chọn lọc. Bàn làm việc và kệ sách thông thoáng, tối ưu hóa không gian làm việc. Sự linh hoạt và tiện ích là ưu tiên hàng đầu, mang lại không gian làm việc thoải mái và hiệu quả.</div>
                    <div class="buttons">
                        <button>XEM THÊM</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="banner-sliderr">

            <div class="banner-itemm">
                <div>
                    @foreach ($slides as $slide )
                    @if ($slide->id == 3)
                    <img id="slide-im" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach

                    <div class="tieude-slide" style="margin-top:200px">
                        GIỚI THIỆU

                    </div>


                </div>
            </div>
            <div class="banner-itemm">
                <div>

                    @foreach ($slides as $slide )
                    @if ($slide->id == 4)
                    <img id="slide-imm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach

                    <div class="tieude-slide">
                        NỘI THẤT <br> PHÒNG KHÁCH

                    </div>

                </div>
            </div>
            <div class="banner-itemm">
                <div>
                    @foreach ($slides as $slide )
                    @if ($slide->id == 5)
                    <img id="slide-immm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach


                    <div class="tieude-slide">
                        NỘI THẤT <br>PHÒNG ĂN

                    </div>

                </div>
            </div>

            <div class="banner-itemm">
                <div>

                    @foreach ($slides as $slide )
                    @if ($slide->id == 6)
                    <img id="slide-immmm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach
                    <div class="tieude-slide">
                        NỘI THẤT <br>PHÒNG TRẺ EM

                    </div>



                </div>
            </div>
            <div class="banner-itemm">
                <div>

                    @foreach ($slides as $slide )
                    @if ($slide->id == 7)
                    <img id="slide-immmmm" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $slide->Slide) }}">
                    @endif
                    @endforeach

                    <div class="tieude-slide">
                        NỘI THẤT <br> VĂN PHÒNG

                    </div>


                </div>
            </div>

        </div>


    </section>

    <section id="main-top-2">
        <div id="text-main-top-2">
            <div class="h">
                <h3 class="hh">THÂN GỬI</h3>
                <h3 class="hhh">THÂN GỬI</h3>
            </div>
            <div id="text-MT1">
                <h3><span style="font-size: 120%"><strong><span style="color: #5a4137">GIÁ TRỊ CỐT LÕI
                                MÀ</span> <span style="color: #e08b1b">ĐỒ GỖ VƯƠNG TUẤN</span> <span style="color: #5a4137">MANG LẠI CHO BẠN</span></strong></span></h3>
                <p><span style="color: #000000">Nhắc đến nhà là nhắc đến nơi thiêng liêng ấm cúng, nơi mà ai
                        ai cũng muốn trở về để được tận hưởng cảm giác yên bình, cảm giác sum vầy, bỏ bên
                        ngoài cánh cửa kia những khó khăn bộn bề của cuộc sống.</span></p>
                <p><span style="color: #000000">Chúng tôi, <a style="color: #000000;text-decoration: none;" href="index.html">ĐỒ GỖ VƯƠNG TUẤN</a> luôn mong muốn mang đến cho bạn một không
                        gian để bạn cảm thấy “đây đích thực là nơi yêu dấu của mình rồi!” Và với mong muốn
                        đó, chúng tôi từng ngày nỗ lực để thấu hiểu bạn và mang đến cho bạn những sản phẩm
                        tạo nên giá trị sống thực sự.</span></p>
                <div id="LHTV">
                    <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                        <span style="float:left;margin-left:10px;color:#a03522;text-indent:15px;">
                            <strong>Liên hệ tư vấn</strong></span>
                        <i class="gg-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
        <div id="video-main">
            <img class="video-main" src="https://dogolegia.vn/wp-content/uploads/2022/09/furniture3.jpg" alt="">
            <div class="block">
                <a href="https://www.youtube.com/watch?v=QQYuhqsJHSs">
                    <span class="play-button"> <span></span>
                </a>

                </span>
                <div>

                </div>
            </div>

        </div>

    </section>
    <section id="main-middle-1">
        <div class="h" id="DVCVT" style="margin-left:500px">
            <h3>
                <span class="hh">DỊCH VỤ CỦA VƯƠNG TUẤN</span>
            </h3>
            <h3><span class="hhh">DỊCH VỤ CỦA VƯƠNG TUẤN</span></h3>
        </div>
        <div id="img-middle-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/b-1.png" alt="">
        </div>
        <div id="img-middle-2">
            <div class="zoomin content">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Leyla-Salayeva-5.jpg" alt="">
                <div class="text-zoom-1">
                    <div class="border-zoom">

                    </div>
                    <h4><strong>THIẾT KẾ NỘI THẤT</strong></h4>
                    <h2><strong>BIỆT THỰ/LIỀN KỀ</strong></h2>
                </div>
            </div>
            <div class="zoomin content">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/09/nhung-luu-y-can-biet-khi-thiet-ke-thi-cong-noi-that-chung-cu-dep-va-hien-dai.jpg" alt="">
                <div class="text-zoom-1">
                    <div class="border-zoom">

                    </div>
                    <h4><strong>THIẾT KẾ NỘI THẤT</strong></h4>
                    <h2><strong>CHUNG CƯ/CĂN HỘ</strong></h2>
                </div>
            </div>
            <div class="zoomin content">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/09/nha-dep-tuong-dep.jpg" alt="">
                <div class="text-zoom-1">
                    <div class="border-zoom">

                    </div>
                    <h4><strong>THIẾT KẾ NỘI THẤT</strong></h4>
                    <h2><strong>NHÀ PHỐ</strong></h2>
                </div>
            </div>
        </div>
    </section>

    <section id="main-middle-2">
                <div class="h" id="CHSP">
                    <h3>
                        <span class="hh">CỬA HÀNG SẢN PHẨM</span>
                    </h3>
                    <h3><span class="hhh">CỬA HÀNG SẢN PHẨM</span></h3>
                </div>
                <div id="CHSP-text">
                    <p style="text-align: center; width:700px; height:20px;"><strong>CÙNG THAM QUAN <span
                                style="color: #ed1c24">1000+</span> SẢN PHẨM ĐƯỢC CẬP NHẬT MỚI NHẤT CỦA CHÚNG
                            TÔI</strong></p>
                    <p style="margin: 10px 250px;"><img decoding="async" loading="lazy" class="aligncenter"
                            src="https://dogolegia.vn/wp-content/uploads/2022/09/b.png" alt="" width="182"
                            height="12" /><br />
                </div>
                <div class="zoomin-1 content-1">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/noi-that-phong-khach-banner.jpeg" alt="">
                    <div class="text-zoom-2">
                        <div class="border-zoom-1">
                        </div>
                        <h3 style="margin:25px 0px;"><span><strong>NỘI THẤT PHÒNG KHÁCH</strong></span></h3>
                        <div class="XCT">
                            <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                                <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                                    <strong>xem chi tiết</strong></span>
                                <i class="gg-chevron-right" id="gg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="zoomin-2 content-2">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/z3615458239697_006f8275a0e59ba6187f91397414212c-1024x576.jpg"
                        alt="">
                    <div class="text-zoom-3">
                        <div class="border-zoom-2">
                        </div>
                        <h3 style="margin:20px 0px;"><span><strong>NỘI THẤT TRẺ EM</strong></span></h3>
                        <div class="XCT" style="margin:0px 150px;">
                            <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                                <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                                    <strong>xem chi tiết</strong></span>
                                <i class="gg-chevron-right" id="ggg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="zoomin-2 content-2">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/dinning-table-banner-1.jpeg" alt="">
                    <div class="text-zoom-3">
                        <div class="border-zoom-2">
                        </div>
                        <h3 style="margin:20px 0px;"><span><strong>NỘI THẤT PHÒNG BẾP</strong></span></h3>
                        <div class="XCT" style="margin:0px 150px;">
                            <a href="/lien-he" target="_self" style="border-radius:99px;text-decoration: none;">
                                <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                                    <strong>xem chi tiết</strong></span>
                                <i class="gg-chevron-right" id="gggg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="zoomin-1 content-1">
                    <img src="https://dogolegia.vn/wp-content/uploads/2022/09/open-book-on-yellow-duvet-in-small-cozy-bedroom-in-2022-02-02-04-48-38-utc-scaled-e1663304310740-1024x683.jpeg"
                        alt="">
                    <div class="text-zoom-2">
                        <div class="border-zoom-1">
                        </div>
                        <h3 style="margin:25px 0px;"><span><strong>NỘI THẤT PHÒNG NGỦ</strong></span></h3>
                        <div class="XCT">
                            <a href="/lien-he" style="border-radius:99px;text-decoration: none;">
                                <span style="float:left;margin:8px 5px;color:black;text-indent:15px;">
                                    <strong>xem chi tiết</strong></span>
                                <i class="gg-chevron-right" id="ggggg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


    <script src="{{ asset('js/trangChu.js') }}"></script>


</main>

@include('includes.footer')