<section class="connect" id="connect">
    <div class="container connect__wrapper"><h2 class="connect__title section-title">Связаться со мной</h2>
        <form id="connectForm" class="connect__form form">
            <fieldset class="form__set form__set--user-data">
                <div class="form__user-data">
                    <div class="form__user-name"><label for="user-name" class="form__label">Введите ваше имя</label>
                        <div class="form__input-block">
                            <div class="form__icon-wrapper">
                                <svg width="30" height="30" viewBox="0 0 482.9 482.9" preserveAspectRatio="none"
                                     class="form__icon form__icon--user">
                                    <use xlink:href="/sprite.svg#user"></use>
                                </svg>
                            </div>
                            <input id="user-name" type="text" name="user-name" placeholder="Введите ваше имя"
                                   onfocus="this.placeholder=''" class="form__input form__input--user-name"></div>
                        <div class="form__tooltip"></div>
                    </div>
                    <div class="form__user-email"><label for="user-email" class="form__label">Введите ваш
                            email</label>
                        <div class="form__input-block">
                            <div class="form__icon-wrapper">
                                <svg width="30" height="30" viewBox="0 0 483.3 483.3" preserveAspectRatio="none"
                                     class="form__icon form__icon--email">
                                    <use xlink:href="/sprite.svg#envelope"></use>
                                </svg>
                            </div>
                            <input id="user-email" type="email" name="user-email" placeholder="xenia1898@gmail.com"
                                   onfocus="this.placeholder=''" class="form__input form__input--user-email"></div>
                        <div class="form__tooltip"></div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="form__set form__set--message"><label for="message" class="form__label">Сообщение к
                    письму</label>
                <div class="form__area-block">
                    <div class="form__icon-wrapper form__icon-wrapper--message">
                        <svg width="30" height="30" viewBox="0 0 612 612" preserveAspectRatio="none"
                             class="form__icon form__icon--message">
                            <use xlink:href="/sprite.svg#message"></use>
                        </svg>
                    </div>
                    <textarea id="message" name="message" cols="60" rows="2" placeholder=""
                              onfocus="this.placeholder=''" class="form__message"></textarea></div>
                <div class="form__tooltip"></div>
            </fieldset>
            <button type="submit" class="form__btn">Отправить</button>
            <div class="modal__overlay">
                <div class="modal__ok"><h4 class="modal__title"></h4>
                    <button type="button" class="modal__btn">Закрыть</button>
                </div>
            </div>
        </form>
    </div>
</section>
