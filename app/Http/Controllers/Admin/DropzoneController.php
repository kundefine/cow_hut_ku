<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DropzoneController extends Controller
{
    public function dropzoneUpload(Request $request)
    {
        return response()->json('success', 200);
    }
}
