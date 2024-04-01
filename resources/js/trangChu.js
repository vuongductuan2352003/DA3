$(document).ready(function() {
    $('.banner-sliderr').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 500,
        arrows: true,
        dots: false,
        draggable: true,
        prevArrow: "<button type='button' class='slick-prev-dt slick-arroww'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next-dt slick-arroww'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    });
    
    // Thêm sự kiện afterChange để cập nhật slider
   
});

document.getElementById("slide-im").onclick = function() {
    showImage("slider-img");
    
};

document.getElementById("slide-imm").onclick = function() {
    showImage("slider-imgg");
};

document.getElementById("slide-immm").onclick = function() {
    showImage("slider-imggg");
};

document.getElementById("slide-immmm").onclick = function() {
    showImage("slider-imgggg");
};
document.getElementById("slide-immmmm").onclick = function() {
    showImage("slider-imggggg");
};

function showImage(imageId) {
    document.getElementById("slider-img").style.display = 'none';
    document.getElementById("slider-imgg").style.display = 'none';
    document.getElementById("slider-imggg").style.display = 'none';
    document.getElementById("slider-imgggg").style.display = 'none';
    document.getElementById("slider-imggggg").style.display = 'none';
    document.getElementById(imageId).style.display = 'block';
  
}



