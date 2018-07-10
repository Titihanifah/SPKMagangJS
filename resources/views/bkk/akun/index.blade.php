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
            <div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                <i class="m-menu__link-icon flaticon-user-settings"></i> - Akun
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Search Form -->


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-12 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m-tambah-akun"><i class="m-menu__link-icon flaticon-plus"></i> Tambah</button>
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
                            <th>Username</th>
                            {{--TODO: password apakah ditampilkan dalam tabel--}}

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

                                <td>{{ $key->role_user }}</td>
                                <td>{{ isset($key->departemen) ? $key->departemen->nama_departemen : "-" }}</td>
                                <td>
                                    <button onclick="reset(this)" id="[{{ json_encode($key) }}]"  class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-refresh"></i></button>
                                    <button onclick="edit({{ $i }})" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button>
                                    {{--<a href="{{url('/admin/akun/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>--}}
                                    <a href="#" onclick="
                                    $().ready(function(e){
                                        swal({
                                            title : 'Hapus Data?',
                                            text : 'Anda yakin ingin menghapus data?',
                                            type : 'warning',
                                            showCancelButton : true,
                                            confirmButtonColor: '#DD6B55',
                                            confirmButtonText: 'Hapus',
                                            cancelButtonText: 'Batal',
                                            closeOnConfirm: false,
                                            closeOnCancel: false,
                                            showLoaderOnConfirm : true
                                        },
                                        function(isConfirm){
                                            if(isConfirm){
                                                $.get('<?php echo url('/admin/akun/destroy').'/'.$key->id?>', function(){
                                                swal({
                                                title : 'Sukses',
                                                text : 'Data akun berhasil dihapus!',
                                                type : 'success'
                                                },function(){
                                                location.reload() ;
                                                });
                                                }) ;
                                            }else{
                                                swal('Batal dihapus', '', 'error');
                                            }
                                        })
                                    }) ;" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>

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
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control m-input m-input--air"  placeholder="Username">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="">Password</label>
                        <input type="password" name="password"  class="form-control m-input m-input--air" id="exampleInputEmail1" placeholder="Password">
                    </div>
                    {{--<div class="form-group m-form__group">--}}
                        {{--<label for="">--}}
                            {{--Role--}}
                        {{--</label>--}}
                        {{--<input type="text" name="role" class="form-control m-input m-input--air" id="exampleInputEmail1"  placeholder="Role">--}}
                    {{--</div>--}}
                    <div class="form-group m-form__group">
                        <label for="">Role</label>
                            <select  name="role" class="custom-select form-control col-md-12">
                                <option value="0">Ketua Departemen</option>
                                <option value="1">BKK</option>
                            </select>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="">Departemen</label>
                        <select name="id_departemen" class="custom-select form-control col-md-12">
                                <option value="">Pilih Departemen</option>
                            @foreach($departemen as $key)
                                <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                            @endforeach
                        </select>
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
                            <label for="">Password</label>
                            <input type="password" id="password" name="password" class="form-control m-input m-input--air">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="">Role</label>
                            <select id="role" id="role" name="role" class="custom-select form-control col-md-12">
                                <option value="0">Ketua Departemen</option>
                                <option value="1">BKK</option>
                            </select>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="">Departemen</label>
                            <select id="id_departemen" name="id_departemen" class="custom-select form-control col-md-12">
                                <option value="">Pilih Departemen</option>
                                @foreach($departemen as $key)
                                <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                @endforeach
                            </select>
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ url('css/sweetalert.css') }}" type="text/css">

    <script type="text/javascript" src="{{ url('js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready( function () {
            $('.myTableDataTable').DataTable();
        } );

        function edit(id) {
            var datadata = {!! json_encode($user) !!};
            id = id-1;

            console.log(datadata[id]);
            var idObject = datadata[id].id;
            var name = datadata[id].name;
            var role = datadata[id].role;
            var id_departemen = datadata[id].id_departemen;
            var password = datadata[id].password;

            $('#name').val(name);
            $('#role').val(role);
            $('#id_departemen').val(id_departemen);
            $('#password').val(password);

            var url = "{{ url('/') }}/admin/akun/" + (idObject);
            document.getElementById("edit_form").action = url;

            $('#m-edit-akun').modal('show');
        }

        function reset(theForm) {
            var user = JSON.parse(theForm.id)[0];
//            alert(b);

            $.ajax({
                data: {
                    id_user: user.id,
                    password: '123456',
                },
                type: 'POST',
                url: '{{ url('/') }}/api/user/reset',
                success: function (response) { // on success..
                    console.log(response); // update the DIV

                        swal({
                            title : 'Sukses',
                            text : 'Password berhasil direset menjadi 123456',
                            type : 'success'
                        },function(){
                            location.reload() ;
                        });



                }
            });
        }
    </script>

@endsection