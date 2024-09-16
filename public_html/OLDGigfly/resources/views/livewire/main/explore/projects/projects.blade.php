<div class="w-full">

	{{-- Hero section --}}
	<div class="rounded-xl px-7 pt-2.5 lg:min-h-[530px] md:bg-[120%] md:rtl:bg-[0] xl:bg-[100%] xl:rtl:bg-[0] bg-white shadow-sm border border-gray-100 bg-contain bg-no-repeat  relative mx-auto dark:bg-zinc-800 dark:border-transparent lg:bg-[image:var(--projects-image-url)]" style="--projects-image-url: url({{ url('public/img/explore/projects/1.jpg') }});">
		<div class="lg:max-w-xl w-full py-12 rtl:pl-5">
	
			{{-- Headline --}}
			<h2 class="mb-5 lg:leading-[62px] text-2xl leading-[32px] sm:text-3xl md:text-4xl lg:text-6xl font-bold text-zinc-900 dark:text-white">
				@lang('messages.t_clear_scope')
				<br>
				@lang('messages.t_upfront_price')
				<br>
				@lang('messages.t_no_surprises')
			</h2>
	
			{{-- Paragraph --}}
			<p class="text-sm leading-7 text-gray-500 dark:text-zinc-400">
				@lang('messages.t_complete_ur_most_pressing_work_with_project_catatlog')
			</p>
	
			{{-- Search form --}}
			<form class="flex items-center mt-8" action="{{ url('explore/projects') }}" accept="GET">   
		
				{{-- Input --}}
				<div class="relative w-full">
					<div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center ltr:pl-3 rtl:pr-3 pointer-events-none">
						<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
					</div>
					<input type="search" name="q" wire:model.defer="q" class="bg-slate-100 border-none text-gray-900 text-sm font-medium rounded-md block w-full ltr:pl-10 rtl:pr-10 px-2.5 py-4 focus:outline-none focus:ring-0 dark:bg-zinc-700 dark:text-zinc-200 dark:placeholder:text-zinc-400 placeholder:font-normal" placeholder="{{ __('messages.t_type_something_to_search_in_projects') }}" required>
				</div>
	
				{{-- Button --}}
				<button type="submit" class="px-5 py-4 ltr:ml-2 rtl:mr-2 text-sm font-medium text-white bg-primary-600 rounded-md border-none hover:bg-primary-800 focus:ring-0 focus:outline-none">
					@lang('messages.t_search')
				</button>
	
			</form>
	
			{{-- Popular categories --}}
			<div class="mt-5">
				@php
					$popular_categories = App\Models\ProjectCategory::whereHas('projects')->withCount('projects')->take(5)->orderBy('projects_count')->get();
				@endphp
				<div class="hidden sm:flex items-center text-slate-500 dark:text-zinc-200 font-semibold text-sm whitespace-nowrap">
					@lang('messages.t_popular_colon') 
					<ul class="flex ltr:ml-3 rtl:mr-3">
						@foreach ($popular_categories as $tag)
							<li class="flex ltr:mr-3 rtl:ml-3 whitespace-nowrap">
								<a href="{{ url('explore/projects', $tag->slug) }}" class="border-2 border-slate-400 rounded-[40px] hover:bg-slate-100 hover:text-slate-500 transition-all duration-200 px-3 py-0.5 text-xs dark:text-zinc-400 dark:border-zinc-700 dark:hover:bg-zinc-700 dark:hover:text-zinc-300">
									{{ $tag->name }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>

		</div>
	</div>

	{{-- Categories --}}
	@if ($categories && $categories->count())
		<div class="w-full mt-8 lg:mt-20">

			{{-- Section head --}}
			<div class="block mb-8">
				<h1 class="text-xl md:text-2xl text-black dark:text-white font-bold tracking-wide">
					@lang('messages.t_browse_by_categories')
				</h1>
			</div>

			{{-- Section body --}}
			<div class="hidden -mx-2.5" id="projects-categories-slick" wire:ignore>
				@foreach ($categories as $category)
					<a href="{{ url('explore/projects', $category->slug) }}" class="relative !h-72 rounded-xl !flex !flex-col overflow-hidden group mx-2.5">

						{{-- Thumbnail --}}
						<span aria-hidden="true" class="absolute inset-0">
							<img src="{{ src($category->thumbnail) }}" alt="{{ $category->name }}" class="w-full h-full object-center object-cover opacity-70 group-hover:opacity-100">
						</span>

						{{-- Black background --}}
						<span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-90"></span>

						{{-- Title --}}
						<span class="relative mt-auto text-center text-xl font-bold text-white pb-6">
							{{ category_title('projects', $category) }}
						</span>

					</a>
				@endforeach
			</div>

		</div>
	@endif

	{{-- Latest projects --}}
	@if ($projects && $projects->count())
		<div class="w-full mt-8 lg:mt-20">

			{{-- Section head --}}
			<div class="block mb-8">
				<h1 class="text-xl md:text-2xl text-black dark:text-white font-bold tracking-wide">
					@lang('messages.t_latest_projects')
				</h1>
			</div>

			{{-- Section body --}}
			<div class="grid grid-cols-1 gap-4 lg:gap-8">
				@foreach ($projects as $project)

					@livewire('main.cards.project', [ 'id' => $project->uid ], key('project-card-id-' . $project->uid))
				
				@endforeach
			</div>

			{{-- Section footer --}}
			@if ($projects->hasPages())
				<hr class="my-10">
				<div class="px-4 py-5 sm:px-6 flex justify-center">
					{!! $projects->links('pagination::tailwind') !!}
				</div>
			@endif

		</div>
	@endif
	
</div>

@push('scripts')
	<script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(){
			// Init featured categories slick
			$('#projects-categories-slick').slick({
				dots          : false,
				autoplay      : true,
				infinite      : true,
				speed         : 300,
				slidesToShow  : 6,
				slidesToScroll: 1,
				arrows        : false,
				responsive    : [
					{
					breakpoint: 1024,
						settings: {
							slidesToShow  : 4,
							slidesToScroll: 1
						}
					},
					{
					breakpoint: 800,
						settings: {
							slidesToShow  : 3,
							slidesToScroll: 1
						}
					},
					{
					breakpoint: 600,
						settings: {
							slidesToShow  : 3,
							slidesToScroll: 1
						}
					},
					{
					breakpoint: 480,
						settings: {
							slidesToShow  : 2,
							slidesToScroll: 1
						}
					}
				]
			});
			$('#featured-categories-slick').removeClass('hidden');
		});
	</script>
@endpush

@push('styles')
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css" />
@endpush