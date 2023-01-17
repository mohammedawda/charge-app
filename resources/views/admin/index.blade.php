@extends('admin.layouts.app')
@section('content')
    <!-- eCommerce statistic -->
    <div class="row">

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="warning">{{ $subsciber_all }}</h3>
                                <h6>{{ trans("admin.subsciber_all") }}</h6>
                            </div>
                            <div>
                                <i class="icon-user-follow success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>










        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success">{{ $subsciber_agree }}</h3>
                                <h6>{{ trans("admin.subsciber_agree") }}</h6>
                            </div>
                            <div>
                                <i class="icon-users success la-3x float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">{{ $subsciber_waiting }}</h3>
                                <h6>{{ trans("admin.subsciber_waiting") }}</h6>
                            </div>
                            <div>
                                <i class="la la-credit-card danger fa-3x float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info">{{ $subsciber_today }}</h3>
                                <h6>{{ trans("admin.subsciber_today") }}</h6>
                            </div>
                            <div>
                                <i class="la la-credit-card info fa-3x float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="black">{{ $active_today }}</h3>
                                <h6>تفعيل اليوم</h6>
                            </div>
                            <div>
                                <i class="la la-credit-card black fa-3x float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-black" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="purple">{{ $subscriber_empty }}</h3>
                                <h6> اصحاب محلات بدون محلات</h6>
                            </div>
                            <div>
                                <i class="la la-credit-card purple fa-3x float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-purple" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="warning">{{ $stages_all }}</h3>
                                <h6>{{ trans("admin.all stage") }}</h6>
                            </div>
                            <div>
                                <i class="icon-home success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success">{{ $BestStagescount }}</h3>
                                <h6>منشأت مفعلة</h6>
                            </div>
                            <div>
                                <i class="icon-heart success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">{{ $stage_waiting }}</h3>
                                <h6>  {{ trans("admin.stage_waiting") }} </h6>
                            </div>
                            <div>
                                <i class="icon-action-redo success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info">{{ $create_today_stage }}</h3>
                                <h6> محلات اليوم</h6>
                            </div>
                            <div>
                                <i class="icon-Watch info font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="black">{{ $active_today_stage }}</h3>
                                <h6>تفعيل محلات اليوم</h6>
                            </div>
                            <div>
                                <i class="icon-Watch success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-black" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="purple">    {{CountExpiredStage()}}</h3>
                                <h6>{{ trans('admin.ExpiredStages') }}  </h6>
                            </div>
                            <div>
                                <i class="icon-Watch purple font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-purple" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"> اعلى الموظفات   </h2>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div id="new-orders" class="media-list position-relative">
                        <div class="table-responsive">
                            <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                <thead>
                                <tr>
                                    <th class="border-top-0">الاسم</th>

                                    <th class="border-top-0">اجمالى اصحاب المحلات     </th>
                                    <th class="border-top-0">اجمالى المحلات       </th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($TopAdmin as $i)

                                    <tr>
                                        <td class="text-black" ><h4 style="color: black">{{ $i->username }}</h4></td>
                                        <td class="text-black"><h4 style="color: black">{{ $i->sub()->count() }}</h4></td>
                                        <td class="text-black"><h4 style="color: black">{{ $i->stage()->count()  }}</h4></td>


                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- Column Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">رسم بيانى يوضح معدل الاشتراكات لكل تصنيف</h4>
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
                    <div class="card-body">
                        <canvas id="column-chart" height="700" ></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">رسم بيانى يوضح معدل الاشتراكات لكل مدينة</h4>
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
                    <div class="card-body">
                        <canvas id="city-chart" height="900" ></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ eCommerce statistic -->
    <div class="row">

        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans("admin.BestStages") }}  </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div id="new-orders" class="media-list position-relative">
                        <div class="table-responsive">
                            <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                <thead>
                                <tr>
                                    <th class="border-top-0">{{ trans('admin.arabic_name') }}</th>
                                    <th class="border-top-0">{{ trans('admin.code') }}</th>
                                    <th class="border-top-0">{{ trans('admin.debest') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($BestStages as $i)

                                    <tr>
                                        <td class="text-truncate">{{ $i->arabic_name }}</td>
                                        <td class="text-truncate">{{ $i->code  }}</td>


                                        <td class="text-truncate">        @if ($i->best == 1)
                                                <a href="{{ aurl('/stages/best/'.$i->id) }}"  class="btn btn-danger btn-min-width mr-1 mb-1"><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.debest') }} </a>
                                            @else
                                                <a href="{{ aurl('/stages/best/'.$i->id) }}"  class="btn btn-outline-grey-blue btn-min-width mr-1 mb-1"><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.best') }}</a>
                                            @endif</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--/ eCommerce statistic -->

        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">المنشأت الاعلى مشاهدة</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div id="new-orders" class="media-list position-relative">
                        <div class="table-responsive">
                            <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                <thead>
                                <tr>
                                    <th class="border-top-0">{{ trans('admin.arabic_name') }}</th>
                                    <th class="border-top-0">{{ trans('admin.code') }}</th>
                                    <th class="border-top-0">المشاهدات</th>

                                    <th class="border-top-0">{{ trans('admin.debest') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($ExpiredStages as $i)

                                    <tr>
                                        <td class="text-truncate">{{ $i->arabic_name }}</td>
                                        <td class="text-truncate">{{ $i->code  }}</td>
                                        <td class="text-truncate">{{ $i->views  }}</td>

                                        <td class="text-truncate">        @if ($i->best == 1)
                                                <a href="{{ aurl('/stages/best/'.$i->id) }}"  class="btn btn-danger btn-min-width mr-1 mb-1"><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.debest') }}</a>
                                            @else
                                                <a href="{{ aurl('/stages/best/'.$i->id) }}"  class="btn btn-outline-grey-blue btn-min-width mr-1 mb-1"><i
                                                            class="la la-check-circle-o"></i> {{ trans('admin.best') }}</a>
                                            @endif</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(window).on("load", function(){

            //Get the context of the Chart canvas element we want to select
            var ctx = $("#column-chart");

            // Chart Options
            var chartOptions = {
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each bar to be 2px wide and green
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration:500,
                legend: {
                    position: 'top',
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }]
                },
                title: {
                    display: true,
                    text: ' معدل اشتراكات المحلات للتصنيفات الرئيسية '
                }
            };

            // Chart Data
            var chartData = {
                labels: [@foreach ($categories as $name)"{{ $name->arabic_name }}",@endforeach],
                datasets: [{
                    label: "عدد المحلات",
                    data:[@foreach ($categories as $package){{ $package->category_count }},@endforeach],
                    backgroundColor: "#28D095",
                    hoverBackgroundColor: "#FFB12A",
                    borderColor: "transparent"
                }]
            };

            var config = {
                type: 'bar',

                // Chart Options
                options : chartOptions,

                data : chartData
            };

            // Create the chart
            var lineChart = new Chart(ctx, config);
        });
    </script>


    <script>
        $(window).on("load", function(){

            //Get the context of the Chart canvas element we want to select
            var ctx = $("#city-chart");

            // Chart Options
            var chartOptions = {
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each bar to be 2px wide and green
                elements: {
                    rectangle: {
                        borderWidth: 4,
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration:500,
                legend: {
                    position: 'top',
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }]
                },
                title: {
                    display: true,
                    text: ' معدل اشتراك المحلات لكل مدينة     '
                }
            };

            // Chart Data
            var chartData = {
                labels: [@foreach ($cities as $name)"{{ $name->name }}",@endforeach],
                datasets: [{
                    label: "عدد المحلات",
                    data:[@foreach ($cities as $package){{ $package->city_count }},@endforeach],
                    backgroundColor: [
                        ' #ff6600',  '#0277BD','#00BFA5',  '#01579B',  '#80D8FF',  '#66BB6A',  '#40C4FF',  '#00B0FF',  '#0091EA',  '#00BCD4','#0097A7', '#00838F',  '#006064',  '#84FFFF',  '#E0F7FA',  '#B2EBF2','#03A9F4',  '#039BE5',  '#0288D1',  '#0277BD',  '#01579B',  '#80D8FF',  '#40C4FF',
                        '#B2DFDB',  '#80CBC4',  '#4DB6AC',  '#26A69A',  '#009688',  '#00897B',  '#00796B',  '#00695C',  '#004D40',  '#A7FFEB',  '#64FFDA',  '#1DE9B6',
                        '#F44336', '#FFEBEE', '#FFCDD2', '#EF9A9A', '#E57373', '#EF5350', '#F44336', '#E53935', '#D32F2F', '#C62828', '#B71C1C', '#FF8A80', '#FF5252', '#FF1744', '#D50000', '#E91E63',
                        '#FCE4EC', '#F8BBD0', '#F48FB1', '#F06292', '#EC407A', '#E91E63', '#D81B60', '#C2185B', '#AD1457', '#880E4F', '#FF80AB', '#FF4081', '#F50057', '#C51162', '#9C27B0', '#F3E5F5', '#E1BEE7', '#CE93D8', '#BA68C8', '#AB47BC', '#9C27B0', '#8E24AA', '#7B1FA2',
                        '#6A1B9A', '#4A148C', '#EA80FC', '#E040FB', '#D500F9', '#AA00FF', '#673AB7', '#EDE7F6',
                        '#D1C4E9','#B39DDB','#9575CD','#7E57C2','#673AB7','#5E35B1','#512DA8','#4527A0','#311B92',  '#B388FF',  '#7C4DFF',  '#651FFF',  '#6200EA',  '#3F51B5',  '#E8EAF6',  '#C5CAE9',  '#9FA8DA',
                        '#7986CB',  '#5C6BC0',  '#3F51B5',  '#3949AB',  '#303F9F',  '#283593',  '#1A237E',  '#8C9EFF',  '#536DFE',  '#3D5AFE',  '#304FFE',  '#2196F3',  '#E3F2FD',  '#BBDEFB',  '#90CAF9',  '#64B5F6',
                        '#42A5F5', '#2196F3',  '#1E88E5',  '#1976D2',  '#1565C0',  '#0D47A1',  '#82B1FF',  '#448AFF',  '#2979FF',  '#2962FF',  '#03A9F4',  '#E1F5FE',  '#B3E5FC',  '#81D4FA',  '#4FC3F7',  '#29B6F6',
                        '#00B0FF',  '#0091EA',  '#00BCD4',  '#E0F7FA',  '#B2EBF2',  '#80DEEA',  '#4DD0E1',  '#26C6DA',  '#00BCD4',  '#00ACC1',
                        '#18FFFF',  '#00E5FF',  '#00B8D4',  '#009688',  '#E0F2F1',

                        '#4CAF50',  '#E8F5E9',   '#A5D6A7',  '#81C784',  '#4CAF50',  '#43A047',  '#388E3C',  '#2E7D32',  '#1B5E20',  '#B9F6CA',

                    ],
                    hoverBackgroundColor: "#FFB12A",
                    borderColor: "transparent"
                }]
            };

            var config = {
                type: 'pie',

                // Chart Options
                options : chartOptions,

                data : chartData
            };

            // Create the chart
            var pieChart = new Chart(ctx, config);
        });
    </script>
@endsection
