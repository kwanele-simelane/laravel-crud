<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        primary: "#f4cc2f",
                        secondary: "#245054",
                        accent: "#bfe7cb",
                        text_dark: "#656c74",
                        text_light: "#f3f2f2"
                    },
                    fontFamily: {
                        "poppins": ["Poppins", "sans-serif"]
                    }
                },
            },
        };
    </script>
    <?php echo $__env->yieldPushContent('css'); ?>
    <title>Marketplace - PayEasy Marketplace on ePayNet | Powered by Digimage</title>
</head>

<body class="mb-48 font-poppins">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <nav class="flex flex-wrap justify-between items-center my-4 mx-3 sm:mx-12 ">
        <a href="/" class="font-bold text-text_dark text-lg md:text-3xl">
            Marketplace
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <ul class="hidden sm:flex sm:space-x-6 mr-6 text-sm md:text-lg" id="navbar-default">
            <?php if(auth()->guard()->check()): ?>
                <li class="mb-2 md:mb-0">
                    <i class="fa-solid fa-user" style="margin-right: 10px"></i>
                    <span class="font-bold"><?php echo e(auth()->user()->name); ?></span>
                </li>
                <li class="mb-2 md:mb-0">
                    <a href="/listings/manage" class="hover:text-secondary">
                        <i class="fa-solid fa-gear"></i>
                        Manage
                    </a>
                </li>
                <li class="mb-2 md:mb-0">
                    <form action="/logout" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i>
                            Logout
                        </button>
                    </form>
                </li>
            <?php else: ?>
                <li class="mb-2 md:mb-0">
                    <a href="/register" class="hover:text-secondary">
                        <i class="fa-solid fa-user-plus"></i>
                        Create an Account
                    </a>
                </li>
                <li class="mb-2 md:mb-0">
                    <a href="/login" class="hover:text-secondary">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login
                    </a>
                </li>
            <?php endif; ?>
        </ul>

    </nav>
    <main>
        <?php echo e($slot); ?>

    </main>
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-secondary text-white h-20 mt-20 opacity-90 md:justify-center">
        <p class="ml-2 text-sm">&copy; <span id="year"></span>, Marketplace</p>

        <a href="/listings/create" class="rounded-sm absolute sm:top-1/3 right-2 sm:right-10 bg-black text-white py-2 px-5">Get listed</a>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script>
    let date = new Date();
    document.getElementById('year').innerHTML = date.getFullYear()
</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0"
    nonce="yW3NjAiQ"></script>

</html>
<?php /**PATH C:\Users\PC\Documents\dev\marketplace\resources\views/components/layout.blade.php ENDPATH**/ ?>