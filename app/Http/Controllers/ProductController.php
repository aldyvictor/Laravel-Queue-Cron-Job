<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $original_size_image = $request->file('image')->store('images', 's3');
        $original_url_image = Storage::disk('s3')->url($original_size_image);
    }
}
