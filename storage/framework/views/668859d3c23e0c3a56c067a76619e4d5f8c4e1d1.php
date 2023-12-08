<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="text-text_dark my-5 sm:my-10 flex flex-col items-center justify-center gap-4 mx-4 md:mx-12">
        <img class="mt-7 w-full sm:w-1/3" src="<?php echo e(asset('images/404.svg')); ?>" alt="404 - not found">
        <div class="my-8 flex flex-col items-center">
            <p class="text-secondary text-ls text-center sm:text-lg">
                We could not find that resource
            </p>
            <a href="/" class="mt-6 bg-secondary rounded-sm text-text_light px-4 py-2 inline-block"> Go to Home</a>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\PC\Documents\dev\marketplace\resources\views/errors/404.blade.php ENDPATH**/ ?>