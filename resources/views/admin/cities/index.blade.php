@extends('admin.layouts.app')


@section('content')
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">{{ $title }}</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ aurl("/cities/create") }}">اضافة دولة</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- HTML5 export buttons table -->
      <!-- Column selectors table -->
      <section id="column-selectors">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
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
              <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <form method="post" action="{{aurl("/cities/destroyall")}}" name="form1" >

                        {{ csrf_field() }}
                  <table class="table table-striped table-bordered dataex-html5-selectors">
                    <thead>
                      <tr>
                          <th><input type="checkbox" id="checkAll"> اختيار الكل</th>

                          <th>{{ trans('admin.title') }}</th>
                          <th>{{ trans('admin.date') }}</th>
                                                  <th>كود الدولة</th>
                                                  <th>العملة</th>

                                                    <th>اضافة مدينة</th>
                          <th>مشاهدة المدن</th>

                        <th>{{ trans('admin.edit') }}</th>
                        <th>{{ trans('admin.delete') }}</th>

                      </tr>
                    </thead>


                    <tbody>
                    <!-- Trigger the modal with a button -->




       @foreach ($index as $i)
                            <tr id="show_{{ $i->id }}">
                                <td style="width: 5px">  <input type="checkbox" name="id[]" value="{{ $i->id }}" id="checkItem"  /></td>

                                <td>{{ $i->name }}</td>

                                <td>{{ $i->created_at }}</td>
                               <td>{{ $i->code }}</td>

                               <td>{{ $i->currency }}</td>

                                <td>
                                    <a href="{{ aurl('/cities/create_with/'.$i->id) }}" class="btn btn-success btn-min-width mr-1 mb-1"><i
                                                class="ft-add"></i> اضافة مدينة  </a>
                                </td>
                               <td>
                                    <a href="{{ aurl('/cities/sub_cities/'.$i->id) }}" class="btn btn-warning btn-min-width mr-1 mb-1"> {{ trans('admin.view') }} - {{$i->sub_city->count()}} مدينة</a>
                                </td>
                                <td>
                                    <a   href="{{ aurl('/cities/edit/'.$i->id) }}" class="btn btn-secondary btn-min-width mr-1 mb-1"><i
                                                class="ft-edit"></i> {{ trans('admin.edit') }}</a>
                                                                                                                <input type="hidden" value="{{ csrf_token() }}" id="csrf_token" />

                                </td>
                                    <td>
                                                                                                                                           @if (userCan('admin'))

                                        <button type="submit" class="btn btn-danger btn-min-width btn-glow mr-1 mb-1" onclick="DeleteRow({{$i->id}})"><i
                                                    class="ft-delete"></i> {{ trans('admin.delete') }}</button>
                                                    @endif
                                    </td>
                            </tr>
                            <!-- Modal -->

                        @endforeach
                    <a type="button" href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                        Delete Selected
                    </a>
                    <div class="modal modal-danger fade" id="modal-danger">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">{{trans('admin.ask_to_delete')}}</h4>
                                </div>
                                <div class="modal-body">
                                    <p>{{trans('admin.ask_to_delete')}}&hellip;</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline pull-left" data-dismiss="modal">{{trans('admin.no')}}</button>
                                    <button   type="submit" class="btn btn-outline">{{trans('admin.yes')}}</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    </tbody>

                      <tfoot>
                      <tr>
                          <th> اختيار الكل</th>

                          <th>{{ trans('admin.title') }}</th>
                          <th>{{ trans('admin.date') }}</th>
                             <th>كود الدولة</th>
                                                  <th>العملة</th>
                                                         <th>اضافة مدينة</th>
                          <th>مشاهدة المدن</th>

                          <th>{{ trans('admin.edit') }}</th>
                          <th>{{ trans('admin.delete') }}</th>
                      </tr>
                    </tfoot>
                  </table>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Column selectors table -->
</div>


@endsection
@section('scripts') @if (session()->get('locale') == "ar")
<script>
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    function show_alert() {
        if(!confirm("في حالة الموافقة على الحذف سيتم حذف البيانات نهائيا")) {
            return false;
        }
        this.form.submit();
    }
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
                            url: "{{aurl("/cities/destroy/")}}",
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
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    function show_alert() {
        if(!confirm("في حالة الموافقة على الحذف سيتم حذف البيانات نهائيا")) {
            return false;
        }
        this.form.submit();
    }




    $("#btnSubmit").on("click", function(){
        // Submit the form
        document.querySelector("form").submit();
    });
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
                            url: "{{aurl("/cities/destroy/")}}",
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
