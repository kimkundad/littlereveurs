@extends('layouts-front.template')

@section('title')
About us | Little Reveurs
@stop




@section('content')

<style>
#search_container {

    position: relative;
    height: 280px;
    background: #4d536d url(assets/img/1920x450_littlereveurs.jpg) no-repeat center top;
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
</style>

<div class="jumbotron" style="margin-bottom: 10px;">
    <div id="carousel-home-banner" class="carousel slide fade in" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img alt="Places to visit in Japan" src="{{url('assets/image/1920x450_BangKong.jpg')}}">


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
<div class="col-md-4 col-sm-6">
  <img src="{{url('assets/img/slide_img1.jpg')}}" alt="Image" class="img-responsive styled">
</div>
<div class="col-md-7 col-md-offset-1 col-sm-6">
  <h3>Little <span>Reveurs</span></h3>
  <p>
    31/99 โพธิ์ทองแมนชั่น ซอยพหลโยธิน34 แขวงเสนานิคม เขตจตุจักร กรุงเทพฯ 10900
  </p>
  <h4>Mel at vide soluta </h4>
  <p>
    Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, <strong>mollis pertinax elaboraret</strong> sed in. Per no vidit timeam, quis omittam sed at. Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae.
  </p>
  <h4>Don't forget</h4>
  <p>
    Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut <a href="#">utamur antiopam inciderint</a> sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at.
  </p>
  <div class="general_icons">
    <ul>
      <li><i class="icon_set_1_icon-34"></i>Camera</li>
      <li><i class="icon_set_1_icon-31"></i>Video camera</li>
      <li><i class="icon_set_1_icon-35"></i>Credit cards</li>
      <li><i class="icon_set_1_icon-63"></i>Mobile</li>
      <li><i class="icon_set_1_icon-33"></i>Travel bag</li>
      <li><i class="icon_set_1_icon-9"></i>Snack</li>
      <li><i class="icon_set_1_icon-37"></i>Map</li>
    </ul>
  </div>
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
