@extends('lk.regaform')
@section('content')

<div class="wrapperForm_registration">
    <div class="wrap_form">
           <div class="formContent">
                <img src="/public/images/Composite_Path.png" alt="">
                <p class="reg_p">Регистрация</p>
                <div class="formSteps">
                    <p class="formStep_active">1 шаг: Данные об аккаунте.</p>
                    <p class="formStep_diz">2 шаг. Платежные данные.</p>
                </div>
            <form action="#">
                   <div class="inpWrapepr">
                        <input type="text" placeholder="Имя" name="[]">
                        <input type="password" placeholder="Пароль" name="[]">
                        <input type="text" placeholder="Фамилия" name="[]">
                        <input type="text" placeholder="Регион" name="[]">
                        <input type="text" placeholder="Отчество" name="[]">
                        <input type="text" placeholder="Телефон" name="[]">
                        <input type="text" placeholder="Email" name="[]">
                        <label class="fileLabel">
                           <div class="typeFile">
                               Загрузите фотографию
                           </div>
                            <input type="file" name="[]" class="file">
                        </label>
                        
                        

                        <button type="button" class="buutonSubmit clickButton_form">Далее</button>
                   </div>
                      
            </form>
        </div>
    </div>
</div>

<div class="wrapperForm_registrationTwo">
    <div class="wrapper_formSteps_two">
         <div class="formContent">
                <img src="/public/images/Composite_Path.png" alt="">
                <p class="reg_p">Регистрация</p>
                <div class="formSteps">
                    <p class="formStep_active">1 шаг: Данные об аккаунте.</p>
                    <p class="formStep_diz">2 шаг. Платежные данные.</p>
                </div>
                <form action="#">
                    <div class="inpWrapepr">
                            <input type="text" placeholder="Номер карты">
                            <input type="text" placeholder="Имя на карте">
                            <input type="text" placeholder="Срок окончания карты">
                            <input type="text" placeholder="CVV">
                            
                            <a class="buutonBack">Назад</a>
                            <button type="button" class="buutonSubmit buutonReady">Готово</button>
                    </div>
                </form>
         </div>
    </div>
</div>

<div class="wrapperForm_registrationThree">
    <div class="wrapper_formSteps_two">
         <div class="formSuccess">
             <p>Регистрация успешно пройдена</p>
             <a href="/lk">Войти в личный кабинет</a>
         </div>
    </div>
</div>
@endsection