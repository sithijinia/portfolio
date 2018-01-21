@extends('front-end.master')

@section('title')
Contact
@endsection

@section('body')
<style>
	iframe {
		width: 100%;
		height: 400px;
	}
</style>
<!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{route('/')}}">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
    	<div class="row address-details">
            <div class="col-sm-12 col-md-4">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>Mohammadpur</h5>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>sithi.jinia@gmail.com</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+07 052 245 022</p>
                </div>
            </div>
        </div>
        <div class="container">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Me</h2>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.067929548733!2d90.35101527165489!3d23.764597991675064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9ba3d447%3A0x1babce9f1c6c95a3!2sMohammadpur%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1516556950080" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
    </div>
</section>  

@endsection