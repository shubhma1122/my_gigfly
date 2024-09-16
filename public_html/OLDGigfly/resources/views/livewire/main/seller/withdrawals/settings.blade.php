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
                        @lang('messages.t_withdrawal_settings')
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
            
                            {{-- Payouts --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_payouts')
                                    </span>
                                </div>
                            </li>
            
                        </ol>
                    </div>
                    
                </div>
    
                {{-- Actions --}}
                <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4 justify-between">
        
                    {{-- Make withdrawal --}}
                    <span class="block lg:ltr:ml-3 lg:rtl:pr-3">
                        <a href="{{ url('seller/withdrawals/create') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600 dark:focus:ring-offset-zinc-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                            {{ __('messages.t_make_withdrawal') }}
                        </a>
                    </span>
        
                    {{-- Payouts History --}}
                    <span class="block lg:ltr:ml-3 lg:rtl:pr-3">
                        <a href="{{ url('seller/withdrawals') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600 dark:focus:ring-offset-zinc-500">
                            <svg class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                            {{ __('messages.t_payouts_history') }}
                        </a>
                    </span>
        
                </div>
    
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <main class="rounded-lg bg-white dark:bg-zinc-800 shadow border border-gray-200 dark:border-zinc-800 py-8 sm:py-12 px-6 sm:px-10" x-data="{ selected: '{{ $selected }}' }">

            {{-- Select payment method --}}
            <div class="space-y-2 mb-10" x-cloak>
                <div class="block text-[0.8125rem] font-medium tracking-wide text-gray-700 dark:text-white">{{ __('messages.t_select_payout_method') }}</div>
                <div class="mt-2 space-x-4 rtl:space-x-reverse">

                    {{-- Paypal --}}
                    @if (boolval(config('payouts.paypal.enabled')))
                        <label class="inline-flex items-center">
                            <input x-model="selected" value="paypal" type="radio" class="border border-gray-400 dark:border-zinc-700 dark:bg-zinc-600 dark:focus:ring-primary-600 focus:outline-none h-4 w-4 text-primary-600 focus:border-primary-600 focus:ring focus:ring-primary-600 focus:ring-opacity-50">
                            <span class="ltr:ml-2 rtl:mr-2 text-[13px] font-medium dark:text-gray-200">
                                {{ config('payouts.paypal.name') }}
                            </span>
                        </label>
                    @endif

                    {{-- Offline --}}
                    @if (boolval(config('payouts.offline.enabled')))
                        <label class="inline-flex items-center">
                            <input x-model="selected" value="offline" type="radio" class="border border-gray-400 dark:border-zinc-700 dark:bg-zinc-600 dark:focus:ring-primary-600 focus:outline-none h-4 w-4 text-primary-600 focus:border-primary-600 focus:ring focus:ring-primary-600 focus:ring-opacity-50">
                            <span class="ltr:ml-2 rtl:mr-2 text-[13px] font-medium dark:text-gray-200">
                                {{ config('payouts.offline.name') }}
                            </span>
                        </label>
                    @endif

                </div>
            </div>

            {{-- Paypal --}}
            @if (boolval(config('payouts.paypal.enabled')))
                <div x-show="selected == 'paypal'" x-cloak>
                    <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                        {{-- Email address --}} 
                        <div class="col-span-12">
                            <x-forms.text-input 
                                :label="__('messages.t_paypal_email')"
                                :placeholder="__('messages.t_enter_paypal_email')"
                                model="paypal_email"
                                type="email"
                                svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M20.067 8.478c.492.88.556 2.014.3 3.327-.74 3.806-3.276 5.12-6.514 5.12h-.5a.805.805 0 0 0-.794.68l-.04.22-.63 3.993-.032.17a.804.804 0 0 1-.794.679H7.72a.483.483 0 0 1-.477-.558L7.418 21h1.518l.95-6.02h1.385c4.678 0 7.75-2.203 8.796-6.502zm-2.96-5.09c.762.868.983 1.81.752 3.285-.019.123-.04.24-.062.36-.735 3.773-3.089 5.446-6.956 5.446H8.957c-.63 0-1.174.414-1.354 1.002l-.014-.002-.93 5.894H3.121a.051.051 0 0 1-.05-.06l2.598-16.51A.95.95 0 0 1 6.607 2h5.976c2.183 0 3.716.469 4.523 1.388z"></path></g></svg>' />
                        </div>
        
                        {{-- Save --}}
                        <div class="col-span-12">
                            <x-forms.button action="update('paypal')" :text="__('messages.t_update')" :block="true" />
                        </div>
        
                    </div>
                </div>
            @endif

            {{-- Offline payout --}}
            @if (boolval(config('payouts.offline.enabled')))
                <div x-show="selected == 'offline'" x-cloak>
                    <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                        {{-- Bank info --}} 
                        <div class="col-span-12">
                            <x-forms.textarea 
                                :label="__('messages.t_details')"
                                placeholder=""
                                model="offline_info"
                                :rows="10"
                                svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 0 0-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM381 836H264V462h117v374zm189 0H453V462h117v374zm190 0H642V462h118v374z"></path></svg>' />
                        </div>
        
                        {{-- Save --}}
                        <div class="col-span-12">
                            <x-forms.button action="update('offline')" :text="__('messages.t_update')" :block="true" />
                        </div>
        
                    </div>
                </div>
            @endif
            
        </main>
    </div>

</div>