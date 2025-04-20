
<div class="flex justify-between items-center mb-5">
    <h1 class="text-3xl font-bold">{{ $title }}</h1>
    <button class="text-sm border-2 border-gray-200 p-2 text-gray-400 rounded-md">See All</button>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 grid-rows-1 gap-5">
    <x-single_product />
    <x-single_product />
    <x-single_product />
</div>
