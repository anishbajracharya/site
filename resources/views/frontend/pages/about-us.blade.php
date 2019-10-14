@extends('frontend.layouts.app')
@push('metas')
<title>Specialized Digital Marketing Company In Nepal | Digital Terai</title>

<meta name="description"
    content="As Specialized Digital Marketing company in Nepal, we help local businesses convert into online Brand with our expert team of SEO, SEM &amp;growth hackers." />
<link rel="canonical" href="http://digitalterai.com/about-us/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Specialized Digital Marketing Company In Nepal | Digital Terai" />
<meta property="og:description"
    content="As Specialized Digital Marketing company in Nepal, we help local businesses convert into online Brand with our expert team of SEO, SEM &amp;growth hackers.." />
<meta property="og:url" content="http://digitalterai.com/about-us/" />
<meta property="og:site_name" content="DIGITAL TERAI" />
<meta property="article:publisher" content="https://www.facebook.com/DigitalTerai/" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description"
    content="As Specialized Digital Marketing company in Nepal, we help local businesses convert into online Brand with our expert team of SEO, SEM &amp;growth hackers." />
<meta name="twitter:title" content="Specialized Digital Marketing Company In Nepal | Digital Terai" />
<meta name="twitter:site" content="@DigitalTerai" />
<meta name="twitter:creator" content="@DigitalTerai" />
<!-- custom css-->
<link rel="stylesheet" type="text/css" href="css/custom.css" />


<style>
    #whatwedo {
        width: 100%;
        max-width: 100%;
        height: auto;

    }


    #whatwedo .container-fluid {

        width: auto;
        margin-left: 100px;
        margin-right: 100px;
        border-right: 0;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;

        >.col,
        >[class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }
    }

    #whatwedo .col {
        /* width: calc(25% - 2rem); */
        /* margin: 1rem; */
        position: aboslute;
        border: 2px solid white;
        /* margin: 30px 0 30px 0; */
    }

    #whatwedo img {}


    #whatwedo h2 {

        position: relative;
        /* top: 50%; */
        /* left: 45%; */
        margin: 0 20px 0 20px;
        color: white;
        text-align: center;
        transform: translate(-50%, -50%)
    }

    .image {
        display: inline-block;
        width: 100%;
        height: auto;
        border-radius: 20px;
    }

    .mar {
        margin-bottom: 45px;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 15px;
        right: 0;
        height: 100%;
        width: 92%;
        opacity: 0;
        transition: .7s ease;
        background-color: rgba(0, 0, 0, 0);
        border-radius: 20px;
    }

    .col-md-4:hover .overlay {
        opacity: 4;
    }

    .text_2 {
        color: white;
        font-size: 15px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }

</style>

@endpush

@section('body')


<!--Page Title-->
<section class="page-title" style="background-image:url(images/pattern-5.png)">
    <div class="auto-container clearfix">
        <div class="content pull-left">
            <h1>About us</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>about-us</li>
            </ul>
        </div>
        <div class="image pull-right hvr-bounce-in">
            <img src="images/about-us02.png" alt="" class="none" style="
                      width: 377px;
                        float: inherit;
                        margin-top: -142px;" />
        </div>
    </div>
</section>
<!--End Page Title-->


<section class="traffic-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="image hvr-bob">
                    <img src="images/about-us.png" alt="">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <!-- <h2>Be on the top &amp; Get <br> more traffic to your website</h2> -->
                    <h2>Our Story</h2>
                    <div class="text">
                        <p> Having half a decade of experience working as a freelancer with National and International
                            clients,
                            we have helped 100’s of businesses boosting their leads and building brand online. Finally,
                            in 2018 we established ourselves
                            as a <span><a href="/">digital marketing agency in Nepal</a></span> , with a vision to grow
                            Nepali businesses on the web and promote digital marketing campaign.</p>
                    </div>
                    <ul class="list-style-one">
                        <li><span class="icon fa fa-upload"></span>
                            <p> Be on the top of Google</p>
                        </li>
                        <li><span class="icon fa fa-clock-o"></span>
                            <p>Save your time and let us handle it</p>
                        </li>
                        <li><span class="icon fa fa-desktop"></span>
                            <p>Cros-devices ability</p>
                        </li>
                        <li><span class="icon fa fa-star"></span>
                            <p></p>Be rewarded by our services</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>



