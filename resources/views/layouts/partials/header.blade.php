@inject('request', 'Illuminate\Http\Request')
<!-- Main Header -->

<head>
    <link rel="stylesheet" href="{{ asset('css/docker.css') }}">

</head>
<header class="main-header no-print">
    <a href="{{ route('home') }}" class="logo">
        <span class="logo-lg">{{ Session::get('business.name') }} <i class="fa fa-circle text-success"
                id="online_indicator"></i></span>
    </a>

    <!-- Header Navbar -->
    <nav class="" role="">


        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">

            <div class="no-print dockmobile"
                style="border-bottom: 2px double;margin-bottom: 35px;border-right: 2px double;border-left: 2px double;"
                id="dock-container">
                <div style="" id="dock">

                    <div style="margin-left:unset;margin-right:0" class="row">





                    </div>


                    <div class="col-sm-6">

                        <ul style="    padding: 7px 0; display: flex  ">
                            <li style="margin-right: 2px;margin-left: 2px;">
                                <select style="border-radius: 7px;" name="search_type" id="search_type2"
                                    class="form-control select-bs">
                                    <option value="all">جميع الاقسام</option>
                                    <option value="users">قسم المستخدمين</option>
                                    <option value="customer">قسم العملاء</option>
                                    <option value="suppliers">قسم الموردين</option>
                                    <option value="products">قسم المنتجات</option>
                                    <option value="sells">قسم المبيعات</option>
                                    <option value="purchase">قسم المشتريات</option>
                                </select>
                            </li>
                            <li title="@lang('lang_v1.dock_products')" style="margin-right: 2px;margin-left: 2px;">
                                <span class="dock-containerspan">@lang('lang_v1.dock_menu')</span>
                                <a onclick="topFunction()" style="float: unset !important;display: unset !important;"
                                    href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><img
                                        src={{ asset('/images/icons/dockbar/menu.png') }} /></a>
                            </li>
                            {{-- @can('product.view')
                                <li title="@lang('lang_v1.dock_products')" style="margin-right: 2px;margin-left: 2px;">
                                    <span class="dock-containerspan">@lang('lang_v1.dock_products')</span>
                                    <a title="@lang('lang_v1.dock_products')" href="{{ action('ProductController@index') }}"><img
                                            src={{ asset('/images/icons/dockbar/products.png') }} /></a>
                                </li>
                            @endcan --}}

                            {{-- @can('all_expense.access')
                                <li title="@lang('lang_v1.list_expenses')" style="margin-right: 2px;margin-left: 2px;">
                                    <span class="dock-containerspan">@lang('lang_v1.list_expenses')</span>
                                    <a title="@lang('lang_v1.list_expenses')" href="{{ action('ExpenseController@index') }}"><img
                                            src={{ asset('/images/icons/expense64.png') }} /></a>
                                </li style="margin-right: 2px;margin-left: 2px;">
                            @endcan --}}




                            @php
                                $all_notifications = auth()->user()->notifications;
                                $unread_notifications = $all_notifications->where('read_at', null);
                                $total_unread = count($unread_notifications);
                            @endphp

                            <li style="margin-right: 2px;margin-left: 2px;" class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle load_notifications" data-toggle="dropdown"
                                    id="show_unread_notifications" data-loaded="false">
                                    <img src={{ asset('/images/icons/dockbar/notification.png') }} />

                                    <span
                                        style="display: unset;position: unset;bottom: unset;left: unset;width: unset;background-color: unset;padding: unset;"
                                        class=" label-warning notifications_count">
                                        @if (!empty($total_unread))
                                            {{ $total_unread }}
                                        @endif
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- <li class="header">You have 10 unread notifications</li> -->
                                    <li>
                                        <!-- inner menu: contains the actual data -->

                                        <ul style="width: 250px;padding: 10px;" class="menu" id="notifications_list">
                                            <span class="notif-info"
                                                style="display: unset;position: unset;bottom: unset;left: unset;width: unset;background-color: unset;padding: unset;">

                                            </span>
                                        </ul>
                                    </li>

                                    @if (count($all_notifications) > 10)
                                        <li class="footer load_more_li">
                                            <a href="#" class="load_more_notifications">@lang('lang_v1.load_more')</a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                            @can('profit_loss_report.view')
                                <li type="button" id="view_todays_profit" title="{{ __('home.todays_profit') }}"
                                    data-toggle="tooltip" data-placement="bottom">
                                    <strong><img src={{ asset('/images/icons/dockbar/cashreg.png') }} /></strong>
                                </li>
                            @endcan


                            @if (in_array('pos_sale', $enabled_modules))
                                @can('sell.create')
                                    <li title="@lang('lang_v1.dock_products')" style="margin-right: 2px;margin-left: 2px;">
                                        <a href="{{ action('SellPosController@create') }}" title="@lang('sale.pos_sale')"
                                            data-toggle="tooltip" data-placement="bottom">
                                            <strong> <img src={{ asset('/images/icons/dockbar/casher.png') }} /></strong>
                                        </a>
                                    </li>
                                @endcan
                            @endif





                        </ul>
                        <ul style="padding: 0px;display: flex;">

                            <li style="margin-right: 2px;margin-left: 2px;">
                                {{-- @livewire('global-search-bar') --}}
                                <input type="text" class="form-control "style="border-radius: 7px;"
                                    id="global_search2" placeholder="البحث السريع ...">
                                {{-- <br> --}}
                                <div class="bg-white hide" id="search_list2"
                                    style="position: absolute;width: 120px; padding:10px">

                                </div>
                            </li>
                            <li style="margin-right: 2px;margin-left: 2px;">
                                <input type="text" style="border-radius: 7px;" class="form-control go_fast_search"
                                    id="" placeholder="الذهاب الي ...">
                                <div class="bg-white hide go_fast_list" id="go_fast_list"
                                    style="position: absolute;width: 120px; padding:10px">

                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>



        </div>
    </nav>
    <div class="modal fade contact_modal_home" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
    <div class="modal fade" id="view_product_modal_home" tabindex="-1" role="dialog"
        aria-labelledby="gridSystemModalLabel">
    </div>
    <script>
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

</header>
