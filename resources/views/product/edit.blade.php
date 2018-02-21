@extends('layouts.template')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('stylesheet')
<link href="{{URL::asset('assets/text/dist/summernote.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/upload_image/css/fileinput.css')}}" rel="stylesheet">
<style>
        .box-upload-file {
            background-image: url('{{url('front/asset/img/bg-blue-2.png')}}');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .box-upload-file {
            padding: 25px;
            max-width: 410px;
            margin: 0 auto 50px;
        }

        .box-upload-file h4 {
            margin-bottom: 30px;
        }

        .file-upload {
            position: relative;
            overflow: hidden;
            margin: 10px;
            max-width: 150px;
            background: #fff;
            border: 2px solid #000;
            margin-top: 20px;
        }

        .file-upload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .croppie-container {
    padding: 0px;
}
.croppie-container .cr-vp-circle {
    border-radius: 0%;
}
img {
    vertical-align: middle;
    border-style: none;
}
    </style>
@stop('stylesheet')

@section('content')



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                      <div class="card">
                          <div class="header">
                              <h4 class="title">สร้างสินค้าใหม่</h4>

                          </div>


                          <div class="content">

                            <form  method="POST" action="{{$url}}" enctype="multipart/form-data">
                                          {{ method_field($method) }}
                                          {{ csrf_field() }}

                                          <div class="row">
                                              <div class="col-md-12" style="padding-right: 15px;">
                                                  <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                                      <label>ชื่อสินค้า*</label>
                                                      <input type="text" class="form-control border-input" name="product_name" value="{{$objs->product_name}}">
                                                      @if ($errors->has('product_name'))
                                                          <span class="help-block">
                                                              <strong>กรุณาใส่ ชื่อสินค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>

                                                  <div class="form-group{{ $errors->has('product_code') ? ' has-error' : '' }}">
                                                      <label>code สินค้า*</label>
                                                      <input type="text" class="form-control border-input" name="product_code" value="{{$objs->product_code}}">
                                                      @if ($errors->has('product_code'))
                                                          <span class="help-block">
                                                              <strong>กรุณาใส่ code สินค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>

                                                  <div class="form-group{{ $errors->has('price_1') ? ' has-error' : '' }}">
                                                      <label>ราคาปลีก สินค้า*</label>
                                                      <input type="number" class="form-control border-input" name="price_1" value="{{$objs->price_1}}">
                                                      @if ($errors->has('price_1'))
                                                          <span class="help-block">
                                                              <strong>กรุณาใส่ ราคาปลีก ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>

                                                  <div class="form-group{{ $errors->has('price_2') ? ' has-error' : '' }}">
                                                      <label>ราคาส่ง สินค้า*</label>
                                                      <input type="number" class="form-control border-input" name="price_2" value="{{$objs->price_2}}">
                                                      @if ($errors->has('price_2'))
                                                          <span class="help-block">
                                                              <strong>กรุณาใส่ ราคาส่ง ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>


                                                  <div class="form-group{{ $errors->has('product_size') ? ' has-error' : '' }}">
                                                      <label>เลือก size สินค้า*</label>
                                                      <select name="product_size" class="form-control border-input" required>

                    								                      <option value="S"  @if( $objs->product_size == 'S')
                                        selected='selected'
                                        @endif>-- Size S --</option>
                                                          <option value="M" @if( $objs->product_size == 'M')
                                        selected='selected'
                                        @endif>-- Size M --</option>
                                                          <option value="L" @if( $objs->product_size == 'L')
                                        selected='selected'
                                        @endif>-- Size L --</option>
                                                          <option value="XL" @if( $objs->product_size == 'XL')
                                        selected='selected'
                                        @endif>-- Size XL --</option>

                    								                    </select>
                                                      @if ($errors->has('product_size'))
                                                          <span class="help-block">
                                                              <strong>กรุณา เลือก size สินค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>


                                                  <hr>
                                                  <div style="text-align: center">
                                                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($objs->product_code, 'C39+')}}" alt="barcode" />
                                                  </div>
                                                  <hr>
                                                  <div style="text-align: center">
                                                    <img src="data:image/png;base64,{{DNS2D::getBarcodePNG($objs->product_code, 'QRCODE',8,8)}}" alt="barcode"  />
                                                  </div>
                                                  <hr>


                                                  <div class="form-group{{ $errors->has('product_cat') ? ' has-error' : '' }}">
                                                      <label>หมวดหมู่ สินค้า*</label>
                                                      <select name="product_cat" class="form-control border-input" required>

                    								                      <option value="">-- เลือกหมวดหมู่ --</option>
                                                          @if($cat)
                    								                      @foreach($cat as $cats)
                    													  <option value="{{$cats->category_id}}" @if( $objs->cat_id == $cats->category_id)
                              selected='selected'
                              @endif>{{$cats->cat_name}}</option>
                    													  @endforeach
                                                @endif
                    								                    </select>
                                                      @if ($errors->has('product_cat'))
                                                          <span class="help-block">
                                                              <strong>กรุณาใส่ หมวดหมู่ ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>


                                                  <div class="form-group{{ $errors->has('shop_name') ? ' has-error' : '' }}">
                                                      <label>เลือกร้านค้า*</label>
                                                      <select name="shop_name" class="form-control border-input" required>

                    								                      <option value="">-- เลือกหมวดหมู่ --</option>
                                                          @if($shop_id)
                    								                      @foreach($shop_id as $shop)
                    													  <option value="{{$shop->id}}" @if( $objs->shop_id == $shop->id)
                              selected='selected'
                              @endif>{{$shop->shop_name}}</option>
                    													  @endforeach
                                                @endif
                    								                    </select>
                                                      @if ($errors->has('shop_name'))
                                                          <span class="help-block">
                                                              <strong>กรุณา เลือกร้านค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>

                                                  <div class="form-group{{ $errors->has('product_sum') ? ' has-error' : '' }}">
                                                      <label>จำนวนสินค้า*</label>
                                                      <input type="number" class="form-control border-input" name="product_sum" value="{{$objs->product_sum}}">
                                                      @if ($errors->has('product_sum'))
                                                          <span class="help-block">
                                                              <strong>กรุณาใส่ จำนวนสินค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                                  <br>
                                                  <div class="col-md-12" style="text-align: center">
                                    <label for="imgAvatar"></label>
                                    <img width="150" id="imgAvatar" name="imgAvatar" src="{{url('assets/product/'.$objs->product_image)}}" width="250px" alt="">

                                    <div class="form-group">



                                      <div class="file-upload btn">
                              <span>เลือกรูปภาพ</span>
                              <input class="upload" id="fileAvatar" name="image" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*">

                          </div>

                                            </div>


                                </div>




                                <div class="form-group{{ $errors->has('product_detail') ? ' has-error' : '' }}">
                                    <label>รายละเอียดสินค้า*</label>

                                    <textarea rows="3" class="form-control border-input" name="product_detail" id="summernote" placeholder="Here can be your description" value="Mike">{{$objs->product_detail}}</textarea>
                                    @if ($errors->has('product_detail'))
                                        <span class="help-block">
                                            <strong>กรุณาใส่ รายละเอียด ของคุณด้วย</strong>
                                        </span>
                                    @endif
                                </div>





                                              </div>


                                          </div>

                                          <div class="">
                                              <button type="submit" class="btn btn-info btn-fill btn-wd">อัพเดทสินค้า</button>
                                          </div>
                            </form>
                            <br>
                          </div>



                      </div>
                  </div>












                  <div class="col-md-6">
                      <div class="card">
                          <div class="header">
                              <h4 class="title">รูปภาพประกอบ</h4>

                          </div>


                          <div class="content">

                            <form  method="POST" action="{{url('upload_more_pic')}}" enctype="multipart/form-data">

                                          {{ csrf_field() }}

                                          <div class="row">
                                              <div class="col-md-12" style="padding-right: 15px;">


                            <div class="form-group">


                <label for="exampleInputFile">Image input</label>

                <input id="file-0a" class="file " type="file" name="product_image[]" accept="image/*" multiple>
                <input type="hidden" name="pro_id" class="form-control" value="{{ $objs->pro_id }}" required>



                </div>

                <div class="">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">อัพโหลดรูปภาพ</button>
                </div>



                </div>
                </div>

              </form>












                            </div>






                      </div>
                  </div>





                  <div class="col-md-6">

                    <div class="content">



