@extends('admin.layouts.app')

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/users.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/timeline.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/project.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">



@section('content')

    <div class="content-body">
        <!-- HTML5 export buttons table -->
        <!-- Column selectors table -->

              <section class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-head">
                  <div class="card-header">
                    <h1 class="card-title">{{ $title }}</h1>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                
                    </div>
                  </div>
                  <div class="px-1">
                    <ul class="list-inline list-inline-pipe text-center p-1 border-bottom-grey border-bottom-lighten-3">
                      <li>Registered At :
                        <span class="text-muted">{{$subscriber->created_at}}</span>
                      </li>
               
                    </ul>
                  </div>
                </div>
                <!-- project-info -->
                <div id="project-info" class="card-body row">
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$stage_count}}</h2>
                   
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>عدد المحلات المضافة</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$stage_today}}</h2>
                 
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>محلات اليوم</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$stage_month}}</h2>
                   
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>محلات الشهر</h5>
                    </div>
                  </div>
                  
                  
                              <div id="project-info" class="card-body row">
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$stages_active_count}}</h2>
                   
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>عدد المحلات المفعلة</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$stage_active_today}}</h2>
                 
                    </div>
                    <div class="project-info-text pt-1">
                      <h5> تفعيل المحلات اليوم</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$stage_active_month}}</h2>
                   
                    </div>
                    <div class="project-info-text pt-1">
                      <h5> تفعيل المحلات هذا الشهر</h5>
                    </div>
                  </div>
                  <br>
                  
               <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$subscriber_count}}</h2>
                 
                    </div>
                    <div class="project-info-text pt-1">
                      <h5>  عدد اصحاب المحلات</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$subscriber_today}}</h2>
                  
                    </div>
                    <div class="project-info-text pt-1">
                      <h5> اصحاب محلات اليوم</h5>
                    </div>
                  </div>
                  <div class="project-info-count col-lg-4 col-md-12">
                    <div class="project-info-icon">
                      <h2>{{$subscriber_month}}</h2>
                     
                    </div>
                    <div class="project-info-text pt-1">
                      <h5> اصحاب محلات الشهر</h5>
                    </div>
                  </div>
                </div>
                <!-- project-info -->
              </div>
            </div>
          </section>

        
  
        
        
        
        
        
        
        
        
                <section id="timeline" class="timeline-center timeline-wrapper">
          <h3 class="page-title text-center">المحلات ({{$subscriber->stage->count()}})</h3>
          <ul class="timeline">
            <li class="timeline-line"></li>
            <!-- /.timeline-line -->
                     @foreach($stages as $i)
                    <li class="timeline-item mt-3" >
                        <div class="timeline-badge" >
                <span class="bg-warning bg-darken-1" data-toggle="tooltip" data-placement="right"
                      title="{{$i->arabic_name}}"><i class="la la-shopping-cart"></i></span>
                        </div>
                        <div class="timeline-card card border-grey border-lighten-2">
                            <div class="card-header">
                                <div class="media">

                                    <div class="media-body">
                                        <h4 class="card-title">{{ $i->arabic_name }}</h4>
                                        <p class="card-subtitle text-muted mb-0 pt-1">
                                            @if($i->oper == 'update')
                                            <span class="font-small-3">{{ $i->updated_at }}</span>
                                            @elseif($i->oper == 'create')
                                                                                        <span class="font-small-3">{{ $i->created_at }}</span>
                                                @else              
                                                                                        <span class="font-small-3">{{ $i->updated_at }}</span>
                                            @endif
                                            @if($i->oper == 'update')
                                            <span class="badge badge-pill badge-default badge-danger float-right">تعديل </span>
                                           @elseif($i->oper == 'create')
                                          <span class="badge badge-pill badge-default badge-success float-right">انشاء </span>

                                            @else 
                                          <span class="badge badge-pill badge-default badge-warning float-right">تفعيل </span>
                                                 @endif

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-content ">
                                    <div class="card-body " >
                                        <img src="{{ asset('uploads/'.$i->image) }}" title="{{ trans('admin.photo') }}" alt="element 01"  width="200" height="180" class="float-left" >
                                        <div class="float-right" style="float: right;margin-left:100px !important" >
                                            <h5 class="  text-black" style="color: black;margin-bottom: -25px;font-weight: 1000">{{ $i->arabic_name }} - {{  $i->city()->first()->name }}</h5>
                                            <br><br><br>
                                            <p class=" text-black" style="color: black;margin-bottom: -25px">تاريخ الاشتراك - {{  $i->begin }}</p>
                                            <br>     

                                            <p class="  text-black" style="color: black;margin-bottom: -25px">تاريخ الانتهاء - {{  $i->end }}</p>
                                            <br>

                                            <p class="  text-black" style="color: black;margin-bottom: -25px">{{ trans('admin.category') }} - {{ $i->cat()->first()->arabic_name }}</p>
                                            <br>

                                            <p class="  text-black" style="color: black;margin-bottom: -25px">{{ trans('admin.phone') }} - {{ $i->phone }}</p>
                                            <br>





                                        </div>
                               
                                    </div>
                                </div>
                               
                            </div>
                                      <div class="card-footer">
                                            @if ($i->status == 1)
                                                <a href="{{ aurl('/stages/active/'.$i->id) }}" class="btn btn-warning btn-min-width mr-1 mb-1 "><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.deactivate') }}</a>
                                            @else
                                                <a href="{{ aurl('/stages/active/'.$i->id) }}" class="btn btn-success btn-min-width mr-1 mb-1 "><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.activation') }}</a>
                                            @endif
                                            @if ($i->best == 1)
                                                <a href="{{ aurl('/stages/best/'.$i->id) }}" class="btn btn-grey-blue btn-min-width mr-1 mb-1"><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.debest') }}</a>
                                            @else
                                                <a href="{{ aurl('/stages/best/'.$i->id) }}" class="btn btn-outline-grey-blue btn-min-width mr-1 mb-1"><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.best') }}</a>
                                            @endif
                                  
                                        </div>
                        </div>
                    </li>

                @endforeach
          </ul>
        <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$stages->links()}}
                    </ul>
                </nav>
        </section>

    
        
        
        
        <!--/ Column selectors table -->
    </div>
