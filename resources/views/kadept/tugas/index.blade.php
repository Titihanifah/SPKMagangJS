@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Data Tugas
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
								Data Tugas
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
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Data Tugas
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
									<button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m_tambah_tugas">Tambah</button>
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
							<th title="Field #1">
								No
							</th>
							<th title="Field #2">
								Nama Tugas
							</th>
							<th title="Field #3">
								Deadline
							</th>											
							<th title="Field #6">
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								1
							</td>
							<td>
								Essay
							</td>
							<td>
								Kamis, 20 Juni 2018
							</td>
							<td>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger" data-toggle="modal" data-target="#m_edit_tugas"><i class="m-menu__link-icon flaticon-edit-1"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
								<a href="#" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>
								<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" data-toggle="modal" data-target="#m_edit_tugas"><i class="m-menu__link-icon flaticon-edit-1"></i></a>
								<a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
							</td>
						</tr>
						<tr>
							<td>
								2
							</td>
							<td>
								Digitalisasi Buku
							</td>
							<td>
								Kamis, 20 Juni 2018
							</td>
							<td>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
								<a href="#" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>
								<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" data-toggle="modal" data-target="#m_edit_tugas"><i class="m-menu__link-icon flaticon-edit-1"></i></a>
								<a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
							</td>
						</tr>										
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="m_edit_tugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Edit Data Tugas
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
						Nama Tugas
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Tugas">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Deskripsi
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Deadline
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deadline">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Periode
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Periode">					
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

<div class="modal fade" id="m_tambah_tugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Tambah Data Tugas
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
						Nama Tugas
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Tugas">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Deskripsi
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Deadline
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deadline">					
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Periode
					</label>
					<input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Periode">					
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