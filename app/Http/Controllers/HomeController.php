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

      $mas = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.product_status', 1)
            ->where('categories.category_id', 3)
            ->orderBy('products.view', 'desc')
            ->limit(4)
            ->get();


      //dd($home);
      $data['home'] = $mas;



      $piggy_totoro = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.product_status', 1)
            ->where('categories.category_id', 4)
            ->orderBy('products.view', 'desc')
            ->limit(4)
            ->get();
      //dd($home);
      $data['piggy_totoro'] = $piggy_totoro;

      $shop_ran = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.product_status', 1)
            ->inRandomOrder()
            ->limit(4)
            ->get();
      //dd($home);
      $data['shop_ran'] = $shop_ran;


        return view('/home' ,$data);
    }



    public function mascot()
    {
      $shop = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.product_status', 1)
            ->where('categories.category_id', 3)
            ->orderBy('products.view', 'desc')
            ->get();
      //dd($home);
      $data['home'] = $shop;
      return view('/mascot' ,$data);
    }


    public function piggy_totoro()
    {
      $shop = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.product_status', 1)
            ->where('categories.category_id', 4)
            ->orderBy('products.view', 'desc')
            ->get();
      //dd($home);
      $data['home'] = $shop;
      return view('/piggy_totoro' ,$data);
    }

    public function lamp_totoro()
    {
      $shop = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.product_status', 1)
            ->where('categories.category_id', 5)
            ->orderBy('products.view', 'desc')
            ->get();
      //dd($home);
      $data['home'] = $shop;
      return view('/lamp_totoro' ,$data);
    }


    public function totoro_dolls()
    {
      $shop = DB::table('products')->select(
            'products.*',
            'products.id as pro_id',
            'categories.*',
            'shops.*'
            )
            ->leftjoin('shops','shops.id', 'products.shop_id')
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->where('products.product_status', 1)
            ->where('categories.category_id', 6)
            ->orderBy('products.view', 'desc')
            ->get();
      //dd($home);
      $data['home'] = $shop;
      return view('/totoro_dolls' ,$data);
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
            ->where('products.product_status', 1)
            ->orderBy('products.id', 'desc')
            ->first();

            $package = product::find($id);
      $package->view += 1;
      $package->save();

      $data['home'] = $shop;

      if($shop != null){

        $home_image = DB::table('product_images')
      ->select(
      'product_images.*'
      )
      ->where('product_images.product_id', $id)
      ->limit(5)
      ->get();

      $home_image_all = DB::table('product_images')
      ->select(
      'product_images.*'
      )
      ->where('product_images.product_id', $id)
      ->get();

      $home_image_count = DB::table('product_images')
      ->select(
      'product_images.*'
      )
      ->where('product_images.product_id', $id)
      ->count();

        $data['home_image_count'] = $home_image_count;

        $data['home_image_all'] = $home_image_all;
        $data['home_image'] = $home_image;

        return view('product',$data);

      }else{
        return view('product_null');
      }



    }
}
