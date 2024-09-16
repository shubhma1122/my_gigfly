<?php
    
    // Get primary logo
    $logo             = src(settings('general')->logo);

    // Get dark logo
    $logo_dark        = src(settings('general')->logo_dark);

    // Get transparent logo
    $logo_transparent = src(settings('general')->logo_transparent);

    // Get logo's height
    $logo_height      = isset(settings('appearance')->sizes['header_desktop_logo_height']) ? settings('appearance')->sizes['header_desktop_logo_height'] : 50;

    // Get site title
    $site_title       = settings('general')->title;

?>

<header class="<?php echo \Illuminate\Support\Arr::toCssClasses(['w-full z-10 fixed', 'main-header-scrolling' => !is_hero_section()]); ?>" id="main-header">
    <div x-data="window.TTRjRvxLbHzaKxW">
 
        
        <?php if(settings('general')->header_announce_text && !Cookie::get('header_announce_closed')): ?>
            <div id="header-announce-banner" tabindex="-1" class="bg-gray-50 border-b border-gray-200 dark:bg-zinc-700 dark:border-transparent flex justify-between p-4 w-full z-50" wire:ignore>
                <div class="flex items-center mx-auto">
                    <div class="flex items-center text-sm font-normal text-gray-500 dark:text-zinc-300 gap-x-2">
                        <span class="inline-flex items-center justify-center ltr:mr-2 rtl:ml-2">
                            <i class="ph-duotone ph-megaphone-simple text-2xl text-gray-500 dark:text-zinc-200"></i>
                        </span>
                        <div>

                            
                            <span><?php echo e(settings('general')->header_announce_text, false); ?></span>

                            
                            <?php if(settings('general')->header_announce_link): ?>
                                <a href="<?php echo e(settings('general')->header_announce_link, false); ?>" target="_blank" class="inline font-medium text-primary-600 underline dark:text-primary-500 underline-offset-2 decoration-600 dark:decoration-500 decoration-solid hover:no-underline">
                                    <?php echo app('translator')->get('messages.t_learn_more'); ?>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                
                <div class="flex items-center">
                    <button wire:click="closeAnnounce" data-dismiss-target="#header-announce-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-md text-sm p-1.5 dark:hover:bg-zinc-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                        <span class="sr-only">Close banner</span>
                    </button>
                </div>

            </div>
        <?php endif; ?>
 
        
        <nav class="relative container max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 justify-between items-center h-20 flex">
            
            
            <div class="inline-flex items-center min-w-fit">

                
                <button type="button" class="dark:bg-transparent rounded-md text-gray-500 dark:text-gray-100 dark:hover:text-white ltr:mr-5 rtl:ml-5 md:hidden" x-on:click="mobile_menu = true">
                    <span class="sr-only">Open menu</span>
                    <svg class="text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white h-6 w-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"></path></g></svg>
                </button>

                
                <?php if(current_theme() == 'dark' && settings('general')->logo_dark): ?>
                    <a href="<?php echo e(url('/'), false); ?>" class="block sm:ltr:mr-6 sm:rtl:ml-6">
                        <img width="150" height="<?php echo e($logo_height, false); ?>" src="<?php echo e($logo_dark, false); ?>" alt="<?php echo e($site_title, false); ?>" style="height:<?php echo e($logo_height, false); ?>px;width:auto" data-primary-logo="<?php echo e($logo_dark, false); ?>" data-transparent-logo="<?php echo e($logo_transparent, false); ?>" id="primary-logo-img">
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(url('/'), false); ?>" class="block sm:ltr:mr-6 sm:rtl:ml-6">
                        <img width="150" height="<?php echo e($logo_height, false); ?>" src="<?php echo e(src(settings('general')->logo), false); ?>" alt="<?php echo e($site_title, false); ?>" style="height:<?php echo e($logo_height, false); ?>px;width:auto" data-primary-logo="<?php echo e($logo, false); ?>" data-transparent-logo="<?php echo e($logo_transparent, false); ?>" id="primary-logo-img">
                    </a>
                <?php endif; ?>

                
                <div class="main-search-box hidden <?php echo e(request()->is('/') && auth()->guest() ? 'hidden' : 'lg:block', false); ?>" x-data="{ open: false }">
    
                    
                    <div class="border dark:border-zinc-700 rounded-full flex items-center w-full py-0.5 px-6 mx-4" id="search-input-container">
        
                        
                        <div id="categories-menu-primary" class="group" x-data="{ selected_category: $el.dataset.category }" data-category="">
        
                            
                            <button type="button" class="relative flex items-center space-x-1 rtl:space-x-reverse bg-transparent text-xs+ font-semibold text-gray-500 focus:outline-none focus:ring-0 ltr:border-r ltr:pr-4 rtl:border-l rtl:pl-4 border-gray-200 dark:border-zinc-700 h-full dark:text-zinc-300">
                                <span><?php echo app('translator')->get('messages.t_categories'); ?></span>
                                <i class="ph-fill ph-caret-down text-gray-400 dark:text-zinc-300 opacity-50 transform transition duration-200 ease-out group-hover:rotate-180 inline-block"></i>
                            </button>
        
                            
                            <div class="absolute top-8 right-0 left-0 z-50 pt-14 invisible group-hover:visible max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="bg-white dark:bg-zinc-800 shadow-xl ring-1 ring-black ring-opacity-5 rounded-lg transform origin-top transition duration-300 ease-out opacity-0 scale-75 group-hover:opacity-100 group-hover:scale-100 h-[calc(100vh-100px)] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-50">
                                  <div class="grid grid-cols-5 transform transition duration-500 ease-out h-full opacity-0 group-hover:opacity-100">

                                    
                                    <div class="p-8 space-y-6 bg-gray-50 h-full dark:bg-zinc-900">

                                        
                                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">
                                            <?php echo app('translator')->get('messages.t_browse_categories'); ?>
                                        </h4>

                                        
                                        <nav class="flex flex-col space-y-3">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                
                                                <?php if($loop->first): ?>
                                                    <script>
                                                        let primary_category_menu = document.getElementById("categories-menu-primary"); 
                                                        primary_category_menu.setAttribute("data-category", "<?php echo e($category->id, false); ?>"); 
                                                    </script>
                                                <?php endif; ?>

                                                
                                                <a href="<?php echo e(url('categories', $category->slug), false); ?>" class="text-gray-500 dark:text-zinc-300 hover:text-primary-600 dark:hover:text-primary-600 font-semibold text-xs+ ltr:text-left rtl:text-right" wire:key="header-categories-button-<?php echo e($category->uid, false); ?>" x-on:mouseover="selected_category = '<?php echo e($category->id, false); ?>'">
                                                    <?php echo e($category->name, false); ?>

                                                </a>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </nav>

                                    </div>

                                    
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-span-4 p-8 space-y-6 bg-white dark:bg-zinc-800" wire:key="header-categories-container-<?php echo e($category->uid, false); ?>" x-show="selected_category === '<?php echo e($category->id, false); ?>'" x-cloak>

                                            
                                            <div class="grid grid-cols-4 gap-4 xl:gap-8">

                                                <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="block space-y-3">

                                                        
                                                        <a href="<?php echo e(url('categories/' . $category->slug . '/' . $subcategory->slug), false); ?>" class="text-sm font-bold text-gray-900 dark:text-zinc-100 hover:underline">
                                                            <?php echo e($subcategory->name, false); ?>

                                                        </a>

                                                        
                                                        <ul class="space-y-1">
                                                            <?php $__currentLoopData = $subcategory->childcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <a href="<?php echo e(url('categories/' . $category->slug . '/' . $subcategory->slug . '/' . $childcategory->slug), false); ?>" class="text-gray-500 dark:text-zinc-300 dark:hover:text-primary-600 hover:text-primary-600 font-semibold text-xs+ ltr:text-left rtl:text-right flex items-center space-x-2 rtl:space-x-reverse">
                                                                        <?php if($childcategory->icon): ?>
                                                                            <img src="<?php echo e(src($childcategory->icon), false); ?>" alt="<?php echo e($childcategory->name, false); ?>" class="w-5 h-5">
                                                                        <?php endif; ?>
                                                                        <span><?php echo e($childcategory->name, false); ?></span>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                        
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                  </div>
                                </div>
                            </div>
                            
                        </div>
        
                        
                        <input wire:model.live.debounce.500ms="q" wire:keydown.enter="enter" x-ref="search" x-on:click="open = true" placeholder="<?php echo e(__('messages.t_what_service_are_u_looking_for_today'), false); ?>" class="w-full text-xs+ outline-none focus:outline-none bg-transparent border-none focus:ring-0 ltr:pl-4 rtl:pr-4 placeholder:text-gray-400 dark:placeholder:text-zinc-500 placeholder-shown:truncate dark:text-zinc-200">
        
                        
                        <button class="w-5 h-5 flex items-center justify-center ltr:pl-8 rtl:pr-8 ltr:pr-3 rtl:pl-3 ltr:border-l rtl:border-r border-gray-200 dark:border-zinc-700">
                            <i class="ph-duotone ph-magnifying-glass text-gray-400 dark:text-zinc-300 text-xl"></i>
                        </button>
                        
                    </div>
    
                    
                    <?php if(count($gigs) || count($sellers) || count($tags) || $q): ?>
                        <div id="search-results-box" class="ltr:ml-5 rtl:mr-5 absolute top-16 w-full bg-white dark:bg-zinc-800 rounded-lg border border-gray-100 dark:border-zinc-800 shadow-md max-w-md z-[60]" @keydown.window.escape="opne = false" x-show="open" style="display: none" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-on:click.away="open = false">
                            
                            <?php if(count($gigs) || count($sellers) || count($tags)): ?>
                                <ul class="max-h-80 scroll-py-10 scroll-pb-2 space-y-4 overflow-y-auto p-4 pb-2" id="options" role="listbox">

                                    
                                    <?php if($gigs && count($gigs)): ?>
                                        <li>
                                            <h2 class="text-xs font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.t_gigs'), false); ?></h2>
                                            <ul class="-mx-4 mt-2 text-sm text-gray-700 dark:text-gray-400">

                                                
                                                <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="group flex cursor-default select-none items-center px-4 py-2">
                                                        <a href="<?php echo e(url('service', $gig->slug), false); ?>" class="flex items-center">
                                                            <svg class="h-6 w-6 flex-none text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/> </svg>
                                                            <span class="ltr:ml-3 rtl:mr-3 flex-auto ext-ellipsis overflow-hidden"><?php echo e($gig->title, false); ?></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                
                                    
                                    <?php if($sellers && count($sellers)): ?>
                                        <li>
                                            <h2 class="text-xs font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.t_sellers'), false); ?></h2>

                                            
                                            <ul class="-mx-4 mt-2 text-sm text-gray-700 dark:text-gray-400">
                                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="group flex cursor-default select-none items-center px-4 py-2">
                                                        <a href="<?php echo e(url('profile', $seller->username), false); ?>" class="flex items-center">
                                                            <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($seller->avatar), false); ?>" alt="<?php echo e($seller->username, false); ?>" class="lazy h-6 w-6 flex-none rounded-full object-cover">
                                                            <span class="ltr:ml-3 rtl:mr-3 flex-auto truncate"><?php echo e($seller->username, false); ?></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>

                                    
                                    <?php if($tags && count($tags)): ?>
                                        <li>
                                            <h2 class="text-xs font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.t_tags'), false); ?></h2>
                                            <ul class="-mx-4 mt-2 text-sm text-gray-700 dark:text-gray-400">

                                                
                                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($tag): ?>
                                                        <li class="group flex cursor-default select-none items-center px-4 py-2">
                                                            <a href="<?php echo e(url('search?q=' . $tag->name), false); ?>" class="flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/></svg>
                                                                <span class="ml-3 flex-auto truncate"><?php echo e($tag->name, false); ?></span>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            <?php endif; ?>
                    
                            
                            <?php if(count($gigs) === 0 && count($sellers) === 0 && count($tags) === 0 && $q): ?>
                                <div class="py-14 px-6 text-center text-sm sm:px-14">
                                    <svg class="mx-auto h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/> </svg>
                                    <p class="mt-4 font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.no_results_found'), false); ?></p>
                                    <p class="mt-2 text-gray-500"><?php echo e(__('messages.t_we_couldnt_find_anthing_search_term'), false); ?></p>
                                </div>
                            <?php endif; ?>
                    
                            
                            <div class="rounded-b-lg flex flex-wrap items-center bg-gray-50 dark:bg-zinc-700 py-2.5 px-4 text-xs text-gray-700 dark:text-gray-400">
                                <?php echo __('messages.t_press_enter_to_search_deeply'); ?>

                            </div>
                        </div>
                    <?php endif; ?>
    
                </div>

            </div>

            
            <div class="min-w-fit ltr:sm:ml-10 rtl:sm:mr-10 flex items-center font-medium text-sm transition-all duration-200">

                
                <?php if(auth()->guard()->check()): ?>
                    
                    
                    <?php if(auth()->user()->account_type === 'seller'): ?>
                        
                        
                        <a href="<?php echo e(url('seller/home'), false); ?>" class="text-primary-600 hover:text-primary-700 transition-colors duration-300 py-2 px-4 hidden lg:block dark:text-gray-100 dark:hover:text-white">
                            <?php echo app('translator')->get('messages.t_switch_to_selling'); ?>
                        </a>

                    <?php endif; ?>

                <?php endif; ?>

                
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('main.partials.search');

