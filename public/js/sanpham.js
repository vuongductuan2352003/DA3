
/* JavaScript function */
function updateSelectWidth(select) {
    // Lấy giá trị option được chọn
    var selectedOption = select.options[select.selectedIndex].text;
    // Tính toán độ dài của option được chọn
    var textWidth = selectedOption.length * 17; // Giả sử mỗi ký tự có độ rộng là 8px
    // Cập nhật độ dài của select box
    select.style.width = textWidth + 'px';
};
document.addEventListener('DOMContentLoaded', function () {
    var danhMucChinhItems = document.querySelectorAll('.DanhMucChinhItem');
    danhMucChinhItems.forEach(function (item) {
        item.addEventListener('click', function (e) {
            var danhMucCon = this.querySelector('.DanhMucCon');
            if (danhMucCon.style.display === 'none') {
                danhMucCon.style.display = 'block';
            } else {
                danhMucCon.style.display = 'none';
            }
            e.stopPropagation();
        });
    });
});
