<div class="w-full sm:mx-auto sm:max-w-2xl">

    {{-- Check if gig created --}}
    @if ($isFinished)

        {{-- Gig updated successfully --}}
        <div class="bg-white dark:bg-zinc-800 justify-center pb-4 pt-5 px-4 rounded-md shadow-sm sm:align-middle sm:max-w-sm sm:p-6 sm:w-full mx-auto">
            <div>
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 dark:bg-zinc-700">
                    <svg class="h-6 w-6 text-green-600 dark:text-zinc-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/> </svg>
                </div>

                <div class="mt-3 text-center sm:mt-5">
                    <h3 class="text-md leading-6 font-medium text-gray-900 dark:text-gray-200" id="modal-title">{{ __('messages.t_gig_updated') }}</h3>
                    <div class="mt-2">
                        @if ($is_approved)
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('messages.t_gig_updated_subtitle') }}</p>
                        @else
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('messages.t_gig_updated_subtitle_pending_approval') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-6">
                <a href="{{ $isFinished }}" target="_blank" class="inline-flex justify-center items-center w-full rounded uppercase tracking-widest border border-transparent shadow-sm px-4 py-3 bg-primary-600 font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 text-xs">
                    {{ __('messages.t_view_gig') }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>

    @else

        {{-- Loading --}}
        <x-forms.loading />

        {{-- Overview --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-clipboard-text"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_overview')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_create_gig_overview_subtitle')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2">

                    {{-- Upgrade seo --}}
                    <button id="modal-upgrade-seo-button" type="button" class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse rounded border font-semibold focus:outline-none px-3 py-2 leading-5 whitespace-nowrap text-xs border-gray-300 bg-white text-gray-700 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none tracking-wide dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:hover:text-zinc-200">
                        <i class="ph-duotone ph-magnifying-glass w-4 h-4 flex items-center justify-center text-lg text-gray-400 dark:text-zinc-400"></i>
                        <span class="capitalize">@lang('messages.t_seo_meta_tags')</span>
                    </button>

                </div>
            </div>

            {{-- Section body --}}
            <div class="w-full new-service-container">
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                    {{-- Title --}}
                    <div class="col-span-12">
                        <x-forms.gig-title required
                            model="title"
                            :label="__('messages.t_service_title')" />
                    </div>

                    {{-- Parent category --}}
                    <div class="col-span-12" wire:key="create-service-categories">
                        <x-forms.select-simple required live
                            model="category"
                            :label="__('messages.t_category')"
                            :placeholder="__('messages.t_choose_category')">
                            <x-slot:options>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </x-slot:options>
                        </x-forms.select-simple>
                    </div>

                    {{-- Subcategory --}}
                    <div class="col-span-12" wire:key="create-service-subcategories">
                        <x-forms.select-simple required live
                            model="subcategory"
                            :label="__('messages.t_subcategory')"
                            :placeholder="__('messages.t_choose_subcategory')">
                            <x-slot:options>
                                @foreach ($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endforeach
                            </x-slot:options>
                        </x-forms.select-simple>
                    </div>

                    {{-- Childcategory --}}
                    <div class="col-span-12" wire:key="create-service-childcategories">
                        <x-forms.select-simple required
                            model="childcategory"
                            :label="__('messages.t_childcategory')"
                            :placeholder="__('messages.t_choose_childcategory')">
                            <x-slot:options>
                                @foreach ($childcategories as $childcategory)
                                    <option value="{{ $childcategory->id }}">{{ $childcategory->name }}</option>
                                @endforeach
                            </x-slot:options>
                        </x-forms.select-simple>
                    </div>

                    {{-- Description --}}
                    <div class="col-span-12" wire:key="create-service-description" wire:ingore>
                        <x-forms.ckeditor required
                            :label="__('messages.t_description')"
                            :placeholder="__('messages.t_briefly_describe_ur_gig')"
                            model="description"
                            old="{!! str_replace(['&amp;nbsp;', '&nbsp;'], ' ', $gig->description) !!}"
                            target="edit-gig-action-btn" />
                    </div>

                    {{-- Search tags --}}
                    <div class="col-span-12">
                        <x-forms.tags-input required
                            :label="__('messages.t_search_tags')"
                            :placeholder="__('messages.t_press_enter_to_add_tags')"
                            model="tags"
                            :tags="$tags" />
                    </div>

                </div>
            </div>

        </div>

        {{-- FAQ --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-question"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_faq')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_create_gig_faq_subtitle')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2">

                    {{-- Add faq --}}
                    <button id="modal-add-faq-button" type="button" class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse rounded border font-semibold focus:outline-none px-3 py-2 leading-5 whitespace-nowrap text-xs border-gray-300 bg-white text-gray-700 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none tracking-wide dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:hover:text-zinc-200">
                        <i class="ph-duotone ph-folder-simple-plus w-4 h-4 flex items-center justify-center text-lg text-gray-400 dark:text-zinc-400"></i>
                        <span class="capitalize">@lang('messages.t_add_faq')</span>
                    </button>

                </div>
            </div>

            {{-- Section body --}}
            <div class="w-full new-service-container">
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">
                    @if (count($faqs))
                        <div class="col-span-12">
                            <div class="space-y-4">
                                
                                {{-- List of faq --}}
                                @foreach ($faqs as $key => $faq)
                                    <details class="px-6 py-4 rounded-lg bg-gray-50 dark:bg-zinc-700 group relative" wire:key="faq-list-id-{{ $key }}">
                                        <summary class="flex items-center justify-between cursor-pointer focus:outline-none">

                                            {{-- Question --}}
                                            <h5 class="text-sm font-medium text-gray-900 dark:text-gray-200 focus:outline-none flex items-center">
                                                {{ $faq['question'] }}
                                                <button type="button" wire:click="removeFaq({{ $key }})" class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                                    <span class="text-xs font-medium text-red-500 hover:text-red-600"> 
                                                        {{ __('messages.t_remove') }}
                                                    </span>
                                                </button>
                                            </h5>
                                    
                                            <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" > <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/> </svg>
                                    
                                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" > <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/> </svg>
                                            </span>
                                        </summary>
                                    
                                        <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-100 text-xs">
                                            {{ $faq['answer'] }}
                                        </p>
                                    </details>
                                @endforeach

                            </div>
                        </div>
                    @else
                        <div class="col-span-12">
                            <div class="py-2.5 px-3 rounded text-blue-700 bg-blue-100">
                                <div class="flex items-center gap-x-3">
                                    <i class="ph-fill ph-warning-circle text-xl"></i>
                                    <h3 class="font-semibold grow text-xs leading-5">
                                        @lang('messages.t_no_faq_yet_subtitle')
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>

        {{-- Pricing --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-tag"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_pricing')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_create_gig_pricing_subtitle')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2">

                    {{-- Add faq --}}
                    <button id="modal-add-upgrade-button" type="button" class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse rounded border font-semibold focus:outline-none px-3 py-2 leading-5 whitespace-nowrap text-xs border-gray-300 bg-white text-gray-700 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none tracking-wide dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:hover:text-zinc-200">
                        <i class="ph-duotone ph-folder-simple-plus w-4 h-4 flex items-center justify-center text-lg text-gray-400 dark:text-zinc-400"></i>
                        <span class="capitalize">@lang('messages.t_add_service_upgrade')</span>
                    </button>

                </div>
            </div>

            {{-- Section body --}}
            <div class="w-full new-service-container">
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                    {{-- Service price --}}
                    <div class="col-span-12 md:col-span-6">
                        <x-forms.text-input required
                            :label="__('messages.t_price')" 
                            placeholder="0.00" 
                            model="price"
                            suffix="{{ $currency_symbol }}" />
                    </div>

                    {{-- Delivery time --}}
                    <div class="col-span-12 md:col-span-6" wire:key="create-service-available-deliveries">
                        <x-forms.select-simple required
                            model="delivery_time"
                            :label="__('messages.t_delivery_time')"
                            :placeholder="__('messages.t_choose_delivery_time')">
                            <x-slot:options>
                                @foreach ($available_deliveries as $key => $delivery)
                                    <option value="{{ $delivery['value'] }}">{{ $delivery['text'] }}</option>
                                @endforeach
                            </x-slot:options>
                        </x-forms.select-simple>
                    </div>

                </div>
            </div>

            {{-- List of upgrades --}}
            @forelse ($upgrades as $key => $upgrade)
                <div class="{{ $loop->first ? 'mt-10' : '' }} mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-gray-200 dark:border-zinc-700" id="scroll-to-upgrade-id-{{ $key }}" wire:key="create-gig-pricing-upgrade-id-{{ $key }}">

                    {{-- Upgrade title --}}
                    <div class="bg-gray-50 dark:bg-zinc-700 px-8 py-4 rounded-t-md">
                        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                            <div class="ltr:ml-4 rtl:mr-4 mt-4">
                                <h3 class="text-sm leading-6 font-bold tracking-wide text-gray-900 dark:text-gray-100">{{ __('messages.t_upgrade_number', ['number' => $key+1]) }}</h3>
                                <p class="text-xs font-normal text-gray-400 dark:text-gray-300">{{ $upgrade['title'] }}</p>
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                                <button wire:click="removeUpgrade({{ $key }})" class="inline-flex items-center py-2 ltr:md:pl-3 rtl:md:pr-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 hover:text-red-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    <span class="text-xs font-medium text-red-500 hover:text-red-600"> 
                                        {{ __('messages.t_remove_upgrade') }}
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Upgrade form --}}
                    <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 px-8 py-6">

                        {{-- Upgrade title --}}
                        <div class="col-span-12" wire:key="{{ uid() }}">
                            <x-forms.text-input required
                                label="{{ __('messages.t_upgrade_title') }}" 
                                placeholder="{{ __('messages.t_enter_upgrade_title') }}" 
                                model="upgrades.{{ $key }}.title"
                                icon="cursor-text" />
                        </div>
                
                        {{-- Upgrade price --}}
                        <div class="col-span-12 md:col-span-6" wire:key="{{ uid() }}">
                            <x-forms.text-input required
                                label="{{ __('messages.t_price') }}" 
                                :placeholder="0.00" 
                                model="upgrades.{{ $key }}.price"
                                suffix="{{ $currency_symbol }}" />
                        </div>

                        {{-- Delivery time --}}
                        <div class="col-span-12 md:col-span-6" wire:key="{{ uid() }}">
                            <x-forms.select-simple required
                                model="upgrades.{{ $key }}.extra_days"
                                :label="__('messages.t_delivery_time')"
                                :placeholder="__('messages.t_choose_delivery_time')">
                                <x-slot:options>
                                    @foreach ($available_deliveries as $key => $delivery)
                                        <option value="{{ $delivery['value'] }}">{{ $delivery['text'] }}</option>
                                    @endforeach
                                </x-slot:options>
                            </x-forms.select-simple>
                        </div>
                        
                    </div>

                </div>
            @empty
                <div class="w-full">
                    <div class="py-2.5 px-3 rounded text-blue-700 bg-blue-100">
                        <div class="flex items-center gap-x-3">
                            <i class="ph-fill ph-warning-circle text-xl"></i>
                            <h3 class="font-semibold grow text-xs leading-5">
                                @lang('messages.t_no_upgrades_selected')
                            </h3>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>

        {{-- Requirements --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-shield-star"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_requirements')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_create_gig_requirements_subtitle')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2">

                    {{-- Add requirement --}}
                    <button id="modal-add-requirement-button" type="button" class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse rounded border font-semibold focus:outline-none px-3 py-2 leading-5 whitespace-nowrap text-xs border-gray-300 bg-white text-gray-700 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none tracking-wide dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:hover:text-zinc-200">
                        <i class="ph-duotone ph-folder-simple-plus w-4 h-4 flex items-center justify-center text-lg text-gray-400 dark:text-zinc-400"></i>
                        <span class="capitalize">@lang('messages.t_add_requirement')</span>
                    </button>

                </div>
            </div>

            {{-- Section body --}}
            <div class="w-full new-service-container">
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">
                    @if (is_array($requirements) && count($requirements) > 0)
                        <div class="col-span-12">
                            <div class="flow-root w-full">
                                <ul role="list">
                
                                    @foreach ($requirements as $key => $req)
                                        <li wire:key="create-gig-requirement-item-{{ $key }}">
                                            <div class="relative {{ !$loop->last ? 'pb-12' : '' }}">
                                                @if (!$loop->last)
                                                    <span class="absolute top-4 left-6 -ml-px h-full w-0.5 bg-gray-200 dark:bg-zinc-700" aria-hidden="true"></span>
                                                @endif
                                                <div class="relative flex space-x-3 rtl:space-x-reverse">
                                                    <div>
                                                        <span class="h-12 w-12 rounded-full bg-gray-200 dark:bg-zinc-700 flex items-center justify-center ring-8 ring-white dark:ring-zinc-800">
                
                                                            @if ($req['type'] === 'text')
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                                            @elseif ($req['type'] === 'file')
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/></svg>
                                                            @elseif ($req['type'] === 'choice')
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/></svg>
                                                            @endif
                
                                                        </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 rtl:space-x-reverse">
                                                        <div>
                                                            <p class="text-sm font-medium text-gray-600 dark:text-gray-200">
                                                                {{ $req['question'] }} 
                                                            </p>
                
                                                            <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6 rtl:space-x-reverse">
                
                                                                {{-- Form type --}}
                                                                <div class="mt-2 flex items-center text-xs text-gray-400">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"/></svg>
                                                                    @if ($req['type'] === 'text')
                                                                        {{ __('messages.t_free_text') }}
                                                                    @elseif ($req['type'] === 'file')
                                                                        {{ __('messages.t_attachment') }}
                                                                    @elseif ($req['type'] === 'choice')
                                                                        {{ __('messages.t_multiple_choice') }}
                                                                    @endif
                                                                </div>
                
                                                                {{-- Edit --}}
                                                                <div wire:click="editRequirement({{ $key }})" class="mt-2 flex items-center text-xs text-gray-400 cursor-pointer">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                                                    {{ __('messages.t_edit') }}
                                                                </div>
                
                                                                {{-- Delete --}}
                                                                <div wire:click="deleteRequirement({{ $key }})" class="mt-2 flex items-center text-xs text-red-600 cursor-pointer">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                                    {{ __('messages.t_delete') }}
                                                                </div>
                
                                                            </div>
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>    
                    @else
                        <div class="col-span-12">
                            <div class="py-2.5 px-3 rounded text-amber-700 bg-amber-100">
                                <div class="flex items-center gap-x-3">
                                    <i class="ph-fill ph-warning text-xl"></i>
                                    <h3 class="font-semibold grow text-xs leading-5">
                                        @lang('messages.t_u_have_to_add_at_least_1_requirement')
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>

        {{-- Media --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-images"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_gallery')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_get_noticed_by_right_buyers_images')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2">
                </div>

            </div>

            {{-- Section body --}}
            <div class="w-full new-service-container">
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                    {{-- Thumbnail --}}
                    <div class="col-span-12 mb-10">

                        {{-- Container --}}
                        <div class="w-full" wire:ignore>
                            
                            {{-- Label --}}
                            <div class="block text-xs font-bold tracking-wide whitespace-nowrap overflow-hidden truncate text-zinc-500 dark:text-white mb-2.5">

                                {{-- Label text --}}
                                @lang('messages.t_thumbnail')
                    
                                {{-- Required --}}
                                <span class="font-bold text-red-400">*</span>
                    
                            </div>

                            {{-- Uploader --}}
                            <x-forms.uploader
                                model="thumbnail"
                                id="uploader_thumbnail"
                                :extensions="['jpg', 'jpeg', 'png']"
                                accept="image/jpg, image/jpeg, image/png"
                                size="{{ settings('publish')->max_image_size }}"
                                max="1" />

                        </div>

                        {{-- Errors --}}
                        @error('thumbnail')
                            <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('thumbnail') }}</p>
                        @enderror

                        {{-- Preview --}}
                        @if ($gig->thumbnail)
                            <div class="w-full mt-2">
                                <div class="fileuploader fileuploader-theme-thumbnails">
                                    <div class="fileuploader-items">
                                        <ul class="!grid !grid-cols-12 sm:!gap-x-6 gap-y-6 !m-auto fileuploader-items-list">
                                            <li class="!col-span-12 sm:!col-span-6 md:!col-span-4 lg:!col-span-3 !w-full h-24 !m-auto fileuploader-item file-type-image file-ext-png file-has-popup rounded-[6px]">
                                                <div class="fileuploader-item-inner">
                                                    <div class="type-holder">{{ $gig->thumbnail->file_extension }}</div>
                                                    <div class="actions-holder">
                                                    </div>
                                                    <div class="thumbnail-holder">
                                                        <div class="fileuploader-item-image">
                                                            <img src="{{ src($gig->thumbnail) }}" draggable="false">
                                                        </div>
                                                        <span class="fileuploader-action-popup"></span>
                                                    </div>
                                                    <div class="content-holder">
                                                        <span>{{ human_filesize($gig->thumbnail->file_size) }}</span>
                                                    </div>
                                                    <div class="progress-holder"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                    {{-- Images uploader --}}
                    <div class="col-span-12">

                        {{-- Container --}}
                        <div class="w-full" wire:ignore>
                            
                            {{-- Label --}}
                            <div class="block text-xs font-bold tracking-wide whitespace-nowrap overflow-hidden truncate text-zinc-500 dark:text-white mb-2.5">

                                {{-- Label text --}}
                                @lang('messages.t_images')
                    
                                {{-- Required --}}
                                <span class="font-bold text-red-400">*</span>
                    
                            </div>
                            
                            {{-- Uploader --}}
                            <x-forms.uploader
                                model="images"
                                id="uploader_images"
                                :extensions="['jpg', 'jpeg', 'png']"
                                accept="image/jpg, image/jpeg, image/png"
                                size="{{ settings('publish')->max_image_size }}"
                                max="{{ settings('publish')->max_images }}" />

                        </div>

                        {{-- Errors --}}
                        @error('images')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('images') }}</p>
                        @enderror

                        {{-- Errors --}}
                        @if($errors->has('images.*'))
                            <div class="mt-2 p-4 md:p-5 rounded text-red-700 bg-red-100">
                                <div class="flex items-center mb-3">
                                    <svg class="inline-block w-5 h-5 ltr:mr-3 rtl:ml-3 flex-none text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                                    <h3 class="font-semibold text-xs+">
                                        @lang('messages.t_toast_something_went_wrong')
                                    </h3>
                                </div>
                                <ul class="list-inside ltr:ml-8 rtl:mr-8 space-y-2">
                                    @foreach($errors->get('images.*') as $errors)
                                        @foreach($errors as $error)
                                            <li class="flex items-center text-xs font-semibold">
                                                <svg class="inline-block w-4 h-4 flex-none ltr:mr-2 rtl:ml-2 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>

                    {{-- Old images --}}
                    <div class="col-span-12">
                        <div class="fileuploader fileuploader-theme-thumbnails">
                            <div class="fileuploader-items">
                                <ul class="!grid !grid-cols-12 sm:!gap-x-6 gap-y-6 !m-auto fileuploader-items-list">
        
                                    @foreach ($gig->images as $img)
                                        <li
                                            wire:key="gallery-image-item-{{ $img->id }}"
                                            class="!col-span-12 sm:!col-span-6 md:!col-span-4 lg:!col-span-3 !w-full h-24 !m-auto fileuploader-item file-type-image file-ext-png file-has-popup rounded-[6px]">
                                            <div class="fileuploader-item-inner">
                                                <div class="type-holder">{{ $img->small->file_extension }}</div>
                                                <div class="actions-holder">
                                                    <button type="button"
                                                        x-on:click="confirm('{{ __('messages.t_are_u_sure_delete_this_image') }}') ? $wire.removeImage('{{ $img->id }}') : ''" 
                                                        wire:loading.attr="disabled" 
                                                        wire:target="removeImage('{{ $img->id }}')"
                                                        class="fileuploader-action fileuploader-action-remove"
                                                        title="{{ __('messages.t_delete') }}">
                                                        <i class="fileuploader-icon-remove"></i>
                                                    </button>
                                                </div>
                                                <div class="thumbnail-holder">
                                                    <div class="fileuploader-item-image">
                                                        <img src="{{ src($img->small) }}" draggable="false">
                                                    </div>
                                                    <span class="fileuploader-action-popup"></span>
                                                </div>
                                                <div class="content-holder">
                                                    <span>{{ human_filesize($img->large->file_size) }}</span>
                                                </div>
                                                <div class="progress-holder"></div>
                                            </div>
                                        </li>
                                    @endforeach
        
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Documents --}}
                    @if (settings('publish')->is_documents_enabled)

                        {{-- Docs --}}
                        <div class="col-span-12 mt-10">

                            {{-- Container --}}
                            <div class="w-full"  wire:ignore>

                                {{-- Label --}}
                                <div class="block text-xs font-bold tracking-wide whitespace-nowrap overflow-hidden truncate text-zinc-500 dark:text-white mb-2.5">
                                    @lang('messages.t_documents')
                                </div>

                                {{-- Uploader --}}
                                <x-forms.uploader
                                    model="documents"
                                    id="uploader_documents"
                                    :extensions="['pdf']"
                                    accept="application/pdf"
                                    size="{{ settings('publish')->max_document_size }}"
                                    max="{{ settings('publish')->max_documents }}" />

                            </div>

                            {{-- Errors --}}
                            @error('documents')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('documents') }}</p>
                            @enderror

                            {{-- Errors --}}
                            @if($errors->has('documents.*'))
                                <div class="mt-2 p-4 md:p-5 rounded text-red-700 bg-red-100">
                                    <div class="flex items-center mb-3">
                                        <svg class="inline-block w-5 h-5 ltr:mr-3 rtl:ml-3 flex-none text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                                        <h3 class="font-semibold text-xs+">
                                            @lang('messages.t_toast_something_went_wrong')
                                        </h3>
                                    </div>
                                    <ul class="list-inside ltr:ml-8 rtl:mr-8 space-y-2">
                                        @foreach($errors->get('documents.*') as $errors)
                                            @foreach($errors as $error)
                                                <li class="flex items-center text-xs font-semibold">
                                                    <svg class="inline-block w-4 h-4 flex-none ltr:mr-2 rtl:ml-2 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>

                        {{-- Old docs --}}
                        <div class="col-span-12">
                            @if ($gig->documents()->count())
                                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200 dark:border-zinc-700 dark:divide-zinc-700">
                                    @foreach ($gig->documents as $doc)
                                        <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-zinc-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate dark:text-zinc-200">
                                                    {{ $doc->name }}
                                                </span>
                                            </div>
                                            <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0">
                                                <button 
                                                    x-on:click="confirm('{{ __('messages.t_are_u_sure_delete_this_file') }}') ? $wire.removeDocument('{{ $doc->id }}') : ''"
                                                    wire:loading.attr="disabled"
                                                    wire:target="removeDocument({{ $doc->id }})" type="button"
                                                    class="font-medium text-primary-600 hover:text-primary-600">
                                                    {{ __('messages.t_remove') }}
                                                </button>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                    @endif

                </div>
            </div>

        </div>

        {{-- Update --}}
        <div class="w-full mt-12">
            <x-bladewind.button size="small" class="mx-auto block w-full" action="update" id="edit-gig-action-btn">
                @lang('messages.t_update')
            </x-bladewind.button>
        </div>


        {{-- SEO Modal --}}
        <x-forms.modal id="modal-upgrade-seo-container" target="modal-upgrade-seo-button" uid="modal_uid_{{ uid() }}" placement="center-center" size="max-w-4xl">

            {{-- Modal heading --}}
            <x-slot name="title">{{ __('messages.t_seo') }}</x-slot>

            {{-- Modal content --}}
            <x-slot name="content">
                <div class="grid sm:grid-cols-2 gap-4" x-data="window.CQjwMygsGRWknEn">

                    {{-- SEO Form --}}
                    <div class="border-b sm:border-b-0 sm:border-r sm:pr-12 relative pb-12 sm:mb-0 dark:border-zinc-700">
                        <div class="w-full space-y-6">
                            
                            {{-- SEO Title --}}
                            <x-forms.text-input
                                label="{{ __('messages.t_seo_title') }}" 
                                placeholder="{{ __('messages.t_enter_seo_title') }}" 
                                model="seo_title"
                                icon="google"
                                x-model="seo.title"
                                maxlength="100" />

                            {{-- SEO Description --}}
                            <x-forms.textarea 
                                label="{{ __('messages.t_seo_description') }}" 
                                placeholder="{{ __('messages.t_enter_seo_description') }}" 
                                model="seo_description"
                                icon="folder-text" 
                                rows="6" 
                                x-model="seo.description"
                                maxlength="150" />
                                
                        </div>

                        {{-- Middle icon --}}
                        <div class="hidden sm:block absolute right-0 transform translate-x-7 top-1/2 -translate-y-7">
                            <p class="font-bold text-gray-500 rounded-full bg-gray-50 dark:bg-zinc-800 flex items-center justify-center text-xs" style="height: 50px; width: 50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            </p>
                        </div>
                        <div class="sm:hidden absolute transform bottom-0 left-1/2 translate-y-6 -translate-x-7">
                            <p class="font-bold text-gray-500 rounded-full bg-gray-50 dark:bg-zinc-800 flex items-center justify-center text-xs" style="height: 50px; width: 50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            </p>
                        </div>
                    </div>

                    {{-- SEO Preview --}}
                    <div class="pt-6 sm:pt-8 sm:px-8 sm:pb-8 flex items-center justify-start sm:!justify-center">
                    
                        <template x-if="seo.title && seo.description">
                            <div class="relative max-w-full">
                                <span class="text-xs font-normal truncate block text-green-700" x-text="seoUrlPreview"></span>
                                <h2 class="text-sm text-primary-700 font-medium truncate block break-all" x-text="seo.title"></h2>
                                <div class="text-xs text-gray-600 font-normal pt-1 break-all">
                                    <span class="text-gray-400" x-text="today"></span> — <span x-text="seo.description"></span>
                                </div>
                                <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6 rtl:space-x-reverse">
                                    <div class="mt-2 flex items-center text-sm text-gray-500">

                                        {{-- Stars --}}
                                        <div class="flex items-center flex-shrink-0">
                                            <svg class="text-amber-400 h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                            <svg class="text-amber-400 h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                            <svg class="text-amber-400 h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                            <svg class="text-amber-400 h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                            <svg class="text-amber-400 h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                        </div>

                                        <div class="text-xs font-normal text-gray-400 ml-2">
                                            4.8 <span class="px-1">•</span> 702 {{ strtolower(__('messages.t_reviews')) }} <span class="px-1">•</span> $5.00
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </template>

                    </div>
                    
                </div>
            </x-slot>

        </x-forms.modal>

        {{-- FAQ Modal --}}
        <x-forms.modal id="modal-add-faq-container" target="modal-add-faq-button" uid="modal_uid_{{ uid() }}" placement="center-center" size="max-w-md">

            {{-- Header --}}
            <x-slot name="title">{{ __('messages.t_add_faq') }}</x-slot>

            {{-- Content --}}
            <x-slot name="content">
                <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                    {{-- Question --}}
                    <div class="col-span-12">
                        <x-forms.text-input required
                            :placeholder="__('messages.t_faq_question_example')" 
                            model="question"
                            icon="question" />
                    </div>

                    {{-- Answer --}}
                    <div class="col-span-12">
                        <x-forms.textarea required
                            :placeholder="__('messages.t_faq_answer_example')" 
                            :rows="7"
                            model="answer"
                            icon="article" />
                    </div>

                </div>
            </x-slot>

            {{-- Footer --}}
            <x-slot name="footer">
                <x-bladewind.button size="small" action="addFaq" class="!px-6">
                    @lang('messages.t_add')
                </x-bladewind.button>
            </x-slot>

        </x-forms.modal>

        {{-- Upgrade Modal --}}
        <x-forms.modal id="modal-add-upgrade-container" target="modal-add-upgrade-button" uid="modal_uid_{{ uid() }}" placement="center-center" size="max-w-md">

            {{-- Header --}}
            <x-slot name="title">{{ __('messages.t_add_service_upgrade') }}</x-slot>

            {{-- Content --}}
            <x-slot name="content">
                <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                    {{-- Upgrade title --}}
                    <div class="col-span-12">
                        <x-forms.text-input required
                            :placeholder="__('messages.t_describe_ur_offering')" 
                            model="add_upgrade.title"
                            icon="cursor-text" />
                    </div>

                    {{-- Price --}}
                    <div class="col-span-12">
                        <x-forms.text-input required
                            :placeholder="__('messages.t_for_and_extra_price')" 
                            model="add_upgrade.price"
                            suffix="{{ $currency_symbol }}" />
                    </div>

                    {{-- Delivery time --}}
                    <div class="col-span-12" wire:key="create-service-available-deliveries-add-upgrade">
                        <x-forms.select-simple required
                            model="add_upgrade.extra_days"
                            :placeholder="__('messages.t_and_an_additional_days')">
                            <x-slot:options>
                                @foreach ($available_deliveries as $key => $delivery)
                                    <option value="{{ $delivery['value'] }}">{{ $delivery['text'] }}</option>
                                @endforeach
                            </x-slot:options>
                        </x-forms.select-simple>
                    </div>

                </div>
            </x-slot>

            {{-- Footer --}}
            <x-slot name="footer">
                <x-bladewind.button size="small" action="addUpgrade" class="!px-6">
                    @lang('messages.t_add')
                </x-bladewind.button>
            </x-slot>

        </x-forms.modal>

        {{-- Requirement Modal --}}
        <x-forms.modal id="modal-add-requirement-container" target="modal-add-requirement-button" uid="modal_uid_{{ uid() }}" placement="center-center" size="max-w-2xl">

            {{-- Header --}}
            <x-slot name="title">{{ __('messages.t_add_question') }}</x-slot>

            {{-- Content --}}
            <x-slot name="content">
                <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                    {{-- Question --}}
                    <div class="col-span-12">
                        <x-forms.textarea required
                            :placeholder="__('messages.t_request_necessary_details_such_dimensions')" 
                            model="add_requirement.question"
                            :rows="6"
                            icon="question" />
                    </div>

                    {{-- Type --}}
                    <div class="col-span-12" wire:key="create-service-add-requirement-type">
                        <x-forms.select-simple required live
                            model="add_requirement.type"
                            :placeholder="__('messages.t_get_it_from')">
                            <x-slot:options>
                                <option value="text">{{ __('messages.t_free_text') }}</option>
                                <option value="choice">{{ __('messages.t_multiple_choice') }}</option>
                                <option value="file">{{ __('messages.t_attachment') }}</option>
                            </x-slot:options>
                        </x-forms.select-simple>
                    </div>

                    {{-- Multiple choice --}}
                    @if (isset($add_requirement['type']) && $add_requirement['type'] === 'choice')
                        
                        {{-- Multiple choices --}}
                        <div class="col-span-12">
                            <x-bladewind.toggle
                                :checked="isset($add_requirement['is_multiple']) ? $add_requirement['is_multiple'] : false"
                                name="add_requirement.is_multiple"
                                :label="__('messages.t_multiple_choices')"
                                label_position="right" />
                        </div>

                        {{-- Loop through options --}}
                        @foreach ($add_requirement['options'] as $i => $option)
                            <div class="col-span-12" wire:key="add-requirement-choice-option-id-{{ $i }}">
                                <div class="flex-grow relative">
                                    <input wire:model.defer="add_requirement.options.{{ $i }}" class="dark:bg-transparent block w-full text-xs rounded border-2 ltr:pr-10 rtl:pl-10 py-3 ltr:pl-3 rtl:pr-3 font-normal {{ $errors->first('add_requirement.options.'.$i) ? 'border-red-500 text-red-600 placeholder-red-400 focus:ring-red-500 focus:border-red-500' : 'border-gray-200 dark:border-zinc-600 placeholder-gray-400 dark:placeholder-gray-200 focus:ring-primary-600 focus:border-primary-600 dark:text-gray-100' }}" type="text" placeholder="{{ __('messages.t_add_option') }}" maxlength="100">
                                    @if (count($add_requirement['options']) > 2)
                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3 rtl:pl-3 flex items-center cursor-pointer" wire:click="deleteOption({{ $i }})">
                                            <span class="hover:text-red-500 {{ $errors->first('add_requirement.options.'.$i) ? 'text-red-400' : 'text-gray-400' }}">
                                                <svg class="w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                {{-- Error --}}
                                @error('add_requirement.options.'.$i)
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('add_requirement.options.'.$i) }}</p>
                                @enderror
                            </div>
                        @endforeach

                        {{-- Add option --}}
                        <div class="col-span-6">
                            <button wire:click="addOption" type="button" class="text-primary-600 hover:text-white hover:bg-primary-600 border-2 border-primary-600 focus:ring-0 focus:outline-none font-medium rounded text-xs px-5 py-2 text-center inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 ltr:-ml-1 rtl:-mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                                {{ __('messages.t_add_new_option') }}
                            </button>
                        </div>

                    @endif

                </div>
            </x-slot>

            {{-- Footer --}}
            <x-slot name="footer">
                <div class="flex justify-between w-full">

                    {{-- Is Required? --}}
                    <div class="flex items-center">
                        <x-bladewind.toggle
                            :checked="isset($add_requirement['is_required']) ? $add_requirement['is_required'] : false"
                            name="add_requirement.is_required"
                            :label="__('messages.t_required')"
                            label_position="right" />
                    </div>

                    @if ($is_edit)
                        {{-- Update --}}
                        <x-bladewind.button size="small" action="updateRequirement" class="!px-6">
                            @lang('messages.t_update')
                        </x-bladewind.button>
                    @else
                        {{-- Add --}}
                        <x-bladewind.button size="small" action="addRequirement" class="!px-6">
                            @lang('messages.t_add')
                        </x-bladewind.button>
                    @endif
                </div>
            </x-slot>

        </x-forms.modal>

    @endif

</div>

{{-- Include in Footer --}}
@push('scripts')

    {{-- Slugify Plugin --}}
    <script src="{{ asset('js/plugins/slugify/slugify.min.js') }}"></script>
    
    {{-- AlpineJS --}}
    <script>
        function CQjwMygsGRWknEn() {
            return {
                seo: {
                    is_enabled : false,
                    title      : "{{ $seo_title }}",
                    description: "{{ $seo_description }}"
                },

                // Initialize
                initialize() {

                },

                // Get seo today date
                today() {
                    const date     = new Date();
                    const strArray = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    const d        = date.getDate();
                    const m        = strArray[date.getMonth()];
                    const y        = date.getFullYear();
                    return '' + m + ' ' + (d <= 9 ? '0' + d : d) + ', ' + y;
                },

                // Set seo url preview
                seoUrlPreview() {
                    if (this.seo.title) {
                        return "{{ url('service') }}/" + slugify(this.seo.title) 
                    }
                }
            }
        }
        window.CQjwMygsGRWknEn = CQjwMygsGRWknEn();
    </script>

@endpush