let cart = JSON.parse(localStorage.getItem('cart')) || [];

function addToCart(name, price){
    cart.push({name:name, price:price});
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(name+" added to cart!");
    displayCartSidebar();
    if(typeof fbq==='function'){ fbq('track','AddToCart',{content_name:name,value:price,currency:'BDT'});}
}

function removeItem(index){
    cart.splice(index,1);
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCartSidebar();
}

function openCart(){document.getElementById('cartSidebar').classList.add('active'); displayCartSidebar();}
function closeCart(){document.getElementById('cartSidebar').classList.remove('active');}

function displayCartSidebar(){
    const cartContainer=document.getElementById('cartItems');
    const cartCount=document.getElementById('cartCount');
    const cartTotal=document.getElementById('cartTotal');
    cartContainer.innerHTML='';
    let total=0;
    cart.forEach((item,index)=>{
        const div=document.createElement('div');
        div.className='cart-item';
        div.innerHTML=`<span>${item.name} - ৳${item.price}</span><button onclick="removeItem(${index}); displayCartSidebar();">Remove</button>`;
        cartContainer.appendChild(div);
        total+=item.price;
    });
    cartTotal.innerText='Total: ৳ '+total;
    cartCount.innerText=cart.length;
}

// Product Filter
function filterProducts(){
    const category=document.getElementById('categoryFilter').value;
    const maxPrice=document.getElementById('priceFilter').value;
    const products=document.querySelectorAll('.product-card');
    products.forEach(card=>{
        let price=parseInt(card.querySelector('p').innerText.replace('৳ ',''));
        let cat=card.getAttribute('data-category');
        if((category==='all'||cat===category)&&(maxPrice===''||price<=maxPrice)){card.style.display='block';}
        else{card.style.display='none';}
    });
}
