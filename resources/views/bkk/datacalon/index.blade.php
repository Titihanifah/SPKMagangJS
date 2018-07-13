@extends('layouts.kadept')
@section('content')
    <?php //dd($detailCalonAnggota);exit; ?>
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
                <!-- <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Custom Controls
                            </h3>
                        </div>
                    </div>
                </div> -->
                <!-- panel import -->
                <div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5"
                     role="tablist">
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_7_item_1_head" data-toggle="collapse" href="#m_accordion_7_item_1_body" aria-expanded="    false">
                            <span class="m-accordion__item-icon">
                                <i class="fa flaticon-user-ok"></i>
                            </span>
                            <span class="m-accordion__item-title">
                                Panduan Import Data
                            </span>
                            <span class="m-accordion__item-mode"></span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="m_accordion_7_item_1_body" role="tabpanel"
                             aria-labelledby="m_accordion_7_item_1_head" data-parent="#m_accordion_7">
                            <div class="m-accordion__item-content">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ url('img/panduan.png') }}" alt=""/>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                            <h5>Catatan :</h5>
                                            <hr>
                                            Pastikan format penulisan sudah sesuai dengan contoh agar data dapat dibaca oleh sistem. Sistem hanya membaca file pada <b>Sheet1</b> dan format  file dapat berupa <b>(.xls)</b> atau <b>(.xlsx)</b>.
                                            <br>
                                            <hr>
                                            <a href="{{ url('/downloadExcel') }}" class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary">
                                                <i class="m-menu__link-icon flaticon-download "></i> Download Contoh File
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::open(array('class' => 'alert m-alert m-alert--default', 'route' => 'datacalon.importexcel', 'enctype' => 'multipart/form-data')) !!}
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="custom-file">
                                <input name="file_excel" type="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">
                                    Pilih Berkas
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary" style="margin-right: 10px" required>
                            Import
                        </button>
                    </div>

                </div>
                {!! Form::close() !!}
                <!--begin::Form-->

                <!--end::Form-->
            </div>
            <div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                <i class="m-menu__link-icon flaticon-users"></i> Data Calon
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
                                        {{--<a href="#" data-toggle="modal" data-target="#m-tambah-kriteria" class="btn m-btn--square  btn-outline-primary"><i class="m-menu__link-icon flaticon-plus"></i> Tambah</a>--}}
                                        <button class="btn m-btn--square  btn-outline-primary" data-toggle="modal" data-target="#m-tambah-datacalon"><i class="m-menu__link-icon flaticon-plus"></i> Tambah</button>
                                    </div>
                                    <div class="col-md-5">

                                    </div>
                                    <div class="col-md-3">
                                        {{--<div class="m-input-icon m-input-icon--left">--}}
                                            {{--<input type="text" class="form-control m-input" placeholder="Search..."--}}
                                                       {{--id="generalSearch">--}}
                                            {{--<span class="m-input-icon__icon m-input-icon__icon--left">--}}
											{{--<span>--}}
												{{--<i class="la la-search"></i>--}}
											{{--</span>--}}
										{{--</span>--}}
                                            {{--</div>--}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end: Search Form -->
                    <!--begin: Datatable -->
                    <table class="dt-responsive nowrap table table-striped" id="table_data_calon" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Hardskill</th>
                            <th>Softskill</th>
                            <th>Organisasi</th>
                            <th>Kepanitiaan</th>
                            <th>Minat</th>
                            <th>Sumber Belajar Islam</th>
                            <th>Riwayat Penyakit</th>
                            <th>Asal</th>
                            <th>Alamat Jogja</th>
                            <th>Departemen Pilihan</th>
                            <th>Aksi</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp
                        @foreach($calonAnggota as $key)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $key->nama_calon_anggota }}</td>
                            <td>{{ $key->jenis_kelamin }}</td>
                            <td>{{ $key->hardskill }}</td>
                            <td>{{ $key->softskill }}</td>
                            <td>{{ $key->pengalaman_organisasi }}</td>
                            <td>{{ $key->pengalaman_kepanitiaan }}</td>
                            <td>{{ $key->minat }}</td>
                            <td>{{ $key->sumber_belajar_islam }}</td>
                            <td>{{ $key->riwayat_penyakit }}</td>
                            <td>{{ $key->asal }}</td>
                            <td>{{ $key->alamat_yogyakarta }}</td>
                            <td>Pilihan 1: {{ $key->detailCalonAnggota->where('prioritas', 1)->first()->departemen->nama_departemen }}<br>Pilihan 2: {{ $key->detailCalonAnggota->where('prioritas', 2)->first()->departemen->nama_departemen }}</td>
                            <td>
                                <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button> -->


                                <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
                                <a href="#" onclick="edit({{ $i }})" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-edit-1"></i></a>
                                <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
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
                                        $.get('<?php echo url('/admin/datacalon/destroy').'/'.$key->id?>', function(){
                                        swal({
                                        title : 'Sukses',
                                        text : 'Data Calon Anggota berhasil dihapus!',
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
                        @php $i++; @endphp
                        @endforeach
                        </tbody>
                    </table>
                    <!-- <div class="m_datatable" id="ajax_data"></div> -->
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>


    {{--MODAL TAMBAH--}}
    <div class="modal fade" id="m-tambah-datacalon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Data Calon Anggota
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('route' => 'datacalon.store', 'enctype' => 'multipart/form-data')) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Nama Calon Anggota <font color="red">*</font> </label>
                                <input type="text" name="nama_calon_anggota" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Nama Calon Anggota">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="m-form__group form-group">
                                <label for="">Jenis Kelamin <font color="red">*</font></label>
                                <div class="m-radio-inline">
                                    <label class="m-radio">
                                        <input type="radio" name="jenis_kelamin" value="L" selected>Laki-Laki
                                        <span></span>
                                    </label>
                                    <label class="m-radio">
                                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Departemen Pilihan 1 <font color="red">*</font></label>
                                <select name="departemen_satu" class="custom-select form-control col-md-12" required>
                                    <option value="">Pilih Departemen</option>
                                    @foreach($departemen as $key)
                                        <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Departemen Pilihan 2 <font color="red">*</font></label>
                                <select name="departemen_dua" class="custom-select form-control col-md-12" required>
                                    <option value="">Pilih Departemen</option>
                                    @foreach($departemen as $key)
                                        <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Asal <font color="red">*</font></label>
                                <input type="text" required name="asal" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Asal">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Alamat di Yogyakarta</label>
                                <input type="text" name="alamat_yogyakarta" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Alamat di Yogyakarta">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Sumber Belajar Islam <font color="red">*</font></label>
                                <input type="text" required name="sumber_belajar_islam" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Al-Quran, Hadits, Mentoring, Kajian,dll">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Pengalaman Organisasi</label>
                                <input type="text" name="pengalaman_organisasi" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Pengalaman Organisasi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Pengalaman Kepanitiaan</label>
                                <input type="text" name="pengalaman_kepanitiaan" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Pengalaman Kepanitiaan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Minat <font color="red">*</font></label>
                                <input type="text" required name="minat" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Minat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Hardskill <font color="red">*</font></label>
                                <input type="text" required name="hardskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Hardskill">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Softskill <font color="red">*</font></label>
                                <input type="text" required name="softskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Softskill">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Riwayat Penyakit <font color="red">*</font></label>
                                <input type="text" required name="riwayat_penyakit" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Riwayat Penyakit">
                            </div>
                        </div>

                    </div>
                    <font color="red">*</font> Wajib diisi
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    {{--MODAL--}}
    <div class="modal fade" id="m-edit-datacalon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Edit Data Calon Anggota
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{--{!! Form::open(array('route' => 'datacalon.store', 'enctype' => 'multipart/form-data')) !!}--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Nama Calon Anggota <font color="red">*</font></label>
                                    <input type="text" id="nama_calon_anggota" name="nama_calon_anggota" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Nama Calon Anggota" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m-form__group form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="m-radio-inline">
                                        <label class="m-radio">
                                            <input type="radio" id="L-edit" name="jenis_kelamin" value="L">laki-Laki
                                            <span></span>
                                        </label>
                                        <label class="m-radio">
                                            <input type="radio" id="P-edit" name="jenis_kelamin" value="P">perempuan
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Departemen Pilihan 1</label>
                                    <select name="departemen_satu" id="departemen_satu" class="custom-select form-control col-md-12" required>
                                        <option value="">Pilih Departemen</option>
                                        @foreach($departemen as $key)
                                            <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Departemen Pilihan 2</label>
                                    <select name="departemen_dua" id="departemen_dua" class="custom-select form-control col-md-12" required>
                                        <option value="">Pilih Departemen</option>
                                        @foreach($departemen as $key)
                                            <option value="{{ $key->id }}">{{ $key->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Asal <font color="red">*</font></label>
                                    <input type="text" name="asal" id="asal" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Asal" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Alamat di Yogyakarta</label>
                                    <input type="text" name="alamat_yogyakarta" id="alamat_yogyakarta" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Alamat di Yogyakarta">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Sumber Belajar Islam <font color="red">*</font></label>
                                    <input type="text" name="sumber_belajar_islam" id="sumber_belajar_islam" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Sumber Belajar Islam" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Pengalaman Organisasi </label>
                                    <input type="text" name="pengalaman_organisasi" id="pengalaman_organisasi" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Pengalaman Organisasi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Pengalaman Kepanitiaan</label>
                                    <input type="text" name="pengalaman_kepanitiaan" id="pengalaman_kepanitiaan" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Pengalaman Kepanitiaan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Minat <font color="red">*</font></label>
                                    <input type="text" name="minat" id="minat" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Minat" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Hardskill <font color="red">*</font></label>
                                    <input type="text" name="hardskill" id="hardskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Hardskill" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Softskill <font color="red">*</font></label>
                                    <input type="text" name="softskill" id="softskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Softskill" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Riwayat Penyakit <font color="red">*</font></label>
                                    <input type="text" name="riwayat_penyakit" id="riwayat_penyakit" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Riwayat Penyakit" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </form>
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
            <link rel="stylesheet" href="{{ url('css/sweetalert.css') }}" type="text/css">

            <script type="text/javascript" src="{{ url('js/sweetalert.min.js') }}"></script>
            <script type="text/javascript">

                $(document).ready( function () {
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
                });

                $('#table_data_calon').dataTable({
                    paging:         true,
                    scrollY:        false,
                    scrollX:        true,
                    scrollCollapse: true,
                    fixedColumns:   {
                        leftColumns: 3,
                        rightColumns: 2,
                    },
                    "columnDefs": [
                        {"width": "2px", "targets": 1}
                    ]
                });
                function edit(id) {
                    var datadata = {!! json_encode($detailCalonAnggota) !!};
                    var dataCalon = {!! json_encode($calonAnggota) !!};

                    var id_departemen_satu;
                    var id_departemen_dua;
                    var idObject;
                    for(var i=0; i<datadata.length; i++){
                        if(datadata[i].id_calon_anggota == id){
                            if(datadata[i].prioritas == 1)
                                id_departemen_satu = (datadata[i].id_departemen);
                            else if(datadata[i].prioritas == 2)
                                id_departemen_dua = (datadata[i].id_departemen);
                        }
                    }

                    for(var j=0; j<dataCalon.length; j++){
                        if(dataCalon[j].id == id){
                            console.log(dataCalon[j]);
                            idObject = dataCalon[j].id;
                            $('input[name=nama_calon_anggota]').val(dataCalon[j].nama_calon_anggota);
                            if(dataCalon[j].jenis_kelamin == 'perempuan'){
                                $("input[name=jenis_kelamin][value='P']").prop("checked",true);
                            }else{
                                $("input[name=jenis_kelamin][value='L']").prop("checked",true);
                            }
                            $('#departemen_satu').val(id_departemen_satu);
                            $('#departemen_dua').val(id_departemen_dua);
                            $('#asal').val(dataCalon[j].asal);
                            $('#alamat_yogyakarta').val(dataCalon[j].alamat_yogyakarta);
                            $('#sumber_belajar_islam').val(dataCalon[j].sumber_belajar_islam);
                            $('#pengalaman_organisasi').val(dataCalon[j].pengalaman_organisasi);
                            $('#pengalaman_kepanitiaan').val(dataCalon[j].pengalaman_kepanitiaan);
                            $('#minat').val(dataCalon[j].minat);
                            $('#hardskill').val(dataCalon[j].hardskill);
                            $('#softskill').val(dataCalon[j].softskill);
                            $('#riwayat_penyakit').val(dataCalon[j].riwayat_penyakit);
                        }
                    }

                    var url = "{{ url('/') }}/admin/datacalon/" + (idObject);
                    document.getElementById("edit_form").action = url;
                    $('#m-edit-datacalon').modal('show');
                }
            </script>

            {{--        <!-- <script src="{{ url('assets/demo/default/custom/components/datatables/base/data-ajax.js')}}" type="text/javascript"></script> -->--}}
            <script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
@endsection