$__html = app('livewire')->mount($__name, $__params, 'i3G7XUU', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('main.partials.cart');

$__html = app('livewire')->mount($__name, $__params, 'PHtosWk', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                
                <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->account_type === 'seller'): ?>
                        <a href="<?php echo e(url('seller/orders'), false); ?>" class="text-gray-500 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white transition-colors duration-300 py-2 mx-4 relative hidden md:block">
                            <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                            <?php if(auth()->user()->sales->where('status', 'pending')->count()): ?>
                                <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                                </span>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>

                
                <?php if(auth()->guard()->check()): ?>
                    <button x-on:click="notifications_menu = true" type="button" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white hidden md:block">
                        <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                        <?php if($notifications && count($notifications)): ?>
                            <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                            </span>
                        <?php endif; ?>
                    </button>
                <?php endif; ?>

                
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('inbox'), false); ?>" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white hidden md:block">
                        <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                        <?php if($new_messages): ?>
                            <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                            </span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>

                
                <div class="items-center space-x-7 rtl:space-x-reverse ltr:ml-5 rtl:mr-5 hidden lg:flex">
    
                    
                    <div class="relative group">

                        
                        <button type="button" class="leading-5 font-semibold pt-2 pb-[9px] text-xs+ flex items-center space-x-1 rtl:space-x-reverse main-header-link-item dark:text-zinc-300 dark:hover:text-zinc-100">
                            <span><?php echo app('translator')->get('messages.t_explore'); ?></span>
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 transform transition duration-200 ease-out group-hover:rotate-180 inline-block w-4 h-4 dark:text-zinc-300 dark:hover:text-zinc-100"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
            
                        
                        <div class="absolute w-72 top-8 ltr:left-1/2 rtl:right-1/2 ltr:-ml-48 rtl:-mr-48 z-1 pt-8 invisible group-hover:visible">
                            <div class="bg-white dark:bg-zinc-800 shadow-xl ring-1 ring-black ring-opacity-5 rounded-lg transform origin-top transition duration-300 ease-out opacity-0 scale-75 group-hover:opacity-100 group-hover:scale-100 overflow-hidden">
                                <div class="p-3 space-y-6 transform transition duration-500 ease-out opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100">
                                    <nav class="flex flex-col space-y-1">

                                        
                                        <a href="<?php echo e(url('search'), false); ?>" class="p-3 rounded-xl flex items-start space-x-3 rtl:space-x-reverse text-gray-600 dark:text-zinc-200 font-medium text-xs+ hover:bg-slate-50 dark:hover:bg-zinc-700">
                                            <div class="flex-none flex items-center justify-center">
                                                <i class="ph-duotone ph-images-square text-2xl text-gray-400 dark:text-gray-300"></i>
                                            </div>
                                            <div class="space-y-0.5">
                                                <h5 class="font-bold"><?php echo app('translator')->get('messages.t_explore_gigs'); ?></h5>
                                                <p class="opacity-75 text-xs">
                                                    <?php echo app('translator')->get('messages.t_find_the_right_service_for_every_price_point'); ?>
                                                </p>
                                            </div>
                                        </a>

                                        
                                        <?php if(settings('projects')->is_enabled): ?>
                                            <a href="<?php echo e(url('explore/projects'), false); ?>" class="p-3 rounded-xl flex items-start space-x-3 rtl:space-x-reverse text-gray-600 dark:text-zinc-200 font-medium text-xs+ hover:bg-slate-50 dark:hover:bg-zinc-700">
                                                <div class="flex-none flex items-center justify-center">
                                                    <i class="ph-duotone ph-briefcase text-2xl text-gray-400 dark:text-gray-300"></i>
                                                </div>
                                                <div class="space-y-0.5">
                                                    <h5 class="font-bold"><?php echo app('translator')->get('messages.t_explore_projects'); ?></h5>
                                                    <p class="opacity-75 text-xs">
                                                        <?php echo app('translator')->get('messages.t_hire_the_best_freelancers_for_any_job_online'); ?>
                                                    </p>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        
                                        <?php if(settings('blog')->enable_blog): ?>
                                            <a href="<?php echo e(url('blog'), false); ?>" class="p-3 rounded-xl flex items-start space-x-3 rtl:space-x-reverse text-gray-600 dark:text-zinc-200 font-medium text-xs+ hover:bg-slate-50 dark:hover:bg-zinc-700">
                                                <div class="flex-none flex items-center justify-center">
                                                    <i class="ph-duotone ph-newspaper text-2xl text-gray-400 dark:text-gray-300"></i>
                                                </div>
                                                <div class="space-y-0.5">
                                                    <h5 class="font-bold"><?php echo app('translator')->get('messages.t_blog'); ?></h5>
                                                    <p class="opacity-75 text-xs">
                                                        <?php echo app('translator')->get('messages.t_news_information_and_community_stories'); ?>
                                                    </p>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        
                                        <a href="<?php echo e(url('help/contact'), false); ?>" class="p-3 rounded-xl flex items-start space-x-3 rtl:space-x-reverse text-gray-600 dark:text-zinc-200 font-medium text-xs+ hover:bg-slate-50 dark:hover:bg-zinc-700">
                                            <div class="flex-none flex items-center justify-center">
                                                <i class="ph-duotone ph-chats text-2xl text-gray-400 dark:text-gray-300"></i>
                                            </div>
                                            <div class="space-y-0.5">
                                                <h5 class="font-bold"><?php echo app('translator')->get('messages.t_help_and_support'); ?></h5>
                                                <p class="opacity-75 text-xs">
                                                    <?php echo app('translator')->get('messages.t_how__can_we_help_u'); ?>
                                                </p>
                                            </div>
                                        </a>
                                        
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
                    <?php if(auth()->guard()->check()): ?>
                        <div class="relative group">

                            
                            <button class="main-header-link-item leading-5 flex items-center text-xs+ font-semibold space-x-2 rtl:space-x-reverse" type="button">
                                <span class="sr-only">Open user menu</span>
    
                                
                                <?php if(auth()->user()->avatar): ?>
                                    <img class="object-cover w-8 h-8 rounded-full" src="<?php echo e(src(auth()->user()->avatar), false); ?>" alt="<?php echo e(auth()->user()->username, false); ?>">
                                <?php else: ?>
                                    <div class="relative inline-flex items-center justify-center w-8 h-8 overflow-hidden bg-slate-100 rounded-full dark:bg-zinc-600">
                                        <span class="font-semibold text-slate-400 dark:text-gray-300 uppercase text-xs+ tracking-wider">
                                            <?php echo e(Str::take( auth()->user()->username, 2 ), false); ?>

                                        </span>
                                    </div>
                                <?php endif; ?>
                                
                                
                                <span class="dark:text-zinc-300 dark:hover:text-zinc-100"><?php echo e(auth()->user()->username, false); ?></span>
    
                                
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 transform transition duration-200 ease-out group-hover:rotate-180 inline-block w-4 h-4 dark:text-zinc-300 dark:hover:text-zinc-100"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    
                            </button>
    
                            
                            <div class="absolute w-72 top-8 ltr:left-1/2 rtl:right-1/2 ltr:-ml-48 rtl:-mr-48 z-1 pt-8 invisible group-hover:visible">
                                <div class="bg-white dark:bg-zinc-800 shadow-xl ring-1 ring-black ring-opacity-5 rounded-lg transform origin-top transition duration-300 ease-out opacity-0 scale-75 group-hover:opacity-100 group-hover:scale-100 max-h-96 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">
                                    <div class="transform transition duration-500 ease-out opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100">
                                        <div class="divide-y divide-slate-100 dark:divide-zinc-700">
                                            
                                            <p class="py-3 px-3.5 truncate">
                                                <span
                                                    class="block mb-0.5 text-xs text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_logged_in_as_username', ['username' => auth()->user()->username]), false); ?></span>
                                                <span class="font-semibold dark:text-white"><?php echo e(money(auth()->user()->balance_available, settings('currency')->code, true), false); ?></span>
                                            </p>
            
                                            
                                            <div class="py-1.5 px-3.5">
            
                                                
                                                <?php if(auth()->user()->account_type === 'buyer'): ?>
                                                    
                                                    <a href="<?php echo e(url('start_selling'), false); ?>"
                                                        class="group flex items-center py-1.5 hover:text-primary-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                                        </svg>
                                                        <span
                                                            class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_become_a_seller'), false); ?></span>
                                                    </a>
                                                <?php endif; ?>
            
                                                
                                                <?php if(auth()->user()->account_type === 'seller'): ?>
                                                    
                                                    <a href="<?php echo e(url('seller/home'), false); ?>"
                                                        class="group flex items-center py-1.5 hover:text-primary-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                                        </svg>
                                                        <span
                                                            class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_seller_dashboard'), false); ?></span>
                                                    </a>
                                                <?php endif; ?>
            
                                            </div>
            
                                            <?php if(settings('projects')->is_enabled): ?>
                                                
                                                
                                                <div class="py-1.5 px-3.5">
            
                                                    
                                                    <a href="<?php echo e(url('account/projects'), false); ?>" class="group flex items-center py-1.5 hover:text-primary-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                                        <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500">
                                                            <?php echo e(__('messages.t_my_projects'), false); ?>

                                                        </span>
                                                    </a>
            
                                                    
                                                    <?php if(settings('projects')->who_can_post === 'both' || settings('projects')->who_can_post === auth()->user()->account_type): ?>
                                                        <a href="<?php echo e(url('post/project'), false); ?>" class="group flex items-center py-1.5 hover:text-primary-600">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                                            <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500">
                                                                <?php echo e(__('messages.t_post_project'), false); ?>

                                                            </span>
                                                        </a>
                                                    <?php endif; ?>
            
                                                </div>
            
                                            <?php endif; ?>
            
                                            
                                            <?php if(settings('publish')->enable_custom_offers): ?>
                                                <div class="py-1.5 px-3.5">
                                                    <a href="<?php echo e(url('account/offers'), false); ?>" class="group flex items-center py-1.5 hover:text-primary-600">
                                                        <svg class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                                                        <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500">
                                                            <?php echo e(__('messages.t_submitted_offers'), false); ?>

                                                        </span>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
            
                                            
                                            <div class="py-1.5 px-3.5">
            
                                                
                                                <a href="<?php echo e(url('profile', auth()->user()->username), false); ?>"
                                                    class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    <span
                                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_view_profile'), false); ?></span>
                                                </a>
            
                                                
                                                <a href="<?php echo e(url('account/profile'), false); ?>"
                                                    class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <span
                                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_edit_profile'), false); ?></span>
                                                </a>
            
                                                
                                                <a href="<?php echo e(url('account/settings'), false); ?>"
                                                    class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    <span
                                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_account_settings'), false); ?></span>
                                                </a>
            
                                                
                                                <a href="<?php echo e(url('account/password'), false); ?>"
                                                    class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_update_password'), false); ?></span>
                                                </a>
            
                                            </div>
            
                                            
                                            <div class="py-1.5 px-3.5">
            
                                                
                                                <a href="<?php echo e(url('account/deposit'), false); ?>" class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_deposit'), false); ?></span>
                                                </a>
            
                                                
                                                <a href="<?php echo e(url('account/orders'), false); ?>"
                                                    class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                    </svg>
                                                    <span
                                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_my_orders'), false); ?></span>
                                                </a>
            
                                                
                                                <a href="<?php echo e(url('inbox'), false); ?>"
                                                    class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                    </svg>
                                                    <span
                                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_messages'), false); ?></span>
                                                </a>
            
                                                
                                                <a href="<?php echo e(url('account/reviews'), false); ?>" class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_reviews'), false); ?></span>
                                                </a>
            
                                                
                                                <a href="<?php echo e(url('account/refunds'), false); ?>" class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"/></svg>
                                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_refunds'), false); ?></span>
                                                </a>
            
                                            </div>
            
                                            
                                            <div class="py-1.5 px-3.5">
            
                                                
                                                <?php if(auth()->user()->status !== 'verified'): ?>
                                                    <a href="<?php echo e(url('account/verification'), false); ?>"
                                                        class="group flex items-center py-1.5 hover:text-primary-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                        </svg>
                                                        <span
                                                            class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_verification_center'), false); ?></span>
                                                    </a>
                                                <?php endif; ?>
            
                                                
                                                <a href="<?php echo e(url('auth/logout'), false); ?>"
                                                    class="group flex items-center py-1.5 hover:text-primary-600">
                                                    <svg aria-hidden="true" width="20" height="20" fill="none"
                                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 hover:text-primary-600 h-5 w-5">
                                                        <path
                                                            d="M10.25 3.75H9A6.25 6.25 0 002.75 10v0A6.25 6.25 0 009 16.25h1.25M10.75 10h6.5M14.75 12.25l2.5-2.25-2.5-2.25"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span
                                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-500"><?php echo e(__('messages.t_logout'), false); ?></span>
                                                </a>
            
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endif; ?>
    
                    
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(url('start_selling'), false); ?>" class="leading-5 font-semibold pt-2 pb-[9px] text-xs+ main-header-link-item dark:text-zinc-300 dark:hover:text-zinc-100">
                            <?php echo app('translator')->get('messages.t_apply_as_freelancer'); ?>
                        </a>
                    <?php endif; ?>

                    
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(url('auth/login'), false); ?>" class="leading-5 font-semibold pt-2 pb-[9px] text-xs+ main-header-link-item dark:text-zinc-300 dark:hover:text-zinc-100">
                            <?php echo app('translator')->get('messages.t_login'); ?>
                        </a>
                    <?php endif; ?>

                    
                    <?php if(auth()->guest() || ( auth()->check() && auth()->user()->account_type === 'buyer' )): ?>
                        <span class="inline mx-5 w-px h-5 main-header-divider dark:bg-zinc-800"></span>
                    <?php endif; ?>
    
                    
                    <?php if(auth()->guest() || ( auth()->check() && auth()->user()->account_type === 'buyer' )): ?>
                        <div class="space-x-3 rtl:space-x-reverse">
            
                            
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(url('auth/register'), false); ?>" class="bg-[#f8f7f4] hover:bg-zinc-100 leading-5 font-semibold px-4 pt-2 pb-[9px] rounded-3xl text-xs+ text-zinc-500">
                                    <?php echo app('translator')->get('messages.t_signup'); ?>
                                </a>
                            <?php endif; ?>

                            
                            <?php if(auth()->guest() || ( auth()->check() && auth()->user()->account_type === 'buyer' )): ?>
                                <a href="<?php echo e(url('sellers'), false); ?>" class="bg-[#0d0c22] dark:bg-zinc-800 dark:hover:bg-zinc-700 hover:bg-[#565564] leading-5 font-semibold px-4 pt-2 pb-[9px] rounded-3xl text-xs+ text-white ltr:ml-2 rtl:mr-2">
                                    <?php echo app('translator')->get('messages.t_find_freelancers'); ?>
                                </a>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>
    

                </div>

            </div>

        </nav>

        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 hidden">

            
            <ul class="relative flex items-center justify-between overflow-y-auto transition-colors duration-300 space-x-5 rtl:space-x-reverse scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-zinc-600 scrollbar-track-gray-50 dark:scrollbar-track-zinc-400">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="inline-block flex-shrink-0 border-b-2 border-transparent hover:border-primary-600 focus:outline-none focus:ring-0 relative">

                        
                        <?php if(count($category->subcategories)): ?>
                        <button data-popover-target="popover-subcategories-<?php echo e($category->uid, false); ?>" data-popover-placement="bottom" class="block text-[13px] font-medium text-gray-700 dark:text-gray-300 dark:group-hover:text-white group-hover:text-primary-600 py-2 focus:outline-none focus:ring-0">
                            <?php echo e($category->name, false); ?>

                        </button>
                        <?php else: ?>
                            <a href="<?php echo e(url('categories', $category->slug), false); ?>" class="block text-[13px] font-medium text-gray-700 dark:text-gray-300 dark:group-hover:text-white group-hover:text-primary-600 py-2 focus:outline-none focus:ring-0">
                                <?php echo e($category->name, false); ?>

                            </a>
                        <?php endif; ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($category->subcategories)): ?>
                    <div data-popover role="tooltip" id="popover-subcategories-<?php echo e($category->uid, false); ?>" class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white rounded-md shadow-xl opacity-0 dark:text-zinc-400 dark:bg-zinc-800">
                        <ul class="max-h-96 !overflow-y-auto scrollbar-thin scrollbar-thumb-primary-600 scrollbar-track-white dark:scrollbar-track-zinc-800">

                            <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="first:rounded-t-md">
                                    <a href="<?php echo e(url('categories/' . $category->slug . '/' . $sub->slug), false); ?>" class="flex items-center py-2 px-3 hover:bg-gray-50 dark:hover:bg-zinc-700" style="border-radius: inherit">
                                        <?php if($sub->icon): ?>
                                            <div class="flex-shrink-0 ltr:mr-2 rtl:ml-2">
                                                <img class="w-7 h-7 lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($sub->icon), false); ?>" alt="<?php echo e($sub->name, false); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-[13px] font-semibold text-gray-700 truncate dark:text-zinc-200 group-hover:text-primary-600">
                                                <?php echo e($sub->name, false); ?>

                                            </p>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </ul>
                        <div class="bg-gray-50 dark:bg-zinc-700 rounded-b-md text-center">
                            <a href="<?php echo e(url('categories', $category->slug), false); ?>" class="block px-1 py-4 text-gray-500 dark:text-zinc-300 hover:text-primary-600 hover:underline text-xs tracking-wide font-semibold">
                                <?php echo e(__('messages.t_browse_parent_category', ['category' => $category->name]), false); ?>

                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        
        <div x-show="mobile_menu" style="display: none" class="fixed inset-0 flex z-40 lg:hidden" x-ref="mobile_menu">

            
            <div x-show="mobile_menu" style="display: none" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="mobile_menu = false"
                aria-hidden="true">
            </div>

            
            <div 
                x-show="mobile_menu" 
                style="display: none"
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="ltr:-translate-x-full rtl:translate-x-full"
                x-transition:enter-end="ltr:translate-x-0 rtl:translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="ltr:translate-x-0 rtl:translate-x-0"
                x-transition:leave-end="ltr:-translate-x-full rtl:translate-x-full"
                class="relative max-w-[275px] w-full bg-white dark:bg-zinc-700 shadow-xl flex flex-col overflow-y-auto">

                
                <?php if(auth()->guard()->guest()): ?>
                    <div class="w-full mb-6 px-5 pt-5">
                        <a href="<?php echo e(url('auth/register'), false); ?>" class="w-full inline-flex justify-center items-center rounded border text-xs uppercase tracking-widest font-semibold focus:outline-none px-3 py-2 leading-6 border-primary-700 bg-primary-700 text-white hover:text-white hover:bg-primary-800 hover:border-primary-800 focus:ring focus:ring-primary-500 focus:ring-opacity-50 active:bg-primary-700 active:border-primary-700">
                            <span><?php echo app('translator')->get('messages.t_join'); ?></span>
                        </a>
                    </div>
                <?php endif; ?>

                
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['w-full overflow-auto h-full', 'pt-5' => auth()->check()]); ?>">

                    <div class="flex items-center justify-center">

                        
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(auth()->user()->account_type === 'seller'): ?>
                                <a href="<?php echo e(url('seller/orders'), false); ?>" class="text-gray-500 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white transition-colors duration-300 py-2 mx-4 relative md:hidden">
                                    <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                                    <?php if(auth()->user()->sales->where('status', 'pending')->count()): ?>
                                        <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                                        </span>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
        
                        
                        <?php if(auth()->guard()->check()): ?>
                            <button x-on:click="notifications_menu = true" type="button" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white md:hidden">
                                <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                                <?php if($notifications && count($notifications)): ?>
                                    <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                                    </span>
                                <?php endif; ?>
                            </button>
                        <?php endif; ?>
        
                        
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('inbox'), false); ?>" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white md:hidden">
                                <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                                <?php if($new_messages): ?>
                                    <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                                    </span>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>

                    </div>

                    
                    <?php if(auth()->guard()->check()): ?>
                        <?php if (isset($component)) { $__componentOriginal897c321ee9b9bb967400e80c55835c23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal897c321ee9b9bb967400e80c55835c23 = $attributes; } ?>
