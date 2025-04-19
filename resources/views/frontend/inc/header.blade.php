<section class="section mb-5 md:mb-10 header_section">
    <header class="header_top border-b-2 border-gray-100
        px-5 lg:px-10
        py-5">
        <div class="grid
                gap-5 md:gap-5 lg:gap-5 xl:gap-10
                grid-cols-1 md:grid-cols-2 lg:grid-cols-7 xl:grid-cols-5
                grid-rows-1
                items-center
                "
        >
            <div class="logo_searchbar
                    col-span-1 md:col-span-2 lg:col-span-3 xl:col-span-3
                    flex
                    gap-2 lg:gap-1 xl:gap-10
                    flex-col lg:flex-row
                    items-center">
                <div class="logo text-2xl lg:text-lg font-bold">Online Goru Bazar</div>
                <div class="searchbar grow w-full lg:w-auto">
                    <input type="text" class="p-3 w-full bg-gray-100 rounded-md" placeholder="Search">
                </div>
            </div>

            <div class="nav
                col-span-1 lg:col-span-2 xl:col-span-1
                justify-items-center md:justify-items-start lg:justify-items-center">
                <ul class="flex gap-4">
                    <li>About us</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="cart
                col-span-1 lg:col-span-2 xl:col-span-1">
                <ul class="flex justify-between">
                    <li class="flex gap-2 items-center"><img src="{{asset('assets/images/globe.svg')}}" alt="globe.svg"> ভাষা</li>
                    <li class="flex gap-2 items-center"><img src="{{asset('assets/images/user-circle.svg')}}" alt="globe.svg"> User</li>
                    <li class="flex gap-2 items-center"><img src="{{asset('assets/images/ShoppingCartSimple.svg')}}" alt="globe.svg"> Cart</li>
                </ul>
            </div>
        </div>
    </header>
    <header class="header_bottom px-10 py-5 shadow-[0px_4px_8px_-2px_#1018281A]">
        <ul class="flex gap-5 md:gap-10 justify-center items-center">
            <li>
                <a href="" class="flex flex-col md:flex-row gap-2 items-center"><img src="{{asset('assets/images/cow-icon.svg')}}" alt=""> গরু </a>
            </li>
            <li>
                <a href="" class="flex flex-col md:flex-row gap-2 items-center"><img src="{{asset('assets/images/goat-icon.svg')}}" alt=""> ছাগল </a>
            </li>
            <li>
                <a href="" class="flex flex-col md:flex-row gap-2 items-center"> <img src="{{asset('assets/images/khabar-icon.svg')}}" alt=""> খাবার </a>
            </li>

            <li>
                <a href="" class="flex flex-col md:flex-row gap-2 items-center"><img src="{{asset('assets/images/kshai-icon.svg')}}" alt=""> কসাই </a>
            </li>
            <li>
                <a href="" class="flex flex-col md:flex-row gap-2 items-center"><img src="{{asset('assets/images/suri-icon.svg')}}" alt=""> ছুরি </a>
            </li>
            <li>
                <a href="" class="flex flex-col md:flex-row gap-2 items-center"><img src="{{asset('assets/images/anusangik.svg')}}" alt=""> আনুষাঙ্গিক </a>
            </li>
        </ul>
    </header>
</section>
