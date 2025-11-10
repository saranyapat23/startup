<?php
// ถ้ามีโค้ด PHP สามารถใส่ไว้ตรงนี้ได้ เช่น include config หรือ session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Up Website</title>
    <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
 
  
</head>

<body>
  <!-- Navbar -->
  <?php include '../fontend/navbar/navbar.php'; ?>
<main>


  <!-- 🏠 SECTION: Home -->
  <section id="home" class="h-screen flex items-center justify-center bg-gray-900 text-white">
    <!-- list item -->
     <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="../assets/img/50cent.jpeg">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../assets/img/blackgirl.jpeg">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../assets/img/main3.jpg">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../assets/img/thatguys.webp">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="../assets/img/50cent.jpeg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../assets/img/blackgirl.jpeg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../assets/img/main3.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../assets/img/thatguys.webp">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
  </section>

  <!-- 🙋‍♂️ SECTION: About -->
<section id="about" class="about-section">
  
  <div class="container">
    <h2 class="scroll-fade">About Us</h2>
    <p class="scroll-fade">เราคือทีมออกแบบและพัฒนาเว็บมืออาชีพ...</p>

    <div class="cards">
      <div class="card scroll-fade">
        <h3>Mission</h3>
        <p>ส่งมอบงานคุณภาพสูง...</p>
      </div>
      <div class="card scroll-fade">
        <h3>Vision</h3>
        <p>เป็นผู้นำด้านการออกแบบเว็บ...</p>
      </div>
      <div class="card scroll-fade">
        <h3>Values</h3>
        <p>ความคิดสร้างสรรค์ คุณภาพ และความซื่อสัตย์</p>
      </div>
    </div>
  </div>
<canvas id="cinematic-bg"></canvas>
</section>

<!-- 🗃️ SECTION: ollection -->
<section id="collection" class="collection-section">
  <div class="container">
    <h2 class="section-title scroll-fade">THE COLLECTION</h2>
    <p class="section-sub scroll-fade">New Drop / Street Classic Vol. II</p>

    <div class="collection-grid">
      <!-- Card 1 -->
    <div class="product-card scroll-fade" data-images="../assets/img/collection/wowzas.jpg,../assets/img/collection/wowzas1.jpg,../assets/img/collection/wowzas2.jpg,../assets/img/collection/wowzas3.jpg">
    <div class="image-wrapper">
        <img class="cycle-img" src="../assets/img/collection/wowzas.jpg" alt="Shadow Jacket">
        <div class="overlay"></div>
        <div class="product-info">
        <h3>Shadow Jacket</h3>
        <p>Black Edition / Limited</p>
        <a class="cinematic-btn" href="../fontend/product/productset1.php">Explore</a>
        </div>
    </div>
    </div>


      <!-- Card 2 -->
    <div class="product-card scroll-fade" data-images="../assets/img/collection/zazqo.jpg,../assets/img/collection/zazqo1.jpg,../assets/img/collection/zazqo2.jpg,../assets/img/collection/zazqo3.jpg">
    <div class="image-wrapper">
        <img class="cycle-img" src="../assets/img/collection/zazqo.jpg" alt="Shadow Jacket">
        <div class="overlay"></div>
        <div class="product-info">
        <h3>Mono Oversize Tee</h3>
        <p>Minimal Street Fit</p>
        <a class="cinematic-btn" href="../fontend/product/product.php">Explore</a>
        </div>
    </div>
    
      <!-- Card 2
      <div class="product-card scroll-fade">
        <div class="image-wrapper">
          <img src="../assets/img/collection/zazqo.jpg" alt="Mono Oversize Tee">
          <div class="overlay"></div>
          <div class="product-info">
            <h3>Mono Oversize Tee</h3>
            <p>Minimal Street Fit</p>
            <button class="cinematic-btn">Explore</button>
          </div>
        </div>
      </div> -->

      <!-- เพิ่มได้อีกหลายใบ -->
    </div>
  </div>
</section>


<!-- section book -->
<style>
    .flipbook-container {
  width: 100%;
  max-width: 900px; /* กำหนดความกว้างสูงสุดให้ไม่แผ่ออก */
  aspect-ratio: 16 / 9; /* ทำให้กรอบคงสัดส่วนสวย ๆ */
  margin: 50px auto; /* จัดให้อยู่กลางหน้าจอ */
  border-radius: 15px; /* มุมมน */
  overflow: hidden; /* ตัดส่วนที่ล้นออก */
  box-shadow: 0 10px 30px rgba(0,0,0,0.2); /* เงานุ่ม ๆ */
  background: #f8f8f8; /* สีพื้นหลังเวลาโหลด */
}

.flipbook-container iframe {
  width: 100%;
  height: 100%;
  border: none;
}
</style>
<div class="flipbook-container">
  <iframe
    src="https://online.fliphtml5.com/ahwnd/styg/"
    frameborder="0"
    scrolling="no"
    allowfullscreen
  ></iframe>
</div>






</main>
</body>
  <script src="../assets/js/app.js"></script>
</html>
