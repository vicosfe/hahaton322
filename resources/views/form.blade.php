@extends('lk.govno')
@section('content')

<div class="circleForm_Image">
</div>

<div class="wrapper_form">

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <img src="/public/images/Composite_Path.png" alt="">
        <p>Авторизация</p>
        <input type="email" class="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
        <input  class="inputPassword"  type="password"  name="password" required placeholder="Пароль">
        <a class="buutonSubmit" href="lk">Войти</a>
        <a href="/reg">Регистрация</a>
    </form>
    
</div>

@endsection