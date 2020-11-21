@extends('layouts.app2')
@section('title', $title)
@section('content')
<section class="features3 cid-sgjRpbzzDK" id="features3-r">
    <div class="container">
        <div class="media-container-row row mb-2">
            @foreach ($programs as $p)
            <div class="col-md-4 program-wrapper w-75">
                <div class="wrap-img ">
                    <img src="{{asset('img/programs/').'/'.$p->thumbnail}}" class="img-responsive programs-img">
                </div>
                <div class="bg-white text-center text-dark">
                    <a href="" class="btn btn-program-title btn-lg" data-program="{{$p}}"
                     data-target="#show_program_details" data-toggle="modal">{{$p->title}}</a>
                    <div class="text-center p-2 pb-3">{{$p->delay_at}}</div>
                    <a href="" class="btn btn-primary btn-block more-details-btn" data-program="{{$p}}"
                     data-target="#show_program_details" data-toggle="modal">تفاصيل أكثر</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-lg-4">
            <a href="#" class="btn btn-primary  font-weight-bold btn-lg" id="load-more-programs" data-skip_number="6">المزيد</a>
        </div>
    </div>
</section>
<!-- show details modal -->
<div class="modal" tabindex="-1" role="dialog" id="show_program_details" dir="rtl">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="    height: auto;">
            <div class="modal-body">
                <div class="row text-right">
                    <div class="col-3">
                        <img class="mr-3" style="min-height: 100px;  width: 100%;" src="assets/images/video-placeholder.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="media-body col-9 program-description">



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).on('click','.more-details-btn',function(){
        let p = $(this).data('program')
        console.log(p);
        $('.program-description').html(`
           <h5 class="mt-0 text-primary ">اسم البرنامج :</h5>
                        <h6>${p.title}</h6>
                        <h5 class="mt-0 text-primary ">نوع البرنامج :</h5>
                        <h6>${p.type} </h6>
                        <h5 class="mt-0 text-primary ">مدة البرنامج :</h5>
                        <h6>${p.duration} دقيقة تلفزيونية </h6>
                        <h5 class="mt-0 text-primary ">وصف البرنامج :</h5>
                        <div class="">
                            ${p.description}
                        </div>
        `)
    })
    $(document).on('click','.btn-program-title',function(){
        let p = $(this).data('program')
        console.log(p);
        $('.program-description').html(`
           <h5 class="mt-0 text-primary ">اسم البرنامج :</h5>
                        <h6>${p.title}</h6>
                        <h5 class="mt-0 text-primary ">نوع البرنامج :</h5>
                        <h6>${p.type} </h6>
                        <h5 class="mt-0 text-primary ">مدة البرنامج :</h5>
                        <h6>${p.duration} دقيقة تلفزيونية </h6>
                        <h5 class="mt-0 text-primary ">وصف البرنامج :</h5>
                        <div class="">
                            ${p.description}
                        </div>
        `)
    });
    var skip_number = $('#load-more-programs').data('skip_number');

    $(document).on('click','#load-more-programs',function(e){
        let that = $(this);
        let _token = $("input[name='_token']").val();
         e.preventDefault();
         $.ajax({
             url:'{{route("programs.loadmore")}}',
             method:'get',
             dataType:'json',
             data:{_token: _token,skip_number:skip_number},
             success:function(data){
                 console.log(data);
                skip_number+=6;
                console.log(skip_number);
                if(data.length > 0){
                 if(data.length < 6){
                    $(that).css('display','none')
                 }
                 data.forEach(p =>{
                    $('.media-container-row').append(`
                        <div class="col-md-4 program-wrapper w-75">
                            <div class="wrap-img ">
                                <img src="img/programs/${p.thumbnail}" class="img-responsive programs-img">
                            </div>
                            <div class="bg-white text-center text-dark">
                                <a href="" class="btn btn-program-title btn-lg" data-program="${p}"
                                data-target="#show_program_details" data-toggle="modal">${p.title}</a>
                                <div class="text-center p-2 pb-3">${p.delay_at}</div>
                                <a href="" class="btn btn-primary btn-block more-details-btn" data-program="${p}"
                                data-target="#show_program_details" data-toggle="modal">تفاصيل أكثر</a>
                            </div>
                        </div>
                    `)
                   })


                }

             }
         })
    })
</script>

@endsection