@extends('layouts.kadept')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Data Tugas
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
								Data Tugas
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
                                <i class="m-menu__link-icon flaticon-clipboard"></i> - Tugas
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
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h6 class="pull-right">Deadline:</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <input readonly type="text" name="deadlineTugas" id="m_datepicker_1" onchange="pilihDeadline(this)" class="form-control m-input m-input--air">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form -->
                    <!--begin: Datatable -->
                    <table class="myTableDataTable table table-striped table-bordered" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tugas</th>
                            <th>Deskripsi</th>
                            <th>Deadline</th>
                            <th>Departemen</th>
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

    <script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    <script type="text/javascript">

        $(document).ready( function () {
            pilihDepartemen($('#filterDept'));

            $("#m_datepicker_1").datepicker({
                todayHighlight: !0,
                orientation: "bottom left",
                format: 'yyyy-mm-dd',
                templates: {
                    leftArrow: '<i class="la la-angle-left"></i>',
                    rightArrow: '<i class="la la-angle-right"></i>'
                }
            });
            pilihDeadline($('input[name="deadlineTugas"]'));


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
                ajax:"{{ url('api/tugas/departemen') }}/" + selectObject.value,
                columns: [
                    {
                        "data": "id",
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, // for automatic numerization
                    { data: 'nama_tugas', name: 'nama_ktugas' },
                    { data: 'deskripsi', name: 'deskripsi' },
                    { data: 'deadline', name: 'deadline' },
                    { data: 'departemen', name: 'departemen' },
                ]
            });


        }

        function pilihDeadline(selectObject) {

            var table = $('.myTableDataTable').DataTable({
                destroy: true,
                ajax:"{{ url('api/tugas/deadline') }}/" + selectObject.value,
                columns: [
                    {
                        "data": "id",
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, // for automatic numerization
                    { data: 'nama_tugas', name: 'nama_tugas' },
                    { data: 'deskripsi', name: 'deskripsi' },
                    { data: 'deadline', name: 'deadline' },
                    { data: 'departemen', name: 'departemen' },
                ]
            });
        }

    </script>

@endsection