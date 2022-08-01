@if($success = session('sendOrderSuccess'))
    <div class="alert alert-success" role="alert">
        {{session()->pull('sendOrderSuccess')}}
    </div>
@endif
