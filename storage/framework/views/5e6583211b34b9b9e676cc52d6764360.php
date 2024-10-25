<div class="flex justify-center">
    <div class="max-w-screen-sm w-full">
        <?php if(auth()->guard()->check()): ?>
        <form method="post" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <div class="flex justify-end p-4">
                <button
                        class="mt-2 text-sm text-gray-500 hover:text-gray-800"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                >ログアウト</button>
            </div>
        </form>
        <?php endif; ?>

        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH /var/www/html/resources/views/components/layout/single.blade.php ENDPATH**/ ?>