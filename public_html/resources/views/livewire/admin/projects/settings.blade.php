<div class="w-full sm:mx-auto sm:max-w-2xl">
	<x-form wire:submit="update" class="card px-4 py-10 sm:p-10 md:mx-0" has-files>

        {{-- Loading --}}
        <x-forms.loading />

        {{-- Section head --}}
        <div class="flex items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">
            <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                <i class="ph-duotone ph-gear"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    @lang('messages.t_projects_settings')
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    @lang('messages.t_projects_settings_subtitle')
                </p>
            </div>
        </div>

        {{-- Section body --}}
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                {{-- Enable projects --}}
                <div class="col-span-12">
                    <x-bladewind.toggle
                        :checked="$is_enabled"
                        name="is_enabled"
                        :label="__('messages.t_enable_projects_section')"
                        label_position="right" />
                </div>

                {{-- Auto approve projects --}}
                <div class="col-span-12">
                    <x-bladewind.toggle
                        :checked="$auto_approve_projects"
                        name="auto_approve_projects"
                        :label="__('messages.t_auto_approve_projects')"
                        label_position="right" />
                </div>

                {{-- Auto approve bids --}}
                <div class="col-span-12">
                    <x-bladewind.toggle
                        :checked="$auto_approve_bids"
                        name="auto_approve_bids"
                        :label="__('messages.t_auto_approve_bids')"
                        label_position="right" />
                </div>

                {{-- Enable free posting --}}
                <div class="col-span-12">
                    <x-bladewind.toggle
                        :checked="$is_free_posting"
                        name="is_free_posting"
                        :label="__('messages.t_enable_free_posting')"
                        label_position="right" />
                </div>

                {{-- Enable premium posting --}}
                <div class="col-span-12">
                    <x-bladewind.toggle
                        :checked="$is_premium_posting"
                        name="is_premium_posting"
                        :label="__('messages.t_enable_premium_posting')"
                        label_position="right" />
                </div>

                {{-- Enable premium posting --}}
                <div class="col-span-12">
                    <x-bladewind.toggle
                        :checked="$is_premium_bidding"
                        name="is_premium_bidding"
                        :label="__('messages.t_enable_promoting_bids')"
                        label_position="right" />
                </div>

                {{-- Divider --}}
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                {{-- Who can post --}}
                <div class="col-span-12">

                    {{-- Select --}}
                    <div class="w-full" wire:ignore>
                        <x-bladewind.select required
                            :component-id="$this->id()"
                            name="who_can_post"
                            :selected_value="$who_can_post"
                            :label="__('messages.t_who_can_post_projects')"
                            :placeholder="__('messages.t_choose_who_can_post_new_projects')"
                            data="manual">
                        
                            {{-- Values --}}
                            <x-bladewind.select-item :label="__('messages.t_seller')" value="seller" />
                            <x-bladewind.select-item :label="__('messages.t_buyer')" value="buyer" />
                            <x-bladewind.select-item :label="__('messages.t_both')" value="both" />

                        </x-bladewind.select>
                    </div>

                    {{-- Error --}}  
                    @error('who_can_post')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('who_can_post') }}</p>
                    @enderror 

                </div>

                {{-- Divider --}}
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                {{-- Commission type --}}
                <div class="col-span-12">

                    {{-- Select --}}
                    <div class="w-full" wire:ignore>
                        <x-bladewind.select required
                            :component-id="$this->id()"
                            name="commission_type"
                            :selected_value="$commission_type"
                            :label="__('messages.t_commission_type')"
                            :placeholder="__('messages.t_choose_commission_type')"
                            data="manual">
                        
                            {{-- Values --}}
                            <x-bladewind.select-item :label="__('messages.t_percentage_amount')" value="percentage" />
                            <x-bladewind.select-item :label="__('messages.t_fixed_amount')" value="fixed" />

                        </x-bladewind.select>
                    </div>

                    {{-- Error --}}  
                    @error('commission_type')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('commission_type') }}</p>
                    @enderror 

                </div>

                {{-- Commission from publisher --}}
                <div class="col-span-12 md:col-span-6">
                    <x-forms.text-input required
                        :label="__('messages.t_commission_from_publisher')"
                        :placeholder="__('messages.t_enter_commission_value')"
                        model="commission_from_publisher"
                        icon="user" />
                </div>

                {{-- Commission from freelancer --}}
                <div class="col-span-12 md:col-span-6">
                    <x-forms.text-input required
                        :label="__('messages.t_commission_from_freelancer')"
                        :placeholder="__('messages.t_enter_commission_value')"
                        model="commission_from_freelancer"
                        icon="identification-card" />
                </div>

                {{-- Max skills --}}
                <div class="col-span-12">
                    <x-forms.text-input required
                        :label="__('dashboard.t_max_skills')"
                        :placeholder="__('dashboard.t_enter_max_skills')"
                        model="max_skills"
                        icon="asterisk-simple" />
                </div>

                {{-- Divider --}}
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>
                
            </div>
        </div>

        {{-- Section footer --}}
        <div class="w-full mt-12">
            <x-bladewind.button size="small" class="mx-auto block w-full" can_submit="true">
                @lang('messages.t_update')
            </x-bladewind.button>
        </div>
            
	</x-form>
</div>