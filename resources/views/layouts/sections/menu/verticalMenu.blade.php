@php
    $configData = Helper::appClasses();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    @if (!isset($navbarFull))
        <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link">
                <span class="app-brand-text demo menu-text fw-bold ms-2">{{ app_setting('appname') }}</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
                <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
            </a>
        </div>
    @endif

    <!-- ! Hide menu divider if navbar-full -->
    @if (!isset($navbarFull))
        <div class="menu-divider mt-0 ">
        </div>
    @endif

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @foreach ($menuData[0]->menu as $menu)
            {{-- adding active and open class if child is active --}}
            @if(isset($menu->role))
              @php
                  $menus = explode(",", $menu->role);
              @endphp
              @if (in_array(auth()->user()->role, $menus))
                @include('layouts.sections.menu.left_menu')
              @endif
            @else
              @include('layouts.sections.menu.left_menu')
            @endif
        @endforeach
    </ul>

</aside>
