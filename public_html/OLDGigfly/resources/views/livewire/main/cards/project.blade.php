<div class="flex flex-col rounded shadow bg-white dark:bg-zinc-800 overflow-hidden {{ $highlighted ? 'ltr:border-l-[6px] rtl:border-r-[6px] border-primary-600' : '' }}">
    <div class="p-5 lg:p-6 grow w-full flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
        <div class="grow">

            {{-- Category --}}
            <a href="{{ url('explore/projects', $category['slug']) }}" class="text-gray-500 dark:text-zinc-200 tracking-wide text-xs font-normal hover:underline hover:text-gray-600">
                {{ $category['title'] }}
            </a>

            {{-- Title --}}
            <a href="{{ url('project/' . $pid . '/' . $slug) }}" class="font-semibold md:text-lg text-zinc-900 dark:text-white hover:text-primary-600 dark:hover:text-primary-400 flex">
                {{ $title }}
            </a>

            {{-- Details --}}
            <div class="flex items-center mt-1">

                {{-- Bids --}}
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400 ltr:mr-2 rtl:ml-2" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.707 2.293A.997.997 0 0 0 11 2H6a.997.997 0 0 0-.707.293l-3 3A.996.996 0 0 0 2 6v5c0 .266.105.52.293.707l10 10a.997.997 0 0 0 1.414 0l8-8a.999.999 0 0 0 0-1.414l-10-10zM13 19.586l-9-9V6.414L6.414 4h4.172l9 9L13 19.586z"></path><circle cx="8.353" cy="8.353" r="1.647"></circle></svg>
                    <span class="text-sm text-gray-400 dark:text-gray-300 whitespace-nowrap">{{ $total_bids }} {{ strtolower(__('messages.t_bids')) }}</span>
                </div>

                {{-- Budget type --}}
                <div class="flex items-center ltr:ml-4 ltr:pl-4 ltr:border-l rtl:mr-4 rtl:pr-4 rtl:border-r border-gray-300 dark:border-zinc-600">
                    <svg class="w-5 h-5 text-gray-400 ltr:mr-2 rtl:ml-2" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 12h2v4h-2z"></path><path d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zM5 5h13v2H5a1.001 1.001 0 0 1 0-2zm15 14H5.012C4.55 18.988 4 18.805 4 18V8.815c.314.113.647.185 1 .185h15v10z"></path></svg>
                    @if ($budget_type === 'fixed')
                        <span class="text-sm text-gray-400 dark:text-gray-300 whitespace-nowrap">{{ __('messages.t_fixed_price') }}</span>
                    @else
                        <span class="text-sm text-gray-400 dark:text-gray-300 whitespace-nowrap">{{ __('messages.t_hourly_price') }}</span>
                    @endif
                </div>

                {{-- Created at --}}
                <div class="flex items-center ltr:ml-4 ltr:pl-4 ltr:border-l rtl:mr-4 rtl:pr-4 rtl:border-r border-gray-300 dark:border-zinc-600">
                    <svg class="w-5 h-5 text-gray-400 ltr:mr-2 rtl:ml-2" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path></svg>
                    <span class="text-sm text-gray-400 dark:text-gray-300 whitespace-nowrap">{{ $created_at }}</span>
                </div>

            </div>

            {{-- Description --}}
            <p class="leading-relaxed text-gray-500 dark:text-gray-400 mt-4 break-all" style="word-break: break-word;">
                {{ htmlspecialchars_decode($description) }}
            </p>
            
            {{-- Skills --}}
            <div class="mt-4 space-y-1">
                @foreach ($skills as $skill)
                    <div class="font-medium inline-flex px-3 py-1.5 text-xs rounded-sm border border-transparent text-gray-600 bg-gray-100 hover:bg-gray-200 hover:text-gray-500 dark:bg-primary-600 dark:text-white dark:hover:border-primary-600 dark:hover:bg-primary-200 dark:hover:text-primary-800 transition-colors duration-300">
                        {{ $skill->skill->name }}
                    </div>
                @endforeach
            </div>

        </div>

        {{-- Right side --}}
        <div class="flex-none grid items-center md:w-72 space-y-3 md:space-y-0 grid-cols-1">

            {{-- Budget --}}
            <div class="p-3 bg-gray-100 dark:bg-zinc-600 rounded-lg">

                <div class="flex items-center justify-center space-x-1 rtl:space-x-reverse">

                    {{-- Min price --}}
                    <span class="text-black dark:text-white font-semibold text-sm">
                        {{ $budget_min }}
                    </span>

                    {{-- Divider --}}
                    <span class="text-xs text-gray-400 px-1">/</span>

                    {{-- Max price --}}
                    <span class="text-black dark:text-white font-semibold text-sm">
                        {{ $budget_max }}    
                    </span>

                </div> 

            </div>

            {{-- Bid now --}}
            <div class="flex flex-col">
                <a href="{{ url('project/' . $pid . '/' . $slug) }}" class="inline-flex justify-center items-center border font-semibold focus:outline-none px-3 py-3 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-900 dark:border-zinc-700/40 dark:text-zinc-100 dark:hover:bg-zinc-800">
                    @if ($status === 'active')
                        <span class="text-sm">{{ __('messages.t_bid_now') }}</span>
                    @else
                        <span class="text-sm">{{ __('messages.t_view_project') }}</span>
                    @endif
                </a>
            </div>

            {{-- Urgent / Completed --}}
            @if ($status === 'completed')
                <span class="flex items-center justify-center relative">
                    <span class="text-xs uppercase font-semibold tracking-widest text-green-500 dark:text-green-400">
                        {{ __('messages.t_project_completed') }}
                    </span>
                </span>
            @elseif ($urgent)
                <span class="flex items-center justify-center relative">
                    <span class="text-xs uppercase font-semibold tracking-widest text-red-500 animate-pulse">
                        {{ __('messages.t_urgent_project') }}
                    </span>
                </span>
            @endif

        </div>

    </div>
</div>