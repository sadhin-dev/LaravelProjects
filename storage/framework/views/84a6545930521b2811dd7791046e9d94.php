<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="<?php echo e(URL::asset('assets/img/favicon/favicon.ico')); ?>" />
        <link rel="stylesheet" href="<?php echo e(URL::asset('assets/vendor/fonts/boxicons.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(URL::asset('assets/vendor/css/core.css')); ?>" class="template-customizer-core-css" />
        <link rel="stylesheet" href="<?php echo e(URL::asset('assets/vendor/css/theme-default.css')); ?>" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="<?php echo e(URL::asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
        <script src="<?php echo e(URL::asset('assets/vendor/js/helpers.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/config.js')); ?>"></script>
        <style>
            .notifyjs-corner {
                position: fixed;
                margin: 5px;
                z-index: 999999 !important;
            }

            .youtube-icon {
                width: 30px;
                /* Adjust the width as needed */
                height: auto;
                /* Maintain aspect ratio */
                margin-right: 5px;
                /* Add some spacing between the icon and the text */
            }

            .app-brand-logo img,
            .app-brand-logo svg {
                display: inline;
            }
        </style>
        <?php echo $__env->yieldContent('head'); ?>
    </head>

    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="layout-page">
                    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="content-wrapper">
                        <?php echo $__env->yieldContent('content'); ?>
                        <!-- Footer -->
                        
                        <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <script src="<?php echo e(URL::asset('assets/js/jquery-3.7.1.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/vendor/js/menu.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/main.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/notify.js')); ?>"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
    <script>
        <?php if(auth()->guard()->check()): ?>
        var source = new EventSource("<?php echo e(URL('/sse-updates')); ?>");

        source.onmessage = function(event) {
            let ac = JSON.parse(event.data);
            $.notify(ac.message, 'success');
        }
        <?php endif; ?>
    </script>
    <?php echo $__env->yieldContent('script'); ?>

</html>
<?php /**PATH /run/media/root/WORKING-FILES/4_Need_GitHub_Upload_@sadhin-dev/2_Done_GitHub-Upload_Project_2025/LaravelProjects/resources/views/layouts/app.blade.php ENDPATH**/ ?>