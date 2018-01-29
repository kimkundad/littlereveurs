@extends('layouts.template')
@section('stylesheet')

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
                              <h4 class="title">สร้างรายการใหม่</h4>

                          </div>


                          <div class="content">

                            <form  method="POST" action="{{$url}}" enctype="multipart/form-data">
                                          {{ method_field($method) }}
                                          {{ csrf_field() }}

                                          <div class="row">
                                              <div class="col-md-12" style="padding-right: 15px;">


                                                  <div class="form-group{{ $errors->has('sale_type') ? ' has-error' : '' }}">
                                                      <label>เลือกประเภทการตัดสินค้า*</label>
                                                      <select name="sale_type" class="form-control border-input" required>

                    								                      <option value="1">-- ตัดแบบปลีก --</option>
                                                          <option value="1">-- ตัดแบบส่ง --</option>

                    								                    </select>
                                                      @if ($errors->has('sale_type'))
                                                          <span class="help-block">
                                                              <strong>กรุณา เลือกประเภทการตัดสินค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>


                                                  <div class="form-group{{ $errors->has('product_id') ? ' has-error' : '' }}">
                                                      <label>เลือกตัดสินค้า*</label>
                                                      <select name="product_id" class="form-control border-input js-example-basic-single" required="">
                                                          <option value="">-- เลือกสินค้า --</option>


                                                          @if(isset($products))
                                                            @foreach($products as $u)
                                                                <option value="{{$u->id}}">{{$u->product_name}}</option>
                                                            @endforeach
                                                          @endif

                                                  </select>
                                                      @if ($errors->has('provience_id'))
                                                          <span class="help-block">
                                                              <strong>กรุณาเลือกสินค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>




                                                  <div class="form-group{{ $errors->has('product_total') ? ' has-error' : '' }}">
                                                      <label>จำนวนสินค้า*</label>
                                                      <input type="number" class="form-control border-input" name="product_total" value="{{ old( 'product_total') }}">
                                                      @if ($errors->has('product_total'))
                                                          <span class="help-block">
                                                              <strong>กรุณาใส่ จำนวนสินค้า ของคุณด้วย</strong>
                                                          </span>
                                                      @endif
                                                  </div>






                                <div class="form-group{{ $errors->has('product_detail') ? ' has-error' : '' }}">
                                    <label>รายละเอียดสินค้า*</label>

                                    <textarea rows="3" class="form-control border-input" name="product_detail" placeholder="Here can be your description" value="Mike">{{ old( 'product_detail') }}</textarea>
                                    @if ($errors->has('product_detail'))
                                        <span class="help-block">
                                            <strong>กรุณาใส่ รายละเอียด ของคุณด้วย</strong>
                                        </span>
                                    @endif
                                </div>





                                              </div>


                                          </div>

                                          <div class="">
                                              <button type="submit" class="btn btn-info btn-fill btn-wd">กดสร้างรายการ</button>
                                          </div>
                            </form>
                            <br>
                          </div>



                      </div>
                  </div>
                </div>


            </div>
        </div>













@stop

@section('scripts')


<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});


</script>
@stop('scripts')
