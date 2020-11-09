<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('front/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('front/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('front/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('front/plugins/easing/easing.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


@stack('front-js')



<script>

        @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch(type) {
        case'info':
            toastr.info("{{Session::get('message')}}");
            break;
        case'success':
            toastr.success("{{Session::get('message')}}");
            break;
        case'warning':
            toastr.warning("{{Session::get('message')}}");
            break;

        case'error':
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>
