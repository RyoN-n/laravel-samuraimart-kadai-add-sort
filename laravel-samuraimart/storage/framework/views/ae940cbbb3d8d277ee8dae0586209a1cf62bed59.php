
 
 <?php $__env->startSection('content'); ?>
 <div class="container d-flex justify-content-center mt-3">
     <div class="w-75">
         <h1>ショッピングカート</h1>
 
         <div class="row">
             <div class="offset-8 col-4">
                 <div class="row">
                     <div class="col-6">
                         <h2>数量</h2>
                     </div>
                     <div class="col-6">
                         <h2>合計</h2>
                     </div>
                 </div>
             </div>
         </div>
 
         <hr>
 
         <div class="row">
             <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="col-md-2 mt-2">
                 <a href="<?php echo e(route('products.show', $product->id)); ?>">
                     <img src="<?php echo e(asset('img/dummy.png')); ?>" class="img-fluid w-100">
                 </a>
             </div>
             <div class="col-md-6 mt-4">
                 <h3 class="mt-4"><?php echo e($product->name); ?></h3>
             </div>
             <div class="col-md-2">
                 <h3 class="w-100 mt-4"><?php echo e($product->qty); ?></h3>
             </div>
             <div class="col-md-2">
                 <h3 class="w-100 mt-4">￥<?php echo e($product->qty * $product->price); ?></h3>
             </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
 
         <hr>
 
         <div class="offset-8 col-4">
             <div class="row">
                 <div class="col-6">
                     <h2>合計</h2>
                 </div>
                 <div class="col-6">
                     <h2>￥<?php echo e($total); ?></h2>
                 </div>
                 <div class="col-12 d-flex justify-content-end">
                     表示価格は税込みです
                 </div>
             </div>
         </div>

         <form method="post" action="<?php echo e(route('carts.destroy')); ?>" class="d-flex justify-content-end mt-3">
             <?php echo csrf_field(); ?>
             <input type="hidden" name="_method" value="DELETE">
             <a href="" class="btn samuraimart-favorite-button border-dark text-dark mr-3">
                 買い物を続ける
             </a>
             <?php if($total > 0): ?>
             <button type="submit" class="btn samuraimart-submit-button">購入を確定する</button>
             <?php else: ?>
             <button type="submit" class="btn samuraimart-submit-button disabled">購入を確定する</button>
             <?php endif; ?>
         </form>
     </div>
 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/carts/index.blade.php ENDPATH**/ ?>