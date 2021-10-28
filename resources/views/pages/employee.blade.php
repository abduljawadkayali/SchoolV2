@include ('includes.navbarNew')



<section class="breadcrumb-area py-5 bg-white pattern-bg">
    <div class="container">
        <div class="breadcrumb-content text-left">
            <div class="media media-card align-items-center pb-4">
                <div class="media-img media--img media-img-md rounded-full">
                    <img class="rounded-full" src="/images/{{$data->image}}" alt="الصورة الشخصية">
                </div>

                <div class="media-body">
                    <h2 class="section__title fs-30">{{$data->name}}</h2>
                    @if((int)$data->date > 2)
                    <span class="d-block lh-18 pt-1 pb-2">  معنا منذ  {{$data->date}} سنين </span>
                    @elseif((int)$data->date  == 2)
                        <span class="d-block lh-18 pt-1 pb-2"> معنا منذ سنتين </span>
                    @elseif((int)$data->date = 1)
                        <span class="d-block lh-18 pt-1 pb-2"> معنا منذ سنة </span>
                        @endif
                    <p class="lh-18">{{$data->title}}</p>
                </div>
            </div><!-- end media -->
            <ul class="social-icons social-icons-styled social--icons-styled">
                @if($data->facebook !=0)
                <li><a href="{{$data->facebook}}"><i class="la la-facebook"></i></a></li>
                @endif
                    @if($data->mail !=0)
                <li><a href="mailto:{{$data->mail}}"><i class="la la-mail-bulk"></i></a></li>
                    @endif
                        @if($data->whatsup !=0)
                <li><a href="https://wa.me/{{$data->whatsup}}"><i class="la la-whatsapp"></i></a></li>
                    @endif
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->

