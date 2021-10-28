@include ('includes.navbarNew')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@if($background !=null)
    <section class="breadcrumb-area section-padding " style="    position: relative;
        background-size: cover;
        background-position: center;
        z-index: 2;background: url('/images/{{$background->image}}')">

        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-content text-left">
                <div class="section-heading">
                    <h5 class="ribbon ribbon-lg ribbon-white mb-2">{{$background->title}}</h5>
                    <h2 class="section__title fs-45 lh-60 text-white">{{$background->body}}</h2>
                </div>
                <div class="breadcrumb-btn-box pt-40px pl-3">
                    <a href="#" class="btn-text text-white video-play-btn d-inline-flex align-items-center" data-fancybox data-src="{{$background->vidio}}">
                        <span class="icon-element icon-element-md pulse-btn mr-3"><i class="la la-play"></i></span>شاهد الفيديو
                    </a>
                </div>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <section class="about-area section--padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 w-50">
                    <div class="about-content pb-5 text-left">
                        <div class="section-heading">
                            <h2 class="section__title pb-3 lh-50">{{$background->subtitle}}</h2>
                            <p class="section__desc ">{{$background->subbody}}</p>
                        </div><!-- end section-heading -->

                    </div><!-- end about-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="generic-img-box generic-img-box-layout-2">
                        <div class="img__item img__item-1">
                            <img class="lazy" src="/images/{{$background->image1}}" data-src="/images/{{$background->image1}}" alt="About image">
                            <div class="generic-img-box-content">
                            </div>
                        </div>
                        <div class="img__item img__item-2">
                            <img class="lazy" src="/images/{{$background->image2}}" data-src="/images/{{$background->image2}}" alt="About image">
                            <div class="generic-img-box-content">
                            </div>
                        </div>
                        <div class="img__item img__item-3">
                            <img class="lazy" src="/images/{{$background->image3}}" data-src="/images/{{$background->image3}}" alt="About image">
                            <div class="generic-img-box-content">
                            </div>
                        </div>
                    </div><!-- end generic-img-box -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end about-area -->
@endif
<!--================================
        END HERO AREA
=================================-->



<!--======================================
       END FEATURE AREA
======================================-->

