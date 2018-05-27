@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Data Calon
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
								Data Calon
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
		<div class="m-portlet m-portlet--tab">
			<!-- <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Custom Controls
                        </h3>
                    </div>
                </div>
            </div> -->
			<!-- panel import -->
			{{--<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">--}}
				{{--<div class="m-accordion__item">--}}
					{{--<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_7_item_1_head" data-toggle="collapse" href="#m_accordion_7_item_1_body" aria-expanded="    false">--}}
										{{--<span class="m-accordion__item-icon">--}}
											{{--<i class="fa flaticon-user-ok"></i>--}}
										{{--</span>--}}
						{{--<span class="m-accordion__item-title">--}}
											{{--Panduan Import Data--}}
										{{--</span>--}}
						{{--<span class="m-accordion__item-mode"></span>--}}
					{{--</div>--}}
					{{--<div class="m-accordion__item-body collapse" id="m_accordion_7_item_1_body" role="tabpanel" aria-labelledby="m_accordion_7_item_1_head" data-parent="#m_accordion_7">--}}
						{{--<div class="m-accordion__item-content">--}}
							{{--<div class="col-md-12">--}}
								{{--<div class="row">--}}
									{{--<div class="col-md-6">--}}
										{{--<img src="{{ url('assets/app/media/img/panduan_import.jpg') }}" alt=""/>--}}
									{{--</div>--}}
									{{--<div class="col-md-3"></div>--}}
									{{--<div class="col-md-3">--}}
										{{--<h5>Catatan :</h5>--}}
										{{--<hr>--}}
										{{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.--}}
										{{--<br>--}}
										{{--<hr>--}}
										{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-download "></i> Download Contoh File</button>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
			{{--<form class="alert m-alert m-alert--default">--}}
				{{--<div class="m-portlet__body">--}}
					{{--<div class="row">--}}
						{{--<div class="col-md-7">--}}

							{{--<div class="custom-file">--}}
								{{--<input type="file" class="custom-file-input" id="customFile">--}}
								{{--<label class="custom-file-label" for="customFile">--}}
									{{--Pilih Berkas--}}
								{{--</label>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<button type="reset" class="btn btn-sm btn-primary" style="margin-right: 10px">--}}
							{{--Import--}}
						{{--</button>--}}
						{{--<span></span>--}}
						{{--<button type="reset" class="btn btn-sm btn-danger">--}}
							{{--Batal--}}
						{{--</button>--}}
					{{--</div>--}}

				{{--</div>--}}
			{{--</form>--}}
			<!--begin::Form-->

			<!--end::Form-->
		</div>
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Data Calon
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
									{{--<button class="btn m-btn--square  btn-outline-primary">Tambah</button>--}}
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
					</div>
				</div>
				<!--end: Search Form -->
				<!--begin: Datatable -->
				<table class="m-datatable table-bordered dt-responsive nowrap bordered-table" id="html_table" width="100%">
					<thead>
						<tr>
							<th title="Field #1">
								No
							</th>
							<th title="Field #2">
								Nama
							</th>
							<th title="Field #3">
								Jenis Kelamin
							</th>
							<th title="Field #4">
								Hardskill
							</th>
							<th title="Field #5">
								Softskill
							</th>
							<th title="Field #6">
								Departemen Pilihan
							</th>
							{{--<th>--}}
								{{--Aksi--}}
							{{--</th>--}}
						</tr>
					</thead>
					<tbody>
					@foreach ($calonAnggota as $key)
						<tr>
							<td>{{ $key->id }}</td>
							<td>{{ $key->nama_calon_anggota }}</td>
							<td>{{ $key->jenis_kelamin }}</td>
							<td>{{ $key->hardskill }}</td>
							<td>{{ $key->softskill }}</td>
							{{--// TODO: join tabel detail (prioritas,dept pil duanya)--}}
							<td>Infokes</td>
							{{--<td>--}}
								{{--<a href="#" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-star"></i></a>--}}
								{{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-rotate-right"></i></a>--}}
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
<style type="text/css">

</style>

@endsection