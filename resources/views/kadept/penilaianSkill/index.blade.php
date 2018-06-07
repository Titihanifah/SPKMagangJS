@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Penilaian Skill
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
								Penilaian Skill
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
							Penilaian Skill
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
									<a href="#"  data-toggle="modal" data-target="#m-tambah-kriteria" class="btn m-btn--square  btn-outline-primary" ><i class="m-menu__link-icon flaticon-save"></i> Simpan</a>
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
				<table class="myTableDataTable table table-striped table-bordered" id="html_table" width="100%">
					<thead>
					{{--TODO: sepertinya ini belum ada tabelnya :D--}}
						<tr>
							<th title="Field #1">
								No
							</th>
							<th title="Field #2">
								Nama Calon
							</th>
							<th title="Field #2">
								Rekap Skill
							</th>
							<th title="Field #3">
								Skill 1
							</th>
							<th title="Field #4">
								Skill 2
							</th>
							<!-- <th title="Field #6">
								Aksi
							</th> -->
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								1
							</td>
							<td>
								Dinda
							</td>
							<td>
								<div class="progress">
									<label>

									</label>
									<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td>
								<!-- <input class="form-control m-input" type="text" value="50" > -->
								<div class="m-checkbox-list">
									{{--TODO: digabung jadi satu skillnya atau dipisah per kolom ya?--}}
									{{--brati nanti ada tabel baru yg menghubungkan departemenn dengan kriteria penilaian--}}
									{{--atau masuk di kriteria penilaian aja?--}}
									<label class="m-checkbox m-checkbox--solid m-checkbox--state-success">
										<input type="checkbox">
										<span></span>
									</label>
								</div>
							</td>
							<td>
								<div class="m-checkbox-list">
									<label class="m-checkbox m-checkbox--solid m-checkbox--success">
										<input type="checkbox">
										<span></span>
									</label>
								</div>
							</td>

						</tr>
						<tr>
							<td>
								2
							</td>
							<td>
								Theolina
							</td>
							<td>
								<div class="progress">
									<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td>
								<div class="m-checkbox-list">
									<label class="m-checkbox m-checkbox--solid m-checkbox--success">
										<input type="checkbox">
										<span></span>
									</label>
								</div>
							</td>
							<td>
								<div class="m-checkbox-list">
									<label class="m-checkbox m-checkbox--solid m-checkbox--success">
										<input type="checkbox">
										<span></span>
									</label>
								</div>
							</td>
							<!-- <td>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button>
							</td> -->
						</tr>
																
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
		<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon fa fa-save "></i> Simpan</button>
	</div>
</div>

@endsection

@section('js')

<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('.myTableDataTable').DataTable();
        } );
    </script>

@endsection