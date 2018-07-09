@extends('layouts.kadept')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Beranda</h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

            <!-- END THEME PANEL -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Beranda</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="1349">0</span>
                        </div>
                        <div class="desc"> Total Peserta </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-male"><i class="fa fa-female"></i></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="549">0</span>
                        </div>
                        <div class="desc"> Peserta dalam Proses Ta'aruf </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-male"><i class="fa fa-female"></i></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="89">0</span>
                        </div>
                        <div class="desc"> Berhasil menikah </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 yellow-lemon" href="#">
                    <div class="visual">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="1349">0</span>
                        </div>
                        <div class="desc"> Total Artikel </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green-jungle" href="#">
                    <div class="visual">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="549">0</span>
                        </div>
                        <div class="desc"> Total Broadcast </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue-sharp" href="#">
                    <div class="visual">
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="89">0</span>
                        </div>
                        <div class="desc"> Total Quote </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 yellow-casablanca" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="89">0</span>
                        </div>
                        <div class="desc"> Total Kritik dan Saran </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
</div>

@endsection