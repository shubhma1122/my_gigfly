<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24">
    <div class="relative mce-content-body break-words">

        
        <?php if (isset($component)) { $__componentOriginala21f49a74cfebdbb98a47509c8a19010 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala21f49a74cfebdbb98a47509c8a19010 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $attributes = $__attributesOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $component = $__componentOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__componentOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>
        
        
        <div class="mb-8">

            
            <nav class="flex mb-3" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-1 rtl:space-x-reverse">
        
                    
                    <li>
                        <div>
                            <a href="<?php echo e(url('/'), false); ?>" class="text-gray-400 dark:text-gray-200 hover:text-gray-500 dark:hover:text-gray-100">
                                <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/> </svg>
                            </a>
                        </div>
                    </li>
        
                    
                    <li>
                        <div class="flex items-center">                    
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-200 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"> <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"/> </svg>
                            <a href="<?php echo e(url('blog'), false); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-200 dark:hover:text-gray-100"><?php echo e(__('messages.t_blog'), false); ?></a>
                        </div>
                    </li>
        
                    <li>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-200 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                            </svg>
                            <span class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-200 dark:hover:text-gray-100" aria-current="page">
                                <?php echo e($article->title, false); ?>

                            </span>
                        </div>
                    </li>
                </ol>
            </nav>

            
            <h2 class="text-xl md:text-2xl font-extrabold text-gray-700 dark:text-white">
                <?php echo e($article->title, false); ?>

            </h2>

            
            <h3 class="text-xs md:text-xs+ md:leading-relaxed font-normal text-gray-400 dark:text-zinc-300">
                <?php echo app('translator')->get('messages.t_created_date'); ?>:  <?php echo e(format_date($article->created_at), false); ?>

            </h3>

            
            <?php if($article->image): ?>
                <figure class="mb-10">
                    <img class="mt-6 max-w-2xl rounded-lg" src="<?php echo e(src($article->image), false); ?>" alt="<?php echo e($article->title, false); ?>">
                </figure>
            <?php endif; ?>

        </div>
    
        
        <article class="break-words relative mce-content-body">
            <?php echo htmlspecialchars_decode($article->content); ?>

        </article>

        
        <div class="w-full">
            <span class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white mb-4 mt-24 flex items-center">
                <?php echo e(__('messages.t_share'), false); ?>

            </span>
            <div class="flex items-center pb-6">

                
                <a href="https://www.facebook.com/sharer.php?t=<?php echo e($article->title, false); ?>&u=<?php echo e(url('blog', $article->slug), false); ?>" target="_blank" data-tooltip-target="project-share-facebook" class="text-white bg-[#4267B2] hover:bg-[#4267B2]/80 focus:ring-0 focus:outline-none rounded flex items-center justify-center h-10 w-10 ltr:mr-2 rtl:ml-2">
                    <i class="si si-facebook text-xl"></i>
                </a>
                <div id="project-share-facebook" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip">
                    <?php echo e(__('messages.t_share_on_facebook'), false); ?>

                </div>

                
                <a href="https://twitter.com/intent/tweet?text=<?php echo e($article->title, false); ?>&url=<?php echo e(url('blog', $article->slug), false); ?>" target="_blank" data-tooltip-target="project-share-twitter" class="text-white bg-[#00acee] hover:bg-[#00acee]/80 focus:ring-0 focus:outline-none rounded flex items-center justify-center h-10 w-10 ltr:mr-2 rtl:ml-2">
                    <i class="si si-twitter text-xl"></i>
                </a>
                <div id="project-share-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip">
                    <?php echo e(__('messages.t_share_on_twitter'), false); ?>

                </div>

                
                <a href="https://www.linkedin.com/shareArticle?title=<?php echo e($article->title, false); ?>&url=<?php echo e(url('blog', $article->slug), false); ?>" target="_blank" data-tooltip-target="project-share-linkedin" class="text-white bg-[#0072b1] hover:bg-[#0072b1]/80 focus:ring-0 focus:outline-none rounded flex items-center justify-center h-10 w-10 ltr:mr-2 rtl:ml-2">
                    <i class="si si-linkedin text-xl"></i>
                </a>
                <div id="project-share-linkedin" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip">
                    <?php echo e(__('messages.t_share_on_linkedin'), false); ?>

                </div>

                
                <a href="https://snapchat.com/scan?attachmentUrl=<?php echo e(url('blog', $article->slug), false); ?>" target="_blank" data-tooltip-target="project-share-snapchat" class="text-gray-700 bg-[#FFFC00] hover:bg-[#FFFC00]/80 focus:ring-0 focus:outline-none rounded flex items-center justify-center h-10 w-10 ltr:mr-2 rtl:ml-2">
                    <i class="si si-snapchat text-xl"></i>
                </a>
                <div id="project-share-snapchat" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip">
                    <?php echo e(__('messages.t_share_on_snapchat'), false); ?>

                </div>

                
                <a href="https://www.pinterest.com/pin/create/button/?description=<?php echo e($article->title, false); ?>&media=&url=<?php echo e(url('blog', $article->slug), false); ?>" target="_blank" data-tooltip-target="project-share-pinterest" class="text-white bg-[#E60023] hover:bg-[#E60023]/80 focus:ring-0 focus:outline-none rounded flex items-center justify-center h-10 w-10 ltr:mr-2 rtl:ml-2">
                    <i class="si si-pinterest text-xl"></i>
                </a>
                <div id="project-share-pinterest" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip">
                    <?php echo e(__('messages.t_share_on_pinterest'), false); ?>

                </div>

                
                <a href="https://web.whatsapp.com/send?text=<?php echo e(url('blog', $article->slug), false); ?>" target="_blank" data-tooltip-target="project-share-whatsapp" class="text-white bg-[#25D366] hover:bg-[#25D366]/80 focus:ring-0 focus:outline-none rounded flex items-center justify-center h-10 w-10 ltr:mr-2 rtl:ml-2">
                    <i class="si si-whatsapp text-xl"></i>
                </a>
                <div id="project-share-whatsapp" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip">
                    <?php echo e(__('messages.t_share_on_whatsapp'), false); ?>

                </div>

            </div>
        </div>

        
        <?php if(settings('blog')->enable_comments): ?>
            <div class="w-full mt-2">
                <section class="py-8 lg:py-16 antialiased">
                    <div class="max-w-xl">

                        
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white" wire:ignore><?php echo app('translator')->get('messages.t_discussion'); ?> (<?php echo e($article->comments_count, false); ?>)</h2>
                        </div>

                        
                        <?php if (isset($component)) { $__componentOriginalefda5ddba01882262075fadff48950fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefda5ddba01882262075fadff48950fb = $attributes; } ?>
<?php $component = Rawilk\FormComponents\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Rawilk\FormComponents\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'add-comment-form']); ?>

                            
                            <div class="w-full mb-4">
                                <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_fullname')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_fullname')),'model' => 'name','icon' => 'user']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="w-full mb-4">
                                <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_email_address')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_email_address')),'model' => 'email','type' => 'email','icon' => 'at']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="w-full mb-4">
                                <?php if (isset($component)) { $__componentOriginal2f60389a9e230471cd863683376c182f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f60389a9e230471cd863683376c182f = $attributes; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_comment')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_ur_comment')),'model' => 'comment','rows' => '6','icon' => 'chat-teardrop-dots']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $attributes = $__attributesOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__attributesOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $component = $__componentOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__componentOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
                            </div>

                            
                            <?php if(settings('security')->is_recaptcha): ?>
                                <div class="w-full mb-4">
                                    <div class="text-xs tracking-wide text-slate-400 dark:text-zinc-400">
                                        <?php echo app('translator')->get('messages.t_this_site_protected_by_recaptcha_and_google'); ?> 
                                        <a href="https://policies.google.com/privacy" target="_blank" class="text-primary-600 hover:underline">
                                            <?php echo app('translator')->get('messages.t_privacy_policy'); ?>
                                        </a> 
                                        <span class="lowercase"><?php echo app('translator')->get('messages.t_and'); ?></span>
                                        <a href="https://policies.google.com/terms" target="_blank" class="text-primary-600 hover:underline">
                                            <?php echo app('translator')->get('messages.t_terms_of_service'); ?>
                                        </a> 
                                        <?php echo app('translator')->get('messages.t_recaptcha_apply'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            
                            <?php $__errorArgs = ['recaptcha_token'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mb-4 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('recaptcha_token'), false); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            
                            <?php if (isset($component)) { $__componentOriginal9a524495f8fba1bb9db48a43313dffc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a524495f8fba1bb9db48a43313dffc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.button.index','data' => ['size' => 'small','class' => 'mx-auto !px-6','canSubmit' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'small','class' => 'mx-auto !px-6','can_submit' => 'true']); ?>
                                <?php echo app('translator')->get('messages.t_add_comment'); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a524495f8fba1bb9db48a43313dffc1)): ?>
