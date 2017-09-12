@if(isset($pages) && is_object($pages))

    @foreach($pages as $k=>$page)

        @if($k%2==0)

            <div id="aboutUs" class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>{{$page->name}}</h2><br>
                        {!! $page->text !!}
                        <br>
                        <div class="work_botoom"><a href="{{route('page',array('alias'=>$page->alias))}}"
                                                    class="btn btn-default btn-lg">Подробнее</a></div>

                    </div>
                    <div class="col-sm-4">
                        <span class="glyphicon slideanim">
                            {!! Html::image('assets/img/'.$page->images) !!}
                        </span>


                    </div>
                </div>
            </div>

        @else

            <div id="places" class="container-fluid another-style">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>{{$page->name}}</h2><br>
                        {!! $page->text !!}
                        <br>
                        <div class="work_botoom"><a href="{{route('page',array('alias'=>$page->alias))}}"
                                                    class="btn btn-default btn-lg">Подробнее</a></div>

                    </div>
                    <div class="col-sm-4">
            <span class="glyphicon slideanim">
                {!! Html::image('assets/img/'.$page->images,'velodoroga',array('class'=>'img-circle delay-03s animated wow zoomIn')) !!}

                </span>


                    </div>
                </div>
            </div>

        @endif
    @endforeach

@endif

