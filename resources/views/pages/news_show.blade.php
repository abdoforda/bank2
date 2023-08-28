@extends('layouts.app') @section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/financial_news.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4"> @lang('News') </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p> {{ $new->getTranslatedAttribute('short_desc', app()->getLocale()) }} </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 responsive-center-md">
                            <h3 class="text-start"> {{ $new->getTranslatedAttribute('name', app()->getLocale()) }} </h3>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="category-section"> <a
                                    href="{{ $new->slug }}"
                                    class="category">{{ $new->cat->getTranslatedAttribute('name', app()->getLocale()) }}</a>
                                <div class="time">{{ $new->created_at->diffForHumans() }}</div>
                                <div class="seperator"></div>
                                <div class="by">@lang('From Highness')</div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 responsive-center-md"> <a
                                href="{{ Voyager::image($new->image) }}"
                                data-fancybox="gallery"
                                data-caption="{{ $new->getTranslatedAttribute('name', app()->getLocale()) }}"> <img
                                    src="{{ Voyager::image($new->image) }}"
                                    alt="{{ $new->getTranslatedAttribute('name', app()->getLocale()) }}"
                                    class="main-image"> </a> </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="social-media-share float-start">
                                <div class="social-media-title">
                                @lang('Share on social media')
                            </div>
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ $new->slug }}"
                                            target="_blank" class="icon icon_facebook"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?text={{ $new->slug }}"
                                            target="_blank" class="icon icon_twitter"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="https://t.me/share/url?url={{ $new->slug }}"
                                            target="_blank" class="icon icon_linkedin"><i class="fa fa-telegram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="news-content">
                                {!! $new->getTranslatedAttribute('content', app()->getLocale()) !!}
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <hr>
                            <section class="news-section">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 centered">
                                        <h3 class="text-start">@lang('Related topics')</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag"
                                            id="news-room-carousel">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                    style="">
                                                    @foreach ($new->cat->news()->paginate(3) as $item)
                                                    <div class="owl-item active me-2" style="width: 230px;">
                                                        <div class="item"> <a
                                                                href="{{ $item->slug }}"
                                                                class="news-link">
                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <img src="{{ Voyager::image($item->image) }}"
                                                                            alt="{{ $item->slug }}">
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <h4 class="news-title"> 
                                                                            {{ $item->getTranslatedAttribute('name', app()->getLocale()) }}
                                                                        </h4>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="news-date">
                                                                            {{ $item->created_at->diffForHumans() }}
                                                                        </div>
                                                                        <div class="news-source">
                                                                            @lang('From Highness')
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <p class="news-text">
                                                                            {{ $item->getTranslatedAttribute('short_desc', app()->getLocale()) }}
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 centered">
                                                                        <div class="arrow-up"></div>
                                                                    </div>
                                                                </div>
                                                            </a> </div>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                                    class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                                    type="button" role="presentation" class="owl-next"><span
                                                        aria-label="Next">›</span></button></div>
                                            <div class="owl-dots"><button role="button"
                                                    class="owl-dot"><span></span></button><button role="button"
                                                    class="owl-dot"><span></span></button><button role="button"
                                                    class="owl-dot active"><span></span></button><button role="button"
                                                    class="owl-dot"><span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="row">
                        @php
                            $cats = \App\CatNews::paginate(2);
                        @endphp
                        @foreach ($cats as $cat)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div id="widget_2">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 responsive-center-md">
                                        <h4>
                                            {{ $cat->getTranslatedAttribute('name', app()->getLocale()) }}
                                        </h4>
                                    </div>
                                </div>

                                @foreach ($cat->news()->paginate(4) as $new)
                                <div class="row row-news">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> <a
                                                    href="{{ $new->slug }}">
                                                    <h5>{{ $new->getTranslatedAttribute('name', app()->getLocale()) }}</h5>
                                                </a> </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="time">
                                                    {{ $new->created_at->diffForHumans() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <hr>
                                    </div>
                                </div>
                                @endforeach
                                



                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        
hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1);}


