@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Periode
				</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">
						- Periode
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
						<h3 class="m-portlet__head-text">
							<i class="m-menu__link-icon flaticon-time-3"></i> - Periode
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
									<a href="#"  data-toggle="modal" data-target="#m-tambah-periode" class="btn m-btn--square  btn-outline-primary" ><i class="m-menu__link-icon flaticon-plus"></i> Tambah</a>
								</div>
								<div class="col-md-5">
									{{--<button class="btn m-btn--square  btn-outline-primary">Tambah</button>--}}
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
					</div>
				</div>
				<!--end: Search Form -->
				<!--begin: Datatable -->
				<table class="myTableDataTable table table-striped table-bordered" id="html_table" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Tahun Periode</th>
							<th>Periode Tahun Hijriah</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php $i = 1; ?>
					@foreach($periode as $key)
						<tr>
							<td><?php echo $i; ?></td>
							<td>{{ $key->tahun }}</td>
							<td>{{ $key->periode }}</td>
							<td>{{ $key->status }}</td>
							<td>
								{{--<input onclick="setActive({{ $key->id }})" {{ (($key->status == 'Aktif') ? 'checked':'' }} type="radio">Aktif--}}

                                <button onclick="edit({{ $i }})" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button>
{{--                                <a href="{{url('/admin/periode/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>--}}
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
											$.get('<?php echo url('/admin/periode/destroy').'/'.$key->id?>', function(){
											swal({
											title : 'Sukses',
											text : 'Data periode berhasil dihapus!',
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
								<button onclick="setActive({{ $key->id }})" class="btn {{ (($key->status == 'Aktif') ? "" : "btn-success") }} m-btn" ><i class="fa {{ (($key->status == 'Aktif') ? "" : "fa-check") }}"></i>{{ (($key->status == 'Aktif') ? "" : " Aktifkan") }}</button>

							</td>
						</tr>
                        <?php $i++; ?>
					@endforeach
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
	</div>
</div>

{{--MODAL--}}
<div class="modal fade" id="m-tambah-periode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Tambah Data Periode
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			</div>
			{!! Form::open(array('route' => 'periode.store', 'enctype' => 'multipart/form-data')) !!}
			<div class="modal-body">
				<div class="form-group m-form__group">
					<label for="">Tahun <font color="red">*</font></label>
					<input required type="year" name="tahun" class="form-control m-input m-input--air" id="" aria-describedby="emailHelp" placeholder="2017">
				</div>
				<div class="form-group m-form__group">
					<label for="">Periode <font color="red">*</font></label>
					<input required type="text" name="periode" class="form-control m-input m-input--air" id="" aria-describedby="emailHelp" placeholder="1439H">
				</div>
				{{--<div class="m-form__group form-group">--}}
					{{--<label for="">Status</label>--}}
					{{--<div class="m-radio-inline">--}}
						{{--<label class="m-radio">--}}
							{{--<input type="radio" name="status" value="1">Aktif--}}
							{{--<span></span>--}}
						{{--</label>--}}
						{{--<label class="m-radio">--}}
							{{--<input type="radio" name="status" value="0">Tidak Aktif--}}
							{{--<span></span>--}}
						{{--</label>--}}
					{{--</div>--}}
			    {{--</div>--}}
				<font color="red">*</font> Wajib diisi
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
				{!! Form::close() !!}
			</div>

		</div>
	</div>
</div>


	<div class="modal fade" id="m-edit-periode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
				<input name="_method" type="hidden" value="PUT">
				@csrf
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">
							Edit Data Periode
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group m-form__group">
							<label for="">Tahun <font color="red">*</font></label>
							<input required type="year" id="tahun" name="tahun" class="form-control m-input m-input--air">
						</div>
						<div class="form-group m-form__group">
							<label for="">Tahun Periode <font color="red">*</font></label>
							<input required type="text" id="periode" name="periode" class="form-control m-input m-input--air">
						</div>
						{{--<div class="form-group m-form__group">--}}
							{{--<label for="">Status</label>--}}
							{{--<input type="text" name="status" id="status" class="form-control m-input m-input--air">--}}
						{{--</div>--}}
						{{--<div class="m-form__group m-form__group">--}}
							{{--<label for="">Status</label>--}}
							{{--<div class="m-radio-inline">--}}
								{{--<input type="hidden" id="final_status" value="">--}}
								{{--<label class="m-radio">--}}
									{{--<input type="radio" id="aktif" name="status" value="1">Aktif<span></span>--}}
								{{--</label>--}}
								{{--<label class="m-radio">--}}
									{{--<input type="radio" id="tidak_aktif" name="status" value="0">Tidak Aktif--}}
									{{--<span></span>--}}
								{{--</label>--}}
							{{--</div>--}}
						{{--</div>--}}
						<font color="red">*</font> Wajib diisi
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

{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">


<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
<link rel="stylesheet" href="{{ url('css/sweetalert.css') }}" type="text/css">

<script type="text/javascript" src="{{ url('js/sweetalert.min.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('.myTableDataTable').DataTable();

		@if (\Illuminate\Support\Facades\Session::has('message'))
        swal({
            title : 'Sukses',
            text : '{{ \Illuminate\Support\Facades\Session::get('message') }}',
            type : 'success'
        });
				@endif

				@if ($errors->any())
        var htmlText = '';

		@foreach ($errors->all() as $error)
            htmlText += '{{ $error }}\n';
		@endforeach

        swal({
            title : 'Gagal',
            text : htmlText,
            type : 'error'
        });
		@endif
    });

    function edit(id) {
        var datadata = {!! json_encode($periode) !!};
        id = id-1;

        console.log(datadata[id]);
        var idObject = datadata[id].id;
        var tahun = datadata[id].tahun;
        var periode = datadata[id].periode;
        var status = datadata[id].status;
        var finalstatus;
        if(status == "Tidak Aktif") {
            finalstatus = 0;
            $('#tidak_aktif').val(finalstatus);
            $('#tidak_aktif').attr('checked', 'checked');

        } else if(status == "Aktif") {
            finalstatus = 1;
            $('#aktif').val(finalstatus);
            $('#aktif').attr('checked', 'checked');

        }
        console.log(finalstatus);

//        $('#status').val(status);
        $('#tahun').val(tahun);
        $('#periode').val(periode);
//        $('#status').val(status);



        var url = "{{ url('/') }}/admin/periode/" + (idObject);
        document.getElementById("edit_form").action = url;
        $('#m-edit-periode').modal('show');

    }

    function setActive(id) {

        $.ajax({
            type: 'GET',
            url: '{{ url('/') }}/api/periode/setactive/'+id,
            success: function (response) { // on success..
                console.log(response); // update the DIV
                swal({
                    title : 'Sukses',
                    text : 'Berhasil mengubah periode aktif !',
                    type : 'success'
                },function(){
                    setTimeout(location.reload.bind(location), 100);
                });

            }
        });
    }


</script>


@endsection