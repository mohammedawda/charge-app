@extends('admin.layouts.app')

@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">{{ $title }}</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ aurl("/cities") }}">الدول</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Striped row layout section start -->
        <section id="striped-row-form-layouts">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="horz-layout-icons">{{ $title }}</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <form class="form form-horizontal striped-rows form-bordered" method="post"   action="{{ route('cities.store_with', [$edit->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="timesheetinput2">{{ trans('admin.arabic_name') }}</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" required  class="form-control" placeholder="{{ trans('admin.arabic_name') }}"
                                                           name="name" value="{{ old('name') }}">
                                                    <div class="form-control-position">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                               






                                        
                                              <div class="form-group row">
                                            <label class="col-md-3 label-control" for="timesheetinput2">صورة الخلفية</label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left">
                                                    <input type="file"  class="form-control" name="image_back"  >
                                                    <div class="form-control-position">
                                                        <i class="la la-file-image-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Description -->
                              

                                    </div>
                                    <div class="form-actions right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> {{ trans('admin.save') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('backend/app-assets/vendors/js/forms/jquery.repeater.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/forms/app-menu.js')}}" type="text/javascript"></script>

    <script src="{{ asset('backend/app-assets/vendors/js/forms/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('backend/app-assets/vendors/js/forms/customizer.js')}}" type="text/javascript"></script>

    <script src="{{ asset('backend/app-assets/vendors/js/forms/form-repeater.js')}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var path = "{{ route('autocompletecity') }}";
        $('input.typeahead').typeahead({
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

@endsection