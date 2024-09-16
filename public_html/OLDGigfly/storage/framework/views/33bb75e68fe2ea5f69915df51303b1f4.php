<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(config('maintenance.headline'), false); ?></title>

    
    <?php echo settings('appearance')->font_link; ?>


    
    <style>
        :root {
            --color-primary-h: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[0], false); ?>;
            --color-primary-s: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[1], false); ?>%;
            --color-primary-l: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[2], false); ?>%;
        }
        html {
            font-family: <?php echo settings('appearance')->font_family ?>, sans-serif !important;
        }
    </style>

    
    <link rel="preload" href="<?php echo e(mix('css/app.css'), false); ?>" as="style">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css'), false); ?>">
    <link href="<?php echo e(asset('public/css/style.css'), false); ?>" rel="stylesheet">

</head>
<body class="h-full">
    
    <div class="bg-gray-50 min-h-full px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
        <div class="max-w-max mx-auto">
            <main class="sm:flex">
                <p class="text-4xl font-extrabold text-primary-600 sm:text-5xl">503</p>
                <div class="sm:ml-6">
                    <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                        <h1 class="text-2xl font-extrabold text-gray-900 sm:text-3xl uppercase tracking-widest">
                            <?php echo e(config('maintenance.headline'), false); ?>

                        </h1>
                        <p class="mt-1 text-base text-gray-500">
                            <?php echo e(config('maintenance.message'), false); ?>

                        </p>
                    </div>
                    <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                        <a href="<?php echo e(url('/'), false); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600">
                            <?php echo app('translator')->get('messages.t_refresh'); ?>    
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/errors/503.blade.php ENDPATH**/ ?>