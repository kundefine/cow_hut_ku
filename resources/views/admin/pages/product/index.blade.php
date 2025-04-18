@extends('admin.layout')

@section('title', 'Product List')

@push('third_party_css')
    <link rel="stylesheet" href="{{asset('assets/vendor/datatables/css/datatables.min.css')}}">
@endpush

@push('third_party_js')
    <script src="{{asset('assets/vendor/jquery/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/js/datatables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/js/dataTables.tailwindcss.js')}}"></script>
@endpush

@section('main')
    <div class="p-5">Product List Page</div>
    <div class="p-5">
        <table class="data-table">

            <thead>

            <tr>

                <th>No</th>

                <th>Name</th>

                <th>Email</th>

                <th width="100px">Action</th>

            </tr>

            </thead>

            <tbody>

            </tbody>

        </table>
    </div>

@endsection

@push('js')
    <script type="text/javascript">
        let table = new DataTable('.data-table', {
            processing: true,

            serverSide: true,

            ajax: "{{ route('admin.products.index') }}",

            columns: [

                {data: 'id', name: 'id'},

                {data: 'name', name: 'name'},

                {data: 'email', name: 'email'},

                {data: 'action', name: 'action', orderable: false, searchable: false},

            ]
        });
    </script>
@endpush
