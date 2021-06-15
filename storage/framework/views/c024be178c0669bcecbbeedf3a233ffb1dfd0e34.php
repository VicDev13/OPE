<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('admin::app.settings.currencies.add-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">

        <form method="POST" action="<?php echo e(route('admin.currencies.store')); ?>" @submit.prevent="onSubmit" enctype="multipart/form-data">
            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '<?php echo e(route('admin.currencies.index')); ?>'"></i>

                        <?php echo e(__('admin::app.settings.currencies.add-title')); ?>

                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        <?php echo e(__('admin::app.settings.currencies.save-btn-title')); ?>

                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    <?php echo csrf_field(); ?>

                    <?php echo view_render_event('bagisto.admin.settings.currencies.create.before'); ?>


                    <accordian :title="'<?php echo e(__('admin::app.settings.currencies.general')); ?>'" :active="true">
                        <div slot="body">

                            <div class="control-group" :class="[errors.has('code') ? 'has-error' : '']">
                                <label for="code" class="required"><?php echo e(__('admin::app.settings.currencies.code')); ?></label>
                                <input v-validate="'required|min:3|max:3'" class="control" id="code" name="code" value="<?php echo e(old('code')); ?>" data-vv-as="&quot;<?php echo e(__('admin::app.settings.currencies.code')); ?>&quot;" style="text-transform:uppercase" v-code/>
                                <span class="control-error" v-if="errors.has('code')">{{ errors.first('code') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('name') ? 'has-error' : '']">
                                <label for="name" class="required"><?php echo e(__('admin::app.settings.currencies.name')); ?></label>
                                <input v-validate="'required'" class="control" id="name" name="name" data-vv-as="&quot;<?php echo e(__('admin::app.settings.currencies.name')); ?>&quot;" value="<?php echo e(old('name')); ?>"/>
                                <span class="control-error" v-if="errors.has('name')">{{ errors.first('name') }}</span>
                            </div>

                            <div class="control-group">
                                <label for="symbol"><?php echo e(__('admin::app.settings.currencies.symbol')); ?></label>
                                <input class="control" id="symbol" name="symbol" value="<?php echo e(old('symbol')); ?>"/>
                            </div>
                        </div>
                    </accordian>

                    <?php echo view_render_event('bagisto.admin.settings.currencies.create.after'); ?>

                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\xokit\OneDrive\Documentos\Jarvis_Mind\Faculdade\OPE\packages\Webkul\Admin\src/resources/views/settings/currencies/create.blade.php ENDPATH**/ ?>