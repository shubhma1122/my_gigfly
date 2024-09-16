<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config()->get('direction') }}">

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title --}}
        <title>{{ __('messages.t_login') }} | {{ __('messages.t_dashboard') }}</title>

        {{-- Custom fonts --}}
		{!! settings('appearance')->font_link !!}

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ src( settings('general')->favicon ) }}"/>

        {{-- Custom css --}}
        <style>
            :root {
                --color-primary-h: {{ hex2hsl( settings('appearance')->colors['primary'] )[0] }};
                --color-primary-s: {{ hex2hsl( settings('appearance')->colors['primary'] )[1] }}%;
                --color-primary-l: {{ hex2hsl( settings('appearance')->colors['primary'] )[2] }}%;
            }
            html {
                font-family: @php echo settings('appearance')->font_family @endphp, sans-serif !important;
            }
        </style>

        {{-- JavaScript variables --}}
        <script>
            __var_app_url        = "{{ url('/') }}";
            __var_app_locale     = "{{ app()->getLocale() }}";
            __var_rtl            = @js(config()->get('direction') === 'ltr' ? false : true);
            __var_primary_color  = "{{ settings('appearance')->colors['primary'] }}";
            __var_axios_base_url = "{{ url('/') }}/";
            __var_currency_code  = "{{ settings('currency')->code }}";
        </script>

        {{-- Custom css --}}
        @stack('styles')

        {{-- Custom head code --}}
        @if (settings('appearance')->custom_code_head_admin_layout)
            {!! settings('appearance')->custom_code_head_admin_layout !!}
        @endif

        {{-- Livewire styles --}}
        @livewireStyles
        
        <wireui:scripts />

        @vite(['resources/css/app.css','resources/js/app.js'])

    </head>

    <body class="antialiased bg-white text-gray-600 min-h-full h-full flex flex-col application application-ltr overflow-x-hidden">

        {{-- Notification --}}
        <x-notifications position="top-center" z-index="z-[65]" />

        {{-- Dialog --}}
        <x-dialog z-index="z-[65]" blur="sm" />

        {{-- Content --}}
        <main class="flex-grow">
            <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-36 pt-16 pb-24 space-y-8 min-h-screen">
                {{ $slot }}
            </div>
        </main>

        {{-- Laravel components --}}
        <fc:scripts />

        {{-- SweetAlert --}}
        <x-livewire-alert::scripts />

        {{-- JS Plugins --}}
        <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

        @fcScripts
        
        <script src="https://unpkg.com/@phosphor-icons/web@2.0.3"></script>

        {{-- Custom scripts --}}
        @stack('scripts')

        {{-- Livewire --}}
        @livewireScriptConfig

        {{-- Custom footer code --}}
        @if (settings('appearance')->custom_code_footer_admin_layout)
            {!! settings('appearance')->custom_code_footer_admin_layout !!}
        @endif

    </body>

</html>