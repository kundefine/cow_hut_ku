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
            <div class="flex justify-between items-center mb-5">
                <h1 class="text-3xl font-bold">Choose Your Cow!</h1>
                <button class="text-sm border-2 border-gray-200 p-2 text-gray-400 rounded-md">See All</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 grid-rows-1 gap-5">
                <div class="single_product bg-white p-2">
                    <div class="border-b-2 border-b-gray-100 relative pb-2">
                        <div class="absolute top-5">
                            <div class="relative inline-block bg-black text-white text-xs font-bold px-2 py-1 w-15">
                                NEW
                                <div class="absolute right-0 top-0 h-full w-2 bg-white clip-triangle"></div>
                            </div>
                        </div>

                        <div class="bg-white flex justify-center items-center mb-2">
                            <img src="{{asset('assets/images/no-image.png')}}" alt="">
                        </div>

                        <div class="text-[12px] bg-pink-50 text-purple-600 inline-block font-bold text-lg px-5 py-2 rounded-md">Add Today</div>
                    </div>
                    <div class="mt-2">
                        <div class="text-lg font-bold">Deshi Cow - 14760</div>
                        <div>
                            <span class="font-bold">$50,000</span>
                            <span class="font-light line-through">$55,000</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Age: 3Yr</span>
                            <span class="mr-auto ml-30">Avg: 350kg</span>
                        </div>
                    </div>
                    <button class="flex gap-3 bg-gray-100 w-full justify-center mt-10 p-2"><img src="{{asset('assets/images/cart-icon.svg')}}" alt=""> Add to Cart</button>
                </div>
                <div class="single_product bg-white p-2">
                    <div class="border-b-2 border-b-gray-100 relative pb-2">
                        <div class="absolute top-5">
                            <div class="relative inline-block bg-black text-white text-xs font-bold px-2 py-1 w-15">
                                NEW
                                <div class="absolute right-0 top-0 h-full w-2 bg-white clip-triangle"></div>
                            </div>
                        </div>

                        <div class="bg-white flex justify-center items-center mb-2">
                            <img src="{{asset('assets/images/no-image.png')}}" alt="">
                        </div>

                        <div class="text-[12px] bg-pink-50 text-purple-600 inline-block font-bold text-lg px-5 py-2 rounded-md">Add Today</div>
                    </div>
                    <div class="mt-2">
                        <div class="text-lg font-bold">Deshi Cow - 14760</div>
                        <div>
                            <span class="font-bold">$50,000</span>
                            <span class="font-light line-through">$55,000</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Age: 3Yr</span>
                            <span class="mr-auto ml-30">Avg: 350kg</span>
                        </div>
                    </div>
                    <button class="flex gap-3 bg-gray-100 w-full justify-center mt-10 p-2"><img src="{{asset('assets/images/cart-icon.svg')}}" alt=""> Add to Cart</button>
                </div>
                <div class="single_product bg-white p-2">
                    <div class="border-b-2 border-b-gray-100 relative pb-2">
                        <div class="absolute top-5">
                            <div class="relative inline-block bg-black text-white text-xs font-bold px-2 py-1 w-15">
                                NEW
                                <div class="absolute right-0 top-0 h-full w-2 bg-white clip-triangle"></div>
                            </div>
                        </div>

                        <div class="bg-white flex justify-center items-center mb-2">
                            <img src="{{asset('assets/images/no-image.png')}}" alt="">
                        </div>

                        <div class="text-[12px] bg-pink-50 text-purple-600 inline-block font-bold text-lg px-5 py-2 rounded-md">Add Today</div>
                    </div>
                    <div class="mt-2">
                        <div class="text-lg font-bold">Deshi Cow - 14760</div>
                        <div>
                            <span class="font-bold">$50,000</span>
                            <span class="font-light line-through">$55,000</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Age: 3Yr</span>
                            <span class="mr-auto ml-30">Avg: 350kg</span>
                        </div>
                    </div>
                    <button class="flex gap-3 bg-gray-100 w-full justify-center mt-10 p-2"><img src="{{asset('assets/images/cart-icon.svg')}}" alt=""> Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="container mx-auto bg-gray-100 p-5 md:p-10 lg:p-20 pb-2 md:pb-10">
            <div class="flex justify-between items-center mb-5">
                <h1 class="text-3xl font-bold">Choose Your goat!</h1>
                <button class="text-sm border-2 border-gray-200 p-2 text-gray-400 rounded-md">See All</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 grid-rows-1 gap-5">
                <div class="single_product bg-white p-2">
                    <div class="border-b-2 border-b-gray-100 relative pb-2">
                        <div class="absolute top-5">
                            <div class="relative inline-block bg-black text-white text-xs font-bold px-2 py-1 w-15">
                                NEW
                                <div class="absolute right-0 top-0 h-full w-2 bg-white clip-triangle"></div>
                            </div>
                        </div>

                        <div class="bg-white flex justify-center items-center mb-2">
                            <img src="{{asset('assets/images/no-image.png')}}" alt="">
                        </div>

                        <div class="text-[12px] bg-pink-50 text-purple-600 inline-block font-bold text-lg px-5 py-2 rounded-md">Add Today</div>
                    </div>
                    <div class="mt-2">
                        <div class="text-lg font-bold">Deshi Cow - 14760</div>
                        <div>
                            <span class="font-bold">$50,000</span>
                            <span class="font-light line-through">$55,000</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Age: 3Yr</span>
                            <span class="mr-auto ml-30">Avg: 350kg</span>
                        </div>
                    </div>
                    <button class="flex gap-3 bg-gray-100 w-full justify-center mt-10 p-2"><img src="{{asset('assets/images/cart-icon.svg')}}" alt=""> Add to Cart</button>
                </div>
                <div class="single_product bg-white p-2">
                    <div class="border-b-2 border-b-gray-100 relative pb-2">
                        <div class="absolute top-5">
                            <div class="relative inline-block bg-black text-white text-xs font-bold px-2 py-1 w-15">
                                NEW
                                <div class="absolute right-0 top-0 h-full w-2 bg-white clip-triangle"></div>
                            </div>
                        </div>

                        <div class="bg-white flex justify-center items-center mb-2">
                            <img src="{{asset('assets/images/no-image.png')}}" alt="">
                        </div>

                        <div class="text-[12px] bg-pink-50 text-purple-600 inline-block font-bold text-lg px-5 py-2 rounded-md">Add Today</div>
                    </div>
                    <div class="mt-2">
                        <div class="text-lg font-bold">Deshi Cow - 14760</div>
                        <div>
                            <span class="font-bold">$50,000</span>
                            <span class="font-light line-through">$55,000</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Age: 3Yr</span>
                            <span class="mr-auto ml-30">Avg: 350kg</span>
                        </div>
                    </div>
                    <button class="flex gap-3 bg-gray-100 w-full justify-center mt-10 p-2"><img src="{{asset('assets/images/cart-icon.svg')}}" alt=""> Add to Cart</button>
                </div>
                <div class="single_product bg-white p-2">
                    <div class="border-b-2 border-b-gray-100 relative pb-2">
                        <div class="absolute top-5">
                            <div class="relative inline-block bg-black text-white text-xs font-bold px-2 py-1 w-15">
                                NEW
                                <div class="absolute right-0 top-0 h-full w-2 bg-white clip-triangle"></div>
                            </div>
                        </div>

                        <div class="bg-white flex justify-center items-center mb-2">
                            <img src="{{asset('assets/images/no-image.png')}}" alt="">
                        </div>

                        <div class="text-[12px] bg-pink-50 text-purple-600 inline-block font-bold text-lg px-5 py-2 rounded-md">Add Today</div>
                    </div>
                    <div class="mt-2">
                        <div class="text-lg font-bold">Deshi Cow - 14760</div>
                        <div>
                            <span class="font-bold">$50,000</span>
                            <span class="font-light line-through">$55,000</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Age: 3Yr</span>
                            <span class="mr-auto ml-30">Avg: 350kg</span>
                        </div>
                    </div>
                    <button class="flex gap-3 bg-gray-100 w-full justify-center mt-10 p-2"><img src="{{asset('assets/images/cart-icon.svg')}}" alt=""> Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="container mx-auto bg-gray-100 p-5 md:p-10 lg:p-20 pb-2 md:pb-10">
            <img src="{{asset('assets/images/hero_banner.jpg')}}" alt="" class="w-full">
        </div>
    </section>
    <section class="section shipping_info_section">
        <div class="container mx-auto bg-gray-50 p-5 md:p-10 lg:p-20 p-2 md:pb-10">
            <div class="grid grid-cols-1 md:grid-cols-3 grid-row-1 gap-3">
                <div class="flex gap-3 items-center bg-white p-3 rounded-md">
                    <div class="w-10 h-10 bg-black"></div>
                    <div>
                        <h4 class="font-bold mb-0">FREE SHIPPING</h4>
                        <small>On all orders over 5000</small>
                    </div>
                </div>

                <div class="flex gap-3 items-center bg-white p-3 rounded-md">
                    <div class="w-10 h-10 bg-black"></div>
                    <div>
                        <h4 class="font-bold mb-0">FREE SHIPPING</h4>
                        <small>On all orders over 5000</small>
                    </div>
                </div>

                <div class="flex gap-3 items-center bg-white p-3 rounded-md">
                    <div class="w-10 h-10 bg-black"></div>
                    <div>
                        <h4 class="font-bold mb-0">FREE SHIPPING</h4>
                        <small>On all orders over 5000</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section footer_section">
        <div class="footer_top">
            <div class="container mx-auto bg-white p-5 md:p-10 lg:p-20 pb-2 md:pb-10">
                <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-1 gap-10 md:gap-0">
                    <div>
                        <h1 class="text-lg font-semibold uppercase mb-2">Company</h1>
                        <ul>
                            <li class="font-light text-[1rem] mb-2"><a href="">About Us</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Careers</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Blog</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Partner with PharmEasy</a></li>
                        </ul>
                    </div>

                    <div>
                        <h1 class="text-lg font-semibold uppercase mb-2">Our Services</h1>
                        <ul>
                            <li class="font-light text-[1rem] mb-2"><a href="">Order Cow</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Category</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Lab Test</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Free Delivery</a></li>
                        </ul>
                    </div>

                    <div>
                        <h1 class="text-lg font-semibold uppercase mb-2">Useful Links</h1>
                        <ul>
                            <li class="font-light text-[1rem] mb-2"><a href="">FAQs</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Account</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Register</a></li>
                            <li class="font-light text-[1rem] mb-2"><a href="">Special Offers</a></li>
                        </ul>
                    </div>

                    <div>
                        <h1 class="text-lg font-semibold uppercase mb-2">Contact Us</h1>
                        <div>
                            <h6 class="font-semibold">Address</h6>
                            <p class="text-[12px]">97 Sohrawardy Ave, Dhaka 1212</p>
                        </div>

                        <div>
                            <h6 class="font-semibold">Hot Line:</h6>
                            <p class="text-[12px]">01322-819357</p>
                        </div>

                        <div>
                            <h6 class="font-semibold">Whatsapp:</h6>
                            <p class="text-[12px]">01322-819357</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_middle">
            <div class="container mx-auto bg-white px-5 md:px-10 lg:px-20 pt-5 pb-5  border-2 border-gray-100 border-r-0 border-l-0">
                <h1 class="font-semibold mb-3">Our payment partners</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-0 items-center">
                    <div class="border-r-0 md:border-r-2 border-r-gray-100 pr-0 md:pr-10 mr-0 md:mr-10">
                        <img src="{{asset('assets/images/banknames.svg')}}" alt="" class="w-full">
                    </div>
                    <div>
                        <ul class="flex flex-col md:flex-row gap-5">
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms and Conditions</a></li>
                            <li><a href="">Return and Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container mx-auto px-5 md:px-10 lg:px-20 pt-5 pb-10 md:pb-10 lg:pb-20">
                <div class="flex flex-col md:flex-row justify-center items-center gap-5 md:gap-10">
                    <p>©2024 Online cow Limited. All rights reserved.</p>
                    <img src="{{asset('assets/images/social_media_container.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
