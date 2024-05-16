 

<div class="container">

  <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
  <!--
    <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
    <script type="text/javascript">
    MRP.insert({
    'url':'https://listen.radioking.com/radio/654253/stream/717853',
    'codec':'mp3',
    'volume':100,
    'autoplay':false,
    'jsevents':true,
    'buffering':0,
    'title':'Z',
    'wmode':'transparent',
    'skin':'retromatic',
    'width':700,
    'height':150
    });
    </script>
  -->
  <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->

<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-7b1f289d-4ad0-446a-8543-6693f4038fd2" data-elfsight-app-lazy>
</div>

  <div class="row">
    <div class="col-lg">
      <h2 id="home">Media &#x2022; Music &#x2022; Marketing</h2>
      <h1>Under Construction</h1>
      <p>We are currently working on our website. Please check back later!</p>
      <p>For business inquiries, please email us at <a href="mailto:dacapo5580@yahoo.com">dacapo5580@yahoo.com</a></p>

      <p>this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick iveythis is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick iveythis is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey</p>

    </div>
  </div>


  <div class="row">
    <div class="col-lg">
      <h1 id="about">About Rick Ivey</h1>
     
        <img src="images/gallery/rick.jpg" class="about" />
        <p>this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey</p>
        <p>this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey</p>
        <p>this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey</p>
        <p>this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey</p>
        <p>this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey this is filler text about rick ivey</p>
    </div>
  </div>


  <div class="row">
    <div class="col-lg">
      <h1 id="gallery">Gallery</h1>
    </div>
  </div>
 
  <div class="row">
    <div class="col-lg">
   
      <?php
    
      $atts = array(
        'project_folder' => 'images/gallery',
        'project_name' => 'MyCultureLink Gallery'
      );

      echo gallery_function($atts);

      ?>
   
    </div>
  </div>
  

<div class="row">
  <div class="col-lg">
    <h1 id="products">Products</h1>

    <div class="catalog">
      <div class="product">
        <div class="thumbs"> 
          <!--<img src="images/products/FEN 2370200 000_M-HiRes.jpg" alt="Product 1" class="product-image">-->
        </div>
       
        <img src="images/products/FEN 2370200 000_M-HiRes.jpg" alt="Product 1" class="product-image">
          <div class="product-details">
                <h2 class="product-title">Fender Rumble 25 V3 25 Watt 1x8 Bass Guitar Combo Amplifier </h2>
                <p class="product-description">Description For Fender Rumble 25 V3 25 Watt 1x8 Bass Guitar Combo Amplifier 
25 watts never sounded so good! Fender designed the Rumble 25 V3 bass combo amp to deliver surprising power from 25 watts and a larger, ported speaker enclosure which houses a single 8-inch speaker. In addition to standard volume and EQ controls, the Rumble 25 adds a newly-developed overdrive circuit and switchable Contour control, delivering gritty bite and slap-worthy punch at the mere push of a button.</p>
                <p class="product-price">$129.99</p>
            </div>
        </div>
        <div class="product">
          <img src="images/products/339251_339251-Generic-1-Original.jpg" alt="Product 2" class="product-image">
          <div class="product-details">
          <h2 class="product-title">Epiphone Slash AFD Les Paul Special II Performance Package</h2>
          <p class="product-description"><p>Description For Epiphone Slash AFD Les Paul Special II Performance Package </p>

          <p>Satisfy your Appetite for Destruction! This Slash signature performance pack has quality and features never before seen in a pack! Endorsed and promoted by Slash himself, this pack includes a Les Paul “AFD” Special-II Guitar, a Slash Snakepit-15 Amplifier, custom gigbag with Snakepit logo, Slash signature Dunlop Tortex picks, eMedia available in English, German, French and Spanish, and an instrument strap and cord.</p>

          <p>The Les Paul AFD Special-II guitar is equipped with new Ceramic Plus Humbucking pickups, a AAA Flame Maple top with cherry Mahogany back, a bound body, and a built in Shadow pickup ring E-Tuner. The Slash Snakepit-15 amplifier features a cool retro-rock look with premium appointments, 15 watts of power with 8" speaker, and two channels (clean and overdrive) with separate controls. </p>
                <p class="product-price">$399.99</p>
          </div>
        </div>
        <!-- Repeat for more products -->
    </div>
</div>
</div>

<style>


.catalog {
    display: flex;
    flex-direction: column;
    padding: 10px;
}

.product {
    display: flex;
    flex-direction: row;
    border: 1px solid #ddd;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
}

.product-image {
    max-width: 150px;
    max-height: 150px;
    margin-right: 20px;
    object-fit: cover;
}

.product-details {
    flex: 1;
}

.product-title {
    font-size: 1.5em;
    margin: 0;
}

.product-description {
    margin: 10px 0;
}

.product-price {
    font-size: 1.2em;
    color: #e9be3c;
}

@media (max-width: 768px) {
    .product {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .product-image {
        margin-right: 0;
        margin-bottom: 10px;
    }

    .product-details {
        align-items: center;
    }
}

  </style>

</div>
</body>
</html>