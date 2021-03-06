@extends('layouts.kadept')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Kemampuan Tambahan
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
                                Kemampuan Tambahan
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
                                        <a href="#"  data-toggle="modal" data-target="#m-tambah-periode" class="btn m-btn--square  btn-outline-primary" ><i class="m-menu__link-icon flaticon-plus"></i> Tambah</a>
                                    </div>
                                    <div class="col-md-5">
                                        {{--<button class="btn m-btn--square  btn-outline-primary">Tambah</button>--}}
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
                    <table class="myTableDataTable table table-striped table-bordered" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kemampuan</th>
                            <th>Departemen</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Public speaking</td>
                                <td>Infokes</td>
                                <td></td>
                                <td>
                                    <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
                                    <a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-edit-1"></i></a>
                                    <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>

    {{--MODAL--}}
    <div class="modal fade" id="m-tambah-skill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Data Periode
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group">
                        <label for="">Tahun</label>
                        <input type="text" name="tahun" class="form-control m-input m-input--air" id="" aria-describedby="emailHelp" placeholder="2017">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="">Periode</label>
                        <input type="text" name="periode" class="form-control m-input m-input--air" id="" aria-describedby="emailHelp" placeholder="1439H">
                    </div>
                    <div class="m-form__group form-group">
                        <label for="">Status</label>
                        <div class="m-radio-inline">
                            <label class="m-radio">
                                <input type="radio" name="status" value="1">Aktif
                                <span></span>
                            </label>
                            <label class="m-radio">
                                <input type="radio" name="status" value="2">Tidak Aktif
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('js')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        <script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('.myTableDataTable').DataTable();
            } );

        </script>

@endsection