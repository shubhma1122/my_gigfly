<div class="w-full"> 

    
    <?php if(auth()->guard()->guest()): ?>
        <div class="home-hero-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <div class="w-full md:max-w-lg">
                    
                    
                    <h1 class="text-center sm:ltr:text-left sm:rtl:text-right mt-4 text-xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-3xl lg:mt-6 xl:text-4xl">
                        <?php echo e(__('messages.t_find_best'), false); ?> <?php echo e(__('messages.t_freelance'), false); ?><br> <?php echo e(__('messages.t_services_for_ur_business'), false); ?>

                    </h1>
                    <div class="mt-10 sm:mt-12">

                        
                        <form class="flex items-center mb-4" action="<?php echo e(url('search'), false); ?>" accept="GET">   

                            
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center ltr:pl-3 rtl:pr-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="search" name="q" class="bg-white border-none text-gray-900 text-sm font-medium rounded-md block w-full ltr:pl-10 rtl:pr-10 px-2.5 py-4 focus:outline-none focus:ring-0" placeholder="<?php echo e(__('messages.t_what_service_are_u_looking_for_today'), false); ?>" required>
                            </div>

                            
                            <button type="submit" class="px-5 py-4 ltr:ml-2 rtl:mr-2 text-sm font-medium text-white bg-primary-600 rounded-md border-none hover:bg-primary-800 focus:ring-0 focus:outline-none">
                                <?php echo app('translator')->get('messages.t_search'); ?>
                            </button>

                        </form>

                        
                        <?php
                            $popular_tags = App\Models\Category::whereHas('gigs')->withCount('gigs')->take(5)->orderBy('gigs_count')->get();
                        ?>
                        <?php if($popular_tags->count()): ?>
                            <div class="hidden sm:flex items-center text-white font-semibold text-sm whitespace-nowrap">
                                <?php echo app('translator')->get('messages.t_popular_colon'); ?> 
                                <ul class="flex ltr:ml-3 rtl:mr-3">
                                    <?php $__currentLoopData = $popular_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="flex ltr:mr-3 rtl:ml-3 whitespace-nowrap">
                                            <a href="<?php echo e(url('categories', $tag->slug), false); ?>" class="border-2 border-white rounded-[40px] hover:bg-white hover:text-gray-700 transition-all duration-200 px-3 py-0.5 text-xs">
                                                <?php echo e($tag->name, false); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24">
        <div class="grid grid-cols-12 gap-6">
    
            
            <?php if(settings('appearance')->is_featured_categories && $categories && $categories->count()): ?>
                <div class="col-span-12 mt-6 xl:mt-6 mb-16">
                    <span class="font-semibold text-gray-400 dark:text-gray-200 uppercase tracking-wider text-center block"><?php echo e(__('messages.t_featured_categories'), false); ?></span>
                    <div class="flex-wrap justify-center items-center mt-8 -mx-5 hidden" id="featured-categories-slick" wire:ignore>
    
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(url('categories', $category->slug), false); ?>" class="relative !h-72 rounded-md !p-6 !flex !flex-col overflow-hidden group mx-5">
                            <span aria-hidden="true" class="absolute inset-0">
                                <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($category->image), false); ?>" alt="<?php echo e($category->name, false); ?>" class="lazy w-full h-full object-center object-cover">
                            </span>
                            <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-black opacity-90"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white"><?php echo e($category->name, false); ?></span>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                    </div>
                </div>
            <?php endif; ?>
    
            
            <?php if(settings('appearance')->is_best_sellers && $sellers && $sellers->count()): ?>
                <div class="col-span-12 mt-6 xl:mt-6 mb-16">
                    <span class="font-semibold text-gray-400 dark:text-gray-200 uppercase tracking-wider text-center block"><?php echo e(__('messages.t_top_sellers'), false); ?></span>
                    <a href="<?php echo e(url('sellers'), false); ?>" class="mt-1 text-primary-600 hover:text-primary-700 text-xs font-medium uppercase tracking-widest text-center block"><?php echo e(__('messages.t_view_more'), false); ?></a>
    
                    <ul class="flex-wrap justify-center items-center mt-8 -mx-5 hidden" id="top-sellers-slick" wire:ignore>
                        <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-span-1 flex flex-col text-center bg-white dark:bg-zinc-800 rounded-md shadow divide-y divide-gray-200 dark:divide-zinc-700 mx-5">
                            <div class="px-4 py-8">
            
                                
                                <a href="<?php echo e(url('profile', $seller->username), false); ?>" target="_blank" class="inline-block relative">
                                    <img class="h-16 w-16 rounded-full object-cover lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src($seller->avatar), false); ?>" alt="<?php echo e($seller->username, false); ?>">
                                    <?php if($seller->isOnline() && !$seller->availability): ?>
                                        <span class="absolute top-0.5 ltr:right-0.5 rtl:left-0.5 block h-3 w-3 rounded-full ring-2 ring-white dark:ring-zinc-800 bg-green-400"></span>
                                    <?php elseif($seller->availability): ?>
                                        <span class="absolute top-0.5 ltr:right-0.5 rtl:left-0.5 block h-3 w-3 rounded-full ring-2 ring-white dark:ring-zinc-800 bg-gray-400"></span>
                                    <?php else: ?>
                                        <span class="absolute top-0.5 ltr:right-0.5 rtl:left-0.5 block h-3 w-3 rounded-full ring-2 ring-white dark:ring-zinc-800 bg-red-400"></span>
                                    <?php endif; ?>
                                </a>
    
                                
                                <a href="<?php echo e(url('profile', $seller->username), false); ?>" target="_blank" class="mt-4 text-gray-900 dark:text-gray-200 text-sm font-bold tracking-wider flex items-center justify-center">
                                    <?php echo e($seller->username, false); ?>

                                    <?php if($seller->status === 'verified'): ?>
                                        <img data-tooltip-target="tooltip-account-verified-<?php echo e($seller->id, false); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg'), false); ?>" alt="<?php echo e(__('messages.t_account_verified'), false); ?>">
                                        <div id="tooltip-account-verified-<?php echo e($seller->id, false); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            <?php echo e(__('messages.t_account_verified'), false); ?>

                                        </div>
                                    <?php endif; ?>
                                </a>
    
                                <dl class="mt-1 flex-grow flex flex-col justify-between">
                                    <dt class="sr-only">Level</dt>
                                    <dd class="text-[11px] font-medium uppercase tracking-widest" style="color:<?php echo e($seller->level->level_color, false); ?>"><?php echo e($seller->level->title, false); ?></dd>
                                    <dt class="sr-only">Skills</dt>
                                    <dd class="mt-5 space-x-1 rtl:space-x-reverse">
    
                                        
                                        <div class="flex items-center justify-center mb-5" wire:ignore>
    
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor"> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            
                                            
                                            <?php if($seller->rating() == 0): ?>
                                                <div class=" text-[13px] tracking-widest text-amber-500 ltr:ml-1 rtl:mr-1 font-black"><?php echo e(__('messages.t_n_a'), false); ?></div>
                                            <?php else: ?>
                                                <div class=" text-sm tracking-widest text-amber-500 ltr:ml-1 rtl:mr-1 font-black"><?php echo e($seller->rating(), false); ?></div>
                                            <?php endif; ?>
                            
                                            
                                            <div class="ltr:ml-2 rtl:mr-2 text-[13px] font-normal text-gray-400 dark:text-gray-300">
                                                ( <?php echo e(number_format($seller->reviews()->count()), false); ?> )
                                            </div>
                                            
                                        </div>
    
                                        
                                        <?php if($seller->skills()->count()): ?>
                                            <div class="h-16">
                                                <?php $__currentLoopData = $seller->skills()->InRandomOrder()->limit(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="inline-flex mb-2 px-3 py-1.5 items-center text-gray-800 text-xs font-medium bg-gray-100 dark:bg-zinc-700 dark:text-zinc-300 rounded-full">
                                                        <?php echo e($skill->name, false); ?>

                                                    </span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php else: ?>
                                            <div class="h-16"></div>
                                        <?php endif; ?>
                                        
                                    </dd>
                                </dl>
            
                            </div>
            
                            
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200 rtl:divide-x-reverse bg-gray-100 dark:bg-zinc-700 dark:divide-zinc-700 rounded-b-lg">
            
                                    <?php if(auth()->guard()->check()): ?>
                                        
                                        <div class="w-0 flex-1 flex">
                                            <a href="<?php echo e(url('messages/new', $seller->username), false); ?>" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-xs text-gray-700 dark:text-zinc-300 dark:hover:text-zinc-100 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                <svg class="w-5 h-5 text-gray-400 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/> <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/> </svg>
                                                <span class="ml-2"><?php echo e(__('messages.t_contact_me'), false); ?></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
    
                                    <?php if(auth()->guard()->guest()): ?>
                                        
                                        <div class="w-0 flex-1 flex">
                                            <a href="<?php echo e(url('profile', $seller->username), false); ?>" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-xs text-gray-700 dark:text-zinc-300 dark:hover:text-zinc-100 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 dark:text-gray-300" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/></svg>
                                                <span class="ml-2"><?php echo e(__('messages.t_view_profile'), false); ?></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
            
                                </div>
                            </div>
            
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
    
                </div>
            <?php endif; ?>
    
            
            <?php if($gigs && !$gigs->isEmpty()): ?>
                <div class="col-span-12 mb-16">
    
                    
                    <div class="block mb-6">
                        <div class="flex justify-between items-center bg-transparent py-2">
    
                            <div>
                                <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block">
                                    <?php echo app('translator')->get('messages.t_selected_gigs_for_u'); ?>    
                                </span>
                            </div>
    
                            <div>
                                <a href="<?php echo e(url('search'), false); ?>" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                    <?php echo e(__('messages.t_view_more'), false); ?>

                                    
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
    
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                                </a>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                        <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('main.cards.gig', ['gig' => $gig]);

$__html = app('livewire')->mount($__name, $__params, 'gig-item-' . $gig->uid, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
    
            
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($category->gigs()->active()->count()): ?>
                    
                    
                    <div class="col-span-12">
                        <div class="flex justify-between items-center bg-transparent py-2">
    
                            <div>
                                <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider"><?php echo e($category->name, false); ?></span>
                            </div>
    
                            <div>
                                <a href="<?php echo e(url('categories', $category->slug), false); ?>" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                    <?php echo e(__('messages.t_view_more'), false); ?>

                                    
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
    
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                                </a>
                            </div>
    
                        </div>
                    </div>
    
                    
                    <div class="col-span-12 mb-16">
                        <div class="grid grid-cols-12 sm:gap-x-9 gap-y-6">
                            <?php $__currentLoopData = $category->gigs()->active()->inRandomOrder()->take(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 xl:col-span-3">
                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('main.cards.gig', ['gig' => $gig]);

$__html = app('livewire')->mount($__name, $__params, 'gig-item-' . $category->id . '-' . $gig->uid, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
    
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
            
            <?php if(settings('projects')->is_enabled && !is_null($projects) && !$projects->isEmpty()): ?>
                <div class="col-span-12 mb-16">
                
                    
                    <div class="block mb-6">
                        <div class="flex justify-between items-center bg-transparent py-2">
    
                            <div>
                                <span class="font-extrabold text-xl text-gray-800 dark:text-gray-100 pb-1 block tracking-wider">
                                    <?php echo app('translator')->get('messages.t_featured_projects'); ?>    
                                </span>
                            </div>
    
                            <div>
                                <a href="<?php echo e(url('explore/projects'), false); ?>" class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                                    <?php echo e(__('messages.t_view_more'), false); ?>

                                    
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden ltr:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
    
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden rtl:inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12"/></svg>
                                </a>
                            </div>
    
                        </div>
                    </div>
    
                    
                    <div class="space-y-6">
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('main.cards.project', [ 'id' => $project->uid ]);

$__html = app('livewire')->mount($__name, $__params, 'project-card-id-' . $project->uid, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
    
                </div>
            <?php endif; ?>
    
            
            <?php if(settings('newsletter')->is_enabled): ?>
                <div class="col-span-12">
                    <div class="bg-gray-100 dark:bg-zinc-800 rounded-md p-6 flex items-center sm:p-10">
                        <div class="max-w-lg mx-auto">
                            <h3 class="font-semibold text-gray-900 dark:text-gray-100"><?php echo e(__('messages.t_sign_up_for_newsletter'), false); ?></h3>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_sign_up_for_newsletter_subtitle'), false); ?></p>
                            <div class="mt-4 sm:mt-6 sm:flex">
                                <label for="email-address" class="sr-only">Email address</label>
                                <input wire:model.defer="email" id="email-address" type="text" autocomplete="email" required="" placeholder="<?php echo e(__('messages.t_enter_email_address'), false); ?>" class="h-14 appearance-none min-w-0 w-full bg-white dark:bg-zinc-700 border border-gray-300 dark:border-zinc-700 rounded-md shadow-sm py-2 px-4 text-sm text-gray-900 dark:text-gray-300 placeholder-gray-500 focus:outline-none focus:border-primary-600 focus:ring-1 focus:ring-primary-600" readonly onfocus="this.removeAttribute('readonly');">
                                <div class="mt-3 sm:flex-shrink-0 sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4">
                                    <button wire:click="newsletter" wire:loading.attr="disabled" wire:target="newsletter" type="button" class="dark:disabled:bg-zinc-500 dark:disabled:text-zinc-400 disabled:cursor-not-allowed disabled:!bg-gray-400 disabled:text-gray-500 h-14 w-full bg-primary-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-sm font-bold tracking-wider text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600">
                                        <?php echo e(__('messages.t_signup'), false); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    
        </div>
    </div>

</div>

<?php $__env->startPush('scripts'); ?>

    
    <?php if(settings('appearance')->is_featured_categories || settings('appearance')->is_best_sellers): ?>
        <script defer type="text/javascript" src="<?php echo e(asset('js/plugins/slick/slick.min.js'), false); ?>"></script>
    <?php endif; ?>

    
    <?php if(settings('appearance')->is_featured_categories && $categories && $categories->count()): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#featured-categories-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 5,
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
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#featured-categories-slick').removeClass('hidden');
            });
        </script>
    <?php endif; ?>

    
    <?php if(settings('appearance')->is_best_sellers && $sellers && $sellers->count()): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#top-sellers-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 5,
                    slidesToScroll: 1,
                    arrows        : false,
                    responsive    : [
                        {
                        breakpoint: 1024,
                            settings: {
                                slidesToShow  : 3,
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
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#top-sellers-slick').removeClass('hidden');
            });
        </script>
    <?php endif; ?>
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>

    
    <?php if(settings('appearance')->is_featured_categories || settings('appearance')->is_best_sellers): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('js/plugins/slick/slick.css'), false); ?>"/>
    <?php endif; ?>

    
    <style>
        .home-hero-section {
            background-color: <?php echo e(settings('hero')->bg_color, false); ?>;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            height: <?php echo e(settings('hero')->bg_large_height, false); ?>px;
        }
        
        
        <?php if(settings('hero')->enable_bg_img): ?>
            
            
            <?php if(settings('hero')->background_small): ?>
            
                @media only screen and (max-width: 600px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_small), false); ?>');
                        height: <?php echo e(settings('hero')->bg_small_height, false); ?>px;
                    }
                }

            <?php endif; ?>

            
            <?php if(settings('hero')->background_medium): ?>
            
                @media only screen and (min-width: 600px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_medium), false); ?>')
                    }
                }

            <?php endif; ?>

            
            <?php if(settings('hero')->background_large): ?>
            
                @media only screen and (min-width: 768px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_large), false); ?>');
                    }
                }

            <?php endif; ?>

            
            <?php if(settings('hero')->background_large): ?>
            
                @media only screen and (min-width: 992px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_large), false); ?>');
                    }
                }

            <?php endif; ?>

            
            <?php if(settings('hero')->background_large): ?>
            
                @media only screen and (min-width: 1200px) {
                    .home-hero-section {
                        background-image: url('<?php echo e(src(settings('hero')->background_large), false); ?>');
                    }
                }

            <?php endif; ?>

        <?php endif; ?>
    </style>
        
<?php $__env->stopPush(); ?>
<?php /**PATH /home/u304230485/domains/gigfly.in/public_html/resources/views/livewire/main/home/home.blade.php ENDPATH**/ ?>