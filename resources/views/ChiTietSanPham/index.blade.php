@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/chitietsanpham.css') }}">
<main class="SP-mainn" id="main" style="color:black">
    <section id="SP">
        <div id="adress">
            <nav><a href="https://dogolegia.vn">Trang chủ</a> <span>/</span> <a href="https://dogolegia.vn/cua-hang/">Cửa hàng</a> <span class="divider">/</span> </nav>
        </div>

      
        <div class="SP-main">
            <div id="SP-1">
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $chiTietSanPham->AnhDaiDien) }}" alt="">
            </div>
            <div id="SP-2" style="margin-top:-20px">
                <h1 style="font-size: 27.2px;">{{ $chiTietSanPham->TenSanPham }}</h1>
                <div>
                    <div>
                        <span>{{ number_format($chiTietSanPham->Gia, 0, ',', '.') }}₫</span>
                    </div>
                </div>
                <div>
                    <p>Nhà sản xuất: {{ $chiTietSanPham->NhaSanXuat }}</p>
                    <p>Bảo hành: {{ $chiTietSanPham->BaoHanh }}</p>
                </div>
                <p style="color:#7a9c59">Còn hàng</p>
                <button class="tgh" style="float:left;" action="{{ route('giohang.add') }}" method="POST">Thêm vào giỏ</button>
                <div style="clear: both;color:#334862;font-size:18px;margin-top:10px;float:left">
                    <p>Add to wishlist</p>
                </div>
                <div class="mn" style="clear:both;margin-top:-10px;float:left">
                    <p style="width:200px;color: white; font-size: 20px;margin:10px 120px;float:left">MUA NGAY</p>
                    <p style="color:white;margin:-5px 50px;float:left">Gọi điện xác nhận và giao hàng tận nơi</p>
                </div>
                <div style="clear:both;margin-top:10px;float:left">
                    <hr style=" border-style: dashed;color:rgb(177, 177, 177);width:390px;margin-left:-1px">
                    <p style="color:rgb(68, 68, 68);margin-top:-5px">Danh mục: Mẫu giường ngủ đẹp</p>
                    <hr style=" border-style: dashed;color:rgb(201, 198, 198);margin-top:-10px;width:390px;margin-left:-1px">
                    <p style="color:rgb(75, 74, 74);">Từ khóa: giường ngủ gỗ công nghiệp, mẫu giường gỗ <br> đẹp, mẫu giường ngủ đẹp, mẫu giường ngủ đẹp hiện đại</p>
                </div>
            </div>
        </div>

        <div id="SP-3">
            <div class="SP-3">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/faq1_cbf8debe-857c-4491-85e1-d0cca2a994da.svg" style="float: left;" alt="">
                <div style="float: left;width:238px;margin-left:15px"><span>Giá bán tại Showroom chưa bao gồm
                        lắp đặt vận chuyển</span></div>

            </div>
            <hr style="width: 300px;">
            <div class="SP-3">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/faq2_abac8f1c-edce-4406-bbe7-f4d6c9647f3a.svg" style="float: left;" alt="">
                <div style="float: left;width:238px;margin-left:15px"><span>Nhập khẩu và phân phối trực tiếp -
                        Hàng có sẵn tại Showroom</span></div>

            </div>
            <hr style="width: 300px;">
            <div class="SP-3">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/faq3_0c8ea9ae-1651-4e7c-bfcf-5e47d4b12847.svg" style="float: left;" alt="">
                <div style="float: left;width:238px;margin-left:15px"><span>Có xưởng sản xuất riêng với máy móc
                        hiện đại</span></div>

            </div>
            <hr style="width: 300px;">
            <div class="SP-3">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/faq4_3c1febe7-f68a-4d64-9986-0e6fed9d6486.svg" style="float: left;" alt="">
                <div style="float: left;width:238px;margin-left:15px"><span>Đội ngũ tư vấn trên 15 năm kinh
                        nghiệm <a href="/ve-chung-toi" style="color:#FF564A">(Giới thiệu)</a></span></div>

            </div>
            <hr style="width: 300px;">
            <div class="SP-3">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/faq5_3bfb4bc3-19b3-421e-9ce6-1caad46b5ad1.svg" style="float: left;" alt="">
                <div style="float: left;width:238px;margin-left:15px"><span>Sản phẩm được đảm bảo về cả chất
                        lượng lẫn giá thành</span></div>

            </div>
            <hr style="width: 300px;">
            <div class="SP-3">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/faq6_8a27b87a-c7a5-4502-a4a8-846990f8a982.svg" style="float: left;" alt="">
                <div style="float: left;width:238px;margin-left:15px"><span>Chính sách bảo hành tốt nhất - Thời
                        gian bảo hành sản phẩm lên tới 5 năm <a href="#" style="color:#FF564A">(Bảo
                            hành)</a></span></div>

            </div>

        </div>
        <div id="SP-END" style="margin-top:20px ;color:black">
            <div class="ICON-SP">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/affection.svg" style="float: left;" alt="">
                <div style="float: left;width:150px;margin-left:15px"><span>Yên tâm mua sắm,giải tỏa âu lo</span>
                </div>
            </div>
            <div class="ICON-SP">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/package.svg" style="float: left;" alt="">
                <div style="float: left;width:170px;margin-left:15px"><span>Nguyên liệu nhập khẩu,nguồn gốc rõ
                        ràng</span></div>
            </div>
            <div class="ICON-SP">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/scientist.svg" style="float: left;" alt="">
                <div style="float: left;width:150px;margin-left:15px"><span>Được tư vấn tận tình và có tâm</span>
                </div>
            </div>
            <div class="ICON-SP">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/ship.svg" style="float: left;" alt="">
                <div style="float: left;width:150px;margin-left:15px"><span>Thi công-Giao hàng nhanh chóng</span>
                </div>
            </div>
            <div class="ICON-SP">
                <img src="https://dogolegia.vn/wp-content/uploads/2022/08/process.svg" style="float: left;" alt="">
                <div style="float: left;width:150px;margin-left:15px"><span>Bảo hành và bảo trì dài hạn</span></div>
            </div>
        </div>
    </section>
    <section id="GT" style="color:black">
        <div id="menu-GT">
            <ul>
                <li id="block11" style="width:70px">
                    <span>MÔ TẢ</span>
                </li>

                <li id="block2" style="width:300px;margin-left:-4px">
                    <span>HƯỚNG DẪN MUA HÀNG VÀ THANH TOÁN </span>
                </li>

            </ul>

        </div>
        <div id="MT" style="color:black">
            <p style="font-size: 16px;line-height:25px">Mẫu giường ngủ hiện đại gỗ công nghiệp cao cấp, màu sắc đẹp
                trang nhã luôn khiến bạn thư thái. Hãy lựa chọn cho mình mẫu giường ngủ đúng phong cách bạn yêu
                thích nhé.</p>

            <h2 style="text-align: center">ĐỒ GỖ NỘI THẤT PHÒNG NGỦ – MẪU GIƯỜNG NGỦ ĐẸP LG-GN262</h2>
            <p style="font-size: 16px">♦ Xem thiết kế nội thất phòng ngủ đẹp, quy trình nhanh chóng hiệu quả</p>
            <h3 style="text-align: center;font-size: 20px">* Mẫu giường ngủ hiện đại đẹp gỗ công nghiệp&nbsp;
                LG-GN262</h3>
            <img style="width:930px;height:776.5px" src="https://dogolegia.vn/wp-content/uploads/2022/09/x-mau-giuong-ngu-dep-hien-dai-go-cong-nghiep-LG-GN262.jpg" alt="">
            <p style="text-align: center">Mẫu giường ngủ gỗ công nghiệp LG-GN262</p>
            <p>Mẫu giường ngủ hiện đại gỗ công nghiệp cao cấp, màu sắc đẹp trang nhã luôn khiến bạn thư thái. Hãy
                lựa chọn cho mình mẫu giường ngủ đúng phong cách bạn yêu thích nhé.</p>
            <p>Đây là mẫu giường bành Nhật với phong cách hiện đại, đuôi giường thiết kế bo tròn tạo sự an toàn cho
                các thành viên trong gia đình. Màu sắc đẹp tinh tế, mang sự nhẹ nhàng cho không gian phòng ngủ.</p>
            <p>♦ Lựa chọn thiết kế tủ quần áo thông minh để đồng bộ với giường ngủ nhé bạn</p>
            <h3 style="text-align: center">* Bảng giá chi tiết cho Mẫu giường ngủ đẹp LG-GN262 *</h3>
            <p style="text-align: center">(Quý khách đặt nhiều sản phẩm sẽ có giá ưu đãi. Hãy liên hệ ngay với chúng
                tôi để có giá tốt nhất)</p>
            <p style="text-align: center">(Quý khách đặt nhiều sản phẩm sẽ có giá ưu đãi. Hãy liên hệ ngay với chúng
                tôi để có giá tốt nhất)</p>
            <p style="text-align: center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; – Thời gian giao hàng: Từ 7 – 10
                ngày sau khi Quý khách đặt hàng</p>
            <p style="text-align: center">– Kích thước và chất liệu gỗ: Theo yêu cầu của Quý khách</p>
            <p style="text-align: center">– Cam kết: 100% sản phẩm cùng chất liệu đã chọn, giát giường cùng chất
                liệu</p>
            <p><img decoding="async" loading="lazy" class="aligncenter wp-image-15363 size-full" src="https://dogolegia.vn/wp-content/uploads/2022/09/Gia-mau-giuong-ngu-go-dep-hien-dai-go-cong-nghiep-gia-re-LG-GN262.jpg" alt="" width="965" height="205" srcset="https://dogolegia.vn/wp-content/uploads/2022/09/Gia-mau-giuong-ngu-go-dep-hien-dai-go-cong-nghiep-gia-re-LG-GN262.jpg 965w, https://dogolegia.vn/wp-content/uploads/2022/09/Gia-mau-giuong-ngu-go-dep-hien-dai-go-cong-nghiep-gia-re-LG-GN262-300x64.jpg 300w, https://dogolegia.vn/wp-content/uploads/2022/09/Gia-mau-giuong-ngu-go-dep-hien-dai-go-cong-nghiep-gia-re-LG-GN262-768x163.jpg 768w, https://dogolegia.vn/wp-content/uploads/2022/09/Gia-mau-giuong-ngu-go-dep-hien-dai-go-cong-nghiep-gia-re-LG-GN262-900x191.jpg 900w" sizes="(max-width: 965px) 100vw, 965px"></p>
            <p><img style="width:900px;height:350px" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/9.png') }}"></p>

        </div>
        <div id="HDMH" style="color:black">
            <h2><strong style="color:black">HÌNH THỨC THANH TOÁN KHI MUA HÀNG TẠI ĐỒ GỖ LÊ GIA</strong></h2>

            Đồ gỗ Lê Gia hiện đang áp dụng các hình thức thanh toán sau (Quý khách lựa chọn hình thức thanh toán phù
            hợp):

            <strong><br><br>1/ Thanh toán trực tiếp khi mua hàng tại Showroom ĐỒ GỖ LÊ GIA</strong>
            <ul>
                <li>Add: 89, LK12, Đường số 23, KĐT Thành Phố Giao Lưu, Phạm Văn Đồng, HN. (Cạnh Metro Mega Market,
                    cách mặt đường Phạm Văn Đồng 50m)</li>
                <li>Chỉ đường Google Map:&nbsp;<a style="color:black" href="https://g.page/dogolegia?share">https://g.page/dogolegia?share</a></li>
            </ul>
            <strong><em><u>Quý khách lưu ý:</u></em></strong>
            <ul>
                <li>Kiểm tra kỹ lại các thông tin trao đổi tại showroom</li>
                <li>Hàng đã mua chỉ được đổi/trả khi đáp ứng các điều kiện đổi trả</li>
                <li>Đơn hàng chỉ được thực hiện khi chúng tôi nhận được thanh toán và thông tin chính xác, đầy đủ
                </li>
            </ul>
            <strong>2/ Chuyển khoản qua ngân hàng</strong>


            Quý khách chuyển vào tài khoản của chúng tôi như sau:

            <strong><em><u><img style="width:900px;height:350px" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/8.png') }}">
                        <p></p> Quý khách lưu ý:
                    </u></em></strong>
            <ul>
                <li>Trong nội dung chuyển khoản Quý khách ghi rõ “Tên-SĐT”</li>
                <li>Sau khi thanh toán Quý khách báo lại với ĐỒ GỖ LÊ GIA</li>
                <li>Đơn hàng chỉ được thực hiện khi chúng tôi nhận được thanh toán và thông tin chính xác, đầy đủ.
                </li>
            </ul>

        </div>
    </section>
    <section id="SPBC">
        <div id="SPBC-1">
            <h3 style="margin-top: 5px;">SẢN PHẨM BÁN CHẠY</h3>
        </div>
        <div class="MAUSP">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP059-1.jpg" alt="">
            <p><a href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP059</a></p>
            <bdi style="font-size: 23px;color:#BD1003">2.800.000<span>₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="MAUSP">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP058-1.jpg" alt="">
            <p><a href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP058</a></p>
            <bdi style="font-size: 23px;color:#BD1003">2.200.000<span>₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="MAUSP">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP057-2.jpg" alt="">
            <p><a href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP057</a></p>
            <bdi style="font-size: 23px;color:#BD1003">4.200.000<span>₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="MAUSP">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP056-1.jpg" alt="">
            <p><a href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP056</a></p>
            <bdi style="font-size: 23px;color:#BD1003">3.600.000<span>₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="MAUSP">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-ban-phan-dep-hien-dai-bang-go-cong-nghiep-LG-BP054-1.jpg" alt="">
            <p><a href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP095</a></p>
            <bdi style="font-size: 23px;color:#BD1003">2.100.000<span>₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
    </section>

    <section id="SPTT">
        <hr>
        <h3 style="font-size: 20px;">
            SẢN PHẨM TƯƠNG TỰ </h3>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-giuong-ngu-go-dep-hien-dai-bang-cong-nghiep-LG-GN154.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU GIƯỜNG GỖ ĐẸP LG-GN095</a></p>
            <bdi style="font-size: 23px;color:#BD1003">10.600.000<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-giuong-ngu-go-dep-bang-cong-nghiep-LG-GN083.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU BÀN PHẤN TRANG ĐIỂM ĐẸP HIỆN ĐẠI LG-BP059</a></p>
            <bdi style="font-size: 23px;color:#BD1003">9.500.000<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Mau-giuong-ngu-dep-LG-GN053.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU GIƯỜNG NGỦ ĐƠN GIẢN ĐẸP LG-GN053</a></p>
            <bdi style="font-size: 23px;color:#BD1003">12.942.500<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Mau-giuong-ngu-dep-LG-GN022.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU GIƯỜNG NGỦ ĐẸP LG-GN022</a></p>
            <bdi style="font-size: 23px;color:#BD1003">8.940.000<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-giuong-ngu-go-dep-bang-cong-nghiep-LG-GN078.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU GIƯỜNG GỖ ĐẸP LG-GN078</a></p>
            <bdi style="font-size: 23px;color:#BD1003">9.700.000<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Mau-giuong-ngu-dep-LG-GN001-2.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU GIƯỜNG NGỦ ĐẸP LG-GN001</a></p>
            <bdi style="font-size: 23px;color:#BD1003">6.500.000<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/Mau-giuong-ngu-dep-LG-GN051.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU GIƯỜNG NGỦ ĐẸP LG-GN051</a></p>
            <bdi style="font-size: 23px;color:#BD1003">6.300.000<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>
        <div class="SPTT-1">
            <img src="https://dogolegia.vn/wp-content/uploads/2022/09/mau-giuong-ngu-go-dep-bang-cong-nghiep-LG-GN066.jpg" alt="">
            <p><a style="font-size:14.4px" href="https://dogolegia.vn/cua-hang/mau-ban-phan-trang-diem-dep-hien-dai-lg-bp059/">MẪU GIƯỜNG NGỦ HIỆN ĐẠI ĐẸP LG-GN066</a></p>
            <bdi style="font-size: 23px;color:#BD1003">7.200.000<span class="woocommerce-Price-currencySymbol">₫</span></bdi>
            <p style="font-size: 11.52px;">
                Nhà sản xuất: ĐỒ GỖ LÊ GIA

                Bảo hành: 24 tháng </p>
        </div>

    </section>
</main>















<script src="{{ asset('js/chitietsanpham.js') }}"></script>


@include('includes.footer')