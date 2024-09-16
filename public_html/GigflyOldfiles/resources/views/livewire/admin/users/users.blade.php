<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="lg:flex lg:items-center lg:justify-between mb-14">
    
        <div class="min-w-0 flex-1">

            {{-- Section heading --}}
            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                @lang('messages.t_users')
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
    
                    {{-- Dashboard --}}
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="{{ admin_url('/') }}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                @lang('messages.t_dashboard')
                            </a>
                        </div>
                    </li>
    
                    {{-- Current page --}}
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                @lang('messages.t_users')
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

        {{-- Actions --}}
        <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4 justify-between space-x-4 rtl:space-x-reverse">

            {{-- Trash --}}
            <a href="{{ admin_url('users/trash') }}" class="btn p-2.5 hover:shadow-none ring-slate-300 dark:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-slate-300 dark:focus:ring-offset-zinc-600 space-x-2 rtl:space-x-reverse border">
                <x-icon class="w-5 h-5 text-gray-400 dark:text-zinc-300" name="trash" variant="solid" mini />
            </a>

            {{-- Create --}}
            <a href="{{ admin_url('users/create') }}" class="btn p-2.5 hover:shadow-none ring-slate-300 dark:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-slate-300 dark:focus:ring-offset-zinc-600 space-x-2 rtl:space-x-reverse border">
                <x-icon class="w-6 h-6 text-gray-400 dark:text-zinc-300" name="plus" variant="solid" mini />
            </a>

        </div>

    </div>

    {{-- Content --}}
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>

                        <th>@lang('messages.t_user')</th>
                        <th>@lang('messages.t_level')</th>
                        <th class="text-center">@lang('dashboard.t_available_funds')</th>
                        <th class="text-center">@lang('messages.t_registeration_date')</th>
                        <th class="text-center">@lang('messages.t_status')</th>
                        <th class="text-center">@lang('messages.t_options')</th>

                    </tr>
                </thead>
                <tbody>

                    @forelse ($users as $user)
                        <tr wire:key="users-{{ $user->uid }}">
                        
                            {{-- User --}}
                            <td>
                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <div class="h-10 w-10 inline-flex flex-shrink-0 relative">
                                        @if ($user->avatar)
                                            <img class="mask is-squircle object-cover w-full h-full block" src="{{ src($user->avatar) }}" alt="{{ $user->username }}">
                                        @else
                                            @php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            @endphp
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba({{ $color }}, .1);color: rgb({{ $color }})">
                                                {{ Str::substr($user->username, 0, 2) }}
                                            </div>   
                                        @endif
                                    </div>
                                    <div class="-mt-1">
                                        <a href="{{ url('profile', $user->username) }}" target="_blank" class="text-xs+ font-bold tracking-wide whitespace-nowrap dark:text-zinc-100 truncate">
                                            {{ $user->username }}
                                        </a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap dark:text-zinc-300 font-medium truncate">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- Level --}}
                            <td>
                                @if ($user->level?->badge)
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <img src="{{ src($user->level?->badge) }}" alt="{{ $user->level?->title }}" class="h-6 w-6">
                                        <span class="@if ($user->level->level_bg_color) px-3 @else font-semibold @endif py-1 rounded text-xs tracking-wide" style="color: {{ $user->level->level_color }};@if ($user->level->level_bg_color) background-color: {{ $user->level->level_bg_color }} @endif">{{ $user->level?->title }}</span>
                                    </div>
                                @else
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <span class="@if ($user->level->level_bg_color) px-3 @else font-semibold @endif py-1 rounded text-xs tracking-wide" style="color: {{ $user->level->level_color }};@if ($user->level->level_bg_color) background-color: {{ $user->level->level_bg_color }} @endif">{{ $user->level?->title }}</span>
                                    </div>
                                @endif
                            </td>

                            {{-- Funds --}}
                            <td class="text-center">
                                <span class="text-sm font-normal tracking-wide text-gray-700 dark:text-zinc-200">
                                    {{ money($user->balance_available, settings('currency')->code, true) }}
                                </span>
                            </td>

                            {{-- Date --}}
                            <td class="text-center">
                                <span class="text-xs+ font-normal tracking-wide text-gray-400 dark:text-zinc-300">
                                    {{ format_date($user->created_at) }}
                                </span>
                            </td>

                            {{-- Status --}}
                            <td class="text-center">
                                @if ($user->is_restricted)
                                    <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-red-500 dark:text-red-400 lowercase tracking-wide">
                                        <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-red-600 ltr:-mr-1 rtl:-ml-1"></i>
                                        <span>@lang('dashboard.t_restricted')</span>
                                    </div>
                                @else

                                    {{-- Check status --}}
                                    @switch($user->status)

                                        {{-- Pending --}}
                                        @case('pending')
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-amber-500 dark:text-amber-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-amber-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span>@lang('messages.t_pending')</span>
                                            </div>
                                        @break

                                        {{-- Active --}}
                                        @case('active')
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-green-500 dark:text-green-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-green-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span>@lang('messages.t_active')</span>
                                            </div>
                                        @break

                                        {{-- Banned --}}
                                        @case('banned')
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-zinc-500 dark:text-zinc-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-zinc-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span>@lang('messages.t_banned')</span>
                                            </div>
                                        @break

                                        {{-- Verified --}}
                                        @case('verified')
                                            <div class="whitespace-nowrap flex items-center justify-center text-xs font-semibold text-blue-500 dark:text-blue-400 lowercase tracking-wide">
                                                <i class="ph-duotone ph-dot text-3xl mt-[4.5px] text-blue-600 ltr:-mr-1 rtl:-ml-1"></i>
                                                <span>@lang('messages.t_verified')</span>
                                            </div>
                                        @break
                                            
                                    @endswitch

                                @endif
                            </td>

                            {{-- Options --}}
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    {{-- Activate --}}
                                    @if ($user->status == 'pending')
                                        <x-table.action-button 
                                            wire:confirm="{{ __('dashboard.t_are_u_sure_want_proceed') }}"
                                            icon="check-fat" 
                                            :title="__('messages.t_approve')"
                                            icon-color="text-green-400"
                                            action="activate({{ $user->id }})" />
                                    @endif

                                    {{-- Edit --}}
                                    <x-table.action-button 
                                        icon="pencil" 
                                        :title="__('messages.t_edit')"
                                        href="{{ admin_url('users/edit/' . $user->uid) }}" />

                                    {{-- Details --}}
                                    <x-table.action-button 
                                        icon="identification-card" 
                                        :title="__('messages.t_details')"
                                        href="{{ admin_url('users/details/' . $user->uid) }}" />

                                    {{-- Send email --}}
                                    <x-table.action-button 
                                        icon="paper-plane-tilt" 
                                        :title="__('messages.t_send_an_email')"
                                        href="{{ admin_url('users/message/' . $user->uid) }}" />

                                    {{-- Restrict --}}
                                    <x-table.action-button 
                                        icon="user-minus" 
                                        :title="__('dashboard.t_restrict')"
                                        href="{{ admin_url('users/restrict/' . $user->uid) }}" />

                                    {{-- Ban --}}
                                    @if ($user->status != 'banned')
                                        <x-table.action-button 
                                            wire:confirm="{{ __('dashboard.t_are_u_sure_want_proceed') }}"
                                            icon="prohibit" 
                                            :title="__('dashboard.t_ban')"
                                            action="ban($user->id)" />
                                    @endif

                                    {{-- Delete --}}
                                    <x-table.action-button 
                                        wire:confirm="{{ __('dashboard.t_are_u_sure_want_proceed') }}"
                                        icon="trash" 
                                        :title="__('messages.t_move_to_trash')"
                                        icon-color="text-red-600"
                                        action="delete({{ $user->id }})" />

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="text-center px-4 bw-empty-state py-10">

                                    {{-- Image --}}
                                    <img src="{{ asset('img/svg/no-results.svg') }}" class="h-44 rounded-full border w-44 object-cover border-slate-50 max-w-xs mx-auto mb-6">  
                                    
                                    {{-- Info --}}
                                    <div class="text-slate-600/70 dark:text-zinc-300 font-normal px-6">
                                        @lang('dashboard.t_no_results_table_hint')
                                    </div> 

                                    {{-- Create --}}
                                    <a href="{{ admin_url('users/create') }}" class="bw-button primary !bg-primary-600 focus:ring-primary-500/70 hover:!bg-primary-700 active:!bg-primary-700 focus:!ring cursor-pointer rounded-full inline-block mx-auto my-4 !px-10 !font-normal !text-[11px] !py-2.5 tracking-widest uppercase">
                                        <span class="grow">@lang('messages.t_create')</span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

    {{-- Pagination --}}
    @if ($users->hasPages())
        <div class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
            {!! $users->links('pagination::tailwind') !!}
        </div>
    @endif
    
</div>








