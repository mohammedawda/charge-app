<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <!-- Main Page -->
            <li class="nav-item"><a href="{{ aurl('/index') }}"><i class="la la-home"></i>
                <span class="menu-title" data-i18n="nav.dash.main">{{ trans('admin.dashboard') }}</span></a>
            </li>
                   @if (userCan('admin'))
                <!-- Admins -->
                <li class="nav-item"><a href="#"><i class="fas fa-user-secret"></i><span class="menu-title" data-i18n="nav.templates.main">{{ trans('admin.admins') }}</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ aurl('/admins') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.all admins') }}</a></li>
                        <li><a class="menu-item" href="{{ aurl('/admins/create') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.create new admin') }}</a></li>
                       <li><a class="menu-item" href="{{ aurl('/subscribers/assign') }}" data-i18n="nav.templates.horz.classic">تسليم اصحاب المحلات</a></li>

                    </ul>
                </li>
            @endif

            @if (userCan('messages'))
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">الرسائل</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                data-placement="right" data-original-title="Support"></i>
            </li>
                <!-- Messages From Land Page -->
                <li class=" nav-item"><a href="{{ aurl('/contacts') }}"><i class="icon-envelope-letter"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('admin.visitors_messages') }}</span><span class="badge badge badge-pill badge-danger float-right mr-2">{{CountMessageVisitors()}}</span></a>
                </li>

                <li class=" nav-item"><a href="{{ aurl('/#') }}"><i class="icon-envelope-letter"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        {{ trans('admin.representatives_messages') }}
                    </span>
                    <span class="badge badge badge-pill badge-danger float-right mr-2">{{CountMessageVisitors()}}</span>
                </a>
                </li>
                <!-- Messages From users -->
                <li class=" nav-item"><a href="{{ aurl('/messages') }}"><i class="icon-envelope-letter"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('admin.messages') }}</span><span class="badge badge badge-pill badge-danger float-right mr-2">{{ CountMessageAdmin() }}</span></a>
                </li>
                    <!-- Messages From Owner -->
                    <li class=" nav-item"><a href="{{ aurl('/owner_messages') }}"><i class="icon-envelope-letter"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">{{ trans('admin.owner_messages') }}</span><span class="badge badge badge-pill badge-danger float-right mr-2">{{ CountMessageOwner() }}</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ aurl('/#') }}"><i class="icon-envelope-letter"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">{{ trans('admin.families_messages') }}</span><span class="badge badge badge-pill badge-danger float-right mr-2">{{ CountMessageOwner() }}</span></a>
                </li>
            @endif

            <!-- Other Links In Menu -->
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">{{ trans('admin.Menu') }}</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                data-placement="right" data-original-title="Support"></i>
            </li>



            @if (userCan('categories'))
                <!-- Categories -->
                <li class="nav-item"><a href="#"><i class="la la-bars"></i><span class="menu-title" data-i18n="nav.templates.main">{{ trans('admin.Categories') }}</span></a>
                    <ul class="menu-content">
                        <li>
                            <a class="menu-item" href="{{ aurl('/categories/main') }}" data-i18n="nav.templates.horz.classic">
                                {{ trans('admin.main categories') }}
                            </a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{ aurl('/categories/main/create') }}" data-i18n="nav.templates.horz.classic">
                                {{ trans('admin.add main category') }}
                            </a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{ aurl('/categories') }}" data-i18n="nav.templates.horz.classic">
                                {{ trans('admin.all category') }}
                            </a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{ aurl('/categories/create') }}" data-i18n="nav.templates.horz.classic">
                                {{ trans('admin.add category level 2') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        @if (userCan('cities'))
            <!-- Categories -->
                <li class="nav-item"><a href="#"><i class="la la-sitemap"></i><span class="menu-title" data-i18n="nav.templates.main">الدول و المدن</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ aurl('/cities') }}" data-i18n="nav.templates.horz.classic">الدول</a></li>
                        <li><a class="menu-item" href="{{ aurl('/cities/create') }}" data-i18n="nav.templates.horz.classic">اضافة دولة</a></li>
                    </ul>
                </li>
        @endif
        @if (userCan('subscribers'))
            <!-- Subscribers -->
                <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main"><i class="la la-registered"></i><span class="menu-title" data-i18n="nav.templates.main">{{ trans('admin.reps') }}</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ aurl('/reps/create') }}" data-i18n="nav.templates.horz.top_icon">{{ trans('admin.add rep') }}</a></li>
                        <li><a class="menu-item" href="{{ aurl('/reps') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.all reps') }}</a></li>
                        <li><a class="menu-item" href="{{ aurl('/users') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.all users') }}</a></li>


                        </li>
                    </ul>
                </li>
                        @endif
                <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.templates.main">
                                        {{ trans   ('admin.all_subscribers') }}</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.templates.main">
                                {{ trans   ('admin.subscribers') }}</span></a>
                            <ul class="menu-content">
                                        @if (userCan('my_subscribers'))

                                <li><a class="menu-item" href="{{ aurl('/subscribers/my_subscribers') }}" data-i18n="nav.templates.horz.classic">اصحاب المحلات الخاصين بى</a></li>
                                @endif

                                <li><a class="menu-item" href="{{ aurl('/subscribers/create') }}" data-i18n="nav.templates.horz.top_icon">{{ trans('admin.add subscriber') }}</a></li>
                                @if (userCan('admin'))

                                <li><a class="menu-item" href="{{ aurl('/subscribers') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.subscribers') }}</a></li>
                                <li><a class="menu-item" href="{{ route('create-subscribers-category')}}" data-i18n="nav.templates.horz.top_icon">{{ trans('admin.add category') }}</a></li>
                                <li><a class="menu-item" href="{{ route('show-subscribers-category')}}" data-i18n="nav.templates.horz.top_icon">{{ trans('admin.show subscribers category') }}</a></li>
                                @endif
                                </li>
                            </ul>
                        </li>
                        <!----section of subscribers---->

                        <li class="nav-item"><a href="#"><i class="la la-hotel"></i><span class="menu-title" data-i18n="nav.templates.main">{{ trans('admin.Stages') }}</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="{{ aurl('/stages/create') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.add stage') }}</a></li>
                                        @if (userCan('admin'))
                                                        <li><a class="menu-item" href="{{ aurl('/stages/details') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.all stage') }}</a></li>

                                {{-- <li><a class="menu-item" href="{{ aurl('/stages/details?status=1') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.stage_agree') }}</a></li>
                                <li><a class="menu-item" href="{{ aurl('/stages/details?status=0') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.stage_waiting') }}<span class="badge badge badge-pill badge-danger float-right mr-2" style="margin-left:0; margin-right:0;">{{CountStage()}}</span></a></li>
                                <li><a class="menu-item" href="{{ aurl('/stages/details?expired=1') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.ExpiredStages') }}<span class="badge badge badge-pill badge-danger float-right mr-2" style="margin-left:0; margin-right:0;">{{CountExpiredStage()}}</span></a></li>
                                <li><a class="menu-item" href="{{ aurl('/stages/details?best=1') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.BestStages') }}<span class="badge badge badge-pill badge-danger float-right mr-2" style="margin-left:0; margin-right:0;">{{CountBestStage()}}</span></a></li> --}}
                                                        @endif

                            </ul>
                        </li>
                        <li class="nav-item"><a href="#"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="nav.templates.main">{{ trans('admin.products') }}
                            </span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="{{ aurl('/products') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.all product') }}</a></li>
                                <li><a class="menu-item" href="{{ aurl('/products/multi') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.add product') }}</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>


            <!-- Subscribers -->






            <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.templates.main">
                {{ trans   ('admin.families') }}</span></a>
<ul class="menu-content">
<li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.templates.main">
        {{ trans   ('admin.families') }}</span></a>
    <ul class="menu-content">
            @if (userCan('Families'))

            <li><a class="menu-item" href="{{ Route('families.search') }}" data-i18n="nav.templates.horz.classic">الاسر المنتجة </a></li>
            @endif
            <li><a class="menu-item" href="{{ route('create-family')}}" data-i18n="nav.templates.horz.top_icon">{{ trans('admin.add family') }}</a></li>
            <li><a class="menu-item" href="{{ route('create-family-category')}}" data-i18n="nav.templates.horz.top_icon">{{ trans('admin.add category') }}</a></li>
            <li><a class="menu-item" href="{{ route('show-family-category')}}" data-i18n="nav.templates.horz.top_icon">{{ trans('admin.show families category') }}</a></li>
    </ul>
</li>
<!----section of subscribers---->

<li class="nav-item"><a href="#"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="nav.templates.main">{{ trans('admin.products') }}
    </span></a>
    <ul class="menu-content">
        <li><a class="menu-item" href="{{ Route('show-family-product') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.show families product') }}</a></li>
        <li><a class="menu-item" href="{{ Route('create-family-product')}}" data-i18n="nav.templates.horz.classic">{{ trans('admin.add product') }}</a></li>

    </ul>
</li>
</ul>
</li>
    <li class=" nav-item">
        <a href="{{ aurl('/products-for-rent') }}">
            <i class="icon-eur"></i>
            <span class="menu-title" data-i18n="nav.dash.main">{{ trans('website.rental_products') }}</span>
            <ul class="menu-content">

                <li><a class="menu-item" href="{{ aurl('/products-for-rent') }}" data-i18n="nav.templates.horz.classic">{{ trans('website.rental_products') }}   </a></li>
                <li><a class="menu-item" href="{{ aurl('/create-products-for-rent')}}" data-i18n="nav.templates.horz.top_icon">اضافة منتج للأيجار</a></li>
        </ul>
        </a>
    </li>
    <li class=" nav-item">
        <a href="{{ aurl('/products-for-sell') }}">
            <i class="icon-eur"></i>
            <span class="menu-title" data-i18n="nav.dash.main">{{ trans('website.sell_products') }}</span>
            <ul class="menu-content">

                <li><a class="menu-item" href="{{ aurl('/products-for-sell') }}" data-i18n="nav.templates.horz.classic">{{ trans('website.sell_products') }}   </a></li>
                <li><a class="menu-item" href="{{ aurl('/create-products-for-sell')}}" data-i18n="nav.templates.horz.top_icon">اضافة منتج للبيع</a></li>
        </ul>
        </a>
    </li>

                <!--------families-------->
        @if (userCan('settings'))
            <!-- Settings -->
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">{{ trans('admin.settings') }}</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                data-placement="right" data-original-title="Support"></i>
            </li>

            <li class=" nav-item">
                <a href="{{ aurl('/settings') }}"><i class="icon-settings"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">{{ trans('admin.settings') }}</span>
                </a>
            </li>
                  <li class="nav-item"><a href="#"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.templates.main">{{ trans('admin.Photos') }}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ aurl('/photos') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.all photo') }}</a></li>
                    <li><a class="menu-item" href="{{ aurl('/photos/create') }}" data-i18n="nav.templates.horz.classic">{{ trans('admin.add photo') }}</a></li>
                </ul>
            </li>
        @endif

    </ul>

</div>
</div>
