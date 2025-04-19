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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-start">
                <div class="border-2 border-[#EEEFF2] p-5 lg:p-10 grid grid-cols-1 lg:grid-cols-5 gap:1 lg:gap-0 items-start">
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

                <div class="product_details border-2 border-[#EEEFF2] rounded-t-md">

                    <h1 class="text-white bg-gray-400 rounded-t-md px-5 py-3 font-bold">ব্যবসার জন্য পাইকারি দামে গরু কিনতে রেজিস্টেশন করুন
                        <button class="bg-white rounded-full text-gray-300 px-5 py-2 ml-3 text-[14px]">Register</button></h1>

                </div>
            </div>
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
