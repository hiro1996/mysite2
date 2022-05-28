<?php
    $title = 'ジャンル投票';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="/mypage" method="POST">
            <h4>あなたの思うこの作品のカテゴリーを選んで下さい</h4>
            <div class="row">
                <?php for($i = 1;$i <= count($category[1]);$i++): ?>
                    <div class="col">
                        <?php $__currentLoopData = $category[1][$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="genrepost-word">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="<?php echo e($cate); ?>" name="genre[]">
                                    <label class="form-check-label" for="<?php echo e($cate); ?>"><?php echo e($cate); ?></label>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endfor; ?>
            </div>

            <h4>あなたの思うこの作品のイメージを選んで下さい</h4>
            <div class="row">
                <?php for($i = 1;$i <= count($category[2]);$i++): ?>
                    <div class="col">
                        <?php $__currentLoopData = $category[2][$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="genrepost-word">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="<?php echo e($cate); ?>" name="genre[]">
                                    <label class="form-check-label" for="<?php echo e($cate); ?>"><?php echo e($cate); ?></label>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">投票</button>
                </div> 
            </div> 
            <div class="form-group">
                <div class="text-center">
                    <a class="btn btn-primary" href="/mypage" role="button">戻る</a>
                </div>
            </div>
            </div>
        </form>

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/work/workgenrepost.blade.php ENDPATH**/ ?>