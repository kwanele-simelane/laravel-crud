<?php if(session()->has('message')): ?>
    <small x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class="fixed top-0 transform -translate-x-1/2 bg-primary text-white px-48 py-3 left-3/4 sm:left-1/2">
        <?php echo e(session('message')); ?>

    </small>
<?php endif; ?>
<?php /**PATH C:\Users\PC\Documents\dev\marketplace\resources\views/components/flash-message.blade.php ENDPATH**/ ?>