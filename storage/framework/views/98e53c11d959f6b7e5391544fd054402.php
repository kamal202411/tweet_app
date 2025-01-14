<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(mix('/js/app.js')); ?>" async defer></script>
    <title><?php echo e($title ?? 'つぶやきアプリ'); ?></title>

    <?php echo $__env->yieldPushContent('css'); ?>

</head>
<body class="bg-gray-50">
    <?php echo e($slot); ?>

</body>
</html><?php /**PATH /var/www/html/resources/views/components/layout.blade.php ENDPATH**/ ?>