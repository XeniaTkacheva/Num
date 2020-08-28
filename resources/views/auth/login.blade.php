@extends('layouts.app')

@section('content')
    <section class="login">
        @include('sections.header')

        <h1 class="visually-hidden">Авторизация пользователя</h1>
        <div class="login__modal">
            <form class="login__form login-form" method="POST" action="{{ route('login') }}">
                @csrf

                <h2 class="login__title login-form__title">Авторизация</h2>

                <ul class="login-form__list">
                    <li class="login-form__item login-form__item--login">

                        <label class="login-form__label" for="user-email">Email</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                        @enderror
                        <div class="login-form__input-block">
                            <svg class="login-form__envelope-icon" width="30" height="30">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input
                                class="login-form__input login-form__input--login @error('email') is-invalid @enderror"
                                type="email" name="email" id="user-login" placeholder="Введите email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        </div>


                    </li>

                    <li class="login-form__item login-form__item--pass">
                        <label class="login-form__label" for="user-password">Пароль</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="login-form__input-block">
                            <svg class="login-form__link-icon" width="30" height="30">
                                <use xlink:href="#link"></use>
                            </svg>
                            <input
                                class="login-form__input login-form__input--pass @error('password') is-invalid @enderror"
                                type="password" name="password" id="user-password" placeholder="Введите пароль"
                                required autocomplete="current-password"/>

                        </div>
                    </li>
                </ul>
                <div class="login-form__footer">
                    <div class="login-form__checkbox">
                        <input class="login-form__input login-form__input--check" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="login-form__label login-form__label--check" for="remember">
                            Запомнить меня
                        </label>
                    </div>

                    <div class="login-form__forgot">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                    </div>
                </div>
                <button class="login-form__btn" type="submit">Отправить</button>
                <button class="login-form__close" type="button" tabindex="0"><span
                        class="visually-hidden">Закрыть</span></button>
            </form>
        </div>
    </section>
@endsection

