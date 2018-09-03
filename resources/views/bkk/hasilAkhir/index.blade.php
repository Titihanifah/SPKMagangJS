@extends('layouts.kadept')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Hasil Akhir
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
								Hasil Akhir
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
            <div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                <i class="m-menu__link-icon flaticon-list-3"></i> - Hasil Akhir
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin: Search Form -->

                    <!--end: Search Form -->
                    <!--begin: Datatable -->
                    <table id="hasil_akhir" class="dt-responsive nowrap table table-striped bordered-table" style="width:100%">
                        <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Jenis Kelamin</th>
                            <th rowspan="2">Departemen</th>
                            {{--<th rowspan="2">Pilihan 1</th>--}}
                            <th colspan="3"><center>Nilai 1</center></th>
                            <th rowspan="2">Rekomendasi 1</th>
                            <th rowspan="2">Rekomendasi 2</th>
                            {{--<th rowspan="2">Pilihan 2</th>--}}
                            <th colspan="3"><center>Nilai 2</center></th>

                            {{--<th rowspan="2">Aksi</th>--}}
                            <th rowspan="2">Departemen Akhir</th>
                        </tr>
                        <tr>
                            <th>Kehadiran</th>
                            <th>Tugas</th>
                            <th>Hasil</th>

                            <th>Kehadiran</th>
                            <th>Tugas</th>
                            <th>Hasil</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        {{--@php dd($detailCalonAnggotas) @endphp--}}
                        @foreach ($detailCalonAnggotas as $key)
                            @if($key->first()->calonAnggota->id_periode == $activePeriode->id)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $key->where('prioritas',1)->first()->calonAnggota->nama_calon_anggota }} {{ $key->first()->favorit ? "⭐" : "" }}</td>
                                <td>{{ $key->where('prioritas',1)->first()->calonAnggota->jenis_kelamin }}</td>
                                <td>1: {{ $key->where('prioritas', 1)->first()->departemen->nama_departemen }}<br>2: {{ $key->where('prioritas', 2)->first()->departemen->nama_departemen }}</td>
                                {{--<td>{{ $key->first()->departemen->nama_departemen }}</td>--}}
                                <td>{{ $key->where('prioritas',1)->first()->nilai_kehadiran }}</td>
                                <td>{{ $key->where('prioritas',1)->first()->nilai_tugas }}</td>
                                <td>{{ $key->where('prioritas',1)->first()->total_nilai }}</td>
                                <td data-toggle="m-tooltip" title="{{ $key->where('prioritas',1)->first()->keterangan }}" data-skin="dark">{{ $key->first()->rekomendasi }}</td>
                                <td data-toggle="m-tooltip" title="{{ $key->where('prioritas',1)->first()->keterangan }}" data-skin="dark">{{ $key[1]->rekomendasi }}</td>
                                {{--<td>{{ $key[1]->departemen->nama_departemen }}</td>--}}
                                <td>{{ $key->where('prioritas',2)->first()->nilai_tugas }}</td>
                                <td>{{ $key->where('prioritas',2)->first()->nilai_kehadiran }}</td>
                                <td>{{ $key->where('prioritas',2)->first()->total_nilai }}</td>
                                <td>
                                    <select class="custom-select form-control col-md-12">
                                        {{--TODO: selected--}}
                                        <option selected>
                                            Pilih Departemen
                                        </option>
                                        @foreach($departemen as $key)
                                            <option  value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </td>

                            </tr>
                            @endif
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    {{--<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css" type="text/css">--}}
    {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
    <script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready( function () {
            $('.myTableDataTable').DataTable();
        } );
        $(document).ready(function() {
            var table = $('#hasil_akhir').DataTable( {
                paging:         true,
                scrollY:        false,
                scrollX:        true,
                scrollCollapse: true,
                fixedColumns:   {
                    leftColumns: 4,
                    rightColumns: 1,
                }
            } );
        } );


        function setDepartemen(theForm) {
            var departemen = JSON.parse(theForm.id)[0];
            var calon_anggota = JSON.parse(theForm.id)[1];
//            $(".hadir-"+kegiatan.id+"-"+detail_calon_anggota.id).hide();
//            $(".tidakhadir-"+kegiatan.id+"-"+detail_calon_anggota.id).show();
            $.ajax({
                data : {
                    nama_departemen: departemen.nama_departemen,
                    id_calon: calon_anggota.id,
                },
                type: 'POST',
                url: '{{ url('/') }}/api/hasilakhir/simpan',
                success: function (response) { // on success..
                    console.log(response); // update the DIV
//                window.onload = function(){document.body.style.cursor='default';}
                }
            });
        }
    </script>
    <style type="text/css">

    </style>

@endsection