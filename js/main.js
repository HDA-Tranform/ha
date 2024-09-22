document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productId = button.getAttribute('data-id');
            alert('Sản phẩm ' + productId + ' đã được thêm vào giỏ hàng!');
            // Xử lý thêm sản phẩm vào giỏ hàng tại đây
        });
    });
});
