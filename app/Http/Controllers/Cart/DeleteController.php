<?php

namespace App\Http\Controllers\Cart;

class DeleteController extends BaseController
{
    public function __invoke($id)
    {
        $this->service->deleteFromCart($id);

        return redirect()->route('cart.index');
    }
}
