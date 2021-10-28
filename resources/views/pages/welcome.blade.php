@include ('includes.navbarNew')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<section class="hero-area">
    <div class="hero-slider owl-action-styled">
        <div class="hero-slider-item hero-bg-1">
            <div class="container">
                <div class="hero-content text-left">
                    <div class="section-heading">
                        <h2 class="section__title text-white fs-65 lh-80 pb-3"> {{ $backgrounds[0]->title }}</h2>
                        <p class="section__desc text-white pb-4">{{ $backgrounds[0]->description }}
                        </p>
                    </div><!-- end section-heading -->

                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        @if($backgrounds[0]->link)
                        <a href="{{ $backgrounds[0]->link }}" class="btn theme-btn mr-4 mb-4">{{ $backgrounds[0]->linktitle }} <i class="la la-arrow-right icon ml-1"></i></a>
                        @endif
                            @if($backgrounds[0]->video)
                        <a href="#" class="btn-text video-play-btn mb-4" data-fancybox data-src="{{ $backgrounds[0]->video }}">
                            مشاهدة المعاينة<i class="la la-play icon-btn ml-2"></i>
                            @endif
                        </a>
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-slider-item -->
        <div class="hero-slider-item hero-bg-2">
            <div class="container">
                <div class="hero-content text-right">
                    <div class="section-heading">
                        <h2 class="section__title text-white fs-65 lh-80 pb-3">{{ $backgrounds[1]->title }}</h2>
                        <p class="section__desc text-white pb-4">{{ $backgrounds[1]->description }}
                        </p>
                    </div>
                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1 justify-content-end">
                        @if( $backgrounds[1]->video )
                        <a href="{{ $backgrounds[1]->video }}" class="btn-text video-play-btn mr-4 mb-4" data-fancybox data-src="{{ $backgrounds[1]->video }}">
                            <i class="la la-play icon-btn mr-2"></i>مشاهدة المعاينة
                        </a>
                        @endif
                            @if( $backgrounds[1]->link )
                        <a href="#" class="btn theme-btn mb-4"><i class="la la-arrow-left icon mr-1">

                            </i>{{ $backgrounds[1]->linktitle }}</a>
                            @endif
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- container -->
        </div><!-- end hero-slider-item -->
        <div class="hero-slider-item hero-bg-3">
            <div class="container">
                <div class="hero-content text-left">
                    <div class="section-heading">
                        <h2 class="section__title text-white fs-65 lh-80 pb-3"> {{ $backgrounds[2]->title }}</h2>
                        <p class="section__desc text-white pb-4">{{ $backgrounds[2]->description }}
                        </p>
                    </div><!-- end section-heading -->

                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        @if($backgrounds[2]->link)
                            <a href="{{ $backgrounds[2]->link }}" class="btn theme-btn mr-4 mb-4">{{ $backgrounds[2]->linktitle }}
                                <i class="la la-arrow-right icon ml-1"></i></a>
                        @endif
                        @if($backgrounds[2]->video)
                            <a href="#" class="btn-text video-play-btn mb-4" data-fancybox data-src="{{ $backgrounds[2]->video }}">
                                مشاهدة المعاينة<i class="la la-play icon-btn ml-2"></i>
                                @endif
                            </a>
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-slider-item -->
        <div class="hero-slider-item hero-bg-4">
            <div class="container">
                <div class="hero-content text-left">
                    <div class="section-heading">
                        <h2 class="section__title text-white fs-65 lh-80 pb-3"> {{ $backgrounds[3]->title }}</h2>
                        <p class="section__desc text-white pb-4">{{ $backgrounds[3]->description }}
                        </p>
                    </div><!-- end section-heading -->

                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        @if($backgrounds[3]->link)
                            <a href="{{ $backgrounds[3]->link }}" class="btn theme-btn mr-4 mb-4">{{ $backgrounds[3]->linktitle }}
                                <i class="la la-arrow-right icon ml-1"></i></a>
                        @endif
                        @if($backgrounds[3]->video)
                            <a href="#" class="btn-text video-play-btn mb-4" data-fancybox data-src="{{ $backgrounds[3]->video }}">
                                مشاهدة المعاينة<i class="la la-play icon-btn ml-2"></i>
                                @endif
                            </a>
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-slider-item -->
        <div class="hero-slider-item hero-bg-5">
            <div class="container">
                <div class="hero-content text-right">
                    <div class="section-heading">
                        <h2 class="section__title text-white fs-65 lh-80 pb-3">{{ $backgrounds[4]->title }}</h2>
                        <p class="section__desc text-white pb-4">{{ $backgrounds[4]->description }}
                        </p>
                    </div>
                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1 justify-content-end">
                        @if( $backgrounds[4]->video )
                            <a href="{{ $backgrounds[4]->video }}" class="btn-text video-play-btn mr-4 mb-4" data-fancybox data-src="{{ $backgrounds[4]->video }}">
                                <i class="la la-play icon-btn mr-2"></i>مشاهدة المعاينة
                            </a>
                        @endif
                        @if( $backgrounds[4]->link )
                            <a href="#" class="btn theme-btn mb-4"><i class="la la-arrow-left icon mr-1">

                                </i>{{ $backgrounds[4]->linktitle }}</a>
                        @endif
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- container -->
        </div><!-- end hero-slider-item -->
    </div><!-- end hero-slide -->
</section><!-- end hero-area -->
<!--================================
        END HERO AREA
=================================-->

<!--======================================
        START FEATURE AREA
 ======================================-->
