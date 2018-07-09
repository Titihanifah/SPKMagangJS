@extends('layouts.kadept')
@section('content')

<?php //dd($userKegiatan[0]->departemen->kegiatans); ?>

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

								</div>
								<div class="col-md-5">									
								</div>
								<div class="col-md-3">

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

				<table id="presensi" class="dt-responsive nowrap table table-striped bordered-table" id="html_table" width="100%">
					<thead>

					<tr>
						<th>No</th>
						<th>Nama Calon</th>
						<th>Jenis Kelamin</th>
						<th>Total</th>
                        <?php $i=0; ?>
						@foreach($userKegiatan->departemen->kegiatans->where('id_periode', $activePeriode->id) as $key)
                            <th>{{  $key->nama_kegiatan }}</th>

                            <?php $i++; ?>
						@endforeach

						{{--<th>Aksi</th>--}}
					</tr>
					</thead>
					<tbody>
					{{--// TODO: sepertinya ini tabel presensi namun karena ada id kegiatan jadi bingung deh--}}
					@php $i= 1; @endphp
					@foreach($detailCalonAnggota as $calon)
							<tr>

							<td width="10%"><?php echo $i; ?></td>
							<td>{{ $calon->calonAnggota->nama_calon_anggota }}</td>
							<td>{{ $calon->calonAnggota->jenis_kelamin }}</td>

							{{--@if( $calon->kehadiran_calon > 80 && $calon->kehadiran_calon >= 50)--}}
								{{--<td >--}}
									{{--TODO: progress sesuai dengan jumlah kehadiran dan jika kurang dari setengah merah warnanya--}}
									{{----}}
									{{--<span class="m-badge m-badge--success m-badge--wide badge-kehadiran-{{ $calon->id }}">--}}
											{{--{{ $calon->kehadiran_calon }} %--}}
										{{--</span>--}}
								{{--</td>--}}
								{{--@elseif( $calon->kehadiran_calon < 80 && $calon->kehadiran_calon > 35 )--}}
									{{--<td >--}}
										{{--TODO: progress sesuai dengan jumlah kehadiran dan jika kurang dari setengah merah warnanya--}}
										{{----}}
										{{--<span class="m-badge m-badge--warning m-badge--wide badge-kehadiran-{{ $calon->id }}">--}}
											{{--{{ $calon->kehadiran_calon }} %--}}
										{{--</span>--}}
									{{--</td>--}}
								{{--@else--}}
									<td >
										{{--TODO: progress sesuai dengan jumlah kehadiran dan jika kurang dari setengah merah warnanya--}}

										<span class="m-badge m-badge--success m-badge--wide badge-kehadiran-{{ $calon->id }}">
											{{--{{ $calon->kehadiran_calon }} %--}}
										</span>
									</td>
								{{--@endif--}}
                            <?php $j = 0; ?>
                        {{--@for( //$k=0; $k<count($datas); $k++)--}}


                            @foreach($userKegiatan->departemen->kegiatans->where('id_periode', $activePeriode->id) as $keys)
                                @foreach($keys->presensi as $key)
									@if($key->id_detail_calon_anggota == $calon->id)
									<td>
										<label class="m-radio m-radio--solid m-radio--success">
											<input {{ ($key->kehadiran == 1 ? "checked" : "") }} type="radio" onclick="hadir(this)"  id="[{{ json_encode($key->id_kegiatan) }},{{ json_encode($calon) }}]" name="kehadiran[{{ json_encode($key) }},{{ json_encode($calon) }}]"  value="{{$key->kehadiran}}" > Hadir
											<span> </span>
										</label>
										<label class="m-radio m-radio--solid m-radio--danger">
											<input {{ ($key->kehadiran == 0 ? "checked" : "") }} type="radio" onclick="tidakhadir(this)" id="[{{ json_encode($key->id_kegiatan) }},{{ json_encode($calon) }}]" name="kehadiran[{{ json_encode($key) }},{{ json_encode($calon) }}]" value="{{$key->kehadiran}}" >Tidak Hadir
											<span> </span>
										</label>

									</td>
									@endif
                            	@endforeach
                            @endforeach
								{{--<td>--}}
									{{--<button class="btn m-button btn-success"><i class="-menu__link-icon flaticon-eye"></i></button>--}}
								{{--</td>--}}
						</tr>
							@php $i++ @endphp
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

<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" charset="utf8" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf8" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js" charset="utf8" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('.myTableDataTable').DataTable();

    } );

    $(document).ready(function() {
        var table = $('#presensi').DataTable( {
            paging:         true,
            scrollY:        false,
            scrollX:        true,
            scrollCollapse: true,
            fixedColumns:   {
                leftColumns: 4,
            }
        } );
    } );


    function tidakhadir(theForm) {
        var kegiatan = JSON.parse(theForm.id)[0];
        var detail_calon_anggota = JSON.parse(theForm.id)[1];
        console.log("Formvalue"+theForm.value);
        $.ajax({
            data: {
                id_detail_calon_anggota: detail_calon_anggota.id,
                id_kegiatan: kegiatan,
                kehadiran: 0,


            },
            type: 'POST',
            url: 'http://spkmagang.test:9000/api/presensi/simpan',
            success: function (response) { // on success..
                console.log(response); // update the DIV
				getPresensi(detail_calon_anggota.id);
            }
        });

    }

    function getPresensi(id) {
        $.ajax({
            type: 'GET',
            url: 'http://spkmagang.test:9000/api/get/total/kehadiran/' + id,
            success: function (response) { // on success..
                $(".badge-kehadiran-"+id).text(response * 100 + " %");
                console.log(response * 100 + " %");
            }
        });
    }

	function hadir(theForm) {
		var kegiatan = JSON.parse(theForm.id)[0];
		var detail_calon_anggota = JSON.parse(theForm.id)[1];
//            $(".hadir-"+kegiatan.id+"-"+detail_calon_anggota.id).hide();
//            $(".tidakhadir-"+kegiatan.id+"-"+detail_calon_anggota.id).show();
		$.ajax({
			data : {
				id_detail_calon_anggota: detail_calon_anggota.id,
				id_kegiatan: kegiatan,
				kehadiran: 1,
			},
			type: 'POST',
			url: 'http://spkmagang.test:9000/api/presensi/simpan',
			success: function (response) { // on success..
				console.log(response); // update the DIV
				getPresensi(detail_calon_anggota.id);
//                window.onload = function(){document.body.style.cursor='default';}
			}
		});
    }


</script>



@endsection