<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'tweet'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'tweet'
]); ?>
<?php foreach (array_filter(([
    'tweet'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="p-4">
    <form action="<?php echo e(route('tweet.update.put', ['tweetId' => $tweet->id])); ?>" method="post">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <?php if(session('feedback.success')): ?>
        <?php if (isset($component)) { $__componentOriginalf192f9e16cd34f43530f7484bbd899b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf192f9e16cd34f43530f7484bbd899b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert.success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert.success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(session('feedback.success')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf192f9e16cd34f43530f7484bbd899b4)): ?>
<?php $attributes = $__attributesOriginalf192f9e16cd34f43530f7484bbd899b4; ?>
<?php unset($__attributesOriginalf192f9e16cd34f43530f7484bbd899b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf192f9e16cd34f43530f7484bbd899b4)): ?>
<?php $component = $__componentOriginalf192f9e16cd34f43530f7484bbd899b4; ?>
<?php unset($__componentOriginalf192f9e16cd34f43530f7484bbd899b4); ?>
<?php endif; ?>
        <?php endif; ?>
        <div class="mt-1">
            <textarea
                name="tweet"
                rows="3"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="つぶやきを入力"><?php echo e($tweet->content); ?></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140文字まで
        </p>

        <?php $__errorArgs = ['tweet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php if (isset($component)) { $__componentOriginal62ad3d909bae80241e25dfdeac681bdc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62ad3d909bae80241e25dfdeac681bdc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($message); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62ad3d909bae80241e25dfdeac681bdc)): ?>
<?php $attributes = $__attributesOriginal62ad3d909bae80241e25dfdeac681bdc; ?>
<?php unset($__attributesOriginal62ad3d909bae80241e25dfdeac681bdc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62ad3d909bae80241e25dfdeac681bdc)): ?>
<?php $component = $__componentOriginal62ad3d909bae80241e25dfdeac681bdc; ?>
<?php unset($__componentOriginal62ad3d909bae80241e25dfdeac681bdc); ?>
<?php endif; ?>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="flex flex-wrap justify-end">
            <?php if (isset($component)) { $__componentOriginalc015d685ec6a0e22f126db2c5b3ddf59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc015d685ec6a0e22f126db2c5b3ddf59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.element.button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('element.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                編集
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc015d685ec6a0e22f126db2c5b3ddf59)): ?>
<?php $attributes = $__attributesOriginalc015d685ec6a0e22f126db2c5b3ddf59; ?>
<?php unset($__attributesOriginalc015d685ec6a0e22f126db2c5b3ddf59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc015d685ec6a0e22f126db2c5b3ddf59)): ?>
<?php $component = $__componentOriginalc015d685ec6a0e22f126db2c5b3ddf59; ?>
<?php unset($__componentOriginalc015d685ec6a0e22f126db2c5b3ddf59); ?>
<?php endif; ?>
        </div>
    </form>
</div><?php /**PATH /var/www/html/resources/views/components/tweet/form/put.blade.php ENDPATH**/ ?>