
<?php
    $title = 'レビュー投稿する';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="/post/conf" method="POST">
            <?php echo csrf_field(); ?>
            <strong class="text-muted">ニックネーム</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="ニックネーム" type="text" name="nickname" value="<?php echo e($postdisplaydata['nickname']); ?>" readonly>
                </div> 
            </div> 
            <?php if($errors->has('nickname')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('nickname'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col">
                    <strong class="text-muted">レビュー作品名</strong>  
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input class="form-control" placeholder="レビュー作品名(直接入力すると予測表示します)" type="text" name="workname" value="<?php echo e($postdisplaydata['worktitle'] ?? ''); ?>" list="searchlist" autocomplete="on">
                            <datalist id="searchlist">
                                <?php for($i = 0;$i < count($workall);$i++): ?>
                                    <option value="<?php echo e($workall[$i]); ?>"></option>
                                <?php endfor; ?>
                            </datalist>
                        </div> 
                    </div>
                    <?php if($errors->has('workname')): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->get('workname'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="worktitle" class="col-sm-13 col-form-label">作品検索は<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchmodal">こちら</button></label>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> 

            <div class="modal fade" id="searchmodal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="searchmodalLabel" area-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="staticBackdropLabel">作品検索</h5>
                        </div>
                        <div class="modal-body">
                            <?php echo $__env->make('post.postworksearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>

            <strong class="text-muted">評価</strong>
            <div class="evaluation">
                <input id="star1" type="radio" name="poststar" value="10" />
                <label for="star1"><span class="text">最高</span>★</label>
                <input id="star2" type="radio" name="poststar" value="9" />
                <label for="star2"><span class="text"></span>★</label>
                <input id="star3" type="radio" name="poststar" value="8" />
                <label for="star3"><span class="text">良い</span>★</label>
                <input id="star4" type="radio" name="poststar" value="7" />
                <label for="star4"><span class="text"></span>★</label>
                <input id="star5" type="radio" name="poststar" value="6" />
                <label for="star5"><span class="text">普通+</span>★</label>
                <input id="star6" type="radio" name="poststar" value="5" />
                <label for="star6"><span class="text">普通-</span>★</label>
                <input id="star7" type="radio" name="poststar" value="4" />
                <label for="star7"><span class="text"></span>★</label>
                <input id="star8" type="radio" name="poststar" value="3" />
                <label for="star8"><span class="text">悪い</span>★</label>
                <input id="star9" type="radio" name="poststar" value="2" />
                <label for="star9"><span class="text"></span>★</label>
                <input id="star10" type="radio" name="poststar" value="1" />
                <label for="star10"><span class="text">最悪</span>★</label>
            </div>
            <?php if($errors->has('poststar')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('poststar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <strong class="text-muted">レビュー内容</strong>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <textarea class="form-control" name="postbody" rows="5" placeholder="レビュー内容を250文字以内で入力"></textarea>
                </div> 
                <p class="text-danger">※ネタバレになる内容は、お控えいただくようよろしくお願いします。</p>
            </div> 
            <?php if($errors->has('postbody')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->get('postbody'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">確認</button>
                </div>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <a class="btn btn-primary" href="/top" role="button">戻る</a>
                </div>
            </div>
        </form>

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/post/post.blade.php ENDPATH**/ ?>