<?php $component = App\View\Components\Main\Account\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main.account.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main\Account\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-b border-gray-100 dark:border-zinc-600 mb-[14px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal897c321ee9b9bb967400e80c55835c23)): ?>
<?php $attributes = $__attributesOriginal897c321ee9b9bb967400e80c55835c23; ?>
<?php unset($__attributesOriginal897c321ee9b9bb967400e80c55835c23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897c321ee9b9bb967400e80c55835c23)): ?>
<?php $component = $__componentOriginal897c321ee9b9bb967400e80c55835c23; ?>
<?php unset($__componentOriginal897c321ee9b9bb967400e80c55835c23); ?>
<?php endif; ?>
                    <?php endif; ?>

                    
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(url('auth/login'), false); ?>" class="py-2 px-5 block text-gray-500 dark:text-gray-200 font-semibold text-sm">
                            <?php echo app('translator')->get('messages.t_sign_in'); ?>
                        </a>
                    <?php endif; ?>

                    
                    <?php if(auth()->guest() || ( auth()->check() && auth()->user()->account_type !== 'seller' )): ?>
                        <a href="<?php echo e(url('start_selling'), false); ?>" class="py-2 px-5 block text-gray-500 dark:text-gray-200 font-semibold text-sm">
                            <?php echo app('translator')->get('messages.t_become_a_seller'); ?>
                        </a>
                    <?php endif; ?>

                    
                    <a href="<?php echo e(url('search'), false); ?>" class="py-2 px-5 block text-gray-500 dark:text-gray-200 font-semibold text-sm">
                        <?php echo app('translator')->get('messages.t_explore_gigs'); ?>
                    </a>

                    
                    <?php if(settings('projects')->is_enabled): ?>
                        <a href="<?php echo e(url('explore/projects'), false); ?>" class="py-2 px-5 block text-gray-500 dark:text-gray-200 font-semibold text-sm">
                            <?php echo app('translator')->get('messages.t_explore_projects'); ?>
                        </a>
                    <?php endif; ?>

                    
                    <div x-data="{ open: false }" class="space-y-1">

                        
                        <a href="javascript:void(0)" class="py-2 px-5 text-gray-500 dark:text-gray-200 font-semibold text-sm flex items-center space-x-3 rtl:space-x-reverse relative z-1" x-on:click="open = !open">
                            <span class="grow">
                                <?php echo app('translator')->get('messages.t_browse_categories'); ?>
                            </span>
                            <span x-bind:class="{ 'rotate-90': !open, 'rotate-0': open }" class="transform transition ease-out duration-150 opacity-75 rotate-0">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-chevron-down inline-block w-4 h-4"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </span>
                        </a>

                        
                        <div 
                            x-show="open" 
                            style="display: none"
                            x-transition:enter="transition ease-out duration-100" 
                            x-transition:enter-start="transform -translate-y-6 opacity-0" 
                            x-transition:enter-end="transform translate-y-0 opacity-100" 
                            x-transition:leave="transition ease-in duration-100 bg-transparent" 
                            x-transition:leave-start="transform translate-y-0 opacity-100" 
                            x-transition:leave-end="transform -translate-y-6 opacity-0" 
                            class="relative z-0">

                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <details class="group ltr:ml-4 rtl:mr-4" wire:key="header-categories-<?php echo e($category->uid, false); ?>">
            
                                    
                                    <summary class="flex items-center text-gray-500 dark:text-gray-300 py-2 px-5">
            
                                        
                                        <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($category->icon), false); ?>" alt="<?php echo e($category->name, false); ?>" class="lazy h-6 w-6 rounded-full object-contain">
                            
                                        
                                        <span class="ltr:ml-3 rtl:mr-3 text-[13px] font-medium"> <?php echo e($category->name, false); ?> </span>
                            
                                        
                                        <span class="ltr:ml-auto rtl:mr-auto transition duration-300 shrink-0 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path> </svg>
                                        </span>
            
                                    </summary>
                        
                                    
                                    <nav class="mt-1.5 ltr:ml-8 rtl:mr-8 flex flex-col">
            
                                        
                                        <a href="<?php echo e(url('categories/' . $category->slug), false); ?>" class="flex items-center px-4 py-2 text-gray-800 dark:text-gray-100 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-700 hover:text-gray-700 dark:hover:text-gray-200">
                                            <span class="ltr:ml-3 rtl:mr-3 text-xs font-medium"> <?php echo e(__('messages.t_browse_parent_category', ['category' => $category->name]), false); ?> </span>
                                        </a>
            
                                        
                                        <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(url('categories/' . $category->slug . '/' . $sub->slug), false); ?>" class="flex items-center px-4 py-2 text-gray-500 dark:text-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                                                <span class="ltr:ml-3 rtl:mr-3 text-xs font-medium"> <?php echo e($sub->name, false); ?> </span>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                                    </nav>
            
                                </details>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>

                    
                    <div class="w-full h-px bg-gray-100 dark:bg-zinc-600 my-3"></div>

                    
                    <a href="<?php echo e(url('/'), false); ?>" class="py-2 px-5 flex items-center text-gray-500 dark:text-gray-200 font-semibold text-sm">
                        <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 22h14a2 2 0 0 0 2-2v-9a1 1 0 0 0-.29-.71l-8-8a1 1 0 0 0-1.41 0l-8 8A1 1 0 0 0 3 11v9a2 2 0 0 0 2 2zm5-2v-5h4v5zm-5-8.59 7-7 7 7V20h-3v-5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v5H5z"></path></svg>
                        <?php echo app('translator')->get('messages.t_home'); ?>
                    </a>

                    
                    <div x-data="{ open: false }" class="space-y-1">

                        
                        <a href="javascript:void(0)" class="py-2 px-5 text-gray-500 dark:text-gray-200 font-semibold text-sm flex items-center space-x-3 rtl:space-x-reverse relative z-1" x-on:click="open = !open">
                            <span class="grow flex items-center">
                                <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm7.931 9h-2.764a14.67 14.67 0 0 0-1.792-6.243A8.013 8.013 0 0 1 19.931 11zM12.53 4.027c1.035 1.364 2.427 3.78 2.627 6.973H9.03c.139-2.596.994-5.028 2.451-6.974.172-.01.344-.026.519-.026.179 0 .354.016.53.027zm-3.842.7C7.704 6.618 7.136 8.762 7.03 11H4.069a8.013 8.013 0 0 1 4.619-6.273zM4.069 13h2.974c.136 2.379.665 4.478 1.556 6.23A8.01 8.01 0 0 1 4.069 13zm7.381 6.973C10.049 18.275 9.222 15.896 9.041 13h6.113c-.208 2.773-1.117 5.196-2.603 6.972-.182.012-.364.028-.551.028-.186 0-.367-.016-.55-.027zm4.011-.772c.955-1.794 1.538-3.901 1.691-6.201h2.778a8.005 8.005 0 0 1-4.469 6.201z"></path></svg>
                                <?php echo e($default_language_name, false); ?>

                            </span>
                            <span x-bind:class="{ 'rotate-90': !open, 'rotate-0': open }" class="transform transition ease-out duration-150 opacity-75 rotate-0">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-chevron-down inline-block w-4 h-4"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </span>
                        </a>

                        
                        <div 
                            x-show="open" 
                            style="display: none"
                            x-transition:enter="transition ease-out duration-100" 
                            x-transition:enter-start="transform -translate-y-6 opacity-0" 
                            x-transition:enter-end="transform translate-y-0 opacity-100" 
                            x-transition:leave="transition ease-in duration-100 bg-transparent" 
                            x-transition:leave-start="transform translate-y-0 opacity-100" 
                            x-transition:leave-end="transform -translate-y-6 opacity-0" 
                            class="relative z-0">

                            <?php $__currentLoopData = supported_languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div <?php if($default_language_code !== $lang->language_code): ?> wire:click="setLocale('<?php echo e($lang->language_code, false); ?>')" <?php endif; ?> class="py-2 px-5 rounded-sm inline-flex items-center cursor-pointer justify-between <?php echo e($default_language_code === $lang->language_code ? 'bg-primary-100/25 text-primary-600' : 'hover:bg-gray-50 dark:hover:bg-zinc-600', false); ?> focus:outline-none w-full">
                                    <div class="inline-flex items-center">
                                        <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(countryFlag($lang->country_code), false); ?>" alt="<?php echo e($lang->name, false); ?>" class="lazy w-5 ltr:mr-3 rtl:ml-3">
                                        <span class="font-normal text-xs dark:text-gray-300"><?php echo e($lang->name, false); ?></span>
                                    </div>
                                    <?php if($default_language_code === $lang->language_code): ?>
                                        <div class="block">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    <?php else: ?>
                                        <div wire:loading wire:target="setLocale('<?php echo e($lang->language_code, false); ?>')">
                                            <svg role="status" class="block w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/> </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        
                    </div>

                    
                    <a href="<?php echo e(url('help/contact'), false); ?>" class="py-2 px-5 flex items-center text-gray-500 dark:text-gray-200 font-semibold text-sm">
                        <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 6a3.939 3.939 0 0 0-3.934 3.934h2C10.066 8.867 10.934 8 12 8s1.934.867 1.934 1.934c0 .598-.481 1.032-1.216 1.626a9.208 9.208 0 0 0-.691.599c-.998.997-1.027 2.056-1.027 2.174V15h2l-.001-.633c.001-.016.033-.386.441-.793.15-.15.339-.3.535-.458.779-.631 1.958-1.584 1.958-3.182A3.937 3.937 0 0 0 12 6zm-1 10h2v2h-2z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                        <?php echo app('translator')->get('messages.t_contact_us'); ?>
                    </a>


                </div>
                
            </div>

        </div>

        
        <?php if(auth()->guard()->check()): ?>
            <div x-show="notifications_menu" style="display: none" class="fixed inset-0 flex z-40" x-ref="notifications_menu">

                
                <div x-show="notifications_menu" style="display: none" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="notifications_menu = false"
                    aria-hidden="true">
                </div>

                
                <div 
                    x-show="notifications_menu" 
                    style="display: none"
                    x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full"
                    x-transition:enter-end="ltr:translate-x-0 rtl:-translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="ltr:-translate-x-0 rtl:translate-x-0"
                    x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full"
                    class="fixed ltr:right-0 rtl:left-0 max-w-sm w-full bg-white dark:bg-zinc-700 shadow-xl flex flex-col h-full">

                    
                    <div 
                        x-show="notifications_menu" 
                        x-transition:enter="ease-in-out duration-300" 
                        x-transition:enter-start="opacity-0" 
                        x-transition:enter-end="opacity-100" 
                        x-transition:leave="ease-in-out duration-300" 
                        x-transition:leave-start="opacity-100" 
                        x-transition:leave-end="opacity-0" 
                        class="top-0 ltr:right-0 rtl:left-0 pt-2 block sm:hidden">
                        <button type="button" class="ltr:ml-1 rtl:mr-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="notifications_menu = false">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>

                    
                    <div class="pt-8 px-6 lg:px-6 w-full sm:flex sm:justify-between sm:items-center">
                        <div class="flex justify-center sm:justify-left">
                            <h3 class="inline-flex items-center font-semibold">
                                <span class="text-base dark:text-gray-100"><?php echo app('translator')->get('messages.t_notifications'); ?></span>
                            </h3>
                        </div>
                    </div>

                    
                    <div class="w-full overflow-auto h-full scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">
                        <div class="space-y-2 py-6">
                            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty($n?->uid)): ?>
                                    <div class="px-6 pb-1 pt-2" wire:key="header-notifications-<?php echo e($n->uid, false); ?>">
                                        <div class="flex items-center bg-slate-100 px-4 py-2 rounded dark:bg-zinc-600">
                                            <div class="flex-shrink-0">
                                                <span class="rounded-md h-10 w-10 flex items-center justify-center dark:text-zinc-400 dark:border-zinc-500 border border-slate-300 text-slate-400">
                                                    <svg class="h-5 w-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                                                </span>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3 w-0 flex-1">
                                                <p class="dark:text-white text-[13px] font-normal text-slate-500 leading-relaxed">
                                                    <?php if($n->params): ?>
                                                        <?php echo __('messages.' . $n->text, $n->params); ?>

                                                    <?php else: ?>
                                                        <?php echo __('messages.' . $n->text); ?>

                                                    <?php endif; ?>
                                                </p>
                                                <div class="mt-2 flex space-x-7 rtl:space-x-reverse">

                                                    
                                                    <a href="<?php echo e($n->action, false); ?>" class="bg-transparent rounded-md text-primary-600 hover:text-primary-700 focus:outline-none text-xs tracking-wide dark:text-zinc-200 dark:hover:text-white">
                                                        <?php echo e(__('messages.t_view'), false); ?>

                                                    </a>
                                                    
                                                    
                                                    <button wire:click="readNotification('<?php echo e($n->uid, false); ?>')" wire:loading.attr="disabled" wire:target="read('<?php echo e($n->uid, false); ?>')" type="button" class="bg-transparent rounded-md text-gray-700 hover:text-gray-500 focus:outline-none text-xs tracking-wide dark:text-zinc-200 dark:hover:text-white">
                                                        
                                                        <div wire:loading wire:target="readNotification('<?php echo e($n->uid, false); ?>')">
                                                            <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                            </svg>
                                                        </div>

                                                        
                                                        <div wire:loading.remove wire:target="readNotification('<?php echo e($n->uid, false); ?>')">
                                                            <?php echo e(__('messages.t_mark_as_read'), false); ?>

                                                        </div>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    
                </div>

            </div>
        <?php endif; ?>
 
    </div>
</header>
 
 <?php $__env->startPush('scripts'); ?>
    
    <script>
        function TTRjRvxLbHzaKxW() {
            return {

                mobile_menu       : false,
                notifications_menu: false,
                open              : false,
                is_announce       : true,

                // Close announce
                closeAnnounce() {
                    this.is_announce = false
                    window.Livewire.find('<?php echo e($_instance->getId(), false); ?>').closeAnnounce();
                }

            }
        }
        window.TTRjRvxLbHzaKxW = TTRjRvxLbHzaKxW();
    </script>
 <?php $__env->stopPush(); ?>
 <?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/main/includes/header.blade.php ENDPATH**/ ?>