<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <div class="shrink-0 flex items-center">
                    <a href="<?php echo e(route('dashboard')); ?>">
                        <img src="/path/to/logo.png" class="block h-9 w-auto fill-current text-gray-800" alt="Logo" />
                    </a>
                </div>


                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 focus:outline-none focus:border-indigo-700 transition">
                        Dashboard
                    </a>
                </div>
            </div>

            

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <div>
                        <button @click="open = ! open" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div><?php echo e(Auth::user()->name); ?></div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                            <a href="<?php echo e(route('profile.edit')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>



                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(route('logout')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="<?php echo e(route('dashboard')); ?>" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:bg-indigo-100 focus:border-indigo-700 transition">
                Dashboard
            </a>
        </div>


        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800"><?php echo e(Auth::user()->name); ?></div>
                <div class="font-medium text-sm text-gray-500"><?php echo e(Auth::user()->email); ?></div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="<?php echo e(route('profile.edit')); ?>" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Profile</a>


                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo e(route('logout')); ?>" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH D:\xampp\htdocs\applicant-management\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>