.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-twitter:before{content:"\f099";}
.fa-facebook:before{content:"\f09a";}
.fa-telegram:before{content:"\f2c6";}
.owl-carousel,.owl-carousel .owl-item{-webkit-tap-highlight-color:transparent;position:relative;}
.owl-carousel{display:none;width:100%;z-index:1;}
.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;touch-action:manipulation;-moz-backface-visibility:hidden;}
.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0;}
.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0,0,0);}
.owl-carousel .owl-item{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);}
.owl-carousel .owl-item{min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-touch-callout:none;}
.owl-carousel .owl-item img{display:block;width:100%;}
.owl-carousel .owl-nav.disabled{display:none;}
.owl-carousel.owl-loaded{display:block;}
.owl-carousel .owl-dot,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-nav .owl-prev{cursor:pointer;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.owl-carousel .owl-nav button.owl-next,.owl-carousel .owl-nav button.owl-prev,.owl-carousel button.owl-dot{background:0 0;color:inherit;border:none;padding:0!important;font:inherit;}
.owl-carousel.owl-drag .owl-item{-ms-touch-action:pan-y;touch-action:pan-y;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.owl-carousel.owl-rtl{direction:rtl;}
.owl-carousel.owl-rtl .owl-item{float:right;}
:focus{outline:0!important;}
.centered{text-align:center;}
#widget_2{padding:20px 20px;border:1px solid #cacee2;margin-bottom:30px;}
#widget_2 a{text-decoration:none;position:relative;display:block;}
#widget_2 a:hover h5{color:#f9b707;}
#widget_2 a:hover h5::before{content:"\f0da";font:normal normal normal 14px/1 FontAwesome;position:absolute;left:-12px;top:-2px;font-size:20px;}
#widget_2 h4{color:#f9b707;font-weight:700;margin-bottom:20px;}
#widget_2 hr{border-top:1px solid #f2f2f4;margin-top:20px;margin-bottom:20px;}
#widget_2 h5{color:#5d5d5e;font-weight:700;margin-bottom:0;font-size:15px;}
#widget_2 .time{margin-left:0;padding:0;margin-top:5px;color:#404041;font-size:13px;}
html[lang=ar] #widget_2 h4{text-align:right;}
html[lang=ar] #widget_2 h5{text-align:right;line-height:27px;}
html[lang=ar] #widget_2 a:hover h5::before{content:"\f0d9";left:auto;right:-12px;top:2px;font-size:20px;}
html[lang=ar] #widget_2 .time{margin-right:0;}
#widget_3{padding:20px 20px;border:1px solid #cacee2;margin-bottom:30px;}
#widget_3 a{text-decoration:none;position:relative;display:block;}
#widget_3 a:hover h5{color:#f9b707;}
#widget_3 a:hover h5::before{content:"\f0da";font:normal normal normal 14px/1 FontAwesome;position:absolute;left:-12px;top:-2px;font-size:20px;}
#widget_3 h4{color:#f9b707;font-weight:700;margin-bottom:20px;}
#widget_3 hr{border-top:1px solid #f2f2f4;margin-top:20px;margin-bottom:20px;}
#widget_3 h5{color:#5d5d5e;font-weight:700;margin-bottom:0;font-size:15px;}
#widget_3 .time{margin-left:0;padding:0;margin-top:5px;color:#404041;font-size:13px;}
html[lang=ar] #widget_3 h4{text-align:right;}
html[lang=ar] #widget_3 h5{text-align:right;line-height:27px;}
html[lang=ar] #widget_3 a:hover h5::before{content:"\f0d9";left:auto;right:-12px;top:2px;font-size:20px;}
html[lang=ar] #widget_3 .time{margin-right:0;}
#widget_5{padding:20px 20px;border:1px solid #cacee2;margin-bottom:30px;}
#widget_5 a{text-decoration:none;position:relative;display:block;}
#widget_5 a:hover h5{color:#f9b707;}
#widget_5 a:hover h5::before{content:"\f0da";font:normal normal normal 14px/1 FontAwesome;position:absolute;left:-12px;top:-2px;font-size:20px;}
#widget_5 h4{color:#f9b707;font-weight:700;margin-bottom:20px;}
#widget_5 hr{border-top:1px solid #f2f2f4;margin-top:20px;margin-bottom:20px;}
#widget_5 h5{color:#5d5d5e;font-weight:700;margin-bottom:0;font-size:15px;}
html[lang=ar] #widget_5 h4{text-align:right;}
html[lang=ar] #widget_5 h5{text-align:right;line-height:27px;}
html[lang=ar] #widget_5 a:hover h5::before{content:"\f0d9";left:auto;right:-12px;top:2px;font-size:20px;}

 .content{padding:70px 0;}
 .content h3{color:#f9b707;font-weight:700;font-size:30px;margin-top:0;margin-bottom:0;}
 .content p{color:#f9b707;font-size:16px;font-weight:400;}
 .content hr{border-top:7px solid #f2f2f4;margin-top:30px;margin-bottom:30px;}
 .content .category-section{margin:20px 0;display:inline-block;}
 .content img.main-image{width:100%;max-width:100%;}
 .content a.category{text-align:center;border:1px solid #cacee2;color:#f9b707;padding:3px 20px;border-radius:5px;float:left;text-decoration:none;}
 .content a.category:hover{color:#fff;background-color:#f9b707;border-color:#f9b707;}
 .content .time{text-align:center;color:#f9b707;padding:3px 10px;float:left;margin-left:10px;}
 .content .by{text-align:center;color:#f9b707;padding:3px 10px;float:left;margin-left:10px;}
 .content .seperator{float:left;display:block;height:15px;width:3px;background-color:#eeefef;margin-left:10px;margin-top:8px;}
 .content .social-media-title{color:#f9b707;font-weight:700;font-size:20px;margin-top:0;margin-bottom:10px;}
 .content .social-media-share{padding-top:30px;float:left;}
 .content .social-media-share ul{list-style-type:none;padding-left:0;margin-right:0;}
 .content .social-media-share ul li{float:left;margin-left:10px;}
 .content .social-media-share ul li:first-child{float:left;margin-left:0;}
 .content .social-media-share ul li a{color:#1b2429;width:30px;height:30px;display:block;text-align:center;padding-top:4px;border-radius:50%;background-color:#fafaf8;}
 .content .social-media-share ul li a i{font-size:15px;color:#fff;}
 .content .social-media-share ul li:nth-child(1) a{background-color:#485e92;}
 .content .social-media-share ul li:nth-child(1) a:hover{background-color:#40487b;}
 .content .social-media-share ul li:nth-child(2) a{background-color:#42acdc;}
 .content .social-media-share ul li:nth-child(2) a:hover{background-color:#3689af;}
 .content .social-media-share ul li:nth-child(3) a{background-color:#186895;}
 .content .social-media-share ul li:nth-child(3) a:hover{background-color:#135275;}
 .content .news-section{padding:0 0;padding-bottom:0;}
 .content .news-section h3{color:#f9b707;font-weight:700;font-size:30px;text-align:left;}
 .content .news-section #news-room-carousel{margin-top:30px;}
 .content .news-section #news-room-carousel img{width:100%;}
 .content .news-section #news-room-carousel h4.news-title{color:#929497;font-size:16px;font-weight:700;margin-top:15px;padding:0 5px;text-align:justify;}
 .content .news-section #news-room-carousel .news-date{color:#404041;font-size:12px;text-align:left;padding-left:5px;float:left;width:50%;}
 .content .news-section #news-room-carousel .news-date::after{content:"";width:1px;height:10px;background-color:#404041;display:block;float:right;margin-top:5px;margin-right:3px;}
 .content .news-section #news-room-carousel .news-source{color:#404041;font-size:12px;text-align:right;padding-right:5px;float:right;width:50%;}
 .content .news-section #news-room-carousel .news-text{padding:0 5px;color:#929497;font-size:13px;margin-top:6px;text-align:justify;}
 .content .news-section #news-room-carousel .news-text span{color:#929497;font-weight:700;}
 .content .news-section #news-room-carousel .item a{text-decoration:none;}
 .content .news-section #news-room-carousel .item a:hover h4.news-title, .content .news-section #news-room-carousel .item a:hover p.news-text{color:#f9b707;}
 .content .news-section #news-room-carousel .item a:hover p.news-text span{color:#23b446;}
 .content .news-section #news-room-carousel .arrow-up{margin:0 auto;width:0;height:0;border-left:12px solid transparent;border-right:12px solid transparent;border-bottom:12px solid transparent;}
 .content .news-section #news-room-carousel .item a:hover .arrow-up{border-bottom-color:#f9b707;}
 .content h3{text-align:right;}
 .content p{text-align:right;}
 .content a.category{float:right;}
 .content .time{float:right;margin-left:0;margin-right:10px;}
 .content .seperator{float:right;margin-left:0;margin-right:10px;}
 .content .by{float:right;margin-left:0;margin-right:10px;}
 .content .category-section{float:right;}
 .content img.main-image{float:right;}
 .content .social-media-share{float:right;}
 .content .social-media-share ul{float:right;padding-right:0;}
 .content .news-section #news-room-carousel h4.news-title{line-height:25px;}
 .content .news-section #news-room-carousel .news-date{text-align:right;padding-left:0;padding-right:5px;float:right;}
 .content .news-section #news-room-carousel .news-date::after{float:left;margin-right:3px;margin-left:3px;}
 .content .news-section #news-room-carousel .news-source{text-align:left;padding-right:0;padding-left:5px;float:left;}

@media (max-width:992px){
.responsive-center-md{text-align:center!important;}
 .content{padding-top:30px;}
 .content h3{font-size:30px;text-align:center!important;}
 .content p{font-size:20px;text-align:center!important;}
 .content .social-media-share{width:225px;margin:0 auto;float:none!important;margin-top:10px;margin-bottom:10px;text-align:center!important;}
 .content .social-media-share ul{padding-right:0;float:none!important;margin:0 auto!important;display:inline-block;}
}

    </style>

@if(app()->getLocale() == 'en')
<style>
    .content .social-media-share ul li{float:right;margin-right:10px;}
    .content .social-media-share ul {
    float: left;
    padding-left: 0;
}
.owl-carousel.owl-rtl .owl-item{float:left;}
.content a.category{float:left;}
 .content .time{float:left;margin-left:10;margin-right:0px;}
 .content .seperator{float:left;margin-left:10;margin-right:0px;}
 .content .by{float:left;margin-left:10;margin-right:0px;}
 .content .category-section{float:left;}
 .content img.main-image{float:left;}
 .content .social-media-share{float:left;}
 .content .social-media-share ul{float:left;padding-right:0;}
</style>
@endif
@endsection