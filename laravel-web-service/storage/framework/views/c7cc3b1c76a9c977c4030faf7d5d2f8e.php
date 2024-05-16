

<?php $__env->startSection('nav'); ?>
<nav class="nav">
    <div class="nav_login">
        <a href="<?php echo e(route('login')); ?>" class="nav_login_btn btn">ログイン画面</a>
    </div>
    <button id="js_hamburger" type="button" class="nav_hamburger sp_only" aria-controls="navigation" aria-expanded="false" aria-label="メニューを開く">
        <span class="nav_hamburger_line"></span>
        <span class="nav_hamburger_text"></span>
    </button>
    <div class="js_nav_area nav_list">
        <ul>
            <li class="nav_item"><a href="<?php echo e(route('web_service')); ?>/#service" class="js_nav_link nav_link">サービス一覧</a></li>
            <li class="nav_item"><a href="<?php echo e(route('web_service')); ?>/#contact" class="js_nav_link nav_link">お問合せ</a></li>
        </ul>
        <div id="js_focus_trap" tabindex="0"></div>
    </div>
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
        <div class="table_wrap">
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
                        <td class="text_ac">¥<?php echo e(number_format($web_service->price)); ?> <?php echo e($web_service->price_mark); ?></td>
                        <td class="text_ac"><img src="<?php echo e(Storage::url($web_service->file_path)); ?>" alt=""></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="contact" class="top_contact">
    <div class="top_contact_inner">
        <h2 class="top_contact_title title_page">お問合せ</h2>
        <form action="<?php echo e(route('web_service')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <table class="top_contact_table">
                <tr>
                    <th>氏名（必須）</th>
                    <td>
                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" require>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス（必須）</th>
                    <td><input type="text" name="email" value="<?php echo e(old('email')); ?>" require>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                </tr>
                <tr>
                    <th>アドレス再入力（必須）</th>
                    <td><input type="text" name="email_chk" value="<?php echo e(old('email_chk')); ?>" require>
                        <?php $__errorArgs = ['email_chk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                </tr>
                <tr>
                    <th>お問合せ分類（必須）</th>
                    <td>
                        <select name="category" require>
                            <option value="">適切な種類を選択</option>
                            <option value="サービスについて" <?php echo e(old('category') == 'サービスについて' ? 'selected' : ''); ?>>サービスについて</option>
                            <option value="商品について" <?php echo e(old('category') == '商品について' ? 'selected' : ''); ?>>商品について</option>
                            <option value="その他" <?php echo e(old('category') == 'その他' ? 'selected' : ''); ?>>その他</option>
                        </select>
                        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <th>お問合せ内容</th>
                    <td><textarea name="msg"><?php echo e(old('msg')); ?></textarea></td>
                </tr>
            </table>
            <div class="top_contact_btn">
                <button type="submit" class="top_contact_btn_submit btn">送信</button>
            </div>
        </form>
    </div>
</section>
<div class="top_map">
<gmp-map center="35.66114044189453,139.70657348632812" zoom="14" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="35.66114044189453,139.70657348632812" title="My location"></gmp-advanced-marker>
    </gmp-map>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/hamburger.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web_service.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wealthon-training\web-service\Laravel\resources\views/web_service/index.blade.php ENDPATH**/ ?>