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
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Jenis Kelamin</th>
                            <th rowspan="2">Pilihan 1</th>
                            <th colspan="3"><center>Nilai 1</center></th>
                            <th rowspan="2">Pilihan 2</th>
                            <th colspan="3"><center>Nilai 2</center></th>
                            <th rowspan="2">Rekomendasi</th>
                            <th rowspan="2">Aksi</th>
                            <th rowspan="2">Dept Fix</th>
                        </tr>
                        <tr>
                            <th width="10px">Nilai</th>
                            <th width="10px">Tugas</th>
                            <th width="10px">Skill</th>
                            <th width="10px">Nilai</th>
                            <th width="10px">Tugas</th>
                            <th width="10px">Skill</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach ($calonAnggota as $key)--}}
                            <tr>
                                <td>1</td>
                                <td>Ria</td>
                                <td>Perempuan</td>
                                <td>MC</td>
                                <td>10</td>
                                <td>20</td>
                                <td>30</td>
                                <td>Infokes</td>
                                <td>10</td>
                                <td>20</td>
                                <td>30</td>
                                <td>Infokes</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-check"></i></a>
                                    {{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="fa fa-rotate-right"></i></a>--}}

                                </td>
                                <td>
                                    <select class="custom-select form-control col-md-8">
                                        {{--TODO: selected--}}
                                        <option selected>
                                            Pilih Departemen
                                        </option>
                                        @foreach($departemen as $key)
                                            <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>

                        {{--@endforeach--}}
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
                    rightColumns: 2,
                }
            } );
        } );
    </script>
    <style type="text/css">

    </style>

@endsection