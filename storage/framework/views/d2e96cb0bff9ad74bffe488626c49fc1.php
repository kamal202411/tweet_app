<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'href' => '',
    'theme' => 'primary',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'href' => '',
    'theme' => 'primary',
]); ?>
<?php foreach (array_filter(([
    'href' => '',
    'theme' => 'primary',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
    if(!function_exists('getThemeClassForButtonA')){
      function getThemeClassForButtonA($theme) {
          return match ($theme) {
              'primary' => 'text-white bg-blue-500 hover:bg-blue-600 focus:ring-blue-500',
              'secondary' => 'text-white bg-red-500 hover:bg-red-600 focus:ring-red-500',
              default => '',
          };
        }
    }
?>
<a href="<?php echo e($href); ?>" class="
    inline-flex justify-center
    py-2 px-4
    border border-transparent
    shadow-sm
    text-sm
    font-medium
    rounded-md
    focus:outline-none focus:ring-2 focus:ring-offset-2 <?php echo e(getThemeClassForButtonA($theme)); ?>">
    <?php echo e($slot); ?>

</a><?php /**PATH /var/www/html/resources/views/components/element/button-a.blade.php ENDPATH**/ ?>