<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Condition;
use App\Page;
use App\Portfolio;
use App\Price;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function execute(Request $request)
    {
        $categories = Category::all();
        $conditions = Condition::all();
        $pages = Page::all();
        $portfolios = Portfolio::get(array('name', 'category_name', 'images'));
        $prices = Price::all();

        $days = DB::select("select DISTINCT day_type.name, day_type.id from prices INNER JOIN day_type ON day_type.id = prices.id_day"); //массив различных между собой дней
        $hours = DB::select("select DISTINCT hours.name, hours.id from prices INNER JOIN hours ON hours.id = prices.id_hour"); // -//- часов


        $pricesMass = array(); //результирующий массив (трехмерный) категория/день/час => цена

        $massCateg = DB::select("select DISTINCT categories.name, categories.id from prices INNER JOIN categories ON prices.id_category = categories.id");
        //дополнительный массив для разделения по категория


        foreach ($massCateg as $mas) {
            foreach ($prices as $k => $item) {
                if ($item->id_category == $mas->id) {  //проверка по id из массива категорий и таблицы цен
                    $k = $mas->name;                    //переменная для обозначения индекса ассоциативного массива (категория)
                    foreach ($days as $day => $value) {
                        if ($item->id_day == $value->id) { //проверка по id для типа дня
                            $day = $value->name;        //переменная для обозначения индекса ассоциативного массива (день недели)
                            foreach ($hours as $hour => $name) {
                                if ($name->id == $item->id_hour) { //проверка по id для часа
                                    $hour = $name->name;    //переменная для обозначения индекса ассоциативного массива (час=>цена)
                                    $pricesMass[$k][$day][$hour] = $item->price;
                                }
                            }
                        }
                    }
                }
            }
        }

//        foreach ($pricesMass as $k=>$v){
//            printf($k);
//        }
//        dd($pricesMass);


        $menu = array();

        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'alias' => $page->alias);
            array_push($menu, $item);
        }

        $item = array('title' => 'Products', 'alias' => 'products');
        array_push($menu, $item);
        $item = array('title' => 'Portfolio', 'alias' => 'portfolio');
        array_push($menu, $item);
        $item = array('title' => 'Pices', 'alias' => 'pricing');
        array_push($menu, $item);
        $item = array('title' => 'Conditions', 'alias' => 'conditions');
        array_push($menu, $item);
        $item = array('title' => 'Contact', 'alias' => 'contact');
        array_push($menu, $item);

        return view('site.index', array(
            'menu' => $menu,
            'pages' => $pages,
            'categories' => $categories,
            'conditions' => $conditions,
            'portfolios' => $portfolios,
            'prices' => $prices,
            'pricesMass' => $pricesMass
        ));
    }
}
