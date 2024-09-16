<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Section --}}
    <div class="lg:grid lg:grid-cols-12">

        {{-- Sidebar --}}
        <aside class="lg:col-span-3 py-6 hidden lg:block bg-white shadow-sm border border-gray-200 rounded-lg dark:bg-zinc-800 dark:border-transparent" wire:ignore>
            <x-main.account.sidebar />
        </aside>

        {{-- Container --}}
        <div class="lg:col-span-9 lg:ltr:ml-8 lg:rtl:mr-8">

            {{-- Head --}}
            <div class="w-full mb-16">
                <div class="mx-auto max-w-7xl">
                    <div class="lg:flex lg:items-center lg:justify-between">
            
                        <div class="min-w-0 flex-1">
            
                            {{-- Breadcrumbs --}}
                            <div class="mb-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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
            
                            {{-- Section heading --}}
                            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                                @lang('messages.t_promote_project')
                            </h2>

                            {{-- Subtitle --}}
                            <p class="leading-relaxed text-gray-400 mt-1 text-sm">
                                @lang('messages.t_promote_project_subtitle')
                            </p>
                            
                        </div>
            
                        {{-- Actions --}}
                        <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                            {{-- View project --}}
                            <span class="block">
                                <a href="{{ url('project/' . $subscription->project->pid . '/' . $subscription->project->slug) }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-primary-600">
                                    <svg class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"></path></svg>
                                    {{ __('messages.t_view_project') }}
                                </a>
                            </span>
                
                        </div>
            
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="w-full">

                {{-- Select payment method --}}
                <div class="rounded-lg bg-white shadow-sm border-gray-200 border px-10 py-6 relative mb-10 dark:bg-zinc-800 dark:border-transparent">
        
                    {{-- TITLE / Select a payment method --}}
                    <h5 class="flex items-center mb-5 pt-4">
                        <span class="text-xs uppercase tracking-widest text-primary-600 dark:text-white font-bold ltr:mr-3 rtl:ml-3">
                            @lang('messages.t_select_payment_method')    
                        </span> 
                        <span aria-hidden="true" class="grow bg-gray-100 rounded h-0.5 dark:bg-zinc-700"></span>
                    </h5>
        
                    {{-- Enabed payment mathods list --}}
                    @if (!$selected_payment_method)
                        <fieldset>
                            <legend class="sr-only">
                                @lang('messages.t_select_payment_method')    
                            </legend>
                            <div class="space-y-5">
        
                                {{-- Paypal --}}
                                @if (settings('paypal')->is_enabled)
                                    <div class="flex items-center">
                                        <input id="selected_payment_method_paypal" name="selected_payment_method" wire:model="selected_payment_method" value="paypal" type="radio" class="focus:ring-primary-500 h-5 w-5 text-primary-600 border-gray-300 focus:ring-offset-0 dark:bg-zinc-600 dark:border-transparent">
                                        <label for="selected_payment_method_paypal" class="flex items-center ltr:ml-3 rtl:mr-3 cursor-pointer">
                                            <span class="block text-sm font-semibold text-zinc-700 dark:text-zinc-300"> 
                                                {{ settings('paypal')->name }}    
                                            </span>
                                        </label>
                                    </div>
                                @endif
                                
                            </div>
                        </fieldset>
                    @endif
        
                    {{-- Check selected payment method --}}
                    @switch($selected_payment_method)
        
                        {{-- PayPal --}}
                        @case('paypal')
        
                            {{-- Calculate exchange rate --}}
                            @php
                                
                                $gateway_exchange_rate = (float)settings('paypal')->exchange_rate;
                                $exchange_total_amount = $this->calculateExchangeAmount($gateway_exchange_rate);
        
                            @endphp
                            
                            <div class="w-full md:max-w-xs mx-auto mt-12 block">
        
                                {{-- Paypal button --}}
                                <div id="paypal-button-container" wire:ignore></div>
        
                                <script>
                                    // Render the PayPal button into #paypal-button-container
                                    paypal.Buttons({
        
                                        // Set up the transaction
                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: [{
                                                    amount: {
                                                        value: '{{ $exchange_total_amount }}'
                                                    }
                                                }]
                                            });
                                        },
        
                                        // Finalize the transaction
                                        onApprove: function(data, actions) {
        
                                            @this.checkout(data.orderID);
        
                                        }
        
                                        }).render('#paypal-button-container');
                                </script>
        
                            </div>
        
                            @break
                            
                        @default
                            
                    @endswitch

                    {{-- TITLE / Selected upgrades --}}
                    <h5 class="flex items-center mb-6 mt-12">
                        <span class="text-xs uppercase tracking-widest text-primary-600 dark:text-white font-bold ltr:mr-3 rtl:ml-3">
                            @lang('messages.t_selected_upgrades')    
                        </span> 
                        <span aria-hidden="true" class="grow bg-gray-100 rounded h-0.5 dark:bg-zinc-700"></span>
                    </h5>

                    {{-- Selected upgrades --}}
                    <div class="mt-6">
                        <div class="divide-y divide-gray-50 dark:divide-zinc-700 text-sm lg:mt-0">

                            {{-- Urgent plan --}}
                            @if ($subscription->project->is_urgent)
                                @php
                                    $urgent = \App\Models\ProjectPlan::whereType('urgent')->first();
                                @endphp
                                @if ($urgent)
                                    <div class="pb-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200" style="color: {{ $urgent->badge_text_color }};background-color: {{ $urgent->badge_bg_color }}">{{ $urgent->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $urgent->description }}</p>    
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($urgent->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Highlight plan --}}
                            @if ($subscription->project->is_highlighted)
                                @php
                                    $highlight = \App\Models\ProjectPlan::whereType('highlight')->first();
                                @endphp
                                @if ($highlight)
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200" style="color: {{ $highlight->badge_text_color }};background-color: {{ $highlight->badge_bg_color }}">{{ $highlight->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $highlight->description }}</p>    
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($highlight->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Featured plan --}}
                            @if ($subscription->project->is_featured)
                                @php
                                    $featured = \App\Models\ProjectPlan::whereType('featured')->first();
                                @endphp
                                @if ($featured)
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200" style="color: {{ $featured->badge_text_color }};background-color: {{ $featured->badge_bg_color }}">{{ $featured->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $featured->description }}</p>    
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($featured->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Alert plan --}}
                            @if ($subscription->project->is_alert)
                                @php
                                    $alert = \App\Models\ProjectPlan::whereType('alert')->first();
                                @endphp
                                @if ($alert)
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200" style="color: {{ $alert->badge_text_color }};background-color: {{ $alert->badge_bg_color }}">{{ $alert->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $alert->description }}</p>
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($alert->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Total --}}
                            <div class="pt-4 flex items-center justify-between">
                                <dt class="font-medium text-gray-900 dark:text-white">@lang('messages.t_total')</dt>
                                <dd class="font-medium text-primary-600">
                                    @money($subscription->total, settings('currency')->code, true)
                                </dd>
                            </div>

                        </div>
                    </div>
        
                </div>

                {{-- Project preview --}}
                <div class="rounded-lg bg-white shadow-sm border-gray-200 border px-10 py-6 dark:bg-zinc-800 dark:border-transparent">

                    {{-- Title --}}
                    <a href="{{ url('project/' . $subscription->project->pid . '/' . $subscription->project->slug) }}" target="_blank" class="block mb-4">
                        <h1 class="font-semibold text-base text-zinc-700 hover:underline hover:text-primary-600 transition-all duration-200 dark:text-white">{{ $subscription->project->title }}</h1>
                    </a>
                
                    {{-- Details --}}
                    <dl class="flex-1 grid grid-cols-2 gap-x-6 text-sm sm:col-span-3 sm:grid-cols-3 lg:col-span-2">
                
                        {{-- Status --}}
                        <div>
                            <dt class="font-normal text-gray-500 dark:text-zinc-400 text-xs">@lang('messages.t_status')</dt>
                            <dd class="text-[13px] font-medium mt-1 text-amber-700 dark:text-amber-400">@lang('messages.t_pending_payment')</dd>
                        </div>
                
                        {{-- Posted date --}}
                        <div class="hidden sm:block">
                            <dt class="font-normal text-gray-500 dark:text-zinc-400 text-xs">@lang('messages.t_posted_date')</dt>
                            <dd class="text-[13px] font-medium mt-1 text-gray-700 dark:text-zinc-200">
                                <span>{{ format_date($subscription->project->created_at, 'ago') }}</span>
                            </dd>
                        </div>
                
                        {{-- Budget --}}
                        <div>
                            <dt class="font-normal text-gray-500 dark:text-zinc-400 text-xs">@lang('messages.t_budget')</dt>
                            <dd class="mt-1 text-[13px] font-medium text-gray-700 dark:text-zinc-200">
                                @money($subscription->project->budget_min, settings('currency')->code, true)
                                <span class="text-gray-300 mx-1">/</span>
                                @money($subscription->project->budget_max, settings('currency')->code, true)
                            </dd>
                        </div>
                
                    </dl>
                
                    {{-- Description --}}
                    <div class="my-4 block leading-relaxed text-gray-500 dark:text-zinc-100 text-sm">
                        {{ add_3_dots($subscription->project->description, 100) }}
                    </div>
                
                    {{-- Skills --}}
                    <div class="mt-4 flex items-center space-x-2 rtl:space-x-reverse">
                        @foreach ($subscription->project->skills as $skill)
                            <div class="bg-gray-100 hover:bg-primary-100 text-gray-600 hover:text-primary-600 text-xs font-medium ltr:mr-2 rtl:ml-2 ltr:first:mr-0 rtl:first:ml-0 px-2.5 py-1 rounded-sm dark:text-gray-400 border border-gray-300 hover:border-primary-600 transition-colors duration-200 dark:bg-zinc-700 dark:border-zinc-500 dark:hover:text-zinc-100">
                                {{ $skill->skill->name }}
                            </div>
                        @endforeach
                    </div>
                
                </div>

            </div>

        </div>

    </div>
                
</div>

@push('styles')

    {{-- PayPal SDK --}}
    @if (settings('paypal')->is_enabled)

        {{-- Get client id and curency --}}
        @php
            $paypal_client_id = config('paypal.mode') === 'sandbox' ? config('paypal.sandbox.client_id') : config('paypal.live.client_id');
            $currency         = config('paypal.currency');
        @endphp

        {{-- SDK --}}
        <script src="https://www.paypal.com/sdk/js?client-id={{ $paypal_client_id }}&currency={{ $currency }}"></script>

    @endif

@endpush