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
      <link rel="stylesheet" href="resources/css/common.css"/>
      <style type="text/css">
         .top-wrp a:hover {
         text-decoration: none !important;
         }
         .logo-wrp{
         margin: 18px;;
         }
         .logo-wrp a img:last-child {
         display: block;
         width: 100%;
         }
         nav .menu-btn {
         background: transparent !important;
         }
         .menu-wrp {
         background: #144168 !important;
         color: #fff !important;
         }
         .menu-wrp .top-wrp .left a{
         color: #fff !important;
         }
         .menu-wrp .top-wrp .left a:after {
         bottom: 10px;
         background: #fff;
         }
         .menu-wrp .top-wrp .right > a .name{
         color: #ffffff !important;
         }
         .menu-wrp.active {
         font-family: 'Montserrat', sans-serif !important;
         font-weight: 100 !important;
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
         /* mobile banner */
         .mobile_carousel .carousel-control-prev{
         left: 0% !important;
         top: 45% !important;
         }
         .mobile_carousel .carousel-control-next{
         top: 45% !important;
         right:0 !important;
         }
         @media only screen and (max-width: 540px)
         {
         nav {
         top: 23px !important;
         }
         .menu-wrp .top-wrp .right > a .name {
         font-size: 12px !important;
         padding: 0px 10px !important;
         text-align: left !important;
         }
         .left a {
         padding: 1px !important;
         }
         }
      </style>
   </head>
   <body class="home-body">
      <header class="scroll-col">
         <div class="container navbar">
            <a class="navbar-brand" href="index.php"><img src="img/M3M logo.png"></a>
            <a href="tel:18001233333"><img class="navCall" src="img/Call Icon@2x.png"/></a>
            <nav>
               <div class="menu-btn">
                  <div class="lines">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
            </nav>
            <div class="menu-overlay"></div>
            <div class="menu-wrp">
               <div class="whatsapp-wrp">
                  <a href="#"><img src=""></a>
               </div>
               <div class="top-wrp">
                  <div class="right" id="div-1">
                     <!-- <a href="#" target="_blank" ><p class="name line-anim-01">About Us</p></a>
                        <a href="#" target="_blank" ><p class="name line-anim-01">CSR</p></a>
                        <a href="#" target="_blank" ><p class="name line-anim-01">Awards</p></a> -->
                  </div>
                  <div class="right" id="div-2">
                     <a href="http://m3mescala.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Escala</p>
                     </a>
                     <a href="http://m3mfairwaywest.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Fairway West</p>
                     </a>
                     <a href="http://www.m3mpolosuite.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Polo Suites</p>
                     </a>
                     <a href="http://m3mstandrewsgolfresidences.com/" target="_blank" >
                        <p class="name line-anim-01">M3M St. Andrews</p>
                     </a>
                     <a href="http://m3mwoodshire.co/" target="_blank" >
                        <p class="name line-anim-01">M3M Woodshire</p>
                     </a>
                     <a href="http://www.m3mgolfestate.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Golfestate</p>
                     </a>
                     <a href="http://www.m3mmerlin.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Merlin</p>
                     </a>
                     <a href="http://www.m3murbana.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Urbana</p>
                     </a>
                     <a href="http://www.m3mcosmopolitan.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Cosmopolitan</p>
                     </a>
                     <a href="http://www.m3mpanoramasuites.com/" target="_blank"  >
                        <p class="name line-anim-01">M3M Panorama</p>
                     </a>
                     <a href="https://www.m3mskysuites.com/" target="_blank"  >
                        <p class="name line-anim-01">M3M Skysuites</p>
                     </a>
                  </div>
                  <div class="right" id="div-3">
                     <a href="http://m3mescala.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Escala</p>
                     </a>
                     <a href="http://www.m3mthemarina.com/ikonic/" target="_blank" >
                        <p class="name line-anim-01"> Ikonic At M3M The Marina</p>
                     </a>
                     <a href="http://m3mfairwaywest.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Fairway West</p>
                     </a>
                     <a href="http://www.m3mgolfestate.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Golfestate</p>
                     </a>
                     <a href="http://m3m65thavenue.com/heights/" target="_blank" >
                        <p class="name line-anim-01"> M3M Heights</p>
                     </a>
                     <a href="http://www.m3mlatitude.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Latitude</p>
                     </a>
                     <a href="http://m3mthemarina.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Marina</p>
                     </a>
                     <a href="http://www.m3mmerlin.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Merlin</p>
                     </a>
                     <a href="http://m3mnatura.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Natura</p>
                     </a>
                     <a href="http://www.m3mpanoramasuites.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Panorama</p>
                     </a>
                     <a href="http://www.m3mpolosuite.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Polo Suites</p>
                     </a>
                     <a href="http://m3mstandrewsgolfresidences.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M St. Andrews</p>
                     </a>
                     <a href="http://m3msierra68.co.in/" target="_blank" >
                        <p class="name line-anim-01"> M3M Sierra68</p>
                     </a>
                     <a href="http://www.m3mskycity.com/" target="_blank" >
                        <p class="name line-anim-01"> M3M Skycity</p>
                     </a>
                     <a href="http://m3mwoodshire.co/" target="_blank" >
                        <p class="name line-anim-01"> M3M Woodshire</p>
                     </a>
                     <a href="https://www.m3mskysuites.com/" target="_blank"  >
                        <p class="name line-anim-01">  M3M Skysuites</p>
                     </a>
                  </div>
                  <div class="right" id="div-4">
                     <a href="http://m3mprive73.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Prive 73</p>
                     </a>
                     <a href="http://m3mbroadway.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Broadway</p>
                     </a>
                     <a href="http://m3m65thavenue.com/" target="_blank" >
                        <p class="name line-anim-01">M3M 65th Avenue</p>
                     </a>
                     <a href="http://m3mcornerwalk.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Corner Walk </p>
                     </a>
                     <a href="http://www.m3mcosmopolitan.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Cosmopolitan </p>
                     </a>
                     <a href="http://www.m3mifc.com/" target="_blank" >
                        <p class="name line-anim-01">M3M IFC</p>
                     </a>
                     <a href="http://www.m3monekeyresiments.com/" target="_blank" >
                        <p class="name line-anim-01">M3M One-Key Resi-ments</p>
                     </a>
                     <a href="http://m3mteepoint.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Tee Point</p>
                     </a>
                     <a href="http://www.m3murbana.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Urbana</p>
                     </a>
                     <a href="http://www.m3murbana.com/urbanabusinesspark/" target="_blank" >
                        <p class="name line-anim-01">M3M Urbana Business Park</p>
                     </a>
                     <a href="http://m3murbanapremium.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Urbana Premium</p>
                     </a>
                     <a target="_blank" href="#">
                        <p class="name line-anim-01">M3M MY DEN</p>
                     </a>
                     <a target="_blank" href="#">
                        <p class="name line-anim-01">M3M Skylofts</p>
                     </a>
                  </div>
                  <div class="right" id="div-5">
                     <a href="http://www.m3mthemarina.com/ikonic/" target="_blank" >
                        <p class="name line-anim-01">Ikonic At M3M The Marina</p>
                     </a>
                     <a href="http://m3mprive73.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Prive 73</p>
                     </a>
                     <a href="http://m3mnatura.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Natura</p>
                     </a>
                     <a href="http://m3mbroadway.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Broadway</p>
                     </a>
                     <a href="http://www.m3mifc.com/" target="_blank" >
                        <p class="name line-anim-01">M3M IFC</p>
                     </a>
                     <a href="http://m3mcornerwalk.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Corner Walk</p>
                     </a>
                     <a href="http://m3m65thavenue.com/" target="_blank" >
                        <p class="name line-anim-01">M3M 65th Avenue</p>
                     </a>
                     <a href="http://m3m65thavenue.com/heights/" target="_blank" >
                        <p class="name line-anim-01">M3M Heights</p>
                     </a>
                     <a href="http://www.m3mskycity.com/" target="_blank" >
                        <p class="name line-anim-01">M3M Skycity</p>
                     </a>
                  </div>
                  <div class="left">
                     <a href="index.php" class="line-anim-01">Home</a>
                     <a class="line-anim-01 customicon" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false">About M3M +</span></a>
                     <div class="collapse" id="collapseExample1">
                        <a href="about_us.php" class="line-anim-01" id="link-3">About Us</a>
                        <!-- <a href="#" class="line-anim-01 link" id="link-4">Team</a>
                           <a href="#" class="line-anim-01 link" id="link-5">Awards</a> -->
                     </div>
                     <a class="line-anim-01" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false">Projects +</a>
                     <div class="collapse" id="collapseExample2">
                        <a href="#" class="line-anim-01 link" id="link-3">Residential</a>
                        <a href="#" class="line-anim-01 link" id="link-4">Commecial</a>
                        <a href="#" class="line-anim-01 link" id="link-5">New Launch</a>
                     </div>
                     <!-- <a href="" class="line-anim-01 ">Investor Corner</a> -->
                     <!-- <a href="" class="line-anim-01" target="_blank">Verified Agents</a> -->
                     <a href="media.php" class="line-anim-01 ">Media</a>
                     <a href="career.php" class="line-anim-01" target="_blank">Career</a>
                     <a href="contactus.php" class="line-anim-01 ">Contact Us</a>
                  </div>
               </div>
               <div class="horiz-line"></div>
               <div class="horiz-line"></div>
               <div class="bottom-wrp">
                  <div class="left">
                     <a href="tel:18001233333">
                     Call Us
                     <span> 1800-123-3333</span>
                     </a>
                  </div>
                  <div class="right">
                     <a href="https://www.facebook.com/M3MIndiaLtd" target ="_blank" class="bg-anim-01">
                     <img src="https://www.thewadhwagroup.com/resources/images/fb-circle-icon.png">
                     </a>
                     <a href="https://twitter.com/M3MIndiaPvtLtd" target ="_blank" class="bg-anim-01">
                     <img src="https://www.thewadhwagroup.com/resources/images/twitter-circle-icon.png">
                     </a>
                     <a href="https://www.linkedin.com/company/m3m-india-limited/?originalSubdomain=in" target ="_blank" class="bg-anim-01">
                     <img src="https://www.thewadhwagroup.com/resources/images/linkedin-circle-icon.png">
                     </a>
                     <a href="https://www.instagram.com/M3MIndiaPvtLtd/" target ="_blank" class="bg-anim-01">
                     <img src="https://www.thewadhwagroup.com/resources/images/instagram-circle-icon.png">
                     </a>
                     <a href="https://www.youtube.com/user/M3MIndiaLtd/Q" target ="_blank" class="bg-anim-01">
                     <img src="https://www.thewadhwagroup.com/resources/images/youtube-circle-icon.png">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--
         <div class="home-sec">
           <div id="home-main-slider" class="owl-carousel owl-theme">
             
             <div class="hm-slide" style="background-image: url('resources/images/home/slide6.jpg');"></div>
             <div class="hm-slide" style="background-image: url('resources/images/home/slide3.jpg');"></div>
             <div class="hm-slide" style="background-image: url('resources/images/home/slide4.jpg');"></div>
             <div class="hm-slide" style="background-image: url('resources/images/home/slide5.jpg');"></div>
           </div>
           
         </div>-->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="resources/js/main.js"></script>
      <script>
         $('.top-wrp > .right').hide();
         $('#div-1').show();
         $('#link-1').addClass('active');
         
            $(".link").click(function(e) {
            e.preventDefault();
            
            $(".left a").removeClass('active');
            $('.top-wrp > .right').hide();
            
            if($(this).hasClass('active')){
         		$(this).removeClass('active');
         	}else{
         		$(this).addClass('active');
         	}
                
            
            var id = $(this).attr('id').replace('link-','');
            $('#div-'+id).show();
         });
      </script>
   </body>
</html>