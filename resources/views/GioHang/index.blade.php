@include('includes.header')
 <link rel="stylesheet" href="{{ asset('css/giohang.css') }}">
    <main class="gioHang" style="display: block;color:black">
        <div class="h" id="DVCLG" style="margin-left: 660px;margin-bottom:60px">
            <h3>
                <span class="hh">GIỎ HÀNG</span>
            </h3>
            <h3><span class="hhh">GIỎ HÀNG</span></h3>
        </div>
       <section class="menu-gioHang">
        <div class="menu-gioHang1">
              <span>SẢN PHẨM</span>
              <span style="margin-left: 100px;">TÊN SẢN PHẨM</span>
        <span style="margin-left: 110px;">GIÁ</span>
        <span style="margin-left: 110px;">SỐ LƯỢNG</span>
        <span style="margin-left: 90px;">TẠM TÍNH</span>
        </div>
        <div id="t"  class="menu-sanpham"></div>
     
        <div>   @foreach ($gioHang as $gioHangs)
    <table>
    <tr>
    <th> <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $gioHangs->sanpham->AnhDaiDien) }}" style="width: 25%;height: auto;margin-left: -200px;" alt=""></th>
    <th style="width:130px">{{ $gioHangs->sanpham->TenSanPham }}</th>
    <th style="width: 20%;">{{ number_format($gioHangs->sanpham->Gia, 0, ',', '.') }} đ</th>
    <th style="width: 100px;">
        <!-- Button giảm số lượng -->
        <button type="button" onclick="decreaseQuantity('{{ $gioHangs->id }}')" style="background-color: transparent;border: none;font-size:25px;">-</button>
        {{ $gioHangs->SoLuong }}
        <!-- Button tăng số lượng -->
        <button type="button" onclick="increaseQuantity('{{ $gioHangs->id }}')" style="background-color: transparent;border: none;font-size:19px;">+</button>
    </th>
    <th style="width: 20%;">{{ number_format($gioHangs->sanpham->Gia * $gioHangs->SoLuong, 0, ',', '.') }} VNĐ</th>         
</tr>
    </table>
@endforeach

        </div>
      
      <button class="TTXSP"><i class="fa-solid fa-left-long"></i> TIẾP TỤC XEM SẢN PHẨM</button>
      <button class="TTXSP" onclick="reloadPage()"><i class="fa-solid fa-rotate" ></i> CẬP NHẬT GIỎ HÀNG</button>
       </section>
        <section class="ThanhToan">
            <span class="ThanhToan1" style="  border-bottom: 4px solid #e0d7d7; ">TỔNG GIỎ HÀNG</span>
          <span class="ThanhToan1" style="margin-top: 50px;"><span style="color: #e08b1b;font-size: 23px;"> TỔNG SẢN PHẨM  <span style="margin-left: 170px;" id="TMH"></span> <span></span></span></span>
            <span class="ThanhToan1"  style="margin-top: 50px;float: left;"><span style="color: #e08b1b;font-size: 23px;"  > TỔNG TIỀN <span style="margin-left: 80px;" id="total"></span>  VNĐ</span></span>
            <button class="THTT" id="btn-thanh-toan">TIỀN HÀNH THANH TOÁN</button>
            
           
        </section>

    </main>
    <section class="TTHD" style="display: none;"> 
        <div class="h" id="DVCLG" style="margin-left: 580px;">
            <h3>
                <span class="hh">THANH TOÁN HÓA ĐƠN</span>
            </h3>
            <h3><span class="hhh">THANH TOÁN HÓA ĐƠN</span></h3>
        </div>
        <div id="payment-form" >
            <h2 style="text-align: center;">Thông tin thanh toán</h2>
            <form id="payment-form">
                <label for="ten">Họ và tên:</label>
                <input type="text" id="ten" name="ten" required>
    
                <label for="dia-chi">Địa chỉ:</label>
                <input type="text" id="dia-chi" name="dia-chi" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="so-dien-thoai">Số điện thoại:</label>
                <input type="tel" id="so-dien-thoai" name="so-dien-thoai" required>
    
                <button type="submit">Thanh toán</button>
                <button type="button" id="btn-huy-bo">Hủy bỏ</button>
            </form>
        </div>
    </section>
    
    <script src="{{ asset('js/sanpham.js') }}"></script>
    @include('includes.footer')