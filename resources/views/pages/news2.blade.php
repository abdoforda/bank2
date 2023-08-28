@extends('layouts.app') @php $news = App\News::paginate(10); @endphp @section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/news.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4"> @lang('Highness Investment LLC News') </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p class="text-start"> @lang('Be updated about all relevant market news and company updates in one spot. Stay up-to-date about our latest news, releases, recognitions, events, and promotions, market alerts, and much more.') </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container content">
            @foreach ($news as $item)
            <div class="row row-news">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 responsive-center-md"> <a
                        href="{{ $item->slug }}">
                        <div class="img-hover-zoom"> <img
                                src="{{ Voyager::image($item->image) }}"
                                alt="الأسهم الأوروبية تغلق منخفضة لكنها تحقق ثالث مكاسب أسبوعية على التوالي"> </div>
                    </a> </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> <a
                                href="{{ $item->slug }}">
                                <h3 class="text-start">
                                    {{ $item->getTranslatedAttribute('name', app()->getLocale()) }}
                                </h3>
                            </a> </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> <a
                                href="{{ $item->slug }}"
                                class="category float-start">{{ $item->cat->getTranslatedAttribute('name', app()->getLocale()) }}</a>
                            <div class="time float-start">{{ $item->created_at->diffForHumans() }}</div>
                            <div class="seperator float-start"></div>
                            <div class="by float-start">@lang('From Highness')</div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <p class="text-start">
                                {{ $item->getTranslatedAttribute('short_desc', app()->getLocale()) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <hr>
                </div>
            </div>
            @endforeach
            
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">{{ $news->links() }}</div>
            </div>
        </div>
    </section>
@endsection


@section('css')
    <style>
        

hr{box-sizing:content-box;height:0;overflow:visible;}
h3{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
a{color:#3490dc;text-decoration:none;background-color:transparent;}
a:hover{color:#1d68a7;text-decoration:underline;}
img{border-style:none;}
img{vertical-align:middle;}
h3{margin-bottom:.5rem;font-weight:500;line-height:1.2;}
h3{font-size:1.575rem;}
hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1);}


:focus{outline:0!important;}
.content .img-hover-zoom{overflow:hidden;}
.content .img-hover-zoom img{transition:transform .5s ease-in-out;}
.content .img-hover-zoom:hover img{transform:scale(1.5) rotate(25deg);}
.content h3{color:#f9b707;font-weight:700;font-size:30px;margin-top:8px;margin-bottom:13px;}
.content p{color:#f9b707;font-size:16px;margin-top:13px;margin-bottom:0;font-weight:400;}
.content p a{color:#f9b707;font-size:12px;}
.content img{width:100%;border:1px solid #c4c8dc;}
.content hr{border-top:7px solid #f2f2f4;margin-top:50px;margin-bottom:50px;}
.content a{text-decoration:none;}
.content a.category{text-align:center;border:1px solid #cacee2;color:#f9b707;padding:3px 20px;border-radius:5px;}
.content a.category:hover{color:#fff;background-color:#f9b707;border-color:#f9b707;}
.content .time{text-align:center;color:#f9b707;padding:3px 10px;margin-left:10px;}
.content .by{text-align:center;color:#f9b707;padding:3px 10px;margin-left:10px;}
.content .seperator{display:block;height:15px;width:3px;background-color:#eeefef;margin-left:10px;margin-top:8px;}

.content .time{float:right;margin-left:0;margin-right:10px;}
.content .seperator{float:right;margin-left:0;margin-right:10px;}
.content .by{float:right;margin-left:0;margin-right:10px;}
@media (max-width:992px){
.responsive-center-md{text-align:center!important;}
.content h3{font-size:30px;text-align:center!important;}
.content p{font-size:20px;text-align:center!important;}
.content img{max-width:350px;margin-bottom:20px;}
}
    </style>
@endsection