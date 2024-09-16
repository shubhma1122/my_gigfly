<main class="w-full">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Content --}}
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    {{-- Form --}}
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">

                        {{-- Section header --}}
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">{{ __('messages.t_browser_sessions') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{ __('messages.t_browser_sessions_subtitle') }}</p>
                        </div>
                        
                        {{-- Section content --}}
                        <div class="w-full mb-6">
                            @if (count($this->sessions) > 0)
                                <div class="w-full space-y-5 divide-y divide-gray-200 dark:divide-zinc-700">

                                    @foreach ($this->sessions as $session)
                                        <div class="flex items-center justify-between {{ !$loop->first ? 'pt-5' : '' }}">
                                            <div class="flex items-center">

                                                {{-- Check device type --}}
                                                @if ($session->agent->isDesktop())
                                                    <div class="focus:outline-none w-10 h-10 bg-blue-100 dark:bg-zinc-700 rounded flex items-center justify-center">
                                                        <svg class="w-5 h-5 text-blue-700 dark:text-zinc-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M22 18V3H2v15H0v2h24v-2h-2zm-8 0h-4v-1h4v1zm6-3H4V5h16v10z"></path></svg>
                                                    </div>
                                                @else
                                                    <div class="focus:outline-none w-10 h-10 bg-red-100 dark:bg-zinc-700 rounded flex items-center justify-center">
                                                        <svg class="w-5 h-5 text-red-700 dark:text-zinc-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"></path></svg>
                                                    </div>
                                                @endif

                                                {{-- Device details --}}
                                                <div class="ltr:pl-3 rtl:pr-3">

                                                    {{-- Name --}}
                                                    <p class="focus:outline-none text-sm font-medium leading-none text-gray-800 dark:text-gray-100">
                                                        {{ $session->agent->platform() ? $session->agent->platform() : __('messages.t_unknown') }} - {{ $session->agent->browser() ? $session->agent->browser() : __('messages.t_unknown') }}
                                                    </p>

                                                    {{-- Ip address --}}
                                                    <p class="focus:outline-none text-[13px] leading-3 pt-3 text-gray-500 dark:text-gray-400">
                                                        {{ $session->ip_address }}
                                                    </p>

                                                </div>

                                            </div>

                                            {{-- Check if this the current device --}}
                                            @if ($session->is_current_device)
                                                <p class="focus:outline-none text-xs font-medium leading-none text-right text-green-600 dark:text-green-400">
                                                    @lang('messages.t_this_device')
                                                </p>
                                            @elseif ($session->last_active)
                                                <p class="focus:outline-none text-xs font-medium leading-none text-right text-zinc-600 dark:text-zinc-400">
                                                    {{ __('messages.t_last_activity') }} {{ $session->last_active }}
                                                </p>
                                            @endif

                                        </div>
                                    @endforeach

                                </div>
                            @endif
                        </div>

                        {{-- Section footer --}}
                        <div class="w-full mt-10">
                            <button type="button" id="modal-password-button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-5 py-2 leading-6 border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none text-sm dark:bg-zinc-700 dark:border-transparent dark:text-zinc-200 dark:hover:bg-zinc-600 dark:hover:text-white">
                                @lang('messages.t_logout_other_browser_sessions')
                            </button>
                        </div>

                    </div>                 

                </div>

            </div>
        </div>
    </div>

    {{-- Current password modal --}}
    <x-forms.modal id="modal-password-container" target="modal-password-button" uid="modal_sessions_current_password" placement="center-center" size="max-w-sm">
        <x-slot name="content">
            <div class="relative">
                <div class="flex flex-col items-center justify-center">

                    {{-- Empty section icon --}}
                    <img src="{{ url('public/img/svg/lock.svg') }}" class="w-44 h-44 p-3 rounded-full border shadow-xs">

                    {{-- Password --}}
                    <div class="w-full mt-6">
                        <x-forms.text-input
                            :placeholder="__('messages.t_enter_current_password')"
                            model="password"
                            type="password"
                            svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm4 10.723V20h-2v-2.277a1.993 1.993 0 0 1 .567-3.677A2.001 2.001 0 0 1 14 16a1.99 1.99 0 0 1-1 1.723z"></path></svg>' />
                    </div>

                    {{-- Text --}}
                    <p class="text-base font-bold leading-none text-gray-800 dark:text-gray-100 mt-7">
                        @lang('messages.t_current_password')
                    </p>
                    <p class="text-[13px] leading-relaxed text-center text-gray-600 dark:text-gray-300 mt-3">
                        @lang('messages.t_to_help_make_ur_account_secure_enter_current_pass')
                    </p>

                    {{-- Submit --}}
                    <button wire:click="logout" class="mt-8 px-8 py-3 bg-primary-700 focus:outline-none hover:bg-opacity-80 dark:bg-primary-600 rounded">
                        <p class="text-xs font-semibold leading-3 text-gray-100">
                            @lang('messages.t_logout_other_browser_sessions')
                        </p>
                    </button>

                </div>

                {{-- Close modal --}}
                <div class="cursor-pointer absolute top-0 right-0 m-3 dark:text-gray-100 text-gray-600 transition duration-150 ease-in-out" x-on:click="close">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="Close" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z"></path> <line x1="18" y1="6" x2="6" y2="18"></line> <line x1="6" y1="6" x2="18" y2="18"></line> </svg>
                </div>

            </div>
        </x-slot>
    </x-forms.modal>

</main>