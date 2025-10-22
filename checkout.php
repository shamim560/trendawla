<?php 
include 'includes/header.php'; 
?>

<div class="container">
<h2>Checkout</h2>
<form id="checkoutForm">
<label>Name:</label><br>
<input type="text" name="name" required><br><br>
<label>Email:</label><br>
<input type="email" name="email" required><br><br>
<label>Address:</label><br>
<textarea name="address" required></textarea><br><br>
<button type="submit">Place Order</button>
</form>
</div>

<script>
const form = document.getElementById('checkoutForm');

form.addEventListener('submit', function(e){
    e.preventDefault();
    const name = form.name.value;
    const email = form.email.value;
    const address = form.address.value;
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let total = cart.reduce((sum, item) => sum + item.price, 0);

    fetch('save_order.php', {
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify({name,email,address,cart,total})
    })
    .then(res => res.text())
    .then(data=>{
        alert('Order Placed Successfully!');
        localStorage.removeItem('cart');
        window.location.href='index.php';
    });

    if(typeof fbq==='function'){ fbq('track','Purchase',{value:total,currency:'BDT'}); }
    if(typeof gtag==='function'){ gtag('event','purchase',{transaction_id:Date.now(),value:total,currency:'BDT',items:cart.map(item=>({name:item.name,quantity:1,price:item.price}))}); }
});
</script>

<?php include 'includes/footer.php'; ?>
