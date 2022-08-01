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
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <div class="lc_menu_under_article_block">
                    <a href="{{route('home')}}" class="paragraph_stile">Редактировать данные</a>
                </div>

                <p class="paragraph_stile lc_menu_article">Заказы</p>
                <div class="lc_menu_under_article_block">
                    <a href="{{route('auth.history')}}" class="paragraph_stile">Список заказов</a>
                </div>
            </div>

            <div class="lc_info">
                <p class="reg_article">Редактировать личные данные</p>
                <form method="POST" class="reg" action="{{route('auth.update', Auth::user()->id)}}">
                    @csrf
                    @method('patch')
                    <p class="paragraph_stile">Почта</p>
                    <input class="input_style" value="{{Auth::user()->email}}" type="text" name="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <p class="paragraph_stile">Пароль</p>
                    <input class="input_style" type="password" name="password">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input class="input_style mt-4" type="submit" value="Сохранить">
                </form>
                @if(isset($_GET['exception']))
                    <p class="text-danger">Внутренняя ошибка при обновлении данных</p>
                @endif
            </div>
    </main>
@endsection
