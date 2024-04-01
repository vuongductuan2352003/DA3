@include('includes.header')
<link rel="stylesheet" href="{{ asset('css/sanpham.css') }}">
<main>

    <section class="tieude">
        <div class="tieude1"> <a href="">Trang chủ</a>/<a href=""><strong>Cửa Hàng</strong> </a></div>
        <div class="tieude2"> Hiển thị 1-99 của 1601 kết quả <form>
                <select style="width:267px;height:39px" name="orderby" aria-label="Đơn hàng của cửa hàng">
                    <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                    <option value="rating">Thứ tự theo điểm đánh giá</option>
                    <option value="date" selected="selected">Mới nhất</option>
                    <option value="price">Thứ tự theo giá: thấp đến cao</option>
                    <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                </select>
                <input type="hidden" name="paged" value="1">
            </form>
        </div>

    </section>

    <section class="sanpham">
        <div class="sanpham-left">
            <div class="TKSP">
                <strong style="">
                    TÌM KIẾM SẢN PHẨM
                </strong>

                <form>
                    <select class="luachon" onchange="updateSelectWidth(this)">
                        <option value="" selected="selected">All</option>
                        <option value="noi-that-phong-an">Nội thất phòng ăn</option>
                        <option value="noi-that-phong-khach">Nội thất phòng khách</option>
                        <option value="noi-that-phong-ngu">Nội thất phòng ngủ</option>
                        <option value="noi-that-tre-em">Nội thất trẻ em</option>
                        <option value="noi-that-van-phong">Nội thất văn phòng</option>
                        <option value="phu-kien">Phụ kiện</option>
                    </select>
                    <input class="timkiem" type="search" placeholder="Tìm sản phẩm..." value="" name="s">
                    <i class="fa-solid fa-magnifying-glass" id="icon-seach"></i>

                </form>
                <div class="DanhMucSanPham">
                    <span class="TieuDeDanhMuc">Danh mục sản phẩm</span>
                    <ul class="DanhMucChinh">
                        <li class="DanhMucChinhItem">
                            <a href="#" class="LienKetDanhMucChinh">Nội thất phòng ăn</a>
                            <button class="NutChuyenDoi"><i class="fa-solid fa-chevron-down"></i></button>
                            <ul class="DanhMucCon">
                                <li><a href="#">Mẫu bàn ăn gỗ đẹp</a></li>
                                <li><a href="#">Mẫu tủ bếp đẹp</a></li>
                            </ul>
                        </li>
                        <li class="DanhMucChinhItem">
                            <a href="#" class="LienKetDanhMucChinh">Nội thất phòng khách</a>
                            <button class="NutChuyenDoi"><i class="fa-solid fa-chevron-down"></i></button>
                            <ul class="DanhMucCon">
                                <li><a href="#">Bàn trà phòng khách</a></li>
                                <li><a href="#">Kệ gỗ trang trí đẹp</a></li>
                                <li><a href="#">Mẫu kệ ti vi đẹp</a></li>
                                <li><a href="#">Mẫu sofa Da Nỉ Đẹp</a></li>
                                <li><a href="#">Mẫu tủ giày đẹp </a></li>
                                <li><a href="#">Sofa gỗ hiện đại </a></li>
                                <li><a href="#">Tủ rượu gỗ công nghiệp</a></li>
                                <li><a href="#">Kệ gỗ trang trí đẹp</a></li>
                                <li><a href="#">Vách ngăn phòng khách đẹp</a></li>
                                <!-- Thêm các mục con khác tương tự -->
                            </ul>
                        </li>
                        <li class="DanhMucChinhItem">
                            <a href="#" class="LienKetDanhMucChinh">Nội thất phòng ngủ</a>
                            <button class="NutChuyenDoi"><i class="fa-solid fa-chevron-down"></i></button>
                            <ul class="DanhMucCon">
                                <li><a href="#">Bàn phấn trang điểm</a></li>
                                <li><a href="#">Bộ giường tủ phòng ngủ</a></li>
                                <li><a href="#">Mẫu giường ngủ bọc da nỉ</a></li>
                                <li><a href="#">Mẫu giường ngủ gỗ đẹp</a></li>
                                <li><a href="#">Mẫu tủ quần áo đẹp</a></li>

                                <!-- Thêm các mục con khác tương tự -->
                            </ul>
                        </li>
                        <li class="DanhMucChinhItem">
                            <a href="#" class="LienKetDanhMucChinh">Nội thất trẻ em</a>
                            <button class="NutChuyenDoi"><i class="fa-solid fa-chevron-down"></i></button>
                            <ul class="DanhMucCon">
                                <li><a href="#">Bàn học trẻ em</a></li>
                                <li><a href="#">Giường ngủ cho bé gái</a></li>
                                <li><a href="#">Giường ngủ cho bé trai</a></li>
                                <li><a href="#">Giường ngủ trẻ em</a></li>
                                <!-- Thêm các mục con khác tương tự -->
                            </ul>
                        </li>
                        <!-- Thêm các danh mục chính khác -->
                        <li class="DanhMucChinhItem">
                            <a href="#" class="LienKetDanhMucChinh">Nội thất văn phòng</a>
                            <button class="NutChuyenDoi"><i class="fa-solid fa-chevron-down"></i></button>
                            <ul class="DanhMucCon">
                                <li><a href="#">Bàn làm việc</a></li>
                                <li><a href="#">Tủ đựng tài liệu</a></li>
                                <!-- Thêm các mục con khác tương tự -->
                            </ul>
                        </li>
                        <li class="DanhMucChinhItem">
                            <a href="#" class="LienKetDanhMucChinh">Phụ kiện</a>
                        </li>
                    </ul>
                </div>


                <div id="dmyt-1">
                    <h4 class="filter-title">DANH MỤC YÊU THÍCH</h4>
                </div>

                <div id="dmyt">
                    <ul>


                        <li>
                            <label>
                                <input type="checkbox" value="ban-hoc-tre-em">
                                Bàn học trẻ em
                            </label>
                            <hr>
                        </li>


                        <li>
                            <label>
                                <input type="checkbox" value="ban-lam-viec">


                                Bàn làm việc
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="ban-phan-trang-diem">


                                Bàn phấn trang điểm
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="ban-tra-nhat-phong-khach-dep">


                                Bàn trà Nhật
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>

                                <input type="checkbox" value="bo-giuong-tu">


                                Bộ giường tủ
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="giuong-ngu-cho-be-gai">


                                Giường ngủ cho bé gái
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="giuong-ngu-cho-be-trai">


                                Giường ngủ cho bé trai
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="ke-go-trang-tri-dep">


                                Kệ gỗ trang trí đẹp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="mau-ban-an-dep">


                                Mẫu bàn ăn đẹp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="mau-giuong-ngu-dep">


                                Mẫu giường ngủ đẹp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="mau-ke-tivi-dep">


                                Mẫu kệ tivi đẹp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="mau-sofa-da-ni-dep">


                                Mẫu Sofa Da Nỉ Đẹp </a>
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="mau-tu-bep-dep">


                                Mẫu tủ bếp đẹp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="mau-tu-giay-dep">


                                Mẫu tủ giầy đẹp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="mau-tu-quan-ao-dep">


                                Mẫu tủ quần áo đẹp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="noi-that-phong-an">


                                Nội thất phòng ăn
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="noi-that-phong-khach">


                                Nội thất phòng khách
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="noi-that-phong-ngu">


                                Nội thất phòng ngủ
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="noi-that-tre-em">


                                Nội thất trẻ em
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="noi-that-van-phong">


                                Nội thất văn phòng
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="phong-ngu-tre-em">


                                Phòng ngủ trẻ em
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="phu-kien">


                                Phụ kiện
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="sofa-go-hien-dai">


                                Sofa gỗ hiện đại
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="tu-dung-tai-lieu">


                                Tủ đựng tài liệu
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="tu-ruou-go-cong-nghiep">


                                Tủ rượu gỗ công nghiệp
                            </label>
                            <hr>
                        </li>

                        <li>
                            <label>
                                <input type="checkbox" value="vach-ngan-phong-khach-dep">


                                Vách ngăn phòng khách đẹp
                            </label>

                        </li>


                    </ul>
                </div>


            </div>

        </div>


        </div>
        <div class="sanpham-right">
        @foreach ($sanPhams as $sanPham)
    
            <a href="{{url('Chi-Tiet-San-Pham')}}?id={{ $sanPham->MaSanPham}}">
              <div class="MAUSP">
        <div class="hover-img"><div class="heart">
                <i style="color:#B87029;margin-top:5px; " class="fa-solid fa-heart"></i>
            </div>
            <div class="img zoom">
                <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $sanPham->AnhDaiDien) }}">
            </div>
            <div class="m">
                <span>XEM NHANH</span>
            </div>
            
        </div>
        <div class="textttt">
            <p  style="padding-top:20px;color:red"><a href="">{{ $sanPham->TenSanPham }}</a></p>
            <bdi style="font-size: 23px;color:#BD1003;"> <strong>{{ number_format($sanPham->Gia, 0, ',', '.') }}₫</strong></bdi>
            <p style="font-size: 12px; color:black; ">
                Nhà sản xuất: {{ $sanPham->NhaSanXuat }}
                Bảo hành: {{ $sanPham->BaoHanh }}
            </p>  
        </a>
            
        </div>
    </div>
@endforeach
@if ($sanPhams->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ ($sanPhams->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $sanPhams->url(1) }}">«</a>
        </li>
        @for ($i = 1; $i <= $sanPhams->lastPage(); $i++)
            <li class="{{ ($sanPhams->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $sanPhams->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($sanPhams->currentPage() == $sanPhams->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $sanPhams->url($sanPhams->currentPage()+1) }}">»</a>
        </li>
    </ul>
@endif





        </div>

        
    </section>



    <script src="{{ asset('js/sanpham.js') }}"></script>
</main>

@include('includes.footer')