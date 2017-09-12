@if(isset($prices)&& is_object($prices))

    <div id="pricing" class="container-fluid bg-grey">
        <div class="text-center">
            <h2>Прайс Лист</h2>
            {{--<h4>Choose a payment plan that works for you</h4>--}}
        </div>

        <div class="row slideanim">
        {{--<div class="row text-center slideanim responsive">--}}
            @foreach($pricesMass as $categoryKey=>$categoryValue)   {{--цикл для отображения категорий--}}

                <div class="col-sm-{{(count($pricesMass)%2==0)?'3':'4'}} col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>{{$categoryKey}}</h1>
                        </div>
                        <div class="w3-row w3-center w3-card-2 w3-padding">

                            @foreach($categoryValue as $dayKey => $dayValue)  {{--цикл для отображения кнопок переключения по типам дня--}}
                           {{--<p>{{count($dayValue)}}</p>--}}
                            <a class="MyPrice" href="javascript:void(0)"
                               onclick="openMenu(event, '{{$dayKey.$categoryKey}}','{{$categoryKey}}');">
                                <div class="w3-col {{(count($categoryValue)%2==0)?'s6':'s4'}} tablink">{{$dayKey}}</div>
                            </a>
                            @endforeach

                        </div>

                        @foreach($categoryValue as $dayKey => $dayValue)
                            {{--<h1>{{$dayKey.$categoryKey  }}</h1>--}}
                        {{--<div id='sdf'>--}}
                            {{--{{print_r($dayValue)}}--}}
                        {{--</div>--}}
                        <div id='{{($dayKey.$categoryKey)}}' class="w3-container menu w3-padding-48 w3-card-2 {{$categoryKey}}">

                            <div class="col-sm-6">
                                @foreach($dayValue as $timeKey =>$timeValue)  {{--цикл для отображения цен--}}
                                <p><strong>{{$timeValue}} </strong></p>
                                @endforeach
                            </div>
                            <div class="col-sm-6">
                                @foreach($dayValue as $timeKey =>$timeValue)     {{--цикл для отображения времени--}}
                                <p>{{$timeKey}}</p>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                        <div class="panel-footer">
                            <h3>Заказать звонок</h3>
                            <h4>мы перезвоним в течении 15 мин</h4>
                            <button class="btn btn-lg">Заказать</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif