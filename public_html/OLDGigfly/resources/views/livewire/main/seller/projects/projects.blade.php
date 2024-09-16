<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />
    
    {{-- Heading --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">
    
                <div class="min-w-0 flex-1">
    
                    {{-- Section heading --}}
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_awarded_projects')
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
            
                            {{-- My dashboard --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    <a href="{{ url('seller/home') }}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_my_dashboard')
                                    </a>
                                </div>
                            </li>
            
                            {{-- My projects --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_projects')
                                    </span>
                                </div>
                            </li>
            
                        </ol>
                    </div>
                    
                </div>
    
                {{-- Actions --}}
                <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">
        
                    {{-- Submitted proposals --}}
                    <span class="block">
                        <a href="{{ url('seller/projects/bids') }}" class="inline-flex items-center rounded-sm border border-gray-300 bg-white px-4 py-2 text-[13px] font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:bg-zinc-800 dark:border-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-900 dark:focus:ring-offset-zinc-900 dark:focus:ring-zinc-900">
                            @lang('messages.t_submitted_proposals')
                        </a>
                    </span>

                    {{-- Explore projects --}}
					<span class="sm:ltr:ml-3 sm:rtl:mr-3">
						<a href="{{ url('explore/projects') }}" class="inline-flex items-center rounded-sm border border-transparent bg-primary-600 px-4 py-2 text-[13px] font-semibold text-white shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
							@lang('messages.t_explore_projects')
						</a>
					</span>
        
                </div>
    
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 space-y-8">
        @forelse ($projects as $project)

            <div class="bg-white shadow-sm border rounded-md lg:flex lg:flex-row lg:divide-x dark:bg-zinc-800 dark:border-zinc-800 dark:shadow-none dark:divide-zinc-700 lg:rtl:divide-x-reverse divide-y lg:divide-y-0" wire:key="awarded-projects-{{ $project->uid }}">

                {{-- Client --}}
                <div class="shrink-0 w-full lg:w-56 rounded-t-md ltr:lg:rounded-l-md rtl:lg:rounded-r-md lg:ltr:rounded-tr-none lg:rtl:rounded-tl-none">
                    <div class="relative h-full">
                        <div class="flex grow flex-col items-center justify-center h-full px-4 pb-5 sm:px-5 pt-6">

                            {{-- Avatar --}}
                            <div class="h-16 w-16">
                                <img class="object-cover object-center h-16 w-16 rounded-full" src="{{ src($project->client->avatar) }}" alt="{{ $project->client->username }}">
                            </div>

                            {{-- Fullname --}}
                            @if ($project->client->fullname)
                                <h3 class="pt-3 text-sm font-bold text-zinc-900 dark:text-zinc-100 flex items-center">
                                    <span>{{ $project->client->fullname }}</span>  
                                    @if ($project->client->status === 'verified')
                                        @php
                                            $uuid = uid();
                                        @endphp
                                        <img data-tooltip-target="tooltip-account-verified-{{ $uuid }}" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="{{ url('public/img/auth/verified-badge.svg') }}" alt="{{ __('messages.t_account_verified') }}">
                                        <div id="tooltip-account-verified-{{ $uuid }}" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            {{ __('messages.t_account_verified') }}
                                        </div>
                                    @endif
                                </h3>
                            @endif

                            {{-- Username --}}
                            <p class="text-[13px] mt-1 font-medium text-zinc-500 dark:text-zinc-300">{{ $project->client->username }}</p>

                            {{-- Actions --}}
                            <div class="w-full mt-6">

                                {{-- View profile --}}
                                <a href="{{ url('profile', $project->client->username) }}" target="_blank" class="inline-flex items-center justify-center rounded-md border border-transparent bg-primary-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-700 focus:outline-none w-full">
                                    @lang('messages.t_view_profile')
                                </a>
        
                                {{-- Contact --}}
                                <a href="{{ url('messages/new', $project->client->username) }}" target="_blank" class="mt-3 inline-flex items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none w-full dark:bg-zinc-600 dark:border-zinc-600 dark:text-zinc-200 dark:hover:bg-zinc-700 dark:hover:text-zinc-200 dark:hover:border-zinc-600">
                                    @lang('messages.t_send_a_message')
                                </a>

                            </div>
                            
                        </div>
                    </div>
                </div>
                
                {{-- Project details --}}
                <div class="flex w-full grow flex-col px-4 py-6 sm:px-5 justify-center">

                    {{-- Project status --}}
                    <div class="flex items-center justify-between">
                        <div class="mb-3 space-y-2 sm:space-y-0 sm:space-x-2 rtl:space-x-reverse flex flex-col sm:block w-full">

                            {{-- Status --}}
                            @if ($project->status === 'active' && $project->awarded_bid && $project->awarded_bid->status === 'active' && !$project->awarded_bid->is_freelancer_accepted && $project->awarded_freelancer_id == auth()->id())
                                <div class="bg-amber-50 text-amber-600 text-xs font-medium tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm inline dark:bg-zinc-600 dark:text-zinc-200 text-center">
                                    @lang('messages.t_pending_ur_approval')
                                </div>
                            @else
                                @switch($project->status)

                                    {{-- Active --}}
                                    @case('active')
                                        <span class="bg-emerald-50 text-emerald-600 tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm font-medium text-xs dark:bg-zinc-700 text-center">
                                            @lang('messages.t_active')
                                        </span>
                                        @break

                                    {{-- Completed --}}
                                    @case('completed')
                                        <span class="bg-green-50 text-green-600 tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm font-medium text-xs dark:bg-zinc-700 text-center">
                                            @lang('messages.t_completed')
                                        </span>
                                        @break

                                    {{-- Under development --}}
                                    @case('under_development')
                                        <span class="bg-blue-50 text-blue-600 tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm font-medium text-xs dark:bg-zinc-700 text-center">
                                            @lang('messages.t_under_development')
                                        </span>
                                        @break

                                    {{-- Pending final review --}}
                                    @case('pending_final_review')
                                        <span class="bg-fuchsia-50 text-fuchsia-600 tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm font-medium text-xs dark:bg-zinc-700 text-center">
                                            @lang('messages.t_pending_final_review')
                                        </span>
                                        @break

                                    {{-- Incomplete --}}
                                    @case('incomplete')
                                        <span class="bg-stone-50 text-stone-600 tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm font-medium text-xs dark:bg-zinc-700 text-center">
                                            @lang('messages.t_incomplete')
                                        </span>
                                        @break

                                    {{-- Closed --}}
                                    @case('closed')
                                        <span class="bg-rose-50 text-rose-600 tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm font-medium text-xs dark:bg-zinc-700 text-center">
                                            @lang('messages.t_closed')
                                        </span>
                                        @break

                                    @default
                                        
                                @endswitch
                            @endif

                            {{-- Milestone payment --}}
                            @if ($project->has_confirmed_milestone)
                                <div class="bg-slate-100 text-slate-500 text-xs font-medium tracking-wide px-3 py-2.5 sm:py-1.5 rounded-sm inline dark:bg-zinc-700 dark:text-zinc-200 text-center">
                                    @lang('messages.t_milestone_payment_created')
                                </div>
                            @endif

                        </div>
                    </div>

                    {{-- Title --}}
                    <div>
                        <a href="{{ url('project/' . $project->pid . '/' . $project->slug) }}" target="_blank" class="font-semibold md:text-lg text-zinc-900 dark:text-white hover:text-primary-600 dark:hover:text-primary-400 flex">
                            {{ $project->title }}
                        </a>
                    </div>

                    {{-- Description --}}
                    <p class="mt-1 line-clamp-3 leading-relaxed text-sm text-zinc-500 tracking-wide mb-2 dark:text-zinc-300">
                        {{ add_3_dots($project->description, 890) }}
                    </p>

                    {{-- You have 36 hours to accept/decline --}}
                    @if ($project->status === 'active' && $project->awarded_bid && $project->awarded_bid->status === 'active' && !$project->awarded_bid->is_freelancer_accepted && $project->awarded_freelancer_id == auth()->id())
                        <div class="my-2 p-4 md:p-5 rounded text-orange-700 bg-orange-100 dark:bg-zinc-600 dark:text-zinc-300">
                            <div class="flex items-center">
                                <svg class="inline-block w-5 h-5 ltr:mr-3 rtl:ml-3 flex-none text-orange-500 dark:text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                <h3 class="font-semibold grow text-sm tracking-wide">
                                    @lang('messages.t_u_have_36_hours_to_accept_project')
                                </h3>
                            </div>
                        </div>
                    @endif

                    {{-- Actions --}}
                    <div class="mt-1 flex justify-end">
                        <div class="flex justify-between py-3 space-x-4 rtl:space-x-reverse">

                            {{-- Project action buttons --}}
                            @if ( in_array($project->status, ['active', 'completed', 'under_development', 'pending_final_review', 'incomplete', 'closed']) && $project->awarded_bid && $project->awarded_bid->status === 'active' && $project->awarded_bid->is_freelancer_accepted && $project->awarded_freelancer_id == auth()->id() )
                                <div>
                                    <div class="isolate inline-flex rounded-md shadow-sm sm:space-x-3 sm:rtl:space-x-reverse sm:shadow-none">

                                        {{-- Milestones / Bid / Send file --}}
                                        <span class="inline-flex sm:shadow-sm">

                                            {{-- Milestones --}}
                                            <a href="{{ url('seller/projects/milestones', $project->uid) }}" class="relative inline-flex items-center ltr:rounded-l-md rtl:rounded-r-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10  focus:outline-none whitespace-nowrap dark:bg-zinc-700/40 dark:border-zinc-700 dark:text-zinc-200 dark:hover:bg-zinc-700">
                                                <svg class="md:ltr:mr-2.5 md:rtl:ml-2.5 h-5 w-5 text-gray-400 dark:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M19 14V6c0-1.1-.9-2-2-2H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zm-9-1c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm13-6v11c0 1.1-.9 2-2 2H4v-2h17V7h2z"></path></svg>
                                                <span class="hidden md:block">@lang('messages.t_milestones')</span>
                                            </a>

                                            {{-- My proposal --}}
                                            <button type="button" id="modal-my-proposal-button-{{ $project->uid }}" class="relative ltr:-ml-px rtl:-mr-px items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 inline-flex whitespace-nowrap dark:bg-zinc-700/40 dark:border-zinc-700 dark:text-zinc-200 dark:hover:bg-zinc-700">
                                                <svg class="md:ltr:mr-2.5 md:rtl:ml-2.5 h-5 w-5 text-gray-400 dark:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                                                <span class="hidden md:block">@lang('messages.t_my_proposal')</span>
                                            </button>

                                            {{-- Send a file --}}
                                            <a href="{{ url('messages/new', $project->client->username) }}" target="_blank" class="relative ltr:-ml-px rtl:-mr-px items-center ltr:rounded-r-md rtl:rounded-l-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 inline-flex whitespace-nowrap dark:bg-zinc-700/40 dark:border-zinc-700 dark:text-zinc-200 dark:hover:bg-zinc-700">
                                                <svg class="md:ltr:mr-2.5 md:rtl:ml-2.5 h-5 w-5 text-gray-400 dark:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M12.414 5H21a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7.414l2 2zM13 13h3l-4-4-4 4h3v4h2v-4z"></path></g></svg>
                                                <span class="hidden md:block">@lang('messages.t_share_a_file')</span>
                                            </a>

                                        </span>
            
                                        {{-- Cancel project --}}
                                        {{-- <span class="hidden lg:flex">
                                            <button type="button" class="relative ltr:-ml-px rtl:-mr-px hidden items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 sm:inline-flex whitespace-nowrap dark:bg-zinc-700/40 dark:border-zinc-700 dark:text-zinc-200 dark:hover:bg-zinc-700">
                                                <svg class="md:ltr:mr-2.5 md:rtl:ml-2.5 h-5 w-5 text-gray-400 dark:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm86.63 272L320 342.63l-64-64-64 64L169.37 320l64-64-64-64L192 169.37l64 64 64-64L342.63 192l-64 64z"></path></svg>
                                                <span>@lang('messages.t_cancel_project')</span>
                                            </button>
                                        </span> --}}

                                    </div>
                                </div> 
                            @endif
        
                            {{-- Approve / Decline project --}}
                            @if ($project->status === 'active' && $project->awarded_bid && $project->awarded_bid->status === 'active' && !$project->awarded_bid->is_freelancer_accepted && $project->awarded_freelancer_id == auth()->id())
                                <nav>
                                    <span class="isolate inline-flex rounded-md shadow-sm">

                                        {{-- Accept --}}
                                        <button type="button" id="modal-accept-project-button-{{ $project->uid }}" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none whitespace-nowrap dark:bg-zinc-600 dark:border-zinc-500 dark:text-zinc-200 dark:hover:bg-zinc-500">
                                            @lang('messages.t_accept_the_project')
                                        </button>

                                        {{-- Reject --}}
                                        <button type="button" id="modal-reject-project-button-{{ $project->uid }}" class="relative -ml-px inline-flex items-center rounded-r-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none whitespace-nowrap dark:bg-zinc-600 dark:border-zinc-500 dark:text-zinc-200 dark:hover:bg-zinc-500">
                                            @lang('messages.t_reject_the_project')
                                        </button>

                                    </span>
                                </nav>
                            @endif

                        </div>
                    </div>

                </div>

                {{-- Accept modal --}}
                <x-forms.modal id="modal-accept-project-container-{{ $project->uid }}" target="modal-accept-project-button-{{ $project->uid }}" uid="modal_accept_uid_{{ $project->uid }}" placement="center-center" size="max-w-md">

                    {{-- Modal heading --}}
                    <x-slot name="title">{{ __('messages.t_confirmation') }}</x-slot>

                    {{-- Modal content --}}
                    <x-slot name="content">
                        <p class="text-gray-500 font-normal text-sm tracking-wide leading-relaxed">
                            @lang('messages.t_accept_project_confirmation_freelancer_msg')
                        </p>
                    </x-slot>

                    {{-- Footer --}}
                    <x-slot name="footer">
                        <div class="flex justify-between items-center w-full">

                            {{-- Cancel --}}
                            <button x-on:click="close" type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                                @lang('messages.t_cancel')
                            </button>

                            {{-- Accept --}}
                            <button
                                type="button" 
                                wire:click="accept('{{ $project->uid }}')"
                                wire:loading.attr="disabled"
                                class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-transparent bg-primary-600 text-white hover:bg-primary-700 focus:ring focus:ring-primary-500 focus:ring-opacity-25 disabled:bg-gray-200 disabled:hover:bg-gray-200 disabled:text-gray-500 disabled:cursor-not-allowed">
                                
                                {{-- Loading indicator --}}
                                <div wire:loading wire:target="accept('{{ $project->uid }}')">
                                    <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                </div>

                                {{-- Button text --}}
                                <div wire:loading.remove wire:target="accept('{{ $project->uid }}')">
                                    @lang('messages.t_accept_the_project')
                                </div>

                            </button>

                        </div>
                    </x-slot>

                </x-forms.modal>

                {{-- Reject modal --}}
                <x-forms.modal id="modal-reject-project-container-{{ $project->uid }}" target="modal-reject-project-button-{{ $project->uid }}" uid="modal_reject_uid_{{ $project->uid }}" placement="center-center" size="max-w-xl">

                    {{-- Modal heading --}}
                    <x-slot name="title">{{ __('messages.t_rejection_reason') }}</x-slot>

                    {{-- Modal content --}}
                    <x-slot name="content">
                        <p class="text-gray-500 font-normal text-sm tracking-wide leading-relaxed">
                            @lang('messages.t_pls_let_us_know_why_reject_this_project_freelancer')
                        </p>
                        <div class="grid grid-cols-12 md:gap-x-6 gap-y-6 py-2">

                            {{-- Reason --}}
                            <div class="col-span-12">
                                <fieldset class="w-full">
                                    <div class="space-y-4">
                
                                        {{-- List of reasons --}}
                                        @for ($i = 1; $i <= 8; $i++)
                                            <div class="flex items-center">
                                                <input wire:model.defer="reject_reason" value="reason_{{ $i }}" id="freelancer_reject_project_reason_{{ $i }}" name="reject_reason" type="radio" class="focus:ring-primary-600 h-4 w-4 text-primary-700 border-gray-300 dark:bg-zinc-500 dark:border-zinc-400 dark:ring-offset-zinc-600" />
                                                <label for="freelancer_reject_project_reason_{{ $i }}" class="ltr:ml-3 rtl:mr-3 block text-sm font-medium text-gray-700 dark:text-white"> 
                                                    {{ __('messages.t_freelancer_reject_project_reason_' . $i) }}  
                                                </label>
                                            </div>
                                        @endfor
                                        
                                    </div>
                                </fieldset>
                            </div>

                            {{-- Note --}}
                            <div class="col-span-12">
                                <div class="p-4 md:p-5 rounded text-orange-700 bg-orange-100">
                                    <div class="flex items-center">
                                        <svg class="inline-block w-5 h-5 ltr:mr-3 rtl:ml-3 flex-none text-orange-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        <h3 class="font-semibold grow text-[13px]">
                                            @lang('messages.t_ur_bid_will_hidden_after_reject')
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </x-slot>

                    {{-- Footer --}}
                    <x-slot name="footer">
                        <div class="flex justify-between items-center w-full">

                            {{-- Cancel --}}
                            <button x-on:click="close" type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-700/40 dark:border-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-100">
                                @lang('messages.t_cancel')
                            </button>

                            {{-- Reject --}}
                            <button
                                type="button" 
                                wire:click="reject('{{ $project->uid }}')"
                                wire:loading.attr="disabled"
                                class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-transparent bg-primary-600 text-white hover:bg-primary-700 focus:ring focus:ring-primary-500 focus:ring-opacity-25 disabled:bg-gray-200 disabled:hover:bg-gray-200 disabled:text-gray-500 disabled:cursor-not-allowed">
                                
                                {{-- Loading indicator --}}
                                <div wire:loading wire:target="reject('{{ $project->uid }}')">
                                    <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                </div>

                                {{-- Button text --}}
                                <div wire:loading.remove wire:target="reject('{{ $project->uid }}')">
                                    @lang('messages.t_reject_the_project')
                                </div>

                            </button>

                        </div>
                    </x-slot>

                </x-forms.modal>

                {{-- My proposal details --}}
                <x-forms.modal id="modal-my-proposal-container-{{ $project->uid }}" target="modal-my-proposal-button-{{ $project->uid }}" uid="modal_my_proposal_uid_{{ $project->uid }}" placement="center-center" size="max-w-2xl">

                    {{-- Modal heading --}}
                    <x-slot name="title">{{ __('messages.t_my_proposal') }}</x-slot>

                    {{-- Modal content --}}
                    <x-slot name="content">

                        {{-- Bid message --}}
                        <p class="text-sm text-zinc-600 leading-relaxed dark:text-zinc-100">{!! nl2br($project->awarded_bid->message) !!}</p>

                        {{-- Bid amount --}}
                        <div class="flex justify-end">
                            <div></div>
                            <div class="flex items-center text-sm font-normal text-gray-500 bg-gray-100 dark:bg-zinc-700 dark:text-zinc-400 px-3 py-2 rounded-md">
                                <span class="font-semibold text-zinc-800 dark:text-white">
                                    @money($project->awarded_bid->amount, settings('currency')->code, true)
                                </span>
                                <span class="mx-2">/</span>
                                <div>
                                    @if ($project->awarded_bid->days === 1)
                                        {{ $project->awarded_bid->days }} {{ strtolower(__('messages.t_day')) }}
                                    @else
                                        {{ $project->awarded_bid->days }} {{ strtolower(__('messages.t_days')) }}
                                    @endif	
                                </div>
                            </div>
                        </div>
                        
                    </x-slot>

                </x-forms.modal>

            </div>

        @empty
            
            {{-- No awarded projects yet --}}
            <div class="border-dashed border-2 dark:border-zinc-500 rounded-md">
                <div class="py-14 px-6 text-center text-sm sm:px-14">
                    <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="currentColor" stroke-width="0" version="1" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path fill="#FFA000" d="M38,12H22l-4-4H8c-2.2,0-4,1.8-4,4v24c0,2.2,1.8,4,4,4h31c1.7,0,3-1.3,3-3V16C42,13.8,40.2,12,38,12z"></path><path fill="#FFCA28" d="M42.2,18H15.3c-1.9,0-3.6,1.4-3.9,3.3L8,40h31.7c1.9,0,3.6-1.4,3.9-3.3l2.5-14C46.6,20.3,44.7,18,42.2,18z"></path></svg>
                    <p class="mt-4 font-semibold text-gray-900 dark:text-zinc-300 text-[15px]">{{ __('messages.t_ur_projects_page_is_empty') }}</p>
                    <p class="mt-2 text-gray-500 dark:text-zinc-400 max-w-md mx-auto">{{ __('messages.t_ur_projects_page_is_empty_subtitle') }}</p>
                </div>
            </div>

        @endforelse 
    </div>

    {{-- Pages --}}
    @if ($projects->hasPages())
        <div class="flex justify-center pt-12">
            {!! $projects->links('pagination::tailwind') !!}
        </div>
    @endif

</div>