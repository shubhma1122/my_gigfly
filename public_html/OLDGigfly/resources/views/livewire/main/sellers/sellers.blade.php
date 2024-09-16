<div class="w-full">

    {{-- Section title --}}
    <div class="max-w-xl mx-auto mb-12 text-center block">
        <h1 class="text-xl md:text-2xl font-extrabold text-black dark:text-white">
            {{ __('messages.t_top_sellers') }}
        </h1>
        <p class="text-sm md:text-base text-gray-400 dark:text-gray-300 font-normal mt-2">
            {{ __('messages.t_hire_our_best_sellers') }}    
        </p>
    </div>

    {{-- List of sellers --}}
    <ul role="list" class="grid grid-cols-1 md:gap-x-6 gap-y-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">
        @foreach ($sellers as $seller)
            <li class="col-span-1 flex flex-col text-center bg-white dark:bg-zinc-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-zinc-700">
                <div class="flex-1 flex flex-col p-8">

                    {{-- Avatar --}}
                    <img class="w-28 h-28 flex-shrink-0 mx-auto rounded-full object-cover lazy" src="{{ placeholder_img() }}" data-src="{{ src($seller->avatar) }}" alt="{{ $seller->username }}">
                    <h3 class="mt-6 text-gray-900 dark:text-gray-200 text-base font-bold tracking-wider flex items-center justify-center">
                        {{ $seller->username }}
                        @if ($seller->status === 'verified')
                            <img data-tooltip-target="tooltip-account-verified-{{ $seller->id }}" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="{{ url('public/img/auth/verified-badge.svg') }}" alt="{{ __('messages.t_account_verified') }}">
                            <div id="tooltip-account-verified-{{ $seller->id }}" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                {{ __('messages.t_account_verified') }}
                            </div>
                        @endif
                    </h3>
                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dt class="sr-only">Level</dt>
                        <dd class="text-sm font-medium" style="color:{{ $seller->level->level_color }}">{{ $seller->level->title }}</dd>
                        <dt class="sr-only">Skills</dt>
                        <dd class="mt-5 space-x-2 rtl:space-x-reverse">
                            @foreach ($seller->skills()->limit(3)->get() as $skill)
                                <span class="inline-flex mb-2 px-3 py-1.5 items-center text-gray-800 dark:text-zinc-400 text-xs font-medium bg-gray-100 dark:bg-zinc-700 rounded-full">
                                    {{ $skill->name }}
                                </span>
                            @endforeach
                        </dd>
                    </dl>

                </div>

                {{-- Actions --}}
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200 dark:divide-zinc-700 rtl:divide-x-reverse">

                        {{-- Contact me --}}
                        <div class="w-0 flex-1 flex">
                            <a href="{{ url('messages/new', $seller->username) }}" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-xs text-gray-700 dark:text-gray-200 dark:hover:text-gray-100 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/> <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/> </svg>
                                <span class="ltr:ml-2 rtl:mr-2">{{ __('messages.t_contact_me') }}</span>
                            </a>
                        </div>

                        {{-- View my profile --}}
                        <div class="-ml-px w-0 flex-1 flex">
                            <a href="{{ url('profile', $seller->username) }}" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-xs text-gray-700 dark:text-gray-200 dark:hover:text-gray-100 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/></svg>
                                <span class="ltr:ml-2 rtl:mr-2">{{ __('messages.t_view_profile') }}</span>
                            </a>
                        </div>

                    </div>
                </div>

            </li>
        @endforeach
    </ul>

    {{-- Pages --}}
    @if ($sellers->hasPages())
        <div class="flex justify-center pt-12">
            {!! $sellers->links('pagination::tailwind') !!}
        </div>
    @endif

</div>