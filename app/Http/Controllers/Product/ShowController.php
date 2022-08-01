<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {
        $type = $product->type;
        $brand = $product->brand;
        return view('product.view', compact('product', 'type', 'brand'));
    }
}
