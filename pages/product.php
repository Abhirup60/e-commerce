
    <main class="product-container" style="padding:20px">
    <h1>Our Products</h1>

  <!-- Men Section -->
  <section class="category-section">
    <h2>Men</h2>
    <div class="product-grid">
      <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="product-card">
          <img src="assets/images/men<?php echo $i; ?>.jpg" alt="Men Product" style="height:500px">
          <h3>Men's Product <?php echo $i; ?></h3>
          <p class="price">$<?php echo 30 + $i * 5; ?>.00</p>
          <button>Add to Cart</button>
        </div>
      <?php endfor; ?>
    </div>
  </section>

  <!-- Women Section -->
  <section class="category-section">
    <h2>Women</h2>
    <div class="product-grid">
      <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="product-card">
          <img src="assets/images/woman<?php echo $i; ?>.jpg" alt="Women Product">
          <h3>Women's Product <?php echo $i; ?></h3>
          <p class="price">$<?php echo 40 + $i * 5; ?>.00</p>
          <button>Add to Cart</button>
        </div>
      <?php endfor; ?>
    </div>
  </section>

  <!-- Kids Section -->
  <section class="category-section">
    <h2>Kids</h2>
    <div class="product-grid">
      <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="product-card">
          <img src="assets/images/kids<?php echo $i; ?>.jfif" alt="Kids Product">
          <h3>Kids Product <?php echo $i; ?></h3>
          <p class="price">$<?php echo 20 + $i * 4; ?>.00</p>
          <button>Add to Cart</button>
        </div>
      <?php endfor; ?>
    </div>
  </section>
</main>

