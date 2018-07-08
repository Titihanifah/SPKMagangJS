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
                                            <img src="{{ url('assets/app/media/img/panduan_import.jpg') }}" alt=""/>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                            <h5>Catatan :</h5>
                                            <hr>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.
                                            <br>
                                            <hr>
                                            <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary">
                                                <i class="m-menu__link-icon flaticon-download "></i> Download Contoh File
                                            </button>
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
                                    <input name="file_excel" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">
                                        Pilih Berkas
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary" style="margin-right: 10px">
                                Import
                            </button>
                            <span></span>
                            <button type="reset" class="btn btn-sm btn-danger">
                                Batal
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
                    @if (\Illuminate\Support\Facades\Session::has('message'))
                        <div class="alert alert-success">
                            {{ \Illuminate\Support\Facades\Session::get('message') }}
                        </div>
                    @endif
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
                            @php dd($calonAnggota); exit; @endphp
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
                                    <td>Pilihan 1: {{ $key->detailCalonAnggota[0]->departemen->nama_departemen }}<br>Pilihan 2: {{ $key->detailCalonAnggota[1]->departemen->nama_departemen }}</td>
                                    <td>
                                        <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-eye"></i></button> -->
                                        {{--<a href="#" onclick="view({{ $i }})" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>--}}
                                        <a href="#lihat-datacalon" data-toggle="modal" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-eye"></i></a>
                                        <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-edit-1"></i></button> -->
                                        <a href="#" onclick="edit({{ $i }})" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-edit-1"></i></a>
                                        <!-- <button class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-danger m-btn--gradient-to-danger"><i class="m-menu__link-icon flaticon-delete-1"></i></button> -->
                                        <a href="{{url('admin/datacalon/destroy')}}/{{ $key->id}}" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-delete-1"></i></a>

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

        <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Ubah Data
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
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
                            Tambah Data Calon
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
                                    <label for="">Nama Calon Anggota</label>
                                    <input type="text" name="nama_calon_anggota" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Nama Calon Anggota">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m-form__group form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="m-radio-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
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
                                    <label for="">Departemen Pilihan 1</label>
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
                                    <label for="">Departemen Pilihan 2</label>
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
                                    <label for="">Asal</label>
                                    <input type="text" name="asal" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Asal">
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
                                    <label for="">Sumber Belajar Islam</label>
                                    <input type="text" name="sumber_belajar_islam" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Sumber Belajar Islam">
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
                                    <label for="">Minat</label>
                                    <input type="text" name="minat" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Minat">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Hardskill</label>
                                    <input type="text" name="hardskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Hardskill">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Softskill</label>
                                    <input type="text" name="softskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Softskill">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group m-form__group">
                                    <label for="">Riwayat Penyakit</label>
                                    <input type="text" name="riwayat_penyakit" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Riwayat Penyakit">
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
                        Edit Data Calon
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
                                <label for="">Nama Calon Anggota</label>
                                <input type="text" name="nama_calon_anggota" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Nama Calon Anggota">
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
                                <label for="">Asal</label>
                                <input type="text" name="asal" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Asal">
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
                                <label for="">Sumber Belajar Islam</label>
                                <input type="text" name="sumber_belajar_islam" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Sumber Belajar Islam">
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
                                <label for="">Minat</label>
                                <input type="text" name="minat" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Minat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Hardskill</label>
                                <input type="text" name="hardskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Hardskill">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Softskill</label>
                                <input type="text" name="softskill" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Softskill">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="">Riwayat Penyakit</label>
                                <input type="text" name="riwayat_penyakit" class="form-control m-input m-input--air" aria-describedby="emailHelp" placeholder="Riwayat Penyakit">
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
        </div>
    </div>


    {{--modal view detail--}}
    <div class="modal fade" id="lihat-datacalon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" id="edit_form" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Detail Anggota
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">

                            </div>

                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">
                                Recipient:
                            </label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">
                                Message:
                            </label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Send message
                        </button>
                    </div>
                </div>
            </div>
    </div>

    {{--end modal view--}}
        @endsection

        @section('js')

            {{--<script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>--}}
            {{--<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">--}}
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.dataTables.min.css">
            {{--<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css" type="text/css">--}}
            {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
            <script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
            <script type="text/javascript">

                $('#table_data_calon').dataTable({
                    paging:         true,
                    scrollY:        false,
                    scrollX:        true,
                    scrollCollapse: true,
                    fixedColumns:   {
                        leftColumns: 3,
                        rightColumns: 1,
                    },
                    "columnDefs": [
                        {"width": "2px", "targets": 1}
                    ]
                });

                function edit(id) {
                    var datadata = {!! json_encode($calonAnggota) !!};

                    id = id-1;

                    console.log(datadata[id]);
                    var idObject                = datadata[id].id;
                    var nama_calon_anggota      = datadata[id].nama_calon_anggota;

//                    TODO : if prioritas 1 (departemen_satu) else 2
                    var departemen_satu         = datadata[id].departemen_satu;
                    var departemen_dua          = datadata[id].departemen_dua;
                    var asal                    = datadata[id].asal;
                    var alamat_yogyakarta       = datadata[id].alamat_yogyakarta;
                    var sumber_belajar_islam    = datadata[id].sumber_belajar_islam;
                    var pengalaman_organisasi   = datadata[id].pengalaman_organisasi;
                    var pengalaman_kepanitiaan  = datadata[id].pengalaman_kepanitiaan;
                    var minat                   = datadata[id].minat;
                    var hardskill               = datadata[id].hardskill;
                    var softskill               = datadata[id].softskill;
                    var riwayat_penyakit        = datadata[id].riwayat_penyakit;
                    var jenis_kelamin           = datadata[id].jenis_kelamin;
                    var finaljk;

                    if(jenis_kelamin == "laki-laki"){
                        finaljk = "L";
                        $('#L-edit').val(finaljk);
                        $('#L-edit').attr('checked','checked');
                    }else if(jenis_kelamin == "perempuan"){
                        finaljk = "P";
                        $('#P-edit').val(finaljk);
                        $('#P-edit').attr('checked','checked');
                    }

                    $('input[name=nama_calon_anggota]').val(nama_calon_anggota);
//                    $('input[name=jenis_kelamin]').val(jenis_kelamin);
                    $('#departemen_satu').val(departemen_satu);
                    $('#epartemen_dua').val(departemen_dua);
                    $('input[name=asal]').val(asal);
                    $('input[name=alamat_yogyakarta]').val(alamat_yogyakarta);
                    $('input[name=sumber_belajar_islam]').val(sumber_belajar_islam);
                    $('input[name=pengalaman_organisasi]').val(pengalaman_organisasi);
                    $('input[name=pengalaman_kepanitiaan]').val(pengalaman_kepanitiaan);
                    $('input[name=minat]').val(minat);
                    $('input[name=hardskill]').val(hardskill);
                    $('input[name=softskill]').val(softskill);
                    $('input[name=riwayat_penyakit]').val(riwayat_penyakit);


                    var url = "http://spkmagang.test:9000/admin/datacalon/" + (idObject);
                    document.getElementById("edit_form").action = url;

                    $('#m-edit-datacalon').modal('show');
                }

            </script>

{{--        <!-- <script src="{{ url('assets/demo/default/custom/components/datatables/base/data-ajax.js')}}" type="text/javascript"></script> -->--}}
            <script src="{{ url('assets/demo/default/custom/components/datatables/base/html-table.js')}}"
                    type="text/javascript"></script>
@endsection