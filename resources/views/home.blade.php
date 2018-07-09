@extends('layouts.kadept')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Dashboard
                    </h3>
                </div>
                <div>
                    <!-- <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                        <span class="m-subheader__daterange-label">
                            <span class="m-subheader__daterange-title"></span>
                            <span class="m-subheader__daterange-date m--font-brand"></span>
                        </span>
                        <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                            <i class="la la-angle-down"></i>
                        </a>
                    </span> -->
                    {{--<div class="form-group m-form__group row">--}}
                        {{--<label for="example-number-input" class="col-2 col-form-label">--}}
                            {{--Periode--}}
                        {{--</label>--}}
                        {{--<select class="custom-select form-control">--}}
                            {{--<option selected>--}}
                                {{--2018--}}
                            {{--</option>--}}
                            {{--<option value="1">--}}
                                {{--2017--}}
                            {{--</option>--}}
                            {{--<option value="2">--}}
                                {{--2016--}}
                            {{--</option>--}}
                            {{--<option value="3">--}}
                                {{--2015--}}
                            {{--</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <!--Begin::Section-->
            <div class="row">
                <div class="col-md-12">
                    <div class="m-portlet">
                        <div class="m-portlet__body  m-portlet__body--no-padding">
                            <div class="row m-row--no-padding m-row--col-separator-xl">
                                <div class="col-xl-4">
                                    <!--begin:: Widgets/Stats2-1 -->
                                    <div class="m-widget14">
                                        <div class="m-widget14__header">
                                            <h3 class="m-widget14__title">
                                                Nilai
                                            </h3>
                                            <span class="m-widget14__desc">
											Diagram presentase nilai
										</span>
                                        </div>
                                        <div class="row  align-items-center">
                                            <div class="col">
                                                <div id="" class="m-widget14__chart" style="height: 160px">
                                                    <div class="m-widget14__stat">
                                                        Nilai
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="m-widget14__legends">
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                        <span class="m-widget14__legend-text">37% range 0-0.3</span>
                                                    </div>
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                        <span class="m-widget14__legend-text">37% range 0.3-0.6</span>
                                                    </div>
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-success"></span>
                                                        <span class="m-widget14__legend-text">37% range 0.6-1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Stats2-1 -->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin:: Widgets/Daily Sales-->
                                    <div class="m-widget1">
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Total Calon Anggota
                                                    </h3>
                                                    <!-- <span class="m-widget1__desc">
                                                        Awerage Weekly Profit
                                                    </span> -->
                                                </div>
                                                <div class="col m--align-right">
												<span class="m-widget1__number m--font-brand">
													57
												</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Laki-laki
                                                    </h3>
                                                    <!-- <span class="m-widget1__desc">
                                                        Weekly Customer Orders
                                                    </span> -->
                                                </div>
                                                <div class="col m--align-right">
												<span class="m-widget1__number m--font-danger">
													23
												</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Perempuan
                                                    </h3>
                                                    <!-- <span class="m-widget1__desc">
                                                        System bugs and issues
                                                    </span> -->
                                                </div>
                                                <div class="col m--align-right">
												<span class="m-widget1__number m--font-success">
													34
												</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <!--begin:: Widgets/Profit Share-->
                                    <div class="m-widget14">
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h5 class="m-widget1__title">
                                                        Total Calon Anggota
                                                    </h5>

                                                </span>
                                                </div>
                                                <div class="col m--align-right">
												<span class="m-widget1__number m--font-brand">
													57
												</span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row  align-items-center">
                                            <div class="col">
                                                <div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
                                                    <div class="m-widget14__stat">
                                                        Infokes
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="m-widget14__legends">
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                        <span class="m-widget14__legend-text">
														37% Laki-laki
													</span>
                                                    </div>
                                                    <div class="m-widget14__legend">
                                                        <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                        <span class="m-widget14__legend-text">
														Perempuan
													</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Profit Share-->
                                </div>
                            </div>
                        </div>
                    </div>
                            <!--Begin::Section-->
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin:: Widgets/Sales States-->
                                    <div class="m-portlet m-portlet--full-height ">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <h3 class="m-portlet__head-text">
                                                        Nilai Teratas
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                                        <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                            <i class="fa fa-genderless m--font-brand"></i>
                                                        </a>
                                                        <div class="m-dropdown__wrapper">
                                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 17px;"></span>
                                                            {{--<div class="m-dropdown__inner">--}}
                                                                {{--<div class="m-dropdown__body">--}}
                                                                    {{--<div class="m-dropdown__content">--}}
                                                                        {{--<ul class="m-nav">--}}
                                                                            {{--<li class="m-nav__item">--}}
                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                    {{--<i class="m-nav__link-icon flaticon-share"></i>--}}
                                                                                    {{--<span class="m-nav__link-text">--}}
																					{{--Activity--}}
																				{{--</span>--}}
                                                                                {{--</a>--}}
                                                                            {{--</li>--}}
                                                                            {{--<li class="m-nav__item">--}}
                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                    {{--<i class="m-nav__link-icon flaticon-chat-1"></i>--}}
                                                                                    {{--<span class="m-nav__link-text">--}}
																					{{--Messages--}}
																				{{--</span>--}}
                                                                                {{--</a>--}}
                                                                            {{--</li>--}}
                                                                            {{--<li class="m-nav__item">--}}
                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                    {{--<i class="m-nav__link-icon flaticon-info"></i>--}}
                                                                                    {{--<span class="m-nav__link-text">--}}
																					{{--FAQ--}}
																				{{--</span>--}}
                                                                                {{--</a>--}}
                                                                            {{--</li>--}}
                                                                            {{--<li class="m-nav__item">--}}
                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                    {{--<i class="m-nav__link-icon flaticon-lifebuoy"></i>--}}
                                                                                    {{--<span class="m-nav__link-text">--}}
																					{{--Support--}}
																				{{--</span>--}}
                                                                                {{--</a>--}}
                                                                            {{--</li>--}}
                                                                        {{--</ul>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body">
                                            <div class="m-widget6">
                                                <div class="m-widget6__head">
                                                    <div class="m-widget6__item">
													<span class="m-widget6__caption">
														Nama
													</span>
                                                        <span class="m-widget6__caption">

													</span>
                                                        <span class="m-widget6__caption m--align-right">
														Nilai
													</span>
                                                    </div>
                                                </div>
                                                <div class="m-widget6__body">
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Denis
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Tono
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$11,002
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Santoso
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$10,900
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														RAni
													</span>

													</span>
                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Amir
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$18,540
													</span>
                                                    </div>


                                                </div>
                                                <div class="m-widget6__foot">
                                                    <div class="m-widget6__action m--align-right">
                                                        <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                                            Export
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Sales States-->
                                </div>

                                <div class="col-xl-6">
                                    <!--begin:: Widgets/Sales States-->
                                    <div class="m-portlet m-portlet--full-height ">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <h3 class="m-portlet__head-text">
                                                        Favorit
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                                        <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                            <i class="fa fa-genderless m--font-brand"></i>
                                                        </a>
                                                        <div class="m-dropdown__wrapper">
                                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 17px;"></span>
                                                            {{--<div class="m-dropdown__inner">--}}
                                                            {{--<div class="m-dropdown__body">--}}
                                                            {{--<div class="m-dropdown__content">--}}
                                                            {{--<ul class="m-nav">--}}
                                                            {{--<li class="m-nav__item">--}}
                                                            {{--<a href="" class="m-nav__link">--}}
                                                            {{--<i class="m-nav__link-icon flaticon-share"></i>--}}
                                                            {{--<span class="m-nav__link-text">--}}
                                                            {{--Activity--}}
                                                            {{--</span>--}}
                                                            {{--</a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="m-nav__item">--}}
                                                            {{--<a href="" class="m-nav__link">--}}
                                                            {{--<i class="m-nav__link-icon flaticon-chat-1"></i>--}}
                                                            {{--<span class="m-nav__link-text">--}}
                                                            {{--Messages--}}
                                                            {{--</span>--}}
                                                            {{--</a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="m-nav__item">--}}
                                                            {{--<a href="" class="m-nav__link">--}}
                                                            {{--<i class="m-nav__link-icon flaticon-info"></i>--}}
                                                            {{--<span class="m-nav__link-text">--}}
                                                            {{--FAQ--}}
                                                            {{--</span>--}}
                                                            {{--</a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="m-nav__item">--}}
                                                            {{--<a href="" class="m-nav__link">--}}
                                                            {{--<i class="m-nav__link-icon flaticon-lifebuoy"></i>--}}
                                                            {{--<span class="m-nav__link-text">--}}
                                                            {{--Support--}}
                                                            {{--</span>--}}
                                                            {{--</a>--}}
                                                            {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body">
                                            <div class="m-widget6">
                                                <div class="m-widget6__head">
                                                    <div class="m-widget6__item">
													<span class="m-widget6__caption">
														Nama
													</span>
                                                        <span class="m-widget6__caption">

													</span>
                                                        <span class="m-widget6__caption m--align-right">
														Keterangan
													</span>
                                                    </div>
                                                </div>
                                                <div class="m-widget6__body">
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Denis
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Tono
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$11,002
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Santoso
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$10,900
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														RAni
													</span>

                                                        </span>
                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                                    </div>
                                                    <div class="m-widget6__item">
													<span class="m-widget6__text">
														Amir
													</span>

                                                        <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$18,540
													</span>
                                                    </div>


                                                </div>
                                                <div class="m-widget6__foot">
                                                    <div class="m-widget6__action m--align-right">
                                                        <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                                            Export
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Sales States-->
                                </div>

                            </div>
                            <!--End::Section-->
                            <!--Begin::Section-->
                        </div>
                    <div class="col-md-6">
                        <!--begin::Portlet-->
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
								<span class="m-portlet__head-icon m--hide">
									<i class="la la-gear"></i>
								</span>
                                        <h3 class="m-portlet__head-text">
                                            Line Chart
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="m_morris_1" style="height:500px;"></div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                    <div class="col-md-6">
                        <canvas id="densityChart" width="600" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!--End::Section-->


@endsection

@section('js')

    <script src="{{ url('assets/demo/default/custom/components/charts/morris-charts.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <!--end::Page Vendors -->
    <!--begin::Page Snippets -->
    <script src="{{ url('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

        var densityCanvas = document.getElementById("densityChart");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var densityData = {
            label: 'Laki-laki',
            data: [40, 30, 25, 33, 40, 45, 25, 44],
            backgroundColor: 'rgba(0, 99, 132, 0.6)',
            borderWidth: 1,
            yAxisID: "y-axis-density"
        };

        var gravityData = {
            label: 'Perempuan',
            data: [40, 30, 25, 33, 40, 45, 25, 44],
            backgroundColor: 'rgba(99, 132, 0, 0.6)',
            borderWidth: 1,
            yAxisID: "y-axis-gravity"
        };

        var planetData = {
            labels: ["BSO GMMQ", "BSO Dosha", "Kemuslimahan", "Shar'E", "Jaringan", "Media Center", "Sosmas", "DPS"],
            datasets: [densityData, gravityData]
        };

        var chartOptions = {
            scales: {
                xAxes: [{
                    barPercentage: 1,
                    categoryPercentage: 0.6
                }],
                yAxes: [{
                    id: "y-axis-density"
                }, {
                    id: "y-axis-gravity"
                }]
            }
        };

        var barChart = new Chart(densityCanvas, {
            type: 'bar',
            data: planetData,
            options: chartOptions
        });

//        http://www.proweb.co.id/articles/web_application/grafikbar_chartjs.html
    </script>

@endsection