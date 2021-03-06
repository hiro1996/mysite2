
<div class="row">
    <div class="col text-center">
        <div class="rankingconfig-word">
            <?php for($j = 0;$j < count($contentstop['attributes']['q_attribute'][$i]);$j++): ?>
                <div class="rank-class">
                    <div class="form-check">
                        <?php if($contentstop['attributes']['type_id'][$i] != 'text'): ?>
                            <label class="form-check-label" for="<?php echo e($contentstop['attributes']['attr_id'][$i][$j]); ?>">
                            <input class="form-check-input checkattr<?php echo e($i); ?>" type="<?php echo e($contentstop['attributes']['type_id'][$i]); ?>" id="<?php echo e($contentstop['attributes']['attr_id'][$i][$j]); ?>" name="<?php echo e($contentstop['attributes']['name_id'][$i]); ?>" value="<?php echo e($contentstop['attributes']['attr_id'][$i][$j]); ?>" onclick="chkButton('check<?php echo e($i); ?>')">
                            &nbsp;
                            &nbsp;
                            <?php echo e($contentstop['attributes']['q_attribute'][$i][$j]); ?></label>
                        <?php else: ?>
                            <div class="form-group">
                                <input class="form-control" type="<?php echo e($contentstop['attributes']['type_id'][$i]); ?>" id="<?php echo e($contentstop['attributes']['attr_id'][$i][$j]); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="col text-center">
        <?php if($i != 1): ?>
            <?php echo $__env->make('modal.modalbuttonprevious', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('modal.modalbuttonempty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if($i != count($contentstop['attributes']['q_explain'])): ?>
            <?php echo $__env->make('modal.modalbuttonnext', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('modal.modalbuttoncomplete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>

<div class="modal-class" id="modalcomplete">
    <div class="modal-header">
        ????????????
    </div>
    <div class="modal-body">
        ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
    </div>
    <div class="modal-footer">
        <button id="modalcompletebutton" type="button" class="btn btn-primary btn-lg" data-dismiss="modal">?????????</button>
    </div>
</div>
    
<script>
    var contentstopmodals = <?php $attributes;?>

    /*
     * ?????????????????????2???????????????????????? 
     */
    $('#show1').show();
    for(let i = 2;i <= 4;i++) {
        $('#show' + i).hide();
    }
    $('#modalcomplete').hide();

    /**
     * ?????????????????????????????????
     */
    for (let i = 1;i <= 4;i++) {
        $('#idnext' + i + '').hide();
    }
    
    $(function() {
        /*
         * ????????????????????????????????????????????????????????? 
         */
        for(let i = 1;i < 4;i++) {    
            $('#idnext' + i + '').click(function() {
                $('.modal-class').not($(this).attr('id')).hide();
                $('#show' + (i+1)).show();
            })
        }

        /*
         * ????????????????????????????????????????????????????????? 
         */
        for(let i = 4;i > 1;i--) {    
            $('#idprevious' + i + '').click(function() {
                $('.modal-class').not($(this).attr('id')).hide();
                $('#show' + (i-1)).show();
            })
        }
    })

    /*
     * ????????????????????????????????????????????????????????????
     */ 
    function chkButton($chk) {
        for (i = 1;i <= 4;i++) {
            if ($chk == 'check' + i) {
                chkList = [];
                let getCheck = document.getElementsByClassName('checkattr' + i);
                for (let i = 0; i < getCheck.length; i++) {
                    if (getCheck[i].checked) {
                        chkList.push(getCheck[i].id);
                    }
                }   
                if (chkList.length > 0) {
                    $('#idnext' + i + '').show();
                } else {
                    $('#idnext' + i + '').hide();
                }
            }
        }
    }

    
    $('.completebutton').click(function() {
        let getradio = $("input[type='radio']").filter(":checked");
        let getcheck = $("input[type='checkbox']").filter(":checked");
        let gettext = $("input[type='text']");

        getchecklist = [];
        gettypelist = [];
        gettextidlist = [];
        for (let i = 0; i < getradio.length; i++) {
            getchecklist.push(getradio[i].value);
            gettypelist.push(1);
            gettextidlist.push("NONE");
        } 
        for (let i = 0; i < getcheck.length; i++) {
            getchecklist.push(getcheck[i].value);
            gettypelist.push(2);
            gettextidlist.push("NONE");
        }   
        for (let i = 0; i < gettext.length; i++) {
            getchecklist.push(gettext[i].id);
            gettypelist.push(3);
            gettextidlist.push(gettext[i].value);
        }   

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            //DB???????????????????????????
            url: "/contentstopmodal/complete",
            type: "post",
            data: {
                modals: getchecklist,
                type: gettypelist,
                id: gettextidlist
            },
            dataType: "json",
        }).done( function() {
            $('.modal-class').not($(this).attr('id')).hide(); //??????????????????(??????????????????????????????)
            $('#modalcomplete').show();
        }).fail( function() {
            console.log("?????????");
        })
    })

    //$('#datepicker').datepicker();

    var gettext = document.querySelector('[id = "date"]');

    //????????????????????????????????? change???????????????????????????????????????????????????????????????input????????????????????????????????????????????????
    gettext.addEventListener("input",function(){
        if (this.value.length > 0) {
            $('#idnext2').show(); 
        } else {
            $('#idnext2').hide(); 
        }
    });
</script>
<?php /**PATH /Users/shiraishitoshio/Laravel/Laravel_mysite_new2/resources/views/modal/rankingconfig.blade.php ENDPATH**/ ?>