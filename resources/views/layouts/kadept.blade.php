<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		@include('includes.head')
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark header-menu-left">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="{{url('/assets/demo/default/media/img/logo/logo.jpg')}}"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head header-main" id="m_header_nav">
							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">

								</ul>
							</div>
							<!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">

										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle ">
												<span class="m-topbar__userpic">
													<img src="{{ url('/assets/app/media/img/users/user4.png')}}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												{{--<span class="m-topbar__username m--hide">--}}
													{{--Nick--}}
												{{--</span>--}}
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url('/assets/app/media/img/misc/user_profile_bg.jpg'); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="{{ url('/assets/app/media/img/users/user4.png')}}" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	{{ Auth::user()->name }}
																</span>
																<!-- <a href="" class="m-card-user__email m--font-weight-300 m-link">
																	mark.andre@gmail.com
																</a> -->
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<!-- <span class="m-nav__section-text">
																		Section
																	</span> -->
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link" data-toggle="modal" data-target="#m-edit-password">
																		<i class="m-nav__link-icon flaticon-settings-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					Ubah Password
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a class="m-nav__link" href="{{ route('logout') }}"
																	   onclick="event.preventDefault();
                                                     					document.getElementById('logout-form').submit();">
																		<i class="m-nav__link-icon flaticon-logout "></i>
																		<span class="m-nav__link-text">
																			{{ __('Logout') }}
																		</span>
																	</a>
																	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

																		@csrf
																	</form>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					@include('includes.sidebar')
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->

				@yield('content')

			</div>
		</div>

		<div class="modal fade" id="m-edit-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<form method="POST" class="form-horizontal" action="{{ url ('ubahPasswordUser')}}">

					{{--<input name="_method" type="hidden" value="PUT">--}}
					{{ csrf_field() }}
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" >
								Ubah Password
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							{{--<div class="form-group">--}}
								{{--<label for="recipient-name" class="form-control-label">Email : </label>--}}
								{{--<input type="text" class="form-control" id="email" name="email">--}}
							{{--</div>--}}
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Password Lama : </label>
								<input type="password" class="form-control" id="password_lama" name="password_lama">
							</div>
							<div class="form-group">
								<label for="message-text" class="form-control-label">Password Baru: </label>
								<input type="password" class="form-control" id="password_baru" name="password_baru"></textarea>
							</div>
							<div class="form-group">
								<label for="message-text" class="form-control-label">Konfirmasi Password Baru: </label>
								<input type="password" class="form-control" id="konfirmasi" name="konfirmasi"></textarea>
							</div>
							{{--<div class="form-group">--}}
								{{--<label for="message-text" class="form-control-label">Password: </label>--}}
								{{--<input type="password" class="form-control" id="password" name="password">--}}
							{{--</div>--}}

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								Batal
							</button>
							<button type="submit" onclick="$().ready(function(e){
								swal({
									title : 'Sukses',
									text : 'Berhasil mengubah password!',
									type : 'success'
									});
								});"
                                 class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</body>

		<!-- </ul> -->
		<!-- begin::Quick Nav -->
    @include('includes.foot')
	@yield('js')
	{{--<script type="text/javascript">--}}
        {{--function ubahPassword(id) {--}}

            {{--var datadata = {!! json_encode($user) !!};--}}
            {{--id = id-1;--}}

            {{--console.log(datadata[id]);--}}
            {{--var idObject = datadata[id].id;--}}
            {{--var email = datadata[id].email;--}}
            {{--var password = datadata[id].password;--}}

            {{--$('#email').val(email);--}}
            {{--$('#password').val(password);--}}

            {{--var url = "{{ url('/') }}/user/password" + (idObject);--}}
            {{--document.getElementById("edit_form").action = url;--}}

            {{--$('#m-edit-password').modal('show');--}}
        {{--}--}}

	{{--</script>--}}
	<!-- end::Body -->
</html>

