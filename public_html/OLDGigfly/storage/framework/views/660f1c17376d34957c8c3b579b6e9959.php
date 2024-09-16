<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['class' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['class' => null]); ?>
<?php foreach (array_filter((['class' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<nav class="w-full <?php echo e($class ? $class : '', false); ?>">

    <?php
        $link_active_class = 'bg-primary-100/25 border-primary-600 text-primary-700 dark:text-white hover:bg-primary-100/25 hover:text-primary-700';
        $link_basic_class  = 'border-transparent text-gray-500 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-zinc-600 hover:text-gray-900';
        $icon_active_class = 'text-primary-600 dark:text-gray-50 group-hover:text-primary-600 dark:group-hover:text-white';
        $icon_basic_class  = 'text-gray-400 dark:text-gray-300 dark:group-hover:text-white group-hover:text-gray-500';
        $id                = uid();
    ?>

    <div class="w-full border-b border-gray-100 dark:border-zinc-600">
        <div class="flex flex-col text-center divide-y divide-gray-200 dark:divide-zinc-600">
            <div class="flex-1 flex flex-col p-8">
                <a href="<?php echo e(url('profile', auth()->user()->username), false); ?>">
                    <img class="w-20 h-20 flex-shrink-0 mx-auto rounded-full object-cover lazy" src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src(auth()->user()->avatar), false); ?>" alt="<?php echo e(auth()->user()->username, false); ?>">
                </a>
                <h3 class="mt-6 text-gray-700 dark:text-white text-sm font-medium flex items-center justify-center">
                    <span class="text-sm font-bold tracking-wider text-gray-700 dark:text-gray-100"><?php echo e(auth()->user()->username, false); ?></span>
                    <?php if(auth()->user()->status === 'verified'): ?>
                        <img data-tooltip-target="tooltip-account-verified-<?php echo e($id, false); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg'), false); ?>" alt="<?php echo e(__('messages.t_account_verified'), false); ?>">
                        <div id="tooltip-account-verified-<?php echo e($id, false); ?>" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_account_verified'), false); ?>

                        </div>
                    <?php endif; ?>
                </h3>
                <dl class="mt-1 flex-grow flex flex-col justify-between">
                    <dd class="text-gray-900 text-sm font-black dark:text-white"><?php echo money(auth()->user()->balance_available, settings('currency')->code, true); ?></dd>
                    <dd class="mt-3">
                        <?php if(auth()->user()->account_type === 'seller'): ?>
                            <a href="<?php echo e(url('seller/home'), false); ?>" class="px-4 py-1 text-green-800 text-xs font-semibold bg-green-100 rounded-full">
                                <?php echo e(__('messages.t_seller_dashboard'), false); ?>

                            </a>
                        <?php else: ?>
                            <span class="px-4 py-1 text-blue-800 text-xs font-semibold bg-blue-100 rounded-full">
                                <?php echo e(__('messages.t_buyer'), false); ?>

                            </span>
                        <?php endif; ?>
                    </dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="border-b border-gray-100 dark:border-zinc-600">

        
        <a href="<?php echo e(url('account/settings'), false); ?>"
            class="<?php echo e(Request::is('account/settings') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/settings') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_account_settings'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('account/profile'), false); ?>"
            class="<?php echo e(Request::is('account/profile') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/profile') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_edit_profile'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('account/password'), false); ?>"
            class="<?php echo e(Request::is('account/password') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/password') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_update_password'), false); ?> </span>

        </a>

    </div>

    <div class="border-b border-gray-100 dark:border-zinc-600">

        
        <?php if(settings('projects')->is_enabled): ?>
            <a href="<?php echo e(url('account/projects'), false); ?>" class="<?php echo e(Request::is('account/projects') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

                
                <svg class="<?php echo e(Request::is('account/projects') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>

                
                <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_my_projects'), false); ?> </span>

            </a>
        <?php endif; ?>

        
        <?php if(settings('publish')->enable_custom_offers): ?>
            <a href="<?php echo e(url('account/offers'), false); ?>" class="<?php echo e(Request::is('account/offers') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

                
                <svg class="<?php echo e(Request::is('account/offers') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                </svg>

                
                <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_submitted_offers'), false); ?> </span>

            </a>
        <?php endif; ?>

        
        <a href="<?php echo e(url('account/deposit'), false); ?>" class="<?php echo e(Request::is('account/deposit') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg class="<?php echo e(Request::is('account/deposit') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_deposit'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('account/orders'), false); ?>"
            class="<?php echo e(Request::is('account/orders') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/orders') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_my_orders'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('inbox'), false); ?>"
            class="<?php echo e(Request::is('inbox') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('inbox') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_my_messages'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('account/reviews'), false); ?>"
            class="<?php echo e(Request::is('account/reviews') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/reviews') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_my_reviews'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('account/refunds'), false); ?>"
            class="<?php echo e(Request::is('account/refunds') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg" class="<?php echo e(Request::is('account/refunds') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"/></svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_my_refunds'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('account/favorite'), false); ?>"
            class="<?php echo e(Request::is('account/favorite') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/favorite') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_favorite_list'), false); ?> </span>

        </a>

    </div>

    <div class="border-b border-gray-100 dark:border-zinc-600">

        
        <a href="<?php echo e(url('account/billing'), false); ?>"
            class="<?php echo e(Request::is('account/billing') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/billing') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_billing_information'), false); ?> </span>

        </a>

        
        <a href="<?php echo e(url('account/verification'), false); ?>"
            class="<?php echo e(Request::is('account/verification') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg xmlns="http://www.w3.org/2000/svg"
                class="<?php echo e(Request::is('account/verification') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_verification_center'), false); ?> </span>

        </a>

    </div>

    
    <?php if(auth()->user()->password): ?>
        <a href="<?php echo e(url('account/sessions'), false); ?>" class="<?php echo e(Request::is('account/sessions') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

            
            <svg class="<?php echo e(Request::is('account/sessions') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>

            
            <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_browser_sessions'), false); ?> </span>

        </a>
    <?php endif; ?>

    
    <a href="<?php echo e(url('auth/logout'), false); ?>"
        class="<?php echo e(Request::is('account/logout') ? $link_active_class : $link_basic_class, false); ?> group ltr:border-l-4 rtl:border-r-4 px-5 py-3 flex items-center text-sm font-medium">

        
        <svg xmlns="http://www.w3.org/2000/svg"
            class="<?php echo e(Request::is('account/logout') ? $icon_active_class : $icon_basic_class, false); ?> flex-shrink-0 ltr:-ml-1 rtl:-mr-1 ltr:mr-3 rtl:ml-3 h-5 w-5"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>

        
        <span class="truncate text-sm font-semibold"> <?php echo e(__('messages.t_logout'), false); ?> </span>

    </a>

</nav>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/components/main/account/sidebar.blade.php ENDPATH**/ ?>