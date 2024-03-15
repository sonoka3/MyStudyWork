

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
<section id="service" class="top_service">
    <h2 class="title_page">サービス一覧</h2>
    <div class="top_service_inner">
        <table class="table_lineup table">
            <thead>
                <tr>
                    <th>ラインナップ</th>
                    <th>サービス内容</th>
                    <th>金額（税込）</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $web_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $web_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text_ac"><?php echo e($web_service->lineup); ?></td>
                    <td><?php echo e($web_service->description); ?></td>
                    <td class="text_ac"><?php echo e($web_service->price); ?></td>
                    <td><img src="<?php echo e($web_service->file_path); ?>"></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</section>
<section id="contact" class="top_contact">
    <div class="top_contact_inner">
        <h2 class="top_contact_title title_page">お問合せ</h2>
        <form action="">
            <table class="top_contact_table">
                <tr>
                    <th>氏名（必須）</th>
                    <td><input type="text" name="name" require></td>
                </tr>
                <tr>
                    <th>メールアドレス（必須）</th>
                    <td><input type="text" name="email" require></td>
                </tr>
                <tr>
                    <th>アドレス再入力（必須）</th>
                    <td><input type="text" name="email_chk" require></td>
                </tr>
                <tr>
                    <th>お問合せ分類（必須）</th>
                    <td>
                        <select name="category" require>
                            <option value="">適切な種類を選択</option>
                            <option value="サービスについて">サービスについて</option>
                            <option value="商品について">商品について</option>
                            <option value="その他">その他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>お問合せ内容</th>
                    <td><textarea name="msg"></textarea></td>
                </tr>
            </table>
            <div class="top_contact_btn">
                <button type="submit" class="top_contact_btn_submit btn">送信</button>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/hamburger.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\laravel\resources\views/web_service/index.blade.php ENDPATH**/ ?>