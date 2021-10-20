@include ('includes.navbarNew')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<section class="breadcrumb-area section-padding img-bg-3">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content text-left">
            <div class="section-heading">
                <h5 class="ribbon ribbon-lg ribbon-white mb-2">مرحبا بكم في Aduca</h5>
                <h2 class="section__title fs-45 lh-60 text-white">تحسين حياتك التعلم</h2>
            </div>
            <div class="breadcrumb-btn-box pt-40px pl-3">
                <a href="#" class="btn-text text-white video-play-btn d-inline-flex align-items-center" data-fancybox data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                    <span class="icon-element icon-element-md pulse-btn mr-3"><i class="la la-play"></i></span>شاهد الفيديو
                </a>
            </div>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<section class="about-area section--padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pb-5 text-left">
                    <div class="section-heading">
                        <h2 class="section__title pb-3 lh-50">السوق العالمي الرائد للتعلم والتعليم</h2>
                        <p class="section__desc">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف من استخدام لوريم إيبسوم هو أنه يحتوي على توزيع طبيعي -إلى حد ما- للأحرف ، بدلاً من استخدام "هنا يوجد محتوى نصي ، هنا يوجد محتوى نصي" ، مما يجعلها تبدو وكأنها إنجليزية قابلة للقراءة. تستخدم العديد من حزم النشر المكتبي ومحرري صفحات الويب الآن Lorem Ipsum كنص نموذج افتراضي ، وسيكشف البحث عن "lorem ipsum" عن العديد من مواقع الويب التي لا تزال في مهدها.</p>
                    </div><!-- end section-heading -->
                    <ul class="generic-list-item pt-3">
                        <li><i class="la la-check-circle mr-2 text-success"></i>دورات عبر الإنترنت مع أنظمة خصم كاملة.</li>
                        <li><i class="la la-check-circle mr-2 text-success"></i>شهادات عبر الإنترنت يمكن استخدامها في جميع أنحاء العالم.</li>
                        <li><i class="la la-check-circle mr-2 text-success"></i>برنامج تطوير القيادة عبر الإنترنت في Aduca.</li>
                    </ul>
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="generic-img-box generic-img-box-layout-2">
                    <div class="img__item img__item-1">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img15.jpg" alt="About image">
                        <div class="generic-img-box-content">
                            <h3 class="fs-24 font-weight-semi-bold pb-1">55K</h3>
                            <span>المدربين</span>
                        </div>
                    </div>
                    <div class="img__item img__item-2">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img16.jpg" alt="About image">
                        <div class="generic-img-box-content">
                            <h3 class="fs-24 font-weight-semi-bold pb-1">6,900+</h3>
                            <span>الدورات</span>
                        </div>
                    </div>
                    <div class="img__item img__item-3">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img17.jpg" alt="About image">
                        <div class="generic-img-box-content">
                            <h3 class="fs-24 font-weight-semi-bold pb-1">40M</h3>
                            <span>المتعلمين</span>
                        </div>
                    </div>
                </div><!-- end generic-img-box -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->

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
        <br>
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


            @if($BabeMangement->count() >0)
                <li class="nav-item">
                    <a class="nav-link" id="BabeMangement-tab" data-toggle="tab" href="#BabeMangement" role="tab" aria-controls="BabeMangement" aria-selected="false">الحضانة</a>
                </li>
            @endif
        </ul>
    </div>
    <div class="card-content-wrapper bg-gray pt-50px pb-120px">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="BabeMangement" role="tabpanel" aria-labelledby="BabeMangement-tab">
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
                   </div><!-- end tab-content -->
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
        </div><!-- end tab-content -->
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
    </div><!-- end tab-content -->
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


    <!-- end container -->
</section>



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

