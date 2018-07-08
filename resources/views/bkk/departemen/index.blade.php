@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	{{--<div class="m-subheader ">--}}
		{{--<h3>--}}
		{{--Departemen--}}
		{{--</h3>--}}
		{{--<div class="d-flex align-items-center">--}}
			{{--<div class="mr-auto">--}}
				{{--<h3 class="m-subheader__title m-subheader__title--separator">--}}
					{{--Departemen--}}
				{{--</h3>--}}
				{{--<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">--}}
					{{--<li class="m-nav__item m-nav__item--home">--}}
						{{--<a href="#" class="m-nav__link m-nav__link--icon">--}}
							{{--<i class="m-nav__link-icon la la-home"></i>--}}
						{{--</a>--}}
					{{--</li>--}}
					{{--<li class="m-nav__separator">--}}
						{{--- --}}
					{{--</li>									--}}
				{{--</ul>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	<!-- END: Subheader -->
	<div class="m-content">						
		{{--<div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--head-sm">--}}
			<div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							<i class="m-nav__link-icon la la-home"></i> - Departemen
						</h3>
					</div>
				</div>
				<div class="m-portlet__head-tools">

				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin: Search Form -->
				<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
					<div class="row align-items-center">
						<div class="col-xl-12 order-2 order-xl-1">
							<div class="form-group m-form__group row align-items-right">
								<a href="#"  data-toggle="modal" data-target="#m-tambah-departemen" class="btn m-btn--square  btn-outline-primary" ><i class="m-menu__link-icon flaticon-plus"></i> Tambah</a>
							</div>
						</div>
					</div>
				</div>
				<!--end: Search Form -->
				<!--begin: Datatable -->
				<table class="myTableDataTable table table-striped table-bordered" id="html_table" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Departemen</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php $i = 1; ?>
					@foreach ($departemen as $key)
						<tr>
							<td><?php echo $i?></td>
							<td>{{ $key->nama_departemen }}</td>
							<td>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button> -->
								<!-- <a href="#" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a> -->
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
								<button onclick="edit({{ $i }})" data-nama_departemen="{{ $key->nama_departemen }}" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button>
								{{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-edit-1"></i></a>--}}
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
								<a href="{{url('admin/departemen/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
									
							</td>
						</tr>
						<?php $i++ ?>
					@endforeach
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
	</div>
</div>

{{--MODAL--}}
<div class="modal fade" id="m-tambah-departemen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Tambah Departemen
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			</div>
			<div class="modal-body">
				{!! Form::open(array('route' => 'departemen.store', 'enctype' => 'multipart/form-data')) !!}
				<div class="form-group m-form__group">
					<label for="">Nama Departemen</label>
					<input type="text" name="nama_departemen" class="form-control m-input m-input--air" id="" aria-describedby="emailHelp" placeholder="Kemuslimahan">
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="m-edit-departemen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
			<input name="_method" type="hidden" value="PUT">
			@csrf
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Edit Data Departemen
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group m-form__group">
						<label for="">Nama Departemen</label>
						<input type="text" id="nama_departemen" name="nama_departemen" class="form-control m-input m-input--air">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection

@section('js')

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
	<script type="text/javascript">

        $(document).ready( function () {
            $('.myTableDataTable').DataTable();
        } );

        function edit(id) {
            var datadata = {!! json_encode($departemen) !!};
            id = id-1;

            console.log(datadata[id]);
            var idObject = datadata[id].id;
            var nama_departemen = datadata[id].nama_departemen;

            $('#nama_departemen').val(nama_departemen);

            var url = "http://spkmagang.test:9000/admin/departemen/" + (idObject);
            document.getElementById("edit_form").action = url;

            $('#m-edit-departemen').modal('show');
        }
	</script>

@endsection