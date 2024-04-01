<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <link rel="stylesheet" href="{{ asset('css/includes.css') }}">
   
</head>
<body>

    <header>
        <section class="TieuDeGHDN">
            <nav>
                <a href="" style="color: black"><strong style="color: red;">Showroom:</strong> Phiên Thành , Tân Trường ,Cẩm Giàng,Hải Dương <strong> | </strong>Hotline:&nbsp <a href="0868728765"> <strong style="color: #5a4137"> 0868728765 </strong>
                    </a></a>
                <span><i class="fa-solid fa-magnifying-glass" style="margin-left:550px; color:#5a4137"></i></span>
                <a href="" class="GioHang-hover"> <span class="fa-solid fa-cart-shopping " style="color: #5a4137"></span> Giỏ hàng </a>
                <a href="" class="GioHang-hover" style="font-size:17px;margin-left:65px">Đăng nhập</a>
            </nav>
        </section>
        <section class="MenuTrangChu">

            <div class="logo">
           
        <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/2.png') }}"style="height: 65px; width: 260px;margin-left:120px" alt="Ảnh Đại Diện">
  
            </div>
            <div class="MenuTrangChuu">
                <nav>
             
                    <a href="{{url('hi')}}" style="color: #B87209;"><i class="fa-solid fa-house"></i> Trang chủ </a>
                    <a href="">Về chúng tôi</a>
                    <a href="">Dịch vụ</a>
                    <a href="{{url('san-pham')}}">Sản phẩm đẹp <i class="fa-solid fa-chevron-down" style="font-size: 12px;color:#B87209"></i>
                    <ul class="SanPhamDep-menu">
                        <li></li>
                    </ul>

                
                </a>
                    <a href="">Thiết kế đặc trưng</a>
                    <a href="">Sản phẩm thực tế</a>
                    <a href="">Liên hệ</a>  
                </nav>
            </div>
         
        </section>
        
    </header>