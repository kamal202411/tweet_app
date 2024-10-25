<?php $__env->startComponent('mail::message'); ?>

# 新しいユーザーが追加されました！

<?php echo e($toUser->name); ?>さんこんにちは！

<?php $__env->startComponent('mail::panel'); ?>
    新しく<?php echo e($newUser->name); ?>さんが参加しましたよ！
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => route('tweet.index')]); ?>
    つぶやきを見に行く
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/html/resources/views/email/new_user_introduction.blade.php ENDPATH**/ ?>