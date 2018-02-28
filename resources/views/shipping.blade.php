@extends('layouts-front.template')

@section('title')
การส่งสินค้า | Little Reveurs
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

ul.list_ok {
    margin: 0 0 20px;
    padding: 0;
    line-height: 22px;
}
ul.list_ok li {
    position: relative;
    padding-left: 25px;
}
ul.list_ok li:before {
    font-style: normal;
    font-weight: 700;
    font-family: icon_set_1;
    font-size: 14px;
    content: "\6c";
    color: #e04f67;
    position: absolute;
    left: 0;
    top: 0;
}
ul.list_ok {
    list-style: none;
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
              <img alt="Places to visit in Japan" src="{{url('assets/img/shipping.jpg')}}">

              <div class="carousel-caption">

                <h2>

                    การส่งสินค้า | Little Reveurs
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

<div class="col-md-8 col-md-offset-1">
  <h3>Little Reveurs บริการจัดส่งสินค้าทั่ว 77 จังหวัดของประเทศไทย</h3>
  <p>

  </p>
  <ul class="list_ok">เรามีวิธีมีรูปแบบการจัดส่งอยู่ 2 รูปแบบคือ ส่งธรรมดา และส่งด่วน EMS
								<li>EMS ขนส่งผ่านไปรษณีย์ไทย (ค่าขนส่งคำนวนตามน้ำหนักสินค้าและค่าดำเนินการ)
                เวลาจัดส่ง (1-3 วันทำการ) ตามระยะทางในการจัดส่ง สามารถตรวจสอบสถานะการจัดส่งสินค้าได้ <a href="http://track.thailandpost.co.th/tracking/default.aspx" target="_blank">ที่นี่</a></li>
								<li>ส่งธรรมดา ตามระยะเวลาในการจัดส่งสินค้า จะขึ้นอยู่กับระยะทางและเวลาการจัดส่งของไปษณีย์ไทย กรณีสินค้าที่มีขนาดใหญ่อาจจะใช้ระยะเวลานานกว่าสินค้าทั่วไป</li>
					      <li>มารับสินค้าด้วยตัวเองที่ร้านค้า (ไม่มีค่าใช้จ่ายเพิ่มเติม) ลูกค้าสามารถนัดรับสินค้าที่หน้าร้านได้โดยไม่มีค่าใช้จ่ายเพิ่มเติม (ติดต่อสอบถามกับเจ้าหน้าที่เท่านั้น)</li>
							</ul>



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
