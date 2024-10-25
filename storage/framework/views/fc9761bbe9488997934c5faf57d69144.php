<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'tweets' => []
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'tweets' => []
]); ?>
<?php foreach (array_filter(([
    'tweets' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
    <ul>
        <?php $__currentLoopData = $tweets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
            <div>
                <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2"><?php echo e($tweet->user->name); ?></span>
                <p class="text-gray-600"><?php echo nl2br(e($tweet->content)); ?></p>
                <?php if (isset($component)) { $__componentOriginal78123375339104e417ace1e933534aef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal78123375339104e417ace1e933534aef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tweet.images','data' => ['images' => $tweet->images]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tweet.images'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tweet->images)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal78123375339104e417ace1e933534aef)): ?>
<?php $attributes = $__attributesOriginal78123375339104e417ace1e933534aef; ?>
<?php unset($__attributesOriginal78123375339104e417ace1e933534aef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal78123375339104e417ace1e933534aef)): ?>
<?php $component = $__componentOriginal78123375339104e417ace1e933534aef; ?>
<?php unset($__componentOriginal78123375339104e417ace1e933534aef); ?>
<?php endif; ?>
            </div>
            <div>
                <?php if (isset($component)) { $__componentOriginalc2f0035118a4cad167fe4cb8188d7d31 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2f0035118a4cad167fe4cb8188d7d31 = $attributes; } ?>
<?php $component = App\View\Components\Tweet\Options::resolve(['tweetId' => $tweet->id,'userId' => $tweet->user_id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tweet.options'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Tweet\Options::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2f0035118a4cad167fe4cb8188d7d31)): ?>
<?php $attributes = $__attributesOriginalc2f0035118a4cad167fe4cb8188d7d31; ?>
<?php unset($__attributesOriginalc2f0035118a4cad167fe4cb8188d7d31); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2f0035118a4cad167fe4cb8188d7d31)): ?>
<?php $component = $__componentOriginalc2f0035118a4cad167fe4cb8188d7d31; ?>
<?php unset($__componentOriginalc2f0035118a4cad167fe4cb8188d7d31); ?>
<?php endif; ?>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php /**PATH /var/www/html/resources/views/components/tweet/list.blade.php ENDPATH**/ ?>