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
                                    {{--<div class="col-md-1"></div>--}}
                                    {{--<div class="col-md-2">--}}
                                        {{--<h6 class="pull-right">Deadline:</h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--<input type="text" name="deadlineTugas" id="m_datepicker_1" onchange="pilihDeadline(this)" class="form-control m-input m-input--air">--}}
                                    {{--</div>--}}
                                        <label class="col-form-label col-lg-3 col-sm-12">
                                            Deadline
                                        </label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <div class="input-daterange input-group" id="m_datepicker_5">
                                                <input onchange="pilihDeadlineAwal(this)" type="text" class="form-control m-input" name="start" />
                                                <div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-ellipsis-h"></i>
													</span>
                                                </div>
                                                <input onchange="pilihDeadlineAkhir(this)" type="text" class="form-control" name="end" />
                                            </div>
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
    <script src="{{ url('assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

        var deadlineAwal = null;
        var deadlineAkhir = null;
        var selectedDepartemen = 0;

        $(document).ready( function () {

            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });

            refreshTable();

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

        {{--function pilihDepartemen(selectObject) {--}}

            {{--var table = $('.myTableDataTable').DataTable({--}}
                {{--destroy: true,--}}
                {{--ajax:"{{ url('api/tugas/departemen') }}/" + selectObject.value,--}}
                {{--columns: [--}}
                    {{--{--}}
                        {{--"data": "id",--}}
                        {{--render: function (data, type, row, meta) {--}}
                            {{--return meta.row + meta.settings._iDisplayStart + 1;--}}
                        {{--}--}}
                    {{--}, // for automatic numerization--}}
                    {{--{ data: 'nama_tugas', name: 'nama_ktugas' },--}}
                    {{--{ data: 'deskripsi', name: 'deskripsi' },--}}
                    {{--{ data: 'deadline', name: 'deadline' },--}}
                    {{--{ data: 'departemen', name: 'departemen' },--}}
                {{--]--}}
            {{--});--}}


        {{--}--}}

        function pilihDepartemen(obj) {
            selectedDepartemen = obj.value;
            console.log("Departemen= "+selectedDepartemen);
            refreshTable();
        }

        function pilihDeadlineAwal(obj) {
            deadlineAwal = obj.value;
            console.log("DeadlineAwal= "+deadlineAwal);
            refreshTable();
        }

        function pilihDeadlineAkhir(obj) {
            deadlineAkhir = obj.value;
            console.log("DeadlineAkhir= "+deadlineAkhir);
            refreshTable();
        }

        {{--function pilihDeadline(selectObject) {--}}

            {{--var table = $('.myTableDataTable').DataTable({--}}
                {{--destroy: true,--}}
                {{--ajax:"{{ url('api/tugas/deadline') }}/" + selectObject.value,--}}
                {{--columns: [--}}
                    {{--{--}}
                        {{--"data": "id",--}}
                        {{--render: function (data, type, row, meta) {--}}
                            {{--return meta.row + meta.settings._iDisplayStart + 1;--}}
                        {{--}--}}
                    {{--}, // for automatic numerization--}}
                    {{--{ data: 'nama_tugas', name: 'nama_tugas' },--}}
                    {{--{ data: 'deskripsi', name: 'deskripsi' },--}}
                    {{--{ data: 'deadline', name: 'deadline' },--}}
                    {{--{ data: 'departemen', name: 'departemen' },--}}
                {{--]--}}
            {{--});--}}
        {{--}--}}

        function refreshTable() {
            var table = $('.myTableDataTable').DataTable({
                destroy: true,
                ajax: {
                    "url": "{{ url('api/tugas/refresh') }}",
                    "data": {
                        "id_departemen": selectedDepartemen,
                        "deadline_start": deadlineAwal,
                        "deadline_end": deadlineAkhir
                    },
                },
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