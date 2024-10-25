<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'TOP | つぶやきアプリ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'TOP | つぶやきアプリ']); ?>
    <?php if (isset($component)) { $__componentOriginal4c6e36e85cea878381de7adba410cf0e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c6e36e85cea878381de7adba410cf0e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.single','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.single'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            つぶやきアプリ
        </h2>
        <?php if (isset($component)) { $__componentOriginalcec4f567f5213004a717ae39f4369487 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcec4f567f5213004a717ae39f4369487 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tweet.form.post','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tweet.form.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcec4f567f5213004a717ae39f4369487)): ?>
<?php $attributes = $__attributesOriginalcec4f567f5213004a717ae39f4369487; ?>
<?php unset($__attributesOriginalcec4f567f5213004a717ae39f4369487); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcec4f567f5213004a717ae39f4369487)): ?>
<?php $component = $__componentOriginalcec4f567f5213004a717ae39f4369487; ?>
<?php unset($__componentOriginalcec4f567f5213004a717ae39f4369487); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal528749a11918c51e01360f863f05497d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal528749a11918c51e01360f863f05497d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tweet.list','data' => ['tweets' => $tweets]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tweet.list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tweets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tweets)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal528749a11918c51e01360f863f05497d)): ?>
<?php $attributes = $__attributesOriginal528749a11918c51e01360f863f05497d; ?>
<?php unset($__attributesOriginal528749a11918c51e01360f863f05497d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal528749a11918c51e01360f863f05497d)): ?>
<?php $component = $__componentOriginal528749a11918c51e01360f863f05497d; ?>
<?php unset($__componentOriginal528749a11918c51e01360f863f05497d); ?>
<?php endif; ?>
        
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c6e36e85cea878381de7adba410cf0e)): ?>
<?php $attributes = $__attributesOriginal4c6e36e85cea878381de7adba410cf0e; ?>
<?php unset($__attributesOriginal4c6e36e85cea878381de7adba410cf0e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c6e36e85cea878381de7adba410cf0e)): ?>
<?php $component = $__componentOriginal4c6e36e85cea878381de7adba410cf0e; ?>
<?php unset($__componentOriginal4c6e36e85cea878381de7adba410cf0e); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/tweet/index.blade.php ENDPATH**/ ?>