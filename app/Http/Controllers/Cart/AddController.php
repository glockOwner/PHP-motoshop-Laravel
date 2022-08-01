<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\CheckoutRequest;
use Illuminate\Http\Request;

class AddController extends BaseController
{
    public function __invoke($id)
    {
        $cartSession = $this->service->addIntoCart($id);

        return redirect()->route('catalog.show', $id);
    }
}
