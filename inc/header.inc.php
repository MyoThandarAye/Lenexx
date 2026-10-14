<!DOCTYPE html>

<head>
  <?php
  if (isset($_REQUEST['pg'])) {
    $page = $_REQUEST['pg'];
  } else {
    $page = NULL;
  }

  if ($page <> NULL) {
    $seo_titile = str_replace("-", " ", $page);
    ?>
    <title><?php echo ucwords($seo_titile); ?> | LENEXX </title>
    <meta name="description"
      content="<?php echo ucwords($seo_titile); ?>, Our head office is located in Cyprus, with branches in the Philippines, Ukraine, India, and Ghana." />
  <?php } else { ?>
    <title> LENEXX</title>
    <meta name="description"
      content="MSC Crewing Services Myanmar (SRPS/PMN/295) was established on September 1, 2022. At the time of its founding, we started with office staff 8 employees, 5 vessels, and 110 onboard crew members." />
  <?php }
  ?>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ...icon... -->
  <link rel="icon" href="/img/favicon.png" type="image/x-icon">

  <!-- 1. Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- 2. Icons & Google Fonts -->
  <link rel="stylesheet" href="/css/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- 3. Navigation & Components -->
  <link rel="stylesheet" href="/css/mmenu.css">
  <link rel="stylesheet" href="/css/hamburger.css">
  <link rel="stylesheet" href="/css/jquery.fancybox.css">

  <!-- 4. Owl Carousel CSS (Using .min.css versions based on your directory screenshot) -->
  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">

  <!-- 4.1 Animate On Scroll CSS -->
  <link rel="stylesheet" type="text/css" href="/css/aos.css">

  <!-- 5. Custom Site Style (ALWAYS LAST so it overrides plugin defaults) -->
  <link rel="stylesheet" type="text/css" href="/css/style.css">


</head>
<div id="page" class="lg md sm xs">