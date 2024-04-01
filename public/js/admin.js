const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

  
document.querySelector(".theme-toggle").addEventListener("click",() => {
    toggleLocalStorage();
    toggleRootClass();
});

function toggleRootClass(){
    const current = document.documentElement.getAttribute('data-bs-theme');
    const inverted = current == 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-bs-theme',inverted);
};

function toggleLocalStorage(){
    if(isLight()){
        localStorage.removeItem("light");
    }else{
        localStorage.setItem("light","set");
    }
};

function isLight(){
    return localStorage.getItem("light");
};

if(isLight()){
    toggleRootClass();
};function confirmDelete(MaSanPham) {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm có mã: '+ MaSanPham +' không?',)) {
        document.getElementById('deleteForm' + MaSanPham).submit(); // Gửi form nếu người dùng đồng ý
    }
}
