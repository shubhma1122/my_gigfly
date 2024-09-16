<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24">

    {{-- Breadcrumbs --}}
    <nav class="flex" aria-label="Breadcrumb">
        <ol role="list" class="flex items-center space-x-2 rtl:space-x-reverse">

            {{-- Home --}}
            <li>
                <div>
                    <a href="{{ url('/') }}" class="text-gray-400 hover:text-gray-500 dark:text-zinc-300 dark:hover:text-zinc-100">
                        <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd"/> </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>
      
            {{-- Projects --}}
            <li>
                <div class="flex items-center">
                    <svg class="h-4 w-4 flex-shrink-0 text-gray-300 reflection dark:text-zinc-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"> <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"/> </svg>
                    <a href="{{ url('explore/projects') }}" class="ltr:ml-2 rtl:mr-2 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-zinc-300 dark:hover:text-zinc-100">
                        @lang('messages.t_explore_projects')
                    </a>
                </div>
            </li>

            {{-- Category --}}
            <li>
                <div class="flex items-center">
                    <svg class="h-4 w-4 flex-shrink-0 text-gray-300 reflection dark:text-zinc-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"> <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"/> </svg>
                    <a href="{{ url('explore/projects', $category->slug) }}" class="ltr:ml-2 rtl:mr-2 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-zinc-300 dark:hover:text-zinc-100" aria-current="page">
                        {{ category_title('projects', $category) }}
                    </a>
                </div>
            </li>

            {{-- Skill --}}
            <li>
                <div class="flex items-center">
                    <svg class="h-4 w-4 flex-shrink-0 text-gray-300 reflection dark:text-zinc-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"> <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"/> </svg>
                    <span class="ltr:ml-2 rtl:mr-2 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-zinc-300 dark:hover:text-zinc-100" aria-current="page">
                        {{ $skill->name }}
                    </span>
                </div>
            </li>

        </ol>
    </nav>

    {{-- Skill title --}}
    <h1 class="text-zinc-600 text-4xl -tracking-wide leading-9 font-semibold pt-6 mb-3 dark:text-zinc-100">
        {{ $skill->name }}
    </h1>

    {{-- Projects --}}
    <div class="w-full mt-8 lg:mt-16">

        {{-- Section body --}}
        <div class="grid grid-cols-1 gap-4 lg:gap-8">
            @forelse ($projects as $project)

                @livewire('main.cards.project', [ 'id' => $project->uid ], key('project-card-id-' . $project->uid))
            
            @empty

                {{-- Nothing to show --}}
                <div class="border-dashed border-2 border-gray-200 rounded py-16 text-center font-normal tracking-wider text-gray-300 text-base dark:border-zinc-700 dark:text-zinc-500">
                    @lang('messages.no_results_found')
                </div>

            @endforelse
        </div>

        {{-- Section footer --}}
        @if ($projects->hasPages())
            <hr class="my-10">
            <div class="px-4 py-5 sm:px-6 flex justify-center">
                {!! $projects->links('pagination::tailwind') !!}
            </div>
        @endif

    </div>

</div>