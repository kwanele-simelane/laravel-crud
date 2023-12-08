<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <a href="/" class="inline-block text-black mx-4 md:mx-12 mt-2 sm:mt-12 mb-4 py-1 px-2 bg-text_light"><i
            class="fa-solid fa-arrow-left"></i> Go back
    </a>
    <div class="mx-4 md:mx-12">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-30 bg-white px-2 sm:px-8 py-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-30 bg-white px-2 sm:px-8 py-4']); ?>
            <div class="flex flex-col justify-center">

                <div class="flex-col flex sm:flex-row items-end justify-between">
                    <div class="flex-col flex sm:flex-row items-end justify-between mb-3">
                        <img class="w-48 mb-4 sm:mr-6 rounded"
                            src="<?php echo e($listing->logo ? asset('storage/' . $listing->logo) : asset('images/placeholder_img.png')); ?>"
                            alt="" />
                        <div>
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
                            <h3 class="text-lgmd sm:text-3xl font-semibold mt-3"><?php echo e($listing->company); ?></h3>
                        </div>
                    </div>

                    <div class="text-sm sm:text-lg my-2 sm:my-4">
                        <i class="fa-solid fa-location-dot"></i> <?php echo e($listing->location); ?>

                    </div>
                </div>

                <div class="border border-gray-100 w-full mb-6"></div>

                <div class="flex-col flex sm:flex-row justify-between gap-8">
                    <div class="w-full xl:w-6/12 mb-4 sm:mb-2">
                        <h3 class="text-xl font-bold mb-2">
                            Products
                        </h3>
                        <div class="text-lg space-y-6">
                            <?php $__currentLoopData = $listing->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="text-sm">
                                    <strong class="text-secondary"><?php echo e($product->loan_name); ?></strong><br>
                                    <span>Amount Range: </span><?php echo e($product->amount_range); ?> <br>
                                    <?php echo e($product->loan_type); ?> <br>
                                    <span>Interest Rate: </span><strong
                                        class="text-secondary"><?php echo e($product->interest_rate); ?></strong>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="w-full xl:w-3/12">
                        <h3 class="text-lg font-bold mb-2">
                            About <?php echo e($listing->company); ?>

                        </h3>
                        <div class="text-lg">
                            <p>
                                <?php echo e($listing->description); ?>

                            </p>
                        </div>
                    </div>
                    <div class="w-full xl:w-3/12"></div>
                </div>
                <div class="border border-gray-100 w-full mt-6"></div>

                <div class="flex items-end justify-start">
                    <a href="/listings/<?php echo e($listing->id); ?>/contact"
                        class="block bg-secondary text-sm sm:text-lg text-white mt-6 p-2 mr-4 rounded hover:opacity-80">
                        <i class="fa-solid fa-paper-plane"></i>
                        Apply Now
                    </a>

                    <a href="<?php echo e($listing->website); ?>" target="_blank"
                        class="block bg-secondary text-sm sm:text-lg text-white mt-6 p-2 mr-4 rounded hover:opacity-80">
                        <i class="fa-solid fa-globe"></i>
                        Visit Website
                    </a>
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'mt-4 p-2 flex space-x-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4 p-2 flex space-x-6']); ?>
            <a href="/listings/<?php echo e($listing->id); ?>/edit">
                <i class="fa-solid fa-user-check mr-2"></i>
                <?php if(auth()->guard()->check()): ?>
                    Edit
                <?php else: ?>
                    Claim
                <?php endif; ?>
                this listing
            </a>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\PC\Documents\dev\marketplace\resources\views/listings/show.blade.php ENDPATH**/ ?>