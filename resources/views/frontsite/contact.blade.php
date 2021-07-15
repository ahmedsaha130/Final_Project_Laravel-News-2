@extends('frontsite.layout.master')


@section('content')

<style>
.contact_us_bg_img{
                background:url('contact.jpg');
                padding:100px 0;
                background-size:cover;
        }

</style>

<div class="container-fluid contact_us_bg_img">
    <div class="container">
        <div class="row">
            <a href="{{ route('index') }}" class="fh5co_con_123"><i class="fa fa-home"></i></a>
            <a href="#" class="fh5co_con pt-2"> Contact Us </a>
        </div>
    </div>
</div>
<div class="container-fluid  fh5co_fh5co_bg_contcat">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Call Us</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">Jawal:+972594323042</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Have any questions?</span>
                        <span class="d-block c_g fh5co_contact_us_no_text"><a href='' href='mailto:ar.salha@alaqsa.edu.ps'>ar.salha@alaqsa.edu.ps</a></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Address</span>
                        <span class="d-block c_g fh5co_contact_us_no_text"> Palestine-Gaza</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">Contact Us</div>
        </div>
        @include('admin.layout.messages')
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{ route('contactSend') }}" method="POST" class="row" id="fh5co_contact_form">

                 @csrf
                 @method('POSt')
                    <div class="col-12 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box"value="{{ old('email') }}" name="email" placeholder="E-mail" />
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box" value="{{ old('subject') }}" name="subject" placeholder="Subject" />
                    </div>
                    <div class="col-12 py-3">
                        <textarea class="form-control fh5co_contacts_message" value="{{ old('message') }}" name="message" placeholder="Message">{{ old('message') }}</textarea>
                    </div>
                  <div class="col-12 py-3 text-center"> <input type="submit" value="Send Message" class="btn contact_btn" ></div>
                </form>
            </div>
            <div class="col-12 col-md-6 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3168.639290621062!2d-122.08624618469247!3d37.421999879825215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbe!4v1514861541665" class="map_sss" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
@section('title')
 Contact News
@endsection
