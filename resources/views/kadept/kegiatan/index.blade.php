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
		<div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text"><i class="m-nav__link-icon flaticon-interface-1"></i> - Kegiatan</h3>
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
									<button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m-tambah-kegiatan"><i class="m-menu__link-icon flaticon-plus"></i> Tambah</button>
								</div>
								<div class="col-md-5">
									
								</div>

							</div>
						</div>
					</div>
				</div>
				<!--end: Search Form -->
				<!--begin: Datatable -->
				<table class="myTableDataTable table table-striped table-bordered" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kegiatan</th>
							<th>Tanggal</th>
							<th>Waktu</th>
							<th>Jumlah Hadir</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php $i = 1; ?>
					@foreach($userKegiatan as $value)

						<tr>
							<td><?php echo $i ?></td>
							<td>{{ $value->nama_kegiatan }}</td>
							<td>{{ (new Carbon\Carbon($value->tanggal_kegiatan))->format('l, d F Y') }}</td>
							<td>{{ $value->waktu }}</td>
							{{--TODO: diambil dari presensi--}}
							{{--@if($value->jumlah == 0)--}}
								{{--<td> - </td>--}}
							{{--@else--}}
							<td>{{ $value->jumlah_hadir }}</td>
							{{--@endif--}}
							<td>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button> -->
								{{--<a href="#" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>--}}
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
								{{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" data-toggle="modal" data-target="#m_edit_kegiatan"><i class="m-menu__link-icon flaticon-edit-1"></i></a>--}}
								<button onclick="edit({{ $i }})" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button>
								<!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
								{{--<a href="{{url('/kegiatan/destroy')}}/{{ $value->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>--}}
								<a href="#" onclick="
								$().ready(function(e){
									swal({
										title : 'Hapus Data?',
										text : 'Anda yakin ingin menghapus data?',
										type : 'warning',
										showCancelButton : true,
										confirmButtonColor: '#DD6B55',
										confirmButtonText: 'Hapus',
										cancelButtonText: 'Batal',
										closeOnConfirm: false,
										closeOnCancel: false,
										showLoaderOnConfirm : true
									},
									function(isConfirm){
										if(isConfirm){
											$.get('<?php echo url('/kegiatan/destroy').'/'.$value->id?>', function(){
											swal({
											title : 'Sukses',
											text : 'Data kegiatan berhasil dihapus!',
											type : 'success'
											},function(){
											location.reload() ;
											});
											}) ;
										}else{
										swal('Batal dihapus', '', 'error');
										}
									})
								}) ;" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
									
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


<div class="modal fade" id="m-tambah-kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

				{!! Form::open(array('route' => 'kegiatan.store', 'enctype' => 'multipart/form-data')) !!}
				<div class="form-group m-form__group">
					<label for="">
						Nama Kegiatan
					</label>
					<input type="text" name="nama_kegiatan" class="form-control m-input m-input--air" id="exampleInputEmail1" placeholder="Nama Kegiatan" required>
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Waktu Kegiatan
					</label>
					<input type="text" id="m_timepicker_1" name="waktu" class="form-control m-input m-input--air" placeholder="Waktu Kegiatan" required>
				</div>
				<div class="form-group m-form__group">
					<label for="">
						Tanggal Kegiatan
					</label>
					<input type="text" id="m_datepicker_1" name="tanggal_kegiatan" class="form-control m-input m-input--air" placeholder="Tanggal Kegiatan" required>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-danger" data-dismiss="modal">
					Close
				</button>
				<button type="submit" class="btn btn-primary">
					Simpan
				</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

<div class="modal fade" id="m-edit-kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
			<input name="_method" type="hidden" value="PUT">
			@csrf
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Edit Data Kegiatan
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group m-form__group">
						<label for="">Nama Kegiatan</label>
						<input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control m-input m-input--air">
					</div>
					<div class="form-group m-form__group">
						<label for="">Tanggal Kegiatan</label>
						<input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control m-input m-input--air">
					</div>
					<div class="form-group m-form__group">
						<label for="">Waktu Kegiatan</label>
						<input type="time" name="waktu" id="waktu" class="form-control m-input m-input--air">
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
	<link rel="stylesheet" href="{{ url('css/sweetalert.css') }}" type="text/css">

	{{--<link type="text/css" href="css/bootstrap-timepicker.min.css" />--}}
	{{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">--}}


	{{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
	<script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="{{ url('js/sweetalert.min.js') }}"></script>
	{{--<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>--}}
	{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>--}}




	<script type="text/javascript">

	$(document).ready( function () {
		$('.myTableDataTable').DataTable();
        $("#m_datepicker_1").datepicker({
            todayHighlight: !0,
            orientation: "bottom left",
            format: 'yyyy-mm-dd',
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        });
        $("#m_timepicker_1").timepicker({
            minuteStep: 1,
            defaultTime: "",
            showSeconds: 0,
            showMeridian: 0,
            snapToStep: !0
        });
	} );
    $(".datetimepicker").timepicker();

        function edit(id) {

            var datadata = {!! json_encode($userKegiatan) !!};
            id = id-1;

            console.log(datadata[id]);
            var idObject = datadata[id].id;
            var nama_kegiatan = datadata[id].nama_kegiatan;
            var tanggal_kegiatan = datadata[id].tanggal_kegiatan;
            var waktu = datadata[id].waktu;

			$('#nama_kegiatan').val(nama_kegiatan);
			$('#tanggal_kegiatan').val(tanggal_kegiatan);
			$('#waktu').val(waktu);

			var url = "{{ url('/') }}/kegiatan/" + (idObject);
            document.getElementById("edit_form").action = url;

            $('#m-edit-kegiatan').modal('show');
        }


</script>
	<script type="text/css">
		.table-bordered th, td{
			border: 0.2px solid #90a5a6;
			background-color: #acb8f0 !important;
		}
		th, td {
			border: 1px solid #2c2e3e;
		}
	</script>

@endsection