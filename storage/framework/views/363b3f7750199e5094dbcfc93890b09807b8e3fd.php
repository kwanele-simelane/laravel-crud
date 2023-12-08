<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('partials._hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="text-text_dark my-5 sm:my-10 flex flex-col sm:flex-row gap-4 mx-4 md:mx-12">
        <div class="w-full xl:w-2/12 sm:w-2/12"></div>
        <div class="w-full xl:w-8/12 sm:w-8/12 text-center">
            <h2 class="text-center text-black-50 text-lg underline capitalize mb-4">how it works</h2>
            <p class="text-sm mx-2 sm:text-md">
                Marketplace connects individuals and companies seeking financial products with listed financial service
                providers. It is a must-see for individuals and companies seeking credit. Packed with credit providers
                willing to drive
                financial inclusion in Eswatini, Marketplace compliments PayEasy, a platform designed for source
                deduction
                of loan repayments. Both platforms provides access to credit at a competetitve level. Read more about <a
                    href="#" class="text-secondary underline hover:text-primary">PayEasy</a>
            </p>
        </div>
        <div class="w-full xl:w-2/12 sm:w-2/12"></div>
    </div>

    <?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="mx-4 md:mx-12">
        <h2 class="mt-4 md:mt-8 capitalize text-lg md:-2xl">financial services providers</h2>
        <hr class="h-px mb-8 bg-gray-50 border-0 dark:bg-gray-300">
    </div>

    <div class="flex flex-col sm:flex-row pb-4 overflow-y-scroll sm:overflow-hidden relative mx-4 sm:mx-12 gap-5">
        <main class="w-full h-screen overflow-y-scroll pr-2 mb-8 sm:mb-0">
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0">
                <style>
                    /* width */
                    ::-webkit-scrollbar {
                        width: 5px;
                    }

                    /* Track */
                    ::-webkit-scrollbar-track {
                        background: #f1f1f1;
                    }

                    /* Handle */
                    ::-webkit-scrollbar-thumb {
                        background: #c7c7c7;
                    }

                    /* Handle on hover */
                    ::-webkit-scrollbar-thumb:hover {
                        background: #e0e0e0;
                    }
                </style>
                
                <?php if (! (count($listings) == 0)): ?>
                    <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.listing-card','data' => ['listing' => $listing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('listing-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['listing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>No Listings Found</p>
                <?php endif; ?>
            </div>
        </main>
        <div class="w-full h-4/5 xl:w-4/12 sm:w-4/12 border border-gray-200 bg-gray-50 p-1 sm:p-4 rounded gap-3 overflow-y-scroll">
            <div class="fb-page custom mb-4" data-href="https://www.facebook.com/TheBlllboard" data-tabs="timeline"
                data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"
                data-hide-cover="true" data-show-facepile="false" data-hide-cta="true">
                <?php $__env->startPush('css'); ?>
                    <link rel="stylesheet" href="../../css/app.css">
                <?php $__env->stopPush(); ?>
                <blockquote cite="https://www.facebook.com/TheBlllboard" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/TheBlllboard">
                        The Billboard
                    </a>
                </blockquote>
            </div>

            <hr class="border border-gray-30 my-6">

            <?php if (! (count($adverts) == 0)): ?>
                <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.advert-card','data' => ['advert' => $advert]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('advert-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['advert' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advert)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>I want to advertise here</p> <br>
                <a href="/advert" class="bg-secondary text-white text-center py-1 px-8 rounded-sm hover:opacity-80">Create
                    a new advert</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="flex overflow-hidden relative mx-4 md:mx-12 gap-2 md:gap-5">
        <div class="mt-7 p-0 md:p-4 w-full xl:w-9/12 sm:w-9/12">
            <?php echo e($listings->links()); ?>

        </div>
        <div class="hidden w-full xl:w-3/12 sm:w-3/12"></div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\PC\Documents\dev\marketplace\resources\views/listings/index.blade.php ENDPATH**/ ?>