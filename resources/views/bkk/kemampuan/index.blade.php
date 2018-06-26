@extends('layouts.kadept')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Kemampuan
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
								Kemampuan
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
                                Kemampuan
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
                                        <a href="#"  data-toggle="modal" data-target="#m-tambah-kemampuan" class="btn m-btn--square  btn-outline-primary" ><i class="m-menu__link-icon flaticon-plus"></i> Tambah</a>
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
                    <table class="myTableDataTable table table-striped table-bordered" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kemampuan</th>
                            {{--<th>Departemen</th>--}}
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($kemampuan as $key)
                            <tr>
                                <td><?php echo $i ?></td>
                                <td>{{ $key->nama_kemampuan }}</td>
{{--                                <td>{{ $key->departemen }}</td>--}}
                                <td>
                                {{--<a href="#"  data-toggle="modal" data-target="#m-tambah-periode" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-plus"></i></a>--}}
                                <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
                                    {{--<a href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-edit-1"></i></a>--}}
                                    <button onclick="edit({{ $i }})" data-nama_kemampuan="{{ $key->nama_kemampuan }}" data-departemen="{{ $key->departemen }}" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button>
                                    <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
                                    {{--<a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>--}}
                                    <a href="{{url('admin/kemampuan/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>
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

    {{--MODAL--}}
    <div class="modal fade" id="m-tambah-kemampuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Kemampuan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('route' => 'kemampuan.store', 'enctype' => 'multipart/form-data')) !!}
                    <div class="form-group m-form__group">
                        <label for="">Kemampuan</label>
                        <input type="text" name="nama_kemampuan" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Kemampuan">
                    </div>
                    {{--<div class="form-group m-form__group">--}}
                        {{--<label for="">Departemen</label>--}}
                        {{--<input type="text" name="departemen" class="form-control m-input m-input--air"  aria-describedby="emailHelp" placeholder="0.5">--}}
                    {{--</div>--}}
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="m-edit-kemampuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Edit Data Kemampuan
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group m-form__group">
                            <label for="">Nama Kemampuan</label>
                            <input type="text" id="nama_kemampuan" name="nama_kemampuan" class="form-control m-input m-input--air">
                        </div>
                        {{--<div class="form-group m-form__group">--}}
                            {{--<label for="">Departemen</label>--}}
                            {{--<input type="text" id="departemen" name="departemen" class="form-control m-input m-input--air">--}}
                        {{--</div>--}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('js')

    <script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    <script type="text/javascript">
        $(document).ready( function () {
            $('.myTableDataTable').DataTable();
        } );

        function edit(id) {
            var datadata = {!! json_encode($kemampuan) !!};
            id = id-1;

            console.log(datadata[id]);
            var idObject = datadata[id].id;
            var nama_kemampuan = datadata[id].nama_kemampuan;
            var departemen = datadata[id].departemen;

            $('#nama_kemampuan').val(nama_kemampuan);
            $('#departemen').val(departemen);
            var url = "http://spkmagang.test:9000/admin/kemampuan/" + (idObject);
            document.getElementById("edit_form").action = url;

            $('#m-edit-kemampuan').modal('show');
        }
    </script>
@endsection