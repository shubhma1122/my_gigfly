<div class="w-full sm:mx-auto sm:max-w-2xl">
	<x-form wire:submit="send" class="card px-4 py-10 sm:p-10 md:mx-0">

        {{-- Loading --}}
        <x-forms.loading />

        {{-- Section head --}}
        <div class="flex items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">
            <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                <i class="ph-duotone ph-paper-plane-tilt"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    @lang('messages.t_send_reply')
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    @lang('dashboard.t_reply_support_message_subtitle')
                </p>
            </div>
        </div>

        {{-- Section body --}}
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                {{-- Email address --}}
                <div class="col-span-12">
                    <x-forms.text-input disabled
                        label="{{ __('messages.t_email_address') }}" 
                        placeholder="{{ __('messages.t_enter_email_address') }}" 
                        model="email"
                        icon="at" />
                </div>

                {{-- Ip address --}}
                <div class="col-span-12">
                    <x-forms.text-input disabled
                        label="{{ __('messages.t_ip_address') }}" 
                        placeholder="{{ __('messages.t_ip_address') }}" 
                        model="ip_address"
                        icon="globe" />
                </div>

                {{-- User agent --}}
                <div class="col-span-12">
                    <x-forms.text-input disabled
                        label="{{ __('dashboard.t_user_agent') }}" 
                        placeholder="{{ __('dashboard.t_user_agent') }}" 
                        model="user_agent"
                        icon="google-chrome-logo" />
                </div>

                {{-- Divider --}}
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                {{-- Subject --}}
                <div class="col-span-12">
                    <x-forms.text-input required
                        label="{{ __('messages.t_subject') }}" 
                        placeholder="{{ __('messages.t_enter_message_subject') }}" 
                        model="subject"
                        icon="text-italic" />
                </div>

                {{-- Message --}}
                <div class="col-span-12">
                    <x-forms.tinymce
                        id="reply"
                        model="reply">
                        <x-slot:value>

                            <p>&nbsp;</p>
                            <p><em><span style="color: rgb(206, 212, 217);">@lang('dashboard.t_type_ur_reply')&nbsp;</span></em><br><br><br></p>
<pre style="text-align: left;"><span style="color: rgb(126, 140, 141);"><sup>-----------------------------------------------------------------------------------</sup></span></pre>
                            {{-- Message --}}
                            {!! $message->message !!}       
                            

                        </x-slot:value>
                    </x-forms.tinymce>
                </div>
                
            </div>
        </div>

        {{-- Section footer --}}
        <div class="w-full mt-12">
            <x-bladewind.button size="small" class="mx-auto block w-full" can_submit="true">
                @lang('messages.t_send')
            </x-bladewind.button>
        </div>
            
	</x-form>
</div>