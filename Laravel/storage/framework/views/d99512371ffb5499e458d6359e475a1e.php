

<?php $__env->startSection('nav'); ?>
<nav class="nav">
    <div class="nav_login">
        <a href="<?php echo e(route('login')); ?>" class="nav_login_btn btn">ログイン画面</a>
    </div>
    <button id="js_hamburger" type="button" class="nav_hamburger sp_only" aria-controls="navigation" aria-expanded="false" aria-label="メニューを開く">
        <span class="nav_hamburger_line"></span>
        <span class="nav_hamburger_text"></span>
    </button>
    <ul class="js_nav_area nav_list">
        <li class="nav_item"><a href="<?php echo e(route('web_service')); ?>/#service" class="nav_link">サービス一覧</a></li>
        <li class="nav_item"><a href="<?php echo e(route('web_service')); ?>/#contact" class="nav_link">お問い合わせ</a></li>
    </ul>
</nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
<div class="top_kv">
    <img src="<?php echo e(asset('img/top_kv.png')); ?>" alt="">
    <div class="top_kv_read">
        <p>テクノロジーを身近に</p>
    </div>
</div>
<section id="contact" class="top_contact">
    <div class="top_contact_inner">
        <h2 class="top_contact_title title_page">お問合せ</h2>
        <form action="<?php echo e(route('send')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <table class="top_contact_table">
                <tr>
                    <th>氏名（必須）</th>
                    <td><?php echo e($data['name']); ?></td>
                </tr>
                <tr>
                    <th>メールアドレス（必須）</th>
                    <td><?php echo e($data['email']); ?></td>
                </tr>
                <tr>
                    <th>アドレス再入力（必須）</th>
                    <td><?php echo e($data['email_chk']); ?></td>
                </tr>
                <tr>
                    <th>お問合せ分類（必須）</th>
                    <td><?php echo e($data['category']); ?></td>
                </tr>
                <tr>
                    <th>お問合せ内容</th>
                    <td><?php echo e($data['msg']); ?></td>
                </tr>
            </table>
            <div class="top_contact_btn">
                <button type="submit" class="top_contact_btn_submit btn">送信</button>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/confirm.blade.php ENDPATH**/ ?>