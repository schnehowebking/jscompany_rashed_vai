{{-- menu headers --}}
@if (isset($menu->menuHeader))
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">{{ $menu->menuHeader }}</span>
    </li>
@else
    {{-- active menu method --}}
    @php
        $activeClass = null;
        $currentRouteName = Route::currentRouteName();

        if ($currentRouteName === $menu->slug) {
            $activeClass = 'active';
        } elseif (isset($menu->submenu)) {
            if (gettype($menu->slug) === 'array') {
                foreach ($menu->slug as $slug) {
                    if (str_contains($currentRouteName, $slug) and strpos($currentRouteName, $slug) === 0) {
                        $activeClass = 'active open';
                    }
                }
            } else {
                if (str_contains($currentRouteName, $menu->slug) and strpos($currentRouteName, $menu->slug) === 0) {
                    $activeClass = 'active open';
                }
            }
        }
    @endphp

    {{-- main menu --}}
    <li class="menu-item {{ $activeClass }}">
        <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}"
            class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}"
            @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>
            @isset($menu->icon)
                <i class="{{ $menu->icon }}"></i>
            @endisset
            <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>
        </a>

        {{-- submenu --}}
        @isset($menu->submenu)
            @include('layouts.sections.menu.submenu', ['menu' => $menu->submenu])
        @endisset
    </li>
@endif
