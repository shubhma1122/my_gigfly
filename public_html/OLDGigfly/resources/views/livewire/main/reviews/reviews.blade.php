<div class="container max-w-2xl mx-auto lg:max-w-7xl" x-data="window.rlJJlyfiXvZQNki" x-cloak>

    <div class="px-4 lg:px-8 sm:px-6 text-2xl font-black text-gray-700 dark:text-gray-100 tracking-wide">
        {{ __('messages.t_customer_reviews') }}
    </div>

    <div class="">
        <div class="py-16 px-4 sm:py-24 sm:px-6 lg:py-16 lg:px-8 lg:grid lg:grid-cols-12 lg:gap-x-8">
            <div class="lg:col-span-4">

                {{-- Gig preview --}}
                <div class="block mb-10">
                    @livewire('main.cards.gig', ['gig' => $gig])
                </div>

                {{-- Rating --}}
                <div class="mt-3 flex items-center">
                    <div id="main-rating"></div>
                    <p class="ltr:ml-2 rtl:mr-2 text-sm italic text-gray-600 dark:text-gray-200">{{ __('messages.t_based_on_number_reviews', ['number' => $gig->counter_reviews]) }}

                        @if ($rating)
                            <a href="{{ url('reviews', $gig->uid) }}" class="ml-3 not-italic font-medium text-primary-600 text-xs">{{ __('messages.t_reset_filter') }}</a>
                        @endif

                    </p>
                </div>

                <div class="mt-6">
                    <h3 class="sr-only">Review data</h3>
                    <dl class="space-y-3">

                        {{-- 5 Stars --}}
                        <a href="{{ url('reviews/' . $gig->uid . '?rating=5') }}" class="flex items-center text-sm">

                            @php
                                $percentage_5 = $gig->reviews()->active()->where('rating', 5)->count() * 100 / $gig->counter_reviews;
                            @endphp

                            <dt class="flex-1 flex items-center">
                                <p class="w-3 font-bold text-xs text-gray-800 dark:text-amber-400">5</p>
                                <div aria-hidden="true" class="ltr:ml-1 rtl:mr-1 flex-1 flex items-center">
                                    <svg class="flex-shrink-0 h-4 w-4 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                    <div class="ltr:ml-3 rtl:mr-3 relative flex-1">
                                        <div class="h-2 bg-gray-100 border border-gray-200 rounded-full"></div>
                                        @if ($percentage_5)
                                            <div style="width: {{ $percentage_5 }}%" class="absolute inset-y-0 bg-amber-400 border border-amber-400 rounded-full"></div>
                                        @endif
                                    </div>
                                </div>
                            </dt>
                            <dd class="ltr:ml-3 rtl:mr-3 w-10 text-right tabular-nums text-xs text-gray-900 font-bold dark:text-gray-400">
                                
                                {{ $percentage_5 }}%
                            </dd>
                        </a>

                        {{-- 4 Stars --}}
                        <a href="{{ url('reviews/' . $gig->uid . '?rating=4') }}" class="flex items-center text-sm">

                            @php
                                $percentage_4 = $gig->reviews()->active()->where('rating', 4)->count() * 100 / $gig->counter_reviews;
                            @endphp

                            <dt class="flex-1 flex items-center">
                                <p class="w-3 font-bold text-xs text-gray-800 dark:text-amber-400">4</p>
                                <div aria-hidden="true" class="ltr:ml-1 rtl:mr-1 flex-1 flex items-center">
                                    <svg class="flex-shrink-0 h-4 w-4 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                    <div class="ltr:ml-3 rtl:mr-3 relative flex-1">
                                        <div class="h-2 bg-gray-100 border border-gray-200 rounded-full"></div>
                                        @if ($percentage_4)
                                            <div style="width: {{ $percentage_4 }}%" class="absolute inset-y-0 bg-amber-400 border border-amber-400 rounded-full"></div>
                                        @endif
                                    </div>
                                </div>
                            </dt>
                            <dd class="ltr:ml-3 rtl:mr-3 w-10 text-right tabular-nums text-xs text-gray-900 font-bold dark:text-gray-400">
                                
                                {{ $percentage_4 }}%
                            </dd>
                        </a>

                        {{-- 3 Stars --}}
                        <a href="{{ url('reviews/' . $gig->uid . '?rating=3') }}" class="flex items-center text-sm">

                            @php
                                $percentage_3 = $gig->reviews()->active()->where('rating', 3)->count() * 100 / $gig->counter_reviews;
                            @endphp

                            <dt class="flex-1 flex items-center">
                                <p class="w-3 font-bold text-xs text-gray-800 dark:text-amber-400">3</p>
                                <div aria-hidden="true" class="ltr:ml-1 rtl:mr-1 flex-1 flex items-center">
                                    <svg class="flex-shrink-0 h-4 w-4 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                    <div class="ltr:ml-3 rtl:mr-3 relative flex-1">
                                        <div class="h-2 bg-gray-100 border border-gray-200 rounded-full"></div>
                                        @if ($percentage_3)
                                            <div style="width: {{ $percentage_3 }}%" class="absolute inset-y-0 bg-amber-400 border border-amber-400 rounded-full"></div>
                                        @endif
                                    </div>
                                </div>
                            </dt>
                            <dd class="ltr:ml-3 rtl:mr-3 w-10 text-right tabular-nums text-xs text-gray-900 font-bold dark:text-gray-400">
                                
                                {{ $percentage_3 }}%
                            </dd>
                        </a>

                        {{-- 2 Stars --}}
                        <a href="{{ url('reviews/' . $gig->uid . '?rating=2') }}" class="flex items-center text-sm">

                            @php
                                $percentage_2 = $gig->reviews()->active()->where('rating', 2)->count() * 100 / $gig->counter_reviews;
                            @endphp

                            <dt class="flex-1 flex items-center">
                                <p class="w-3 font-bold text-xs text-gray-800 dark:text-amber-400">2</p>
                                <div aria-hidden="true" class="ltr:ml-1 rtl:mr-1 flex-1 flex items-center">
                                    <svg class="flex-shrink-0 h-4 w-4 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                    <div class="ltr:ml-3 rtl:mr-3 relative flex-1">
                                        <div class="h-2 bg-gray-100 border border-gray-200 rounded-full"></div>
                                        @if ($percentage_2)
                                            <div style="width: {{ $percentage_2 }}%" class="absolute inset-y-0 bg-amber-400 border border-amber-400 rounded-full"></div>
                                        @endif
                                    </div>
                                </div>
                            </dt>
                            <dd class="ltr:ml-3 rtl:mr-3 w-10 text-right tabular-nums text-xs text-gray-900 font-bold dark:text-gray-400">
                                
                                {{ $percentage_2 }}%
                            </dd>
                        </a>

                        {{-- 1 Stars --}}
                        <a href="{{ url('reviews/' . $gig->uid . '?rating=1') }}" class="flex items-center text-sm">

                            @php
                                $percentage_1 = $gig->reviews()->active()->where('rating', 1)->count() * 100 / $gig->counter_reviews;
                            @endphp

                            <dt class="flex-1 flex items-center">
                                <p class="w-3 font-bold text-xs text-gray-800 dark:text-amber-400">1</p>
                                <div aria-hidden="true" class="ltr:ml-1 rtl:mr-1 flex-1 flex items-center">
                                    <svg class="flex-shrink-0 h-4 w-4 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/> </svg>
                                    <div class="ltr:ml-3 rtl:mr-3 relative flex-1">
                                        <div class="h-2 bg-gray-100 border border-gray-200 rounded-full"></div>
                                        @if ($percentage_1)
                                            <div style="width: {{ $percentage_1 }}%" class="absolute inset-y-0 bg-amber-400 border border-amber-400 rounded-full"></div>
                                        @endif
                                    </div>
                                </div>
                            </dt>
                            <dd class="ltr:ml-3 rtl:mr-3 w-10 text-right tabular-nums text-xs text-gray-900 font-bold dark:text-gray-400">
                                
                                {{ $percentage_1 }}%
                            </dd>
                        </a>
                        
                    </dl>
                </div>
            </div>

            {{-- Recent reviews --}}
            <div class="mt-16 lg:mt-0 lg:col-start-5 lg:col-span-8 bg-white dark:bg-zinc-800 rounded-2xl shadow-sm border border-gray-50 dark:border-zinc-700 h-fit">
                <h3 class="sr-only">Recent reviews</h3>
                <div class="flow-root py-6">
                    <div class="-my-8 divide-y divide-gray-100 dark:divide-zinc-700">

                        @foreach ($reviews as $review)
                            <div class="py-6 px-5">
                                <div class="flex items-center">
                                    <img src="{{ placeholder_img() }}" data-src="{{ src($review->user->avatar) }}" alt="{{ $review->user->username }}" class="lazy h-8 w-8 rounded-full">
                                    <div class="ltr:ml-4 rtl:mr-4 group">
                                        <a href="{{ url('profile', $review->user->username) }}" target="_blank" class="text-sm font-bold text-gray-900 dark:text-gray-200 flex items-center group-hover:text-primary-600">
                                            {{ $review->user->username }}
                                            @if ($review->user->status === 'verified')
                                                <img data-tooltip-target="tooltip-account-verified-{{ $review->id }}" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="{{ url('public/img/auth/verified-badge.svg') }}" alt="{{ __('messages.t_account_verified') }}">
                                                <div id="tooltip-account-verified-{{ $review->id }}" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    {{ __('messages.t_account_verified') }}
                                                </div>
                                            @endif

                                            {{-- Country --}}
                                            @if ($review->user->country)
                                                <div class="ltr:ml-2 rtl:mr-2">
                                                    <img src="{{ placeholder_img() }}" data-src="{{ countryFlag($review->user->country?->code) }}" alt="{{ $review->user->country?->name }}" class="lazy h-3 -mt-px rounded-sm">
                                                </div>
                                            @endif

                                        </a>
                                        <div class="mt-1 flex items-start">
                                            <div class="review-rating-el" data-rating-value="{{ $review->rating }}" wire:ignore></div>

                                            <span class="ltr:ml-2 rtl:mr-2 text-[11px] font-normal text-gray-400"><span class="ltr:pr-2 rtl:pl-2 text-gray-300 dark:text-gray-500">•</span> {{ format_date($review->created_at, 'ago') }}</span>
                                        </div>
                                    </div>
                                </div>
                    
                                {{-- Message --}}
                                @if ($review->message)
                                    <div class="mt-4 space-y-6 text-sm italic text-gray-600 dark:text-gray-300">
                                        <p>{{ $review->message }}</p>
                                    </div>
                                @endif

                            </div>
                        @endforeach
                        
                    </div>
                </div>

                {{-- Pages --}}
                @if ($reviews->hasPages())
                    <div class="flex justify-center pt-12">
                        {!! $reviews->links('pagination::tailwind') !!}
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

@push('scripts')

    {{-- AlpineJs --}}
    <script>
        function rlJJlyfiXvZQNki() {
            return {

                // Init component
                init() {

                    // Init rating
                    this.rating();
                    
                },

                rating() {

                    // Main
                    $('#main-rating').rateYo({
                        rating    : "{{ $gig->rating }}",
                        starWidth : "18px",
                        ratedFill : "#ffbf46",
                        normalFill: "#d2d2d2",
                        halfStar  : true,
                        readOnly  : true,
                        "starSvg": '<svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path> </svg>'
                    });

                    // All
                    const elements = document.getElementsByClassName('review-rating-el');
      
                    for (let index = 0; index < elements.length; index++) {

                        const element = elements[index];

                        $(element).rateYo({
                            rating    : element.getAttribute('data-rating-value'),
                            starWidth : "16px",
                            ratedFill : "#ffbf46",
                            normalFill: "#d2d2d2",
                            halfStar  : true,
                            readOnly  : true,
                            "starSvg": '<svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path> </svg>'
                        });
                    }

                }

            }
        }
        window.rlJJlyfiXvZQNki = rlJJlyfiXvZQNki();
    </script>

@endpush