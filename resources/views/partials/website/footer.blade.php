<!-- Cart Sidebar & Overlays -->
<div class="overlay" id="overlay"></div>
<div class="cart-sidebar" id="cartSidebar">
    <div class="cart-header">
        <span style="font-weight: 700;">Your Cart</span>
        <i class="fas fa-times" id="closeCart" style="cursor: pointer; font-size: 20px;"></i>
    </div>
    <div class="cart-items" id="cartItems">
        <div style="text-align: center; color: #C5C7C9;">Cart is empty</div>
    </div>
    <div class="cart-footer">
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <span>Total</span>
            <span style="font-size: 24px; font-weight: 700; color: #06B6D4;" id="cartTotal">₹0</span>
        </div>
        <button class="btn-primary" style="width: 100%; border: none;" id="checkoutBtn">Checkout</button>
    </div>
</div>

<div class="toast" id="toast">Added to cart</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="logo" style="justify-content: center; font-size: 32px; margin-bottom: 24px;">
            <img src="{{ asset('logo.jpeg') }}" alt="Devaneer Logo">DEVA<span>NEER</span>
        </div>
        <p style="margin-bottom: 16px;">✅ Only Product Sale = Earning</p>
        <p style="font-size: 12px;">© {{ date('Y') }} Devaneer — Fully Legal | Product-Based Direct Selling | Zero Risk for Company</p>
    </div>
</footer>