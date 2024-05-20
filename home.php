 

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
<!--
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-7b1f289d-4ad0-446a-8543-6693f4038fd2" data-elfsight-app-lazy>
</div>
  -->

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
  
  <?php 
  function goddamGallery($gallArray) {

    $imgDir = 'images/products/';

    echo '<div class="gallery">
    <div class="thumbnails">
      <img src="'.$imgDir.''.$gallArray[0].'" onmouseover="changeImage(\''.$imgDir.$gallArray[0].'\', \''.$gallArray['id'].'\')" alt="MyCultureLink">
      <img src="'.$imgDir.''.$gallArray[1].'" onmouseover="changeImage(\''.$imgDir.$gallArray[1].'\', \''.$gallArray['id'].'\')" alt="MyCultureLink">
    ';

    if($gallArray[2]) {
      echo '<img src="'.$imgDir.''.$gallArray[2].'" onmouseover="changeImage(\''.$imgDir.$gallArray[2].'\', \''.$gallArray['id'].'\')" alt="MyCultureLink">';
    }

    if($gallArray[3]) {
      echo '<img src="'.$imgDir.''.$gallArray[3].'" onmouseover="changeImage(\''.$imgDir.$gallArray[3].'\', \''.$gallArray['id'].'\')" alt="MyCultureLink">';
    }

    echo '
    </div><!-- thumbnails -->
    <div class="main-image-container">
      <img id="'.$gallArray['id'].'" src="'.$imgDir.''.$gallArray[0].'" alt="MyCultureLink" class="product-image">
    </div>
  </div>
  ';
  }

  
?>

