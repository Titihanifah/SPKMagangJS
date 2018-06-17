@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Hasil Penilaian
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
							Hasil Penilaian
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
									{{--<button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m_tambah_kegiatan"><i class="m-menu__link-icon flaticon-plus"></i> Tambah</button>--}}
								</div>
								<div class="col-md-5">
								</div>
								{{--<div class="col-md-3">--}}
									{{--<div class="m-input-icon m-input-icon--left">--}}
										{{--<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">--}}
										{{--<span class="m-input-icon__icon m-input-icon__icon--left">--}}
											{{--<span>--}}
												{{--<i class="la la-search"></i>--}}
											{{--</span>--}}
										{{--</span>--}}
									{{--</div>--}}
								{{--</div>--}}
							</div>
						</div>
					</div>
				</div>
				<!--end: Search Form -->
				<!--begin: Datatable -->
				<table  class="bordered-table myTableDataTable table table-striped table-bordered" id="example" width="100%">
					<thead>
						<tr>
							<th rowspan="2" width="10%">No</th>
							<th rowspan="2">Nama Calon Anggota</th>
							<th rowspan="2">Jenis Kelamin</th>
							<th colspan="3"><center>Total Nilai</center></th>
							<th rowspan="2">Hasil</th>
							<th rowspan="2">Aksi</th>
						</tr>
					<tr>
						<th width="10px">Nilai</th>
						<th width="10px">Tugas</th>
						<th width="10px">Skill</th>

					</tr>
					</thead>
					<tbody>

						<tr>
							<td width="10%">
								1
							</td>
							<td>
								Tiara
							</td>
							<td>
								Perempuan
							</td>
							<td>
								<center>40</center>
							</td>
							<td>
								<center>60</center>
							</td>
							<td>
								<center>70</center>
							</td>
							<td>
								<center>55</center>
							</td>
							<td>
								<a href="#" class="btn btn-success"><i class="flaticon-user-ok "></i>Rekomendasi</a>
								{{--<a href="#" class="btn btn-sm btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-remove"></i></a>--}}
								<select class="custom-select form-control col-md-8">
                                    {{--TODO: selected--}}
									<option selected>
										Pilih Departemen
									</option>
									@foreach($departemen as $key)
										<option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
									@endforeach
								</select>
								<!-- <a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a> -->

							</td>
						</tr>
                        <tr>
                            <td width="10%">
                                2
                            </td>
                            <td>
                                Deni
                            </td>
                            <td>
                                Laki-laki
                            </td>
                            <td>
                                <center>50</center>
                            </td>
                            <td>
                                <center>45</center>
                            </td>
                            <td>
                                <center>30</center>
                            </td>
                            <td>
                                <center>40</center>
                            </td>
                            <td>
                                <a href="#" id="rekomendasi" class="btn btn-success"><i class="flaticon-user-ok "></i>Rekomendasi</a>
                                {{--<a href="#" class="btn btn-sm btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-remove"></i></a>--}}
                                <select id="departemen" class="custom-select form-control col-md-8">
                                    {{--TODO: selected--}}
                                    <option selected>
                                        Pilih Departemen
                                    </option>
                                    @foreach($departemen as $key)
                                        <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                    @endforeach
                                </select>
                                <!-- <a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a> -->

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

{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}

<script type="text/javascript">

    $(document).ready( function () {
        $('.myTableDataTable').DataTable();

        $("#rekomendasi").click(function () {
            $("#departemen").show();
            $("#rekomendasi").hide();
        });

    } );
</script>
<style type="text/css">
    #departemen {
        display: none;
    }
</style>

@endsection

