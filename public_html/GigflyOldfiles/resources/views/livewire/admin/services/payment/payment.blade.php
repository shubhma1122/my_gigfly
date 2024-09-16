<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="lg:flex lg:items-center lg:justify-between mb-14">
    
        <div class="min-w-0 flex-1">

            {{-- Section heading --}}
            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                @lang('dashboard.t_payment_gateways')
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
                                @lang('dashboard.t_payment_gateways')
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

    </div>

    {{-- Content --}}
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>

                        <th>@lang('dashboard.t_payment_gateway')</th>
                        <th class="text-center">@lang('messages.t_default_currency')</th>
                        <th class="text-center">@lang('messages.t_status')</th>
                        <th class="text-center">@lang('messages.t_exchange_rate')</th>
                        <th class="text-center">@lang('messages.t_options')</th>

                    </tr>
                </thead>
                <tbody>

                    {{-- Automatic payment gateways --}}
                    @foreach ($gateways as $g)
                        <tr wire:key="payment-gateways-{{ $g->uid }}">

                            {{-- Payment gateway --}}
                            <td>
                                <div class="flex items-center space-x-2 rtl:space-x-reverse">

                                    {{-- Logo --}}
                                    <div class="h-8 w-8 inline-flex flex-shrink-0 relative">
                                        @if ($g->logo)
                                            <img class="mask is-squircle object-cover w-full h-full block" src="{{ src($g->logo) }}" alt="{{ $g->name }}">
                                        @else
                                            @php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            @endphp
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba({{ $color }}, .1);color: rgb({{ $color }})">
                                                {{ Str::substr($g->name, 0, 2) }}
                                            </div>   
                                        @endif
                                    </div>

                                    {{-- Details --}}
                                    <div class="space-y-1 font-medium dark:text-white">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse">

                                            {{-- Name --}}
                                            <div class="font-semibold whitespace-nowrap truncate block max-w-[240px] hover:text-zinc-900 dark:text-white text-xs+ text-zinc-700">
                                                {{ $g->name }}
                                            </div>

                                            {{-- Country --}}
                                            @if ($g->country)
                                                <img src="{{ countryFlag($g->country) }}" alt="{{ $g->country }}" class="h-3.5">
                                            @endif

                                        </div>
                                    </div>

                                </div>
                            </td>

                            {{-- Currency --}}
                            <td class="text-center">
                                <div class="text-gray-700 dark:text-gray-100 text-sm font-bold tracking-widest">
                                    {{ $g->currency }}    
                                </div>
                            </td>

                            {{-- Status --}}
                            <td class="text-center">
                                <label class="relative inline-flex items-center mt-2.5 cursor-pointer">
                                    <input type="checkbox" wire:change="update('{{ $g->slug }}')" {{ $g->is_active ? 'checked' : '' }} class="sr-only peer">
                                    <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-primary-600"></div>
                                </label>
                            </td>

                            {{-- Exchange rate --}}
                            <td class="text-center">
                                <div class="dark:text-gray-100 flex items-center justify-center space-x-2 text-slate-500 text-sm">
                                    <span>1$</span>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="5" x2="19" y1="9" y2="9"></line><line x1="5" x2="19" y1="15" y2="15"></line></svg>
                                    <span>
                                        @if (isset(config('money')[$g->currency]))
                                            {{ money($g->exchange_rate, $g->currency, true) }}
                                        @else
                                            {{ $g->exchange_rate }} {{ $g->currency }}
                                        @endif
                                    </span>
                                </div>
                            </td>

                            {{-- Options --}}
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    {{-- Edit --}}
                                    <x-table.action-button 
                                        icon="gear" 
                                        :title="__('messages.t_settings')"
                                        href="{{ admin_url('services/payment/edit/' . $g->slug) }}"  />

                                </div>
                            </td>

                        </tr>
                    @endforeach

                    {{-- Offline payment gateways --}}
                    @php
                        $offline_method = payment_gateway('offline', false, true);
                    @endphp
                    @if ( !empty( $offline_method?->name ) )
                        <tr wire:key="payment-gateways-offline">

                            {{-- Payment gateway --}}
                            <td>
                                <div class="flex items-center space-x-4 rtl:space-x-reverse">

                                    {{-- Logo --}}
                                    <div class="h-8 w-8 inline-flex flex-shrink-0 relative">
                                        @if ($offline_method->logo)
                                            <img class="mask is-squircle object-cover w-full h-full block" src="{{ src($offline_method->logo) }}" alt="{{ $offline_method->name }}">
                                        @else
                                            @php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            @endphp
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba({{ $color }}, .1);color: rgb({{ $color }})">
                                                {{ Str::substr($offline_method->name, 0, 2) }}
                                            </div>   
                                        @endif
                                    </div>

                                    {{-- Details --}}
                                    <div class="space-y-1 font-medium dark:text-white">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse">

                                            {{-- Name --}}
                                            <div class="font-semibold whitespace-nowrap truncate block max-w-[240px] hover:text-zinc-900 dark:text-white text-xs+ text-zinc-700">
                                                {{ $offline_method->name }}
                                            </div>

                                            {{-- Country --}}
                                            @if ($offline_method->country)
                                                <img src="{{ countryFlag($offline_method->country) }}" alt="{{ $offline_method->country }}" class="h-3.5">
                                            @endif

                                        </div>
                                    </div>

                                </div>
                            </td>

                            {{-- Currency --}}
                            <td class="text-center">
                                <div class="text-gray-700 dark:text-gray-100 text-sm font-bold tracking-widest">
                                    {{ $offline_method->currency }}    
                                </div>
                            </td>

                            {{-- Status --}}
                            <td class="text-center">
                                <label class="relative inline-flex items-center mt-2.5 cursor-pointer">
                                    <input type="checkbox" wire:change="update('{{ $offline_method->slug }}')" {{ $offline_method->is_active ? 'checked' : '' }} class="sr-only peer">
                                    <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-zinc-600 peer-checked:bg-primary-600"></div>
                                </label>
                            </td>

                            {{-- Exchange rate --}}
                            <td class="text-center">
                                <div class="dark:text-gray-100 flex items-center justify-center space-x-2 text-slate-500 text-sm">
                                    <span>1$</span>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="5" x2="19" y1="9" y2="9"></line><line x1="5" x2="19" y1="15" y2="15"></line></svg>
                                    <span>
                                        @if (isset(config('money')[$offline_method?->currency]))
                                            {{ money($offline_method?->exchange_rate, $offline_method?->currency, true) }}
                                        @else
                                            {{ $offline_method?->exchange_rate }} {{ $offline_method?->currency }}
                                        @endif
                                    </span>
                                </div>
                            </td>

                            {{-- Options --}}
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    {{-- Edit --}}
                                    <x-table.action-button 
                                        icon="gear" 
                                        :title="__('messages.t_settings')"
                                        href="{{ admin_url('services/payment/edit/offline') }}"  />

                                </div>
                            </td>

                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>

</div>