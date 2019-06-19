<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Domina digitalis</strong>. All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a >Domina digitalis</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('Regna/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('Regna/lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('Regna/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Regna/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('Regna/lib/wow/wow.js') }}"></script>
<script src="{{ asset('Regna/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('Regna/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('Regna/lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('Regna/lib/superfish/superfish.min.js') }}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{ asset('Regna/contactform/contactform.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('Regna/js/main.js') }}"></script>

<script src="{{ asset('js/slick.min.js') }}"></script>

<style>
    .quotes{
        width: 960px;
        position: relative;
        margin:0 auto;
        line-height: 1.4em;
    }


    @media only screen and (max-width: 600px){
        .quotes { width: 82%; }
    }

    @media only screen and (max-width: 600px){
        .slick-dots { visibility: hidden; }
    }


</style>

<script>
    $('.quotes').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 800,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    $('.lazy').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1
    });

    $( document ).ready(function() {
        $('.no-fouc').removeClass('no-fouc');
    });
</script>

<script>
    $('#btn-try').click(function () {
        $('#try').html("<div id='animate' class='alert alert-dark text-dark m-auto' >{{__('app.try_latter')}}</div>");

            var div = $("#animate");
            div.animate({height: '300px', opacity: '0.9'}, "fast");
            div.animate({height: '200px', opacity: '0.8'}, "fast");
            div.animate({height: '80px', opacity: '0.7'}, "slow");
            div.animate({height: '70px', opacity: '1'}, "slow");

            $('#anmate').css("color", "red");

    })
</script>

</body>
</html>
