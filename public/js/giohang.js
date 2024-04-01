   // JavaScript xử lý sự kiện
   document.getElementById('btn-thanh-toan').addEventListener('click', showPaymentForm);
   document.getElementById('btn-huy-bo').addEventListener('click', hidePaymentForm);

   function showPaymentForm() {
       var paymentForm = document.getElementById('payment-form');
       paymentForm.style.display = 'block';
   }

   function hidePaymentForm() {
       var paymentForm = document.getElementById('payment-form');
       paymentForm.style.display = 'none';
   }
   function decreaseQuantity(itemId) {
    var quantityInput = document.getElementById('quantity_' + itemId);
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
        // Gọi hàm để cập nhật tổng tiền
        updateTotal(itemId, currentQuantity - 1);
    }
}

function increaseQuantity(itemId) {
    var quantityInput = document.getElementById('quantity_' + itemId);
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
    // Gọi hàm để cập nhật tổng tiền
    updateTotal(itemId, currentQuantity + 1);
}

function updateTotal(itemId, newQuantity) {
    // Sử dụng AJAX hoặc gửi request để cập nhật số lượng và tổng tiền trên server
    // Sau đó cập nhật lại giá trị tổng tiền trong giao diện
    // Ví dụ:
    // var totalPriceElement = document.getElementById('total_price_' + itemId);
    // var itemPrice = parseFloat(document.getElementById('item_price_' + itemId).innerText);
    // totalPriceElement.innerText = (itemPrice * newQuantity).toFixed(2) + ' VNĐ';
}