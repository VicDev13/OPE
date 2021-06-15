<div class="control-group">
    <label><?php echo e(__('velocity::app.admin.general.locale_logo')); ?></label>
    <?php if(isset($locale) && $locale->locale_image): ?>
        <image-wrapper
            :multiple="false"
            input-name="locale_image"
            :images='"<?php echo e(Storage:: url($locale->locale_image)); ?>"'
            :button-label="'<?php echo e(__('admin::app.catalog.products.add-image-btn-title')); ?>'">
        </image-wrapper>
    <?php else: ?>
        <image-wrapper
            :multiple="false"
            input-name="locale_image"
            :button-label="'<?php echo e(__('admin::app.catalog.products.add-image-btn-title')); ?>'">
        </image-wrapper>
    <?php endif; ?>
</div><?php /**PATH C:\Users\xokit\OneDrive\Documentos\Jarvis_Mind\Faculdade\OPE\packages\Webkul\Velocity\src/resources/views/admin/settings/locales/locale-logo.blade.php ENDPATH**/ ?>