<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config()->get('direction') }}" @class(['dark' => current_theme() === 'dark'])>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Generate seo tags --}}
        {!! SEO::generate() !!}
        {!! JsonLd::generate() !!}

        {{-- Custom fonts --}}
		{!! settings('appearance')->font_link !!}

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ src( settings('general')->favicon ) }}"/>

        {{-- Css styles --}}
        <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

        {{-- Preload hero section image --}}
		@if (settings('hero')->enable_bg_img)

            {{-- Small background --}}
            @if (settings('hero')->background_small)
                <link rel="preload prefetch" as="image" href="{{ src(settings('hero')->background_small) }}" type="image/webp" />
            @endif

            {{-- Medium background --}}
            @if (settings('hero')->background_medium)
                <link rel="preload prefetch" as="image" href="{{ src(settings('hero')->background_medium) }}" type="image/webp" />
            @endif

            {{-- Large background --}}
            @if (settings('hero')->background_large)
                <link rel="preload prefetch" as="image" href="{{ src(settings('hero')->background_large) }}" type="image/webp" />
            @endif

        @endif

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        {{-- Livewire styles --}}
        @livewireStyles

		{{-- Custom css --}}
        <style>
            :root {
                --color-primary  : {{ settings('appearance')->colors['primary'] }};
                --color-primary-h: {{ hex2hsl( settings('appearance')->colors['primary'] )[0] }};
                --color-primary-s: {{ hex2hsl( settings('appearance')->colors['primary'] )[1] }}%;
                --color-primary-l: {{ hex2hsl( settings('appearance')->colors['primary'] )[2] }}%;
            }
            html {
                font-family: @php echo settings('appearance')->font_family @endphp, sans-serif !important;
            }
            .fileuploader, .fileuploader-popup {
                font-family: @php echo settings('appearance')->font_family @endphp, sans-serif !important;
            }
        </style>

        {{-- Styles --}}
        @stack('styles')

        {{-- JavaScript variables --}}
        <script>
            __var_app_url        = "{{ url('/') }}";
            __var_app_locale     = "{{ app()->getLocale() }}";
            __var_rtl            = @js(config()->get('direction') === 'ltr' ? false : true);
            __var_primary_color  = "{{ settings('appearance')->colors['primary'] }}";
            __var_axios_base_url = "{{ url('/') }}/";
            __var_currency_code  = "{{ settings('currency')->code }}";
        </script>

        {{-- Ads header code --}}
        @if (advertisements('header_code'))
            {!! advertisements('header_code') !!}
        @endif

        {{-- Custom head code --}}
        @if (settings('appearance')->custom_code_head_main_layout)
            {!! settings('appearance')->custom_code_head_main_layout !!}
        @endif

        @vite(['resources/css/app.css','resources/js/app.js'])

    </head>

    <body class="w-full antialiased bg-gray-50 dark:bg-zinc-700 text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-scroll {{ app()->getLocale() === 'ar' ? 'application-ar' : '' }}" style="overflow-y: scroll">

        {{-- Set php variables --}}
        @php
    
            // Get primary logo
            $logo             = src(settings('general')->logo);

            // Get dark logo
            $logo_dark        = src(settings('general')->logo_dark);

            // Get transparent logo
            $logo_transparent = src(settings('general')->logo_transparent);

            // Get logo's height
            $logo_height      = isset(settings('appearance')->sizes['header_desktop_logo_height']) ? settings('appearance')->sizes['header_desktop_logo_height'] : 50;

            // Get site title
            $site_title       = settings('general')->title;

        @endphp

        {{-- Content --}}
		<div x-data="{ userDropdownOpen: false, mobileNavOpen: false }" class="flex flex-col mx-auto w-full min-h-screen" x-cloak>
            
            {{-- Header --}}
            <header class="flex flex-none items-center bg-white shadow-sm z-1 border-b dark:bg-zinc-800 dark:border-transparent">
                <div class="container xl:max-w-7xl mx-auto px-4 lg:px-8">

                    {{-- Navbar --}}
                    <div class="flex justify-between py-4">
                    
                        {{-- Logo --}}
                        <div class="flex items-center">
                            @if (current_theme() == 'dark' && settings('general')->logo_dark)
                                <a href="{{ url('/') }}" class="block sm:ltr:mr-6 sm:rtl:ml-6">
                                    <img width="150" height="{{ $logo_height }}" src="{{ $logo_dark }}" alt="{{ $site_title }}" style="height:{{ $logo_height }}px;width:auto" data-primary-logo="{{ $logo_dark }}" data-transparent-logo="{{ $logo_transparent }}" id="primary-logo-img">
                                </a>
                            @else
                                <a href="{{ url('/') }}" class="block sm:ltr:mr-6 sm:rtl:ml-6">
                                    <img width="150" height="{{ $logo_height }}" src="{{ src(settings('general')->logo) }}" alt="{{ $site_title }}" style="height:{{ $logo_height }}px;width:auto" data-primary-logo="{{ $logo }}" data-transparent-logo="{{ $logo_transparent }}" id="primary-logo-img">
                                </a>
                            @endif
                        </div>
            
                        {{-- Right section --}}
                        <div class="flex items-center space-x-1 lg:space-x-5 rtl:space-x-reverse">
                            
                            {{-- Desktop navigation --}}
                            <nav class="hidden lg:flex lg:items-center lg:space-x-2 rtl:space-x-reverse">

                                {{-- Home --}}
                                <a href="{{ url('/') }}" class="text-sm font-semibold flex items-center space-x-2 rtl:space-x-reverse px-3 py-2 rounded bg-gray-50 dark:bg-zinc-700 dark:text-zinc-300 hover:bg-primary-50 hover:text-primary-600 dark:hover:bg-zinc-600 dark:hover:text-zinc-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="opacity-50 inline-block w-4.5 h-4.5 -mt-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                                    <span>
                                        @lang('messages.t_home')
                                    </span>
                                </a>

                                {{-- Logout --}}
                                <a href="{{ url('auth/logout') }}" class="text-sm font-semibold flex items-center space-x-2 rtl:space-x-reverse px-3 py-2 rounded bg-gray-50 dark:bg-zinc-700 dark:text-zinc-300 hover:bg-primary-50 hover:text-primary-600 dark:hover:bg-zinc-600 dark:hover:text-zinc-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="opacity-50 inline-block w-4.5 h-4.5 -mt-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                    <span>
                                        @lang('messages.t_logout')
                                    </span>
                                </a>

                            </nav>
            
                            {{-- Toggle Mobile Navigation --}}
                            <div class="lg:hidden">
                                <button
                                    type="button"
                                    class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-gray-300 dark:border-zinc-600 bg-white dark:bg-zinc-700 text-gray-800 dark:text-zinc-300 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                                    x-on:click="mobileNavOpen = !mobileNavOpen"
                                    >
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                            
                        </div>
                    
                    </div>
            
                    {{-- Mobile navbar --}}
                    <div x-show="mobileNavOpen" class="lg:hidden">
                        <nav class="flex flex-col space-y-2 py-4 border-t dark:border-zinc-700">

                            {{-- Home --}}
                            <a href="{{ url('/') }}" class="text-sm font-semibold flex items-center space-x-2 rtl:space-x-reverse px-3 py-2 rounded bg-gray-50 dark:bg-zinc-700 dark:text-zinc-300 hover:bg-primary-50 hover:text-primary-600 dark:hover:bg-zinc-600 dark:hover:text-zinc-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="opacity-50 inline-block w-4.5 h-4.5 -mt-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                                <span>
                                    @lang('messages.t_home')
                                </span>
                            </a>

                            {{-- Logout --}}
                            <a href="{{ url('auth/logout') }}" class="text-sm font-semibold flex items-center space-x-2 rtl:space-x-reverse px-3 py-2 rounded bg-gray-50 dark:bg-zinc-700 dark:text-zinc-300 hover:bg-primary-50 hover:text-primary-600 dark:hover:bg-zinc-600 dark:hover:text-zinc-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="opacity-50 inline-block w-4.5 h-4.5 -mt-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                <span>
                                    @lang('messages.t_logout')
                                </span>
                            </a>

                        </nav>
                    </div>
                    
                </div>
            </header>
          
            {{-- Content --}}
            <main class="flex flex-auto flex-col max-w-full">
                <div class="container xl:max-w-7xl mx-auto px-4 py-8 lg:py-20 lg:px-8">
                    {{ $slot }}
                </div>
            </main>

        </div>

        {{-- Livewire --}}
        @livewireScriptConfig

        {{-- Custom JS codes --}}
        <script defer>
            
            document.addEventListener("DOMContentLoaded", function(){

                jQuery.event.special.touchstart = {
                    setup: function( _, ns, handle ) {
                        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
                    }
                };
                jQuery.event.special.touchmove = {
                    setup: function( _, ns, handle ) {
                        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
                    }
                };
                jQuery.event.special.wheel = {
                    setup: function( _, ns, handle ){
                        this.addEventListener("wheel", handle, { passive: true });
                    }
                };
                jQuery.event.special.mousewheel = {
                    setup: function( _, ns, handle ){
                        this.addEventListener("mousewheel", handle, { passive: true });
                    }
                };

                // Refresh
                window.addEventListener('refresh',() => {
                    location.reload();
                });

                // Scroll to specific div
                window.addEventListener('scrollTo', (event) => {

                    // Get id to scroll
                    const id = event.detail;

                    // Scroll
                    $('html, body').animate({
                        scrollTop: $("#" + id).offset().top
                    }, 500);

                });

                // Scroll to up page
                window.addEventListener('scrollUp', () => {

                    // Scroll
                    $('html, body').animate({
                        scrollTop: $("body").offset().top
                    }, 500);

                });

            });

            function jwUBiFxmwbrUwww() {
                return {

                    scroll: false,

                    init() {
                        var _this = this;
                        $(document).scroll(function () {
                            $(this).scrollTop() > 70 ? _this.scroll = true : _this.scroll = false;
                        });

                    }

                }
            }
            window.jwUBiFxmwbrUwww = jwUBiFxmwbrUwww();

            document.ontouchmove = function(event){
                event.preventDefault();
            }
            
        </script>

        {{-- Laravel components --}}
        <fc:scripts />

        {{-- SweetAlert --}}
        <x-livewire-alert::scripts />

        {{-- JS Plugins --}}
        <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

        {{-- Custom scripts --}}
        @stack('scripts')

        {{-- Custom footer code --}}
        @if (settings('appearance')->custom_code_footer_main_layout)
            {!! settings('appearance')->custom_code_footer_main_layout !!}
        @endif

        {{-- Scroll event --}}
        @if (is_hero_section())
            <script>
                $(window).scroll(function(){
                    var   screen_width         = screen.width;
                    var   doc                  = document.documentElement;
                    var   top                  = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
                    const header_element       = $('#main-header');
                    const search_box           = $('.main-search-box');
                    const logo_img_element     = $('#primary-logo-img');
                    const primary_logo_src     = logo_img_element.attr('data-primary-logo');
                    const transparent_logo_src = logo_img_element.attr('data-transparent-logo');

                    if (top >= 100) {
                        header_element.addClass('main-header-scrolling');
                        logo_img_element.attr('src', primary_logo_src);
                    } else if (top == 0 || top <= 100) {
                        header_element.removeClass('main-header-scrolling');
                        logo_img_element.attr('src', transparent_logo_src);
                    }

                    if (screen_width > 1024) {
                        if (top >= 200) {
                            search_box.removeClass('hidden');
                        } else if (top < 200) {
                            search_box.addClass('hidden');
                        }
                    }
                });

                window.addEventListener('load', function () {
                    var   screen_width         = screen.width;
                    var   top                  = self['pageYOffset'] || document.documentElement.scrollTop;
                    const header_element       = $('#main-header');
                    const search_box           = $('.main-search-box');
                    const logo_img_element     = $('#primary-logo-img');
                    const primary_logo_src     = logo_img_element.attr('data-primary-logo');
                    const transparent_logo_src = logo_img_element.attr('data-transparent-logo');

                    if (top >= 100) {
                        header_element.addClass('main-header-scrolling');
                        logo_img_element.attr('src', primary_logo_src);
                    } else if (top == 0 || top <= 100) {
                        header_element.removeClass('main-header-scrolling');
                        logo_img_element.attr('src', transparent_logo_src);
                    }

                    if (screen_width > 1024) {
                        if (top >= 200) {
                            search_box.removeClass('hidden');
                        } else if (top < 200) {
                            search_box.addClass('hidden');
                        }
                    }

                });
        
            </script>
        @endif

        {{-- Wire modals --}}
        @livewire('wire-elements-modal')

        @fcScripts
        
        <script src="https://unpkg.com/@phosphor-icons/web@2.0.3"></script>

    </body>

</html>