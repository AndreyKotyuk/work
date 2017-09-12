@if(isset($menu))

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">Velomir</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    @foreach($menu as $item)
                        <li><a href="#{{$item['alias']}}">{{$item['title']}}</a></li>
                    @endforeach

                    {{--<li><a href="#myPage">Home</a></li>--}}
                    {{--<li><a href="#about">About us</a></li>--}}
                    {{--<li><a href="#products">Products</a></li>--}}
                    {{--<li><a href="#portfolio">Portfolio</a></li>--}}
                    {{--<li><a href="#pricing">Prices</a></li>--}}
                    {{--<li><a href="#conditions">Rules</a></li>--}}
                    {{--<li><a href="#contact">Contact</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>

@endif

