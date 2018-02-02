@extends('layouts-front.template')

@section('title')
{{$home->product_name}}
@stop

@section('description')
{!! strip_tags(str_limit($home->product_detail, 150)) !!}
@stop

@section('ogtags')
    @include('layouts-front.og_tags', ['title' => $home->product_name , 'description' => strip_tags(str_limit($home->product_detail, 150)),
    'image' => url('assets/product/'.$home->product_image) ])
@stop

@section('stylesheet')
<link href="{{url('assets/font-end/bootstrap-sweetalert-master/dist/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/font-end/css/css-stars.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{url('assets/font-end/css/fontawesome-stars.css')}}">
@stop('stylesheet')
@section('content')

<div id="position">
            <div class="container">
                        <ul>
                        <li><a href="{{url('/')}}">Home </a></li>
                        <li><a href="{{url('category_lr-'.$home->category_id)}}">{{$home->cat_name}}</a></li>
                        <li>{{$home->product_name}}</li>
                        </ul>
            </div>
    </div>



<div class="content-section-a">
        <div class="container" >



          <div class="row">


        <div class="col-md-8 " >
          <h3 style="margin-top: 0px;">{{$home->product_name}}</h3>


          <div class="table_style">
                              <div class="table_cell subtitle">
              	                <h2 class="t14 "></h2>
                              </div>
              	            <div class="t14 table_cell other">
                              <form id="cutproduct1">
                                <input type="hidden" id="product_id" class="form-control" name="id"   value="{{ $home->pro_id }}" >
                                  <a class="tooltip_flip tooltip-effect-1" id="submit" style="text-decoration:none;">
                                  <i class="fa fa-heart-o t_main j_collect t20" style="top:3px;position:relative;font-size:22px;" ></i>
                                  <span class="icon-label j_collect_txt">Wishlist</span>
                                  </a>
                                </form>
                              </div>
                          </div>


          <hr>

          <div class="body-project">

<!-- visible-sm visible-xs -->

<div class="row magnific-gallery hidden-sm hidden-xs">

  @if($home_image_count > 4)

<div class="col-md-6 col-sm-6" style="padding-right: 3px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[0]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[0]->image)}}" alt="" style="height: 279px;"></a>
</div>

<div class="col-md-6 col-sm-6" style="padding-left: 3px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[1]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[1]->image)}}" alt="" style="height: 279px;"></a>
</div>

<div class="col-md-4 col-sm-4" style="padding-right: 0px; padding-top:5px">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[2]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[2]->image)}}" alt=""></a>
</div>

<div class="col-md-4 col-sm-4" style="padding-left: 6px; padding-right:6px; padding-top:5px; ">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[3]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[3]->image)}}" alt=""></a>
</div>


<div class="col-md-4 col-sm-4" style="padding-left: 0px; padding-top:5px">
<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[4]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[4]->image)}}" alt="">
  <div class="see-all-overlay"><span class="see-all-overlay-text">ดูทั้งหมด {{$home_image_count}} รูป</span></div></a>
</div>

@else

<div class="col-md-6 col-sm-6" style="padding-right: 3px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[0]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[0]->image)}}" alt=""></a>
</div>

<div class="col-md-6 col-sm-6" style="padding-left: 3px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[1]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[1]->image)}}" alt=""></a>
</div>

@endif

<div class="hidden">{{$i = 0}}</div>
@foreach ($home_image_all as $images)
<div class="hidden">{{$i++}}</div>
@if($i > 5)

<div class="col-md-4 col-sm-4 hidden " style="padding-left: 0px; padding-top:5px">
<a class="example-image-link" href="{{url('assets/gallery_product/'.$images->image)}}" >
</a>
</div>
@endif

@endforeach

</div>



<!-- visible-sm visible-xs -->
<style>

</style>
<div class="row magnific-gallery visible-sm visible-xs">

  @if($home_image_count > 4)

<div class="col-md-6 col-sm-6" style="margin-bottom: 8px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[0]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[0]->image)}}" alt=""></a>
</div>

<div class="col-md-6 col-sm-6" style="margin-bottom: 8px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[1]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[1]->image)}}" alt=""></a>
</div>

<div class="col-md-4 col-sm-4" style="margin-bottom: 8px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[2]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[2]->image)}}" alt=""></a>
</div>

<div class="col-md-4 col-sm-4" style="margin-bottom: 8px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[3]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[3]->image)}}" alt=""></a>
</div>


<div class="col-md-4 col-sm-4" style="margin-bottom: 8px;">
<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[4]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[4]->image)}}" alt="">
  <div class="see-all-overlay" style="width: 90%;"><span class="see-all-overlay-text">ดูทั้งหมด {{$home_image_count}} รูป</span></div></a>
</div>

@else

<div class="col-md-6 col-sm-6" style="margin-bottom: 8px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[0]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[0]->image)}}" alt=""></a>
</div>

<div class="col-md-6 col-sm-6" style="margin-bottom: 8px;">

<a class="example-image-link" href="{{url('assets/gallery_product/'.$home_image[1]->image)}}" >
  <img class="img-responsive example-image" src="{{url('assets/gallery_product/'.$home_image[1]->image)}}" alt=""></a>
</div>

@endif

