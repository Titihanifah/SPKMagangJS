@extends('layouts.kadept')
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <center>
                <div class="box-title"><h3><strong>Panduan Sistem Informasi Presensi Siswa</strong></h3></div>
            </center>
            </br>
        </div>
        <!-- TO DO List -->
        <div class="box box-success">
            <div class="box-header">
                <div class="box-title">Panduan Berdasarkan Urutan Aktivitas</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul class="todo-list">
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle">
          </span>
                        <span><span class="pull-left badge bg-green" style="margin-left: 1em">1</span>
          <a href="#" class="dropdowncollapse" data-toggle="collapse"
             data-target="#demo1">Tentukan Tahun Ajaran</a></span>
                        <div id="demo1" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <img src="{{url('img/datacalon_favorit.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-12">
                                    <img src="{{url('img/kegiatan.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle">
          </span>
                        <span class="pull-left badge bg-green" style="margin-left: 1em">2</span>
                        <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo2">Kelola Data
                            Sesi</a></span>
                        <div id="demo2" class="collapse" style="margin-top: 1%">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{url('img/tambah_kegiatan.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-7">
                                    <img src="{{url('img/presensi.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle"></span>
                        <span class="pull-left badge bg-green" style="margin-left: 1em">3</span>
                        <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo3">Kelola Mater
                            Kelas</a></span>
                        <div id="demo3" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <img src="{{url('img/tugas.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-12">
                                    <img src="{{url('img/penilaian_tugas.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <img src="{{url('img/hasil_akhir_kadept.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-12">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle">
          </span>
                        <span class="pull-left badge bg-green" style="margin-left: 1em">4</span>
                        <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo4">Kelola Data
                            Kelas Siswa</a></span>
                        <div id="demo4" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle">
          </span>
                        <span class="pull-left badge bg-green" style="margin-left: 1em">5</span>
                        <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo5">Tambah Data
                            Guru</a></span>
                        <div id="demo5" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle">
          </span>
                        <span class="pull-left badge bg-green" style="margin-left: 1em">6</span>
                        <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo6">Tambah Data
                            Siswa</a></span>
                        <div id="demo6" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle">
          </span>
                        <span class="pull-left badge bg-green" style="margin-left: 1em">7</span>
                        <a href="#" class="dropdowncollapse" data-toggle="collapse" data-target="#demo7">Tambah Jadwal
                            Mengajar</a></span>
                        <div id="demo7" class="collapse" style="margin-top: 1%">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('img/login.png')}}" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="margin-bottom: 0">
                        <!-- drag handle -->
                        <span class="handle"></span>
                        <div id="demo7" class="collapse" style="margin-top: 1%">
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>

@endsection

