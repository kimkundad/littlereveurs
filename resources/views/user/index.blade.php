@extends('layouts.template')
@section('stylesheet')
  <link rel="stylesheet" href="{{asset('./assets/bootstrap-switch-master/css/bootstrap3/bootstrap-switch.css')}}" />
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

                              <p class="category">คุณสามารถเพิ่ม admin ให้กับ user อื่นได้</p>
                          </div>






                          <div class="content table-responsive table-full-width">



                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>ชื่อผู้ใช้</th>
                                    <th>แหล่งที่มา</th>
                                    <th>Email</th>
                                    <th>สถานะ</th>

                                  </tr>
                                </thead>
                                  <tbody>

                                    @if($objs)
                                    @foreach($objs as $u)
                                      <tr id="{{$u->id}}">
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->provider}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>

                                          <input type="checkbox" name="my-checkbox" id="switch-size" data-size="mini"
                         @if($u->is_admin == true)
                          checked="checked"
                          @endif
                          />
                                        </td>

                                      </tr>
                                      @endforeach
                                                    @endif


                                  </tbody>
                              </table>

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
<script src="{{asset('/assets/bootstrap-switch-master/js/bootstrap-switch.js')}}"></script>



<script type="text/javascript">
$(document).ready(function(){
  $("[name='my-checkbox']").bootstrapSwitch();
//  $("input:checkbox").change(function() {

$("[name='my-checkbox']").on('switchChange.bootstrapSwitch',function(){
    var product_id = $(this).closest('tr').attr('id');

    $.ajax({
            type:'POST',
            url:'{{url('api/user_status')}}',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            data: { "user_id" : product_id },
            success: function(data){
              if(data.data.success){


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



              }
            }
        });
    });
});
</script>


@if ($message = Session::get('edit_success'))
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


@stop('scripts')
