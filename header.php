<?php
function gallery_function($atts) {
  $anime = $atts['project_folder'];
  $postTitle = $atts['project_name'];

  $divID = str_replace('/', '_',  $anime);

  $directory = $anime;

  //valid image extensions
  $validFiles = array('jpg', 'jpeg', 'png');
  
  $counter = 1; //images counter
  if(is_dir($directory))
  if ($handle = opendir($directory)) { //read all files in directory
      //List all the files
      while (false !== ($file = readdir($handle))) {
          $ext = pathinfo($file, PATHINFO_EXTENSION);
          if(in_array($ext, $validFiles)) {   
              $small[$counter] = $file; //add image to array
              $counter++; //increase counter
          }
      }//while
      closedir($handle);
  }//if

  sort($small); //sort image names in order

  //sorting adds a 0 element and shifts all elements back 1
  //this will fix the array 
  foreach ($small as $num => $picture) {
      $small[$num+1] = $picture; 
  }
  unset($small[0]); //delete 0 element

  //    print_r($small); exit;

  //check for thumbnails
  if(is_dir($directory.'/thumbnails')) $showThumbnails = 1;

  $galleryContent .= '
<div>
<ul class="hoverbox">';
    
  foreach($small as $num => $picture) {
    //$num = $num + 1; //offset the 0 element    
    list($name, $ext) = explode('.', $picture); 
    
            if($showThumbnails) {
                $readThisImg = $directory.'/'.$picture;
                $showThisImg = $directory.'/thumbnails/'.$picture;
            }
            else    
                $showThisImg = $readThisImg = $directory.'/'.$picture;
      //$showThisImg = $site_url.'/'.$directory.'/'.$picture;
      
      if(file_exists($readThisImg)) {
        list($width, $height, $type, $attr) = getimagesize($readThisImg);

        if($thumbnails == 1) {
          $galleryContent .= '<li title="'.$anime.'" onclick="openModal(\''.$divID.'\');currentSlide('.$num.')"><a href="#">
          <img src="'.$showThisImg.'" alt="'.$anime.'" class="episode_thumbnail" />
          <img src="'.$showThisImg.'" class="preview_large" alt="'.$anime.'" >
          </a></li>'; 
        }
        else {
                    
                    if($height > $width)
                        $class = 'preview_tall';
                    else
                        $class = 'preview_portrait';
        
          $galleryContent .= '<li title="'.$anime.'" onclick="openModal(\''.$divID.'\');currentSlide('.$num.')"><a>
          <img src="'.$showThisImg.'" alt="'.$anime.'" />
          <img src="'.$showThisImg.'" class="'.$class.'" alt="'.$anime.'" >
          </a></li>'; 
        }					
      }      
    }//foreach

    $galleryContent .= '</ul><div>';

    $counter = $counter - 1; //JS arrays start at 0

    //display the modal elements
    $galleryContent .=  '<div id="'.$divID.'" class="modal">
    <a class="closeButton cursor" onclick="closeModal(\''.$anime.'\')">&times;</a>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="modal-content">';

    foreach($small as $num => $picture) {
        $showThisImg = $directory.'/'.$picture;
        $galleryContent .=  '<div class="mySlides">
        <div class="numbertext">'.$num.' / '.$counter.'</div>
        <img src="'.$showThisImg.'" onclick="plusSlides(1)" class="lightbox_main_image cursor">
        </div>';
    }
    $galleryContent .=  '<div class="caption-container">
    <p id="caption">'.$postTitle.'</p>
    </div>
    </div>
    </div>';

    return $galleryContent;
  }


function hoverbox_video ($atts) {

  $directory = $atts['project_folder'];

  $validFiles = array('mp4', 'webm', 'avi');

  
  if(is_dir($directory))
  if ($handle = opendir($directory)) { //read all files in directory
      //List all the files
      while (false !== ($file = readdir($handle))) {
          
          $ext = pathinfo($file, PATHINFO_EXTENSION);
          if(in_array($ext, $validFiles)) {   
              
             $return .='<video autoplay muted loop class="hoverbox_video">
      <source src="'.$directory.'/'.$file.'" type="video/mp4" />
  </video>';
          }
      }//while
      closedir($handle);
  }//if
  return $return;
}

?>
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
  <link rel="stylesheet" href="assets/hoverbox.css">
  <script src="assets/hoverbox.js"></script>
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
      <h1>MyCultureLink</h1>
    </div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>