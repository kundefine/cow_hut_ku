@extends('frontend.layout')

@section('title', $slug)

@push('third_party_css')
    <link rel="stylesheet" href="{{asset('assets/vendor/swiper/js/swiper.min.css')}}">
    <style>
        .ZoomContainer {
            display: none;
        }
    </style>
@endpush

@push('third_party_js')
    <script src="{{asset('assets/vendor/jquery/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/elevatezoom-plus/jquery.ez-plus.js')}}"></script>
@endpush

@section('main')
    <section class="section product_details_section">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 md:gap-10 items-start">
                <div class="product_image_details border-2 border-[#EEEFF2] p-5 lg:p-10 grid grid-cols-1 lg:grid-cols-5 gap:1 lg:gap-0 items-start rounded-md">
                    <div class="col-span-1 lg:col-span-1 order-2 lg:order-1">
                        <div class="product_image_thumbnail_list swiper h-auto lg:h-[400px] min-w-full lg:min-w-fit">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="w-20 h-20 mb-3 rounded-md" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="w-20 h-20 mb-3 rounded-md" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="w-20 h-20 mb-3 rounded-md" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="w-20 h-20 mb-3 rounded-md" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" class="w-20 h-20 mb-3 rounded-md" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" class="w-20 h-20 mb-3 rounded-md" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" class="w-20 h-20 mb-3 rounded-md" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full col-span-1 lg:col-span-4 order-1 lg:order-2 ">
                        <div class="product_image_single_view swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="w-fit mb-3 rounded-md ez_zoom" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="w-fit mb-3 rounded-md ez_zoom" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="w-fit mb-3 rounded-md ez_zoom" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="w-fit mb-3 rounded-md ez_zoom" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" class="w-fit mb-3 rounded-md ez_zoom" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" class="w-fit mb-3 rounded-md ez_zoom" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <video src="https://www.w3schools.com/html/mov_bbb.mp4" class="w-full mb-3 rounded-md ez_zoom" controls></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product_details border-2 border-[#EEEFF2] rounded-md">
                    <h2 class="flex justify-between items-center px-3 md:px-10 py-3 md:py-5 text-white bg-gray-300 rounded-t-md font-bold">
                        ব্যবসার জন্য পাইকারি দামে গরু কিনতে রেজিস্টেশন করুন
                        <button class="bg-white rounded-full text-gray-300 px-5 py-1 md:py-2 ml-3 text-[14px]">Register</button>
                    </h2>
                    <ul class="px-5 md:px-10 pb-5 md:pb-10">

                        <li class="py-2 md:py-5 text-lg md:text-2xl font-light text-gray-500 flex items-center justify-between">
                            <h2 class=""><i class="fal fa-eye mr-2"></i> 3778 People recently viewed this</h2>
                            <span>
                                <i class="fal fa-map-location-dot mr-5"></i>
                                <i class="fal fa-share-nodes"></i>
                            </span>

                        </li>
                        <li class="py-2 md:py-5 border-y-2 border-y-gray-100">
                            <h1 class="text-2xl md:text-3xl font-bold">Deshi Cow - 15285</h1>
                            <h2 class="text-xl md:text-2xl font-bold">
                                <span class="text-gray-500 font-light">Avg:Wt:</span> - (450Kg)
                            </h2>
                        </li>
                        <li class="py-2 md:py-5 flex flex-col md:flex-row gap-2 md:gap-5 items-start md:items-center justify-between">
                            <div class="flex gap-4 items-center">
                                <h2 class="text-xl font-bold">৳50,000</h2>
                                <h2 class="text-xl line-through text-gray-500">৳65,000</h2>
                                <button class="bg-gray-300 text-white text-lg font-bold px-5 py-1 ml-5 md:ml-10">30%OFF</button>
                            </div>
                            <div class="w-full md:w-auto">
                                <button class="bg-gray-300 text-lg font-bold px-10 w-full md:w-auto py-3">Add to Cart</button>
                            </div>
                        </li>
                        <li class="py-2 md:py-5 pb-0 flex gap-2 md:gap-10 items-center justify-between md:justify-start text-sm md:text-xl font-medium">
                            <div>
                                <i class="fal fa-heart"></i> Add to wishlist
                            </div>
                            <div>
                                <i class="fal fa-badge-check"></i> Free delivery
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="product_description border-2 border-[#EEEFF2] rounded-md">
                    <h1 class="text-xl font-bold border-b-2 border-b-[#EEEFF2] px-5 lg:px-10 py-5">Product Description</h1>
                    <div class="px-5 lg:px-10 py-5">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur debitis deleniti, dolorum eligendi exercitationem laboriosam maxime nam necessitatibus nemo officia pariatur perferendis qui quibusdam quisquam rerum voluptas voluptates! Deserunt, sapiente!</p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur debitis deleniti, dolorum eligendi exercitationem laboriosam maxime nam necessitatibus nemo officia pariatur perferendis qui quibusdam quisquam rerum voluptas voluptates! Deserunt, sapiente!</p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur debitis deleniti, dolorum eligendi exercitationem laboriosam maxime nam necessitatibus nemo officia pariatur perferendis qui quibusdam quisquam rerum voluptas voluptates! Deserunt, sapiente!</p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur debitis deleniti, dolorum eligendi exercitationem laboriosam maxime nam necessitatibus nemo officia pariatur perferendis qui quibusdam quisquam rerum voluptas voluptates! Deserunt, sapiente!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section category_product_section mb-5">
        <div class="container mx-auto px-5 lg:px-10 py-5 bg-gray-100">
            @include('frontend.inc.category_product_section', ["title" => "You can also buy", "products" => ["array of products"]])
        </div>
    </section>
    <section class="section category_product_section ">
        <div class="container mx-auto px-5 lg:px-10 py-5 bg-gray-100">
            @include('frontend.inc.category_product_section', ["title" => "Related", "products" => ["array of products"]])
        </div>
    </section>
    <section class="section shipping_info_section">
        <div class="container mx-auto px-5 lg:px-10 py-5 bg-gray-200">
            @include('frontend.inc.shipping_info')
        </div>
    </section>
@endsection

@push('js')
    <script>
        let productImageThumbnailListSwiper = new Swiper(".product_image_thumbnail_list", {
            spaceBetween: 10,
            direction: 'vertical',
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            breakpoints: {
                0: {
                    direction: 'horizontal',
                    slidesPerView: 4,
                    spaceBetween: 10,

                },
                769: {
                    direction: 'vertical',
                    slidesPerView: 4,
                    spaceBetween: 10,

                }
            }
        });

        let swiper2 = new Swiper(".product_image_single_view", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 10,
            thumbs: {
                swiper: productImageThumbnailListSwiper,
            },
        });

        document.querySelectorAll('.product_image_thumbnail_list .swiper-slide').forEach((el, index) => {
            el.addEventListener('click', () => {
                swiper2.slideTo(index);
            });
        });

        if ($(window).width() > 768) {
            $(".ez_zoom").ezPlus(
                //     {
                //     zoomWindowPosition: 'customZoomContainer',
                //     zoomWindowHeight: 400,
                //     zoomWindowWidth: 400,
                //     borderSize: 0,
                //     easing: true
                // }
                {
                    responsive: false
                }
            );
        }

    </script>
@endpush
