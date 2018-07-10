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
                            <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo1"><b>Lihat Data Calon Anggota</b></a></span>
                    <div id="demo1" class="collapse" style="margin-top: 1%">
                        <div class="col-md-12">
                            <p>Pilih menu <b>calon anggota</b></p>
                            <p>Jika ingin membuat menambahkan calon anggota ke dalam <b>favorit</b>, klik tombol favorit</p>
                            <p>* Favorit artinya calon anggota memiliki kemampuan khusus yang dapat membuat <b>peringkat penilaian</b> menjadi <b>lebih tinggi</b></p>
                            <div class="col-md-12">
                                <img src="{{url('img/datacalon_favorit.png')}}" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="todo-list">
                <li style="margin-bottom: 0">
                    <!-- drag handle -->
                    <span class="handle"></span>
                    <span><span class="pull-left badge bg-green" style="margin-left: 1em">2</span>
                            <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo2"><b>Kelola Data Kegiatan</b></a></span>
                    <div id="demo2" class="collapse" style="margin-top: 1%">
                        <div class="col-md-12">
                            <p>Pilih menu <b>Kegiatan</b> > <b>Data Kegiatan</b></p>
                            <ul>
                                <li><p>Jika ingin <b>menambah</b> kegiatan, klik tombol <b>tambah</b>, kemudian isi data kegiatan</p></li>
                                <li><p>Jika ingin <b>mengubah</b> kegiatan, klik tombol tombol <button class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-edit-1"></i></button> , kemudian ubah data data kegiatan</p></li>
                                <li><p>Jika ingin <b>menghapus</b> kegiatan, klik tombol tombol <button class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only" ><i class="m-menu__link-icon flaticon-delete-1"></i></button> , kemudian jika muncul peringatan hapus, pilih tombol hapus</p></li>
                            </ul>
                            <div class="col-md-12">
                                <img src="{{url('img/kegiatan.png')}}" style="width: 100%; height: 100%;">
                            </div>

                            <div class="col-md-12">
                                <img src="{{url('img/tambah_kegiatan_2.png')}}" style="width: 100%; height: 100%;">
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
                            <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo3"><b>Kelola Data Tugas</b></a></span>
                    <div id="demo3" class="collapse" style="margin-top: 1%">
                        <div class="col-md-12">
                            <p>Pilih menu <b>Tugas</b> > <b>Data Tugas</b></p>
                            <p>Langkah-langkahnya <b>sama</b> seperti <b>kelola data kegiatan</b></p>
                            <div class="col-md-12">
                                <img src="{{url('img/tugas.png')}}" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="todo-list">
                <li style="margin-bottom: 0">
                    <!-- drag handle -->
                    <span class="handle"></span>
                    <span><span class="pull-left badge bg-green" style="margin-left: 1em">4</span>
                            <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo4"><b>Presensi Kegiatan</b></a></span>
                    <div id="demo4" class="collapse" style="margin-top: 1%">
                        <div class="col-md-12">
                            <p>Pilih menu <b>Kegiatan</b> > <b>Presensi Kegiatan</b></p>
                            <p>Default-nya <b class="success">hadir</b>, jika <b>tidak hadir</b> klik option <b>tidak hadir</b>, setelah option <b>diklik</b> otomatis <b>data tersimpan</b> ke dalam sistem</p>
                            <p>Presensi kegiatan <b>hanya dapat dilakukan</b> jika <b>terdapat data kegiatan</b></p>
                            <div class="col-md-12">
                                <img src="{{url('img/presensi.png')}}" style="width: 100%; height: 100%;">
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
            <ul class="todo-list">
                <li style="margin-bottom: 0">
                    <!-- drag handle -->
                    <span class="handle"></span>
                    <span><span class="pull-left badge bg-green" style="margin-left: 1em">5</span>
                                <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo5"><b>Penilaian Tugas</b></a></span>
                    <div id="demo5" class="collapse" style="margin-top: 1%">
                        <div class="col-md-12">
                            <p>Pilih menu <b>Tugas</b> > <b>Penilaian Tugas</b></p>
                            <ul>
                                <li><p>Isikan <b>nilai</b> sesuai dengan <b>nama tugas</b> dan <b>nama calon anggota</b>, kemudian tekan <b>enter</b> atau <b>tab</b> atau <b>pindahkan kursor</b> pada baris selanjutnya, data otomatis <b>tersimpan</b> ke dalam sistem</p>
                                <li><p>Penilaian tugas <b>hanya dapat dilakukan</b> jika <b>terdapat data tugas</b></p></li>
                                <li><p>Range penilaian tugas <b>1 - 100</b></p></li>
                            </ul>
                            <div class="col-md-12">
                                <img src="{{url('img/penilaian_tugas.png')}}" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="todo-list">
                <li style="margin-bottom: 0">
                    <!-- drag handle -->
                    <span class="handle"></span>
                    <span><span class="pull-left badge bg-green" style="margin-left: 1em">6</span>
                                <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo6"><b>Hasil Akhir dan Rekomendasi</b></a></span>
                    <div id="demo6" class="collapse" style="margin-top: 1%">
                        <div class="col-md-12">
                            <ul>
                                <li><p>Pilih menu <b>Hasil Akhir</b></li>
                                <li><p>Data yang ditampilkan berdasarkan urutan <b>penilaian tertinggi</b> dan jika calon anggota dipilih menjadi <b>favorit</b>, maka akan terdapat tanda ⭐ dan <b>peringkatnya berada di atas</b></p></li>
                                <li><p>Jika ingin <b>merekomendasikan</b> klik tombol <button class="btn btn-success"><i class="flaticon-user-ok "></i>Rekomendasi</button> kemudian <b>pilih departemen</b></p></li>
                                <li><p>Jika diperlukan, <b>tambahkan alasan rekomendasi</b> pada <b>kolom keterangan</b></p></li>
                                <li><p>Setiap <b> memilih atau mengganti departemen,mengisi keterangan, otomatis data tersimpan</b> ke dalam sistem</p></li>
                            </ul>
                            <div class="col-md-12">
                                <img src="{{url('img/hasil_akhir_kadept.png')}}" style="width: 100%; height: 100%;">
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        </div>


@endsection

