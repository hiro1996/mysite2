
<?php
    $title = 'ログイン画面';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="/top" method="POST">
            <?php echo csrf_field(); ?>
            <strong class="text-muted">ログインID</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="ログインID" type="text" name="loginid" value="<?php echo e(old('loginid')); ?>">
                </div> 
            </div> 
            <?php if($errors->has('loginid')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('loginid'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <strong class="text-muted">パスワード</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="パスワード" type="password" name="password">
                </div> 
            </div> 
            <?php if($errors->has('password')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">ログイン</button>
                <input type="hidden" name="login" value="on">
            </div> 
            <div class="form-group">
                <p class="text-center"><a href="/loginid_reset" class="btn">ログインIDをお忘れの方</a></p>
                <p class="text-center"><a href="/passwd_reset" class="btn">パスワードをお忘れの方</a></p>
                <p class="text-center"><a href="/register" class="btn">アカウントを作成</a></p>
            </div> 
        </form>

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
    <?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/auth/login.blade.php ENDPATH**/ ?>