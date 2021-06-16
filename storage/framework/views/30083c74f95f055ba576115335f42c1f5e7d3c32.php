<?php $__env->startComponent('shop::emails.layouts.master'); ?>

    <div>
        <div style="text-align: center;">
            <a href="<?php echo e(config('app.url')); ?>">
                <?php echo $__env->make('shop::emails.layouts.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </a>
        </div>


        <div style="padding: 30px;">
            <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">
                <p style="font-weight: bold;font-size: 20px;color: #242424;line-height: 24px;">
                    <?php echo e(__('shop::app.mail.customer.registration.dear', ['customer_name' => $data['first_name']. ' ' .$data['last_name']])); ?>,
                </p>

                <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                    <?php echo __('shop::app.mail.customer.registration.greeting'); ?>

                </p>
            </div>

            <div style="font-size: 16px;color: #5E5E5E;line-height: 30px;margin-bottom: 20px !important;">
                <?php echo e(__('shop::app.mail.customer.registration.summary')); ?>

            </div>

            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                <?php echo e(__('shop::app.mail.customer.registration.thanks')); ?>

            </p>
        </div>
    </div>

<?php if (isset($__componentOriginalf5b02bb53c7889070aa0fc977e1d9209cc73d48d)): ?>
<?php $component = $__componentOriginalf5b02bb53c7889070aa0fc977e1d9209cc73d48d; ?>
<?php unset($__componentOriginalf5b02bb53c7889070aa0fc977e1d9209cc73d48d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH C:\Users\xokit\OneDrive\Documentos\Jarvis_Mind\Faculdade\OPE\packages\Webkul\Shop\src/resources/views/emails/customer/registration.blade.php ENDPATH**/ ?>