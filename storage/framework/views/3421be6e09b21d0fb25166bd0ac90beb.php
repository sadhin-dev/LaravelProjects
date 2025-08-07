<?php $__env->startSection('head'); ?>
    <style>
        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: green;
            color: white;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(URL('/create-schedule')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for='title'><?php echo e(__('title')); ?></label>
        <input type='text' class='form-control' id='title' name='title'>

        <label for="start"><?php echo e(__('Start')); ?></label>
        <input type='date' class='form-control' id='start' name='start' required value='<?php echo e(now()->toDateString()); ?>'>

        <label for="end"><?php echo e(__('End')); ?></label>
        <input type='date' class='form-control' id='end' name='end' required value='<?php echo e(now()->toDateString()); ?>'>


        <label for="description"><?php echo e(__('Description')); ?></label>
        <textarea id="description" name="description"></textarea>

        <label for="color"><?php echo e(__('Color')); ?></label>
        <input type="color" id="color" name="color" />

        <input type="submit" value="Save" class="btn btn-success" />
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /run/media/root/WORKING-FILES/4_Need_GitHub_Upload_@sadhin-dev/2_Done_GitHub-Upload_Project_2025/LaravelProjects/resources/views/schedule/add.blade.php ENDPATH**/ ?>