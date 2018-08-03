@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Tugas
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
							<span class="m-nav__link-text">Penilaian Tugas</span>
						</a>
					</li>
					<li class="m-nav__separator">
						
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text"></span>
						</a>
					</li>
					<li class="m-nav__separator">
						
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text"></span>
						</a>
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
							Penilaian Tugas
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
										<h5>Range penilaian tugas <b><font color="red">1 - 100</font></b></h5>
									</div>
									<div class="col-md-5">
									</div>
									<div class="col-md-3">
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
							<th>Nama Calon</th>
							{{--<th>Nilai Tugas</th>--}}
							@foreach($userTugas->departemen->tugas->where('id_periode', $activePeriode->id) as $key)
							<th>{{ $key->nama_tugas }}</th>
							@endforeach
						</tr>
					</thead>
					<tbody>
					@php $i= 1; @endphp
					@foreach($detailCalonAnggota as $value)
						@if($value->calonAnggota->id_periode == $activePeriode->id)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $value->calonAnggota->nama_calon_anggota }}</td>
							@foreach($userTugas->departemen->tugas->where('id_periode', $activePeriode->id) as $key)

                                @if($detailTugas->where('id_detail_calon_anggota', $value->id)->where('id_tugas', $key->id)->first() === null){
                                <td><input min="0"  max="100" id="[{{ json_encode($key) }},{{ json_encode($value) }}]" class="form-control m-input" onchange="penilaian(this)" type="number" placeholder="nilai" ></td>
									<span id="alert-nilai"></span>
                                @else
                                <td><input min="0"  max="100" id="[{{ json_encode($key) }},{{ json_encode($value) }}]" class="form-control m-input" onchange="penilaian(this)" type="number" value="{{ $detailTugas->where('id_detail_calon_anggota', $value->id)->where('id_tugas', $key->id)->first()->nilai_tugas }}" ></td>


                            @endif
							{{--<td><input class="form-control m-input"  type="text" placeholder="nilai" ></td>--}}
							@endforeach
							{{--<td><button onclick="detail({{ $i }})" data-toggle="modal" onclick="totalTugas(this)" id="[{{ json_encode($key) }},{{ json_encode($value) }}]" class="btn btn-primary"><i class="-menu__link-icon flaticon-eye"></i> Lihat Detail</button></td>--}}
						</tr>
						@endif
					@endforeach
																
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
		{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon fa fa-save "></i> Simpan</button>--}}
	</div>
</div>


<div class="modal fade" id="m-nilai-tugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
			<input name="_method" type="hidden" value="PUT">
			@csrf
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Jumlah Presentasi Nilai Tugas Akhir
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group m-form__group">
					</div>
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
    });

	function penilaian(theForm) {
	    console.log();
	    console.log(theForm.value);
		var tugas = JSON.parse(theForm.id)[0];
		var detail_calon_anggota = JSON.parse(theForm.id)[1];
//        document.body.style.cursor='wait';
		if((theForm.value) < 0 || (theForm.value) > 100 ){
//            $('#alert-nilai').attr('<span>', 'nilai yang dimasukkan salah')
            swal({
                title : 'Oops',
                text : 'nilai yang Anda masukkan salah',
                type : 'warning'
            },function(){
                location.reload() ;
            });
		}else{
            $.ajax({ // create an AJAX call...
                data: {
                    id_detail_calon_anggota: detail_calon_anggota.id,
                    id_tugas: tugas.id,
                    nilai_tugas: theForm.value,
                }, // get the form data
                type: 'POST', // GET or POST
                url: '{{ url('/') }}/api/penilaian/simpan', // the file to call
                success: function (response) { // on success..
                    console.log(response); // update the DIV
//                window.onload = function(){document.body.style.cursor='default';}
                }
            });
		}

    }

    function totalTugas(theForm) {
        console.log();
        console.log(theForm.value);
        var tugas = JSON.parse(theForm.id)[0];
        var detail_calon_anggota = JSON.parse(theForm.id)[1];
        document.body.style.cursor='wait';

        $.ajax({ // create an AJAX call...
            data: {
                id_detail_calon_anggota: detail_calon_anggota.id,
                id_tugas: tugas.id,
                nilai_tugas: theForm.value,
            }, // get the form data
            type: 'POST', // GET or POST
            url: '{{ url('/') }}/api/penilaian/simpan', // the file to call
            success: function (response) { // on success..
                console.log(response); // update the DIV
//                window.onload = function(){document.body.style.cursor='default';}
            }
        });
    }

    function getTugas(id) {
        $.ajax({
            type: 'GET',
            url: '{{ url('/') }}/api/get/total/tugas/' + id,
            success: function (response) { // on success..
//				TODO :
                $(".badge-tugas-"+id).text(response * 100 + " %");
                console.log(response + " %");
            }
        });
    }

    function detail(id) {
        var datadata = {!! json_encode($detailCalonAnggota) !!};
        id = id-1;

        var idObject = datadata[id].id;

        $.ajax({ // create an AJAX call...
            data: {
                id_detail_calon_anggota: detail_calon_anggota.id,
                id_tugas: tugas.id,
                nilai_tugas: theForm.value,
            }, // get the form data
            type: 'POST', // GET or POST
            url: '{{ url('/') }}/api/penilaian/simpan', // the file to call
            success: function (response) { // on success..
                console.log(response); // update the DIV
//                window.onload = function(){document.body.style.cursor='default';}
            }
        });

        $('#m-nilai-tugas').modal('show');
    }
//    $(document).ready( function () {
//        $("#nilai").change(function () {
//            var nilai = $('#nilai').val();
//            console.log("hai keubah");
//        });
//    });
</script>

@endsection