@extends('layouts.kadept')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Panduan Penggunaan
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
								Panduan Sistem Informasi Penilaian Magang
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

        <!-- TO DO List -->
        <div class="m-content">
            <div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--bordered m-portlet--head-sm">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                <i class="m-menu__link-icon flaticon-clipboard"></i> - Panduan
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
                <ul class="todo-list">
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle"></span>
                        <span><span class="pull-left badge bg-green" style="margin-left: 1em">1</span>
                            <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo1"><b>Kelola Data Calon Anggota</b></a></span>
                            <div id="demo1" class="collapse" style="margin-top: 1%">
                                <div class="col-md-12">
                                    <p>Pilih menu <b>calon anggota</b></p>
                                    <div class="col-md-12">
                                        <img src="{{url('img/admin/datacalon.JPG')}}" style="width: 100%; height: 100%;">
                                    </div>
                                    <br>
                                    <p>Untuk menambah data bisa dengan klik tombol tambah atau dengan mengimpor data</p>
                                    <ul>
                                        <li>Import data</li>
                                        <br>
                                        <div class="col-md-12">
                                            <img src="{{url('img/admin/panduan.png')}}" style="width: 100%; height: 100%;">
                                        </div>
                                        <p>Kemudian akan muncul keterangan panduan</p>
                                        <p>Dapat <b>mengunduh file template import </b> dengan mengeklik tombol <a class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-primary"><i class="m-menu__link-icon flaticon-download "></i> Download Contoh File</a></p>
                                        <div class="col-md-12">
                                            <img src="{{url('img/admin/panduan_impor.png')}}" style="width: 100%; height: 100%;">
                                        </div>

                                    </ul>

                                </div>
                            </div>
                    </li>
                </ul>
                <ul class="todo-list">
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle"></span>
                        <span><span class="pull-left badge bg-green" style="margin-left: 1em">2</span>
                            <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo2"><b>Kelola Data Akun</b></a></span>
                        <div id="demo2" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <p>Pilih menu <b>Akun</b></p>
                                <ul>
                                    <li><p>Jika ingin <b>menambah</b> kegiatan, klik tombol <b>tambah</b>, kemudian isi data akun</p></li>
                                    <li><p>Jika ingin <b>mengubah</b> kegiatan, klik tombol tombol <button class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button> , kemudian ubah data data kegiatan</p></li>
                                    <li><p>Jika ingin <b>menghapus</b> kegiatan, klik tombol tombol <button class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-delete-1"></i></button> , kemudian jika muncul peringatan hapus, pilih tombol hapus</p></li>
                                    <li><p>Jika ingin <b>mereseet password </b> menjadi <strong>123456</strong> , klik tombol tombol <button data-skin="dark" class="btn btn-outline-primary m-btn m-btn--icon m-btn--icon-only"><i class="m-menu__link-icon flaticon-refresh"></i></button> </p></li>
                                </ul>
                                <div class="col-md-12">
                                    <img src="{{url('img/admin/akun.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <br>
                                <p>Semua data <b>Harus diisi</b></p>
                                <div class="col-md-12">
                                    <img src="{{url('img/admin/tambah_akun.JPG')}}" style="width: 100%; height: 100%;">
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="todo-list">
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle"></span>
                        <span><span class="pull-left badge bg-green" style="margin-left: 1em">3</span>
                                <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo3"><b>Kelola Data Departemen, Data periode</b></a></span>
                        <div id="demo3" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <p>Langkah-langkahnya sama dengan kelola data akun hanya disesuaikan dengan isiannya</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="todo-list">
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle"></span>
                        <span><span class="pull-left badge bg-green" style="margin-left: 1em">4</span>
                            <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo4"><b>Hasil Akhir dan Penentuan Departemen</b></a></span>
                        <div id="demo4" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <p>Pilih menu <b>Hasil Akhir</b></p>
                                <p>Ketika kursor diarahkan pada <b>kolom rekomendasi</b> akan muncul tooltip keteranangan/alasan favorit atau direkomendasikan</p>
                                <p>Ketika kolom Departemen <b>diganti</b> otomatis <b>DATA TERSIMPAN</b> dalam sistem</p>
                                <div class="col-md-12">
                                    <img src="{{url('img/admin/hasil_akhir_admin.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

        </div>
        </div>
    </div>



@endsection

