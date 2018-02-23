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


@section('stylesheet')
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

@stop('stylesheet')

@section('content')







<style>

#first-slider .slide1{
    background-image: url({{url('assets/img/1499233524-image.jpg')}});
}
#first-slider .slide2{
    background-image: url({{url('assets/img/1499233524-image.jpg')}});
}
#first-slider .slide3{
    background-image: url({{url('assets/img/1499233524-image.jpg')}});
}


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


.bs-slider{
    overflow: hidden;
    max-height: 700px;
    position: relative;
    background: #000000;
}
.bs-slider:hover {
    cursor: -moz-grab;
    cursor: -webkit-grab;
}
.bs-slider:active {
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
}
.bs-slider .bs-slider-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.40);
}
.bs-slider > .carousel-inner > .item > img,
.bs-slider > .carousel-inner > .item > a > img {
    margin: auto;
    width: 100% !important;
}

/********************
*****Slide effect
**********************/

.fade {
    opacity: 1;
}
.fade .item {
    top: 0;
    z-index: 1;
    opacity: 0;
    width: 100%;
    position: absolute;
    left: 0 !important;
    display: block !important;
    -webkit-transition: opacity ease-in-out 1s;
    -moz-transition: opacity ease-in-out 1s;
    -ms-transition: opacity ease-in-out 1s;
    -o-transition: opacity ease-in-out 1s;
    transition: opacity ease-in-out 1s;
}
.fade .item:first-child {
    top: auto;
    position: relative;
}
.fade .item.active {
    opacity: 1;
    z-index: 2;
    -webkit-transition: opacity ease-in-out 1s;
    -moz-transition: opacity ease-in-out 1s;
    -ms-transition: opacity ease-in-out 1s;
    -o-transition: opacity ease-in-out 1s;
    transition: opacity ease-in-out 1s;
}






/*---------- LEFT/RIGHT ROUND CONTROL ----------*/
.control-round .carousel-control {
    top: 47%;
    opacity: 0;
    width: 45px;
    height: 45px;
    z-index: 100;
    color: #ffffff;
    display: block;
    font-size: 24px;
    cursor: pointer;
    overflow: hidden;
    line-height: 43px;
    text-shadow: none;
    position: absolute;
    font-weight: normal;
    background: transparent;
    -webkit-border-radius: 100px;
    border-radius: 100px;
}
.control-round:hover .carousel-control{
    opacity: 1;
}
.control-round .carousel-control.left {
    left: 1%;
}
.control-round .carousel-control.right {
    right: 1%;
}
.control-round .carousel-control.left:hover,
.control-round .carousel-control.right:hover{
    color: #fdfdfd;
    background: rgba(0, 0, 0, 0.5);
    border: 0px transparent;
}
.control-round .carousel-control.left>span:nth-child(1){
    left: 45%;
}
.control-round .carousel-control.right>span:nth-child(1){
    right: 45%;
}





/*---------- INDICATORS CONTROL ----------*/
.indicators-line > .carousel-indicators{
    right: 45%;
    bottom: 3%;
    left: auto;
    width: 90%;
    height: 20px;
    font-size: 0;
    overflow-x: auto;
    text-align: right;
    overflow-y: hidden;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 1px;
    white-space: nowrap;
}
.indicators-line > .carousel-indicators li{
    padding: 0;
    width: 15px;
    height: 15px;
    border: 1px solid rgb(158, 158, 158);
    text-indent: 0;
    overflow: hidden;
    text-align: left;
    position: relative;
    letter-spacing: 1px;
    background: rgb(158, 158, 158);
    -webkit-font-smoothing: antialiased;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    margin-right: 5px;
    -webkit-transition: all 0.5s cubic-bezier(0.22,0.81,0.01,0.99);
    transition: all 0.5s cubic-bezier(0.22,0.81,0.01,0.99);
    z-index: 10;
    cursor:pointer;
}
.indicators-line > .carousel-indicators li:last-child{
    margin-right: 0;
}
.indicators-line > .carousel-indicators .active{
    margin: 1px 5px 1px 1px;
    box-shadow: 0 0 0 2px #fff;
    background-color: transparent;
    position: relative;
    -webkit-transition: box-shadow 0.3s ease;
    -moz-transition: box-shadow 0.3s ease;
    -o-transition: box-shadow 0.3s ease;
    transition: box-shadow 0.3s ease;
    -webkit-transition: background-color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    -o-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;

}
.indicators-line > .carousel-indicators .active:before{
    transform: scale(0.5);
    background-color: #fff;
    content:"";
    position: absolute;
    left:-1px;
    top:-1px;
    width:15px;
    height: 15px;
    border-radius: 50%;
    -webkit-transition: background-color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    -o-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;
}



