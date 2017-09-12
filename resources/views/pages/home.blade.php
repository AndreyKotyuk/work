@extends('index')

@section('jumbotron')

    <div class="jumbotron text-center">
        <h1>Забронируй сейчас</h1>
        <p>Лучший прокат велосипедов в Харькове</p>
        <button type="button" class="btn btn-default btn-md btn-info">
            <a href="#pricing"><span>Прайс Лист</span></a>
        </button>
    </div>
    <!-- First Parallax Image with Logo Text -->

@stop()

@section('about')
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Company Page</h2><br>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat.</h4><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi
                    ut aliquip ex ea commodo consequat.</p>
                <br>
                <button class="btn btn-default btn-lg">Подробнее</button>
            </div>
            <div class="col-sm-4">
            <span class="glyphicon slideanim">
                <img alt="velo" src="http://png2.ru/media/k2/items/cache/3b77d3f73b59742412f393cd0d264b14_XL.jpg">
            </span>


            </div>
        </div>
    </div>

@stop()

@section('products')
    <div id="products" class="container-fluid text-center bg-grey">
        <h2>Категории</h2><br>
        <h4>Весь товар в наличии</h4>
        <div class="row text-center slideanim responsive">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <h4>Стандарт</h4>
                    <img src="https://www.w3schools.com/bootstrap/paris.jpg" alt="Paris" width="400" height="300">
                    <p>Стандартный велик очень прост и хорош. Красивый и модный</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <h4>Спорт</h4>
                    <img src="http://theradavist.com/wp-content/uploads/2016/08/My-Agave-Marginata-Crema-Duo-Cross-Bike-14-1335x892.jpg"
                         alt="New York" width="400" height="300">
                    <p>Для истинный гонщиков. Можная рама. Четкий руль. Гоняй где хочешь</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <h4>Дуо</h4>
                    <img src="http://moy.bike/wp-content/uploads/Tandem3.jpg" alt="Paris" width="400" height="300">
                    <p>Епта, вот это тема. Сразу два тела. Велик для влюбленной парочки или сиамских близнецов</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <h4>Для малых</h4>
                    <img src="https://chtokomupodarit.ru/wp-content/uploads/2017/02/MON_6499_2.jpg" alt="New York"
                         width="400" height="300">
                    <p>Просто велик для малый. Есть беговелы.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <h4>Снаряга</h4>
                    <img src="https://www.w3schools.com/bootstrap/sanfran.jpg" alt="San Francisco" width="400"
                         height="300">
                    <p>Убереги гооловешку своего личинуса</p>
                </div>
            </div>
        </div>
        <br>

    </div>
@endsection

@section('services')
    <div id="services" class="container-fluid text-center">
        <h2>SERVICES</h2>
        <h4>What we offer</h4>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-off logo-small"></span>
                <h4>POWER</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-heart logo-small"></span>
                <h4>LOVE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-lock logo-small"></span>
                <h4>JOB DONE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-leaf logo-small"></span>
                <h4>GREEN</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate logo-small"></span>
                <h4>CERTIFIED</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4 style="color:#303030;">HARD WORK</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
    </div>
@stop()

@section('portfolio')
    <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>Portfolio</h2><br>
        <h4>What we have created</h4>
        <div class="row text-center slideanim responsive">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/paris.jpg" alt="Paris" width="400" height="300">
                    <p><strong>Paris</strong></p>
                    <p>Yes, we built Paris</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/newyork.jpg" alt="New York" width="400" height="300">
                    <p><strong>New York</strong></p>
                    <p>We built New York</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/sanfran.jpg" alt="San Francisco" width="400"
                         height="300">
                    <p><strong>San Francisco</strong></p>
                    <p>Yes, San Fran is ours</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/paris.jpg" alt="Paris" width="400" height="300">
                    <p><strong>Paris</strong></p>
                    <p>Yes, we built Paris</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/newyork.jpg" alt="New York" width="400" height="300">
                    <p><strong>New York</strong></p>
                    <p>We built New York</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/sanfran.jpg" alt="San Francisco" width="400"
                         height="300">
                    <p><strong>San Francisco</strong></p>
                    <p>Yes, San Fran is ours</p>
                </div>
            </div>
        </div>
        <br>

    </div>
@stop()