{{-- below is for our team --}}
{{-- <section>
    <div class="autocontainer">
        <div class="clearfix">
            <div class="sec-title centered">
                <h2>Our Expert</h2>
            </div>

            <div class="container">

                <div class="col-md-4 mar">
                    <div class="cols">
                        <div class="row no-gutters">
                            <div class="">
                               
                                <img src="http://res.cloudinary.com/mrmw1974/image/upload/v1506013647/what_we_do1_tfckgo.jpg"
                                    class="image" style="width: 100%; height: 100%;">
                                    <h3 style="text-align: center;"><a href="#">John Martin</a></h3>
                                <div class="overlay">
                                    <div class="text_2">
                                        <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mar">
                        <div class="cols">
                            <div class="row no-gutters">
                                <div class="">
                                  
                                    <img src="http://res.cloudinary.com/mrmw1974/image/upload/v1506013647/what_we_do1_tfckgo.jpg"
                                        class="image" style="width: 100%; height: 100%;">
                                        <h3 style="text-align: center;"><a href="#">John Martin</a></h3>
                                    <div class="overlay">
                                        <div class="text_2">
                                            <ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mar">
                            <div class="cols">
                                <div class="row no-gutters">
                                    <div class="">
                                        
                                        <img src="http://res.cloudinary.com/mrmw1974/image/upload/v1506013647/what_we_do1_tfckgo.jpg"
                                            class="image" style="width: 100%; height: 100%;">
                                            <h3 style="text-align: center;"><a href="#">John Martin</a></h3>
                                        <div class="overlay">
                                            <div class="text_2">
                                                <ul class="social-icon-two">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mar">
                                <div class="cols">
                                    <div class="row no-gutters">
                                        <div class="">
                                            
                                            <img src="http://res.cloudinary.com/mrmw1974/image/upload/v1506013647/what_we_do1_tfckgo.jpg"
                                                class="image" style="width: 100%; height: 100%;">
                                                <h3 style="text-align: center;"><a href="#">John Martin</a></h3>
                                            <div class="overlay">
                                                <div class="text_2">
                                                    <ul class="social-icon-two">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mar">
                                    <div class="cols">
                                        <div class="row no-gutters">
                                            <div class="">
                                                
                                                <img src="http://res.cloudinary.com/mrmw1974/image/upload/v1506013647/what_we_do1_tfckgo.jpg"
                                                    class="image" style="width: 100%; height: 100%;">
                                                    <h3 style="text-align: center;"><a href="#">John Martin</a></h3>
                                                <div class="overlay">
                                                    <div class="text_2">
                                                        <ul class="social-icon-two">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

              

            </div>
        </div>

    </div>
</section> --}}






















<!-- <section class="team-section">
    	<div class="auto-container">
        	Sec Title-->
<!-- <div class="sec-title centered"> -->
<!-- <h2>Our Expert</h2> -->
<!-- <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative ap</div> -->
<!-- </div> -->
<!-- <div class="row clearfix"> -->

<!--Team Block-->
<!-- <div class="team-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box hvr-bob">
                    	<div class="image">
                        	<a href="#"><img src="images/experts.jpg" alt=""></a>
                        </div>
                        <div class="lower-box">
                        	<h3><a href="#">Nattasha</a></h3>
                            <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

<!--Team Block-->
<!-- <div class="team-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box hvr-bob">
                    	<div class="image">
                        	<a href="#"><img src="images/experts.jpg" alt=""></a>
                        </div>
                        <div class="lower-box">
                        	<h3><a href="#">John Martin</a></h3>
                            <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

<!--Team Block-->
<!-- <div class="team-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box hvr-bob">
                    	<div class="image">
                        	<a href="#"><img src="images/experts.jpg" alt=""></a>
                        </div>
                        <div class="lower-box">
                        	<h3><a href="#">Sandy Mitson</a></h3>
                            <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

<!-- <section class="services-section-two" style="background:darkgrey;"> -->
<!-- <div class="auto-container"> -->
<!-- Sec Title / Light -->


<!-- <div class="row clearfix"> -->

<!--Services Block Two-->
<!-- <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box wow fadeIn animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
                        <span class="icon"><img src="images/bibekcorp.jpg" alt="" class="circle"></span>
                    </div>
                    <h3 class="new_text">BIBEK DHAMI</h3>
                    <h3 class="cng" style="font-size: 13px;">Backend Developer</h3>

                    <ul class="social-icon-one cng ">
                                         <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-linkedin" ></span></a></li>
                                        <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-facebook" ></span></a></li>
                                       <li> <a href="https://twitter.com/DigitalTerai" style=" background-color: #00acee; border-radius: 55px;"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://plus.google.com/u/4/104344577678078117993" style=" background-color: red; border-radius: 55px;"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>



                </div>
            </div> -->

