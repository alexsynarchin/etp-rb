@extends('layouts.site')
@section('content')
<div class="container">
    <div class="tender-list row">
        <div class="tender-card card-box ">
            <div class="table-box opport-box">
                <div class="table-detail">
                    <h3 class="tender-card__title">Поставка расходного стоматологического материала</h3>
                    <label class="tender-card__label">Заказчик:</label>
                    <p>Государственное автономное учреждение социального обслуживания населения Архангельский дом-интернат для престарелых и инвалидов " Милосердие</p>
                    <div class="tender-card__dates">Прием заявок с:
                        <span class="tender-card__date">07.05.2020 00:00</span>
                        по <span class="tender-card__date">07.05.2020 10:00</span>
                    </div>
                </div>
                <div class="tender-card__right table-detail">
                    <span class="tender-card__tender-form">Запрос котировок</span>
                    <span class="tender-card__tender-price">1 000 000</span>
                    <span class="tender-card__tender-status label label-primary">Прием заявок</span>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