<?php $attributes = $__attributesOriginal9a524495f8fba1bb9db48a43313dffc1; ?>
<?php unset($__attributesOriginal9a524495f8fba1bb9db48a43313dffc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a524495f8fba1bb9db48a43313dffc1)): ?>
<?php $component = $__componentOriginal9a524495f8fba1bb9db48a43313dffc1; ?>
<?php unset($__componentOriginal9a524495f8fba1bb9db48a43313dffc1); ?>
<?php endif; ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefda5ddba01882262075fadff48950fb)): ?>
<?php $attributes = $__attributesOriginalefda5ddba01882262075fadff48950fb; ?>
<?php unset($__attributesOriginalefda5ddba01882262075fadff48950fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefda5ddba01882262075fadff48950fb)): ?>
<?php $component = $__componentOriginalefda5ddba01882262075fadff48950fb; ?>
<?php unset($__componentOriginalefda5ddba01882262075fadff48950fb); ?>
<?php endif; ?>

                        
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="text-base mt-12">
                                <footer class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">

                                        
                                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                            <div class="w-7 h-7 ltr:mr-2 rtl:ml-2 inline-flex flex-shrink-0 relative">
                                                <?php
                                                    $faker = Faker\Factory::create();
                                                    $color = $faker->rgbColor();
                                                ?>
                                                <div class="flex items-center justify-center h-full w-full mask is-squircle text-xs uppercase dark:bg-navy-500 dark:text-navy-100 font-medium" style="background-color: rgba(<?php echo e($color, false); ?>, .1);color: rgb(<?php echo e($color, false); ?>)">
                                                    <?php echo e(Str::substr($comment->name, 0, 2), false); ?>

                                                </div> 
                                            </div>
                                            <span><?php echo e($comment->name, false); ?></span>
                                        </div>

                                        
                                        <p class="text-xs text-gray-400 dark:text-zinc-300">
                                            <?php echo e(format_date($comment->created_at, 'ago'), false); ?>

                                        </p>

                                    </div>
                                </footer>
                                <p class="text-gray-600 dark:text-gray-400 text-xs+">
                                    <?php echo e($comment->comment, false); ?>

                                </p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                        <?php if($comments->hasPages()): ?>
                            <div class="bg-gray-100 dark:bg-zinc-800 px-4 py-5 sm:px-6 flex justify-center mt-8 rounded-md">
                                <?php echo $comments->links('pagination::tailwind'); ?>

                            </div>
                        <?php endif; ?>
                    
                    </div>
                </section>
            </div>
        <?php endif; ?>
            
    </div>
</div>


<?php $__env->startPush('styles'); ?>

    
    <link rel="stylesheet" href="<?php echo e(asset('js/plugins/simple-icons-font/simple-icons.min.css'), false); ?>" type="text/css">

    
	<?php if(settings('security')->is_recaptcha): ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('recaptcha.site_key'), false); ?>"></script> 
    <?php endif; ?>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('scripts'); ?> 

    
	<?php if(settings('security')->is_recaptcha): ?>
        <script>
            grecaptcha.ready(function () {
                document.getElementById('add-comment-form').addEventListener("submit", function (event) {
                    event.preventDefault();
                    grecaptcha.execute("<?php echo e(config('recaptcha.site_key'), false); ?>", { action: 'register' })
                        .then(function (token) {
                            window.Livewire.find("<?php echo e($this->id(), false); ?>").set('recaptcha_token', token)
                            window.Livewire.find("<?php echo e($this->id(), false); ?>").addComment();
                        });
                });
            });
        </script>
    <?php endif; ?>

<?php $__env->stopPush(); ?><?php /**PATH /home/u344139974/domains/gigfly.in/public_html/resources/views/livewire/main/blog/article.blade.php ENDPATH**/ ?>