<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'images' => []
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'images' => []
]); ?>
<?php foreach (array_filter(([
    'images' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(count($images) > 0): ?>
<div x-data="{}" class="px-2">
    <div class="flex justify-center -mx-2">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="w-1/6 px-2 mt-5">
            <div class="bg-gray-400">
                <a @click="$dispatch('img-modal', {  imgModalSrc: '<?php echo e(asset('storage/images/' . $image->name)); ?>' })" class="cursor-pointer">
                    <img alt="<?php echo e($image->name); ?>" class="object-fit w-full" src="<?php echo e(asset('storage/images/' . $image->name)); ?>">
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('440f51bf-950a-4b20-9040-fbe862c6d6c3')): $__env->markAsRenderedOnce('440f51bf-950a-4b20-9040-fbe862c6d6c3'); ?>
    <div x-data="{ imgModal : false, imgModalSrc : '' }">
        <div
            @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc;"
            x-cloak
            x-show="imgModal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform"
            x-transition:enter-end="opacity-100 transform"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform"
            x-transition:leave-end="opacity-0 transform"
            x-on:click.away="imgModalSrc = ''"
            class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
            <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                <div class="z-50">
                    <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                        <svg class="fill-current text-white h-5 w-5" xmlns="<http://www.w3.org/2000/svg>" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="p-2">
                    <img
                        class="object-contain h-1/2-screen"
                        :alt="imgModalSrc"
                        :src="imgModalSrc">
                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('css'); ?>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <?php $__env->stopPush(); ?>
<?php endif; ?>









<?php /**PATH /var/www/html/resources/views/components/tweet/images.blade.php ENDPATH**/ ?>