<?php $__env->startSection('content'); ?>
<div class="page-content mt-3">
        <div class="col-lg-6 m-auto mt-5">
            <div class="summary summary-cart text-center">
                <img style="display: inline-block" src="<?php echo e(asset('frontend/assets/check_mark.png')); ?>" alt="">
                <h3 class="pt-2">ধন্যবাদ</h3>
                <p>আপনার অর্ডার টি সফল ভাবে সাবমিট হয়েছে।</p>
                
            </div><!-- End .summary -->
        </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\insectcontrol\resources\views/frontend/order_success.blade.php ENDPATH**/ ?>