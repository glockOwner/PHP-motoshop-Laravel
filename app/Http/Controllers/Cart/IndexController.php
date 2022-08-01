<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {

        $products = $this->service->getProductsByIDs();
        $totalPrice = $this->service->getTotalPrice($products);
        return view('cart.cart', compact('products', 'totalPrice'));
    }
}
