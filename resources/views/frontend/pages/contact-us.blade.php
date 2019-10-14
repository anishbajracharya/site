    @extends('frontend.layouts.app')
@push('metas')
    <title>Contact Digital terai | Free Web Marketing Consultation</title>

   <meta name="description" content="Get Free Web marketing consultation in Nepal. Contact Digital terai. Call (9863-992-04 NOW!"/>
	<link rel="canonical" href="https://digitalterai.com/contact-us" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Contact Digital terai | Free Web Marketing Consultation" />
	<meta property="og:description" content="Get Free Web marketing consultation in Nepal. Contact Digital terai. Call (9863-992-04 NOW!" />
	<meta property="og:url" content="https://digitalterai.com/contact-us" />
	<meta property="og:site_name" content="DIGITAL TERAI" />
	<meta property="article:publisher" content="https://www.facebook.com/DigitalTerai/" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Get Free Web marketing consultation in Nepal. Contact Digital terai. Call (9863-992-04 NOW!" />
	<meta name="twitter:title" content="Contact Digital terai | Free Web Marketing Consultation" />
	<meta name="twitter:site" content="@DigitalTerai" />
	<meta name="twitter:creator" content="@DigitalTerai" />
    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="css/custom.css"  />

@endpush

@section('body')
<!--Page Title-->
	<section class="page-title" style="background-image:url(images/pattern-5.png)">
		<div class="auto-container clearfix">
			<div class="content pull-left">
				<h1>Contact-us</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>contact-us</li>
				</ul>
			</div>
			<div class="image pull-right hvr-bounce-in">
				<img src="images/contact-us1.png" alt="" style="width: 379px;"  />
			</div>
		</div>
	</section>
	<section class="contact-section">
    	<div class="auto-container">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<h2>Send Message</h2>

                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="/send/email/contact" id="contact-form" novalidate="novalidate">
                                    {{ csrf_field() }}
                            <div class="row clearfix">

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="text" value="" placeholder="Name">
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Email">
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" value="" placeholder="Phone">
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="subject" value="" placeholder="Subject">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message1" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-one">Send Now</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!--End Contact Form-->

                </div>
                <!--Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<h2>Get In Touch</h2>
                    <div class="text"> </div>
                    <ul class="contact-info">
                    	<li><span class="icon-box flaticon-house-outline"></span><span>Kumaripati, Lalitpur, 44600</span> <br> DigitalTerai</li>
                        <li><span class="icon-box flaticon-smartphone-1"></span><span>+977-9863992047</span> <br> Mon-Fri. 10:00 am to 6:00 pm</li>
                        <li><span class="icon-box flaticon-e-mail-envelope"></span><span>Send Your Mail At</span> <br> sales@digitalterai.com</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
        <!--End Page Title-->
        @include('frontend._partials.google')

        <br>

		@include('frontend._partials.contact')


@endsection
