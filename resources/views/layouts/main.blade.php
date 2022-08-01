
<!DOCTYPE html>
<html>
<head>
    <title>Интернет магазин мототехники</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('styles/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>

<body>
<div class="fixed_header">
    <div class="ref">
        <div class="ref_logo">
            <p><a href="{{route('index')}}" style="text-decoration: none; color: white;">YOUR LOGO</a></p>
        </div>
        <nav>
            <ul class="ref_menu">
                <li class="ref_menu_with_submenu"><a href="{{route('catalog.index', '?type_id=2')}}">Мотоциклы</a>
                    <ul class="ref_submenu">
                        <li><a href="{{route('catalog.index', '?type_id=2&brand_id=1')}}">Мотоциклы KAYO</a></li>
                        <li><a href="{{route('catalog.index', '?type_id=2&brand_id=2')}}">Мотоциклы BSE</a></li>
                        <li><a href="{{route('catalog.index', '?type_id=2&brand_id=3')}}">Мотоциклы GR</a></li>
                    </ul>
                </li>
                <li class="ref_menu_with_submenu"><a href="{{route('catalog.index', '?type_id=1')}}">Питбайки</a>
                    <ul class="ref_submenu">
                        <li><a href="{{route('catalog.index', '?type_id=1&brand_id=1')}}">Питбайки KAYO</a></li>
                        <li><a href="{{route('catalog.index', '?type_id=1&brand_id=2')}}">Питбайки BSE</a></li>
                        <li><a href="{{route('catalog.index', '?type_id=1&brand_id=3')}}">Питбайки GR</a></li>
                    </ul>
                </li>
                <li class="ref_menu_with_submenu"><a href="{{route('catalog.index', '?type_id=3')}}">Квадроциклы</a>
                    <ul class="ref_submenu">
                        <li><a href="{{route('catalog.index', '?type_id=3&brand_id=1')}}">Квадроциклы KAYO</a></li>
                        <li><a href="{{route('catalog.index', '?type_id=3&brand_id=2')}}">Квадроциклы BSE</a></li>
                        <li><a href="{{route('catalog.index', '?type_id=3&brand_id=3')}}">Квадроциклы GR</a></li>
                    </ul>
                </li>
                <li><a href="{{route('home')}}">Личный кабинет</a></li>
                <li><a id="cartF" href="{{route('cart.index')}}">Корзина</a></li>
            </ul>
        </nav>
        <div class="burger_menu">
            <div class="burger_icon"><span></span></div>
        </div>
    </div>
    <nav class="burger_submenu ref">
        <ul>
            <li>
                <a class="mouse_a" href="#">Мотоциклы</a>
                <a class="touch_a" href="#">Мотоциклы</a>
                <span class="menu_arrow">🢗</span>
                <ul class="submenu">
                    <li><a href="#">Мотоциклы KAYO</a></li>
                    <li><a href="#">Мотоциклы BSE</a></li>
                    <li><a href="#">Мотоциклы GR</a></li>
                </ul>
            </li>

            <li>
                <a class="mouse_a" href="#">Питбайки</a>
                <a class="touch_a" href="#">Питбайки</a>
                <span class="menu_arrow">🢗</span>
                <ul class="submenu submenu_pitbikes">
                    <li><a href="#">Питбайки KAYO</a></li>
                    <li><a href="#">Питбайки BSE</a></li>
                    <li><a href="#">Питбайки GR</a></li>
                </ul>
            </li>

            <li>
                <a class="mouse_a" href="#">Квадроциклы</a>
                <a class="touch_a" href="#">Квадроциклы</a>
                <span class="menu_arrow">🢗</span>
                <ul class="submenu submenu_ATVs">
                    <li><a href="#">Квадроциклы KAYO</a></li>
                    <li><a href="#">Квадроциклы BSE</a></li>
                    <li><a href="#">Квадроциклы GR</a></li>
                </ul>
            </li>
            <li><a href="{{route('about.delivery')}}">Доставка</a></li>
            <li><a href="{{route('about.payment')}}">Оплата</a></li>
            <li><a href="{{route('about.guarantee')}}">Гарантия</a></li>
            <li><a href="{{route('about.credit')}}">Кредит</a></li>
            <li><a href="{{route('about.about')}}">О магазине</a></li>
            <li><a href="{{route('about.contacts')}}">Контакты</a></li>
            <li><a href="{{route('cart.index')}}">Корзина</a></li>
        </ul>
    </nav>
</div>

@yield('content')

<footer>
    <div class="container">
        <nav class="nav1 footer_nav">
            <a href="{{route('about.delivery')}}">Доставка</a>
            <a href="{{route('about.payment')}}">Оплата</a>
            <a href="{{route('about.guarantee')}}">Гарантия</a>
            <a href="{{route('about.credit')}}">Кредит</a>
            <a href="{{route('about.about')}}">О магазине</a>
            <a href="{{route('about.contacts')}}">Контакты</a>
        </nav>

        <div class="payment_methodsANDsocial_media">
            <div class="payment_methods">
                <p>Способы<br>оплаты:</p>
                <div class="payment_methods_img">
                    <div id="method1"></div>
                    <div id="method2"></div>
                    <div id="method3"></div>
                </div>
            </div>

            <div class="social_media">
                <a href="#"><div id="social_media1"></div></a>
                <a href="#"><div id="social_media2"></div></a>
                <a href="#"><div id="social_media3"></div></a>
                <a href="#"><div id="social_media4"></div></a>
            </div>
        </div>

        <div class="copyrightANDaddress">
            <p>
                © ИНТЕРНЕТ-МАГАЗИН МОТОТЕХНИКИ «БЛАБЛАБЛА»<br> INFO@BLABLABLA.RU ВСЕ ПРАВА ЗАЩИЩЕНЫ.<br> ИСПОЛЬЗОВАНИЕ ИНФОРМАЦИИ ВОЗМОЖНО ТОЛЬКО<br>
                С ПИСЬМЕННОГО СОГЛАСИЯ ВЛАДЕЛЬЦЕВ ИНТЕРНЕТ-<br>МАГАЗИНА.
            </p>
            <p>
                МОТОСАЛОН: +7 999 999 99 99 | 8 (999) 999 99 99<br>
                107076, Г. МОСКВА, ПУШКИНА, ДОМ КОЛОТУШКИНА, СТР. 1.<br> НА КАРТЕ
            </p>
        </div>
    </div>
</footer>

<script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('main.js')}}"></script>
<script src="{{asset('https://kit.fontawesome.com/b91beb61b3.js')}}" crossorigin="anonymous"></script>
</body>
</html>
