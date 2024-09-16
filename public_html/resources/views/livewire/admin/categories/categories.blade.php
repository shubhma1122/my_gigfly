<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="lg:flex lg:items-center lg:justify-between mb-14">
    
        <div class="min-w-0 flex-1">

            {{-- Section heading --}}
            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                @lang('messages.t_categories')
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
    
                    {{-- Dashboard --}}
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="{{ admin_url('/') }}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                @lang('messages.t_dashboard')
                            </a>
                        </div>
                    </li>
    
                    {{-- Current page --}}
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                @lang('messages.t_categories')
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

        {{-- Actions --}}
        <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4 justify-between">

            {{-- Create --}}
            <a href="{{ admin_url('categories/create') }}" class="btn p-2.5 hover:shadow-none ring-slate-300 dark:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-slate-300 dark:focus:ring-offset-zinc-600 space-x-2 rtl:space-x-reverse border">
                <x-icon class="w-6 h-6 text-gray-400 dark:text-zinc-300" name="plus" variant="solid" mini />
            </a>

        </div>

    </div>

    {{-- Success --}}
    @if (session()->has('success'))
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3">
                    <p class="text-sm font-medium text-green-800">{{ session()->get('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    {{-- Content --}}
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>

                        <th>@lang('messages.t_category')</th>
                        <th class="text-center">@lang('messages.t_gigs')</th>
                        <th class="text-center">@lang('messages.t_projects')</th>
                        <th class="text-center">@lang('messages.t_options')</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                        <tr wire:key="categories-{{ $category->uid }}">

                            {{-- Category --}}
                            <td>
                                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <div class="h-10 w-10 inline-flex flex-shrink-0 relative">
                                        @if ($category->icon)
                                            <img class="mask is-squircle object-cover w-full h-full block" src="{{ src($category->icon) }}" alt="{{ $category->name }}">
                                        @else
                                            @php
                                                $faker = Faker\Factory::create();
                                                $color = $faker->rgbColor();
                                            @endphp
                                            <div class="flex items-center justify-center h-full w-full mask is-squircle text-sm uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba({{ $color }}, .1);color: rgb({{ $color }})">
                                                {{ Str::substr($category->name, 0, 2) }}
                                            </div>   
                                        @endif
                                    </div>
                                    <div>
                                        <a href="{{ url('categories', $category->slug) }}" target="_blank" class="text-sm font-semibold whitespace-nowrap dark:text-zinc-100">
                                            {{ $category->name }}
                                        </a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-px dark:text-zinc-300">
                                            {{ $category->slug }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- Total gigs --}}
                            <td class="text-center">
                                <span class="text-sm font-semibold text-gray-500 dark:text-zinc-300">{{ $category->gigs_count }}</span>
                            </td>

                            {{-- Total projects --}}
                            <td class="text-center">
                                <span class="text-sm font-semibold text-gray-500 dark:text-zinc-300">{{ $category->projects_count }}</span>
                            </td>
                            
                            {{-- Options --}}
                            <td class="table-report__action">
                                <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                    {{-- Edit --}}
                                    <x-table.action-button 
                                        icon="pencil" 
                                        :title="__('messages.t_edit')"
                                        href="{{ admin_url('categories/edit/' . $category->uid) }}" />

                                    {{-- Delete --}}
                                    <x-table.action-button 
                                        icon="trash" 
                                        icon-color="text-red-600"
                                        :title="__('messages.t_delete')"
                                        href="{{ admin_url('categories/delete/' . $category->uid) }}" />

                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    {{-- Pagination --}}
    @if ($categories->hasPages())
        <div class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
            {!! $categories->links('pagination::tailwind') !!}
        </div>
    @endif

</div>