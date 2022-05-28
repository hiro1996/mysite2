<?php
    $title = '作品閲覧履歴';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">写真</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">閲覧日</th>
                </tr>
            </thead>
            <?php for($i = 0;$i < count($browsehistorydatas['img']);$i++): ?>
                <tbody>
                    <tr>
                        <td><img src="<?php echo e($browsehistorydatas['img'][$i]); ?>" width="100" height="100"></td>
                        <td><?php echo e($browsehistorydatas['title'][$i]); ?></td>
                        <td><?php echo e($browsehistorydatas['historydate'][$i]); ?></td>
                    </tr>
                </tbody>
            <?php endfor; ?>
        </table>

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/work/workhistory.blade.php ENDPATH**/ ?>