<!DOCTYPE html>
<html lang="en" class="theme-<?php echo e(config('web-tinker.theme')); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Web Tinker</title>

    <!-- Style sheets-->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,600" rel="stylesheet">
    <link href='<?php echo e(asset(mix('app.css', 'vendor/web-tinker'))); ?>' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="web-tinker" v-cloak>
    <tinker path="<?php echo e($path); ?>"></tinker>
</div>

<script src="<?php echo e(asset(mix('app.js', 'vendor/web-tinker'))); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/html/vendor/spatie/laravel-web-tinker/src/../resources/views/web-tinker.blade.php ENDPATH**/ ?>