<section class="feature-area pb-90px">
    <div class="container">
        <div class="row feature-content-wrap">
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-1" width="41" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"/>
                                        </g>
                                    </g>
                            <g>
                                <g>
                                    <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                                C426.667,241.643,412.309,256,394.667,256z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                                C129.515,241.643,115.157,256,97.515,256z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"
                                    />
                                </g>
                            </g>
                            </svg>
                    </div>
                    <h3 class="info__title">نخبة من المدرسين</h3>
                    <p class="info__text">نخبة من المدرسين المخضرمين ترافق أبنائكم خلال رحلتهم الدراسية </p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-2" viewBox="0 0 74 74" width="45" xmlns="http://www.w3.org/2000/svg"><path d="m31.841 26.02a1 1 0 0 1 -.52-1.855l2.59-1.57a1 1 0 1 1 1.037 1.71l-2.59 1.57a1 1 0 0 1 -.517.145z"/><path d="m57.42 58.09a.985.985 0 0 1 -.294-.045l-20.09-6.179a1 1 0 0 1 -.546-1.5l26.054-40.382-39.324 38.55a1 1 0 0 1 -1.087.208l-16.76-7.03a1 1 0 0 1 -.131-1.777l11.358-6.871a1 1 0 0 1 1.035 1.711l-9.675 5.853 14.334 6.013 39.106-38.341-20.363 12.316a1 1 0 0 1 -1.037-1.716l27.709-16.747a1 1 0 0 1 .372-.14s0 0 0 0a.986.986 0 0 1 .156-.013 1 1 0 0 1 .609.206l.079.067a1 1 0 0 1 .312.713 1.023 1.023 0 0 1 -.023.227l-10.814 54.073a1 1 0 0 1 -.98.8zm-18.533-7.747 17.769 5.466 9.572-47.844z"/><path d="m23.221 31.23a1 1 0 0 1 -.519-1.856l2.53-1.53a1 1 0 0 1 1.036 1.712l-2.531 1.53a1 1 0 0 1 -.516.144z"/><path d="m28.7 72h-.072a1 1 0 0 1 -.894-.74l-6.178-23.184a1 1 0 1 1 1.931-.515l5.438 20.389 7.488-17.435a1 1 0 1 1 1.838.789l-8.629 20.096a1 1 0 0 1 -.922.6z"/><path d="m28.709 72a1 1 0 0 1 -.736-1.677l16.092-17.515a1 1 0 0 1 1.473 1.354l-16.093 17.515a1 1 0 0 1 -.736.323z"/></svg>
                    </div>
                    <h3 class="info__title">تواصل مستمر</h3>
                    <p class="info__text">ستبقون على اطلاع كامل وتواصل مستمر لتعرفون كافة المستجدات خلال رحلة عمر فلذات اكبادكم</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-3" viewBox="0 0 74 74" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m23.8 23.84a1 1 0 0 1 -.294-1.956l5.96-1.84a1 1 0 0 1 .59 1.912l-5.956 1.844a.981.981 0 0 1 -.3.04z"/><path d="m37 43.84a1.009 1.009 0 0 1 -.37-.071l-34-13.561a1 1 0 0 1 .07-1.883l5.29-1.64a1 1 0 0 1 .592 1.91l-2.592.8 31.01 12.368 25.9-10.325a1.015 1.015 0 0 1 .12-.057l4.98-1.981-31-9.593-2.165.669a1 1 0 1 1 -.59-1.912l2.46-.76a1 1 0 0 1 .59 0l34 10.52a1 1 0 0 1 .075 1.884l-7.49 2.982a.95.95 0 0 1 -.12.058l-26.39 10.521a1.009 1.009 0 0 1 -.37.071z"/><path d="m13.069 27.161a1 1 0 0 1 -.3-1.956l5.951-1.841a1 1 0 1 1 .59 1.911l-5.95 1.841a1.013 1.013 0 0 1 -.291.045z"/><path d="m16.8 47.849a1 1 0 0 1 -1-1v-12.064a1 1 0 1 1 2 0v12.064a1 1 0 0 1 -1 1z"/><path d="m57.188 47.849a1 1 0 0 1 -1-1v-12.064a1 1 0 0 1 2 0v12.064a1 1 0 0 1 -1 1z"/><path d="m37 56.239c-11.884 0-21.193-4.123-21.193-9.386a1 1 0 1 1 2 0c0 3.493 7.882 7.386 19.193 7.386s19.193-3.893 19.193-7.386a1 1 0 1 1 2 0c0 5.263-9.309 9.386-21.193 9.386z"/><path d="m63.393 44.387a1 1 0 0 1 -1-1v-10.2l-25.529-3.5a1 1 0 1 1 .272-1.982l26.393 3.615a1 1 0 0 1 .864.991v11.076a1 1 0 0 1 -1 1z"/><path d="m66.406 49.5h-5.687a1 1 0 0 1 -.978-1.211l.736-3.411a3.156 3.156 0 0 1 6.171 0l.736 3.411a1 1 0 0 1 -.978 1.211zm-4.448-2h3.209l-.474-2.2a1.157 1.157 0 0 0 -2.261 0z"/></svg>
                    </div>
                    <h3 class="info__title">رحلة تعليمية مميزة</h3>
                    <p class="info__text">رحلتنا التعليمية مستمرة معكم من الحضانة حتى الشهادة الثانوية</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end feature-area -->
<!--======================================
       END FEATURE AREA
======================================-->
@if($backgrounds[5]->title)
<section class="hero-area position-relative hero-area-3">
    <div class="hero-slider-item hero-bg-6">
        <div class="container">
            <div class="row">
                <!-- end col-lg-7 -->
                @if($icons->count()>0)
                <div class="col-lg-12">
                    <div class="row hero-category-wrap">
                        <!-- end col-lg-4 -->
                        @foreach($icons as $item)

                        <div class="col-lg-2 responsive-column-half">
                            <div class="category-item category-item-layout-2">
                                <a href="{{$item->link}}" class="category-content">
                                    <div class="icon-element icon-element-md shadow-sm text-color-6">
                                        <i class="{{$item->icon}}"></i>
                                    </div>
                                    <h3 class="cat__title fs-16">{{$item->title}}</h3>
                                </a>
                                <!-- end category-content -->
                            </div>
                            <!-- end category-item -->
                        </div>
                    @endforeach
                        <!-- end col-lg-4 -->
                    </div>
                    <!-- end row -->
                </div>
                @endif
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end hero-slider-item -->
</section>
@endif
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

