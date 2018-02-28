@extends('layouts-front.template')

@section('title')
นโยบายการคืนสินค้า | Little Reveurs
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

                    นโยบายการคืนสินค้า | Little Reveurs
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

<div class="col-md-8 col-md-offset-2">
  <h3>Little Reveurs นโยบายการคืนสินค้า คืนสินค้าได้ด้วยสาเหตุใดบ้าง?</h3>
  <p>

  </p>
  <ul class="list_ok">นโยบายการคืนสินค้าของ Little Reveurs
								<li>คืนสินค้าภายใน 7 วัน สินค้าทั้งหมดที่ขายบนเว็บไซต์ โดยนับจากวันที่คุณได้รับสินค้าไปจนถึงวันที่ประทับตราไปรษณีย์ลงบนบรรจุภัณฑ์ที่คุณส่งกลับไปหาเรา สินค้าบางรายการไม่สามารถคืนโดยสาเหตุ เปลี่ยนใจ/ไม่ต้องการ</li>
								<li>คุณสามารถคืนสินค้าเนื่องจากสินค้า ไม่พอดีกับตัวคุณ(สำหรับสินค้าแฟชั่น) สินค้าได้รับความชำรุดเสียหาย สินค้าบางส่วนสูญหาย เปลื่ยนใจหรือในกรณีที่สินค้าอยู่ในเงื่อนไขของเรา</li>
					      <li>การคืนสินค้าและกล่องบรรจุสินค้าของคุณต้องตรงไปตามเงื่อนไขด้านล่างเพื่อให้การคืนสินค้าเป็นไปอย่างถูกต้อง</li>
                <li>คุณไม่สามารถคืนสินค้าเนื่องจากสาเหตุของการเปลี่ยนใจได้ ถ้าบรรจุภัณฑ์ของสินค้าได้รับความเสียหายหรือบรรจุภัณฑ์ถูกเปิดออก</li>
                <li>ในกรณีที่สินค้าไม่ตรงตามเงื่อนไขการคืนสินค้าของเรา เจ้าหน้าที่ของเราจะติดต่อคุณเพื่อแจ้งผลการตรวจสอบสินค้าและแจ้งข้อมูลเกี่ยวกับการส่งสินค้าคืน</li>
                <li>คุณสามารถเลือกวิธีการรับเงินคืนได้ โดยเลือกจาก การคืนเงินเข้าบัญชีธนาคาร เปลี่ยนสินค้า</li>
							</ul>

<img src="{{url('assets/img/shipping_header-image.png')}}" class="img-responsive">

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
