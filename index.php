<?php
$page = $_GET['page'];

switch ($page) {
  case 'gallery_miami': 
  case 'gallery_zulu': 
  case 'gallery_nyc': 
  case 'gallery_eastcoastfam': 
  case 'gallery_atlanta':
  case 'gallery_blm': 
  case 'gallery_health': 
  case 'gallery_global': 
    $fileName = 'gallery.php';
    break;

  case 'home':
  default:
    $fileName = 'home.php';
}

include('header.php');
include($fileName);
?>