<?php

namespace App\Http\Controllers\Cart;

class CheckoutController extends BaseController
{
    public function __invoke()
    {
        $user = auth()->user();
        $totalPrice = $this->service->getTotalPrice($this->service->getProductsByIDs());
        $totalQuantity = $this->service->getTotalQuantity();
        return view('cart.checkout', compact('totalPrice', 'totalQuantity', 'user'));
    }
}
