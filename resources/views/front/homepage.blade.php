@extends('app')

@section('title', 'Homepage Goodcar')

@section('metaTitle')
  <meta name="title" content="Homepage Goodcar">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="goodcar, jual-beli-mobil, jual-mobil-bekas">
@endsection

@section('metaDesc')
  <meta name="description" content="Goodcar adalah situs jual beli mobil bekas terpercaya">
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}" media="screen" />  
    <style>
	</style>
@endsection

@section('content')
    <!-- Section 1 Main Banner -->
    <section class="section-1">
        <div class="home-banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($banner as $items)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$items->id}}" class="{{$loop->first? 'active': ''}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($banner as $items)
                        <div class="carousel-item {{$loop->first? 'active': ''}}">
                            <a href="{{$items->url}}">
                                <img src="{{$items->image}}" class="d-block w-100" alt="Sliding Banner Items" >
                            </a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </section>

@endsection

@section('script_head')
@endsection('script_head')

@section('script_body')
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.slider-logos').slick({
                loop: true,
                infinite: true,
                autoplay: false,
                draggable: true,
                slidesToShow: 8,
                slidesToScroll:1,
                focusOnSelect:true,
                prevArrow:"<img class='a-left c-c prev slick-prev' src='../images/assets/layout/arrow-prev.png'>",
                nextArrow:"<img class='a-right c-c next slick-next' src='../images/assets/layout/arrow-next.png'>"
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.achievement-slider').slick({
                adaptiveHeight: true,
                autoplay:true,
                arrows: false,
                autoplaySpeed: 0,
                speed: 2500,
                infinite: true,
                focusOnSelect: false,
                cssEase: 'linear',
                draggable: true,
                infinite:true,
                pauseOnHover: true,
                slidesToShow: 4,
                slidesToScroll:1,
                responsive: [{
                    breakpoint: 480,
                    settings:{
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        swipeToSlide: true,
                        speed: 3000,
                    }},
                ]
                // prevArrow:"<img class='a-left embed prev slick-prev' src='../images/assets/layout/btn-prev.png'>",
                // nextArrow:"<img class='a-right embed next slick-next' src='../images/assets/layout/btn-next.png'>"
            });
        });
    </script>
    <!-- <script type="text/javascript">
        $( document ).ready(function() {
          $('.slider2').slick({
            slidesToShow: 3,
            slidesToScroll:1,
            autoplay: false,
            draggable: true,
            responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1
              }
            }
          ]
          });
        });
        //   $('.box-slider').slick({
        //     centerMode: true,
        //     infinite: true,
        //     slidesToShow: 1,
        //     dots: false,
        //     // appendDots:jQuery(".box-dots"),
        //     autoplay: false,
        //     responsive: [
        //     {
        //       breakpoint: 768,
        //       settings: {
        //         slidesToShow: 1
        //       }
        //     }
        //   ]
        //   });
        // });
        //   $(document).ready(function(){
        //     // Event for pushed the video
        //     $('#carouselExampleIndicators').carousel({
        //         pause: true,
        //         interval: false
        //     });
        // });

        // $(document).ready(function () {
        //     $('.slider-for').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     arrows: false,
        //     fade: true,
        //     asNavFor: '.slide-show'
        //   });
        // });

        // $(document).ready(function () {
        //     $('.slide-show').slick({
        //       infinite: true,
        //       slidesToShow: 3,
        //       slidesToScroll: 1,
        //       asNavFor: '.slider-for',
        //       dots: false,
        //       arrows: true,
        //       prevArrow:"<img class='a-left c-c prev slick-prev' src='../source/images/Vector 4.png'>",
        //       nextArrow:"<img class='a-right c-c next slick-next' src='../source/images/Vector 3.png'>",
        //       centerMode: true,
        //       focusOnSelect: true,
        //       responsive: [
        //         { breakpoint: 1024,
        //           settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: false
        //           }},
        //           { breakpoint: 768,
        //           settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: false
        //           }},
        //           { breakpoint: 480,
        //           settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: false
        //           }}
        //       ]
        //     });
        // });
    </script> -->
@endsection('script_body') 