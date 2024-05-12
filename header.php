<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyCultureLink</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/link.css">

  <!-- hoverbox gallery -->
  <!--
  <link rel="stylesheet" href="assets/hoverbox.css">
  <script src="assets/hoverbox.js"></script>
-->
 <!-- hoverbox gallery -->
 
  </style>

  <script>

    function scrollDown() {
      window.scrollBy(0, 400); // Scroll down by Y pixels
    }
 
  // Array of image URLs
  const images = [
    'images/slider_1.jpg',
    'images/slider_2.jpg',
    'images/slider_3.jpg',
    'images/slider_4.jpg',
    'images/slider_5.jpg',
    'images/slider_6.jpg',
    'images/slider_7.jpg',
  ];

  // Function to change the background image
  function changeBackgroundImage() {
    const slider = document.getElementById('slider');
    const randomIndex = Math.floor(Math.random() * images.length); // Get a random index from the images array
    const imageUrl = images[randomIndex]; // Get the random image URL
    slider.style.backgroundImage = `url(${imageUrl})`; // Set the background image
  }

  // Change background image every X milliseconds
  setInterval(changeBackgroundImage, 6000);

</script>
  
</head>
<body id="slider"> 
<header>
  <div class="menuContainer">
    <div class="logo">
      <h1>MyCultureLink</h1> <!--<img src="images/logo.jpg" />-->
    </div>
    <nav>
      <ul>
        <li><a href="#">Media</a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>
