<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Trendwala</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Trendwala - Best Fashion & Trendy Products">
<link rel="icon" href="assets/images/logo.png">

<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'GA_MEASUREMENT_ID');
</script>

<!-- Facebook Pixel -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}
(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', 'FB_PIXEL_ID'); 
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=FB_PIXEL_ID&ev=PageView&noscript=1"
/></noscript>

</head>
<body>
<header>
<h1>Trendwala</h1>
<nav>
<a href="index.php">Home</a> | 
<a href="#" onclick="openCart()">Cart (<span id="cartCount">0</span>)</a>
</nav>
</header>

<!-- Cart Sidebar -->
<div id="cartSidebar" class="cart-sidebar">
<h3>Your Cart</h3>
<div id="cartItems"></div>
<p id="cartTotal"></p>
<button onclick="window.location.href='checkout.php'">Checkout</button>
<button onclick="closeCart()">Close</button>
</div>
