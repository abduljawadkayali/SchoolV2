@include ('includes.navbarNew')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">الكادر التدريسي</h2>
            </div>
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">

                <li>الكادر</li>
                <li>الحضانة</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->


<section class="client-logo-area section-padding position-relative overflow-hidden text-center">
    <div class="container">
        <h5 class="ribbon ribbon-lg mb-2">الكادر</h5>
        <h2 class="section__title">الكادر التدريسي والاداري</h2>
        <span class="section-divider"></span>

    </div>
    <div class="card-content-wrapper bg-gray pt-50px pb-120px">
        <div class="container">

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
    </div><!-- end tab-content -->

    <!-- end container -->
</section>

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

    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- end courses-area -->
<!--======================================
END COURSE AREA
======================================-->




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

