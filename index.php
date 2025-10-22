<?php 
include 'includes/header.php'; 
include 'includes/db.php';
?>

<div class="container">
<h2>Our Products</h2>

<!-- Filter -->
<div class="filter">
<label>Category:</label>
<select id="categoryFilter" onchange="filterProducts()">
<option value="all">All</option>
<option value="shirts">Shirts</option>
<option value="pants">Pants</option>
</select>
<label>Max Price:</label>
<input type="number" id="priceFilter" onchange="filterProducts()" placeholder="৳">
</div>

<div class="products">
<?php
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<div class="product-card" data-category="'.$row['category'].'">';
        echo '<img src="'.$row['image'].'" alt="'.$row['name'].'">';
        echo '<h3>'.$row['name'].'</h3>';
        echo '<p>৳ '.$row['price'].'</p>';
        echo '<button onclick="addToCart(\''.$row['name'].'\', '.$row['price'].')">Add to Cart</button>';
        echo '</div>';
    }
} else {
    echo "No products found";
}
?>
</div>
</div>

<?php include 'includes/footer.php'; ?>