<section class="gallery-area section--padding">
    <div class="container">
        <div class="section-heading text-center">
            <h2 class="section__title">معرض الصور</h2>
        </div><!-- end section-heading -->
        <ul class="portfolio-filter pt-40px pb-40px">
            <li data-filter="*" class="active">الجميع</li>
            @if($GalleryFirst->count() >0)
                <li data-filter=".web-design">الأول</li>
            @endif
            @if($GallerySecond->count() >0)
                <li data-filter=".photography">الثاني</li>
            @endif
            @if($GalleryThird->count() >0)
                <li data-filter=".management">الثالث</li>
            @endif
            @if($GalleryForth->count() >0)
                <li data-filter=".advertising">الرابع</li>
            @endif


        </ul>
        <div class="row">
            <div class="col-lg-12">
                <div class="generic-portfolio-list row">
                    <div class="generic-portfolio-item col-lg-4 all">

                    </div><!-- end generic-portfolio-item -->
                    @if($GalleryFirst->count() >0)
                        @foreach($GalleryFirst as $item)
                            <div class="generic-portfolio-item col-lg-4 web-design">
                                <div class="generic-portfolio-content">
                                    <a class="portfolio-link" href="images/{{$item}}" data-fancybox="gallery" data-caption="Image 2">
                                        <img src="images/{{$item}}" alt="portfolio-image">
                                        <div class="icon-element icon-element-md">
                                            <i class="la la-plus"></i>
                                        </div>
                                    </a>
                                </div><!-- end generic-portfolio-content -->
                            </div><!-- end generic-portfolio-item -->
                        @endforeach
                    @endif

                    @if($GallerySecond->count() >0)
                        @foreach($GallerySecond as $item)
                            <div class="generic-portfolio-item col-lg-4 photography  ">
                                <div class="generic-portfolio-content">
                                    <a class="portfolio-link" href="images/{{$item}}" data-fancybox="gallery" data-caption="Image 2">
                                        <img src="images/{{$item}}" alt="portfolio-image">
                                        <div class="icon-element icon-element-md">
                                            <i class="la la-plus"></i>
                                        </div>
                                    </a>
                                </div><!-- end generic-portfolio-content -->
                            </div><!-- end generic-portfolio-item -->
                        @endforeach
                    @endif

                    @if($GalleryThird->count() >0)
                        @foreach($GalleryThird as $item)
                            <div class="generic-portfolio-item col-lg-4 management">
                                <div class="generic-portfolio-content">
                                    <a class="portfolio-link" href="images/{{$item}}" data-fancybox="gallery" data-caption="Image 2">
                                        <img src="images/{{$item}}" alt="portfolio-image">
                                        <div class="icon-element icon-element-md">
                                            <i class="la la-plus"></i>
                                        </div>
                                    </a>
                                </div><!-- end generic-portfolio-content -->
                            </div><!-- end generic-portfolio-item -->
                        @endforeach
                    @endif
                    @if($GalleryForth->count() >0)
                        @foreach($GalleryForth as $item)
                            <div class="generic-portfolio-item col-lg-4 advertising">
                                <div class="generic-portfolio-content">
                                    <a class="portfolio-link" href="images/{{$item}}" data-fancybox="gallery" data-caption="Image 2">
                                        <img src="images/{{$item}}" alt="portfolio-image">
                                        <div class="icon-element icon-element-md">
                                            <i class="la la-plus"></i>
                                        </div>
                                    </a>
                                </div><!-- end generic-portfolio-content -->
                            </div><!-- end generic-portfolio-item -->
                        @endforeach
                    @endif

                    {{--                    <div class="generic-portfolio-item col-lg-4 photography advertising">--}}
                    {{--                        <div class="generic-portfolio-content">--}}
                    {{--                            <a class="portfolio-link" href="/theme/images/img22.jpg" data-fancybox="gallery" data-caption="Image 3">--}}
                    {{--                                <img src="/theme/images/img22.jpg" alt="portfolio-image">--}}
                    {{--                                <div class="icon-element icon-element-md">--}}
                    {{--                                    <i class="la la-plus"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div><!-- end generic-portfolio-content -->--}}
                    {{--                    </div><!-- end generic-portfolio-item -->--}}
                    {{--                    <div class="generic-portfolio-item col-lg-4 development web-design">--}}
                    {{--                        <div class="generic-portfolio-content">--}}
                    {{--                            <a class="portfolio-link" href="/theme/images/img22.jpg" data-fancybox="gallery" data-caption="Image 4">--}}
                    {{--                                <img src="/theme/images/img22.jpg" alt="portfolio-image">--}}
                    {{--                                <div class="icon-element icon-element-md">--}}
                    {{--                                    <i class="la la-plus"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div><!-- end generic-portfolio-content -->--}}
                    {{--                    </div><!-- end generic-portfolio-item -->--}}
                    {{--                    <div class="generic-portfolio-item col-lg-4 advertising web-design">--}}
                    {{--                        <div class="generic-portfolio-content">--}}
                    {{--                            <a class="portfolio-link" href="/theme/images/img22.jpg" data-fancybox="gallery" data-caption="Image 5">--}}
                    {{--                                <img src="/theme/images/img22.jpg" alt="portfolio-image">--}}
                    {{--                                <div class="icon-element icon-element-md">--}}
                    {{--                                    <i class="la la-plus"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div><!-- end generic-portfolio-content -->--}}
                    {{--                    </div><!-- end generic-portfolio-item -->--}}
                    {{--                    <div class="generic-portfolio-item col-lg-4 photography management">--}}
                    {{--                        <div class="generic-portfolio-content">--}}
                    {{--                            <a class="portfolio-link" href="/theme/images/img22.jpg" data-fancybox="gallery" data-caption="Image 6">--}}
                    {{--                                <img src="/theme/images/img22.jpg" alt="portfolio-image">--}}
                    {{--                                <div class="icon-element icon-element-md">--}}
                    {{--                                    <i class="la la-plus"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div><!-- end generic-portfolio-content -->--}}
                    {{--                    </div><!-- end generic-portfolio-item -->--}}
                    {{--                    <div class="generic-portfolio-item col-lg-4 development web-design">--}}
                    {{--                        <div class="generic-portfolio-content">--}}
                    {{--                            <a class="portfolio-link" href="/theme/images/img22.jpg" data-fancybox="gallery" data-caption="Image 7">--}}
                    {{--                                <img src="/theme/images/img22.jpg" alt="portfolio-image">--}}
                    {{--                                <div class="icon-element icon-element-md">--}}
                    {{--                                    <i class="la la-plus"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div><!-- end generic-portfolio-content -->--}}
                    {{--                    </div><!-- end generic-portfolio-item -->--}}
                    {{--                    <div class="generic-portfolio-item col-lg-4 management photography advertising">--}}
                    {{--                        <div class="generic-portfolio-content">--}}
                    {{--                            <a class="portfolio-link" href="/theme/images/img22.jpg" data-fancybox="gallery" data-caption="Image 8">--}}
                    {{--                                <img src="/theme/images/img22.jpg" alt="portfolio-image">--}}
                    {{--                                <div class="icon-element icon-element-md">--}}
                    {{--                                    <i class="la la-plus"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div><!-- end generic-portfolio-content -->--}}
                    {{--                    </div><!-- end generic-portfolio-item -->--}}
                    {{--                    <div class="generic-portfolio-item col-lg-4 photography web-design">--}}
                    {{--                        <div class="generic-portfolio-content">--}}
                    {{--                            <a class="portfolio-link" href="/theme/images/img22.jpg" data-fancybox="gallery" data-caption="Image 9">--}}
                    {{--                                <img src="/theme/images/img22.jpg" alt="portfolio-image">--}}
                    {{--                                <div class="icon-element icon-element-md">--}}
                    {{--                                    <i class="la la-plus"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div><!-- end generic-portfolio-content -->--}}
                    {{--                    </div><!-- end generic-portfolio-item -->--}}
                    {{--            </div><!-- end portfolio-list -->   -->--}}
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
</section><!-- end gallery-area -->



