<!DOCTYPE html>
<html lang="en">
   <head>
      <title>M3M Corporate Website</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <style type="text/css">

         /***********************************slick***********************************/
         .prev-button {
         color: #999;
         position: absolute;
         top: 40%;
         left: -40px;
         font-size: 1.5em;
         background-image: url('img/arrow/prev_slick.png');
         width: 13px;
         height: 20px;
         border: none;
         background-color: transparent;
         outline: none !important;
         }
         .next-button {
         color: #999;
         position: absolute;
         top: 40%;
         font-size: 1.5em;
         background-image: url('img/arrow/next_slick.png');
         right: -35px;
         width: 13px;
         height: 20px;
         border: none;
         background-color: transparent;
         outline: none !important;
         }
         .slick-slide {
         display: none;
         float: left;
         height: 100%;
         min-height: 1px;
         outline: none;
         border: none;
         box-shadow: none;
         }
         .slick-dots {
         bottom: -70px;
         }
         .slick-dots li button:before {
         font-family: 'slick';
         font-size: 15px;
         line-height: 20px;
         position: absolute;
         top: 0;
         left: 0;
         width: 20px;
         height: 20px;
         content: '•';
         text-align: center;
         opacity: .25;
         color: #4db748;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
         }
         .slick-dots li.slick-active button:before {
         opacity: .75;
         color: #4db748;
         }
         /**************carousel***********************/
         .carousel-item {
         height: 100vh;
         min-height: 350px;
         background: no-repeat center center scroll;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
         .carousel-indicators {
         position:absolute;
         margin:auto;
         height:450px;
         right:100px; 
         left:auto;
         width:auto;
         display: table;
         vertical-align: middle;
         text-align: center;
         list-style: none;
         top: 100px;
         }
         .carousel-indicators-numbers li.active {
         margin: 50px 2px;
         width: 30px;
         height: 30px;
         background-color: transparent;
         border:1px solid #fff;
         border-radius: 50%;
         }
         .carousel-indicators-numbers li {
         text-indent: 0;
         margin: 50px 2px;
         width: 30px;
         height: 30px;
         border: none;
         line-height: 30px;
         color: #fff;
         background-color: transparent;
         -webkit-transition: all 0.25s ease;
         transition: all 0.25s ease;
         }
         .carousel-indicators li:not(:last-child):after {
         content: "";
         background-color: #fff;
         position: relative;
         width: 1px;
         height: 48px;
         top: 0px;
         left: 50%;
         display: block;
         }
         .carousel-caption {
         position: absolute;
         right: 15%;
         top: 28%;
         left: 15%;
         z-index: 10;
         padding-top: 20px;
         padding-bottom: 20px;
         color: #fff;
         text-align: center;
         height: 200px;
         }
         p.slider-caption {
         text-align: center;
         font-size: 20px;
         font-weight: 400;
         color: #fff;
         letter-spacing: 10px;
         }
         .display-4 {
         letter-spacing: 8px;
         }
         .aks-nav {
         position: fixed !important;
         background-color: transparent;
         }  

         /* mobile banner */
         .mobile_carousel .carousel-control-prev{
            left: 0% !important;
            top: 45% !important;
         }
         .mobile_carousel .carousel-control-next{
            top: 45% !important;
            right:0 !important;
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light aks-nav">
         <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/M3M logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Projects <span class="sr-only">(current)</span></a>
                     <div class="dropdownContain">
                        <div class="dropOut">
                           <div class="triangle"></div>
                           <ul>
                              <li>Residential</li>
                              <li>Commercial</li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Redefining New Gurugram</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Bespoke Homes</a>
                  </li>
                  <li>
                     <img class="navCall" src="img/Call Icon@2x.png"/>
                  </li>
                  <li>
                     <img class="navMenu" src="img/Hamburger.png"/>
                  </li>
                  <li>
                     <img class="navMenu1" src="img/cross.png"/>
                     <div class="menuPop">
                        <div class="triangle-up"></div>
                        <ul class="ulMenu">
                           <li class="li-1"><a href="#">OVERVIEW</a></li>
                           <li class="li-1"><a href="#">BLOGS</a></li>
                           <li class="li-3"><a href="#">WORK WITH US</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>