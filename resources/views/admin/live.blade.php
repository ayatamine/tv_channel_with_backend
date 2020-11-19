
@extends('admin.layouts.app')
@section('title','إعدادات البث المباشر')
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
                      <div class="card card-success p-0 m-auto">
                              <div class="card-header">
                                <h3 class="card-title">البث المباشر</h3>
                              </div>
                              <div class="card-body">
                                <div class="box">
                                  <div class="box-header with-border">

                                  </div><br>
                                  <!-- /.box-header -->
                                  <div class="box-body">
                                    <table class="table table-bordered">
                                      <tbody><tr>
                                        <th>الرابط</th>
                                        <th>تعديل</th>
                                      </tr>
                                      <tr>
                                        <td>
                                          <a href="{{$live->link}}" target="_blink">{{$live->link}}</a>
                                        </td>
                                        <td>
                                          <a href="" type="button"
                                              data-target="#edit_live" data-toggle="modal"
                                               class="btn btn-info btn-sm float-right mr-1 ml-1 edit_live" >
                                            <i class="fa fa-pencil " style="position:relative;top:3px"></i>
                                            </a>

                                        </td>
                                      </tr>

                                    </tbody></table>
                                  </div>
                                </div>
                              </div>
                      </div>
                  </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="edit_live" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mt-4">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <form role="form" id="edit_live_form" method="POST"  action="{{route('lives.update')}}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          @method('PUT')
                          <div class="card-body pb-0">
                              <div class="form-group">
                              <label for="link">تغيير</label>
                                <input type="text"  name="link"  class="form-control" id="link" value="{{$live->link}}" >
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
 </div>
@endsection
@section('js')
<script>

</script>
@endsection