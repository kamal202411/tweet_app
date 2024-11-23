<?php $__env->startComponent('mail::message'); ?>

# 昨日は<?php echo e($count); ?>件のつぶやきが追加されました！

<?php echo e($toUser->name); ?>さんこんにちは！

昨日は<?php echo e($count); ?>件のつぶやきが追加されましたよ！最新のつぶやきを見に行きましょう。

<?php $__env->startComponent('mail::button', ['url' => route('tweet.index')]); ?>
    つぶやきを見に行く
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/resources/views/email/daily_tweet_count.blade.php ENDPATH**/ ?>