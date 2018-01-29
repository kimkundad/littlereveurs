<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\stock;
use App\product;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $shop = DB::table('stocks')->select(
              'stocks.*',
              'stocks.id as st_id',
              'stocks.created_at as created_stock',
              'products.*',
              'users.*'
              )
              ->leftjoin('products','products.id', 'stocks.product_id')
              ->leftjoin('users','users.id', 'stocks.user_id')
              ->where('stocks.stocks_status', 0)
              ->orderBy('stocks.id', 'desc')
              ->paginate(15);


        $data['objs'] = $shop;
        $data['header'] = "รายการตัดสินค้า";
        return view('stock.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = DB::table('products')->select(
              'products.*'
              )
              ->where('user_id', Auth::user()->id)
              ->orderBy('id', 'desc')
              ->get();

        $data['products'] = $products;

        $data['method'] = "post";
        $data['url'] = url('stock');
        $data['header'] = "สร้างรายการ ของคุณใหม่";
        return view('stock.create', $data);
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
       'sale_type' => 'required',
       'product_id' => 'required',
       'product_total' => 'required',
       'product_detail' => 'required'
      ]);

      $product = DB::table('products')->select(
            'products.*'
            )
            ->where('id', $request['product_id'])
            ->first();

    if($product->product_sum >= $request['product_total']){

      $package = new stock;
      $package->user_id = Auth::user()->id;
      $package->product_id = $request['product_id'];
      $package->product_total = $request['product_total'];
      $package->sale_type = $request['sale_type'];
      $package->detail = $request['product_detail'];
      $package->save();

      $id = $request['product_id'];

      $sum = $product->product_sum - $request['product_total'];
      $package = product::find($id);
      $package->product_sum = $sum;
      $package->save();
      return redirect(url('stock/'))->with('success_stock','เพิ่มร้านค้าสำเร็จแล้วค่ะ');

    }else{

      return redirect(url('stock/'))->with('error_stock','เพิ่มร้านค้าสำเร็จแล้วค่ะ');

    }




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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $shop = DB::table('stocks')->select(
            'stocks.*',
            'stocks.id as st_id',
            'stocks.created_at as created_stock',
            'products.*',
            'users.*'
            )
            ->leftjoin('products','products.id', 'stocks.product_id')
            ->leftjoin('users','users.id', 'stocks.user_id')
            ->where('stocks.id', $id)
            ->first();

            $products = DB::table('products')->select(
                  'products.*'
                  )
                  ->orderBy('id', 'desc')
                  ->get();

            $data['products'] = $products;


      $data['stock'] = $shop;

      $data['header'] = 'แก้ไข '.$shop->product_name;
      $data['url'] = url('stock/'.$id);
      $data['method'] = "put";
      return view('stock.edit',$data);
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
      $this->validate($request, [
       'sale_type' => 'required',
       'product_id' => 'required',
       'product_total' => 'required',
       'product_detail' => 'required'
      ]);

      $product = DB::table('products')->select(
            'products.*'
            )
            ->where('id', $request['product_id'])
            ->first();


            $stock_c = DB::table('stocks')->select(
                  'stocks.*'
                  )
                  ->where('id', $id)
                  ->first();

                  if($stock_c->product_total == $request['product_total']){

                    $package = stock::find($id);
                    $package->product_id = $request['product_id'];
                    $package->sale_type = $request['sale_type'];
                    $package->detail = $request['product_detail'];
                    $package->save();

                    return redirect(url('stock/'.$id.'/edit'))->with('success_edit','เพิ่มร้านค้าสำเร็จแล้วค่ะ');

                  }else if($stock_c->product_total > $request['product_total']){

                    $package = stock::find($id);
                    $package->product_id = $request['product_id'];
                    $package->product_total = $request['product_total'];
                    $package->sale_type = $request['sale_type'];
                    $package->detail = $request['product_detail'];
                    $package->save();

                    $sum = $stock_c->product_total - $request['product_total'];
                    $package = product::find($request['product_id']);
                    $package->product_sum = $product->product_sum+$sum;
                    $package->save();
                    return redirect(url('stock/'.$id.'/edit'))->with('success_edit','เพิ่มร้านค้าสำเร็จแล้วค่ะ');
                    //dd($sum);

                  }else{

                    $package = stock::find($id);
                    $package->product_id = $request['product_id'];
                    $package->product_total = $request['product_total'];
                    $package->sale_type = $request['sale_type'];
                    $package->detail = $request['product_detail'];
                    $package->save();

                    $sum = $request['product_total'] - $stock_c->product_total;
                    $sum = $product->product_sum-$sum;
//dd($sum);

                  //  $sum = $stock_c->product_total - $request['product_total'];
                    $package = product::find($request['product_id']);
                    $package->product_sum = $sum;
                    $package->save();
                    return redirect(url('stock/'.$id.'/edit'))->with('success_edit','เพิ่มร้านค้าสำเร็จแล้วค่ะ');
                  //  dd($sum);

                  }



      /*      if($product->product_sum >= $request['product_total']){

              $package = stock::find($id);
              $package->product_id = $request['product_id'];
              $package->product_total = $request['product_total'];
              $package->sale_type = $request['sale_type'];
              $package->detail = $request['product_detail'];
              $package->save();


              $sum = $product->product_sum - $request['product_total'];
              $package = product::find($request['product_id']);
              $package->product_sum = $sum;
              $package->save();
              return redirect(url('stock/'))->with('success_stock','เพิ่มร้านค้าสำเร็จแล้วค่ะ');

            }else{

              return redirect(url('stock/'))->with('error_stock','เพิ่มร้านค้าสำเร็จแล้วค่ะ');

            }

            */





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $package = stock::find($id);
      $package->stocks_status = 1;
      $package->save();

      return redirect(url('stock/'))->with('success_delete','เพิ่มร้านค้าสำเร็จแล้วค่ะ');
    }
}
