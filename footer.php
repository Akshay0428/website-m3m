<div class="footer-bg">
   <div class="container">
      <div class="row pdng-top footer-menu">
         <div class="col-sm-6 pdg">
            <div class="row pdg">
               <div class="col-2 icon-center text-uppercase pdg">
                  <h6 class="text-center text-uppercase white font-100 custom-h6-footer">company</h6>
               </div>
               <div class="col-2 icon-center text-uppercase pdg">
                  <h6 class="text-center text-uppercase white font-100 custom-h6-footer">partners</h6>
               </div>
               <div class="col-2 icon-center text-uppercase pdg">
                  <h6 class="text-center text-uppercase white font-100 custom-h6-footer">projects</h6>
               </div>
               <div class="col-2 icon-center text-uppercase pdg">
                  <h6 class="text-center text-uppercase white font-100 custom-h6-footer">media</h6>
               </div>
               <div class="col-2 icon-center text-uppercase pdg">
                  <h6 class="text-center text-uppercase white font-100 custom-h6-footer">careers</h6>
               </div>
               <div class="col-2 icon-center text-uppercase pdg">
                  <h6 class="text-center text-uppercase white font-100 custom-h6-footer">contact us</h6>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
               <!-- <div class="row">
                  <div class="col-sm-3 text-uppercase"><div class="social-icons"><img src="img/wticon.png" alt="social icon"></div></div>
                  <div class="col-sm-3 text-uppercase"><div class="social-icons"><img src="img/fbicon.png" alt="social icon"></div></div>
                  <div class="col-sm-3 text-uppercase"><div class="social-icons"><img src="img/youicon.png" alt="social icon"></div></div>
                  <div class="col-sm-3 text-uppercase"><div class="social-icons"><img src="img/linkicon.png" alt="social icon"></div></div>
                  </div> -->
            <div class="text-right center-block">
               <a href="#"><i id="social-fb" class="fa fa-whatsapp fa-2x social"></i></a>
               <a href="#"><i id="social-tw" class="fa fa-facebook fa-2x social"></i></a>
               <a href="#"><i id="social-gp" class="fa fa-youtube-play fa-2x social"></i></a>
               <a href="#"><i id="social-em" class="fa fa-linkedin fa-2x social"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-line"></div>
</div>

<!-- <div id="sy-whatshelp">
   <div class="sywh-services">
      <a href="" class="messenger" data-tooltip="Livechat" data-placement="left" target="_blank">
      <i class="fa fa-comments"></i>
      </a>
      <a href="" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
      <i class="fa fa-whatsapp"></i>
      </a>
      <a href="" class="call" data-tooltip="Call" data-placement="left">
      <i class="fa fa-phone"></i>
      </a>
   </div>
   <a class="sywh-open-services" data-placement="left">
   <i class="fa fa-comments"></i>
   <i class="fa fa-times"></i>
   </a>
</div> -->
<!-- contact us ends -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
<script>
   $(document).ready(function(){

      $('.partner-slider').slick({
         dots: true,
         arrow: false,
         prevArrow:'<button type="button" class="d-none"></button>',
         nextArrow:'<button type="button" class="d-none"></button>',
         infinite: true,
         autoplay: true,
         speed: 300,
         slidesToShow: 2,
         slidesToScroll: 1,
         responsive: [
            {
               breakpoint: 1024,
               settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  arrow: false,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  infinite: true,
                  dots: true
               }
            },
            {
               breakpoint: 600,
               settings: {
                  slidesToShow: 1,
                  arrow: false,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  dots: true,
                  slidesToScroll: 1
               }
            },
            {
               breakpoint: 480,
               settings: {
                  slidesToShow: 1,
                  arrow: false,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  dots: true,
                  slidesToScroll: 1
               }
            }
         ]
	   });

      $('.test-slider').slick({
         dots: true,
         arrow: false,
         prevArrow:'<button type="button" class="d-none"></button>',
         nextArrow:'<button type="button" class="d-none"></button>',
         infinite: true,
         autoplay: true,
         speed: 300,
         slidesToShow: 2,
         slidesToScroll: 1,
         responsive: [
            {
               breakpoint: 1024,
               settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  arrow: false,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  infinite: true,
                  dots: true
               }
            },
            {
               breakpoint: 600,
               settings: {
                  slidesToShow: 1,
                  arrow: false,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  dots: true,
                  slidesToScroll: 1
               }
            },
            {
               breakpoint: 480,
               settings: {
                  slidesToShow: 1,
                  arrow: false,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  dots: true,
                  slidesToScroll: 1
               }
            }
         ]
	   });
   
      $('.award-slider').slick({
         dots: false,
         arrow: true,
         prevArrow:'<button type="button" class="prev-button"></button>',
         nextArrow:'<button type="button" class="next-button"></button>',
         infinite: true,
         autoplay: true,
         speed: 300,
         slidesToShow: 3,
         slidesToScroll: 1,
         responsive: [
            {
               breakpoint: 1024,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  arrow: true,
                  prevArrow:'<button type="button" class="prev-button"></button>',
                  nextArrow:'<button type="button" class="next-button"></button>',
                  infinite: true,
                  dots: false
               }
            },
            {
               breakpoint: 600,
               settings: {
                  slidesToShow: 1,
                  arrow: false,
                  dots: true,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  slidesToScroll: 1
               }
            },
            {
               breakpoint: 480,
               settings: {
                  slidesToShow: 1,
                  arrow: false,
                  dots: true,
                  prevArrow:'<button type="button" class="d-none"></button>',
                  nextArrow:'<button type="button" class="d-none"></button>',
                  slidesToScroll: 1
               }
            }
         ]
	   });

   });
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
   AOS.init();
</script>
</body>
</html>