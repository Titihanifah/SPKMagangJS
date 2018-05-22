@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Kegiatan
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
				</ul>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">						
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Kegiatan
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
									<button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m_tambah_kegiatan">Tambah</button>
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
				<table class="m-datatable" id="html_table" width="100%">
					<thead>
						<tr>
							<th title="Field #1" width="10%">
								No
							</th>
							<th title="Field #2">
								Nama Kegiatan
							</th>
							<th title="Field #3">
								Waktu
							</th>
							<th title="Field #4">
								Tempat
							</th>
							<th title="Field #5">
								Jumlah Hadir
							</th>
							<th title="Field #6">
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="10%">
								1
							</td>
							<td>
								First Gathering
							</td>
							<td>
								Kamis, 20 Juni 2018
							</td>
							<td>
								Ruang Utama Maskam UGM
							</td>
							<td>
								50
							</td>
							<td>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button> -->
								<a href="#" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
								<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" data-toggle="modal" data-target="#m_modal_1"><i class="m-menu__link-icon flaticon-edit-1"></i></a>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
								<a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
									
							</td>
						</tr>
						<tr>
							<td width="10%">
								2
							</td>
							<td>
								First Gathering
							</td>
							<td>
								Kamis, 20 Juni 2018
							</td>
							<td>
								Ruang Utama Maskam UGM
							</td>
							<td>
								50
							</td>
							<td>
								<div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
									
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button> -->
								<a href="#" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
								<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-edit-1"></i></a>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
								<a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
									
								</div>
							</td>
						</tr>										
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Edit Data Kegiatan
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group m-form__group">
					<label for="">
						Nama Kegiatan
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kegiatan">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Waktu Kegiatan
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Kegiatan">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Tempat Kegiatan
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Kegiatan">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Jumlah Peserta yang hadir
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Peserta yang hadir" disabled="">					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					Close
				</button>
				<button type="button" class="btn btn-primary">
					Simpan
				</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="m_tambah_kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Tambah Data Kegiatan
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group m-form__group">
					<label for="">
						Nama Kegiatan
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kegiatan">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Waktu Kegiatan
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Kegiatan">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Tempat Kegiatan
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Kegiatan">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Jumlah Peserta yang hadir
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Peserta yang hadir" disabled="">					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					Close
				</button>
				<button type="button" class="btn btn-primary">
					Simpan
				</button>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>

@endsection