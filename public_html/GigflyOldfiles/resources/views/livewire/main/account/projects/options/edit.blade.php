<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24">
    <div class="w-full sm:mx-auto sm:max-w-2xl">

        {{-- Loading --}}
        <x-forms.loading />

        {{-- Overview --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-pencil"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_update_project')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_update_project_subtitle')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2"></div>

            </div>

            {{-- Section body --}}
            <div class="w-full">
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                    {{-- Title --}}
                    <div class="col-span-12">
                        <x-forms.text-input required
                            label="{{ __('messages.t_project_title') }}" 
                            placeholder="{{ __('messages.t_enter_title') }}" 
                            model="title"
                            icon="text-italic" />
                    </div>

                    {{-- Description --}}
                    <div class="col-span-12">
                        <x-forms.textarea required
                            label="{{ __('messages.t_project_description') }}" 
                            placeholder="{{ __('messages.t_enter_description') }}" 
                            model="description"
                            :rows="12"
                            icon="text"
                            :hint="__('messages.t_post_project_description_hint')" />
                    </div>

                    {{-- Parent category --}}
                    <div class="col-span-12" wire:key="create-service-categories">
                        <x-forms.select-simple required live
                            model="category"
                            :label="__('messages.t_category')"
                            :placeholder="__('messages.t_choose_category')">
                            <x-slot:options>
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
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
                                @foreach ($subcategories as $sub)
                                    <option value="{{ $sub->id }}">{{ $sub->name }}</option>
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
                                @foreach ($childcategories as $child)
                                    <option value="{{ $child->id }}">{{ $child->name }}</option>
                                @endforeach
                            </x-slot:options>
                        </x-forms.select-simple>
                    </div>

                </div>
            </div>

        </div>

        {{-- Skills --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-asterisk"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_skills')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_what_skills_are_required')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2"></div>

            </div>

            {{-- Section body --}}
            <div class="w-full">
                @if ($category)
                    @foreach ($skills as $skill)
                        @if ($skill?->name)
                        
                            {{-- Check if skill selected --}}
                            @php
                                $is_skill_selected = in_array($skill->id, $required_skills);
                            @endphp

                            {{-- Skill --}}
                            <button type="button" wire:click="addSkill('{{ $skill->uid }}')" class="inline-flex items-center rounded-3xl mt-2 ltr:mr-1 rtl:ml-1 ltr:pl-1 ltr:pr-2 rtl:pr-1 rtl:pl-2 py-1.5 {{ $is_skill_selected ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'bg-gray-100 hover:bg-gray-200 dark:bg-zinc-700 dark:text-zinc-100 dark:hover:bg-zinc-600' }}" wire:key="skills-suggestions-{{ $skill->uid }}">
                                <span class="ltr:ml-2 ltr:mr-1 rtl:mr-2 rtl:ml-1 truncate max-w-xs text-xs font-semibold tracking-wide">
                                    {{ $skill->name }}
                                </span>

                                {{-- Selected? --}}
                                @if ($is_skill_selected)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 opacity-60" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                @endif

                            </button>

                        @endif
                    @endforeach
                @else
                
                    {{-- Select a category first --}}
                    <div class="w-full">
                        <div class="py-2.5 px-3 rounded text-yellow-700 bg-yellow-100">
                            <div class="flex items-center gap-x-3">
                                <svg class="inline-block w-5 h-5 flex-none text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                <h3 class="font-semibold grow text-xs">
                                    @lang('messages.t_skills_select_category_first_alert')
                                </h3>
                            </div>
                        </div>
                    </div>

                @endif
            </div>

        </div>

        {{-- Budget --}}
        <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

            {{-- Section head --}}
            <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                {{-- Title --}}
                <div class="flex items-center gap-x-4">
                    <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                        <i class="ph-duotone ph-currency-dollar"></i>
                    </div>
                    <div class="block">
                        <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                            @lang('messages.t_budget')
                        </h3>
                        <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                            @lang('messages.t_how_do_u_want_to_pay')
                        </p>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="md:ms-auto flex items-center gap-2"></div>

            </div>

            {{-- Section body --}}
            <div class="w-full">
                <div class="grid grid-cols-12 gap-y-8 gap-x-5">

                    {{-- Fixed/Hourly --}}
                    <div class="col-span-12">
                        <ul class="grid w-full gap-6 md:grid-cols-2">

                            {{-- Fixed price --}}
                            <li>
                                <input type="radio" id="post-project-salary-type-fixed" name="salary_type" wire:model="salary_type" value="fixed" class="hidden peer">
                                <label for="post-project-salary-type-fixed" class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border shadow-sm border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-zinc-700 dark:peer-checked:text-primary-600 peer-checked:border-primary-600 peer-checked:text-primary-600 hover:text-gray-600 hover:bg-gray-100 dark:text-zinc-400 dark:bg-zinc-800 dark:hover:bg-zinc-700">                           
                                    <div class="block">
                                        <div class="w-full text-xs+ tracking-wide font-semibold">
                                            @lang('messages.t_fixed_price')
                                        </div>
                                    </div>
                                    <i class="ph-duotone ph-money text-2xl opacity-60"></i>
                                </label>
                            </li>

                            {{-- Hourly price --}}
                            <li>
                                <input type="radio" id="post-project-salary-type-hourly" name="salary_type" wire:model="salary_type" value="hourly" class="hidden peer">
                                <label for="post-project-salary-type-hourly" class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border shadow-sm border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-zinc-700 dark:peer-checked:text-primary-600 peer-checked:border-primary-600 peer-checked:text-primary-600 hover:text-gray-600 hover:bg-gray-100 dark:text-zinc-400 dark:bg-zinc-800 dark:hover:bg-zinc-700">
                                    <div class="block">
                                        <div class="w-full text-xs+ tracking-wide font-semibold">
                                            @lang('messages.t_hourly_price')
                                        </div>
                                    </div>
                                    <i class="ph-duotone ph-clock text-2xl opacity-60"></i>
                                </label>
                            </li>
                        </ul>
                    </div>

                    {{-- Min price --}}
                    <div class="col-span-12 md:col-span-6">
                        <x-forms.text-input required
                            :label="__('messages.t_min_price')" 
                            placeholder="0.00" 
                            model="min_price"
                            suffix="{{ $currency_symbol }}" />
                    </div>

                    {{-- Max price --}}
                    <div class="col-span-12 md:col-span-6">
                        <x-forms.text-input required
                            :label="__('messages.t_max_price')" 
                            placeholder="0.00" 
                            model="max_price"
                            suffix="{{ $currency_symbol }}" />
                    </div>

                </div>
            </div>

        </div>

        {{-- Promotion --}}
        @if (settings('projects')->is_premium_posting)
            <div class="card px-4 py-10 sm:p-10 md:mx-0 mb-6">

                {{-- Section head --}}
                <div class="flex-col md:flex-row md:justify-between flex md:items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">

                    {{-- Title --}}
                    <div class="flex items-center gap-x-4">
                        <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                            <i class="ph-duotone ph-megaphone-simple"></i>
                        </div>
                        <div class="block">
                            <h3 class="text-[0.9375rem] font-bold text-zinc-700 dark:text-white pb-0.5 tracking-wide">
                                @lang('messages.t_promotion')
                            </h3>
                            @if (settings('projects')->is_free_posting)
                                <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                                    @lang('messages.t_make_ur_project_premium_optional')
                                </p>
                            @else
                                <p class="text-xs+ font-medium text-slate-400 dark:text-zinc-400 tracking-wide">
                                    @lang('messages.t_make_ur_project_premium')
                                </p>
                            @endif
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="md:ms-auto flex items-center gap-2"></div>

                </div>

                {{-- Section body --}}
                <div class="w-full">

                    {{-- Plans --}}
                    <div class="grid grid-cols-1 gap-y-6 mb-7">
                        @foreach ($plans as $plan)

                            {{-- Check if plan selected --}}
                            @php
                                $is_plan_selected = in_array($plan->id, $selected_plans);
                            @endphp

                            {{-- Plan --}}
                            <div class="{{ $is_plan_selected ? 'border-primary-600 ring-1 ring-primary-600' : '' }} mb-2 rounded-lg px-4 py-4 border shadow-sm bg-white dark:bg-zinc-700 dark:border-transparent" wire:key="post-project-plans-{{ $plan->id }}">
                                <div class="card-body">
                                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                                        <div class="flex items-center gap-3">
                                            <div>

                                                {{-- Plan details --}}
                                                <div class="flex items-center mb-3 space-x-3 rtl:space-x-reverse">

                                                    {{-- Badge --}}
                                                    <span class="inline-flex items-center text-xs uppercase tracking-wider font-semibold px-3 py-1 rounded-full" style="color:{{ $plan->text_color }};background-color:{{ $plan->bg_color }}">
                                                        <span>{{ $plan->title }}</span>
                                                    </span>

                                                    {{-- Price --}}
                                                    <div class="text-sm font-extrabold text-zinc-800 dark:text-zinc-200">
                                                        {{ money($plan->price, settings('currency')->code, true) }}
                                                    </div>

                                                    {{-- Days --}}
                                                    @if ($plan->days)
                                                        <div class="text-xs font-normal text-gray-400 lowercase">
                                                            {{ $plan->days }} {{ $plan->days > 1 ? __('messages.t_days') : __('messages.t_day') }}
                                                        </div>
                                                    @endif
                                                
                                                </div>
                                                
                                                <!-- Description -->
                                                <div class="text-xs+ font-normal leading-6 text-gray-500 dark:text-zinc-200 tracking-wide">
                                                    {{ $plan->description }}
                                                </div>

                                            </div>
                                        </div>
                                        <div class="flex">

                                            {{-- Select this plan --}}
                                            <button class="flex items-center border h-9 text-xs font-medium px-4 rounded-sm whitespace-nowrap {{ $is_plan_selected ? 'bg-primary-600 text-white border-primary-600' : 'bg-white hover:bg-gray-50 text-gray-600 active:bg-gray-100 border-gray-300 dark:bg-zinc-800 dark:border-transparent dark:text-zinc-300 dark:hover:bg-zinc-600' }}" wire:click="addPlan({{ $plan->id }})">
                                                <span>
                                                    @if ($is_plan_selected)
                                                        @lang('messages.t_selected')
                                                    @else
                                                        @lang('messages.t_select')
                                                    @endif
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Total --}}
                    <div class="flex items-center space-x-3 rtl:space-x-reverse bg-gray-100 hover:bg-gray-200 hover:bg-opacity-50 p-4 rounded-xl dark:bg-black">
                        <div class="grow">
                            <p class="text-sm text-gray-600 font-medium dark:text-zinc-400">
                                @lang('messages.t_total')
                            </p>
                        </div>
                        <div class="flex-none ltr:text-right rtl:text-left text-zinc-900 font-bold text-base tracking-wide dark:text-white">
                            {{ money($promoting_total, settings('currency')->code, true) }}
                        </div>
                    </div>

                </div>
                
            </div>
        @endif

        {{-- Section footer --}}
        <div class="w-full mt-12">
            <x-bladewind.button size="small" class="mx-auto block w-full" wire:click="update">
                @lang('messages.t_update_project')
            </x-bladewind.button>
        </div>

    </div>
</div>