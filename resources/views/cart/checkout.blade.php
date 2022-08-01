@extends('layouts.main')
@section('content')
<main>
    <div class="container cart_container">
        <p class="reg_article cart_article">Моя корзина</p>
        <div class="lc_info">
            <b class="paragraph_stile checkout_article" >Общая сумма заказа: {{$totalPrice}}. Всего товаров: {{$totalQuantity}}</b>
            <form method="POST" class="reg checkout" action="{{route('cart.send')}}" style=" height: auto;">
                @csrf
                <input class="input_style" type="text" name="user_name" placeholder="Имя" value="{{isset($user) ? $user->name : ''}}">
                @error('user_name')
                    <p class="paragraph_stile"><font color="red">{{$message}}</font></p>
                @enderror
                <input class="input_style" type="text" name="user_mail" placeholder="Email" value="{{isset($user) ? $user->email : ''}}">
                @error('user_mail')
                <p class="paragraph_stile"><font color="red">{{$message}}</font></p>
                @enderror
                <input class="input_style" type="text" name="user_phone" placeholder="Номер телефона">
                @error('user_phone')
                <p class="paragraph_stile"><font color="red">{{$message}}</font></p>
                @enderror
                <input class="input_style" type="text" name="user_postcode" placeholder="Почтовый индекс">
                @error('user_postcode')
                <p class="paragraph_stile"><font color="red">{{$message}}</font></p>
                @enderror
                <input class="input_style" type="text" name="user_locality" placeholder="Населённый пункт">
                @error('user_locality')
                <p class="paragraph_stile"><font color="red">{{$message}}</font></p>
                @enderror
                <input class="input_style" type="text" name="delivery_address" placeholder="Адрес доставки">
                @error('delivery_address')
                <p class="paragraph_stile"><font color="red">{{$message}}</font></p>
                @enderror
                <input class="reg_button checkout_button" type="submit" name="reg_checkout" value="Оформить заказ">
            </form>
        </div>
</main>
@endsection
