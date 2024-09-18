
<!DOCTYPE html>
<html lang="en">
   <head>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> <?php echo$page_title; ?> </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->

<p id='top'></p>
<a href='#main'>Skip to Content</a>
      <div class="header_section">
         <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">

                  <a class="logo" href="index.php"><img src="images/logo.jpg" alt="text to image pro Logo"></a><br>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">

<?php 
if($page_title == 'login'){}
else{
?>

                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home</a>                        </li>

<li class="nav-item">
<a class="nav-link" href='apiKey.php'> update api keys </a> </li>

<li class="nav-item">
<a class="nav-link" href='credits.php'> update Credits </a> </li>

<li class="nav-item">
<a class="nav-link" href='free_credit_front.php'> give free  Credits </a> </li>

<li class="nav-item">
<a class="nav-link" href='https://texttoimagepro.com/0a/del_img.php'> download images </a> </li>

<li class="nav-item">
<a class="nav-link" href='logout.php'> Logout </a> </li>

<?php } ?>
                     </ul>

                  </div>
               </nav>
            </div>
         </div>



      <!--banner section start -->

      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">

<p id='main'></p>


