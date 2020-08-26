@extends('layouts.app')

@section('content')
    <section id="hero" class="hero bg1">
        <div class="container hero__wrapper">
            <div class="hero__nav">
                @include('layouts.menu.header')

            </div>
                <div class="hero__title"><p class="hero__desc">Цифрологии XXI века</p>
                    <h1 class="hero__name">Цифрология</h1>
                </div>
                <a class="hero__btn scroll-btn" href="#about">Скролл
                    <svg class="scroll-btn__icon" width="30" height="30" viewBox="-90 0 512 512"
                         preserveAspectRatio="none">
                        <use xlink:href="#scroll"></use>
                    </svg>
                </a>
        </div>
    </section>
    <section id="about" class="about">
        <h3 class="about__title">Цифролог и Международный эксперт </h3>
        <p class="about__desc">
            Профессиональная помощь цифролога может понадобиться в течение всей жизни.
        </p>

    </section>
    <section class="contact">
        <h3 class="contact__title">Напишите нам</h3>

    </section>
@endsection