<!--Services Block Two-->
<!-- <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box wow fadeIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeIn;">
                        <span class="icon"><img src="images/sanzie.jpg" class="circle" alt="" style=""></span>
                    </div>
                    <h3 class="new_text">SANJAY PRAJAPATI</h3>
                    <h3 class="new_text cng" style="font-size: 13px;">Backend Developer</h3>
                    <ul class="social-icon-one cng ">
                                         <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-linkedin" ></span></a></li>
                                        <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-facebook" ></span></a></li>
                                       <li> <a href="https://twitter.com/DigitalTerai" style=" background-color: #00acee; border-radius: 55px;"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://plus.google.com/u/4/104344577678078117993" style=" background-color: red; border-radius: 55px;"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>


                </div>
            </div> -->

<!--Services Block Two-->
<!-- <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box wow fadeIn animated" data-wow-delay="600ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeIn;">
                        <span class="icon"><img src="images/sanjay.jpg" class="circle" alt=""></span>
                    </div>
                    <h3 class="new_text">SANJAY BHANDARI</h3>
                    <h3 class="new_text cng" style="font-size: 13px;">Backend Developer</h3>
                    <ul class="social-icon-one cng ">
                                         <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-linkedin" ></span></a></li>
                                        <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-facebook" ></span></a></li>
                                       <li> <a href="https://twitter.com/DigitalTerai" style=" background-color: #00acee; border-radius: 55px;"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://plus.google.com/u/4/104344577678078117993" style=" background-color: red; border-radius: 55px;"><span class="fa fa-google-plus"></span></a></li>
                                    </ul> -->
<!-- <a class="learn-more" href="/">Learn More <span class="fa fa-caret-right"></span></a> -->
<!-- </div> -->
<!-- </div> -->

<!--Services Block Two-->
<!-- <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box wow fadeIn animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">
                        <span class="icon"><img src="images/rikesh.jpg" class="circle" alt=""></span>
                    </div>
                    <h3 class="new_text">RIKESH SHAKYA</h3>
                    <h3 class="new_text cng" style="font-size: 13px;">Graphic Designer</h3>
                    <ul class="social-icon-one cng ">
                                         <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-linkedin" ></span></a></li>
                                        <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-facebook" ></span></a></li>
                                       <li> <a href="https://twitter.com/DigitalTerai" style=" background-color: #00acee; border-radius: 55px;"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://plus.google.com/u/4/104344577678078117993" style=" background-color: red; border-radius: 55px;"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>


                </div>
            </div> -->

<!--Services Block Two-->
<!-- <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box wow fadeIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeIn;">
                        <span class="icon"><img src="images/content-marketing.png" alt=""></span>
                    </div>
                    <h3><a href="/">JEEBIT MAHARJAN</a></h3>


                </div>
            </div> -->

<!--Services Block Two-->
<!-- <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box wow fadeIn animated" data-wow-delay="600ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeIn;">
                        <span class="icon"><img src="images/raju.jpg" class="circle" alt=""></span>
                    </div>
                    <h3 class="new_text">RAJU THAPA</h3>
                    <h3 class=" cng " style="font-size: 13px;">Frontend Developer</h3>
                    <ul class="social-icon-one cng ">
                                         <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-linkedin" ></span></a></li>
                                        <li ><a href="https://www.facebook.com/DigitalTerai" style="background-color:#3C5A99; border-radius: 55px;"><span class="fa fa-facebook" ></span></a></li>
                                       <li> <a href="https://twitter.com/DigitalTerai" style=" background-color: #00acee; border-radius: 55px;"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://plus.google.com/u/4/104344577678078117993" style=" background-color: red; border-radius: 55px;"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>

                </div>
            </div>


        </div>
    </div> -->
<!-- </section> -->

<!-- <div class="team-block col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">

                        </div>
                        <div class="lower-box">
                            <h3 class="new_text">OUR TEAM</h3>

                             -->
<!-- <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->
</section>
<div class="clearfix">

</div>
@include('frontend._partials.audit')

@include('frontend._partials.sponsers')
@include('frontend._partials.contact')
@endsection
