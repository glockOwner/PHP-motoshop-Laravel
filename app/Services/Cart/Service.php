<?php
namespace App\Services\Cart;
use App\Models\Order;
use App\Models\Product;
use Psy\Util\Json;

class Service
{
    public function addIntoCart($id)
    {
        if (!isset($cartSession))
        {
            $cartSession = session();
        }
        if ($cartSession->has('productsInCart.' . $id))
        {
            $cartSession->increment('productsInCart.' . $id, 1);
        }
        else
        {
            $cartSession->put('productsInCart.' . $id, 1);
        }

        return $cartSession;
    }

    public function deleteFromCart($id)
    {
        if (session('productsInCart.' . $id) > 1)
        {
            session()->decrement('productsInCart.' . $id);
        }
        else
        {
            session()->forget('productsInCart.' . $id);
        }
    }

    public function getProductsByIDs()
    {
        $productIDs = $this->getProductIDs();
        $products = Product::all();
        return $products->whereIn('id', $productIDs);
    }

    public function getTotalPrice($products)
    {
        $totalPrice = 0;
        foreach ($products as $product)
        {
            $totalPrice += $product->product_price * session('productsInCart.' .  $product->id);
        }
        return $totalPrice;
    }

    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach (session('productsInCart') as $id => $productQuantity)
        {
            $totalQuantity += $productQuantity;
        }

        return $totalQuantity;
    }

    public function getProductIDs()
    {
        return $productIDs = session('productsInCart') ?  array_keys(session('productsInCart')) : null;
    }

    public function store($data)
    {
        $data['user_id'] = auth()->user() ? auth()->user()->id  : null;
        $data['products'] = Json::encode(session('productsInCart'));
        $data['status'] = 0;

        session(['sendOrderSuccess' => 'Вы успешно добавили заказ. Мы вам перезвоним']);
        session()->forget('productsInCart');
        return Order::create($data);

    }
}
