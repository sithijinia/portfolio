@extends('front-end.master')

@section('title')
About
@endsection

@section('body')
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
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                    DREAM
                    </h2>
                    <p>
                        My dream is to make living easier for those who continue fight for several essential things. I think making their life a little bit of easy will satisfy me for myself. I also want to be a role model for the female learners to make their way in productive sites of the society.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{asset('/')}}front-end/images/about/about.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-sm-12">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
        			<h2>
                    MISSION
                    </h2>
                    <p>
                        My mission is to give web services to the people and make some changes to the society. I also want to encourage women to be more interested in different technologies so that they can also be a part of it. I make small step towards my goal by learning something new everyday. This learning curve makes me stronger than before. It also helps me to apply new things to my work.
                    </p>
                </div>
        	</div>
        	<div class="col-md-6 col-sm-12">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
        			<h2>
                    VISION
                    </h2>
                    <p>
                        I want so see myself as an experienced web developer in any reputed company or under my country's government. I also want to grow myself as a diligent person.
                    </p>
                </div>
        	</div>
        </div>
    </div>
</section> <!-- /#about -->
@endsection