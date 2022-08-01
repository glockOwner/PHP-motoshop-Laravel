@extends('layouts.main')
@section('content')
	<main>
		<div class="container product_page">
			<h3 class="product_name">
                {{$product->product_name}}
			</h3>
			<div class="product_block photos">
				<div class="product_slider">
					<div class="slide">
						<img class="product_image" src="{{$product->img_path}}">
					</div>
					<div class="slide">
						<img class="product_image" src="{{$product->img_path}}">
					</div>
					<div class="slide">
						<img class="product_image" src="{{$product->img_path}}">
					</div>
				</div>
				<div class="product_buy_info">
					<p class="paragraph_stile price">
                        {{$product->product_price}} Руб.
						<p class="paragraph_stile">
                            {{$product->availability ? 'В наличии' : 'Нет в наличии'}}
						</p>
					</p>
					<p class="paragraph_stile">
						БЕСПЛАТНАЯ ДОСТАВКА
					</p>
					<a href="{{route('cart.add', $product->id)}}">Добавить в корзину</a>
				</div>
			</div>
			<div class="product_block description_block">
				<p class="paragraph_stile product_description">Описание</p>
				<p class="paragraph_stile">
                    {{$product->description}}
                </p>
			</div>

			<div class="product_block description_block">
				<p class="paragraph_stile product_description">Характеристики
				</p>
                @if($product->engine_cubature)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Кубатура</p>
                    <p class="paragraph_stile specification_text">{{$product->engine_cubature}} куб.см</p>
                </div>
                @endif

                @if($product->packed_weight)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Вес в упаковке</p>
                    <p class="paragraph_stile specification_text">{{$product->packed_weight}} кг.</p>
                </div>
                @endif

                @if($type)
                <div class='specification_row'>
                    <p class='paragraph_stile specification_text'>Тип</p>
                    <p class='paragraph_stile specification_text'> {{$type->title}} </p>
                </div>
                @endif




                @if($product->power)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Мощность</p>
                    <p class="paragraph_stile specification_text">{{$product->power}} л.с.</p>
                </div>
                @endif

                @if($product->engine)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Двигатель</p>
                    <p class="paragraph_stile specification_text">{{$product->engine}}</p>
                </div>
                @endif

                @if($product->transmission)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Трансмиссия</p>
                    <p class="paragraph_stile specification_text">{{$product->transmission}}</p>
                </div>
                @endif

                @if($product->engine_cooling)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Охлаждение</p>
                    <p class="paragraph_stile specification_text">{{$product->engine_cooling}}</p>
                </div>
                @endif

                @if($product->fuel_supply_system)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Система подачи топлива</p>
                    <p class="paragraph_stile specification_text">{{$product->fuel_supply_system}}</p>
                </div>
                @endif

                @if($product->front_suspension)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Передняя подвеска</p>
                    <p class="paragraph_stile specification_text">{{$product->front_suspension}}</p>
                </div>
                @endif

                @if($product->back_suspension)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Задняя подвеска</p>
                    <p class="paragraph_stile specification_text">{{$product->back_suspension}}</p>
                </div>
                @endif

                @if($product->front_brake)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Передний тормоз</p>
                    <p class="paragraph_stile specification_text">{{$product->front_brake}}</p>
                </div>
                @endif

                @if ($product->back_brake)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Задний тормоз</p>
                    <p class="paragraph_stile specification_text">{{$product->back_brake}}</p>
                </div>
                @endif

                @if ($product->wheels)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Колёса</p>
                    <p class="paragraph_stile specification_text">{{$product->wheels}}</p>
                </div>
                @endif

                @if ($product->length_width_height)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Длина*Ширина*Высота</p>
                    <p class="paragraph_stile specification_text">{{$product->length_width_height}} мм.</p>
                </div>
                @endif

                @if($product->base_length)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">База</p>
                    <p class="paragraph_stile specification_text">{{$product->base_length}} мм.</p>
                </div>
                @endif

                @if($product->saddle_height)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Высота по седлу</p>
                    <p class="paragraph_stile specification_text">{{$product->saddle_height}} мм.</p>
                </div>
                @endif

                @if($product->weight)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Вес</p>
                    <p class="paragraph_stile specification_text">{{$product->weight}} кг.</p>
                </div>
                @endif

                @if($product->tank_capacity)
                <div class="specification_row">
                    <p class="paragraph_stile specification_text">Ёмкость бака</p>
                    <p class="paragraph_stile specification_text">{{$product->tank_capacity}} л.</p>
                </div>
                @endif
			</div>

		</div>
	</main>
@endsection