<form  action="{{url('property_image_del')}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
  <input type="hidden" name="_method" value="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="pro_id" value="{{$objs->pro_id}}">
<div class="row mg-files" data-sort-destination data-sort-id="media-gallery">

@if($img_all)
@foreach($img_all as $img_u)
<div class="isotope-item  col-md-6">
  <div class="thumbnail">
    <div class="">
      <a class="thumb-image" >
        <img src="{{url('assets/gallery_product/'.$img_u->image)}}" class="img-responsive" >
      </a>
      <br>
      <div class="mg-thumb-options">
        <div class="checkbox-custom checkbox-default">
          <input type="checkbox" name="product_image[]" value="{{$img_u->id}}"  >

        </div>
      </div>
    </div>

    <div class="mg-description">

      <small class="pull-right text-muted"></small>
    </div>
  </div>
</div>
@endforeach
@endif




</div>
<hr>
<br>
<button type="submit" class="btn btn-danger pull-right" style="margin-top:-15px;">ลบรูปภาพที่เลือกไว้</button>
</form>

                      </div>
                    </div>


                </div>


            </div>
        </div>













@stop

@section('scripts')

<script src="{{url('assets/js/bootstrap-notify.js')}}"></script>
<script src="{{URL::asset('assets/upload_image/js/fileinput.js')}}?v1.2"></script>

