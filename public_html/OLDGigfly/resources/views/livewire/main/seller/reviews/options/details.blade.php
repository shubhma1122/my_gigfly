<div class="container mx-auto" x-data>
    <div class="min-h-full bg-white dark:bg-zinc-800 shadow rounded-md">
        
        {{-- Section heading --}}
        <header class="border-b-2 border-gray-100 dark:border-zinc-700 py-8 rounded-t-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
                <div class="flex-1 min-w-0">

                    {{-- Breadcrumb --}}
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-4 rtl:space-x-reverse">

                            {{-- Main homepage --}}
                            <li>
                                <div>
                                    <a href="{{ url('/') }}" class="text-sm font-medium text-gray-500 dark:text-gray-300 dark:hover:text-gray-200 hover:text-gray-700">{{ __('messages.t_home') }}</a>
                                </div>
                            </li>

                            {{-- Seller dashboard --}}
                            <li>
                                <div class="flex items-center">

                                    {{-- LTR --}}
                                    <svg class="hidden ltr:block flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>

                                    {{-- RTL --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hidden rtl:block flex-shrink-0 h-5 w-5 text-gray-400 viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>

                                    <a href="{{ url('seller/home') }}" class="ltr:ml-4 rtl:mr-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-200">{{ __('messages.t_dashboard') }}</a>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    {{-- Title --}}
                    <h1 class="mt-2 text-xl font-bold leading-7 text-gray-900 dark:text-gray-100 sm:text-2xl sm:truncate">{{ __('messages.t_review_details') }}</h1>

                    {{-- Quick stats --}}
                    <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-8 rtl:space-x-reverse">

                        {{-- User level --}}
                        <div class="mt-2 flex items-center text-xs font-medium" style="color: {{ auth()->user()->level->level_color }}">
                            <svg class="flex-shrink-0 ltr:mr-1.5 rtl:ml-1.5 h-4 w-4" style="color: {{ auth()->user()->level->level_color }};margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/> <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/> </svg>
                            {{ auth()->user()->level->title }}
                        </div>

                        {{-- Succeeded sales --}}
                        <div class="mt-2 flex items-center text-xs text-gray-500 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 ltr:mr-1.5 rtl:ml-1.5 h-4 w-4 -mt-[2px] text-gray-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/></svg>
                            {{ __('messages.t_total_sales_number', ['number' => number_format(auth()->user()->sales->where('status', 'delivered')->where('is_finished', true)->count())]) }}
                        </div>

                        {{-- Country --}}
                        @if (auth()->user()->country)
                            <div class="mt-2 flex items-center text-xs text-gray-500 font-medium">
                                <svg class="flex-shrink-0 ltr:mr-1.5 rtl:ml-1.5 h-4 w-4 -mt-[2px] text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/> </svg>
                                {{ auth()->user()->country->name }}
                            </div>
                        @endif

                        {{-- Sign up date --}}
                        <div class="mt-2 flex items-center text-xs text-gray-500 font-medium">
                            <svg class="flex-shrink-0 ltr:mr-1.5 rtl:ml-1.5 h-4 w-4 -mt-[2px] text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/> </svg>
                            {{ __('messages.t_signed_up_on_date', ['date' => format_date(auth()->user()->created_at, config('carbon-formats.F_j,_Y'))]) }}
                        </div>
                    
                    </div>

                </div>
                <div class="mt-5 flex xl:mt-0 xl:ltr:ml-4 xl:rtl:mr-4">
        
                    {{-- Contact buyer --}}
                    <span class="block ltr:mr-3 rtl:ml-4">
                        <a href="{{ url('messages/new', $review->user->username) }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-primary-600 rounded-sm shadow-sm text-[13px] font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-50 focus:ring-primary-600">
                            {{ __('messages.t_contact_buyer') }}
                        </a>
                    </span>
                    
                </div>
            </div>
        </header>
      
        {{-- Section content --}}
        <main class="pb-16">
            <article class="md:gap-8 md:grid md:grid-cols-3 px-6 py-8">
                <div>
                    <div class="flex items-center mb-6 space-x-4 rtl:space-x-reverse">
                        <img class="w-10 h-10 rounded-full object-cover lazy" src="{{ placeholder_img() }}" data-src="{{ src($review->user->avatar) }}" alt="{{ $review->user->username }}">
                        <div class="space-y-1 font-medium dark:text-white">
                            <p>{{ $review->user->username }}</p>
                            @if ($review->user->country)
                                <div class="flex items-center text-xs text-gray-500 dark:text-gray-400">
                                    <img src="{{ placeholder_img() }}" data-src="{{ url('public/img/flags/' . strtolower($review->user->country->code) . '.svg') }}" alt="{{ $review->user->country->name }}" class="lazy h-3.5 ltr:mr-2 rtl:ml-2">
                                    {{ $review->user->country->name }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <ul class="space-y-4 text-sm text-gray-500 dark:text-gray-400">

                        {{-- Joined date --}}
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ltr:mr-1.5 rtl:ml-1.5" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/></svg>
                            {{ __('messages.t_signed_up_on_date', ['date' => format_date($review->user->created_at, config('carbon-formats.F_j,_Y'))]) }}
                        </li>

                        {{-- Fullname --}}
                        @if ($review->user->fullname)
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ltr:mr-1.5 rtl:ml-1.5" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/></svg>
                                {{ $review->user->fullname }}
                            </li>
                        @endif
                        
                    </ul>
                </div>
                <div class="col-span-2 mt-6 md:mt-0">
                    <div class="flex items-center justify-between mb-5">
                        <div class="pr-4">
                            <footer>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">{{ format_date($review->created_at, 'ago') }}</p>
                            </footer>
                        </div>
                        <p class="bg-blue-700 text-white text-sm font-semibold inline-flex items-center px-3 py-1.5 rounded">{{ $review->rating }}</p>
                    </div>
                    <p class="mb-2 font-light text-gray-500 dark:text-gray-400">
                        {!! nl2br($review->message) !!}
                    </p>
                </div>
            </article>
        </main>
        
    </div>
</div>