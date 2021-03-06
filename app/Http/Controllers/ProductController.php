<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\product;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use \Milon\Barcode\DNS1D;
use App\product_image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $shop = DB::table('products')->select(
            'products.*',
            'categories.*'
            )
            ->leftjoin('categories','categories.category_id', 'products.cat_id')
            ->orderBy('products.id', 'desc')
            ->paginate(15);

      $data['objs'] = $shop;
      $data['header'] = "สินค้าทั้งหมด";
      return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $shop = DB::table('categories')->select(
            'categories.*'
            )
            ->orderBy('category_id', 'asc')
            ->get();

      $data['objs'] = $shop;

      $shop_id = DB::table('shops')->select(
            'shops.*'
            )
            ->orderBy('id', 'desc')
            ->get();

      $data['shop_id'] = $shop_id;


      $data['method'] = "post";
      $data['url'] = url('product');
      $data['header'] = "สร้างสินค้า ของคุณใหม่";
      return view('product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
       'image' => 'required|mimes:jpg,jpeg,png,gif|max:8048',
       'product_name' => 'required',
       'product_code' => 'required',
       'product_cat' => 'required',
       'product_sum' => 'required',
       'product_detail' => 'required',
       'price_1' => 'required',
       'price_2' => 'required',
       'shop_name' => 'required',
       'product_size' => 'required'
      ]);

      $image = $request->file('image');

      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $img = Image::make($image->getRealPath());
       $img->resize(500, 500, function ($constraint) {
       $constraint->aspectRatio();
     })->save('assets/product/'.$input['imagename']);


     $package = new product;
     $package->user_id = Auth::user()->id;
     $package->cat_id = $request['product_cat'];
     $package->product_name = $request['product_name'];
     $package->product_detail = $request['product_detail'];
     $package->product_code = $request['product_code'];
     $package->product_sum = $request['product_sum'];
     $package->product_image = $input['imagename'];
     $package->product_status = 0;
     $package->shop_id = $request['shop_name'];
     $package->price_1 = $request['price_1'];
     $package->price_2 = $request['price_2'];
     $package->product_size = $request['product_size'];
     $package->save();

 $the_id = $package->id;

 return redirect(url('product/'.$the_id.'/edit'))->with('success_product','เพิ่มร้านค้าสำเร็จแล้วค่ะ');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    public function upload_more_pic(Request $request){

      $this->validate($request, [
           'product_image' => 'required',
           'pro_id' => 'required'
       ]);
       $pro_id = $request['pro_id'];
       $gallary = $request->file('product_image');


       if (sizeof($gallary) > 1) {

        for ($i = 0; $i < sizeof($gallary); $i++) {

          $path = 'assets/gallery_product/';
          $filename = time()."-".$gallary[$i]->getClientOriginalName();
          $gallary[$i]->move($path, $filename);

          $admins[] = [
              'product_id' => $pro_id,
              'image' => $filename,
              'user_id' => Auth::user()->id,
          ];
        }
        product_image::insert($admins);
      }




      return redirect(url('product/'.$pro_id.'/edit'))->with('add_gallery_success','คุณทำการเพิ่มอสังหา สำเร็จ');


    }








    public function property_image_del(Request $request){
$property_id = $request['pro_id'];

$gallary = $request->get('product_image');

if (sizeof($gallary) > 0) {

 for ($i = 0; $i < sizeof($gallary); $i++) {

   $objs = DB::table('product_images')
     ->where('id', $gallary[$i])
     ->first();

     $file_path = 'assets/gallery_product/'.$objs->image;
     unlink($file_path);
     DB::table('product_images')->where('id', $objs->id)->delete();
 /*  $path = 'assets/cusimage/';
   $filename = time()."-".$gallary[$i]->getClientOriginalName();
   $gallary[$i]->move($path, $filename); */




 }


}
//dd($objs);
return redirect(url('product/'.$property_id.'/edit'))->with('del_gallery_success','คุณทำการเพิ่มอสังหา สำเร็จ');

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

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


        $cat = DB::table('categories')->select(
              'categories.*'
              )
              ->orderBy('category_id', 'asc')
              ->get();

        $data['cat'] = $cat;


        $shop_id = DB::table('shops')->select(
              'shops.*'
              )
              ->orderBy('id', 'desc')
              ->get();

        $data['shop_id'] = $shop_id;

        $img_all = DB::table('product_images')->select(
            'product_images.*'
            )
            ->where('product_id', $id)
            ->get();
        $data['img_all'] = $img_all;

        $data['header'] = 'แก้ไข '.$shop->product_name;
        $data['url'] = url('product/'.$id);
        $data['method'] = "put";
        return view('product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $image = $request->file('image');

      if($image != NULL){


        $this->validate($request, [
         'image' => 'required|mimes:jpg,jpeg,png,gif|max:8048',
         'product_name' => 'required',
         'product_code' => 'required',
         'product_cat' => 'required',
         'product_sum' => 'required',
         'product_detail' => 'required',
         'price_1' => 'required',
         'price_2' => 'required',
         'shop_name' => 'required',
         'product_size' => 'required'
        ]);

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
         $img = Image::make($image->getRealPath());
         $img->resize(500, 500, function ($constraint) {
         $constraint->aspectRatio();
       })->save('assets/product/'.$input['imagename']);



       $package = product::find($id);
       $package->user_id = Auth::user()->id;
       $package->cat_id = $request['product_cat'];
       $package->product_name = $request['product_name'];
       $package->product_detail = $request['product_detail'];
       $package->product_code = $request['product_code'];
       $package->product_sum = $request['product_sum'];
       $package->product_image = $input['imagename'];
       $package->shop_id = $request['shop_name'];
       $package->price_1 = $request['price_1'];
       $package->price_2 = $request['price_2'];
       $package->product_size = $request['product_size'];
       $package->save();

       $the_id = $request['id'];


      }else{



        $this->validate($request, [
         'product_name' => 'required',
         'product_code' => 'required',
         'product_cat' => 'required',
         'product_sum' => 'required',
         'product_detail' => 'required',
         'price_1' => 'required',
         'price_2' => 'required',
         'shop_name' => 'required',
         'product_size' => 'required'
        ]);


       $package = product::find($id);
       $package->user_id = Auth::user()->id;
       $package->cat_id = $request['product_cat'];
       $package->product_name = $request['product_name'];
       $package->product_detail = $request['product_detail'];
       $package->product_code = $request['product_code'];
       $package->product_sum = $request['product_sum'];
       $package->shop_id = $request['shop_name'];
       $package->price_1 = $request['price_1'];
       $package->price_2 = $request['price_2'];
       $package->product_size = $request['product_size'];
       $package->save();

       $the_id = $request['id'];

      }




     return redirect(url('product/'.$id.'/edit'))->with('success_edit_product','เพิ่มร้านค้าสำเร็จแล้วค่ะ');




    }



    public function post_status(Request $request){


      $user = product::findOrFail($request->product_id);

              if($user->product_status == 1){
                  $user->product_status = 0;
              } else {
                  $user->product_status = 1;
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $objs = DB::table('products')
          ->select(
             'products.*'
             )
          ->where('id', $id)
          ->first();

      $file_path = 'assets/product/'.$objs->product_image;
      unlink($file_path);

      $obj = product::find($id);
      $obj->delete();
      return redirect(url('product'))->with('del_product','คุณทำการลบอสังหา สำเร็จ');
    }
}
