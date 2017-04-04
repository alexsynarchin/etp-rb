@extends('layouts.site')
@section('content')
    <div class="main-page-utp">
        <div class="main-page-slider"></div>
        <div class="container">
            <div class="main-page-utp__content text-center row">
                <h1 class="main-page-utp__heading ">Единая торговая площадка Республики Башкортостан</h1>
                <p class="main-page-utp__description">
                    Многофункциональная система электронной торговли, позволяющая проводить торгово-закупочные процедуры в сети Интернет в соответствии с Федеральным законом №223-ФЗ. На портале ЭТП Единая торговая площадка Республики Башкортостан проводятся такие торговые процедуры как аукцион (аукцион на понижение, либо повышение цены), конкурс, запрос котировок цен и запрос предложений в электронной форме, редукцион. На нашей площадке можно заказать электронно-цифровую подпись (ЭЦП). ЭЦП необходима для аккредитации на электронной торговой площадке, а также для заключение контрактов на поставку товаров и оказание услуг.
                </p>
                <a href="" class="main-page-utp__btn btn etp-btn">Зарегистрироваться</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-page-rates">
            <section class="rate">
                <div class="rate_wrap">
                    <h3 class="rate__heading">Бизнес базовый</h3>
                    <h5 class="rate__user-status">статус участник</h5>
                    <ul class="rate__list">
                        <li class="rate__list-item"><i class="rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> Плата за пользование 0 рублей</li>
                        <li class="rate__list-item"><i class="rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> Комиссия только за выигранные торги</li>
                        <li class="rate__list-item"><i class=" rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> Срок действия - не ограничен</li>
                    </ul>
                    <a href="/rates/#base" class="rate__btn etp-btn btn">Подробнее</a>
                </div>
            </section>
            <section class="rate">
                <div class="rate_wrap">
                    <h3 class="rate__heading">Бизнес абонемент</h3>
                    <h5 class="rate__user-status">статус участник</h5>
                    <ul class="rate__list">
                        <li class="rate__list-item"><i class="rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> Срок действия: 3-12 месяцев</li>
                        <li class="rate__list-item"><i class="rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> Абонентская плата от 22000 руб.</li>
                        <li class="rate__list-item"><i class=" rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> 0% комиссии за выигранные торги</li>
                    </ul>
                    <a href="/rates#subcription" class="rate__btn etp-btn btn">Подробнее</a>
                </div>
            </section>
            <section class="rate">
                <div class="rate_wrap">
                    <h3 class="rate__heading">Бизнес организатор</h3>
                    <h5 class="rate__user-status">статус организатор</h5>
                    <ul class="rate__list">
                        <li class="rate__list-item"><i class="rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> Возможность создавать и проводить торги</li>
                        <li class="rate__list-item"><i class="rate__list-item-icon fa fa-check-circle-o" aria-hidden="true"></i> Срок действия - один календарный год</li>
                    </ul>
                    <a href="/rates#organizer" class="rate__btn etp-btn btn">Подробнее</a>
                </div>
            </section>
        </div>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".main-page-utp").backgroundCycle({
                imageUrls: [
                    "{{URL::asset('site/images/slider/image1.jpg')}}",
                    "{{URL::asset('site/images/slider/image2.jpg')}}",
                    "{{URL::asset('site/images/slider/image3.jpg')}}"
                ],
                fadeSpeed: 2000,
                duration: 5000,
                backgroundSize: SCALING_MODE_COVER
            });
        });
    </script>
@stop