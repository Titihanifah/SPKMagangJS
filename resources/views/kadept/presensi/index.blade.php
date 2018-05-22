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
									<!-- <div class="m-form__group m-form__group--inline">
										<div class="m-form__label">
											<label>
												Kegiatan :
											</label>
										</div>
										<div class="m-form__control">
											<select id="m_form_status">
												<option value="1">
													First Gath
												</option>
												<option value="2">
													Pelatihan Desain
												</option>
												<option value="3">
													Pelatihan Fotografi
												</option>
											</select>
										</div>
									</div>
									<div class="d-md-none m--margin-bottom-10"></div> -->
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
				<table class="m-datatable" id="html_table" width="100%">
					<thead>
						<tr>
							<th title="Field #1" width="10%">
								No
							</th>
							<th title="Field #2">
								Nama Calon
							</th>
							<th>
								Jenis Kelamin
							</th>
							<th title="Field #4">
								Kegiatan 1
							</th>
							<th title="Field #4">
								Kegiatan 2
							</th>
							<th title="Field #4">
								Kegiatan 3
							</th>
							<th title="Field #4">
								Kegiatan 4
							</th>
							<th title="Field #4">
								Kegiatan 5
							</th>

							<!-- <th title="Field #5">
								Tugas 3
							</th> -->
							<!-- <th title="Field #6">
								Aksi
							</th> -->
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="10%">
								1
							</td>
							<td>
								Dinda
							</td>
							<td>
								Perempuan
							</td>
							<!-- <td>
								<input class="form-control m-input" type="text" value="70" >
							</td>
							<td>
								<input class="form-control m-input" type="text" value="90">
							</td> -->
							<td>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>
							</td>
							<td>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>
							</td>
							<td>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>
							</td>
							<td>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>
							</td>
							<td>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>
							</td>
						</tr>
						<tr>
							<td width="10%">
								2
							</td>
							<td>
								Theolina
							</td>
							<td>
								Perempuan
							</td>
							<!-- <td>
								<input class="form-control m-input" type="text" value="70" >
							</td>
							<td>
								<input class="form-control m-input" type="text" value="90">
							</td> -->
							<td>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-success m-btn--gradient-to-success"><i class="fa fa-check"></i></button>
								<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="fa fa-remove"></i></button>
							</td>
							</td>
						</tr>
																
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