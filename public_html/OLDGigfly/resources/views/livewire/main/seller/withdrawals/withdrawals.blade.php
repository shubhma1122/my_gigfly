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
                        @lang('messages.t_payouts_history')
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
                        <a href="{{ url('seller/withdrawals/create') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600 dark:focus:ring-offset-zinc-500 whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                            {{ __('messages.t_make_withdrawal') }}
                        </a>
                    </span>
        
                    {{-- Withdrawal settings --}}
                    <span class="block lg:ltr:ml-3 lg:rtl:pr-3">
                        <a href="{{ url('seller/withdrawals/settings') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600 dark:focus:ring-offset-zinc-500 whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            {{ __('messages.t_withdrawal_settings') }}
                        </a>
                    </span>
        
                </div>
    
            </div>
        </div>
    </div>

    {{-- Session Messages --}}
    @if (session()->has('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="rounded-md bg-green-100 dark:bg-zinc-700/40 p-4 mb-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400 dark:text-zinc-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <h3 class="text-sm font-medium text-green-800 dark:text-zinc-400">{{ __('messages.t_congratulations') }}</h3>
                        <div class="mt-2 text-sm text-green-700 dark:text-zinc-500">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Error --}}
    @if (session()->has('message'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
            <div class="rounded-md bg-yellow-100 p-4 mb-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <h3 class="text-sm font-medium text-yellow-800">{{ __('messages.t_attention_needed') }}</h3>
                        <div class="mt-2 text-sm text-yellow-700">
                            <p>{{ session()->get('message') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <div class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
            <table class="w-full text-left border-spacing-y-[10px] border-separate sm:mt-2">
                <thead class="">
                    <tr class="bg-slate-200 dark:bg-zinc-600">

                        {{-- Gig --}}
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">@lang('messages.t_for')</th>

                        {{-- Buyer --}}
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">@lang('messages.t_date')</th>

                        {{-- Rating --}}
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">@lang('messages.t_amount')</th>

                        {{-- Date --}}
                        <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">@lang('messages.t_status')</th>

                    </tr>
                </thead>
                <thead>
                    @forelse ($withdrawals as $w)
                        <tr class="intro-x shadow-sm bg-white dark:bg-zinc-800 rounded-md h-16" wire:key="freelancer-dashboard-payouts-{{ $w->uid }}">

                            {{-- Method --}}
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md w-52 rtl:text-right">
                                <div class="flex items-center">
                                    @if ($w->gateway_provider_name === 'paypal')
                                        <svg class="h-4 w-4 ltr:mr-2 rtl:ml-2" viewBox="-23 0 302 302" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"><g><path d="M217.168476,23.5070146 C203.234077,7.62479651 178.045612,0.815753338 145.823355,0.815753338 L52.3030619,0.815753338 C45.7104431,0.815753338 40.1083819,5.6103852 39.0762042,12.1114399 L0.136468302,259.076601 C-0.637664968,263.946149 3.13311322,268.357876 8.06925331,268.357876 L65.804612,268.357876 L80.3050438,176.385849 L79.8555471,179.265958 C80.8877248,172.764903 86.4481659,167.970272 93.0324607,167.970272 L120.46841,167.970272 C174.366398,167.970272 216.569147,146.078116 228.897012,82.7490197 C229.263268,80.8761167 229.579581,79.0531577 229.854273,77.2718188 C228.297683,76.4477414 228.297683,76.4477414 229.854273,77.2718188 C233.525163,53.8646924 229.829301,37.9325302 217.168476,23.5070146" fill="#27346A"></path><path d="M102.396976,68.8395929 C103.936919,68.1070797 105.651665,67.699203 107.449652,67.699203 L180.767565,67.699203 C189.449511,67.699203 197.548776,68.265236 204.948824,69.4555699 C207.071448,69.7968545 209.127479,70.1880831 211.125242,70.6375799 C213.123006,71.0787526 215.062501,71.5781934 216.943728,72.1275783 C217.884341,72.4022708 218.808307,72.6852872 219.715624,72.9849517 C223.353218,74.2002577 226.741092,75.61534 229.854273,77.2718188 C233.525163,53.8563683 229.829301,37.9325302 217.168476,23.5070146 C203.225753,7.62479651 178.045612,0.815753338 145.823355,0.815753338 L52.2947379,0.815753338 C45.7104431,0.815753338 40.1083819,5.6103852 39.0762042,12.1114399 L0.136468302,259.068277 C-0.637664968,263.946149 3.13311322,268.349552 8.0609293,268.349552 L65.804612,268.349552 L95.8875974,77.5798073 C96.5035744,73.6675208 99.0174265,70.4627756 102.396976,68.8395929 Z" fill="#27346A"></path><path d="M228.897012,82.7490197 C216.569147,146.069792 174.366398,167.970272 120.46841,167.970272 L93.0241367,167.970272 C86.4398419,167.970272 80.8794007,172.764903 79.8555471,179.265958 L61.8174095,293.621258 C61.1431644,297.883153 64.4394738,301.745495 68.7513129,301.745495 L117.421821,301.745495 C123.182038,301.745495 128.084882,297.550192 128.983876,291.864891 L129.458344,289.384335 L138.631407,231.249423 L139.222412,228.036354 C140.121406,222.351053 145.02425,218.15575 150.784467,218.15575 L158.067979,218.15575 C205.215193,218.15575 242.132193,199.002194 252.920115,143.605884 C257.423406,120.456802 255.092683,101.128442 243.181019,87.5519756 C239.568397,83.4399129 235.081754,80.0437153 229.854273,77.2718188 C229.571257,79.0614817 229.263268,80.8761167 228.897012,82.7490197 L228.897012,82.7490197 Z" fill="#2790C3"></path><path d="M216.952052,72.1275783 C215.070825,71.5781934 213.13133,71.0787526 211.133566,70.6375799 C209.135803,70.1964071 207.071448,69.8051785 204.957148,69.4638939 C197.548776,68.265236 189.457835,67.699203 180.767565,67.699203 L107.457976,67.699203 C105.651665,67.699203 103.936919,68.1070797 102.4053,68.8479169 C99.0174265,70.4710996 96.5118984,73.6675208 95.8959214,77.5881313 L80.3133678,176.385849 L79.8638711,179.265958 C80.8877248,172.764903 86.4481659,167.970272 93.0324607,167.970272 L120.476734,167.970272 C174.374722,167.970272 216.577471,146.078116 228.905336,82.7490197 C229.271592,80.8761167 229.579581,79.0614817 229.862597,77.2718188 C226.741092,75.623664 223.361542,74.2002577 219.723948,72.9932757 C218.816631,72.6936112 217.892665,72.4022708 216.952052,72.1275783" fill="#1F264F"></path></g></svg>
                                        <span class="font-medium text-sm dark:text-zinc-200">{{ $w->gateway_provider_id }}</span>
                                    @elseif ($w->gateway_provider_name === 'offline')
                                        @if (settings('offline_payment')->logo)
                                            <img class="h-5 ltr:mr-2 rtl:ml-2 lazy" src="{{ placeholder_img() }}" data-src="{{ src(settings('offline_payment')->logo) }}" alt="{{ settings('offline_payment')->name }}">
                                        @endif
                                        <span class="font-medium text-sm dark:text-zinc-200">{{ $w->gateway_provider_id }}</span>
                                    @endif
                                </div>
                            </td>

                            {{-- Date --}}
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <div class="text-[13px] font-medium text-gray-700 dark:text-gray-400 whitespace-nowrap">
                                    {{ format_date($w->created_at, config('carbon-formats.F_j,_Y')) }}
                                </div>
                            </td>

                            {{-- Amount --}}
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <span class="text-[13px] font-bold text-zinc-900 dark:text-gray-400">
                                    @money($w->amount, settings('currency')->code, true)
                                </span>
                            </td>

                            {{-- Status --}}
                            <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                @switch($w->status)

                                    @case('pending')
                                        <span class="text-amber-500 text-[13px] font-medium tracking-wide">{{ __('messages.t_pending') }}</span>
                                        @break
                                    @case('paid')
                                        <span class="text-green-500 text-[13px] font-medium tracking-wide">{{ __('messages.t_paid') }}</span>
                                        @break
                                    @case('rejected')
                                        <span class="text-red-500 text-[13px] font-medium tracking-wide">{{ __('messages.t_rejected') }}</span>
                                        @break
                                    @default
                                        
                                @endswitch
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-3 font-light text-sm text-gray-400 dark:text-zinc-200 text-center tracking-wide shadow-sm bg-white dark:bg-zinc-800 rounded-md">
                                @lang('messages.no_results_found')
                            </td>
                        </tr>
                    @endforelse
                </thead>
            </table>
        </div>
    </div>

    {{-- Pages --}}
    @if ($withdrawals->hasPages())
        <div class="flex justify-center pt-12">
            {!! $withdrawals->links('pagination::tailwind') !!}
        </div>
    @endif

</div>