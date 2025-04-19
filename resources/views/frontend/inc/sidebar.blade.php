<aside class="float-left w-[300px] bg-gray-950 h-full overflow-auto text-white">
    <div class="logo text-2xl font-bold text-center py-5 border-b-2 border-b-gray-200">Cow Hut Bazar</div>

    <ul class="p-3 flex flex-col gap-5 mt-5">
        <li>
            <a href="{{route('admin.products.index')}}" class="{{is_active_link('admin/products')}} flex gap-3 items-center">
                <i class="fal fa-cart-circle-plus"></i> Products
            </a>
        </li>
        <li>
            <a href="" class="{{is_active_link('/admin/products')}} flex gap-3 items-center">
                <i class="fal fa-list"></i> Categories
            </a>
        </li>
    </ul>

</aside>
