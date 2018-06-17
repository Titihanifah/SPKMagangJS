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
                        <?php $i=1; ?>
						@foreach($userKegiatan->departemen->kegiatans as $key)

						<div class="m-list-badge">
							<div class="m-list-badge__items">
								<div href="#" class="m-list-badge__item">
									<?php echo $i ?>
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
                            <?php $i++ ?>
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
									{{--<div class="m-input-icon m-input-icon--left">--}}
										{{--<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">--}}
										{{--<span class="m-input-icon__icon m-input-icon__icon--left">--}}
											{{--<span>--}}
												{{--<i class="la la-search"></i>--}}
											{{--</span>--}}
										{{--</span>--}}
									{{--</div>--}}
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

				<table class="myTableDataTable bordered-table" id="html_table" width="100%">
					<thead>

					<tr>
						<th>No</th>
						<th title="Field #2">Nama Calon</th>
						<th>Jenis Kelamin</th>
						<th>Total</th>
                        <?php $i=1; ?>
						@foreach($userKegiatan->departemen->kegiatans as $key)
							<th title="Field #4">
								 <?php echo $i ?>
							</th>
                            <?php $i++; ?>
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
							@foreach($userKegiatan->departemen->kegiatans as $key)

								<td>
									<button href="#" class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" id="hadir"><i class="fa fa-check"></i></button>
                                    <button href="#" class="btn btn-sm btn-outline-danger m-btn m-btn--icon m-btn--icon-only" id="tidakhadir"><i class="fa fa-remove"></i></button>
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
<script src="https://code.jquery.com/jquery-3.3.1.js" charset="utf8" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf8" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js" charset="utf8" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
<script type="text/javascript">
    $(document).ready( function () {
        $('.myTableDataTable').DataTable();

        $("#hadir").click(function () {
            $("#hadir").show();
            $("#tidakhadir").hide();
        });
        $("#tidakhadir").click(function () {
            $("#hadir").show();
            $("#tidakhadir").hide();
        });
    } );
</script>
<style type="text/css">
    #tidakhadir {
        display: none;
    }
</style>
@endsection