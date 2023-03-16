@extends('layouts.backends.app')

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <span>{{ trans('template.dashboard') }}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <br/>
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS 1-->
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue-steel" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="1349">0</span>
                    </div>
                    <div class="desc"> Employee </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue-steel" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="12,5">0</span>M$ </div>
                    <div class="desc"> Total Profit </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue-steel" href="#">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="549">0</span>
                    </div>
                    <div class="desc"> Officer </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue-steel" href="#">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number"> +
                        <span data-counter="counterup" data-value="89"></span>% </div>
                    <div class="desc"> Brand Popularity </div>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue-steel" href="{{url('products/sales')}}">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </div>
                    <div class="desc"> {{ trans('template.sale') }} </div>
                </div>
            </a>
        </div>
      
    </div>

    <div class="clearfix"></div>
@endsection