<section class="teacher-details-area pt-50px">
    <div class="container">
        <div class="student-details-wrap pb-20px">
            <div class="row">
                <div class="col-lg-4 responsive-column-half">
                </div>
                <div class="col-lg-4 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-2" width="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"  xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M472.208,201.712c9.271-9.037,12.544-22.3,8.544-34.613c-4.001-12.313-14.445-21.118-27.257-22.979l-112.03-16.279
                                                    c-2.199-0.319-4.1-1.7-5.084-3.694L286.28,22.632c-5.729-11.61-17.331-18.822-30.278-18.822c-12.947,0-24.549,7.212-30.278,18.822
                                                    l-50.101,101.516c-0.985,1.993-2.885,3.374-5.085,3.694L58.51,144.12c-12.812,1.861-23.255,10.666-27.257,22.979
                                                    c-4.002,12.313-0.728,25.576,8.544,34.613l81.065,79.019c1.591,1.552,2.318,3.787,1.942,5.978l-19.137,111.576
                                                    c-2.188,12.761,2.958,25.414,13.432,33.024c10.474,7.612,24.102,8.595,35.56,2.572l100.201-52.679
                                                    c1.968-1.035,4.317-1.035,6.286,0l100.202,52.679c4.984,2.62,10.377,3.915,15.744,3.914c6.97,0,13.896-2.184,19.813-6.487
                                                    c10.474-7.611,15.621-20.265,13.432-33.024l-19.137-111.576c-0.375-2.191,0.351-4.426,1.942-5.978L472.208,201.712z
                                                     M362.579,291.276l19.137,111.578c0.64,3.734-1.665,5.863-2.686,6.604c-1.022,0.74-3.76,2.277-7.112,0.513l-100.202-52.679
                                                    c-4.919-2.585-10.315-3.879-15.712-3.879c-5.397,0-10.794,1.294-15.712,3.878l-100.201,52.678
                                                    c-3.354,1.763-6.091,0.228-7.112-0.513c-1.021-0.741-3.327-2.87-2.686-6.604l19.137-111.576
                                                    c1.879-10.955-1.75-22.127-9.711-29.886l-81.065-79.019c-2.713-2.646-2.099-5.723-1.708-6.923
                                                    c0.389-1.201,1.702-4.052,5.451-4.596l112.027-16.279c10.999-1.598,20.504-8.502,25.424-18.471l50.101-101.516
                                                    c1.677-3.397,4.793-3.764,6.056-3.764c1.261,0,4.377,0.366,6.055,3.764v0.001l50.101,101.516
                                                    c4.919,9.969,14.423,16.873,25.422,18.471l112.029,16.279c3.749,0.544,5.061,3.395,5.451,4.596
                                                    c0.39,1.201,1.005,4.279-1.709,6.923l-81.065,79.019C364.329,269.149,360.7,280.321,362.579,291.276z"/>
                                            </g>
                                        </g>
                                <g>
                                    <g>
                                        <path d="M413.783,22.625c-6.036-4.384-14.481-3.046-18.865,2.988l-14.337,19.732c-4.384,6.034-3.047,14.481,2.988,18.865
                                                    c2.399,1.741,5.176,2.58,7.928,2.58c4.177,0,8.295-1.931,10.937-5.567l14.337-19.732
                                                    C421.155,35.456,419.818,27.009,413.783,22.625z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M131.36,45.265l-14.337-19.732c-4.383-6.032-12.829-7.37-18.865-2.988c-6.034,4.384-7.372,12.831-2.988,18.865
                                                    l14.337,19.732c2.643,3.639,6.761,5.569,10.939,5.569c2.753,0,5.531-0.839,7.927-2.581C134.407,59.747,135.745,51.3,131.36,45.265
                                                    z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M49.552,306.829c-2.305-7.093-9.924-10.976-17.019-8.671l-23.197,7.538c-7.095,2.305-10.976,9.926-8.671,17.019
                                                    c1.854,5.709,7.149,9.337,12.842,9.337c1.383,0,2.79-0.215,4.177-0.666l23.197-7.538
                                                    C47.975,321.543,51.857,313.924,49.552,306.829z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M256.005,456.786c-7.459,0-13.506,6.047-13.506,13.506v24.392c0,7.459,6.047,13.506,13.506,13.506
                                                    c7.459,0,13.506-6.047,13.506-13.506v-24.392C269.511,462.832,263.465,456.786,256.005,456.786z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M502.664,305.715l-23.197-7.538c-7.092-2.303-14.714,1.577-17.019,8.672c-2.305,7.095,1.576,14.714,8.671,17.019
                                                    l23.197,7.538c1.387,0.45,2.793,0.664,4.176,0.664c5.694,0,10.989-3.629,12.843-9.337
                                                    C513.64,315.639,509.758,308.02,502.664,305.715z"/>
                                    </g>
                                </g>
                                    </svg>
                        </div>
                        <h4 class="counter__title counter text-color-3 fs-35">{{$data->years}}</h4>
                        <p class="counter__meta">سنين الخدمة</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end team-single-wrap -->
    </div><!-- end container -->
    <div class="bg-gray py-5">
        <div class="container">
            <ul class="nav nav-tabs generic-tab justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="about-me-tab" data-toggle="tab" href="#about-me" role="tab" aria-controls="about-me" aria-selected="false">
                        عني
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">
                        خبرة
                    </a>
                </li>
            </ul>
            <div class="tab-content pt-40px" id="myTabContent">
                <div class="tab-pane fade show active" id="about-me" role="tabpanel" aria-labelledby="about-me-tab">
                    <div class="card card-item">
                        <div class="card-body">
                            <p class="card-text pb-3">
                                {{ $data->about }}
                            </p>
                        </div>
                    </div>
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <div class="card card-item">
                        <div class="card-body">
                            <p>
                                {{ $data->description }}
                            </p>
                        </div>
                    </div>
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div>
</section><!-- end teacher-details-area -->
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
                                        <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
                                        <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
                                        <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
                                        <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
                                        <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
                                    <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
                                <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
                            <img class="card-img-top" src="/images/{{$item->image}}" alt="team member">
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
<!-- end hero-area -->
<!--================================
    END HERO AREA
=================================-->
<!--================================
         START TESTIMONIAL AREA
=================================-->


<div class="section-block"></div>



<section class="client-logo-area section-padding position-relative overflow-hidden text-center">
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
                                            <img class="card-img-top lazy" src="/images/{{$haberCard1->image}}" data-src="/images/{{$haberCard1->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard1->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard1->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard1->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard1->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-course-badge-labels p-2">
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
                                            <img class="card-img-top lazy" src="/images/{{$haberCard2->image}}" data-src="/images/{{$haberCard2->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard2->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard2->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard2->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard2->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-course-badge-labels p-2">
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
                                            <img class="card-img-top lazy" src="/images/{{$haberCard3->image}}" data-src="/images/{{$haberCard3->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard3->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard3->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard3->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard3->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-course-badge-labels p-2">
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
                                            <img class="card-img-top lazy" src="/images/{{$haberCard4->image}}" data-src="/images/{{$haberCard4->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard4->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard4->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard4->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard4->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-course-badge-labels p-2">
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
                                            <img class="card-img-top lazy" src="/images/{{$haberCard5->image}}" data-src="/images/{{$haberCard5->image}}" alt="Card image cap">
                                        </a>
                                    </div><!-- end card-image -->
                                    <a href="{!! route('haberCard.display', ['id' => $haberCard5->id]) !!}" class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$haberCard5->type}}</h6>
                                        <h5 class="card-title"> {{$haberCard5->title}}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($haberCard5->body, $limit = 200  ) !!}

                                        </p>

                                    </a>
                                    <div class="course-badge-course-badge-labels p-2">
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


