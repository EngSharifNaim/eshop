
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
{{--    <link href="'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">--}}
    <link href="{{url('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{url('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{url('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{url('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{url('assets/js/app.js')}}"></script>
    <script src="{{url('global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{url('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

    <script src="{{url('global_assets/js/demo_pages/datatables_basic.js')}}"></script>

    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{url('global_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-list3"></i>
                    <span class="d-md-none ml-2">Last Orders</span>
{{--                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">{{count($lastOrders)}}</span>--}}
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Last orders</span>
                        <a href="#" class="text-default"><i class="icon-sync"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
{{--                            @foreach($lastOrders as $order)--}}
{{--                            <li class="media">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>--}}
{{--                                </div>--}}

{{--                                <div class="media-body">--}}
{{--                                    {{$order->product->subcategory->name}} order--}}
{{--                                    <div class="text-muted font-size-sm">with price {{$order->product->price}} $ </div>--}}
{{--                                    <div class="text-muted font-size-sm">{{$order->created_at}}</div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                                @endforeach--}}

                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All orders</a>
                        <div>
{{--                            <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>--}}
{{--                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>--}}
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <button type="button" class="btn  bg-success ml-md-3 mr-md-auto">amount: {{Auth::User()->amount}} <i class="icon icon-price-tag"></i></button>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
{{--                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">--}}
{{--                    <i class="icon-people"></i>--}}
{{--                    <span class="d-md-none ml-2">Users</span>--}}
{{--                </a>--}}

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Users online</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{url('global_assets/images/placeholders/user.png')}}" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{url('global_assets/images/placeholders/user.png')}}" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                    <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{url('global_assets/images/placeholders/user.png')}}" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                    <span class="d-block text-muted font-size-sm">Project manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{url('global_assets/images/placeholders/user.png')}}" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                    <span class="d-block text-muted font-size-sm">Business developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{url('global_assets/images/placeholders/user.png')}}" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                    <span class="d-block text-muted font-size-sm">UX expert</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All users</a>
                        <a href="#" class="text-grey"><i class="icon-gear"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">Last reports</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Last reports</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
{{--                            @foreach($lastReports as $report)--}}
{{--                            <li class="media">--}}
{{--                                <div class="mr-3 position-relative">--}}
{{--                                    <img src="{{url('global_assets/images/placeholders/user.png')}}" width="36" height="36" class="rounded-circle" alt="">--}}
{{--                                </div>--}}

{{--                                <div class="media-body">--}}
{{--                                    <div class="media-title">--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="font-weight-semibold">You recived report for Order id: {{$report->order_id}}</span>--}}
{{--                                            <span class="text-muted float-right font-size-sm">04:58</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <span class="text-muted">{{$report->details}}</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                                @endforeach--}}

                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{url('global_assets/images/placeholders/user.png')}}" class="rounded-circle mr-2" height="34" alt="">
                    @if(Auth::check())
                    <span>{{Auth::User()->name}}</span>
                        @endif
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item" onclick="document.getElementById('logout_form').submit()"><i class="icon-switch2"></i> Logout</a>
                    <form id="logout_form" method="post" action="{{url('logout')}}">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="#"><img src="{{url('global_assets/images/placeholders/user.png')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>

                        <div class="media-body">
                            @if(Auth::check())
                            <div class="media-title font-weight-semibold">
                                {{Auth::User()->name}}</div>
                            <div class="font-size-xs opacity-50">
                                <i class="icon-pin font-size-sm"></i> {{Auth::User()->type}}
                            </div>
                                @endif
                        </div>

                        <div class="ml-3 align-self-center">
                            <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item">
                        <a href="{{url('/home')}}" class="nav-link @if(\Request::route()->getName() == 'home')active @endif">
                            <i class="icon-home4"></i>
                            <span>
									Dashboard
								</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('orders')}}" class="nav-link  @if(\Request::route()->getName() == 'orders')active @endif"><i class="icon-list-ordered @if(\Request::route()->getName() == 'orders') text-light @else text-teal-300 @endif"></i> <span>Sales</span></a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('withdraw')}}" class="nav-link @if(\Request::route()->getName() == 'withdraw')active @endif"><i class="icon-price-tag @if(\Request::route()->getName() == 'withdraw') text-light @else text-teal-300 @endif"></i> <span>Withdraw</span></a>

                    </li>
                    <li class="nav-item ">
                        <a href="{{url('seller/reports')}}" class="nav-link @if(\Request::route()->getName() == 'seller.reports')active @endif"><i class="icon-list @if(\Request::route()->getName() == 'seller.reports') text-light @else text-teal-300 @endif"></i> <span>Reports</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="icon-color-sampler"></i> <span>Categories</span></a>
                    </li>
                    @if(isset($categories))
                    @foreach($categories as $category)
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-list3 text-teal-300"></i> <span>{{$category->name}}</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                            @foreach($category->SubCategory as $sub)
                                <li class="nav-item"><a href="{{url('SubCategory/' . $sub->id)}}" class="nav-link">{{$sub->name}}</a></li>
                                @endforeach
                        </ul>
                    </li>
                    @endforeach
                        @endif


                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
                @if(isset($subcategory))
                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default" data-toggle="modal" data-target="#modal_theme_info_{{str_replace(' ','',$subcategory->name)}}"><i class="icon-add text-primary"></i><span>Add new {{$subcategory->name}}</span></a>
                        @if($subcategory->has_collection !=1)

                        <a href="#" class="btn btn-link btn-float text-default" data-toggle="modal" data-target="#modal_theme_info_{{str_replace(' ','',$subcategory->name)}}_collection"><i class="icon-database-add text-primary"></i> <span>Add new {{$subcategory->name}} Collection</span></a>
                        @endif
                        <a href="#" class="btn btn-link btn-float text-default" data-toggle="modal" data-target="#modal_theme_info_rule"><i class="icon-help text-primary"></i> <span>Rules</span></a>
                    </div>
                </div>
                    @endif
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-database-time2 mr-2"></i> Year</a>
                        <span class="breadcrumb-item active">2020</span>
                        <span class="breadcrumb-item active">2019</span>
                        <span class="breadcrumb-item active">2018</span>
                        <span class="breadcrumb-item active">2017</span>
                        <span class="breadcrumb-item active">2016</span>
                        <span class="breadcrumb-item active">All times</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

          @yield('content')

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="#" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
