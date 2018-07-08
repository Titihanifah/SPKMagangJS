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
							<th colspan="2"><center>Total Nilai</center></th>
							<th rowspan="2">Hasil Akhir</th>
							<th rowspan="2">Aksi</th>
							<th rowspan="2">Keterangan</th>
						</tr>
					<tr>
						<th width="10px">Kehadiran</th>
						<th width="10px">Tugas</th>
					</tr>
					</thead>
					<tbody>
						@foreach($detailCalonAnggotas as $key)
						<tr>
							<td width="10%">{{ $loop->iteration }}</td>
							<td>{{ $key->calonAnggota->nama_calon_anggota }} {{ $key->favorit ? "⭐" : "" }} </td>
							<td>{{ $key->calonAnggota->jenis_kelamin }}</td>
							<td><center>{{ $key->nilai_kehadiran }}</center></td>

							<td><center>{{ $key->nilai_tugas }}</center></td>

							<td><center>{{ $key->total_nilai }}</center></td>

							<td>
								@if(isset($key->rekomendasi))
									<select name="departemen" onchange="rekomendasiID(this)" id="[{{ json_encode($key) }}]" class="departemen-{{ $key->id }} custom-select form-control col-md-12">
										{{--TODO: selected--}}
										<option >Pilih Departemen</option>
										@foreach($departemen as $value)
											<option {{ ($key->rekomendasi == $value->nama_departemen) ? "selected" : "" }} value="{{ $value->nama_departemen }}" >{{ $value->nama_departemen }}</option>
										@endforeach
									</select>

								@else
									<!-- <a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a> -->
										<button id="{{ json_encode($key) }}" class="btn btn-success btn-rekomendasi-{{ $key->id }}" onclick="clickRekomendasi(this)"><i class="flaticon-user-ok "></i>Rekomendasi</button>
										{{--<a href="#" class="btn btn-sm btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-remove"></i></a>--}}
										<select name="departemen" onchange="rekomendasiID(this)" id="[{{ json_encode($key) }}]" class="departemen-{{ $key->id }} dept custom-select form-control col-md-12">
											{{--TODO: selected--}}
											<option selected>Pilih Departemen</option>
											@foreach($departemen as $value)
												<option value="{{ $value->nama_departemen }}">{{ $value->nama_departemen }}</option>
											@endforeach
										</select>
								@endif

							</td>
							<td>

								<textarea name="keterangan" onkeypress="keterangan(this)" id="[{{ json_encode($key) }},{{ json_encode($value) }}]" class="keterangan-{{ $key->id }} form-control m-input" placeholder="keterangan">{{ $key->keterangan }}</textarea><span></span>
								{{--<button class="btn btn-success " onclick="clickRekomendasi(this)"><i class="fa fa-save"></i></button>--}}
							</td>
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



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script type="text/javascript">

    $(document).ready( function () {
        $('.myTableDataTable').DataTable();

    } );

//    jika kadept rekomendasi ke departemen tertentu

	function clickRekomendasi(param) {
	    var n = JSON.parse(param.id);

        $(".departemen-"+n.id).show();
        $(".btn-rekomendasi-"+n.id).hide();
	}

	function rekomendasiID(theForm){
	    var detail_calon_anggota = JSON.parse(theForm.id)[0];
	    console.log(JSON.parse(theForm.id));
        var rekomendasi= $(".departemen-"+detail_calon_anggota.id).val();
        console.log("rekomendasi"+rekomendasi);

        // show keterangan

	    $.ajax({
			data:{
			    id_detail_calon_anggota : detail_calon_anggota.id,
				id_departemen : detail_calon_anggota.id_departemen,
				rekomendasi : rekomendasi,

			},
			type: 'POST',
			url: 'http://spkmagang.test:9000/api/rekomendasi/simpan',
            success: function (response) { // on success..
                console.log(response); // update the DIV

				$("#keterangan").show();
            }
		});
	}

    function keterangan(theForm) {
        var detail_calon_anggota = JSON.parse(theForm.id)[0];
        var keterangan= $(".keterangan-"+detail_calon_anggota.id).val();

        // show keterangan

        $.ajax({
            data:{
                id_detail_calon_anggota : detail_calon_anggota.id,
                id_departemen : detail_calon_anggota.id_departemen,
                keterangan : keterangan,

            },
            type: 'POST',
            url: 'http://spkmagang.test:9000/api/keterangan/simpan',
            success: function (response) { // on success..
                console.log(response); // update the DIV


            }
        });
    }

    function reset(theForm) {
        var  = JSON.parse(theForm.id)[0];
        console.log(detail_calon_anggota.id_departemen);


        $.ajax({
            data: {
                id_detail_calon_anggota: detail_calon_anggota.id,
                id_departemen: detail_calon_anggota.id_departemen,
                favorit: 0,

            },
            type: 'POST',
            url: 'http://spkmagang.test:9000/api/star/simpan',
            success: function (response) { // on success..
                console.log(response); // update the DIV

            }
        });
    }


</script>
<style type="text/css">
	.dept{
        display: none;
    }
</style>

@endsection

