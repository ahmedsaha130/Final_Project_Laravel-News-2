@extends('frontsite.layout.master')

@section('title')
 Home News
@endsection


@section('content')

<style>

</style>

<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($fetured as $key => $slider)
            <div  class="carousel-item {{$key == 0 ? 'active' : '' }}">


                <img  style="position: relative;text-align: center; " width="100px" ;
                height="500px"  src="{{ asset('post_images/'.$slider->post_image) }}" class="d-block w-100"  alt=".tyt">
                <h2 style="   top: 50%;
                left: 50%;
                transfm: translate(or-50%, -50%); position:absolute; color:#FFF;background-color: #100c0cad;"><a style="text-decoration: none;color:#FFF" href="{{  route('single',$slider->slug)}}" >{{$slider->title }}</a></h2>
                <h5 style="    position: absolute;
                bottom: 8px;
                left: 16px; position:absolute; color:#FFF;background-color: #100c0cad;">{{$slider->created_at }}</h5>
            </div>



            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
            </div>

            <div class="owl-carousel owl-theme" id="slider2">


                @foreach ($fetured as $feature)
                <div class="item px-2">

                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="{{ asset('post_images/'.$feature->post_image) }} "alt=""></div>
                        <div>


                            <a href="{{ route('single',$feature->slug) }}" class="d-block fh5co_small_post_heading"><span class=""> {{ $feature->title }}</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i>{{ $feature->created_at }}</div>
                        </div>

                    </div>


                </div>
                @endforeach



                </div>

            </div>

        </div>
    </div>

    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">

                @foreach ($posts as $post)

                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ asset('post_images/'.$post->post_image) }}" alt=""
                                                               class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="{{ route('single',$post->slug) }}" class="text-white"> {{ $post->title }}</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> {{ $post->created_at }}</div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>






</body>

@endsection
<script>
    $(window).load(function() {
	$('#myCarousel').carousel({
  		interval: 3000
 		})
   	});
</script>
