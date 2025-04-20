@extends('frontend.layout')

@section('title', 'Home Page')

@push('third_party_css')
    <link rel="stylesheet" href="{{asset('assets/vendor/swiper/js/swiper.min.css')}}">
@endpush

@push('third_party_js')
    <script src="{{asset('assets/vendor/swiper/js/swiper.min.js')}}"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            // direction: 'vertical',
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        document.querySelector('.swiper-button-next').addEventListener('click', () => {
            swiper.slideNext();
        });
        document.querySelector('.swiper-button-prev').addEventListener('click', () => {
            swiper.slidePrev();
        });
    </script>
@endpush

@section('main')
    <section class="section mb-5 md:mb-10 hero_section">
        <div class="container mx-auto">
            <div class="grid grid-cols-4 grid-row-1">
                <div class="overflow-hidden col-span-4 lg:col-span-3">
                    <img src="{{asset('assets/images/hero_banner.jpg')}}" alt="" class="w-[100%]">
                </div>
                <div class="p-5 col-span-4 lg:col-span-1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <ul class="grid grid-cols-3 gap-3 lg:block">
                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">01</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Choose</h6>
                                        <p class="text-[12px] md:text-sm">Choose your Cow, from a large list of quality & verified cows.</p>
                                    </li>

                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">02</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Buy</h6>
                                        <p class="text-[12px] md:text-sm">Easy Purchase with Online/ Offline Payment.</p>
                                    </li>

                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">03</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Process</h6>
                                        <p class="text-[12px] md:text-sm">Request for Processing and get at your doorstep.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="swiper-slide">
                                <ul class="grid grid-cols-3 gap-3 lg:block">
                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">01</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Choose</h6>
                                        <p class="text-[12px] md:text-sm">Choose your Cow, from a large list of quality & verified cows.</p>
                                    </li>

                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">02</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Buy</h6>
                                        <p class="text-[12px] md:text-sm">Easy Purchase with Online/ Offline Payment.</p>
                                    </li>

                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">03</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Process</h6>
                                        <p class="text-[12px] md:text-sm">Request for Processing and get at your doorstep.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="swiper-slide">
                                <ul class="grid grid-cols-3 gap-3 lg:block">
                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">01</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Choose</h6>
                                        <p class="text-[12px] md:text-sm">Choose your Cow, from a large list of quality & verified cows.</p>
                                    </li>

                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">02</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Buy</h6>
                                        <p class="text-[12px] md:text-sm">Easy Purchase with Online/ Offline Payment.</p>
                                    </li>

                                    <li class="lg:mb-5 xl:mb-10">
                                        <h5 class="text-2xl md:text-3xl font-bold">03</h5>
                                        <h6 class="text-sm md:text-lg font-bold">Process</h6>
                                        <p class="text-[12px] md:text-sm">Request for Processing and get at your doorstep.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="slide_button flex gap-3 mt-5 lg:mt-0 justify-center lg:justify-start">
                        <button class="swiper-button-next rounded-full w-8 md:w-10 h-8 md:h-10 flex justify-center items-center border-2 border-gray-400 text-gray-500 font-lg"> <i class="fa-thin fa-arrow-right"></i> </button>
                        <button class="swiper-button-prev rounded-full w-8 md:w-10 h-8 md:h-10 flex justify-center items-center border-2 border-black text-white bg-black font-lg"> <i class="fa-thin fa-arrow-left"></i> </button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="section mb-5 md:mb-10 category_section">
        <div class="container mx-auto p-5 md:p-10 lg:p-0 pb-2 md:pb-10 lg:pb-0">
            <div class="grid grid-cols-2 grid-rows-1 gap-5">
                <div class="bg-gray-200 p-5 rounded-sm">
                    <h1 class="text-3xl font-bold">গরু</h1>
                    <p class="">সর্বমোট দেশি গরুর সংখ্যা 280</p>
                </div>
                <div class="bg-gray-200 p-5 rounded-sm">
                    <h1 class="text-3xl font-bold">ছাগল</h1>
                    <p class="">সর্বমোট ছাগল গরুর সংখ্যা 280</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section mb-5 md:mb-10 filter_section ">
        <div class="container mx-auto p-5 md:p-10 lg:p-0 pb-2 md:pb-10 lg:pb-0">
            <div class="grid grid-cols-6 grid-rows-1 gap-3 md:gap-5">
                <input type="text" class="bg-gray-100 text-[13px] md:text-lg p-1 lg:p-3 rounded-sm md:rounded-md col-span-2 md:col-span-1" name="" id="" placeholder="Breed">
                <input type="text" class="bg-gray-100 text-[13px] md:text-lg p-1 lg:p-3 rounded-sm md:rounded-md col-span-2 md:col-span-1" name="" id="" placeholder="Minimum Weight">
                <input type="text" class="bg-gray-100 text-[13px] md:text-lg p-1 lg:p-3 rounded-sm md:rounded-md col-span-2 md:col-span-1" name="" id="" placeholder="Maximum Weight">
                <input type="text" class="bg-gray-100 text-[13px] md:text-lg p-1 lg:p-3 rounded-sm md:rounded-md col-span-2 md:col-span-1" name="" id="" placeholder="Minimum Price">
                <input type="text" class="bg-gray-100 text-[13px] md:text-lg p-1 lg:p-3 rounded-sm md:rounded-md col-span-2 md:col-span-1" name="" id="" placeholder="Maximum Price">
                <button class="bg-black text-[13px] md:text-lg p-1 lg:p-3 text-white rounded-sm md:rounded-md col-span-2 md:col-span-1">Search</button>

            </div>
        </div>
    </section>
    <section class="section category_product_section">
        <div class="container mx-auto bg-gray-100 p-5 md:p-10 lg:p-20 pb-2 md:pb-10">
            @include('frontend.inc.category_product_section', ["title" => "Choose Your Cow!", "products" => ["array_of_product_list"]])
        </div>
        <div class="container mx-auto bg-gray-100 p-5 md:p-10 lg:p-20 pb-2 md:pb-10">
            @include('frontend.inc.category_product_section', ["title" => "Choose Your Goat!", "products" => ["array_of_product_list"]])
        </div>
        <div class="container mx-auto bg-gray-100 p-5 md:p-10 lg:p-20 pb-2 md:pb-10">
            <img src="{{asset('assets/images/hero_banner.jpg')}}" alt="" class="w-full">
        </div>
    </section>
    <section class="section shipping_info_section">
        <div class="container mx-auto bg-gray-50 p-5 md:p-10 lg:p-20 p-2 md:pb-10">
            @include('frontend.inc.shipping_info')
        </div>
    </section>
@endsection
