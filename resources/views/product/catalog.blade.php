@extends('layouts.main')
@section('content')
	<main>
		<div class="container">

			<div class="goods">
				@foreach($products as $product)
                    <div class="goods_card">
                        <div class="goods_card_image" style="background-image: url({{$product->	img_path}})"></div>
                        <p>
                            {{$product->product_name}}
                        </p>
                        <p>
                            {{$product->product_price}} Руб.
                        </p>
                        <a href="{{route('catalog.show', $product->id)}}">Подробнее</a>
                    </div>
                @endforeach


			<form class="page_switch">
				{{$products->links()}}
			</form>
		</div>
	</main>
@endsection
