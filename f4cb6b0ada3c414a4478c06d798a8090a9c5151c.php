<?php
    $title = 'ワンタイムパスワード入力';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="/admincontentstop" method="POST">
            <?php echo csrf_field(); ?>
            <strong class="text-muted">QRコード</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend" style="text-align: center">
                        <img src="<?php echo e($QR_img); ?>">
                    </div>
                </div> 
            </div> 
            <strong class="text-muted">ワンタイムパスワード</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="ワンタイムパスワード" type="text" name="onetimepass">
                </div> 
            </div> 
            <?php if($errors->has('onetimepass')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('onetimepass'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="panel panel-info">
                <div class="panel-header with-border">
                    <h3 class="panel-title">シークレットキー</h3>
                </div>
                <div class="panel-body text-center">
                    <div>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input id="copy" type="text" class="form-control" value="<?php echo e($data['google2fa_secret']); ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">ログイン</button>
                <input type="hidden" name="onepass" value="on">
                <input type="hidden" name="accountid" value="<?php echo e($accountid); ?>">
            </div> 
            <div class="form-group">
                <div class="text-center">
                    <a class="btn btn-primary" href="/login" role="button">戻る</a>
                </div>
            </div>
        </form>
    
    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/admin/adminonetimepass.blade.php ENDPATH**/ ?>