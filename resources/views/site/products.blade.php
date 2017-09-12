@if(isset($categories) && is_object($categories))
    <div id="products" class="container-fluid text-center bg-grey">
        <h2>Категории</h2>
        <h4>Весь товар в наличии</h4>
        <div class="row text-center slideanim responsive">

            @foreach($categories as $category)
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <h4>{{$category->name}}</h4>
                        {!! Html::image('assets/img/'.$category->image,"фото ".$category->name,array("width"=>"400","height"=>"300")) !!}
                        <p>{!! $category->title!!}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
    </div>
@endif