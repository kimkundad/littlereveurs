@extends('layouts-front.template')

@section('title')
About us | Little Reveurs
@stop




@section('content')

<style>
#search_container {

    position: relative;
    height: 280px;
    background: #4d536d url(assets/img/1920x450_littlereveurs2.jpg) no-repeat center top;
    background-size: cover;
    color: #fff;
    width: 100%;
    display: table;
    z-index: 99;
}
@media (min-width: 1200px)
{
  #search_container {
      margin-bottom: 22px;
  }
  .container {
      width: 970px;
  }
  .t_v_midden{
    border-right: 1px solid #e0e0e0;
  }

  .col-sm-6, .col-md-6{
    padding-right: 15px; padding-left: 15px;
  }
  .thumbnail {
      margin-bottom: 0px;
    }
    .g_l_box {
        /* top: 20px; */
        left: 5px;
    }

}
ul#cat_nav li a  {
    font-size: 12px;

}
.active_li{
  background: #f9f9f9;
  color: #f90 !important;
  font-weight: 700;
  font-size: 13px !important;
}
.feature {
    padding: 30px 10px 20px 110px;
    position: relative;
    background: #fff;
    margin-bottom: 30px;
    color: #888;
    border: 1px solid #dff0d8;
}
.feature i {
    margin: 0;
    position: absolute;
    top: 30px;
    left: 30px;
    padding: 0;
    margin: 0;
    width: 65px;
    height: 65px;
    line-height: 60px;
    text-align: center;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 1px dashed #ccc;
    font-size: 34px;
    color: #F90;
}
.feature p {
  font-size: 13px;
}
.feature img {
    margin: 0;
    position: absolute;
    top: 30px;
    left: 30px;
    padding: 0;
    margin: 0;
    width: 65px;
    height: 65px;
    line-height: 60px;
    text-align: center;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 1px dashed #ccc;
    font-size: 34px;
    color: #F90;
}
.body-project{
  padding-right: 13px;
  padding-left: 13px;
}
</style>

<div class="jumbotron" style="margin-bottom: 10px;">
    <div id="carousel-home-banner" class="carousel slide fade in" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img alt="Places to visit in Japan" src="{{url('assets/img/1920x450_littlereveurs2.jpg')}}">

              <div class="carousel-caption">

                <h2>

                    Little Reveurs
             </h2>
             </div>

          </div>
      </div>
    </div>
  </div>




<div class="content-section-a" style="padding: 0px 0;">
        <div class="container" >

          <div class="row">
            <br>


          <p style="font-size: 14px; text-align:left; color:#666"></p>


          <div class="body-project">





            <div class="row">
<div class="col-md-6 col-sm-6">
  <img src="{{url('assets/img/slide_img1.jpg')}}" alt="Image" class="img-responsive styled">
</div>
<div class="col-md-6 col-sm-6">
  <h3>เกี่ยวกับเรา Little <span>Reveurs</span></h3>
  <p>
    31/99 โพธิ์ทองแมนชั่น ซอยพหลโยธิน34 แขวงเสนานิคม เขตจตุจักร กรุงเทพฯ 10900
  </p>
  <h4>Little Reveurs เว็บขายสินค้าน่ารัก อันดับ 1 ของไทย </h4>
  <p>
    เป็นบริษัทจัดจำหน่ายสินค้า ชุดมาสคอต ชุด mascot ชุดแฟนซี ชุดนอนสัตว์ ขายกระปุกออมสิน Totoro, โทโทโร่ เป็นคอลเลคชั่นครบชุด ราคาถูก, ขายโคมไฟโตโตโร่, โคมไฟ Totoro ขายตุ๊กตาตัวใหญ่ ตุ๊กตาหมีตัวใหญ่ ราคาถูก
    ขวัญในวันวาเลนไทน์, ขวัญรับปริญญา ของขวัญวันเกิด เหมาะกับทุกเทศกาล บางชุดหาไม่ได้ในเมืองไทย ติดตามข่าวสารและโปรโมชั่นใหม่ๆ สำหรับพ่อค้าแม่ค้า ขอราคาส่งได้ทาง <b>Line ID : @littshop , โทร. 080-111-3193</b>
  </p>



</div>
</div>
                    <hr>
                  </div>

                </div>



        </div>
</div>














    @stop

    @section('scripts')




    @stop('scripts')
