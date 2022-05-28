<?php
    $title = '個人属性変更';
?>

<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('block.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="/attributecomplete" method="POST">
            <?php echo csrf_field(); ?>
            <?php for($i = 1;$i <= count($attributedata["attributes"]["q_body"]);$i++): ?> 
                <h4><?php echo e($attributedata["attributes"]["q_body"][$i]); ?></h4>
                <div class="attribute-word">
                    <?php for($j = 0;$j < count($attributedata["attributes"]["q_attribute"][$i]);$j++): ?>
                        <div class="form-check form-check-inline">
                            <?php if($attributedata["attributes"]["type_id"][$i] == 'text'): ?>
                                <input type="<?php echo e($attributedata['attributes']['type_id'][$i]); ?>" id="<?php echo e($attributedata['attributes']['attr_id'][$i][$j]); ?>" name="<?php echo e($attributedata['attributes']['name_id'][$i]); ?>" value="<?php echo e($attributedata['attrtext'][$i]); ?>">
                            <?php else: ?>
                                <?php if(in_array($attributedata["attributes"]["attr_id"][$i][$j],$attributedata["attrid"])): ?>
                                    <input class="form-check-input" type="<?php echo e($attributedata['attributes']['type_id'][$i]); ?>" id="<?php echo e($attributedata['attributes']['attr_id'][$i][$j]); ?>" name="<?php echo e($attributedata['attributes']['name_id'][$i]); ?>" value="<?php echo e($attributedata['attributes']['attr_id'][$i][$j]); ?>" checked>
                                    <label class="form-check-label" for="<?php echo e($attributedata['attributes']['attr_id'][$i][$j]); ?>"><?php echo e($attributedata["attributes"]["q_attribute"][$i][$j]); ?></label>
                                <?php else: ?>
                                    <input class="form-check-input" type="<?php echo e($attributedata['attributes']['type_id'][$i]); ?>" id="<?php echo e($attributedata['attributes']['attr_id'][$i][$j]); ?>" name="<?php echo e($attributedata['attributes']['name_id'][$i]); ?>" value="<?php echo e($attributedata['attributes']['attr_id'][$i][$j]); ?>">
                                    <label class="form-check-label" for="<?php echo e($attributedata['attributes']['attr_id'][$i][$j]); ?>"><?php echo e($attributedata["attributes"]["q_attribute"][$i][$j]); ?></label>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">変更</button>
                </div> 
            </div> 
            <div class="form-group">
                <div class="text-center">
                    <a class="btn btn-primary" href="/mypage" role="button">戻る</a>
                </div>
            </div>
        </form>

    <?php echo $__env->make('block.endtitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    $(function() {
        $('#datepicker').datepicker({
            dateFormat: 'yy-mm-dd D',
            showAnim: 'bounce',
            changeYear: true,  // 年選択プルダウン
            hangeMonth: true  
        });  
    });
</script><?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/mypage/attribute.blade.php ENDPATH**/ ?>