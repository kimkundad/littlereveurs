<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home');
    }

    public function show($id)
    {

      $shop = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.id', $id)
            ->orderBy('products.id', 'desc')
            ->first();

      $data['objs'] = $shop;

      $img_all = DB::table('product_images')->select(
          'product_images.*'
          )
          ->where('product_id', $id)
          ->get();
      $data['home_image'] = $img_all;

      return view('product',$data);

    }
}