@endsection
@section('scripts')
@if (session()->get('locale') == "ar")
<script>
  function DeleteRow(id) {
    	           event.preventDefault();
                   swal({
           		    title: "هل انت متأكد من الحذف ؟",
           		    text: "في حالة الموافقة على الحذف سيتم حذف البيانات نهائيا",
           		    icon: "warning",
           		    buttons: {
                           cancel: {
                               text: "لا أريد الحذف",
                               value: null,
                               visible: true,
                               className: "",
                               closeModal: false,
                           },
                           confirm: {
                               text: "نعم أريد الحذف",
                               value: true,
                               visible: true,
                               className: "",
                               closeModal: false
                           }
           		    }
           		})
           		.then((isConfirm) => {
           		    if (isConfirm) {
                        $.ajax({
                            type: 'post',
                            url: "{{aurl("/calls/destroy/")}}",
                            data: {
                                '_token': $('#csrf_token').val(),
                                'id': id,
                            },

                        });
                        $('#show_' + id).remove();
           		        swal("تم الحذف!", "البيانات تم حذفها بنجاح", "success");
           		    } else {
           		        swal("تم الغاء الطلب", "لم يتم حذف الداتا", "error");
           		    }
           		});

            }

</script>
@else
<script>
  function DeleteRow(id) {
    	           event.preventDefault();
                   swal({
           		    title: "Are you sure?",
           		    text: "You will not be able to recover this imaginary file!",
           		    icon: "warning",
           		    buttons: {
                           cancel: {
                               text: "No, cancel",
                               value: null,
                               visible: true,
                               className: "",
                               closeModal: false,
                           },
                           confirm: {
                               text: "Yes, delete it!",
                               value: true,
                               visible: true,
                               className: "",
                               closeModal: false
                           }
           		    }
           		})
           		.then((isConfirm) => {
           		    if (isConfirm) {
                        $.ajax({
                            type: 'post',
                            url: "{{aurl("/calls/destroy/")}}",
                            data: {
                                '_token': $('#csrf_token').val(),
                                'id': id,
                            },

                        });
                        $('#show_' + id).remove();
           		        swal("Deleted!", "Your data has been deleted.", "success");
           		    } else {
           		        swal("Cancelled", "Your data is safe", "error");
           		    }
           		});

            }

</script>
@endif
@endsection