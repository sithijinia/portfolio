@extends('front-end.master')

@section('title')
Home
@endsection

@section('body')
<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>HI, MY NAME IS SABIKUN NAHAR <br> & I AM A WEB</span>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">DESIGNER</b>
                        <b>DEVELOPER</b>
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        WEB DEVELOPMENT IS MY PASSION
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offers From Me</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">WEB DEVELOPER</h4>
                        <p>I can develop web applications using PHP.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-keypad-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Web Design</h4>
                        <p>Certain web designing facts are known by me. Like, Bootstrap, jQuery</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Frameworks</h4>
                        <p>Laravel is the framework I use to develop web big apps.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->

@endsection