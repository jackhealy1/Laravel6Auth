<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <ul>
                    <label for="">Unread Notifications</label>
                    <?php $__empty_1 = true; $__currentLoopData = $unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li>
                        <?php if($notification->type === 'App\Notifications\PaymentReceived'): ?>
                        We have received a payment of £<?php echo e($notification->data['amount'] / 100); ?> from you
                        <?php endif; ?>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <li>You have no unread notifications at this time.</li>

                    <?php endif; ?>
                </ul>
            </div>
            <div class="card-body">
                <ul>
                    <label for="">Read Notifications</label>
                    <?php $__currentLoopData = $readNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <?php if($notification->type === 'App\Notifications\PaymentReceived'): ?>
                        We have received a payment of £<?php echo e($notification->data['amount'] / 100); ?> from you
                        <?php endif; ?>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/user/Desktop/dev/code/laravel6auth/resources/views/notifications/show.blade.php ENDPATH**/ ?>