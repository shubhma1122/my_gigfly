<div class="w-full bg-white shadow rounded-lg">

    <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
        <div class="py-10 px-12">

            {{-- Section header --}}
            <div class="mb-14">
                <h2 class="text-sm leading-6 font-bold text-gray-900">{{ __('messages.t_withdrawal_settings') }}</h2>
                <p class="mt-1 text-xs text-gray-500">{{ __('messages.t_withdrawal_settings_subtitle') }}</p>
            </div>
            
            {{-- Section content --}}
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                {{-- Min withdrawal amount --}}
                <div class="col-span-12">
                    <x-forms.text-input
                        :label="__('messages.t_min_withdrawal_amount')"
                        :placeholder="__('messages.t_enter_min_withdrawal_amount')"
                        model="min_withdrawal_amount"
                        icon="cash-multiple" />
                </div>

                {{-- Withdrawal system --}}
                <div class="col-span-12">
                    <div class="w-full" wire:ignore>
                        <x-forms.select2
                            :label="__('messages.t_withdrawal_period')"
                            :placeholder="__('messages.t_choose_withdrawal_system')"
                            model="withdrawal_period"
                            :options="[ 
                                ['text' => __('messages.t_daily'), 'value' => 'daily'], 
                                ['text' => __('messages.t_weekly'), 'value' => 'weekly'], 
                                ['text' => __('messages.t_monthly'), 'value' => 'monthly'], 
                            ]"
                            :isDefer="true"
                            :isAssociative="false"
                            :componentId="$this->id"
                            value="value"
                            text="text" />
                    </div>
                </div>

            </div>

        </div>

        {{-- Actions --}}
        <div class="py-4 px-4 flex justify-end sm:px-12 bg-gray-50 rounded-bl-lg rounded-br-lg">
            <x-forms.button action="update" text="{{ __('messages.t_update') }}" :block="false"  />
        </div>                    

    </div>

</div>    