<section class="client-logo-area section-padding position-relative overflow-hidden text-center">
<div class="container">
    <h5 class="ribbon ribbon-lg mb-2">الكادر</h5>
    <h2 class="section__title">الكادر التدريسي والاداري</h2>
    <span class="section-divider"></span>
    <ul class="nav nav-tabs generic-tab justify-content-center pb-4" id="myTab" role="tablist">
        @if($mangement->count() >0)
            <li class="nav-item">
                <a class="nav-link active" id="mangement-tab" data-toggle="tab" href="#mangement" role="tab" aria-controls="mangement" aria-selected="true">الادارة
                </a>
            </li>
        @endif
        @if($Tedmangement->count() >0)
            <li class="nav-item">
                <a class="nav-link" id="Tedmangement-tab" data-toggle="tab" href="#Tedmangement" role="tab" aria-controls="design" aria-selected="false">المركز التدريبي</a>
            </li>
        @endif
        @if($BabeMangement->count() >0)
            <li class="nav-item">
                <a class="nav-link" id="BabeMangement-tab" data-toggle="tab" href="#BabeMangement" role="tab" aria-controls="BabeMangement" aria-selected="false">الحضانة</a>
            </li>
        @endif
        @if($PreMangement->count() >0)
            <li class="nav-item">
                <a class="nav-link" id="PreMangement-tab" data-toggle="tab" href="#PreMangement" role="tab" aria-controls="PreMangement" aria-selected="false">الروضة</a>
            </li>
        @endif
        @if($FirstMangement->count() >0)
            <li class="nav-item">
                <a class="nav-link" id="FirstMangement-tab" data-toggle="tab" href="#FirstMangement" role="tab" aria-controls="FirstMangement" aria-selected="false">الابتدائي</a>
            </li>
        @endif
            @if($SecondMangement->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="SecondMangement-tab" data-toggle="tab" href="#SecondMangement" role="tab" aria-controls="SecondMangement" aria-selected="false">الاعدادي</a>
                </li>
            @endif
            @if($ThirdMangement->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="ThirdMangement-tab" data-toggle="tab" href="#ThirdMangement" role="tab" aria-controls="ThirdMangement" aria-selected="false">الثانوي</a>
                </li>
            @endif
            @if($OnlineMangement->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="OnlineMangement-tab" data-toggle="tab" href="#OnlineMangement" role="tab" aria-controls="OnlineMangement" aria-selected="false">المدرسة الافتراضية</a>
                </li>
            @endif
    </ul>
</div>
<div class="card-content-wrapper bg-gray pt-50px pb-120px">
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="mangement" role="tabpanel" aria-labelledby="mangement-tab">
                <div class="row">

                    @foreach($mangement as $item)
                        <div class="col-lg-3 responsive-column-half">
                            <div class="card card-item member-card text-center">
                                <div class="card-image">
                                    <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                                    <p class="card-text">{{$item->title}}</p>

                                    <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                                </div>
                            </div><!-- end card -->
                        </div><!-- end col-lg-3 -->

                    @endforeach
                </div><!-- end row -->
            </div><!-- end tab-pane -->
            <div class="tab-pane fade" id="Tedmangement" role="tabpanel" aria-labelledby="Tedmangement-tab">
                <div class="row">
                    @foreach($Tedmangement as $item)
                        <div class="col-lg-3 responsive-column-half">
                            <div class="card card-item member-card text-center">
                                <div class="card-image">
                                    <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                                    <p class="card-text">{{$item->title}}</p>

                                    <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                                </div>
                            </div><!-- end card -->
                        </div><!-- end col-lg-3 -->

                    @endforeach
                </div><!-- end row -->
            </div><!-- end tab-pane -->
            <div class="tab-pane fade" id="BabeMangement" role="tabpanel" aria-labelledby="BabeMangement-tab">
                <div class="row">

                    @foreach($BabeMangement as $item)
                        <div class="col-lg-3 responsive-column-half">
                            <div class="card card-item member-card text-center">
                                <div class="card-image">
                                    <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                                    <p class="card-text">{{$item->title}}</p>

                                    <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                                </div>
                            </div><!-- end card -->
                        </div><!-- end col-lg-3 -->

                    @endforeach
                </div><!-- end row -->
            </div><!-- end tab-pane -->
            <div class="tab-pane fade" id="PreMangement" role="tabpanel" aria-labelledby="PreMangement-tab">
                <div class="row">
                    @foreach($PreMangement as $item)
                        <div class="col-lg-3 responsive-column-half">
                            <div class="card card-item member-card text-center">
                                <div class="card-image">
                                    <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                                    <p class="card-text">{{$item->title}}</p>

                                    <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                                </div>
                            </div><!-- end card -->
                        </div><!-- end col-lg-3 -->

                    @endforeach
                </div><!-- end row -->
            </div><!-- end tab-pane -->
            <div class="tab-pane fade" id="FirstMangement" role="tabpanel" aria-labelledby="FirstMangement-tab">
                <div class="row">
                    @foreach($FirstMangement as $item)
                        <div class="col-lg-3 responsive-column-half">
                            <div class="card card-item member-card text-center">
                                <div class="card-image">
                                    <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                                    <p class="card-text">{{$item->title}}</p>

                                    <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                                </div>
                            </div><!-- end card -->
                        </div><!-- end col-lg-3 -->

                    @endforeach
                </div><!-- end row -->
            </div><!-- end tab-pane -->

        <div class="tab-pane fade" id="SecondMangement" role="tabpanel" aria-labelledby="SecondMangement-tab">
            <div class="row">
                @foreach($SecondMangement as $item)
                    <div class="col-lg-3 responsive-column-half">
                        <div class="card card-item member-card text-center">
                            <div class="card-image">
                                <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                                <p class="card-text">{{$item->title}}</p>

                                <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                            </div>
                        </div><!-- end card -->
                    </div><!-- end col-lg-3 -->

                @endforeach
            </div><!-- end row -->
        </div><!-- end tab-pane -->
     <div class="tab-pane fade" id="ThirdMangement" role="tabpanel" aria-labelledby="ThirdMangement-tab">
        <div class="row">
            @foreach($ThirdMangement as $item)
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                            <p class="card-text">{{$item->title}}</p>

                            <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                        </div>
                    </div><!-- end card -->
                </div><!-- end col-lg-3 -->

            @endforeach
        </div><!-- end row -->
    </div><!-- end tab-pane -->

<div class="tab-pane fade" id="OnlineMangement" role="tabpanel" aria-labelledby="OnlineMangement-tab">
    <div class="row">
        @foreach($OnlineMangement as $item)
            <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/{{$item->image}}" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="teacher-detail.html">{{$item->name}}</a></h5>
                        <p class="card-text">{{$item->title}}</p>

                        <a href="{!! route('employe.display', ['id' => $item->id]) !!}" class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3">عرض الصفحة الشخصية <i class="la la-arrow-right icon ml-1"></i></a>

                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->

        @endforeach
    </div><!-- end row -->
</div><!-- end tab-pane -->
        </div><!-- end tab-content -->
        </div><!-- end tab-content -->
        </div><!-- end tab-content -->

<!-- end container -->
</section>
<!-- end hero-area -->
<!--================================
END HERO AREA
=================================-->
<!--================================
     START TESTIMONIAL AREA
=================================-->
@if($parentsRate->count() >0)

<section class="testimonial-area section-padding">
    <div class="container-fluid">
        <div class="section-heading text-center">
            <h5 class="ribbon ribbon-lg mb-2">الشهادات - التوصيات</h5>
            <h2 class="section__title">ملاحظات الأهالي</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->
    </div><!-- end container -->
    <div class="container-fluid">
        <div class="testimonial-carousel owl-action-styled">
            @foreach($parentsRate as $item)
                <div class="card card-item">
                    <div class="card-body">
                        <div class="media media-card align-items-center pb-3">
                            <div class="media-img avatar-md">
                                <img src="theme/images/931481099.png" alt="Testimonial avatar" class="rounded-full">
                            </div>
                            <div class="media-body">
                                <h5>{{$item->user_name}}</h5>
                                <div class="d-flex align-items-center pt-1">
                                    <span class="lh-18 pr-2">ولي أمر</span>
                                    <div class="review-stars">
                                        @for($i=0; $i<(int)$item->star; $i++)
                                            <span class="la la-star"></span>
                                        @endfor
                                        @for($i=(int)$item->star; $i<5; $i++)
                                            <span class="lar la-star"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <p class="card-text">
                            {{ $item->description }}
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            @endforeach

        </div><!-- end testimonial-carousel -->
    </div><!-- container-fluid -->
</section><!-- end testimonial-area -->
@endif
@if($teachersRate->count() >0)
<section class="testimonial-area section-padding">
    <div class="container-fluid">
        <div class="section-heading text-center">
            <h5 class="ribbon ribbon-lg mb-2">الشهادات - التوصيات</h5>
            <h2 class="section__title">ملاحظات المعلمين</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->
    </div><!-- end container -->
    <div class="container-fluid">
        <div class="testimonial-carousel owl-action-styled">
            @foreach($teachersRate as $item)
                <div class="card card-item">
                    <div class="card-body">
                        <div class="media media-card align-items-center pb-3">
                            <div class="media-img avatar-md">
                                <img src="theme/images/931481099.png" alt="Testimonial avatar" class="rounded-full">
                            </div>
                            <div class="media-body">
                                <h5>{{$item->user_name}}</h5>
                                <div class="d-flex align-items-center pt-1">
                                    <span class="lh-18 pr-2">مدرس</span>
                                    <div class="review-stars">
                                        @for($i=0; $i<(int)$item->star; $i++)
                                            <span class="la la-star"></span>
                                        @endfor
                                        @for($i=(int)$item->star; $i<5; $i++)
                                            <span class="lar la-star"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <p class="card-text">
                            {{ $item->description }}
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            @endforeach

        </div><!-- end testimonial-carousel -->
    </div><!-- container-fluid -->
</section><!-- end testimonial-area -->
@endif

@if($studentsRate->count() >0)
<section class="testimonial-area section-padding">
    <div class="container-fluid">
        <div class="section-heading text-center">
            <h5 class="ribbon ribbon-lg mb-2">الشهادات - التوصيات</h5>
            <h2 class="section__title">ملاحظات الطلاب</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->
    </div><!-- end container -->
    <div class="container-fluid">
        <div class="testimonial-carousel owl-action-styled">
            @foreach($studentsRate as $item)
                <div class="card card-item">
                    <div class="card-body">
                        <div class="media media-card align-items-center pb-3">
                            <div class="media-img avatar-md">
                                <img src="theme/images/931481099.png" alt="Testimonial avatar" class="rounded-full">
                            </div>
                            <div class="media-body">
                                <h5>{{$item->user_name}}</h5>
                                <div class="d-flex align-items-center pt-1">
                                    <span class="lh-18 pr-2">طالب</span>
                                    <div class="review-stars">
                                        @for($i=0; $i<(int)$item->star; $i++)
                                            <span class="la la-star"></span>
                                        @endfor
                                        @for($i=(int)$item->star; $i<5; $i++)
                                            <span class="lar la-star"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <p class="card-text">
                            {{ $item->description }}
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            @endforeach

        </div><!-- end testimonial-carousel -->
    </div><!-- container-fluid -->
</section><!-- end testimonial-area -->
@endif

<!--======================================
START COURSE AREA`
======================================-->
<section class="contact-area section--padding position-relative" style="padding-top: 0px;">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 responsive-column-half">
            <div class="info-box">
                <div class="info-overlay"></div>
                <div class="icon-element mx-auto shadow-sm">
                    <svg class="svg-icon-color-1" width="45" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m397.359 393.957c-3.552-2.103-8.136-.932-10.241 2.619-2.104 3.551-.931 8.136 2.619 10.241 20.542 12.174 24.854 23.563 24.854 30.974 0 14.357-16.02 29.028-43.952 40.253-30.5 12.257-71.212 19.007-114.638 19.007-43.425 0-84.138-6.75-114.638-19.007-27.933-11.224-43.953-25.896-43.953-40.252 0-14.357 16.02-29.028 43.952-40.253 12.416-4.99 26.539-9.056 41.835-12.136l58.291 67.502c3.645 4.221 8.935 6.643 14.512 6.643s10.867-2.421 14.512-6.643l58.266-67.472c10.6 2.124 20.631 4.715 29.864 7.747l1.302.433c3.923 1.304 8.148-.817 9.452-4.734 1.302-3.917-.817-8.148-4.734-9.451l-1.329-.442c-7.371-2.42-15.218-4.569-23.423-6.444l56.847-65.829c9.765-11.309 17.931-23.237 24.27-35.454 13.592-26.196 20.776-55.746 20.776-85.456 0-102.452-83.35-185.803-185.801-185.803-.002 0-.002 0-.003 0-30.467 0-60.661 7.491-87.317 21.663-3.645 1.938-5.029 6.463-3.091 10.108 1.937 3.645 6.464 5.031 10.108 3.091 24.504-13.027 52.272-19.913 80.303-19.913 94.209 0 170.853 76.645 170.853 170.855 0 27.714-6.425 54.15-19.096 78.572-5.802 11.183-13.311 22.141-22.316 32.568l-126.245 146.191c-1.1 1.274-2.476 1.464-3.198 1.464-.723 0-2.098-.19-3.198-1.464l-126.35-146.314c-8.265-9.571-15.228-19.527-20.694-29.592-13.56-24.964-20.687-53.281-20.612-81.888.135-51.322 22.92-99.361 62.512-131.801 3.193-2.616 3.661-7.325 1.044-10.518-2.615-3.193-7.324-3.661-10.518-1.044-43.06 35.28-67.84 87.52-67.987 143.325-.082 31.105 7.673 61.902 22.425 89.062 5.977 11.004 13.552 21.847 22.516 32.227l56.932 65.928c-13.097 3.01-25.303 6.737-36.283 11.149-34.388 13.819-53.326 33.04-53.326 54.123s18.939 40.304 53.326 54.123c32.232 12.952 74.924 20.085 120.213 20.085 45.29 0 87.982-7.133 120.212-20.085 34.387-13.819 53.326-33.04 53.326-54.123.001-16.2-11.127-31.357-32.179-43.835z"/><path d="m256 313.833c72.133 0 130.817-58.684 130.817-130.817s-58.684-130.817-130.817-130.817-130.817 58.684-130.817 130.817 58.685 130.817 130.817 130.817zm0-14.949c-19.726 0-38.314-4.96-54.59-13.691 5.041-6.854 11.364-12.759 18.574-17.302 4.952-3.11 9.082-7.475 11.961-12.653 2.829-5.143 4.323-10.958 4.323-16.816 0-10.928-5.15-21.297-13.78-27.738-14.359-10.705-22.594-27.107-22.594-45.002 0-15.727 6.332-30.299 17.829-41.031 11.487-10.723 26.502-16.034 42.273-14.944 27.271 1.896 49.583 23.838 51.897 51.035 1.652 19.48-6.646 38.09-22.197 49.781-4.284 3.222-7.832 7.464-10.283 12.312-2.409 4.844-3.682 10.233-3.682 15.586 0 12.05 6.084 23.066 16.268 29.465 7.221 4.545 13.547 10.451 18.59 17.307-16.275 8.731-34.863 13.691-54.589 13.691zm0-231.737c63.89 0 115.869 51.978 115.869 115.868 0 38.811-19.183 73.223-48.562 94.261-6.258-8.76-14.214-16.294-23.348-22.044-5.81-3.65-9.279-9.935-9.279-16.811 0-3.099.712-6.103 2.096-8.886 1.42-2.81 3.406-5.186 5.904-7.064 19.69-14.802 30.198-38.351 28.108-62.994-2.934-34.473-31.203-62.28-65.76-64.683-19.948-1.373-38.956 5.348-53.506 18.929-14.348 13.394-22.577 32.332-22.577 51.959 0 22.328 10.695 43.632 28.605 56.984 4.865 3.632 7.77 9.521 7.77 15.756 0 3.346-.855 6.67-2.456 9.582-1.643 2.954-4.005 5.454-6.84 7.235-9.124 5.75-17.071 13.286-23.326 22.042-29.382-21.038-48.566-55.452-48.566-94.264 0-63.891 51.978-115.87 115.868-115.87z"/></g></g></svg>
                </div>
                <h3 class="info__title">موقعنا</h3>
                <p class="info__text">ادلب ، حزانو ، غرب جامع عثمان بن عفان</p>
                <p class="info__text">  ادلب ، سرمدا ، الطريق العام ، الشارع المبلط</p>
            </div><!-- end info-box -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-4 responsive-column-half">
            <div class="info-box">
                <div class="info-overlay"></div>
                <div class="icon-element mx-auto shadow-sm">
                    <svg class="svg-icon-color-2" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M469.333,64H42.667C19.135,64,0,83.135,0,106.667v298.667C0,428.865,19.135,448,42.667,448h426.667
                                    C492.865,448,512,428.865,512,405.333V106.667C512,83.135,492.865,64,469.333,64z M42.667,85.333h426.667
                                    c1.572,0,2.957,0.573,4.432,0.897c-36.939,33.807-159.423,145.859-202.286,184.478c-3.354,3.021-8.76,6.625-15.479,6.625
                                    s-12.125-3.604-15.49-6.635C197.652,232.085,75.161,120.027,38.228,86.232C39.706,85.908,41.094,85.333,42.667,85.333z
                                     M21.333,405.333V106.667c0-2.09,0.63-3.986,1.194-5.896c28.272,25.876,113.736,104.06,169.152,154.453
                                    C136.443,302.671,50.957,383.719,22.46,410.893C21.957,409.079,21.333,407.305,21.333,405.333z M469.333,426.667H42.667
                                    c-1.704,0-3.219-0.594-4.81-0.974c29.447-28.072,115.477-109.586,169.742-156.009c7.074,6.417,13.536,12.268,18.63,16.858
                                    c8.792,7.938,19.083,12.125,29.771,12.125s20.979-4.188,29.76-12.115c5.096-4.592,11.563-10.448,18.641-16.868
                                    c54.268,46.418,140.286,127.926,169.742,156.009C472.552,426.073,471.039,426.667,469.333,426.667z M490.667,405.333
                                    c0,1.971-0.624,3.746-1.126,5.56c-28.508-27.188-113.984-108.227-169.219-155.668c55.418-50.393,140.869-128.57,169.151-154.456
                                    c0.564,1.91,1.194,3.807,1.194,5.897V405.333z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <h3 class="info__title">ارسل لنا عبر البريد الإلكتروني</h3>
                <p class="info__text">info@jilalmostakkball.com</p>
                <p class="info__text">abdalbasethablas@jilalmostakkball.com</p>
            </div><!-- end info-box -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-4 responsive-column-half">
            <div class="info-box">
                <div class="info-overlay"></div>
                <div class="icon-element mx-auto shadow-sm">
                    <svg class="svg-icon-color-3" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 473.806 473.806" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4
                                        c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8
                                        c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6
                                        c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5
                                        c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26
                                        c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9
                                        c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806
                                        C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20
                                        c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6
                                        c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1
                                        c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3
                                        c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5
                                        c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8
                                        c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9
                                        l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1
                                        C420.456,377.706,420.456,388.206,410.256,398.806z"/>
                                    <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2
                                        c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11
                                        S248.656,111.506,256.056,112.706z"/>
                                    <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11
                                        c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2
                                        c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"/>
                                </g>
                            </g>
                    </svg>
                </div>
                <h3 class="info__title">اتصل بنا</h3>
                <p class="info__text">101 520 681 352+</p>
                <p class="info__text">101 520 681 352+</p>
            </div><!-- end info-box -->
        </div><!-- end col-lg-3 -->
    </div><!-- end row -->
    <div class="row align-items-center pt-30px">
        <div class="col-lg-5">
            <div class="contact-content pb-5">
                <div class="section-heading">
                    <h2 class="section__title pb-3">نحب أن نسمع منك</h2>
                    <p class="section__desc">
                        مدارس جيل المستقبل الخاصة مهتمة جدا برأيكم الرجاء ارسال ملاحظاتكم لنا وكونو على ثقة تامة انها مهمة جدا بالنسبة لنا ... يد بيد نبني المستقبل

                <br>
                        نحو غد مشرق...
                    </p>
                </div><!-- end section-heading -->
                <ul class="social-icons social-icons-styled social--icons-styled pt-30px">
                    <li><a href="https://www.facebook.com/jilalmostakkball"><i class="la la-facebook"></i></a></li>
                    <li><a href="https://wa.me/+352681520101"><i class="la la-whatsapp"></i></a></li>
                     <li><a href="https://www.youtube.com/channel/UC7JtujK1MO3aFkijueKRG-g"><i class="la la-youtube"></i></a></li>
                </ul>
            </div>
        </div><!-- end col-lg-5 -->


        <div class="col-lg-7">
            <div class="card card-item">
                <div class="card-body">
                    <form method="post" action="{{ route('SendMessage') }}" class="contact-form">
                        <div class="alert alert-success contact-success-message" role="alert">

                        </div>
                        @csrf
                        @method('POST')
                        <div class="input-box">
                            <label class="label-text">الاسم الكامل</label>
                            <div class="form-group">
                                <input id="name" class="form-control form--control" type="text" name="name" placeholder="الاسم الكامل">
                                <span class="la la-user input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box">
                            <label class="label-text">عنوان البريد الإلكتروني</label>
                            <div class="form-group">
                                <input id="email" class="form-control form--control" type="email" name="email" placeholder="عنوان البريد الالكتروني">
                                <span class="la la-envelope input-icon"></span>
                            </div>
                        </div><!-- end input-box -->
                        <div class="input-box">
                            <label class="label-text">رسالة</label>
                            <div class="form-group">
                                <textarea id="message" class="form-control form--control pl-4" name="message" rows="5" placeholder="اكتب رسالتك هنا ..."></textarea>
                            </div>
                        </div><!-- end input-box -->

                            <button id="send-message-btn" class="btn theme-btn" type="submit">أرسل رسالة</button>

                    </form>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col-lg-7 -->
    </div><!-- end row -->

</div><!-- end container -->
</section><!-- end contact-area -->
<!-- end courses-area -->
<!--======================================
END COURSE AREA
======================================-->

<div class="section-block"></div>





<!-- ================================
START FUNFACT AREA
================================= -->
<section class="funfact-area text-center overflow-hidden section--padding dot-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-3 responsive-column-half">
            <div class="counter-item">
                <div class="counter__icon icon-element mb-3 shadow-sm">
                    <svg class="svg-icon-color-1" width="40" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m499.5 422h-10v-304.92c0-20.678-16.822-37.5-37.5-37.5h-108.332v-27.962c0-28.462-23.156-51.618-51.618-51.618h-72.1c-28.462 0-51.618 23.156-51.618 51.618v27.962h-108.332c-20.678 0-37.5 16.822-37.5 37.5v304.92h-10c-6.893 0-12.5 5.607-12.5 12.5v34.549c0 23.683 19.268 42.951 42.951 42.951h426.098c23.683 0 42.951-19.268 42.951-42.951v-34.549c0-6.893-5.607-12.5-12.5-12.5zm-155.832-307.112h2.347c6.299 0 11.423 5.124 11.423 11.423 0 6.298-5.124 11.422-11.423 11.422h-2.347zm0 37.844h2.347c15.203.011 27.366-12.987 26.36-28.152h72.125v249.151h-18.64v-41.301c0-14.129-4.877-27.975-13.732-38.988-8.856-11.014-21.335-18.751-35.139-21.786l-67.199-14.761c-4.975-1.086-8.438-5.551-8.44-10.494v-12.896c25.347-15.384 42.318-43.248 42.318-75.002zm-144.678 120.228 6.441-1.415c6.113-1.344 11.335-4.877 14.948-9.642l24.143 17.74-15.434 15.434zm29.701 38.208-3.889 62.563h-123.662v-41.301c0-22 15.599-41.398 37.09-46.124l41.257-9.062 43.142 31.702c1.838 1.349 3.941 2.081 6.062 2.222zm57.691-64.029-30.382 22.325-30.382-22.325c.031-.624.058-5.717.033-6.388 9.461 3.502 19.686 5.419 30.35 5.419s20.888-1.917 30.35-5.419c-.013.671-.005 5.765.031 6.388zm-42.032 53.89 11.65-11.65 11.599 11.599 4.258 72.753h-32.027zm23.129-21.385 24.143-17.74c3.613 4.765 8.835 8.298 14.948 9.642l6.44 1.415-30.098 22.118zm21.894 29.3 43.14-31.701 41.256 9.062c21.492 4.726 37.091 24.124 37.091 46.124v41.302h-123.976l-3.662-62.561c2.151-.126 4.287-.857 6.151-2.226zm-106.041-194.309c10.817-.592 21.509-2.153 31.874-4.66 4.026-.974 6.501-5.027 5.527-9.054-.975-4.026-5.026-6.503-9.054-5.526-9.216 2.229-18.722 3.628-28.348 4.202v-47.979c.001-20.191 16.428-36.618 36.619-36.618h72.1c20.191 0 36.618 16.427 36.618 36.618v45.1c-6.201-2.706-12.011-6.201-17.336-10.485-7.358-5.922-13.503-13.088-18.26-21.298-1.673-2.89-4.521-4.86-7.814-5.407-3.288-.544-6.619.398-9.132 2.589-10.05 8.761-21.15 16.144-33.04 21.971-3.719 1.822-5.257 6.315-3.434 10.035 1.821 3.718 6.313 5.258 10.035 3.434 11.728-5.747 22.683-12.825 32.811-21.178 5.302 8.187 11.822 15.419 19.43 21.54 8.063 6.488 17.038 11.5 26.74 14.939v45.645c0 40.069-32.599 72.668-72.668 72.668s-72.668-32.599-72.668-72.668zm27.318 118.869v12.896c-.006 4.93-3.494 9.415-8.439 10.494l-67.201 14.761c-13.803 3.035-26.281 10.772-35.138 21.786-8.855 11.014-13.732 24.859-13.732 38.988v41.302h-18.64v-249.151h72.125c-1.022 15.115 11.132 28.186 26.36 28.152h2.347v5.77c0 31.754 16.971 59.619 42.318 75.002zm-56.087-107.193c0-6.299 5.124-11.423 11.423-11.423h2.347v22.845h-2.347c-6.299-.001-11.423-5.125-11.423-11.422zm342.437 342.738c0 15.412-12.539 27.951-27.951 27.951h-426.098c-15.412 0-27.951-12.539-27.951-27.951v-32.049h190.545v12.5c0 9.649 7.851 17.5 17.5 17.5h65.91c9.649 0 17.5-7.851 17.5-17.5v-12.5h72.043c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-340.998v-304.92c0-12.406 10.094-22.5 22.5-22.5h108.332v5.308h-2.347c-8.226 0-15.584 3.78-20.434 9.692h-81.551c-6.341 0-11.5 5.159-11.5 11.5v260.151c0 4.143 3.357 7.5 7.5 7.5h392c4.143 0 7.5-3.357 7.5-7.5v-260.151c0-6.341-5.159-11.5-11.5-11.5h-81.551c-4.85-5.913-12.208-9.692-20.434-9.692h-2.347v-5.308h108.332c12.406 0 22.5 10.094 22.5 22.5v304.92h-61.002c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h83.502zm-276.455-19.549v-12.5h70.91v12.5c0 1.379-1.121 2.5-2.5 2.5h-65.91c-1.379 0-2.5-1.121-2.5-2.5zm16.377-243.596c5.712 3.132 12.166 4.823 18.662 4.892 8.306.087 15.383-2.637 19.495-4.893 3.632-1.992 4.96-6.551 2.968-10.183s-6.549-4.961-10.183-2.968c-2.545 1.396-6.654 3.045-11.863 3.045-5.146 0-9.343-1.661-11.866-3.046-3.633-1.994-8.191-.661-10.183 2.97-1.991 3.633-.662 8.191 2.97 10.183zm-19.602-52.241c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.358 7.5 7.5 7.5zm77.36 0c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.357 7.5 7.5 7.5z"/></g></svg>
                </div>
                <h4 class="counter__title counter text-color-2">90</h4>
                <p class="counter__meta">الكادر</p>
            </div>
            <!-- end counter-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
            <div class="counter-item">
                <div class="counter__icon icon-element mb-3 shadow-sm">
                    <svg class="svg-icon-color-2" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 480.1 480.1" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M240.135,0.05C144.085,0.036,57.277,57.289,19.472,145.586l-2.992,0.992l1.16,3.48
                                c-49.776,122.766,9.393,262.639,132.159,312.415c28.673,11.626,59.324,17.594,90.265,17.577
                                c132.548,0.02,240.016-107.416,240.036-239.964S372.684,0.069,240.135,0.05z M428.388,361.054l-12.324-12.316V320.05
                                c0.014-1.238-0.26-2.462-0.8-3.576l-31.2-62.312V224.05c0-2.674-1.335-5.172-3.56-6.656l-24-16
                                c-1.881-1.256-4.206-1.657-6.4-1.104l-29.392,7.344l-49.368-21.184l-6.792-47.584l18.824-18.816h40.408l13.6,20.44
                                c1.228,1.838,3.163,3.087,5.344,3.448l48,8c1.286,0.216,2.604,0.111,3.84-0.304l44.208-14.736
                                C475.855,208.053,471.889,293.634,428.388,361.054z M395.392,78.882l-13.008,8.672l-36.264-7.256l-23.528-7.832
                                c-1.44-0.489-2.99-0.551-4.464-0.176l-29.744,7.432l-13.04-4.344l9.664-19.328h27.056c1.241,0.001,2.465-0.286,3.576-0.84
                                l27.68-13.84C362.382,51.32,379.918,63.952,395.392,78.882z M152.44,33.914l19.2,12.8c0.944,0.628,2.01,1.048,3.128,1.232
                                l38.768,6.464l-3.784,11.32l-20.2,6.744c-1.809,0.602-3.344,1.83-4.328,3.464l-22.976,38.288l-36.904,22.144l-54.4,7.768
                                c-3.943,0.557-6.875,3.93-6.88,7.912v24c0,2.122,0.844,4.156,2.344,5.656l13.656,13.656v13.744l-33.28-22.192l-12.072-36.216
                                C57.68,98.218,99.777,56.458,152.44,33.914z M129.664,296.21l-36.16-7.24l-13.44-26.808v-18.8l29.808-29.808l11.032,22.072
                                c1.355,2.712,4.128,4.425,7.16,4.424h51.472l21.672,36.12c1.446,2.407,4.048,3.879,6.856,3.88h22.24l-5.6,28.056l-30.288,30.288
                                c-1.503,1.499-2.349,3.533-2.352,5.656v20l-28.8,21.6c-2.014,1.511-3.2,3.882-3.2,6.4v28.896l-9.952-3.296l-14.048-35.136V304.05
                                C136.065,300.248,133.389,296.97,129.664,296.21z M105.616,419.191C30.187,362.602-1.712,264.826,25.832,174.642l6.648,19.936
                                c0.56,1.687,1.666,3.14,3.144,4.128l39.88,26.584l-9.096,9.104c-1.5,1.5-2.344,3.534-2.344,5.656v24
                                c-0.001,1.241,0.286,2.465,0.84,3.576l16,32c1.108,2.21,3.175,3.784,5.6,4.264l33.6,6.712v73.448
                                c-0.001,1.016,0.192,2.024,0.568,2.968l16,40c0.876,2.185,2.67,3.874,4.904,4.616l24,8c0.802,0.272,1.642,0.412,2.488,0.416
                                c4.418,0,8-3.582,8-8v-36l28.8-21.6c2.014-1.511,3.2-3.882,3.2-6.4v-20.688l29.656-29.656c1.115-1.117,1.875-2.54,2.184-4.088
                                l8-40c0.866-4.333-1.944-8.547-6.277-9.413c-0.515-0.103-1.038-0.155-1.563-0.155h-27.472l-21.672-36.12
                                c-1.446-2.407-4.048-3.879-6.856-3.88h-51.056l-13.744-27.576c-1.151-2.302-3.339-3.91-5.88-4.32
                                c-2.54-0.439-5.133,0.399-6.936,2.24l-10.384,10.344V192.05c0-2.122-0.844-4.156-2.344-5.656l-13.656-13.656v-13.752l49.136-7.016
                                c1.055-0.153,2.07-0.515,2.984-1.064l40-24c1.122-0.674,2.062-1.614,2.736-2.736l22.48-37.464l21.192-7.072
                                c2.393-0.785,4.271-2.662,5.056-5.056l8-24c1.386-4.195-0.891-8.72-5.086-10.106c-0.387-0.128-0.784-0.226-1.186-0.294
                                l-46.304-7.72l-8.136-5.424c50.343-16.386,104.869-14.358,153.856,5.72l-14.616,7.296h-30.112c-3.047-0.017-5.838,1.699-7.2,4.424
                                l-16,32c-1.971,3.954-0.364,8.758,3.59,10.729c0.337,0.168,0.685,0.312,1.042,0.431l24,8c1.44,0.489,2.99,0.551,4.464,0.176
                                l29.744-7.432l21.792,7.256c0.312,0.112,0.633,0.198,0.96,0.256l40,8c2.08,0.424,4.244-0.002,6.008-1.184l18.208-12.144
                                c8.961,9.981,17.014,20.741,24.064,32.152l-39.36,13.12l-42.616-7.104l-14.08-21.12c-1.476-2.213-3.956-3.547-6.616-3.56h-48
                                c-2.122,0-4.156,0.844-5.656,2.344l-24,24c-1.782,1.781-2.621,4.298-2.264,6.792l8,56c0.403,2.769,2.223,5.126,4.8,6.216l56,24
                                c1.604,0.695,3.394,0.838,5.088,0.408l28.568-7.144l17.464,11.664v27.72c-0.014,1.238,0.26,2.462,0.8,3.576l31.2,62.312v30.112
                                c0,2.122,0.844,4.156,2.344,5.656l16.736,16.744C344.921,473.383,204.549,493.415,105.616,419.191z"/>
                        </g>
                    </g>
                </svg>
                </div>
                <h4 class="counter__title counter text-color-3">150</h4>
                <p class="counter__meta">طلاب تعليم عن بعد</p>
            </div>
            <!-- end counter-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
            <div class="counter-item">
                <div class="counter__icon icon-element mb-3 shadow-sm">
                    <svg class="svg-icon-color-3" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                            C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                            c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"></path>
                                    </g>
                                </g>
                        <g>
                            <g>
                                <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                            S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                            C426.667,241.643,412.309,256,394.667,256z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                            S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                            C129.515,241.643,115.157,256,97.515,256z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                            c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                            c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                            c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                            c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                            c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                            c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"></path>
                            </g>
                        </g>
                </svg>
                </div>
                <h4 class="counter__title counter text-color-4">2500</h4>
                <p class="counter__meta">عدد الطلاب</p>
            </div>
            <!-- end counter-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
            <div class="counter-item">
                <div class="counter__icon icon-element mb-3 shadow-sm">
                    <svg class="svg-icon-color-4" width="40" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m181.022 142.59-8.659 3.138c-13.364 4.846-23.334 16.536-26.021 30.517l-2.938 15.396c-1.466 7.626.53 15.436 5.479 21.425 4.951 5.995 12.251 9.433 20.025 9.433h75.057c7.714 0 14.977-3.393 19.927-9.309 4.946-5.911 7.004-13.65 5.646-21.233l-2.74-15.315c-2.539-14.201-12.542-26.081-26.108-31.004l-9.18-3.327v-13.53c0-.38-.037-.75-.092-1.115 6.697-6.818 10.533-16.115 10.533-25.627v-20.159c0-19.678-16.01-35.687-35.689-35.687s-35.692 16.009-35.692 35.687v20.787c0 9.778 4.032 18.705 10.515 25.188-.038.304-.063.611-.063.925zm71.008 36.692 2.74 15.317c.574 3.201-.295 6.468-2.384 8.964-2.092 2.5-5.162 3.935-8.423 3.935h-75.057c-3.285 0-6.369-1.452-8.461-3.985-2.088-2.528-2.931-5.823-2.311-9.05l2.938-15.396c1.693-8.812 7.979-16.183 16.4-19.236l5.672-2.055c.142.146.285.293.439.428 6.463 5.651 14.57 8.477 22.682 8.476 8.102 0 16.207-2.82 22.671-8.46.233-.203.447-.422.651-.65l5.983 2.169c8.554 3.102 14.86 10.59 16.46 19.543zm-66.46-97.402c0-11.406 9.281-20.687 20.689-20.687 9.628 0 17.718 6.62 20.015 15.54-.964.471-1.953.916-2.966 1.321-9.222 3.692-16.671 3.202-18.8 1.71-3.392-2.378-8.068-1.558-10.447 1.834-2.378 3.392-1.557 8.068 1.834 10.447 3.663 2.569 8.635 3.853 14.309 3.853 5.155 0 10.89-1.071 16.745-3.19v9.329c0 5.733-2.371 11.347-6.506 15.402-1.914 1.878-4.107 3.333-6.462 4.337-.165.063-.327.131-.486.205-2.419.957-5.003 1.438-7.644 1.369-11.184-.215-20.281-9.494-20.281-20.684zm19.993 56.469c.229.004.456.006.685.006 3.519 0 6.967-.529 10.261-1.544v11.999c-6.251 3.854-14.242 3.852-20.485-.006v-11.971c3.034.919 6.231 1.452 9.539 1.516z"/><path d="m88.264 350.904h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"/><path d="m88.264 391.345h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"/><path d="m88.264 431.784h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"/><path d="m88.264 472.225h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"/><path d="m80.764 262.524c0 4.143 3.357 7.5 7.5 7.5h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.358-7.5 7.5z"/><path d="m88.264 310.464h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"/><path d="m60.569 350.932c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"/><path d="m60.569 270.052c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"/><path d="m60.569 310.492c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"/><path d="m60.569 391.372c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"/><path d="m60.569 431.813c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"/><path d="m60.569 472.253c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"/><path d="m485.63 118.121c-3.026-3.83-5.886-7.449-7.269-10.783-1.492-3.599-2.08-8.354-2.702-13.39-1.091-8.822-2.327-18.821-9.305-25.798s-16.978-8.213-25.8-9.304c-5.037-.622-9.794-1.21-13.393-2.702-3.335-1.383-6.953-4.241-10.784-7.268-5.271-4.165-11.068-8.738-17.922-10.813v-2.269c.001-19.736-16.058-35.794-35.797-35.794h-312.444c-19.739 0-35.798 16.058-35.798 35.795v28.949c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-28.949c0-11.467 9.33-20.795 20.798-20.795h312.444c11.468 0 20.798 9.328 20.798 20.795v2.27c-6.852 2.076-12.647 6.647-17.918 10.812-3.831 3.026-7.449 5.885-10.783 7.268-3.599 1.491-8.356 2.079-13.393 2.702-8.822 1.09-18.821 2.326-25.8 9.303-6.979 6.978-8.215 16.977-9.306 25.799-.622 5.035-1.21 9.791-2.702 13.39-1.383 3.334-4.242 6.953-7.269 10.783-5.604 7.091-11.954 15.128-11.954 25.417s6.351 18.326 11.954 25.417c3.026 3.83 5.886 7.449 7.269 10.783 1.492 3.599 2.08 8.354 2.702 13.391 1.091 8.821 2.327 18.82 9.305 25.797 6.978 6.978 16.978 8.213 25.8 9.304 2.63.325 5.179.644 7.532 1.084v113.367c0 4.443 2.48 8.411 6.473 10.355 3.992 1.947 8.645 1.453 12.146-1.288l15.943-12.483v136.94c0 11.467-9.33 20.795-20.798 20.795h-312.443c-11.468 0-20.798-9.328-20.798-20.795v-378.435c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v378.434c0 19.737 16.059 35.795 35.798 35.795h312.444c19.739 0 35.798-16.058 35.798-35.795v-136.94l15.943 12.482c2.081 1.63 4.571 2.466 7.089 2.466 1.716 0 3.444-.389 5.064-1.178 3.994-1.944 6.476-5.912 6.476-10.354v-83.697c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v76.555l-19.937-15.609c-2.015-1.595-4.549-2.474-7.136-2.474s-5.121.879-7.104 2.448l-19.959 15.627v-98.625c.544.426 1.091.857 1.645 1.294 7.092 5.604 15.13 11.953 25.42 11.953 10.289 0 18.327-6.35 25.419-11.952 3.831-3.026 7.45-5.886 10.784-7.269 3.599-1.491 8.356-2.079 13.393-2.702 8.822-1.09 18.821-2.326 25.801-9.303 6.977-6.978 8.213-16.977 9.304-25.798.623-5.036 1.211-9.792 2.703-13.391 1.383-3.334 4.242-6.953 7.269-10.783 5.604-7.091 11.954-15.128 11.954-25.417s-6.351-18.326-11.954-25.417zm-11.769 41.534c-3.528 4.465-7.176 9.081-9.355 14.337-2.273 5.48-3.016 11.487-3.734 17.296-.871 7.046-1.693 13.701-5.023 17.031-3.331 3.33-9.987 4.152-17.034 5.023-5.81.718-11.816 1.46-17.298 3.733-5.256 2.179-9.872 5.826-14.337 9.354-5.679 4.485-11.042 8.723-16.121 8.723s-10.442-4.237-16.121-8.723c-4.465-3.527-9.081-7.175-14.337-9.354-.362-.15-1.618-.628-1.889-.712-4.957-1.724-10.26-2.385-15.41-3.021-7.047-.871-13.703-1.694-17.034-5.024-3.329-3.329-4.152-9.984-5.023-17.029-.718-5.81-1.46-11.815-3.733-17.297-2.18-5.256-5.827-9.872-9.355-14.337-4.485-5.678-8.723-11.04-8.723-16.117s4.237-10.439 8.723-16.117c3.528-4.465 7.176-9.081 9.355-14.337 2.273-5.48 3.016-11.487 3.733-17.296.871-7.046 1.694-13.701 5.024-17.031 3.331-3.33 9.987-4.152 17.034-5.023 5.81-.718 11.816-1.46 17.298-3.733 5.256-2.179 9.872-5.826 14.337-9.354 5.667-4.477 11.021-8.705 16.091-8.721.009 0 .019.001.028.001.01 0 .02-.001.03-.001 5.071.015 10.425 4.244 16.093 8.721 4.465 3.527 9.081 7.175 14.337 9.354 5.481 2.273 11.489 3.016 17.299 3.733 7.047.871 13.703 1.694 17.033 5.024s4.153 9.984 5.024 17.03c.718 5.809 1.46 11.815 3.733 17.296 2.18 5.256 5.827 9.872 9.355 14.337 4.485 5.678 8.723 11.04 8.723 16.117s-4.237 10.44-8.723 16.117z"/><path d="m439.109 119.704-25.522-7.221-14.757-22.04c-1.763-2.632-4.705-4.202-7.872-4.202s-6.11 1.571-7.872 4.202l-14.757 22.04-25.524 7.222c-3.048.863-5.452 3.178-6.43 6.19s-.392 6.297 1.566 8.783l16.403 20.843-1.018 26.497c-.123 3.166 1.333 6.168 3.896 8.031 1.645 1.195 3.594 1.813 5.565 1.813 1.102 0 2.21-.193 3.274-.585l24.895-9.158 24.893 9.157c2.973 1.096 6.276.636 8.839-1.225s4.021-4.862 3.899-8.029l-1.018-26.502 16.404-20.843c1.958-2.489 2.543-5.772 1.564-8.784-.975-3.012-3.379-5.326-6.428-6.189zm-24.587 28.143c-1.386 1.764-2.103 3.97-2.018 6.219l.778 20.284-19.053-7.009c-2.111-.777-4.436-.776-6.543-.001l-19.055 7.01.779-20.291c.084-2.241-.634-4.447-2.023-6.217l-12.554-15.952 19.539-5.527c2.161-.613 4.04-1.979 5.289-3.845l11.295-16.87 11.294 16.868c1.25 1.867 3.129 3.233 5.294 3.848l19.535 5.526z"/></g></svg>
                </div>
                <h4 class="counter__title counter text-color-5">15</h4>
                <p class="counter__meta">سنوات من الخبرة</p>
            </div>
            <!-- end counter-item -->
        </div>
        <!-- end col-lg-3 -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->
</section>
<!-- end funfact-area -->
<!-- ================================
START FUNFACT AREA
================================= -->

<!-- ================================
START CLIENT-LOGO AREA


do it here
================================= -->


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
<!-- end client-logo-area -->
<!-- ================================
START CLIENT-LOGO AREA
================================= -->

<!--======================================
START GET STARTED AREA
======================================-->
<section class="get-started-area section--padding position-relative bg-gray">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 responsive-column-half">
            <div class="card card-item hover-y">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="theme/images/small-img-3.jpg" alt="card image" class="img-fluid rounded-full">
                    </div>
                    <div class="pl-4">
                        <h5 class="card-title pt-4 pb-2">كن مدرسًا</h5>
                        <p class="card-text">انضم لنا ودعنا نستفد من خبراتك في تربية أجيال المستقبل</p>
                        <div class="btn-box mt-20px">
                            <a href="/work" class="btn theme-btn theme-btn-sm lh-30"><i class="la la-user mr-1"></i>ابدأ التدريس</a>
                        </div>
                        <!-- end btn-box -->
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>

        <!-- end col-lg-4 -->
        <div class="col-lg-6 responsive-column-half">
            <div class="card card-item hover-y">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="theme/images/small-img-4.jpg" alt="card image" class="img-fluid rounded-full">
                    </div>
                    <div class="pl-4">
                        <h5 class="card-title pt-4 pb-2">كن متعلمًا</h5>
                        <p class="card-text">دعنا نكون بين يديك. استفد من خبرات اساتذتنا القديريين ولنخرج سوية في رحلة عمرك ولنكن شركاء نجاحك</p>
                        <div class="btn-box mt-20px">
                            <a href="/Student/StudentLogin" class="btn theme-btn theme-btn-sm lh-30"><i class="la la-file-text-o mr-1"></i>ابدا بالتعلم</a>
                        </div>
                        <!-- end btn-box -->
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-lg-4 -->
    </div>
    <!-- end row -->
</div>
<!-- end container-fluid -->
</section>


@include ('includes.footerNew')





<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

