<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
            <a  href="{{ url('/home')}}" class="m-menu__link color-menu">
                <i class="m-menu__link-icon flaticon-line-graph color-menu"></i>
                <span class="m-menu__link-title color-menu">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text color-menu">
                            Dashboard
                        </span>
                        <span class="m-menu__link-badge">
                            <!-- <span class="m-badge m-badge--danger">
                                2
                            </span> -->
                        </span>
                    </span>
                </span>
            </a>
        </li>
        <!-- <li class="m-menu__section">
            <h4 class="m-menu__section-text">
                Components
                <hr>
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li> -->
        <hr>

        <!-- start -->
        @if(Auth::user()->role == 0)
        <li class="@if(request()->is('*datacalon*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/datacalon')}}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-users color-menu"></i>
                <span class="m-menu__link-text color-menu color-menu">
                    Calon Anggota
                </span>
            </a>
        </li>
        <li class="m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle ">
                <i class="m-menu__link-icon flaticon-interface-1 color-menu"></i>
                <span class="m-menu__link-text color-menu ">
                    Kegiatan
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu nav-sidebar-menu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="@if(request()->is('*kegiatan*')) active @endif m-menu__item  nav-sidebar-menu" aria-haspopup="true" >
                        <a  href="{{ url('/kegiatan')}}" class="m-menu__link  ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot color-menu">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text color-menu ">
                                Data Kegiatan
                            </span>
                        </a>
                    </li>
                    <li class="@if(request()->is('*rekap*')) active @endif m-menu__item nav-sidebar-menu" aria-haspopup="true" >
                        <a  href="{{route('rekap')}}" class="m-menu__link  ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot color-menu">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text color-menu ">
                                Presensi Kegiatan
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="javascript:;" class="m-menu__link m-menu__toggle ">
                <i class="m-menu__link-icon flaticon-clipboard color-menu"></i>
                <span class="m-menu__link-text color-menu ">
                    Tugas
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav nav-sidebar-menu">
                    <li class="@if(request()->is('*tugas*')) active @endif m-menu__item  m-menu__item--active nav-sidebar-menu" aria-haspopup="true" >
                        <a  href="{{ url('/tugas')}}" class="m-menu__link  ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot color-menu">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text color-menu">
                                Data Tugas
                            </span>
                        </a>
                    </li>
                    <li class="@if(request()->is('*penilaianTugas*')) active @endif m-menu__item  m-menu__item--active nav-sidebar-menu" aria-haspopup="true" >
                        <a  href="{{ url('/penilaianTugas') }}" class="m-menu__link  ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot color-menu">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text color-menu">
                                Penilaian Tugas
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{--<li class="m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">--}}
            {{--<a  href="{{ url('/penilaian_skill')}}" class="m-menu__link m-menu__toggle ">--}}
                {{--<i class="m-menu__link-icon flaticon-notes color-menu"></i>--}}
                {{--<span class="m-menu__link-text color-menu">--}}
                    {{--Penilaian Kemampuan--}}
                {{--</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--</li>--}}
        {{--<li class="m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">--}}
            {{--<a  href="{{ url('/kemampuan_tambahan')}}" class="m-menu__link m-menu__toggle ">--}}
                {{--<i class="m-menu__link-icon flaticon-notes color-menu"></i>--}}
                {{--<span class="m-menu__link-text color-menu">--}}
                {{--Kemampuan Tambahan--}}
            {{--</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        <li class="@if(request()->is('*rekap_nilai*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/rekap_nilai')}}" class="m-menu__link m-menu__toggle ">
                <i class="m-menu__link-icon flaticon-list-3  color-menu"></i>
                <span class="m-menu__link-text color-menu">
                    Hasil Akhir
                </span>
            </a>
        </li>
        <li class="@if(request()->is('*panduan*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/panduan')}}" class="m-menu__link m-menu__toggle ">
                <i class="m-menu__link-icon flaticon-user-settings  color-menu"></i>
                <span class="m-menu__link-text color-menu">
                Panduan
            </span>
            </a>
        </li>
        @endif
        @if(Auth::user()->role == 1)
        <li class="@if(request()->is('*admin/datacalon*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/datacalon')}}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-users color-menu"></i>
                <span class="m-menu__link-text color-menu">
                    Calon Anggota
                </span>
            </a>
        </li>
        <li class="@if(request()->is('*admin/kegiatan*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/kegiatan')}}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-interface-1 color-menu"></i>
                <span class="m-menu__link-text  color-menu">
                    Kegiatan
                </span>
            </a>
        </li>
        <li class="@if(request()->is('*admin/tugas*')) active @endif  m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/tugas')}}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-clipboard color-menu"></i>
                <span class="m-menu__link-text color-menu">
                    Tugas
                </span>
            </a>
        </li>
        {{--<li class="@if(request()->is('*admin/kriteria*')) active @endif  m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">--}}
            {{--<a  href="{{ url('/admin/kriteria')}}" class="m-menu__link m-menu__toggle">--}}
                {{--<i class="m-menu__link-icon flaticon-confetti color-menu"></i>--}}
                {{--<span class="m-menu__link-text color-menu ">--}}
                    {{--Kriteria Penilaian--}}
                {{--</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">--}}
            {{--<a  href="{{ url('/admin/kemampuan')}}" class="m-menu__link m-menu__toggle">--}}
                {{--<i class="m-menu__link-icon flaticon-notes color-menu"></i>--}}
                {{--<span class="m-menu__link-text color-menu">--}}
                {{--Kemampuan Tambahan--}}
            {{--</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        <li class="@if(request()->is('*admin/departemen*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/departemen')}}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-map color-menu"></i>
                <span class="m-menu__link-text color-menu">
                    Departemen
                </span>
            </a>
        </li>
        <li class="@if(request()->is('*admin/hasil*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/hasil')}}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-list-3  color-menu"></i>
                <span class="m-menu__link-text color-menu">
                Hasil Akhir
                </span>
            </a>
        </li>
        <li class="@if(request()->is('*admin/akun*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/akun')}}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-user-settings color-menu"></i>
                <span class="m-menu__link-text color-menu">
                    Data Akun
                </span>
            </a>
        </li>
        <li class="@if(request()->is('*admin/periode*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/periode') }}" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-time-3 color-menu"></i>
                <span class="m-menu__link-text color-menu">
                    Periode
                </span>
            </a>
        </li>


        <li class="@if(request()->is('*admin/panduan*')) active @endif m-menu__item  m-menu__item--submenu nav-sidebar-menu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="{{ url('/admin/panduan')}}" class="m-menu__link m-menu__toggle ">
                <i class="m-menu__link-icon flaticon-user-settings  color-menu"></i>
                <span class="m-menu__link-text color-menu">
                    Panduan
                </span>
            </a>
        </li>
    @endif

            <!-- end -->
    </ul>
</div>