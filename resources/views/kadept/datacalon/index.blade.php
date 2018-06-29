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
		<div class="m-portlet m-portlet--tab">
		</div>
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Data Calon
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">

				<!--begin: Search Form -->

				<!--end: Search Form -->
				<!--begin: Datatable -->
				<table id="data-calon" class="dt-responsive nowrap table table-striped" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Hardskill</th>
							<th>Softskill</th>
							<th>Dept Pilihan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php $i = 1; ?>
					@foreach ($userCalon as $key)
						@if($key->calonAnggota->id_periode == $activePeriode->id)
						<tr>
							<td><?php echo $i ?></td>
							<td>{{ $key->calonAnggota->where('id_periode', $activePeriode->id)->first()->nama_calon_anggota }}</td>
							<td>{{ $key->calonAnggota->where('id_periode', $activePeriode->id)->first()->jenis_kelamin }}</td>
							<td>{{ $key->calonAnggota->where('id_periode', $activePeriode->id)->first()->hardskill }}</td>
							<td>{{ $key->calonAnggota->where('id_periode', $activePeriode->id)->first()->softskill }}</td>
							{{--// TODO: join tabel detail (prioritas,dept pil duanya)--}}
							<td>Infokes</td>
							<td>
								<button onclick="star( {{ $i }})" id="[{{ json_encode($key) }}]" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-star"></i></button>
								{{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-rotate-right"></i></a>--}}

							</td>
						</tr>
						@endif
                        <?php $i++ ?>
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

{{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
{{--<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.dataTables.min.css">
{{--<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css" type="text/css">--}}
{{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
<script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('.myTableDataTable').DataTable();
    } );
    $(document).ready(function() {
        var table = $('#data-calon').DataTable( {
            paging:         true,
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            fixedColumns:   {
                leftColumns: 2,
                rightColumns: 1,
            }
        } );
    } );

    function star(theForm){
        var calon_anggota = JSON.parse(theForm.id)[0];

        $.ajax({
            data: {
                id_calon_anggota: calon_anggota.id,
                white_card_dept_1: 1,

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

</style>

@endsection