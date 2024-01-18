@extends('layouts.capperu')

@section('content')

    <!-- preloader area start -->
    <x-capperu.preloader-area></x-capperu.preloader-area>
    <!-- preloader area end -->
    
    <x-capperu.body-overlay-area></x-capperu.body-overlay-area>

    <!-- search popup area start -->
    <x-capperu.search-popup-area></x-capperu.search-popup-area>
    <!-- //. search Popup -->
    
    <!-- Encabezado inicio -->
    <x-capperu.header-area></x-capperu.header-area>
    <!-- Encabezado fin -->

    <!-- breabcrumb Area Start-->
    <section class="breadcrumb-area" style="background-color: #F9FAFD;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breabcrumb Area End -->

    <div class="blog-details-area pd-bottom-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="author-area px-30">
                        <ul>
                            <li><img src="{{ asset('themes/capperu/assets/img/author/2.png') }}" alt="img">Johan Doe</li>
                            <li>February 2, 2021</li>
                            <li>New, Data Science Articles</li>
                        </ul>
                        <h2>5 Ways Google Cloud Platform Unlocks Deep Data Insights</h2>
                    </div>
                    <div class="thumb">
                        <img src="{{ asset('themes/capperu/assets/img/blog/blog-details.png') }}" alt="img">
                    </div>
                    <div class="px-30">
                        <p>Are you looking for a career that’s interesting, challenging, and very much in-demand?</p>
                        <p class="mt-4">A data scientist career ticks all these boxes and more. Keep reading for the ultimate learning path guide detailing the skills, knowledge, and training you need to become a data scientist.
                        We’re in the middle of the 4th Industrial Revolution (or Industry 4.0), driven by the internet of things and AI. Both are characterized by the collection, analysis, and exchange of data — lots of data.</p>
                        <p class="mt-4">There’s no doubt that data science skills are in high and growing demand. Companies in all industries need these skill sets, from manufacturers to internet retailers, tech start-ups, and even government agencies. It’s also a well-paid career, with the average data scientist earning $113,436 a year in the US.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-thumb">
                                    <img src="{{ asset('themes/capperu/assets/img/blog/3.png') }}" alt="blog">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-thumb">
                                    <img src="{{ asset('themes/capperu/assets/img/blog/4.png') }}" alt="blog">
                                </div>
                            </div>
                        </div>
                        <h5>1. Ease of use</h5>
                        <p>A pellentesque tincidunt sit amet, consectetur adipiscing elit. Et bibendum enim dignissim nibh egestas. Nunc ultrices cursus sed pellentesque tincidunt libero. Id diam dolor id penatibus. Tellus est semper amet eget pharetra curabitur. Sit vel aliquam condimentum adipiscing quis lacinia diam nulla sed.</p>
                        <p class="mt-4">Volutpat scelerisque pretium euismod penatibus dolor tellus. Parturient cras dui sit sagittis at auctor at. Lectus eu porttitor eget rhoncus. Arcu placerat et sagittis, bibendum. Amet sagittis ullamcorper egestas sagittis. Sed sed maecenas ut urna massa facilisis quis. Tortor nisi, dignissim id fames facilisi. Bibendum aliquam nibh rutrum interdum. Amet pharetra tortor a adipiscing sagittis sit sed in. Dictumst vitae a mattis vel euismod. Mi semper porttitor sed tellus. Euismod sed ac at viverra. Egestas sit et in euismod elementum adipiscing non mauris.</p>
                        <h5>2. Range of compute options</h5>
                        <p>Fringilla nam pretium in aliquet. A pellentesque tincidunt tellus sodales. Quam eget ante erat nulla facilisis sed habitasse quam massa. At enim vitae arcu in blandit malesuada purus. Suspendisse vitae lacus, est quam nam scelerisque sed. Id nisi, porttitor volutpat tristique. Tristique duis proin imperdiet habitasse a, magna dignissim eget adipiscing. Rutrum pellentesque ullamcorper feugiat dapibus sodales non elit. Convallis urna faucibus tristique erat. Pulvinar elit amet eu, porttitor lacus pellentesque turpis nec. Porttitor id convallis tincidunt iaculis. Sed magna diam accumsan suspendisse duis eu.</p>
                        <h5 class="mb-4">3. Google Cloud Platform</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="thumb mb-4">
                                    <img src="{{ asset('themes/capperu/assets/img/blog/5.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <p class="mb-4">Fringilla nam pretium in aliquet. A pellen tesque tincidunt tellus sodales. Quam eget ante erat nulla facilisis sed habit asse quam massa. At enim vitae arcu in blandit malesuada purus. Suspendisse scelerisque sed. Id nisi, tristique. Tristique duis proin imperdiet habitasse a, magna dignissim eget. Rutrum pellen tesque ullam corper feugiat dapibus sodales non elit. </p>
                            </div>
                        </div>
                        <p class="mt-2">Congue lectus neque sit amet, consectetur adipiscing elit. Congue lectus neque, vel magna. Integer id justo in orci. Id mauris et id diam eu in amet, fermentum ultricies. Sit praesent quis nisi iaculis egestas at lobortis malesuada at. Nulla diam neque, lectus ornare nibh diam massa sit. Suspendisse odio aliquet et gravida. Amet molestie a, aliquam hac sed id sit. Sit elementum iaculis egestas sit. Lorem ornare lacus, lorem sit odio et cursus. Quis varius ullamcorper risus, orci et. Massa tempor ac semper dui in. Nibh malesuada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>

@endsection