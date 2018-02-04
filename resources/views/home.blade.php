@extends('layouts-front.template')


@section('title')
Little Reveurs ขาย ชุดมาสคอต ตุ๊กตาโทโทโร่
@stop

@section('description')
Little Reveurs ขาย ชุดมาสคอต, ชุดนอนตัวการ์ตูน, ชุดแฟนซี, ตุ๊กตาโทโทโร่, ออมสินโทโทโร่, โคมไฟโทโทโร่, Totoro Doll ขายทั้งปลีก ทั้งส่ง ชุดมาสคอตราคาถูก
@stop

@section('ogtags')
    @include('layouts-front.og_tags', ['title' => 'Little Reveurs ขาย ชุดมาสคอต ตุ๊กตาโทโทโร่', 'description' => 'Little Reveurs ขาย ชุดมาสคอต, ชุดนอนตัวการ์ตูน, ชุดแฟนซี, ตุ๊กตาโทโทโร่, ออมสินโทโทโร่, โคมไฟโทโทโร่, Totoro Doll, mascot suit, ขายทั้งปลีก ทั้งส่ง ชุดมาสคอตราคาถูก',
    'image' => url('assets/img/littlereveurs_facebook.png')])
@stop




@section('content')







<style>
.list_menu_y {
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url(assets/font-end/image/arrow_black_bottom.png) no-repeat right;
    background-size: 12px 6px;
    width: 150px;
    border: none !important;
    font-family: "Tahoma", "Geneva", "sans-serif";
    font-size: 14px;
    color: #555555;
    font-weight: normal;
    line-height: 1.2em;
    outline: none !important;
    padding: 5px;
}
.list_menu_y select:hover{
  border: none;
}
.bs-example {
    margin-right: 0;
    margin-left: 0;

    border-color: #ddd;
    border-width: 1px;
    border-radius: 4px 4px 0 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
@media (max-width: 767px){

  .promo_full_wp>div {
      display: table-cell;
      padding: 0% 0%;
      vertical-align: middle;
      text-align: center;
      color: #fff;
      font-size: 16px;
  }
  .form-group {
    margin-bottom: 8px;
}
.logo-style{
  margin-top: 10px;
    margin-bottom: 10px;
}

}


/*  */
</style>












<div class="content-section-b">
        <div class="container" >







          <div class="row">
            <br>
        <div class="col-md-12 " >
          <h3>หมวดหมู่</h3>




          <div class="body-project">

                    <div class="row">


                      <div class=" col-md-2 col-sm-3 col-xs-6">

                            <div class="thumbnail a_sd_move">
                              <div style="max-height: 184px; overflow: hidden; position: relative;">
                              <a href="{{url('mascot')}}">
                              <img src="{{url('assets/font-end/image/PIC_0014-350.jpg')}}">

                              </a></div>
                              <div class="caption text-center" style="padding: 3px;">
                                <div class="descript bold">
                                    <a href="{{url('mascot')}}">ชุดมาสคอต</a>
                                </div>




                              </div>
                            </div>
                          </div>


                          <div class=" col-md-2 col-sm-3 col-xs-6">

                                <div class="thumbnail a_sd_move">
                                  <div style="max-height: 184px; overflow: hidden; position: relative;">
                                  <a href="{{url('piggy_totoro')}}">
                                  <img src="{{url('assets/img/totoro.png')}}">

                                  </a></div>
                                  <div class="caption text-center" style="padding: 3px;">
                                    <div class="descript bold">
                                        <a href="{{url('piggy_totoro')}}">ออมสิน โทโทโร่</a>
                                    </div>




                                  </div>
                                </div>
                              </div>



                              <div class=" col-md-2 col-sm-3 col-xs-6">

                                    <div class="thumbnail a_sd_move">
                                      <div style="max-height: 184px; overflow: hidden; position: relative;">
                                      <a href="{{url('lamp_totoro')}}">
                                      <img src="{{url('assets/img/totoro_2.png')}}">

                                      </a></div>
                                      <div class="caption text-center" style="padding: 3px;">
                                        <div class="descript bold">
                                            <a href="{{url('lamp_totoro')}}">โคมไฟ โทโทโร่</a>
                                        </div>




                                      </div>
                                    </div>
                                  </div>



                                  <div class=" col-md-2 col-sm-3 col-xs-6">

                                        <div class="thumbnail a_sd_move">
                                          <div style="max-height: 184px; overflow: hidden; position: relative;">
                                          <a href="#">
                                          <img src="{{url('assets/img/totoro_3.png')}}">

                                          </a></div>
                                          <div class="caption text-center" style="padding: 3px;">
                                            <div class="descript bold">
                                                <a href="#">ตุ๊กตา โทโทโร่</a>
                                            </div>




                                          </div>
                                        </div>
                                      </div>











                    </div>



          </div>



        </div>







    </div>
<br><br>









          <div class="row hidden-sm hidden-xs">
        <div class="col-md-12 " >
          <a href="#" style="width:100%;display:block;">
            <img src="{{url('assets/font-end/image/valent uganda hello.jpg')}}" class="img-responsive" style="border: 1px solid #e0e0e0; margin: 0 auto; height:180px;">
          </a>
        </div>
        </div>




          <div class="row">
            <br>
        <div class="col-md-12 " >
          <h3>สินค้าเพื่อคุณโดยเฉพาะ</h3>
          <p>ขายตุ๊กตา น่ารัก น่ากอด ขนนุ่ม ขนฟู เหมาะสำหรับเป็นของขวัญในทุกโอกาสพิเศษ</p>



          <div class="body-project">

                    <div class="row">


                      @if($home)
                        @foreach($home as $homes)
                      <div class="col-sm-4 col-md-3">

                            <div class="thumbnail a_sd_move">
                              <div style="max-height: 184px; min-height: 184px; overflow: hidden; position: relative;">
                              <a href="{{url('product-'.$homes->pro_id)}}">
                              <img src="{{url('assets/product/'.$homes->product_image)}}">

                              </a></div>
                              <div class="caption" style="padding: 3px;">
                                <div class="descript bold">
                                    <a href="{{url('product-'.$homes->pro_id)}}">{{$homes->product_name}}</a>
                                </div>
                                <div class="descript" style="padding-bottom: 5px;color: #777; font-size: 12px;border-bottom: 1px dashed #dff0d8; ">
                                                           </div>

                                <div class="descript" style="height: 20px;">
                                  <span style="color: #e03753; font-size: 14px; font-weight: 700;"><i class="fa fa-map-marker"></i> {{$homes->price_2}} บาท</span>
                                  <div class="descript-t">
                                  <div class="postMetaInline-authorLockup">

                                                                    <div class="rating">
                                        <i class="fa fa-star voted"></i>
                                        <i class="fa fa-star voted"></i>
                                        <i class="fa fa-star voted"></i>
                                        <i class="fa fa-star voted"></i>
                                        <i class="fa fa-star voted"></i>
                                        <span style="color: #777; font-size: 12px;">5.0</span>
                                    </div>

                                  </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                           @endforeach
                          @endif










                    </div>



          </div>
        <!--    <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div> -->



        </div>


<style>
.view-more-wrapper {
    margin-bottom: 0px;
}
.view-more-wrapper {
    text-align: center;
    margin-top: 22px;
}
.view-more {
    text-decoration: none !important;
    text-transform: uppercase;
    font-size: 12px;
    line-height: 30px !important;
    color: #666 !important;
    border-color: #666 !important;
    display: inline-block;
}
.view-more .plus-sign {
    display: inline-block;
    width: 60px;
    height: 60px;
    margin: 0 auto;
    padding: 5px;
    border: 1px solid #666;
    font-size: 46px;
    font-weight: 100;
    line-height: 46px;
    text-align: center;
    border-bottom-left-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-top-right-radius: 50%;
}
.view-more .view-more-text {
    display: inline-block;
    width: 100%;
    text-align: center;
}
</style>

        <div class="col-xs-12">
                <div class="view-more-wrapper"><a href="#" class="view-more"><span class="plus-sign">+</span><span class="view-more-text">View More Posts</span></a></div>
              </div>



    </div>



        </div>
</div>



<section class="promo_full">
			<div class="promo_full_wp magnific">
				<div>
					<h3>#Little Reveurs</h3>
					<h4 style="font-size: 28px;">
						Welcome to your new home...
					</h4>

				</div>
			</div>
		</section>






    <div class="content-section-b" style="padding: 20px 0 20px;">
            <div class="container" >


              <div class="row">
                <br>






           <div class="col-md-12 " >
              <h3>Little Reveurs </h3>
              <p>โตโตโร่ คอลเลคชั่น!</p>


              <div class="body-project">

                        <div class="row">




                          @if($shop_ran)
                            @foreach($shop_ran as $homes)
                          <div class="col-sm-4 col-md-3">

                                <div class="thumbnail a_sd_move">
                                  <div style="max-height: 184px; min-height: 184px; overflow: hidden; position: relative;">
                                  <a href="{{url('product-'.$homes->pro_id)}}">
                                  <img src="{{url('assets/product/'.$homes->product_image)}}">

                                  </a></div>
                                  <div class="caption" style="padding: 3px;">
                                    <div class="descript bold">
                                        <a href="{{url('product-'.$homes->pro_id)}}">{{$homes->product_name}}</a>
                                    </div>
                                    <div class="descript" style="padding-bottom: 5px;color: #777; font-size: 12px;border-bottom: 1px dashed #dff0d8; ">
                                                               </div>

                                    <div class="descript" style="height: 20px;">
                                      <span style="color: #e03753; font-size: 14px; font-weight: 700;"><i class="fa fa-map-marker"></i> {{$homes->price_2}} บาท</span>
                                      <div class="descript-t">
                                      <div class="postMetaInline-authorLockup">

                                                                        <div class="rating">
                                            <i class="fa fa-star voted"></i>
                                            <i class="fa fa-star voted"></i>
                                            <i class="fa fa-star voted"></i>
                                            <i class="fa fa-star voted"></i>
                                            <i class="fa fa-star voted"></i>
                                            <span style="color: #777; font-size: 12px;">5.0</span>
                                        </div>

                                      </div>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                               @endforeach
                              @endif















                        </div>



              </div>




            </div>



        </div>



            </div>
    </div>




@stop

@section('scripts')

<script>
var button = document.getElementById('button_open');

button.onclick = function() {
    var div = document.getElementById('newpost');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};
</script>

<script>
var button = document.getElementById('button_open_res');

button.onclick = function() {
    var div = document.getElementById('newpost_res');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};
</script>


@stop('scripts')
