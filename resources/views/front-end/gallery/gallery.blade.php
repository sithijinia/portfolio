@extends('front-end.master')

@section('title')
Gallery
@endsection

@section('body')
<style>
	.gallery-img {
		margin-top: 20px;
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
                    <h2>About Me</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
	<div class="row">
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-1.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-2.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-3.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-4.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-5.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-6.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-1.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-2.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-3.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-4.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-5.jpg" alt=""></div>
		<div class="gallery-img col-sm-12 col-md-6 col-lg-4"><img class="img-responsive" src="{{asset('/')}}front-end/images/portfolio/item-6.jpg" alt=""></div>
	</div>
</div>
@endsection