<script src="{{URL::asset('assets/text/dist/summernote.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  $('#summernote').summernote({

    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
    disableDragAndDrop: true,
    height: 300,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: true                  // set focus to editable area after initializing summernote

  });
});
var postForm = function() {
var content = $('textarea[name="detail"]').html($('#summernote').code());
}
</script>

<script>
        $(document).ready(function () {
            $("#fileAvatar").on("change", previewFile);
            $('#btn_submit').click(() => {
                const file = document.querySelector('#fileAvatar').files[0];
                if (file) {
                    window.location = 'step-4.html';
                }
            });
        });

        function previewFile() {
            const file = document.querySelector('#fileAvatar').files[0];
            const preview = document.querySelector('#imgAvatar');
            const reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file); //reads the data as a URL
            }
        }
    </script>

    @if ($message = Session::get('success_edit_product'))
    <script type="text/javascript">
    type = ['success'];
    color = Math.floor((Math.random() * 4) + 1);
    $.notify({
        icon: "ti-gift",
        message: "ยินดีด้วย ได้ทำการแก้ไขข้อมูล สำเร็จเรียบร้อยแล้วค่ะ"

      },{
          type: type[color],
          timer: 2000,
          placement: {
              from: 'top',
              align: 'right'
          }
      });
    </script>
    @endif

    @if ($message = Session::get('success_product'))
    <script type="text/javascript">
    type = ['success'];
    color = Math.floor((Math.random() * 4) + 1);
    $.notify({
        icon: "ti-gift",
        message: "ยินดีด้วย ได้ทำการเพิ่มข้อมูล สำเร็จเรียบร้อยแล้วค่ะ"

      },{
          type: type[color],
          timer: 2000,
          placement: {
              from: 'top',
              align: 'right'
          }
      });
    </script>
    @endif



    @if ($message = Session::get('add_gallery_success'))
    <script type="text/javascript">
    type = ['success'];
    color = Math.floor((Math.random() * 4) + 1);
    $.notify({
        icon: "ti-gift",
        message: "ยินดีด้วย ได้ทำการเพิ่มข้อมูล สำเร็จเรียบร้อยแล้วค่ะ"

      },{
          type: type[color],
          timer: 2000,
          placement: {
              from: 'top',
              align: 'right'
          }
      });
    </script>
    @endif

    @if ($message = Session::get('del_gallery_success'))
    <script type="text/javascript">
    type = ['success'];
    color = Math.floor((Math.random() * 4) + 1);
    $.notify({
        icon: "ti-gift",
        message: "ยินดีด้วย ได้ทำการลบข้อมูล สำเร็จเรียบร้อยแล้วค่ะ"

      },{
          type: type[color],
          timer: 2000,
          placement: {
              from: 'top',
              align: 'right'
          }
      });
    </script>
    @endif


@stop('scripts')
