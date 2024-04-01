   <!DOCTYPE html>
   <html lang="en" data-bs-theme="dark">

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>QUẢN TRỊ VIÊN</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
       <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

       <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
   </head>

   <body>
       <div class="wrapper">
           <aside id="sidebar" class="js-sidebar">
               <!-- Content For Sidebar -->
               <div class="h-100">
                   <div class="sidebar-logo">
                       <a href="#">ĐỒ GỖ VƯƠNG TUẤN</a>
                   </div>
                   <ul class="sidebar-nav">
                       <li class="sidebar-header">
                           QUẢN TRỊ VIÊN
                       </li>
                       <li class="sidebar-item">
                           <a href="#" class="sidebar-link">
                               <i class="fa-solid fa-list pe-2"></i>
                               Danh Mục
                           </a>
                       </li>
                       <li class="sidebar-item">
                           <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2" id="SanPham"></i>
                               Sản Phẩm
                           </a>

                       </li>
                       <li class="sidebar-item">
                           <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-sliders pe-2" id="Khachhang"></i>
                               Khách Hàng
                           </a>
                           <!-- <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 2</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 3</a>
                            </li>
                        </ul> -->
                       </li>
                       <li class="sidebar-item">
                           <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
                               Tài khoản
                           </a>
                           <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                               <li class="sidebar-item">
                                   <a href="#" class="sidebar-link">Thông tin tài khoản</a>
                               </li>
                               <li class="sidebar-item">
                                   <a href="#" class="sidebar-link">Đổi mật khẩu</a>
                               </li>
                               <!-- <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Forgot Password</a>
                            </li> -->
                           </ul>
                       </li>

                   </ul>
               </div>
           </aside>
           <div class="main">
               <nav class="navbar navbar-expand px-3 border-bottom">
                   <button class="btn" id="sidebar-toggle" type="button">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="h" style="margin-left:400px;">
                       <h3 class="hh">QUẢN TRỊ VIÊN</h3>
                       <h3 class="hhh">QUẢN TRỊ VIÊN</h3>
                   </div>
                   <div class="navbar-collapse navbar">
                       <ul class="navbar-nav">
                           <li class="nav-item dropdown">
                               <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                   <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                               </a>

                               <div class="dropdown-menu dropdown-menu-end">
                                   <a href="#" class="dropdown-item">Profile</a>
                                   <a href="#" class="dropdown-item">Setting</a>
                                   <a href="#" class="dropdown-item">Logout</a>
                               </div>
                           </li>
                       </ul>
                   </div>
               </nav>
               <main class="content px-3 py-2">
                   <!-- <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>CHÀO MỪNG BẠN ĐẾN VỚI QUẢN TRỊ VIÊN!</h4>
                                                <p class="mb-0">Admin Dashboard, CodzSword</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                $ 78.00
                                            </h4>
                                            <p class="mb-2">
                                                Total Earnings
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +9.0%
                                                </span>
                                                <span class="text-muted">
                                                    Since Last Month
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Basic Table
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ducimus,
                                necessitatibus reprehenderit itaque!
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
                   <div class="SanPham">
                       <div class="sanpham">SẢN PHẨM</div>
                       <div>
                           <table>
                               <tr id="defaut">


                                   <th style="width: 5%">STT</th>
                                   <th style="width: 5%">Mã Sản Phẩm </th>
                                   <th style="width: 12%">Tên Danh Mục</th>
                                   <th style="width: 15%">Tên </th>
                                   <th style="width: 8%">Giá </th>
                                   <th style="width: 5%">Số Lượng</th>
                                   <th style="width: 15%">Nhà Sản Xuất</th>
                                   <th style="width: 5%">Bảo Hành</th>

                                   <th style="width: 10%">Hành động</th>
                               </tr>
                           </table>
        
                       <div class="menu-sanpham">
      @php $i = 1 @endphp <!-- Khởi tạo biến đếm -->
    @foreach ($admin as $sanPham) 
        <table class="table">
            <tr>
                <td style="width: 5%">{{ $i++ }}</td>
                <td style="width: 5%">{{ $sanPham->MaSanPham }}</td>
                <td style="width: 12%">{{$sanPham->danhmuc->TenDanhMuc }}</td>
                <td id="hienthi-img" style="width: 15%">{{ $sanPham->TenSanPham }}
                    <img src="{{ asset('ĐỒ GỖ MỸ NGHỆ/' . $sanPham->AnhDaiDien) }}" alt="">
                </td>
                <td style="width: 8%">{{ number_format($sanPham->Gia, 0, ',', '.') }}₫</td>
                <td style="width: 5%">{{ $sanPham->SoLuong }}</td>
                <td style="width: 15%">{{ $sanPham->NhaSanXuat }}</td>
                <td style="width: 5%">{{ $sanPham->BaoHanh }}</td>
                <td style="width: 10%">
                    <div>
                        <button><i class="fa fa-wrench"></i></button>
                        <!-- Sử dụng onclick để gọi hàm confirmDelete -->
                        <button type="button" onclick="confirmDelete('{{$sanPham->MaSanPham}}')"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </table>
        <!-- Form xác nhận xóa -->
        <form id="deleteForm{{$sanPham->MaSanPham}}" method="POST" action="{{ route('admin.delete', ['MaSanPham' => $sanPham->MaSanPham]) }}" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
</div>

                       </div>
                   </div>
               </main>
               <a href="#" class="theme-toggle">
                   <i class="fa-regular fa-moon"></i>
                   <i class="fa-regular fa-sun"></i>
               </a>

           </div>
          
      
       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       <script src="{{ asset('js/admin.js') }}"></script>
   </body>

   </html>