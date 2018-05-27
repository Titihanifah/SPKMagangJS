@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Presensi
				</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								Presensi
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<div class="m-section">
			<div class="m-section__content">
				<!--begin::Preview-->
				<div class="m-demo">
					<div class="m-demo__preview" style="background: #c8d6e5;">
						<h3 class="m-section__heading">
							Keterangan Daftar Kegiatan
							<hr>
						</h3>
						@foreach($kegiatan as $key)

						<div class="m-list-badge">
							<div class="m-list-badge__items">
								<div href="#" class="m-list-badge__item">
									{{ $key->id }}
								</div>
							</div>
							<div class="m-list-badge__label m--font-primary">
								<div class="col-md-12">
									{{ $key->nama_kegiatan }}
								</div>
							</div>
							{{--<div class="col-md-12">--}}
								{{--<div class="m-list-badge__label m--font-primary">--}}
									{{--{{ $key->waktu }}--}}
								{{--</div>--}}
							{{--</div>--}}
						</div>

							@endforeach

					</div>
				</div>
				<!--end::Preview-->
			</div>
		</div>

		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Presensi
						</h3>
					</div>
				</div>
			</div>

			<div class="m-portlet__body">
				<!--begin: Search Form -->
				<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
					<div class="row align-items-center">
						<div class="col-xl-12 order-2 order-xl-1">
							<div class="form-group m-form__group row align-items-center">
								<div class="col-md-4">
									<button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m_tambah_tugas"><i class="m-menu__link-icon fa fa-save "></i> Simpan</button>
								</div>
								<div class="col-md-5">									
								</div>
								<div class="col-md-3">
									<div class="m-input-icon m-input-icon--left">
										<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span>
												<i class="la la-search"></i>
											</span>
										</span>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-xl-4 order-1 order-xl-2 m--align-right">
							<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
								<span>
									<i class="la la-cart-plus"></i>
									<span>
										New Order
									</span>
								</span>
							</a>
							<div class="m-separator m-separator--dashed d-xl-none"></div>
						</div> -->
					</div>
				</div>
				<!--end: Search Form -->
			<!--begin: Datatable -->
				{{--<table class="m-datatable bordered-table" id="html_table" width="100%">--}}
					{{--<thead>--}}
						{{--<tr>--}}
							{{--<th title="Field #1" style=" width: 5px;">--}}
								{{--No--}}
							{{--</th>--}}
							{{--<th title="Field #2">--}}
								{{--Nama Calon--}}
							{{--</th>--}}
							{{--<th>--}}
								{{--Jenis Kelamin--}}
							{{--</th>--}}
							{{--<th>--}}
								{{--Total Kehadiran--}}
							{{--</th>--}}
							{{--<th title="Field #4">--}}
								{{--1--}}
							{{--</th>--}}
							{{--<th title="Field #4">--}}
								{{--2--}}
							{{--</th>--}}
							{{--<th title="Field #4">--}}
								{{--3--}}
							{{--</th>--}}
							{{--<th title="Field #4">--}}
								{{--4--}}
							{{--</th>--}}
							{{--<th title="Field #4">--}}
								{{--5--}}
							{{--</th>--}}
							{{----}}

							{{--<!-- <th title="Field #5">--}}
								{{--Tugas 3--}}
							{{--</th> -->--}}
							{{--<!-- <th title="Field #6">--}}
								{{--Aksi--}}
							{{--</th> -->--}}
						{{--</tr>--}}
					{{--</thead>--}}
					{{--<tbody>--}}
						{{--<tr>--}}
							{{--<td>--}}
								{{--1--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--Dinda--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--Perempuan--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--<div class="progress">--}}
									{{--<div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
								{{--</div>--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button> -->--}}
								{{--<a href="#" class="btn btn-sm btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-check"></i></a>--}}
							{{--</td>--}}
							{{--<td>--}}
								{{----}}
								{{--<button class="btn btn-danger btn-sm m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-remove"></i></button>--}}

							{{--</td>--}}
							{{--<td>--}}
								{{--<button class="btn btn-sm btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-check"></i></button>--}}
								{{----}}
							{{--</td>--}}
							{{--<td>--}}
								{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
								{{--<a href="#" class="btn btn-sm btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-check"></i></a>--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
								{{--<a href="#" class="btn btn-sm btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-check"></i></a>--}}
								{{----}}
							{{--</td>--}}
							{{----}}
						{{--</tr>--}}
						{{--<tr>--}}
							{{--<td>--}}
								{{--2--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--Theolina--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--Perempuan--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--<div class="progress">--}}
									{{--<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
								{{--</div>	--}}
							{{--</td>--}}
							{{--<td>--}}
								{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
								{{--<a href="#" class="btn btn-sm btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-check"></i></a>--}}
							{{--</td>--}}
							{{--<td>--}}
								{{----}}
							{{--</td>--}}
							{{--<td>--}}
								{{----}}
							{{--</td>--}}
							{{--<td>--}}
								{{----}}
							{{--</td>--}}
							{{--<td>--}}
								{{----}}
							{{--</td>--}}
							{{----}}
						{{--</tr>--}}
																{{----}}
					{{--</tbody>--}}
				{{--</table>--}}
				<!--end: Datatable -->

				<!--begin: Datatable -->
				<table class="m-datatable bordered-table" id="html_table" width="100%">
					<thead>

					<tr>
						<th>No</th>
						<th title="Field #2">Nama Calon</th>
						<th>Jenis Kelamin</th>
						<th>Total</th>
						@foreach($kegiatan as $key)
							<th title="Field #4">
								 {{ $key->id }}
							</th>
						@endforeach

					</tr>
					</thead>
					<tbody>
					{{--// TODO: sepertinya ini tabel presensi namun karena ada id kegiatan jadi bingung deh--}}
					@foreach($calonAnggota as $calon)
						<tr>
							<td width="10%">{{ $calon->id }}</td>
							<td>{{ $calon->nama_calon_anggota }}</td>
							<td>{{ $calon->jenis_kelamin }}</td>
							<td>
								{{--TODO: progress sesuai dengan jumlah kehadiran dan jika kurang dari setengah merah warnanya--}}
								<div class="progress">
									<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="m--space-10"></div>
							</td>
							@foreach($kegiatan as $key)
								<td>
									<a href="#" class="btn btn-sm btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-check"></i></a>
								</td>
							@endforeach
							{{--<td>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>--}}
							{{--</td>--}}
							{{--<td>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>--}}
							{{--</td>--}}
							{{--<td>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>--}}
							{{--</td>--}}
							{{--<td>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>--}}
							{{--</td>--}}
							{{--<td>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>--}}
							{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>--}}
							{{--</td>--}}
						</tr>
					@endforeach

					</tbody>
				</table>
				<!--end: Datatable -->


			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>

@endsection