<div class="row">
  <div class="col-lg">
    <h1 id="products">Products</h1>

    <div class="catalog">
      <div class="product">
         
        <?php
        $gallArray = array(
          'id' => 'fender',
          0 => 'FEN 2370200 000_M-HiRes.jpg',
          1 => 'FEN 2370200 000-HiRes.jpg',
        );

        goddamGallery($gallArray);
        ?>
        <div class="product-details">
          <h2 class="product-title">Fender Rumble 25 V3 25 Watt 1x8 Bass Guitar Combo Amplifier </h2>
          <p class="product-description">Description For Fender Rumble 25 V3 25 Watt 1x8 Bass Guitar Combo Amplifier 25 watts never sounded so good! Fender designed the Rumble 25 V3 bass combo amp to deliver surprising power from 25 watts and a larger, ported speaker enclosure which houses a single 8-inch speaker. In addition to standard volume and EQ controls, the Rumble 25 adds a newly-developed overdrive circuit and switchable Contour control, delivering gritty bite and slap-worthy punch at the mere push of a button.</p>
          <a href="https://www.americanmusical.com/fender-rumble-25-v3-25-watt-1x8-bass-guitar-combo-amplifier/p/FEN-2370200-000"><p class="product-price">$129.99</p></a>
        </div>
      </div>

      <div class="product">

        <?php
          $gallArray = array(
            'id' => 'les_paul',
            0 => 'EPI PPGSENA2 AANH3.jpg',
            1 => 'EPI PPGSENA2 LIST-M1-HiRes.jpg',
            2 => 'EPI PPGSENA2 LIST-M2-HiRes.jpg',
            3 => 'EPI PPGSENA2 LIST-M4-HiRes.jpg',
          );

          goddamGallery($gallArray);
        ?>
         
        <div class="product-details">
          <h2 class="product-title">Epiphone Les Paul Player Pack Electric Guitar Package Ebony</h2>
          <p class="product-description"><p>Epiphone Les Paul Player Pack Electric Guitar Package Ebony</p>

          <p>The ultimate starter pack for beginners! The Epiphone Les Paul Player Pack Electric Guitar Package includes a high quality Les Paul Player Pack guitar, Electar amp and all the basic accessories you need including a gigbag, clip on tuner, strap, cable, and picks. This players pack also comes with free downloadable guitar lessons from eMedia covering rock, blues, folk, country, hard rock, metal, and everything in between to get you playing right away!

          <p>The Les Paul Player Pack guitar is renowned for its monstrous tone thanks to two open coil humbuckers and a solid wood body with the classic Les Paul Special profile. Together, they produce that one of a kind Les Paul roar. Unlike single coil pickups that are sensitive to interference from nearby electric sources, Epiphone humbucker pickups ‘buck the hum’, giving you buzz free tone that can go from clean to overdrive without the extra noise.</p>

          <p>The Les Paul Player Pack also includes a portable Epiphone Electar 10 watt amp with a 6 inch speaker. Low watt guitar amps are popular for beginners and pros alike for their just right, easy to get tone that sounds full and strong even at low volume. The Electar features a classic open back cab, simple controls for master volume, treble, and bass, an auxiliary input for piping in practice music, and a headphone jack so you can rock out without waking your neighbors.</p>

          <p>eMedia Guitar Lessons<br />
          eMedia’s introductory guitar lessons offer easy instructional videos that expand to full screen. The eMedia software includes powerful, new interactive feedback on melodies and full complement of helpful tools such as the new Note Tracker and Finger Tracker, which show you what you’re playing in staff notation and also on an animated fretboard. This amazing technology track your progress through the song as you play! Sons and exercises can be heard either as live recorded audio or as MIDI tracks that you can slow down or speed up.
          </p>
          <p class="product-price">$289.99</p>
      </div>
      </div>

      <div class="product">
          
        <?php
          $gallArray = array(
            'id' => 'slash',
            0 => 'EPI PPGSENA2 LIST-M17-HiRes.jpg',
            1 => 'EPI PPGSENA2 LIST-M18-HiRes.jpg',
            2 => 'EPI PPGSENA2 LIST-M-HiRes.jpg',
            3 => 'EPI PPGSENA2 LIST-M9-HiRes.jpg',
          );

          goddamGallery($gallArray);
        ?>

          <div class="product-details">
          <h2 class="product-title">Epiphone Slash AFD Les Paul Special II Performance Package</h2>
          <p class="product-description"><p>Description For Epiphone Slash AFD Les Paul Special II Performance Package </p>

          <p>Satisfy your Appetite for Destruction! This Slash signature performance pack has quality and features never before seen in a pack! Endorsed and promoted by Slash himself, this pack includes a Les Paul “AFD” Special-II Guitar, a Slash Snakepit-15 Amplifier, custom gigbag with Snakepit logo, Slash signature Dunlop Tortex picks, eMedia available in English, German, French and Spanish, and an instrument strap and cord.</p>

          <p>The Les Paul AFD Special-II guitar is equipped with new Ceramic Plus Humbucking pickups, a AAA Flame Maple top with cherry Mahogany back, a bound body, and a built in Shadow pickup ring E-Tuner. The Slash Snakepit-15 amplifier features a cool retro-rock look with premium appointments, 15 watts of power with 8" speaker, and two channels (clean and overdrive) with separate controls. </p>
                <p class="product-price">$399.99</p>
          </div>
        </div>
      <!-- Repeat for more products -->

      <div class="product">
          
          <?php
            $gallArray = array(
              'id' => 'sonic',
              0 => 'sonic_1.jpg',
              1 => 'sonic_2.jpg',
              2 => 'sonic_3.jpg',
              3 => 'sonic_4.jpg',
            );
  
            goddamGallery($gallArray);
          ?>
  
          <div class="product-details">
              <h2 class="product-title">Squier Sonic Stratocaster Guitar Laurel Neck California Blue</h2>
              <p class="product-description"><p>Description For For Squier Sonic Stratocaster Guitar Laurel Neck California Blue</p>
    
              <p>Make your sound scream with the Squier Sonic Stratocaster Guitar! With Fender-style legs, a slim, inviting C-shaped neck profile and thin, lightweight body, this Strat is ready to take you on the ride of a lifetime.

              <p>Three Squier single-coil pickups chime with crystal clarity presenting a wide variety of tones from mellow sweet to wild and electric. And when it comes time to show off your soaring riffs, dive into the tremolo bridge for expressive vibrato effects. Plus, sealed gear tuning machines ensure smooth and accurate tuning - no matter how high the intensity goes. And don’t forget about the chrome plated hardware that’s sure to catch some eyes.</p>

              <p>Whether shredding rookie or seasoned pro level guitar licks, feel confident playing through with the Squier Sonic Stratocaster Guitar!
              </p>
              <a href="https://www.americanmusical.com/squier-sonic-stratocaster-guitar/p/FEN0373151-526"><p class="product-price">$199.99</p></a>
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
    max-width: 200px;
    max-height: 200px;
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

  
  /* Inline CSS */
  .gallery {
    display: flex;
  }

  .thumbnails {
    display: flex;
    flex-direction: column;
    margin-right: 20px;
  }

  .thumbnails img {
    width: 70px;
    height: auto;
    cursor: pointer;
    margin-bottom: 10px;
  }

  .main-image {
    max-width: 500px;
    height: auto;
  }

  @media screen and (max-width: 768px) {
    .gallery {
      flex-direction: column;
      align-items: center;
    }

    .thumbnails {
      flex-direction: row;
      margin-bottom: 20px;
    }

    .thumbnails img {
      margin-right: 10px;
    }
  }
</style>
</head>
<body>

<script>
  function changeImage(imageSrc, id) {
    document.getElementById(id).src = imageSrc;
  }
</script>
 
</div>
</body>
</html>