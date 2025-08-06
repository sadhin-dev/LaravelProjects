<?php $__env->startSection('head'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="image-container"></div>
    <button id="load-images"><?php echo e(__('Load Images')); ?></button>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script>
        $(document).ready(function() {
            $('#load-images').on('click', function() {
                $.ajax({
                    url: '/lazy-load-data',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.length > 0) {
                            $('#image-container').empty();
                            data.map(x => {
                                console.log(x.filename);
                                $('#image-container').append(
                                    `<img class="lazyload" style="width:30%" data-src="<?php echo e(URL::asset('images')); ?>/${x.filename}">`
                                );
                            });
                            lazyload();
                        } else {
                            $('#image-container').html('No images found.');
                        }
                    },
                    error: function() {
                        $('#image-container').html('Error loading images.');
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /run/media/root/WORKING-FILES/4_Need_GitHub_Upload_@sadhin-dev/2_Done_GitHub-Upload_Project_2025/LaravelProjects/resources/views/LazyLoad/index.blade.php ENDPATH**/ ?>