<!-- ================================
     END FOOTER AREA
================================= -->
<section class="footer-area pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">شركة</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <ul class="generic-list-item">
                        <li><a href="#">معلومات عنا</a></li>
                        <li><a href="#">اتصل بنا</a></li>
                        <li><a href="#">يصبح مدرسا</a></li>
                        <li><a href="#">الدعم</a></li>
                        <li><a href="#">أسئلة وأجوبة</a></li>
                        <li><a href="#">مدونة او مذكرة</a></li>
                    </ul>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">الدورات</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <ul class="generic-list-item">
                        <li><a href="#">تطوير الشبكة</a></li>
                        <li><a href="#">القرصنة</a></li>
                        <li><a href="#">تعلم PHP</a></li>
                        <li><a href="#">الانكليزية المحكية</a></li>
                        <li><a href="#">سيارة ذاتية القيادة</a></li>
                        <li><a href="#">جامعي القمامة</a></li>
                    </ul>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">تحميل التطبيق</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <div class="mobile-app">
                        <p class="pb-3 lh-24">قم بتنزيل تطبيق الهاتف المحمول الخاص بنا وتعلم أثناء التنقل.</p>
                        <a href="#" class="d-block mb-2 hover-s"><img src="/theme/images/appstore.png" alt="App store" class="img-fluid"></a>
                        <a href="#" class="d-block hover-s"><img src="/theme/images/googleplay.png" alt="Google play store" class="img-fluid"></a>
                    </div>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">النشرة الإخبارية</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <form method="post" class="subscriber-form">
                        <p class="pb-3 lh-24">هل تريد منا إرسال بريد إلكتروني إليك بخصوص العروض الخاصة والتحديثات؟</p>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form--control pl-3" placeholder="أدخل عنوان البريد الالكتروني">
                            <button class="btn theme-btn w-100 mt-3" type="button"> الإشتراك<i class="la la-arrow-right icon ml-1"></i></button>
                        </div>
                    </form>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div class="section-block"></div>
    <div class="copyright-content py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="index.html" class="pr-4">
                            <img src="/theme/images/logo.png" alt="footer logo" class="footer__logo">
                        </a>
                        <p class="copy-desc">Copyright &copy; 2021 <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a> Inc.</p>
                    </div>
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="mr-3"><a href="terms-and-conditions.html">البنود و الظروف</a></li>
                            <li class="mr-3"><a href="privacy-policy.html">سياسة الخصوصية</a></li>
                        </ul>
                        <div class="select-container select-container-sm">
                            <select class="select-container-select">
                                <option value="1">English</option>
                                <option value="2">Deutsch</option>
                                <option value="3">Español</option>
                                <option value="4">Français</option>
                                <option value="5">Bahasa Indonesia</option>
                                <option value="6">Bangla</option>
                                <option value="7">日本語</option>
                                <option value="8">한국어</option>
                                <option value="9">Nederlands</option>
                                <option value="10">Polski</option>
                                <option value="11">Português</option>
                                <option value="12">Română</option>
                                <option value="13">Русский</option>
                                <option value="14">ภาษาไทย</option>
                                <option value="15">Türkçe</option>
                                <option value="16">中文(简体)</option>
                                <option value="17">中文(繁體)</option>
                                <option value="17">Hindi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end copyright-content -->
</section>
<!-- end footer-area -->
<!-- ================================
      END FOOTER AREA
================================= -->



<div class="tooltip_templates">
    <div id="tooltip_content_3">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">بواسطة <a href="teacher-detail.html">خوسيه بورتيلا</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">دورة الأعمال الكاملة لموقع الويب</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">الأكثر مبيعا</h6>
                    <p class="text-success fs-14 font-weight-medium">محدث<span class="font-weight-bold pl-1">نوفمبر 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>إجمالي 23 ساعة</li>
                    <li>جميع المستويات</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">المهارات التي تحتاجها لتصبح محلل - الإحصاء ، نظرية قواعد البيانات - يتم تضمين كل شيء</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> كن خبيرًا في الإحصاء وحل المشكلات</li>
                    <li><i class="la la-check mr-1 text-black"></i> عزز سيرتك الذاتية بالمهارات المطلوبة</li>
                    <li><i class="la la-check mr-1 text-black"></i> جمع البيانات وتنظيمها وتحليلها وتصورها</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> أضف إلى السلة</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end tooltip_templates -->
