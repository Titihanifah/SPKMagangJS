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
							Periode
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
                                <button onclick="edit({{ $i }})" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button>
                                <a href="{{url('/admin/periode/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
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
					<label for="">Tahun</label>
					<input type="year" name="tahun" class="form-control m-input m-input--air" id="" aria-describedby="emailHelp" placeholder="2017">
				</div>
				<div class="form-group m-form__group">
					<label for="">Periode</label>
					<input type="text" name="periode" class="form-control m-input m-input--air" id="" aria-describedby="emailHelp" placeholder="1439H">
				</div>
				<div class="m-form__group form-group">
					<label for="">Status</label>
					<div class="m-radio-inline">
						<label class="m-radio">
							<input type="radio" name="status" value="1">Aktif
							<span></span>
						</label>
						<label class="m-radio">
							<input type="radio" name="status" value="0">Tidak Aktif
							<span></span>
						</label>
					</div>
			    </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
				{!! Form::close() !!}
			</div>

		</div>
	</div>
</div>

	<div class="modal fade" id="m-test-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog" role="document">

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
							<label for="">Tahun </label>
							<input type="year" id="tahun" name="tahun" class="form-control m-input m-input--air">
						</div>
						<div class="form-group m-form__group">
							<label for="">Tahun Periode</label>
							<input type="text" id="periode" name="periode" class="form-control m-input m-input--air">
						</div>
						{{--<div class="form-group m-form__group">--}}
							{{--<label for="">Status</label>--}}
							{{--<input type="text" name="status" id="status" class="form-control m-input m-input--air">--}}
						{{--</div>--}}
						<div class="m-form__group m-form__group">
							<label for="">Status</label>
							<div class="m-radio-inline">
								<input type="hidden" id="status" value="">
								<label class="m-radio">
									<input type="radio" id="aktif" name="status" value="">Aktif
									<span></span>
								</label>
								<label class="m-radio">
									<input type="radio" id="tidak_aktif" name="status" value="">Tidak Aktif
									<span></span>
								</label>
							</div>
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

{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">


<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
<script type="text/javascript">

    $(document).ready(function () {
        $('.myTableDataTable').DataTable();
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

        } else {
            finalstatus = 1;
            $('#aktif').val(finalstatus);
            $('#aktif').attr('checked', 'checked');

        }
        console.log(finalstatus);

        $('#status').val(finalstatus);
        $('#tahun').val(tahun);
        $('#periode').val(periode);
//        $('#status').val(status);



        var url = "http://spkmagang.test:9000/admin/periode/" + (idObject);
        document.getElementById("edit_form").action = url;
        $('#m-edit-periode').modal('show');

    }


</script>


@endsection