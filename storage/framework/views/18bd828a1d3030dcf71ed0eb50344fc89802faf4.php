<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('admin::app.catalog.categories.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1><?php echo e(__('admin::app.catalog.categories.title')); ?></h1>
            </div>

            <div class="page-action">
                <a href="<?php echo e(route('admin.catalog.categories.create')); ?>" class="btn btn-lg btn-primary">
                    <?php echo e(__('admin::app.catalog.categories.add-title')); ?>

                </a>
            </div>
        </div>

        <?php echo view_render_event('bagisto.admin.catalog.categories.list.before'); ?>


        <div class="page-content">
            <?php echo app('Webkul\Admin\DataGrids\CategoryDataGrid')->render(); ?>

        </div>

        <?php echo view_render_event('bagisto.admin.catalog.categories.list.after'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function(){
            $("input[type='checkbox']").change(deleteFunction);
        });

        var deleteFunction = function(e,type) {
            if (type == 'delete') {
                var indexes = $(e.target).parent().attr('id');
            } else {
                $("input[type='checkbox']").attr('disabled', true);

                var formData = {};
                $.each($('form').serializeArray(), function(i, field) {
                    formData[field.name] = field.value;
                });

                var indexes = formData.indexes;
            }
            
            if (indexes) {
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route("admin.catalog.categories.product.count")); ?>',
                    data : {
                        _token: '<?php echo e(csrf_token()); ?>',
                        indexes: indexes
                    },
                    success:function(data) {
                        $("input[type='checkbox']").attr('disabled', false);
                        if (data.product_count > 0) {
                            var message = "<?php echo e(trans('ui::app.datagrid.massaction.delete-category-product')); ?>";
                            if (type == 'delete') {
                                doAction(e, message);
                            } else {
                                $('form').attr('onsubmit', 'return confirm("'+message+'")');
                            }
                        } else {
                            var message = "<?php echo e(__('ui::app.datagrid.click_on_action')); ?>";
                            if (type == 'delete') {
                                doAction(e, message);
                            } else {
                                $('form').attr('onsubmit', 'return confirm("'+message+'")');
                            }
                        }
                    }
                });
            } else {
                $("input[type='checkbox']").attr('disabled', false);
            }
        }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin::layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\xokit\OneDrive\Documentos\Jarvis_Mind\Faculdade\OPE\packages\Webkul\Admin\src/resources/views/catalog/categories/index.blade.php ENDPATH**/ ?>