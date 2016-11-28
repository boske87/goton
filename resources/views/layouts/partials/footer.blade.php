<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">

            <div class="span4">
                <p>
                    FOTON ŠKOLA FOTOGRAFIJE <br/>
                    tel: +381 64 11 59 800 <br/>
                    e-mail: skolafotografije@gmail.com <br/>
                    Đure Daničića 17, 11000 Beograd <br/>
                    _ <br/><br/>
                    &copy; Foton škola fotografije
                </p>
            </div>

            <div class="span2 foot-menu">
                <p>
                    <a href="#">Početni nivo</a><br/>
                    <a href="#">Napredni nivo</a><br/>
                    <a href="#">Profesori</a><br/>
                    <a href="#">Galerija</a><br/>
                    <a href="#">Vesti</a><br/>
                    <a href="#">Kontakt</a><br/>
                    <a href="#">Linkovi </a><br/>
                </p>
            </div>

            <div class="span3">
                <div class="foot-klub">
                    <p>
                        KLUB FOTON
                    <hr/>
                    <a href="#">Registruj se</a>
                    <img src="{{asset('assets//img/plus.png')}}" width="20">
                    <hr/>
                    <a href="#">Moj nalog</a>
                    <img src="{{asset('assets//img/peo.png')}}" width="20">
                    <hr/>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End id="footer" -->

</div>
<!-- BEGIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="{{ asset('assets/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>


<script type="text/javascript" src="{{ asset('assets/js/jquery-ui-1.10.2.custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.sharrre-1.3.4.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.gmap3.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.tweet.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/imagesloaded.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/la_boutique.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/tfingi-megamenu/tfingi-megamenu-frontend.js')}}"></script>

<!-- bxSlider Javascript file -->
<script src="{{ asset('assets/js/jquery.bxslider.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            pager:false
        });
    });
</script>

<!--preview only-->
<script type="text/javascript" src="{{ asset('assets/js/jquery.cookie.js')}}"></script>

<script>
    $('.slide_arr_left, .slide_arr_right').click(function(){
        $('html, body').animate({
            scrollTop: $("#scroll_to").offset().top
        }, 2000);
    });
</script>
        <!-- END JAVASCRIPTS -->
</body>
</html>