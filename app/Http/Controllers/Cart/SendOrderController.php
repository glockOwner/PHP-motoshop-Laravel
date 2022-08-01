<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\CheckoutRequest;
use Illuminate\Http\Request;

class SendOrderController extends BaseController
{
    public function __invoke(CheckoutRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('cart.index');
    }
}
