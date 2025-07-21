<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle" style="width: 250px; min-width: 250px; max-width: 250px; flex: 0 0 250px;">    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto py-4 d-flex justify-content-center" id="kt_aside_logo">
        <!--begin::Logo-->
        {{-- <a href="#" class="sidebar-banner">
            <img alt="Logo" src="{{ asset('media/logo/ekhairat-banner.png') }}" style="max-height:40px; margin-bottom: 5px;" />
        </a> --}}
        <!--end::Logo-->

        {{-- <button id="kt_aside_minimize_toggle" class="btn btn-sm btn-icon d-none d-lg-inline ms-2 pt-4 " title="Minimize Sidebar" style="color: gray;">
            <i class="ki-duotone ki-double-left fs-2x">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </button> --}}
    </div>
    <!--end::Brand-->

    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid mt-10">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y py-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion mt-5">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
                                <span class="menu-bullet">
                                    <i class="ki-duotone ki-chart-pie-3 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>
                        {{-- <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('projects.index') ? 'active' : '' }}" href="{{ route('projects.index') }}">
                                <span class="menu-bullet">
                                    <i class="ki-duotone ki-office-bag fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Projects</span>
                            </a>
                        </div> --}}
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('settings.index') ? 'active' : '' }}" href="{{ route('settings.index') }}">
                                <span class="menu-bullet">
                                    <i class="ki-duotone ki-setting-2 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Aside menu-->
</div>
