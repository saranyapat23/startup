<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Collection - Mockup</title>

<link rel="stylesheet" href="../../assets/css/style.css">

<style>


/* Section layout */
.collection-section {
  padding: 120px 10%;
}

.collection-title {
  font-size: 2.5rem;
  margin-bottom: 30px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
}

/* Product Grid */
.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 30px;
}

/* Product Card */
.product-item {
  background: #1a1a1a;
  padding: 20px;
  border-radius: 12px;
  transition: .3s;
  cursor: pointer;

}
.product-item:hover {
  transform: translateY(-5px);
  background: #222;
}

.product-item img {
  width: 100%;
  height: 350px;
  object-fit: cover; /* คงสัดส่วน ไม่ยืด ไม่เบี้ยว */
  border-radius: 14px;
}


.product-name {
  font-size: 1.1rem;
  margin-top: 12px;
}
.product-price {
  margin-top: 5px;
  color: #f1683a;
  font-weight: 500;
}

@media(max-width: 600px){
  .product-item img {
    height: 300px;
  }
}
</style>
</head>

<body>

<?php include '../../fontend/navbar/navbar4product.php'; ?>

<div class="collection-section">
  <h1 class="collection-title">Urban Street Collection</h1>

  <div class="product-grid">

    <div class="product-item">
      <img src="../../assets/img/product2/img1.jpg">
      <div class="product-name">Shadow Jacket</div>
      <div class="product-price">2,490 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img2.jpg">
      <div class="product-name">Urban Cargo Pants</div>
      <div class="product-price">1,390 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img3.jpg">
      <div class="product-name">Mono Oversize Tee</div>
      <div class="product-price">690 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img4.jpg">
      <div class="product-name">Street Hoodie</div>
      <div class="product-price">990 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img5.jpg">
      <div class="product-name">Shadow Jacket</div>
      <div class="product-price">2,490 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img6.jpg">
      <div class="product-name">Shadow Jacket</div>
      <div class="product-price">2,490 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img7.jpg">
      <div class="product-name">Shadow Jacket</div>
      <div class="product-price">2,490 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img8.jpg">
      <div class="product-name">Shadow Jacket</div>
      <div class="product-price">2,490 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img9.jpg">
      <div class="product-name">Shadow Jacket</div>
      <div class="product-price">2,490 THB</div>
    </div>

    <div class="product-item">
      <img src="../../assets/img/product2/img10.jpg">
      <div class="product-name">Shadow Jacket</div>
      <div class="product-price">2,490 THB</div>
    </div>


  </div>
</div>

</body>
</html>
