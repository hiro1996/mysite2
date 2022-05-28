<div class="workindetail-reviewcontainer">
    <article class="card-body">
        <?php if(!empty($rankingtitle)): ?>
            <div class="d-flex justify-content-around">
                <span><?php echo e($rankingtitleleft); ?></span>
                <span><?php echo e($rankingtitleright); ?></span>
                <form name="postbutton" action="/post" method="GET">
                    <a class="btn btn-primary" href="/post" role="button" onClick='document.postbutton.submit();return false;'><?php echo e($rankingtitle); ?></a>
                    <input type="hidden" name="worktitle" value="<?php echo e($workdata['title']); ?>">
                </form>
            </div>
        <?php endif; ?>
        <br><?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/block/workindetail_reviewtitle.blade.php ENDPATH**/ ?>