<div class="w-full">
    
    {{-- Heading --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">
    
                <div class="min-w-0 flex-1">
    
                    {{-- Section heading --}}
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.my_portfolio')
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
                    
                </div>
    
                {{-- Actions --}}
                <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">
        
                {{-- Switch to buying --}}
                <span class="block">
                    <a href="{{ url('/') }}" class="inline-flex items-center rounded-sm border border-gray-300 bg-white px-4 py-2 text-[13px] font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:bg-zinc-800 dark:border-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-900 dark:focus:ring-offset-zinc-900 dark:focus:ring-zinc-900">
                        @lang('messages.t_switch_to_buying')
                    </a>
                </span>
        
                </div>
    
            </div>
        </div>
    </div>
    
    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">

        {{-- Projects --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">

            {{-- Loop through projects --}}
            @foreach ($projects as $project)                                        
                <div class="relative flex flex-col break-words rounded-xl shadow-sm" wire:key="freelancer-portfolio-{{ $project->uid }}">

                    {{-- Thumbnail --}}
                    <img class="h-72 w-full rounded-lg object-cover object-center" src="{{ src($project->thumbnail) }}" alt="{{ $project->title }}">

                    {{-- Card content --}}
                    <div class="absolute inset-0 flex h-full w-full flex-col justify-end">
                        <div class="space-y-1.5 rounded-lg bg-gradient-to-t from-[#00000091] via-[#000000cc] to-transparent px-4 pb-3 pt-12">

                            {{-- Project title --}}
                            <div class="line-clamp-2">
                                <a href="{{ url('profile/' . $project->user->username . '/portfolio/' . $project->slug) }}" target="_blank" class="text-base font-medium text-white">
                                    {{ $project->title }}
                                </a>
                            </div>

                            {{-- Footer actions --}}
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-xs text-slate-200">

                                    {{-- Status --}}
                                    @if ($project->status === 'pending')
                                        <span class="inline-flex items-center rounded-full text-xs font-medium text-amber-300">
                                            {{ __('messages.t_pending') }}
                                        </span>
                                    @else
                                        <span class="inline-flex items-center rounded-full text-xs font-medium text-green-400">
                                            {{ __('messages.t_active') }}
                                        </span>
                                    @endif

                                    {{-- Created at --}}
                                    <div class="mx-3 my-0.5 w-px self-stretch bg-white/20"></div>
                                        <p class="shrink-0 text-xs font-normal tracking-wide">
                                            {{ format_date($project->created_at) }}
                                        </p>
                                    </div>

                                {{-- Actions --}}
                                <div class="ltr:-mr-1.5 rtl:-ml-1.5 flex space-x-2 rtl:space-x-reverse">

                                    {{-- Edit --}}
                                    <a href="{{ url('seller/portfolio/edit', $project->uid) }}" class="h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-slate-100" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                    </a>

                                    {{-- Delete --}}
                                    <button 
                                        x-on:click="confirm('{{ __('messages.t_are_u_sure_u_want_to_delete_project') }}') ? $wire.delete('{{ $project->uid }}') : ''" 
                                        wire:loading.attr="disabled" 
                                        wire:target="delete('{{ $project->uid }}')"
                                        type="button" 
                                        class="h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 flex items-center justify-center disabled:cursor-not-allowed disabled:bg-slate-400">

                                        {{-- Loading indicator --}}
                                        <div wire:loading wire:target="delete('{{ $project->uid }}')">
                                            <svg role="status" class="w-4 h-4 text-gray-500 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                            </svg>
                                        </div>

                                        {{-- Icon --}}
                                        <div wire:loading.remove wire:target="delete('{{ $project->uid }}')">
                                            <svg class="w-4 h-4 text-slate-100" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                        </div>

                                    </button>
                                    
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            @endforeach

            {{-- Add new work --}}
            <a href="{{ url('seller/portfolio/create') }}" class="h-72 rounded-xl border-dashed border-2 border-slate-200 bg-opacity-20 bg-slate-100 hover:bg-opacity-100 dark:border-zinc-600 dark:bg-zinc-800 dark:hover:bg-zinc-700 flex items-center justify-center flex-col">
                <svg class="h-14 w-14 text-slate-300 dark:text-zinc-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd"></path></svg>
            </a>

        </div>

        {{-- Pages --}}
        @if ($projects->hasPages())
            <div class="flex justify-center pt-12">
                {!! $projects->links('pagination::tailwind') !!}
            </div>
        @endif

    </div>

</div>