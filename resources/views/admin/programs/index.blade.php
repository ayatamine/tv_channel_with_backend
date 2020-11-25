
@extends('admin.layouts.app')
@section('title','إعدادات البرامج')
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
                      <div class="card card-primary p-0 m-auto">
                              <div class="card-header">
                                <h3 class="card-title">إعدادات البرامج</h3>
                              </div>
                              <div class="card-body">
                                <div class="box">
                                  <div class="box-header with-border">
                                    <button type="button" class="btn btn-info float-right mr-1 ml-1" data-toggle="modal" data-target="#addb"><i class="fa fa-plus " style="position:relative;top:3px"></i> إضافة</button>

                                  </div><br><br>
                                  <!-- /.box-header -->
                                  <div class="box-body">
                                    <table class="table table-bordered">
                                      <tbody>
                                        <tr>
                                        <th style="width: 10px">#</th>
                                        <th>العنوان</th>
                                        <th>النوع</th>
                                        <th>مواقيت العرض</th>
                                        <th>مدة العرض</th>
                                        <th>الوصف</th>
                                        <th>الصورة</th>
                                        <th>اجراء</th>
                                      </tr>
                                      @forelse ($programs as $i=>$p)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$p->title}}</td>
                                        <td>{{$p->type}}</td>
                                        <td>{{$p->delay_at}}</td>
                                        <td>{{$p->duration}}</td>
                                        <td>{{$p->description}}</td>
                                        <td>
                                         <a href="{{asset('img/programs/'.$p->thumbnail)}}" target="_blink"> <img src="{{asset('img/programs/'.$p->thumbnail)}}" height="60" width="80" alt="{{$p->image}}"></a>
                                        </td>
                                        <td>
                                          <a href="" type="button"
                                              data-program="{{$p}}"
                                              data-update_url="{{route('programs.update',['program'=>$p->id])}}"
                                              data-program_image="{{asset('img/programs/'.$p->thumbnail)}}"
                                              data-target="#edit_program" data-toggle="modal"
                                               class="btn btn-info btn-sm float-right mr-1 ml-1 mb-1 edit_program" >
                                            <i class="fa fa-pencil " style="position:relative;top:3px"></i>
                                            </a>
                                          <a href="" type="button"  data-toggle="modal"
                                              data-target="#delete_program"
                                              delete_link="{{route('programs.destroy',['program'=>$p->id])}}"
                                               class="btn btn-danger btn-sm  mr-1 ml-1 delete_program" >
                                            <i class="fa fa-trash " style="position:relative;top:3px" ></i>
                                            </a>

                                        </td>
                                      </tr>
                                      @empty

                                      @endforelse

                                    </tbody></table>
                                  </div>
                                  <!-- /.box-body -->
                                 {{$programs->links()}}
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
                      <form role="form" id="addbf"  method="POST" action="{{route('programs.store')}}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="card-body pb-0">
                              <div class="form-group row">
                                <label for="title" class="col-3">العنوان</label>
                                <input type="text"  name="title"  class="form-control col-9" id="title" value="{{old('title') }}" >
                              </div>
                              <div class="form-group row">
                                <label for="type" class="col-3">النوع</label>
                                <input type="text"  name="type"  class="form-control col-9" id="type" value="{{old('type')}}">
                              </div>
                              <div class="form-group row">
                                <label for="duration" class="col-3">مدة المشاهدة</label>
                                <input type="number"  name="duration"  class="form-control col-9" id="duration" value="{{old('duration')}}">
                              </div>
                              <div class="form-group row">
                                <label for="delay_at" class="col-3">أوقات المشاهدة</label>
                                <textarea name="delay_at" id="" rows="3" class="form-control col-9">{{old('delay_at')}}</textarea>
                              </div>
                              <div class="form-group row">
                                <label for="image" class="col-3">الصورة</label>
                                <input type="file"  name="image"  class="form-control col-9" id="image" >
                              </div>
                              <div class="form-group row">
                                <label for="description" class="col-3">وصف البرنامج</label>
                                <textarea name="description" id="" rows="4" class="form-control col-9">{{old('description')}}</textarea>
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
        <div class="modal fade" id="edit_program" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mt-4">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <form role="form" id="edit_program_form" method="POST"  action="" enctype="multipart/form-data">
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
                              <hr>
                              <div class="form-group row">
                                <label for="title" class="col-3">العنوان</label>
                                <input type="text"  name="title"  class="form-control col-9" id="title" value="" >
                              </div>
                              <div class="form-group row">
                                <label for="type" class="col-3">النوع</label>
                                <input type="text"  name="type"  class="form-control col-9" id="type" value="">
                              </div>
                              <div class="form-group row">
                                <label for="duration" class="col-3">مدة المشاهدة</label>
                                <input type="number"  name="duration"  class="form-control col-9" id="duration" value="">
                              </div>
                              <div class="form-group row">
                                <label for="delay_at" class="col-3">أوقات المشاهدة</label>
                                <textarea name="delay_at" id="" rows="3" class="form-control col-9"></textarea>
                              </div>
                              <div class="form-group row">
                                <label for="description" class="col-3">وصف البرنامج</label>
                                <textarea name="description" id="" rows="4" class="form-control col-9"></textarea>
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
        <div class="modal fade" id="delete_program" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mt-4">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <form role="form" id="delete_program_form"  method="POST" action="" >
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
  $(document).on('click','.edit_program',function(e){
      e.preventDefault();
      let image = $(this).data('program_image');
      let update_url = $(this).data('update_url');
      $('#edit_program #image_to_update').attr('src',image);
      $('#edit_program_form').attr('action',update_url)
      let program = $(this).data('program');
      console.log(program);
      $('#edit_program_form input[name="title"]').val(program.title)
      $('#edit_program_form input[name="type"]').val(program.type)
      $('#edit_program_form input[name="duration"]').val(program.duration)
      $('#edit_program_form textarea[name="delay_at"]').val(program.delay_at)
      $('#edit_program_form textarea[name="description"]').val(program.description)


    })
  $(document).on('click','.delete_program',function(){
      let delete_link = $(this).attr('delete_link');
      $('#delete_program_form').attr('action',delete_link);
    })
</script>
@endsection