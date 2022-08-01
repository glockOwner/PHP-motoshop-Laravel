@extends('layouts.main')
@section('content')
	<main>
		<div class="container lc_container">
			<div class="lc_menu">
				<p class="paragraph_stile lc_menu_article">Личные данные</p>
                <p class="paragraph_stile">Привет {{Auth::user()->name}}!</p>
                <a class="dropdown-item mb-4" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Выйти') }}
                </a>
				<div class="lc_menu_under_article_block">
					<a href="{{route('home')}}" class="paragraph_stile">Редактировать данные</a>
				</div>

				<p class="paragraph_stile lc_menu_article">Заказы</p>
				<div class="lc_menu_under_article_block">
					<a href="{{route('auth.history')}}" class="paragraph_stile">Список заказов</a>
				</div>
			</div>

			<div class="lc_info">
				<p class="reg_article">Мои заказы</p>
				<div class="order_card">
					<div class="order_card_top">
						<div>
							<p class="paragraph_stile">Заказ № 9064916 от 10.11.2021</p>
							<p class="paragraph_stile">Сумма: 350 руб. (оплачен)</p>
							<p class="paragraph_stile">Способ оплаты: Банковские карты</p>
							<p class="paragraph_stile">Способ доставки: ТК:СДЭК (до пункта выдачи)</p>
						</div>
						<div>
							<p class="paragraph_stile">Ожидает отправки</p>
							<p class="paragraph_stile"><a href="">Повторить заказ</a></p>
							<p class="paragraph_stile"><a href="">Отменить заказ</a></p>
						</div>
					</div>

					<div class="order_card_bottom">
						<p class="paragraph_stile">Состав заказа:</p>
						<p class="paragraph_stile"><a href="">Рычаг сцепления питбайк в сборе SM-PARTS</a>(1 шт);</p>
					</div>
				</div>
			</div>
	</main>
@endsection
