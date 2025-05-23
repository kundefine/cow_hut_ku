<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        moveFolderToAnotherDisk('local', "/product_images_temp/{$request->productImageUploadId}", 'public', '/product_images');
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('frontend.pages.product.show', compact('slug'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function uploadImages(Request $request)
    {
        $files = \Storage::allFiles("product_images_temp/{$request->query('productImageUploadId')}");



        \Storage::putFileAs("product_images_temp/{$request->query('productImageUploadId')}", $request->file('productImages'), (count($files) + 1) . '.' .$request->file('productImages')->getClientOriginalExtension());


        return response()->json(['success' => 'You have successfully uploaded an image.']);
    }
}
