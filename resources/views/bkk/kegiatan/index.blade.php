@extends('layouts.kadept')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        {{--<div class="m-subheader ">--}}
            {{--<div class="d-flex align-items-center">--}}
                {{--<div class="mr-auto">--}}
                    {{--<h3 class="m-subheader__title m-subheader__title--separator">--}}
                        {{--Kegiatan--}}
                    {{--</h3>--}}
                    {{--<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">--}}
                        {{--<li class="m-nav__item m-nav__item--home">--}}
                            {{--<a href="#" class="m-nav__link m-nav__link--icon">--}}
                                {{--<i class="m-nav__link-icon la la-home"></i>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="m-nav__separator">--}}
                            {{-----}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- END: Subheader -->
        <div class="m-content">
            {{--m-portlet m-portlet--success m-portlet--head-solid-bg--}}
            {{--<div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--head-sm">--}}
            <div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
                {{--m-portlet m-portlet--accent m-portlet--head-solid-bg m-portlet--head-sm--}}
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                <i class="m-nav__link-icon flaticon-interface-1"></i> - Kegiatan
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
                                    <div class="col-md-2">
                                        <h6 class="pull-right">Departemen:</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="filterDept" class="custom-select form-control col-md-12" onchange="pilihDepartemen(this)">
                                            <option value="0">Semua Departemen</option>
                                            @foreach($departemen as $key)
                                                <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    {{--<button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m-tambah-kegiatan"><i class="m-menu__link-icon flaticon-plus"></i> Tambah</button>--}}
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
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Departemen</th>
                            <th>Jumlah Hadir</th>
                            {{--<th>Aksi</th>--}}
                        </tr>
                        </thead>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}

    {{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
    <script type="text/javascript">

        $(document).ready( function () {
            pilihDepartemen($('#filterDept'));

            @if (\Illuminate\Support\Facades\Session::has('message'))
            swal({
                title : 'Sukses',
                text : '{{ \Illuminate\Support\Facades\Session::get('message') }}',
                type : 'success'
            });
                    @endif

                    @if ($errors->any())
            var htmlText = '';

            @foreach ($errors->all() as $error)
                htmlText += '{{ $error }}\n';
            @endforeach

            swal({
                title : 'Gagal',
                text : htmlText,
                type : 'error'
            });
            @endif
        } );

        function pilihDepartemen(selectObject) {

            var table = $('.myTableDataTable').DataTable({
                destroy: true,
                ajax:"{{ url('api/kegiatan/departemen') }}/" + selectObject.value,
                columns: [
                    {
                        "data": "id",
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, // for automatic numerization
                    { data: 'nama_kegiatan', name: 'nama_kegiatan' },
                    { data: 'tanggal_kegiatan', name: 'tanggal_kegiatan' },
                    { data: 'waktu', name: 'waktu' },
                    { data: 'departemen', name: 'departemen' },
                    { data: 'jumlah_hadir', name: 'jumlah_hadir' },
                ]
            });


        }

    </script>

@endsection