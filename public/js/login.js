document.getElementById("login-2").onclick = function () {
    document.getElementById("login-1").style.display = 'block' ;
    document.getElementById("signup-3").style.display = 'none';
    this.style.color = '#3e4684';

    // Đặt màu của phần tử khác về màu mặc định
    document.getElementById("signup-2").style.color = '#7B746D';
    // Thay đổi kích thước chữ khi được click
    this.style.fontSize = '25px';

    // Đặt kích thước chữ của phần tử khác về giá trị mặc định
    document.getElementById("signup-2").style.fontSize = '10px';
  };
  document.getElementById("signup-2").onclick = function () {
    document.getElementById("signup-3").style.display = 'block';
    document.getElementById("login-1").style.display = 'none';
    this.style.color = '#3e4684';

    // Đặt màu của phần tử khác về màu mặc định
    document.getElementById("login-2").style.color = '#7B746D';
    this.style.fontSize = '25px';

    // Đặt kích thước chữ của phần tử khác về giá trị mặc định
    document.getElementById("login-2").style.fontSize = '10px';
  };

  
  // Lấy các phần tử từ DOM
var passwordInput = document.getElementById('password');
var showPasswordCheckbox = document.getElementById('showPassword');

// Đặt sự kiện click cho checkbox
showPasswordCheckbox.addEventListener('click', function () {
    // Nếu checkbox được chọn, hiển thị mật khẩu, ngược lại ẩn mật khẩu
    passwordInput.type = this.checked ? 'text' : 'password';
});

  