@section('pricing')
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Pricing</h2>
            <h4>Choose a payment plan that works for you</h4>
        </div>
        <div class="row slideanim">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Стандарт</h1>
                    </div>
                    <div class="w3-row w3-center w3-card-2 w3-padding">
                        <a class="MyPrice" href="javascript:void(0)"
                           onclick="openMenu(event, 'Eat_standart','standart1');">
                            <div class="w3-col s6 tablink">Пн-Чт</div>
                        </a>
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks_standart','standart1');">
                            <div class="w3-col s6 tablink">Пт-Вс</div>
                        </a>
                    </div>

                    <div id="Eat_standart" class="w3-container menu w3-padding-48 w3-card-2 standart1">
                        <div class="col-sm-6">

                            <p><strong>30 грн </strong></p>
                            <p><strong>60 грн</strong></p>
                            <p><strong>80 грн</strong></p>
                            <p><strong>100 грн </strong></p>
                            <p><strong>120 грн </strong></p>
                        </div>
                        <div class="col-sm-6">

                            <p>час</p>
                            <p>три часа</p>
                            <p>шесть часов</p>
                            <p>день 9-23:00</p>
                            <p>сутки</p>
                        </div>
                    </div>

                    <div id="Drinks_standart" class="w3-container menu w3-padding-48 w3-card-2 standart1">
                        <div class="col-sm-6">

                            <p><strong>45 грн </strong></p>
                            <p><strong>70 грн </strong></p>
                            <p><strong>90 грн </strong></p>
                            <p><strong>120 грн </strong></p>
                            <p><strong>150 грн </strong></p>
                        </div>
                        <div class="col-sm-6">

                            <p>час</p>
                            <p>три часа</p>
                            <p>шесть часов</p>
                            <p>день 9-23:00</p>
                            <p>сутки</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <h3>$19</h3>
                        <h4>per month</h4>
                        <button class="btn btn-lg">Sign Up</button>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Спорт</h1>
                    </div>
                    <div class="w3-row w3-center w3-card-2 w3-padding">
                        <a class="MyPrice" href="javascript:void(0)" onclick="openMenu(event, 'Eat_sport','sport1');">
                            <div class="w3-col s6 tablink">Пн-Чт</div>
                        </a>
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks_sport','sport1');">
                            <div class="w3-col s6 tablink">Пт-Вс</div>
                        </a>
                    </div>
                    {{--<div id="sport1">--}}
                    <div id="Eat_sport" class="w3-container menu w3-padding-48 w3-card-2 sport1">
                        <div class="col-sm-6">

                            <p><strong>30 грн </strong></p>
                            <p><strong>60 грн</strong></p>
                            <p><strong>80 грн</strong></p>
                            <p><strong>100 грн </strong></p>
                            <p><strong>120 грн </strong></p>
                        </div>
                        <div class="col-sm-6">

                            <p>час</p>
                            <p>три часа</p>
                            <p>шесть часов</p>
                            <p>день 9-23:00</p>
                            <p>сутки</p>
                        </div>
                    </div>

                    <div id="Drinks_sport" class="w3-container menu w3-padding-48 w3-card-2 sport1">
                        <div class="col-sm-6">

                            <p><strong>45 грн </strong></p>
                            <p><strong>70 грн </strong></p>
                            <p><strong>90 грн </strong></p>
                            <p><strong>120 грн </strong></p>
                            <p><strong>150 грн </strong></p>
                        </div>
                        <div class="col-sm-6">

                            <p>час</p>
                            <p>три часа</p>
                            <p>шесть часов</p>
                            <p>день 9-23:00</p>
                            <p>сутки</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <h3>$19</h3>
                        <h4>per month</h4>
                        <button class="btn btn-lg">Sign Up</button>
                        {{--</div>--}}
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Дуо</h1>
                    </div>
                    <div class="w3-row w3-center w3-card-2 w3-padding">
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Eat_duo','duo1');" class="MyPrice">
                            <div class="w3-col s6 tablink">Пн-Чт</div>
                        </a>
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks_duo','duo1');">
                            <div class="w3-col s6 tablink">Пт-Вс</div>
                        </a>
                    </div>
                    {{--<div id="duo1">--}}
                    <div id="Eat_duo" class="w3-container menu w3-padding-48 w3-card-2 duo1">
                        <div class="col-sm-6">

                            <p><strong>30 грн </strong></p>
                            <p><strong>60 грн</strong></p>
                            <p><strong>80 грн</strong></p>
                            <p><strong>100 грн </strong></p>
                            <p><strong>120 грн </strong></p>
                        </div>
                        <div class="col-sm-6">

                            <p>час</p>
                            <p>три часа</p>
                            <p>шесть часов</p>
                            <p>день 9-23:00</p>
                            <p>сутки</p>
                        </div>
                    </div>

                    <div id="Drinks_duo" class="w3-container menu w3-padding-48 w3-card-2 duo1">
                        <div class="col-sm-6">

                            <p><strong>45 грн </strong></p>
                            <p><strong>70 грн </strong></p>
                            <p><strong>90 грн </strong></p>
                            <p><strong>120 грн </strong></p>
                            <p><strong>150 грн </strong></p>
                        </div>
                        <div class="col-sm-6">

                            <p>час</p>
                            <p>три часа</p>
                            <p>шесть часов</p>
                            <p>день 9-23:00</p>
                            <p>сутки</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <h3>$19</h3>
                        <h4>per month</h4>
                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

@stop()

@section('conditions')
    <div id="conditions" class="container-fluid bg-grey text-center">
        <h2>Условия проката</h2>
        <h4>как это работает</h4>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-off logo-small"></span>
                <h4>POWER</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-heart logo-small"></span>
                <h4>LOVE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-lock logo-small"></span>
                <h4>JOB DONE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-leaf logo-small"></span>
                <h4>GREEN</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate logo-small"></span>
                <h4>CERTIFIED</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4 style="color:#303030;">HARD WORK</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
    </div>
@endsection

@section('contact')
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment"
                          rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop()

@section('googleMap')
    <div id="googleMap" style="height:400px;width:100%;"></div>
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapProp = {
                center: myCenter,
                zoom: 12,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({position: myCenter});
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
@stop()