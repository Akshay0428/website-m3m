<style>
#section-more{
    width:100%;
    height:auto;
}
.moretext{
    display:none;
}
</style>

<div id="section-more">
                <div class="moretext">
                    <div class="row media-card pdng-top">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <a href="img/media_page/whats_new/M3M, News Clipping of 'Ready homes still the preferred choice for buyers'- Mail Today (4th May 2020).pdf" target="_blank">
                                <img class="card-img-top" src="img/media_page/pdf.png" alt="Card image"></a>
                                <div class="card-body">
                                <p class="card-title txt-color">4th May 2020</p>
                                <p class="card-text">Ready homes still the preferred choice for buyers'</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <a href="img/media_page/whats_new/M3M, News Clipping of 'Gaining Momentum- The Economic Times (25th October 2019).pdf" target="_blank">
                                <img class="card-img-top" src="img/media_page/pdf.png" alt="Card image"></a>
                                <div class="card-body">
                                <p class="card-title txt-color">25th October 2019</p>
                                <p class="card-text">Home buyer interest in studio, serviced apartments rising in NCR'</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <a href="img/media_page/whats_new/M3M, News Clipping of 'Five reasons to opt for ready-to-move-in flat'- Live Mint (30th October 2019).pdf" target="_blank">
                                <img class="card-img-top" src="img/media_page/pdf.png" alt="Card image"></a>
                                <div class="card-body">
                                <p class="card-title txt-color">30th October 2019</p>
                                <p class="card-text">Five reasons to opt for ready-to-move-in flat'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-button float-right" id="med4">
                    <a class="text-uppercase moreless-button" id="">load more</a>
                </div>
</div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script>
            	$('.moreless-button').click(function() {
                    $('.moretext').slideToggle();
                    if ($('.moreless-button').text() == "load more") {
                    $(this).text("load less")
                    } else {
                    $(this).text("load more")
                    }
                });
            </script>