/*---------- SLIDE CAPTION ----------*/
.slide_style_left {
    text-align: left !important;
}
.slide_style_right {
    text-align: right !important;
}
.slide_style_center {
    text-align: center !important;
}

.slide-text {
    left: 0;
    top: 25%;
    right: 0;
    margin: auto;
    padding: 10px;
    position: absolute;
    text-align: left;
    padding: 10px 85px;

}

.slide-text > h1 {

    padding: 0;
    color: #ffffff;
    font-size: 70px;
    font-style: normal;
    line-height: 84px;
    margin-bottom: 30px;
    letter-spacing: 1px;
    display: inline-block;
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
}
.slide-text > p {
    padding: 0;
    color: #ffffff;
    font-size: 20px;
    line-height: 24px;
    font-weight: 300;
    margin-bottom: 40px;
    letter-spacing: 1px;
    -webkit-animation-delay: 1.1s;
    animation-delay: 1.1s;
}
.slide-text > a.btn-default{
    color: #000;
    font-weight: 400;
    font-size: 13px;
    line-height: 15px;
    margin-right: 10px;
    text-align: center;
    padding: 17px 30px;
    white-space: nowrap;
    letter-spacing: 1px;
    display: inline-block;
    border: none;
    text-transform: uppercase;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;

}
.slide-text > a.btn-primary{
    color: #ffffff;
    cursor: pointer;
    font-weight: 400;
    font-size: 13px;
    line-height: 15px;
    margin-left: 10px;
    text-align: center;
    padding: 17px 30px;
    white-space: nowrap;
    letter-spacing: 1px;
    background: #00bfff;
    display: inline-block;
    text-decoration: none;
    text-transform: uppercase;
    border: none;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
}
.slide-text > a:hover,
.slide-text > a:active {
    color: #ffffff;
    background: #222222;
    -webkit-transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
    transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
}






/*------------------------------------------------------*/
/* RESPONSIVE
/*------------------------------------------------------*/

@media (max-width: 991px) {
    .slide-text h1 {
        font-size: 40px;
        line-height: 50px;
        margin-bottom: 20px;
    }
    .slide-text > p {

        font-size: 18px;
    }
}


/*---------- MEDIA 480px ----------*/
@media  (max-width: 768px) {
    .slide-text {
        padding: 10px 50px;
    }
    .slide-text h1 {
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 10px;
    }
    .slide-text > p {
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 20px;
    }
    .control-round .carousel-control{
        display: none;
    }

}
@media  (max-width: 480px) {
    .slide-text {
        padding: 10px 30px;
    }
    .slide-text h1 {
        font-size: 20px;
        line-height: 25px;
        margin-bottom: 5px;
    }
    .slide-text > p {
        font-size: 12px;
        line-height: 18px;
        margin-bottom: 10px;
    }
    .slide-text > a.btn-default,
    .slide-text > a.btn-primary {
        font-size: 10px;
        line-height: 10px;
        margin-right: 10px;
        text-align: center;
        padding: 10px 15px;
    }
    .indicators-line > .carousel-indicators{
        display: none;
    }

}


/*  */
</style>

<div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- Third Slide -->
        <div class="item active">

            <!-- Slide Background -->
            <img src="https://images.pexels.com/photos/207990/pexels-photo-207990.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>

            <div class="container">
                <div class="row">
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                        <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Slide -->

        <!-- Second Slide -->
        <div class="item">

            <!-- Slide Background -->
            <img src="https://images.pexels.com/photos/207990/pexels-photo-207990.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_center">
                <h1 data-animation="animated flipInX">Bootstrap touch slider</h1>
                <p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p>

            </div>
        </div>
        <!-- End of Slide -->

        <!-- Third Slide -->
        <div class="item">

            <!-- Slide Background -->
            <img src="https://images.pexels.com/photos/207990/pexels-photo-207990.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_right">
                <h1 data-animation="animated zoomInLeft">Beautiful Animations</h1>
                <p data-animation="animated fadeInRight">Lots of css3 Animations to make slide beautiful .</p>

            </div>
        </div>
        <!-- End of Slide -->


    </div><!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> <!-- End  bootstrap-touch-slider Slider -->








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
                                          <a href="{{url('totoro_dolls')}}">
                                          <img src="{{url('assets/img/totoro_3.png')}}">

                                          </a></div>
                                          <div class="caption text-center" style="padding: 3px;">
                                            <div class="descript bold">
                                                <a href="{{url('totoro_dolls')}}">ตุ๊กตา ตัวใหญ่</a>
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
