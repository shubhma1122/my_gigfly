@props(['model', 'label' => null, 'required' => false])

<div>

    {{-- Label --}}
    @if ($label)
        <label for="gig-title-input-component-id-{{ $model }}" class="block text-xs font-bold tracking-wide whitespace-nowrap overflow-hidden truncate {{ $errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-zinc-500 dark:text-white' }}" title="{{ htmlspecialchars_decode($label) }}">

            {{-- Label text --}}
            {{ htmlspecialchars_decode($label) }}

            {{-- Required --}}
            @if ($required)
                <span class="font-bold text-red-400">*</span>
            @endif

        </label>
    @endif

    <div @class(['gig-title-input relative overflow-hidden', 'mt-2.5' => $label ? true : false])>
        
        <span class="title-prefix">
            @lang('messages.t_i_will')
        </span>
    
        {{-- Textarea --}}
        <textarea 
            wire:model="{{ $model }}"
            id="gig-title-input-component-id-{{ $model }}" 
            maxlength="100" 
            placeholder="do something I'm really good at" 
            role="textbox" 
            class="disabled:cursor-not-allowed resize-none focus:ring-0 block w-full ltr:pr-10 ltr:pl-4 rtl:pl-10 rtl:!pr-4 py-2.5 placeholder:font-normal placeholder:text-gray-400 dark:placeholder-zinc-300 text-xs font-medium tracking-wide text-zinc-700 dark:text-white rounded-md dark:bg-transparent {{ $errors->first($model) ? 'focus:!border-red-600 border-red-500' : 'focus:!border-primary-600 border-gray-300 dark:border-zinc-600' }} scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600 gig-title-textarea"
            oninput="validateGigTitle(this)"
            style="text-indent: {{ getTextIndentValue() }}px">
        </textarea>
    
        {{-- Footer --}}
        <div class="title-footer mt-2.5">
            
            {{-- Errors --}}
            <ul class="text-xs tracking-wide list-disc list-inside">

                {{-- Just perfect --}}
                <li class="text-green-500 gig-title-validation-just-perfect hidden pb-1">
                    @lang('messages.t_gig_title_validation_just_perfect')
                </li>

                {{-- Looks good, however --}}
                <li class="text-amber-500 gig-title-validation-looks-good hidden pb-1">
                    @lang('messages.t_gig_title_validation_looks_good_however')
                </li>

                {{-- 15 characters minimum --}}
                <li class="text-red-500 gig-title-validation-min-chars hidden pb-1">
                    @lang('messages.t_gig_title_validation_min_characters', ['min' => 15])
                </li>

                {{-- 4 words minimum --}}
                <li class="text-red-500 gig-title-validation-min-words hidden pb-1">
                    @lang('messages.t_gig_title_validation_min_words', ['min' => 4])
                </li>

                {{-- 15 words maximum --}}
                <li class="text-red-500 gig-title-validation-max-words hidden pb-1">
                    @lang('messages.t_gig_title_validation_max_words', ['min' => 4, 'max' => 15])
                </li>

                {{-- Invalid characters --}}
                <li class="text-red-500 gig-title-validation-invalid-chars hidden pb-1">
                    @lang('messages.t_gig_title_validation_invalid_chars')
                </li>

                {{-- Long title --}}
                <li class="text-red-500 gig-title-validation-long-title hidden pb-1">
                    @lang('messages.t_gig_title_validation_short_title_attract_buyers')
                </li>
                
            </ul>
            
            {{-- Max length --}}
            <div class="chars-count lowercase ltr:text-right rtl:text-left text-xs text-gray-400" id="element-counter-container-{{ $model }}">
                <span id="element-counter-maxlength-start-{{ $model }}">0</span> / <span id="element-counter-maxlength-end-{{ $model }}">100</span>
                @lang('messages.t_max')
            </div>
        
        </div>

        {{-- Words counter js code --}}
        <script>

            // Get input element
            let counterElementInput{{ str_replace(['.', '-'], '_', $model) }}     = document.getElementById("gig-title-input-component-id-{{ str_replace(['.', '-'], '_', $model) }}");

            // Get counter element container
            let counterElementContainer{{ str_replace(['.', '-'], '_', $model) }} = document.getElementById("element-counter-container-{{ str_replace(['.', '-'], '_', $model) }}");

            // Get counter start
            let counterElementStart{{ str_replace(['.', '-'], '_', $model) }}     = document.getElementById("element-counter-maxlength-start-{{ str_replace(['.', '-'], '_', $model) }}");

            // Get counter end
            let counterElementEnd{{ str_replace(['.', '-'], '_', $model) }}       = document.getElementById("element-counter-maxlength-end-{{ str_replace(['.', '-'], '_', $model) }}");

            // Check if element has maxlength attribute
            if ( counterElementInput{{ str_replace(['.', '-'], '_', $model) }} && counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.hasAttribute('maxlength') ) {
                
                // Set max characters allowed
                counterElementEnd{{ str_replace(['.', '-'], '_', $model) }}.textContent = counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.getAttribute('maxlength');

                // Listen when typing
                counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.addEventListener("input", function(e) {

                    // Change current characters counter
                    counterElementStart{{ str_replace(['.', '-'], '_', $model) }}.textContent = counterElementInput{{ str_replace(['.', '-'], '_', $model) }}.value.length;

                });


            }

        </script>

        {{-- Validate title --}}
        <script>
            function validateGigTitle(e) {
                
                // Set the value
                const value  = e.value;

                // Count number of words
                const words  = value.trim().split(/\s+/).length;

                // Get value length
                const length = value.length;

                // Set invalid characters
                const format = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

                // Check if value is valid
                const valid  = format.test(value);

                // Check if title looks good
                const title_long = length > 55 && length < 70 ? true : false;

                // Check if title is very long
                const title_very_long = length > 70 ? true : false;

                // Check min chars 15
                if (length < 15) {
                    $('.gig-title-validation-min-chars').removeClass('hidden');
                } else {
                    $('.gig-title-validation-min-chars').addClass('hidden');
                }
                
                // Check min words 4
                if (words < 4) {
                    $('.gig-title-validation-min-words').removeClass('hidden');
                } else {
                    $('.gig-title-validation-min-words').addClass('hidden');
                }

                // Check if title contains invalid chars
                if (valid) {
                    $('.gig-title-validation-invalid-chars').removeClass('hidden');
                } else {
                    $('.gig-title-validation-invalid-chars').addClass('hidden');
                }

                // Check if title is long
                if (title_long) {
                    $('.gig-title-validation-looks-good').removeClass('hidden');
                } else {
                    $('.gig-title-validation-looks-good').addClass('hidden');
                }

                // Check if title is very long
                if (title_very_long) {
                    $('.gig-title-validation-long-title').removeClass('hidden');
                } else {
                    $('.gig-title-validation-long-title').addClass('hidden');
                }

                // Check if words more than 15
                if (words > 15) {
                    $('.gig-title-validation-max-words').removeClass('hidden');
                } else {
                    $('.gig-title-validation-max-words').addClass('hidden');
                }

                // Check if title is good
                const is_good = !valid && words >= 4 && words <= 15 && length >= 15 && length <= 55 ? true : false;

                // Is it good title
                if (is_good) {
                    $('.gig-title-validation-just-perfect').removeClass('hidden');
                } else {
                    $('.gig-title-validation-just-perfect').addClass('hidden');
                }

            }
        </script>

    </div>

</div>

@push('scripts')
    {{-- Handle "I will" string --}}
    <script>
        var e = document.getElementById('gig-title-input-component-id-{{ $model }}');
        e.addEventListener("scroll", function() {
            var height = e.scrollTop;
            $('.title-prefix').css('transform', 'translateY(-' + height + 'px)');
        });
    </script>
@endpush