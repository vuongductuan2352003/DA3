
window.onscroll = function() {stickyMenu()};
var menu, sticky;

// Lấy menu và vị trí bắt đầu của nó
menu = document.querySelector('.MenuTrangChu');
sticky = menu.offsetTop;

function stickyMenu() {
    // Kiểm tra vị trí cuộn
    if (window.pageYOffset >= 300) { // Thay 300 bằng khoảng cách cụ thể bạn muốn
        // Thêm lớp 'sticky' khi cuộn xuống
        menu.classList.add("sticky");
        menu.style.top = "0"; // Hiển thị menu lại ở vị trí đầu trang
    } else {
        // Loại bỏ lớp 'sticky' khi cuộn lên trên
        menu.classList.remove("sticky");
        menu.style.top = "-10px"; // Ẩn menu đi khi cuộn lên trên
    }
}