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

      <!-- Gtag COde for m3m website start -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-796224392" defer="defer"></script>

      <script >
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-796224392');
      </script>

   <!-- Gtag COde for m3m website ends -->


      <style type="text/css">
         /*****************Custom Logo Nav**************/
         .menu-wrp .top-wrp .right > a{
         text-align: center !important;
         }
         img.nav-logo {
         width: 50% !important;
         height: 67px !important;
         }
         p.name.line-anim-01 {
         text-align: center !important;
         font-size: 12px !important;
         }
         div#residiv p, div#comdiv p, div#launchdiv p {
         color: #fff;
         text-align: left !important;
         }
         .del-last {
         border: none !important;
         }
         /*************************************************/
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
         .menu-wrp.active {
         overflow-y: scroll !important;
         }
         .menu-brand img {
         position: absolute;
         width: 9%;
         top: 17px;
         }
         .menu-wrp .top-wrp {
         margin-top: 60px;
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
         .custom-col-setting {
         margin: 0px !important;
         padding: 0px !important;
         }
         .menu-wrp .top-wrp .left a {
         font-size: 13px;
         font-weight: 400;
         color: #262626;
         text-transform: uppercase;
         padding: 4px 0 12px;
         position: relative;
         display: table;
         letter-spacing: 2px;
         border-bottom: 1px solid #fff;
         width: 100%;
         padding: 22px 0px !important;
         }
         .menu-wrp .top-wrp .right {
         border: none !important;
         }
         .menu-brand img {
         width: 30%;
         }
         img.nav-logo {
         width: 45% !important;
         }
         }
      </style>
   </head>
   <body class="home-body">
      <header class="scroll-col">
         <div class="container navbar">
            <a class="navbar-brand" href="index.php"><img src="img/M3M logo.png"></a>
            <!-- <a class="nav-link m_hide" href="redefining.php">Redefining New Gurugram</a> -->
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
               <a class="menu-brand" href="index.php"><img src="img/M3M logo.png"></a>
               <div class="whatsapp-wrp">
                  <a href="#"><img src=""></a>
               </div>
               <div class="top-wrp">
                  <div class="right" id="div-1">
                     <!-- <a href="#" target="_blank" ><p class="name line-anim-01">About Us</p></a>
                        <a href="#" target="_blank" ><p class="name line-anim-01">CSR</p></a>
                        <a href="#" target="_blank" ><p class="name line-anim-01">Awards</p></a> -->
                  </div>
                  <!-- <div class="right" id="div-2">
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
                     </div> -->
                  <div class="right" id="div-reson">
                     <a href="http://m3mthemarina.com/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Marina.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 68, Golf Course Road (Extn.)<br>
                        <span class="font-weight-light">Beautiful landscapes & sprawling water body</span></p>
                     </a>
                     <a href="http://m3msierra68.co.in/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Sierra.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 68, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Beautiful landscapes & sprawling water body</span></p>
                     </a>
                     <a href="http://m3m65thavenue.com/heights/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Heights.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 65, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">An elevated living experience</span></p>
                     </a>
                     <a href="http://m3mnatura.com/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/M3M-Natura.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 68, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Beautiful landscapes & sprawling water body</span></p>
                     </a>
                     <a href="http://www.m3mskycity.com/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Sky-Life.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 65, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">An acme of convenience</span></p>
                     </a>
                     <a href="http://www.m3mthemarina.com/ikonic/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Ikonic.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 68, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">A lifestyle filled with infinite luxury</span></p>
                        <!-- <p class="name line-anim-01">Finest Golf Resort Living</p> -->
                     </a>
                     <a href="http://www.m3mlatitude.com/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Latitude.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 65, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">High rise with modern design</span></p>
                     </a>
                  </div>
                  <div class="right" id="div-resdel">
                     <a href="http://m3mfairwaywest.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Fairway-West.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">A privileged lifestyle</span></p>
                     </a>
                     <a href="http://www.m3mmerlin.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Merlin.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Singapore style architecture</span></p>
                     </a>
                     <a href="http://www.m3mpolosuite.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/POLO.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">For the new age blue bloods</span></p>
                     </a>
                     <a href="http://m3mwoodshire.co/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Wood.png" class="nav-logo">   
                        <p class="name line-anim-01">Sector 107, Near Dwarka Expressway<br><span class="font-weight-light">Located in a tranquil environment</span></p>
                     </a>
                     <a href="http://m3mescala.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Escala.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 70A, Golf Course Road (Extn.)<br><span class="font-weight-light">The next lifestyle destination</span></p>
                     </a>
                     <a href="http://www.m3mpanoramasuites.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Panorama.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Limited edition luxury suites</span></p>
                     </a>
                     <a href="http://www.m3mgolfestate.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Fairway-East.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Luxury of space & expanse</span></p>
                     </a>
                     <a href="http://m3mstandrewsgolfresidences.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Andrews.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Extravagant international lifestyle</span></p>
                     </a>
                     <a href="https://www.m3mskysuites.com/" target="_blank" >
                        <img src="img/projects-logo/residential/delivered/Sky-Suites.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Your private fortress in the sky</span></p>
                     </a>
                     <!-- <a href="https://www.m3mskysuites.com/" target="_blank"  >
                        <p class="name line-anim-01">  M3M Skysuites</p>
                        </a> -->
                  </div>
                  <div class="right" id="div-comon">
                     <a href="http://www.m3murbana.com/urbanabusinesspark/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/Urbana-Business.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 67, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Gold LEED Certified & GRIHA rated</span></p>
                     </a>
                     <a href="http://m3murbanapremium.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/Urbana-74.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 67, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Grade ‘A’ Office Spaces</span></p>
                     </a>
                     <a href="http://m3m65thavenue.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/65-Avenue.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 65, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">A mixed-used destination</span></p>
                     </a>
                     <a href="http://m3mcornerwalk.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/Corner-Walk.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 74, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">A micro-universe with every convenience</span></p>
                     </a>
                     <a href="http://www.m3mifc.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/M3M-IFC.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 66, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Premium grade ‘A’ office spaces</span></p>
                     </a>
                     <a href="http://m3mbroadway.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/Broadway.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 71, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Retail, F&B, entertainment & office spaces</span></p>
                     </a>
                     <a href="https://www.m3mskyloftsgurgaon.in/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/Sky-Lofts.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 71, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">1st ever double-heighted lofts</span></p>
                     </a>
                     <a href="http://m3mprive73.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/M3M-Prive.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 73, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Inspired from Burlington Arcade, London</span></p>
                     </a>
                     <a href="https://www.m3mmyden.co/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/M3M-My-Den.png" class="nav-logo">   
                        <p class="name line-anim-01">
                           Sec 67, Golf Course Road (Extn.)<br>
                           <span class="font-weight-light">Branded serviced apartments</span></p>
                     </a>
                  </div>
                  <div class="right" id="div-comdel">
                     <a href="http://www.m3mcosmopolitan.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/delivered/Cosmopolitan.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 66, Golf Course Road (Extn.)<br><span class="font-weight-light">1st High-street Retail on Golf Course Road (Extn.)</span></p>
                     </a>
                     <a href="http://www.m3monekeyresiments.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/ongoing/One-Key.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Futuristic lifestyle that will redefine your world</span></p>
                     </a>
                     <a href="http://www.m3murbana.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/delivered/Urbana.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Premium Retail and uber offices</span></p>
                     </a>
                     <a href="http://m3mteepoint.com/" target="_blank" >
                        <img src="img/projects-logo/commercial/delivered/Tee-Point.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Office and retail space mix</span></p>
                     </a>
                  </div>
                  <div class="right" id="div-newlaunch">
                     <!-- <a href="http://www.m3mlatitude.com/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Latitude.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">High rise with modern design</span></p>
                     </a> -->
                     <a href="http://www.m3mthemarina.com/ikonic/" target="_blank" >
                        <img src="img/projects-logo/residential/ongoing/Ikonic.png" class="nav-logo">   
                        <p class="name line-anim-01">Sec 68, Golf Course Road (Extn.)<br><span class="font-weight-light">A lifestyle filled with infinite luxury</span></p>
                     </a>
                     <a href="http://m3mcornerwalk.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/Corner-Walk.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 74, Golf Course Road (Extn.)<br><span class="font-weight-light">A micro-universe with every convenience</span></p>
                                 </a>
                  </div>
                  <div class="left">
                     <a href="index.php" class="line-anim-01">Home</a>
                     <a class="line-anim-01 about" onclick="togglesign('.about')" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false">About M3M <i class="fa fa-plus"></i></span></a>
                     <div class="collapse card-header" id="collapseExample1">
                        <a href="about_us.php" class="line-anim-01">About Us</a>
                        <!-- <a href="#" class="line-anim-01 link" id="link-4">Team</a> -->
                        <a href="awards.php" class="line-anim-01">Awards</a>
                     </div>
                     <!-- <a href="redefining.php" class="line-anim-01">Redefining New Gurugram</a> -->
                     <div class="m_hide">
                        <a class="line-anim-01 project" onclick="togglesign('.project')"  data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false">Projects <i class="fa fa-plus"></i></a>
                        <div class="collapse card-header" id="collapseExample2">
                           <a class="line-anim-01 resproject" onclick="togglesign('.resproject')"  data-toggle="collapse" href="#collapseresidential" role="button" aria-expanded="false">Residential <i class="fa fa-plus"></i></a>
                           <div class="collapse card-header" id="collapseresidential">
                              <a href="#" class="line-anim-01 link" id="link-reson">Ongoing</a>
                              <a href="#" class="line-anim-01 link" id="link-resdel">Delivered</a>
                           </div>
                           <a class="line-anim-01 commproject" onclick="togglesign('.commproject')"  data-toggle="collapse" href="#collapsecommercial" role="button" aria-expanded="false">Commercial <i class="fa fa-plus"></i></a>
                           <div class="collapse card-header" id="collapsecommercial">  
                              <a href="#" class="line-anim-01 link" id="link-comon">Ongoing</a>
                              <a href="#" class="line-anim-01 link" id="link-comdel">Delivered</a>
                           </div>
                           <a href="#" class="line-anim-01 link" id="link-newlaunch">New Launch</a>
                        </div>
                     </div>
                     <div class="d_hide left">
                        <a class="line-anim-01 projectmob" onclick="togglesign('.projectmob')" data-toggle="collapse" href="#collapseExample2mob" role="button" aria-expanded="false">Projects <i class="fa fa-plus"></i></a>
                        <div class="collapse card-header" id="collapseExample2mob">
                           <a class="line-anim-01 resimob" onclick="togglesign('.resimob')" data-toggle="collapse" href="#residiv" role="button" aria-expanded="false">Residential <i class="fa fa-plus"></i></a>
                           <div class="collapse card-header" id="residiv">
                              <a class="line-anim-01 resionmob" onclick="togglesign('.resionmob')" data-toggle="collapse" href="#residivon" role="button" aria-expanded="false">Ongoing <i class="fa fa-plus"></i></a>
                              <div class="collapse card-header" id="residivon">
                                 <a href="http://m3mthemarina.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/ongoing/Marina.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 68, Golf Course Road (Extn.)<br><span class="font-weight-light">Beautiful landscapes & sprawling water body</span></p>
                                 </a>
                                 <a href="http://m3msierra68.co.in/" target="_blank" >
                                    <img src="img/projects-logo/residential/ongoing/Sierra.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 68, Golf Course Road (Extn.)<br><span class="font-weight-light">Beautiful landscapes & sprawling water body</span></p>
                                 </a>
                                 <a href="http://m3m65thavenue.com/heights/" target="_blank" >
                                    <img src="img/projects-logo/residential/ongoing/Heights.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">An elevated living experience</span></p>
                                 </a>
                                 <a href="http://m3mnatura.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/ongoing/M3M-Natura.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 68, Golf Course Road (Extn.)<br><span class="font-weight-light">Beautiful landscapes & sprawling water body</span></p>
                                 </a>
                                 <a href="http://www.m3mskycity.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/ongoing/Sky-Life.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">An acme of convenience</span></p>
                                 </a>
                                 <a href="http://www.m3mthemarina.com/ikonic/" target="_blank" >
                                    <img src="img/projects-logo/residential/ongoing/Ikonic.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 68, Golf Course Road (Extn.)<br><span class="font-weight-light">A lifestyle filled with infinite luxury</span></p>
                                    <!-- <p class="name line-anim-01">Finest Golf Resort Living</p> -->
                                 </a>
                                 <a href="http://www.m3mlatitude.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/ongoing/Latitude.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">High rise with modern design</span></p>
                                 </a>
                              </div>
                              <a class="line-anim-01 residelmob" onclick="togglesign('.residelmob')" data-toggle="collapse" href="#residivdel" role="button" aria-expanded="false">Delivered <i class="fa fa-plus"></i></a>
                              <div class="collapse card-header" id="residivdel">
                                 <a href="http://m3mfairwaywest.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Fairway-West.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">A privileged lifestyle</span></p>
                                 </a>
                                 <a href="http://www.m3mmerlin.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Merlin.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Singapore style architecture</span></p>
                                 </a>
                                 <a href="http://www.m3mpolosuite.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/POLO.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">For the new age blue bloods</span></p>
                                 </a>
                                 <a href="http://m3mwoodshire.co/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Wood.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sector 107, Near Dwarka Expressway<br><span class="font-weight-light">Located in a tranquil environment</span></p>
                                 </a>
                                 <a href="http://m3mescala.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Escala.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 70A, Golf Course Road (Extn.)<br><span class="font-weight-light">The next lifestyle destination</span></p>
                                 </a>
                                 <a href="http://www.m3mpanoramasuites.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Panorama.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Limited edition luxury suites</span></p>
                                 </a>
                                 <a href="http://www.m3mgolfestate.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Fairway-East.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Luxury of space & expanse</span></p>
                                 </a>
                                 <a href="http://m3mstandrewsgolfresidences.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Andrews.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Extravagant international lifestyle</span></p>
                                 </a>
                                 <a href="https://www.m3mskysuites.com/" target="_blank" >
                                    <img src="img/projects-logo/residential/delivered/Sky-Suites.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Your private fortress in the sky</span></p>
                                 </a>
                                 <!-- <a href="https://www.m3mskysuites.com/" target="_blank"  >
                                    <p class="name line-anim-01">  M3M Skysuites</p>
                                    </a> -->
                              </div>
                           </div>
                           <a class="line-anim-01 commmob" onclick="togglesign('.commmob')" data-toggle="collapse" href="#comdiv" role="button" aria-expanded="false">Commercial <i class="fa fa-plus"></i></a>
                           <div class="collapse card-header" id="comdiv">
                              <a class="line-anim-01 comonmob" onclick="togglesign('.comonmob')" data-toggle="collapse" href="#comdivon" role="button" aria-expanded="false">Ongoing <i class="fa fa-plus"></i></a>
                              <div class="collapse card-header" id="comdivon">
                                 <a href="http://www.m3murbana.com/urbanabusinesspark/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/Urbana-Business.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Gold LEED Certified & GRIHA rated</span></p>
                                 </a>
                                 <a href="http://m3murbanapremium.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/Urbana-74.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Grade ‘A’ Office Spaces</span></p>
                                 </a>
                                 <a href="http://m3m65thavenue.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/65-Avenue.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">A mixed-used destination</span></p>
                                 </a>
                                 <a href="http://m3mcornerwalk.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/Corner-Walk.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 74, Golf Course Road (Extn.)<br><span class="font-weight-light">A micro-universe with every convenience</span></p>
                                 </a>
                                 <a href="http://www.m3mifc.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/M3M-IFC.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 66, Golf Course Road (Extn.)<br><span class="font-weight-light">Premium grade ‘A’ office spaces</span></p>
                                 </a>
                                 <a href="http://m3mbroadway.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/Broadway.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 71, Golf Course Road (Extn.)<br><span class="font-weight-light">Retail, F&B, entertainment & office spaces</span></p>
                                 </a>
                                 <a href="https://www.m3mskyloftsgurgaon.in/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/Sky-Lofts.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 71, Golf Course Road (Extn.)<br><span class="font-weight-light">1st ever double-heighted lofts</span></p>
                                 </a>
                                 <a href="http://m3mprive73.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/M3M-Prive.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 73, Golf Course Road (Extn.)<br><span class="font-weight-light">Inspired from Burlington Arcade, London</span></p>
                                 </a>
                                 <a href="https://www.m3mmyden.co/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/M3M-My-Den.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Branded serviced apartments</span></p>
                                 </a>
                              </div>
                              <a class="line-anim-01 comdelmob" onclick="togglesign('.comdelmob')" data-toggle="collapse" href="#comdivdel" role="button" aria-expanded="false">Delivered <i class="fa fa-plus"></i></a>
                              <div class="collapse card-header" id="comdivdel">
                                 <a href="http://www.m3mcosmopolitan.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/delivered/Cosmopolitan.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 66, Golf Course Road (Extn.)<br><span class="font-weight-light">1st High-street Retail on Golf Course Road (Extn.)</span></p>
                                 </a>
                                 <a href="http://www.m3monekeyresiments.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/ongoing/One-Key.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">Design by a renowned firm of Singapore</span></p>
                                 </a>
                                 <a href="http://www.m3murbana.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/delivered/Urbana.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 67, Golf Course Road (Extn.)<br><span class="font-weight-light">High street retail designed by UHA London</span></p>
                                 </a>
                                 <a href="http://m3mteepoint.com/" target="_blank" >
                                    <img src="img/projects-logo/commercial/delivered/Tee-Point.png" class="nav-logo">   
                                    <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">Office and retail space mix</span></p>
                                 </a>
                              </div>
                           </div>
                           <a class="line-anim-01 newlaunchmob" onclick="togglesign('.newlaunchmob')" data-toggle="collapse" href="#launchdiv" role="button" aria-expanded="false">New Launch <i class="fa fa-plus"></i></a>
                           <div class="collapse card-header" id="launchdiv">
                              <!-- <a href="http://www.m3mlatitude.com/" target="_blank" >
                                 <img src="img/projects-logo/residential/ongoing/Latitude.png" class="nav-logo">   
                                 <p class="name line-anim-01">Sec 65, Golf Course Road (Extn.)<br><span class="font-weight-light">High rise with modern design</span></p>
                              </a> -->
                              <a href="http://www.m3mthemarina.com/ikonic/" target="_blank" >
                                 <img src="img/projects-logo/residential/ongoing/Ikonic.png" class="nav-logo">   
                                 <p class="name line-anim-01">Sec 68, Golf Course Road (Extn.)<br><span class="font-weight-light">A lifestyle filled with infinite luxury</span></p>
                                 <!-- <p class="name line-anim-01">Finest Golf Resort Living</p> -->
                              </a>
                              <a href="http://m3mprive73.com/" target="_blank" >
                                 <img src="img/projects-logo/commercial/ongoing/M3M-Prive.png" class="nav-logo">   
                                 <p class="name line-anim-01">Sec 73, Golf Course Road (Extn.)<br><span class="font-weight-light">Inspired from Burlington Arcade, London</span></p>
                              </a>
                              <a href="http://m3mbroadway.com/" target="_blank" >
                                 <img src="img/projects-logo/commercial/ongoing/Broadway.png" class="nav-logo">   
                                 <p class="name line-anim-01">Sec 71, Golf Course Road (Extn.)<br><span class="font-weight-light">Retail, F&B, entertainment & office spaces</span></p>
                              </a>
                           </div>
                        </div>
                     </div>
                     <!-- <a href="" class="line-anim-01 ">Investor Corner</a> -->
                     <!-- <a href="" class="line-anim-01" target="_blank">Verified Agents</a> -->
                     <a href="media.php" class="line-anim-01 ">Media</a>
                     <a href="career.php" class="line-anim-01">Careers</a>
                     <a href="https://m3mfoundation.org/" class="line-anim-01" target="_blank">M3M Foundation</a>
                     <a href="contactus.php" class="line-anim-01">Contact Us</a>
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
                     <!-- <a href="https://www.facebook.com/M3MIndiaLtd" target ="_blank" class="bg-anim-01">
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
                     </a> -->

                     <a href="https://api.whatsapp.com/send?phone=919871093339"  target="_blank"><i id="social-fb" class="fa fa-whatsapp fa-2x social"></i></a>
                <a href="https://www.facebook.com/M3MIndiaLtd" target="_blank"><i id="social-tw" class="fa fa-facebook fa-2x social"></i></a>
                <a href="https://www.instagram.com/M3MIndiaPvtLtd/" target="_blank"><i id="social-insta" class="fa fa-instagram fa-2x social"></i></a>
                <a href="https://www.linkedin.com/company/m3m-india-limited/?originalSubdomain=in" target="_blank"><i id="social-em" class="fa fa-linkedin fa-2x social"></i></a>
                <a href="https://twitter.com/M3MIndiaPvtLtd" target="_blank"><i id="social-twitter" class="fa fa-twitter fa-2x social"></i></a>
                <a href="https://www.youtube.com/user/M3MIndiaLtd/" target="_blank"><i id="social-gp" class="fa fa-youtube-play fa-2x social"></i></a>
               <a href="https://in.pinterest.com/m3mi/" target="_blank"><i id="social-pintrest" class="fa fa-pinterest fa-2x social"></i></a>


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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
      <script>
         function togglesign(custome){
            // console.log("Default "+$(custome).attr('aria-expanded'));
               if($(custome).attr('aria-expanded')==="false"){
                  // console.log("IF "+$(custome).attr('aria-expanded'));
                  $(custome).find(".fa").removeClass("fa-plus");
                  $(custome).find(".fa").addClass("fa-minus");
               }else{
                  // console.log("else "+$(custome).attr('aria-expanded'));
                  $(custome).find(".fa").removeClass("fa-minus");
                  $(custome).find(".fa").addClass("fa-plus");
                  //$(".custome").find(".fa").removeClass(".fa-minus").addClass("fa-plus");
               }
            
         }
      </script>