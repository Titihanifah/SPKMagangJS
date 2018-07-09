@extends('layouts.kadept')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Penilaian Kemampuan
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
								Penilaian Kemampuan
							</span>
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
		<div class="m-section">
			<div class="m-section__content">
				<!--begin::Preview-->
				<div class="m-demo">
					<div class="m-demo__preview" style="background: #c8d6e5;">
						<h3 class="m-section__heading">
							Penilaian Kemampuan
							<hr>
						</h3>

                        <?php $i=1; ?>
						@foreach($kemampuan as $key)

							<div class="m-list-badge">
								<div class="m-list-badge__items">
									<div href="#" class="m-list-badge__item">
                                        <?php echo $i ?>
									</div>
								</div>
								<div class="m-list-badge__label m--font-primary">
									<div class="col-md-12">
										{{ $key->nama_kemampuan }}
									</div>
								</div>
							</div>
                            <?php $i++ ?>
						@endforeach
					</div>

					</div>
				</div>
			</div>
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
									{{--<a href="#"  data-toggle="modal" data-target="#m-tambah-kriteria" class="btn m-btn--square  btn-outline-primary" ><i class="m-menu__link-icon flaticon-save"></i> Simpan</a>--}}
								</div>
								<div class="col-md-5">
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
					{{--TODO: sepertinya ini belum ada tabelnya :D--}}
						<tr>
							<th>No</th>
							<th>Nama Calon</th>
							<th>Jenis Kelamin</th>
							<th>Rekap Kemampuan</th>
							<?php $i=1; ?>
							@foreach($kemampuan as$key)
                                <th><?php echo $i ?></th>
                                <?php $i++; ?>
							@endforeach
						</tr>
					</thead>
					<tbody>
                    <?php $i=1; ?>
					@foreach($detailCalonAnggota as $calon)
						<tr>
							<td width="10%"><?php echo $i; ?></td>
							<td>{{ $calon->calonAnggota->nama_calon_anggota }}</td>
							<td>{{ $calon->calonAnggota->jenis_kelamin }}</td>
							<td>
								{{--TODO: progress sesuai dengan jumlah kehadiran dan jika kurang dari setengah merah warnanya--}}
								<div class="progress">
									<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="m--space-10"></div>
							</td>
							@foreach($kemampuan as $key)
							<td>
								<!-- <input class="form-control m-input" type="text" value="50" > -->
								<div class="m-checkbox-list">
									<label class="m-checkbox m-checkbox--solid m-checkbox--success">
										<input onchange="kepunyaanSkill(this)" id="[{{ json_encode($key) }},{{ json_encode($calon) }}]" type="checkbox">
										<span></span>
									</label>
								</div>
							</td>
							@endforeach

						</tr>
                        <?php $i++; ?>
						@endforeach

					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
		{{--<button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon fa fa-save "></i> Simpan</button>--}}
	</div>
</div>

@endsection

@section('js')

<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('.myTableDataTable').DataTable();
        } );

        function kepunyaanSkill(theForm) {
			var kemampuan = JSON.parse(theForm.id)[0];
			var calon_anggota = JSON.parse(theForm.id)[1];

			$.ajax({
				data : {
				  	id_calon_anggota : calon_anggota.id,
                    id_kemampuan_tambahan: kemampuan.id,
					kepunyaan: 1,
				},
			type: 'POST',
			url: '{{ url('/') }}/api/kemampuan/simpan',
			success: function (response) { // on success..
			console.log(response); // update the DIV

            	}
			});

        }
    </script>

@endsection