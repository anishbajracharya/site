<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @stack('metas')
    <!-- <title></title> -->
    <!-- Stylesheets -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/settings.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="/css/layers.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="/css/navigation.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="fav.ico"  type="image/x-icon">
    <link rel="icon" href="images/dt.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <meta name="google-site-verification" content="KVJWxwj2ZsM-F04iLb7nz6auUlp2BQAX2QR7DYldDT8" />
    <style>
        .pt0{
            padding-top: 0px !important;

        }
        .tp-leftarrow{
            display:none;
        }
        .tp-rightarrow{
            display:none;
        }
        input[type="tel"] {
            position: relative;
            display: block;
            width: 100%;
            line-height: 30px;
            padding: 10px 30px;
            height: 50px;
            color: #222222;
            font-size: 14px;
            border-radius: 5px;
            background-color: #ffffff;
            transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -webkit-transition: all 300ms ease;
            /* 333 277 */
        }

        @media only screen and (max-width: 767px){
        .test{
            top: 42px !important;
    text-align: left;
    /* width: max-content; */
    width: 168px!important;
        } 
        .good{
            margin-left: -181px;
            display: block;
            top: 43px;
            width: inherit;
        }      
        
        .main-menu .navigation > li > ul > li.dropdown > a:after {
    font-family: 'FontAwesome';
    content: "\f105";
    position: absolute;
    right: 10px;
    top: 12px;
    width: 10px;
    height: 20px;
    display: none !important;
    color: #292929;
    line-height: 20px;
    font-size: 16px;
    font-weight: normal;
    text-align: center;
    z-index: 5;
}
        .main-menu .navigation > li > ul > li > ul{
    position:absolute;
    margin:0px !important;
    padding:0px !important;
	left:100%;
    top:45!important;
    display: contents !important;
	width:217px;    /* change from 240px  */
	padding:0px;
	z-index:100;
	display:none;
	background:#ffffff;
	border-top:2px solid #035c73;
	-webkit-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-ms-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-o-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-moz-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
}
    
        }


         @media  (max-width: 768px){
            .size{
                height:255px !important; 
            }
            .training-text {
                    position: relative;
                    width: 214px;
                    /* right: -10px; */
                    left: 3%;
                    /* padding-left: 87px; */
                    padding-right: -3px;
                    margin-left: 22px;
}
            

        } 
        @media only screen and (max-width: 1024px){
            .size{
                height:300px !important; 
            }

    

}
            @media(max-width:425px)
            {
                .none
                {
                    display:none;
                }

                .training-text {
                    position: relative;
                    width: 214px;
                    right: -10px;
                    left: 10px;
                    /* padding-left: 87px; */
                    padding-right: -3px;
                    margin-left: 79px;
}
@media(max-width:375px)
            {
                .none
                {
                    display:none;
                }

                .training-text {
                    position: relative;
                    width: 214px;
                    right: -10px;
                    left: 10px;
                    /* padding-left: 87px; */
                    padding-right: -3px;
                    margin-left: 58px;
}
        @media(max-width:320px)
            {
                .none
                {
                    display:none;
                }

                .training-text {
                    position: relative;
                    width: 214px;
                    right: -10px;
                    left: 10px;
                    /* padding-left: 87px; */
                    padding-right: -3px;
                    margin-left: 32px;
}
            }


     
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145224433-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145224433-1');
        </script>
</head>

<body>
    <div class="page-wrapper">
    
        <!-- Preloader -->
        <div class="preloader"></div>
        
        <!-- Main Header-->
        @include('frontend._partials.header')
        <!--End Main Header -->
    	@yield('body')

        
         <!--Main Footer-->
        @include('frontend._partials.footer')
        <!--End Main Footer-->
        
    </div>
<!--End pagewrapper-->

<!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Revolution Slider-->
    <script src="/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/jquery.themepunch.tools.min.js"></script>
    <script src="/js/revolution.extension.actions.min.js"></script>
    <script src="/js/revolution.extension.carousel.min.js"></script>
    <script src="/js/revolution.extension.kenburn.min.js"></script>
    <script src="/js/revolution.extension.layeranimation.min.js"></script>
    <script src="/js/revolution.extension.migration.min.js"></script>
    <script src="/js/revolution.extension.navigation.min.js"></script>
    <script src="/js/revolution.extension.parallax.min.js"></script>
    <script src="/js/revolution.extension.slideanims.min.js"></script>
    <script src="/js/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>
    <!--End Revolution Slider-->
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script>
$('.remake').click(function(event){
    $(this).find('> ul').addClass("navopen");
 var active =$('.navopen');
if(active.length>0)
{
    active.hide();

}
  $('.test', this).toggle(); // p00f
    // }
    
});



     </script>
</body>

</html>