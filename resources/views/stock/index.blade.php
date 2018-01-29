@extends('layouts.template')
@section('stylesheet')

<style>

</style>
@stop('stylesheet')

@section('content')



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="header">

                              <p class="category">คุณสามารถเพิ่มรายการตัดสินค้าในคลังได้</p>
                          </div>

                          <?php
                          function DateThai($strDate)
                          {
                          $strYear = date("Y",strtotime($strDate))+543;
                          $strMonth= date("n",strtotime($strDate));
                          $strDay= date("j",strtotime($strDate));
                          $strHour= date("H",strtotime($strDate));
                          $strMinute= date("i",strtotime($strDate));
                          $strSeconds= date("s",strtotime($strDate));
                          $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                          $strMonthThai=$strMonthCut[$strMonth];
                          return "$strDay $strMonthThai $strYear";
                          }
                           ?>




                          <div class="content table-responsive table-full-width">

                            <a class="btn btn-default " href="{{url('stock/create')}}" role="button" style="margin-left:12px;">
                            <i class="fa fa-plus"></i> เพิ่มรายการใหม่</a>

                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>#ID</th>
                                    <th>วันที่</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>จำนวนตัด</th>
                                    <th>คงเหลือ</th>
                                    <th>ผู้ใช้งาน</th>
                                    <th>จัดการ</th>
                                  </tr>
                                </thead>
                                  <tbody>

                                    @if($objs)
                                      @foreach($objs as $u)
                                                            <tr id="{{$u->st_id}}">
                                                              <td>{{$u->st_id}}</td>
                                                              <td><?php echo DateThai($u->created_stock); ?> </td>
                                                              <td>{{$u->product_name}}</td>
                                                              <td>{{$u->product_total}}</td>
                                                              <td>{{$u->product_sum}}</td>
                                                              <td>{{$u->name}}</td>

                                                              <td>

                                                                <a style="float:left; margin-right:5px;" title="แก้ไขหมวดหมู่" class="btn btn-primary btn-xs" href="{{url('stock/'.$u->st_id.'/edit')}}" role="button"><i class="fa fa-cog "></i> </a>

                                                                <form  action="{{url('stock/'.$u->st_id)}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                                                                  <input type="hidden" name="id" value="{{$u->st_id}}">
                                                                  <input type="hidden" name="_method" value="DELETE">
                                                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                  <button type="submit" title="ลบหมวดหมู่" class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                                                                </form>

                                                                </td>
                                                            </tr>
                                      @endforeach
                                    @endif



                                  </tbody>
                              </table>
                              {{ $objs->links() }}
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row">


                </div>


            </div>
        </div>















@stop

@section('scripts')
<script src="{{url('assets/js/bootstrap-notify.js')}}"></script>



@if ($message = Session::get('error_stock'))
<script type="text/javascript">
type = ['danger'];

$.notify({
    icon: "ti-face-sad",
    message: "จำนวนสินค้าของคุณไม่เพียงพอ ต่อการทำรายการ"

  },{
      type: type[0],
      timer: 2000,
      placement: {
          from: 'top',
          align: 'right'
      }
  });
</script>
@endif

@if ($message = Session::get('success_delete'))
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

@if ($message = Session::get('success_stock'))
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


@stop('scripts')
