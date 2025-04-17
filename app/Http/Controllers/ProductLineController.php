<?php

namespace App\Http\Controllers;

use App\Models\ProductLine;
use Illuminate\Http\Request;

class ProductLineController extends Controller
{
    # GET: /productLines: hiển thị toàn bộ sản phẩm
    public function index()
    {
        $productLines = ProductLine::query()->get();
        return view('product_line.index',['productLines' => $productLines]);
    }
}
