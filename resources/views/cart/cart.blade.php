@extends('layouts.main')

@section('content')

    <main>
        <div class="container cart_container">
            @include('includes.sendOrderSuccess')
            <p class="reg_article cart_article">Моя корзина</p>
            <div class="lc_info cart_info">
                @if(session()->has('productsInCart'))
                <table width="90%" >

                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Артикул</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Название</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Стоимость</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Количество</b>

                        @foreach($products as $product)
                            <tr>
                                <td align="center" height="50px"><a href="{{route('catalog.show', $product->id)}}"><p class="paragraph_stile cart_paragraph">{{$product->product_name}}</p></a></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">{{$product->product_price}}</p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">{{session('productsInCart.' . $product->id)}}</p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="{{route('cart.delete', $product->id)}}">Удалить</a></p></td>
                            </tr>
                        @endforeach
                </table>
                <div style="display: flex; justify-content: space-between; width: 90%; margin-top: 50px;">
                    <b class="paragraph_stile cart_paragraph">Общая стоимость:</b>
                    <b class="paragraph_stile cart_paragraph">{{$totalPrice}} Руб.</b>
                </div>
                <a class="cart_button" href="{{route('cart.checkout')}}">Оформить заказ</a>

                @else
                <b class="paragraph_stile cart_paragraph">В вашей корзине нет товаров</b>
                @endif
            </div>
    </main>
@endsection
