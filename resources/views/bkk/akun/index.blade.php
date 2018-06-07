@extends('layouts.kadept')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Akun
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
                                Data Akun
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
                                        <button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m-tambah-akun"><i class="m-menu__link-icon flaticon-plus"></i> Tambah</button>
                                    </div>
                                    <div class="col-md-5">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input" placeholder="Search..."
                                                   id="generalSearch">
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
                    <table class="m-datatable" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            {{--TODO: password apakah ditampilkan dalam tabel--}}
                            <th>Password</th>
                            <th>Role</th>
                            <th>Departemen</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach ($user as $key)

                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>{{ $key->name }}</td>
                                {{--TODO: kalo tambahin role nya BKK ada emailnya--}}
                                <td>{{ $key->password }}</td>
                                <td>{{ $key->role }}</td>
                                <td>{{ $key->id_departemen }}</td>
                                <td>
                                    <button onclick="edit({{ $i }})" data-name="{{ $key->name }}" data-role="{{ $key->role }}" data-id_departemen="{{ $key->id_departemen }}" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button>
                                    <a href="{{url('/admin/akun/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>

                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="m-tambah-akun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Data Akun
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
                    </button>
                </div>
                <div class="modal-body">

                    {!! Form::open(array('route' => 'akun.store', 'enctype' => 'multipart/form-data')) !!}
                    <div class="form-group m-form__group">
                        <label for="">
                            Username
                        </label>
                        <input type="text" name="name" class="form-control m-input m-input--air" id="exampleInputEmail1" placeholder="Username">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="">
                            Role
                        </label>
                        <input type="text" name="role" class="form-control m-input m-input--air" id="exampleInputEmail1"  placeholder="Role">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="">
                            Departemen
                        </label>
                        <input type="text" name="id_departemen" class="form-control m-input m-input--air" id="exampleInputEmail1"  placeholder="Departemen">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <div class="modal fade" id="m-edit-akun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Edit Data Akun
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group m-form__group">
                            <label for="">Username</label>
                            <input type="text" id="name" name="name" class="form-control m-input m-input--air">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="">Role</label>
                            <input type="text" id="role" name="role" class="form-control m-input m-input--air">
                        </div>
                        <div class="form-group m-form__group">
                            {{--TODO : ini harusnya droopdown--}}
                            <label for="">Departemen</label>
                            <input type="text" name="id_departemen" id="id_departemen" class="form-control m-input m-input--air">
                        </div>
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

    <script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}"
            type="text/javascript"></script>
    <script type="text/javascript">
        function edit(id) {
            var datadata = {!! json_encode($user) !!};
            id = id-1;

            console.log(datadata[id]);
            var idObject = datadata[id].id;
            var name = datadata[id].name;
            var role = datadata[id].role;
            var id_departemen = datadata[id].id_departemen;

            $('#name').val(name);
            $('#role').val(role);
            $('#id_departemen').val(id_departemen);

            var url = "http://spkmagang.test:9000/admin/akun/" + (idObject);
            document.getElementById("edit_form").action = url;

            $('#m-edit-akun').modal('show');
        }
    </script>

@endsection