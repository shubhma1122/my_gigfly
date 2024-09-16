<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />
                
    {{-- Head --}}
    <div class="w-full mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">
    
                <div class="min-w-0 flex-1">
    
                    {{-- Section heading --}}
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_my_projects')
                    </h2>
    
                    {{-- Breadcrumbs --}}
                    <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                            {{-- Main home --}}
                            <li>
                                <div class="flex items-center">
                                    <a href="{{ url('/') }}" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_home')
                                    </a>
                                </div>
                            </li>
            
                            {{-- My projects --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_my_projects')
                                    </span>
                                </div>
                            </li>
            
                        </ol>
                    </div>
                    
                </div>
    
                {{-- Actions --}}
                <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                    {{-- Post new project --}}
                    @if (settings('projects')->who_can_post === 'both' || settings('projects')->who_can_post === auth()->user()->account_type)
                        <span class="">
                            <a href="{{ url('post/project') }}" class="inline-flex items-center rounded border border-transparent bg-primary-600 px-4 py-3 text-xs font-medium uppercase text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-opacity-25 focus:ring-primary-500 tracking-widest">
                                @lang('messages.t_post_new_project')
                            </a>
                        </span>
                    @endif
        
                </div>
    
            </div>
        </div>
    </div>

    {{-- Success message --}}
    @if (session()->has('success'))
        <div class="mb-6 w-full">
            <div class="rounded-sm bg-green-100 p-5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <p class="text-sm font-medium text-green-800">{{ session()->get('success') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Error message --}}
    @if (session()->has('error'))
        <div class="mb-6 w-full">
            <div class="rounded-sm bg-red-100 p-5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <p class="text-sm font-medium text-red-800">{{ session()->get('error') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Session message --}}
    @if (session()->has('message'))
        <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 mx-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd"/></svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3 flex items-center">
                    <p class="text-xs font-bold tracking-wide text-red-700">
                        {{ session()->get('message') }}
                    </p>
                </div>
            </div>
        </div>  
    @endif

    {{-- Body --}}
    <div class="w-full">
        @if ($projects->count())
            
            {{-- Projects --}}
            <div class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
                <table class="w-full text-left border-spacing-y-[10px] border-separate sm:mt-2">
                    <thead class="">
                        <tr class="bg-slate-200 dark:bg-zinc-600">
    
                            {{-- Project --}}
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">@lang('messages.t_project')</th>
    
                            {{-- Status --}}
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">@lang('messages.t_status')</th>
    
                            {{-- Budget --}}
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">@lang('messages.t_budget')</th>
    
                            {{-- Date --}}
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">@lang('messages.t_submitted_date')</th>
    
                            {{-- Options --}}
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">@lang('messages.t_options')</th>
    
                        </tr>
                    </thead>
                    <thead>
                        @foreach ($projects as $project)
                            <tr class="intro-x shadow-sm bg-white dark:bg-zinc-800 rounded-md h-16" wire:key="employer-projects-{{ $project->uid }}">
    
                                {{-- Project --}}
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md w-52 rtl:text-right">
                                    <div class="flex justify-center flex-col">
                                            
                                        {{-- Title --}}
                                        <a href="{{ url('project/' . $project->pid . '/' . $project->slug) }}" class="text-black font-bold whitespace-nowrap truncate block max-w-xs hover:text-primary-600 dark:text-white text-[0.9375rem] mb-2 dark:hover:text-primary-600" title="{{ $project->title }}">
                                            {{ $project->title }}
                                        </a>

                                        {{-- Details --}}
                                        <div class="flex items-center text-xs font-normal leading-6 text-gray-500 dark:text-zinc-300 whitespace-nowrap">

                                            {{-- Bids --}}
                                            <div class="flex items-center">
                                                <span>
                                                    @if ((int)$project->bids_count <= 1)
                                                        {{ $project->bids_count }}
                                                        <span class="lowercase font-normal">@lang('messages.t_bid')</span>
                                                    @else
                                                        {{ $project->bids_count }}
                                                        <span class="lowercase font-normal">@lang('messages.t_bids')</span>
                                                    @endif
                                                </span>
                                            </div>

                                            {{-- Divider --}}
                                            <span class="mx-3 h-3 w-px bg-slate-200 dark:bg-zinc-700"></span>

                                            {{-- Clicks --}}
                                            <div class="flex items-center">
                                                <span>
                                                    @if ((int)$project->counter_views <= 1)
                                                        {{ $project->counter_views }}
                                                        <span class="lowercase font-normal">@lang('messages.t_click')</span>
                                                    @else
                                                        {{ $project->counter_views }}
                                                        <span class="lowercase font-normal">@lang('messages.t_clicks')</span>
                                                    @endif
                                                </span>
                                            </div>

                                            {{-- Divider --}}
                                            <span class="mx-3 h-3 w-px bg-slate-200 dark:bg-zinc-700"></span>

                                            {{-- Impressions --}}
                                            <div class="flex items-center">
                                                <span>
                                                    @if ((int)$project->counter_impressions <= 1)
                                                        {{ $project->counter_impressions }}
                                                        <span class="lowercase font-normal">@lang('messages.t_impression')</span>
                                                    @else
                                                        {{ $project->counter_impressions }}
                                                        <span class="lowercase font-normal">@lang('messages.t_impressions')</span>
                                                    @endif
                                                </span>
                                            </div>
                                            
                                        </div>
    
                                    </div>
                                </td>

                                {{-- Status --}}
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    @switch($project->status)

                                        {{-- Active --}}
                                        @case('active')
                                            <span class="bg-emerald-100 text-emerald-700 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_active')
                                            </span>
                                            @break

                                        {{-- Pending approval --}}
                                        @case('pending_approval')
                                            <span class="bg-amber-100 text-amber-700 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_pending_approval')
                                            </span>
                                            @break

                                        {{-- Pending payment --}}
                                        @case('pending_payment')
                                            <span class="bg-amber-100 text-amber-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_pending_payment')
                                            </span>
                                            @break

                                        {{-- Completed --}}
                                        @case('completed')
                                            <span class="bg-green-100 text-green-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_completed')
                                            </span>
                                            @break

                                        {{-- Hidden --}}
                                        @case('hidden')
                                            <span class="bg-gray-100 text-gray-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_hidden')
                                            </span>
                                            @break

                                        {{-- Rejected --}}
                                        @case('rejected')
                                            <span class="bg-red-100 text-red-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_needs_changes')
                                            </span>
                                            @break

                                        {{-- Under development --}}
                                        @case('under_development')
                                            <span class="bg-blue-100 text-blue-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_under_development')
                                            </span>
                                            @break

                                        {{-- Pending final review --}}
                                        @case('pending_final_review')
                                            <span class="bg-fuchsia-100 text-fuchsia-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_pending_final_review')
                                            </span>
                                            @break

                                        {{-- Incomplete --}}
                                        @case('incomplete')
                                            <span class="bg-stone-100 text-stone-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_incomplete')
                                            </span>
                                            @break

                                        {{-- Closed --}}
                                        @case('closed')
                                            <span class="bg-rose-100 text-rose-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                @lang('messages.t_closed')
                                            </span>
                                            @break

                                        @default
                                            
                                    @endswitch
                                </td>

                                {{-- Budget --}}
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    <div class="flex items-center justify-center">
                                        {{-- Min price --}}
                                        <span class="text-black dark:text-white font-semibold text-sm whitespace-nowrap">
                                            @money($project->budget_min, settings('currency')->code, true)
                                        </span>

                                        {{-- Divider --}}
                                        <span class="text-sm text-gray-400 px-2">/</span>

                                        {{-- Max price --}}
                                        <span class="text-black dark:text-white font-semibold text-sm whitespace-nowrap">
                                            @money($project->budget_max, settings('currency')->code, true)
                                        </span>
                                    </div>
                                </td>

                                {{-- Date --}}
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    <div class="text-gray-700 dark:text-gray-100 text-sm font-medium">
                                        {{ format_date($project->created_at) }}
                                    </div>
                                </td>

                                {{-- Options --}}
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                        {{-- Checkout --}}
                                        @if ($project->status === 'pending_payment' && $project->subscriptions && isset($project->subscriptions[0]))
                                            <div class="flex items-center justify-center">
                                                <a href="{{ url('account/projects/checkout', $project->subscriptions[0]->uid) }}" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-checkout-{{ $project->uid }}">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>
                                                </a>
                                                <x-forms.tooltip id="tooltip-actions-checkout-{{ $project->uid }}" :text="__('messages.t_finish_payment')" />
                                            </div>
                                        @endif

                                        {{-- Edit --}}
                                        @if (in_array($project->status, ['pending_approval', 'pending_payment', 'active', 'rejected']))
                                            <div class="flex items-center justify-center">
                                                <a href="{{ url('account/projects/edit', $project->uid) }}" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-edit-{{ $project->uid }}">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                                </a>
                                                <x-forms.tooltip id="tooltip-actions-edit-{{ $project->uid }}" :text="__('messages.t_edit_project')" />
                                            </div>
                                        @endif

                                        {{-- Milestones --}}
                                        @if ($project->awarded_bid && $project->awarded_bid->is_freelancer_accepted)
                                            <div class="flex items-center justify-center">
                                                <a href="{{ url('account/projects/milestones', $project->uid) }}" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-milestones-{{ $project->uid }}">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 12h2v4h-2z"></path><path d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zM5 5h13v2H5a1.001 1.001 0 0 1 0-2zm15 14H5.012C4.55 18.988 4 18.805 4 18V8.815c.314.113.647.185 1 .185h15v10z"></path></svg>
                                                </a>
                                                <x-forms.tooltip id="tooltip-actions-milestones-{{ $project->uid }}" :text="__('messages.t_milestone_payments')" />
                                            </div>
                                        @endif

                                        {{-- Contact freelancer --}}
                                        @if ($project->awarded_bid && $project->awarded_bid?->user)
                                            <div class="flex items-center justify-center">
                                                <a href="{{ url('messages/new', $project->awarded_bid->user->username) }}" target="_blank" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-contact-{{ $project->uid }}">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                                                </a>
                                                <x-forms.tooltip id="tooltip-actions-contact-{{ $project->uid }}" :text="__('messages.t_contact_freelancer')" />
                                            </div>
                                        @endif

                                        {{-- Rejection reason --}}
                                        @if ($project->status === 'rejected' && $project->rejection_reason)
                                            <div class="flex items-center justify-center">
                                                <button id="modal-rejection-reason-button-{{ $project->uid }}" type="button" data-tooltip-target="tooltip-actions-rejection-{{ $project->uid }}" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-rejection-{{ $project->uid }}">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z"></path><path d="M11 6h2v8h-2zm0 10h2v2h-2z"></path></svg>
                                                </button>
                                                <x-forms.tooltip id="tooltip-actions-rejection-{{ $project->uid }}" :text="__('messages.t_rejection_reason')" />
                                            </div>
                                        @endif

                                        {{-- Delete --}}
                                        @if (in_array($project->status, ['pending_approval', 'pending_payment', 'active', 'rejected', 'hidden']))
                                            <div class="flex items-center justify-center">
                                                <button wire:click="confirmDelete('{{ $project->uid }}')" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-delete-{{ $project->uid }}">
                                                    <svg class="w-4 h-4 text-red-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                                </button>
                                                <x-forms.tooltip id="tooltip-actions-delete-{{ $project->uid }}" :text="__('messages.t_delete_project')" />
                                            </div>
                                        @endif
                                        
                                    </div>
                                </td>

                            </tr>

                            {{-- Rejection reason --}}
                            @if ($project->status === 'rejected' && $project->rejection_reason)
                                <x-forms.modal id="modal-rejection-reason-container-{{ $project->uid }}" target="modal-rejection-reason-button-{{ $project->uid }}" uid="modal_{{ uid() }}" placement="center-center" size="max-w-md">

                                    {{-- Header --}}
                                    <x-slot name="title">{{ __('messages.t_rejection_reason') }}</x-slot>

                                    {{-- Body --}}
                                    <x-slot name="content">

                                        {{-- Message --}}
                                        <div class="text-sm text-gray-500 dark:text-zinc-300 leading-relaxed">
                                            {!! $project->rejection_reason !!}
                                        </div>

                                    </x-slot>

                                </x-forms.modal>
                            @endif

                        @endforeach
                    </thead>
                </table>
            </div>

        @else

            {{-- No awarded projects yet --}}
            <div class="border-dashed border-2 dark:border-zinc-500 rounded-md">
                <div class="py-14 px-6 text-center text-sm sm:px-14">
                    <svg class="mx-auto h-14 w-14 text-slate-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z"></path></svg>
                    <p class="mt-4 font-semibold text-slate-700 dark:text-zinc-300 text-[15px]">{{ __('messages.t_no_projects_yet') }}</p>
                    <p class="mt-2 text-slate-500 dark:text-zinc-400 max-w-md mx-auto">{{ __('messages.t_contact_skilled_freelancers_within_mintes') }}</p>
                </div>
            </div>

        @endif
    </div>

    {{-- Pages --}}
    @if ($projects->hasPages())
        <div class="flex justify-center pt-12">
            {!! $projects->links('pagination::tailwind') !!}
        </div>
    @endif
    
</div>