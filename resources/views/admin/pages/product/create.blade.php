@extends('admin.layout')

@section('title', 'Product Create')

@push('third_party_css')
    <link rel="stylesheet" href="{{asset('assets/vendor/dropzone/dropzone.min.css')}}">
@endpush

@push('third_party_js')
    <script src="{{asset('assets/vendor/dropzone/dropzone.min.js')}}"></script>
@endpush

@section('main')
    <h2 class="p-5 text-3xl font-bold">Product Create</h2>
    <div class="p-5 grid grid-cols-3 gap-5">
        <div class="ku_card">
            <form action="">
                <input type="hidden" value="{{\Illuminate\Support\Str::uuid()}}" name="productImageUploadId">
                <div class="mb-5">
                    <label for="name" class="block">Product Name</label>
                    <input type="text" name="name" id="name" class="ku_input" placeholder="Product Name">
                </div>
                <div class="mb-5">
                    <label for="price" class="block">Product Price</label>
                    <input type="text" name="price" id="price" class="ku_input" placeholder="Product Price">
                </div>

                <div class="mb-5">
                    <label for="weight" class="block">Product Weight</label>
                    <input type="text" name="weight" id="weight" class="ku_input" placeholder="Product Weight">
                </div>

                <div class="mb-5">
                    <label for="category_id" class="block">Product Category</label>
                    <select name="category_id" id="" class="ku_select">
                        <option value="">Please select a Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                        <option value="">Category 4</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="breed_id" class="block">Product Breed</label>
                    <select name="breed_id" id="" class="ku_select">
                        <option value="">Please select a Breed</option>
                        <option value="">Breed 1</option>
                        <option value="">Breed 2</option>
                        <option value="">Breed 3</option>
                        <option value="">Breed 4</option>
                    </select>
                </div>

            </form>
        </div>

        <div class="col-span-2 ku_card">
            <div id="productImages" class="w-full min-h-[250px] border-2 border-gray-500 dropzone"> </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        let productImageUploadId = document.querySelector('input[name="productImageUploadId"]').value
        console.log(productImageUploadId)
        Dropzone.autoDiscover = false;
        let productImagesDropzone = new Dropzone("#productImages", {
            url: "{{route('admin.products.upload.images')}}" + `?productImageUploadId=${productImageUploadId}`,
            method: 'post',
            paramName: 'productImages',
            parallelUploads: 1,
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            },
            addedfiles: file => {
                console.log(file)
            }

        })
    </script>
@endpush