<div class="hidden">{{$i = 0}}</div>
@foreach ($home_image_all as $images)
<div class="hidden">{{$i++}}</div>
@if($i > 5)

<div class="col-md-4 col-sm-4 hidden " >
<a class="example-image-link" href="{{url('assets/gallery_product/'.$images->image)}}" >
</a>
</div>
@endif

@endforeach

</div>







<!-- ที่ว่าง -->



<!-- ที่ว่าง -->





<br>



















<div>
<h3>รายละเอียด</h3>
  <div class="start-detail">

    {!! $home->product_detail !!}
    <hr>
    <p>







  </div>



</div>










          </div>




        </div>

        <div class="col-md-4 " >
          <div class="border_gray pay_info">



            <p style="color:#666">Price property ID <strong>{{$home->pro_id}} </strong></p>
            <h4 style=" color: #ff5722; font-weight: bold;"><i class="icon_set_1_icon-36" style="font-size:28px;"></i> THB {{ number_format($home->price_1) }}</h4>
            <hr>
            <p>Siri Space is giving <strong style=" color: #ff5722;">cash back</strong>.</p>


            <p style="color:#888; font-size:12px; margin-top:10px; margin-bottom:0px;">
              <i class="fa fa-info-circle"></i> Siri Space is giving the customer back 10% of the commission.</p>




            <hr>

            <div class="descript" style="height: 20px;">
              <?php

              function format_number($number) {
                    if($number >= 1000) {
                       return $number/1000 . "k";   // NB: you will want to round this
                    }
                    else {
                        return $number;
                    }
                }

               ?>

                                    <span style="color: #777; font-size: 13px;"><i class="fa fa-user"></i> <?=format_number($home->view)?> review</span>
                                    <div class="descript-t">
                                    <div class="postMetaInline-authorLockup">

                                      <div class="rating">
                                          <i class="fa fa-star voted"></i>
                                          <i class="fa fa-star voted"></i>
                                          <i class="fa fa-star voted"></i>
                                          <i class="fa fa-star voted"></i>
                                          <i class="fa fa-star voted"></i>
                                          <span style="color: #777; font-size: 13px;">5.0</span>
                                      </div>


                                    </div>
                                    </div>
                                  </div>

          </div>


          <div class="border_gray pay_info">

          </div>


          <div class="box_style_2">
            <i class="icon_set_1_icon-57" aria-hidden="true"></i>
            <h4 style="margin-bottom: 0px;">Need <span style="color: #00c402;">Help?</span></h4>
            <a href="tel://0940547728" class="phone">0940547728</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
          </div>
        </div>




    </div>



        </div>
</div>



@stop

@section('scripts')






<script>
$(document).ready(function() {
  $('.magnific-gallery').each(function() {
$(this).magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{enabled:true}
});
});
});
</script>


<script src="{{url('assets/font-end/js/jquery.barrating.js')}}"></script>
<script type="text/javascript">
   $(function() {
      $('#example').barrating({
        theme: 'fontawesome-stars'
      });

   });
</script>


<script src="{{url('assets/font-end/bootstrap-sweetalert-master/dist/sweetalert.js')}}"></script>

@if ($message = Session::get('success_contact'))
<script>
    swal("ส่งข้อความสำเร็จ!", "ทางเจ้าหน้าที่จะรบติดต่อกลับให้เร็วที่สุด!", "success")
  </script>
@endif

@if ($message = Session::get('success_comment'))
<script>
    swal("ส่งข้อความสำเร็จ!", "ขอบคุณที่ร่วมแสดงความความคิดเห็น!", "success")
  </script>
@endif

@if ($message = Session::get('success_comment_edit'))
<script>
    swal("แก้ไขข้อความสำเร็จ!", "ขอบคุณที่ร่วมแสดงความความคิดเห็น!", "success")
  </script>
@endif


@if ($message = Session::get('delete'))
<script>
    swal("ลบข้อความสำเร็จ!", "ขอบคุณที่ร่วมแสดงความความคิดเห็น!", "success")
  </script>
@endif


<script>
$(document).ready(function(){



$('.tooltip_flip.tooltip-effect-1').click(function(e){
  e.preventDefault();


  var $form = $(this).closest("form#cutproduct1");
            var formData =  $form.serializeArray();


            var dataString = {
                   product_id : $form.find("#product_id").val(),
                   _token : '{{ csrf_token() }}'
                 };



    $.ajax({
        type: "POST",
        url: "{{url('wishlist')}}",
        data: dataString,
        dataType: "json",
        cache : false,
        success: function(data){

          if(data.success == true){




          swal("ส่งข้อความสำเร็จ!", "เพิ่มสิ่งที่ชื่นชอบเพิ่อกลับมาดูภายหลังได้!", "success");



          } else if(data.success == false){

            swal("เสียใจด้วย!", "เข้าสู่ระบบหรือสมัครสมาชิกก่อนนะ", "error");

            var delayMillis = 4000;

        setTimeout(function() {
          window.open('{{url('login')}}', '_blank');
        }, delayMillis);



        var delayMilli = 6000;

          setTimeout(function() {
            window.location.reload();
          }, delayMilli);



          }



        } ,error: function(xhr, status, error) {
          alert(error);
        },

    });

});

});
</script>



@stop('scripts')
