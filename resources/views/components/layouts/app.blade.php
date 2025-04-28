<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/robsontenorio/mary@0.44.2/libs/currency/currency.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    {{-- The navbar with `sticky` and `full-width` --}}
    <x-nav class="shadow-xl" sticky full-width>

        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div>
                <a href="/">
                    <x-icon name="lucide.hotel" class="w-9 h-9 text-orange-500 text-2xl" label="BHD"/>
                </a>
            </div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-button label="Home" icon="lucide.home" link="/" class="btn-ghost btn-sm" responsive />
            <x-button label="Browse Rooms" icon="lucide.building-2" link="/rooms/browse" class="btn-ghost btn-sm" responsive />
            <x-button label="About Us" icon="lucide.lightbulb" link="###" class="btn-ghost btn-sm" responsive />
            @auth
                <x-dropdown>
                    <x-slot:trigger>
                        <x-button icon="lucide.user" class="btn-circle btn-outline" />
                    </x-slot:trigger>

                    @if ( Auth::user()->role_id == 3)
                        <x-menu-item icon="lucide.shield-check" title="Admin Panel" wire:navigate link="/admin" class="text-green-500" />
                    @endif

                    <x-menu-item icon="lucide.user-pen" title="Profile" wire:navigate link="/profile" />
                    @livewire('auth.logout')
                </x-dropdown>
            @endauth
            @guest
            <x-dropdown>
                <x-slot:trigger>
                    <x-button icon="lucide.user" class="btn-circle btn-outline" />
                </x-slot:trigger>

                <x-menu-item icon="lucide.log-in" wire:navigate link="/login" title="Login" />
                <x-menu-item icon="lucide.user-pen" title="Register" />
            </x-dropdown>
            @endguest
        </x-slot:actions>
    </x-nav>

    {{-- The main content with `full-width` --}}
    <x-main with-nav full-width>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />
</body>
</html>
