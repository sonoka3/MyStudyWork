<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webサービス屋</title>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQwX9xI-qzy8tl1qFZRe4MIZ6VKgGU8Ro&callback=console.debug&libraries=maps,marker&v=beta"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <?php echo $__env->make('web_service.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo $__env->yieldContent('container'); ?>
    </div>
    <?php echo $__env->make('web_service.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/layouts/layouts.blade.php ENDPATH**/ ?>