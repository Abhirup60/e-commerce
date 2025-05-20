<?php
$page = $_GET['page'] ?? 'home' ;

include 'includes/header.php';

switch ($page) {
  case 'home':
    include 'pages/home.php';
    break;
  case 'product':
    include 'pages/product.php';
    break;
  case 'about':
    include 'pages/about.php';
    break;
  case 'contact':
    include 'pages/contact.php';
    break;
  default:
    include 'pages/404.php';
    break;
}

include 'includes/footer.php';

?>

