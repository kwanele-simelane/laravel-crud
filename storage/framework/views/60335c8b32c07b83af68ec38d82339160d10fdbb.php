<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['listing']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['listing']); ?>
<?php foreach (array_filter((['listing']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-30 bg-black transition ease-in-out delay-70 hover:-translate-x-1 hover:scale-55 duration-50']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-30 bg-black transition ease-in-out delay-70 hover:-translate-x-1 hover:scale-55 duration-50']); ?>
    <div class="flex truncate">

        <img class="hidden sm:w-48 mr-2 md:mr-6 md:block" id="image"
            src="<?php echo e($listing->logo ? asset('storage/' . $listing->logo) : asset('images/placeholder_img.png')); ?>"
            alt="" />

        <div class="p-4 md:py-2 w-full">
            <h3 class="text-md md:text-2xl whitespace-nowrap flex justify-between items-center">
                <a href="/listings/<?php echo e($listing->id); ?>"><?php echo e($listing->company); ?></a>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.listing-tags','data' => ['categoriesCsv' => $listing->category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('listing-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categoriesCsv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing->category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </h3>
            <div class="text-xs mb-2 md:mb-4">
                <i class="fa-solid fa-location-dot"></i> <?php echo e($listing->location); ?>

            </div>
            <?php
                $productsObject = $listing->products->slice(0, 2);
            ?>
            <?php $__currentLoopData = $productsObject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-2xs mb-1">
                    <i class="fa-solid fa-check briefcase mr-2"></i> <?php echo e($product->loan_name); ?>,
                    <?php echo e($product->loan_type); ?> @
                    <?php echo e($product->interest_rate); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="mt-4">
                <a href="listings/<?php echo e($listing->id); ?>/contact"
                    class="bg-secondary text-xs text-white text-center py-1 px-4 md:px-8 rounded-sm hover:opacity-80">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\PC\Documents\dev\marketplace\resources\views/components/listing-card.blade.php ENDPATH**/ ?>