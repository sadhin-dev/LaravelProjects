<?php $__env->startSection('head'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo e(__('Product List')); ?></h1>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-12">
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success"><?php echo e(__('Create Product')); ?></a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th><?php echo e(__('Name')); ?></th>
                            <th><?php echo e(__('Quantity')); ?></th>
                            <th><?php echo e(__('Buying Price')); ?></th>
                            <th><?php echo e(__('Selling Price')); ?></th>
                            <th><?php echo e(__('Description')); ?></th>
                            <th><?php echo e(__('Actions')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->quantity); ?></td>
                                <td><?php echo e($product->buyingPrice); ?></td>
                                <td><?php echo e($product->sellingPrice); ?></td>
                                <td><?php echo e($product->description); ?></td>
                                <td>
                                    <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-primary editButton">Edit</a>
                                    <form method="POST" action="<?php echo e(route('products.destroy', $product->id)); ?>" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger deleteButton"
                                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="d-flex justify-content-center" id="paginiation">
            <?php echo e($products->links('pagination::bootstrap-5')); ?>

        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?php echo e(asset('assets/notify.min.js')); ?>"></script>
    <script>
        $(document).ready(function($) {
            // Start Show Validation Error messages==========================================================
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    $.notify("<?php echo e($error); ?>", "error");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            // End Show Validation Error messages==========================================================

            // Start Show Success message ====================================================================
            <?php if(session('success')): ?>
                $.notify("<?php echo e(session('success')); ?>", "success");
            <?php endif; ?>
            // End Show Success message ====================================================================
            $('.notifyjs-corner').css('z-index', 999999);

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /run/media/root/WORKING-FILES/4_Need_GitHub_Upload_@sadhin-dev/2_Done_GitHub-Upload_Project_2025/LaravelProjects/resources/views/CRUD/index.blade.php ENDPATH**/ ?>