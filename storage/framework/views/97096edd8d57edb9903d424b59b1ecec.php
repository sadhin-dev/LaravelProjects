            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img style="width: 25%" src="<?php echo e(URL::asset('images/logo.png')); ?>" />
                            <span class="app-brand-text demo menu-text fw-bold ms-2">sadhinDEV</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item">
                        <a href="<?php echo e(URL('/')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic"><?php echo e(__('WellCome')); ?></div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('drop-zone')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic"><?php echo e(__('Drop Zone')); ?></div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('auto-suggest')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <?php echo e(__('Auto Suggest')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('auto-complete-search')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <?php echo e(__('Auto Complete Search')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('lazy-load')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <?php echo e(__('Lazy Load')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('import-export')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <?php echo e(__('Excel Import and Export')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('generate-pdf')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-envelope"></i>
                            <?php echo e(__('Generate PDF')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('products')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <?php echo e(__('CRUD')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('csv')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <?php echo e(__('Import Export CSV')); ?>

                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="<?php echo e(URL('fullcalender')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <?php echo e(__('Full Calander')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('weather')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-sun"></i>
                            <?php echo e(__('Weather API')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('notes')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-key"></i>
                            <?php echo e(__('Encrypt and Decrypt')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('form-builder')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-key"></i>
                            <?php echo e(__('Form Builder')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('crop')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <?php echo e(__('Image Crop')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('dusk-test')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Dusk Test')); ?>

                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="<?php echo e(URL('datatable')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Jquery Datatable')); ?>

                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="<?php echo e(URL('send-notification')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Real Time Notification')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('communications')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Chat')); ?>

                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo e(URL('push-notification')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Push Notification')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('show-roles')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Roles And Permissions')); ?>

                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="<?php echo e(URL('file-management')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('File Management')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('kanban-board')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Kanban Board')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('select2')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Select2')); ?>

                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?php echo e(URL('currency-converter')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-test-tube"></i>
                            <?php echo e(__('Currency Converter')); ?>

                        </a>
                    </li>
                </ul>
            </aside>
<?php /**PATH /run/media/root/WORKING-FILES/4_Need_GitHub_Upload_@sadhin-dev/2_Done_GitHub-Upload_Project_2025/LaravelProjects/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>