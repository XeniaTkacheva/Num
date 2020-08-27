<section class="main-footer">
    <footer class="page-footer">
        <div class="container page-footer__wrapper">
            <div class="page-footer__heading">
                <div class="page-footer__copyright copyright"><a class="copyright__link" href="#"
                                                                 title="Developed by XeniaWeb">©&nbsp;2020</a></div>
                <div class="page-footer__title"><h2 class="page-footer__name">Oksana Bürki</h2>
                    <div class="page-footer__desc"><p>Личный сайт<span>веб-разработчика</span></p>
                        <hr>
                        <span>©&nbsp;XeniaWeb</span>
                        <p></p></div>
                </div>
            </div>
            <div class="page-footer__content">
                <ul class="page-footer__nav main-nav">
                    <li class="main-nav__item main-nav__item main-nav__item--footer"><a href="{{ url('/') }}">Главная</a></li>
                    <li class="main-nav__item main-nav__item main-nav__item--footer"><a href="#about">О нас</a></li>
                    <li class="main-nav__item main-nav__item main-nav__item--footer"><a href="#works">Скачать</a></li>
                    <li class="main-nav__item main-nav__item main-nav__item--footer"><a href="#reviews">Обучение</a></li>
                    <li class="main-nav__item main-nav__item main-nav__item--footer"><a href="#connect">Связаться</a>
                    </li>
                </ul>
                <div class="page-footer__info"><p>Профессиональная помощь цифролога может понадобиться в течение всей жизни.
                    </p></div>
                @include('layouts.menu.social-menu')
                <article class="page-footer__text aphorism">
                    <div class="aphorism__text"><p>Всегда пишите код так, будто сопровождать его будет склонный к
                            насилию психопат, который знает где вы живете</p></div>
                    <address class="aphorism__author">Martin Golding</address>
                </article>
            </div>
        </div>
    </footer>
</section>