<section class="client-logo-area section-padding position-relative overflow-hidden text-center" style="padding-bottom: 0px!important;">
    <div class="container">
        <h5 class="ribbon ribbon-lg mb-2">أخر الأخبار</h5>
        <h2 class="section__title">أحدث الأخبار والنشاطات في مدارس جيل المستقبل الخاصة</h2>
        <span class="section-divider"></span>
        <ul class="nav nav-tabs generic-tab justify-content-center pb-4" id="myTab" role="tablist">
            @if($haberCards1->count() >0)
                <li class="nav-item">
                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">أخر الأخبار</a>
                </li>
            @endif
            @if($haberCards2->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">النشاطات</a>
                </li>
            @endif
            @if($haberCards3->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="development-tab" data-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="false">الزيارات</a>
                </li>
            @endif
            @if($haberCards4->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="drawing-tab" data-toggle="tab" href="#drawing" role="tab" aria-controls="drawing" aria-selected="false">القرارات</a>
                </li>
            @endif
            @if($haberCards5->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">التعليمات الادارية</a>
                </li>
            @endif
        </ul>
    </div>
    <div class="card-content-wrapper bg-gray pt-50px pb-120px">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                        @foreach($haberCards1 as $haberCard1)
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="{!! route('haberCard.display', ['id' => $haberCard1->id]) !!}" class="d-block">
                                            <img class="card-img-top lazy" src="images/{{$haberCard1->image}}" data-src="images/{{$haberCard1->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard1->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard1->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard1->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard1->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-labels p-2">
                                        <a style="float: left" href="{!! route('haberCard.display', ['id' => $haberCard1->id]) !!}">
                                            <span class="p-b-4">  @lang("read more..")<br></span> </a>

                                    </div>

                                </div><!-- end card -->
                            </div>
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="row">
                        @foreach($haberCards2 as $haberCard2)
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                    <div class="card-image">
                                        <a href="{!! route('haberCard.display', ['id' => $haberCard2->id]) !!}" class="d-block">
                                            <img class="card-img-top lazy" src="images/{{$haberCard2->image}}" data-src="images/{{$haberCard2->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard2->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard2->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard2->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard2->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-labels p-2">
                                        <a style="float: left" href="{!! route('haberCard.display', ['id' => $haberCard2->id]) !!}">
                                            <span class="p-b-4">  @lang("read more..")<br></span> </a>

                                    </div>

                                </div><!-- end card -->
                            </div>
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                    <div class="row">

                        @foreach($haberCards3 as $haberCard3)
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                    <div class="card-image">
                                        <a href="{!! route('haberCard.display', ['id' => $haberCard3->id]) !!}" class="d-block">
                                            <img class="card-img-top lazy" src="images/{{$haberCard3->image}}" data-src="images/{{$haberCard3->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard3->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard3->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard3->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard3->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-labels p-2">
                                        <a style="float: left" href="{!! route('haberCard.display', ['id' => $haberCard3->id]) !!}">
                                            <span class="p-b-4">  @lang("read more..")<br></span> </a>

                                    </div>

                                </div><!-- end card -->
                            </div>
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="drawing" role="tabpanel" aria-labelledby="drawing-tab">
                    <div class="row">
                        @foreach($haberCards4 as $haberCard4)
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                    <div class="card-image">
                                        <a href="{!! route('haberCard.display', ['id' => $haberCard4->id]) !!}" class="d-block">
                                            <img class="card-img-top lazy" src="images/{{$haberCard4->image}}" data-src="images/{{$haberCard4->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard4->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard4->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard4->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard4->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-labels p-2">
                                        <a style="float: left" href="{!! route('haberCard.display', ['id' => $haberCard4->id]) !!}">
                                            <span class="p-b-4">  @lang("read more..")<br></span> </a>

                                    </div>

                                </div><!-- end card -->
                            </div>
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                    <div class="row">
                        @foreach($haberCards5 as $haberCard5)
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                    <div class="card-image">
                                        <a href="{!! route('haberCard.display', ['id' => $haberCard5->id]) !!}" class="d-block">
                                            <img class="card-img-top lazy" src="images/{{$haberCard5->image}}" data-src="images/{{$haberCard5->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard5->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard5->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard5->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard5->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-labels p-2">
                                        <a style="float: left" href="{!! route('haberCard.display', ['id' => $haberCard5->id]) !!}">
                                            <span class="p-b-4">  @lang("read more..")<br></span> </a>

                                    </div>

                                </div><!-- end card -->
                            </div>
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->

        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
    <!-- end container -->
</section>




@include ('includes.footerNew')



<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

