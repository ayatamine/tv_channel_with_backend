
@extends('admin.layouts.app')
@section('title','إعدادات السلايدر')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="content col-12 m-auto">
              <div class="container-fluid ">
                @if(Session::has('errors'))
                @foreach ($errors->all() as $err)

                  @endforeach
                <div class="alert alert-danger alert-dismissible fade show col-sm-8 mr-auto ml-auto mb-3" role="alert">
                    {{ $err}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              @endif
                  @if(Session::has('success'))

                    <div class="alert alert-success alert-dismissible fade show mr-auto ml-auto mb-3" role="alert">
                          {{Session::get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif
                      <div class="card card-info p-0 m-auto">
                              <div class="card-header">
                                <h3 class="card-title">إعدادات السلايدر</h3>
                              </div>
                              <div class="card-body">
                                <div class="box">
                                  <div class="box-header with-border">
                                    <button type="button" class="btn btn-success float-right mr-1 ml-1" data-toggle="modal" data-target="#addb"><i class="fa fa-plus " style="position:relative;top:3px"></i> إضافة</button>

                                  </div><br><br>
                                  <!-- /.box-header -->
                                  <div class="box-body">
                                    <table class="table table-bordered">
                                      <tbody><tr>
                                        <th style="width: 10px">#</th>
                                        <th>الصورة</th>
                                        <th>اجراء</th>
                                      </tr>
                                      @forelse ($sliders as $i=>$s)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>
                                          <img src="{{asset('img/sliders/'.$s->image)}}" height="60" width="80" alt="{{$s->image}}">
                                        </td>
                                        <td>
                                          <a href="" type="button"
                                              data-update_url="{{route('sliders.update',['slider'=>$s->id])}}"
                                              data-slider_image="{{asset('img/sliders/'.$s->image)}}"
                                              data-target="#edit_slider" data-toggle="modal"
                                               class="btn btn-info btn-sm float-right mr-1 ml-1 edit_slider" >
                                            <i class="fa fa-pencil " style="position:relative;top:3px"></i>
                                            </a>
                                          <a href="" type="button"  data-toggle="modal"
                                              data-target="#delete_slider"
                                              delete_link="{{route('sliders.destroy',['slider'=>$s->id])}}"
                                               class="btn btn-danger btn-sm  mr-1 ml-1 delete_slider" >
                                            <i class="fa fa-trash " style="position:relative;top:3px" ></i>
                                            </a>

                                        </td>
                                      </tr>
                                      @empty

                                      @endforelse

                                    </tbody></table>
                                  </div>
                                  <!-- /.box-body -->
                                 {{$sliders->links()}}
                                </div>
                              </div>
                      </div>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="addb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mt-4">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <form role="form" id="addbf"  method="POST" action="{{route('sliders.store')}}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="card-body pb-0">
                              <div class="form-group">
                              <label for="image">الصورة</label>
                              <input type="file"  name="image"  class="form-control" id="image" >
                              </div>

                          </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer pt-0">
                          <button type="submit" class="btn btn-primary mr-3">إضافة</button>
                      </div>
                      </form>
              </div>
              <div class="modal-footer">

              </div>
            </div>
        </div>
        <div class="modal fade" id="edit_slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mt-4">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <form role="form" id="edit_slider_form" method="POST"  action="" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          @method('PUT')
                          <div class="card-body pb-0">
                              <div class="form-group text-center">
                                <img src=""" alt="" id="image_to_update" style="    width: 60%;
                                height: 20%;    border: 2px solid #999;">
                              </div>
                              <div class="form-group">
                              <label for="image">تغيير</label>
                              <input type="file"  name="image"  class="form-control" id="image" >
                              </div>

                          </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer pt-0">
                          <button type="submit" class="btn btn-primary mr-3">حفظ</button>
                      </div>
                      </form>
              </div>
              <div class="modal-footer">

              </div>
            </div>
        </div>
        <div class="modal fade" id="delete_slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mt-4">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <form role="form" id="delete_slider_form"  method="POST" action="" >
                          {{ csrf_field() }}
                          <div class="card-body pb-0">
                              <div class="form-group text-center">
                                <input type="submit" class="btn btn-danger  mr-1 ml-1"  value="تأكيد الحدف">
                                  @method('delete')
                              </div>

                          </div>
                        </form>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer pt-2">
                      </div>

              </div>
            </div>
        </div>
 </div>
@endsection
@section('js')
<script>
  $(document).on('click','.edit_slider',function(e){
      e.preventDefault();
      let image = $(this).data('slider_image');
      let update_url = $(this).data('update_url');
      $('#edit_slider #image_to_update').attr('src',image);
      $('#edit_slider_form').attr('action',update_url)

    })
  $(document).on('click','.delete_slider',function(){
      let delete_link = $(this).attr('delete_link');
      $('#delete_slider_form').attr('action',delete_link);
    })
</script>
@endsection