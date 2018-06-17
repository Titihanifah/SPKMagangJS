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
							<span class="m-nav__link-text">
								Penilaian Tugas
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
							Penilaian Tugas
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin: Search Form -->
				{{--{!! Form::open(array('route' => 'penilaianTugas', 'enctype' => 'multipart/form-data')) !!}--}}
					<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
						<div class="row align-items-center">
							<div class="col-xl-12 order-2 order-xl-1">
								<div class="form-group m-form__group row align-items-center">
									<div class="col-md-4">
										<button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m_tambah_tugas"><i class="m-menu__link-icon fa fa-save "></i> Simpan</button>
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
							<th title="Field #1">No</th>
							<th title="Field #2">Nama Calon</th>
							<th>Nilai Akhir</th>
							@foreach($userTugas->departemen->tugas as $key)
							<th title="Field #3">{{ $key->nama_tugas }}</th>
							@endforeach
						</tr>
					</thead>
					<tbody>
					@foreach($calonAnggota as $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->nama_calon_anggota }}</td>
							{{--TODO: nilai akhir pakai perhitungan--}}
							<td>Nilai Akhir (90) </td>
							@foreach($userTugas->departemen->tugas as $key)

                                @if($detailTugas->where('id_calon_anggota', $value->id)->where('id_tugas', $key->id)->first() === null){
                                <td><input min="0"  max="100" id="[{{ json_encode($key) }},{{ json_encode($value) }}]" class="form-control m-input" onchange="penilaian(this)" type="number" placeholder="nilai" ></td>
                                @else
                                <td><input min="0"  max="100" id="[{{ json_encode($key) }},{{ json_encode($value) }}]" class="form-control m-input" onchange="penilaian(this)" type="number" value="{{ $detailTugas->where('id_calon_anggota', $value->id)->where('id_tugas', $key->id)->first()->nilai_tugas }}" ></td>

                            @endif
							{{--<td><input class="form-control m-input"  type="text" placeholder="nilai" ></td>--}}
							@endforeach
						</tr>
					@endforeach
																
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
	function penilaian(theForm) {
	    console.log();
	    console.log(theForm.value);
		var tugas = JSON.parse(theForm.id)[0];
		var calon_anggota = JSON.parse(theForm.id)[1];
        document.body.style.cursor='wait';

        $.ajax({ // create an AJAX call...
            data: {
                id_calon_anggota: calon_anggota.id,
                id_tugas: tugas.id,
                nilai_tugas: theForm.value,
			}, // get the form data
            type: 'POST', // GET or POST
            url: 'http://spkmagang.test:9000/api/penilaian/simpan', // the file to call
            success: function (response) { // on success..
                console.log(response); // update the DIV
                window.onload = function(){document.body.style.cursor='default';}
            }
        });
    }
    $(document).ready( function () {
        $("#nilai").change(function () {
            var nilai = $('#nilai').val();
            console.log("hai keubah");
        });
    });
</script>

@endsection