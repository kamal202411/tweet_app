<?php if(auth()->guard()->check()): ?>
<div class="p-4">
    <form action="<?php echo e(route('tweet.create')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mt-1">
            <textarea name="tweet" rows="3" class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2" placeholder="つぶやきを入力">
</textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140文字まで
        </p>
        <?php if (isset($component)) { $__componentOriginalf63d98278ba4a7c21bdb13fbf890b635 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf63d98278ba4a7c21bdb13fbf890b635 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tweet.form.images','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tweet.form.images'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf63d98278ba4a7c21bdb13fbf890b635)): ?>
<?php $attributes = $__attributesOriginalf63d98278ba4a7c21bdb13fbf890b635; ?>
<?php unset($__attributesOriginalf63d98278ba4a7c21bdb13fbf890b635); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf63d98278ba4a7c21bdb13fbf890b635)): ?>
<?php $component = $__componentOriginalf63d98278ba4a7c21bdb13fbf890b635; ?>
<?php unset($__componentOriginalf63d98278ba4a7c21bdb13fbf890b635); ?>
<?php endif; ?>

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
                つぶやく
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
</div>
<?php endif; ?>
<?php if(auth()->guard()->guest()): ?>
<div class="flex flex-wrap justify-center">
    <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
        <?php if (isset($component)) { $__componentOriginal60456859cef7a47d98aaf0c98c7c43e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.element.button-a','data' => ['href' => route('login')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('element.button-a'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('login'))]); ?>ログイン <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7)): ?>
<?php $attributes = $__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7; ?>
<?php unset($__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60456859cef7a47d98aaf0c98c7c43e7)): ?>
<?php $component = $__componentOriginal60456859cef7a47d98aaf0c98c7c43e7; ?>
<?php unset($__componentOriginal60456859cef7a47d98aaf0c98c7c43e7); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal60456859cef7a47d98aaf0c98c7c43e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.element.button-a','data' => ['href' => route('register'),'theme' => 'secondary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('element.button-a'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('register')),'theme' => 'secondary']); ?>会員登録 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7)): ?>
<?php $attributes = $__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7; ?>
<?php unset($__attributesOriginal60456859cef7a47d98aaf0c98c7c43e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60456859cef7a47d98aaf0c98c7c43e7)): ?>
<?php $component = $__componentOriginal60456859cef7a47d98aaf0c98c7c43e7; ?>
<?php unset($__componentOriginal60456859cef7a47d98aaf0c98c7c43e7); ?>
<?php endif; ?>
    </div>
</div>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/components/tweet/form/post.blade.php ENDPATH**/ ?>