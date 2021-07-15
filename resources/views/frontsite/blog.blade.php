@extends('frontsite.layout.master')


@section('content')


<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
            <!-- Add News -->

       @foreach ($post as $posts )



                              <div class="row pb-4">
                              <div class="col-md-5">
                                  <div class="fh5co_hover_news_img">
                                      <div class="fh5co_news_img"><img class="personal" src="{{ asset('post_images/'.$posts->post_image) }}">image</div>
                                      <div></div>
                                  </div>
                              </div>
                              <div class="col-md-7 animate-box">
                                  {{--  {{ dd($posts->id) }}  --}}
                             <a class="fh5co_magna py-2" href="{{ route('single',$posts->slug) }}">{{ $posts->title }} </a>



                                <a href="{{ route('single',$posts->slug) }} "class="fh5co_mini_time py-3"> {{ $posts->created_at }}</a>
                                  <div class="fh5co_consectetur">
                                          {{ $posts->body }}
                                  </div>
                              </div>
                          </div>
                          @endforeach
    </div>
</div>
{{  $post->links() }}
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.jss') }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js') }}"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src=" {{ asset('js/jquery.waypoints.min.jss') }}"></script>
<!-- Main -->
<script src=" {{ asset('js/main.js') }}"></script>
@endsection
@section('title')
 Blog News
@endsection
