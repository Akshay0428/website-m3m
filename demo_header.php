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
<style>
            @import url(https://fonts.googleapis.com/css?family=Varela+Round);
 body {
	 background: #f5f5f5;
}
.nav .sub-menu {
  display: none;
  margin-top: 15px;
}
.overlay ul .sub-menu li a {
    font-size: 14px;
    text-transform: capitalize;
}

.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
     background-color: #eee0; 
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 15px 0px;
    font-size: 14px;
    font-weight: 500;
}
 .container {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 text-align: center;
	 top: 40%;
	 left: 0;
	 margin: 0 auto;
	 font-family: 'Varela Round', sans-serif;
}
 .container p {
	 font-size: 20px;
}
 .container a {
	 display: inline-block;
	 position: relative;
	 text-align: center;
	 color: #1abc9c;
	 text-decoration: none;
	 font-size: 20px;
	 overflow: hidden;
	 top: 5px;
}
 .container a:after {
	 content: '';
	 position: absolute;
	 background: #1abc9c;
	 height: 2px;
	 width: 0%;
	 transform: translateX(-50%);
	 left: 50%;
	 bottom: 0;
	 transition: 0.35s ease;
}
 .container a:hover:after, .container a:focus:after, .container a:active:after {
	 width: 100%;
}
 h1 {
	 position: relative;
	 text-align: center;
	 font-family: 'Varela Round', serif;
}
 .button_container {
	 position: fixed;
	 top: 5%;
	 right: 2%;
	 height: 27px;
	 width: 35px;
	 cursor: pointer;
	 z-index: 100;
	 transition: opacity 0.25s ease;
}
 .button_container:hover {
	 opacity: 0.7;
}
 .button_container.active .top {
	 transform: translateY(11px) translateX(0) rotate(45deg);
	 background: #fff;
}
 .button_container.active .middle {
	 opacity: 0;
	 background: #fff;
}
 .button_container.active .bottom {
	 transform: translateY(-11px) translateX(0) rotate(-45deg);
	 background: #fff;
}
 .button_container span {
	 background: #000;
	 border: none;
	 height: 5px;
	 width: 100%;
	 position: absolute;
	 top: 0;
	 left: 0;
	 transition: all 0.35s ease;
	 cursor: pointer;
}
 .button_container span:nth-of-type(2) {
	 top: 11px;
}
 .button_container span:nth-of-type(3) {
	 top: 22px;
}
 .overlay {
	 position: fixed;
	 background: #000;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 0%;
	 opacity: 0;
	 visibility: hidden;
	 transition: opacity 0.35s, visibility 0.35s, height 0.35s;
	 overflow: hidden;
}
 .overlay.open {
	 opacity: 0.9;
	 visibility: visible;
	 height: 100%;
     z-index: 99;
}
 .overlay.open li {
	 animation: fadeInRight 0.5s ease forwards;
	 animation-delay: 0.35s;
}
 .overlay.open li:nth-of-type(2) {
	 animation-delay: 0.4s;
}
 .overlay.open li:nth-of-type(3) {
	 animation-delay: 0.45s;
}
 .overlay.open li:nth-of-type(4) {
	 animation-delay: 0.5s;
}
 .overlay nav {
	 position: relative;
	 height: auto;
	 top: 50%;
	 transform: translateY(-50%);
	 font-size: 50px;
	 font-family: 'Varela Round', serif;
	 font-weight: 400;
	 text-align: center;
}
 .overlay ul {
	 list-style: none;
	 padding: 0;
	 margin: 0 auto;
	 display: inline-block;
	 position: relative;
	 height: auto;
	 top: 5%;
}
 .overlay ul li {
	 display: block;
	 height: auto;
	 /* height: calc(100% / 4); */
	 min-height: 50px;
	 position: relative;
	 opacity: 0;
}
 .overlay ul li a {
	 display: block;
	 position: relative;
	 color: #fff;
	 text-decoration: none;
	 overflow: hidden;
	font-size: 20px;
	text-transform: uppercase;
}
 .overlay ul li a:hover:after, .overlay ul li a:focus:after, .overlay ul li a:active:after {
	 width: 100%;
}
 .overlay ul li a:after {
	 content: '';
	 position: absolute;
	 bottom: 0;
	 left: 50%;
	 width: 0%;
	 transform: translateX(-50%);
	 height: 3px;
	 background: #fff;
	 transition: 0.35s;
}
 @keyframes fadeInRight {
	 0% {
		 opacity: 0;
		 left: 20%;
	}
	 100% {
		 opacity: 1;
		 left: 0;
	}
}
 
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
      </style>
   </head>
   <body>
   <div class="container nav">
            <div id="toggle" class="button_container">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
                <div id="overlay" class="overlay">
                    <nav class="overlay-menunav overlay-menu">
                            <ul class="nav">
                                <li><a href="#">home</a></li>
                                <li>
                                	<a href="#">Company</a>
                                	<ul class="sub-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">CSR</a></li>
                                    <li><a href="#">Awards</a></li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">projects</a>
                                  <ul class="sub-menu">
                                    <li><a href="#">Projects Delivered</a></li>
                                    <li><a href="#">Residential</a></li>
                                    <li><a href="#">Commercial</a></li>
                                    <li><a href="#">New Launch</a></li>
                                  </ul>
                                </li>
                                <li>
                                    <a href="#">Partners</a>
                                    <ul class="sub-menu">
                                      <li><a href="#">Architects</a></li>
                                      <li><a href="#">Landscape Design</a></li>
                                      <li><a href="#">Design Partners</a></li>
                                      <li><a href="#">Golf Course Design</a></li>
                                      <li><a href="#">Structural Consultants</a></li>
                                      <li><a href="#">Construction</a></li>
                                      <li><a href="#">Equipments</a></li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="#">Media</a>
                                  </li>
                                  <li>
                                    <a href="#">Careers</a>
                                  </li>
                                  <li>
                                    <a href="#">Contact Us</a>
                                  </li>
                              </ul>
                           
                    </nav>
                </div>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <!-- navigation sub-menu display -->
       <script>
      $('#toggle').click(function() {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
      });


      $('.nav li > .sub-menu').parent().hover(function() {
        var submenu = $(this).children('.sub-menu');
        if ( $(submenu).is(':hidden') ) {
          $(submenu).slideDown(200);
          } else {
          $(submenu).slideUp(200);
        }
      });


    </script>