<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" href=""
        type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">   
  <!-- Thêm Slick Slider -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>

<body ng-ap="APIDOGOMYNGHE" ng-controller="LoginController">
<div id="login">
        <div id="logo">
            <a href="/BaiTapLon/Trang_Chủ/index.html"><img id="img-logo" src="{{ asset('ĐỒ GỖ MỸ NGHỆ/Slide/2.png') }}" alt="">

            </a>
            
        </div>
      
        <div id="login-signup">
            <h2 class="background-lg-sg"  style="text-align:center;float:left;" id="login-2"  class="zoomable">LOGIN</h2>
            <h2 class="background-lg-sg"  style="text-align:center;float:left;margin-left:30px" id="signup-2"  class="zoomable">SIGN UP</h2>
        </div>     
     
         
       
        <div id="login-1"> 
            <select id="userType" name="userType" style="color: aliceblue;"  required>
                <option  value="nguoidung">Người dùng</option>
                <option  value="admin">Admin</option>
                
            </select>
            <div class="email">
                <label for="email">Email Address</label>
                    <input type="text" id="username" name="username" required> 
            </div>
            <div class="password">
                <label for="password">Password</label>
                <div style="display: flex;"> 
                     <input type="password" id="password" name="password" style="width: 300px" required>      
                    <input style="width: 20px;" type="checkbox" id="showPassword">  
                </div>
                   
            </div>
         
           
            <button class="login" onclick="login()" type="button"> Login </button>
        </div>
        <div id="signup-3">
            <div class="email" style="height: 30px;margin-left:10px ">
                <label for="email">Email Address</label>
                    <input type="email" name="email" placeholder="Username@gmail.com" />
            </div>
            <div class="email" style="height: 30px;margin-left:10px ">
                <label for="username">User Name</label>
                    <input type="name" name="name" ng-model="taikhoan" placeholder="User name"/>
            </div>
           
            <div class="email" style="height: 30px;margin-left:10px ">
                <label for="email">Password</label>
                    <input type="text" placeholder="Password" />
            </div>
            <button class="signup">Sign up</button>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
     
</body>

</html>