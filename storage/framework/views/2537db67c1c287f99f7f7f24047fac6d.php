<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => '編集 | つぶやきアプリ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '編集 | つぶやきアプリ']); ?>
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
        <?php
            $breadcrumbs = [
                ['href' => route('tweet.index'), 'label' => 'TOP'],
                ['href' => '#', 'label' => '編集']
            ];
        ?>
        <?php if (isset($component)) { $__componentOriginalb8801b3aad18f5d5c343e5a771df10b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb8801b3aad18f5d5c343e5a771df10b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.element.breadcrumbs','data' => ['breadcrumbs' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('element.breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['breadcrumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb8801b3aad18f5d5c343e5a771df10b3)): ?>
<?php $attributes = $__attributesOriginalb8801b3aad18f5d5c343e5a771df10b3; ?>
<?php unset($__attributesOriginalb8801b3aad18f5d5c343e5a771df10b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb8801b3aad18f5d5c343e5a771df10b3)): ?>
<?php $component = $__componentOriginalb8801b3aad18f5d5c343e5a771df10b3; ?>
<?php unset($__componentOriginalb8801b3aad18f5d5c343e5a771df10b3); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal7c23d05d588ebcf5f237d4061cecf8be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c23d05d588ebcf5f237d4061cecf8be = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tweet.form.put','data' => ['tweet' => $tweet]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tweet.form.put'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tweet' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tweet)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c23d05d588ebcf5f237d4061cecf8be)): ?>
<?php $attributes = $__attributesOriginal7c23d05d588ebcf5f237d4061cecf8be; ?>
<?php unset($__attributesOriginal7c23d05d588ebcf5f237d4061cecf8be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c23d05d588ebcf5f237d4061cecf8be)): ?>
<?php $component = $__componentOriginal7c23d05d588ebcf5f237d4061cecf8be; ?>
<?php unset($__componentOriginal7c23d05d588ebcf5f237d4061cecf8be); ?>
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
<?php endif; ?><?php /**PATH /var/www/html/resources/views/tweet/update.blade.php ENDPATH**/ ?>