@if(isset($conditions) && is_object($conditions))

    <div id="conditions" class="container-fluid text-center">
        <h2>Условия проката</h2>

        @foreach($conditions as $k=>$condition)

                    @if($k==0 || $k%3==0)
                        <br>
                        <div class="row slideanim">
                    @endif

                        <div class="col-sm-4">
                            <span class="fa {{$condition->icon}} logo-small"></span>
                            <h4>{{$condition->name}}</h4>
                            <p>{{$condition->text}}</p>
                        </div>

                    @if(($k+1)%3==0)
                        </div>
                    @endif
        @endforeach

    </div>
@else

@endif