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
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Data Tugas
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
                                        <button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m-tambah-tugas"><i class="m-menu__link-icon flaticon-plus"></i> Tambah </button>
                                    </div>
                                    <div class="col-md-5">
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
                    <table class="m-datatable table-bordered dt-responsive nowrap bordered-table" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tugas</th>
                            <th>Deskripsi</th>
                            <th>Deadline</th>
                            <th>Departemen</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($tugas  as $key)
                            <tr>
                                <td><?php echo $i ?></td>
                                <td>{{ $key->nama_tugas }}</td>
                                <td>{{ $key->deskripsi }}</td>
                                <td>{{ $key->deadline }}</td>
                                <td>{{ $key->id_departemen }}</td>
                                <td>
                                    {{--<a href="#" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>--}}
                                    {{--<button onclick="edit({{ $i }})" data-nama_tugas="{{ $key->nama_tugas }}" data-deskripsi="{{ $key->deskripsi }}" data-deadline=""{{ $key->deadline }} class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" data-toggle="modal" data-target="#m_edit_tugas"><i class="m-menu__link-icon flaticon-edit-1"></i></button>--}}
                                    <a href="{{url('/tugas/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
                                </td>
                            </tr>
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

    <script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

    </script>

@endsection