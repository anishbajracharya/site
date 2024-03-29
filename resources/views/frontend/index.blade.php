    @extends('frontend.layouts.app')
@push('metas')
<title>Top Digital Marketing Agency in Nepal - Digital Terai</title>

<!-- This site is optimized with the Yoast SEO plugin v11.2.1 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description"
    content="As a Top Digital marketing agency in Nepal, We help you turn your business into brand with our audience targeted &amp; conversion oriented marketing strategies." />
<link rel="canonical" href="http://digitalterai.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Top Digital Marketing Agency in Nepal - Digital Terai" />
<meta property="og:description"
    content="As a Top Digital marketing agency in Nepal, We help you turn your business into brand with our audience targeted &amp; conversion oriented marketing strategies." />
<meta property="og:url" content="http://digitalterai.com/" />
<meta property="og:site_name" content="DIGITAL TERAI" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description"
    content="As a Top Digital marketing agency in Nepal, We help you turn your business into brand with our audience targeted &amp; conversion oriented marketing strategies." />
<meta name="twitter:title" content="Top Digital Marketing Agency in Nepal - Digital Terai" />
<meta name="twitter:site" content="@DigitalTerai" />
<meta name="twitter:creator" content="@DigitalTerai" />

<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "Digital Marketing Agency Nepal",
        "image": "https://digitalterai.com/images/infographic.jpg",
        "telephone": "9863992047",
        "email": "sales@digitalterai.com",
        "address": {
            "@type": "PostalAddress",
            "addressRegion": "Kathmandu",
            "addressCountry": "Nepal"
        },
        "url": "https://digitalterai.com/"
    }

</script>


@endpush

@section('body')
<!--Main Slider-->
@include('frontend._partials.slider')
<!--End Main Slider-->
<section class="traffic-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <h2>Top Digital Marketing Agency Nepal</h2>
                    <div class="text justify" style="bottom: 5px;">As a leading Digital marketing agency in Nepal, we are committed to delivering
                        brand-specific, audience targeted and conversion oriented SEO, Web Design, Social media
                        marketing, Business branding & Online reputation management services to our clients to meet
                        their Digital marketing goals.
                        We call ourselves the innovative & problem-solving firm that gets your business to the next
                        level.</div>

                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="image hvr-bob">
                    <img src="images/infographic.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>


<section class="traffic-section pt0">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="image hvr-bob">
                    <img src="images/conversion-rate-optimization-1.png" alt="" />
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <h5 style="font-size: 35px;
    font-weight: 500;
    line-height: 1.2em;">We Don’t just Bring Traffic;<br> We Believe in Conversion</h5>
                    <div class="text justify" style="bottom: 5px;">Welcome to Digital Terai, one of the top digital marketing agency in Nepal
                        helping clients boost their sales & leads and grow their businesses online. Located at
                        Kathmandu, Nepal, We thrive to produce a tangible high ROI campaign for our clients. We love to
                        work closely with clients so that we can better get to know their business model, requirements &
                        their expectations in order to plan our strategies accordingly.</div>

                </div>
            </div>
        </div>
    </div>
</section>

<!--Services Section Two-->
@include('frontend._partials.services2')

<section class="services-section gray-bg">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h4 >Why <span class="theme_color">Digital Marketing</span> in Nepal ?</h4>
            {{-- <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative ap</div> --}}
        </div>
        <div class="row clearfix">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="list-style-one " style="    padding-left: 52px;
                    ">
                    <li><span class="icon fa fa-hand-o-right"></span>No more Pamphlets and Billboards</li>
                    <li><span class="icon fa fa-hand-o-right"></span>To establish and expand your business online</li>
                    <li><span class="icon fa fa-hand-o-right"></span>To reach a targeted audience</li>
                    <li><span class="icon fa fa-hand-o-right"></span>Result oriented Marketing channels</li>
                    <li><span class="icon fa fa-hand-o-right"></span>Budget Friendly Marketing</li>
                </ul>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="list-style-one" style="    padding-left: 71px;">
                    <li><span class="icon fa fa-hand-o-right"></span>Fast and Reliable Customer</li>
                    <li><span class="icon fa fa-hand-o-right"></span>Better Conversion Rate</li>
                    <li><span class="icon fa fa-hand-o-right"></span>High Return on Investment (ROI)</li>
                    <li><span class="icon fa fa-hand-o-right"></span>Measurable, flexible and dynamic form of Marketing
                    </li>
                    <li><span class="icon fa fa-hand-o-right"></span>Best Business Branding</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Services Section-->

<!--End Services Section Two-->
<!--Services Section-->
@include('frontend._partials.services')
<!--End Services Section-->

<!--Audit Form Section-->
@include('frontend._partials.audit')
<!--End Audit Form Section-->

<!--Traffic Section-->
@include('frontend._partials.traffic')

<!--End Traffic Section-->

<!--Gallery Section-->

<!--End Gallery Section-->

<!--Testimonial Section-->
<!--End Testimonial Section-->


<!--Fun Facts Section-->
<!--End Fun Facts Section-->

<!--News Section-->
@include('frontend._partials.recent-blogs')
<!--End News Section-->

<!--Sponsors Section-->
@include('frontend._partials.sponsers')
<!--End Sponsors Section-->

<!--Contact Info Section-->
@include('frontend._partials.contact')
<!--End Contact Info Section-->
<section class="custom_padding gray-bg">
    <div class="auto-container">
        <!--Sec Title-->

        <div class="row-sm-4 clearfix">
            <div class="col-md-6 col-md-6 col-xs-12">
                <h1 style="font-size: 2rem;">Digital Marketing Agency Nepal</h1>
            </div>

            <div class="col-md-6 col-md-6 col-xs-12">
                <h3>Digital Marketing Service Nepal</h3>
            </div>
        </div>
    </div>
</section>
@endsection
