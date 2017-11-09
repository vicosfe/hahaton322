@extends('lk.govno')
@section('content')

<div class="circleForm_Image">
</div>

<div class="wrapper_form">

    <form action="#">
        <img src="/public/images/Composite_Path.png" alt="">
        <p>Авторизация</p>
        <input type="text" class="inputEmail" placeholder="Email">
        <input type="text" class="inputPassword" placeholder="Пароль">
        <button class="buutonSubmit">Войти</button>
        <a href="/reg">Регистрация</a>
    </form>
    
</div>

@endsection