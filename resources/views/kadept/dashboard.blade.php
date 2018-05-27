@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Dashboard
					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif

						You are logged in!
					</div>
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
				<div class="form-group m-form__group row">
					<label for="example-number-input" class="col-2 col-form-label">
						Periode
					</label>
					<select class="custom-select form-control">
						<option selected>
							2018
						</option>
						<option value="1">
							2017
						</option>
						<option value="2">
							2016
						</option>
						<option value="3">
							2015
						</option>
					</select>
				</div>
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
											Tugas
										</h3>
										<span class="m-widget14__desc">
											Diagram pengumpulan tugas
										</span>
									</div>
									<div class="row  align-items-center">
										<div class="col">
											<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
												<div class="m-widget14__stat">
													Tugas
												</div>
											</div>
										</div>
										<div class="col">
											<div class="m-widget14__legends">
												<div class="m-widget14__legend">
													<span class="m-widget14__legend-bullet m--bg-accent"></span>
													<span class="m-widget14__legend-text">
														37% Belum Mengumpulkan
													</span>
												</div>
												<div class="m-widget14__legend">
													<span class="m-widget14__legend-bullet m--bg-warning"></span>
													<span class="m-widget14__legend-text">
														63% Sudah dinilai
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
									<div class="m-widget14__header">
										<h3 class="m-widget14__title">
											Prioritas Calon Anggota
										</h3>
										<span class="m-widget14__desc">
											Profit Share between customers
										</span>
									</div>
									<div class="row  align-items-center">
										<div class="col">
											<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
												<div class="m-widget14__stat">
													45
												</div>
											</div>
										</div>
										<div class="col">
											<div class="m-widget14__legends">
												<div class="m-widget14__legend">
													<span class="m-widget14__legend-bullet m--bg-accent"></span>
													<span class="m-widget14__legend-text">
														37% Prioritas 1
													</span>
												</div>
												<div class="m-widget14__legend">
													<span class="m-widget14__legend-bullet m--bg-warning"></span>
													<span class="m-widget14__legend-text">
														47% Prioritas 2
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
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
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
		</div>
		<!--End::Section-->			
	</div>
</div>

@endsection

@section('js')

<script src="{{ url('assets/demo/default/custom/components/charts/morris-charts.js') }}" type="text/javascript">

@endsection