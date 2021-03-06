@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Data Calon
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
								Data Calon
							</span>
						</a>
					</li>
					<li class="m-nav__separator"></li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text"></span>
						</a>
					</li>
					<li class="m-nav__separator"></li>
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
		<div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							<i class="m-nav__link-icon flaticon-users"></i> - Calon Anggota
						</h3>
					</div>
				</div>
			</div>

			
			<div class="m-portlet__body">
				<ul class="nav nav-tabs" role="tablist">
	              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#div-pil-1">Pilihan 1</a></li>
	              <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#div-pil-2">Pilihan 2</a></li>
	            </ul>	
					<!--begin: Datatable -->
				<div class="tab-content">
					<div id="div-pil-1" class="tab-pane active" role="tabpannel">
						<table id="data-calon-1" class="dt-responsive nowrap table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>No pil 1</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Hardskill</th>
									<th>Softskill</th>
									<th>Organisasi</th>
									<th>Kepanitiaan</th>
									<th>Minat</th>
									<th>Sumber Belajar Islam</th>
									<th>Riwayat Penyakit</th>
									<th>Asal</th>
									<th>Alamat Jogja</th>
									{{--<th>Departemen Pilihan</th>--}}
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							@php $i = 1; @endphp

							@foreach ($userCalon1 as $key)
								@if($key->first()->calonAnggota->id_periode == $activePeriode->id)

								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $key->first()->calonAnggota->nama_calon_anggota }}</td>
									<td>{{ $key->first()->calonAnggota->jenis_kelamin }}</td>
									<td>{{ $key->first()->calonAnggota->hardskill }}</td>
									<td>{{ $key->first()->calonAnggota->softskill }}</td>
									<td>{{ $key->first()->calonAnggota->pengalaman_organisasi }}</td>
									<td>{{ $key->first()->calonAnggota->pengalaman_kepanitiaan }}</td>
									<td>{{ $key->first()->calonAnggota->minat }}</td>
									<td>{{ $key->first()->calonAnggota->sumber_belajar_islam }}</td>
									<td>{{ $key->first()->calonAnggota->riwayat_penyakit }}</td>
									<td>{{ $key->first()->calonAnggota->asal }}</td>
									<td>{{ $key->first()->calonAnggota->alamat_jogja }}</td>
									{{--// TODO: join tabel detail (prioritas,dept pil duanya)--}}
									{{--<td>{{ $key->where('id_calon_anggota', $key->first()->calonAnggota->id)->departemen->nama_departemen }}</td>--}}
									<td>

										<button {{ $key->first()->favorit ? "disabled" : "" }} onclick="star(this)" id="[{{ json_encode($key->first()) }}]" class="btn btn-warning btn-favorit-{{ $key->first()->id }}"><i class="m-menu__link-icon flaticon-star"></i> Favorit</button>
										<button {{ $key->first()->favorit ? "" : "disabled" }} onclick="clickBatal(this)" id="{{ json_encode($key) }}" class="btn btn-danger btn-batal-favorit-{{ $key->first()->id }}" >Batal</button>
										{{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-rotate-right"></i></a>--}}

									</td>
								</tr>
								@endif
							@endforeach
							</tbody>
						</table>
					<!--end: Datatable -->
					</div>

					<!-- Tab 2 -->
					<div id="div-pil-2" class="tab-pane " role="tabpannel">
						<table id="data-calon-2" class="dt-responsive nowrap table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>No pil 2</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Hardskill</th>
									<th>Softskill</th>
									<th>Organisasi</th>
									<th>Kepanitiaan</th>
									<th>Minat</th>
									<th>Sumber Belajar Islam</th>
									<th>Riwayat Penyakit</th>
									<th>Asal</th>
									<th>Alamat Jogja</th>
									{{--<th>Departemen Pilihan</th>--}}
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							@php $i = 1; @endphp

							@foreach ($userCalon2 as $key)
								@if($key->first()->calonAnggota->id_periode == $activePeriode->id)

								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $key->first()->calonAnggota->nama_calon_anggota }}</td>
									<td>{{ $key->first()->calonAnggota->jenis_kelamin }}</td>
									<td>{{ $key->first()->calonAnggota->hardskill }}</td>
									<td>{{ $key->first()->calonAnggota->softskill }}</td>
									<td>{{ $key->first()->calonAnggota->pengalaman_organisasi }}</td>
									<td>{{ $key->first()->calonAnggota->pengalaman_kepanitiaan }}</td>
									<td>{{ $key->first()->calonAnggota->minat }}</td>
									<td>{{ $key->first()->calonAnggota->sumber_belajar_islam }}</td>
									<td>{{ $key->first()->calonAnggota->riwayat_penyakit }}</td>
									<td>{{ $key->first()->calonAnggota->asal }}</td>
									<td>{{ $key->first()->calonAnggota->alamat_jogja }}</td>
									{{--// TODO: join tabel detail (prioritas,dept pil duanya)--}}
									{{--<td>{{ $key->where('id_calon_anggota', $key->first()->calonAnggota->id)->departemen->nama_departemen }}</td>--}}
									<td>

										<button {{ $key->first()->favorit ? "disabled" : "" }} onclick="star(this)" id="[{{ json_encode($key->first()) }}]" class="btn btn-warning btn-favorit-{{ $key->first()->id }}"><i class="m-menu__link-icon flaticon-star"></i> Favorit</button>
										<button {{ $key->first()->favorit ? "" : "disabled" }} onclick="clickBatal(this)" id="{{ json_encode($key) }}" class="btn btn-danger btn-batal-favorit-{{ $key->first()->id }}" >Batal</button>
										{{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-rotate-right"></i></a>--}}

									</td>
								</tr>
								@endif
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
{{--<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">--}}
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.dataTables.min.css"> -->
{{--<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css" type="text/css">--}}
{{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
<!-- <script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js" type="text/javascript"></script> -->
<script type="text/javascript" src="{{ url('/js/dataTables.fixedColumns.min.js') }}"></script>
<script type="text/javascript">
    // $(document).ready( function () {
    //     $('.myTableDataTable').DataTable();
    //
    //
    //
    // } );
    $(document).ready(function() {
        var table = $('#data-calon-1').DataTable( {
            paging:         true,
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            fixedColumns:   {
                leftColumns: 3,
                rightColumns: 1,
            }
        } );

        var table2 = $('#data-calon-2').DataTable( {
            paging:         true,
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            fixedColumns:   {
                leftColumns: 3,
                rightColumns: 1,
            }
        } );


        // Tab trigger
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var currentTab = $(e.target).text(); // get current tab
			console.log(currentTab);
            switch (currentTab) {
                case 'Pilihan 1' :   //do nothing
					break ;
                case 'Pilihan 2' :
                    table2.columns.adjust().draw();
                    break ;
                default: //do nothing
					break ;
            }
        }) ;
    } );

    function star(theForm){
        var detail_calon_anggota = JSON.parse(theForm.id)[0];
        console.log(detail_calon_anggota.id_departemen);


            $.ajax({
                data: {
                    id_detail_calon_anggota: detail_calon_anggota.id,
                    id_departemen : detail_calon_anggota.id_departemen,
                    favorit : 1,

                },
                type: 'POST',
                url: '{{ url('/') }}/api/star/simpan',
                success: function (response) { // on success..
                    console.log(response); // update the DIV
					$('.btn-favorit-'+detail_calon_anggota.id).prop('disabled', true);
					$('.btn-batal-favorit-'+detail_calon_anggota.id).prop('disabled', false);
                    swal({
                        title : 'Sukses',
                        text : 'Berhasil menjadi favorit !',
                        type : 'success'
                    },function(){
                        location.reload() ;
                    });

                }
            });


    }

    function clickBatal(theForm) {
        var detail_calon_anggota = JSON.parse(theForm.id)[0];
        console.log(detail_calon_anggota.id_departemen);


        $.ajax({
            data: {
                id_detail_calon_anggota: detail_calon_anggota.id,
                id_departemen: detail_calon_anggota.id_departemen,
                favorit: 0,

            },
            type: 'POST',
            url: '{{ url('/') }}/api/star/simpan',
            success: function (response) { // on success..
                $('.btn-favorit-'+detail_calon_anggota.id).prop('disabled', false);
                $('.btn-batal-favorit-'+detail_calon_anggota.id).prop('disabled', true);
                console.log(response); // update the DIV
                swal({
                    title : 'Sukses',
                    text : 'Berhasil membatalkan favorit !',
                    type : 'success'
                },function(){
                    location.reload() ;
                });

            }
        });
    }
</script>

@endsection